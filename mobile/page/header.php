<style>
  .bg-linear {
    background: linear-gradient(90deg, var(--mainColor), var(--mainColor2));
  }

  .header a {
    color: var(--color-white);
  }

  .header a:hover {
    color: var(--menuHover);
  }

  .branches-header {
    background: rgba(255, 255, 255, 0.2);
    border-radius: 10px !important;
    position: relative;
  }

  .btn-in-input {
    background-color: transparent;
    position: absolute;
    top: 0;
    right: 0;
    height: 100%;
    padding: 0 20px;
  }

  .search-input-header {
    height: 40px;
    padding-left: 16px;
    padding-right: 64px;
    padding-top: 0;
    padding-bottom: 0;
  }

  .blog-separa::after {
    content: '';
    width: 1px;
    height: 30px;
    background: #ffffff;
    position: absolute;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
    filter: opacity(0.4);
  }

  .nav-lv-0 {
    padding: 12px 18px;
  }

  .nav-lv-0 a {
    color: var(--color-white);
  }

  .nav-lv-0:hover a {
    color: var(--menuHover);
  }

  .dropdown-toggle::after {
    vertical-align: 2px;
  }

  .my_dropdown:hover .my_dropdown_menu {
    opacity: 1;
    transform: translateY(0);
    transition: all 0.4s;
    z-index: 2;
    visibility: visible;
  }

  .my_dropdown_menu {
    visibility: hidden;
    display: flex;
    opacity: 0;
    position: absolute;
    top: 100%;
    left: 0;
    right: 0;
    background-color: white;
    transform: translateY(40px);
    box-shadow: 0px 0px 2px 0px var(--mainColor);
    border: 1px solid var(--mainColor);
  }

  .nav-lv-0 .nav-level-1 a {
    color: var(--textColor);
    transition: 0.3s color ease;
  }

  .nav-level-1 {
    width: 25%;
    display: block;
  }

  .nav-level-1 .title a {
    color: var(--textColor);
  }

  .nav-level-1 .title:hover a {
    color: var(--mainColor);
  }

  .nav-level-1 .sub-title:hover a {
    color: var(--mainColor);
  }

  .nav-level-1 .title {
    line-height: 26px;
  }

  .nav-level-1 .sub-title {
    line-height: 28px;
  }

  .my_dropdown_menu.small_dropdown {
    max-width: 260px;
    min-width: 240px;
  }

  .nav-item:hover a {
    color: var(--mainColor);
  }

  .btn-in-input {
    height: 97%;
    width: 48px;
    background: white;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
  }

  .bg-linear-mobile {
    background: linear-gradient(-180deg, var(--mainColor), var(--mainColor2));
  }

  .content-header {
    max-height: 58px;
    z-index: 1;
  }

  .btn-cart-indicator {
    bottom: 0px;
    left: 17px;
    background-color: #cb0013;
    font-size: 13px;
    min-width: 20px;
    height: 20px;
    line-height: 20px;
    border-radius: 12px;
  }


  @media (min-width: 768px) {
    .bg-linear-mobile {
      background: linear-gradient(-180deg, var(--mainColor), var(--mainColor2));
      height: unset;
    }
  }

  @media (min-width: 1400px) {}
</style>

<div class="row d-xxl-flex d-none bg-linear px-6 align-items-center header py-2">
  <div class="col-xxl-2 col-12">
    <a href="index.php">
      <img class="img-fluid" src="public/demo/mew-logo.png" alt="">
    </a>
  </div>
  <div class="col-xxl-10">
    <div class="d-flex align-items-center">
      <a href="index.php?p=branches" title="Hệ thống cửa hàng" class="branches-header px-2 p-1 me-3">
        <small>Hệ thống cửa hàng
          <b class="d-block">(45 chi nhánh)</b>
        </small>
      </a>

      <div class="d-flex position-relative me-2">
        <input style="font-size: 14px;" type="text" class="form-control search-input-header" placeholder="Từ khoá..."
          autocomplete="off">
        <button class="btn btn-in-input" type="submit">
          <i class="bi bi-search"></i>
        </button>
      </div>
      <div class="d-flex align-items-center justify-content-between">
        <a class="d-inline-block px-3 text-center small position-relative blog-separa" href="index.php?p=technologynews"
          title="24h Công nghệ">24h<br>Công nghệ</a>
        <a class="d-inline-block px-3 text-center small" href="index.php?p=news" title="News">News</a>
        <a class="d-flex align-items-center me-3" href="tel:09214553">
          <i class="bi bi-telephone fs-4 me-2 play0 text-white"></i>
          <span><small>Gọi mua hàng</small><br><b>1900 6750</b></span>
        </a>
        <div class="d-flex align-items-center">
          <i class="fa-regular fa-circle-user fs-4 me-2 text-white"></i>
          <div>
            <a class="d-block fw-bold small" href="" title="Đăng nhập">Đăng nhập</a>
            <a class="d-block fw-bold small" href="" title="Đăng ký">Đăng ký</a>
          </div>
        </div>

        <a href="index.php?p=cart" title="Hệ thống cửa hàng"
          class="branches-header d-flex align-items-center px-2 py-1 ms-3">
          <span><i class="bi bi-basket fs-5 me-2"></i></span>
          <small style="line-height: 17px;" class="d-block">Giỏ <br> hàng</small>
          <span class="btn-cart-indicator position-absolute fw-bold text-center text-white">3</span>
        </a>
      </div>
    </div>
  </div>
</div>

<div class="row d-xxl-flex d-none bg-linear px-6 align-items-center">
  <ul class="d-flex align-items-center position-relative h-100 list-unstyled mb-0 px-3">
    <li class="nav-lv-0 fw-bold my_dropdown">
      <a class="dropdown-toggle" href="index.php?p=listproducts" title="Điện thoại">Điện thoại</a>

      <div class="my_dropdown_menu py-3 px-3 rounded">
        <div class="nav-level-1">
          <div class="title pt-1">
            <a class="fw-bold" href="index.php?p=listproducts" title="Chọn theo hãng">Chọn theo hãng</a>
          </div>
          <ul class="list-unstyled pt-2">
            <li class="sub-title">
              <a class="fw-normal fs-6" href="index.php?p=listproducts" title="Apple">Apple</a>
            </li>
            <li class="sub-title">
              <a class="fw-normal fs-6" href="index.php?p=listproducts" title="Samsung">Samsung</a>
            </li>
            <li class="sub-title">
              <a class="fw-normal fs-6" href="index.php?p=listproducts" title="Xiaomi">Xiaomi</a>
            </li>
            <li class="sub-title">
              <a class="fw-normal fs-6" href="index.php?p=listproducts" title="Oppo">Oppo</a>
            </li>
          </ul>
        </div>
        <div class="nav-level-1">
          <div class="title pt-1">
            <a class="fw-bold" href="index.php?p=listproducts" title="Chọn theo mức giá">Chọn theo mức giá</a>
          </div>
          <ul class="list-unstyled pt-2">
            <li class="sub-title">
              <a class="fw-normal fs-6" href="index.php?p=listproducts" title="Dưới 5 triệu">Dưới 5 triệu</a>
            </li>
            <li class="sub-title">
              <a class="fw-normal fs-6" href="index.php?p=listproducts" title="Từ 5 - 10 triệu">Từ 5 - 10 triệu</a>
            </li>
            <li class="sub-title">
              <a class="fw-normal fs-6" href="index.php?p=listproducts" title="Từ 10 - 15 triệu">Từ 10 - 15 triệu</a>
            </li>
            <li class="sub-title">
              <a class="fw-normal fs-6" href="index.php?p=listproducts" title="Từ 15 - 20 triệu">Từ 15 - 20 triệu</a>
            </li>
            <li class="sub-title">
              <a class="fw-normal fs-6" href="index.php?p=listproducts" title="Từ 15 - 20 triệu">Từ 15 - 20 triệu</a>
            </li>
          </ul>
        </div>

        <div class="nav-level-1">
          <div class="title pt-1">
            <a class="fw-bold" href="index.php?p=listproducts" title="Loại điện thoại">Loại điện thoại</a>
          </div>
          <ul class="list-unstyled pt-2">
            <li class="sub-title">
              <a class="fw-normal fs-6" href="index.php?p=listproducts" title="Android">Android</a>
            </li>
            <li class="sub-title">
              <a class="fw-normal fs-6" href="index.php?p=listproducts" title="IOS">IOS</a>
            </li>
            <li class="sub-title">
              <a class="fw-normal fs-6" href="index.php?p=listproducts" title="Điện thoại phổ thông">Điện thoại phổ
                thông</a>
            </li>
          </ul>
        </div>

        <div class="nav-level-1">
          <div class="title pt-1">
            <a class="fw-bold" href="index.php?p=listproducts" title="Điện thoại Hot">Điện thoại Hot</a>
          </div>
          <ul class="list-unstyled pt-2">
            <li class="sub-title">
              <a class="fw-normal fs-6" href="index.php?p=listproducts" title="Galaxy Z Fold4">Galaxy Z Fold4</a>
            </li>
            <li class="sub-title">
              <a class="fw-normal fs-6" href="index.php?p=listproducts" title="Galaxy Z Flip4">Galaxy Z Flip4</a>
            </li>
            <li class="sub-title">
              <a class="fw-normal fs-6" href="index.php?p=listproducts" title="iPhone 13">iPhone 13</a>
            </li>
            <li class="sub-title">
              <a class="fw-normal fs-6" href="index.php?p=listproducts" title="iPhone 12">iPhone 12</a>
            </li>
            <li class="sub-title">
              <a class="fw-normal fs-6" href="index.php?p=listproducts" title="iPhone 11">iPhone 11</a>
            </li>
            <li class="sub-title">
              <a class="fw-normal fs-6" href="index.php?p=listproducts" title="Samsung S22 Ultra">Samsung S22 Ultra</a>
            </li>
            <li class="sub-title">
              <a class="fw-normal fs-6" href="index.php?p=listproducts" title="Xiaomi Redmi Note 11">Xiaomi Redmi Note
                11</a>
            </li>
          </ul>
        </div>

      </div>
    </li>
    <li class="nav-lv-0 fw-bold">
      <a href="index.php?p=listproducts" title="Smart watch">Smart watch</a>
    </li>
    <li class="nav-lv-0 fw-bold my_dropdown position-relative">
      <a class="dropdown-toggle" href="index.php?p=listproducts" title="Laptop">Laptop</a>

      <ul class="list-unstyled my_dropdown_menu d-block small_dropdown p-1 rounded nav-level-1">
        <li class="nav-item d-block px-2 py-2">
          <a class="fw-normal fs-6 d-block" href="index.php?p=listproducts" title="Apple">Apple</a>
        </li>
        <li class="nav-item d-block px-2 py-2">
          <a class="fw-normal fs-6 d-block" href="index.php?p=listproducts" title="Samsung">Samsung</a>
        </li>
        <li class="nav-item d-block px-2 py-2">
          <a class="fw-normal fs-6 d-block" href="index.php?p=listproducts" title="Xiaomi">Xiaomi</a>
        </li>
        <li class="nav-item d-block px-2 py-2">
          <a class="fw-normal fs-6 d-block" href="index.php?p=listproducts" title="Oppo">Oppo</a>
        </li>
      </ul>
    </li>
    <li class="nav-lv-0 fw-bold">
      <a href="index.php?p=listproducts" title="Loa">Loa</a>
    </li>
    <li class="nav-lv-0 fw-bold my_dropdown position-relative">
      <a class="dropdown-toggle" href="index.php?p=listproducts" title="Phụ kiện">Phụ kiện</a>

      <ul class="list-unstyled my_dropdown_menu d-block small_dropdown p-1 rounded nav-level-1">
        <li class="nav-item d-block px-2 py-2">
          <a class="fw-normal fs-6 d-block" href="index.php?p=listproducts" title="Phụ kiện di động">Phụ kiện di
            động</a>
        </li>
        <li class="nav-item d-block px-2 py-2">
          <a class="fw-normal fs-6 d-block" href="index.php?p=listproducts" title="Phụ kiện Laptop">Phụ kiện Laptop</a>
        </li>
        <li class="nav-item d-block px-2 py-2">
          <a class="fw-normal fs-6 d-block" href="index.php?p=listproducts" title="Phụ kiện Gaming">Phụ kiện Gaming</a>
        </li>
      </ul>
    </li>
    <li class="nav-lv-0 fw-bold">
      <a href="index.php?p=listproducts" title="Tablet">Tablet</a>
    </li>
    <li class="nav-lv-0 fw-bold">
      <a href="index.php?p=listproducts" title="Đồng hồ">Đồng hồ</a>
    </li>
    <li class="nav-lv-0 fw-bold">
      <a href="index.php?p=listproducts" title="PC, Máy in">PC, Máy in</a>
    </li>
    <li class="nav-lv-0 fw-bold">
      <a href="index.php?p=listproducts" title="Máy cũ giá rẻ">Máy cũ giá rẻ</a>
    </li>
  </ul>
</div>

<!-- header tablet and mobile -->
<div class="row d-xxl-none d-flex bg-linear-mobile py-2">
  <div class="d-flex align-items-center content-header">
    <div>
      <div style="max-height: 40px; max-width: 52px;">
        <a href="index.php"><img class="img-fluid" src="public/demo/logo_mobi.png" alt=""></a>
      </div>
    </div>

    <div style="flex: 1;" class="ms-3">
      <form action="" method="get" class="d-flex position-relative">
        <input type="text" id="js-search-form" placeholder="Từ khoá..." value="" maxlength="70" name="query"
          class="rounded form-control pl-2 pl-lg-3 pr-5" autocomplete="off" required="">
        <button type="submit"
          class="btn-in-input border-0 d-flex align-items-center justify-content-center position-absolute p-0">
          <i class="bi bi-search"></i>
        </button>
      </form>
    </div>
  </div>
</div>