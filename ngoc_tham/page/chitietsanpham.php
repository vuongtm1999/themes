<style>
    .background-img-product {
        background-image: url(public/demo/product.jpg);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        padding-top: 105%;
    }

    .jewelry-block {
        background: #f7f7f7;
        border: 1px solid transparent;
    }

    .jewelry-block:hover {
        border-color: var(--color-red-main);
    }

    .btn-add-to-wishlist {
        top: 10px;
        right: 10px;
    }

    .btn-add-to-wishlist:hover {
        animation: heartbeat 1.5s infinite;
    }

    .btn-add-to-wishlist:hover i {
        color: var(--color-yellow-main);
    }

    .xem-them-btn {
        background: white;
        transition: background .2s linear;
        border: 1px solid #a2041b;
        color: #941e22;
    }

    .xem-them-btn:hover {
        color: #f8c883;
        background-color: #941e22;
    }

    .title-list-products {
        position: absolute;
        top: 80%;
        left: 3%;
        transform: translateY(-50%);
    }

    .breadcrumbs li:after {
        content: '•';
        margin-left: 10px;
    }

    .filer-item i {
        transition: transform .4s linear;
    }

    .route180 {
        transform: rotate(-180deg);
    }

    .filter-input {
        width: 15px;
        height: 15px;
    }

    .toggle-fiter-wrapper {
        position: relative;
        background-color: white;
    }

    .hide-header-main {
        display: none !important;
    }

    .item-filter:hover {
        color: var(--color-red-main);
    }

    .favorite-category .owl-nav [class*=owl-]:hover {
        color: unset;
        background-color: unset;
    }

    .favorite-category>.owl-nav>.owl-next {
        top: 38%;
        position: absolute;
        right: -40px;
    }

    .favorite-category>.owl-nav>.owl-prev {
        top: 38%;
        position: absolute;
        left: -40px;
    }

    .favorite-category .owl-nav [class*=owl-]:hover {
        color: unset;
        background-color: unset;
    }

    .favorite-category>.owl-nav>.owl-next {
        top: 38%;
        position: absolute;
        right: -40px;
    }

    .favorite-category>.owl-nav>.owl-prev {
        top: 38%;
        position: absolute;
        left: -40px;
    }

    .suggestion-product .owl-nav [class*=owl-]:hover {
        color: unset;
        background-color: unset;
    }

    .suggestion-product>.owl-nav>.owl-next {
        top: 38%;
        position: absolute;
        right: -40px;
    }

    .suggestion-product>.owl-nav>.owl-prev {
        top: 38%;
        position: absolute;
        left: -40px;
    }

    .detail-product .owl-dot.active {
        border: 1px solid black !important;
    }

    .my-thumnail-img {
        width: 90px;
        height: 90px;
    }

    .haved-products i {
        color: var(--color-yellow-main);
    }

    .carpet-icon-animation {
        transition: transform .4s linear;
    }

    .have-animation-carpet {
        transform: rotate(-90deg);
    }

    /* md */
    @media (min-width: 768px) {
        .title-list-products {
            position: absolute;
            top: 50%;
            left: 3%;
            transform: translateY(-50%);
        }
    }

    /* PC */
    @media (min-width: 1400px) {}
</style>

<div style="background-color: #F7F7F7;" class="row px-6 py-5">
    <div class="col-xxl-7 col-12 pe-4">
        <div class="detail-product owl-carousel owl-theme">
            <img src="public/demo/detail-product-1.jpg" alt="" class="img-fluid">
            <img src="public/demo/detail-product-2.jpg" alt="" class="img-fluid">
        </div>
    </div>
    <div class="col-xxl-5 col-12 mt-5 mt-xxl-0">
        <div class="pb-5">
            <p class="sub-title text-uppercase mb-2">
                <a href="index.php?p=listproduct1">
                    Cẩm Thạch </a>

                <span class="btn-add-to-wishlist float-end pointer">
                    <i class="bi bi-heart-half"></i>
                </span>
            </p>
            <h4 class="border-1 border-bottom border-dark pb-3">NHẪN NỮ CẨM THẠCH VÀNG 18K DTNOLVV0100I804</h4>
            <p class="mb-2">GIÁ THAM KHẢO</p>
            <p class="fw-bold mb-4">7.542.450 VNĐ</p>
            <p class="mb-2">Giá tham khảo sẽ thay đổi theo giá vàng, trọng lượng vàng và giá trị viên đá thực tế.</p>
            <!-- Xem them btn -->
            <div class="d-flex flex-wrap mb-4">
                <div class="col-6">
                    <div class="text-center me-1">
                        <a class="btn xem-them-btn text-uppercase text-center py-2 px-3 fw-bolder rounded-0 w-100"
                            href="index.php?p=xemthem">
                            XEM THÊM
                        </a>
                    </div>
                </div>

                <div class="col-6">
                    <div class="text-center ms-1">
                        <a class="btn xem-them-btn text-uppercase text-center py-2 px-3 fw-bolder rounded-0 w-100"
                            href="index.php?p=xemthem">
                            XEM THÊM
                        </a>
                    </div>
                </div>
            </div>

            <p class="border-1 border-bottom border-dark pb-2 pointer btn-see-detail">
                CHI TIẾT <i class="fa-solid fa-caret-down fs-4 carpet-icon-animation ms-1"></i>
            </p>
            <div class="detail-info-product">
                <div class="mb-1">
                    <span>Loại vàng:</span>
                    <span class="float-end">Vàng 18K (750)</span>
                </div>
                <div class="mb-1">
                    <span>Trọng lượng vàng:</span>
                    <span class="float-end">0.85 - 1.05</span>
                </div>
                <div class="mb-1">
                    <span>Đá chính:</span>
                    <span class="float-end">
                        Cẩm Thạch</span>
                </div>
                <div class="mb-1">
                    <span>Màu đá chính:</span>
                    <span class="float-end">
                        Xanh lá</span>
                </div>
                <div class="mb-1">
                    <span>Đá phụ:</span>
                    <span class="float-end">
                        Swarovski</span>
                </div>
                <div class="mb-1">
                    <span>Màu đá phụ:</span>
                    <span class="float-end">
                        Trắng</span>
                </div>
                <div class="mb-1">
                    <span>Hình dạng đá phụ:</span>
                    <span class="float-end">
                        Hình tròn</span>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <a style="color: initial;" href="index.php">Trang Chủ</a> •
            Dòng Trang Sức • <a style="color: initial;" href="index.php?p=listproducts2">Cẩm Thạch</a> • DTNOLVV0100I804
        </div>

    </div>
</div>

<!-- NTJ GỢI Ý -->
<div class="row mt-5 justify-content-center">
    <h2 class="text-center text-red mb-5 fw-bold">NTJ GỢI Ý</h2>

    <div class="col-xxl-10 mb-5">
        <div class="suggestion-product owl-carousel owl-theme">
            <a href="index.php?p=chitietsanpham">
                <div class="jewelry-block position-relative">
                    <div class="background-img-product"></div>
                    <span style="color: initial;" class="btn-add-to-wishlist position-absolute">
                        <i class="bi bi-heart-half"></i>
                    </span>
                    <div style="color: initial;" class="p-3">
                        <div>
                            Nhẫn nam Vàng trắng DVNATTT0100D298
                        </div>
                        <div class="fw-bold">
                            21.522.000 VND
                        </div>
                    </div>
                </div>
            </a>
            <a href="index.php?p=chitietsanpham">
                <div class="jewelry-block position-relative">
                    <div class="background-img-product"></div>
                    <span style="color: initial;" class="btn-add-to-wishlist position-absolute">
                        <i class="bi bi-heart-half"></i>
                    </span>
                    <div style="color: initial;" class="p-3">
                        <div>
                            Nhẫn nam Vàng trắng DVNATTT0100D298
                        </div>
                        <div class="fw-bold">
                            21.522.000 VND
                        </div>
                    </div>
                </div>
            </a>
            <a href="index.php?p=chitietsanpham">
                <div class="jewelry-block position-relative">
                    <div class="background-img-product"></div>
                    <span style="color: initial;" class="btn-add-to-wishlist position-absolute">
                        <i class="bi bi-heart-half"></i>
                    </span>
                    <div style="color: initial;" class="p-3">
                        <div>
                            Nhẫn nam Vàng trắng DVNATTT0100D298
                        </div>
                        <div class="fw-bold">
                            21.522.000 VND
                        </div>
                    </div>
                </div>
            </a>
            <a href="index.php?p=chitietsanpham">
                <div class="jewelry-block position-relative">
                    <div class="background-img-product"></div>
                    <span style="color: initial;" class="btn-add-to-wishlist position-absolute">
                        <i class="bi bi-heart-half"></i>
                    </span>
                    <div style="color: initial;" class="p-3">
                        <div>
                            Nhẫn nam Vàng trắng DVNATTT0100D298
                        </div>
                        <div class="fw-bold">
                            21.522.000 VND
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<!-- DANH MỤC ƯA CHUỘNG -->
<div class="row mt-5 justify-content-center">

    <div class="col-xxl-10 mb-5">
        <h2 class="text-center text-red mb-5 fw-bold border-1 border-top border-danger pt-5">DANH MỤC ƯA CHUỘNG</h2>

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

<script>
    $(document).ready(function () {
        $(".filer-item").click(function () {
            $(".toggle-fiter-wrapper").slideToggle();

            $(".filer-item i").toggleClass("route180");
        });

        $(window).scroll(function () {
            if ($(this).scrollTop() > 551) {
                $('.bar-filter').css({
                    'position': 'fixed', 'top': 0, 'width': '100%', 'z-index': 999, 'background-color': '#fff', 'opacity': '1.0'
                });

                $('.header-main').addClass('hide-header-main');
            }
            else if ($(this).scrollTop() <= 200) {
                $('.bar-filter').css({
                    'position': 'static', 'top': 0, 'width': '100%', 'z-index': 999, 'background-color': '#fff', 'opacity': '1.0'
                });

                $('.header-main').removeClass('hide-header-main');
            }
        });

        $('.suggestion-product').owlCarousel({
            center: false,
            loop: true,
            margin: 0,
            nav: true,
            dots: false,
            margin: 14,
            autoplay: false,
            responsive: {
                0: {
                    items: 1,
                    nav: false,
                    items: 1,
                    stagePadding: 50,
                },
                768: {
                    items: 2,
                    nav: false,
                },
                1400: {
                    items: 3
                }
            }
        });

        $(".suggestion-product .owl-next").html(`<i class="fa-solid fa-caret-right fs-5"></i>`);
        $(".suggestion-product .owl-prev").html(`<i class="fa-solid fa-caret-left fs-5"></i>`);

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
                    stagePadding: 80,
                    margin: 18,
                    nav: false,
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

        $('.detail-product').owlCarousel({
            center: false,
            loop: true,
            margin: 0,
            dots: true,
            margin: 35,
            autoplay: false,
            responsive: {
                0: {
                    items: 1,
                    margin: 18,
                    nav: false,
                },
                768: {
                    items: 1,
                    nav: false,
                },
                1400: {
                    items: 1
                }
            }
        });

        $(".detail-product .owl-next").html(`<i class="fa-solid fa-caret-right fs-1"></i>`);
        $(".detail-product .owl-prev").html(`<i class="fa-solid fa-caret-left fs-1"></i>`);

        $(".detail-product .owl-dot").each(function (index, element) {
            $(element).html(`<img class="img-fluid my-thumnail-img" src="public/demo/detail-product-thumnail-${index + 1}.jpg" alt="">`);
        })

        $(".btn-see-detail").click(function () {
            $(".detail-info-product").slideToggle();

            $(".carpet-icon-animation").toggleClass("have-animation-carpet");
        });
    });
</script>