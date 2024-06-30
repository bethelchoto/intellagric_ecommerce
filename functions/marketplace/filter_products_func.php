<?php
// controller
require_once(__DIR__ . "/../../controllers/marketplace/product_controller.php");

function displayFilterProducts(){
    $filteredproducts = get_all_products_ctr(); 

    foreach ($filteredproducts as $filteredproduct): ?>

        <div class="col-12 col-sm-6 col-md-4 col-xxl-2">
            <div class="product-card-container h-100">
            <div class="position-relative text-decoration-none product-card h-100">
                <div class="d-flex flex-column justify-content-between h-100">
                <div>
                    <div class="border border-1 border-translucent rounded-3 position-relative mb-3"><button class="btn btn-wish btn-wish-primary z-2 d-toggle-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover"></span><span class="far fa-heart d-none-hover"></span></button>
                    <img class="img-fluid" src="../../../../upload/marketplace/<?php echo $filteredproduct["product_image"];?>" alt="" /></div><a class="stretched-link" href="product-details.html"> 
                    <h6 class="mb-2 lh-sm line-clamp-3 product-name"><?php echo $filteredproduct["product_title"]?></h6>
                    </a>
                    <!-- <p class="fs-9"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="text-body-quaternary fw-semibold ms-1">(67 people rated)</span></p> -->
                </div>
                <div>
                    <p class="fs-9 text-body-tertiary mb-2">Best Before <?php echo $filteredproduct["product_doe"]?></p>
                    <div class="d-flex align-items-center mb-1">
                    <p class="me-2 text-body text-decoration-line-through mb-0">GHc <?php echo $filteredproduct["product_price"]?></p>
                    <h3 class="text-body-emphasis mb-0"><?php echo $filteredproduct["product_price"]?></h3>
                    </div>
                    <p class="text-body-tertiary fw-semibold fs-9 lh-1 mb-0">2 colors</p>
                </div>
                </div>
            </div>
            </div>
        </div>

    <?php endforeach; 
} 

function filterByBrands(){
    $allbrands = get_all_brands_ctr(); 

    foreach ($allbrands as $allbrand): ?>
        <div class="form-check mb-0"><input class="form-check-input mt-0" id="flexCheckBlackberry" type="checkbox" name="brands" checked><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="flexCheckBlackberry"><?php echo $allbrand["brand_name"]?>
        </label></div>
    <?php endforeach; 
}

function filterByCategories(){
    $filterbyCategories = get_all_categories_ctr(); 

    foreach ($filterbyCategories as $filterbyCategorie): ?>
        <div class="form-check mb-0"><input class="form-check-input mt-0" id="flexCheckBlackberry" type="checkbox" name="brands" checked><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="flexCheckBlackberry"><?php echo $filterbyCategorie["cat_name"]?>
        </label></div>
    <?php endforeach; 
}

?>