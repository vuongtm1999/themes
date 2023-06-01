<style>
    .breadcrumbs {
        box-shadow: 0 1px 2px 0 rgba(60, 64, 67, 0.1), 0 2px 6px 2px rgba(60, 64, 67, 0.15)
    }

    .breadcrumbs a {
        color: #000;
    }

    .breadcrumbs a:hover {
        color: var(--mainColor);
    }

    .banner-slider.owl-carousel>.owl-nav>.owl-prev {
        width: 34px;
        height: 50px;
        transition: .3s;
        outline: none;
        opacity: .9;
        padding-left: 7px;
        border-radius: 0 100px 100px 0;
        background: #f7f7f7;
        box-shadow: 0 0 4px 0 rgb(0 0 0 / 20%);
        position: absolute;
        top: 50%;
        transform: translateY(-60%);
        left: 0;
        margin: 0;
    }

    .banner-slider.owl-carousel>.owl-nav>.owl-next {
        width: 34px;
        height: 50px;
        transition: .3s;
        outline: none;
        opacity: .9;
        padding-left: 7px;
        border-radius: 100px 0 0 100px;
        background: #f7f7f7;
        box-shadow: 0 0 4px 0 rgb(0 0 0 / 20%);
        position: absolute;
        top: 50%;
        transform: translateY(-60%);
        right: 0;
        margin: 0;
    }

    .banner-slider .owl-nav [class*=owl-]:hover {
        color: var(--mainColor);
        background-color: #f7f7f7;
    }

    .ratio1by6 {
        padding-bottom: calc(100%/6);
    }

    .nav-item>a {
        transition: 0.3s all ease;
    }

    .nav-item:hover>a {
        background: var(--mainColor);
        border-radius: 20px;
        filter: hue-rotate(17deg) contrast(1.2);
    }

    .filter-selected {
        background: var(--mainColor);
    }

    .filter-selected:hover {
        background: #7c7c7c;
    }

    .btn-primary {
        transition: all 0.5s;
        color: #fff;
        background-color: var(--mainColor);
        border-color: var(--mainColor);
    }

    .btn-primary:hover {
        background-color: var(--mainColor2);
        border-color: var(--mainColor2);
    }

    .filter-item {
        background: #fbfbfb;
        transition: all 0.3s ease;
    }

    .filter-item:hover {
        color: var(--mainColor);
        border: 1px solid var(--mainColor) !important;
    }

    .filter-item.active {
        color: var(--mainColor);
        border: 1px solid var(--mainColor) !important;
    }

    .filter-group {
        max-height: 155px;
        overflow-y: auto;
    }

    .filter-group::-webkit-scrollbar {
        width: 2px;
        background-color: #F5F5F5;
    }

    .filter-group::-webkit-scrollbar-thumb {
        border-radius: 6px;
        background-image: -webkit-gradient(linear, left bottom, left top, color-stop(0.44, var(--mainColor)), color-stop(0.72, var(--mainColor)), color-stop(0.86, var(--mainColor)));
    }

    .filter-group::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        background-color: #F5F5F5;
        border-radius: 6px;
    }

    .title-head:before {
        content: '';
        position: absolute;
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 0 5px 5px 0;
        border-color: transparent var(--accentColor2) transparent transparent;
        bottom: -5px;
        left: 0px;
        filter: brightness(0.8);
    }

    .title-head {
        background: var(--mainColor);
        color: #fff;
        border-top-right-radius: 40px;
        border-bottom-right-radius: 40px;
        margin-left: -3px;
    }

    .img-thumb {
        min-width: 100px;
        max-width: 100px;
    }

    .line_3 {
        display: -webkit-box;
        overflow: hidden;
        -webkit-box-orient: vertical;
        word-break: break-word;
        -webkit-line-clamp: 3;
        height: calc(21px* 3);
        line-height: 21px;
    }

    .sale-label {
        top: 5px;
        left: -5px;
        color: #ffffff;
        background: var(--accentColor2);
        padding: 4px 6px;
        z-index: 2;
        font-size: 12px;
        border-top-left-radius: 5px;
        border-top-right-radius: 13px;
        border-bottom-right-radius: 13px;
        box-shadow: 0px 0px 5px 1px #fff;
    }

    .sale-label:after {
        content: '';
        position: absolute;
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 0 5px 5px 0;
        border-color: transparent var(--accentColor2) transparent transparent;
        bottom: -5px;
        left: 0px;
        filter: brightness(0.8);
    }

    .zoom-img {
        transition: .8s ease-out;
        will-change: transform;
    }

    .zoom-img:hover {
        transform: scale(1.1);
    }

    .product-item .item-title a {
        color: var(--textColor);
        transition: 0.4s color;
        font-size: 1rem;
    }

    .compare-label input[type=checkbox]+.compare-checkbox {
        width: 14px;
        height: 14px;
        display: inline-block;
        border: 1px solid #8f8f9d;
        transition: all 0.3s ease;
    }

    .compare-label input[type=checkbox]:checked+.compare-checkbox {
        background-image: url(public/demo/checked_filter.png);
        background-repeat: no-repeat;
        background-position: center;
        background-color: var(--mainColor);
        background-size: 10px;
        border-color: var(--mainColor);
        transition: all 0.3s ease;
    }

    .product-item:hover .btn {
        opacity: 1;
        visibility: visible;
        right: 0;
    }

    .item-product-info .btn {
        display: none !important;
    }

    .item-product-info .btn:hover {
        background: var(--mainColor2);
    }

    .rte h2 {
        border-left: 2px solid var(--mainColor);
        padding-left: 10px;
        color: var(--mainColor);
        font-size: 20px;
        margin-bottom: 10px;
    }

    .content_coll {
        max-height: 280px;
        overflow: hidden;
    }

    .bg_cl {
        height: 150px;
        bottom: 0;
        background: linear-gradient(#ffffff00, #fff);
    }

    @keyframes m_more {
        50% {
            transform: translateY(7px)
        }
    }

    @keyframes m_less {
        50% {
            transform: rotate(180deg) translateY(-7px);
        }
    }

    .two img {
        transform: rotate(180deg);
    }

    .m_less {
        animation: m_less infinite 2s ease-in-out;
    }

    .m_more {
        animation: m_more infinite 2s ease-in-out;
    }




    @media (min-width: 768px) {}

    @media (min-width: 1400px) {
        /* Khong bi overflow khi vao tablet va mobile */
        .item-product-info .btn {
            min-width: 40px;
            height: 40px;
            background: var(--mainColor);
            position: absolute;
            top: -45px;
            right: -41px;
            opacity: 0;
            visibility: hidden;
            transition: 0.3s all ease;
            display: none;
        }
    }
</style>

<div class="row breadcrumbs position-relative">
    <div class="d-flex px-6 py-2">
        <span>
            <a href="index.php" title="Trang chủ">
                <i style="color: var(--mainColor);" class="bi bi-house"></i>
                Trang chủ
            </a>
        </span>
        <span class="mx-2">/</span>
        <span>
            Điện thoại
        </span>
    </div>
</div>

<div class="row bg-primary px-6">
    <div class="bg-white p-3 rounded my-3">
        <div class="banner-slider owl-carousel owl-theme px-0">
            <div class="bg-img-main rounded ratio1by6" style="background-image: url(public/demo/bn-iphone-1.jpg);">
            </div>
            <div class="bg-img-main rounded ratio1by6" style="background-image: url(public/demo/bn-iphone-2.jpg);">
            </div>
            <div class="bg-img-main rounded ratio1by6" style="background-image: url(public/demo/bn-iphone-1.jpg);">
            </div>
            <div class="bg-img-main rounded ratio1by6" style="background-image: url(public/demo/bn-iphone-2.jpg);">
            </div>
        </div>

        <div class="d-xxl-flex d-none flex-wrap">
            <div style="background-color: #FFA293;" class="rounded w-100">
                <ul class="nav-item navbar-pills d-flex flex-wrap rounded-10 p-2 list-unstyled mb-0">
                    <li class="nav-item">
                        <a title="Điện thoại" class="nav-link fw-bold text-white" href="index.php?p=listproducts">
                            Điện thoại
                        </a>
                    </li>
                    <li class="nav-item">
                        <a title="Smart watch" class="nav-link fw-bold text-white" href="index.php?p=listproducts">
                            Smart watch
                        </a>
                    </li>
                    <li class="nav-item">
                        <a title="Loa" class="nav-link fw-bold text-white" href="index.php?p=listproducts">
                            Loa
                        </a>
                    </li>
                    <li class="nav-item">
                        <a title="Smart watch" class="nav-link fw-bold text-white" href="index.php?p=listproducts">
                            Smart watch
                        </a>
                    </li>
                    <li class="nav-item">
                        <a title="Điện thoại" class="nav-link fw-bold text-white" href="index.php?p=listproducts">
                            Điện thoại
                        </a>
                    </li>
                    <li class="nav-item">
                        <a title="Smart watch" class="nav-link fw-bold text-white" href="index.php?p=listproducts">
                            Smart watch
                        </a>
                    </li>
                    <li class="nav-item">
                        <a title="Điện thoại" class="nav-link fw-bold text-white" href="index.php?p=listproducts">
                            Điện thoại
                        </a>
                    </li>
                    <li class="nav-item">
                        <a title="Smart watch" class="nav-link fw-bold text-white" href="index.php?p=listproducts">
                            Smart watch
                        </a>
                    </li>
                    <li class="nav-item">
                        <a title="Smart watch" class="nav-link fw-bold text-white" href="index.php?p=listproducts">
                            Smart watch
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row pt-3 gx-5">
            <div class="col-xxl-3 col-12 d-xxl-block d-none">
                <div>
                    <div class="rounded p-2" style="background-color: #FFA293;">
                        <p class="mb-1">
                            <b class="text-white">Lọc theo:</b>
                        </p>
                        <div class="d-flex flex-wrap">
                            <div class="filter-selected px-2 py-1 me-2 mb-1 rounded">
                                <a class="d-flex align-items-center text-white" href="#">
                                    Samsung
                                    <span class="ms-1">
                                        <i class="bi bi-x-circle"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="filter-selected px-2 py-1 me-2 mb-1 rounded">
                                <a class="d-flex align-items-center text-white" href="#">
                                    Xiaomi
                                    <span class="ms-1">
                                        <i class="bi bi-x-circle"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="filter-selected px-2 py-1 me-2 mb-1 rounded">
                                <a class="d-flex align-items-center text-white" href="#">
                                    Android
                                    <span class="ms-1">
                                        <i class="bi bi-x-circle"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="filter-selected px-2 py-1 me-2 mb-1 rounded">
                                <a class="d-flex align-items-center text-white" href="#">
                                    Xoá hết
                                </a>
                            </div>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-3">
                        <p class="text-main fw-bold fs-6 mb-1">Lọc giá</p>
                        <div class="row">
                            <div class="col-6">
                                <input type="text" id="filter-khoanggia-tu" class="form-control rounded pr-0" value=""
                                    placeholder="Giá tối thiểu">
                            </div>
                            <div class="col-6">
                                <input type="text" id="filter-khoanggia-den" class="form-control rounded pr-0" value=""
                                    placeholder="Giá tối đa">
                            </div>
                            <div class="mt-2">
                                <button type="submit" title="Submit"
                                    class="rounded-10 modal-open position-relative book-submit btn btn-primary text-center d-flex align-items-center font-weight-bold subml">Gửi
                                    liên hệ</button>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3">
                        <p class="text-main fw-bold fs-6 mb-1">Thương hiệu</p>
                        <div class="row gx-3 gy-2">
                            <div class="col-6">
                                <div class="filter-item active pointer px-3 py-1 rounded border">Apple</div>
                            </div>
                            <div class="col-6">
                                <div class="filter-item pointer px-3 py-1 rounded border">Apple</div>
                            </div>
                            <div class="col-6">
                                <div class="filter-item pointer px-3 py-1 rounded border">Apple</div>
                            </div>
                            <div class="col-6">
                                <div class="filter-item pointer px-3 py-1 rounded border">Xiaomi</div>
                            </div>
                            <div class="col-6">
                                <div class="filter-item pointer px-3 py-1 rounded border">Xiaomi</div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3">
                        <p class="text-main fw-bold fs-6 mb-1">Loại</p>
                        <div class="d-flex flex-wrap gap-1">
                            <div>
                                <div class="filter-item active pointer px-3 py-1 rounded border">Android</div>
                            </div>
                            <div>
                                <div class="filter-item pointer px-3 py-1 rounded border">Điện thoại phổ thông</div>
                            </div>
                            <div>
                                <div class="filter-item pointer px-3 py-1 rounded border">Apple</div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3">
                        <p class="text-main fw-bold fs-6 mb-1">Kiểu màn hình</p>
                        <div class="d-flex flex-wrap gap-1">
                            <div>
                                <div class="filter-item active pointer px-3 py-1 rounded border">Tai thỏ</div>
                            </div>
                            <div>
                                <div class="filter-item pointer px-3 py-1 rounded border">Tràn viền</div>
                            </div>
                            <div>
                                <div class="filter-item pointer px-3 py-1 rounded border">Màn hình gập</div>
                            </div>
                            <div>
                                <div class="filter-item pointer px-3 py-1 rounded border">Giọt nước</div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3">
                        <p class="text-main fw-bold fs-6 mb-1">Tính năng đặc biệt</p>
                        <div class="d-flex flex-wrap gap-1 filter-group">
                            <div class="filter-item active pointer px-3 py-1 rounded border">Sạc không dây</div>
                            <div class="filter-item pointer px-3 py-1 rounded border">Sạc không dây</div>
                            <div class="filter-item pointer px-3 py-1 rounded border">Sạc không dây</div>
                            <div class="filter-item pointer px-3 py-1 rounded border">Sạc không dây</div>
                            <div class="filter-item pointer px-3 py-1 rounded border">Kháng nước - kháng bụi</div>
                            <div class="filter-item pointer px-3 py-1 rounded border">Sạc không dây</div>
                            <div class="filter-item pointer px-3 py-1 rounded border">Sạc không dây</div>
                            <div class="filter-item pointer px-3 py-1 rounded border">Sạc không dây</div>
                        </div>
                    </div>

                    <div class="mt-3">
                        <p class="text-main fw-bold fs-6 mb-1">Tính năng đặc biệt</p>
                        <div class="d-flex flex-wrap gap-1 filter-group">
                            <div class="filter-item active pointer px-3 py-1 rounded border">Sạc không dây</div>
                            <div class="filter-item pointer px-3 py-1 rounded border">Sạc không dây</div>
                            <div class="filter-item pointer px-3 py-1 rounded border">Sạc không dây</div>
                            <div class="filter-item pointer px-3 py-1 rounded border">Sạc không dây</div>
                            <div class="filter-item pointer px-3 py-1 rounded border">Kháng nước - kháng bụi</div>
                            <div class="filter-item pointer px-3 py-1 rounded border">Sạc không dây</div>
                            <div class="filter-item pointer px-3 py-1 rounded border">Sạc không dây</div>
                            <div class="filter-item pointer px-3 py-1 rounded border">Sạc không dây</div>
                        </div>
                    </div>

                    <div class="mt-3">
                        <div class="mb-4">
                            <a class="title-head px-3 py-2 position-relative" href="index.php?p=news"
                                title="24h công nghệ">
                                24h công nghệ
                            </a>
                        </div>

                        <div class="d-flex pb-2 pt-2 border-bottom">
                            <a class="img-thumb d-block" href="index.php?p=detailnews">
                                <div class="bg-img-main ratio3by2 rounded"
                                    style="background-image: url(public/demo/news-item-1.jpg);"></div>
                            </a>
                            <h6 style="flex: 1;" class="ps-3 m-0">
                                <a class="line_3" href="index.php?p=detailnews"
                                    title="Hé lộ thông số kỹ thuật Galaxy Buds 2 Pro, rất đáng để chờ đợi!!!">
                                    Hé lộ thông số kỹ thuật Galaxy Buds 2 Pro, rất đáng để chờ đợi!!!
                                </a>
                            </h6>
                        </div>
                        <div class="d-flex pb-2 pt-2 border-bottom">
                            <a class="img-thumb d-block" href="index.php?p=detailnews">
                                <div class="bg-img-main ratio3by2 rounded"
                                    style="background-image: url(public/demo/news-item-1.jpg);"></div>
                            </a>
                            <h6 style="flex: 1;" class="ps-3 m-0">
                                <a class="line_3" href="index.php?p=detailnews"
                                    title="Hé lộ thông số kỹ thuật Galaxy Buds 2 Pro, rất đáng để chờ đợi!!!">
                                    Hé lộ thông số kỹ thuật Galaxy Buds 2 Pro, rất đáng để chờ đợi!!!
                                </a>
                            </h6>
                        </div>
                        <div class="d-flex pb-2 pt-2 border-bottom">
                            <a class="img-thumb d-block" href="index.php?p=detailnews">
                                <div class="bg-img-main ratio3by2 rounded"
                                    style="background-image: url(public/demo/news-item-1.jpg);"></div>
                            </a>
                            <h6 style="flex: 1;" class="ps-3 m-0">
                                <a class="line_3" href="index.php?p=detailnews"
                                    title="Hé lộ thông số kỹ thuật Galaxy Buds 2 Pro, rất đáng để chờ đợi!!!">
                                    Hé lộ thông số kỹ thuật Galaxy Buds 2 Pro, rất đáng để chờ đợi!!!
                                </a>
                            </h6>
                        </div>
                        <div class="d-flex pb-2 pt-2">
                            <a class="img-thumb d-block" href="index.php?p=detailnews">
                                <div class="bg-img-main ratio3by2 rounded"
                                    style="background-image: url(public/demo/news-item-1.jpg);"></div>
                            </a>
                            <h6 style="flex: 1;" class="ps-3 m-0">
                                <a class="line_3" href="index.php?p=detailnews"
                                    title="Hé lộ thông số kỹ thuật Galaxy Buds 2 Pro, rất đáng để chờ đợi!!!">
                                    Hé lộ thông số kỹ thuật Galaxy Buds 2 Pro, rất đáng để chờ đợi!!!
                                </a>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-9 col-12">
                <div class="d-flex align-items-center gap-2 flex-wrap pb-2 border-bottom">
                    <div class="fw-bold">Sắp xếp theo:</div>
                    <div class="filter-item active pointer px-3 py-1 rounded border">Mặc định</div>
                    <div class="filter-item pointer px-3 py-1 rounded border">Giá giảm dần</div>
                    <div class="filter-item pointer px-3 py-1 rounded border">Giá giảm dần</div>
                    <div class="filter-item pointer px-3 py-1 rounded border">Giá tăng dần</div>
                </div>

                <div class="row g-3 pt-4">
                    <div class="col-xxl-3 col-6">
                        <div class="product-item position-relative box_shadow bg-white p-2 rounded-10">
                            <a class="d-block position-relative overflow-hidden" href="index.php?p=detailproduct">
                                <div class="zoom-img bg-img-main"
                                    style="background-image: url(public/demo/item-product-1.jpg);"></div>
                            </a>
                            <div class="item-product-info mt-1 position-relative">
                                <a class="btn p-1 d-flex justify-content-center align-items-center rounded-circle play0"
                                    href="index.php?p=detailproduct" title="Xem chi tiết sản phẩm">
                                    <i class="bi bi-gear fs-4 text-white"></i>
                                </a>
                                <h5 class="item-title fw-bold my-1">
                                    <a class="line_1" href="index.php?p=detailproduct"
                                        title="Samsung Galaxy S22 Ultra (8GB - 128GB)">
                                        Samsung Galaxy S22 Ultra (8GB - 128GB)
                                    </a>
                                </h5>
                                <p class="mb-1">
                                    <span style="color: var(--accentColor2);" class="fw-bold">6.890.000₫</span>
                                    <del style="color: var(--accentColor1);" class="small"> 8.500.000₫</del>
                                </p>
                                <label class="compare-label pointer position-relative d-flex align-items-center m-0">
                                    <input type="checkbox" class="compare-checkbox d-none">
                                    <span class="compare-checkbox me-1 rounded-circle"></span>
                                    So sánh
                                </label>
                            </div>
                            <div class="sale-label sale-top-right position-absolute fw-bold">Giảm
                                19%
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-6">
                        <div class="product-item position-relative box_shadow bg-white p-2 rounded-10">
                            <a class="d-block position-relative overflow-hidden" href="index.php?p=detailproduct">
                                <div class="zoom-img bg-img-main"
                                    style="background-image: url(public/demo/item-product-1.jpg);"></div>
                            </a>
                            <div class="item-product-info mt-1 position-relative">
                                <a class="btn p-1 d-flex justify-content-center align-items-center rounded-circle play0"
                                    href="index.php?p=detailproduct" title="Xem chi tiết sản phẩm">
                                    <i class="bi bi-gear fs-4 text-white"></i>
                                </a>
                                <h5 class="item-title fw-bold my-1">
                                    <a class="line_1" href="index.php?p=detailproduct"
                                        title="Samsung Galaxy S22 Ultra (8GB - 128GB)">
                                        Samsung Galaxy S22 Ultra (8GB - 128GB)
                                    </a>
                                </h5>
                                <p class="mb-1">
                                    <span style="color: var(--accentColor2);" class="fw-bold">6.890.000₫</span>
                                    <del style="color: var(--accentColor1);" class="small"> 8.500.000₫</del>
                                </p>
                                <label class="compare-label pointer position-relative d-flex align-items-center m-0">
                                    <input type="checkbox" class="compare-checkbox d-none">
                                    <span class="compare-checkbox me-1 rounded-circle"></span>
                                    So sánh
                                </label>
                            </div>
                            <div class="sale-label sale-top-right position-absolute fw-bold">Giảm
                                19%
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-6">
                        <div class="product-item position-relative box_shadow bg-white p-2 rounded-10">
                            <a class="d-block position-relative overflow-hidden" href="index.php?p=detailproduct">
                                <div class="zoom-img bg-img-main"
                                    style="background-image: url(public/demo/item-product-1.jpg);"></div>
                            </a>
                            <div class="item-product-info mt-1 position-relative">
                                <a class="btn p-1 d-flex justify-content-center align-items-center rounded-circle play0"
                                    href="index.php?p=detailproduct" title="Xem chi tiết sản phẩm">
                                    <i class="bi bi-gear fs-4 text-white"></i>
                                </a>
                                <h5 class="item-title fw-bold my-1">
                                    <a class="line_1" href="index.php?p=detailproduct"
                                        title="Samsung Galaxy S22 Ultra (8GB - 128GB)">
                                        Samsung Galaxy S22 Ultra (8GB - 128GB)
                                    </a>
                                </h5>
                                <p class="mb-1">
                                    <span style="color: var(--accentColor2);" class="fw-bold">6.890.000₫</span>
                                    <del style="color: var(--accentColor1);" class="small"> 8.500.000₫</del>
                                </p>
                                <label class="compare-label pointer position-relative d-flex align-items-center m-0">
                                    <input type="checkbox" class="compare-checkbox d-none">
                                    <span class="compare-checkbox me-1 rounded-circle"></span>
                                    So sánh
                                </label>
                            </div>
                            <div class="sale-label sale-top-right position-absolute fw-bold">Giảm
                                19%
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-6">
                        <div class="product-item position-relative box_shadow bg-white p-2 rounded-10">
                            <a class="d-block position-relative overflow-hidden" href="index.php?p=detailproduct">
                                <div class="zoom-img bg-img-main"
                                    style="background-image: url(public/demo/item-product-1.jpg);"></div>
                            </a>
                            <div class="item-product-info mt-1 position-relative">
                                <a class="btn p-1 d-flex justify-content-center align-items-center rounded-circle play0"
                                    href="index.php?p=detailproduct" title="Xem chi tiết sản phẩm">
                                    <i class="bi bi-gear fs-4 text-white"></i>
                                </a>
                                <h5 class="item-title fw-bold my-1">
                                    <a class="line_1" href="index.php?p=detailproduct"
                                        title="Samsung Galaxy S22 Ultra (8GB - 128GB)">
                                        Samsung Galaxy S22 Ultra (8GB - 128GB)
                                    </a>
                                </h5>
                                <p class="mb-1">
                                    <span style="color: var(--accentColor2);" class="fw-bold">6.890.000₫</span>
                                    <del style="color: var(--accentColor1);" class="small"> 8.500.000₫</del>
                                </p>
                                <label class="compare-label pointer position-relative d-flex align-items-center m-0">
                                    <input type="checkbox" class="compare-checkbox d-none">
                                    <span class="compare-checkbox me-1 rounded-circle"></span>
                                    So sánh
                                </label>
                            </div>
                            <div class="sale-label sale-top-right position-absolute fw-bold">Giảm
                                19%
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pt-5">
                    <div class="content_coll position-relative rte">
                        <h2>
                            Điện thoại di động –
                            Vật “bất li thân” ở thời đại công nghệ
                        </h2>
                        <p>Khi khoa học kỹ thuật liên tục được cải tiến và công nghệ phát triển không ngừng thì đó
                            cũng
                            là lúc chiếc điện thoại di động trở nên quan trọng hơn bao giờ hết. Thật vậy, chúng ta
                            có
                            thể làm được rất nhiều việc: gọi điện, nhắn tin, gửi mail, soạn tài liệu (Word, Excel),
                            chụp
                            ảnh – quay video, xem phim hay chơi game với thiết bị có kích thước chỉ bằng một bàn
                            tay.
                        </p>
                        <p>Chính vì vậy, thị trường di động&nbsp;luôn chứng kiến sự cạnh tranh vô cùng khốc liệt
                            giữa
                            các nhà sản xuất. Họ sẵn sàng đầu tư nghiên cứu để liên tục cho ra đời những
                            chiếc&nbsp;điện
                            thoại mới nhất&nbsp;chất lượng, từ giá rẻ, tầm trung, cận cao cấp cho đến cao cấp để đáp
                            ứng
                            tối đa nhu cầu của mọi đối tượng người dùng.</p>
                        <table align="center" border="0">
                            <tbody>
                                <tr>
                                    <td>
                                        <p><strong>RAM</strong></p>
                                    </td>
                                    <td>
                                        <p>2GB - 12GB</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><strong>Bộ nhớ trong</strong></p>
                                    </td>
                                    <td>
                                        <p>32GB - 1TB</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><strong>Kích thước màn hình</strong></p>
                                    </td>
                                    <td>
                                        <p>4.7 inch - 7.6 inch</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><strong>Tần số quét</strong></p>
                                    </td>
                                    <td>
                                        <p>60Hz - 144Hz</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><strong>Camera sau</strong></p>
                                    </td>
                                    <td>
                                        <p>1 camera - 4 camera</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><strong>Pin</strong></p>
                                    </td>
                                    <td>
                                        <p>2.406mAh - 6.000mAh</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><strong>Hệ điều hành</strong></p>
                                    </td>
                                    <td>
                                        <p>iOS, Android</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><strong>Giá bán</strong></p>
                                    </td>
                                    <td>
                                        <p>2.000.000đ - Trên 20.000.000đ</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <h2><strong>Có mấy loại điện thoại di động?</strong></h2>
                        <p>Xét về mục đích sử dụng, và thiết kế thì điện thoại di động sẽ được chia làm 4 loại
                            chính:
                        </p>
                        <h4><strong>Điện thoại thông minh</strong></h4>
                        <p>Điện thoại thông minh hay là smartphone, những mẫu điện thoại này được trang bị nhiều
                            tính
                            năng tân tiến về các điện toán và khả năng kết nối. Ngoài tính năng nghe – gọi cơ bản
                            thì
                            loại điện thoại này còn nhiều tính năng hiện đại khác như đọc báo, chơi game, lướt web
                            và
                            lên mạng xã hội.</p>
                        <p>Những điện thoại thuộc phân khúc này thường sở hữu màn hình lớn, camera độ phân giải cao
                            và
                            trang bị nhiều tính năng sinh trắc học như mở khóa gương mặt, vân tay,..</p>
                        <h4><strong>Điện thoại phổ thông</strong></h4>
                        <p>Điện thoại phổ thông là những mẫu điện thoại tập trung vào các chức năng nghe – gọi là
                            chính.
                            Do đó mẫu điện thoại này sở hữu thiết kế vô cùng nhỏ gọn với hệ thống phím bấm lớn và
                            viên
                            pin sử dụng lâu ngày. Một số hiện thoại phổ thông ngày nay cũng được trang bị khả năng
                            kết
                            nối mạng, lên mạng xã hội.</p>
                        <h4><strong>Điện thoại chơi game</strong></h4>
                        <p>Điện thoại chơi game là một điện thoại thông minh nhưng được thiết kế tối ưu hơn cho việc
                            chơi game như tần số quét màn hình lớn, cấu hình máy khủng cùng hệ thống tản nhiệt được
                            nâng
                            cấp. Ngoài ra, điện thoại chơi game thường được hãng trang bị thêm các phụ kiện hỗ trợ
                            quá
                            trình chơi game hiệu quả hơn như tản nhiệt, tay cầm chơi game.</p>
                        <h4><strong>Điện thoại chụp ảnh</strong></h4>
                        <p>Tương tự điện thoại chơi game, điện thoại chụp ảnh là một điện thoại thông minh với phần
                            camera được tối ưu. Hầu hết các điện thoại thông minh ngày nay đều được trang bị hệ
                            thống
                            camera chất lượng với khả năng chụp góc rộng, lấy nét quang học, chụp thiếu sáng,.. và
                            chúng
                            đều có thể là một chiếc điện thoại chụp ảnh chất lượng.</p>
                        <h2>Tại sao nên mua điện thoại thông minh?</h2>
                        <p>-&nbsp; &nbsp;Được trang bị nhiều công nghệ hiện đại.</p>
                        <p>-&nbsp; &nbsp;Hỗ trợ tốt cho việc liên lạc, làm việc lẫn giải trí.</p>
                        <p>-&nbsp; &nbsp;Không chỉ là thiết bị di động mà còn có thể đóng vai trò như một món đồ
                            trang
                            sức.</p>
                        <p>-&nbsp; &nbsp;Dễ dàng kết nối với cộng đồng và thế giới.</p>
                        <p>-&nbsp; &nbsp;Khả năng lưu giữ những khoảnh khắc đáng nhớ trong cuộc sống theo nhiều hình
                            thức.</p>
                        <h2><strong>Phân loại điện thoại smartphone theo tầm giá</strong></h2>
                        <p>Dựa vào giá bán, ta có thể chia điện thoại thông minh làm 4 loại chính như sau:</p>
                        <h4><strong>Điện thoại giá rẻ</strong></h4>
                        <p><em>-&nbsp; Thông tin chung</em>: Là những thiết bị được bán với mức giá bình dân, phù
                            hợp
                            với đối tượng người dùng có điều kiện tài chính hạn chế.</p>
                        <p><em>-&nbsp; Đặc điểm</em>: Cấu hình tuy không mạnh mẽ nhưng vẫn đáp ứng tốt những nhu cầu
                            hàng ngày (RAM 2 – 3 GB, chip Qualcomm 4xx hoặc Mediatek 6xxx), có thể được phát hành
                            với
                            nhiều phiên bản màu sắc thời trang, kích thước nhỏ gọn mang lại trải nghiệm cầm nắm dễ
                            chịu…
                        </p>
                        <p><em>-&nbsp; Thương hiệu tiêu biểu</em>: Xiaomi Redmi Note 10 Pro hay&nbsp;điện thoại
                            Realme
                            8&nbsp;vừa ra mắt.</p>
                        <h4><strong>Điện thoại tầm trung</strong></h4>
                        <p><em>-&nbsp; Thông tin chung</em>: Bước nâng cấp so với dòng smartphone giá rẻ, có ngoại
                            hình
                            bắt mắt hơn và được nâng cấp về một số yếu tố.</p>
                        <p><em>-&nbsp; Đặc điểm</em>: Thiết kế kim loại sang trọng, màn hình lớn, viền mỏng có độ
                            phân
                            giải Full HD, tích hợp chip Snapdragon đời 6xx hoặc Helio P, RAM 3 – 4 GB cho hiệu suất
                            giải
                            trí tốt hơn. Ngoài ra, chúng còn sở hữu camera kép có khả năng chụp ảnh xóa phông, cảm
                            biến
                            vân tay, công nghệ mở khóa bằng gương mặt hay hỗ trợ cả AI (trí tuệ nhân tạo)...</p>
                        <h4><strong>Điện thoại cận cao cấp</strong></h4>
                        <p><em>-&nbsp; Thông tin chung</em>: Những sản phẩm nằm ở trên phân khúc tầm trung, được
                            trang
                            bị những thông số và công nghệ rất gần với nhóm cao cấp.</p>
                        <p><em>-&nbsp; Đặc điểm</em>: Thiết kế quyến rũ với kim loại + kính, sử dụng chip Snapdragon
                            6xx
                            tiên tiến hơn dòng smartphone tầm trung, RAM từ 4 – 6 GB, màn hình Full HD tràn viền
                            kích
                            thước lớn, tích hợp tiêu chuẩn chống nước, được trang bị viên pin dung lượng lớn cùng
                            công
                            nghệ sạc nhanh, camera kép độ phân giải cao đi kèm nhiều tính năng hữu ích…</p>
                        <p><em>-&nbsp; Thương hiệu tiêu biểu</em>: Samsung Galaxy A…</p>
                        <h4><strong>Điện thoại cao cấp</strong></h4>
                        <p><em>-&nbsp; Thông tin chung</em>: Những smartphone thuộc nhóm này đều có vẻ ngoài tuyệt
                            đẹp,
                            được trang bị phần cứng cực mạnh, phiên bản phần mềm mới nhất và nhiều công nghệ, tính
                            năng
                            hiện đại.</p>
                        <p><em>-&nbsp; Đặc điểm</em>: Hoàn thiện tinh xảo từ chất liệu kim loại, kính và có thể là
                            cả
                            gốm, màn hình tràn cạnh độ phân giải 2K, màn hình cong về 2 cạnh bên, tích hợp chip
                            Snapdragon đời mới nhất (8xx) hay Apple A-series, có khả năng chống nước, cảm biến nhận
                            diện
                            gương mặt 3D, camera kép hỗ trợ zoom quang học, tạo biểu tượng cảm xúc bằng chính gương
                            mặt
                            người dùng…</p>
                        <p><em>-&nbsp; Sản phẩm tiêu biểu:&nbsp;</em>Xiaomi Mi 11 5G, Samsung Galaxy S21 Ultra
                            5G,&nbsp;iPhone 12...</p>
                        <h2><strong>Các tiêu chí để lựa chọn điện thoại giá rẻ chất lượng</strong></h2>
                        <p>Có rất nhiều yếu tố khác nhau để quyết định một mẫu smartphone có phải tốt nhất hay
                            không.
                            Hãy cùng điểm nhanh qua một số tiêu chí sau đây:</p>
                        <h4><strong>Thiết kế</strong></h4>
                        <p>Thiết kế bên ngoài ảnh hưởng rất lớn đến quyết định chọn mua của người dùng. Vì ngày nay,
                            các
                            sản phẩm điện thoại không chỉ đơn thuần là một thiết bị liên lạc, giải trí mà nó còn
                            đóng
                            vai trò là một phụ kiện trang trí, thể hiện phần nào tính cách của người dùng. Đây cũng
                            là
                            một lý do khiến các mẫu smartphone ngày càng trở nên mỏng hơn, nhiều màu sắc hơn. Hay
                            thiết
                            kế pin rời kém sang đã biến mất, thay vào đó là pin liền nguyên khối sang trọng.</p>
                        <h4><strong>Màn hình</strong></h4>
                        <p>Kích thước màn hình cũng sẽ ảnh hưởng đến tiêu chí chọn mua của người tiêu dùng. Bởi một
                            số
                            người dùng thiết thích bị nhỏ gọn nhưng số khác lại yêu thích các thiết bị màn hình lớn.
                            Ngày nay các mẫu điện thoại mới ra mắt đang sở hữu kích thước màn hình ngày càng lớn do
                            đa
                            phần người dùng thích những chiếc điện thoại có màn hình càng lớn càng tốt.</p>
                        <h4><strong>Hệ điều hành</strong></h4>
                        <p>Sẽ có nhiều người dùng lựa chọn hệ điều hành đầu tiên trước khi chọn mua mẫu điện thoại
                            nào
                            đó. Hiện nay một số hệ điều hành có trên điện thoại di động phải kể đến như iOS,
                            Android,
                            BlackBerry OS hay Windows Phone. Mỗi hệ điều hành sẽ được xây dựng và phát triển trên
                            các
                            nền tảng khác nhau nên sẽ có những ưu và nhược điểm khác nhau.</p>
                        <p>-&nbsp;<strong>Hệ điều hành Android:</strong></p>
                        <p>Đây là hệ điều hành mở được Google phát triển trên nền tảng Linux và là hệ điều hành được
                            sử
                            dụng phổ biến nhất. Do được sử dụng phổ biến bởi nhiều thương hiệu nên các thiết bị chạy
                            hệ
                            điều hành Android cũng sở hữu mức giá khá đa dạng, từ điện thoại giá rẻ, tầm trung, cận
                            cao
                            cấp đến cao cấp bạn đều có thể tìm được sản phẩm chạy trên hệ điều hành này.</p>
                        <p>Ngoài ra, do là hệ điều hành mở nên người dùng có thể tùy biến giao diện một cách dễ dàng
                            theo sở thích cá nhân. Nhưng đây cũng là một điểm yếu của hệ điều hành Android này khi
                            độ an
                            toàn, tính bảo mật chưa cao.</p>
                        <p>-&nbsp;<strong>Hệ điều hành iOS:</strong></p>
                        <p>iOS là hệ điều hành với tính bảo mật cao do được phát triển trên một nền tảng đóng. Mỗi
                            một
                            phiên bản iOS đều được kiểm thử rất kỹ càng trước khi đưa ra thị trường. Nếu phát hiện
                            lỗ
                            hổng mới sẽ được update nhanh chóng.</p>
                        <p>Nhược điểm của hệ điều hành là người dùng sẽ không được tùy biến giao diện, bàn phím theo
                            phong cách của bản thân.</p>
                        <p>-&nbsp;<strong>Hệ điều hành BlackBerry OS</strong></p>
                        <p>Hệ điều hành BlackBerry OS có tính bảo mật cao dùng giao diện sử dụng bắt mắt. Tuy nhiên
                            kho
                            ứng dụng trên hệ điều hành này chưa thực sự phong phú.</p>
                        <h4><strong>Cấu hình</strong></h4>
                        <p>Con chip CPU + GPU sẽ quyết định đến tốc độ đa nhiệm và hoạt động của máy. Dung lượng RAM
                            càng lớn, khả năng đa nhiệm của máy càng mượt. Và hầu hết các sản phẩm điện thoại hiện
                            nay
                            đều được trang bị dung lượng ram từ 3GB trở nên. Với các dòng sản phẩm cao cấp, có thể
                            lên
                            đến 6-8GB RAM.</p>
                        <h4><strong>Bộ nhớ trong</strong></h4>
                        <p>Bộ nhớ là không gian lưu trữ hình ảnh, ứng dụng. Do đó người dùng sẽ ưu tiên một thiết bị
                            sở
                            hữu dung lượng bộ nhớ lớn hoặc có hỗ trợ thẻ nhớ mở rộng. Ngày nay, hầu hết các thiết bị
                            smartphone đều sở hữu dung lượng bộ nhớ trong lớn tủ 64GB.</p>
                        <h4><strong>Camera</strong></h4>
                        <p>Nếu người dùng yêu thích quay phim, chụp ảnh hoặc sử dụng điện thoại phục vụ công việc
                            tương
                            tự thì camera là nhân tố rất quan trọng. Lúc này, ngoài thông số camera thì còn sẽ quan
                            tâm
                            nhiều tính năng khác như hỗ trợ chụp ảnh góc rộng, khả năng lấy nét,...</p>
                        <h4><strong>Dung lượng pin</strong></h4>
                        <p>Một điện thoại pin càng lớn, càng được người dùng yêu thích. Vì chỉ số dung lượng càng
                            lớn
                            (mAH) đồng nghĩa điện thoại có thể sử dụng càng lâu. Ngoài ra, người dùng sẽ còn quan
                            tâm
                            đến tính năng sạc nhanh của máy để lựa chọn sản phẩm khi mua.</p>
                        <h4><strong>Tính năng đặc biệt</strong></h4>
                        <p>Ngoài những thông số trên thì quyết định tiêu dùng của điện thoại còn ảnh hưởng bởi một
                            số
                            tính năng đặc biệt của sản phẩm. Như một số điện thoại sẽ hỗ trợ vân tay mặt lưng, như
                            số
                            khác sẽ trang bị vân tay trong màn hình.</p>
                        <h4><strong>Giá thành</strong></h4>
                        <p>Giá bán là một trong những yếu tố quan trọng nhất để quyết định người dùng có chọn mua
                            một
                            sản phẩm nào đó hay không. Với mỗi người dùng sẽ có những phân khúc lựa chọn khác nhau:
                        </p>
                        <p>-&nbsp; Học sinh, sinh viên: Đối tượng này đặc điểm là khả năng tài chính còn phụ thuộc
                            gia
                            đình do đó sản phẩm hướng tới đa số là điện thoại phân khúc giá rẻ 3-4 triệu đồng.</p>
                        <p>-&nbsp; Nhân viên văn phòng, công – nhân viên chức: Đây là nhóm người dùng đã có khả năng
                            tự
                            chủ tài chính nên tiêu chí chọn mua smartphone cũng cao hơn như thiết kế đẹp, camera
                            chụp
                            tốt,... và các sản phẩm chọn mua đa số thuộc phân khúc cận cao cấp: từ 8 – 10 triệu
                            đồng.
                        </p>
                        <p>-&nbsp; Tín đồ công nghệ: Đây là phân khúc người yêu công nghệ, thường mong muốn sở hữu
                            một
                            mẫu điện thoại mạnh nhất, tốt nhất.</p>
                        <h2><strong>TOP 5 hãng điện thoại bán chạy nhất hiện nay</strong></h2>
                        <p>Thị trường smartphone khá nhộn nhịp với nhiều sản phẩm đến từ nhiều thương hiệu khác
                            nhau.
                            Nhưng bán chạy nhất trên thị trường là 5 thương hiệu smartphone sau:</p>
                        <h4><strong>Apple</strong></h4>
                        <p>Điện thoại iPhone với hầu hết sản phẩm nằm trong phân khúc cao cấp, do đó sản phẩm điện
                            thoại
                            iPhone với hiệu năng mạnh. Năm 2020, Apple đứng thứ 3 thế giới (chiếm tới 14% thị phần)
                            với
                            hơn 36 triệu thiết bị bán ra.</p>
                        <p>Một số sản phẩm nổi bật: iPhone 11, iPhone 12, iPhone Xr,...</p>
                        <h4><strong>Samsung</strong></h4>
                        <p>Là mẫu điện thoại bán chạy thứ 2 thế giới trong năm 2020, Samsung chiếm tới 20% thị
                            trường
                            smartphone khi bán ra hơn 54 triệu máy. Các sản phẩm điện thoại Samsung khá đa dạng phân
                            khúc từ flagship cao cấp (dòng Samsung S, Samsung Note), tầm trung (Samsung A) và một số
                            sản
                            phẩm phân khúc giá rẻ khác.</p>
                        <p>Một số sản phẩm nổi bật: Samsung Note 20, Samsung S21, Samsung A52,...</p>
                        <h4><strong>Xiaomi</strong></h4>
                        <p>Xiaomi là thương hiệu điện thoại Trung Quốc, hãng điện thoại này chiếm tới 10% thị phần
                            điện
                            thoại di động trên toàn thế giới với hơn 26 triệu máy bán ra trong năm 2020 và dừng chân
                            ở
                            vị trí thứ 4 trong 5 thương hiệu smartphone bán chạy toàn cầu.</p>
                        <p>Các sản phẩm Xiaomi nổi bật với dung lượng pin siêu cao, hiệu năng khủng. Một số sản phẩm
                            nổi
                            bật như: Xiaomi Mi 11 Lite 5G, Xiaomi Redmi Note 10, Xiaomi Mi 10T Pro,..</p>
                        <h4><strong>Oppo</strong></h4>
                        <p>Là thương hiệu đứng thứ 5 trong danh sách, điện thoại OPPO có doanh số bán lên đến hơn 24
                            triệu máy, chiếm 9% thị phần. Các sản phẩm điện thoại OPPO với thiết kế sang trọng,
                            camera
                            chất lượng cùng giá bán phải chăng.</p>
                        <p>Một số điện thoại OPPO nổi bật: OPPO Reno5, OPPO A93, OPPO A15,…</p>
                        <h4><strong>Realme</strong></h4>
                        <p>Điện thoại Realme đang có sự tăng trưởng vượt bậc trong những năm gần đây. Sản phẩm điện
                            thoại Realme tập trung chủ yếu ở phân khúc giá rẻ và tầm trung.</p>
                        <p>Một số sản phẩm nổi bật: Realme 6, Realme 8 Pro, Realme C15,…</p>

                        <div class="bg_cl position-absolute w-100"></div>
                    </div>

                    <div class="text-center mb-2">
                        <a href="javascript:;"
                            class="view_mores one pt-2 pb-2 px-4 position-relative btn rounded-10 box_shadow fw-bold"
                            title="Xem tất cả">Xem tất cả <img class="m_more" src="public/demo/sortdown.png"></a>
                        <a href="javascript:;"
                            class="view_mores two pt-2 pb-2 px-4 position-relative btn rounded-10 box_shadow fw-bold d-none"
                            title="Thu gọn">Thu gọn <img class="m_less"
                                src="//bizweb.dktcdn.net/thumb/pico/100/459/533/themes/868331/assets/sortdown.png?1684550911218"
                                alt="Thu gọn"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function () {
        $('.banner-slider').owlCarousel({
            center: false,
            loop: true,
            margin: 0,
            dots: false,
            nav: true,
            margin: 15,
            autoplay: false,
            responsive: {
                0: {
                    items: 1.2,
                    nav: false,
                },
                768: {
                    items: 2,
                },
                1400: {
                    items: 2
                }
            }
        });

        $(".owl-next").html(`<i class="bi bi-chevron-right fs-3 ms-2"></i>`);
        $(".owl-prev").html(`<i class="bi bi-chevron-left fs-3 me-2"></i>`);

        $(".one").click(function () {
            $(".content_coll").css("max-height", "initial");
            $(this).addClass("d-none");

            $(".bg_cl").toggleClass("d-none");
            $(".two").toggleClass("d-none");
        });

        $(".two").click(function () {
            $(".content_coll").css("max-height", "280px");
            $(this).addClass("d-none");

            $(".bg_cl").toggleClass("d-none");
            $(".one").toggleClass("d-none");
        });
    });
</script>