<style type="text/css">
  .footer a {
    color: white;
  }

  .footer .text-light-green {
    color: var(--color-light-green) !important;
  }

  .social-button {
    background-color: white;
  }

  .social-button:hover {
    background-color: var(--color-light-green);
  }

  .footer-bottom {
    padding: 40px 0;
    font-size: 16px;
    border-top: 1px solid #707070;
  }

  .contact-btn {
    color: white;
    border: 1px solid #fff;
    padding: 13px 35px;
  }

  .contact-btn:hover {
    background-color: white;
    color: var(--color-bold-green);
  }

  .toggle-btn img {
    transition: transform 0.2s linear;
  }

  .rotate-180-deg {
    transform: rotate(180deg);
  }

  .footer .collapse:not(.show) {
    display: none !important;
  }


  @media (min-width: 768px) {
    .footer .collapse:not(.show) {
      display: block !important;
    }
  }

  @media (min-width: 1400px) {}
</style>

<div class="row bg-bold-green text-white px-3 footer">
  <div class="col-xxl-4 col-12 mt-5">
    <h5 class="text-light-green mb-3">
      Giới thiệu
    </h5>
    <p>Lofi Cosmetic trực tiếp sản xuất các dòng mỹ phẩm thiên nhiên, công ty đi theo hướng phát triển bền vững và lâu
      dài các dòng mỹ phẩm thiên nhiên an toàn cho da nhưng không kém phần hiệu quả. Hiện tại Lofi Cosmetic có mạng lưới
      các nhà phân phối, đại lý bán lẻ các sản phẩm mỹ phẩm thiên nhiên phủ rộng khắp Hà Nội và các tỉnh miền Bắc.</p>
  </div>
  <div class="col-xxl-3 col-md-4 mt-md-5 mt-2">
    <h5 class="text-light-green mb-3">
      <a href="#" class="text-light-green d-flex justify-content-between" data-bs-toggle="collapse"
        data-bs-target="#collapseExample"><span>Về Chúng Tôi</span> <img class="d-md-none d-inline"
          src="public/demo/icon-down.svg" alt=""></a>
    </h5>
    <ul class="list-unstyled collapse" id="collapseExample">
      <li class="mb-2"><a href="index.php" title="Giới thiệu">Trang chủ</a></li>
      <li class="mb-2"><a href="index.php?=gioithieu" title="Giới thiệu">Giới thiệu</a></li>
      <li class="mb-2"><a href="index.php?p=listproducts" title="Sản phẩm">Sản phẩm</a></li>
      <li class="mb-2"><a href="index.php?p=tintuc" title="Tin tức">Tin tức</a></li>
      <li class="mb-2"><a href="index.php?p=lienhe" title="Liên hệ">Liên hệ</a></li>
    </ul>
  </div>
  <div class="col-xxl-3 col-md-4 mt-md-5 mt-2">
    <h5 class="text-light-green mb-3">
      <a href="#" class="text-light-green d-flex justify-content-between" data-bs-toggle="collapse"
        data-bs-target="#collapseExample2"><span>Hỗ Trợ Khách Hàng</span> <img class="d-md-none d-inline"
          src="public/demo/icon-down.svg" alt=""></a>
    </h5>
    <ul class="list-unstyled collapse" id="collapseExample2">
      <li class="mb-2"><a href="index.php?p=donhang" title="Giới thiệu">Đơn hàng</a></li>
      <li class="mb-2"><a href="index.php?=p=chinhsachgiaohang" title="Giới thiệu">Chính sách giao hàng</a></li>
      <li class="mb-2"><a href="index.php?p=chinhsachdoitra" title="Sản phẩm">Chính sách đổi trả</a></li>
      <li class="mb-2"><a href="index.php?p=chinhsachbanhang" title="Tin tức">Chính sách bán hàng</a></li>
    </ul>
  </div>
  <div class="col-xxl-2 col-md-4 mt-md-5 mt-2 mb-md-0 mb-4">
    <h5 class="text-light-green mb-3">
      <a href="#" class="text-light-green d-flex justify-content-between" data-bs-toggle="collapse"
        data-bs-target="#collapseExample3"><span>Theo Dõi Chúng Tôi</span> <img class="d-md-none d-inline"
          src="public/demo/icon-down.svg" alt=""></a>
    </h5>
    <div class="d-flex flex-wrap collapse" id="collapseExample3">
      <a class="d-inline-block rounded-circle social-button me-2" href="javascript:void();">
        <img src="public/demo/youtube-icon.svg" alt="">
      </a>
      <a class="d-inline-block rounded-circle social-button me-2" href="javascript:void();">
        <img src="public/demo/facebook-icon.svg" alt="">
      </a>
      <a class="d-inline-block rounded-circle social-button" href="javascript:void();">
        <img src="public/demo/insta-icon.svg" alt="">
      </a>
    </div>
  </div>
</div>

<div class="row footer-bottom bg-bold-green text-white px-3">
  <div class="col-xxl-5 col-12">
    <h5 class="text-light-green mb-3">
      Đăng Ký Để Nhận Tin
    </h5>
    <p>Bạn có muốn nhận khuyến mãi đặc biệt? Đăng ký ngay.</p>
    <form class="d-flex">
      <input class="form-control rounded-0 rounded-pill-start py-2" placeholder="Nhập địa chỉ email">
      <button class="btn bg-light-green rounded-0 rounded-pill-end px-4 text-white" type="submit">
        Gửi
      </button>
    </form>
  </div>
  <div class="col-xxl-7 col-12 mt-5 mt-xxl-0">
    <div class="d-flex flex-wrap">
      <ul class="col-xl-4 col-md-4 col-sm-12 col-12 list-unstyled text-center">
        <li>
          <img src="public/demo/call-icon.svg" alt="">
        </li>
        <li>
          <p class="text-light-green fw-normal mt-3">Điện thoại</p>
          <div>
            <a href="tel:19006750" class="contact-btn rounded-pill" title="19006750">19006750</a>
          </div>
        </li>
      </ul>
      <ul class="col-xl-4 col-md-4 col-sm-12 col-12 list-unstyled text-center">
        <li>
          <img src="public/demo/email-icon.svg" alt="">
        </li>
        <li>
          <p class="text-light-green fw-normal mt-3">Email</p>
          <div>
            <a href="mailto:support@sapo.vn" class="contact-btn rounded-pill"
              title="support@sapo.vn">support@sapo.vn</a>
          </div>
        </li>
      </ul>
      <ul class="col-xl-4 col-md-4 col-sm-12 col-12 list-unstyled text-center">
        <li class="d-flex justify-content-center">
          <i style="margin-top: -7px;" class="bi bi-geo-alt text-white fs-2"></i>
        </li>
        <li>
          <p class="text-light-green fw-normal mt-2">Địa chỉ</p>
          <p>
            266 Đội Cấn, Phường Liễu Giai, Quận Ba Đình, TP Hà Nội
          </p>
        </li>
      </ul>
    </div>
  </div>
</div>

<div class="row bg-bold-green">
  <div class="text-white text-center py-3 border-1 border-top">
    @ Bản quyền thuộc về Lofi Team
  </div>
</div>