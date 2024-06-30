<?php

require_once(__DIR__ . "/../../../../functions/marketplace/filter_products_func.php");
require_once(__DIR__ . "/../../../../functions/marketplace/bestoffers_view_func.php");
require_once(__DIR__ . "/../../../../functions/marketplace/detail_product_func.php");

?>


<!DOCTYPE html>
<html data-navigation-type="default" data-navbar-horizontal-shape="default" lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>intelliAgric</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="../../../assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../../assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../../assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../assets/img/favicons/favicon.ico">
    <link rel="manifest" href="../../../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../../../assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="../../../vendors/simplebar/simplebar.min.js"></script>
    <script src="../../../assets/js/config.js"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="../../../vendors/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="../../../vendors/dropzone/dropzone.min.css" rel="stylesheet">
    <link href="../../../vendors/glightbox/glightbox.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="../../../vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../../../../unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link href="../../../assets/css/theme-rtl.min.css" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="../../../assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
    <link href="../../../assets/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
    <link href="../../../assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
    <script>
      var phoenixIsRTL = window.config.config.phoenixIsRTL;
      if (phoenixIsRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
      } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
      }
    </script>
  </head>

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">

      <?php
        global $product_id;

        if (isset($_GET['id'])) {
          $product_id_string = $_GET['id'];
          $product_id = (int)$product_id_string;
          productById($product_id);
        } else {
          $product_id = null;
        }
        


      ?>

      <?php 
        include "components/header.php" 
      ?>

      <?php 
        include "components/categories/farm_produce_navbar.php" 
      ?>

      <div class="pt-5 pb-9">

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-0">
          <div class="container-small">
            <nav class="mb-3" aria-label="breadcrumb">
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#">Brand</a></li>
                <li class="breadcrumb-item"><a href="#">Category</a></li>
              </ol>
            </nav>

            <div class="row g-5 mb-5 mb-lg-8" data-product-details="data-product-details">
              <div class="col-12 col-lg-6">
                <div class="row g-3 mb-3">
                  <div class="col-12 col-md-2 col-lg-12 col-xl-2">
                    <div class="swiper-products-thumb swiper swiper theme-slider overflow-visible" id="swiper-products-thumb"></div>
                  </div>
                  <div class="col-12 col-md-10 col-lg-12 col-xl-10">
                    <div class="d-flex align-items-center border border-translucent rounded-3 text-center p-5 h-100">
                      <div class="swiper swiper theme-slider" data-thumb-target="swiper-products-thumb" data-products-swiper='{"slidesPerView":1,"spaceBetween":16,"thumbsEl":".swiper-products-thumb"}'></div>
                    </div>
                  </div>
                </div>
                <div class="d-flex">


                    <a href="../../../../actions/marketplace/add_cart_action.php?pid=<?=$product_id?>&quantity=1" class="btn btn-lg btn-warning rounded-pill w-100 fs-9 fs-sm-8">Add to cart</a>



                    <span class="fas fa-shopping-cart me-2"></span>Add to cart
                  </a>
                  <!-- <li><a title="Add To Cart" href="../actions/addcart_action.php?pid=<?=$products[$i]['product_id']?>&quantity=1"><span class="ti-shopping-cart"></span></a></li> -->
                </div>
              </div>

              <div class="col-12 col-lg-6">
                <div class="d-flex flex-column justify-content-between h-100">
                  <div>

                  <?php 

                    productById($product_id);
                  ?>

                  </div>

                  <div>


                    <div class="mb-3">
                      <div class="d-flex product-color-variants" data-product-color-variants="data-product-color-variants">
                      <?php 
                        if (isset($_GET['id'])) {
                          $product_id_string = $_GET['id'];
                          $product_id = (int)$product_id_string;
                          productImg($product_id);
                        }
                      ?>
                      </div>
                    </div>

                    <div class="row g-3 g-sm-5 align-items-end">
                      <div class="col-12 col-sm">
                        <p class="fw-semibold mb-2 text-body">Quantity : </p>
                        <div class="d-flex justify-content-between align-items-end">
                          <div class="d-flex flex-between-center" data-quantity="data-quantity"><button class="btn btn-phoenix-primary px-3" data-type="minus"><span class="fas fa-minus"></span></button><input class="form-control text-center input-spin-none bg-transparent border-0 outline-none" style="width:50px;" type="number" min="1" value="2" /><button class="btn btn-phoenix-primary px-3" data-type="plus"><span class="fas fa-plus"></span></button></div><button class="btn btn-phoenix-primary px-3 border-0"><span class="fas fa-share-alt fs-7"></span></button>
                        </div>
                      </div>
                    </div>


                  </div>
                </div>
              </div>
            </div>
          </div><!-- end of .container-->
        </section><!-- <section> close ============================-->
        <!-- ============================================-->
      </div>

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0 mb-9">
        <div class="container">
          <div class="d-flex flex-between-center mb-3">
            <div>
              <h3>Similar Products</h3>
              <p class="mb-0 text-body-tertiary fw-semibold">Essential for a better life</p>
            </div><button class="btn btn-sm btn-phoenix-primary">View all</button>
          </div>


          <div class="swiper-theme-container products-slider">
            <div class="swiper swiper theme-slider" data-swiper='{"slidesPerView":1,"spaceBetween":16,"breakpoints":{"450":{"slidesPerView":2,"spaceBetween":16},"768":{"slidesPerView":3,"spaceBetween":16},"992":{"slidesPerView":4,"spaceBetween":16},"1200":{"slidesPerView":5,"spaceBetween":16},"1540":{"slidesPerView":6,"spaceBetween":16}}}'>
              <div class="swiper-wrapper">
                <!-- to be changed to similar products -->
                <?php 
                  displayBestOffers()
                ?>
              </div>
            </div>


            <div class="swiper-nav">
              <div class="swiper-button-next"><span class="fas fa-chevron-right nav-icon"></span></div>
              <div class="swiper-button-prev"><span class="fas fa-chevron-left nav-icon"></span></div>
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->


      <?php include "../../../components/footer.php" ?>

      <?php include "../../../components/small_footer.php" ?>

    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="../../../vendors/popper/popper.min.js"></script>
    <script src="../../../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../../../vendors/anchorjs/anchor.min.js"></script>
    <script src="../../../vendors/is/is.min.js"></script>
    <script src="../../../vendors/fontawesome/all.min.js"></script>
    <script src="../../../vendors/lodash/lodash.min.js"></script>
    <script src="../../../../../../polyfill.io/v3/polyfill.min58be.js?features=window.scroll"></script>
    <script src="../../../vendors/list.js/list.min.js"></script>
    <script src="../../../vendors/feather-icons/feather.min.js"></script>
    <script src="../../../vendors/dayjs/dayjs.min.js"></script>
    <script src="../../../vendors/swiper/swiper-bundle.min.js"></script>
    <script src="../../../vendors/dropzone/dropzone.min.js"></script>
    <script src="../../../vendors/rater-js/index.js"></script>
    <script src="../../../vendors/glightbox/glightbox.min.js"> </script>
    <script src="../../../assets/js/phoenix.js"></script>
  </body>


<!-- Mirrored from prium.github.io/phoenix/v1.15.0/apps/e-commerce/landing/product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Mar 2024 20:34:48 GMT -->
</html>