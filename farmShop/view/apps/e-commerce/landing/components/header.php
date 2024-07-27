<!-- ============================================-->
<!-- <section> begin ============================-->

<?php require_once(__DIR__ . "/../../../../../settings/core.php"); ?>
  
<section class="py-0">
  <div class="container-small">
    <div class="ecommerce-topbar">
      <nav class="navbar navbar-expand-lg navbar-light px-0">
        <div class="row gx-0 gy-2 w-100 flex-between-center">
          <div class="col-auto"><a class="text-decoration-none" href="index.php">
              <div class="d-flex align-items-center"><img src="../../../assets/img/icons/logo.png" alt="phoenix" width="27" />
                <p class="logo-text ms-2">intelliAgric Market Place</p>
              </div>
            </a></div>
          <div class="col-auto order-md-1">
            <ul class="navbar-nav navbar-nav-icons flex-row me-n2">
              <li class="nav-item d-flex align-items-center">
                <div class="theme-control-toggle fa-icon-wait px-2"><input class="form-check-input ms-0 theme-control-toggle-input" type="checkbox" data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" /><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="moon"></span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="sun"></span></label></div>
              </li>

              <li class="nav-item">
                <?php 
                if (isLogged()): 
                  ?>
                  <a class="nav-link px-2 icon-indicator icon-indicator-primary" href="cart.php" role="button">
                  <!-- <a class="nav-link px-2 icon-indicator icon-indicator-primary" href="#" role="button" id="cartLink"> -->
                <?php 
              else: 
              ?>
                  <a class="nav-link px-2 icon-indicator icon-indicator-primary" href="#" role="button" onclick="alert('Please log in to view your cart.'); return false;">
                <?php 
              endif; 
              ?>
                    <span class="text-body-tertiary" data-feather="shopping-cart" style="height:20px;width:20px;"></span>
                    <span class="icon-indicator-number">
                      3
                    </span>
                  </a>
              </li>

              <!-- ===============================================-->
              <!--    Main Content-->
              <!-- ===============================================-->

            <?php if (isLogged()): ?>

            <li class="nav-item dropdown"><a class="nav-link px-2" id="navbarDropdownUser" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="text-body-tertiary" data-feather="user" style="height:20px;width:20px;"></span></a>
                <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border mt-2" aria-labelledby="navbarDropdownUser">
                <div class="card position-relative border-0">
                    <div class="card-body p-0">
                    <div class="text-center pt-4 pb-3">
                        <div class="avatar avatar-xl ">
                        <img class="rounded-circle " src="../../../../upload/user/<?php echo $_SESSION["user_image"]; ?>" alt="" />
                        </div>
                        <h6 class="mt-2 text-body-emphasis"><?php echo $_SESSION['username']?></h6>
                    </div>
                    <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput" type="text" placeholder="Update your status" /></div>
                    </div>
                    <div class="overflow-auto scrollbar" style="height: 10rem;">
                    <ul class="nav d-flex flex-column mb-2 pb-1">
                        <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="user"></span><span>Profile</span></a></li>
                        <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-body" data-feather="pie-chart"></span>Dashboard</a></li>
                        <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="lock"></span>Posts &amp; Activity</a></li>
                        <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="settings"></span>Settings &amp; Privacy </a></li>
                        <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="help-circle"></span>Help Center</a></li>
                        <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="globe"></span>Language</a></li>
                    </ul>
                    </div>
                    <div class="card-footer p-0 border-top border-translucent">
                    <ul class="nav d-flex flex-column my-3">
                        <li class="nav-item"><a class="nav-link px-3" href="../../../pages/authentication/simple/sign-up.php"> <span class="me-2 text-body" data-feather="user-plus"></span>Add another account</a></li>
                    </ul>
                    <hr />
                    <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="../../../../actions/admin_actions/authentication_action.php?sign_out=yes"> <span class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                    <div class="my-2 text-center fw-bold fs-10 text-body-quaternary"><a class="text-body-quaternary me-1" href="#!">Privacy policy</a>&bull;<a class="text-body-quaternary mx-1" href="#!">Terms</a>&bull;<a class="text-body-quaternary ms-1" href="#!">Cookies</a></div>
                    </div>
                </div>
                </div>
            </li>

            <?php else: ?>

            <li class="nav-item dropdown">
                <a class="nav-link px-2" id="navbarDropdownUser" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                    <span class="text-body-tertiary" data-feather="user" style="height:20px;width:20px;"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border mt-2" aria-labelledby="navbarDropdownUser">
                    <div class="card position-relative border-0">
                        <div class="card-body p-0">
                            <div class="card-footer p-0 border-top border-translucent">
                                <div class="px-3">
                                    <a class="btn btn-phoenix-secondary d-flex flex-center w-100 mt-2 mb-1" href="../../../pages/authentication/simple/sign-in.php">
                                        <span class="me-2" data-feather="log-out"></span>Sign in
                                    </a>
                                </div>
                                <div class="px-3">
                                    <a class="btn btn-phoenix-secondary d-flex flex-center w-100 mb-3" href="../../../pages/authentication/simple/sign-up.php">
                                        <span class="me-2" data-feather="log-out"></span>Sign up
                                    </a>
                                </div>
                                <div class="my-2 text-center fw-bold fs-10 text-body-quaternary">
                                    <a class="text-body-quaternary me-1" href="#!">Privacy policy</a>&bull;
                                    <a class="text-body-quaternary mx-1" href="#!">Terms</a>&bull;
                                    <a class="text-body-quaternary ms-1" href="#!">Cookies</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <?php endif; ?>

            </ul>
          </div>
          <div class="col-12 col-md-6">
            <div class="search-box ecommerce-search-box w-100">
              <form class="position-relative"><input class="form-control search-input search form-control-sm" type="search" placeholder="Search" aria-label="Search" />
                <span class="fas fa-search search-box-icon"></span>
              </form>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </div>
</section>




<!-- <section> close ============================-->
<!-- ============================================-->