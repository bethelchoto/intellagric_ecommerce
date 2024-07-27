<?php

require_once(__DIR__ . "/../../../../functions/marketplace/admin_product_function.php");

?>

<!DOCTYPE html>
<html data-navigation-type="default" data-navbar-horizontal-shape="default" lang="en-US" dir="ltr">

  <!-- ===============================================-->
  <!--    Import html Head -->
  <!-- ===============================================-->
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
    <link href="../../../vendors/dropzone/dropzone.min.css" rel="stylesheet">
    <link href="../../../vendors/choices/choices.min.css" rel="stylesheet">
    <link href="../../../vendors/flatpickr/flatpickr.min.css" rel="stylesheet">
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

    <?php include "components/marketshop_navbar.php"  ?>

      <div class="content">

        <form class="mb-9" method="post" action="../../../../actions/marketplace/add_product.php" enctype='multipart/form-data'>
          <div class="row g-3 flex-between-end mb-5">
            <div class="col-auto">
              <h2 class="mb-2">Add a equipment</h2>
            </div>
            <div class="col-auto"><button class="btn btn-phoenix-secondary me-2 mb-2 mb-sm-0" type="button">Discard</button><button class="btn btn-phoenix-primary me-2 mb-2 mb-sm-0" type="button">Save draft</button><button class="btn btn-primary mb-2 mb-sm-0 " name="addToProduct" type="submit">Publish product</button></div>
          </div>
          <div class="row g-5">
            <div class="col-12 col-xl-8">
              <h4 class="mb-3">Product Title</h4><input class="form-control mb-5" name="product_title" name="product_title" type="text" placeholder="Write title here..." />
              
              <div class="mb-6">
                <h4 class="mb-3"> Product Description</h4><textarea class="form-control mb-5" id="product_desc"  name="product_desc" required name="content" style="width: 100%; height: 5rem;" data-tinymce='{"height":"20rem" ,"placeholder":"Write a description here..."}'></textarea>
              </div>

              <!-- <form action="your_upload_script.php" method="POST" enctype="multipart/form-data"> -->
              <h4 class="mb-3">Display images</h4>
              <div class="form-group" style="margin-bottom: 20px;">
                  <input type="file" name="display_image" id="display_image" accept=".jpg, .jpeg, .png" class="form-control">
              </div>

              <h4 class="mb-3">Equip Document images</h4>
              <div class="form-group" style="margin-bottom: 20px;">
                  <input type="file" name="equip_image" id="equip_image" accept=".jpg, .jpeg, .png" class="form-control">
              </div>

              <div class="dropzone dropzone-multiple p-0 mb-5" id="my-awesome-dropzone" data-dropzone="data-dropzone">
                <div class="fallback"> <input type="file" name="file" id="image" accept=".jpg, .jpeg, .png" class="form-control"></div>
                <div class="dz-preview d-flex flex-wrap">
                  <div class="border border-translucent bg-body-emphasis rounded-3 d-flex flex-center position-relative me-2 mb-2" style="height:80px;width:80px;">
                    <img class="dz-image" src="../../../assets/img/products/23.png" alt="..." data-dz-thumbnail="data-dz-thumbnail" />
                  <a class="dz-remove text-body-quaternary" href="#!" data-dz-remove="data-dz-remove"><span data-feather="x"></span></a></div>
                </div>
                <div class="dz-message text-body-tertiary text-opacity-85" data-dz-message="data-dz-message">Drag your photo here<span class="text-body-secondary px-1">or</span>
                <button class="btn btn-link p-0" type="button">Browse from device</button><br />
                <img class="mt-3 me-2" src="../../../assets/img/icons/image-icon.png" width="40" alt="" />
              </div>
              </div>
              <h4 class="mb-3">Inventory</h4>
              <div class="row g-0 border-top border-bottom">
                <div class="col-sm-4">
                  <div class="nav flex-sm-column border-bottom border-bottom-sm-0 border-end-sm fs-9 vertical-tab h-100 justify-content-between" role="tablist" aria-orientation="vertical">
                    <a class="nav-link border-end border-end-sm-0 border-bottom-sm text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center active" id="pricingTab" data-bs-toggle="tab" data-bs-target="#pricingTabContent" role="tab" aria-controls="pricingTabContent" aria-selected="true"> 
                      <span class="me-sm-2 fs-4 nav-icons" data-feather="tag">

                      </span>
                      <span class="d-none d-sm-inline">Pricing</span>
                    </a>
                    <a class="nav-link border-end border-end-sm-0 border-bottom-sm text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center" id="restockTab" data-bs-toggle="tab" data-bs-target="#restockTabContent" role="tab" aria-controls="restockTabContent" aria-selected="false"> 
                      <span class="me-sm-2 fs-4 nav-icons" data-feather="package">

                      </span>
                      <span class="d-none d-sm-inline">Restock</span>
                    </a>
                    <a class="nav-link border-end border-end-sm-0 border-bottom-sm text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center" id="attributesTab" data-bs-toggle="tab" data-bs-target="#attributesTabContent" role="tab" aria-controls="attributesTabContent" aria-selected="false"> 
                      <span class="me-sm-2 fs-4 nav-icons" data-feather="sliders">

                      </span><span class="d-none d-sm-inline">Attributes</span>
                    </a>
                  </div>
                </div>
                <div class="col-sm-8">
                  <div class="tab-content py-3 ps-sm-4 h-100">
                    <div class="tab-pane fade show active" id="pricingTabContent" role="tabpanel">
                      <h4 class="mb-3 d-sm-none">Pricing</h4>
                      <div class="row g-3">
                        <div class="col-12 col-lg-6">
                          <h5 class="mb-2 text-body-highlight">Regular price</h5><input class="form-control" name="product_price" id="product_price" type="text" placeholder="GHc" />
                        </div>
                        <div class="col-12 col-lg-6">
                          <h5 class="mb-2 text-body-highlight">Discounted price</h5><input class="form-control"  name="product_discount" id="product_discount" type="text" placeholder="GHc" />
                        </div>
                      </div>
                    </div>

                    <div class="tab-pane fade h-100" id="restockTabContent" role="tabpanel" aria-labelledby="restockTab">
                      <div class="d-flex flex-column h-100">
                        <h5 class="mb-3 text-body-highlight">Add to Stock</h5>
                        <div class="row g-3 flex-1 mb-4">
                          <div class="col-sm-7"><input class="form-control" type="number" placeholder="Quantity" /></div>
                          <div class="col-sm"><button class="btn btn-primary" type="button"><span class="fa-solid fa-check me-1 fs-10"></span>Confirm</button></div>
                        </div>
                        <table>
                          <thead>
                            <tr>
                              <th style="width: 200px;"></th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="text-body-highlight fw-bold py-1">Product in stock now:</td>
                              <td class="text-body-tertiary fw-semibold py-1">$1,090<button class="btn p-0" type="button"><span class="fa-solid fa-rotate text-body ms-1" style="--phoenix-text-opacity: .6;"></span></button></td>
                            </tr>
                            <tr>
                              <td class="text-body-highlight fw-bold py-1">Product in transit:</td>
                              <td class="text-body-tertiary fw-semibold py-1">5000</td>
                            </tr>
                            <tr>
                              <td class="text-body-highlight fw-bold py-1">Last time restocked:</td>
                              <td class="text-body-tertiary fw-semibold py-1">30th June, 2021</td>
                            </tr>
                            <tr>
                              <td class="text-body-highlight fw-bold py-1">Total stock over lifetime:</td>
                              <td class="text-body-tertiary fw-semibold py-1">20,000</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="attributesTabContent" role="tabpanel" aria-labelledby="attributesTab">
                      <h5 class="mb-3 text-body-highlight">DOE</h5>
                      <div class="form-check">
                        <input class="form-check-input" id="productCheck" type="checkbox" name="product_doe_check" checked="checked"/>
                        <label class="form-check-label text-body fs-8" for="productCheck">Expiry Date of Product</label>
                        <input class="form-control inventory-attributes datetimepicker" id="inventory" type="text" name="product_doe" style="max-width: 350px;" placeholder="d/m/y" data-options='{"disableMobile":true}' />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-xl-4">
              <div class="row g-2">
                <div class="col-12 col-xl-12">
                  <div class="card mb-3">
                    <div class="card-body">
                      <h4 class="card-title mb-4">Organize</h4>
                      <div class="row gx-3">
                        <div class="col-12 col-sm-6 col-xl-12">
                          <div class="mb-4">
                            <div class="d-flex flex-wrap mb-2">
                              <h5 class="mb-0 text-body-highlight me-2">Category</h5><a class="fw-bold fs-9" href="add-category.php">Add new category</a>
                            </div>
                            <select class="form-select mb-3" aria-label="category" id="product_cat" name="product_cat" required>
                              <option value=""><?php echo selectAllCategories() ?></option>
                            </select>
                          </div>
                        </div>
                        <div class="col-12 col-sm-6 col-xl-12">
                          <div class="mb-4">
                            <div class="d-flex flex-wrap mb-2">
                              <h5 class="mb-0 text-body-highlight me-2">Brand</h5><a class="fw-bold fs-9" href="add-brand.php">Add new brand</a>
                            </div>
                            <select class="form-select mb-3" aria-label="category" id="product_brand" name="product_brand" required>
                              <option value=""><?php echo selectAllBrands() ?></option>
                            </select>
                          </div>
                        </div>
                        <div class="col-12 col-sm-6 col-xl-12">
                          <div class="mb-4">
                            <h5 class="mb-2 text-body-highlight">Keywords</h5><input class="form-control mb-xl-3" id="product_keywords" name="product_keywords" type="text" placeholder="keywords" />
                          </div>
                        </div>
                        <div class="col-12 col-sm-6 col-xl-12">
                          <div class="mb-4">
                            <h5 class="mb-2 text-body-highlight">Quantity</h5><input class="form-control mb-xl-3" name="product_qnty" id="product_qnty" type="text" placeholder="quantity" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>

    <!-- ===============================================-->
    <!--    Import footer Content-->
    <!-- ===============================================-->

      </div>
    <!-- ===============================================-->
    <!--    Import Chat Content-->
    <!-- ===============================================-->
    <?php include "../landing/components/chat.php" ?>

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
    <script src="../../../vendors/tinymce/tinymce.min.js"></script>
    <script src="../../../vendors/dropzone/dropzone.min.js"></script>
    <script src="../../../vendors/choices/choices.min.js"></script>
    <script src="../../../vendors/flatpickr/flatpickr.min.js"></script>
    <script src="../../../assets/js/phoenix.js"></script>
  </body>


</html>