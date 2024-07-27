<!DOCTYPE html>
<html data-navigation-type="default" data-navbar-horizontal-shape="default" lang="en-US" dir="ltr">


<head>

  <?php include "components/auth_html_head.php"  ?>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

</head>

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="container">
        <div class="row flex-center min-vh-100 py-5">
          <div class="col-sm-10 col-md-8 col-lg-5 col-xl-5 col-xxl-3">
            <a class="d-flex flex-center text-decoration-none mb-4" href="../../../index.html">
              <div class="d-flex align-items-center fw-bolder fs-3 d-inline-block"><img src="../../../assets/img/icons/logo.png" alt="phoenix" width="58" /></div>
            </a>
            <div class="text-center mb-7">
              <h3 class="text-body-highlight">Sign In</h3>
              <p class="text-body-tertiary">Get access to your account</p>
            </div>

            <form method="post" action="../../../../actions/admin_actions/authentication_action.php" enctype="multipart/form-data">
              <div class="mb-3 text-start"><label class="form-label" for="email">Email address</label>
                <div class="form-icon-container"><input class="form-control form-icon-input" name= "username" id="email" type="email" placeholder="name@example.com" /><span class="fas fa-user text-body fs-9 form-icon"></span></div>
              </div>
              <div class="mb-3 text-start"><label class="form-label" for="password">Password</label>
                <div class="form-icon-container"><input class="form-control form-icon-input" name = "password" id="password" type="password" placeholder="Password" /><span class="fas fa-key text-body fs-9 form-icon"></span></div>
              </div>
              <div class="row flex-between-center mb-7">
                <div class="col-auto">
                  <div class="form-check mb-0"><input class="form-check-input" id="basic-checkbox" type="checkbox" checked="checked" /><label class="form-check-label mb-0" for="basic-checkbox">Remember me</label></div>
                </div>
                <div class="col-auto"><a class="fs-9 fw-semibold" href="forgot-password.html">Forgot Password?</a></div>
              </div><button class="btn btn-primary w-100 mb-3" name="sign_in">Sign In</button>
              <div class="text-center"><a class="fs-9 fw-bold" href="sign-up.php">Create an account</a></div>
            </form>
          </div>
        </div>
      </div>

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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    
  </body>

</html>