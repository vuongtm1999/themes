<style type="text/css">
  .header-info .text-bold-green,
  .header-info .text-light-green {
    color: var(--color-bold-green) !important;
  }

  .headerWishlistCount {
    position: absolute;
    right: -7px;
    top: 0px;
    background-color: var(--color-light-green);
    border-radius: 50%;
    width: 14px;
    height: 14px;
    color: #fff;
    text-align: center;
    font-size: 10px;
  }

  .card-header-wrapper {
    padding: 10px 0px;
    border-radius: 0 0 25px 25px;
    background-color: transparent;
    text-align: center;
    margin-right: 0px;
  }

  .count-item {
    position: absolute;
    background-color: var(--color-light-green);
    top: 0px;
    right: -7px;
    border-radius: 50%;
    width: 14px;
    height: 14px;
    line-height: 15px;
    border-radius: 100%;
    font-size: 10px;
  }

  .swing {
    transform-origin: center;
  }

  .nav-item {
    padding: 12px 20px;
    transition: background-color 0.2s linear;
  }

  .nav-item:hover {
    background-color: var(--color-light-green);
  }

  .flash-sale {
    padding: 11px 20px;
    animation: tada 2s infinite;
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
    margin-left: 220px !important;
    margin-top: -41px !important;
  }

  .dropdownProduct {
    transform-origin: 0% 0%;
    transform: perspective(600px) rotateX(-90deg);
    transition: transform 0.5s ease, opacity 0.2s ease;
    opacity: 0;
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
  }

  .dropdownProduct.dropdown-menu {
    left: 0px;
    top: 100%;
    width: 220px;
  }

  .responsive-logo-header {
    height: 35px;
  }

  .responsive-user .border {
    border: unset !important;
  }

  .card-header-wrapper i.text-white {
    color: black !important;
  }

  .offCanvasHeader {
    width: 250px;
  }

  #offCanvasHeader .offcanvas-body .nav_item {
    padding: 15px;
    color: #212529;
    height: unset;
    display: block;
    font-size: 16px;
    border-top: 1px solid #d4d4d4;
    position: relative;
  }

  .nav_item .fa-caret-down {
    width: 14px;
    height: 14px;
    display: block;
    position: absolute;
    right: 15px;
    top: 22px;
    cursor: pointer;
  }

  .nav_item .fa-caret-down:before {
    content: "";
    width: 100%;
    height: 2px;
    margin: -1px 0 0;
    background: #212529;
    position: absolute;
    left: 0;
    top: 50%;
  }

  .nav_item .fa-caret-down:after {
    content: "";
    width: 2px;
    height: 100%;
    margin: 0 0 0 -1px;
    background: #212529;
    position: absolute;
    left: 50%;
    top: 0;
    transform: translateZ(0);
    transition: height .2s ease-in-out, top .2s ease-in-out;
  }

  .dropdown-menu#tai-khoan {
    top: 87%;
    left: -14px;
    min-width: 9rem;
    width: 147px;
  }

  .dropdown-menu#card {
    left: unset;
    top: 108%;
    width: 340px;
    right: 0;
  }


  /* md */
  @media (min-width: 768px) {
    .responsive-user .border {
      border: 1px solid #dee2e6 !important;
    }

    .card-header-wrapper i.text-white {
      color: white !important;
    }

    .card-header-wrapper {
      padding: 10px 20px;
      background-color: var(--color-bold-green);
    }
  }

  /* PC */
  @media (min-width: 1400px) {}
</style>

<!-- header top -->
<div class="row px-xxl-3 px-1 pb-2 align-items-center">
  <div class="col-xxl-2 col-md-7 col-8 order-xxl-1">
    <div class="d-flex flex-wrap align-items-center">
      <a class="me-3 d-xxl-none d-inline" data-bs-toggle="offcanvas" href="#offCanvasHeader">
        <i style="vertical-align: text-top;" class="fa-solid fa-bars fs-4"></i>
      </a>
      <a href="index.php">
        <img class="img-fluid responsive-logo-header" src="public/demo/logo.png" alt="">
      </a>
    </div>
  </div>
  <div class="col-xxl-4 col-12 order-xxl-2 order-3 py-3">
    <form class="d-flex" role="search">
      <input class="form-control rounded-0 rounded-pill-start py-2 px-3 fst-italic" type="search"
        placeholder="Tìm kiếm sản phẩm" aria-label="Search">
      <button class="btn  bg-bold-green rounded-0 rounded-pill-end px-3" type="submit">
        <i class="bi bi-search text-white"></i>
      </button>
    </form>
  </div>
  <div class="col-xxl-6 col-md-5 col-4 order-xxl-3">
    <div class="d-flex flex-wrap align-items-center">
      <div class="col-md-6">
        <div class="d-flex header-info">
          <div class="d-xxl-flex d-none align-items-center me-4">
            <div>
              <img class="img-fluid w-75 h-75 wow swing infinite" src="public/demo/call-icon.png" alt="">
            </div>
            <div>
              <div>
                Hotline:
              </div>
              <a class="text-bold-green fw-bolder" href="#">
                19006750
              </a>
            </div>
          </div>

          <div class="d-xxl-flex d-none align-items-center">
            <div>
              <img class="img-fluid w-75 h-75" src="public/demo/email-icon.png" alt="">
            </div>
            <div>
              <div>
                Email:
              </div>
              <a class="text-bold-green fw-bolder" href="#">
                support@sapo.vn
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xxl-6 col-12">
        <div class="d-flex justify-content-end">
          <div class="d-flex align-items-center me-xxl-4 me-2 responsive-user dropdown">
            <a style="line-height: 32px;" class="rounded-pill px-xxl-3 px-2 border border-dark text-bold-green"
              href="index.php?p=account">
              <i style="vertical-align: middle; color: initial;" class="bi bi-person fs-3 d-inline"></i>
              <span class="fs-6 d-md-inline d-none">Tài khoản</span>
            </a>
            <ul class="dropdown-menu rounded-0 py-0" id="tai-khoan">
              <li><a class="dropdown-item" href="index.php?p=account">Đăng nhập</a></li>
              <li><a class="dropdown-item" href="index.php?p=account">Đăng ký</a></li>
            </ul>
          </div>

          <div class="d-flex align-items-center me-xxl-4 me-3 mt-2">
            <a style="margin-top: -5px;" href="index.php?p=yeuthich" class="position-relative">
              <i style="color: initial;" class="bi bi-heart fs-4"></i>
              <span class="headerWishlistCount">5</span>
            </a>
          </div>

          <div class="d-flex align-items-center">
            <div class="card-header-wrapper dropdown">
              <a href="index.php?p=cart" title="Giỏ hàng">
                <div class="position-relative">
                  <i class="bi bi-bag fs-4 text-white"></i>
                  <span class="count-item text-white">3</span>
                </div>
                <div class="text-white d-md-block d-none">Cart</div>
              </a>
              <ul class="dropdown-menu rounded-0 py-0 text-center p-3" id="card">
                <img class="m-3" width="80" src="public/demo/cart-rong-icon.svg" alt="">
                <p>Không có sản phẩm nào trong giỏ hàng của bạn</p>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- header nav -->
<div class="row header-nav bg-primary px-5 d-none d-xxl-flex">
  <div class="col-md-6">
    <ul class="d-flex list-unstyled mb-0">
      <li class="nav-item me-1">
        <a class="text-white fw-bold fs-6" href="index.php">
          Trang chủ
        </a>
      </li>
      <li class="nav-item me-1">
        <a class="text-white fw-bold fs-6" href="index.php?p=gioithieu">
          Giới thiệu
        </a>
      </li>
      <li class="nav-item me-1 dropdown">
        <label class="dropdown-toggle text-white fw-bold fs-6" id="dropdownProduct" data-mdb-toggle="dropdown"
          aria-expanded="false">
          <a class="text-white" href="index.php?p=listproducts">Sản phẩm</a>
        </label>
        <ul class="dropdown-menu dropdownProduct border-0 py-0 rounded-0 fs-6" aria-labelledby="dropdownProduct">
          <li class="fs_14 fw-bold">
            <!-- Dropdown level 2 -->
            <div class="dropdown">
              <a href="#" class="dropdown-item py-2 px-2" id="dropdownIndustrial" data-mdb-toggle="dropdown"
                aria-expanded="false">
                Trang điểm <i style="font-size: 12px; line-height: 23px;" class="bi bi-caret-right-fill float-end"></i>
              </a>
              <ul class="dropdown-menu dropdown_menu border-0 rounded-0 py-0" aria-labelledby="dropdownIndustrial">
                <li class="fs_14 fw-bold"><a class="dropdown-item py-2 px-4" href="#">Belt Division</a></li>
                <li class="fs_14 fw-bold"><a class="dropdown-item py-2 px-4" href="#">Grain Division</a></li>
                <li class="fs_14 fw-bold"><a class="dropdown-item py-2 px-4" href="#">Hose Division</a></li>
              </ul>
            </div>
          </li>
          <li class="fs_14 fw-bold">
            <!-- Dropdown level 2 -->
            <div class="dropdown">
              <a href="#" class="dropdown-item py-2 px-2" id="dropdownIndustrial" data-mdb-toggle="dropdown"
                aria-expanded="false">
                Chăm sóc da <i style="font-size: 12px; line-height: 23px;" class="bi bi-caret-right-fill float-end"></i>
              </a>
              <ul class="dropdown-menu dropdown_menu bg-grey border-0 rounded-0 py-0"
                aria-labelledby="dropdownIndustrial">
                <li class="fs_14 fw-bold"><a class="dropdown-item py-2 px-4" href="#">Automatic Lubrication
                    Division</a></li>
                <li class="fs_14 fw-bold"><a class="dropdown-item py-2 px-4" href="#">Conveying Systems Division</a>
                </li>
                <li class="fs_14 fw-bold"><a class="dropdown-item py-2 px-4" href="#">Motion Control</a></li>
              </ul>
            </div>
          </li>
          <li class="fs_14 fw-bold">
            <!-- Dropdown level 2 -->
            <div class="dropdown">
              <a href="#" class="dropdown-item py-2 px-2" id="dropdownIndustrial" data-mdb-toggle="dropdown"
                aria-expanded="false">
                Chăm sóc tóc <i style="font-size: 12px; line-height: 23px;"
                  class="bi bi-caret-right-fill float-end"></i>
              </a>
              <ul class="dropdown-menu dropdown_menu bg-grey border-0 rounded-0 py-0"
                aria-labelledby="dropdownIndustrial">
                <li class="fs_14 fw-bold"><a class="dropdown-item py-2 px-4" href="#">Facility Maintenance
                    Division</a></li>
                <li class="fs_14 fw-bold"><a class="dropdown-item py-2 px-4" href="#">Hydraulic Division</a></li>
                <li class="fs_14 fw-bold"><a class="dropdown-item py-2 px-4" href="#">Installation &amp; Preventative
                    Division</a></li>
                <li class="fs_14 fw-bold"><a class="dropdown-item py-2 px-4" href="#">Vibration Analysis Division</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="fs_14 fw-bold">
            <!-- Dropdown level 2 -->
            <div class="dropdown">
              <a href="#" class="dropdown-item py-2 px-2" id="dropdownIndustrial" data-mdb-toggle="dropdown"
                aria-expanded="false">
                Chăm sóc toàn thân <i style="font-size: 12px; line-height: 23px;"
                  class="bi bi-caret-right-fill float-end"></i>
              </a>
              <ul class="dropdown-menu dropdown_menu bg-grey border-0 rounded-0 py-0"
                aria-labelledby="dropdownIndustrial">
                <li class="fs_14 fw-bold"><a class="dropdown-item py-2 px-4" href="#">Gearbox Division </a></li>
                <li class="fs_14 fw-bold"><a class="dropdown-item py-2 px-4" href="#">Gearing Inspection &amp; Repair
                    Division</a></li>
                <li class="fs_14 fw-bold"><a class="dropdown-item py-2 px-4" href="#">Gearing Reverse Engineering
                    Division</a></li>
              </ul>
            </div>
          </li>
          <li class="fs_14 fw-bold">
            <!-- Dropdown level 2 -->
            <div class="dropdown">
              <a href="#" class="dropdown-item py-2 px-2" id="dropdownIndustrial" data-mdb-toggle="dropdown"
                aria-expanded="false">
                Tools & Brushes <i style="font-size: 12px; line-height: 23px;"
                  class="bi bi-caret-right-fill float-end"></i>
              </a>
              <ul class="dropdown-menu dropdown_menu bg-grey border-0 rounded-0 py-0"
                aria-labelledby="dropdownIndustrial">
                <li class="fs_14 fw-bold"><a class="dropdown-item py-2 px-4" href="#">Aerospace Machining Division</a>
                </li>
                <li class="fs_14 fw-bold"><a class="dropdown-item py-2 px-4" href="#">Aerospace Assembly Division</a>
                </li>
                <li class="fs_14 fw-bold"><a class="dropdown-item py-2 px-4" href="#">Aerospace Testing &amp;
                    Repairing Division</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </li>
      <li class="nav-item me-1 fs-6">
        <a class="text-white fw-bold" href="index.php?p=tintuc">
          Tin tức
        </a>
      </li>
      <li class="nav-item me-1 fs-6">
        <a class="text-white fw-bold" href="index.php?p=lienhe">
          Liên hệ
        </a>
      </li>
    </ul>
  </div>
  <div class="col-md-6 text-end">
    <a href="javascript:;" data-href=".section_best_sellers" class="text-white d-inline-block fw-bold flash-sale">
      <img width="12" src="//bizweb.dktcdn.net/100/473/812/themes/889220/assets/menu_icon_3.png?1681183006918"
        alt="Lofi Cosmetic"> Flash Sale
    </a>
  </div>
</div>

<div class="offcanvas offcanvas-start" tabindex="-1" id="offCanvasHeader" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="fw-bold">
      Menu
    </h5>
    <a type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></a>
  </div>
  <div class="offcanvas-body px-0">
    <ul class="list-unstyled">
      <li class="nav_item">
        <a href="index.php" title="Trang chủ">
          Trang chủ
        </a>
      </li>
      <li class="nav_item">
        <a href="index.php?p=gioithieu" title="Giới thiệu">
          Giới thiệu
        </a>
      </li>
      <li class="nav_item">
        <a class="caret-down" href="index.php?p=listproducts" title="Sản phẩm">
          Sản phẩm
        </a>
        <i class="fa fa-caret-down" onclick="toggleSubItem('sanpham')"></i>
        <ul style="display: none;" id="sanpham" class="ps-0">
          <li class="nav_item">
            <a class="caret-down" href="index.php?p=listproducts" title="Trang điểm">
              Trang điểm
            </a>
            <i class="fa fa-caret-down" onclick="toggleSubItem('trangdiem')"></i>
            <ul style="display: none;" id="trangdiem" class="ps-0">
              <li>
                <a href="index.php?p=listproducts" title="Trang điểm mặt" class="a3">Trang điểm mặt</a>
              </li>
              <li>
                <a href="index.php?p=listproducts" title="Trang điểm môi" class="a3">Trang điểm môi</a>
              </li>
              <li>
                <a href="index.php?p=listproducts" title="Trang điểm mắt" class="a3">Trang điểm mắt</a>
              </li>
              <li>
                <a href="index.php?p=listproducts" title="Dụng cụ trang điểm" class="a3">Dụng cụ trang điểm</a>
              </li>
            </ul>
          </li>
          <li>
            <a class="caret-down" href="/cham-soc-da" title="Chăm sóc da">
              Chăm sóc da
            </a>
            <ul>
              <li>
                <a href="index.php?p=listproducts" title="Làm sạch da" class="a3">Làm sạch da</a>
              </li>
              <li>
                <a href="index.php?p=listproducts" title="Chăm sóc da" class="a3">Chăm sóc da</a>
              </li>
              <li>
                <a href="index.php?p=listproducts" title="Mặt nạ" class="a3">Mặt nạ</a>
              </li>
              <li>
                <a href="index.php?p=listproducts" title="Kem chống nắng" class="a3">Kem chống nắng</a>
              </li>
            </ul>
          </li>
          <li>
            <a class="caret-down" href="index.php?p=listproducts" title="Chăm sóc tóc">
              Chăm sóc tóc
            </a>
            <ul>
              <li>
                <a href="index.php?p=listproducts" title="Làm sạch tóc" class="a3">Làm sạch tóc</a>
              </li>
              <li>
                <a href="index.php?p=listproducts" title="Phục hồi dưỡng tóc" class="a3">Phục hồi dưỡng tóc</a>
              </li>
              <li>
                <a href="index.php?p=listproducts" title="Nhuộm tóc" class="a3">Nhuộm tóc</a>
              </li>
            </ul>
          </li>
          <li>
            <a class="caret-down" href="/cham-soc-toan-than" title="Chăm sóc toàn thân">
              Chăm sóc toàn thân
            </a>
            <ul>
              <li>
                <a href="index.php?p=listproducts" title="Làm sạch cơ thể" class="a3">Làm sạch cơ thể</a>
              </li>
              <li>
                <a href="index.php?p=listproducts" title="Chăm sóc cơ thể" class="a3">Chăm sóc cơ thể</a>
              </li>
              <li>
                <a href="index.php?p=listproducts" title="Chăm sóc răng miệng" class="a3">Chăm sóc răng miệng</a>
              </li>
              <li>
                <a href="index.php?p=listproducts" title="Vệ sinh phụ nữ" class="a3">Vệ sinh phụ nữ</a>
              </li>
            </ul>
          </li>
          <li>
            <a class="caret-down" href="/tools-brushes" title="Tools &amp; Brushes">
              Tools &amp; Brushes
            </a>
            <ul>
              <li>
                <a href="index.php?p=listproducts" title="Dụng cụ trang điểm" class="a3">Dụng cụ trang điểm</a>
              </li>
              <li>
                <a href="index.php?p=listproducts" title="Dụng cụ chăm sóc da" class="a3">Dụng cụ chăm sóc da</a>
              </li>
              <li>
                <a href="index.php?p=listproducts" title="Dụng cụ chăm sóc cơ thể" class="a3">Dụng cụ chăm sóc cơ
                  thể</a>
              </li>
              <li>
                <a href="index.php?p=listproducts" title="Dụng cụ chăm sóc răng miệng" class="a3">Dụng cụ chăm sóc
                  răng miệng</a>
              </li>
            </ul>
          </li>
        </ul>
      </li>
      <li class="nav_item">
        <a href="index.php?p=tintuc" title="Tin tức">
          Tin tức
        </a>
      </li>
      <li class="nav_item">
        <a href="index.php?p=lienhe" title="Liên hệ">
          Liên hệ
        </a>
      </li>
    </ul>
  </div>
</div>

<script>
  $(document).ready(function () {
    $(window).scroll(function () {
      if ($(this).scrollTop() > 75) {
        $('.header-nav').css({ 'position': 'fixed', 'width': '100%', 'top': 0, 'z-index': 22 });
      } else if ($(this).scrollTop() <= 75) {
        $('.header-nav').css({ 'position': 'static', 'width': 'unset' });
      }
    });
    // $(`.fa.fa-caret-down[toggle-target='sanpham']`).click(function () {
    //   console.log("test");
    //   $('.fa.fa-caret-down+ul#sanpham').slideToggle();
    // });

  });

  function toggleSubItem(id) {
    $(`#sanpham`).slideToggle();
  }

</script>