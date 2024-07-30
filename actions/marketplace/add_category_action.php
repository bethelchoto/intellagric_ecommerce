<?php

require_once("../../controllers/marketplace/product_controller.php");
include_once("../../settings/core.php");

if(isset($_POST['addToCategory'])){
	$cname = $_POST['cat_name'];
	if(add_category_ctr($cname)==TRUE){
		$_SESSION['successnotif'] = "Category added successfully";
		header('Location: ../../view/apps/e-commerce/admin/add-product.php');
	}
}

?>