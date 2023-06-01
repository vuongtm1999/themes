<style type="text/css">
  .banner .owl-dots {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    bottom: 15px;
  }

  .banner .owl-dots button.owl-dot {
    width: 22px;
    height: 12px;
    background: url(public/demo/dot.svg);
    margin: 0 5px;
  }

  .banner.owl-carousel .owl-dots button.owl-dot.active {
    background: url(public/demo/dot-active.svg);
  }

  .banner.owl-theme .owl-dots .owl-dot span {
    display: none;
  }

  .trending-product .owl-nav [class*=owl-]:hover {
    color: unset;
    background-color: unset;
  }

  .trending-product>.owl-nav>.owl-next {
    top: 50%;
    position: absolute;
    right: -40px;
  }

  .trending-product>.owl-nav>.owl-prev {
    top: 50%;
    position: absolute;
    left: -40px;
  }

  .favorite-category .owl-nav [class*=owl-]:hover {
    color: unset;
    background-color: unset;
  }

  .favorite-category>.owl-nav>.owl-next {
    top: 50%;
    position: absolute;
    right: -40px;
  }

  .favorite-category>.owl-nav>.owl-prev {
    top: 50%;
    position: absolute;
    left: -40px;
  }

  .btn-add-to-wishlist {
    top: 10px;
    right: 10px;
  }

  .trang-suc-thinh-hanh {
    top: 30%;
    left: 50%;
    transform: translateX(-50%);
  }

  .jewelry-trend-wrapper {
    margin-top: -10%;
  }

  .trang-suc-thinh-hanh .title {
    font-size: 1rem;
  }

  .background-img-branch {
    background-image: url(public/demo/back-ground-img-2.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    padding-top: 35%;
  }

  .lien-he {
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 50%;
    padding: 16px 25px;
    background: #941e22;
    color: #f8c883;
    transition: background .2s linear;
    border: 2px solid #a2041b;
  }

  .lien-he:hover {
    color: #941e22;
    background-color: white;
  }

  .btn-add-to-wishlist:hover {
    animation: heartbeat 1.5s infinite;
  }

  .btn-add-to-wishlist:hover i {
    color: var(--color-yellow-main);
  }


  /* md */
  @media (min-width: 768px) {
    .trang-suc-thinh-hanh .title {
      font-size: 3rem;
    }

    .background-img-branch {
      background-image: url(public/demo/back-ground-img-2.jpg);
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      padding-top: 100%;
    }
  }

  /* pc */
  @media (min-width: 1400px) {
    .trang-suc-thinh-hanh .title {
      font-size: 6rem;
    }

    .background-img-branch {
      background-image: url(public/demo/back-ground-img-2.jpg);
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      padding-top: 35%;
    }
  }
</style>

<!-- banner slider  -->
<div class="row">
  <div class="px-0">
    <div class="banner owl-carousel owl-theme">
      <img src="public/demo/banner_1.jpg" alt="">
      <img src="public/demo/banner_2.jpg" alt="">
      <img src="public/demo/banner_3.jpg" alt="">
      <img src="public/demo/banner_4.jpg" alt="">
    </div>
  </div>
</div>

<!-- XU HƯỚNG MỚI NHẤT -->
<div class="row bg-primary py-5 justify-content-center">
  <p class="text-center fw-bolder text-grey pt-5">
    CÙNG KHÁM PHÁ
  </p>
  <h3 class="text-center text-red">
    XU HƯỚNG MỚI NHẤT
  </h3>
  <div class="col-xxl-10">
    <div class="trending-product owl-carousel owl-theme">
      <div class="item position-relative">
        <span class="btn-add-to-wishlist position-absolute">
          <i class="bi bi-heart-half"></i>
        </span>
        <a href="index.php?=chitietsanpham">
          <img class="img-fluid h-50" src="public/demo/san_pham_1.jpg" alt="">
        </a>
      </div>
      <div class="item position-relative">
        <span class="btn-add-to-wishlist position-absolute">
          <i class="bi bi-heart-half"></i>
        </span>
        <a href="index.php?=chitietsanpham">
          <img class="img-fluid h-50" src="public/demo/san_pham_2.jpg" alt="">
        </a>
      </div>
      <div class="item position-relative">
        <span class="btn-add-to-wishlist position-absolute">
          <i class="bi bi-heart-half"></i>
        </span>
        <a href="index.php?=chitietsanpham">
          <img class="img-fluid h-50" src="public/demo/san_pham_3.jpg" alt="">
        </a>
      </div>
      <div class="item position-relative">
        <span class="btn-add-to-wishlist position-absolute">
          <i class="bi bi-heart-half"></i>
        </span>
        <a href="index.php?=chitietsanpham">
          <img class="img-fluid h-50" src="public/demo/san_pham_1.jpg" alt="">
        </a>
      </div>
      <div class="item position-relative">
        <span class="btn-add-to-wishlist position-absolute">
          <i class="bi bi-heart-half"></i>
        </span>
        <a href="index.php?=chitietsanpham">
          <img class="img-fluid h-50" src="public/demo/san_pham_2.jpg" alt="">
        </a>
      </div>
      <div class="item position-relative">
        <span class="btn-add-to-wishlist position-absolute">
          <i class="bi bi-heart-half"></i>
        </span>
        <a href="index.php?=chitietsanpham">
          <img class="img-fluid h-50" src="public/demo/san_pham_3.jpg" alt="">
        </a>
      </div>
    </div>

    <div class="text-center my-5">
      <a class="fw-bold text-grey fs-5" href="index.php?p=xemthem">
        <span class="me-2">XEM THÊM</span> <i class="fa-solid fa-caret-right fs-5"></i>
      </a>
    </div>
  </div>
</div>

<!-- two images -->
<div style="z-index: 1;" class="row py-5 justify-content-center position-relative">
  <div class="col-xxl-10">
    <div class="d-flex flex-wrap">
      <div class="col-5">
        <h6 class="text-center text-grey text-uppercase mb-2 fw-bold">Khí Chất Lịch lãm</h6>
        <h3 class="text-center text-red text-uppercase mb-3 fw-bold">Xứng Tầm Phái Mạnh </h3>
        <a href="">
          <img class="img-fluid" src="public/demo/banner-left.jpg" alt="">
        </a>
      </div>
      <div class="col-2">

      </div>
      <div class="col-5">
        <h6 class="text-center text-grey text-uppercase mb-2 fw-bold">HẠNH PHÚC CÓ ĐÔI</h6>
        <h3 class="text-center text-red text-uppercase mb-3 fw-bold">KẾT DUYÊN MỘT ĐỜI</h3>
        <img class="img-fluid" src="public/demo/banner-right.jpg" alt="">
      </div>
    </div>
  </div>
</div>

<!-- Trang Sức Thịnh Hành -->
<div class="row jewelry-trend-wrapper">
  <div class="position-relative">
    <img class="img-fluid" src="public/demo/back-ground-img-1.jpg" alt="">
    <div class="trang-suc-thinh-hanh position-absolute w-75">
      <h1 class="text-center text-red mb-3 title">Trang Sức Thịnh Hành</h1>
      <h4 class="text-center text-uppercase fw-bolder fs-6">
        <a class="text-red" href="index.php?p=trangsucvang">
          Xem Thêm <i class="fa-solid fa-caret-right fs-5"></i>
        </a>
      </h4>
    </div>
  </div>
</div>

<!-- Hệ thông chi nhánh -->
<div class="row px-6">
  <div class="background-img-branch position-relative">
    <a class="lien-he position-absolute text-uppercase text-center fs-5" href="index.php?p=lienhe">
      hệ thống chi nhánh
    </a>
  </div>

  <div class="text-center mt-4 hr-box">
    <i class="fa-solid fa-crown fs-4 text-yellow d-block"></i>
    <i class="bi bi-stars fs-4 text-yellow d-block mt-2"></i>
  </div>
</div>

<!-- DANH MỤC ƯA CHUỘNG -->
<div class="row mt-5 justify-content-center">
  <div class="col-xxl-10 mb-5">
    <h2 class="text-center text-red mb-5 fw-bold">DANH MỤC ƯA CHUỘNG</h2>
    <div class="favorite-category owl-carousel owl-theme">
      <div class="item position-relative">
        <a href="index.php?=chitietsanpham">
          <img class="img-fluid h-50" src="public/demo/san_pham_1.jpg" alt="">
        </a>
        <div class="text-center my-5">
          <a class="fw-bold text-grey fs-5" href="index.php?p=xemthem">
            <span class="me-2">Nhẫn Nữ</span> <i class="fa-solid fa-caret-right fs-5"></i>
          </a>
        </div>
      </div>
      <div class="item position-relative">
        <a href="index.php?=chitietsanpham">
          <img class="img-fluid h-50" src="public/demo/san_pham_2.jpg" alt="">
        </a>
        <div class="text-center my-5">
          <a class="fw-bold text-grey fs-5" href="index.php?p=xemthem">
            <span class="me-2">Bông Tai</span> <i class="fa-solid fa-caret-right fs-5"></i>
          </a>
        </div>
      </div>
      <div class="item position-relative">
        <a href="index.php?=chitietsanpham">
          <img class="img-fluid h-50" src="public/demo/san_pham_3.jpg" alt="">
        </a>
        <div class="text-center my-5">
          <a class="fw-bold text-grey fs-5" href="index.php?p=xemthem">
            <span class="me-2">Mặt Dây Chuyền</span> <i class="fa-solid fa-caret-right fs-5"></i>
          </a>
        </div>
      </div>
      <div class="item position-relative">
        <a href="index.php?=chitietsanpham">
          <img class="img-fluid h-50" src="public/demo/san_pham_1.jpg" alt="">
        </a>
        <div class="text-center my-5">
          <a class="fw-bold text-grey fs-5" href="index.php?p=xemthem">
            <span class="me-2">Nhẫn Nữ</span> <i class="fa-solid fa-caret-right fs-5"></i>
          </a>
        </div>
      </div>
      <div class="item position-relative">
        <a href="index.php?=chitietsanpham">
          <img class="img-fluid h-50" src="public/demo/san_pham_2.jpg" alt="">
        </a>
        <div class="text-center my-5">
          <a class="fw-bold text-grey fs-5" href="index.php?p=xemthem">
            <span class="me-2">Bông Tai</span> <i class="fa-solid fa-caret-right fs-5"></i>
          </a>
        </div>
      </div>
      <div class="item position-relative">
        <a href="index.php?=chitietsanpham">
          <img class="img-fluid h-50" src="public/demo/san_pham_3.jpg" alt="">
        </a>
        <div class="text-center my-5">
          <a class="fw-bold text-grey fs-5" href="index.php?p=xemthem">
            <span class="me-2">Mặt Dây Chuyền</span> <i class="fa-solid fa-caret-right fs-5"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="owlcarousel/owl.carousel.min.js"></script>
<script>
  $(document).ready(function () {
    $('.banner').owlCarousel({
      center: false,
      loop: true,
      margin: 0,
      nav: false,
      dots: true,
      autoplay: true,
      responsive: {
        0: {
          items: 1
        }
      }
    });

    $('.trending-product').owlCarousel({
      center: false,
      loop: true,
      margin: 0,
      nav: true,
      dots: false,
      margin: 10,
      stagePadding: 150,
      autoplay: false,
      responsive: {
        0: {
          items: 1,
          stagePadding: false,
          nav: false,
        },
        768: {
          items: 1,
          nav: false,
          stagePadding: 100,
        },
        1400: {
          items: 3
        }
      }
    });

    $('.favorite-category').owlCarousel({
      center: false,
      loop: true,
      margin: 0,
      nav: true,
      dots: false,
      margin: 35,
      autoplay: false,
      responsive: {
        0: {
          items: 1,
          stagePadding: false,
          nav:false,
        },
        768: {
          items: 1,
          nav: false,
        },
        1400: {
          items: 3
        }
      }
    });

    $(".favorite-category .owl-next").html(`<i class="fa-solid fa-caret-right fs-5"></i>`);
    $(".favorite-category .owl-prev").html(`<i class="fa-solid fa-caret-left fs-5"></i>`);

    $(".trending-product .owl-next").html(`<i class="fa-solid fa-caret-right fs-5"></i>`);
    $(".trending-product .owl-prev").html(`<i class="fa-solid fa-caret-left fs-5"></i>`);
  });
</script>