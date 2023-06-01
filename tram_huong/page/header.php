<style type="text/css">
  .btn-in-input {
    position: absolute !important;
    top: 50%;
    right: 3px;
    transform: translateY(-50%);
    padding: 5px 26px;
  }

  .icon_below_search {
    height: 20px;
    width: 20px;
  }

  .text_below_search {
    font-size: 12px;
  }

  .header-icon {
    width: 24px;
    height: 30px;
  }

  .txt-overflow {
    white-space: nowrap;
    text-overflow: ellipsis;
    display: inline-block;
    vertical-align: middle;
    max-width: 115px;
    overflow: hidden;
  }

  .header-action__link {
    border-left: 1px solid rgba(255, 255, 255, 0.2);
  }

  .heaeder-item-box {
    height: 28px;
  }

  .icon_angle_down {
    margin-left: 3px;
  }

  .blob {
    background: white;
    border-radius: 50%;
    box-shadow: 0 0 1px 2px #ffffff;
    margin: 10px;
    height: 5px;
    width: 6px;
    transform: scale(1);
    animation: pulse-white 1.5s infinite;
  }

  .my_blob {
    position: absolute;
    top: 57%;
    left: 5%;
  }

  @keyframes pulse-white {
    0% {
      transform: scale(0.95);
      box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.7);
    }

    50% {
      transform: scale(1);
      box-shadow: 0 0 0 10px rgba(255, 255, 255, 0);
    }

    100% {
      transform: scale(0.95);
      box-shadow: 0 0 0 0 rgba(255, 255, 255, 0);
    }
  }

  .count-holder {
    position: absolute;
    background: #ff0000;
    color: #fff;
    font-size: 11px;
    text-align: center;
    padding: 0px 3px;
    min-width: 20px;
    height: 20px;
    line-height: 20px;
    border-radius: 50%;
    left: 9px;
    top: -9px;
  }

  .header_logo {
    width: 75%;
  }

  .text__hover:hover+.dropdown-menu {
    display: block;
  }

  .dropdown-menu:hover {
    display: block;
  }

  .text__hover:hover .chevron_down_icon {
    transform: rotate(180deg);
  }

  .dropdown-menu .dropdown-item {
    border-top: 1px solid #ecf0f1;
  }

  .chevron_down_icon {
    font-size: 8px;
    transition: all 0.2s;
  }

  .dropdown-menu {
    padding: 0px;
    border-radius: unset;
    border: unset;
  }

  .text_color_nav_bar {
    color: var(--shop-color-nav-bar) !important;
  }

  .flex-1 {
    flex: 1 !important;
  }

  .flex-2 {
    flex: 2 !important;
  }

  .dropdown-item:active {
    background-color: initial;
    background-color: #e9ecef;
  }

  .topbar {
    text-align: center;
    font-weight: 500;
    font-size: 13px;
    padding: 8px 0;
    position: relative;
    display: block;
    overflow: hidden;
    background: #2b2b2b;
    color: #ffffff;
  }

  .topbar .owl-nav [class*=owl-]:hover {
    color: #ffffff;
    background-color: transparent;
  }

  @keyframes fadeIn {
    from {
      opacity: 0;
    }

    to {
      opacity: 1;
    }
  }

  @keyframes fadeOut {
    from {
      opacity: 1;
    }

    to {
      opacity: 0;
    }
  }

  .topbar>.owl-nav>.owl-next {
    top: 50%;
    transform: translateY(-70%);
    position: absolute;
    right: 3vw;
    opacity: 0;
    animation: fadeOut ease-in 0.2s;
    height: 28px;
    width: 28px;
  }

  .topbar>.owl-nav>.owl-prev {
    top: 50%;
    transform: translateY(-70%);
    position: absolute;
    left: 3vw;
    opacity: 0;
    animation: fadeOut ease-in 0.2s;
    height: 28px;
    width: 28px;
  }

  .topbar:hover .owl-nav>.owl-next {
    animation: fadeIn ease-in 0.2s;
    opacity: 1;
  }

  .topbar:hover .owl-nav>.owl-prev {
    animation: fadeIn ease-in 0.2s;
    opacity: 1;
  }


  .topbar.owl-theme .owl-nav {
    margin-top: unset;
  }

  #purchase-area-dropdown::after {
    content: "";
    border-width: 20px 27px;
    border-style: solid;
    border-color: transparent transparent white transparent;
    position: absolute;
    bottom: calc(100% - 12px);
    left: 18%;
  }

  .added-products {
    max-height: 40vh;
    overflow-y: scroll;
  }

  .added-products::-webkit-scrollbar {
    width: 5px;
    height: 50px;
  }

  .added-products::-webkit-scrollbar-thumb {
    background: #BEC0C1;
  }

  .added-products .img-cart {
    width: 75px;
    height: 75px;
  }

  #cart-dropdown::after {
    content: "";
    border-width: 20px 27px;
    border-style: solid;
    border-color: transparent transparent white transparent;
    position: absolute;
    bottom: calc(100% - 12px);
    right: 13%;
  }

  .added-products .nut-dong {
    display: inline-block;
    width: 20px;
    height: 20px;
    line-height: 20px;
    text-align: center;
  }

  .added-products .quantity-input {
    height: 30px;
    width: 30px;
    padding: 0;
    text-align: center;
    border: 2px solid #f3f4f4;
    border-left: none;
    border-right: none;
  }

  .added-products .quantity-btn {
    border: 1px solid #f3f4f4;
    height: 30px;
    width: 30px;
    background: #F9F9F9;
  }

  .added-products .quantity-btn i {
    color: #A4AAAF;
  }

  .added-products .quantity-btn:hover i {
    color: #000;
  }

  #cart-dropdown .btn-main {
    color: white;
    background-color: var(--shop-color-button);
    border: unset;
  }

  .btn-search-header:focus {
    box-shadow: none;
  }

  /* sm */
  @media (max-width: 768px) {
    .px-6 {
      padding-left: unset !important;
      padding-right: unset !important;
    }

    .header-mobile .item-left {
      padding-left: 0px;
    }

    .header-mobile .item-right {
      padding-right: 0px;
    }
  }

  /* md */
  @media (min-width: 768px) {
    .img-logo {
      position: static !important;
      transform: unset !important;
    }
  }

  /* PC */
  @media (min-width: 1400px) {}
</style>

<!-- Topbar -->
<div class="row">
  <div class="topbar owl-carousel owl-theme text-light text-center">
    <div class="discount-txt">
      Mua trực tiếp và check-in tại cửa hàng nhận ưu đãi
      <strong>5% </strong> tất cả sản phẩm
    </div>
    <div class="discount-txt">
      Mua trực tiếp và check-in tại cửa hàng nhận ưu đãi
      <strong>5% </strong> tất cả sản phẩm
    </div>
    <div class="discount-txt">
      Đăng ký thành viên tại Cung Trầm Gallery by Trầm Thiện Tâm (membership) tiết kiếm tới <strong>20% </strong> tất cả
      sản phẩm
    </div>
  </div>

</div>

<!-- Header -->
<div class="row d-xxl-flex d-none px-5 py-3 bg_main justify-content-start align-items-start">
  <div class="col-1">
    <a href="index.php"><img src="public/demo/logo.webp" class="img-fluid header_logo" alt="Thien tam" /></a>
  </div>
  <div class="col">
    <span class="d-flex input-group position-relative">
      <input type="search" class="form-control rounded header-input py-2" placeholder="Tìm kiếm sản phẩm" />
      <button type="button" class="btn btn-in-input bg_main rounded btn-search-header" style="z-index: 3">
        <i class="bi bi-search text-light"></i>
      </button>
    </span>
    <div class="d-xxl-flex d-none flex-wrap heaeder-item-box pt-2">
      <div class="ps-1">
        <img src="public/demo/dam_bao_chat_luong_ico.webp" class="img-fluid icon_below_search" alt="quality icon" />
        <span class="text-light text_below_search">Đảm bảo chất lượng</span>
      </div>
      <div class="ps-3">
        <img src="public/demo/truck_ico.webp" class="img-fluid icon_below_search" alt="quality icon" />
        <span class="text-light text_below_search">Miễn phí vận chuyển</span>
      </div>
      <div class="ps-3">
        <img src="public/demo/check_ico.webp" class="img-fluid icon_below_search" alt="quality icon" />
        <span class="text-light text_below_search">Mở hộp kiểm tra nhận hàng</span>
      </div>
    </div>
  </div>
  <div class="col pe-0">
    <div class="d-flex align-items-center">
      <div class="col">
        <a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"
          class="d-flex align-items-center text-light header-action__link ps-3 py-1 cursor">
          <span class="position-relative">
            <i class="bi bi-geo-alt text-white fs-3"></i>
            <div class="blob my_blob"></div>
          </span>

          <span class="d-inline-flex flex-column ps-2 text-white">
            <span class="fs_12 fw-500">Giao hoặc đến lấy tại
              <i class="fa fa-angle-down icon_angle_down" aria-hidden="true"></i></span>
            <span class="fs_12 fw-500">
              <span class="txt-overflow">Lô TT02-15, KĐT HD Mon, Nam Từ Liêm, Hà Nội, Phường Mỹ Đình 2,
                Quận Nam Từ Liêm
              </span>
            </span>
          </span>
        </a>

        <ul id="purchase-area-dropdown" style="max-width: 450px;" class="dropdown-menu rounded p-3 mt-2"
          style="border-radius: 5px;">
          <h5 class="text-center fw-light border-bottom border-1 pb-2">KHU VỰC MUA HÀNG</h5>
          <div class="d-flex flex-wrap my-2">
            <div class="col-6 px-1">
              <label for="filter-province" class="d-block mb-1">Tỉnh/Thành</label>
              <select class="form-select form-select-sm mb-3">
                <option value="null">- Chọn Tỉnh/Thành -</option>
                <option value="Hà Nội">Hà Nội</option>
              </select>
            </div>
            <div class="col-6 px-1">
              <label for="filter-district" class="d-block mb-1">Quận/huyện</label>
              <select class="form-select form-select-sm mb-3">
                <option value="null">- Chọn Quận/Huyện -</option>
                <option value="Quận Nam Từ Liêm">Quận Nam Từ Liêm</option>
              </select>
            </div>
          </div>
          <p class="box-address p-3 rounded" style="background: rgba(127, 43, 37, 0.1);">
            Giao hoặc đến lấy tại: <br>
            Lô TT02-15, KĐT HD Mon, Nam Từ Liêm, Hà Nội, <br>Phường Mỹ Đình 2, Quận Nam Từ Liêm
          </p>

          <div class="my-2 pb-2">Chọn cửa hàng gần bạn nhất để tối ưu chi phí giao hàng. Hoặc đến lấy hàng</div>

          <div class="d-flex p-2 border-top border-1">
            <div class="me-2">
              <img src="public/demo/location-red-icon.svg" alt="">
            </div>
            <div>
              <div class="fw-bold">Cung Trầm Gallery</div>
              <div style="display:none"> -</div>
              <div>
                TT02-15, KĐT HD Mon, Phường Mỹ Đình 2,
                Quận Nam Từ Liêm, Thành phố Hà Nội, Phường Mỹ Đình 2, Quận Nam Từ Liêm
              </div>
            </div>
        </ul>
      </div>
      <div class="col">
        <div class="d-flex align-items-center text-light header-action__link ps-3 py-1">
          <span>
            <i class="bi bi-person text-white fs-2"></i>
          </span>

          <span class="d-inline-flex flex-column ps-2">
            <span class="fs_12 fw-500">Đăng nhập / Đăng ký </span>
            <span class="fs_12 fw-500">
              <span class="txt-overflow">Tài khoản của tôi
                <i class="fa fa-angle-down icon_angle_down"></i>
              </span>
            </span>
          </span>
        </div>
      </div>
      <div class="col-3">
        <a href="#" data-bs-toggle="dropdown" aria-expanded="false"
          class="d-flex align-items-center text-light header-action__link ps-3 py-1 cursor">

          <span class="header-icon position-relative">
            <img src="public/demo/cart-icon.svg" alt="">
            <span class="count-holder">0</span>
          </span>

          <span class="ps-2">
            <span class="fs_12 fw-500 text-white">Giỏ hàng</span>
          </span>
        </a>

        <ul id="cart-dropdown" style="min-width: 450px;" class="dropdown-menu rounded pb-3" style="border-radius: 5px;">
          <div class="px-3 mt-2">
            <h5 class="py-2 text-center border-bottom border-1 fw-light">GIỎ HÀNG</h5>
          </div>
          <div class="added-products ms-3">
            <div class="d-flex mb-3">
              <div class="me-3">
                <img src="public/demo/product-img-small.webp" class="img-cart" alt="">
              </div>
              <div style="flex:1;" class="d-flex justify-content-between">
                <div>
                  <p class="fw-bolder">BỘT TRẦM HƯƠNG<br>
                    <span class="fw-lighter opacity-75">25g</span>
                  </p>
                  <div class="d-inline-flex">
                    <button type="button" class="quantity-btn">
                      <i class="fa-solid fa-minus"></i>
                    </button>
                    <input type="text" value="1" min="1" class="quantity-input">
                    <button type="button" class="quantity-btn">
                      <i class="fa-solid fa-plus"></i>
                    </button>
                  </div>
                </div>
                <div class="text-end me-3">
                  <a href="javascript:void(0);" class="nut-dong">
                    <img style="width: 12px; height: 12px;" src="public/demo/close_icon.svg" alt="">
                  </a>
                  <span class="w-100 d-inline-block text-end mt-4 fw-bolder">768,000₫</span>
                </div>
              </div>
            </div>
            <div class="d-flex mb-3">
              <div class="me-3">
                <img src="public/demo/product-img-small.webp" class="img-cart" alt="">
              </div>
              <div style="flex:1;" class="d-flex justify-content-between">
                <div>
                  <p class="fw-bolder">BỘT TRẦM HƯƠNG<br>
                    <span class="fw-lighter opacity-75">25g</span>
                  </p>
                  <div class="d-inline-flex">
                    <button type="button" class="quantity-btn">
                      <i class="fa-solid fa-minus"></i>
                    </button>
                    <input type="text" value="1" min="1" class="quantity-input">
                    <button type="button" class="quantity-btn">
                      <i class="fa-solid fa-plus"></i>
                    </button>
                  </div>
                </div>
                <div class="text-end me-3">
                  <a href="javascript:void(0);" class="nut-dong">
                    <img style="width: 12px; height: 12px;" src="public/demo/close_icon.svg" alt="">
                  </a>
                  <span class="w-100 d-inline-block text-end mt-4 fw-bolder">768,000₫</span>
                </div>
              </div>
            </div>
            <div class="d-flex mb-3">
              <div class="me-3">
                <img src="public/demo/product-img-small.webp" class="img-cart" alt="">
              </div>
              <div style="flex:1;" class="d-flex justify-content-between">
                <div>
                  <p class="fw-bolder">BỘT TRẦM HƯƠNG<br>
                    <span class="fw-lighter opacity-75">25g</span>
                  </p>
                  <div class="d-inline-flex">
                    <button type="button" class="quantity-btn">
                      <i class="fa-solid fa-minus"></i>
                    </button>
                    <input type="text" value="1" min="1" class="quantity-input">
                    <button type="button" class="quantity-btn">
                      <i class="fa-solid fa-plus"></i>
                    </button>
                  </div>
                </div>
                <div class="text-end me-3">
                  <a href="javascript:void(0);" class="nut-dong">
                    <img style="width: 12px; height: 12px;" src="public/demo/close_icon.svg" alt="">
                  </a>
                  <span class="w-100 d-inline-block text-end mt-4 fw-bolder">768,000₫</span>
                </div>
              </div>
            </div>
            <div class="d-flex mb-3">
              <div class="me-3">
                <img src="public/demo/product-img-small.webp" class="img-cart" alt="">
              </div>
              <div style="flex:1;" class="d-flex justify-content-between">
                <div>
                  <p class="fw-bolder">BỘT TRẦM HƯƠNG<br>
                    <span class="fw-lighter opacity-75">25g</span>
                  </p>
                  <div class="d-inline-flex">
                    <button type="button" class="quantity-btn">
                      <i class="fa-solid fa-minus"></i>
                    </button>
                    <input type="text" value="1" min="1" class="quantity-input">
                    <button type="button" class="quantity-btn">
                      <i class="fa-solid fa-plus"></i>
                    </button>
                  </div>
                </div>
                <div class="text-end me-3">
                  <a href="javascript:void(0);" class="nut-dong">
                    <img style="width: 12px; height: 12px;" src="public/demo/close_icon.svg" alt="">
                  </a>
                  <span class="w-100 d-inline-block text-end mt-4 fw-bolder">768,000₫</span>
                </div>
              </div>
            </div>
          </div>
          <div class="px-3">
            <div class="d-flex justify-content-between align-items-center border-top border-1 py-3">
              <span class="text-uppercase">
                Tổng tiền:
              </span>
              <span style="color:red" class="text-uppercase fw-bold">
                7,776,000₫
              </span>
            </div>
            <button style="background: red;"
              class="btn-main rounded-pill text-center mt-1 py-2 d-block text-uppercase w-100"
              onclick="window.open('index.php?p=thanhtoan')">THANH TOÁN
            </button>
          </div>
      </div>
      </ul>
    </div>
  </div>
</div>

<!-- Header navbar -->
<div class="d-xxl-flex d-none flex-wrap justify-content-center align-items-center header-nav-bar px-6">
  <div class="me-3 py-2 nav-item dropdown dropup">
    <a class="text__hover nav-link text_color_nav_bar fs_14 px-0 d-inline-block fw-light" href="index.php?p=tramhuongxongdat" id="navbarTramHuong">
      TRẦM HƯƠNG XÔNG ĐỐT
      <i class="fa fa-chevron-down chevron_down_icon" aria-hidden="true"></i>
    </a>
    <ul class="dropdown-menu custom_dropdown_menu" aria-labelledby="navbarTramHuong">
      <li><a class="dropdown-item" href="index.php?p=huongtram"> Hương Trầm </a></li>
      <li><a class="dropdown-item" href="index.php?p=nutramhuong"> Nụ Trầm Hương </a></li>
      <li><a class="dropdown-item" href="index.php?p=bottramhuong"> Bột Trầm Hương </a></li>
      <li><a class="dropdown-item" href="index.php?p=huongtramkhongtam"> Hương Trầm Không Tăm </a></li>
      <li><a class="dropdown-item" href="index.php?p=tramhuongmieng"> Trầm Hương Miếng </a></li>
    </ul>
  </div>
  <div class="me-3 py-2 nav-item dropdown dropup">
    <a class="text__hover nav-link text_color_nav_bar fs_14 px-0 d-inline-block" href="index.php?p=dungcu" id="navbarTramHuong2">
      DỤNG CỤ THƯỞNG TRẦM
      <i class="fa fa-chevron-down chevron_down_icon" aria-hidden="true"></i>
    </a>
    <ul class="dropdown-menu custom_dropdown_menu" aria-labelledby="navbarTramHuong2">
      <li><a class="dropdown-item" href="index.php?p=luxongdat">Lư Xông Trầm</a></li>
      <li><a class="dropdown-item" href="index.php?p=thackhoitramhuong">Thác Khói Trầm Hương </a></li>
      <li><a class="dropdown-item" href="index.php?p=thuonghuongkhongtam">Thưởng Hương Không Tăm</a></li>
      <li><a class="dropdown-item" href="index.php?p=tauxongtram">Tẩu Xong Trầm </a></li>
      <li><a class="dropdown-item" href="index.php?p=ludienxongtram">Lư Điện Xông Trầm</a></li>
      <li><a class="dropdown-item" href="index.php?p=phukien"> Bộ Phụ Kiện & Dụng Cụ Thưởng Trầm</a></li>
    </ul>
  </div>
  <div class="me-3 py-2 nav-item dropdown dropup">
    <a class="text__hover nav-link text_color_nav_bar fs_14 px-0 d-inline-block" href="index.php?p=quatang" id="navbarTramHuong">
      QUÀ TẶNG TRẦM HƯƠNG
      <i class="fa fa-chevron-down chevron_down_icon" aria-hidden="true"></i>
    </a>
    <ul class="dropdown-menu custom_dropdown_menu" aria-labelledby="navbarTramHuong">
      <li><a class="dropdown-item text-capitalize" href="index.php?p=boquatang">Bộ quà tặng trầm hương</a></li>
      <li><a class="dropdown-item text-capitalize" href="index.php?p=vatphamcung">Vật phẩm cúng đường</a></li>
    </ul>
  </div>
  <div class="me-3 py-2 nav-item dropdown dropup">
    <a class="text__hover nav-link text_color_nav_bar fs_14 px-0 d-inline-block" href="index.php?p=trangsuc" id="navbarTramHuong2">
      TRANG SỨC TRẦM HƯƠNG
      <i class="fa fa-chevron-down chevron_down_icon" aria-hidden="true"></i>
    </a>
    <ul class="dropdown-menu custom_dropdown_menu" aria-labelledby="navbarTramHuong2">
      <li><a class="dropdown-item text-capitalize" href="index.php?p=vongnu">Vòng trầm hương nữ</a></li>
      <li><a class="dropdown-item text-capitalize" href="index.php?p=vongnam">Vòng trầm hương nam</a></li>
      <li><a class="dropdown-item text-capitalize" href="index.php?p=chuoivongtramhuong">Chuỗi Vòng Trầm Hương <br>
          (108/216
          Hạt)</a></li>
      <li><a class="dropdown-item text-capitalize" href="index.php?p=vongtramhuongcapdoi">Vòng Trầm Hương Cặp
          Đôi</a></li>
      <li><a class="dropdown-item text-capitalize" href="index.php?p=vongtramhuongchopbe">Vòng Trầm Hương Cho Bé</a>
      </li>
      <li><a class="dropdown-item text-capitalize" href="index.php?p=vongtramhuongcapmix">Vòng Trầm Hương Mix
          Charm</a></li>
      <li><a class="dropdown-item text-capitalize" href="index.php?p=daychuyen">Dây Chuyền Trầm Hương</a></li>
    </ul>
  </div>
  <div class="me-3 py-2 nav-item dropdown dropup">
    <a class="text__hover nav-link text_color_nav_bar px-0 d-inline-block" href="index.php?p=sanphamkhac" id="navbarTramHuong5"
     >
      SẢN PHẨM KHÁC
      <i class="fa fa-chevron-down chevron_down_icon" aria-hidden="true"></i>
    </a>
    <ul class="dropdown-menu custom_dropdown_menu" aria-labelledby="navbarTramHuong5">
      <li><a class="dropdown-item text-capitalize" href="index.php?p=ruoutramhuong"> Rượu Trầm Hương</a></li>
      <li><a class="dropdown-item text-capitalize" href="index.php?p=tratramhuong">Trà Trầm Hương</a></li>
      <li><a class="dropdown-item text-capitalize" href="index.php?p=tinhdau">Tinh Dầu Trầm Hương</a></li>
      <li><a class="dropdown-item text-capitalize" href="index.php?p=tramhuongcanh"> Trầm Hương Cảnh</a></li>
    </ul>
  </div>

  <!-- TIN TỨC -->
  <div class="me-3 py-2 text-center">
    <a href="index.php?p=tintuc" class="text_color_nav_bar"> TIN TỨC </a>
  </div>
  <!-- KIẾN THỨC -->
  <div class="me-3 py-2 text-center">
    <a href="index.php?p=kienthuc" class="text_color_nav_bar"> KIẾN THỨC </a>
  </div>
</div>

<!-- Header Mobile -->
<div class="row header-mobile d-flex d-xxl-none bg_main align-items-center p-2">
  <div class="col-md-6 col-xxl-6 col align-items-center item-left">
    <div class="d-flex flex-wrap justify-content-between">
      <div class="list-icon d-inline-flex align-items-center pe-3">
        <a class="dropdown" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
          aria-expanded="false">
          <i class="bi bi-list text-white fs-2"></i>
        </a>

        <ul class="dropdown-menu menu-dropdown w-100 h-100 ps-3">
          <li>
            <a class="dropdown-item text-capitalize" href="#">Trầm Hương Xông Đốt</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Dụng Cụ Thưởng Trầm</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Quà Tặng Trầm Hương</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Trang Sức Trầm Hương</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Sản Phẩm Khác</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Tin tức</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Kiến thức</a>
          </li>
          <li>
            <div class="dropdown-item">
              <p>Bạn cần hỗ trợ?</p>
              <div class="d-flex fw-bold">
                <i class="bi bi-telephone-forward me-3"></i>
                <a href="tel:0876733333">08767.33333</a>
              </div>
              <div class="d-flex fw-bold">
                <i class="bi bi-envelope-paper me-3"></i>
                <a href="tel:0876733333">info@tramthientam.com.vn</a>
              </div>
            </div>
          </li>
        </ul>
      </div>

      <a href="index.php">
        <img style="max-height: 75px; left: 10px; left: 50%;
        transform: translateX(-65%);" class="img-fluid position-relative img-logo" src="public/demo/logo.webp" alt="">
      </a>
    </div>
  </div>

  <div class="col-md-6 col-xxl-6 col item-right">
    <div class="d-flex flex-wrap justify-content-end align-items-center">
      <div class="box-icon pe-3">
        <i class="bi bi-geo-alt fs-2 text-white"></i>
      </div>
      <div class="box-icon pe-3">
        <i class="bi bi-person fs-2 text-white"></i>
      </div>
      <div class="box-icon me-md-4 me-0">
        <span class="header-icon position-relative text-white">
          <img src="public/demo/cart-icon.svg" alt="">
          <span class="count-holder">0</span>
        </span>
      </div>
    </div>
  </div>
</div>

<!-- header search -->
<div class="row d-xxl-none py-1 px-1 bg_main">
  <div class="search-box wpo-wrapper-search position-relative">
    <form action="/search" class="d-flex align-items-center">
      <div class="w-100">
        <input required="" id="inputSearchAuto-3" class="w-100 rounded-pill py-1 ps-3" maxlength="40"
          autocomplete="off" type="text" size="30" placeholder="Tìm kiếm sản phẩm...">
      </div>
      <button type="submit" class="btn-search btn btn-in-input end-0">
        <i class="bi bi-search fs-6"></i>
      </button>
    </form>
  </div>
</div>

<script src="owlcarousel/owl.carousel.min.js"></script>
<script>
  var position = $(window).scrollTop();
  // should start at 0

  $(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll < position && scroll > 120) {
      // scroll up
      $('.test').css({ 'position': 'fixed', 'top': '0', 'width': '100%', 'z-index': 22, 'background-color': '#7f2b25', 'opacity': '1.0' });
    } else {
      // scroll down
      $('.test').css({ 'position': 'static', 'top': '0', 'width': '100%', 'z-index': 22, 'background-color': 'white', 'opacity': '1.0' });
    }
    position = scroll;
  });

  $(document).ready(function () {
    $(".topbar").owlCarousel({
      animateIn: 'flipInX',
      center: false,
      loop: false,
      margin: 0,
      nav: true,
      dots: false,
      autoplay: true,
      loop: true,
      responsive: {
        0: {
          items: 1,
          nav: false,
        },
        768: {
          items: 1,
        },
      },
    });
    $(".topbar .owl-next").html('<i style="color: #FAFAFA;" class="fa-regular fa-greater-than fs-6"></i>');
    $(".topbar .owl-prev").html('<i style="color: #FAFAFA;" class="fa-regular fa-less-than fs-6"></i>');
  });
</script>