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

    /* .img-responsive {
        min-height: 250px;
        height: auto;
        object-fit: cover;
    } */

    .title-list-products {}

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
        <h2 class="text-red text-uppercase title-list-products fw-bold">Xu Hướng Mới Nhất</h2>
    </div>
</div>

<div class="row">
    <div class="ps-md-5 ps-2">
        <a href="index.php">Trang Chủ </a>•
        <span>Bộ Sưu Tập Xu •</span>
        <span>Hướng Mới Nhất</span>
    </div>
</div>

<!-- Filter PC and tablet -->
<div class="row justify-content-between bar-filter d-none d-xxl-flex">
    <div class="d-flex flex-wrap border-1 border-bottom border-danger px-5">
        <div class="col-md-1 py-3 pointer filer-item">
            <span class="fw-bolder">BỘ LỌC</span>
        </div>
        <div class="col-md-3 py-3 pointer filer-item">
            <span>Giá thành <i style="vertical-align: text-bottom;" class="fa-solid fa-caret-down ms-2 fs-5"></i></span>
        </div>
        <div class="col-md-4 py-3 pointer filer-item">
            <div class="d-flex flex-wrap align-items-center">
                <div class="col-6">
                    Đá chính <i style="vertical-align: middle;" class="fa-solid fa-caret-down ms-2 fs-5"></i>
                </div>
                <div class="col-5">
                    Loại vàng <i style="vertical-align: middle;" class="fa-solid fa-caret-down ms-2 fs-5"></i>
                </div>
            </div>
        </div>
        <div class="col-md-4 py-3 pointer filer-item">
            <div class="d-flex flex-wrap align-items-center  justify-content-end">
                <div class="col-3">
                    Sắp xếp <i style="vertical-align: middle;" class="fa-solid fa-caret-down ms-2 fs-5"></i>
                </div>
                <div class="col-3 text-end">
                    Mới nhất <i style="vertical-align: middle;" class="fa-solid fa-caret-down ms-2 fs-5"></i>
                </div>
            </div>
        </div>
    </div>

    <div style="display: none;" class="toggle-fiter-wrapper px-5 justify-content-between">
        <div class="d-flex flex-wrap">
            <div class="col-md-1 py-3"></div>
            <div class="col-md-3 py-3 pointer">
                <div class="mb-2">
                    <input class="filter-input" id="price-1" type="checkbox">
                    <label class="item-filter" for="price-1">
                        Dưới 5,000,000 VND
                    </label>
                </div>
                <div class="my-2">
                    <input class="filter-input" id="price-2" type="checkbox">
                    <label class="item-filter" for="price-2">
                        Từ 5,000,000 VND - 15,000,000 VND
                    </label>
                </div>
                <div class="my-2">
                    <input class="filter-input" id="price-3" type="checkbox">
                    <label class="item-filter" for="price-3">
                        Từ 15,000,000 VND - 30,000,000 VND
                    </label>
                </div>
                <div class="my-2">
                    <input class="filter-input" id="price-4" type="checkbox">
                    <label class="item-filter" for="price-4">
                        Từ 15,000,000 VND - 30,000,000 VND
                    </label>
                </div>
                <div class="my-2">
                    <input class="filter-input" id="price-5" type="checkbox">
                    <label class="item-filter" for="price-5">
                        Trên 30,000,000 VND
                    </label>
                </div>
            </div>
            <div class="col-md-2 py-3 pointer">
                <div class="mb-2">
                    <input class="filter-input" id="jewelry-stones-1" type="checkbox">
                    <label class="item-filter" for="jewelry-stones-1">
                        Kim Cương
                    </label>
                </div>
                <div class="my-2">
                    <input class="filter-input" id="jewelry-stones-2" type="checkbox">
                    <label class="item-filter" for="jewelry-stones-2">
                        Ngọc Trai
                    </label>
                </div>
                <div class="my-2">
                    <input class="filter-input" id="jewelry-stones-3" type="checkbox">
                    <label class="item-filter" for="jewelry-stones-3">
                        Cẩm Thạch
                    </label>
                </div>
                <div class="my-2">
                    <input class="filter-input" id="jewelry-stones-4" type="checkbox">
                    <label class="item-filter" for="jewelry-stones-4">
                        Swarovski
                    </label>
                </div>
                <div class="my-2">
                    <input class="filter-input" id="jewelry-stones-5" type="checkbox">
                    <label class="item-filter" for="jewelry-stones-5">
                        Đá Màu Tổng Hợp
                    </label>
                </div>
                <div class="my-2">
                    <input class="filter-input" id="jewelry-stones-6" type="checkbox">
                    <label class="item-filter" for="jewelry-stones-6">
                        Ruby
                    </label>
                </div>
                <div class="my-2">
                    <input class="filter-input" id="jewelry-stones-7" type="checkbox">
                    <label class="item-filter" for="jewelry-stones-7">
                        Sapphire
                    </label>
                </div>
                <div class="my-2">
                    <input class="filter-input" id="jewelry-stones-8" type="checkbox">
                    <label class="item-filter" for="jewelry-stones-8">
                        Đá màu Swarovski
                    </label>
                </div>
                <div class="my-2">
                    <input class="filter-input" id="jewelry-stones-9" type="checkbox">
                    <label class="item-filter" for="jewelry-stones-9">
                        CZ
                    </label>
                </div>
            </div>
            <div class="col-md-4 py-3 pointer">
                <div class="mb-2">
                    <input class="filter-input" id="qualify-1" type="checkbox">
                    <label class="item-filter" for="qualify-1">
                        Dưới 5,000,000 VND
                    </label>
                </div>
                <div class="my-2">
                    <input class="filter-input" id="qualify-2" type="checkbox">
                    <label class="item-filter" for="qualify-2">
                        Từ 5,000,000 VND - 15,000,000 VND
                    </label>
                </div>
                <div class="my-2">
                    <input class="filter-input" id="qualify-3" type="checkbox">
                    <label class="item-filter" for="qualify-3">
                        Từ 15,000,000 VND - 30,000,000 VND
                    </label>
                </div>
                <div class="my-2">
                    <input class="filter-input" id="qualify-4" type="checkbox">
                    <label class="item-filter" for="qualify-4">
                        Từ 15,000,000 VND - 30,000,000 VND
                    </label>
                </div>
            </div>
            <div class="col-md-2 py-3 pointer text-end">
                <div class="text-red">Mới nhất</div>
                <div class="item-filter">Giá Thấp đến Cao</div>
                <div class="item-filter">Giá Cao đến Thấp</div>
            </div>
        </div>

        <div class="d-flex flex-wrap justify-content-between pb-4">
            <div class="text-center">
                <a class="btn xem-them-btn text-uppercase text-center py-2 px-3 fw-bolder rounded-0"
                    href="index.php?p=xemthem">
                    Bỏ chọn
                </a>
            </div>

            <div class="text-center">
                <a class="btn xem-them-btn text-uppercase text-center py-2 px-3 fw-bolder rounded-0"
                    href="index.php?p=xemthem">
                    Áp dụng
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Filter Mobile -->
<div class="row d-flex d-xxl-none mt-4">
    <div class="col-6 text-center">
        <div class="px-5 py-2 border border-dark">Bộ lọc</div>
    </div>
    <div class="col-6 text-center">
        <div class="px-5 py-2 border border-dark">Sắp xếp</div>
    </div>
</div>

<!-- products -->
<div class="row px-md-5 px-2 my-5">
    <div class="d-xxl-flex d-none flex-wrap">
        <div class="col-md-6 pe-2 d-none d-xxl-block">
            <img style="object-fit: cover;" class="img-fluid h-100" src="public/demo/banner_list_product_left.jpg"
                alt="">
        </div>
        <div class="col-xxl-6 col-12">
            <div style="margin-top: -8px; margin-bottom: -8px;" class="d-flex flex-wrap">
                <div class="col-md-6 p-2">
                    <a href="index.php?p=chitietsanpham">
                        <div class="jewelry-block position-relative">
                            <div class="background-img-product"></div>
                            <span style="color: initial;" class="btn-add-to-wishlist position-absolute">
                                <i class="bi bi-heart-half"></i>
                            </span>
                            <span style="color: initial;" class="start-0 top-0 ps-2 pt-2 position-absolute">
                                Mới
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
                <div class="col-md-6 p-2">
                    <a href="index.php?p=chitietsanpham">
                        <div class="jewelry-block position-relative">
                            <div class="background-img-product"></div>
                            <span style="color: initial;" class="btn-add-to-wishlist position-absolute">
                                <i class="bi bi-heart-half"></i>
                            </span>
                            <span style="color: initial;" class="start-0 top-0 ps-2 pt-2 position-absolute">
                                Mới
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
                <div class="col-md-6 p-2">
                    <a href="index.php?p=chitietsanpham">
                        <div class="jewelry-block position-relative">
                            <div class="background-img-product"></div>
                            <span style="color: initial;" class="btn-add-to-wishlist position-absolute">
                                <i class="bi bi-heart-half"></i>
                            </span>
                            <span style="color: initial;" class="start-0 top-0 ps-2 pt-2 position-absolute">
                                Mới
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
                <div class="col-md-6 p-2">
                    <a href="index.php?p=chitietsanpham">
                        <div class="jewelry-block position-relative">
                            <div class="background-img-product"></div>
                            <span style="color: initial;" class="btn-add-to-wishlist position-absolute">
                                <i class="bi bi-heart-half"></i>
                            </span>
                            <span style="color: initial;" class="start-0 top-0 ps-2 pt-2 position-absolute">
                                Mới
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
    <!-- 8 product -->
    <div class="col-xxl-3 col-6 p-md-2 p-1">
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
    <div class="col-xxl-3 col-6 p-md-2 p-1">
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
    <div class="col-xxl-3 col-6 p-md-2 p-1">
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
    <div class="col-xxl-3 col-6 p-md-2 p-1">
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
    <div class="col-xxl-3 col-6 p-md-2 p-1">
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
    <div class="col-xxl-3 col-6 p-md-2 p-1">
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
    <div class="col-xxl-3 col-6 p-md-2 p-1">
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
    <div class="col-xxl-3 col-6 p-md-2 p-1">
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
    <!-- end 8 product -->

    <!--  -->
    <div class="col-xxl-3 col-6 p-md-2 p-1">
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
    <div class="col-xxl-3 col-6 p-md-2 p-1">
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
    <!-- banner right -->
    <div class="col-xxl-6 col-6 p-md-2 p-1">
        <img class="img-fluid h-100" src="public/demo/banner-right-list-product-3.jpg" alt="">
    </div>
    <!-- end banner right -->
    <div class="col-xxl-3 col-6 p-md-2 p-1">
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
    <div class="col-xxl-3 col-6 p-md-2 p-1">
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
    <div class="col-xxl-3 col-6 p-md-2 p-1">
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
    <div class="col-xxl-3 col-6 p-md-2 p-1">
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
    <div class="col-xxl-3 col-6 p-md-2 p-1">
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
    <div class="col-xxl-3 col-6 p-md-2 p-1">
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
    <div class="col-xxl-3 col-6 p-md-2 p-1">
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
    <div class="col-xxl-3 col-6 p-md-2 p-1">
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
    <!-- Banner left -->
    <div class="col-xxl-6 col-6 p-md-2 p-1">
        <img class="img-fluid h-100" src="public/demo/banner-right-list-product-3.jpg" alt="">
    </div>
    <!-- end banner left -->
    <div class="col-xxl-3 col-6 p-md-2 p-1">
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
    <div class="col-xxl-3 col-6 p-md-2 p-1">
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
    <div class="col-xxl-3 col-6 p-md-2 p-1">
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
    <div class="col-xxl-3 col-6 p-md-2 p-1">
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
    <div class="col-xxl-3 col-6 p-md-2 p-1">
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
    <div class="col-xxl-3 col-6 p-md-2 p-1">
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
    <div class="col-xxl-3 col-6 p-md-2 p-1">
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
    <div class="col-xxl-3 col-6 p-md-2 p-1">
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
    <div class="col-xxl-3 col-6 p-md-2 p-1">
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

<!-- Xem them btn -->
<div class="row justify-content-center mb-5">
    <div class="text-center">
        Đang hiển thị 5 / 5 sản phẩm
    </div>
    <div class="text-center">
        <a class="btn xem-them-btn text-uppercase text-center py-2 px-3 fw-bolder rounded-0" href="index.php?p=xemthem">
            XEM THÊM
        </a>
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