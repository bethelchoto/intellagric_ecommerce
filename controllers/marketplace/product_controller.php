<?php
/**
 * 
 *@author Bethel Panashe Choto
 *
**/

require_once(__DIR__ . "/../../classes/marketplace/product_model.php");

function add_category_ctr($cname){
    $addcat = new product_model();
    return  $addcat->add_category_mdl($cname);
}

function add_brand_ctr($bname){
    $addbrand = new product_model();
    return  $addbrand->add_brand_mdl($bname);
}

function get_all_categories_ctr() {
    $get_categories = new product_model();
    return $get_categories->get_all_cat_mdl();
}

function get_all_brands_ctr() {
    $get_brand = new product_model();
    return $get_brand->get_all_brands_mdl();
}

function get_cat_id_ctr($product_cat){
    $product_model = new product_model();
    $cat = $product_model->get_cat_id_mdl($product_cat);
    return $cat;
}

function get_brand_id_ctr($product_brand){
    $product_model = new product_model();
    $brands = $product_model->get_brand_id_mdl($product_brand);
    return $brands; 
}

function add_product_ctr($cat_id, $brand_id, $product_title, $product_price, $product_desc,
                        $newImageName, $product_keywords, $product_qnty, $product_doe, $product_discount){
    // Create an instance of the product model
    $product_model = new product_model();
    $addProduct = $product_model->add_product_mdl($cat_id, $brand_id, $product_title, 
        $product_price, $product_desc, $newImageName, $product_keywords, $product_qnty, $product_doe, $product_discount);
    return $addProduct;
}

function get_all_products_ctr() {
    $product_model = new product_model();
    return $product_model->get_all_products_mdl();
}

function get_products_by_price_ctr($minprice, $maxprice) {
	$filterproducts=new product_model();
	return $filterproducts->get_products_by_price_mdl($minprice, $maxprice);
}

function get_product_by_id_ctr($product_id){
    $product_model = new product_model();
    return $product_model->get_product_by_id_mdl($product_id);
}

//--Add to cart--//
function add_to_cart_ctr($id,$ip,$cid,$quantity){
	$addcart=new product_model();
	return $addcart->add_to_cart($id,$ip,$cid,$quantity);
}

//--Show Cart--//
function show_cart_ctr($cid,$ip){
	$showcart=new product_model();
	return $showcart->show_cart($cid,$ip);
}

function deletecartitem_ctr($cid, $pid){
	$delcart=new product_model();
	return $delcart->deletecartitem($cid, $pid);
}





?>