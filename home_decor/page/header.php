<style type="text/css">
  .bg-img-header-pc {
    background-repeat: repeat;
    width: 100%;
    height: 168px;
    z-index: 9;
  }

  .header_r {
    height: 168px;
  }

  .header-product.owl-carousel .owl-item img {
    width: 115px;
    height: 115px;
  }

  .discount {
    background: #fbb733;
    width: 33px;
    height: 33px;
    position: absolute;
    right: 7px;
    top: 7px;
    font-style: normal;
    text-transform: none;
    line-height: 32px;
    border-radius: 50%;
    font-size: 11px;
    font-family: 'Josefin Sans', sans-serif;
    font-weight: 400;
    padding: 0px;
    display: inline-block;
    color: #000;
    text-align: right;
    padding-right: 2px;
  }

  .product-thumbnail {
    width: 115px !important;
    margin-right: 17px !important;
  }

  .line-2 {
    text-overflow: ellipsis;
    overflow: hidden;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
  }

  .product-info {
    width: calc(100% - 147px);
    float: left;
  }

  .product-info a:hover {
    color: var(--color-main) !important;
  }

  .scale_hover img {
    transition: all .3s ease-in-out;
  }

  .scale_hover:hover img {
    -webkit-transform: scale(1.025);
    -ms-transform: scale(1.025);
    transform: scale(1.025);
  }

  .user-cart-style {
    margin-top: unset;
  }

  .product-header {
    margin-top: 25px;
  }

  .border-bottom-responsive {
    border-bottom: unset;
  }

  .header-nav {
    position: relative;
    z-index: 1;
    height: 70px;
    line-height: 70px;
    background: var(--color-main);
  }

  .nav-header .nav-item:not(:first-child) {
    padding-left: 10px;
  }

  .nav-item>a {
    display: inline-block;
    color: #000;
    height: 70px;
    line-height: 70px;
    padding-right: 10px;
  }

  .nav-item a:hover {
    color: #fff;
  }

  .dropdown-menu a:hover {
    color: var(--color-main);
  }

  /* dropdown product */
  .dropdown:hover .dropdown-menu {
    display: block;
  }

  .dropdown:hover>.dropdown-menu {
    opacity: 1;
  }

  .dropdown-menu {
    box-shadow: 0 1px 2px 2px rgb(0 0 0 / 4%);
    display: block;
    opacity: 0;
  }

  .dropdown_menu {
    margin-left: 204px !important;
    margin-top: -57px !important;
  }

  .dropdownProduct {
    transform-origin: 0% 0%;
    transform: perspective(600px) rotateX(-90deg);
    transition: transform 0.5s ease, opacity 0.2s ease;
    opacity: 0;
    width: 215px;
  }

  .dropdown>.dropdownProduct {
    width: 215px;
  }

  .dropdown:hover>.dropdownProduct {
    opacity: 1;
    transform: perspective(600px) rotateX(0deg);
  }

  .dropdown-toggle::after {
    vertical-align: middle;
    transition: transform 0.3s linear;
  }

  .dropdown:hover .dropdown-toggle::after {
    transform: rotate(180deg);
  }

  .dropdown-item:focus,
  .dropdown-item:hover {
    color: var(--color-light-green);
    background-color: white;
  }

  .dropdown-item {
    border-bottom: solid 1px #e5e6ec;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .dropdownProduct.dropdown-menu {
    left: 0px;
    top: 100%;
    width: 220px;
    box-shadow: 0 1px 2px 2px rgba(0,0,0,0.2);
  }

  .dropdown-toggle::after {
    display: none;
  }

  .dropdown-menu>li {
    line-height: 47px;
  }

  .input-group {
    position: absolute;
    top: 50%;
    right: 0;
    width: auto;
    z-index: 999;
    height: 35px;
    line-height: 35px;
    min-height: 35px;
    color: #000;
    transform: translateY(-50%);
    display: none;
  }

  .input-group .btn {
    height: 35px;
    margin-left: -10px !important;
    margin-left: 0px;
    border: 0;
  }

  .search-icon:hover .input-group {
    display: block;
  }

  .auto-search {
    border-radius: 30px;
    padding: 0 40px 0 15px;
    width: 220px;
  }

  .auto-search:focus-visible {
    outline: none;
  }

  .btn-search {
    border-radius: 30px;
  }

  .nav-mobile {
    background: var(--color-main);
    height: 70px;
    position: relative;
  }

  .offcanvas-start {
    width: 280px;
  }

  .offcanvas {
    background: #2a2a4d;
  }

  .nav_item {
    padding: 10px 55px;
    position: relative;
  }

  .nav_item:not(:last-child) {
    border-bottom: solid 1px #212529;
  }

  .level0::before {
    width: 8px;
    height: 8px;
    border-radius: 8px;
    content: "";
    background: var(--color-main);
    position: absolute;
    left: 30px;
    top: 20px;
  }

  /* md */
  @media (min-width: 768px) {
    .offcanvas-start {
      width: 375px;
    }

    .border-bottom-responsive {
      border-bottom: unset;
    }

    .user-cart-style {
      margin-top: 35px;
    }
  }

  /* PC */
  @media (min-width: 1400px) {
    .bg-img-header-pc {
      background-image: url(public/demo/bg_header.jpg) !important;
      background-size: cover;
      background-repeat: no-repeat;
    }

    .border-bottom-responsive {
      border-bottom: 1px solid #dee2e6 !important;
    }
  }
</style>

<div class="row">
  <div style="background-image: url(public/demo/bg_base.png); height: 168px;"
    class="bg-img-header-pc header_r d-flex flex-wrap px-6 pb-2">
    <div class="col-xxl-3 col-md-6 col-12 text-md-start text-center mb-xxl-0 mb-3">
      <a href="index.php"><img class="img-fluid" src="public/demo/logo.png" alt=""></a>
    </div>
    <div class="col-xxl-6 d-xxl-block d-md-none d-none product-header">
      <div class="header-product owl-carousel owl-theme">
        <div class="d-flex flex-wrap align-items-center">
          <div class="product-thumbnail position-relative scale_hover">
            <a href="index.php?p=detailproduct">
              <img src="public/demo/header-product-1.png" alt="">
            </a>
            <span class="discount">- 6%</span>
          </div>
          <div class="product-info">
            <h6 style="font-size: 14px;" class="line-2">
              <a class="text-black-50" href="index.php?p=detailproduct" title="Máy đánh trứng cao cấp Lock & Lock">
                Máy đánh trứng cao cấp Lock & Lock
              </a>
            </h6>
            <div class="price-box">
              150.000₫
              <del class="small text-muted ms-1">160.000₫</del>
            </div>
          </div>
        </div>
        <div class="d-flex flex-wrap align-items-center">
          <div class="product-thumbnail position-relative scale_hover">
            <a href="index.php?p=detailproduct">
              <img src="public/demo/header-product-2.png" alt="">
            </a>
            <span class="discount">- 33%</span>
          </div>
          <div class="product-info">
            <h6 style="font-size: 14px;" class="line-2">
              <a class="text-black-50" href="index.php?p=detailproduct" title="Máy đánh trứng cao cấp Lock&amp;Lock">
                Đèn chùm treo tường Luxury 02
              </a>
            </h6>
            <div class="price-box">
              150.000₫
              <del class="small text-muted ms-1">160.000₫</del>
            </div>
          </div>
        </div>
        <div class="d-flex flex-wrap align-items-center">
          <div class="product-thumbnail position-relative scale_hover">
            <a href="index.php?p=detailproduct">
              <img src="public/demo/header-product-3.png" alt="">
            </a>
          </div>
          <div class="product-info">
            <h6 style="font-size: 14px;" class="line-2">
              <a class="text-black-50" href="index.php?p=detailproduct" title="Máy đánh trứng cao cấp Lock&amp;Lock">
                Đèn chùm treo tường Luxury 02
              </a>
            </h6>
            <div class="price-box">
              150.000₫
              <del class="small text-muted ms-1">160.000₫</del>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xxl-3 col-md-6 col-12 user-cart-style clearfix">
      <div class="d-xxl-flex d-inline-block flex-wrap align-items-center justify-content-end">
        <div style="width:170px" class="border-bottom-responsive d-flex flex-wrap align-items-center ps-md-3 ps-2">
          <div class="me-2">
            <img src="public/demo/icon_user.png" alt="Home Decor">
          </div>
          <ul class="list-unstyled mb-0 ms-2">
            <li><a href="index.php?p=register">Đăng ký</a></li>
            <li><a href="index.php?p=login">Đăng nhập</a></li>
          </ul>
        </div>
      </div>
      <div class="d-xxl-flex d-inline-block float-end clearfix flex-wrap align-items-center justify-content-end">
        <div style="width:170px" class="d-flex flex-wrap align-items-center ps-3">
          <div class="me-2">
            <img src="public/demo/icon_cart.png" alt="Home Decor">
          </div>
          <ul class="list-unstyled mb-0 ms-2">
            <li>
              <a href="index.php?p=cart">
                <div>Giỏ hàng</div>
              </a>
              <a href="index.php?p=cart">
                <span class="text-black-50">(1) sản phẩm</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- header nav -->
<div class="row header-nav px-6 d-none d-xxl-flex justify-content-center">
  <div class="col-md-8 px-0">
    <ul class="d-flex list-unstyled mb-0 nav-header">
      <li class="nav-item me-1">
        <a class="fw-bold fs-6" href="index.php">
          Trang chủ
        </a>
      </li>
      <li class="nav-item me-1">
        <a class="fw-bold fs-6" href="index.php?p=aboutus">
          Giới thiệu
        </a>
      </li>
      <li class="nav-item me-1 dropdown">
        <label class="dropdown-toggle fw-bold fs-6" id="dropdownProduct" data-mdb-toggle="dropdown"
          aria-expanded="false">
          <a class="" href="index.php?p=listproducts">
            Sản phẩm
            <i style="font-size: 14px;" class="bi bi-caret-down-fill"></i>
          </a>
        </label>
        <ul class="dropdown-menu dropdownProduct border-0 py-0 rounded-0 fs-6" aria-labelledby="dropdownProduct">
          <li class="fs_14">
            <!-- Dropdown level 2 -->
            <div class="dropdown px-3">
              <a href="index.php?p=listproducts" class="dropdown-item px-0" id="dropdownIndustrial"
                data-mdb-toggle="dropdown" aria-expanded="false">
                Sản phẩm hot <i style="font-size: 12px; line-height: 23px;"
                  class="bi bi-caret-right-fill float-end"></i>
              </a>
              <ul class="dropdown-menu dropdown_menu border-0 rounded-0 py-0" aria-labelledby="dropdownIndustrial">
                <li class="fs_14 fw-bold px-4">
                  <a class="dropdown-item px-0" title="Đồ dùng nhà bếp" href="index.php?p=listproducts">
                    Đồ dùng nhà bếp
                  </a>
                </li>
                <li class="fs_14 fw-bold px-4">
                  <a class="dropdown-item px-0" title="Đồ dùng dọn dẹp" href="index.php?p=listproducts">
                    Đồ dùng dọn dẹp
                  </a>
                </li>
                <li class="fs_14 fw-bold px-4">
                  <a class="dropdown-item px-0" title="Đồ sứ đẹp" href="index.php?p=listproducts">
                    Đồ sứ đẹp
                  </a>
                </li>
                <li class="fs_14 fw-bold px-4">
                  <a class="dropdown-item px-0" title="Trang trí - Quà tặng" href="index.php?p=listproducts">
                    Trang trí - Quà tặng
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="fs_14 px-3">
            <a class="dropdown-item px-0" title="Sản phẩm mới" href="index.php?p=listproducts">
              Sản phẩm mới
            </a>
          </li>
          <li class="fs_14 px-3">
            <a class="dropdown-item px-0" title="Đồ tiện ích thông minh" href="index.php?p=listproducts">
              Đồ tiện ích thông minh
            </a>
          </li>
          <li class="fs_14 px-3">
            <a class="dropdown-item px-0" title="Đồ dùng nhà bếp" href="index.php?p=listproducts">
              Đồ dùng nhà bếp
            </a>
          </li>

          <li class="fs_14 px-3">
            <a class="dropdown-item px-0" title="Đồ dùng phòng khách" href="index.php?p=listproducts">
              Đồ dùng phòng khách
            </a>
          </li>
          <li class="fs_14 px-3">
            <a class="dropdown-item px-0" title="Đồ dùng phòng ngủ" href="index.php?p=listproducts">
              Đồ dùng phòng ngủ
            </a>
          </li>
          <li class="fs_14 px-3">
            <a class="dropdown-item px-0" title="Đồ dùng dọn dẹp" href="index.php?p=listproducts">
              Đồ dùng dọn dẹp
            </a>
          </li>
          <li class="fs_14 px-3">
            <a class="dropdown-item px-0" title="Trang trí - Quà tặng" href="index.php?p=listproducts">
              Trang trí - Quà tặng
            </a>
          </li>
          <li class="fs_14 px-3">
            <a class="dropdown-item px-0" title="Đồ dùng trẻ em" href="index.php?p=listproducts">
              Đồ dùng trẻ em
            </a>
          </li>
          <li class="fs_14 px-3">
            <a class="dropdown-item px-0" title="Đồ sứ đẹp" href="index.php?p=listproducts">
              Đồ sứ đẹp
            </a>
          </li>
          <li class="fs_14 px-3">
            <a class="dropdown-item px-0" title="Sản phẩm mua nhiều" href="index.php?p=listproducts">
              Sản phẩm mua nhiều
            </a>
          </li>
          <li class="fs_14 px-3">
            <a class="dropdown-item px-0" title="Sản phẩm khuyến mãi" href="index.php?p=listproducts">
              Sản phẩm khuyến mãi
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item me-1 fs-6">
        <a class="fw-bold" href="index.php?p=news">
          Tin tức
        </a>
      </li>
      <li class="nav-item me-1 fs-6">
        <a class="fw-bold" href="index.php?p=contactus">
          Liên hệ
        </a>
      </li>
      <li class="nav-item me-1 fs-6">
        <a class="fw-bold" href="index.php?p=listproducts">
          Sản phẩm nổi bật
        </a>
      </li>
    </ul>
  </div>
  <div class="col-md-4 text-end">
    <div class="position-relative">
      <span class="d-inline-block h-100 search-icon">
        <i class="fas fa-search fs-6"></i>
        <form action="/search" method="get" class="input-group search-bar" role="search">
          <input type="text" autocomplete="off" required="" placeholder="Tìm kiếm..." class="border-0 auto-search">
          <button type="submit" class="btn btn-search bg-white">
            <i class="fa fa-search"></i>
          </button>
        </form>
      </span>
    </div>
  </div>
</div>

<!-- header nav mobile and tablet -->
<div class="row align-items-center d-xxl-none d-flex nav-mobile">
  <div class="col-6 px-0 ps-2 fw-bold">
    <i class="fas fa-bars me-1" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
      aria-controls="offcanvasExample"></i> Danh mục
  </div>
  <div class="col-6 text-end">
    <form action="/search" method="get" class="input-group search-bar d-block w-70 me-2" role="search">
      <input type="text" autocomplete="off" required="" placeholder="Tìm kiếm..." class="border-0 auto-search">
      <button type="submit" class="btn btn-search bg-white">
        <i class="fa fa-search"></i>
      </button>
    </form>
  </div>
</div>

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-body pt-5 px-0">
    <ul class="list-unstyled">
      <li class="nav_item level0">
        <a class="text-white fs-6" href="/">Trang chủ</a>
      </li>
      <li class="nav_item level0">
        <a class="text-white fs-6" href="index.php?p=aboutus">Giới thiệu</a>
      </li>
      <li class="nav_item level0">
        <a class="text-white fs-6 d-flex justify-content-between" href="/collections/all">
          <span>Sản phẩm</span>
          <i class="fa fa-plus text-white"></i>
        </a>
        <ul class="level0" style="display:none;">
          <li class="level1 ">
            <a href="/san-pham-hot"> <span>Sản phẩm hot</span> </a>
            <i class="fa fa-plus"></i>
            <ul class="level1" style="display:none;">
              <li class="level2 ">
                <a href="/do-dung-nha-bep"><span>Đồ dùng nhà bếp</span></a>
              </li>
              <li class="level2 ">
                <a href="/do-dung-don-dep"><span>Đồ dùng dọn dẹp</span></a>
              </li>
              <li class="level2 ">
                <a href="/do-su-dep"><span>Đồ sứ đẹp</span></a>
              </li>
              <li class="level2 ">
                <a href="/trang-tri-qua-tang"><span>Trang trí - Quà tặng</span></a>
              </li>
            </ul>
          </li>
          <li class="level1 ">
            <a href="/san-pham-moi"> <span>Sản phẩm mới</span> </a>
          </li>
          <li class="level1 ">
            <a href="/do-tien-ich-thong-minh"> <span>Đồ tiện ích thông minh</span> </a>
          </li>
          <li class="level1 ">
            <a href="/do-dung-nha-bep"> <span>Đồ dùng nhà bếp</span> </a>
          </li>
          <li class="level1 ">
            <a href="/do-dung-phong-khach"> <span>Đồ dùng phòng khách</span> </a>
          </li>
          <li class="level1 ">
            <a href="/do-dung-phong-ngu"> <span>Đồ dùng phòng ngủ</span> </a>
          </li>
          <li class="level1 ">
            <a href="/do-dung-don-dep"> <span>Đồ dùng dọn dẹp</span> </a>
          </li>
          <li class="level1 ">
            <a href="/trang-tri-qua-tang"> <span>Trang trí - Quà tặng</span> </a>
          </li>
          <li class="level1 ">
            <a href="/do-dung-tre-em"> <span>Đồ dùng trẻ em</span> </a>

          </li>
          <li class="level1 ">
            <a href="/do-su-dep"> <span>Đồ sứ đẹp</span> </a>

          </li>
          <li class="level1 ">
            <a href="/san-pham-mua-nhieu"> <span>Sản phẩm mua nhiều</span> </a>

          </li>
          <li class="level1 ">
            <a href="/san-pham-khuyen-mai"> <span>Sản phẩm khuyến mãi</span> </a>

          </li>
        </ul>
      </li>
      <li class="nav_item level0">
        <a class="text-white fs-6" href="/tin-tuc">Tin tức</a>
      </li>
      <li class="nav_item level0">
        <a class="text-white fs-6" href="/lien-he">Liên hệ</a>
      </li>
      <li class="nav_item level0">
        <a class="text-white fs-6" href="/san-pham-noi-bat">Sản phẩm nổi bật</a>
      </li>
    </ul>
  </div>
</div>


<script>
  $(document).ready(function () {
    $('.header-product').owlCarousel({
      center: false,
      loop: false,
      margin: 0,
      dots: true,
      margin: 15,
      dots: false,
      items: 2,
      autoplay: false,
      responsive: {
        0: {
          items: 0,
          margin: 18,
          nav: false,
        },
        768: {
          items: 0,
          nav: false,
        },
        1400: {
          items: 2
        }
      }
    });

  });
</script>