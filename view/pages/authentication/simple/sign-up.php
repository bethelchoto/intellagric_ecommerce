<!DOCTYPE html>
<html data-navigation-type="default" data-navbar-horizontal-shape="default" lang="en-US" dir="ltr">

<head>

<?php include "components/auth_html_head.php"  ?>

</head>

  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="container">
        <div class="row flex-center min-vh-100 py-5">
          <div class="col-sm-10 col-md-8 col-lg-5 col-xl-5 col-xxl-3">
          <a class="d-flex flex-center text-decoration-none mb-4" href="../../../apps/e-commerce/landing/index.php">
              <div class="d-flex align-items-center fw-bolder fs-3 d-inline-block"><img src="../../../assets/img/icons/logo.png" alt="phoenix" width="58" /></div>
            </a>

            <div class="text-center mb-7">
              <h3 class="text-body-highlight">Sign Up</h3>
              <p class="text-body-tertiary">Create your account today</p>
            </div>

            <form method="post" action="../../../../actions/admin_actions/authentication_action.php" enctype="multipart/form-data">
              <div class="mb-3 text-start"><label class="form-label" for="name">Name</label><input class="form-control" id="username" name="username" required type="text" placeholder="Name" /></div>
            
              <div class="row g-3 mb-3">
                <div class="col-sm-6"><label class="form-label" for="email">Email address</label><input class="form-control form-icon-input" id="email" name="email" required type="email" placeholder="name@gmail.om" /></div>
                <div class="col-sm-6"><label class="form-label" for="contact">Phone Number</label><input class="form-control form-icon-input" id="contact" name="contact" required type="text" placeholder="0781029728" /></div>
              </div>
              
              <div class="row g-3 mb-3">
                <div class="col-sm-6"><label class="form-label" for="password">Country</label><input class="form-control form-icon-input" id="country" name="country" required type="text" placeholder="Country" /></div>
                <div class="col-sm-6"><label class="form-label" for="confirmPassword">City</label><input class="form-control form-icon-input" id="city" name="city" required type="text" placeholder="City" /></div>
              </div>

              <div class="row g-3 mb-3">
                <div class="col-sm-6"><label class="form-label" for="password">Password</label><input class="form-control form-icon-input" id="password" name="password" required type="password" placeholder="Password" /></div>
                <div class="col-sm-6"><label class="form-label" for="confirmPassword">Confirm Password</label><input class="form-control form-icon-input" id="confirm_password" name="confirm_password" required type="password" placeholder="Confirm Password" /></div>
              </div>

              <h6 class="mb-3">Upload Profile</h6>
              <div class="form-group" style="margin-bottom: 20px;">  
                  <input type="file" name="file" id="image" accept=".jpg, .jpeg, .png" class="form-control">
              </div>
              <button class="btn btn-primary w-100 mb-3" name="sign_up">Sign up</button>
              <div class="text-center"><a class="fs-9 fw-bold" href="sign-in.php">Sign in to an existing account</a></div>
            </form>
          </div>
        </div>
      </div>
    </main>

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