<style type="text/css">
  .iconx {
    background-color: white;
    font-size: 26px;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .content_service {
    line-height: 20px;
  }


  .tel {
    color: #707070;
  }

  .widget-first:before {
    content: "";
    position: absolute;
    width: 2px;
    height: 60%;
    background: #ebebeb;
    top: 28%;
    left: 0;
    display: none;
  }

  .title-menu {
    padding-top: 20px;
  }

  .title-menu:hover a {
    color: initial;
  }

  .li_menu {
    line-height: 32px;
  }

  .copyright:before {
    content: "";
    position: absolute;
    width: calc(100% - 30px);
    height: 1px;
    background: #ebebeb;
    top: 0;
    left: 0;
    margin: 0 15px;
  }

  .widget {
    padding-bottom: 12px;
  }

  .copyright:before {
    content: "";
    position: absolute;
    width: calc(100% - 30px);
    height: 1px;
    background: #ebebeb;
    top: 0;
    left: 0;
    margin: 0 15px;
  }

  .menu-bottom a {
    color: #707070;
  }

  .menu-bottom a:hover {
    color: var(--color-main);
  }

  .btn-register {
    background-color: #d5dd02;
    position: absolute;
    top: 0;
    right: 0;
    height: 100%;
    padding: 0 20px;
  }

  .dragable-mobile {
    overflow-x: auto;
    white-space: nowrap;
  }

  .dragable-mobile::-webkit-scrollbar {
    display: none;
  }


  @media (min-width: 768px) {
    .title-menu i {
      display: none;
    }

    .widget-first:before {
      display: none;
    }

    .title-menu {
      padding-top: 125px;
    }

    .widget {
      padding-bottom: 27px;
    }

    .collapse#collapseMenu1:not(.show) {
      display: block;
    }

  }

  @media (min-width: 1400px) {
    .widget-first:before {
      display: block;
    }

    .bg-mid-footer {
      background-image: url(public/demo/bg_footer.jpg);
      background-size: contain;
      background-position: center;
      background-repeat: no-repeat;
    }

    .collapse:not(.show) {
      display: block;
    }


  }
</style>

<div style="background: #f6f6f6;" class="row px-6 py-3 flex-nowrap dragable-mobile mt-md-4 mt-xxl-0 mt-4">
  <div class="col-xxl-3 col-md-6 col-12 me-2">
    <div class="d-flex align-items-center">
      <span class="iconx me-1">
        <i style="color: #d5dd02;" class="fas fa-home"></i>
      </span>
      <div class="content_service">
        <span class="d-block">Thông tin cửa hàng</span>
        <span class="d-block text-black-50">Nơi có những sản phẩm tốt nhất</span>
      </div>
    </div>
  </div>
  <div class="col-xxl-3 col-md-6 col-12 me-2">
    <div class="d-flex align-items-center">
      <span class="iconx me-1">
        <i style="color: #d5dd02;" class="fas fa-star"></i>
      </span>
      <div class="content_service">
        <span class="d-block">Sản phẩm ưu thích</span>
        <span class="d-block text-black-50">Được nhiều người lựa chọn</span>
      </div>
    </div>
  </div>
  <div class="col-xxl-3 col-md-6 col-12 me-2">
    <div class="d-flex align-items-center">
      <span class="iconx me-1">
        <i style="color: #d5dd02;" class="fas fa-thumbs-up"></i>
      </span>
      <div class="content_service">
        <span class="d-block">Đối tác</span>
        <span class="d-block text-black-50">Đối tác chất lượng của shop</span>
      </div>
    </div>
  </div>
  <div class="col-xxl-3 col-md-6 col-12 me-2">
    <div class="d-flex align-items-center">
      <span class="iconx me-1">
        <i style="color: #d5dd02;" class="fas fa-phone"></i>
      </span>
      <div class="content_service">
        <span class="d-block">Trợ giúp</span>
        <span class="d-block text-black-50">Gọi cho chúng tôi ngay</span>
      </div>
    </div>
  </div>
</div>

<div class="row bg-mid-footer px-6">
  <div class="col-xxl-6 col-12">
    <div class="pt-5 pb-4">
      <a href="/" class="logo-wrapper" title="logo">
        <img class="img-fluid" src="public/demo/logo.png" alt="logo Home Decor">
      </a>
    </div>
    <div>
      <b>Cửa hàng chính:</b>
      <span style="color: #707070;">Hà Nội</span>
    </div>
    <div>
      <b>Điện thoại:</b>
      <a href="tel:1900 6750" class="tel">1900 6750</a>
    </div>
    <div>
      <b>GCNĐKHDK số:</b>
      <span style="color: #707070;">01N8011352 cấp tại UBND Quận Long Biên (03/2011)</span>
    </div>
  </div>
  <div class="col-xxl-3 col-md-6 col-12">
    <div class="widget-first widget position-relative ps-xxl-4 ps-0">
      <h5 class="title-menu">
        <a class="fw-bold d-flex justify-content-between" data-bs-toggle="collapse" href="#collapseMenu1" role="button"
          aria-expanded="false" aria-controls="collapseMenu1">
          Về chúng tôi <i class="fa fa-plus" aria-hidden="true"></i>
        </a>
      </h5>
      <div class="collapse" id="collapseMenu1">
        <ul class="list-unstyled">
          <li class="li_menu"><a href="index.php">Trang chủ</a></li>
          <li class="li_menu"><a href="index.php?p=aboutus">Giới thiệu</a></li>
          <li class="li_menu"><a href="index.php?p=listproduct">Sản phẩm</a></li>
          <li class="li_menu"><a href="index.php?p=news">Tin tức</a></li>
          <li class="li_menu"><a href="index.php?p=contactus">Liên hệ</a></li>
          <li class="li_menu"><a href="ndex.php?p=listproduct">Sản phẩm nổi bật</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col-xxl-3 col-md-6 col-12">
    <div class="widget ps-xxl-4 ps-0">
      <h5 class="title-menu">
        <a class="fw-bold d-flex justify-content-between" data-bs-toggle="collapse" href="#collapseMenu2" role="button"
          aria-expanded="false" aria-controls="collapseMenu1">
          Thanh toán <i class="fa fa-plus" aria-hidden="true"></i>
        </a>
      </h5>
      <div class="collapse" id="collapseMenu2">
        <ul class="list-unstyled">
          <li class="li_menu"><a href="index.php">Trang chủ</a></li>
          <li class="li_menu"><a href="index.php?p=aboutus">Giới thiệu</a></li>
          <li class="li_menu"><a href="index.php?p=listproducts">Sản phẩm</a></li>
          <li class="li_menu"><a href="index.php?p=news">Tin tức</a></li>
          <li class="li_menu"><a href="index.php?p=contactus">Liên hệ</a></li>
          <li class="li_menu"><a href="ndex.php?p=listproducts">Sản phẩm nổi bật</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="col-12 copyright py-3 position-relative mt-5 px-2 pb-md-0 pb-5">
    <div class="d-flex flex-wrap">
      <div style="height: 30px;" class="col-xxl-6 col-12 text-xxl-start text-center">
        <span class="text-black-50">
          Bản quyền thuộc về <b>ABC Team</b>
          Cung cấp bởi
          <a href="#" target="_blank">TG Soft</a>
        </span>
      </div>
      <div style="height: 30px;" class="col-xxl-6 col-12">
        <ul class="list-unstyled d-flex flex-wrap menu-bottom justify-content-xxl-start justify-content-center">
          <li class="px-2"><a href="index.php">Trang chủ</a></li>
          <li class="px-2"><a href="index.php?p=aboutus">Giới thiệu</a></li>
          <li class="px-2"><a href="index.php?p=listproducts">Sản phẩm</a></li>
          <li class="px-2"><a href="index.php?p=news">Tin tức</a></li>
          <li class="px-2"><a href="index.php?p=contactus">Liên hệ</a></li>
          <li class="px-2"><a href="ndex.php?p=listproducts">Sản phẩm nổi bật</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="row bg-black px-6 py-5">
  <div class="col-xxl-6 col-md-12 col-12 text-white">
    <h3>Gửi email</h3>
    <p>Nhập email của bạn để nhận mã giảm giá ngay</p>
  </div>
  <div class="col-xxl-6 col-md-12 col-12 text-white">
    <div class="d-flex position-relative">
      <input style="font-size: 14px;" type="email" class="form-control py-3 ps-3"
        placeholder="Nhập email / Số điện thoại" required autocomplete="off">
      <button class="btn btn-register" type="submit" aria-label="Đăng ký nhận tin" name="subscribe">Đăng ký</button>
    </div>
  </div>
</div>