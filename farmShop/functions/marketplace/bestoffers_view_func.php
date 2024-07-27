<?php
// controller
require_once(__DIR__ . "/../../controllers/marketplace/product_controller.php");

function displayBestOffers() {
    $bestoffers = get_all_products_ctr(); 

    foreach ($bestoffers as $bestoffer): ?>
        <div class="swiper-slide">
            <div class="position-relative text-decoration-none product-card h-100">
                <div class="d-flex flex-column justify-content-between h-100">
                    <div>
                        <div class="border border-1 border-translucent rounded-3 position-relative mb-3">
                            <button class="btn btn-wish btn-wish-primary z-2 d-toggle-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist">
                                <span class="fas fa-heart d-block-hover"></span><span class="far fa-heart d-none-hover"></span>
                            </button>
                            <img class="img-fluid" src="../../../../upload/marketplace/<?php echo $bestoffer['product_image']; ?>" alt="" />
                        </div>
                        <a class="stretched-link" href="product-details.php?id=<?php echo $bestoffer['product_id']; ?>">
                            <h6 class="mb-2 lh-sm line-clamp-3 product-name"><?php echo $bestoffer['product_title']; ?></h6>
                        </a>
                        <p class="fs-9">
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star text-warning"></span>
                        </p>
                    </div>
                    <div>
                        <h6 class="text-success lh-1 mb-0"><?php echo $bestoffer['product_discount']; ?>% off</h6>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach;
}





?>