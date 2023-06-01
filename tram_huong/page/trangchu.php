<style type="text/css">
  .register-wrap {
    background-color: var(--bs-gray-100);
  }

  .btn-custom {
    border: 1px solid rgb(var(--bs-red));
    color: rgb(var(--bs-red));
    font-weight: 600;
    padding: 0.4rem;
  }

  .btn-custom:hover {
    background-color: rgb(var(--bs-red));
    color: var(--bs-white);
  }

  .why_wrap {
    background-color: var(--bs-gray-100);
  }

  .btn-custom-2 {
    background-color: var(--bs-gray);
    color: var(--bs-white);
    font-weight: bold;
  }

  .btn-custom-2:hover {
    background-color: var(--bs-gray);
    color: var(--bs-white);
  }

  .agency_wrap {
    top: -1%;
    left: 30%;
  }

  .agency_wrap__info {
    left: 32%;
    top: 28%;
  }

  .partner_wrap {
    transform: rotate(89deg);
    left: 61%;
    top: -4%;
  }

  .partner_wrap__info {
    left: 42%;
    top: 30%;
    transform: rotate(-90deg);
  }

  .car_sold_wrap {
    transform: rotate(-90deg);
    left: 28%;
    top: 40%;
  }

  .car_sold_wrap__info {
    left: 8%;
    top: 29%;
    transform: rotate(89deg);
  }

  .honors_wrap {
    transform: rotate(-181deg);
    left: 60%;
    top: 38%;
  }

  .honors_wrap__info {
    left: 30%;
    top: 23%;
    transform: rotate(181deg);
  }

  .info-right_wrap {
    transform: translateY(10%);
  }

  .logo_register {
    height: 35%;
  }

  .category-block {
    position: relative;
  }

  .category-block--content {
    position: absolute;
    bottom: 0;
    width: 100%;
    text-align: center;
    padding: 10px 20px;
  }

  .category-block {
    position: relative;
    overflow: hidden;
    border-radius: 5px;
  }

  .category-block:hover img {
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1);
  }

  .category-block:hover img {
    -webkit-transition: all 400ms ease;
    -ms-transition: all 400ms ease;
    transition: all 400ms ease;
  }

  a:hover,
  a:focus {
    color: var(--shop-color-hover);
    outline: none;
  }

  .product_stand_out .collection-bg {
    background-color: var(--home-collection1-bg);
  }

  .card-title {
    font-size: 14px;
    margin: 0 0 5px;
    font-weight: 500;
  }

  .star_icon {
    -webkit-font-smoothing: antialiased;
    font-family: raty !important;
    font-style: normal;
    font-variant: normal;
    font-weight: 400;
    font-size: 1.5em;
    color: var(--shop-color-star-icon);
  }

  .pro-sale {
    top: 2px;
    left: 3px;
    background: red;
    min-width: 40px;
    text-align: center;
    padding-top: 1px;
    padding-bottom: 1px;
  }

  .pro-prices .price {
    color: #ff2c26;
    font-weight: 600;
  }

  .pro-prices .price-del {
    color: #878c8f;
    text-decoration: line-through;
    font-weight: 300;
  }

  .btnico i {
    width: 16px;
    height: 31px;
    line-height: 31px;
    display: block;
    margin: auto;
    fill: #ffffff;
  }

  .btnico {
    display: block;
    width: 32px;
    height: 32px;
    background: #c73328;
    border-radius: 50%;
    transition: all 0.5s;
    cursor: pointer;
  }

  .btn-add-to-cart {
    border-radius: 16px;
    border: 1px solid transparent;
    transition: border 0.2s ease;
    border-right: 0px transparent;
    text-transform: uppercase;
  }

  .btn-add-to-cart:hover {
    border-color: #c73328;
  }

  .star-filled {
    color: rgb(236, 186, 85);
  }

  .coupon-wrapper {
    background: var(--home-coupon-bg);
    border-radius: 15px;
    height: 100%;
    border: 1px solid rgba(0, 0, 0, 0.08);
  }

  .info-coupon {
    top: 2px;
    right: 2px;
    background: transparent;
  }

  .btn-have-animation {
    border: unset;
    background-color: var(--shop-color-button);
    color: var(--bs-white);
  }

  .btn-coupon {
    font-size: 11px;
    min-width: 92px;
    padding: 2px 0px;
    text-transform: uppercase;
    vertical-align: middle;
  }

  .coupon-left {
    border-right: 1px dashed var(--shop-color-border);
    position: relative;
  }

  .coupon-left::before,
  .coupon-left::after {
    content: "";
    width: 20px;
    height: 10px;
    right: -10px;
    position: absolute;
    background: var(--shop-color-bg);
    z-index: 99;
    border: 1px solid rgba(0, 0, 0, 0.08);
  }

  .coupon-left::before {
    top: -1px;
    border-top: 0;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
  }

  .coupon-left::after {
    bottom: -1px;
    border-bottom: 0;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
  }

  .made-by-wrap {
    background: var(--home-categorize-bg);
  }

  .see-all-btn {
    position: relative;
    color: rgb(199 51 40);
    border: 1px solid var(--shop-color-button);
    background-color: white;
    margin-top: 20px;
    text-transform: initial;
    font-size: 14px;
    border-radius: 4px;
    padding: 10px 25px;
    transition: color 0.45s cubic-bezier(0.785, 0.135, 0.15, 0.86), border 0.45s cubic-bezier(0.785, 0.135, 0.15, 0.86);
  }

  .see-all-btn:before {
    background: #fff;
  }

  .button:before {
    content: '';
    display: block;
    background-color: var(--shop-color-button);
    position: absolute;
    left: -2px;
    top: 0;
    right: -2px;
    bottom: 0;
    z-index: -1;
    -webkit-transform: scale(1, 1);
    transform: scale(1, 1);
    -webkit-transform-origin: left center;
    transform-origin: left center;
    -webkit-transition: -webkit-transform 0.45s cubic-bezier(0.785, 0.135, 0.15, 0.86);
    transition: -webkit-transform 0.45s cubic-bezier(0.785, 0.135, 0.15, 0.86);
    transition: transform 0.45s cubic-bezier(0.785, 0.135, 0.15, 0.86);
    transition: transform 0.45s cubic-bezier(0.785, 0.135, 0.15, 0.86), -webkit-transform 0.45s cubic-bezier(0.785, 0.135, 0.15, 0.86);
  }

  .see-all-btn:after {
    content: '';
    box-sizing: border-box;
    position: absolute;
    top: 50%;
    left: 20px;
    width: 20px;
    height: 20px;
    margin-top: -10px;
    margin-left: -10px;
    border-radius: 50%;
    border: 2px solid #ccc;
    border-top-color: var(--shop-color-button);
    animation: spinner .6s linear infinite;
    opacity: 0;
    transition: opacity 1s ease;
  }

  .see-all-btn:after {
    display: none;
  }

  .object-fit-contain {
    object-fit: contain;
  }

  .item-img-wrapper {
    position: relative;
    height: 0;
    width: 100%;
    padding-bottom: 100%;
    transition: all 0.5s ease;
  }

  .item-img-wrapper:hover {
    box-shadow: 0 0 0 5px rgb(255 255 255 / 50%);
  }

  .item-cate-img {
    position: absolute;
    left: 0;
    top: 0;
    /* width: 100%;
    height: 100%; */
    object-fit: contain;
    padding: 10px;
  }

  .btn-tab-custom {
    font-weight: 700;
    color: #787878;
    border: 1px solid #eae4e8;
    border-radius: 20px;
  }

  .nav-link:hover {
    color: unset;
  }

  .nav-link.btn-tab-custom.active {
    opacity: 1;
    border-color: var(--shop-color-button);
    color: #ffffff;
    background: var(--shop-color-button);
  }

  .price-on-sale-color {
    color: rgb(255, 44, 38);
  }

  .price-off-sale-color {
    color: rgb(51, 51, 51);
  }

  .dung-cu-thuong-tram a {
    white-space: break-spaces;
    overflow: hidden;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    display: -webkit-box;
  }

  .bg-danger {
    background: #fbf1f1 !important;
    color: #ff0000 !important;
  }

  .dung-cu-thuong-tram .item:not(:last-child) {
    border-bottom: 1px solid #eae4e8;
  }

  .category-mobile {
    text-align: center;
    font-weight: 500;
    font-size: 13px;
    padding: 8px 0;
    position: relative;
    display: block;
    overflow: hidden;
    color: #ffffff;
  }

  .category-mobile .color_main {
    color: var(--shop-color-text);
  }

  .category-mobile .category-block--content {
    position: absolute;
    bottom: -10px;
    width: 100%;
    text-align: center;
    padding: 10px 20px;
  }

  .made-by-mobile {
    text-align: center;
    font-weight: 500;
    font-size: 13px;
    padding: 8px 0;
    position: relative;
    display: block;
    overflow: hidden;
    color: #ffffff;
  }

  .moi5 .owl-nav [class*="owl-"]:hover {
    background: var(--shop-color-button);
    color: #fff;
  }

  .moi5 .owl-prev.disabled:hover {
    background: #fff !important;
    color: #858380;
    cursor: no-drop;
  }

  .moi5 .icon-next,
  .moi5 .icon-prev {
    width: 30px;
    height: 30px;
    vertical-align: middle;
    display: inline-flex;
    align-items: center;
    justify-content: center;
  }

  .moi5>.owl-nav>.owl-next,
  .moi5>.owl-nav>.owl-prev {
    background-color: white;
    z-index: 3;
    border-radius: 50%;
    color: #858380;
    background: #fff;
    border: 1px solid var(--shop-color-border);
    box-shadow: 0 0.125rem 0.25rem rgb(0 0 0 / 8%);
    margin: 0px;
  }

  .moi5>.owl-nav>.owl-next {
    position: absolute;
    top: -10%;
    right: 0;
  }

  .moi5>.owl-nav>.owl-prev {
    position: absolute;
    top: -10%;
    right: 35px;
  }

  @media (min-width: 768px) {
    .moi5>.owl-nav>.owl-prev {
      position: absolute;
      top: -15%;
      right: 40px;
    }

    .moi5>.owl-nav>.owl-next {
      position: absolute;
      top: -15%;
      right: 0;
    }
  }

  .card_img {
    height: 33vw;
  }

  .product {
    width: 188px;
    padding-left: 8px;
    padding-right: 8px;
  }

  .moi6 .owl-nav [class*="owl-"]:hover {
    background: var(--shop-color-button);
    color: #fff;
  }

  .moi6 .owl-prev.disabled:hover {
    background: #fff !important;
    color: #858380;
    cursor: no-drop;
  }

  .moi6 .icon-next,
  .moi6 .icon-prev {
    width: 30px;
    height: 30px;
    vertical-align: middle;
    display: inline-flex;
    align-items: center;
    justify-content: center;
  }

  .moi6>.owl-nav>.owl-next,
  .moi6>.owl-nav>.owl-prev {
    background-color: white;
    z-index: 3;
    border-radius: 50%;
    color: #858380;
    background: #fff;
    border: 1px solid var(--shop-color-border) !important;
    box-shadow: 0 0.125rem 0.25rem rgb(0 0 0 / 8%);
    margin: 0px;
  }

  .moi6>.owl-nav>.owl-next {
    position: absolute;
    top: -15%;
    right: 0;
  }

  .moi6>.owl-nav>.owl-prev {
    position: absolute;
    top: -15%;
    right: 42px;
  }

  .article-background {
    background-repeat: no-repeat;
    background-size: cover;
    padding-bottom: 53.5%;
    background-position: top;
  }

  .art-desc,
  .art-title {
    white-space: initial;
    overflow: hidden;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    display: -webkit-box;
  }

  .moi6 .card-footer {
    background-color: inherit;
    padding-bottom: unset;
    padding-left: unset;
    padding-right: unset;
    padding-top: 15px;
  }

  .px-6 {
    padding-left: 2vw !important;
    padding-right: 2vw !important;
  }

  .col-20 {
    width: 100%;
  }

  .col-80 {
    width: 100%;
  }

  .tab-collection .row-cols-5>* {
    flex: 0 0 auto;
    width: 50%;
  }

  .best_selling .owl-nav [class*="owl-"]:hover {
    background: var(--shop-color-button);
    color: #fff;
  }

  .best_selling .owl-prev.disabled:hover {
    background: #fff !important;
    color: #858380;
    cursor: no-drop;
  }

  .best_selling .icon-next,
  .best_selling .icon-prev {
    width: 30px;
    height: 30px;
    vertical-align: middle;
    display: inline-flex;
    align-items: center;
    justify-content: center;
  }

  .best_selling>.owl-nav>.owl-next,
  .best_selling>.owl-nav>.owl-prev {
    background-color: white;
    z-index: 3;
    border-radius: 50%;
    color: #858380;
    background: #fff;
    border: 1px solid var(--shop-color-border);
    box-shadow: 0 0.125rem 0.25rem rgb(0 0 0 / 8%);
    margin: 0px;
  }

  .best_selling>.owl-nav>.owl-next {
    position: absolute;
    top: -15%;
    right: 0;
  }

  .best_selling>.owl-nav>.owl-prev {
    position: absolute;
    top: -15%;
    right: 3vw;
  }

  .best_selling.owl-theme .owl-nav {
    margin-top: 0px !important;
  }

  @media (max-width: 768px) {
    .best_selling>.owl-nav>.owl-prev {
      position: absolute;
      top: -15%;
      right: 40px;
    }

    .button-add:hover {
      background-color: #d12442 !important;
      color: white;
      border-color: #d12442 !important;
    }
  }

  @media (min-width: 992px) {
    .button-add:hover {
      background-color: #d12442 !important;
      color: white;
      border-color: #d12442 !important;
    }
  }

  .nav-link.btn-tab-custom.active {
    color: white !important;
  }

  .moi1 .owl-nav [class*=owl-]:hover {
    color: #b68944;
    background-color: unset;
  }

  .moi1>.owl-nav>.owl-next {
    top: 50%;
    position: absolute;
    left: 5vw;
  }

  .moi1>.owl-nav>.owl-prev {
    top: 50%;
    position: absolute;
    right: 5vw;
  }

  @media (min-width: 768px) {
    .moi1>.owl-nav>.owl-next {
      top: 50%;
      position: absolute;
      left: -5vw;
    }

    .moi1>.owl-nav>.owl-prev {
      top: 50%;
      position: absolute;
      right: -5vw;
    }
  }


  @media (min-width: 768px) {
    .px-6 {
      padding-left: 5vw !important;
      padding-right: 5vw !important;
    }

    .nav-colection ul {
      justify-content: start !important;
    }

    .nav-colection .btn-tab-custom:nth-child(1) {
      margin-left: unset !important;
    }

    .tab-collection .row-cols-5>* {
      flex: 0 0 auto;
      width: 50%;
    }

    .btn-tab-custom {
      font-weight: 700;
      color: #787878;
      margin-left: 20px;
      border: 1px solid #eae4e8;
      border-radius: 20px;
    }

    .nav-colection ul {
      justify-content: start !important;
    }

    .nav-colection .btn-tab-custom:nth-child(1) {
      margin-left: unset !important;
    }

    .tab-collection .row-cols-5>* {
      flex: 0 0 auto;
      width: 50%;
    }
  }


  @media (min-width: 1400px) {
    .col-20 {
      width: 20%;
    }

    .col-80 {
      width: 80%;
    }

    .tab-collection .row-cols-5>* {
      flex: 0 0 auto;
      width: 20%;
    }
  }
</style>

<!-- banner -->
<div class="row px-6 pb-4 pb-xxl-0 bg_light_grey">
  <div class="moi1 owl-carousel owl-theme px-0">
    <div class="slider-item">
      <a href="#" title="Showroom Cung Trâm Gallery">
        <img class="rounded" src="public/demo/slide_1_img.webp"
          alt="Showroom Cung Trâm Gallery" width="100%">
      </a>
    </div>
  </div>
</div>
<!-- Category -->
<div class="row px-6 d-none d-xxl-flex pt-xxl-4 pb-5 bg_light_grey">
  <div class="col-xxl-3 col-md-6 col-6">
    <div class="category-block">
      <div>
        <a href="/collections/tram-huong-xong-dot/" aria-label="TRẦM HƯƠNG XÔNG ĐỐT">
          <img src="public/demo/tram_huong_xong_dot.webp" alt="TRẦM HƯƠNG XÔNG ĐỐT" width="100%" height="100%" />
        </a>
      </div>
      <div class="category-block--content">
        <h3 class="htitle">
          <a href="/collections/tram-huong-xong-dot/" class="color_main fs-5 fw-bold">TRẦM HƯƠNG XÔNG ĐỐT</a>
        </h3>
        <a class="color_main fs-6" href="/collections/tram-huong-xong-dot/" class="">Xem ngay</a>
      </div>
    </div>
  </div>
  <div class="col-xxl-3 col-md-6 col-6">
    <div class="category-block">
      <div>
        <a href="/collections/tram-huong-xong-dot/" aria-label="TRẦM HƯƠNG XÔNG ĐỐT">
          <img class="ls-is-cached lazyloaded"
            data-src="//theme.hstatic.net/200000583021/1000940868/14/categorybanner_1_img.jpg?v=860"
            src="public/demo/trang_suc_tram_huong.webp" alt="TRẦM HƯƠNG XÔNG ĐỐT" width="100%" height="100%" />
        </a>
      </div>
      <div class="category-block--content">
        <h3 class="htitle">
          <a href="/collections/tram-huong-xong-dot/" class="color_main fs-5 fw-bold">TRẦM HƯƠNG XÔNG ĐỐT</a>
        </h3>
        <a class="color_main fs-6" href="/collections/tram-huong-xong-dot/" class="">Xem ngay</a>
      </div>
    </div>
  </div>
  <div class="col-xxl-3 col-md-6 col-6">
    <div class="category-block">
      <div>
        <a href="/collections/tram-huong-xong-dot/" aria-label="TRẦM HƯƠNG XÔNG ĐỐT">
          <img class="ls-is-cached lazyloaded"
            data-src="//theme.hstatic.net/200000583021/1000940868/14/categorybanner_1_img.jpg?v=860"
            src="public/demo/dung_cu_tram_huong.webp" alt="TRẦM HƯƠNG XÔNG ĐỐT" width="100%" height="100%" />
        </a>
      </div>
      <div class="category-block--content">
        <h3 class="htitle">
          <a href="/collections/tram-huong-xong-dot/" class="color_main fs-5 fw-bold">TRẦM HƯƠNG XÔNG ĐỐT</a>
        </h3>
        <a class="color_main fs-6" href="/collections/tram-huong-xong-dot/">Xem ngay</a>
      </div>
    </div>
  </div>
  <div class="col-xxl-3 col-md-6 col-6">
    <div class="category-block">
      <div>
        <a href="/collections/tram-huong-xong-dot/" aria-label="TRẦM HƯƠNG XÔNG ĐỐT" class="">
          <img class="ls-is-cached lazyloaded"
            data-src="//theme.hstatic.net/200000583021/1000940868/14/categorybanner_1_img.jpg?v=860"
            src="public/demo/qua_tang_tram_huong.webp" alt="TRẦM HƯƠNG XÔNG ĐỐT" width="100%" height="100%" />
        </a>
      </div>
      <div class="category-block--content">
        <h3 class="htitle">
          <a href="/collections/tram-huong-xong-dot/" class="color_main fs-5 fw-bold">TRẦM HƯƠNG XÔNG ĐỐT</a>
        </h3>
        <a class="color_main fs-6" href="/collections/tram-huong-xong-dot/" class="">Xem ngay</a>
      </div>
    </div>
  </div>
</div>
<!-- Category Mobile -->
<div class="row pb-4 px-6 px-md-5 bg_light_grey d-xxl-none d-flex">
  <div class="category-mobile owl-carousel owl-theme">
    <div class="category-item">
      <div class="category-block">
        <div>
          <a href="/collections/tram-huong-xong-dot/" aria-label="TRẦM HƯƠNG XÔNG ĐỐT">
            <img class="ls-is-cached lazyloaded"
              data-src="//theme.hstatic.net/200000583021/1000940868/14/categorybanner_1_img.jpg?v=860"
              src="public/demo/tram_huong_xong_dot.webp" alt="TRẦM HƯƠNG XÔNG ĐỐT" width="100%" height="100%" />
          </a>
        </div>
        <div class="category-block--content">
          <h3 class="htitle">
            <a href="/collections/tram-huong-xong-dot/" class="color_main fs_14 fw-bold">TRẦM HƯƠNG XÔNG ĐỐT</a>
          </h3>
          <a class="color_main fs-6" href="/collections/tram-huong-xong-dot/" class="">Xem ngay</a>
        </div>
      </div>
    </div>
    <div class="category-item">
      <div class="category-block">
        <div>
          <a href="/collections/tram-huong-xong-dot/" aria-label="TRẦM HƯƠNG XÔNG ĐỐT">
            <img class="ls-is-cached lazyloaded"
              data-src="//theme.hstatic.net/200000583021/1000940868/14/categorybanner_1_img.jpg?v=860"
              src="public/demo/trang_suc_tram_huong.webp" alt="TRẦM HƯƠNG XÔNG ĐỐT" width="100%" height="100%" />
          </a>
        </div>
        <div class="category-block--content">
          <h3 class="htitle">
            <a href="/collections/tram-huong-xong-dot/" class="color_main fs_14 fw-bold">TRẦM HƯƠNG XÔNG ĐỐT</a>
          </h3>
          <a class="color_main fs-6" href="/collections/tram-huong-xong-dot/" class="">Xem ngay</a>
        </div>
      </div>
    </div>
    <div class="category-item">
      <div class="category-block">
        <div>
          <a href="/collections/tram-huong-xong-dot/" aria-label="TRẦM HƯƠNG XÔNG ĐỐT">
            <img class="ls-is-cached lazyloaded"
              data-src="//theme.hstatic.net/200000583021/1000940868/14/categorybanner_1_img.jpg?v=860"
              src="public/demo/dung_cu_tram_huong.webp" alt="TRẦM HƯƠNG XÔNG ĐỐT" width="100%" height="100%" />
          </a>
        </div>
        <div class="category-block--content">
          <h3 class="htitle">
            <a href="/collections/tram-huong-xong-dot/" class="color_main fs_14 fw-bold">TRẦM HƯƠNG XÔNG ĐỐT</a>
          </h3>
          <a class="color_main fs-6" href="/collections/tram-huong-xong-dot/">Xem ngay</a>
        </div>
      </div>
    </div>
    <div class="category-item">
      <div class="category-block">
        <div>
          <a href="/collections/tram-huong-xong-dot/" aria-label="TRẦM HƯƠNG XÔNG ĐỐT" class="">
            <img class="ls-is-cached lazyloaded"
              data-src="//theme.hstatic.net/200000583021/1000940868/14/categorybanner_1_img.jpg?v=860"
              src="public/demo/qua_tang_tram_huong.webp" alt="TRẦM HƯƠNG XÔNG ĐỐT" width="100%" height="100%" />
          </a>
        </div>
        <div class="category-block--content">
          <h3 class="htitle">
            <a href="/collections/tram-huong-xong-dot/" class="color_main fs_14 fw-bold">TRẦM HƯƠNG XÔNG ĐỐT</a>
          </h3>
          <a class="color_main fs-6" href="/collections/tram-huong-xong-dot/" class="">Xem ngay</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Product stand out -->
<div class="row px-6 pb-4 product_stand_out bg_light_grey">
  <div class="d-flex flex-wrap collection-bg py-3 rounded mx-0">
    <h4 class="mb-3 text-light">
      SẢN PHẨM NỔI BẬT
    </h4>
    <div class="product_stand_out_slider owl-carousel owl-theme">
      <div class="card p-1">
        <a class="position-relative" href="index.php?p=chitietsanpham">
          <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
          <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
            <span>-26%</span>
          </div>
        </a>
        <div class="card-body p-2 pt-3">
          <h3 class="card-title text-center">
            Thác khói đĩa tròn phật thủ liên hoa CTM1
          </h3>
          <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
            data-id="1043979047">
            <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
              title="gorgeous">
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
            </div>
            <span>(1 đánh giá)</span>
          </div>
          <p class="pro-prices text-center on-sale">
            <span class="price fs_14">668,000₫</span>
            <span class="price-del fs_13 text-decoration-line-through">900,000₫</span>
          </p>
          <!-- Btn add to card -->
          <div class="text-center pt-2">
            <a href="#" class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
              <span class="fs_14 px-3">Thêm vào giỏ</span>
              <div class="btnico" title="Thêm vào giỏ">
                <i class="bi bi-bag-plus text-white"></i>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="card p-1">
        <a class="position-relative" href="index.php?p=chitietsanpham">
          <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
          <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
            <span>-26%</span>
          </div>
        </a>
        <div class="card-body p-2 pt-3">
          <h3 class="card-title text-center">
            Thác khói đĩa tròn phật thủ liên hoa CTM1
          </h3>
          <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
            data-id="1043979047">
            <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
              title="gorgeous">
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
            </div>
            <span>(1 đánh giá)</span>
          </div>
          <p class="pro-prices text-center on-sale">
            <span class="price fs_14">668,000₫</span>
            <span class="price-del fs_13 text-decoration-line-through">900,000₫</span>
          </p>
          <!-- Btn add to card -->
          <div class="text-center pt-2">
            <a href="#" class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
              <span class="fs_14 px-3">Thêm vào giỏ</span>
              <div class="btnico" title="Thêm vào giỏ">
                <i class="bi bi-bag-plus text-white"></i>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="card p-1">
        <a class="position-relative" href="index.php?p=chitietsanpham">
          <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
          <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
            <span>-26%</span>
          </div>
        </a>
        <div class="card-body p-2 pt-3">
          <h3 class="card-title text-center">
            Thác khói đĩa tròn phật thủ liên hoa CTM1
          </h3>
          <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
            data-id="1043979047">
            <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
              title="gorgeous">
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
            </div>
            <span>(1 đánh giá)</span>
          </div>
          <p class="pro-prices text-center on-sale">
            <span class="price fs_14">668,000₫</span>
            <span class="price-del fs_13 text-decoration-line-through">900,000₫</span>
          </p>
          <!-- Btn add to card -->
          <div class="text-center pt-2">
            <a href="#" class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
              <span class="fs_14 px-3">Thêm vào giỏ</span>
              <div class="btnico" title="Thêm vào giỏ">
                <i class="bi bi-bag-plus text-white"></i>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="card p-1">
        <a class="position-relative" href="index.php?p=chitietsanpham">
          <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
          <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
            <span>-26%</span>
          </div>
        </a>
        <div class="card-body p-2 pt-3">
          <h3 class="card-title text-center">
            Thác khói đĩa tròn phật thủ liên hoa CTM1
          </h3>
          <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
            data-id="1043979047">
            <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
              title="gorgeous">
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
            </div>
            <span>(1 đánh giá)</span>
          </div>
          <p class="pro-prices text-center on-sale">
            <span class="price fs_14">668,000₫</span>
            <span class="price-del fs_13 text-decoration-line-through">900,000₫</span>
          </p>
          <!-- Btn add to card -->
          <div class="text-center pt-2">
            <a href="#" class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
              <span class="fs_14 px-3">Thêm vào giỏ</span>
              <div class="btnico" title="Thêm vào giỏ">
                <i class="bi bi-bag-plus text-white"></i>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="card p-1">
        <a class="position-relative" href="index.php?p=chitietsanpham">
          <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
          <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
            <span>-26%</span>
          </div>
        </a>
        <div class="card-body p-2 pt-3">
          <h3 class="card-title text-center">
            Thác khói đĩa tròn phật thủ liên hoa CTM1
          </h3>
          <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
            data-id="1043979047">
            <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
              title="gorgeous">
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
            </div>
            <span>(1 đánh giá)</span>
          </div>
          <p class="pro-prices text-center on-sale">
            <span class="price fs_14">668,000₫</span>
            <span class="price-del fs_13 text-decoration-line-through">900,000₫</span>
          </p>
          <!-- Btn add to card -->
          <div class="text-center pt-2">
            <a href="#" class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
              <span class="fs_14 px-3">Thêm vào giỏ</span>
              <div class="btnico" title="Thêm vào giỏ">
                <i class="bi bi-bag-plus text-white"></i>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="card p-1">
        <a class="position-relative" href="index.php?p=chitietsanpham">
          <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
          <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
            <span>-26%</span>
          </div>
        </a>
        <div class="card-body p-2 pt-3">
          <h3 class="card-title text-center">
            Thác khói đĩa tròn phật thủ liên hoa CTM1
          </h3>
          <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
            data-id="1043979047">
            <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
              title="gorgeous">
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
            </div>
            <span>(1 đánh giá)</span>
          </div>
          <p class="pro-prices text-center on-sale">
            <span class="price fs_14">668,000₫</span>
            <span class="price-del fs_13 text-decoration-line-through">900,000₫</span>
          </p>
          <!-- Btn add to card -->
          <div class="text-center pt-2">
            <a href="#" class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
              <span class="fs_14 px-3">Thêm vào giỏ</span>
              <div class="btnico" title="Thêm vào giỏ">
                <i class="bi bi-bag-plus text-white"></i>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="card p-1">
        <a class="position-relative" href="index.php?p=chitietsanpham">
          <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
          <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
            <span>-26%</span>
          </div>
        </a>
        <div class="card-body p-2 pt-3">
          <h3 class="card-title text-center">
            Thác khói đĩa tròn phật thủ liên hoa CTM1
          </h3>
          <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
            data-id="1043979047">
            <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
              title="gorgeous">
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
            </div>
            <span>(1 đánh giá)</span>
          </div>
          <p class="pro-prices text-center on-sale">
            <span class="price fs_14">668,000₫</span>
            <span class="price-del fs_13 text-decoration-line-through">900,000₫</span>
          </p>
          <!-- Btn add to card -->
          <div class="text-center pt-2">
            <a href="#" class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
              <span class="fs_14 px-3">Thêm vào giỏ</span>
              <div class="btnico" title="Thêm vào giỏ">
                <i class="bi bi-bag-plus text-white"></i>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Promotion for you -->
<div class="row px-6 bg_light_grey">
  <h5 class="fs-5 mb-2">Khuyến mãi dành cho bạn</h5>
</div>
<div class="row px-6 pb-5 bg_light_grey g-3">
  <div class="col-xxl-3 col-md-6 col-12">
    <div class="d-flex coupon-wrapper">
      <div class="col-4 coupon-left d-inline-flex align-items-center justify-content-center">
        <img src="public/demo/home_coupon_1_img.webp" class="img-fluid w-50 h-30" alt="coupon 1" />
      </div>
      <div class="col-8 p-2 coupon-right position-relative">
        <button type="button" class="border-0 position-absolute info-coupon" data-toggle="popover" data-container="body"
          data-placement="bottom" data-popover-content="#cp-tooltip-1" data-class="coupon-popover" title=""
          data-original-title="Miễn phí vận chuyển ">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" x="0" y="0" viewBox="0 0 512 512"
            style="enable-background: new 0 0 512 512" xml:space="preserve">
            <g>
              <g xmlns="http://www.w3.org/2000/svg">
                <g>
                  <path
                    d="M256,0C114.509,0,0,114.496,0,256c0,141.489,114.496,256,256,256c141.491,0,256-114.496,256-256    C512,114.511,397.504,0,256,0z M256,476.279c-121.462,0-220.279-98.816-220.279-220.279S134.538,35.721,256,35.721    S476.279,134.537,476.279,256S377.462,476.279,256,476.279z"
                    fill="#000000" data-original="#000000"></path>
                </g>
              </g>
              <g xmlns="http://www.w3.org/2000/svg">
                <g>
                  <path
                    d="M256.006,213.397c-15.164,0-25.947,6.404-25.947,15.839v128.386c0,8.088,10.783,16.174,25.947,16.174    c14.49,0,26.283-8.086,26.283-16.174V229.234C282.289,219.8,270.496,213.397,256.006,213.397z"
                    fill="#000000" data-original="#000000"></path>
                </g>
              </g>
              <g xmlns="http://www.w3.org/2000/svg">
                <g>
                  <path
                    d="M256.006,134.208c-15.501,0-27.631,11.12-27.631,23.925c0,12.806,12.131,24.263,27.631,24.263    c15.164,0,27.296-11.457,27.296-24.263C283.302,145.328,271.169,134.208,256.006,134.208z"
                    fill="#000000" data-original="#000000"></path>
                </g>
              </g>
              <g xmlns="http://www.w3.org/2000/svg"></g>
              <g xmlns="http://www.w3.org/2000/svg"></g>
              <g xmlns="http://www.w3.org/2000/svg"></g>
              <g xmlns="http://www.w3.org/2000/svg"></g>
              <g xmlns="http://www.w3.org/2000/svg"></g>
              <g xmlns="http://www.w3.org/2000/svg"></g>
              <g xmlns="http://www.w3.org/2000/svg"></g>
              <g xmlns="http://www.w3.org/2000/svg"></g>
              <g xmlns="http://www.w3.org/2000/svg"></g>
              <g xmlns="http://www.w3.org/2000/svg"></g>
              <g xmlns="http://www.w3.org/2000/svg"></g>
              <g xmlns="http://www.w3.org/2000/svg"></g>
              <g xmlns="http://www.w3.org/2000/svg"></g>
              <g xmlns="http://www.w3.org/2000/svg"></g>
              <g xmlns="http://www.w3.org/2000/svg"></g>
            </g>
          </svg>
        </button>
        <div class="cp-top pb-4">
          <h6 class="fs_14 mb-0">Miễn phí vận chuyển</h6>
          <p class="fs_12">Đơn hàng từ 1.000k</p>
        </div>
        <div class="cp-bottom pt-1">
          <div class="d-flex align-items-center justify-content-between">
            <div>
              <p class="fs_10">
                Mã: <span class="fw-bold">CT1MFREESHIP</span>
              </p>
              <p class="fs_10">HSD:</p>
            </div>
            <div class="cp-bottom-btn">
              <button class="btn-have-animation rounded-pill btn-coupon" data-coupon="CT1MFREESHIP">
                Sao chép mã
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xxl-3 col-md-6 col-12">
    <div class="d-flex coupon-wrapper">
      <div class="col-4 coupon-left d-inline-flex align-items-center justify-content-center">
        <img src="public/demo/home_coupon_1_img.webp" class="img-fluid w-50 h-30" alt="coupon 1" />
      </div>
      <div class="col-8 p-2 coupon-right position-relative">
        <button type="button" class="border-0 position-absolute info-coupon" data-toggle="popover" data-container="body"
          data-placement="bottom" data-popover-content="#cp-tooltip-1" data-class="coupon-popover" title=""
          data-original-title="Miễn phí vận chuyển ">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" x="0" y="0" viewBox="0 0 512 512"
            style="enable-background: new 0 0 512 512" xml:space="preserve">
            <g>
              <g xmlns="http://www.w3.org/2000/svg">
                <g>
                  <path
                    d="M256,0C114.509,0,0,114.496,0,256c0,141.489,114.496,256,256,256c141.491,0,256-114.496,256-256    C512,114.511,397.504,0,256,0z M256,476.279c-121.462,0-220.279-98.816-220.279-220.279S134.538,35.721,256,35.721    S476.279,134.537,476.279,256S377.462,476.279,256,476.279z"
                    fill="#000000" data-original="#000000"></path>
                </g>
              </g>
              <g xmlns="http://www.w3.org/2000/svg">
                <g>
                  <path
                    d="M256.006,213.397c-15.164,0-25.947,6.404-25.947,15.839v128.386c0,8.088,10.783,16.174,25.947,16.174    c14.49,0,26.283-8.086,26.283-16.174V229.234C282.289,219.8,270.496,213.397,256.006,213.397z"
                    fill="#000000" data-original="#000000"></path>
                </g>
              </g>
              <g xmlns="http://www.w3.org/2000/svg">
                <g>
                  <path
                    d="M256.006,134.208c-15.501,0-27.631,11.12-27.631,23.925c0,12.806,12.131,24.263,27.631,24.263    c15.164,0,27.296-11.457,27.296-24.263C283.302,145.328,271.169,134.208,256.006,134.208z"
                    fill="#000000" data-original="#000000"></path>
                </g>
              </g>
              <g xmlns="http://www.w3.org/2000/svg"></g>
              <g xmlns="http://www.w3.org/2000/svg"></g>
              <g xmlns="http://www.w3.org/2000/svg"></g>
              <g xmlns="http://www.w3.org/2000/svg"></g>
              <g xmlns="http://www.w3.org/2000/svg"></g>
              <g xmlns="http://www.w3.org/2000/svg"></g>
              <g xmlns="http://www.w3.org/2000/svg"></g>
              <g xmlns="http://www.w3.org/2000/svg"></g>
              <g xmlns="http://www.w3.org/2000/svg"></g>
              <g xmlns="http://www.w3.org/2000/svg"></g>
              <g xmlns="http://www.w3.org/2000/svg"></g>
              <g xmlns="http://www.w3.org/2000/svg"></g>
              <g xmlns="http://www.w3.org/2000/svg"></g>
              <g xmlns="http://www.w3.org/2000/svg"></g>
              <g xmlns="http://www.w3.org/2000/svg"></g>
            </g>
          </svg>
        </button>
        <div class="cp-top pb-4">
          <h6 class="fs_14 mb-0">Miễn phí vận chuyển</h6>
          <p class="fs_12">Đơn hàng từ 1.000k</p>
        </div>
        <div class="cp-bottom pt-1">
          <div class="d-flex align-items-center justify-content-between">
            <div>
              <p class="fs_10">
                Mã: <span class="fw-bold">CT1MFREESHIP</span>
              </p>
              <p class="fs_10">HSD:</p>
            </div>
            <div class="cp-bottom-btn">
              <button class="btn-have-animation rounded-pill btn-coupon" data-coupon="CT1MFREESHIP">
                Sao chép mã
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xxl-3 col-md-6 col-12">
    <div class="d-flex coupon-wrapper">
      <div class="col-4 coupon-left d-inline-flex align-items-center justify-content-center">
        <img src="public/demo/home_coupon_1_img.webp" class="img-fluid w-50 h-30" alt="coupon 1" />
      </div>
      <div class="col-8 p-2 coupon-right position-relative">
        <button type="button" class="border-0 position-absolute info-coupon" data-toggle="popover" data-container="body"
          data-placement="bottom" data-popover-content="#cp-tooltip-1" data-class="coupon-popover" title=""
          data-original-title="Miễn phí vận chuyển ">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" x="0" y="0" viewBox="0 0 512 512"
            style="enable-background: new 0 0 512 512" xml:space="preserve">
            <g>
              <g xmlns="http://www.w3.org/2000/svg">
                <g>
                  <path
                    d="M256,0C114.509,0,0,114.496,0,256c0,141.489,114.496,256,256,256c141.491,0,256-114.496,256-256    C512,114.511,397.504,0,256,0z M256,476.279c-121.462,0-220.279-98.816-220.279-220.279S134.538,35.721,256,35.721    S476.279,134.537,476.279,256S377.462,476.279,256,476.279z"
                    fill="#000000" data-original="#000000"></path>
                </g>
              </g>
              <g xmlns="http://www.w3.org/2000/svg">
                <g>
                  <path
                    d="M256.006,213.397c-15.164,0-25.947,6.404-25.947,15.839v128.386c0,8.088,10.783,16.174,25.947,16.174    c14.49,0,26.283-8.086,26.283-16.174V229.234C282.289,219.8,270.496,213.397,256.006,213.397z"
                    fill="#000000" data-original="#000000"></path>
                </g>
              </g>
              <g xmlns="http://www.w3.org/2000/svg">
                <g>
                  <path
                    d="M256.006,134.208c-15.501,0-27.631,11.12-27.631,23.925c0,12.806,12.131,24.263,27.631,24.263    c15.164,0,27.296-11.457,27.296-24.263C283.302,145.328,271.169,134.208,256.006,134.208z"
                    fill="#000000" data-original="#000000"></path>
                </g>
              </g>
              <g xmlns="http://www.w3.org/2000/svg"></g>
              <g xmlns="http://www.w3.org/2000/svg"></g>
              <g xmlns="http://www.w3.org/2000/svg"></g>
              <g xmlns="http://www.w3.org/2000/svg"></g>
              <g xmlns="http://www.w3.org/2000/svg"></g>
              <g xmlns="http://www.w3.org/2000/svg"></g>
              <g xmlns="http://www.w3.org/2000/svg"></g>
              <g xmlns="http://www.w3.org/2000/svg"></g>
              <g xmlns="http://www.w3.org/2000/svg"></g>
              <g xmlns="http://www.w3.org/2000/svg"></g>
              <g xmlns="http://www.w3.org/2000/svg"></g>
              <g xmlns="http://www.w3.org/2000/svg"></g>
              <g xmlns="http://www.w3.org/2000/svg"></g>
              <g xmlns="http://www.w3.org/2000/svg"></g>
              <g xmlns="http://www.w3.org/2000/svg"></g>
            </g>
          </svg>
        </button>
        <div class="cp-top pb-4">
          <h6 class="fs_14 mb-0">Miễn phí vận chuyển</h6>
          <p class="fs_12">Đơn hàng từ 1.000k</p>
        </div>
        <div class="cp-bottom pt-1">
          <div class="d-flex align-items-center justify-content-between">
            <div>
              <p class="fs_10">
                Mã: <span class="fw-bold">CT1MFREESHIP</span>
              </p>
              <p class="fs_10">HSD:</p>
            </div>
            <div class="cp-bottom-btn">
              <button class="btn-have-animation rounded-pill btn-coupon" data-coupon="CT1MFREESHIP">
                Sao chép mã
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Top best selling products -->
<div class="row px-6 bg_light_grey">
  <h4 class="pb-2 ps-0">TOP SẢN PHẨM BÁN CHẠY</h4>
  <div class="px-md-0">
    <div class="best_selling owl-carousel owl-theme">
      <div class="card p-1">
        <a class="position-relative" href="index.php?p=chitietsanpham">
          <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
          <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
            <span>-26%</span>
          </div>
        </a>
        <div class="card-body p-2 pt-3">
          <h3 class="card-title text-center">
            Thác khói đĩa tròn phật thủ liên hoa CTM1
          </h3>
          <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
            data-id="1043979047">
            <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
              title="gorgeous">
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
            </div>
            <span>(1 đánh giá)</span>
          </div>
          <p class="pro-prices text-center on-sale">
            <span class="price fs_14">668,000₫</span>
            <span class="price-del fs_13 text-decoration-line-through">900,000₫</span>
          </p>
          <!-- Btn add to card -->
          <div class="text-center pt-2">
            <a href="#" class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
              <span class="fs_14 px-3">Thêm vào giỏ</span>
              <div class="btnico" title="Thêm vào giỏ">
                <i class="bi bi-bag-plus text-white"></i>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="card p-1">
        <a class="position-relative" href="index.php?p=chitietsanpham">
          <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
          <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
            <span>-26%</span>
          </div>
        </a>
        <div class="card-body p-2 pt-3">
          <h3 class="card-title text-center">
            Thác khói đĩa tròn phật thủ liên hoa CTM1
          </h3>
          <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
            data-id="1043979047">
            <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
              title="gorgeous">
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
            </div>
            <span>(1 đánh giá)</span>
          </div>
          <p class="pro-prices text-center on-sale">
            <span class="price fs_14">668,000₫</span>
            <span class="price-del fs_13 text-decoration-line-through">900,000₫</span>
          </p>
          <!-- Btn add to card -->
          <div class="text-center pt-2">
            <a href="#" class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
              <span class="fs_14 px-3">Thêm vào giỏ</span>
              <div class="btnico" title="Thêm vào giỏ">
                <i class="bi bi-bag-plus text-white"></i>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="card p-1">
        <a class="position-relative" href="index.php?p=chitietsanpham">
          <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
          <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
            <span>-26%</span>
          </div>
        </a>
        <div class="card-body p-2 pt-3">
          <h3 class="card-title text-center">
            Thác khói đĩa tròn phật thủ liên hoa CTM1
          </h3>
          <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
            data-id="1043979047">
            <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
              title="gorgeous">
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
            </div>
            <span>(1 đánh giá)</span>
          </div>
          <p class="pro-prices text-center on-sale">
            <span class="price fs_14">668,000₫</span>
            <span class="price-del fs_13 text-decoration-line-through">900,000₫</span>
          </p>
          <!-- Btn add to card -->
          <div class="text-center pt-2">
            <a href="#" class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
              <span class="fs_14 px-3">Thêm vào giỏ</span>
              <div class="btnico" title="Thêm vào giỏ">
                <i class="bi bi-bag-plus text-white"></i>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="card p-1">
        <a class="position-relative" href="index.php?p=chitietsanpham">
          <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
          <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
            <span>-26%</span>
          </div>
        </a>
        <div class="card-body p-2 pt-3">
          <h3 class="card-title text-center">
            Thác khói đĩa tròn phật thủ liên hoa CTM1
          </h3>
          <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
            data-id="1043979047">
            <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
              title="gorgeous">
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
            </div>
            <span>(1 đánh giá)</span>
          </div>
          <p class="pro-prices text-center on-sale">
            <span class="price fs_14">668,000₫</span>
            <span class="price-del fs_13 text-decoration-line-through">900,000₫</span>
          </p>
          <!-- Btn add to card -->
          <div class="text-center pt-2">
            <a href="#" class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
              <span class="fs_14 px-3">Thêm vào giỏ</span>
              <div class="btnico" title="Thêm vào giỏ">
                <i class="bi bi-bag-plus text-white"></i>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="card p-1">
        <a class="position-relative" href="index.php?p=chitietsanpham">
          <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
          <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
            <span>-26%</span>
          </div>
        </a>
        <div class="card-body p-2 pt-3">
          <h3 class="card-title text-center">
            Thác khói đĩa tròn phật thủ liên hoa CTM1
          </h3>
          <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
            data-id="1043979047">
            <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
              title="gorgeous">
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
            </div>
            <span>(1 đánh giá)</span>
          </div>
          <p class="pro-prices text-center on-sale">
            <span class="price fs_14">668,000₫</span>
            <span class="price-del fs_13 text-decoration-line-through">900,000₫</span>
          </p>
          <!-- Btn add to card -->
          <div class="text-center pt-2">
            <a href="#" class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
              <span class="fs_14 px-3">Thêm vào giỏ</span>
              <div class="btnico" title="Thêm vào giỏ">
                <i class="bi bi-bag-plus text-white"></i>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="card p-1">
        <a class="position-relative" href="index.php?p=chitietsanpham">
          <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
          <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
            <span>-26%</span>
          </div>
        </a>
        <div class="card-body p-2 pt-3">
          <h3 class="card-title text-center">
            Thác khói đĩa tròn phật thủ liên hoa CTM1
          </h3>
          <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
            data-id="1043979047">
            <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
              title="gorgeous">
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
            </div>
            <span>(1 đánh giá)</span>
          </div>
          <p class="pro-prices text-center on-sale">
            <span class="price fs_14">668,000₫</span>
            <span class="price-del fs_13 text-decoration-line-through">900,000₫</span>
          </p>
          <!-- Btn add to card -->
          <div class="text-center pt-2">
            <a href="#" class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
              <span class="fs_14 px-3">Thêm vào giỏ</span>
              <div class="btnico" title="Thêm vào giỏ">
                <i class="bi bi-bag-plus text-white"></i>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="card p-1">
        <a class="position-relative" href="index.php?p=chitietsanpham">
          <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
          <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
            <span>-26%</span>
          </div>
        </a>
        <div class="card-body p-2 pt-3">
          <h3 class="card-title text-center">
            Thác khói đĩa tròn phật thủ liên hoa CTM1
          </h3>
          <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
            data-id="1043979047">
            <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
              title="gorgeous">
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
              <i class="bi bi-star-fill star_icon star-filled"></i>
            </div>
            <span>(1 đánh giá)</span>
          </div>
          <p class="pro-prices text-center on-sale">
            <span class="price fs_14">668,000₫</span>
            <span class="price-del fs_13 text-decoration-line-through">900,000₫</span>
          </p>
          <!-- Btn add to card -->
          <div class="text-center pt-2">
            <a href="#" class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
              <span class="fs_14 px-3">Thêm vào giỏ</span>
              <div class="btnico" title="Thêm vào giỏ">
                <i class="bi bi-bag-plus text-white"></i>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Made by -->
<div class="row px-6 py-5 d-none d-xxl-block bg_light_grey">
  <div class="d-md-flex made-by-wrap rounded align-items-center">
    <div class="d-none d-md-block col-md-2 col-xxl-2 col-12">
      <div class="wrapbox--content text-end me-3">
        <h5>Made by Thiện Tâm</h5>
        <a href="/collections/all" class="btn-have-animation rounded-pill btn-see-more text-white px-3 py-1">Xem thêm
          &gt;&gt;</a>
      </div>
    </div>
    <div class="col-md-10 col-xxl-10 col-12">
      <div class="row gx-5 d-flex align-items-center py-3 pe-2">
        <div class="col-xl text-center">
          <div class="item-img-wrapper bg-white rounded-circle overflow-hidden">
            <a href="">
              <img class="w-100 h-100 item-cate-img" src="public/demo/categorize_1_img.webp" alt="" />
            </a>
          </div>
          <div class="pt-2">
            <a href="/collections/huong-nhang-tram-huong">Hương trầm</a>
          </div>
        </div>
        <div class="col-xl text-center">
          <div class="item-img-wrapper bg-white rounded-circle overflow-hidden">
            <a href="">
              <img class="w-100 h-100 item-cate-img" src="public/demo/categorize_2_img.webp" alt="" />
            </a>
          </div>
          <div class="pt-2">
            <a href="/collections/huong-nhang-tram-huong">Hương trầm</a>
          </div>
        </div>
        <div class="col-xl text-center">
          <div class="item-img-wrapper bg-white rounded-circle overflow-hidden">
            <a href="">
              <img class="w-100 h-100 item-cate-img" src="public/demo/categorize_3_img.webp" alt="" />
            </a>
          </div>
          <div class="pt-2">
            <a href="/collections/huong-nhang-tram-huong">Hương trầm</a>
          </div>
        </div>
        <div class="col-xl text-center">
          <div class="item-img-wrapper bg-white rounded-circle overflow-hidden">
            <a href="">
              <img class="w-100 h-100 item-cate-img" src="public/demo/categorize_4_img.webp" alt="" />
            </a>
          </div>
          <div class="pt-2">
            <a href="/collections/huong-nhang-tram-huong">Hương trầm</a>
          </div>
        </div>
        <div class="col-xl text-center">
          <div class="item-img-wrapper bg-white rounded-circle overflow-hidden">
            <a href="">
              <img class="w-100 h-100 item-cate-img" src="public/demo/categorize_5_img.webp" alt="" />
            </a>
          </div>
          <div class="pt-2">
            <a href="/collections/huong-nhang-tram-huong">Hương trầm</a>
          </div>
        </div>
        <div class="col-xl text-center">
          <div class="item-img-wrapper bg-white rounded-circle overflow-hidden">
            <a href="">
              <img class="w-100 h-100 item-cate-img" src="public/demo/categorize_6_img.webp" alt="" />
            </a>
          </div>
          <div class="pt-2">
            <a href="/collections/huong-nhang-tram-huong">Hương trầm</a>
          </div>
        </div>
        <div class="col-xl text-center">
          <div class="item-img-wrapper bg-white rounded-circle overflow-hidden">
            <a href="">
              <img class="w-100 h-100 item-cate-img" src="public/demo/categorize_7_img.webp" alt="" />
            </a>
          </div>
          <div class="pt-2">
            <a href="/collections/huong-nhang-tram-huong">Hương trầm</a>
          </div>
        </div>
        <div class="col-xl text-center">
          <div class="item-img-wrapper bg-white rounded-circle overflow-hidden">
            <a href="">
              <img class="w-100 h-100 item-cate-img" src="public/demo/categorize_8_img.webp" alt="" />
            </a>
          </div>
          <div class="pt-2">
            <a href="/collections/huong-nhang-tram-huong">Hương trầm</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- made by Mobile -->
<div class="row px-6 px-0 bg_light_grey rounded d-lg-none d-block pt-5">
  <div class="made-by-mobile made-by-wrap owl-carousel owl-theme">
    <div class="text-center p-4">
      <div class="item-img-wrapper bg-white rounded-circle overflow-hidden">
        <a href="">
          <img class="w-100 h-100 item-cate-img" src="public/demo/categorize_1_img.webp" alt="" />
        </a>
      </div>
      <div class="pt-2">
        <a class="fs-5" href="/collections/huong-nhang-tram-huong">Hương trầm</a>
      </div>
    </div>
    <div class="text-center p-4">
      <div class="item-img-wrapper bg-white rounded-circle overflow-hidden">
        <a href="">
          <img class="w-100 h-100 item-cate-img" src="public/demo/categorize_1_img.webp" alt="" />
        </a>
      </div>
      <div class="pt-2">
        <a class="fs-5" href="/collections/huong-nhang-tram-huong">Hương trầm</a>
      </div>
    </div>
    <div class="text-center p-4">
      <div class="item-img-wrapper bg-white rounded-circle overflow-hidden">
        <a href="">
          <img class="w-100 h-100 item-cate-img" src="public/demo/categorize_1_img.webp" alt="" />
        </a>
      </div>
      <div class="pt-2">
        <a class="fs-5" href="/collections/huong-nhang-tram-huong">Hương trầm</a>
      </div>
    </div>
    <div class="text-center p-4">
      <div class="item-img-wrapper bg-white rounded-circle overflow-hidden">
        <a href="">
          <img class="w-100 h-100 item-cate-img" src="public/demo/categorize_1_img.webp" alt="" />
        </a>
      </div>
      <div class="pt-2">
        <a class="fs-5" href="/collections/huong-nhang-tram-huong">Hương trầm</a>
      </div>
    </div>
    <div class="text-center p-4">
      <div class="item-img-wrapper bg-white rounded-circle overflow-hidden">
        <a href="">
          <img class="w-100 h-100 item-cate-img" src="public/demo/categorize_1_img.webp" alt="" />
        </a>
      </div>
      <div class="pt-2">
        <a class="fs-5" href="/collections/huong-nhang-tram-huong">Hương trầm</a>
      </div>
    </div>
    <div class="text-center p-4">
      <div class="item-img-wrapper bg-white rounded-circle overflow-hidden">
        <a href="">
          <img class="w-100 h-100 item-cate-img" src="public/demo/categorize_1_img.webp" alt="" />
        </a>
      </div>
      <div class="pt-2">
        <a class="fs-5" href="/collections/huong-nhang-tram-huong">Hương trầm</a>
      </div>
    </div>
  </div>
</div>
<!-- BỘ SƯU TẬP TRẦM -->
<div class="row px-6 py-4 bg_light_grey">
  <div class="d-flex flex-wrap justify-content-between">
    <div class="col-xxl-4 col-12">
      <h4 class="pb-2 pb-lg-0 mb-0">BỘ SƯU TẬP TRẦM HƯƠNG</h4>
    </div>
    <div class="col nav-colection">
      <ul class="nav mb-3" id="pills-tab" role="tablist">
        <li class="nav-item mb-2" role="presentation">
          <a class="nav-link btn-tab-custom active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#tab-1"
            type="button" role="tab" aria-controls="pills-home" aria-selected="true">Vòng Trầm Hương
          </a>
        </li>
        <li class="nav-item mb-2" role="presentation">
          <a class="nav-link btn-tab-custom" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#tab-2"
            type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Hương Trầm Xông Đốt
          </a>
        </li>
        <li class="nav-item mb-2" role="presentation">
          <a class="nav-link btn-tab-custom" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#tab-3"
            type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
            Quà Tặng Trầm Hương
          </a>
        </li>
        <li class="nav-item mb-2" role="presentation">
          <a class="nav-link btn-tab-custom" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#tab-4"
            type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
            Thác Khói Xông Trầm
          </a>
        </li>
      </ul>
    </div>
  </div>
  <div class="tab-content tab-collection" id="pills-tabContent">
    <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
      <div class="row">
        <div class="col-20 px-0 d-xxl-flex d-none flex-column justify-content-center"
          style="background: var(--home-collection2-bg)">
          <img src="public/demo/home_coll_1_banner.webp" class="img-fluid" alt="" />
        </div>
        <div class="col-80">
          <div class="row row-cols-5 g-2">
            <div class="col">
              <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                  <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                  <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                    <span>-26%</span>
                  </div>
                </a>
                <div class="card-body p-2 pt-3">
                  <h3 class="card-title text-center">
                    Thác khói đĩa tròn phật thủ liên hoa CTM1
                  </h3>
                  <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
                    data-id="1043979047">
                    <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
                      title="gorgeous">
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                    </div>
                    <span>(1 đánh giá)</span>
                  </div>
                  <p class="pro-prices text-center on-sale">
                    <span class="price fs_14">668,000₫</span>
                    <span class="price-del fs_13 text-decoration-line-through">900,000₫</span>
                  </p>
                  <!-- Btn add to card -->
                  <div class="text-center pt-2">
                    <a href="#" class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
                      <span class="fs_14 px-3">Thêm vào giỏ</span>
                      <div class="btnico" title="Thêm vào giỏ">
                        <i class="bi bi-bag-plus text-white"></i>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                  <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                  <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                    <span>-26%</span>
                  </div>
                </a>
                <div class="card-body p-2 pt-3">
                  <h3 class="card-title text-center">
                    Thác khói đĩa tròn phật thủ liên hoa CTM1
                  </h3>
                  <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
                    data-id="1043979047">
                    <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
                      title="gorgeous">
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                    </div>
                    <span>(1 đánh giá)</span>
                  </div>
                  <p class="pro-prices text-center on-sale">
                    <span class="price fs_14">668,000₫</span>
                    <span class="price-del fs_13 text-decoration-line-through">900,000₫</span>
                  </p>
                  <!-- Btn add to card -->
                  <div class="text-center pt-2">
                    <a href="#" class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
                      <span class="fs_14 px-3">Thêm vào giỏ</span>
                      <div class="btnico" title="Thêm vào giỏ">
                        <i class="bi bi-bag-plus text-white"></i>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                  <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                  <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                    <span>-26%</span>
                  </div>
                </a>
                <div class="card-body p-2 pt-3">
                  <h3 class="card-title text-center">
                    Thác khói đĩa tròn phật thủ liên hoa CTM1
                  </h3>
                  <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
                    data-id="1043979047">
                    <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
                      title="gorgeous">
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                    </div>
                    <span>(1 đánh giá)</span>
                  </div>
                  <p class="pro-prices text-center on-sale">
                    <span class="price fs_14">668,000₫</span>
                    <span class="price-del fs_13 text-decoration-line-through">900,000₫</span>
                  </p>
                  <!-- Btn add to card -->
                  <div class="text-center pt-2">
                    <a href="#" class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
                      <span class="fs_14 px-3">Thêm vào giỏ</span>
                      <div class="btnico" title="Thêm vào giỏ">
                        <i class="bi bi-bag-plus text-white"></i>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                  <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                  <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                    <span>-26%</span>
                  </div>
                </a>
                <div class="card-body p-2 pt-3">
                  <h3 class="card-title text-center">
                    Thác khói đĩa tròn phật thủ liên hoa CTM1
                  </h3>
                  <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
                    data-id="1043979047">
                    <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
                      title="gorgeous">
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                    </div>
                    <span>(1 đánh giá)</span>
                  </div>
                  <p class="pro-prices text-center on-sale">
                    <span class="price fs_14">668,000₫</span>
                    <span class="price-del fs_13 text-decoration-line-through">900,000₫</span>
                  </p>
                  <!-- Btn add to card -->
                  <div class="text-center pt-2">
                    <a href="#" class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
                      <span class="fs_14 px-3">Thêm vào giỏ</span>
                      <div class="btnico" title="Thêm vào giỏ">
                        <i class="bi bi-bag-plus text-white"></i>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                  <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                  <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                    <span>-26%</span>
                  </div>
                </a>
                <div class="card-body p-2 pt-3">
                  <h3 class="card-title text-center">
                    Thác khói đĩa tròn phật thủ liên hoa CTM1
                  </h3>
                  <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
                    data-id="1043979047">
                    <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
                      title="gorgeous">
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                    </div>
                    <span>(1 đánh giá)</span>
                  </div>
                  <p class="pro-prices text-center on-sale">
                    <span class="price fs_14">668,000₫</span>
                    <span class="price-del fs_13 text-decoration-line-through">900,000₫</span>
                  </p>
                  <!-- Btn add to card -->
                  <div class="text-center pt-2">
                    <a href="#" class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
                      <span class="fs_14 px-3">Thêm vào giỏ</span>
                      <div class="btnico" title="Thêm vào giỏ">
                        <i class="bi bi-bag-plus text-white"></i>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                  <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                  <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                    <span>-26%</span>
                  </div>
                </a>
                <div class="card-body p-2 pt-3">
                  <h3 class="card-title text-center">
                    Thác khói đĩa tròn phật thủ liên hoa CTM1
                  </h3>
                  <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
                    data-id="1043979047">
                    <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
                      title="gorgeous">
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                    </div>
                    <span>(1 đánh giá)</span>
                  </div>
                  <p class="pro-prices text-center on-sale">
                    <span class="price fs_14">668,000₫</span>
                    <span class="price-del fs_13 text-decoration-line-through">900,000₫</span>
                  </p>
                  <!-- Btn add to card -->
                  <div class="text-center pt-2">
                    <a href="#" class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
                      <span class="fs_14 px-3">Thêm vào giỏ</span>
                      <div class="btnico" title="Thêm vào giỏ">
                        <i class="bi bi-bag-plus text-white"></i>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                  <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                  <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                    <span>-26%</span>
                  </div>
                </a>
                <div class="card-body p-2 pt-3">
                  <h3 class="card-title text-center">
                    Thác khói đĩa tròn phật thủ liên hoa CTM1
                  </h3>
                  <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
                    data-id="1043979047">
                    <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
                      title="gorgeous">
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                    </div>
                    <span>(1 đánh giá)</span>
                  </div>
                  <p class="pro-prices text-center on-sale">
                    <span class="price fs_14">668,000₫</span>
                    <span class="price-del fs_13 text-decoration-line-through">900,000₫</span>
                  </p>
                  <!-- Btn add to card -->
                  <div class="text-center pt-2">
                    <a href="#" class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
                      <span class="fs_14 px-3">Thêm vào giỏ</span>
                      <div class="btnico" title="Thêm vào giỏ">
                        <i class="bi bi-bag-plus text-white"></i>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                  <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                  <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                    <span>-26%</span>
                  </div>
                </a>
                <div class="card-body p-2 pt-3">
                  <h3 class="card-title text-center">
                    Thác khói đĩa tròn phật thủ liên hoa CTM1
                  </h3>
                  <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
                    data-id="1043979047">
                    <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
                      title="gorgeous">
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                    </div>
                    <span>(1 đánh giá)</span>
                  </div>
                  <p class="pro-prices text-center on-sale">
                    <span class="price fs_14">668,000₫</span>
                    <span class="price-del fs_13 text-decoration-line-through">900,000₫</span>
                  </p>
                  <!-- Btn add to card -->
                  <div class="text-center pt-2">
                    <a href="#" class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
                      <span class="fs_14 px-3">Thêm vào giỏ</span>
                      <div class="btnico" title="Thêm vào giỏ">
                        <i class="bi bi-bag-plus text-white"></i>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                  <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                  <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                    <span>-26%</span>
                  </div>
                </a>
                <div class="card-body p-2 pt-3">
                  <h3 class="card-title text-center">
                    Thác khói đĩa tròn phật thủ liên hoa CTM1
                  </h3>
                  <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
                    data-id="1043979047">
                    <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
                      title="gorgeous">
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                    </div>
                    <span>(1 đánh giá)</span>
                  </div>
                  <p class="pro-prices text-center on-sale">
                    <span class="price fs_14">668,000₫</span>
                    <span class="price-del fs_13 text-decoration-line-through">900,000₫</span>
                  </p>
                  <!-- Btn add to card -->
                  <div class="text-center pt-2">
                    <a href="#" class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
                      <span class="fs_14 px-3">Thêm vào giỏ</span>
                      <div class="btnico" title="Thêm vào giỏ">
                        <i class="bi bi-bag-plus text-white"></i>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                  <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                  <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                    <span>-26%</span>
                  </div>
                </a>
                <div class="card-body p-2 pt-3">
                  <h3 class="card-title text-center">
                    Thác khói đĩa tròn phật thủ liên hoa CTM1
                  </h3>
                  <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
                    data-id="1043979047">
                    <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
                      title="gorgeous">
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                    </div>
                    <span>(1 đánh giá)</span>
                  </div>
                  <p class="pro-prices text-center on-sale">
                    <span class="price fs_14">668,000₫</span>
                    <span class="price-del fs_13 text-decoration-line-through">900,000₫</span>
                  </p>
                  <!-- Btn add to card -->
                  <div class="text-center pt-2">
                    <a href="#" class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
                      <span class="fs_14 px-3">Thêm vào giỏ</span>
                      <div class="btnico" title="Thêm vào giỏ">
                        <i class="bi bi-bag-plus text-white"></i>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
      <div class="row">
        <div class="col-20 px-0 d-none d-lg-flex flex-column justify-content-center"
          style="background: var(--home-collection2-bg)">
          <img src="public/demo/home_coll_1_banner.webp" class="img-fluid" alt="" />
        </div>
        <div class="col-80">
          <div class="row row-cols-5 g-2">
            <div class="col">
              <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                  <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                  <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                    <span>-26%</span>
                  </div>
                </a>
                <div class="card-body p-2 pt-3">
                  <h3 class="card-title text-center">
                    Thác khói đĩa tròn phật thủ liên hoa CTM1
                  </h3>
                  <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
                    data-id="1043979047">
                    <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
                      title="gorgeous">
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                    </div>
                    <span>(1 đánh giá)</span>
                  </div>
                  <p class="pro-prices text-center on-sale">
                    <span class="price fs_14">668,000₫</span>
                    <span class="price-del fs_13 text-decoration-line-through">900,000₫</span>
                  </p>
                  <!-- Btn add to card -->
                  <div class="text-center pt-2">
                    <a href="#" class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
                      <span class="fs_14 px-3">Thêm vào giỏ</span>
                      <div class="btnico" title="Thêm vào giỏ">
                        <i class="bi bi-bag-plus text-white"></i>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                  <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                  <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                    <span>-26%</span>
                  </div>
                </a>
                <div class="card-body p-2 pt-3">
                  <h3 class="card-title text-center">
                    Thác khói đĩa tròn phật thủ liên hoa CTM1
                  </h3>
                  <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
                    data-id="1043979047">
                    <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
                      title="gorgeous">
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                    </div>
                    <span>(1 đánh giá)</span>
                  </div>
                  <p class="pro-prices text-center on-sale">
                    <span class="price fs_14">668,000₫</span>
                    <span class="price-del fs_13 text-decoration-line-through">900,000₫</span>
                  </p>
                  <!-- Btn add to card -->
                  <div class="text-center pt-2">
                    <a href="#" class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
                      <span class="fs_14 px-3">Thêm vào giỏ</span>
                      <div class="btnico" title="Thêm vào giỏ">
                        <i class="bi bi-bag-plus text-white"></i>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                  <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                  <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                    <span>-26%</span>
                  </div>
                </a>
                <div class="card-body p-2 pt-3">
                  <h3 class="card-title text-center">
                    Thác khói đĩa tròn phật thủ liên hoa CTM1
                  </h3>
                  <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
                    data-id="1043979047">
                    <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
                      title="gorgeous">
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                    </div>
                    <span>(1 đánh giá)</span>
                  </div>
                  <p class="pro-prices text-center on-sale">
                    <span class="price fs_14">668,000₫</span>
                    <span class="price-del fs_13 text-decoration-line-through">900,000₫</span>
                  </p>
                  <!-- Btn add to card -->
                  <div class="text-center pt-2">
                    <a href="#" class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
                      <span class="fs_14 px-3">Thêm vào giỏ</span>
                      <div class="btnico" title="Thêm vào giỏ">
                        <i class="bi bi-bag-plus text-white"></i>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                  <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                  <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                    <span>-26%</span>
                  </div>
                </a>
                <div class="card-body p-2 pt-3">
                  <h3 class="card-title text-center">
                    Thác khói đĩa tròn phật thủ liên hoa CTM1
                  </h3>
                  <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
                    data-id="1043979047">
                    <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
                      title="gorgeous">
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                    </div>
                    <span>(1 đánh giá)</span>
                  </div>
                  <p class="pro-prices text-center on-sale">
                    <span class="price fs_14">668,000₫</span>
                    <span class="price-del fs_13 text-decoration-line-through">900,000₫</span>
                  </p>
                  <!-- Btn add to card -->
                  <div class="text-center pt-2">
                    <a href="#" class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
                      <span class="fs_14 px-3">Thêm vào giỏ</span>
                      <div class="btnico" title="Thêm vào giỏ">
                        <i class="bi bi-bag-plus text-white"></i>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                  <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                  <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                    <span>-26%</span>
                  </div>
                </a>
                <div class="card-body p-2 pt-3">
                  <h3 class="card-title text-center">
                    Thác khói đĩa tròn phật thủ liên hoa CTM1
                  </h3>
                  <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
                    data-id="1043979047">
                    <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
                      title="gorgeous">
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                    </div>
                    <span>(1 đánh giá)</span>
                  </div>
                  <p class="pro-prices text-center on-sale">
                    <span class="price fs_14">668,000₫</span>
                    <span class="price-del fs_13 text-decoration-line-through">900,000₫</span>
                  </p>
                  <!-- Btn add to card -->
                  <div class="text-center pt-2">
                    <a href="#" class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
                      <span class="fs_14 px-3">Thêm vào giỏ</span>
                      <div class="btnico" title="Thêm vào giỏ">
                        <i class="bi bi-bag-plus text-white"></i>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                  <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                  <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                    <span>-26%</span>
                  </div>
                </a>
                <div class="card-body p-2 pt-3">
                  <h3 class="card-title text-center">
                    Thác khói đĩa tròn phật thủ liên hoa CTM1
                  </h3>
                  <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
                    data-id="1043979047">
                    <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
                      title="gorgeous">
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                    </div>
                    <span>(1 đánh giá)</span>
                  </div>
                  <p class="pro-prices text-center on-sale">
                    <span class="price fs_14">668,000₫</span>
                    <span class="price-del fs_13 text-decoration-line-through">900,000₫</span>
                  </p>
                  <!-- Btn add to card -->
                  <div class="text-center pt-2">
                    <a href="#" class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
                      <span class="fs_14 px-3">Thêm vào giỏ</span>
                      <div class="btnico" title="Thêm vào giỏ">
                        <i class="bi bi-bag-plus text-white"></i>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                  <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                  <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                    <span>-26%</span>
                  </div>
                </a>
                <div class="card-body p-2 pt-3">
                  <h3 class="card-title text-center">
                    Thác khói đĩa tròn phật thủ liên hoa CTM1
                  </h3>
                  <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
                    data-id="1043979047">
                    <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
                      title="gorgeous">
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                    </div>
                    <span>(1 đánh giá)</span>
                  </div>
                  <p class="pro-prices text-center on-sale">
                    <span class="price fs_14">668,000₫</span>
                    <span class="price-del fs_13 text-decoration-line-through">900,000₫</span>
                  </p>
                  <!-- Btn add to card -->
                  <div class="text-center pt-2">
                    <a href="#" class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
                      <span class="fs_14 px-3">Thêm vào giỏ</span>
                      <div class="btnico" title="Thêm vào giỏ">
                        <i class="bi bi-bag-plus text-white"></i>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                  <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                  <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                    <span>-26%</span>
                  </div>
                </a>
                <div class="card-body p-2 pt-3">
                  <h3 class="card-title text-center">
                    Thác khói đĩa tròn phật thủ liên hoa CTM1
                  </h3>
                  <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
                    data-id="1043979047">
                    <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
                      title="gorgeous">
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                    </div>
                    <span>(1 đánh giá)</span>
                  </div>
                  <p class="pro-prices text-center on-sale">
                    <span class="price fs_14">668,000₫</span>
                    <span class="price-del fs_13 text-decoration-line-through">900,000₫</span>
                  </p>
                  <!-- Btn add to card -->
                  <div class="text-center pt-2">
                    <a href="#" class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
                      <span class="fs_14 px-3">Thêm vào giỏ</span>
                      <div class="btnico" title="Thêm vào giỏ">
                        <i class="bi bi-bag-plus text-white"></i>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                  <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                  <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                    <span>-26%</span>
                  </div>
                </a>
                <div class="card-body p-2 pt-3">
                  <h3 class="card-title text-center">
                    Thác khói đĩa tròn phật thủ liên hoa CTM1
                  </h3>
                  <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
                    data-id="1043979047">
                    <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
                      title="gorgeous">
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                    </div>
                    <span>(1 đánh giá)</span>
                  </div>
                  <p class="pro-prices text-center on-sale">
                    <span class="price fs_14">668,000₫</span>
                    <span class="price-del fs_13 text-decoration-line-through">900,000₫</span>
                  </p>
                  <!-- Btn add to card -->
                  <div class="text-center pt-2">
                    <a href="#" class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
                      <span class="fs_14 px-3">Thêm vào giỏ</span>
                      <div class="btnico" title="Thêm vào giỏ">
                        <i class="bi bi-bag-plus text-white"></i>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                  <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                  <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                    <span>-26%</span>
                  </div>
                </a>
                <div class="card-body p-2 pt-3">
                  <h3 class="card-title text-center">
                    Thác khói đĩa tròn phật thủ liên hoa CTM1
                  </h3>
                  <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
                    data-id="1043979047">
                    <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
                      title="gorgeous">
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                    </div>
                    <span>(1 đánh giá)</span>
                  </div>
                  <p class="pro-prices text-center on-sale">
                    <span class="price fs_14">668,000₫</span>
                    <span class="price-del fs_13 text-decoration-line-through">900,000₫</span>
                  </p>
                  <!-- Btn add to card -->
                  <div class="text-center pt-2">
                    <a href="#" class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
                      <span class="fs_14 px-3">Thêm vào giỏ</span>
                      <div class="btnico" title="Thêm vào giỏ">
                        <i class="bi bi-bag-plus text-white"></i>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
      <div class="row">
        <div class="col-20 px-0 d-none d-lg-flex flex-column justify-content-center"
          style="background: var(--home-collection2-bg)">
          <img src="public/demo/home_coll_1_banner.webp" class="img-fluid" alt="" />
        </div>
        <div class="col-80">
          <div class="row row-cols-5 g-2">
            <div class="col">
              <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                  <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                  <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                    <span>-26%</span>
                  </div>
                </a>
                <div class="card-body p-2 pt-3">
                  <h3 class="card-title text-center">
                    Thác khói đĩa tròn phật thủ liên hoa CTM1
                  </h3>
                  <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
                    data-id="1043979047">
                    <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
                      title="gorgeous">
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                    </div>
                    <span>(1 đánh giá)</span>
                  </div>
                  <p class="pro-prices text-center on-sale">
                    <span class="price fs_14">668,000₫</span>
                    <span class="price-del fs_13 text-decoration-line-through">900,000₫</span>
                  </p>
                  <!-- Btn add to card -->
                  <div class="text-center pt-2">
                    <a href="#" class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
                      <span class="fs_14 px-3">Thêm vào giỏ</span>
                      <div class="btnico" title="Thêm vào giỏ">
                        <i class="bi bi-bag-plus text-white"></i>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                  <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                  <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                    <span>-26%</span>
                  </div>
                </a>
                <div class="card-body p-2 pt-3">
                  <h3 class="card-title text-center">
                    Thác khói đĩa tròn phật thủ liên hoa CTM1
                  </h3>
                  <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
                    data-id="1043979047">
                    <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
                      title="gorgeous">
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                    </div>
                    <span>(1 đánh giá)</span>
                  </div>
                  <p class="pro-prices text-center on-sale">
                    <span class="price fs_14">668,000₫</span>
                    <span class="price-del fs_13 text-decoration-line-through">900,000₫</span>
                  </p>
                  <!-- Btn add to card -->
                  <div class="text-center pt-2">
                    <a href="#" class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
                      <span class="fs_14 px-3">Thêm vào giỏ</span>
                      <div class="btnico" title="Thêm vào giỏ">
                        <i class="bi bi-bag-plus text-white"></i>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                  <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                  <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                    <span>-26%</span>
                  </div>
                </a>
                <div class="card-body p-2 pt-3">
                  <h3 class="card-title text-center">
                    Thác khói đĩa tròn phật thủ liên hoa CTM1
                  </h3>
                  <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
                    data-id="1043979047">
                    <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
                      title="gorgeous">
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                    </div>
                    <span>(1 đánh giá)</span>
                  </div>
                  <p class="pro-prices text-center on-sale">
                    <span class="price fs_14">668,000₫</span>
                    <span class="price-del fs_13 text-decoration-line-through">900,000₫</span>
                  </p>
                  <!-- Btn add to card -->
                  <div class="text-center pt-2">
                    <a href="#" class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
                      <span class="fs_14 px-3">Thêm vào giỏ</span>
                      <div class="btnico" title="Thêm vào giỏ">
                        <i class="bi bi-bag-plus text-white"></i>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                  <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                  <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                    <span>-26%</span>
                  </div>
                </a>
                <div class="card-body p-2 pt-3">
                  <h3 class="card-title text-center">
                    Thác khói đĩa tròn phật thủ liên hoa CTM1
                  </h3>
                  <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
                    data-id="1043979047">
                    <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
                      title="gorgeous">
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                    </div>
                    <span>(1 đánh giá)</span>
                  </div>
                  <p class="pro-prices text-center on-sale">
                    <span class="price fs_14">668,000₫</span>
                    <span class="price-del fs_13 text-decoration-line-through">900,000₫</span>
                  </p>
                  <!-- Btn add to card -->
                  <div class="text-center pt-2">
                    <a href="#" class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
                      <span class="fs_14 px-3">Thêm vào giỏ</span>
                      <div class="btnico" title="Thêm vào giỏ">
                        <i class="bi bi-bag-plus text-white"></i>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                  <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                  <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                    <span>-26%</span>
                  </div>
                </a>
                <div class="card-body p-2 pt-3">
                  <h3 class="card-title text-center">
                    Thác khói đĩa tròn phật thủ liên hoa CTM1
                  </h3>
                  <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
                    data-id="1043979047">
                    <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
                      title="gorgeous">
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                    </div>
                    <span>(1 đánh giá)</span>
                  </div>
                  <p class="pro-prices text-center on-sale">
                    <span class="price fs_14">668,000₫</span>
                    <span class="price-del fs_13 text-decoration-line-through">900,000₫</span>
                  </p>
                  <!-- Btn add to card -->
                  <div class="text-center pt-2">
                    <a href="#" class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
                      <span class="fs_14 px-3">Thêm vào giỏ</span>
                      <div class="btnico" title="Thêm vào giỏ">
                        <i class="bi bi-bag-plus text-white"></i>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                  <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                  <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                    <span>-26%</span>
                  </div>
                </a>
                <div class="card-body p-2 pt-3">
                  <h3 class="card-title text-center">
                    Thác khói đĩa tròn phật thủ liên hoa CTM1
                  </h3>
                  <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
                    data-id="1043979047">
                    <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
                      title="gorgeous">
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                    </div>
                    <span>(1 đánh giá)</span>
                  </div>
                  <p class="pro-prices text-center on-sale">
                    <span class="price fs_14">668,000₫</span>
                    <span class="price-del fs_13 text-decoration-line-through">900,000₫</span>
                  </p>
                  <!-- Btn add to card -->
                  <div class="text-center pt-2">
                    <a href="#" class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
                      <span class="fs_14 px-3">Thêm vào giỏ</span>
                      <div class="btnico" title="Thêm vào giỏ">
                        <i class="bi bi-bag-plus text-white"></i>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                  <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                  <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                    <span>-26%</span>
                  </div>
                </a>
                <div class="card-body p-2 pt-3">
                  <h3 class="card-title text-center">
                    Thác khói đĩa tròn phật thủ liên hoa CTM1
                  </h3>
                  <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
                    data-id="1043979047">
                    <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
                      title="gorgeous">
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                    </div>
                    <span>(1 đánh giá)</span>
                  </div>
                  <p class="pro-prices text-center on-sale">
                    <span class="price fs_14">668,000₫</span>
                    <span class="price-del fs_13 text-decoration-line-through">900,000₫</span>
                  </p>
                  <!-- Btn add to card -->
                  <div class="text-center pt-2">
                    <a href="#" class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
                      <span class="fs_14 px-3">Thêm vào giỏ</span>
                      <div class="btnico" title="Thêm vào giỏ">
                        <i class="bi bi-bag-plus text-white"></i>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                  <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                  <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                    <span>-26%</span>
                  </div>
                </a>
                <div class="card-body p-2 pt-3">
                  <h3 class="card-title text-center">
                    Thác khói đĩa tròn phật thủ liên hoa CTM1
                  </h3>
                  <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
                    data-id="1043979047">
                    <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
                      title="gorgeous">
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                    </div>
                    <span>(1 đánh giá)</span>
                  </div>
                  <p class="pro-prices text-center on-sale">
                    <span class="price fs_14">668,000₫</span>
                    <span class="price-del fs_13 text-decoration-line-through">900,000₫</span>
                  </p>
                  <!-- Btn add to card -->
                  <div class="text-center pt-2">
                    <a href="#" class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
                      <span class="fs_14 px-3">Thêm vào giỏ</span>
                      <div class="btnico" title="Thêm vào giỏ">
                        <i class="bi bi-bag-plus text-white"></i>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                  <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                  <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                    <span>-26%</span>
                  </div>
                </a>
                <div class="card-body p-2 pt-3">
                  <h3 class="card-title text-center">
                    Thác khói đĩa tròn phật thủ liên hoa CTM1
                  </h3>
                  <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
                    data-id="1043979047">
                    <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
                      title="gorgeous">
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                    </div>
                    <span>(1 đánh giá)</span>
                  </div>
                  <p class="pro-prices text-center on-sale">
                    <span class="price fs_14">668,000₫</span>
                    <span class="price-del fs_13 text-decoration-line-through">900,000₫</span>
                  </p>
                  <!-- Btn add to card -->
                  <div class="text-center pt-2">
                    <a href="#" class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
                      <span class="fs_14 px-3">Thêm vào giỏ</span>
                      <div class="btnico" title="Thêm vào giỏ">
                        <i class="bi bi-bag-plus text-white"></i>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                  <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                  <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                    <span>-26%</span>
                  </div>
                </a>
                <div class="card-body p-2 pt-3">
                  <h3 class="card-title text-center">
                    Thác khói đĩa tròn phật thủ liên hoa CTM1
                  </h3>
                  <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
                    data-id="1043979047">
                    <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
                      title="gorgeous">
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                    </div>
                    <span>(1 đánh giá)</span>
                  </div>
                  <p class="pro-prices text-center on-sale">
                    <span class="price fs_14">668,000₫</span>
                    <span class="price-del fs_13 text-decoration-line-through">900,000₫</span>
                  </p>
                  <!-- Btn add to card -->
                  <div class="text-center pt-2">
                    <a href="#" class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
                      <span class="fs_14 px-3">Thêm vào giỏ</span>
                      <div class="btnico" title="Thêm vào giỏ">
                        <i class="bi bi-bag-plus text-white"></i>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">
      <div class="row">
        <div class="col-20 px-0 d-none d-lg-flex flex-column justify-content-center"
          style="background: var(--home-collection2-bg)">
          <img src="public/demo/home_coll_1_banner.webp" class="img-fluid" alt="" />
        </div>
        <div class="col-80">
          <div class="row row-cols-5 g-2">
            <div class="col">
              <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                  <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                  <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                    <span>-26%</span>
                  </div>
                </a>
                <div class="card-body p-2 pt-3">
                  <h3 class="card-title text-center">
                    Thác khói đĩa tròn phật thủ liên hoa CTM1
                  </h3>
                  <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
                    data-id="1043979047">
                    <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
                      title="gorgeous">
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                    </div>
                    <span>(1 đánh giá)</span>
                  </div>
                  <p class="pro-prices text-center on-sale">
                    <span class="price fs_14">668,000₫</span>
                    <span class="price-del fs_13 text-decoration-line-through">900,000₫</span>
                  </p>
                  <!-- Btn add to card -->
                  <div class="text-center pt-2">
                    <a href="#" class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
                      <span class="fs_14 px-3">Thêm vào giỏ</span>
                      <div class="btnico" title="Thêm vào giỏ">
                        <i class="bi bi-bag-plus text-white"></i>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                  <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                  <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                    <span>-26%</span>
                  </div>
                </a>
                <div class="card-body p-2 pt-3">
                  <h3 class="card-title text-center">
                    Thác khói đĩa tròn phật thủ liên hoa CTM1
                  </h3>
                  <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
                    data-id="1043979047">
                    <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
                      title="gorgeous">
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                    </div>
                    <span>(1 đánh giá)</span>
                  </div>
                  <p class="pro-prices text-center on-sale">
                    <span class="price fs_14">668,000₫</span>
                    <span class="price-del fs_13 text-decoration-line-through">900,000₫</span>
                  </p>
                  <!-- Btn add to card -->
                  <div class="text-center pt-2">
                    <a href="#" class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
                      <span class="fs_14 px-3">Thêm vào giỏ</span>
                      <div class="btnico" title="Thêm vào giỏ">
                        <i class="bi bi-bag-plus text-white"></i>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                  <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                  <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                    <span>-26%</span>
                  </div>
                </a>
                <div class="card-body p-2 pt-3">
                  <h3 class="card-title text-center">
                    Thác khói đĩa tròn phật thủ liên hoa CTM1
                  </h3>
                  <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
                    data-id="1043979047">
                    <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
                      title="gorgeous">
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                    </div>
                    <span>(1 đánh giá)</span>
                  </div>
                  <p class="pro-prices text-center on-sale">
                    <span class="price fs_14">668,000₫</span>
                    <span class="price-del fs_13 text-decoration-line-through">900,000₫</span>
                  </p>
                  <!-- Btn add to card -->
                  <div class="text-center pt-2">
                    <a href="#" class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
                      <span class="fs_14 px-3">Thêm vào giỏ</span>
                      <div class="btnico" title="Thêm vào giỏ">
                        <i class="bi bi-bag-plus text-white"></i>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                  <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                  <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                    <span>-26%</span>
                  </div>
                </a>
                <div class="card-body p-2 pt-3">
                  <h3 class="card-title text-center">
                    Thác khói đĩa tròn phật thủ liên hoa CTM1
                  </h3>
                  <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
                    data-id="1043979047">
                    <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
                      title="gorgeous">
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                    </div>
                    <span>(1 đánh giá)</span>
                  </div>
                  <p class="pro-prices text-center on-sale">
                    <span class="price fs_14">668,000₫</span>
                    <span class="price-del fs_13 text-decoration-line-through">900,000₫</span>
                  </p>
                  <!-- Btn add to card -->
                  <div class="text-center pt-2">
                    <a href="#" class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
                      <span class="fs_14 px-3">Thêm vào giỏ</span>
                      <div class="btnico" title="Thêm vào giỏ">
                        <i class="bi bi-bag-plus text-white"></i>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                  <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                  <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                    <span>-26%</span>
                  </div>
                </a>
                <div class="card-body p-2 pt-3">
                  <h3 class="card-title text-center">
                    Thác khói đĩa tròn phật thủ liên hoa CTM1
                  </h3>
                  <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
                    data-id="1043979047">
                    <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
                      title="gorgeous">
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                    </div>
                    <span>(1 đánh giá)</span>
                  </div>
                  <p class="pro-prices text-center on-sale">
                    <span class="price fs_14">668,000₫</span>
                    <span class="price-del fs_13 text-decoration-line-through">900,000₫</span>
                  </p>
                  <!-- Btn add to card -->
                  <div class="text-center pt-2">
                    <a href="#" class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
                      <span class="fs_14 px-3">Thêm vào giỏ</span>
                      <div class="btnico" title="Thêm vào giỏ">
                        <i class="bi bi-bag-plus text-white"></i>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                  <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                  <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                    <span>-26%</span>
                  </div>
                </a>
                <div class="card-body p-2 pt-3">
                  <h3 class="card-title text-center">
                    Thác khói đĩa tròn phật thủ liên hoa CTM1
                  </h3>
                  <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
                    data-id="1043979047">
                    <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
                      title="gorgeous">
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                    </div>
                    <span>(1 đánh giá)</span>
                  </div>
                  <p class="pro-prices text-center on-sale">
                    <span class="price fs_14">668,000₫</span>
                    <span class="price-del fs_13 text-decoration-line-through">900,000₫</span>
                  </p>
                  <!-- Btn add to card -->
                  <div class="text-center pt-2">
                    <a href="#" class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
                      <span class="fs_14 px-3">Thêm vào giỏ</span>
                      <div class="btnico" title="Thêm vào giỏ">
                        <i class="bi bi-bag-plus text-white"></i>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                  <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                  <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                    <span>-26%</span>
                  </div>
                </a>
                <div class="card-body p-2 pt-3">
                  <h3 class="card-title text-center">
                    Thác khói đĩa tròn phật thủ liên hoa CTM1
                  </h3>
                  <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
                    data-id="1043979047">
                    <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
                      title="gorgeous">
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                    </div>
                    <span>(1 đánh giá)</span>
                  </div>
                  <p class="pro-prices text-center on-sale">
                    <span class="price fs_14">668,000₫</span>
                    <span class="price-del fs_13 text-decoration-line-through">900,000₫</span>
                  </p>
                  <!-- Btn add to card -->
                  <div class="text-center pt-2">
                    <a href="#" class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
                      <span class="fs_14 px-3">Thêm vào giỏ</span>
                      <div class="btnico" title="Thêm vào giỏ">
                        <i class="bi bi-bag-plus text-white"></i>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                  <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                  <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                    <span>-26%</span>
                  </div>
                </a>
                <div class="card-body p-2 pt-3">
                  <h3 class="card-title text-center">
                    Thác khói đĩa tròn phật thủ liên hoa CTM1
                  </h3>
                  <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
                    data-id="1043979047">
                    <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
                      title="gorgeous">
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                    </div>
                    <span>(1 đánh giá)</span>
                  </div>
                  <p class="pro-prices text-center on-sale">
                    <span class="price fs_14">668,000₫</span>
                    <span class="price-del fs_13 text-decoration-line-through">900,000₫</span>
                  </p>
                  <!-- Btn add to card -->
                  <div class="text-center pt-2">
                    <a href="#" class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
                      <span class="fs_14 px-3">Thêm vào giỏ</span>
                      <div class="btnico" title="Thêm vào giỏ">
                        <i class="bi bi-bag-plus text-white"></i>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                  <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                  <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                    <span>-26%</span>
                  </div>
                </a>
                <div class="card-body p-2 pt-3">
                  <h3 class="card-title text-center">
                    Thác khói đĩa tròn phật thủ liên hoa CTM1
                  </h3>
                  <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
                    data-id="1043979047">
                    <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
                      title="gorgeous">
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                    </div>
                    <span>(1 đánh giá)</span>
                  </div>
                  <p class="pro-prices text-center on-sale">
                    <span class="price fs_14">668,000₫</span>
                    <span class="price-del fs_13 text-decoration-line-through">900,000₫</span>
                  </p>
                  <!-- Btn add to card -->
                  <div class="text-center pt-2">
                    <a href="#" class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
                      <span class="fs_14 px-3">Thêm vào giỏ</span>
                      <div class="btnico" title="Thêm vào giỏ">
                        <i class="bi bi-bag-plus text-white"></i>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                  <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                  <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                    <span>-26%</span>
                  </div>
                </a>
                <div class="card-body p-2 pt-3">
                  <h3 class="card-title text-center">
                    Thác khói đĩa tròn phật thủ liên hoa CTM1
                  </h3>
                  <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
                    data-id="1043979047">
                    <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
                      title="gorgeous">
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                      <i class="bi bi-star-fill star_icon star-filled"></i>
                    </div>
                    <span>(1 đánh giá)</span>
                  </div>
                  <p class="pro-prices text-center on-sale">
                    <span class="price fs_14">668,000₫</span>
                    <span class="price-del fs_13 text-decoration-line-through">900,000₫</span>
                  </p>
                  <!-- Btn add to card -->
                  <div class="text-center pt-2">
                    <a href="#" class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
                      <span class="fs_14 px-3">Thêm vào giỏ</span>
                      <div class="btnico" title="Thêm vào giỏ">
                        <i class="bi bi-bag-plus text-white"></i>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Xem tất cả -->
  <div class="text-center mt-4">
    <a class="button see-all-btn" href="javascript:void();">Xem tất cả <strong>Thác Khói Xông Trầm</strong></a>
  </div>
</div>

<!-- two images -->
<div class="row px-6 py-5 bg_light_grey">
  <div class="col-md-6 col-xxl-6 col-12 mb-3">
    <img src="public/demo/homebanner_1_img.webp" class="img-fluid rounded" alt="">
  </div>
  <div class="col-md-6 col-xxl-6 col-12">
    <img src="public/demo/homebanner_1_img.webp" class="img-fluid rounded" alt="">
  </div>
</div>

<!-- DỤNG CỤ THƯỞNG TRẦM -->
<div class="row px-6 py-md-5 py-2 bg_light_grey">
  <div class="d-flex flex-wrap align-items-start bg-white">
    <div class="col-xxl-8 col-12 px-md-2 px-0">
      <h4 class="mb-lg-5 mb-md-3 mt-4">DỤNG CỤ THƯỞNG TRẦM</h4>
      <div class="moi5 owl-carousel owl-theme">
        <div>
          <div class="d-flex flex-column dung-cu-thuong-tram">
            <!-- 3 item -->
            <div class="d-flex flex-wrap item py-2 ">
              <div class="col-4 pe-2">
                <img src="public/demo/dung_cu_tieu_canh_small.webp" class="img-fluid" alt="">
              </div>
              <div class="col-8 fs_14">
                <p class="mb-2"><a href="#">Tiểu cảnh thác khói trầm hương cây xanh trang trí CTM1 test overflow</a>
                </p>
                <p><span class="price-on-sale-color">2,500,000₫</span> <span
                    class="price-del text-decoration-line-through">2,168,000₫</span> <span
                    class="badge bg-danger">-13%</span></p>
              </div>
            </div>
            <div class="d-flex flex-wrap item py-2 ">
              <div class="col-4 pe-2">
                <img src="public/demo/dung_cu_tieu_canh_small.webp" class="img-fluid" alt="">
              </div>
              <div class="col-8 fs_14">
                <p class="mb-2"><a href="#">Tiểu cảnh thác khói trầm hương cây xanh trang trí CTM1 test overflow</a>
                </p>
                <p><span class="price-on-sale-color">2,500,000₫</span> <span
                    class="price-del text-decoration-line-through">2,168,000₫</span> <span
                    class="badge bg-danger">-13%</span></p>
              </div>
            </div>
            <div class="d-flex flex-wrap item py-2 ">
              <div class="col-4 pe-2">
                <img src="public/demo/dung_cu_tieu_canh_small.webp" class="img-fluid" alt="">
              </div>
              <div class="col-8 fs_14">
                <p class="mb-2"><a href="#">Tiểu cảnh thác khói trầm hương cây xanh trang trí CTM1 test overflow</a>
                </p>
                <p><span class="price-on-sale-color">2,500,000₫</span> <span
                    class="price-del text-decoration-line-through">2,168,000₫</span> <span
                    class="badge bg-danger">-13%</span></p>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="d-flex flex-column dung-cu-thuong-tram">
            <!-- 3 item -->
            <div class="d-flex flex-wrap item py-2 ">
              <div class="col-4 pe-2">
                <img src="public/demo/dung_cu_tieu_canh_small.webp" class="img-fluid" alt="">
              </div>
              <div class="col-8 fs_14">
                <p class="mb-2"><a href="#">Tiểu cảnh thác khói trầm hương cây xanh trang trí CTM1 test overflow</a>
                </p>
                <p><span class="price-on-sale-color">2,500,000₫</span> <span
                    class="price-del text-decoration-line-through">2,168,000₫</span> <span
                    class="badge bg-danger">-13%</span></p>
              </div>
            </div>
            <div class="d-flex flex-wrap item py-2 ">
              <div class="col-4 pe-2">
                <img src="public/demo/dung_cu_tieu_canh_small.webp" class="img-fluid" alt="">
              </div>
              <div class="col-8 fs_14">
                <p class="mb-2"><a href="#">Tiểu cảnh thác khói trầm hương cây xanh trang trí CTM1 test overflow</a>
                </p>
                <p><span class="price-on-sale-color">2,500,000₫</span> <span
                    class="price-del text-decoration-line-through">2,168,000₫</span> <span
                    class="badge bg-danger">-13%</span></p>
              </div>
            </div>
            <div class="d-flex flex-wrap item py-2 ">
              <div class="col-4 pe-2">
                <img src="public/demo/dung_cu_tieu_canh_small.webp" class="img-fluid" alt="">
              </div>
              <div class="col-8 fs_14">
                <p class="mb-2"><a href="#">Tiểu cảnh thác khói trầm hương cây xanh trang trí CTM1 test overflow</a>
                </p>
                <p><span class="price-on-sale-color">2,500,000₫</span> <span
                    class="price-del text-decoration-line-through">2,168,000₫</span> <span
                    class="badge bg-danger">-13%</span></p>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="d-flex flex-column dung-cu-thuong-tram">
            <!-- 3 item -->
            <div class="d-flex flex-wrap item py-2 ">
              <div class="col-4 pe-2">
                <img src="public/demo/dung_cu_tieu_canh_small.webp" class="img-fluid" alt="">
              </div>
              <div class="col-8 fs_14">
                <p class="mb-2"><a href="#">Tiểu cảnh thác khói trầm hương cây xanh trang trí CTM1 test overflow</a>
                </p>
                <p><span class="price-on-sale-color">2,500,000₫</span> <span
                    class="price-del text-decoration-line-through">2,168,000₫</span> <span
                    class="badge bg-danger">-13%</span></p>
              </div>
            </div>
            <div class="d-flex flex-wrap item py-2 ">
              <div class="col-4 pe-2">
                <img src="public/demo/dung_cu_tieu_canh_small.webp" class="img-fluid" alt="">
              </div>
              <div class="col-8 fs_14">
                <p class="mb-2"><a href="#">Tiểu cảnh thác khói trầm hương cây xanh trang trí CTM1 test overflow</a>
                </p>
                <p><span class="price-on-sale-color">2,500,000₫</span> <span
                    class="price-del text-decoration-line-through">2,168,000₫</span> <span
                    class="badge bg-danger">-13%</span></p>
              </div>
            </div>
            <div class="d-flex flex-wrap item py-2 ">
              <div class="col-4 pe-2">
                <img src="public/demo/dung_cu_tieu_canh_small.webp" class="img-fluid" alt="">
              </div>
              <div class="col-8 fs_14">
                <p class="mb-2"><a href="#">Tiểu cảnh thác khói trầm hương cây xanh trang trí CTM1 test overflow</a>
                </p>
                <p><span class="price-on-sale-color">2,500,000₫</span> <span
                    class="price-del text-decoration-line-through">2,168,000₫</span> <span
                    class="badge bg-danger">-13%</span></p>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="d-flex flex-column dung-cu-thuong-tram">
            <!-- 3 item -->
            <div class="d-flex flex-wrap item py-2 ">
              <div class="col-4 pe-2">
                <img src="public/demo/dung_cu_tieu_canh_small.webp" class="img-fluid" alt="">
              </div>
              <div class="col-8 fs_14">
                <p class="mb-2"><a href="#">Tiểu cảnh thác khói trầm hương cây xanh trang trí CTM1 test overflow</a>
                </p>
                <p><span class="price-on-sale-color">2,500,000₫</span> <span
                    class="price-del text-decoration-line-through">2,168,000₫</span> <span
                    class="badge bg-danger">-13%</span></p>
              </div>
            </div>
            <div class="d-flex flex-wrap item py-2 ">
              <div class="col-4 pe-2">
                <img src="public/demo/dung_cu_tieu_canh_small.webp" class="img-fluid" alt="">
              </div>
              <div class="col-8 fs_14">
                <p class="mb-2"><a href="#">Tiểu cảnh thác khói trầm hương cây xanh trang trí CTM1 test overflow</a>
                </p>
                <p><span class="price-on-sale-color">2,500,000₫</span> <span
                    class="price-del text-decoration-line-through">2,168,000₫</span> <span
                    class="badge bg-danger">-13%</span></p>
              </div>
            </div>
            <div class="d-flex flex-wrap item py-2 ">
              <div class="col-4 pe-2">
                <img src="public/demo/dung_cu_tieu_canh_small.webp" class="img-fluid" alt="">
              </div>
              <div class="col-8 fs_14">
                <p class="mb-2"><a href="#">Tiểu cảnh thác khói trầm hương cây xanh trang trí CTM1 test overflow</a>
                </p>
                <p><span class="price-on-sale-color">2,500,000₫</span> <span
                    class="price-del text-decoration-line-through">2,168,000₫</span> <span
                    class="badge bg-danger">-13%</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xxl-4 d-none d-xxl-flex">
      <img class="img-fluid" src="public/demo/dung_cu_thuong_tram_banner.webp" alt="">
    </div>
  </div>
</div>

<!-- DỤNG CỤ THƯỞNG TRẦM Banner tablet - mobile -->
<div class="row d-xxl-none d-block mt-3">
  <img class="img-fluid" src="public/demo/dung_cu_thuong_tram_banner.webp" alt="">
</div>

<!-- Bài Viết Mới Nhất -->
<div class="row px-6 pb-5 bg_light_grey">
  <h4 class="py-3">Bài Viết Mới Nhất</h4>
  <div class="moi6 owl-carousel owl-theme">
    <div class="card">
      <a style="background-image: url(public/demo/huong-tram-huong-la-gi.webp);" class="article-background card-img-top"
        title="Hương Trầm Không Tăm Là Gì? Hương trầm không tăm có độc không?" href="index.php?p=chitiettintuc"></a>
      <div class="card-body">
        <h6 class="card-text"><a class="art-title" href="index.php?p=chitiettintuc">Hương Trầm Không Tăm Là Gì? Hương trầm không tăm có độc
            không?</a></h6>
        <div class="card-text">
          <p class="art-desc fs_13 text-black-50 mb-3">Some quick example text to build on the card title and make
            up the
            bulk of the card's
            content.</a>
        </div>

        <div class="card-footer fs_12 text-black-50 d-flex justify-content-between">
          <time datetime="2023-03-24"><i class="bi bi-calendar3"></i> 24 Tháng 03, 2023</time>
          <a class="fs_12 text-black-50" href="index.php?p=chitiettintuc"
            title="Hương Trầm Không Tăm Là Gì? Hương trầm không tăm có độc không?">Xem thêm <i
              class="fa fa-angle-double-right" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
    <div class="card">
      <a style="background-image: url(public/demo/huong-tram-huong-la-gi.webp);" class="article-background card-img-top"
        title="Hương Trầm Không Tăm Là Gì? Hương trầm không tăm có độc không?" href="index.php?p=chitiettintuc"></a>
      <div class="card-body">
        <h6 class="card-text"><a class="art-title" href="index.php?p=chitiettintuc">Hương Trầm Không Tăm Là Gì? Hương trầm không tăm có độc
            không?</a></h6>
        <div class="card-text">
          <p class="art-desc fs_13 text-black-50 mb-3">Some quick example text to build on the card title and make
            up the
            bulk of the card's
            content.</a>
        </div>

        <div class="card-footer fs_12 text-black-50 d-flex justify-content-between">
          <time datetime="2023-03-24"><i class="bi bi-calendar3"></i> 24 Tháng 03, 2023</time>
          <a class="fs_12 text-black-50" href="index.php?p=chitiettintuc"
            title="Hương Trầm Không Tăm Là Gì? Hương trầm không tăm có độc không?">Xem thêm <i
              class="fa fa-angle-double-right" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
    <div class="card">
      <a style="background-image: url(public/demo/huong-tram-huong-la-gi.webp);" class="article-background card-img-top"
        title="Hương Trầm Không Tăm Là Gì? Hương trầm không tăm có độc không?" href="index.php?p=chitiettintuc"></a>
      <div class="card-body">
        <h6 class="card-text"><a class="art-title" href="index.php?p=chitiettintuc">Hương Trầm Không Tăm Là Gì? Hương trầm không tăm có độc
            không?</a></h6>
        <div class="card-text">
          <p class="art-desc fs_13 text-black-50 mb-3">Some quick example text to build on the card title and make
            up the
            bulk of the card's
            content.</a>
        </div>

        <div class="card-footer fs_12 text-black-50 d-flex justify-content-between">
          <time datetime="2023-03-24"><i class="bi bi-calendar3"></i> 24 Tháng 03, 2023</time>
          <a class="fs_12 text-black-50" href="index.php?p=chitiettintuc"
            title="Hương Trầm Không Tăm Là Gì? Hương trầm không tăm có độc không?">Xem thêm <i
              class="fa fa-angle-double-right" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
    <div class="card">
      <a style="background-image: url(public/demo/huong-tram-huong-la-gi.webp);" class="article-background card-img-top"
        title="Hương Trầm Không Tăm Là Gì? Hương trầm không tăm có độc không?" href="index.php?p=chitiettintuc"></a>
      <div class="card-body">
        <h6 class="card-text"><a class="art-title" href="index.php?p=chitiettintuc">Hương Trầm Không Tăm Là Gì? Hương trầm không tăm có độc
            không?</a></h6>
        <div class="card-text">
          <p class="art-desc fs_13 text-black-50 mb-3">Some quick example text to build on the card title and make
            up the
            bulk of the card's
            content.</a>
        </div>

        <div class="card-footer fs_12 text-black-50 d-flex justify-content-between">
          <time datetime="2023-03-24"><i class="bi bi-calendar3"></i> 24 Tháng 03, 2023</time>
          <a class="fs_12 text-black-50" href="index.php?p=chitiettintuc"
            title="Hương Trầm Không Tăm Là Gì? Hương trầm không tăm có độc không?">Xem thêm <i
              class="fa fa-angle-double-right" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
    <div class="card">
      <a style="background-image: url(public/demo/huong-tram-huong-la-gi.webp);" class="article-background card-img-top"
        title="Hương Trầm Không Tăm Là Gì? Hương trầm không tăm có độc không?" href="index.php?p=chitiettintuc"></a>
      <div class="card-body">
        <h6 class="card-text"><a class="art-title" href="index.php?p=chitiettintuc">Hương Trầm Không Tăm Là Gì? Hương trầm không tăm có độc
            không?</a></h6>
        <div class="card-text">
          <p class="art-desc fs_13 text-black-50 mb-3">Some quick example text to build on the card title and make
            up the
            bulk of the card's
            content.</a>
        </div>

        <div class="card-footer fs_12 text-black-50 d-flex justify-content-between">
          <time datetime="2023-03-24"><i class="bi bi-calendar3"></i> 24 Tháng 03, 2023</time>
          <a class="fs_12 text-black-50" href="index.php?p=chitiettintuc"
            title="Hương Trầm Không Tăm Là Gì? Hương trầm không tăm có độc không?">Xem thêm <i
              class="fa fa-angle-double-right" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
    <div class="card">
      <a style="background-image: url(public/demo/huong-tram-huong-la-gi.webp);" class="article-background card-img-top"
        title="Hương Trầm Không Tăm Là Gì? Hương trầm không tăm có độc không?" href="index.php?p=chitiettintuc"></a>
      <div class="card-body">
        <h6 class="card-text"><a class="art-title" href="index.php?p=chitiettintuc">Hương Trầm Không Tăm Là Gì? Hương trầm không tăm có độc
            không?</a></h6>
        <div class="card-text">
          <p class="art-desc fs_13 text-black-50 mb-3">Some quick example text to build on the card title and make
            up the
            bulk of the card's
            content.</a>
        </div>

        <div class="card-footer fs_12 text-black-50 d-flex justify-content-between">
          <time datetime="2023-03-24"><i class="bi bi-calendar3"></i> 24 Tháng 03, 2023</time>
          <a class="fs_12 text-black-50" href="index.php?p=chitiettintuc"
            title="Hương Trầm Không Tăm Là Gì? Hương trầm không tăm có độc không?">Xem thêm <i
              class="fa fa-angle-double-right" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="owlcarousel/owl.carousel.min.js"></script>
<script>
  $(document).ready(function () {

    $('.moi1').owlCarousel({
      center: false,
      loop: false,
      margin: 0,
      nav: false,
      dots: false,
      autoplay: true,
      responsive: {
        0: {
          items: 1
        }
      }
    });
    $(".moi1 .owl-next").html('<i class="bi bi-arrow-left-short fs-1"></i>');
    $(".moi1 .owl-prev").html('<i class="bi bi-arrow-right-short fs-1"></i>');

    $(".moi5").owlCarousel({
      center: false,
      loop: false,
      margin: 14,
      nav: true,
      dots: false,
      autoplay: false,
      smartSpeed: 1500,
      responsive: {
        0: {
          items: 1,
        },
        768: {
          items: 2,
        },
        900: {
          items: 3,
        },
      },
    });
    $(".moi5 .owl-next").html('<i class="bi bi-arrow-right-short icon-prev" style="font-size: 28px;"></i>');
    $(".moi5 .owl-prev").html('<i class="bi bi-arrow-left-short icon-next" style="font-size: 28px;"></i>');

    $(".category-mobile").owlCarousel({
      margin: 14,
      dots: false,
      responsive: {
        0: {
          items: 1.5,
        },
        600: {
          items: 2.5,
        },
      },
    });
    $(".category-mobile .owl-next").html('<i class="fas">&#xf104;</i>');
    $(".category-mobile .owl-prev").html('<i class="fas">&#xf105;</i>');

    $(".made-by-mobile").owlCarousel({
      margin: 14,
      dots: false,
      dragable: false,
      responsive: {
        0: {
          items: 3,
        },
        600: {
          items: 3.2,
        },
      },
    });
    $(".made-by-mobile .owl-next").html('<i class="fas">&#xf104;</i>');
    $(".made-by-mobile .owl-prev").html('<i class="fas">&#xf105;</i>');

    $(".product_stand_out_slider").owlCarousel({
      center: false,
      loop: false,
      margin: 0,
      nav: false,
      dots: false,
      autoplay: false,
      margin: 14,
      responsive: {
        0: {
          items: 1.2,
        },
        600: {
          items: 2.2,
        },
        900: {
          items: 6,
        },
      },
    });

    $(".moi6").owlCarousel({
      center: false,
      loop: false,
      margin: 14,
      nav: true,
      dots: false,
      autoplay: false,
      smartSpeed: 1500,
      responsive: {
        0: {
          items: 1.3,
          nav: false,
        },
        600: {
          items: 3,
        },
        900: {
          items: 4,
        },
      },
    });
    $(".moi6 .owl-next").html('<i class="bi bi-arrow-right-short icon-prev" style="font-size: 28px;"></i>');
    $(".moi6 .owl-prev").html('<i class="bi bi-arrow-left-short icon-next" style="font-size: 28px;"></i>');


    $(".best_selling").owlCarousel({
      center: false,
      loop: false,
      margin: 14,
      nav: true,
      dots: false,
      autoplay: false,
      responsive: {
        0: {
          items: 1.2,
        },
        600: {
          items: 2.2,
        },
        900: {
          items: 6,
        },
      },
    });
    $(".best_selling .owl-next").html('<i class="bi bi-arrow-right-short icon-prev" style="font-size: 28px;"></i>');
    $(".best_selling .owl-prev").html('<i class="bi bi-arrow-left-short icon-next" style="font-size: 28px;"></i>');
  });
</script>