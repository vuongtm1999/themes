<style type="text/css">
  .bg-img-banner {
    height: 70vh;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    width: 100%;
    background-position-x: calc(27.9%);
    background-position-y: center;
  }

  .top-head {
    z-index: 999;
    height: 45px;
    line-height: 45px;
  }

  .input-group {
    position: absolute;
    top: 50%;
    right: 17px;
    transform: translateY(-50%);
    width: auto;
    z-index: 999;
    height: 35px;
    line-height: 39px;
    min-height: 39px;
    color: #000;
    display: none;
  }

  .auto-search {
    border-radius: 30px;
    padding: 0 45px 0 20px;
    width: 250px;
  }

  .input-group .btn {
    position: absolute;
    top: 0;
    right: -19px;
    height: 35px;
    margin-left: -10px !important;
    border: 0;
    border-radius: 30px;
    line-height: 28px;
    min-height: 39px;
  }

  .search-icon:hover .input-group {
    display: block !important;
  }

  .top-head a:hover {
    color: var(--mainColor) !important;
  }

  .dropdown:hover>.dropdown-menu {
    display: block;
  }

  .dropdown-menu {
    top: 100%;
    right: 0;
    min-width: 9rem;
    width: 147px;
    display: none;
  }

  .count_item_pr {
    width: 14px;
    height: 14px;
    text-align: center;
    position: absolute;
    top: 20px;
    right: -23px;
    background: #fff;
    color: #333;
    font-size: 10px;
    line-height: 16px;
    border-radius: 50%;
  }

  .dropdown-menu#cart {
    margin: 0;
    padding: 15px;
    max-height: 625px;
    min-width: 325px;
    border: solid 1px #ebebeb;
  }

  .dropdown-menu .dropdown-content {
    max-height: 260px;
    overflow: auto;
  }

  .dropdown-content::-webkit-scrollbar {
    width: 4px;
    background-color: #fff;
  }

  .dropdown-content::-webkit-scrollbar-thumb {
    border: 4px solid #cdcfdd;
  }

  .dropdown-content::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    background-color: #fff;
  }

  .dropdown-content .product-name>a {
    color: #363636;
  }

  .i_close_svg {
    background-image: url(//bizweb.dktcdn.net/100/427/775/themes/894864/assets/i-close.svg?1665452606124);
    background-repeat: no-repeat;
    width: 9px;
    height: 9px;
    display: block;
    background-size: contain;
    position: absolute;
    top: 6px;
    cursor: pointer;
    right: 0;
    top: 10px;
    transform: translateY(-50%);
  }

  .dropdown-content .item-product {
    padding: 10px 20px 10px 0px;
    border-bottom: solid 1px #ebebeb;
  }

  .variant-title {
    color: #333;
    font-size: 12px;
    margin: 0;
  }

  .nav-item {
    height: 100%;
    line-height: 92px;
  }

  .nav-item:hover a {
    color: var(--mainColor) !important;
  }

  .nav-item:hover a span {
    border-bottom: 1px solid var(--mainColor);
  }

  /* dropdown with submenu */
  .dropdown:hover>.dropdown-menu {
    opacity: 1;
    transform: perspective(600px) rotateX(0deg);
  }

  /* style for dropdown main */
  .dropdown-menu.product-menu {
    left: 0px;
    top: 100%;
    width: 220px;
    display: block;
    box-shadow: 0 1px 2px 2px rgb(0 0 0 / 4%);
    transform-origin: 0% 0%;
    transform: perspective(600px) rotateX(-90deg);
    transition: transform 0.5s ease, opacity 0.2s ease;
    opacity: 1;
    font-size: 14px;
  }

  .dropdown-menu.sub_dropdown {
    width: 220px;
  }

  .dropdown-menu.product-menu {
    line-height: 46px;
  }

  .dropdown-menu.product-menu {
    display: block;
    opacity: 0;
  }

  .dropdown-toggle::after {
    vertical-align: middle;
    transition: transform 0.3s linear;
  }

  .sub_dropdown {
    top: 0;
    left: 100%;
    font-size: 14px !important;
  }

  .dropdown-item:hover a {
    color: #0fb587;
    background-color: unset;
  }

  .bottom-head {
    z-index: 999;
  }

  .dropdown-menu.product-menu li a {
    color: #333 !important;
  }

  .dropdown-menu.product-menu li a:hover {
    color: var(--mainColor) !important;
  }

  .header-mobile {
    z-index: 9;
    top: 0;
  }

  .count_item_pr_mobile {
    width: 18px;
    height: 18px;
    text-align: center;
    position: absolute;
    top: -6px;
    right: -12px;
    background: #fff;
    color: var(--mainColor);
    font-size: 10px;
    line-height: 18px;
    border-radius: 50%;
  }

  .bi-chevron-down.icon-down::before {
    transition: all 0.35s ease;
  }

  .bi-chevron-down.icon-down.active::before {
    color: #fff !important;
    transform: rotate(180deg);
  }

  .bi-chevron-right.icon-right::before {
    transition: all 0.35s ease;
  }

  .bi-chevron-right.icon-right.active::before {
    transform: rotate(45deg);
    color: #fff !important;
  }

  .level-2::before {
    content: "";
    top: 19px;
    left: 28px;
    position: absolute;
    width: 9px;
    height: 9px;
    border: solid 2px #fff;
    border-radius: 50%;
  }

  .logo-wrapper {
    height: 45px;
    line-height: 45px;
    transform: translateY(15px);
    position: relative;
  }

  .logo-wrapper:before {
    content: "";
    background: #9e7250;
    height: 1px;
    width: 500px;
    position: absolute;
    right: 174px;
    top: 30px;
  }

  .logo-wrapper:after {
    content: "";
    background: #9e7250;
    height: 1px;
    width: 500px;
    position: absolute;
    left: 174px;
    top: 30px;
  }

  .input-group-mobile {
    width: 100%;
    height: 35px;
    line-height: 39px;
    min-height: 39px;
    color: #000;
    display: flex;
    position: relative;
  }

  .offcanvas.offcanvas-start {
    width: 280px;
    background-color: #2d2d2d;
  }

  /* md */
  @media (min-width: 768px) {
    .bg-img-banner {
      height: 500px;
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
      width: 100%;
    }

    .logo-wrapper {
      height: 84px;
      line-height: 80px;
      width: auto;
      transform: unset;
    }

    .logo-wrapper:before {
      display: none;
    }

    .logo-wrapper:after {
      display: none;
    }
  }

  /* PC */
  @media (min-width: 1400px) {
    .bg-img-banner {
      height: 906px;
    }
  }
</style>


<div class="row d-xxl-flex d-none position-absolute top-0 px-6 w-100">
  <div style="border-bottom: 1px solid rgba(250,243,235,0.28);"
    class="d-flex flex-wrap justify-content-between small text-white px-0 top-head">
    <div>
      <img style="vertical-align: text-top;" class="img-fluid" src="public/demo/call.svg" alt="">
      Hotline đặt lịch:
      <a class="text-white" href="tel:19006750">1900 6750</a>
    </div>

    <div class="d-flex align-items-center">
      <div class="d-inline-block me-4 h-100 search-icon position-relative">
        <div class="pointer">
          <img style="transform: translateY(-2px);" src="public/demo/search.svg">
          Tìm kiếm
        </div>
        <form action="/search" method="get" class="input-group search-bar" role="search">
          <input type="text" autocomplete="off" required="" placeholder="Tìm kiếm..." class="border-0 auto-search">
          <button type="submit" class="btn btn-search bg-white">
            <i class="fa fa-search fw-bold"></i>
          </button>
        </form>
      </div>
      <div class="d-flex align-items-center me-4 dropdown">
        <a class="d-flex align-items-center text-white" href="index.php?p=account">
          <i style="vertical-align: middle;" class="bi bi-person fs-5 d-inline"></i>
          <span>Tài khoản</span>
        </a>
        <ul class="dropdown-menu rounded-0 py-0" id="tai-khoan">
          <li style="border-bottom: 1px solid #ebebeb;"><a class="dropdown-item py-0" href="index.php?p=account">Đăng
              nhập</a></li>
          <li><a class="dropdown-item py-0" href="index.php?p=account">Đăng ký</a></li>
        </ul>
      </div>
      <div class="d-flex align-items-center dropdown">
        <a class="d-flex align-items-center text-white" href="index.php?p=account">
          <img class="me-1 mb-1" src="public/demo/cart.svg">
          <span class="text-white">Giỏ hàng</span>
        </a>
        <span class="count_item count_item_pr">1</span>
        <ul class="dropdown-menu rounded-0 p-3" id="cart">
          <div class="dropdown-content">
            <div style="line-height: 20px !important;" class=" item-product">
              <div class="d-flex">
                <div class="me-2">
                  <a style="width: 80px;" class="d-inline-block" href="index.php?p=detailproduct">
                    <img class="img-fluid" src="public/demo/cart-1.png">
                  </a>
                </div>
                <div class="product-name pe-3 position-relative">
                  <span href="javascript:;" title="Xóa" class="i_close_svg"></span>
                  <div>
                    <a href="index.php?p=detailproduct">Sơn móng tay gel lạnh bền đẹp Lakme</a>
                  </div>
                  <div class="variant-title">Đỏ</div>
                  <div class="mb-4">
                    <span class="text-main my-2">180.000₫</span>
                    <span class="small">x</span>
                    <span style="color: #252525;">2</span>
                  </div>
                </div>
              </div>
            </div>
            <div style="line-height: 20px !important;" class=" item-product">
              <div class="d-flex">
                <div class="me-2">
                  <a style="width: 80px;" class="d-inline-block" href="index.php?p=detailproduct">
                    <img class="img-fluid" src="public/demo/cart-2.png">
                  </a>
                </div>
                <div class="product-name pe-3 position-relative">
                  <span href="javascript:;" title="Xóa" class="i_close_svg"></span>
                  <div>
                    <a href="index.php?p=detailproduct">Sơn móng tay gel lạnh bền đẹp Lakme</a>
                  </div>
                  <div class="variant-title">Đỏ</div>
                  <div class="mb-4">
                    <span class="text-main my-2">180.000₫</span>
                    <span class="small">x</span>
                    <span style="color: #252525;">2</span>
                  </div>
                </div>
              </div>
            </div>
            <div style="line-height: 20px !important;" class=" item-product">
              <div class="d-flex">
                <div class="me-2">
                  <a style="width: 80px;" class="d-inline-block" href="index.php?p=detailproduct">
                    <img class="img-fluid" src="public/demo/cart-3.png">
                  </a>
                </div>
                <div class="product-name pe-3 position-relative">
                  <span href="javascript:;" title="Xóa" class="i_close_svg"></span>
                  <div>
                    <a href="index.php?p=detailproduct">Sơn móng tay gel lạnh bền đẹp Lakme</a>
                  </div>
                  <div class="variant-title">Đỏ</div>
                  <div class="mb-4">
                    <span class="text-main my-2">180.000₫</span>
                    <span class="small">x</span>
                    <span style="color: #252525;">2</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="dropdown-bottom">
            <p class="my-2 text-center">
              Tổng tiền:
              <span class="text-main">540.000₫</span>
            </p>
            <div>
              <a style="color: white !important;" href="index.php?p=cart"
                class="btn my-btn-primary d-block rounded-0"><span>Giỏ
                  hàng</span></a>
            </div>
          </div>
        </ul>
      </div>
    </div>

  </div>

  <div class="d-flex justify-content-between align-items-center px-0 bottom-head">
    <div style="margin-top: -10px;">
      <a href="index.php">
        <img class="img-fluid" src="public/demo/main-logo.png">
      </a>
    </div>
    <ul class="d-flex align-items-center h-100 list-unstyled mb-0">
      <li class="nav-item">
        <a class="fs-5 px-4 text-white" href="index.php" title="Trang chủ">
          <span>Trang chủ</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="fs-5 px-4 text-white" href="index.php?p=aboutus" title="Giới thiệu">
          <span>
            Giới thiệu
          </span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="fs-5 px-4 text-white" href="index.php?p=listproducts" title="Sản phẩm">
          <span>
            Sản phẩm <i class="bi bi-chevron-down fs-6"></i>
          </span>
        </a>

        <ul class="dropdown-menu product-menu border-0 py-0 rounded-0 small">
          <!-- dropdown have sub dropdown -->
          <li>
            <!-- Dropdown level 2 -->
            <ul class="dropdown list-unstyled">
              <li class="dropdown-item px-3">
                <a class="d-block" href="index.php?p=listproducts" id="dropdownIndustrial" data-mdb-toggle="dropdown">
                  Sản phẩm hot <i style="font-size: 11px;" class="bi bi-caret-right-fill float-end"></i>
                </a>
              </li>
              <ul class="dropdown-menu sub_dropdown border-0 rounded-0 py-0 fs-6" aria-labelledby="dropdownIndustrial">
                <li class="dropdown-item px-3">
                  <a class="d-block" title="Đồ dùng nhà bếp" href="index.php?p=listproducts">
                    Đồ dùng nhà bếp
                  </a>
                </li>
                <li class="dropdown-item px-3">
                  <a class="d-block" title="Đồ dùng dọn dẹp" href="index.php?p=listproducts">
                    Đồ dùng dọn dẹp
                  </a>
                </li>
                <li class="dropdown-item px-3">
                  <a class="d-block" title="Đồ sứ đẹp" href="index.php?p=listproducts">
                    Đồ sứ đẹp
                  </a>
                </li>
                <li class="dropdown-item px-3">
                  <a class="d-block" title="Đồ sứ đẹp" href="index.php?p=listproducts">
                    Đồ sứ đẹp
                  </a>
                </li>
              </ul>
            </ul>
          </li>
          <li class="dropdown-item px-3">
            <a class="d-block" title="Sản phẩm mới" href="index.php?p=listproducts">
              Sản phẩm mới
            </a>
          </li>
          <li class="dropdown-item px-3">
            <a class="d-block" title="Sản phẩm mới" href="index.php?p=listproducts">
              Sản phẩm khuyến mãi
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="fs-5 px-4 text-white" href="index.php?p=news" title="Tin tức">
          <span>
            Tin tức
          </span>
        </a>
      </li>
      <li class="nav-item">
        <a class="fs-5 px-4 text-white" href="index.php?p=booking" title="Đặt lịch">
          <span>
            Đặt lịch
          </span>
        </a>
      </li>
      <li class="nav-item">
        <a class="fs-5 px-4 text-white" href="index.php?p=contactus" title="Liên hệ">
          <span>Liên hệ</span>
        </a>
      </li>

    </ul>
  </div>
</div>

<div class="row">
  <div class="home-slider owl-carousel owl-theme px-0">
    <div class="bg-img-banner" style="background-image: url(public/demo/slider_banner.png);"></div>
  </div>
</div>

<!-- header mobile tablet -->
<div class="row d-flex d-xxl-none overflow-hidden align-items-center py-3 position-absolute px-6 w-100 header-mobile">
  <div class="col-2">
    <a href="#offcanvasExample" data-bs-toggle="offcanvas"><i style="color: var(--mainColor);"
        class="bi bi-list fs-3"></i></a>
  </div>
  <div class="col-8 text-center">
    <a class="d-block logo-wrapper" href="index.php">
      <img class="img-fluid h-100" src="public/demo/main-logo.png" alt="">
    </a>
  </div>
  <div class="col-2 text-end">
    <div class="position-relative me-2">
      <a style="line-height: 23px;" class="d-inline-block" href="index.php?p=cart">
        <img width="18" height="18" src="public/demo/cart-mobile.svg" alt="">
        <span class="count_item_pr_mobile">5</span>
      </a>
    </div>
  </div>
</div>

<div class="offcanvas offcanvas-start py-4" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header pb-0">
    <form action="/search" method="get" class="input-group-mobile" role="search">
      <input style="flex: 1;" type="text" autocomplete="off" required="" placeholder="Tìm kiếm sản phẩm..."
        class="border-0 rounded ps-3">
      <button type="submit" class="btn bg-white rounded-0 rounded-end position-absolute top-0 end-0">
        <i class="fa fa-search fw-bold"></i>
      </button>
    </form>
  </div>
  <div class="offcanvas-body">
    <div>
      <p class="mb-1">
        <a class="text-white js-toggle" data-bs-toggle="collapse" href="#collapseExample"
          aria-controls="collapseExample">
          <i class="bi bi-person-fill text-white-50"></i> Tài khoản <i style="font-size: 10px;"
            class="bi bi-chevron-down text-white-50 icon-down"></i>
        </a>
      </p>
      <div class="collapse" id="collapseExample">
        <ul class="list-unstyled">
          <li class="py-2 border-bottom border-secondary">
            <a class="text-white" href="index.php?p=login">Đăng nhập</a>
          </li>
          <li class="py-2 border-bottom border-secondary">
            <a class="text-white" href="index.php?p=register">Đăng ký</a>
          </li>
        </ul>
      </div>
    </div>

    <ul class="list-unstyled">
      <li class="py-2 border-bottom border-secondary text-uppercase fw-bold text-white">
        Menu
      </li>
      <li class="py-2 border-bottom border-secondary fw-light">
        <a style="color: #cccccc;" href="index.php">Trang chủ</a>
      </li>
      <li class="py-2 border-bottom border-secondary fw-light">
        <a style="color: #cccccc;" href="index.php?p=aboutus">Giới thiệu</a>
      </li>
      <li class="py-2 border-bottom border-secondary fw-light">
        <a style="color: #cccccc;" class="js-toggle-2 pe-1 d-flex justify-content-between align-items-center"
          data-bs-toggle="collapse" data-bs-target="#collapseProduct" href="index.php?p=listproducts">
          Sản phẩm <i style="font-size: 10px;" class="bi bi-chevron-right text-white-50 icon-right icon-1"></i>
        </a>
      </li>
      <div class="collapse" id="collapseProduct">
        <ul class="list-unstyled">
          <li class="py-2 ps-3 border-bottom border-secondary fw-light">
            <a class="js-toggle-3 pe-1 d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
              data-bs-target="#collapseProduct2" href="index.php?p=listproducts" style="color: #cccccc;">
              Sản phẩm nổi bật
              <i style="font-size: 10px;" class="bi bi-chevron-right text-white-50 icon-right icon-2"></i>
            </a>
          </li>
          <div class="collapse" id="collapseProduct2">
            <li class="level-2 position-relative py-2 ps-5 border-bottom border-secondary fw-light">
              <a style="color: #cccccc;" href="index.php?p=register">Sơn thường</a>
            </li>
            <li class="level-2 position-relative py-2 ps-5 border-bottom border-secondary fw-light">
              <a style="color: #cccccc;" href="index.php?p=register">Sơn gel</a>
            </li>
          </div>
          <li class="py-2 ps-3 border-bottom border-secondary fw-light">
            <a style="color: #cccccc;" href="index.php?p=register">Sản phẩm mới</a>
          </li>
          <li class="py-2 ps-3 border-bottom border-secondary fw-light">
            <a style="color: #cccccc;" href="index.php?p=register">Sản phẩm khuyến mãi</a>
          </li>
        </ul>
      </div>

      <li class="py-2 border-bottom border-secondary fw-light">
        <a style="color: #cccccc;" href="index.php?p=news">Tin tức</a>
      </li>
      <li class="py-2 border-bottom border-secondary fw-light">
        <a style="color: #cccccc;" href="index.php?p=booking">Đặt lịch</a>
      </li>
      <li class="py-2 border-bottom border-secondary fw-light">
        <a style="color: #cccccc;" href="index.php?p=contactus">Liên hệ</a>
      </li>
    </ul>
  </div>
</div>




<script>
  $(document).ready(function () {
    $('.home-slider').owlCarousel({
      center: false,
      loop: false,
      margin: 0,
      dots: false,
      margin: 35,
      autoplay: false,
      responsive: {
        0: {
          items: 1,
          margin: 18,
          nav: false,
        },
        768: {
          items: 1,
          nav: false,
        },
        1400: {
          items: 1
        }
      }
    });

    $('.js-toggle').click(function () {
      $(this).find('.bi-chevron-down').toggleClass("active");
    });

    $('.js-toggle-2').click(function () {
      $('.bi-chevron-right.icon-1').toggleClass("active");
      $(this).toggleClass("text-white");

      $(this).toggleClass("fw-normal");
    });

    $('.js-toggle-3').click(function () {
      $('.bi-chevron-right.icon-2').toggleClass("active");
      $(this).toggleClass("text-white");

      $(this).toggleClass("fw-normal");
    });

  });
</script>