<style type="text/css">
  .footer {
    color: #fff4e8;
  }

  .footer a {
    color: #fff4e8;
    letter-spacing: .6px;
  }

  .footer h6 {
    color: #f8c883;
    text-transform: uppercase;
    font-weight: 700;
  }

  .footer a:hover {
    color: #f8c883 !important;
  }

  .px-7 {
    padding-left: 10vw;
    padding-right: 10vw;
  }

  .email-input-footer {
    border: none;
    border-bottom: 1px solid #f8c883;
    font-size: 16px;
    font-weight: 500;
    background: 0 0;
    margin-bottom: 15px;
    padding: 5px;
    padding-left: 0;
    outline: 0;
    width: 100%;
    border-radius: 0;
  }

  .email-input-footer::placeholder {
    color: #f8c883;
    font-weight: 500;
  }

  .icon-contact {
    width: 24px;
    height: 24px;
    margin-right: 5px;
    filter: invert(100%) sepia(100%) saturate(1%) hue-rotate(350deg) brightness(103%) contrast(101%);
  }

  .icon-contact:hover {
    filter: invert(77%) sepia(54%) saturate(259%) hue-rotate(353deg) brightness(95%) contrast(98%);
  }

  .footer .text-yellow {
    color: #f8c883 !important;
  }

  .footer>* {
    margin-left: -12px;
    margin-right: -12px;
  }


  @media (min-width: 768px) {}

  @media (min-width: 1400px) {}
</style>

<div class="row px-7 bg-secondary footer">
  <!-- PC -->
  <div class="d-xxl-flex d-none justify-content-between pt-5 mt-3 pb-5 border-bottom border-1 border-danger">
    <div class="col-xxl-2 me-3">
      <h6>HỖ TRỢ KHÁCH HÀNG</h6>
      <ul class="list-group list-unstyled mt-4">
        <li><a class="fs-6" href="">Hỏi & Đáp</a></li>
        <li><a class="fs-6" href="">Bảo Hành & Thu Đổi</a></li>
        <li><a class="fs-6" href="">Chính Sách Bảo Mật</a></li>
        <li><a class="fs-6" href="">Hướng Dẫn Mua Hàng</a></li>
        <li><a class="fs-6" href="">Bảng Giá Vàng</a></li>
        <li><a class="fs-6" href="">Mục Lục</a></li>
      </ul>
    </div>
    <div class="col-xxl-3">
      <h6>VỀ CHÚNG TÔI</h6>
      <ul class="list-group list-unstyled mt-4">
        <li><a class="fs-6" href="">Về Ngọc Thẩm</a></li>
        <li><a class="fs-6" href="">Tuyển Dụng</a></li>
        <li><a class="fs-6" href="">Tin Tức</a></li>
        <li><a class="fs-6" href="">Liên Hệ</a></li>
        <li><a class="fs-6" href="">Bảng Giá Vàng</a></li>
        <li><a class="fs-6" href="">NTJ Flagship</a></li>
      </ul>
    </div>
    <div class="col-xxl-4">
      <h6>HƯỚNG DẪN SỬ DỤNG</h6>
      <ul class="list-group list-unstyled mt-4">
        <li><a class="fs-6" href="">Đo Size</a></li>
        <li><a class="fs-6" href="">Bảo Quản Trang Sức</a></li>
        <li><a class="fs-6" href="">Cẩm Nang Trang Sức</a></li>
        <li><a class="fs-6" href="">Kiến Thức Kim Cương</a></li>
      </ul>
    </div>
    <div class="col-xxl-3">
      <h6>TIN MỚI NHẤT</h6>
      <p style="color: #fff4e8;" class="fw-bolder">Nhận ngay thông tin về các thiết kế và ưu đãi mới nhất từ NTJ.</p>
      <input class="email-input-footer" type="email" value="" size="40" placeholder="Email">
      <a class="#"><span>Đăng ký</span> <i class="fa-solid fa-caret-right fs-5 align-top"></i></a>

      <div class="d-flex align-items-center">
        <div class="col-7">
          <img class="icon-contact" src="public/demo/facebook.svg" alt="">
          <img class="icon-contact" src="public/demo/insta.svg" alt="">
          <img class="icon-contact" src="public/demo/youtube.svg" alt="">
          <img class="icon-contact" src="public/demo/pinterest.svg" alt="">
          <img class="icon-contact" src="public/demo/zalo.svg" alt="">
        </div>
        <div class="col-5">
          <img class="img-fluid" src="public/demo/bct.png" alt="">
        </div>
      </div>

    </div>
  </div>

  <!-- footer tablet and mobile -->
  <div class="mt-5 d-xxl-none d-block">
    <div>
      <h6 id="toggle-customer-support">HỖ TRỢ KHÁCH HÀNG <i class="fa-solid fa-caret-down fs-5 align-top ms-2"></i></h6>
      <ul style="display: none;" id="content-customer-support" class="list-group list-unstyled mt-2">
        <li><a class="fs-6" href="">Hỏi & Đáp</a></li>
        <li><a class="fs-6" href="">Bảo Hành & Thu Đổi</a></li>
        <li><a class="fs-6" href="">Chính Sách Bảo Mật</a></li>
        <li><a class="fs-6" href="">Hướng Dẫn Mua Hàng</a></li>
        <li><a class="fs-6" href="">Bảng Giá Vàng</a></li>
        <li><a class="fs-6" href="">Mục Lục</a></li>
      </ul>
    </div>
    <div>
      <h6 id="about-us">VỀ CHÚNG TÔI <i class="fa-solid fa-caret-down fs-5 align-top ms-2"></i></h6>
      <ul style="display: none;" id="content-about-us" class="list-group list-unstyled mt-2">
        <li><a class="fs-6" href="">Về Ngọc Thẩm</a></li>
        <li><a class="fs-6" href="">Tuyển Dụng</a></li>
        <li><a class="fs-6" href="">Tin Tức</a></li>
        <li><a class="fs-6" href="">Liên Hệ</a></li>
        <li><a class="fs-6" href="">Bảng Giá Vàng</a></li>
        <li><a class="fs-6" href="">NTJ Flagship</a></li>
      </ul>
    </div>
    <div>
      <h6 id="user-guide">HƯỚNG DẪN SỬ DỤNG <i class="fa-solid fa-caret-down fs-5 align-top ms-2"></i></h6>
      <ul style="display: none;" id="content-user-guide" class="list-group list-unstyled mt-2">
        <li><a class="fs-6" href="">Đo Size</a></li>
        <li><a class="fs-6" href="">Bảo Quản Trang Sức</a></li>
        <li><a class="fs-6" href="">Cẩm Nang Trang Sức</a></li>
        <li><a class="fs-6" href="">Kiến Thức Kim Cương</a></li>
      </ul>
    </div>

    <div>
      <h6 id="latest-news">TIN MỚI NHẤT <i class="fa-solid fa-caret-down fs-5 align-top ms-2"></i></h6>
      <div style="display: none;" id="content-latest-news">
        <p style="color: #fff4e8;" class="fw-bolder">Nhận ngay thông tin về các thiết kế và ưu đãi mới nhất từ NTJ.</p>
        <input class="email-input-footer" type="email" value="" size="40" placeholder="Email">
        <a class="#"><span>Đăng ký</span> <i class="fa-solid fa-caret-right fs-5 align-top"></i></a>
      </div>
    </div>
    <a href="#" class="text-yellow text-uppercase fw-bold">
      Tiếng Việt
      <i class="fa-solid fa-caret-down fs-5 align-top ms-2"></i>
    </a>

    <div class="d-flex justify-content-between mt-5">
      <img class="icon-contact" src="public/demo/facebook.svg" alt="">
      <img class="icon-contact" src="public/demo/insta.svg" alt="">
      <img class="icon-contact" src="public/demo/youtube.svg" alt="">
      <img class="icon-contact" src="public/demo/pinterest.svg" alt="">
      <img class="icon-contact" src="public/demo/zalo.svg" alt="">
    </div>

    <div class="d-flex justify-content-center mt-3">
      <div class="col-7"><img class="img-fluid" src="public/demo/bct.png" alt=""></div>
    </div>

    <div class="text-center mt-4">
      <a href="#" class="text-yellow text-uppercase">
        © NGỌC THẨM JEWELRY
      </a>
    </div>

    <div class="text-center mt-4">
      <img class="img-fluid" src="public/demo/logo-footer.svg" alt="">
    </div>
  </div>

  <!-- PC -->
  <div class="d-xxl-flex d-none flex-wrap mt-5 justify-content-between align-items-center">
    <div class="col-xxl-3 col-md-3 col-12">
      <a href="#" class="text-yellow text-uppercase">
        Tiếng Việt
        <i class="fa-solid fa-caret-down fs-5 align-top ms-2"></i>
      </a>
    </div>
    <div class="col-xxl-6 col-md-6 col-12 text-center">
      <img class="img-fluid" src="public/demo/logo-footer.svg" alt="">
    </div>
    <div class="col-xxl-3 col-md-3 col-12 text-xxl-end text-md-end text-center">
      <a href="#" class="text-yellow text-uppercase">
        © NGỌC THẨM JEWELRY
      </a>
    </div>
  </div>
  <!-- PC, tablet, mobile -->
  <p class="text-center mt-5 mb-5">© 2023. CÔNG TY TNHH VÀNG BẠC ĐÁ QUÝ NGỌC THẨM. Địa chỉ: 26/4 Nguyễn Huỳnh Đức,
    Phường 8, Thành phố Mỹ Tho, Tỉnh Tiền Giang. Điện thoại: 1800 599 973. Email: info@ngoctham.com.
    Giấy chứng nhận đăng ký doanh nghiệp: 1200102258, do Sở Kế hoạch và Đầu tư tỉnh Tiền Giang cấp lần đầu ngày
    09/05/2002</p>
</div>

<script>
  $(document).ready(function () {
    $("#toggle-customer-support").click(function () {
      $("#content-customer-support").slideToggle();
    });

    $("#about-us").click(function () {
      $("#content-about-us").slideToggle();
    });

    $("#user-guide").click(function () {
      $("#content-user-guide").slideToggle();
    });

    $("#latest-news").click(function () {
      $("#content-latest-news").slideToggle();
    });


  });
</script>