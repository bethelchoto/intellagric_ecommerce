<?php
require_once(__DIR__ . "/../../../../functions/marketplace/bestoffers_view_func.php");
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
    <link href="../../../vendors/swiper/swiper-bundle.min.css" rel="stylesheet">
  </head>

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">

      <?php 
        include "components/header.php"  
      ?>



      <?php include "components/categories/farm_produce_navbar.php"  ?>

      <div class="ecommerce-homepage pt-5 mb-9">

        <?php
        //  include "components/shopnames.php" 
          ?>


        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-0 px-xl-3">
          <div class="container px-xl-0 px-xxl-3">
            <div class="row g-3 mb-9">
              <div class="col-12">
                <div class="whooping-banner w-100 rounded-3 overflow-hidden">
                  <div class="bg-holder z-n1 product-bg" style="background-image:url(../../../assets/img/market_place/banner.png);background-position: bottom right;"></div>
                  <div class="bg-holder z-n1 shape-bg" style="background-image:url(../../../assets/img/e-commerce/whooping_banner_shape_2.png);background-position: bottom left;"></div>
                  <div class="banner-text" data-bs-theme="light">
                    <h2 class="text-warning-light fw-bolder fs-lg-3 fs-xxl-2">Whooping <span class="gradient-text">60% </span>Off</h2>
                    <h3 class="fw-bolder fs-lg-5 fs-xxl-3 text-white">on everyday items</h3>
                  </div><a class="btn btn-lg btn-primary rounded-pill banner-button" href="#!">Shop Now</a>
                </div>
              </div>
            </div>


            <!-- ===============================================-->
            <!--    Best Offers  Content-->
            <!-- ===============================================-->
            <div class="mb-6 pb-5">
              <div class="d-flex flex-between-center mb-3">
                <h3>Best Offers</h3><a class="fw-bold d-none d-md-block" href="#!">Explore more<span class="fas fa-chevron-right fs-9 ms-1"></span></a>
              </div>
              <div class="swiper-theme-container products-slider">
                <div class="swiper swiper theme-slider" data-swiper='{"slidesPerView":1,"spaceBetween":16,"breakpoints":{"450":{"slidesPerView":2,"spaceBetween":16},"576":{"slidesPerView":3,"spaceBetween":20},"768":{"slidesPerView":4,"spaceBetween":20},"992":{"slidesPerView":5,"spaceBetween":20},"1200":{"slidesPerView":6,"spaceBetween":16}}}'>
                  <div class="swiper-wrapper">

                    <?php 
                      displayBestOffers()
                    ?>
      
                  </div>
                </div>

                <div class="swiper-nav">
                  <div class="swiper-button-next"><span class="fas fa-chevron-right nav-icon"></span></div>
                  <div class="swiper-button-prev"><span class="fas fa-chevron-left nav-icon"></span></div>
                </div>
              </div><a class="fw-bold d-md-none" href="#!">Explore more<span class="fas fa-chevron-right fs-9 ms-1"></span></a>
            </div>



          </div>
        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->

      </div>

      <!-- ===============================================-->
      <!--    Import ChatBot from components-->
      <!-- ===============================================-->
      
      <?php include "components/chat.php" ?>
      
    <!-- ===============================================-->
    <!--    Import Footer From Components -->
    <!-- ===============================================-->

    <?php include "../../../components/small_footer.php"  ?>


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
    <script src="../../../assets/js/phoenix.js"></script>
    <script src="../../../vendors/swiper/swiper-bundle.min.js"></script>
  </body>


</html>