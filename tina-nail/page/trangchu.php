<style type="text/css">
  .title_module_main {
    font-family: 'svn-haptic_scriptregular';
    font-size: 49px;
    color: #daa785;
  }

  .btn-readmore.have-through span:before {
    content: "";
    background: #5d6567;
    height: 1px;
    width: 100%;
    bottom: 0;
    left: 0;
    position: absolute;
    transition: 0.3s all ease;
  }

  .btn-readmore.have-through-2 span:before {
    content: "";
    background: white;
    height: 1px;
    width: 100%;
    bottom: 0;
    left: 0;
    position: absolute;
    transition: 0.3s all ease;
  }

  .btn-readmore.have-through:hover span::before {
    background: var(--mainColor);
  }

  .btn-readmore.have-through-2:hover span::before {
    background: var(--mainColor);
  }

  /* services */
  .section_service {
    background-image: url(public/demo/bg_service.png);
    background-position: bottom center;
    background-repeat: no-repeat;
    background-color: transparent;
    position: relative;
  }

  .box-service {
    background: #fff;
    padding: 40px 20px;
    border-radius: 16px;
    text-align: center;
  }

  .booking-box a {
    color: #9fa3a4;
  }

  .booking-box a:hover {
    color: var(--mainColor);
  }

  .booking-box a:hover.border-bottom {
    border-color: var(--mainColor) !important;
  }

  .top-monthly.owl-carousel .owl-item img {
    display: inline-block;
    width: auto;
  }

  .top-monthly .owl-item.active.center .box-service {
    padding: 90px 24px;
    transform: scale(1.01);
    margin-top: -40px;
    position: relative;
    box-shadow: 0px 0px 21px 0px rgba(8, 7, 7, 0.08);
  }

  .top-monthly.owl-carousel .owl-item.active.center {
    z-index: 2 !important;
  }

  .top-monthly.owl-carousel .owl-item.active.center .booking-box a {
    color: var(--mainColor);
  }

  .top-monthly.owl-carousel .owl-item.active.center .booking-box a.border-bottom {
    border-color: var(--mainColor) !important;
  }

  .top-monthly.owl-carousel .owl-item.active.center .btn-service {
    display: inline-block;
  }

  .top-monthly.owl-carousel .owl-stage-outer {
    padding: unset;
    padding-bottom: 83px;
  }

  .top-monthly.owl-theme .owl-nav.disabled+.owl-dots {
    margin-top: -65px;
  }

  .owl-carousel .owl-dots .owl-dot span {
    width: 12px;
    height: 12px;
    background: #fff;
    border: 1px solid #daa785;
    margin: 5px 5px;
  }

  .owl-carousel .owl-dots .owl-dot.active span {
    transition: all .2s;
    background: #daa785;
  }

  .btn-service {
    border: 1px solid #daa785 !important;
    display: none;
  }

  .btn-service:hover {
    background-color: white !important;
    color: var(--mainColor) !important;
  }

  /* end services */

  .item_statistic {
    padding: 0 40px 0 0;
    margin-right: 30px;
    position: relative;
    display: inline-block;
  }

  .number_statistic {
    font-size: 24px;
    line-height: 24px;
    color: #f0dac0;
    text-align: center;
  }

  .info_statistic {
    font-size: 14px;
    color: #ffffff;
    font-weight: 400;
    text-align: center;
  }

  .item_statistic:last-child {
    margin: 0;
    padding: 0;
  }

  .have-a-hover .title_module_main a {
    color: var(--mainColor);
  }

  .have-a-hover .title_module_main a:hover {
    color: var(--color-text-a);
  }

  .section_have_bg_title .title_module_main:before {
    content: "";
    background-image: url(public/demo/bg_title_1.png);
    width: 61px;
    height: 58px;
    background-repeat: no-repeat;
    display: block;
    position: absolute;
    left: -60px;
    top: 7px;
  }

  .section_have_bg_title .title_module_main::after {
    content: "";
    background-image: url(public/demo/bg_title_2.png);
    width: 61px;
    height: 58px;
    background-repeat: no-repeat;
    display: block;
    position: absolute;
    right: -70px;
    top: 7px;
  }

  .bg-img-main {
    transition: all 0.3s ease;
  }

  .item-product:hover .bg-img-main {
    transform: scale(1.15);
  }

  .item-product a {
    color: #5d6567;
    font-weight: 400;
  }

  .item-product a:hover {
    color: var(--mainColor);
  }

  /* index product */
  .index-product.owl-carousel>.owl-nav>.owl-prev,
  .index-product.owl-carousel>.owl-nav>.owl-next {
    height: 30px;
    width: 30px;
    border-radius: 50%;
    transition: .3s;
    outline: none;
    opacity: .9;
    background: #daa785;
    border: solid 1px #daa785;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .index-product.owl-carousel>.owl-nav>.owl-prev {
    box-shadow: 0 0 4px 0 rgb(0 0 0 / 20%);
    position: absolute;
    top: 40%;
    left: 20px;
    margin: 0;
  }

  .index-product.owl-carousel>.owl-nav>.owl-next {
    box-shadow: 0 0 4px 0 rgb(0 0 0 / 20%);
    position: absolute;
    top: 40%;
    right: 20px;
    margin: 0;
  }

  .index-product .owl-nav [class*=owl-]:hover {
    color: white;
    background-color: var(--mainColor);
  }

  .index-product.owl-carousel>.owl-nav>.owl-prev.disabled,
  .index-product.owl-carousel>.owl-nav>.owl-next.disabled {
    display: flex;
    opacity: .35;
  }

  .index-product.owl-theme .owl-dots {
    margin-top: 16px;
  }

  .section-review {
    background-image: url(public/demo/bg_review.png);
    background-repeat: no-repeat;
    background-position: center;
    margin-top: -25px;
  }

  .box-review {
    padding: 0 15px;
    position: relative;
  }

  .review_top:before {
    content: "";
    background-image: url(public/demo/dau-hoi.png);
    background-repeat: no-repeat;
    position: absolute;
    top: 24px;
    left: 76px;
    width: 68px;
    height: 51px;
    background-size: contain;
  }


  .review-slider.owl-carousel .owl-item img {
    display: inline-block;
    width: 130px;
  }

  .review-slider.owl-carousel .owl-dots .owl-dot span {
    background: transparent;
  }

  .review-slider.owl-carousel .owl-dots .owl-dot.active span {
    background: var(--mainColor);
  }

  .bg-img-news {
    min-height: 550px;
    position: relative;
    display: block;
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    transition: all ease 0.3s;
  }

  .blog_gradient:before {
    content: "";
    height: 100%;
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
    background: linear-gradient(180deg, rgb(113 64 37 / 4%) 0%, rgb(99 76 62) 100%, rgb(79 67 51) 100%);
  }

  .content_blog {
    position: absolute;
    bottom: 0;
    padding: 20px;
    width: 100%;
    text-align: center;
    z-index: 2;
  }

  .content_blog a {
    color: white;
  }

  .content_blog a:hover {
    color: var(--mainColor);
  }



  /* mobile */
  @media (max-width: 767px) {
    .item_statistic {
      width: 50%;
      margin: 0 0 20px 0;
      padding: 0;
      float: left;
    }

    .section_service .title_module_main {
      font-size: 24px;
    }

    .section_service .title_module_main:before {
      content: "";
      width: 28px;
      height: 21px;
      background-size: contain;
      left: -35px;
      top: 0;
      background-repeat: no-repeat;
      display: block;
      position: absolute;
      background-image: url(public/demo/bg_title_1.png);
    }

    .section_service .title_module_main:after {
      content: "";
      width: 28px;
      height: 21px;
      background-size: contain;
      right: -35px;
      top: 0;
      background-repeat: no-repeat;
      display: block;
      position: absolute;
      background-image: url(public/demo/bg_title_2.png);
    }

    .section_index_product .title_module_main {
      font-size: 24px;
    }

    .section-news .title_module_main {
      font-size: 24px;
    }

    .section_have_bg_title .title_module_main::before {
      content: "";
      width: 28px;
      height: 21px;
      background-size: contain;
      left: -35px;
      top: 0;
      background-repeat: no-repeat;
      display: block;
      position: absolute;
      background-image: url(public/demo/bg_title_1.png);
    }

    .section_have_bg_title .title_module_main:after {
      content: "";
      width: 28px;
      height: 21px;
      background-size: contain;
      right: -35px;
      top: 0;
      background-repeat: no-repeat;
      display: block;
      position: absolute;
      background-image: url(public/demo/bg_title_2.png);
    }

    .review_top:before {
      width: 29px;
      height: 22px;
      left: 2px;
      top: 0;
    }
  }

  /* md */
  @media (min-width: 768px) {
    .number_statistic {
      font-size: 60px;
      line-height: 60px;
    }

    .info_statistic {
      font-size: 18px;
    }

    .item_statistic:not(:last-child)::before {
      content: "";
      height: 80%;
      width: 1px;
      background: #8d8882;
      position: absolute;
      top: 10px;
      right: 0;
    }

    .top-monthly.owl-theme .owl-nav.disabled+.owl-dots {
      margin-top: -65px;
    }

    .top-monthly.owl-carousel .owl-stage-outer {
      padding: unset;
      padding-bottom: 83px;
    }

    .box-review {
      padding: 0 140px;
      position: relative;
    }

    .section-review {
      background-image: url(public/demo/bg_review.png);
      background-repeat: no-repeat;
      background-position: center;
    }
  }

  /* pc */
  @media (min-width: 1400px) {
    .section_about:before {
      content: "";
      background-image: url(public/demo/bg_about.png);
      width: 205px;
      height: 436px;
      background-repeat: no-repeat;
      display: block;
      position: absolute;
      right: 40px;
      top: -80px;
    }

    .number_statistic {
      font-size: 88px;
      line-height: 88px;
    }

    .info_statistic {
      font-size: 22px;
    }

    .top-monthly.owl-carousel .owl-dots.disabled {
      display: block;
      position: relative;
      margin-top: -129px !important;
    }

    .top-monthly.owl-carousel .owl-stage-outer {
      padding: 83px 0px;
    }

    .bg_service:before {
      content: "";
      background-image: url(public/demo/bg_service_1.png);
      width: 61px;
      height: 58px;
      background-repeat: no-repeat;
      display: block;
      position: absolute;
      left: -29px;
      top: 67px;
    }

    .bg_service:after {
      content: "";
      background-image: url(public/demo/bg_service_2.png);
      width: 61px;
      height: 58px;
      background-repeat: no-repeat;
      display: block;
      position: absolute;
      right: -29px;
      top: 67px;
    }

    .section-review {
      background-image: url(public/demo/bg_review.png);
      background-repeat: no-repeat;
      background-position: center;
      padding-top: 92px;
      padding-bottom: 92px;
    }
  }
</style>

<div class="row px-6 gy-4 gx-4 pt-4 section_about position-relative">
  <div class="col-xxl-5 col-12 order-xxl-1 order-2">
    <a class="d-block text-center text-xxl-start" href="#">
      <img class="img-fluid" src="public/demo/banner_about.png" alt="">
    </a>
  </div>
  <div class="col-xxl-7 col-12 order-xxl-1 order-1">
    <div class="text-center text-xxl-start">
      <h2 class="title_module_main mb-0 mb-md-2">
        Tina Nail
      </h2>
      <p class="mb-3">
        Góc thôn quen để tụ tập
      </p>
    </div>
    <div class="d-none d-md-block text-md-center text-xxl-start" style="color: #5d6567;">
      <p class="mt-4">Tĩnh lặng và dịu sâu – đó là cảm giác đầu tiên khi khẽ mở cánh cửa gỗ nâu quen thuộc Calming spa
        muốn mang đến
        cho khách hàng – những người bạn của mình. Giữa trung tâm Sài Gòn náo nhiệt, Tina khép mình ẩn náu trong một
        không gian kín đáo, dịu dàng. Nơi sẽ ngay lập tức như đưa bạn trở về nhà, như lạc về một miền kí ức thân thương
        của những nồi nước lá xông thơm phức đến từng ngón tay, sợi tóc. Để cảm xúc được nâng niu, chiều chuộng sau một
        ngày dài mệt mỏi… Tina Nail – đúng như tên gọi, theo đuổi tiêu chí làm đẹp...</p>

      <div class="mt-5">
        <a class="btn-readmore have-through" href="index.php?p=aboutus" title="Tìm hiểu thêm">
          <span class="position-relative">Tìm hiểu thêm</span>
          <i class="bi bi-chevron-double-right small"></i>
        </a>
      </div>
    </div>
  </div>
</div>

<div class="row px-6 pt-5 section_service py-5">
  <div class="text-center">
    <h2 class="title_module_main d-inline-block position-relative mb-3 mb-md-3 mb-xxl-2">
      Top dịch vụ trong tháng
    </h2>
  </div>

  <div class="bg_service position-relative">
    <div class="top-monthly owl-carousel owl-theme">
      <div class="box-service">
        <div>
          <img class="img-fluid" src="public/demo/service_1.png" alt="">
        </div>
        <h5 class="title_module_main fs-3 my-3">
          Dịch vụ chăm sóc móng tay chân
        </h5>
        <p style="color: #9fa3a4;">
          Đây là dịch vụ phổ biến mà ở bất cứ tiệm nail cũng có không chỉ riêng tại Tina Nail. Với dịch vụ này chúng tôi
          sẽ giúp...
        </p>
        <div class="booking-box">
          <a class="d-inline-block border-bottom" href="index.php?p=booking">Đặt lịch ngay</a>
        </div>

        <div class="mt-4">
          <a href="#" class="btn my-btn-primary btn-service rounded-pill px-4 py-2">Tìm hiểu thêm</a>
        </div>
      </div>
      <div class="box-service">
        <div>
          <img class="img-fluid" src="public/demo/service_2.png" alt="">
        </div>
        <h5 class="title_module_main fs-3 my-3">
          Dịch vụ chăm sóc móng tay chân
        </h5>
        <p style="color: #9fa3a4;">
          Đây là dịch vụ phổ biến mà ở bất cứ tiệm nail cũng có không chỉ riêng tại Tina Nail. Với dịch vụ này chúng tôi
          sẽ giúp...
        </p>
        <div class="booking-box">
          <a class="d-inline-block border-bottom" href="index.php?p=booking">Đặt lịch ngay</a>
        </div>
        <div class="mt-4">
          <a href="#" class="btn my-btn-primary btn-service rounded-pill px-4 py-2">Tìm hiểu thêm</a>
        </div>
      </div>
      <div class="box-service">
        <div>
          <img class="img-fluid" src="public/demo/service_3.png" alt="">
        </div>
        <h5 class="title_module_main fs-3 my-3">
          Dịch vụ chăm sóc móng tay chân
        </h5>
        <p style="color: #9fa3a4;">
          Đây là dịch vụ phổ biến mà ở bất cứ tiệm nail cũng có không chỉ riêng tại Tina Nail. Với dịch vụ này chúng tôi
          sẽ giúp...
        </p>
        <div class="booking-box">
          <a class="d-inline-block border-bottom" href="index.php?p=booking">Đặt lịch ngay</a>
        </div>
        <div class="mt-4">
          <a href="#" class="btn my-btn-primary btn-service rounded-pill px-4 py-2">Tìm hiểu thêm</a>
        </div>
      </div>
    </div>
  </div>

  <div class="d-flex justify-content-center flex-wrap pt-xxl-5 mt-xxl-4 mt-md-4 mt-3">
    <div class="item_statistic">
      <div class="number_statistic">
        1700
      </div>
      <div class="info_statistic">
        Khách hàng/tháng
      </div>
    </div>
    <div class="item_statistic">
      <div class="number_statistic">
        100
      </div>
      <div class="info_statistic">
        Nhân viên
      </div>
    </div>
    <div class="item_statistic">
      <div class="number_statistic">
        99%
      </div>
      <div class="info_statistic">
        Tỉ lệ hài lòng <span class="d-none d-xxl-inline">của khách hàng</span>
      </div>
    </div>
    <div class="item_statistic">
      <div class="number_statistic">
        10
      </div>
      <div class="info_statistic">
        Chi nhánh
      </div>
    </div>
  </div>
</div>

<div class="row px-6 pt-4 section_index_product have-a-hover section_have_bg_title">
  <div class="text-center">
    <h2 class="title_module_main d-inline-block position-relative">
      <a href="index.php?p=listproducts" title="Sản phẩm nổi bật">Sản phẩm nổi bật</a>
    </h2>
  </div>

  <div class="index-product owl-carousel owl-theme pt-3">
    <div class="item-product">
      <div class="overflow-hidden bg-white rounded">
        <a href="index.php?p=detailproduct">
          <div class="bg-img-main" style="background-image: url(public/demo/item-product-1.png);"></div>
        </a>
      </div>
      <div class="px-2 mt-4 text-center">
        <h3 class="fs-6">
          <a href="index.php?p=detailproduct" title="Sơn móng gel bền đẹp Sally Hansen">
            Sơn móng gel bền đẹp Sally Hansen
          </a>
        </h3>
        <div>
          <span class="pe-2" style="color: var(--mainColor);">500.000₫</span>
          <span style="font-weight: 300;" class="small text-decoration-line-through text-black-50">700.000₫</span>
        </div>
      </div>
    </div>
    <div class="item-product">
      <div class="overflow-hidden bg-white rounded">
        <a href="index.php?p=detailproduct">
          <div class="bg-img-main" style="background-image: url(public/demo/item-product-2.png);"></div>
        </a>
      </div>
      <div class="px-2 mt-4 text-center">
        <h3 class="fs-6">
          <a href="index.php?p=detailproduct" title="Sơn móng gel bền đẹp Sally Hansen">
            Sơn móng gel bền đẹp Sally Hansen
          </a>
        </h3>
        <div>
          <span class="pe-2" style="color: var(--mainColor);">500.000₫</span>
          <span style="font-weight: 300;" class="small text-decoration-line-through text-black-50">700.000₫</span>
        </div>
      </div>
    </div>
    <div class="item-product">
      <div class="overflow-hidden bg-white rounded">
        <a href="index.php?p=detailproduct">
          <div class="bg-img-main" style="background-image: url(public/demo/item-product-3.png);"></div>
        </a>
      </div>
      <div class="px-2 mt-4 text-center">
        <h3 class="fs-6">
          <a href="index.php?p=detailproduct" title="Sơn móng gel bền đẹp Sally Hansen">
            Sơn móng gel bền đẹp Sally Hansen
          </a>
        </h3>
        <div>
          <span class="pe-2" style="color: var(--mainColor);">500.000₫</span>
          <span style="font-weight: 300;" class="small text-decoration-line-through text-black-50">700.000₫</span>
        </div>
      </div>
    </div>
    <div class="item-product">
      <div class="overflow-hidden bg-white rounded">
        <a href="index.php?p=detailproduct">
          <div class="bg-img-main" style="background-image: url(public/demo/item-product-4.png);"></div>
        </a>
      </div>
      <div class="px-2 mt-4 text-center">
        <h3 class="fs-6">
          <a href="index.php?p=detailproduct" title="Sơn móng gel bền đẹp Sally Hansen">
            Sơn móng gel bền đẹp Sally Hansen
          </a>
        </h3>
        <div>
          <span class="pe-2" style="color: var(--mainColor);">500.000₫</span>
          <span style="font-weight: 300;" class="small text-decoration-line-through text-black-50">700.000₫</span>
        </div>
      </div>
    </div>
    <div class="item-product">
      <div class="overflow-hidden bg-white rounded">
        <a href="index.php?p=detailproduct">
          <div class="bg-img-main" style="background-image: url(public/demo/item-product-1.png);"></div>
        </a>
      </div>
      <div class="px-2 mt-4 text-center">
        <h3 class="fs-6">
          <a href="index.php?p=detailproduct" title="Sơn móng gel bền đẹp Sally Hansen">
            Sơn móng gel bền đẹp Sally Hansen
          </a>
        </h3>
        <div>
          <span class="pe-2" style="color: var(--mainColor);">500.000₫</span>
          <span style="font-weight: 300;" class="small text-decoration-line-through text-black-50">700.000₫</span>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row px-6 section-review">
  <div class="text-center mt-xxl-4 pt-xxl-0 pt-5 mt-5 text-white">
    <h2 class="title_module_main text-white d-inline-block position-relative fs-2">
      Góc thân quen...
    </h2>
    <p>
      ...cho mình và người thân
    </p>
  </div>

  <div class="review-slider owl-carousel owl-theme mb-3 pb-4 mb-md-0 pb-md-5 mb-xxl-0 pb-xxl-0">
    <div class="box-review text-center text-white">
      <div class="review_top py-md-5 py-2 text-white">
        <span>Tina là nơi có thể đi "trốn" một mình khi cần hoặc làm nơi hẹn hò với bạn bè đều
          tốt! Mà đâu có xa xôi gì, ngay giữa trung tâm Sài Gòn tấp nập nữa mới hay chứ. Bởi vậy bạn cần dẫn đến có một
          lần à, là chị mua thẻ member nguyện làm "thành viên" của nhà Tina luôn".</span>
      </div>

      <div>
        <div class="mb-2">
          <img width="130" height="130" src="public/demo/review_1.png">
        </div>
        <h5 class="fw-normal">
          Chị Thu Hương
        </h5>
      </div>
    </div>
    <div class="box-review text-center text-white">
      <div class="review_top py-md-5 py-2 text-white">
        <span>Tina là nơi có thể đi "trốn" một mình khi cần hoặc làm nơi hẹn hò với bạn bè đều
          tốt! Mà đâu có xa xôi gì, ngay giữa trung tâm Sài Gòn tấp nập nữa mới hay chứ. Bởi vậy bạn cần dẫn đến có một
          lần à, là chị mua thẻ member nguyện làm "thành viên" của nhà Tina luôn".</span>
      </div>

      <div>
        <div class="mb-2">
          <img width="130" height="130" src="public/demo/review_2.png">
        </div>
        <h5 class="fw-normal">
          Chị Thu Hương
        </h5>
      </div>
    </div>
    <div class="box-review text-center text-white">
      <div class="review_top py-md-5 py-2 text-white">
        <span>Tina là nơi có thể đi "trốn" một mình khi cần hoặc làm nơi hẹn hò với bạn bè đều
          tốt! Mà đâu có xa xôi gì, ngay giữa trung tâm Sài Gòn tấp nập nữa mới hay chứ. Bởi vậy bạn cần dẫn đến có một
          lần à, là chị mua thẻ member nguyện làm "thành viên" của nhà Tina luôn".</span>
      </div>

      <div>
        <div class="mb-2">
          <img width="130" height="130" src="public/demo/review_2.png">
        </div>
        <h5 class="fw-normal">
          Chị Thu Hương
        </h5>
      </div>
    </div>
  </div>
</div>

<div class="row px-6 section-news have-a-hover section_have_bg_title">
  <div class="text-center mt-4 mt-md-0">
    <h2 class="title_module_main d-inline-block position-relative">
      <a href="index.php?p=listproducts" title="Sản phẩm nổi bật">Tin tức</a>
    </h2>
  </div>

  <div class="news-slider owl-carousel owl-theme mt-4">
    <div class="rounded-16 position-relative overflow-hidden blog_gradient">
      <div class="bg-img-news" style="background-image: url(public/demo/item-news-1.jpg);">
      </div>
      <div class="content_blog">
        <h4>
          <a class="line_2 px-2" href="index.php?p=detailnews">Các phụ kiện ngành nail giúp móng tay trở nên lung
            linh</a>
        </h4>
        <div class="mb-3 text-white">
          Phụ kiện nail sticker&nbsp;
          Việc vẽ quá lâu cũng dễ làm khách hàng ...
        </div>
        <a class="btn-readmore have-through-2" href="gioi-thieu" title="Tìm hiểu thêm">
          <span class="position-relative">Tìm hiểu thêm</span>
          <i class="bi bi-chevron-double-right small"></i>
        </a>
      </div>
    </div>
    <div class="rounded-16 position-relative overflow-hidden blog_gradient">
      <div class="bg-img-news" style="background-image: url(public/demo/item-news-1.jpg);">
      </div>
      <div class="content_blog">
        <h4>
          <a class="line_2 px-2" href="index.php?p=detailnews">Các phụ kiện ngành nail giúp móng tay trở nên lung
            linh</a>
        </h4>
        <div class="mb-3 text-white">
          Phụ kiện nail sticker&nbsp;
          Việc vẽ quá lâu cũng dễ làm khách hàng ...
        </div>
        <a class="btn-readmore have-through-2" href="gioi-thieu" title="Tìm hiểu thêm">
          <span class="position-relative">Tìm hiểu thêm</span>
          <i class="bi bi-chevron-double-right small"></i>
        </a>
      </div>
    </div>
    <div class="rounded-16 position-relative overflow-hidden blog_gradient">
      <div class="bg-img-news" style="background-image: url(public/demo/item-news-1.jpg);">
      </div>
      <div class="content_blog">
        <h4>
          <a class="line_2 px-2" href="index.php?p=detailnews">Các phụ kiện ngành nail giúp móng tay trở nên lung
            linh</a>
        </h4>
        <div class="mb-3 text-white">
          Phụ kiện nail sticker&nbsp;
          Việc vẽ quá lâu cũng dễ làm khách hàng ...
        </div>
        <a class="btn-readmore have-through-2" href="gioi-thieu" title="Tìm hiểu thêm">
          <span class="position-relative">Tìm hiểu thêm</span>
          <i class="bi bi-chevron-double-right small"></i>
        </a>
      </div>
    </div>
  </div>
</div>

<div class="row d-md-flex d-none px-6 section_have_bg_title py-4 mb-5 mt-4">
  <div class="text-center mt-md-0">
    <h2 class="title_module_main d-inline-block position-relative">
      Thư viện ảnh Tina
    </h2>
  </div>
  <div class="row gx-3 pt-4">
    <div class="col-md-8 col-12">
      <div class="row g-3">
        <div class="col-6">
          <div class="rounded-16">
            <img class="img-fluid w-100" src="public/demo/album_1.png" alt="">
          </div>
        </div>
        <div class="col-6">
          <div class="rounded-16">
            <img class="img-fluid w-100" src="public/demo/album_1.png" alt="">
          </div>
        </div>
        <div class="col-6">
          <div class="rounded-16">
            <img class="img-fluid w-100" src="public/demo/album_1.png" alt="">
          </div>
        </div>
        <div class="col-6">
          <div class="rounded-16">
            <img class="img-fluid w-100" src="public/demo/album_1.png" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-12">
        <img class="img-fluid h-100 w-100" src="public/demo/album_5.png" alt="">
    </div>
  </div>
</div>

<script src="owlcarousel/owl.carousel.min.js"></script>
<script>
  $(document).ready(function () {
    $('.top-monthly').owlCarousel({
      center: true,
      loop: true,
      margin: 0,
      dots: true,
      nav: false,
      margin: 0,
      autoplay: false,
      responsive: {
        0: {
          items: 1,
        },
        768: {
          items: 2,
          center: false,
          margin: 30,
        },
        1400: {
          items: 3,
          center: true,
        }
      }
    });

    $('.index-product').owlCarousel({
      center: false,
      loop: false,
      margin: 0,
      dots: false,
      nav: true,
      items: 1,
      merge: true,
      margin: 30,
      autoplay: false,
      responsive: {
        0: {
          items: 2,
          nav: false,
          dots: true,
          margin: 15,
        },
        768: {
          items: 3,
        },
        1400: {
          items: 4,
        }
      }
    });

    $(".index-product .owl-next").html(`<i class="bi bi-chevron-right fs-5"></i>`);
    $(".index-product .owl-prev").html(`<i class="bi bi-chevron-left fs-5"></i>`);

    $('.review-slider').owlCarousel({
      center: false,
      loop: false,
      margin: 0,
      dots: true,
      nav: false,
      margin: 30,
      items: 1,
      autoplay: false,
      responsive: {
        0: {
          items: 1,
        },
        768: {
          items: 1,
        },
        1400: {
          items: 1,
        }
      }
    });

    $('.news-slider').owlCarousel({
      center: false,
      loop: false,
      margin: 0,
      dots: true,
      nav: false,
      margin: 30,
      items: 1,
      autoplay: false,
      responsive: {
        0: {
          items: 1,
        },
        768: {
          items: 2,
        },
        1400: {
          items: 3,
        }
      }
    });
  });
</script>