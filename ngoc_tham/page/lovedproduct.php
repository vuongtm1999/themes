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

    .haved-products i {
        color: var(--color-yellow-main);
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


<div class="row justify-content-center">
    <div class="px-0 position-relative">
        <img class="img-fluid img-responsive" src="public/demo/list-product-banner.jpg" alt="">
        <h2 class="text-red text-uppercase title-list-products fw-bold">Danh sách yêu thích</h2>
    </div>
</div>

<div class="row justify-content-center">
    <!-- Have not products -->
    <div class="col-10 border-1 border-bottom border-danger d-none">
        <h4 class="text-center fw-bold py-4">CHƯA CÓ SẢN PHẨM NÀO TRONG DANH SÁCH YÊU THÍCH CỦA BẠN</h3>
    </div>
    <!-- have products -->
    <div class="col-10 border-1 border-bottom border-danger">
        <div class="d-flex flex-wrap py-3">
            <!-- have products -->
            <div class="col-xxl-4 col-6 p-md-2 p-1 haved-products">
                <a href="index.php?p=chitietsanpham">
                    <div class="jewelry-block position-relative">
                        <div class="background-img-product"></div>
                        <span style="color: initial;" class="btn-add-to-wishlist position-absolute">
                            <i class="bi bi-heart-half"></i>
                        </span>
                        <div style="color: initial;" class="p-3">
                            <div>
                                Nhẫn nam Vàng trắng
                            </div>
                            <div>
                                DVNATTT0100D298
                            </div>
                            <div class="fw-bold">
                                21.522.000 VND
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xxl-4 col-6 p-md-2 p-1 haved-products">
                <a href="index.php?p=chitietsanpham">
                    <div class="jewelry-block position-relative">
                        <div class="background-img-product"></div>
                        <span style="color: initial;" class="btn-add-to-wishlist position-absolute">
                            <i class="bi bi-heart-half"></i>
                        </span>
                        <div style="color: initial;" class="p-3">
                            <div>
                                Nhẫn nam Vàng trắng
                            </div>
                            <div>
                                DVNATTT0100D298
                            </div>
                            <div class="fw-bold">
                                21.522.000 VND
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xxl-4 col-6 p-md-2 p-1 haved-products">
                <a href="index.php?p=chitietsanpham">
                    <div class="jewelry-block position-relative">
                        <div class="background-img-product"></div>
                        <span style="color: initial;" class="btn-add-to-wishlist position-absolute">
                            <i class="bi bi-heart-half"></i>
                        </span>
                        <div style="color: initial;" class="p-3">
                            <div>
                                Nhẫn nam Vàng trắng
                            </div>
                            <div>
                                DVNATTT0100D298
                            </div>
                            <div class="fw-bold">
                                21.522.000 VND
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xxl-4 col-6 p-md-2 p-1 haved-products">
                <a href="index.php?p=chitietsanpham">
                    <div class="jewelry-block position-relative">
                        <div class="background-img-product"></div>
                        <span style="color: initial;" class="btn-add-to-wishlist position-absolute">
                            <i class="bi bi-heart-half"></i>
                        </span>
                        <div style="color: initial;" class="p-3">
                            <div>
                                Nhẫn nam Vàng trắng
                            </div>
                            <div>
                                DVNATTT0100D298
                            </div>
                            <div class="fw-bold">
                                21.522.000 VND
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xxl-4 col-6 p-md-2 p-1 haved-products">
                <a href="index.php?p=chitietsanpham">
                    <div class="jewelry-block position-relative">
                        <div class="background-img-product"></div>
                        <span style="color: initial;" class="btn-add-to-wishlist position-absolute">
                            <i class="bi bi-heart-half"></i>
                        </span>
                        <div style="color: initial;" class="p-3">
                            <div>
                                Nhẫn nam Vàng trắng
                            </div>
                            <div>
                                DVNATTT0100D298
                            </div>
                            <div class="fw-bold">
                                21.522.000 VND
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xxl-4 col-6 p-md-2 p-1 haved-products">
                <a href="index.php?p=chitietsanpham">
                    <div class="jewelry-block position-relative">
                        <div class="background-img-product"></div>
                        <span style="color: initial;" class="btn-add-to-wishlist position-absolute">
                            <i class="bi bi-heart-half"></i>
                        </span>
                        <div style="color: initial;" class="p-3">
                            <div>
                                Nhẫn nam Vàng trắng
                            </div>
                            <div>
                                DVNATTT0100D298
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
</div>

<!-- DANH MỤC ƯA CHUỘNG -->
<div class="row mt-5 justify-content-center">
    <h2 class="text-center text-red mb-5 fw-bold">DANH MỤC ƯA CHUỘNG</h2>

    <div class="col-xxl-10 mb-5">
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
    });
</script>