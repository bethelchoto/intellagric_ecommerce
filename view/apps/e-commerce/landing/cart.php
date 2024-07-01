<!DOCTYPE html>
<html data-navigation-type="default" data-navbar-horizontal-shape="default" lang="en-US" dir="ltr">

<!-- ===============================================-->
<!--    Import html Head -->
<!-- ===============================================-->

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
      ?>

      <?php
        if(isset($_GET['id'])){
          $id = $_GET['id'];
        }
      ?>
    
      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-5 pb-400">
        <div class="container-small cart">
          <h2 class="mb-6">Cart</h2>
          
          <?php show_cart_full($id); ?>

        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->

    <!-- ===============================================-->
    <!--    Insert ChatBot Here-->
    <!-- ===============================================-->

    <?php 
    // include "../../../components/footer.php"  
    ?>
    <?php include "../../../components/small_footer.php" ?>


    </main>


    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script>
        document.getElementById('checkoutLinkCart').addEventListener('click', function(event) {
            event.preventDefault(); // Prevent the default link behavior
            document.getElementById('checkoutFormCart').submit(); // Submit the form
        });
    </script>

    <script>
      $(document).ready(function() {
        $('#cartLink').on('click', function(e) {
          e.preventDefault(); // Prevent the default link behavior

          $.ajax({
            url: 'cart_handler.php', // URL to your PHP handler file
            method: 'POST',
            data: { action: 'show_cart_full' },
            success: function(response) {
              // You can update your UI with the response here
              console.log(response);
            },
            error: function(xhr, status, error) {
              console.error('AJAX Error: ', status, error);
            }
          });
        });
      });
    </script>
    
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