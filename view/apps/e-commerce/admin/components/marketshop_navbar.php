<?php require_once(__DIR__ . "/../../../../../settings/core.php"); ?>

<!-- ===============================================-->
  <!-- Side Bar -->
  <!-- ===============================================-->

  <nav class="navbar navbar-vertical navbar-expand-lg" style="display:none;">
   
    <script>
      var navbarStyle = window.config.config.phoenixNavbarStyle;
      if (navbarStyle && navbarStyle !== 'transparent') {
        document.querySelector('body').classList.add(`navbar-${navbarStyle}`);
      }
    </script>

    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">

    <div class="navbar-vertical-content">
    <ul class="navbar-nav flex-column" id="navbarVerticalNav">
    
    <?php if (isAdmin() && $_SESSION['role'] === "1"): ?>
        <!-- First Home Dropdown -->
        <li class="nav-item">
            <div class="nav-item-wrapper">
              <a class="nav-link dropdown-indicator label-1" href="#nv-home-1" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="nv-home-1">
                <div class="d-flex align-items-center">
                    <span class="nav-link-icon"><span data-feather="users"></span></span>
                    <span class="nav-link-text">Market Admin</span>
                </div>
              </a>
              <div class="parent-wrapper label-1">
                  <ul class="nav collapse parent show" data-bs-parent="#navbarVerticalCollapse" id="nv-home-1">
                      <li class="collapsed-nav-item-title d-none">Market Dashboard</li>
                      <li class="nav-item"><a class="nav-link active" href="add-product.php" data-bs-toggle="" aria-expanded="false">
                              <div class="d-flex align-items-center"><span class="nav-link-text">Add Product</span></div>
                          </a>
                      </li>
                      <li class="nav-item"><a class="nav-link" href="products.php" data-bs-toggle="" aria-expanded="false">
                              <div class="d-flex align-items-center"><span class="nav-link-text">Products</span></div>
                          </a>
                      </li>
                      <li class="nav-item"><a class="nav-link" href="customers.php" data-bs-toggle="" aria-expanded="false">
                              <div class="d-flex align-items-center"><span class="nav-link-text">Customers</span></div>
                          </a>
                      </li>
                      <li class="nav-item"><a class="nav-link" href="customer-details.php" data-bs-toggle="" aria-expanded="false">
                              <div class="d-flex align-items-center"><span class="nav-link-text">Customers Details</span></div>
                          </a>
                      </li>
                      <li class="nav-item"><a class="nav-link" href="orders.php" data-bs-toggle="" aria-expanded="false">
                              <div class="d-flex align-items-center"><span class="nav-link-text">Orders</span></div>
                          </a>
                      </li>
                      <li class="nav-item"><a class="nav-link" href="order-details.php" data-bs-toggle="" aria-expanded="false">
                              <div class="d-flex align-items-center"><span class="nav-link-text">Order Details</span></div>
                          </a>
                      </li>
                  </ul>
              </div>
            </div>
        </li>

        <?php elseif (isAdmin() && $_SESSION['role'] === "2"): ?>
        <!-- Second Home Dropdown -->
        <li class="nav-item">
            <div class="nav-item-wrapper">
                <a class="nav-link dropdown-indicator label-1" href="#nv-home-2" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="nv-home-2">
                    <div class="d-flex align-items-center">
                        <span class="nav-link-icon"><span data-feather="users"></span></span>
                        <span class="nav-link-text">Shop Admin</span>
                    </div>
                </a>
                <div class="parent-wrapper label-1">
                    <ul class="nav collapse parent show" data-bs-parent="#navbarVerticalCollapse" id="nv-home-2">
                        <li class="collapsed-nav-item-title d-none">Home 2</li>
                        <li class="nav-item"><a class="nav-link active" href="index.html" data-bs-toggle="" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text">E commerce</span></div>
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="dashboard/project-management.html" data-bs-toggle="" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Project management</span></div>
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="dashboard/crm.html" data-bs-toggle="" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text">CRM</span></div>
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="dashboard/travel-agency.html" data-bs-toggle="" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Travel agency</span><span class="badge ms-2 badge badge-phoenix badge-phoenix-warning ">New</span></div>
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="apps/social/feed.html" data-bs-toggle="" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Social feed</span></div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </li>
        <?php elseif (isAdmin() && $_SESSION['role'] === "3"): ?>
        <!-- Third Home Dropdown -->
        <li class="nav-item">
            <div class="nav-item-wrapper">
                <a class="nav-link dropdown-indicator label-1" href="#nv-home-3" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="nv-home-3">
                    <div class="d-flex align-items-center">
                        <span class="nav-link-icon"><span data-feather="users"></span></span>
                        <span class="nav-link-text">Land Admin</span>
                    </div>
                </a>
                <div class="parent-wrapper label-1">
                    <ul class="nav collapse parent show" data-bs-parent="#navbarVerticalCollapse" id="nv-home-3">
                        <li class="collapsed-nav-item-title d-none">Home 3</li>
                        <li class="nav-item"><a class="nav-link active" href="index.html" data-bs-toggle="" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text">E commerce</span></div>
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="dashboard/project-management.html" data-bs-toggle="" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Project management</span></div>
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="dashboard/crm.html" data-bs-toggle="" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text">CRM</span></div>
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="dashboard/travel-agency.html" data-bs-toggle="" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Travel agency</span><span class="badge ms-2 badge badge-phoenix badge-phoenix-warning ">New</span></div>
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="apps/social/feed.html" data-bs-toggle="" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Social feed</span></div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </li>
        <?php elseif (isAdmin() && $_SESSION['role'] === "4"): ?>
        <!-- Fourth Home Dropdown -->
        <li class="nav-item">
            <div class="nav-item-wrapper">
                <a class="nav-link dropdown-indicator label-1" href="#nv-home-4" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="nv-home-4">
                    <div class="d-flex align-items-center">
                        <!-- <span class="dropdown-indicator-icon" style="margin-right: 10px;"><span class="fas fa-user-plus"></span></span> -->
                        <span class="nav-link-icon"><span data-feather="users"></span></span>
                        <span class="nav-link-text">Equipment Admin</span>
                    </div>
                </a>
                <div class="parent-wrapper label-1">
                    <ul class="nav collapse parent show" data-bs-parent="#navbarVerticalCollapse" id="nv-home-4">
                        <li class="collapsed-nav-item-title d-none">Home 4</li>
                        <li class="nav-item"><a class="nav-link active" href="index.html" data-bs-toggle="" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text">E commerce</span></div>
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="dashboard/project-management.html" data-bs-toggle="" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Project management</span></div>
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="dashboard/crm.html" data-bs-toggle="" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text">CRM</span></div>
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="dashboard/travel-agency.html" data-bs-toggle="" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Travel agency</span><span class="badge ms-2 badge badge-phoenix badge-phoenix-warning ">New</span></div>
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="apps/social/feed.html" data-bs-toggle="" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Social feed</span></div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </li>
        <?php endif; ?>
    </ul>
</div>

        <script>
          document.addEventListener('DOMContentLoaded', function () {
              const homeLinks = [
                  { link: document.querySelector('a[href="#nv-home-1"]'), content: document.getElementById('nv-home-1') },
                  { link: document.querySelector('a[href="#nv-home-2"]'), content: document.getElementById('nv-home-2') },
                  { link: document.querySelector('a[href="#nv-home-3"]'), content: document.getElementById('nv-home-3') },
                  { link: document.querySelector('a[href="#nv-home-4"]'), content: document.getElementById('nv-home-4') }
              ];

              homeLinks.forEach((homeLink, index) => {
                  homeLink.link.addEventListener('click', function () {
                      homeLinks.forEach((otherLink, otherIndex) => {
                          if (otherIndex !== index && otherLink.content.classList.contains('show')) {
                              otherLink.content.classList.remove('show');
                          }
                      });
                  });
              });
          });
        </script>
    </div>
    <div class="navbar-vertical-footer"><button class="btn navbar-vertical-toggle border-0 fw-semibold w-100 white-space-nowrap d-flex align-items-center"><span class="uil uil-left-arrow-to-left fs-8"></span><span class="uil uil-arrow-from-right fs-8"></span><span class="navbar-vertical-footer-text ms-2">Collapsed View</span></button></div>
  </nav>

  <nav class="navbar navbar-top fixed-top navbar-expand" id="navbarDefault" style="display:none;">
    <div class="collapse navbar-collapse justify-content-between">
      <div class="navbar-logo">
        <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
        <a class="navbar-brand me-1 me-sm-3" href="../landing/index.php">
          <div class="d-flex align-items-center">
            <div class="d-flex align-items-center"><img src="../../../assets/img/icons/logo.png" alt="phoenix" width="27" />
              <p class="logo-text ms-2 d-none d-sm-block">intelliAgric Admin</p>
            </div>
          </div>
        </a>
      </div>
      
      <!-- ===============================================-->
      <!--    Search Bar-->
      <!-- ===============================================-->
      <div class="search-box navbar-top-search-box d-none d-lg-block" data-list='{"valueNames":["title"]}' style="width:25rem;">
        <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input fuzzy-search rounded-pill form-control-sm" type="search" placeholder="Search..." aria-label="Search" />
          <span class="fas fa-search search-box-icon"></span>
        </form>
        <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none" data-bs-dismiss="search"><button class="btn btn-link p-0" aria-label="Close"></button></div>
      </div>


      <!-- ===============================================-->
      <!--   Notification -->
      <!-- ===============================================-->
      <ul class="navbar-nav navbar-nav-icons flex-row">
        <li class="nav-item">
          <div class="theme-control-toggle fa-icon-wait px-2"><input class="form-check-input ms-0 theme-control-toggle-input" type="checkbox" data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" /><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="moon"></span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="sun"></span></label></div>
        </li>


        <!-- ===============================================-->
        <!--     User Profile + Settings -->
        <!-- ===============================================-->
        <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
            <div class="avatar avatar-l ">
              <img class="rounded-circle " src="../../../../upload/user/<?php echo $_SESSION["user_image"]; ?>" alt="" />
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border" aria-labelledby="navbarDropdownUser">
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
                  <li class="nav-item"><a class="nav-link px-3" href="../view/pages/authentication/simple/sign-up.php"> <span class="me-2 text-body" data-feather="user-plus"></span>Add another account</a></li>
                </ul>
                <hr />
                <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="../actions/admin_actions/authentication_action.php?sign_out=yes"> <span class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                <div class="my-2 text-center fw-bold fs-10 text-body-quaternary"><a class="text-body-quaternary me-1" href="#!">Privacy policy</a>&bull;<a class="text-body-quaternary mx-1" href="#!">Terms</a>&bull;<a class="text-body-quaternary ms-1" href="#!">Cookies</a></div>
              </div>
            </div>
          </div>
        </li>
      </ul> 
    </div>
  </nav>
  

  <script>
    var navbarTopShape = window.config.config.phoenixNavbarTopShape;
    var navbarPosition = window.config.config.phoenixNavbarPosition;
    var body = document.querySelector('body');
    var navbarDefault = document.querySelector('#navbarDefault');
    var documentElement = document.documentElement;
    var navbarVertical = document.querySelector('.navbar-vertical');
    if (navbarPosition === 'dual-nav') {
      navbarVertical.remove();
      navbarDefault.remove();
      document.documentElement.setAttribute('data-navigation-type', 'dual');
    } else if (navbarTopShape === 'slim' && navbarPosition === 'vertical') {
      navbarDefault.remove();
      navbarVertical.style.display = 'inline-block';
      document.documentElement.setAttribute('data-navbar-horizontal-shape', 'slim');
    } else if (navbarTopShape === 'slim' && navbarPosition === 'horizontal') {
      navbarDefault.remove();
      navbarVertical.remove();
      document.documentElement.setAttribute('data-navbar-horizontal-shape', 'slim');
    } else if (navbarTopShape === 'slim' && navbarPosition === 'combo') {
      navbarDefault.remove();
      navbarVertical.removeAttribute('style');
      document.documentElement.setAttribute('data-navbar-horizontal-shape', 'slim');
    } else if (navbarTopShape === 'default' && navbarPosition === 'horizontal') {
      navbarDefault.remove();
      navbarVertical.remove();
      document.documentElement.setAttribute('data-navigation-type', 'horizontal');
    } else if (navbarTopShape === 'default' && navbarPosition === 'combo') {
      navbarDefault.remove();
      navbarVertical.removeAttribute('style');
      document.documentElement.setAttribute('data-navigation-type', 'combo');
    } else {
      navbarDefault.removeAttribute('style');
      navbarVertical.removeAttribute('style');
    }
    var navbarTopStyle = window.config.config.phoenixNavbarTopStyle;
    var navbarVerticalStyle = window.config.config.phoenixNavbarVerticalStyle;
    var navbarVertical = document.querySelector('.navbar-vertical');
    if (navbarVerticalStyle === 'darker') {
      navbarVertical.setAttribute('data-navbar-appearance', 'darker');
    }

  </script>