<style type="text/css">
  a:hover,
  a:focus {
    color: var(--shop-color-hover) !important;
    outline: none;
  }

  .footer-top .input-group:before {
    content: "\f003";
    font-family: "FontAwesome";
    display: inline-block;
    font-size: 15px;
    color: #9c9c9c;
    vertical-align: middle;
    line-height: 40px;
    width: 30px;
    position: absolute;
    left: 10px;
    top: 0;
    text-align: center;
    z-index: 99;
  }

  .register-recive-info-btn {
    border: unset;
    background-color: var(--shop-color-button);
  }

  .footerNav-social li:not(:last-child) {
    margin-right: 6px;
  }

  .footer-top {
    border-bottom: 1px solid rgba(255, 255, 255, 0.04);
  }

  .text_grey {
    color: var(--footer-color-text) !important;
  }

  .contact {
    margin-bottom: 8px;
  }

  .item {
    margin-bottom: 8px;
  }

  .footerNav-link .item:hover a {
    color: var(--footer-color-hover);
  }

  .footer-copyright {
    background: var(--footer-bg-color-copyright);
  }

  .collapse_title {
    border-bottom: 1px dashed rgba(255, 255, 255, 0.08);
  }

  .collapse_title::after {
    content: "\f107";
    font-family: "FontAwesome";
    position: absolute;
    top: 12px;
    right: 5%;
    text-align: center;
    font-size: 22px;
    transition: all 0.4s ease-in-out 0s;
    color: white;
  }
</style>


<!-- top footer -->
<div class="row bg-dark footer-top px-xxl-5 px-3 py-4 footer">
  <div class="d-flex flex-wrap py-3 align-items-center">
    <div class="col-md-6 col-xxl-6 col-12">
      <div class="d-flex flex-wrap justify-content-start align-items-center">
        <div class="col-xxl-3 col-12">
          <h5 class="text-white mb-xxl-0 mb-3">Đăng ký nhận tin</h5>
        </div>
        <div class="col-xxl-8 col-12">
          <form accept-charset="UTF-8" class="contact-form" method="post">
            <div class="form-group input-group align-items-center">
              <input required="" type="email" name="contact[email]" class="form-control px-5 py-2 rounded-pill"
                id="newsletter-email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="Nhập email của bạn"
                aria-label="Email Address">
              <span class="input-group-btn ms-3">
                <button type="submit"
                  class="button text-uppercase fs-6 fw-bold text-white rounded-pill register-recive-info-btn px-4 py-2">Đăng
                  ký</button>
              </span>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xxl-6 col-12 d-none d-md-flex d-xxl-flex">
      <div class="d-flex flex-wrap align-items-center justify-content-end">
        <h5 class="text-white mb-0 me-3">Kết nối với chúng tôi</h5>
        <ul class="d-flex list-unstyled mb-0 footerNav-social">
          <li><a href="" target="_blank" title="Facebook"><img src="public/demo/fb_icon.webp" alt="Facebook"></a></li>
          <li><a href="" target="_blank" title="Tiktok"><img src="public/demo/tiki_icon.webp" alt="Tiktok"></a></li>
          <li><a href="" target="_blank" title="Shopee"><img src="public/demo/shoppe_icon.webp" alt="Shopee"></a></li>
          <li><a href="" target="_blank" title="Lazada"><img src="public/demo/lazada_icon.webp" alt="Lazada"></a></li>
          <li><a href="" target="_blank" title="Tiki"><img src="public/demo/tiki_icon.webp" alt="Tiki"></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="row bg-dark d-xxl-flex d-none d-flex flex-wrap footer-bottom  py-5 px-5 footer">
  <div class="col-3">
    <h5 class="text-white fs-5">Công ty cổ phần Trầm Thiện Tâm</h5>
    <p class="text_grey fs_14">Cung Trầm Gallery by Trầm Thiện Tâm tự hào là nhà cung cấp các vật phẩm về trầm hương
      tự
      nhiên 100% hiếm hoi
      tại Việt Nam. <br>
      --------------- <br>
      Giấy phép kinh doanh số: 0110145209
      cấp ngày 10/10/2022 bởi Sở Kế Hoạch và Đầu Tư Thành phố Hà Nội</p>

    <ul class="address-footer list-unstyled text_grey fs_14">
      <a class="text_grey" href="">
        <li class="contact ">
          <i class="fa fa-map-marker" aria-hidden="true"></i> TT02-15, KĐT HD Mon, Nam Từ Liêm,
          Hà Nội
        </li>
      </a>
      <a class="text_grey" href="">
        <li class="contact">
          <i class="fa fa-phone" aria-hidden="true"></i> 0877.999.666 / 08767.33333
        </li>
      </a>
      <a class="text_grey" href="">
        <li class="contact">
          <i class="fa fa-envelope" aria-hidden="true"></i> info@tramthientam.com.vn
        </li>
      </a>
    </ul>

    <div class="d-flex align-items-center">
      <a href="" target="_blank">
        <img class="me-1" style="max-width: 150px;" src="public/demo/footer_logobct_img.webp" alt="Bộ Công Thương"
          width="100%" height="100%">
      </a>
      <a href="" title="DMCA.com Protection Status" class="dmca-badge"> <img src="public/demo/dmca-img.png"
          target="_blank" width="100px" alt="DMCA.com Protection Status"></a>
    </div>
  </div>

  <div class="col-3">
    <h5 class="text-white fs-5 pb-3">Thông tin</h5>
    <ul class="footerNav-link ps-3 text_grey">

      <li class="item fs_14">
        <a class="text_grey" href="" target="_blank" title="Chương trình sự kiện">Chương trình sự kiện</a>
      </li>

      <li class="item fs_14">
        <a class="text_grey" href="" target="_blank" title="Kiến thức trầm hương">Kiến thức trầm hương</a>
      </li>

      <li class="item fs_14">
        <a class="text_grey" href="" target="_blank" title="Tin tức hoạt động">Tin
          tức hoạt
          động</a>
      </li>

      <li class="item fs_14">
        <a class="text_grey" href="" target="_blank" title="Liên hệ">Liên
          hệ</a>
      </li>

    </ul>
  </div>

  <div class="col-3">
    <h5 class="text-white fs-5 pb-3">Sản phẩm chính</h5>
    <ul class="footerNav-link ps-3 text_grey">
      <li class="item fs_14">
        <a class="text_grey" href="" target="_blank" title="Chương trình sự kiện">Quà Tặng
          Trầm Hương</a>
      </li>
      <li class="item fs_14">
        <a class="text_grey" href="" target="_blank" title="Kiến thức trầm hương">Dụng Cụ
          Thưởng Trầm</a>
      </li>
      <li class="item fs_14">
        <a class="text_grey" href="" target="_blank" title="Tin tức hoạt động">Trầm
          Hương Xông Đốt</a>
      </li>
      <li class="item fs_14">
        <a class="text_grey" href="" target="_blank" title="Liên hệ">Trang Sức
          Trầm Hương</a>
      </li>
      <li class="item fs_14">
        <a class="text_grey" href="" target="_blank" title="Liên hệ">Sản Phẩm
          Khác</a>
      </li>
    </ul>
  </div>

  <div class="col-3">
    <h5 class="text-white fs-5 pb-3">Chính sách</h5>
    <ul class="footerNav-link ps-3 text_grey">
      <li class="item fs_14">
        <a class="text_grey" href="" target="_blank" title="Chương trình sự kiện">Giới
          thiệu</a>
      </li>
      <li class="item fs_14">
        <a class="text_grey" href="" target="_blank" title="Kiến thức trầm hương">Chính sách
          đổi trả</a>
      </li>
      <li class="item fs_14">
        <a class="text_grey" href="" target="_blank" title="Tin tức hoạt động">Chính sách bảo mật</a>
      </li>
      <li class="item fs_14">
        <a class="text_grey" href="" target="_blank" title="Liên hệ">Điều
          khoản dịch vụ</a>
      </li>
      <li class="item fs_14">
        <a class="text_grey" href="" target="_blank" title="Liên hệ">Chính
          sách thanh toán</a>
      </li>
      <li class="item fs_14">
        <a class="text_grey" href="" target="_blank" title="Liên hệ">Chính
          sách giao hàng</a>
      </li>
      <li class="item fs_14">
        <a class="text_grey" href="" target="_blank" title="Liên hệ">Chính
          sách khách hàng ưu tiên (Elite Club)</a>
      </li>
      <li class="item fs_14">
        <a class="text_grey" href="" target="_blank" title="Liên hệ">Chính
          sách khách hàng thân thiết <br> (Membership)</a>
      </li>
    </ul>
  </div>
</div>

<!-- Tablet and mobile -->
<div style="border-bottom: 1px solid rgba(var(--bs-dark-rgb));" class="row d-xxl-none d-block bg-dark footer">
  <a class="mb-0 px-3 py-3 position-relative collapse_title d-block" href="#collapseFooter1" data-bs-toggle="collapse"
    role="button" aria-expanded="false" aria-controls="collapseExample">
    <h6 class="text-white">Công ty cổ phần Trầm Thiện Tâm</h6>
  </a>
  <div class="collapse" id="collapseFooter1">
    <div class="card card-body bg-dark">
      <div>
        <p class="text_grey fs_14">Cung Trầm Gallery by Trầm Thiện Tâm tự hào là nhà cung cấp các vật phẩm về trầm
          hương
          tự
          nhiên 100% hiếm hoi
          tại Việt Nam. <br>
          --------------- <br>
          Giấy phép kinh doanh số: 0110145209
          cấp ngày 10/10/2022 bởi Sở Kế Hoạch và Đầu Tư Thành phố Hà Nội</p>

        <ul class="address-footer list-unstyled text_grey fs_14">
          <a class="text_grey" href="">
            <li class="contact ">
              <i class="fa fa-map-marker" aria-hidden="true"></i> TT02-15, KĐT HD Mon, Nam Từ Liêm,
              Hà Nội
            </li>
          </a>
          <a class="text_grey" href="">
            <li class="contact">
              <i class="fa fa-phone" aria-hidden="true"></i> 0877.999.666 / 08767.33333
            </li>
          </a>
          <a class="text_grey" href="">
            <li class="contact">
              <i class="fa fa-envelope" aria-hidden="true"></i> info@tramthientam.com.vn
            </li>
          </a>
        </ul>

        <div class="d-flex align-items-center">
          <a href="" target="_blank" rel="nofollow noreferrer noreferrer">
            <img class="me-1" style="max-width: 150px;" src="public/demo/footer_logobct_img.webp" alt="Bộ Công Thương"
              width="100%" height="100%">
          </a>
          <a href="#" class="dmca-badge"> <img src="public/demo/dmca-img.png" target="_blank" width="100px"></a>
        </div>
      </div>
    </div>
  </div>

  <a class="mb-0 px-3 py-3 position-relative collapse_title d-block" href="#collapseFooter2" data-bs-toggle="collapse"
    role="button" aria-expanded="false" aria-controls="collapseExample">
    <h6 class="text-white">Thông tin</h6>
  </a>
  <div class="collapse bg-dark" id="collapseFooter2">
    <div class="card card-body bg-dark">
      <ul class="footerNav-link ps-3 text_grey">

        <li class="item fs_14">
          <a class="text_grey" href="" target="_blank" title="Chương trình sự kiện">Chương
            trình sự kiện</a>
        </li>

        <li class="item fs_14">
          <a class="text_grey" href="" target="_blank" title="Kiến thức trầm hương">Kiến thức
            trầm hương</a>
        </li>

        <li class="item fs_14">
          <a class="text_grey" href="" target="_blank" title="Tin tức hoạt động">Tin tức hoạt
            động</a>
        </li>

        <li class="item fs_14">
          <a class="text_grey" href="" target="_blank" title="Liên hệ">Liên
            hệ</a>
        </li>

      </ul>
    </div>
  </div>

  <a class="mb-0 px-3 py-3 position-relative collapse_title d-block" href="#collapseFooter3" data-bs-toggle="collapse"
    role="button" aria-expanded="false" aria-controls="collapseExample">
    <h6 class="text-white">Sản phẩm chính</h6>
  </a>
  <div class="collapse bg-dark" id="collapseFooter3">
    <div class="card card-body bg-dark">
      <ul class="footerNav-link ps-3 text_grey">
        <li class="item fs_14">
          <a class="text_grey" href="#" target="_blank" title="Chương trình sự kiện">Quà Tặng
            Trầm Hương</a>
        </li>
        <li class="item fs_14">
          <a class="text_grey" href="#" target="_blank" title="Kiến thức trầm hương">Dụng Cụ
            Thưởng Trầm</a>
        </li>
        <li class="item fs_14">
          <a class="text_grey" href="#" target="_blank" title="Tin tức hoạt động">Trầm Hương Xông Đốt</a>
        </li>
        <li class="item fs_14">
          <a class="text_grey" href="#" target="_blank" title="Liên hệ">Trang
            Sức
            Trầm Hương</a>
        </li>
        <li class="item fs_14">
          <a class="text_grey" href="#" target="_blank" title="Liên hệ">Sản
            Phẩm
            Khác</a>
        </li>
      </ul>
    </div>
  </div>

  <a class="mb-0 px-3 py-3 position-relative collapse_title d-block" href="#collapseFooter4" data-bs-toggle="collapse"
    role="button" aria-expanded="false" aria-controls="collapseExample">
    <h6 class="text-white">Sản phẩm chính</h6>
  </a>
  <div class="collapse bg-dark" id="collapseFooter4">
    <div class="card card-body bg-dark">
      <ul class="footerNav-link ps-3 text_grey">
        <li class="item fs_14">
          <a class="text_grey" href="" target="_blank" title="Chương trình sự kiện">Giới
            thiệu</a>
        </li>
        <li class="item fs_14">
          <a class="text_grey" href="" target="_blank" title="Kiến thức trầm hương">Chính
            sách đổi trả</a>
        </li>
        <li class="item fs_14">
          <a class="text_grey" href="" target="_blank" title="Tin tức hoạt động">Chính sách bảo mật</a>
        </li>
        <li class="item fs_14">
          <a class="text_grey" href="" target="_blank" title="Liên hệ">Điều
            khoản dịch vụ</a>
        </li>
        <li class="item fs_14">
          <a class="text_grey" href="" target="_blank" title="Liên hệ">Chính
            sách thanh toán</a>
        </li>
        <li class="item fs_14">
          <a class="text_grey" href="" target="_blank" title="Liên hệ">Chính
            sách giao hàng</a>
        </li>
        <li class="item fs_14">
          <a class="text_grey" href="" target="_blank" title="Liên hệ">Chính
            sách khách hàng ưu tiên (Elite Club)</a>
        </li>
        <li class="item fs_14">
          <a class="text_grey" href="" target="_blank" title="Liên hệ">Chính
            sách khách hàng thân thiết <br> (Membership)</a>
        </li>
      </ul>
    </div>
  </div>
</div>

<div class="row footer-copyright py-2 footer">
  <p class="text_grey text-center fs_12">
    Copyright © 2023 Trầm Thiện Tâm Tinh Hoa Trầm Việt
  </p>
</div>