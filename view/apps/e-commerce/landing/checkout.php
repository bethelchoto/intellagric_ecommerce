<!DOCTYPE html>
<html data-navigation-type="default" data-navbar-horizontal-shape="default" lang="en-US" dir="ltr">

<!-- ===============================================-->
<!--    Import html Head -->
<!-- ===============================================-->

<?php 
  include "components/ecommerce_html_head.php";

?>






  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">


    <?php 
    include "components/header.php"; 
    include "components/categories/farm_produce_navbar.php"; 
    include "../../../../controllers/marketplace/product_controller.php";

    global $result; // Declare $result as a global variable
    global $amount; // Declare $result as a global variable
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $amount = $_POST['amount'];
      $result = json_decode($_POST['result'], true);
    }
    
    
    ?>

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-5 pb-9">
        <div class="container-small">
          <nav class="mb-2" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="#!">Page 1</a></li>
              <li class="breadcrumb-item"><a href="#!">Page 2</a></li>
              <li class="breadcrumb-item active" aria-current="page">Default</li>
            </ol>
          </nav>
          <h2 class="mb-0">Check out</h2>
          <div class="row justify-content-between">
            <div class="col-lg-7 col-xl-7 pb-5">
              <form>

                <!-- <div class="d-flex align-items-end">
                  <h3 class="mb-0 me-3">Shipping Details</h3><button class="btn btn-link p-0" type="button">Edit</button>
                </div>
                <table class="table table-borderless mt-4">
                  <tbody>
                    <tr>
                      <td class="py-2 ps-0">
                        <div class="d-flex"><span class="fs-3 me-2" data-feather="user" style="height:16px; width:16px;"> </span>
                          <h5 class="lh-sm me-4">Name</h5>
                        </div>
                      </td>
                      <td class="py-2 fw-bold lh-sm">:</td>
                      <td class="py-2 px-3">
                        <h5 class="lh-sm fw-normal text-body-secondary">Shatinon Mekalan</h5>
                      </td>
                    </tr>
                    <tr>
                      <td class="py-2 ps-0">
                        <div class="d-flex"><span class="fs-3 me-2" data-feather="home" style="height:16px; width:16px;"> </span>
                          <h5 class="lh-sm me-4">Address</h5>
                        </div>
                      </td>
                      <td class="py-2 fw-bold lh-sm">:</td>
                      <td class="py-2 px-3">
                        <h5 class="lh-lg fw-normal text-body-secondary">Apt: 6/B, 192 Edsel Road, Van Nuys <br> California, USA 96580</h5>
                      </td>
                    </tr>
                    <tr>
                      <td class="py-2 ps-0">
                        <div class="d-flex"><span class="fs-3 me-2" data-feather="phone" style="height:16px; width:16px;"> </span>
                          <h5 class="lh-sm me-4">Phone</h5>
                        </div>
                      </td>
                      <td class="py-2 fw-bold lh-sm">: </td>
                      <td class="py-2 px-3">
                        <h5 class="lh-sm fw-normal text-body-secondary">818-414-4092</h5>
                      </td>
                    </tr>
                  </tbody>
                </table> -->
                <hr class="my-6">
                <h3>Billing Details</h3>

                <!-- <div class="form-check"><input class="form-check-input" id="sameAsShipping" type="checkbox" checked="checked" /><label class="form-check-label fs-8 fw-normal" for="sameAsShipping">Same as shipping address
                  </label></div> -->
                <table class="table table-borderless mt-4">
                  <tbody>
                    <tr>
                      <td class="py-2 ps-0">
                        <div class="d-flex"><span class="fs-3 me-2" data-feather="user" style="height:16px; width:16px;"> </span>
                          <h5 class="lh-sm me-4">Name</h5>
                        </div>
                      </td>
                      <td class="py-2 fw-bold lh-sm">:</td>
                      <td class="py-2 px-3">
                        <h5 class="lh-sm fw-normal text-body-secondary">Intelliagric User 1</h5>
                      </td>
                    </tr>
                    <tr>
                      <td class="py-2 ps-0">
                        <div class="d-flex"><span class="fs-3 me-2" data-feather="home" style="height:16px; width:16px;"> </span>
                          <h5 class="lh-sm me-4">Address</h5>
                        </div>
                      </td>
                      <td class="py-2 fw-bold lh-sm">:</td>
                      <td class="py-2 px-3">
                        <h5 class="lh-lg fw-normal text-body-secondary">12345 Magamba Way</h5>
                      </td>
                    </tr>
                    <tr>
                      <td class="py-2 ps-0">
                        <div class="d-flex"><span class="fs-3 me-2" data-feather="phone" style="height:16px; width:16px;"> </span>
                          <h5 class="lh-sm me-4">Email</h5>
                        </div>
                      </td>
                      <td class="py-2 fw-bold lh-sm">:</td>
                      <td class="py-2 px-3">
                        <h5 class="lh-sm fw-normal text-body-secondary"><?php echo $_SESSION['username'] ?></h5>
                      </td>
                    </tr>
                  </tbody>
                </table>


                <hr class="my-6">
                <h3 class="mb-5">Payment Method</h3>
                <div class="row g-4 mb-7">
                  <!-- <div class="col-12">
                    <div class="row gx-lg-11">
                      <div class="col-12 col-md-auto">
                        <div class="d-flex">
                          <div class="form-check"><input class="form-check-input" id="creditCard" type="radio" name="paymentMethod" checked="checked" /><label class="form-check-label fs-8 text-body me-3" for="creditCard">Credit card</label></div><img class="h-100 me-2 ms-4 ms-md-0" src="../../../assets/img/logos/visa.png" alt="" /><img class="h-100 me-2" src="../../../assets/img/logos/discover.png" alt="" /><img class="h-100 me-2" src="../../../assets/img/logos/mastercard.png" alt="" /><img class="h-100" src="../../../assets/img/logos/american_express.png" alt="" />
                        </div>
                      </div>
                      <div class="col-12 col-md-auto">
                        <div class="form-check"><input class="form-check-input" id="paypal" type="radio" name="paymentMethod" /><label class="form-check-label fs-8 text-body" for="paypal">Paystack </label></div>
                      </div>
                      <div class="col-12 col-md-auto">
                        <div class="form-check"><input class="form-check-input" id="coupon" type="radio" name="paymentMethod" /><label class="form-check-label fs-8 text-body" for="coupon">Coupon </label></div>
                      </div>
                    </div>
                  </div> -->
                  <!-- <div class="col-md-6"><label class="form-label fs-8 text-body-highlight ps-0 text-transform-none" for="selectCard">Select card</label><select class="form-select text-body-emphasis" id="selectCard">
                      <option selected="selected">select a card</option>
                      <option value="visa">Visa</option>
                      <option value="discover">Discover</option>
                      <option value="mastercard">Mastercard</option>
                      <option value="american-express">American Express</option>
                    </select></div> -->

                  <!-- <div class="col-md-6"><label class="form-label fs-8 text-body-highlight ps-0 text-transform-none" for="inputCardNumber">Card number</label><input class="form-control" id="inputCardNumber" type="number" placeholder="Enter card number" aria-label="Card number" /></div> -->
                  <div class="col-12"><label class="form-label fs-8 text-body-highlight ps-0 text-transform-none" for="inputName">First name</label><input class="form-control" id="first-name" type="text" placeholder="Ansolo" aria-label="Full name" /></div>
                  <div class="col-12"><label class="form-label fs-8 text-body-highlight ps-0 text-transform-none" for="inputName">Last name</label><input class="form-control" id="last-name" type="text" placeholder="Lazinatov" aria-label="Full name" /></div>
                  <!-- <div class="col-12"><label class="form-label fs-8 text-body-highlight ps-0 text-transform-none" for="inputName">email</label><input class="form-control" id="email-address" type="text" placeholder="intelliagric@gmail.com" aria-label="Full name" /></div> -->
                  
                  <div class="col-12"><label class="form-label fs-8 text-body-highlight ps-0 text-transform-none" for="inputName">Amount</label><input class="form-control" id="amount" type="text" placeholder="GHC" aria-label="Full name" /></div>
              

                  <div class="form-item">
                      <label class="form-label my-3">Email Address<sup>*</sup></label>
                      <input type="email" id="email-address" class="form-control">
                  </div>

                  <!-- <div class="col-md-6"><label class="form-label fs-8 text-body-highlight ps-0 text-transform-none">Expires on</label>
                    <div class="d-flex"><select class="form-select text-body-emphasis me-3">
                        <option selected="selected">Month</option>
                        <option>January</option>
                        <option>February</option>
                        <option>March</option>
                      </select><select class="form-select text-body-emphasis">
                        <option selected="selected">Year</option>
                        <option value="1990">1990</option>
                        <option value="1991">1991</option>
                        <option value="1992">1992</option>
                        <option value="1993">1993</option>
                        <option value="1994">1994</option>
                        <option value="1995">1995</option>
                        <option value="1996">1996</option>
                        <option value="1997">1997</option>
                        <option value="1998">1998</option>
                        <option value="1999">1999</option>
                        <option value="2000">2000</option>
                        <option value="2001">2001</option>
                        <option value="2002">2002</option>
                        <option value="2003">2003</option>
                        <option value="2004">2004</option>
                        <option value="2005">2005</option>
                        <option value="2006">2006</option>
                        <option value="2007">2007</option>
                        <option value="2008">2008</option>
                        <option value="2009">2009</option>
                        <option value="2010">2010</option>
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                      </select></div>
                  </div>
                  <div class="col-md-6"><label class="form-label fs-8 text-body-highlight ps-0 text-transform-none" for="inputCardCVC">CVC</label><input class="form-control" id="inputCardCVC" type="number" placeholder="Enter a valid CVC" aria-label="CVC" /></div>
                  <div class="col-12">
                    <div class="form-check"><input class="form-check-input" id="gridCheck" type="checkbox" /><label class="form-check-label text-body-emphasis fs-8" for="gridCheck">Save Card Details</label></div>
                  </div> -->
                  
                </div>
                
                <div class="row g-2 mb-5 mb-lg-0">
                  <div class="col-md-8 col-lg-9 d-grid"><button class="btn btn-primary" type="submit" id="payButton" onclick="redirectToPayment()">Pay $<?= $amount ?></button></div>
                  <div class="col-md-4 col-lg-3 d-grid"><button class="btn btn-phoenix-secondary text-nowrap" type="submit">Save Order and Exit</button></div>
                </div>
              </form>

            </div>
            <div class="col-lg-5 col-xl-4">
              <div class="card mt-3 mt-lg-0">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between">
                    <h3 class="mb-0">Summary</h3><button class="btn btn-link pe-0" type="button">Edit cart</button>
                  </div>
                  <div class="border-dashed border-bottom border-translucent mt-4">
                    <div class="ms-n2">

                      <?php 
                      global $result; // Access the global $result variable

                      $i = 0;
                       if ($result!=false) {
                         while($i<count($result))
                         {
                           $product=get_product_by_id_ctr($result[$i]['p_id']);
                       ?>


                      <div class="row align-items-center mb-2 g-3">
                        <div class="col-8 col-md-7 col-lg-8">
                          <div class="d-flex align-items-center"><img class="me-2 ms-1" src="../../../../upload/marketplace/<?= $product["product_image"]?>" width="40" alt="" />
                            <h6 class="fw-semibold text-body-highlight lh-base">v<?= $product["product_title"]?></h6>
                          </div>
                        </div>
                        <div class="col-2 col-md-3 col-lg-2">
                          <h6 class="fs-10 mb-0"><?= $product["product_discount"]?></h6>
                        </div>
                        <div class="col-2 ps-0">
                          <h5 class="mb-0 fw-semibold text-end">$<?= $product["product_price"]?></h5>
                        </div>
                      </div>

                      <?php
                        $i++; 
                         }
                        }
                      ?>
                  
                    </div>
                  </div>
                  <div class="border-dashed border-bottom border-translucent mt-4">
                    <div class="d-flex justify-content-between mb-2">
                      <h5 class="text-body fw-semibold">Items subtotal: </h5>
                      <h5 class="text-body fw-semibold">$<?= $amount ?></h5>
                    </div>
                    <!-- <div class="d-flex justify-content-between mb-2">
                      <h5 class="text-body fw-semibold">Discount: </h5>
                      <h5 class="text-danger fw-semibold">-$59</h5>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                      <h5 class="text-body fw-semibold">Tax: </h5>
                      <h5 class="text-body fw-semibold">$0.00</h5>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                      <h5 class="text-body fw-semibold">Subtotal </h5>
                      <h5 class="text-body fw-semibold">$665</h5>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                      <h5 class="text-body fw-semibold">Shipping Cost </h5>
                      <h5 class="text-body fw-semibold">$30 </h5>
                    </div> -->
                  </div>
                  <div class="d-flex justify-content-between border-dashed-y pt-3">
                    <h4 class="mb-0">Total :</h4>
                    <h4 class="mb-0">$<?= $amount ?></h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->

    <!-- ===============================================-->
    <!--    Insert Chat Here-->
    <!-- ===============================================-->


    <?php 
    // include "../../../components/footer.php"  
    ?>
    <?php include "../../../components/small_footer.php" ?>


  </main>



  <script src="https://js.paystack.co/v1/inline.js"></script>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("payButton").addEventListener("click", payWithPaystack);
  });

  function payWithPaystack() {

    var user_id = <?php echo isset($_SESSION['id']) ? $_SESSION['id'] : 'null'; ?>;

    var email = document.getElementById('email-address').value;
    var amount = document.getElementById('amount').value;
    var firstName = document.getElementById('first-name').value;
    var lastName = document.getElementById('last-name').value;

    console.log("User ID: ", user_id);
    console.log("Email: ", email);
    console.log("Amount: ", amount);
    console.log("First Name: ", firstName);
    console.log("Last Name: ", lastName);

    if (!email || !amount) {
      alert("Please fill in email and amount fields.");
      return;
    }

    var handler = PaystackPop.setup({
      key: 'pk_test_e679735d3c92632af80d5513fbf7c47f653c14bf', // Replace with your public key
      email: email,
      amount: amount * 100, 
      currency: 'GHS',
      totalamount: amount,
      ref: "" + Math.floor(Math.random() * 1000000000 + 1), // Replace with a reference you generated
      metadata: {
        custom_fields: [
          {
            display_name: "Customer Id",
            variable_name: "Customer_Id",
            value: user_id
          },
          {
            display_name: "amount",
            variable_name: "amount",
            value: amount
          },
          {
            display_name: "First Name",
            variable_name: "first_name",
            value: firstName
          },
          {
            display_name: "Last Name",
            variable_name: "last_name",
            value: lastName
          }
        ]
      },
      callback: function(response) {
        var reference = response.reference;
        console.log('Payment complete! Reference: ', reference);
        alert('Payment complete! Reference: ' + reference);
        window.location.href = "../../../../actions/marketplace/paystack_payment_action?reference=" + reference;
      },
      onClose: function() {
        console.log('Transaction was not completed, window closed.');
        alert('Transaction was not completed, window closed.');
      },
    });
    handler.openIframe();
  }
</script>




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