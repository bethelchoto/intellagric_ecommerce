<!DOCTYPE html>
<html data-navigation-type="default" data-navbar-horizontal-shape="default" lang="en-US" dir="ltr">

  
<?php 
include "components/ecommerce_html_head.php";
include_once("../../../../functions/marketplace/cart_view_func.php");
?>


  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">

    <?php 
      include "components/header.php"; 
      include "components/categories/farm_produce_navbar.php"; 

      if(isset($_GET['customer_id'])) {
          $customer_id = $_GET['customer_id'];

          $receipt_details = user_receipt_ctr($customer_id);

          $order_id = $receipt_details["order_id"];

      }

    ?>

    <?php

    global $subTotal;
    global $Total;
    $count = 1;

    ?>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-5 pb-9 bg-body-emphasis dark__bg-gray-1200 border-top">
        <div class="container-small">

          <nav class="mb-2" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="#!">Page 1</a></li>
              <li class="breadcrumb-item"><a href="#!">Page 2</a></li>
              <li class="breadcrumb-item active" aria-current="page">Default</li>
            </ol>
          </nav>

          <div class="d-flex justify-content-between align-items-end mb-4">
            <h2 class="mb-0">Invoice</h2>
            <div><button class="btn btn-phoenix-secondary me-2"><span class="fa-solid fa-download me-sm-2"></span><span class="d-none d-sm-inline-block">Download Invoice</span></button><button class="btn btn-phoenix-secondary"><span class="fa-solid fa-print me-sm-2"></span><span class="d-none d-sm-inline-block">Print</span></button></div>
          </div>

          <?php
            if(isset($_GET['id'])){
              $id = $_GET['id'];
            }
          ?>


          <div class="bg-body dark__bg-gray-1100 p-4 mb-4 rounded-2">
            <div class="row g-4">
              <div class="col-12 col-lg-3">
                <div class="row g-4 g-lg-2">
                  <div class="col-12 col-sm-6 col-lg-12">
                    <div class="row align-items-center g-0">
                      <div class="col-auto col-lg-6 col-xl-5">
                        <h6 class="mb-0 me-3">Invoice No :</h6>
                      </div>
                      <div class="col-auto col-lg-6 col-xl-7">
                        <p class="fs-9 text-body-secondary fw-semibold mb-0">#<?php echo $receipt_details["invoice_no"]; ?></p>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-sm-6 col-lg-12">
                    <div class="row align-items-center g-0">
                      <div class="col-auto col-lg-6 col-xl-5">
                        <h6 class="me-3">Order No :</h6>
                      </div>
                      <div class="col-auto col-lg-6 col-xl-7">
                        <p class="fs-9 text-body-secondary fw-semibold mb-0">#<?php echo $receipt_details["order_id"]; ?></p>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-sm-6 col-lg-12">
                    <div class="row align-items-center g-0">
                      <div class="col-auto col-lg-6 col-xl-5">
                        <h6 class="me-3">Date :</h6>
                      </div>
                      <div class="col-auto col-lg-6 col-xl-7">
                        <p class="fs-9 text-body-secondary fw-semibold mb-0"><?php echo $receipt_details["payment_date"]; ?></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-lg-5">
                <div class="row g-4 gy-lg-5">
                  <div class="col-12 col-lg-8">
                    <h6 class="mb-2 me-3">Sold by :</h6>
                    <p class="fs-9 text-body-secondary fw-semibold mb-0">intelliagric<br />36 Robert Mugabe Rd, Zimbabwe</p>
                  </div>
                  <div class="col-12 col-lg-4">
                    <h6 class="mb-2"> Customer Country :</h6>
                    <p class="fs-9 text-body-secondary fw-semibold mb-0"><?php echo $receipt_details["user_country"]; ?></p>
                  </div>
                  <div class="col-12 col-lg-4">
                    <h6 class="mb-2"> Customer City :</h6>
                    <p class="fs-9 text-body-secondary fw-semibold mb-0"><?php echo $receipt_details["user_city"]; ?></p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-lg-4">
                <div class="row g-4">
                  <div class="col-12 col-lg-6">
                    <h6 class="mb-2"> Billing Address :</h6>
                    <div class="fs-9 text-body-secondary fw-semibold mb-0">
                      <p class="mb-2"><?php echo $receipt_details["user_name"]; ?></p>
                      <p class="mb-2">36, DT,<br />Rekai Tangwene Rd,</p>
                      <p class="mb-2"><?php echo $receipt_details["user_email"]; ?></p>
                      <p class="mb-0"><?php echo $receipt_details["user_contact"]; ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>



          <div class="px-0">
            <div class="table-responsive scrollbar">
              <table class="table fs-9 text-body mb-0">
                <thead class="bg-body-secondary">
                  <tr>
                    <th scope="col" style="width: 24px;"></th>
                    <th scope="col" style="min-width: 60px;">SL NO.</th>
                    <th scope="col" style="min-width: 360px;">Products</th>
                    <th class="ps-5" scope="col" style="min-width: 150px;">category</th>
                    <th class="text-end" scope="col" style="width: 80px;">Quantity</th>
                    <!-- <th class="text-end" scope="col" style="width: 100px;">Price</th> -->
                    <th class="text-end" scope="col" style="width: 138px;">Original Price</th>
                    <th class="text-end" scope="col" style="width: 138px;">Discount Rate</th>
                    <th class="text-center" scope="col" style="width: 80px;"></th>
                    <th class="text-end" scope="col" style="min-width: 92px;"> </th>
                    <th class="text-end" scope="col" style="min-width: 60px;">Total</th>
                    <th scope="col" style="width: 24px;"></th>
                  </tr>
                </thead>
                <tbody>


                <?php
                    $products_receipts = get_all_order_products_ctr($order_id);
                    global $price;
                    global $subTotal;
                    global $count;
                    
                      
                    foreach ($products_receipts as $products_receipt): ?>

                      <tr>
                        <td class="border-0"></td>
                        <td class="align-middle"><?php echo $count?></td>
                        <td class="align-middle">
                          <p class="line-clamp-1 mb-0 fw-semibold"><?php echo $products_receipt["product_title"];?></p>
                        </td>
                        <td class="align-middle ps-5"><?php echo $products_receipt["cat_name"];?></td>

                        <td class="align-middle text-end text-body-highlight fw-semibold"><?php echo $products_receipt["qty"] ?></td>
                        <!-- <td class="align-middle text-end fw-semibold"></td> -->
                        <td class="align-middle text-center fw-semibold">$ <?php echo $products_receipt["product_price"] ?></td>
                        <!-- <td class="align-middle text-center fw-semibold">$ <?php echo $products_receipt["product_price"] ?></td> -->
                        <td class="align-middle text-end fw-semibold"><?php echo $products_receipt["product_discount"] ?> % </td>
                        <td class="align-middle text-end fw-semibold"></td>
                        <td class="align-middle text-end fw-semibold"></td>
                        <td class="align-middle text-end fw-semibold">$ <?php echo sellingPrice($products_receipt["product_price"], $products_receipt["product_discount"]) ?></td>
                        <td class="border-0"></td>
                      </tr>
                      <?php $subTotal += totalPrice($products_receipt["qty"], $products_receipt["product_price"], $products_receipt["product_discount"]) ?>
                      <?php $count+=1;?>
                    <?php endforeach; 

                  ?>

                  <tr class="bg-body-secondary">
                    <td></td>
                    <td class="align-middle fw-semibold" colspan="9">Grand Total</td>
                    <td class="align-middle text-end fw-bold">$<?php echo $subTotal?></td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->

      <?php
        function totalPrice($qty, $originalPrice, $discount){
          $total_price = sellingPrice($originalPrice, $discount) * $qty;
          return $total_price;
        }

        function sellingPrice($originalPrice, $discount){
          $discountedPrice  = $originalPrice * ($discount/100);
          $sellingP = $originalPrice - $discountedPrice;
          return $sellingP;
        }

      ?>

    <?php include "../../../components/small_footer.php" ?>

    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->



        <!-- ===============================================-->
    <!--    JavaScripts-->
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
  </body>

</html>