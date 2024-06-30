<?php

/**
 * 
 *@author Bethel Panashe Choto
 *
**/

//import database class
require_once(__DIR__ . "/../../settings/db_class.php");
require_once(__DIR__ . "/../../settings/core.php");

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

    public function deletecartitem($cid,$pid)
    {
        $sql="DELETE FROM `cart` WHERE `u_id`='$cid' and `p_id`='$pid'";
        return $this->db_query($sql);
    }





}

?>