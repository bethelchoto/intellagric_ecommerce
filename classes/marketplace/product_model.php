<?php

/**
 * 
 *@author Bethel Panashe Choto
 *
**/

//import database class
require_once(__DIR__ . "/../../settings/db_class.php");
include_once(__DIR__ . "/../../settings/core.php");

class product_model extends db_connection
{
    public function add_category_mdl($cname)
    {
        $ndb = new db_connection();	
        $sql = "INSERT INTO `categories` (`cat_name`) VALUES ('$cname')";
        return $this->db_query($sql);
    }

    public function add_brand_mdl($bname)
    {
        $ndb = new db_connection();	
        $sql = "INSERT INTO `brands` (`brand_name`) VALUES ('$bname')";
        return $this->db_query($sql);
    }

    public function get_all_cat_mdl(){
        $sql = "SELECT * FROM categories";
        $allcategories = $this->db_fetch_all($sql);
        return $allcategories;
    }

    public function get_all_brands_mdl(){
        $sql = "SELECT * FROM brands";
        $allbrands = $this->db_fetch_all($sql);
        return $allbrands;
    }

    public function get_cat_id_mdl($product_cat) {
        $sql = "SELECT * FROM `categories` WHERE `cat_name` = '$product_cat'";
        $category = $this->db_fetch_one($sql);
        return $category;
    }

    public function get_brand_id_mdl($product_brand){
        $sql = "SELECT * FROM `brands` WHERE `brand_name` = '$product_brand'";
        $brand = $this->db_fetch_one($sql);
        return $brand;
    }

    /*Insert Product*/
    public function add_product_mdl($cat_id, $brand_id, $product_title, $product_price, $product_desc, $newImageName, $product_keywords, $product_qnty, $product_doe, $product_discount) {
        $ndb = new db_connection();	
        $admin_id = $_SESSION['role'];
        $sql = "INSERT INTO `products` (`product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`, `product_qnty` , `product_doe`, `product_discount`, `admin_id`) VALUES ('$cat_id', '$brand_id','$product_title', '$product_price', '$product_desc', '$newImageName', '$product_keywords', '$product_qnty', '$product_doe', '$product_discount', '$admin_id')";
        return $this->db_query($sql);
    }

    /* fetch all products */
    public function get_all_products_mdl(){
        $sql = "SELECT * FROM `products` order by rand() LIMIT 0,20";
        return $this->db_fetch_all($sql);
    }

    public function get_products_by_price_mdl($minprice, $maxprice)
	{
		$sql = "SELECT * FROM `products` WHERE `product_price` BETWEEN '$minprice' AND '$maxprice'";
		return $this->db_fetch_all($sql);
	}
    
    public function get_product_by_id_mdl($product_id){
        $sql = "SELECT * FROM `products` WHERE `product_id` = '$product_id'";
        return $this->db_fetch_one($sql);
    }

	public function add_to_cart($id,$ip,$cid,$quantity)
	{
		$sql="INSERT INTO `cart`(`p_id`, `ip_add`, `u_id`, `qty`) select '$id','$ip','$cid','$quantity' from dual WHERE NOT EXISTS(Select * from cart where `p_id`='$id' and `u_id`='$cid')";
		$this->db_query($sql);
		
		if (mysqli_affected_rows($this->db)==0){
			$sql1="UPDATE `cart` set `qty`=`qty`+'$quantity' where `p_id`='$id' and `u_id`='$cid'";
			return $this->db_query($sql1);
		} else{
			return $this->db_query($sql);
		}
    }

    public function show_cart($cid,$ip)
	{
		$sql="SELECT * from `cart` where `u_id`='$cid' ";
		return $this->db_fetch_all($sql);
	}



    public function deletecartitem($user_id){
        $sql = "DELETE FROM `cart` WHERE u_id = " . $user_id;
        return $this->db_query($sql);
    }

    public function user_receipt_mdl($user_id){
        // Prepare SQL statement
        $orders_sql = "SELECT * FROM `payment`
        JOIN `user` ON payment.user_id = user.user_id 
        JOIN `orders` ON payment.order_id = orders.order_id 

        WHERE payment.user_id = '$user_id'
        ORDER BY payment.order_id DESC LIMIT 1";
        $orders = $this->db_fetch_one($orders_sql);
        return $orders;
    }


    function  products_receipt_mdl($order_id){
        $sql = "SELECT * FROM `orderdetails` 
        JOIN `products` ON orderdetails.product_id = products.product_id
        JOIN `categories` ON products.product_cat = categories.cat_id
        JOIN `payment` ON orderdetails.order_id = payment.order_id
        JOIN `orders` ON orderdetails.order_id = orders.order_id
        JOIN `user` ON orders.user_id = user.user_id

        WHERE orderdetails.order_id = '$order_id'";
        // Fetch user record
        $order_products = $this->db_fetch_all($sql);
        return $order_products;
    }


    function add_orders_mdl($user_id, $data){
        // Select cart items based on the user_id
        $cart_sql = "SELECT * FROM `cart` WHERE `u_id` = '$user_id'";
        $cart_items = $this->db_fetch_all($cart_sql); 

        // Check if cart_items exist
        if (!empty($cart_items)) {
            $invoice_no = mt_rand();
            $order_date = date("Y-m-d H:i:s");
            $order_status = 'pending';
            $currency = $data['data']['currency'];
            $custom_fields = $data['data']['metadata']['custom_fields'];
            $amnt = null;
            foreach ($custom_fields as $field) {
                if ($field['variable_name'] === 'amount') {
                    $amnt = $field['value'];
                    break;
                }
            }

            $order_sql = "INSERT INTO `orders` (`user_id`, `invoice_no`, `order_date`, `order_status`) 
                          VALUES ('$user_id', '$invoice_no', '$order_date', '$order_status')";
            $this->db_query($order_sql); 

            $orders_sql = "SELECT * FROM `orders` WHERE `user_id` = '$user_id' ORDER BY `order_id` DESC LIMIT 1";
            $orders = $this->db_fetch_one($orders_sql);
            $order_id = $orders['order_id'];

            $payment_sql = "INSERT INTO `payment` (`amt`, `user_id`, `order_id`, `currency`, `payment_date`) 
            VALUES ('$amnt', '$user_id', '$order_id', '$currency' , '$order_date')";
            $this->db_query($payment_sql); 
            
            foreach ($cart_items as $cart_item) {
                $product_id = $cart_item['p_id'];
                $quantity = $cart_item['qty'];
                $sql = "SELECT * FROM `orders` WHERE `user_id` = '$user_id' ORDER BY `order_id` DESC LIMIT 1";
                $orders = $this->db_fetch_one($sql);
                $order_id = $orders['order_id'];
                // Save order details to order_details table
                $order_details_sql = "INSERT INTO `orderdetails` (`order_id`, `product_id`, `qty`) 
                                      VALUES ('$order_id', '$product_id', '$quantity')";
                $this->db_query($order_details_sql); 
            }
            // Return true or any other indication of success if needed
            return true;
        } else {
            // Return false or handle the case where there are no items in the cart
            return false;
        }
    }
}

?>