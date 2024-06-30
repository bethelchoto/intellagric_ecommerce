<?php

require_once(__DIR__ . "/../../../../functions/marketplace/filter_products_func.php");

?>


<!DOCTYPE html>
<html data-navigation-type="default" data-navbar-horizontal-shape="default" lang="en-US" dir="ltr">

<!-- ===============================================-->
<!--    Import html Head -->
<!-- ===============================================-->

<?php include "components/ecommerce_html_head.php" ?>

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">

      <?php 
      include "components/header.php" 
       ?>

      <?php 
      include "components/categories/farm_produce_navbar.php" 
       ?>

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-5 pb-9">
        <div class="product-filter-container"><button class="btn btn-sm btn-phoenix-secondary text-body-tertiary mb-5 d-lg-none" data-phoenix-toggle="offcanvas" data-phoenix-target="#productFilterColumn"> <span class="fa-solid fa-filter me-2"></span>Filter</button>
          <div class="row">
            <div class="col-lg-3 col-xxl-2 ps-2 ps-xxl-3">
              <div class="product-filter-offcanvas bg-body scrollbar phoenix-offcanvas phoenix-offcanvas-fixed" id="productFilterColumn">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h3 class="mb-0">Filters</h3><button class="btn d-lg-none p-0" data-phoenix-dismiss="offcanvas"><span class="uil uil-times fs-8"></span></button>
                </div><a class="btn px-0 d-block collapse-indicator" data-bs-toggle="collapse" href="#collapseAvailability" role="button" aria-expanded="true" aria-controls="collapseAvailability">
                  <div class="d-flex align-items-center justify-content-between w-100">
                    <div class="fs-8 text-body-highlight">Category</div><span class="fa-solid fa-angle-down toggle-icon text-body-quaternary"></span>
                  </div>
                </a>
                <div class="collapse show" id="collapseAvailability">
                    <?php
                      filterByCategories();
                    ?>
                </div>

                <a class="btn px-0 d-block collapse-indicator" data-bs-toggle="collapse" href="#collapseBrands" role="button" aria-expanded="true" aria-controls="collapseBrands">
                  <div class="d-flex align-items-center justify-content-between w-100">
                    <div class="fs-8 text-body-highlight">Brands</div><span class="fa-solid fa-angle-down toggle-icon text-body-quaternary"></span>
                  </div>
                </a>

                <div class="collapse show" id="collapseBrands">
                  <div class="mb-2">
                    <?php
                      filterByBrands();
                    ?>
                  </div>
                </div>
                
                <a class="btn px-0 d-block collapse-indicator" data-bs-toggle="collapse" href="#collapsePriceRange" role="button" aria-expanded="true" aria-controls="collapsePriceRange">
                  <div class="d-flex align-items-center justify-content-between w-100">
                    <div class="fs-8 text-body-highlight">Price range</div><span class="fa-solid fa-angle-down toggle-icon text-body-quaternary"></span>
                  </div>
                </a>
                <div class="collapse show" id="collapsePriceRange">
                  <div class="d-flex justify-content-between mb-3">
                    <div class="input-group me-2"><input class="form-control" type="text" aria-label="First name" placeholder="Min"><input class="form-control" type="text" aria-label="Last name" placeholder="Max"></div><button class="btn btn-phoenix-primary px-3" type="button">Go</button>
                  </div>
                </div>
              </div>
              <div class="phoenix-offcanvas-backdrop d-lg-none" data-phoenix-backdrop></div>
            </div>
            
            <div class="col-lg-9 col-xxl-10">
              <div class="row gx-3 gy-6 mb-8">
                <?php
                  displayFilterProducts();
                ?>
              </div>

              <div class="d-flex justify-content-end">
                <nav aria-label="Page navigation example">
                  <ul class="pagination mb-0">
                    <li class="page-item">
                      <a class="page-link" href="#">
                        <span class="fas fa-chevron-left"> </span>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item active" aria-current="page">
                      <a class="page-link" href="#">4</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">5</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#"> <span class="fas fa-chevron-right"></span></a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->


    <!-- ===============================================-->
    <!--    Insert Chat Here-->
    <!-- ===============================================-->

    <?php include "../../../components/small_footer.php" ?>


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
  </body>


</html>