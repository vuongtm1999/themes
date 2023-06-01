<style>
    .breadcrumb_background {
        background-image: url(public/demo/bg_breadcrumb.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        margin-bottom: 40px;
        padding-top: 65px;
        padding-bottom: 65px;
    }

    .breadcrumb_background a {
        color: #707070;
    }

    .breadcrumb_background a:hover {
        color: #d5dd02;
    }

    .nav-cate .nav-item:hover>a {
        color: #d5dd02 !important;
    }

    .nav-cate .nav-item:hover>i {
        color: #d5dd02 !important;
    }

    .nav-cate .nav-item a {
        height: initial;
        line-height: initial;
        display: block;
        color: #707070;
        font-size: 14px;
    }

    .nav-cate .nav-item {
        display: block;
        width: 100%;
    }

    .nav-cate .nav-link {
        padding: 8px 0px;
    }

    .icon-nav {
        width: 30px;
        height: 30px;
        display: flex;
        justify-content: center;
        align-items: center;
        position: absolute;
        top: 0;
        right: 0;
        transition: all 0.3s linear;
    }

    .dropdown-menu.news-dropdown {
        display: none;
    }

    .sub-menu {
        padding: 4px 0 10px 20px;
    }

    .route-180 {
        transform: rotate(90deg);
    }

    .filter-group ul {
        max-height: 245px;
        overflow-y: auto;
    }

    .item-filter {
        font-size: 16px;
        color: #707070;
        padding: 5px 5px;
    }

    .item-filter input[type="checkbox"] {
        transform: scale(1.2);
    }

    .item-filter:hover {
        color: var(--color-main);
    }

    .filter-group {
        max-height: 269px;
        overflow-y: auto;
    }

    .filter-group::-webkit-scrollbar-track {
        border-radius: 10px;
        background-color: #fff;
        width: 5px;
    }

    .filter-group::-webkit-scrollbar-thumb {
        border-radius: 10px;
        background-color: #e9edf5;
        width: 5px;
    }

    .filter-group::-webkit-scrollbar {
        width: 5px;
        background-color: #fff;
    }

    .filter-color .fa {
        border-radius: 50%;
        width: 30px;
        height: 30px;
        background: red;
        position: relative;
        margin-right: 10px;
        cursor: pointer;
    }

    .filter-color input:checked+.fa:before {
        display: block;
        content: '\f00c';
        font-family: 'Font Awesome\ 5 Free';
        font-weight: 900;
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        width: auto;
        height: auto !important;
        font-size: 12px;
        color: #fff;
        background: unset;
        border: 0;
    }

    .product-side .product-thumbnail {
        width: 80px !important;
        height: 80px !important;
    }

    .item-product-side:not(:last-child) {
        border-bottom: 1px solid #ebebeb !important;
    }

    .product-side .owl-nav [class*=owl-]:hover {
        color: var(--color-main);
        background-color: unset;
    }

    .product-side>.owl-nav>.owl-next {
        top: -42px;
        position: absolute;
        right: 0px;
    }

    .product-side>.owl-nav>.owl-prev {
        top: -42px;
        position: absolute;
        right: 20px;
    }

    .bi-chevron-left::before {
        font-weight: 900 !important;
    }

    .bi-chevron-right::before {
        font-weight: 900 !important;
    }

    /* product item */
    .my-bg-img {
        background-position: top center;
        background-repeat: no-repeat;
        background-size: cover;
        padding-top: 100%;
    }

    .scale_hover:hover .my-bg-img {
        transform: scale(1.025);
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

    /* end product item */

    /* paggingation */
    .page-link:hover {
        background-color: #d5dd02;
        color: #fff;
        background: #d5dd02;
        font-weight: 400;
    }

    .page-item {
        padding: 0 5px;
    }

    .page-item .page-link {
        background-color: white;
        color: #7d7d7d;
        border-radius: 50%;
        width: 31px;
        height: 31px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .page-item.active .page-link {
        border: 1px solid #d5dd02;
    }

    .page-item.active .page-link {
        background-color: white;
        color: #7d7d7d;
        border-radius: 50%;
    }

    .page-item:last-child .page-link {
        border-top-right-radius: 50% !important;
        border-bottom-right-radius: 50% !important;
    }

    /* paginnation end */



    @media (min-width: 768px) {}

    @media (min-width: 1400px) {
        .blog_left_base {
            padding-right: 68px;
        }

        .right-content:before {
            content: "";
            position: absolute;
            top: 0;
            left: -15px;
            background: #ebebeb;
            width: 1px;
            height: 100%;
        }
    }
</style>

<div class="row breadcrumb_background px-6">
    <div>
        <a href="/"><span>Trang chủ</span></a>
        <span class="mx-3"><i class="fa fa-angle-right"></i></span>
        <strong><span>Sản phẩm nổi bật</span></strong>
    </div>
    <h2 class="fw-bold">Sản phẩm nổi bật</h3>
</div>

<div class="row px-6">
    <div class="col-xxl-4 col-12 blog_left_base order-xxl-1 order-2">
        <h5 class="fw-bold">Danh mục tin tức</h5>
        <ul style="border-bottom: 1px solid #ebebeb;" class="nav d-block nav-cate">
            <li class="nav-item"><a class="nav-link px-0" href="index.php">Trang chủ</a></li>
            <li class="nav-item"><a class="nav-link px-0" href="index.php?p=aboutus">Giới thiệu</a></li>
            <li class="nav-item position-relative">
                <a href="index.php?p=listproducts" class="nav-link d-flex justify-content-between">
                    Sản phẩm
                </a>
                <i data-bs-toggle="collapse" href="#collapseProduct-1" class="fa fa-angle-right icon-nav pointer"></i>
                <div class="collapse" id="collapseProduct-1">
                    <ul class="nav sub-menu">
                        <li class="nav-item position-relative">
                            <a class="nav-link" href="index.php?p=listproducts">Sản phẩm hot</a>
                            <i data-bs-toggle="collapse" href="#collapseProduct-2"
                                class="fa fa-angle-right icon-nav pointer"></i>

                            <div class="collapse" id="collapseProduct-2">
                                <ul class="nav sub-menu">
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?p=listproducts">Đồ dùng nhà bếp</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?p=listproducts">Đồ dùng dọn dẹp</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?p=listproducts">Đồ sứ đẹp</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?p=listproducts">Trang trí - Quà tặng</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?p=listproducts">Sản phẩm mới</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?p=listproducts">Đồ tiện ích thông minh</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?p=listproducts">Đồ dùng nhà bếp</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?p=listproducts">Đồ dùng phòng khách</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?p=listproducts">Đồ dùng phòng ngủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?p=listproducts">Đồ dùng dọn dẹp</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?p=listproducts">Trang trí - Quà tặng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?p=listproducts">Đồ dùng trẻ em</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?p=listproducts">Đồ sứ đẹp</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?p=listproducts">Sản phẩm mua nhiều</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?p=listproducts">Sản phẩm khuyến mãi</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item"><a class="nav-link" href="index.php?p=news">Tin tức</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php?p=contactus">Liên hệ</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php?p=listproducts">Sản phẩm nổi bật</a></li>
        </ul>

        <h5 class="fw-bold my-3"><span>Nhà phân phối</span></h5>
        <div class="filter-group">
            <label class="d-block item-filter" for="filter-danger">
                <input type="checkbox" id="filter-danger">
                <i class="fa"></i>
                <span class="text">Danger</span>
            </label>
            <label class="d-block item-filter" for="filter-fushen">
                <input type="checkbox" id="filter-fushen">
                <i class="fa"></i>
                <span class="text">Fushen</span>
            </label>
            <label class="d-block item-filter" for="filter-justin">
                <input type="checkbox" id="filter-justin">
                <i class="fa"></i>
                <span class="text">Justin</span>
            </label>
            <label class="d-block item-filter" for="filter-kitchen">
                <input type="checkbox" id="filter-kitchen">
                <i class="fa"></i>
                <span class="text">Kitchen</span>
            </label>
            <label class="d-block item-filter" for="filter-LG">
                <input type="checkbox" id="filter-LG">
                <i class="fa"></i>
                <span class="text">LG</span>
            </label>
            <label class="d-block item-filter" for="filter-Lock&Lock">
                <input type="checkbox" id="filter-Lock&Lock">
                <i class="fa"></i>
                <span class="text">Lock&Lock</span>
            </label>
            <label class="d-block item-filter" for="filter-luxury">
                <input type="checkbox" id="filter-luxury">
                <i class="fa"></i>
                <span class="text">Luxury</span>
            </label>
            <label class="d-block item-filter" for="filter-samsung">
                <input type="checkbox" id="filter-samsung">
                <i class="fa"></i>
                <span class="text">Samsung</span>
            </label>
            <label class="d-block item-filter" for="filter-toshiba">
                <input type="checkbox" id="filter-toshiba">
                <i class="fa"></i>
                <span class="text">Toshiba</span>
            </label>
            <label class="d-block item-filter" for="filter-us">
                <input type="checkbox" id="filter-us">
                <i class="fa"></i>
                <span class="text">US</span>
            </label>
        </div>

        <h5 class="fw-bold my-3"><span>Nhà phân phối</span></h5>
        <div class="filter-group">
            <label class="d-block item-filter" for="filter-duoi-100-000d">
                <input type="checkbox" id="filter-duoi-100-000d">
                <i class="fa"></i>
                <span class="text">
                    Giá dưới 100.000đ
                </span>
            </label>
            <label class="d-block item-filter" for="filter-100-000d-200-000d">
                <input type="checkbox" id="filter-100-000d-200-000d">
                <i class="fa"></i>
                <span class="text">100.000đ - 200.000đ</span>
            </label>
            <label class="d-block item-filter" for="filter-200-000d-300-000d">
                <input type="checkbox" id="filter-200-000d-300-000d">
                <i class="fa"></i>
                <span class="text">
                    200.000đ - 300.000đ
                </span>
            </label>
            <label class="d-block item-filter" for="filter-300-000d-500-000d">
                <input type="checkbox" id="filter-300-000d-500-000d">
                <i class="fa"></i>
                <span class="text">300.000đ - 500.000đ</span>
            </label>
            <label class="d-block item-filter" for="filter-500-000d-1-000-000d">
                <input type="checkbox" id="filter-500-000d-1-000-000d">
                <i class="fa"></i>
                <span class="text">
                    500.000đ - 1.000.000đ
                </span>
            </label>
            <label class="d-block item-filter" for="filter-tren1-000-000d">
                <input type="checkbox" id="filter-tren1-000-000d">
                <i class="fa"></i>
                <span class="text">Trên 1.000.000đ</span>
            </label>
        </div>

        <h5 class="fw-bold my-3"><span>Màu sắc</span></h5>

        <div class="filter-group">
            <label class="filter-color" for="filter-vang">
                <input type="checkbox" id="filter-vang" hidden>
                <i class="fa vang" style="background-color:#F1C40F;"></i>
            </label>
            <label class="filter-color" for="filter-tim">
                <input type="checkbox" id="filter-tim" hidden>
                <i class="fa vang" style="background-color:#9B59B6;"></i>
            </label>
            <label class="filter-color" for="filter-do">
                <input type="checkbox" id="filter-do" hidden>
                <i class="fa vang" style="background-color:#E74C3C;"></i>
            </label>

            <label class="filter-color" for="filter-xanh">
                <input type="checkbox" id="filter-xanh" hidden>
                <i class="fa vang" style="background-color:#2ECC71;"></i>
            </label>
            <label class="filter-color" for="filter-hong">
                <input type="checkbox" id="filter-hong" hidden>
                <i class="fa vang" style="background-color:#FF00CC;"></i>
            </label>
            <label class="filter-color" for="filter-cam">
                <input type="checkbox" id="filter-cam" hidden>
                <i class="fa vang" style="background-color:#E67E22;"></i>
            </label>
        </div>

        <h5 class="fw-bold my-3">Sản phẩm cùng loại</h5>
        <div class="product-side owl-carousel owl-theme">
            <div class="products-group">
                <div class="d-flex flex-wrap align-items-center item-product-side pb-2 mb-2">
                    <div class="product-thumbnail position-relative scale_hover">
                        <a href="index.php?p=detailproduct">
                            <img class="img-fluid" src="public/demo/header-product-1.png" alt="">
                        </a>
                    </div>
                    <div class="product-info">
                        <h6 style="font-size: 14px;" class="line-2">
                            <a class="text-black-50" href="index.php?p=detailproduct"
                                title="Máy đánh trứng cao cấp Lock & Lock">
                                Máy đánh trứng cao cấp Lock & Lock
                            </a>
                        </h6>
                        <div class="price-box">
                            150.000₫
                            <del class="small text-muted ms-1">160.000₫</del>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-wrap align-items-center item-product-side pb-2 mb-2">
                    <div class="product-thumbnail position-relative scale_hover">
                        <a href="index.php?p=detailproduct">
                            <img class="img-fluid" src="public/demo/header-product-2.png" alt="">
                        </a>
                    </div>
                    <div class="product-info">
                        <h6 style="font-size: 14px;" class="line-2">
                            <a class="text-black-50" href="index.php?p=detailproduct"
                                title="Máy đánh trứng cao cấp Lock & Lock">
                                Máy đánh trứng cao cấp Lock & Lock
                            </a>
                        </h6>
                        <div class="price-box">
                            150.000₫
                            <del class="small text-muted ms-1">160.000₫</del>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-wrap align-items-center item-product-side pb-2 mb-2">
                    <div class="product-thumbnail position-relative scale_hover">
                        <a href="index.php?p=detailproduct">
                            <img class="img-fluid" src="public/demo/header-product-3.png" alt="">
                        </a>
                    </div>
                    <div class="product-info">
                        <h6 style="font-size: 14px;" class="line-2">
                            <a class="text-black-50" href="index.php?p=detailproduct"
                                title="Máy đánh trứng cao cấp Lock & Lock">
                                Máy đánh trứng cao cấp Lock & Lock
                            </a>
                        </h6>
                        <div class="price-box">
                            150.000₫
                            <del class="small text-muted ms-1">160.000₫</del>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-wrap align-items-center item-product-side pb-2 mb-2">
                    <div class="product-thumbnail position-relative scale_hover">
                        <a href="index.php?p=detailproduct">
                            <img class="img-fluid" src="public/demo/header-product-3.png" alt="">
                        </a>
                    </div>
                    <div class="product-info">
                        <h6 style="font-size: 14px;" class="line-2">
                            <a class="text-black-50" href="index.php?p=detailproduct"
                                title="Máy đánh trứng cao cấp Lock & Lock">
                                Máy đánh trứng cao cấp Lock & Lock
                            </a>
                        </h6>
                        <div class="price-box">
                            150.000₫
                            <del class="small text-muted ms-1">160.000₫</del>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-wrap align-items-center item-product-side pb-2 mb-2">
                    <div class="product-thumbnail position-relative scale_hover">
                        <a href="index.php?p=detailproduct">
                            <img class="img-fluid" src="public/demo/header-product-3.png" alt="">
                        </a>
                    </div>
                    <div class="product-info">
                        <h6 style="font-size: 14px;" class="line-2">
                            <a class="text-black-50" href="index.php?p=detailproduct"
                                title="Máy đánh trứng cao cấp Lock & Lock">
                                Máy đánh trứng cao cấp Lock & Lock
                            </a>
                        </h6>
                        <div class="price-box">
                            150.000₫
                            <del class="small text-muted ms-1">160.000₫</del>
                        </div>
                    </div>
                </div>
            </div>
            <div class="products-group">
                <div class="d-flex flex-wrap align-items-center item-product-side pb-2 mb-2">
                    <div class="product-thumbnail position-relative scale_hover">
                        <a href="index.php?p=detailproduct">
                            <img class="img-fluid" src="public/demo/header-product-1.png" alt="">
                        </a>
                    </div>
                    <div class="product-info">
                        <h6 style="font-size: 14px;" class="line-2">
                            <a class="text-black-50" href="index.php?p=detailproduct"
                                title="Máy đánh trứng cao cấp Lock & Lock">
                                Máy đánh trứng cao cấp Lock & Lock
                            </a>
                        </h6>
                        <div class="price-box">
                            150.000₫
                            <del class="small text-muted ms-1">160.000₫</del>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-wrap align-items-center item-product-side pb-2 mb-2">
                    <div class="product-thumbnail position-relative scale_hover">
                        <a href="index.php?p=detailproduct">
                            <img class="img-fluid" src="public/demo/header-product-2.png" alt="">
                        </a>
                    </div>
                    <div class="product-info">
                        <h6 style="font-size: 14px;" class="line-2">
                            <a class="text-black-50" href="index.php?p=detailproduct"
                                title="Máy đánh trứng cao cấp Lock & Lock">
                                Máy đánh trứng cao cấp Lock & Lock
                            </a>
                        </h6>
                        <div class="price-box">
                            150.000₫
                            <del class="small text-muted ms-1">160.000₫</del>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-wrap align-items-center item-product-side pb-2 mb-2">
                    <div class="product-thumbnail position-relative scale_hover">
                        <a href="index.php?p=detailproduct">
                            <img class="img-fluid" src="public/demo/header-product-3.png" alt="">
                        </a>
                    </div>
                    <div class="product-info">
                        <h6 style="font-size: 14px;" class="line-2">
                            <a class="text-black-50" href="index.php?p=detailproduct"
                                title="Máy đánh trứng cao cấp Lock & Lock">
                                Máy đánh trứng cao cấp Lock & Lock
                            </a>
                        </h6>
                        <div class="price-box">
                            150.000₫
                            <del class="small text-muted ms-1">160.000₫</del>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-wrap align-items-center item-product-side pb-2 mb-2">
                    <div class="product-thumbnail position-relative scale_hover">
                        <a href="index.php?p=detailproduct">
                            <img class="img-fluid" src="public/demo/header-product-3.png" alt="">
                        </a>
                    </div>
                    <div class="product-info">
                        <h6 style="font-size: 14px;" class="line-2">
                            <a class="text-black-50" href="index.php?p=detailproduct"
                                title="Máy đánh trứng cao cấp Lock & Lock">
                                Máy đánh trứng cao cấp Lock & Lock
                            </a>
                        </h6>
                        <div class="price-box">
                            150.000₫
                            <del class="small text-muted ms-1">160.000₫</del>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-wrap align-items-center item-product-side pb-2 mb-2">
                    <div class="product-thumbnail position-relative scale_hover">
                        <a href="index.php?p=detailproduct">
                            <img class="img-fluid" src="public/demo/header-product-3.png" alt="">
                        </a>
                    </div>
                    <div class="product-info">
                        <h6 style="font-size: 14px;" class="line-2">
                            <a class="text-black-50" href="index.php?p=detailproduct"
                                title="Máy đánh trứng cao cấp Lock & Lock">
                                Máy đánh trứng cao cấp Lock & Lock
                            </a>
                        </h6>
                        <div class="price-box">
                            150.000₫
                            <del class="small text-muted ms-1">160.000₫</del>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xxl-8 col-12 right-content position-relative order-xxl-2 order-1 mb-5">
        <div class="px-2 pb-3 border-bottom d-flex flex-wrap align-items-center">
            <h6 class="mb-0 me-2">Ưu tiên xem:</h6>
            <div class="d-flex">
                <label class="d-flex align-items-center item-filter" for="filter-luxury">
                    <input class="me-2" type="checkbox" id="filter-luxury">
                    <i class="fa"></i>
                    <span class="text">Hàng mới về</span>
                </label>
                <label class="d-flex align-items-center item-filter" for="filter-luxury">
                    <input class="me-2" type="checkbox" id="filter-luxury">
                    <i class="fa"></i>
                    <span class="text">Hàng cũ nhất</span>
                </label>
                <label class="d-flex align-items-center item-filter" for="filter-luxury">
                    <input class="me-2" type="checkbox" id="filter-luxury">
                    <i class="fa"></i>
                    <span class="text">Giá tăng dần</span>
                </label>
                <label class="d-flex align-items-center item-filter" for="filter-luxury">
                    <input class="me-2" type="checkbox" id="filter-luxury">
                    <i class="fa"></i>
                    <span class="text">Giá giảm dần</span>
                </label>
            </div>
        </div>

        <div class="row pt-2 gx-3 gy-3">
            <div class="col-xxl-3 col-md-4 col-6">
                <div class="item-info-product">
                    <div class="position-relative">
                        <a href="index.php?p=detailproduct">
                            <div class="my-bg-img" style="background-image: url(public/demo/product-thumnail.png);">
                            </div>
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

                                <input class="hidden" type="hidden" name="variantId" value="21894984">
                            </button><button class="btn btn-cart btn btn-views left-to" title="Tuỳ chọn" type="button"
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
            <div class="col-xxl-3 col-md-4 col-6">
                <div class="item-info-product">
                    <div class="position-relative">
                        <a href="index.php?p=detailproduct">
                            <div class="my-bg-img" style="background-image: url(public/demo/product-thumnail-2.png);">
                            </div>
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

                                <input class="hidden" type="hidden" name="variantId" value="21894984">
                            </button><button class="btn btn-cart btn btn-views left-to" title="Tuỳ chọn" type="button"
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
            <div class="col-xxl-3 col-md-4 col-6">
                <div class="item-info-product">
                    <div class="position-relative">
                        <a href="index.php?p=detailproduct">
                            <div class="my-bg-img" style="background-image: url(public/demo/product-thumnail-3.png);">
                            </div>
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

                                <input class="hidden" type="hidden" name="variantId" value="21894984">
                            </button><button class="btn btn-cart btn btn-views left-to" title="Tuỳ chọn" type="button"
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
            <div class="col-xxl-3 col-md-4 col-6">
                <div class="item-info-product">
                    <div class="position-relative">
                        <a href="index.php?p=detailproduct">
                            <div class="my-bg-img" style="background-image: url(public/demo/product-thumnail-4.png);">
                            </div>
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

                                <input class="hidden" type="hidden" name="variantId" value="21894984">
                            </button><button class="btn btn-cart btn btn-views left-to" title="Tuỳ chọn" type="button"
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
            <div class="col-xxl-3 col-md-4 col-6">
                <div class="item-info-product">
                    <div class="position-relative">
                        <a href="index.php?p=detailproduct">
                            <div class="my-bg-img" style="background-image: url(public/demo/product-thumnail-4.png);">
                            </div>
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

                                <input class="hidden" type="hidden" name="variantId" value="21894984">
                            </button><button class="btn btn-cart btn btn-views left-to" title="Tuỳ chọn" type="button"
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
            <div class="col-xxl-3 col-md-4 col-6">
                <div class="item-info-product">
                    <div class="position-relative">
                        <a href="index.php?p=detailproduct">
                            <div class="my-bg-img" style="background-image: url(public/demo/product-thumnail.png);">
                            </div>
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

                                <input class="hidden" type="hidden" name="variantId" value="21894984">
                            </button><button class="btn btn-cart btn btn-views left-to" title="Tuỳ chọn" type="button"
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
            <div class="col-xxl-3 col-md-4 col-6">
                <div class="item-info-product">
                    <div class="position-relative">
                        <a href="index.php?p=detailproduct">
                            <div class="my-bg-img" style="background-image: url(public/demo/product-thumnail-2.png);">
                            </div>
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

                                <input class="hidden" type="hidden" name="variantId" value="21894984">
                            </button><button class="btn btn-cart btn btn-views left-to" title="Tuỳ chọn" type="button"
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
            <div class="col-xxl-3 col-md-4 col-6">
                <div class="item-info-product">
                    <div class="position-relative">
                        <a href="index.php?p=detailproduct">
                            <div class="my-bg-img" style="background-image: url(public/demo/product-thumnail-3.png);">
                            </div>
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

                                <input class="hidden" type="hidden" name="variantId" value="21894984">
                            </button><button class="btn btn-cart btn btn-views left-to" title="Tuỳ chọn" type="button"
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
            <div class="col-xxl-3 col-md-4 col-6">
                <div class="item-info-product">
                    <div class="position-relative">
                        <a href="index.php?p=detailproduct">
                            <div class="my-bg-img" style="background-image: url(public/demo/product-thumnail-4.png);">
                            </div>
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

                                <input class="hidden" type="hidden" name="variantId" value="21894984">
                            </button><button class="btn btn-cart btn btn-views left-to" title="Tuỳ chọn" type="button"
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
            <div class="col-xxl-3 col-md-4 col-6">
                <div class="item-info-product">
                    <div class="position-relative">
                        <a href="index.php?p=detailproduct">
                            <div class="my-bg-img" style="background-image: url(public/demo/product-thumnail-4.png);">
                            </div>
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

                                <input class="hidden" type="hidden" name="variantId" value="21894984">
                            </button><button class="btn btn-cart btn btn-views left-to" title="Tuỳ chọn" type="button"
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

            <div class="col-12">
                <ul class="pagination justify-content-end my-4">
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function () {
        $('.icon-nav').click(function () {
            $(this).toggleClass('route-180');
        });

        $('.viewed-product').owlCarousel({
            center: false,
            loop: true,
            margin: 0,
            dots: false,
            nav: true,
            items: 6,
            margin: 10,
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

        $(".product-side .owl-next").html(`<i class="bi bi-chevron-right fs-6 fw-bold"></i>`);
        $(".product-side .owl-prev").html(`<i class="bi bi-chevron-left fs-6 fw-bold"></i>`);

        $('.viewed-product').owlCarousel({
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
    });
</script>