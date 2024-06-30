<?php

/**
 * 
 *@author Bethel Panashe Choto
 *
**/

require_once(__DIR__ . "/../../controllers/marketplace/product_controller.php");

// select category function
function selectAllCategories(){
    $shopCats = get_all_categories_ctr(); 
    foreach($shopCats as $shopCat) : ?>
        <option><?php echo ($shopCat["cat_name"])?></option>
    <?php endforeach;
}

function selectAllBrands(){
    $shopBrands = get_all_brands_ctr(); 
    foreach($shopBrands as $shopBrand) : ?>
        <option><?php echo ($shopBrand["brand_name"])?></option>
    <?php endforeach;
}




?>           