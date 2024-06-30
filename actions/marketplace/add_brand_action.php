<?php

require_once("../../controllers/marketplace/product_controller.php");

if(isset($_POST['addToBrand'])){
	$bname = $_POST['brand_name'];
	if(add_brand_ctr($bname)==TRUE){
		$_SESSION['successnotif'] = "Brand added successfully";
		header('Location: ../../view/apps/e-commerce/admin/add-product.php');
	}
}

?>