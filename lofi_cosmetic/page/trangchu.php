<style type="text/css">
  .banner-slider .owl-dots .owl-dot span {
    margin: 0 3px !important;
    width: 15px;
    height: 5px;
    background: var(--color-bold-green);
    border: 1px solid var(--color-bold-green);
    border-radius: initial;
    opacity: 0.8;
  }

  .banner-slider .owl-dots .owl-dot.active span {
    width: 30px;
    height: 5px;
    border-radius: initial;
    background: #0fb587;
    border: 1px solid #0fb587;
    transition: all 0.2s linear;
  }

  .banner-slider .owl-dots {
    margin-top: -20px !important;
    padding-bottom: 10px;
  }

  .icon_service {
    width: 60px !important;
    height: 60px;
  }

  .services-swiper.owl-carousel .owl-item img {
    display: inline;
  }

  .services-swiper {
    border-radius: 20px;
    filter: drop-shadow(0px 0px 2px rgba(0, 0, 0, 0.16));
    padding: 20px 0;
  }

  .services-swiper .owl-dots .owl-dot span {
    margin: 0 3px !important;
    width: 15px;
    height: 5px;
    background: var(--color-bold-green);
    border: 1px solid var(--color-bold-green);
    border-radius: initial;
    opacity: 0.8;
  }

  .services-swiper .owl-dots .owl-dot.active span {
    width: 30px;
    height: 5px;
    border-radius: initial;
    background: #0fb587;
    border: 1px solid #0fb587;
    transition: all 0.2s linear;
  }

  .sale-left ul li:first-child {
    border-radius: 100%;
    padding: 20px;
    border: 1px solid #0fb587;
  }

  .sale-right ul li:last-child {
    border-radius: 100%;
    padding: 20px;
    border: 1px solid #0fb587;
  }

  .image_cate_thumb {
    width: 480px;
    height: 515px;
  }

  .sale-info:hover {
    background-color: var(--color-bold-green);
    transition: all 0.3s ease;
  }

  .sale-info:hover h5 {
    color: var(--color-light-green);
  }

  .sale-info:hover p {
    color: white;
  }

  .sale-info:hover img {
    transform: rotateY(180deg);
    transition: all 0.2s linear;
  }

  /* product card */
  .second-image {
    opacity: 0;
  }

  .product-image:hover .second-image {
    opacity: 1;
  }

  .product-image:hover .main-image {
    opacity: 0;
  }

  .product-name a {
    color: #333;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
  }

  .product-name a:hover {
    color: #00dca0;
  }

  .product-brand {
    color: #707070;
    font-size: 12px;
    display: block;
    margin-bottom: 3px;
    font-weight: normal;
    text-transform: uppercase;
  }

  .compare-price {
    text-decoration: line-through;
    font-size: 14px;
    color: #707070;
    line-height: 17px;
    font-weight: 300;
    display: inline;
  }

  .price {
    color: #d81c1c;
    font-size: 16px;
    font-weight: 700;
  }

  .flashsale-progressbar {
    display: block;
    width: 100%;
    height: 10px;
    background: #ebebeb;
    margin-bottom: 3px;
    border-radius: 9999px;
    position: relative;
    overflow: hidden;
  }

  .flashsale-percent {
    width: 0%;
    height: 100%;
    background-color: #0fb587;
    border-radius: 99px 0 0 99px;
    position: absolute;
    top: 0;
    z-index: 1;
    background-size: 40px 40px;
    -webkit-animation: progress_bar_fill 2s linear infinite;
    animation: progress_bar_fill 2s linear infinite;
    background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.25) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.25) 50%, rgba(255, 255, 255, 0.25) 75%, transparent 75%, transparent);
  }

  .product-image::before {
    content: attr(data-sale);
    position: absolute;
    top: 15px;
    left: 15px;
    z-index: 3;
    text-align: center;
    color: #fff;
    background: #0a402b;
    font-weight: 500;
    font-size: 12px;
    width: 46px;
    height: 18px;
  }

  .lofi-mybints {
    position: absolute;
    bottom: 15px;
    left: 50%;
    background: #fff;
    padding: 0px;
    z-index: 2;
    display: flex;
    justify-content: center;
    border-radius: 5px;
    box-shadow: 0 5px 10px rgb(0 0 0 / 5%);
    transform: translate3d(-50%, 150%, 0);
    transition: all .3s ease;
    opacity: 0;
    overflow: hidden;
  }

  .product-image:hover .lofi-mybints {
    opacity: 1;
    transform: translate3d(-50%, 0, 0);
  }

  .center-action {
    border-right: 1px solid #eee;
    border-left: 1px solid #eee;
  }

  .action-item {
    width: 45px;
    height: 45px;
  }

  .action-item:hover {
    background-color: #f5f5f5;
  }

  .banner-mid {
    background: linear-gradient(0deg, #fff 40%, var(--color-bold-green) 40%);
  }

  .btn-buy-now {
    background-color: var(--color-bold-green);
    color: white;
  }

  .btn-buy-now:hover {
    color: #0a402b;
    background-color: var(--color-light-green);
  }

  .banner-text {
    bottom: 0;
    top: 0;
    left: 5%;
    display: flex;
    align-items: center;
    text-align: center;
    justify-content: center;
    max-width: 300px;
    margin: 0 auto;
  }

  .label-branch.owl-carousel .owl-item img {
    display: inline-block;
  }

  .label-branch.owl-carousel .owl-item {
    text-align: center;
  }

  .label-branch {
    background-color: #fbfbfb;
  }

  .label-branch .owl-dots .owl-dot span {
    margin: 0 3px !important;
    width: 15px;
    height: 5px;
    background: var(--color-bold-green);
    border: 1px solid var(--color-bold-green);
    border-radius: initial;
    opacity: 0.8;
  }

  .label-branch .owl-dots .owl-dot.active span {
    width: 30px;
    height: 5px;
    border-radius: initial;
    background: #0fb587;
    border: 1px solid #0fb587;
    transition: all 0.2s linear;
  }

  .label-branch .owl-nav [class*=owl-]:hover {
    color: unset;
    background-color: unset;
  }

  .label-branch .owl-prev.disabled {
    display: none;
  }

  .label-branch .owl-next.disabled {
    display: none;
  }

  .label-branch>.owl-nav>.owl-next {
    top: 50%;
    transform: translateY(-50%);
    position: absolute;
    right: -17px;
  }

  .label-branch>.owl-nav>.owl-prev {
    top: 50%;
    transform: translateY(-50%);
    position: absolute;
    left: -17px;
  }

  .flash-sale-slider .owl-dots .owl-dot span {
    margin: 0 3px !important;
    width: 15px;
    height: 5px;
    background: white;
    border: 1px solid white;
    border-radius: initial;
    opacity: 1;
  }

  .flash-sale-slider .owl-dots .owl-dot.active span {
    width: 30px;
    height: 5px;
    border-radius: initial;
    background: #0fb587;
    border: 1px solid #0fb587;
    transition: all 0.2s linear;
  }

  .flash-sale-slider .owl-dots {
    margin-top: 20px !important;
  }

  .flash-sale-slider .owl-dots.disabled {
    display: block;
  }

  .new-products .owl-dots .owl-dot span {
    margin: 0 3px !important;
    width: 15px;
    height: 5px;
    background: white;
    border: 1px solid white;
    border-radius: initial;
    opacity: 1;
  }

  .new-products .owl-dots .owl-dot.active span {
    width: 30px;
    height: 5px;
    border-radius: initial;
    background: #0fb587;
    border: 1px solid #0fb587;
    transition: all 0.2s linear;
  }

  .new-products .owl-dots {
    margin-top: 20px !important;
  }

  .customers-talk.owl-carousel .owl-item img {
    width: 100px;
    height: 100px;
    display: inline;
  }

  .customers-talk .description::before {
    content: "";
    width: 75%;
    border-top: 1px solid #0a402b;
    margin: 0 auto;
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
  }

  .customers-talk .description:after {
    content: "";
    width: 20px;
    height: 20px;
    background: #fff;
    position: absolute;
    bottom: -10px;
    left: 50%;
    border-bottom: 1px solid #0a402b;
    border-right: 1px solid #0a402b;
    transform: translateX(-50%) rotate(45deg);
  }

  .customers-talk .owl-item.active.center {
    opacity: 1;
    transform: scale(1.1);
    transition: all 0.2s linear;
    background-color: #fff;
  }

  .customers-talk .owl-item.center {
    opacity: 1;
    transform: scale(1.1);
  }

  .customers-talk .owl-item.active {
    opacity: 0.2;
  }

  .customers-talk .owl-item {
    opacity: 0.2;
  }

  .customers-talk.owl-carousel .owl-stage-outer {
    padding: 30px 0px;
  }

  .customers-talk>.owl-nav>.owl-next {
    top: 50%;
    transform: translateY(-50%);
    position: absolute;
    right: -17px;
  }

  .customers-talk>.owl-nav>.owl-prev {
    top: 50%;
    transform: translateY(-50%);
    position: absolute;
    left: -17px;
  }

  .customers-talk .owl-nav [class*=owl-]:hover {
    color: unset;
    background-color: unset;
  }

  .title-article {
    color: #494949;
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    line-height: 26px;
    margin-bottom: 10px;
    word-break: break-word;
  }

  .background-img-article {
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    padding-top: 80%;
    border-radius: 15px;
  }

  .sale-right .icon-mobile {
    display: inline-block;
    border-radius: 100%;
    padding: 20px;
    border: 1px solid #0fb587;
  }

  .sale-right .icon-pc {
    display: none;
  }

  .banner-mid h4 {
    font-size: 14px;
  }

  .banner-mid h5 {
    font-size: 15px;
  }

  .img-banner-mid {
    height: 150px;
    object-fit: cover;
  }

  /* md */
  @media (min-width: 768px) {
    .sale-left ul {
      border-radius: 57px;
    }

    .sale-right ul {
      border-radius: 57px;
    }

    .banner-text {
      bottom: 0;
      top: 0;
      left: 5%;
      display: flex;
      align-items: center;
      text-align: center;
      justify-content: center;
      max-width: 360px;
      margin: 0 auto;
    }

    .banner-mid h4 {
      font-size: 18px;
    }

    .banner-mid h5 {
      font-size: initial;
    }

    .img-banner-mid {
      height: auto;
    }

    .banner-slider .owl-dots {
      margin-top: -70px !important;
      padding-bottom: 10px;
    }
  }

  /* pc */
  @media (min-width: 1400px) {
    .sale-left ul {
      border-radius: 100px;
    }

    .sale-right ul {
      border-radius: 100px;
    }

    .sale-right .icon-mobile {
      display: none;
    }

    .sale-right .icon-pc {
      display: inline-block;
    }

    .banner-text {
      bottom: 0;
      top: 0;
      left: 10%;
      display: flex;
      align-items: center;
      text-align: center;
      justify-content: center;
      max-width: 580px;
      margin: 0 auto;
    }

    .banner-mid h4 {
      font-size: 24px;
    }

    .banner-mid h5 {
      font-size: initial;
    }

    .img-banner-mid {
      height: auto;
    }
  }
</style>

<!-- slider banner -->
<div class="row">
  <div class="banner-slider owl-carousel owl-theme px-0">
    <a href="index.php?p=all">
      <img class="img-fluid" src="public/demo/slider_1.jpg" alt="">
    </a>
    <a href="index.php?p=all">
      <img class="img-fluid" src="public/demo/slider_2.jpg" alt="">
    </a>
    <a href="index.php?p=all">
      <img class="img-fluid" src="public/demo/slider_3.jpg" alt="">
    </a>
  </div>
</div>

<!-- services swiper  -->
<div class="row px-md-5 px-3 mt-3 mt-md-0">
  <div class="services-swiper owl-carousel owl-theme bg-grey-1">
    <div class="text-center pointer">
      <img class="img-fluid icon_service " src="public/demo/icon_service_1.png" alt="">
      <div class="info">
        <h5 class="text-bold-green">
          Giao hàng toàn quốc
        </h5>
        <p>
          Miễn phí vận chuyển với các đơn hàng trị giá trên 2.000.000Đ
        </p>
      </div>
    </div>
    <div class="text-center pointer">
      <img class="img-fluid icon_service " src="public/demo/icon_service_2.png" alt="">
      <div class="info">
        <h5 class="text-bold-green">
          Hỗ trợ online 24/24
        </h5>
        <p>
          Luôn hỗ trợ khách hàng 24/24 tất cả các ngày trong tuần
        </p>
      </div>
    </div>
    <div class="text-center pointer">
      <img class="img-fluid icon_service " src="public/demo/icon_service_3.png" alt="">
      <div class="info">
        <h5 class="text-bold-green">
          Đỗi hàng dễ dàng
        </h5>
        <p>
          Miễn phí đổi trả trong vòng 30 ngày đầu tiên cho tất cả các mặt hàng
        </p>
      </div>
    </div>
    <div class="text-center pointer">
      <img class="img-fluid icon_service " src="public/demo/icon_service_4.png" alt="">
      <div class="info">
        <h5 class="text-bold-green">
          Quà tặng hấp dẫn
        </h5>
        <p>
          Chương trình khuyễn mãi cực lớn và hấp dẫn hàng tháng
        </p>
      </div>
    </div>
  </div>
</div>

<!-- ALOE VERA -->
<div class="row">
  <h2 class="text-light-green text-center fs-4 mt-5">ALOE VERA</h2>
  <h2 class="text-center fw-bold fs-3">Chiết xuất từ thiên nhiên</h2>
</div>

<!-- content Aloe Vera -->
<div class="row align-items-center py-5">
  <div class="col-xxl-4 col-md-4 col-12 sale-left">
    <ul
      class="list-unstyled d-flex flex-md-wrap flex-xxl-nowrap flex-nowrap align-items-center justify-content-xxl-start justify-content-md-center justify-content-start bg-grey-1 ms-xxl-5 p-3 sale-info">
      <li>
        <img src="public/demo/smile-icon.svg" alt="">
      </li>
      <li class="ms-3 mt-md-3 mt-xxl-0">
        <h5 class="fw-bold text-md-center text-xxl-start">Làm sạch da</h5>
        <p class="mb-0 text-md-center text-xxl-start">Lấy đi bụi bẩn, bã nhờn và lớp trang điểm</p>
      </li>
    </ul>
    <ul
      class="list-unstyled d-flex flex-md-wrap flex-xxl-nowrap flex-wrap justify-content-xxl-start justify-content-center align-items-center bg-grey-1 ms-xxl-3 p-3 mt-4 sale-info">
      <li>
        <img src="public/demo/cap-am-icon.svg" alt="">
      </li>
      <li class="ms-3 mt-md-3 mt-xxl-0">
        <h5 class="fw-bold text-md-center text-xxl-start">Cấp ẩm</h5>
        <p class="mb-0 text-md-center text-xxl-start">Dưỡng trắng &amp; dưỡng ẩm cùng lúc</p>
      </li>
    </ul>
    <ul
      class="list-unstyled d-flex flex-md-wrap flex-xxl-nowrap flex-wrap flex-xxl-nowrap flex-nowrap justify-content-xxl-start justify-content-center align-items-center bg-grey-1 ms-xxl-5 p-3 mt-4 sale-info">
      <li>
        <img src="public/demo/ngua-lao-hoa-icon.svg" alt="">
      </li>
      <li class="ms-3 mt-md-3 mt-xxl-0">
        <h5 class="fw-bold text-md-center text-xxl-start">Ngừa lão hóa</h5>
        <p class="mb-0 text-md-center text-xxl-start">Nhẹ nhàng loại bỏ tế bào chết, chống oxy hoá, hỗ trợ quá trình sản
          sinh collagen</p>
      </li>
    </ul>
  </div>
  <div class="col-xxl-4 col-md-4 col-12 d-none d-md-block px-0">
    <img class="image_cate_thumb img-fluid" src="public/demo/480x600.png" alt="ALOE VERA">
  </div>
  <div class="col-xxl-4 col-md-4 col-12 sale-right">
    <ul
      class="list-unstyled d-flex flex-wrap align-items-center justify-content-start justify-content-md-center justify-content-xxl-end bg-grey-1 me-xxl-5 p-3 sale-info">
      <li class="icon-mobile">
        <img src="public/demo/diu-nhe-icon.svg" alt="">
      </li>
      <li class="me-3  ms-3 ms-md-0 mt-md-3 mt-xxl-0">
        <h5 class="fw-bold text-xxl-end text-md-center">Dịu nhẹ</h5>
        <p class="text-xxl-end text-center">Làm thông thoáng lỗ chân lông</p>
      </li>
      <li class="icon-pc">
        <img src="public/demo/diu-nhe-icon.svg" alt="">
      </li>
    </ul>
    <ul
      class="list-unstyled d-flex flex-xxl-nowrap flex-md-wrap flex-nowrap align-items-center justify-content-center justify-content-xxl-end bg-grey-1 me-xxl-3 p-3 sale-info">
      <li class="icon-mobile">
        <img src="public/demo/ngua-mun-icon.svg" alt="">
      </li>
      <li class="me-3 ms-3 ms-md-0 mt-md-3 mt-xxl-0">
        <h5 class="fw-bold text-xxl-end text-md-center">Ngừa mụn</h5>
        <p class="text-xxl-end text-center">
          Giảm mụn hiệu quả và điều tiết cân bằng lượng dầu thừa.
        </p>
      </li>
      <li class="icon-pc">
        <img src="public/demo/ngua-mun-icon.svg" alt="">
      </li>
    </ul>
    <ul
      class="list-unstyled d-flex flex-xxl-nowrap flex-md-wrap flex-nowrap align-items-center justify-content-center justify-content-xxl-end bg-grey-1 me-xxl-5 p-3 sale-info">
      <li class="icon-mobile">
        <img src="public/demo/da-dau-icon.svg" alt="">
      </li>
      <li class="me-3 ms-3 ms-md-0 mt-md-3 mt-xxl-0">
        <h5 class="fw-bold text-xxl-end text-md-center">Phù hợp da dầu/mụn</h5>
        <p class="text-xxl-end text-center">Độ pH 5.5 giống với độ pH tự nhiên trên da, giúp củng cố hàng rào bảo vệ da.
        </p>
      </li>
      <li class="icon-pc">
        <img src="public/demo/da-dau-icon.svg" alt="">
      </li>
    </ul>
  </div>
</div>

<!-- FLASH SALE  -->
<div class="row bg-bold-green px-xxl-3 px-0 pb-5">
  <div class="pt-5 d-flex flex-wrap align-items-center justify-content-between">
    <h2>
      <a class="text-white text-uppercase fw-bold" href="index.php?p=list-products" title="Flash Sale">
        Flash Sale
      </a>
    </h2>
    <div class="text-white bg-light-green px-4 py-1 rounded-pill fs-6">
      <span class="text d-none">Kết thúc sau:</span>
      <div class="time" data-countdown="countdown" data-date="11-12-2023-09-15-45">
        <span class="fw-bold">203</span> Ngày
        <span>:</span>
        <span class="fw-bold">19</span> Giờ
        <span>:</span>
        <span class="fw-bold">45</span> Phút
        <span>:</span> <span class="fw-bold">52</span> Giây
      </div>
    </div>
  </div>

  <div class="flash-sale-slider owl-carousel owl-theme mt-4">
    <div class="bg-white">
      <a title="Halio Máy triệt lông cá nhân
        IPL Hair Removal Device (IP02)" href="index.php?p=chitietsanpham">
        <div class="product-image position-relative" data-sale="-10%">
          <img class="img-fluid main-image" src="public/demo/main-img-product.png" alt="product-img-1">
          <div class="second-image position-absolute second-image top-0 start-0 bottom-0">
            <img class="img-fluid" src="public/demo/second-img-product.png" alt="product-img-2">
          </div>
          <div class="lofi-mybints d-flex align-items-center">
            <div class="action-item">
              <a style="height: 45px;" class="d-flex align-items-center" title="Thêm vào giỏ hàng"
                href="javascript:void();">
                <img width="20" height="20" src="public/demo/card-icon.svg" alt="">
              </a>
            </div>
            <div class="action-item">
              <a style="height: 45px;" class="d-flex align-items-center" href="javascript:void(0)"
                title="Thêm vào yêu thích">
                <img width="20" height="20" src="public/demo/heart-icon.svg" alt="">
              </a>
            </div>
            <div class="action-item">
              <a style="height: 45px;" class="d-flex align-items-center" href="javascript:void(0)" title="Xem nhanh">
                <img width="20" height="20" src="public/demo/xem-nhanh-icon.svg" alt="">
              </a>
            </div>
          </div>
        </div>
      </a>

      <div style="z-index: 5;" class="p-2 position-relative">
        <h6 class="product-name">
          <a title="Halio Máy triệt lông cá nhân
            IPL Hair Removal Device (IP02)" href="#">
            Halio Máy triệt lông cá nhân
            IPL Hair Removal Device (IP02)
          </a>
        </h6>
        <span class="product-brand">Lofi Cosmetics</span>
        <div>
          <span class="price me-2">2.880.000₫</span>
          <span class="compare-price">3.200.000₫</span>
        </div>
      </div>

      <div class="p-2 pt-0">
        <div class="flashsale-progressbar">
          <div class="flashsale-percent" style="width: 58%;"></div>
        </div>
        <div style="font-size: 12px;"> ⚡ Sắp hết hàng</div>
      </div>
    </div>
    <div class="bg-white">
      <a title="Halio Máy triệt lông cá nhân
        IPL Hair Removal Device (IP02)" href="index.php?p=chitietsanpham">
        <div class="product-image position-relative" data-sale="-10%">
          <img class="img-fluid main-image" src="public/demo/main-img-product.png" alt="product-img-1">
          <div class="second-image position-absolute second-image top-0 start-0 bottom-0">
            <img class="img-fluid" src="public/demo/second-img-product.png" alt="product-img-2">
          </div>
          <div class="lofi-mybints d-flex align-items-center">
            <div class="action-item">
              <a style="height: 45px;" class="d-flex align-items-center" title="Thêm vào giỏ hàng"
                href="javascript:void();">
                <img width="20" height="20" src="public/demo/card-icon.svg" alt="">
              </a>
            </div>
            <div class="action-item">
              <a style="height: 45px;" class="d-flex align-items-center" href="javascript:void(0)"
                title="Thêm vào yêu thích">
                <img width="20" height="20" src="public/demo/heart-icon.svg" alt="">
              </a>
            </div>
            <div class="action-item">
              <a style="height: 45px;" class="d-flex align-items-center" href="javascript:void(0)" title="Xem nhanh">
                <img width="20" height="20" src="public/demo/xem-nhanh-icon.svg" alt="">
              </a>
            </div>
          </div>
        </div>
      </a>

      <div style="z-index: 5;" class="p-2 position-relative">
        <h6 class="product-name">
          <a title="Halio Máy triệt lông cá nhân
            IPL Hair Removal Device (IP02)" href="#">
            Halio Máy triệt lông cá nhân
            IPL Hair Removal Device (IP02)
          </a>
        </h6>
        <span class="product-brand">Lofi Cosmetics</span>
        <div>
          <span class="price me-2">2.880.000₫</span>
          <span class="compare-price">3.200.000₫</span>
        </div>
      </div>

      <div class="p-2 pt-0">
        <div class="flashsale-progressbar">
          <div class="flashsale-percent" style="width: 58%;"></div>
        </div>
        <div style="font-size: 12px;">
          <strong style="font-size: 12px;">239</strong> sản phẩm đã bán
        </div>
      </div>
    </div>
    <div class="bg-white">
      <a title="Halio Máy triệt lông cá nhân
        IPL Hair Removal Device (IP02)" href="index.php?p=chitietsanpham">
        <div class="product-image position-relative" data-sale="-10%">
          <img class="img-fluid main-image" src="public/demo/main-img-product.png" alt="product-img-1">
          <div class="second-image position-absolute second-image top-0 start-0 bottom-0">
            <img class="img-fluid" src="public/demo/second-img-product.png" alt="product-img-2">
          </div>
          <div class="lofi-mybints d-flex align-items-center">
            <div class="action-item">
              <a style="height: 45px;" class="d-flex align-items-center" title="Thêm vào giỏ hàng"
                href="javascript:void();">
                <img width="20" height="20" src="public/demo/card-icon.svg" alt="">
              </a>
            </div>
            <div class="action-item">
              <a style="height: 45px;" class="d-flex align-items-center" href="javascript:void(0)"
                title="Thêm vào yêu thích">
                <img width="20" height="20" src="public/demo/heart-icon.svg" alt="">
              </a>
            </div>
            <div class="action-item">
              <a style="height: 45px;" class="d-flex align-items-center" href="javascript:void(0)" title="Xem nhanh">
                <img width="20" height="20" src="public/demo/xem-nhanh-icon.svg" alt="">
              </a>
            </div>
          </div>
        </div>
      </a>

      <div style="z-index: 5;" class="p-2 position-relative">
        <h6 class="product-name">
          <a title="Halio Máy triệt lông cá nhân
            IPL Hair Removal Device (IP02)" href="#">
            Halio Máy triệt lông cá nhân
            IPL Hair Removal Device (IP02)
          </a>
        </h6>
        <span class="product-brand">Lofi Cosmetics</span>
        <div>
          <span class="price me-2">2.880.000₫</span>
          <span class="compare-price">3.200.000₫</span>
        </div>
      </div>

      <div class="p-2 pt-0">
        <div class="flashsale-progressbar">
          <div class="flashsale-percent" style="width: 58%;"></div>
        </div>
        <div style="font-size: 12px;">
          <strong style="font-size: 12px;">239</strong> sản phẩm đã bán
        </div>
      </div>
    </div>
    <div class="bg-white">
      <a title="Halio Máy triệt lông cá nhân
        IPL Hair Removal Device (IP02)" href="index.php?p=chitietsanpham">
        <div class="product-image position-relative" data-sale="-10%">
          <img class="img-fluid main-image" src="public/demo/main-img-product.png" alt="product-img-1">
          <div class="second-image position-absolute second-image top-0 start-0 bottom-0">
            <img class="img-fluid" src="public/demo/second-img-product.png" alt="product-img-2">
          </div>
          <div class="lofi-mybints d-flex align-items-center">
            <div class="action-item">
              <a style="height: 45px;" class="d-flex align-items-center" title="Thêm vào giỏ hàng"
                href="javascript:void();">
                <img width="20" height="20" src="public/demo/card-icon.svg" alt="">
              </a>
            </div>
            <div class="action-item">
              <a style="height: 45px;" class="d-flex align-items-center" href="javascript:void(0)"
                title="Thêm vào yêu thích">
                <img width="20" height="20" src="public/demo/heart-icon.svg" alt="">
              </a>
            </div>
            <div class="action-item">
              <a style="height: 45px;" class="d-flex align-items-center" href="javascript:void(0)" title="Xem nhanh">
                <img width="20" height="20" src="public/demo/xem-nhanh-icon.svg" alt="">
              </a>
            </div>
          </div>
        </div>
      </a>

      <div style="z-index: 5;" class="p-2 position-relative">
        <h6 class="product-name">
          <a title="Halio Máy triệt lông cá nhân
            IPL Hair Removal Device (IP02)" href="#">
            Halio Máy triệt lông cá nhân
            IPL Hair Removal Device (IP02)
          </a>
        </h6>
        <span class="product-brand">Lofi Cosmetics</span>
        <div>
          <span class="price me-2">2.880.000₫</span>
          <span class="compare-price">3.200.000₫</span>
        </div>
      </div>

      <div class="p-2 pt-0">
        <div class="flashsale-progressbar">
          <div class="flashsale-percent" style="width: 58%;"></div>
        </div>
        <div style="font-size: 12px;">
          <strong style="font-size: 12px;">239</strong> sản phẩm đã bán
        </div>
      </div>
    </div>
    <div class="bg-white">
      <a title="Halio Máy triệt lông cá nhân
        IPL Hair Removal Device (IP02)" href="index.php?p=chitietsanpham">
        <div class="product-image position-relative" data-sale="-10%">
          <img class="img-fluid main-image" src="public/demo/main-img-product.png" alt="product-img-1">
          <div class="second-image position-absolute second-image top-0 start-0 bottom-0">
            <img class="img-fluid" src="public/demo/second-img-product.png" alt="product-img-2">
          </div>
          <div class="lofi-mybints d-flex align-items-center">
            <div class="action-item">
              <a style="height: 45px;" class="d-flex align-items-center" title="Thêm vào giỏ hàng"
                href="javascript:void();">
                <img width="20" height="20" src="public/demo/card-icon.svg" alt="">
              </a>
            </div>
            <div class="action-item">
              <a style="height: 45px;" class="d-flex align-items-center" href="javascript:void(0)"
                title="Thêm vào yêu thích">
                <img width="20" height="20" src="public/demo/heart-icon.svg" alt="">
              </a>
            </div>
            <div class="action-item">
              <a style="height: 45px;" class="d-flex align-items-center" href="javascript:void(0)" title="Xem nhanh">
                <img width="20" height="20" src="public/demo/xem-nhanh-icon.svg" alt="">
              </a>
            </div>
          </div>
        </div>
      </a>

      <div style="z-index: 5;" class="p-2 position-relative">
        <h6 class="product-name">
          <a title="Halio Máy triệt lông cá nhân
            IPL Hair Removal Device (IP02)" href="#">
            Halio Máy triệt lông cá nhân
            IPL Hair Removal Device (IP02)
          </a>
        </h6>
        <span class="product-brand">Lofi Cosmetics</span>
        <div>
          <span class="price me-2">2.880.000₫</span>
          <span class="compare-price">3.200.000₫</span>
        </div>
      </div>

      <div class="p-2 pt-0">
        <div class="flashsale-progressbar">
          <div class="flashsale-percent" style="width: 58%;"></div>
        </div>
        <div style="font-size: 12px;">
          <strong style="font-size: 12px;">239</strong> sản phẩm đã bán
        </div>
      </div>
    </div>
  </div>
</div>

<!--  -->
<div class="row justify-content-center px-xxl-5 px-md-3 banner-mid pt-xxl-5 px-2">
  <div class="position-relative px-0">
    <img class="img-fluid w-100 rounded img-banner-mid" width="1400" height="400" src="public/demo/banner-mid.jpg">
    <div class="banner-text position-absolute">
      <div>
        <h5 class="fw-bolder">GIẢM GIÁ 20% - 50%</h5>
        <h4 style="letter-spacing: .02em;" class="fw-bold">Một loại mỹ phẩm có sức hấp dẫn làm đẹp hoàn hảo và đáng kinh
          ngạc!</h4>
        <p class="d-none d-md-block">Giảm giá tại cửa hàng, giảm giá tối thiểu 55% hoặc tới 80% cho một loạt mỹ phẩm</p>
        <div>
          <a href="index.php?p=listproducts" class="btn btn-buy-now rounded-pill px-5 py-xxl-3 py-2 fw-bolder">Mua
            ngay</a>
        </div>
      </div>
    </div>
  </div>
</div>


<!--  -->
<div class="row my-4 py-4 px-5">
  <div class="label-branch owl-carousel owl-theme rounded-pill py-4 px-0">
    <img style="width: 100px; height: 100px;" src="public/demo/brand_image_1.jpg" alt="">
    <img style="width: 100px; height: 100px;" src="public/demo/brand_image_2.png" alt="">
    <img style="width: 100px; height: 100px;" src="public/demo/brand_image_5.png" alt="">
    <img style="width: 100px; height: 100px;" src="public/demo/brand_image_7.png" alt="">
    <img style="width: 100px; height: 100px;" src="public/demo/brand_image_5.png" alt="">
    <img style="width: 100px; height: 100px;" src="public/demo/brand_image_7.png" alt="">
    <img style="width: 100px; height: 100px;" src="public/demo/brand_image_5.png" alt="">
    <img style="width: 100px; height: 100px;" src="public/demo/brand_image_7.png" alt="">
  </div>
</div>

<!-- SẢN PHẨM MỚI -->
<div class="row px-md-5 px-3 bg-bold-green">
  <h4 class="text-white fw-bold mb-4 mt-5 pt-2 text-center">SẢN PHẨM MỚI</h4>
  <div class="new-products owl-carousel owl-theme rounded-pill pb-4 px-0">
    <div class="bg-white">
      <a title="Halio Máy triệt lông cá nhân
        IPL Hair Removal Device (IP02)" href="index.php?p=chitietsanpham">
        <div class="product-image position-relative" data-sale="-10%">
          <img class="img-fluid main-image" src="public/demo/main-img-product.png" alt="product-img-1">
          <div class="second-image position-absolute second-image top-0 start-0 bottom-0">
            <img class="img-fluid" src="public/demo/second-img-product.png" alt="product-img-2">
          </div>
          <div class="lofi-mybints d-flex align-items-center">
            <div class="action-item">
              <a style="height: 45px;" class="d-flex align-items-center" title="Thêm vào giỏ hàng"
                href="javascript:void();">
                <img width="20" height="20" src="public/demo/card-icon.svg" alt="">
              </a>
            </div>
            <div class="action-item">
              <a style="height: 45px;" class="d-flex align-items-center" href="javascript:void(0)"
                title="Thêm vào yêu thích">
                <img width="20" height="20" src="public/demo/heart-icon.svg" alt="">
              </a>
            </div>
            <div class="action-item">
              <a style="height: 45px;" class="d-flex align-items-center" href="javascript:void(0)" title="Xem nhanh">
                <img width="20" height="20" src="public/demo/xem-nhanh-icon.svg" alt="">
              </a>
            </div>
          </div>
        </div>
      </a>

      <div style="z-index: 5;" class="p-2 pb-4 position-relative">
        <h6 class="product-name">
          <a title="Halio Máy triệt lông cá nhân
            IPL Hair Removal Device (IP02)" href="#">
            Halio Máy triệt lông cá nhân
            IPL Hair Removal Device (IP02)
          </a>
        </h6>
        <span class="product-brand">Lofi Cosmetics</span>
        <div>
          <span class="price me-2">2.880.000₫</span>
          <span class="compare-price">3.200.000₫</span>
        </div>
      </div>
    </div>
    <div class="bg-white">
      <a title="Halio Máy triệt lông cá nhân
        IPL Hair Removal Device (IP02)" href="index.php?p=chitietsanpham">
        <div class="product-image position-relative" data-sale="-10%">
          <img class="img-fluid main-image" src="public/demo/main-img-product.png" alt="product-img-1">
          <div class="second-image position-absolute second-image top-0 start-0 bottom-0">
            <img class="img-fluid" src="public/demo/second-img-product.png" alt="product-img-2">
          </div>
          <div class="lofi-mybints d-flex align-items-center">
            <div class="action-item">
              <a style="height: 45px;" class="d-flex align-items-center" title="Thêm vào giỏ hàng"
                href="javascript:void();">
                <img width="20" height="20" src="public/demo/card-icon.svg" alt="">
              </a>
            </div>
            <div class="action-item">
              <a style="height: 45px;" class="d-flex align-items-center" href="javascript:void(0)"
                title="Thêm vào yêu thích">
                <img width="20" height="20" src="public/demo/heart-icon.svg" alt="">
              </a>
            </div>
            <div class="action-item">
              <a style="height: 45px;" class="d-flex align-items-center" href="javascript:void(0)" title="Xem nhanh">
                <img width="20" height="20" src="public/demo/xem-nhanh-icon.svg" alt="">
              </a>
            </div>
          </div>
        </div>
      </a>

      <div style="z-index: 5;" class="p-2 pb-4 position-relative">
        <h6 class="product-name">
          <a title="Halio Máy triệt lông cá nhân
            IPL Hair Removal Device (IP02)" href="#">
            Halio Máy triệt lông cá nhân
            IPL Hair Removal Device (IP02)
          </a>
        </h6>
        <span class="product-brand">Lofi Cosmetics</span>
        <div>
          <span class="price me-2">2.880.000₫</span>
          <span class="compare-price">3.200.000₫</span>
        </div>
      </div>
    </div>
    <div class="bg-white">
      <a title="Halio Máy triệt lông cá nhân
        IPL Hair Removal Device (IP02)" href="index.php?p=chitietsanpham">
        <div class="product-image position-relative" data-sale="-10%">
          <img class="img-fluid main-image" src="public/demo/main-img-product.png" alt="product-img-1">
          <div class="second-image position-absolute second-image top-0 start-0 bottom-0">
            <img class="img-fluid" src="public/demo/second-img-product.png" alt="product-img-2">
          </div>
          <div class="lofi-mybints d-flex align-items-center">
            <div class="action-item">
              <a style="height: 45px;" class="d-flex align-items-center" title="Thêm vào giỏ hàng"
                href="javascript:void();">
                <img width="20" height="20" src="public/demo/card-icon.svg" alt="">
              </a>
            </div>
            <div class="action-item">
              <a style="height: 45px;" class="d-flex align-items-center" href="javascript:void(0)"
                title="Thêm vào yêu thích">
                <img width="20" height="20" src="public/demo/heart-icon.svg" alt="">
              </a>
            </div>
            <div class="action-item">
              <a style="height: 45px;" class="d-flex align-items-center" href="javascript:void(0)" title="Xem nhanh">
                <img width="20" height="20" src="public/demo/xem-nhanh-icon.svg" alt="">
              </a>
            </div>
          </div>
        </div>
      </a>

      <div style="z-index: 5;" class="p-2 pb-4 position-relative">
        <h6 class="product-name">
          <a title="Halio Máy triệt lông cá nhân
            IPL Hair Removal Device (IP02)" href="#">
            Halio Máy triệt lông cá nhân
            IPL Hair Removal Device (IP02)
          </a>
        </h6>
        <span class="product-brand">Lofi Cosmetics</span>
        <div>
          <span class="price me-2">2.880.000₫</span>
          <span class="compare-price">3.200.000₫</span>
        </div>
      </div>
    </div>
    <div class="bg-white">
      <a title="Halio Máy triệt lông cá nhân
        IPL Hair Removal Device (IP02)" href="index.php?p=chitietsanpham">
        <div class="product-image position-relative" data-sale="-10%">
          <img class="img-fluid main-image" src="public/demo/main-img-product.png" alt="product-img-1">
          <div class="second-image position-absolute second-image top-0 start-0 bottom-0">
            <img class="img-fluid" src="public/demo/second-img-product.png" alt="product-img-2">
          </div>
          <div class="lofi-mybints d-flex align-items-center">
            <div class="action-item">
              <a style="height: 45px;" class="d-flex align-items-center" title="Thêm vào giỏ hàng"
                href="javascript:void();">
                <img width="20" height="20" src="public/demo/card-icon.svg" alt="">
              </a>
            </div>
            <div class="action-item">
              <a style="height: 45px;" class="d-flex align-items-center" href="javascript:void(0)"
                title="Thêm vào yêu thích">
                <img width="20" height="20" src="public/demo/heart-icon.svg" alt="">
              </a>
            </div>
            <div class="action-item">
              <a style="height: 45px;" class="d-flex align-items-center" href="javascript:void(0)" title="Xem nhanh">
                <img width="20" height="20" src="public/demo/xem-nhanh-icon.svg" alt="">
              </a>
            </div>
          </div>
        </div>
      </a>

      <div style="z-index: 5;" class="p-2 pb-4 position-relative">
        <h6 class="product-name">
          <a title="Halio Máy triệt lông cá nhân
            IPL Hair Removal Device (IP02)" href="#">
            Halio Máy triệt lông cá nhân
            IPL Hair Removal Device (IP02)
          </a>
        </h6>
        <span class="product-brand">Lofi Cosmetics</span>
        <div>
          <span class="price me-2">2.880.000₫</span>
          <span class="compare-price">3.200.000₫</span>
        </div>
      </div>
    </div>
    <div class="bg-white">
      <a title="Halio Máy triệt lông cá nhân
        IPL Hair Removal Device (IP02)" href="index.php?p=chitietsanpham">
        <div class="product-image position-relative" data-sale="-10%">
          <img class="img-fluid main-image" src="public/demo/main-img-product.png" alt="product-img-1">
          <div class="second-image position-absolute second-image top-0 start-0 bottom-0">
            <img class="img-fluid" src="public/demo/second-img-product.png" alt="product-img-2">
          </div>
          <div class="lofi-mybints d-flex align-items-center">
            <div class="action-item">
              <a style="height: 45px;" class="d-flex align-items-center" title="Thêm vào giỏ hàng"
                href="javascript:void();">
                <img width="20" height="20" src="public/demo/card-icon.svg" alt="">
              </a>
            </div>
            <div class="action-item">
              <a style="height: 45px;" class="d-flex align-items-center" href="javascript:void(0)"
                title="Thêm vào yêu thích">
                <img width="20" height="20" src="public/demo/heart-icon.svg" alt="">
              </a>
            </div>
            <div class="action-item">
              <a style="height: 45px;" class="d-flex align-items-center" href="javascript:void(0)" title="Xem nhanh">
                <img width="20" height="20" src="public/demo/xem-nhanh-icon.svg" alt="">
              </a>
            </div>
          </div>
        </div>
      </a>

      <div style="z-index: 5;" class="p-2 pb-4 position-relative">
        <h6 class="product-name">
          <a title="Halio Máy triệt lông cá nhân
            IPL Hair Removal Device (IP02)" href="#">
            Halio Máy triệt lông cá nhân
            IPL Hair Removal Device (IP02)
          </a>
        </h6>
        <span class="product-brand">Lofi Cosmetics</span>
        <div>
          <span class="price me-2">2.880.000₫</span>
          <span class="compare-price">3.200.000₫</span>
        </div>
      </div>
    </div>
    <div class="bg-white">
      <a title="Halio Máy triệt lông cá nhân
        IPL Hair Removal Device (IP02)" href="index.php?p=chitietsanpham">
        <div class="product-image position-relative" data-sale="-10%">
          <img class="img-fluid main-image" src="public/demo/main-img-product.png" alt="product-img-1">
          <div class="second-image position-absolute second-image top-0 start-0 bottom-0">
            <img class="img-fluid" src="public/demo/second-img-product.png" alt="product-img-2">
          </div>
          <div class="lofi-mybints d-flex align-items-center">
            <div class="action-item">
              <a style="height: 45px;" class="d-flex align-items-center" title="Thêm vào giỏ hàng"
                href="javascript:void();">
                <img width="20" height="20" src="public/demo/card-icon.svg" alt="">
              </a>
            </div>
            <div class="action-item">
              <a style="height: 45px;" class="d-flex align-items-center" href="javascript:void(0)"
                title="Thêm vào yêu thích">
                <img width="20" height="20" src="public/demo/heart-icon.svg" alt="">
              </a>
            </div>
            <div class="action-item">
              <a style="height: 45px;" class="d-flex align-items-center" href="javascript:void(0)" title="Xem nhanh">
                <img width="20" height="20" src="public/demo/xem-nhanh-icon.svg" alt="">
              </a>
            </div>
          </div>
        </div>
      </a>

      <div style="z-index: 5;" class="p-2 pb-4 position-relative">
        <h6 class="product-name">
          <a title="Halio Máy triệt lông cá nhân
            IPL Hair Removal Device (IP02)" href="#">
            Halio Máy triệt lông cá nhân
            IPL Hair Removal Device (IP02)
          </a>
        </h6>
        <span class="product-brand">Lofi Cosmetics</span>
        <div>
          <span class="price me-2">2.880.000₫</span>
          <span class="compare-price">3.200.000₫</span>
        </div>
      </div>
    </div>
    <div class="bg-white">
      <a title="Halio Máy triệt lông cá nhân
        IPL Hair Removal Device (IP02)" href="index.php?p=chitietsanpham">
        <div class="product-image position-relative" data-sale="-10%">
          <img class="img-fluid main-image" src="public/demo/main-img-product.png" alt="product-img-1">
          <div class="second-image position-absolute second-image top-0 start-0 bottom-0">
            <img class="img-fluid" src="public/demo/second-img-product.png" alt="product-img-2">
          </div>
          <div class="lofi-mybints d-flex align-items-center">
            <div class="action-item">
              <a style="height: 45px;" class="d-flex align-items-center" title="Thêm vào giỏ hàng"
                href="javascript:void();">
                <img width="20" height="20" src="public/demo/card-icon.svg" alt="">
              </a>
            </div>
            <div class="action-item">
              <a style="height: 45px;" class="d-flex align-items-center" href="javascript:void(0)"
                title="Thêm vào yêu thích">
                <img width="20" height="20" src="public/demo/heart-icon.svg" alt="">
              </a>
            </div>
            <div class="action-item">
              <a style="height: 45px;" class="d-flex align-items-center" href="javascript:void(0)" title="Xem nhanh">
                <img width="20" height="20" src="public/demo/xem-nhanh-icon.svg" alt="">
              </a>
            </div>
          </div>
        </div>
      </a>

      <div style="z-index: 5;" class="p-2 pb-4 position-relative">
        <h6 class="product-name">
          <a title="Halio Máy triệt lông cá nhân
            IPL Hair Removal Device (IP02)" href="#">
            Halio Máy triệt lông cá nhân
            IPL Hair Removal Device (IP02)
          </a>
        </h6>
        <span class="product-brand">Lofi Cosmetics</span>
        <div>
          <span class="price me-2">2.880.000₫</span>
          <span class="compare-price">3.200.000₫</span>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- KHÁCH HÀNG NÓI VỀ CHÚNG TÔI -->
<div class="row px-md-5 px-3">
  <h4 class="text-bold-green fw-bold mb-4 mt-5 pt-2 text-center">SẢN PHẨM MỚI</h4>
  <div class="customers-talk owl-carousel owl-theme rounded-pill py-4 px-0">
    <div style="height: 380px; border: 1px solid #0a402b;"
      class="d-flex align-items-center justify-content-center bg-white rounded p-4 mx-md-0 mx-4">
      <div>
        <div class="text-center mb-4">
          <img width="100" height="100" src="public/demo/avartar-customer.png">
        </div>
        <p class="description position-relative fst-italic text-center pb-4">Shop đa dạng hàng hóa, gần như là cái gì
          mình muốn mua shop đều có hết.
          Yêu shop, mãi ủng hộ shop.</p>
        <h4 class="text-bold-green text-center fw-bold">Long Lee</h4>
      </div>
    </div>
    <div style="height: 380px; border: 1px solid #0a402b;"
      class="d-flex align-items-center justify-content-center bg-white rounded p-4 mx-md-0 mx-4">
      <div>
        <div class="text-center mb-4">
          <img width="100" height="100" src="public/demo/avartar-customer.png">
        </div>
        <p class="description position-relative fst-italic text-center pb-4">Shop đa dạng hàng hóa, gần như là cái gì
          mình muốn mua shop đều có hết.
          Yêu shop, mãi ủng hộ shop.</p>
        <h4 class="text-bold-green text-center fw-bold">Xuân Minh</h4>
      </div>
    </div>
    <div style="height: 380px; border: 1px solid #0a402b;"
      class="d-flex align-items-center justify-content-center bg-white rounded p-4 mx-md-0 mx-4">
      <div>
        <div class="text-center mb-4">
          <img width="100" height="100" src="public/demo/avartar-customer.png">
        </div>
        <p class="description position-relative fst-italic text-center pb-4">Shop đa dạng hàng hóa, gần như là cái gì
          mình muốn mua shop đều có hết.
          Yêu shop, mãi ủng hộ shop.</p>
        <h4 class="text-bold-green text-center fw-bold">Anh Thư</h4>
      </div>
    </div>
    <div style="height: 380px; border: 1px solid #0a402b;"
      class="d-flex align-items-center justify-content-center bg-white rounded p-4 mx-md-0 mx-4">
      <div>
        <div class="text-center mb-4">
          <img width="100" height="100" src="public/demo/avartar-customer.png">
        </div>
        <p class="description position-relative fst-italic text-center pb-4">Shop đa dạng hàng hóa, gần như là cái gì
          mình muốn mua shop đều có hết.
          Yêu shop, mãi ủng hộ shop.</p>
        <h4 class="text-bold-green text-center fw-bold">Xuân Minh</h4>
      </div>
    </div>
    <div style="height: 380px; border: 1px solid #0a402b;"
      class="d-flex align-items-center justify-content-center bg-white rounded p-4 mx-md-0 mx-4">
      <div>
        <div class="text-center mb-4">
          <img width="100" height="100" src="public/demo/avartar-customer.png">
        </div>
        <p class="description position-relative fst-italic text-center pb-4">Shop đa dạng hàng hóa, gần như là cái gì
          mình muốn mua shop đều có hết.
          Yêu shop, mãi ủng hộ shop.</p>
        <h4 class="text-bold-green text-center fw-bold">Anh Thư</h4>
      </div>
    </div>
  </div>
</div>

<!-- TIN TỨC -->
<div class="row px-md-4 mb-5 px-0">
  <h5 class="text-center fw-bold text-bold-green">TIN TỨC</h5>
  <div class="col-xxl-6 col-12 py-3">
    <div class="d-flex flex-wrap align-items-center">
      <div class="col-md-6 col-12 px-2">
        <div style="background-image: url(public/demo/article-1.jpg);" class="background-img-article"></div>
      </div>
      <div class="col-md-6 col-12 px-2">
        <h5>
          <a class="title-article fw-bold" href="index.php?p=chitiettintuc">
            Top 3 cushion chống nắng HOT nhất 2018 bạn gái sành điệu không thể bỏ qua
          </a>
        </h5>
        <p>
          Ngoài sự tiện dụng chỉ sau vài phút là có một lớp trang điểm thật đẹp thì 3 loại cushion dưới đây còn chinh
          phục các ...
        </p>
        <div>
          <span>
            <i class="bi bi-person-fill fs-6"></i>
            <span class="text-black-50">Team Lofi</span>
          </span>

          <span class="ms-2">
            <i class="bi bi-calendar3"></i>
            <span class="text-black-50">11/04/2023</span>
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xxl-6 col-12 py-3">
    <div class="d-flex flex-wrap align-items-center">
      <div class="col-md-6 col-12 px-2">
        <div style="background-image: url(public/demo/article-2.jpg);" class="background-img-article"></div>
      </div>
      <div class="col-md-6 col-12 px-2">
        <h5>
          <a class="title-article fw-bold" href="index.php?p=chitiettintuc">
            Top 3 cushion chống nắng HOT nhất 2018 bạn gái sành điệu không thể bỏ qua
          </a>
        </h5>
        <p>
          Ngoài sự tiện dụng chỉ sau vài phút là có một lớp trang điểm thật đẹp thì 3 loại cushion dưới đây còn chinh
          phục các ...
        </p>
        <div>
          <span>
            <i class="bi bi-person-fill fs-6"></i>
            <span class="text-black-50">Team Lofi</span>
          </span>

          <span class="ms-2">
            <i class="bi bi-calendar3"></i>
            <span class="text-black-50">11/04/2023</span>
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xxl-6 col-12 py-3">
    <div class="d-flex flex-wrap align-items-center">
      <div class="col-md-6 col-12 px-2">
        <div style="background-image: url(public/demo/article-1.jpg);" class="background-img-article"></div>
      </div>
      <div class="col-md-6 col-12 px-2">
        <h5>
          <a class="title-article fw-bold" href="index.php?p=chitiettintuc">
            Top 3 cushion chống nắng HOT nhất 2018 bạn gái sành điệu không thể bỏ qua
          </a>
        </h5>
        <p>
          Ngoài sự tiện dụng chỉ sau vài phút là có một lớp trang điểm thật đẹp thì 3 loại cushion dưới đây còn chinh
          phục các ...
        </p>
        <div>
          <span>
            <i class="bi bi-person-fill fs-6"></i>
            <span class="text-black-50">Team Lofi</span>
          </span>

          <span class="ms-2">
            <i class="bi bi-calendar3"></i>
            <span class="text-black-50">11/04/2023</span>
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xxl-6 col-12 py-3">
    <div class="d-flex flex-wrap align-items-center">
      <div class="col-md-6 col-12 px-2">
        <div style="background-image: url(public/demo/article-2.jpg);" class="background-img-article"></div>
      </div>
      <div class="col-md-6 col-12 px-2">
        <h5>
          <a class="title-article fw-bold" href="index.php?p=chitiettintuc">
            Top 3 cushion chống nắng HOT nhất 2018 bạn gái sành điệu không thể bỏ qua
          </a>
        </h5>
        <p>
          Ngoài sự tiện dụng chỉ sau vài phút là có một lớp trang điểm thật đẹp thì 3 loại cushion dưới đây còn chinh
          phục các ...
        </p>
        <div>
          <span>
            <i class="bi bi-person-fill fs-6"></i>
            <span class="text-black-50">Team Lofi</span>
          </span>

          <span class="ms-2">
            <i class="bi bi-calendar3"></i>
            <span class="text-black-50">11/04/2023</span>
          </span>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="owlcarousel/owl.carousel.min.js"></script>
<script>
  $(document).ready(function () {
    $('.banner-slider').owlCarousel({
      center: false,
      loop: true,
      margin: 0,
      dots: true,
      autoplay: true,
      autoplayTimeout: 3000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
        }
      }
    });

    $('.services-swiper').owlCarousel({
      center: false,
      loop: false,
      margin: 0,
      dots: true,
      autoplay: false,
      autoplayTimeout: 3000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
        },
        768: {
          items: 2,
        },
        1400: {
          items: 4,
        }
      }
    });

    $('.flash-sale-slider').owlCarousel({
      center: false,
      loop: false,
      dots: true,
      margin: 18,
      autoplay: false,
      responsive: {
        0: {
          items: 2,
        },
        768: {
          items: 3,
        },
        1400: {
          items: 5,
        }
      }
    });

    $('.label-branch').owlCarousel({
      center: false,
      loop: false,
      dots: true,
      autoplay: false,
      autoplayTimeout: 3000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: true,
        },
        768: {
          items: 4,
          nav: true,
        },
        1400: {
          items: 8,
          nav: false,
        }
      }
    });

    $('.new-products').owlCarousel({
      center: false,
      loop: false,
      dots: true,
      margin: 18,
      autoplay: false,
      autoplayTimeout: 3000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 2,
        },
        768: {
          items: 3,
        },
        1400: {
          items: 5,
        }
      }
    });

    $('.customers-talk').owlCarousel({
      center: true,
      loop: true,
      dots: false,
      nav: true,
      margin: 40,
      autoplay: false,
      autoplayTimeout: 3000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
        },
        768: {
          items: 1,
          stagePadding: 180,
          center: true,
        },
        1400: {
          items: 3,
        }
      }
    });

    $(".owl-next").html(`<i class="bi bi-chevron-right fs-4"></i>`);
    $(".owl-prev").html(`<i class="bi bi-chevron-left fs-4"></i>`);

  });
</script>