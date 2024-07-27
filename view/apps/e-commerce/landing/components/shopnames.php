<!-- ============================================-->
<!-- <section> begin ============================-->
      
<section class="py-0">
  <div class="container-small">
    <div class="scrollbar">
      <div class="d-flex justify-content-between">


        <a class="icon-nav-item" href="../../../../farmShop/view/app/e-commerce/landing/farm_shop_homepage.php" onmouseover="hoverEffect(this)" onmouseout="removeHoverEffect(this)">
            <div class="icon-container mb-2" style="width: 200px; height: 80px; position: relative; overflow: hidden;">
                <span class="fs-4 uil uil-shopping-bag" style="font-size: 48px; position: absolute; z-index: 2; transition: opacity 0.3s;"> </span>
                <img src="../../../assets/img/new_img/farm_shop.jpg" alt="Image Description" style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0; z-index: 1; transition: transform 0.3s;">
            </div>
            <p class="nav-label">FARM SHOP</p>
        </a>

        <a class="icon-nav-item" href="market_homepage.php" onmouseover="hoverEffect(this)" onmouseout="removeHoverEffect(this)">
            <div class="icon-container mb-2" style="width: 200px; height: 80px; position: relative; overflow: hidden;">
                <span class="fs-4 uil uil-shopping-bag" style="font-size: 48px; position: absolute; z-index: 2; transition: opacity 0.3s;"> </span>
                <img src="../../../assets/img/new_img/farm_produce.jpeg" alt="Image Description" style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0; z-index: 1; transition: transform 0.3s;">
            </div>
            <p class="nav-label">FARM MARKET PLACE</p>
        </a>

        <a class="icon-nav-item" href="#!" onmouseover="hoverEffect(this)" onmouseout="removeHoverEffect(this)">
            <div class="icon-container mb-2" style="width: 200px; height: 80px; position: relative; overflow: hidden;">
                <span class="fs-4 uil uil-shopping-bag" style="font-size: 48px; position: absolute; z-index: 2; transition: opacity 0.3s;"> </span>
                <img src="../../../assets/img/new_img/farm_land.jpg" alt="Image Description" style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0; z-index: 1; transition: transform 0.3s;">
            </div>
            <p class="nav-label">LAND BORROWING</p>
        </a>

        <a class="icon-nav-item" href="#!" onmouseover="hoverEffect(this)" onmouseout="removeHoverEffect(this)">
            <div class="icon-container mb-2" style="width: 200px; height: 80px; position: relative; overflow: hidden;">
                <span class="fs-4 uil uil-shopping-bag" style="font-size: 48px; position: absolute; z-index: 2; transition: opacity 0.3s;"> </span>
                <img src="../../../assets/img/new_img/equipment_hiring.jpg" alt="Image Description" style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0; z-index: 1; transition: transform 0.3s;">
            </div>
            <p class="nav-label">EQUIPMENT HIRING</p>
        </a>

      </div>
    </div>
  </div>
</section>


    <script>
    function hoverEffect(element) {
        const img = element.querySelector('img');
        const icon = element.querySelector('.uil');
        img.style.transform = 'scale(1.1)';
        icon.style.opacity = '0';
    }

    function removeHoverEffect(element) {
        const img = element.querySelector('img');
        const icon = element.querySelector('.uil');
        img.style.transform = 'scale(1)';
        icon.style.opacity = '1';
    }
    </script>


<!-- ============================================ -->



