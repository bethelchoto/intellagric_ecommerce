<?php
include_once("../../controllers/marketplace/product_controller.php");
include_once("../../settings/core.php");

if(isset($_GET['p_id'])){
	$cid=$_GET['c_id'];
	$pid=$_GET['p_id'];
	if(deletecartitem_ctr($cid,$pid)==TRUE){
        header('Location: ../../view/apps/e-commerce/landing/cart.php?id='.$cid);
    }
    else{
	    header('Location: ../../view/apps/e-commerce/landing/cart.php?id='.$cid);
    }
}
else{
	header('Location:../view/index.php');
}

?>