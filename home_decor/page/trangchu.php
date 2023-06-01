<style type="text/css">
  .bg-img-main {
    background-image: url(public/demo/bg_base.png);
    background-repeat: repeat;
  }

  .heading:before {
    content: "";
    background-image: url(public/demo/bg_title_mobi.png);
    background-repeat: no-repeat;
    width: 45px;
    height: 38px;
    position: absolute;
    left: -48px;
    top: 17px;
    transform: rotateY(180deg);
  }

  .heading:after {
    content: "";
    background-image: url(public/demo/bg_title_mobi.png);
    background-repeat: no-repeat;
    width: 45px;
    height: 38px;
    position: absolute;
    right: -48px;
    top: 17px;
  }

  .col-item {
    box-shadow: 0px 0px 16px 0px rgba(0, 0, 0, 0.05);
  }

  .col-item:hover {
    box-shadow: 0px 0px 16px 0px rgba(0, 0, 0, 0.12);
  }

  .title-discount {
    font-size: 32px !important;
  }

  .heading.title-discount::before {
    display: none;
  }

  .heading.title-discount::after {
    right: -43px;
    top: 27px;
  }

  .swatch input:checked+label {
    box-shadow: 0px 1px 9px 0px rgba(4, 4, 4, 0.14);
    color: #616324;
  }

  .swatch label {
    float: left;
    min-width: 30px !important;
    height: 30px !important;
    margin: 0;
    padding: 0 5px !important;
    border: 1px solid #e1e1e1;
    background-color: #fff;
    font-size: 14px;
    text-align: center;
    line-height: 30px;
    white-space: nowrap;
    font-weight: 400;
    padding: 0;
    border-radius: 30px;
  }

  .swatch .color input:checked+label:after {
    content: "\f00c";
    font-family: 'Font Awesome\ 5 Free';
    font-weight: 900;
    color: #fff;
    font-size: 12px;
  }

  .img-scale-hover {
    max-width: 1170px;
    overflow: hidden;
  }

  .img-scale-hover img {
    transition: all .3s ease-in-out;
  }

  .img-scale-hover:hover img {
    transform: scale(1.025);
  }

  .heading-2::before {
    content: "";
    background-image: url(public/demo/bg_title_mobi.png);
    background-repeat: no-repeat;
    width: 19px;
    height: 27px;
    position: absolute;
    left: -23px;
    top: 25px;
    transform: rotateY(180deg);
  }

  .heading-2::after {
    content: "";
    background-image: url(public/demo/bg_title_mobi.png);
    background-repeat: no-repeat;
    width: 19px;
    height: 27px;
    position: absolute;
    right: -23px;
    top: 25px;
  }

  .my-bg-img {
    background-position: top center;
    background-repeat: no-repeat;
    background-size: cover;
    padding-top: 100%;
  }


  .item-info-product a {
    color: #707070;
  }

  .item-info-product a:hover {
    color: var(--color-main);
  }

  .item-info-product:hover .btn-views {
    animation: hover-imagecategory 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94) 1;
    display: block !important;
  }

  .item-info-product:hover {
    box-shadow: 0px 0px 16px 0px rgba(0, 0, 0, 0.12);
    background: #fff;
  }

  .action {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 50px;
    position: absolute;
    transform: translateX(-50%);
    height: 100%;
    left: 50%;
    flex-flow: column;
    z-index: 9;
    top: 0;
  }

  .btn-views {
    height: 43px;
    width: 43px;
    text-align: center;
    position: relative;
    line-height: 40px;
    background: #fff;
    border: 2px solid #fff;
    padding: 0px;
    box-shadow: none;
    font-size: 16px;
    font-weight: 400;
    margin-bottom: 5px;
    color: #000;
    border-radius: 5px;
    background: #e1e1e1;
    z-index: 6;
    display: none !important;
    vertical-align: middle;
    transform-origin: 50% 100%;
  }

  .btn-views:hover {
    background: #d5dd02;
    border-color: #d5dd02;
    color: #fff;
  }

  .owl-theme .owl-nav.disabled+.owl-dots {
    margin-top: 25px;
  }

  .article {
    padding-top: 40%;
  }

  .date_blog {
    position: absolute;
    bottom: -1px;
    left: 0px;
    background: #fff;
    opacity: 0.9;
    padding: 10px 20px 8px 20px;
    font-size: 13px;
    color: #707070;
  }

  .scale_hover:hover .my-bg-img {
    transform: scale(1.025);
  }


  .news-slide>.owl-nav>.owl-next {
    top: 38%;
    position: absolute;
    right: -75px;
  }

  .news-slide>.owl-nav>.owl-prev {
    top: 38%;
    position: absolute;
    left: -75px;
  }

  .news-slide .owl-nav [class*=owl-]:hover {
    color: unset;
    background: #d5dd02 !important;
  }

  .news-slide .owl-nav [class*=owl-].disabled:hover {
    color: unset;
    background: #f6f6f6 !important;

  }

  .news-slide.owl-theme .owl-nav.disabled {
    background: #f6f6f6 !important;
  }

  .news-slide.owl-theme .owl-nav [class*=owl-] {
    border-radius: 50%;
    background: #f6f6f6 !important;
    width: 45px;
    height: 45px;
  }


  .news-slide.owl-theme .owl-nav [class*=owl-] {
    display: none !important;
  }

  .title-cate {
    font-size: 25px;
  }

  .overflow-text {
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
    padding: 0 14px;
  }

  .scale_hover .my-bg-img {
    transition: all 0.2s linear;
  }


  /* md */
  @media (min-width: 768px) {
    .news-slide.owl-theme .owl-nav [class*=owl-] {
      display: none !important;
    }

    .heading-2::before {
      content: "";
      background-image: url(public/demo/bg_title_2.png);
      background-repeat: no-repeat;
      width: 76px;
      height: 38px;
      position: absolute;
      left: -50px;
      top: 27px;
      transform: rotateY(180deg);
    }

    .heading-2::after {
      content: "";
      background-image: url(public/demo/bg_title_2.png);
      background-repeat: no-repeat;
      width: 76px;
      height: 38px;
      position: absolute;
      right: -50px;
      top: 27px;
    }

    .title-cate {
      font-size: 36px;
    }

    .heading:before {
      content: "";
      background-image: url(public/demo/bg_title.png);
      background-repeat: no-repeat;
      width: 45px;
      height: 38px;
      position: absolute;
      left: -26px;
      top: 25px;
      transform: rotateY(180deg);
    }

    .heading::after {
      content: "";
      background-image: url(public/demo/bg_title.png);
      background-repeat: no-repeat;
      width: 45px;
      height: 38px;
      position: absolute;
      right: -26px;
      top: 25px;
    }


    .title-discount {
      font-size: initial;
    }
  }

  /* pc */
  @media (min-width: 1400px) {
    .news-slide.owl-theme .owl-nav [class*=owl-] {
      display: inline-block !important;
    }
  }
</style>

<div class="row">
  <div class="px-0">
    <a href="#">
      <img class="img-fluid" src="public/demo/banner-main.jpg" alt="">
    </a>
  </div>
</div>


<div class="row bg-img-main px-6">
  <div class="pt-5 text-center mb-4">
    <div class="heading position-relative d-inline-block">
      <h2 class="text-center fw-bold mb-0 title-cate"><a href="index.php">Danh mục sản phẩm</a></h2>
      <span style="font-size: 18px;" class="d-block text-center text-black-50">Top danh mục sản phẩm nổi bật nhất</span>
    </div>
  </div>
  <div class="d-flex flex-wrap px-0">
    <div class="col-xxl-3 col-md-6 col-6 px-3 pb-3">
      <div class="text-center col-item bg-white">
        <a style="height: 155px;" class="d-flex justify-content-center" href="javascript:;"
          title="Đồ tiện ích thông minh">
          <img class="img-fluid" src="public/demo/cate_1.png" alt="">
        </a>
        <a class="d-block py-3 pb-4 overflow-text" title="Đồ tiện ích thông minh" href="javascript:;">
          <span>Đồ tiện ích thông minh</span>
        </a>
      </div>
    </div>
    <div class="col-xxl-3 col-md-6 col-6 px-3 pb-3">
      <div class="text-center col-item bg-white">
        <a style="height: 155px;" class="d-flex justify-content-center" href="javascript:;" title="Đồ dùng nhà bếp">
          <img class="img-fluid" src="public/demo/cate_2.png" alt="">
        </a>
        <a class="d-block py-3 pb-4 overflow-text" title="Đồ dùng nhà bếp" href="javascript:;">
          <span>Đồ dùng nhà bếp</span>
        </a>
      </div>
    </div>
    <div class="col-xxl-3 col-md-6 col-6 px-3 pb-3">
      <div class="text-center col-item bg-white">
        <a style="height: 155px;" class="d-flex justify-content-center" href="javascript:;"
          title="Ghế tựa sắt chùm Jutin">
          <img class="img-fluid" src="public/demo/cate_3.png" alt="">
        </a>
        <a class="d-block py-3 pb-4 overflow-text" title="Ghế tựa sắt chùm Jutin" href="javascript:;">
          <span>Ghế tựa sắt chùm Jutin</span>
        </a>
      </div>
    </div>
    <div class="col-xxl-3 col-md-6 col-6 px-3 pb-3">
      <div class="text-center col-item bg-white">
        <a style="height: 155px;" class="d-flex justify-content-center" href="javascript:;"
          title="Đèn chùm treo tường Luxury 03">
          <img class="img-fluid" src="public/demo/cate_4.png" alt="">
        </a>
        <a class="d-block py-3 pb-4 overflow-text" title="Đèn chùm treo tường Luxury 03" href="javascript:;">
          <span>Đèn chùm treo tường Luxury 03</span>
        </a>
      </div>
    </div>

    <div class="col-xxl-3 col-md-6 col-6 px-3 pb-3">
      <div class="text-center col-item bg-white">
        <a style=" height: 155px;" class="d-flex justify-content-center" href="javascript:;" title="Đồ dùng dọn dẹp">
          <img class="img-fluid" src="public/demo/cate_5.png" alt="">
        </a>
        <a class="d-block py-3 pb-4 overflow-text" title="Đồ dùng dọn dẹp" href="javascript:;">
          <span>Đồ dùng dọn dẹp</span>
        </a>
      </div>
    </div>
    <div class="col-xxl-3 col-md-6 col-6 px-3 pb-3">
      <div class="text-center col-item bg-white">
        <a style="height: 155px;" class="d-flex justify-content-center" href="javascript:;"
          title="Trang trí - Quà tặng">
          <img class="img-fluid" src="public/demo/cate_6.png" alt="">
        </a>
        <a class="d-block py-3 pb-4" title="Trang trí - Quà tặng" href="javascript:;">
          <span>Trang trí - Quà tặng</span>
        </a>
      </div>
    </div>
    <div class="col-xxl-3 col-md-6 col-6 px-3 pb-3">
      <div class="text-center col-item bg-white">
        <a style="height: 155px;" class="d-flex justify-content-center" href="javascript:;" title="Đồ dùng trẻ em">
          <img class="img-fluid" src="public/demo/cate_7.png" alt="">
        </a>
        <a class="d-block py-3 pb-4" title="Đồ dùng trẻ em" href="javascript:;">
          <span>Đồ dùng trẻ em</span>
        </a>
      </div>
    </div>
    <div class="col-xxl-3 col-md-6 col-6 px-3 pb-3">
      <div class="text-center col-item bg-white">
        <a style="height: 155px;" class="d-flex justify-content-center" href="javascript:;" title="Đồ sứ đẹp">
          <img class="img-fluid" src="public/demo/cate_8.png" alt="">
        </a>
        <a class="d-block py-3 pb-4" title="Đồ sứ đẹp" href="javascript:;">
          <span>Đồ sứ đẹp</span>
        </a>
      </div>
    </div>
  </div>
</div>

<div style="padding-bottom: 240px;" class="row px-6 pt-5 bg-img-main justify-content-center">
  <div class="col-xxl-5 col-12">
    <div class="heading title-discount position-relative d-inline-block mb-5">
      <h2 style="font-size: 36px;" class="text-center fw-bold mb-0">Giảm giá hôm nay</h2>
      <span style="font-size: 18px;" class="d-block text-black-50">Top danh mục sản phẩm nổi bật nhất</span>
    </div>
    <h3 class="fs-3">
      <a href="index.php?p=detailproduct" title="Máy đánh trứng cao cấp Lock&amp;Lock">Máy đánh trứng cao cấp
        Lock&amp;Lock</a>
    </h3>
    <div>
      <span class="text-black-50">Thương hiệu:</span> <span class="text-black">Lock&amp;Lock</span>
    </div>
    <div class="my-2 text-black-50">
      Dụng cụ đánh trứng cao cấp Lock&amp;Lock là sản phẩm rất dễ sử dụng và đánh nhanh hơn máy điện thông thường.
      Sản phẩm tuyệt vời ngoài đánh bong được lòng trắng trứng, còn có thể đánh được kem lỏng, nước...
    </div>
    <div>
      <span class="text-black fw-bold fs-3 me-2">150.000₫</span>
      <del style="vertical-align: 3px;" class="text-black-50 fw-bold">160.000₫</del>
    </div>
    <p class="fw-light">Kích thước</p>
    <div class="swatch">
      <div data-value="To">
        <input hidden id="swatch-0-to" type="radio" name="option-0" value="To" checked="">
        <label class="me-2" for="swatch-0-to">
          To
        </label>
      </div>
      <div data-value="Vừa">
        <input hidden id="swatch-0-vua" type="radio" name="option-0" value="Vừa">
        <label class="me-2" for="swatch-0-vua">
          Vừa
        </label>
      </div>
      <div data-value="Nhỏ">
        <input hidden id="swatch-0-nho" type="radio" name="option-0" value="Nhỏ">
        <label class="me-2" for="swatch-0-nho">
          Nhỏ
        </label>
      </div>
    </div>

    <p class="fw-light">Màu sắc</p>
    <div class="swatch pb-5">
      <div class="color">
        <div class="tooltip">Đỏ</div>
        <input hidden id="swatch-1-do" type="radio" name="option-1" value="Đỏ" checked="">
        <label class="me-2" for="swatch-1-do" style="background-color: #f20808;">
        </label>
      </div>
      <div class="color">
        <div class="tooltip">Xanh</div>
        <input hidden id="swatch-1-xanh" type="radio" name="option-1" value="Xanh">
        <label class="me-2" for="swatch-1-xanh" style="background-color: #0554ff;">
        </label>
      </div>
      <div class="color">
        <div class="tooltip">Nâu</div>
        <input hidden id="swatch-1-nau" type="radio" name="option-1" value="Nau">
        <label class="me-2" for="swatch-1-nau" style="background-color: #0554ff;">
        </label>
      </div>
    </div>

    <div>
      <button class="btn btn_base px-3" href="#">
        <img class="me-2" height="24" width="29" src="public/demo/i_cart.png" alt="">
        <span>Thêm vào giỏ hàng</span>
      </button>
    </div>

  </div>
  <div class="col-xxl-5 col-12">
    <img class="img-fluid" src="public/demo/img-product.png" alt="">
  </div>
</div>

<div style="margin-top: -125px;" class="row px-6">
  <div class="px-0 img-scale-hover">
    <img class="img-fluid w-100" src="public/demo/banner-scale.jpg" alt="">
  </div>
</div>

<div class="row px-6">
  <div class="pt-5 text-center mb-4">
    <div class="heading-2 position-relative d-inline-block">
      <h2 class="text-center fw-bold mb-0"><a href="index.php">Top bán chạy</a></h2>
      <span style="font-size: 18px;" class="d-block text-center text-black-50">Top danh mục sản phẩm nổi bật nhất</span>
    </div>
  </div>
</div>

<div class="row px-6">
  <div class="best-selling owl-carousel owl-theme px-0">
    <div class="item-info-product">
      <div class="position-relative">
        <a href="index.php?p=detailproduct">
          <div class="my-bg-img" style="background-image: url(public/demo/product-thumnail.png);"></div>
        </a>
        <div class="px-2">
          <a href="index.php?p=detailproduct" title="Máy đánh trứng cao cấp Lock&amp;Lock">
            Máy đánh trứng cao cấp Lock&amp;Lock
          </a>
        </div>

        <div class="action">
          <button title="Xem nhanh" href="#" data-handle="may-danh-trung-cao-cap-lock-lock"
            class="xem_nhanh btn right-to quick-view btn-views hidden-sm hidden-md">
            <i class="fas fa-search-plus"></i>
            </but>
            <input class="hidden" type="hidden" name="variantId" value="21894984">
            <button class="btn btn-cart btn btn-views left-to" title="Tuỳ chọn" type="button"
              onclick="window.location.href='#'">
              <i class="fas fa-cog"></i>
            </button>
        </div>
      </div>
      <div class="fw-bold py-2 px-2 pb-4">
        150.000₫&nbsp;
        <del class="text-black-50 small">160.000₫</del>
      </div>
    </div>
    <div class="item-info-product">
      <div class="position-relative">
        <a href="index.php?p=detailproduct">
          <div class="my-bg-img" style="background-image: url(public/demo/product-thumnail-2.png);"></div>
        </a>
        <div class="px-2">
          <a href="index.php?p=detailproduct" title="Máy đánh trứng cao cấp Lock&amp;Lock">
            Máy đánh trứng cao cấp Lock&amp;Lock
          </a>
        </div>

        <div class="action">
          <button title="Xem nhanh" href="#" data-handle="may-danh-trung-cao-cap-lock-lock"
            class="xem_nhanh btn right-to quick-view btn-views hidden-sm hidden-md">
            <i class="fas fa-search-plus"></i>
            </but>
            <input class="hidden" type="hidden" name="variantId" value="21894984">
            <button class="btn btn-cart btn btn-views left-to" title="Tuỳ chọn" type="button"
              onclick="window.location.href='#'">
              <i class="fas fa-cog"></i>
            </button>
        </div>
      </div>
      <div class="fw-bold py-2 px-2 pb-4">
        150.000₫&nbsp;
        <del class="text-black-50 small">160.000₫</del>
      </div>
    </div>
    <div class="item-info-product">
      <div class="position-relative">
        <a href="index.php?p=detailproduct">
          <div class="my-bg-img" style="background-image: url(public/demo/product-thumnail-3.png);"></div>
        </a>
        <div class="px-2">
          <a href="index.php?p=detailproduct" title="Máy đánh trứng cao cấp Lock&amp;Lock">
            Máy đánh trứng cao cấp Lock&amp;Lock
          </a>
        </div>

        <div class="action">
          <button title="Xem nhanh" href="#" data-handle="may-danh-trung-cao-cap-lock-lock"
            class="xem_nhanh btn right-to quick-view btn-views hidden-sm hidden-md">
            <i class="fas fa-search-plus"></i>
            </but>
            <input class="hidden" type="hidden" name="variantId" value="21894984">
            <button class="btn btn-cart btn btn-views left-to" title="Tuỳ chọn" type="button"
              onclick="window.location.href='#'">
              <i class="fas fa-cog"></i>
            </button>
        </div>
      </div>
      <div class="fw-bold py-2 px-2 pb-4">
        150.000₫&nbsp;
        <del class="text-black-50 small">160.000₫</del>
      </div>
    </div>
    <div class="item-info-product">
      <div class="position-relative">
        <a href="index.php?p=detailproduct">
          <div class="my-bg-img" style="background-image: url(public/demo/product-thumnail-4.png);"></div>
        </a>
        <div class="px-2">
          <a href="index.php?p=detailproduct" title="Máy đánh trứng cao cấp Lock&amp;Lock">
            Máy đánh trứng cao cấp Lock&amp;Lock
          </a>
        </div>

        <div class="action">
          <button title="Xem nhanh" href="#" data-handle="may-danh-trung-cao-cap-lock-lock"
            class="xem_nhanh btn right-to quick-view btn-views hidden-sm hidden-md">
            <i class="fas fa-search-plus"></i>
            </but>
            <input class="hidden" type="hidden" name="variantId" value="21894984">
            <button class="btn btn-cart btn btn-views left-to" title="Tuỳ chọn" type="button"
              onclick="window.location.href='#'">
              <i class="fas fa-cog"></i>
            </button>
        </div>
      </div>
      <div class="fw-bold py-2 px-2 pb-4">
        150.000₫&nbsp;
        <del class="text-black-50 small">160.000₫</del>
      </div>
    </div>
    <div class="item-info-product">
      <div class="position-relative">
        <a href="index.php?p=detailproduct">
          <div class="my-bg-img" style="background-image: url(public/demo/product-thumnail.png);"></div>
        </a>
        <div class="px-2">
          <a href="index.php?p=detailproduct" title="Máy đánh trứng cao cấp Lock&amp;Lock">
            Máy đánh trứng cao cấp Lock&amp;Lock
          </a>
        </div>

        <div class="action">
          <button title="Xem nhanh" href="#" data-handle="may-danh-trung-cao-cap-lock-lock"
            class="xem_nhanh btn right-to quick-view btn-views hidden-sm hidden-md">
            <i class="fas fa-search-plus"></i>
            </but>
            <input class="hidden" type="hidden" name="variantId" value="21894984">
            <button class="btn btn-cart btn btn-views left-to" title="Tuỳ chọn" type="button"
              onclick="window.location.href='#'">
              <i class="fas fa-cog"></i>
            </button>
        </div>
      </div>
      <div class="fw-bold py-2 px-2 pb-4">
        150.000₫&nbsp;
        <del class="text-black-50 small">160.000₫</del>
      </div>
    </div>
    <div class="item-info-product">
      <div class="position-relative">
        <a href="index.php?p=detailproduct">
          <div class="my-bg-img" style="background-image: url(public/demo/product-thumnail-2.png);"></div>
        </a>
        <div class="px-2">
          <a href="index.php?p=detailproduct" title="Máy đánh trứng cao cấp Lock&amp;Lock">
            Máy đánh trứng cao cấp Lock&amp;Lock
          </a>
        </div>

        <div class="action">
          <button title="Xem nhanh" href="#" data-handle="may-danh-trung-cao-cap-lock-lock"
            class="xem_nhanh btn right-to quick-view btn-views hidden-sm hidden-md">
            <i class="fas fa-search-plus"></i>
            </but>
            <input class="hidden" type="hidden" name="variantId" value="21894984">
            <button class="btn btn-cart btn btn-views left-to" title="Tuỳ chọn" type="button"
              onclick="window.location.href='#'">
              <i class="fas fa-cog"></i>
            </button>
        </div>
      </div>
      <div class="fw-bold py-2 px-2 pb-4">
        150.000₫&nbsp;
        <del class="text-black-50 small">160.000₫</del>
      </div>
    </div>
    <div class="item-info-product">
      <div class="position-relative">
        <a href="index.php?p=detailproduct">
          <div class="my-bg-img" style="background-image: url(public/demo/product-thumnail-3.png);"></div>
        </a>
        <div class="px-2">
          <a href="index.php?p=detailproduct" title="Máy đánh trứng cao cấp Lock&amp;Lock">
            Máy đánh trứng cao cấp Lock&amp;Lock
          </a>
        </div>

        <div class="action">
          <button title="Xem nhanh" href="#" data-handle="may-danh-trung-cao-cap-lock-lock"
            class="xem_nhanh btn right-to quick-view btn-views hidden-sm hidden-md">
            <i class="fas fa-search-plus"></i>
            </but>
            <input class="hidden" type="hidden" name="variantId" value="21894984">
            <button class="btn btn-cart btn btn-views left-to" title="Tuỳ chọn" type="button"
              onclick="window.location.href='#'">
              <i class="fas fa-cog"></i>
            </button>
        </div>
      </div>
      <div class="fw-bold py-2 px-2 pb-4">
        150.000₫&nbsp;
        <del class="text-black-50 small">160.000₫</del>
      </div>
    </div>
    <div class="item-info-product">
      <div class="position-relative">
        <a href="index.php?p=detailproduct">
          <div class="my-bg-img" style="background-image: url(public/demo/product-thumnail-4.png);"></div>
        </a>
        <div class="px-2">
          <a href="index.php?p=detailproduct" title="Máy đánh trứng cao cấp Lock&amp;Lock">
            Máy đánh trứng cao cấp Lock&amp;Lock
          </a>
        </div>

        <div class="action">
          <button title="Xem nhanh" href="#" data-handle="may-danh-trung-cao-cap-lock-lock"
            class="xem_nhanh btn right-to quick-view btn-views hidden-sm hidden-md">
            <i class="fas fa-search-plus"></i>
            </but>
            <input class="hidden" type="hidden" name="variantId" value="21894984">
            <button class="btn btn-cart btn btn-views left-to" title="Tuỳ chọn" type="button"
              onclick="window.location.href='#'">
              <i class="fas fa-cog"></i>
            </button>
        </div>
      </div>
      <div class="fw-bold py-2 px-2 pb-4">
        150.000₫&nbsp;
        <del class="text-black-50 small">160.000₫</del>
      </div>
    </div>
  </div>
</div>

<div class="row px-6">
  <h2 class="py-5">
    <a class="fw-bold fs-2" href="index.php?p=news" title="Tin khuyến mãi">Tin khuyến mãi</a>
  </h2>
  <div class="news-slide owl-carousel owl-theme">
    <div>
      <a class="d-block position-relative scale_hover overflow-hidden" href="index.php?p=detailnews">
        <div class="my-bg-img article" style="background-image: url(public/demo/news-1.jpg);"></div>
        <div class="date_blog"><i class="fas fa-calendar-alt me-2"></i>23/11/2018</div>
      </a>
      <h5 class="my-2">
        <a class="fw-normal" href="index.php?p=detailnews"
          title="Những gợi ý lưu trữ đồ dùng nhà bếp gọn gàng và sạch sẽ hơn">Những gợi ý
          lưu trữ đồ dùng nhà bếp gọn gàng và sạch sẽ hơn</a>
      </h5>
      <p class="text-black-50">Những đồ dùng nhà bếp đang chiếm nhiều diện tích, bừa bộn và làm bạn khó chịu. Vậy hãy thử những ...</p>
    </div>
    <div>
      <a class="d-block position-relative scale_hover overflow-hidden" href="index.php?p=detailnews">
        <div class="my-bg-img article" style="background-image: url(public/demo/news-2.jpg);"></div>
        <div class="date_blog"><i class="fas fa-calendar-alt me-2"></i>23/11/2018</div>
      </a>
      <h5 class="my-2">
        <a class="fw-normal" href="index.php?p=detailnews"
          title="Những gợi ý lưu trữ đồ dùng nhà bếp gọn gàng và sạch sẽ hơn">Những gợi ý
          lưu trữ đồ dùng nhà bếp gọn gàng và sạch sẽ hơn</a>
      </h5>
      <p class="text-black-50">Những đồ dùng nhà bếp đang chiếm nhiều diện tích, bừa bộn và làm bạn khó chịu. Vậy hãy thử những ...</p>
    </div>
    <div>
      <a class="d-block position-relative scale_hover overflow-hidden" href="index.php?p=detailnews">
        <div class="my-bg-img article" style="background-image: url(public/demo/news-3.jpg);"></div>
        <div class="date_blog"><i class="fas fa-calendar-alt me-2"></i>23/11/2018</div>
      </a>
      <h5 class="my-2">
        <a class="fw-normal" href="index.php?p=detailnews"
          title="Những gợi ý lưu trữ đồ dùng nhà bếp gọn gàng và sạch sẽ hơn">Những gợi ý
          lưu trữ đồ dùng nhà bếp gọn gàng và sạch sẽ hơn</a>
      </h5>
      <p class="text-black-50">Những đồ dùng nhà bếp đang chiếm nhiều diện tích, bừa bộn và làm bạn khó chịu. Vậy hãy thử những ...</p>
    </div>
  </div>
</div>


<script src="owlcarousel/owl.carousel.min.js"></script>
<script>
  $(document).ready(function () {
    $('.best-selling').owlCarousel({
      center: false,
      loop: false,
      margin: 0,
      dots: true,
      nav: false,
      margin: 6,
      items: 1,
      autoplay: false,
      responsive: {
        0: {
          items: 2,
          margin: 0,
        },
        768: {
          items: 4,
        },
        1400: {
          items: 6
        }
      }
    });

    $('.news-slide').owlCarousel({
      center: false,
      loop: false,
      margin: 0,
      dots: false,
      nav: true,
      margin: 30,
      items: 1,
      autoplay: false,
      responsive: {
        0: {
          items: 1,
        },
        768: {
          items: 2,
          nav: false,
        },
        1400: {
          items: 2
        }
      }
    });

    $(".news-slide .owl-next").html(`<i class="bi bi-caret-right fs-4"></i>`);
    $(".news-slide .owl-prev").html(`<i class="bi bi-caret-left fs-4"></i>`);
  });
</script>