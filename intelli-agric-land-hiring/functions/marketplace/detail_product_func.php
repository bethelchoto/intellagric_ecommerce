<?php
// controller
require_once(__DIR__ . "/../../controllers/marketplace/product_controller.php");


function productById($product_id){
        $product_detail = get_product_by_id_ctr($product_id);

        if (is_array($product_detail)) 
        { ?>
                <h3 class="mb-3 lh-sm"><?php echo $product_detail['product_title']; ?></h3>
                <p class="mb-5"> <?php echo $product_detail['product_desc']; ?></p>
                <div class="d-flex flex-wrap align-items-center">
                <h1 class="me-3">GHc <?php echo $product_detail['product_price']; ?></h1>
                <p class="text-body-quaternary text-decoration-line-through fs-6 mb-0 me-3"> GHc <?php echo $product_detail['product_price']; ?></p>
                <p class="text-warning fw-bolder fs-6 mb-0"><?php echo $product_detail['product_discount']; ?> % </p>
                </div>
                <p class="text-success fw-semibold fs-7 mb-2">Expiry Date <?php echo $product_detail['product_doe']; ?></p>


        <?php
        } else {
                $_SESSION['product_not_found'] = "No product details found.";
        } 
}

function productImg($product_id){
        $product_detail = get_product_by_id_ctr($product_id);

        if (is_array($product_detail)) 
        { ?>

                <div class="rounded-1 border border-translucent me-2 active" data-variant="Blue" data-products-images='["../../../../upload/marketplace/<?php echo $product_detail['equip_doc']; ?>","../../../../upload/marketplace/<?php echo $product_detail['product_image']; ?>","../../../../upload/marketplace/<?php echo $product_detail['product_image']; ?>"]'><img src="../../../../upload/marketplace/<?php echo $product_detail['product_image']; ?>" alt="" width="38" /></div>
               
        <?php
        } else {
                $_SESSION['product_not_found'] = "No product details found.";
        } 

        
        
}


?>