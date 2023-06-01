<style>
    .bread-crumb {
        border-top: unset;
    }

    .ui-slider {
        position: relative;
        text-align: left;
    }

    .ui-widget.ui-widget-content {
        border: none !important;
        margin-bottom: 20px;
        width: 100%;
        float: left;
    }

    .ui-widget.ui-widget-content {
        height: 4px;
        background: #ebebeb;
    }

    .ui-slider-range.ui-corner-all.ui-widget-header {
        height: 1px;
        left: 0%;
        width: 100%;
        position: absolute;
        z-index: 1;
        font-size: .7em;
        display: block;
        border: 0;
        background: #daa785 !important;
    }

    input[type="checkbox"],
    input[type="radio"] {
        display: inline;
        margin: 0;
        padding: 0;
        width: 100%;
        height: 40px;
        position: absolute;
        background: transparent;
        outline: none;
        opacity: 0;
    }

    .filter-item--check-box .fa {
        margin-right: 15px;
        width: 14px;
        font-size: 18px;
        line-height: 40px;
        position: relative;
        top: 2px;
        display: inline-block;
    }

    .filter-item--check-box input+.fa:before {
        content: "";
        font-size: 18px;
        border: solid 1px #daa785;
        line-height: 40px;
        position: absolute;
        top: -16px;
        height: 17px !important;
        width: 17px;
    }

    .filter-items *:hover {
        color: #daa785;
    }

    .filter-item--check-box {
        max-height: 240px;
        overflow-y: auto;
    }

    .filter-items::-webkit-scrollbar {
        width: 5px;
        background-color: #fff;
    }

    .filter-items::-webkit-scrollbar-thumb {
        border-radius: 10px;
        background-color: #919aa8;
        width: 5px;
    }

    .filter-items::-webkit-scrollbar-track {
        border-radius: 10px;
        background-color: #fff;
        width: 5px;
    }

    .filter-item--check-box input:checked+.fa:after {
        content: "";
        color: #daa785;
        position: absolute;
        width: 11px;
        height: 11px;
        line-height: 11px;
        border-radius: 50%;
        background: #daa785;
        top: -13px;
        font-size: 12px;
        left: 3px;
    }

    .line-2 {
        font-weight: 400;
        line-height: 21px;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        text-overflow: ellipsis;
        overflow: hidden;
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

    .page-link {
        font-weight: 400;
        float: left;
        margin: 0 5px;
        border-radius: 50% !important;
        width: 30px;
        background: #fff;
        text-align: center;
        height: 30px;
        font-size: 14px;
        padding: 0;
        line-height: 30px;
        color: #333;
        border: solid 1px #e1e1e1;
    }

    .page-link:hover {
        border-color: #daa785;
        background: #daa785;
        color: #fff;
    }

    .page-item.active .page-link {
        border-color: #daa785;
        background: #daa785;
        color: #fff;
    }





    @media (min-width: 768px) {
        .bread-crumb {
            border-top: 1px solid #e6b08c;
        }
    }
</style>

<div class="row px-6 pb-4">
    <div class="py-4 bread-crumb">
        <span class="home">
            <a class="text-black-50 small" href="index.php"><span>Trang chủ</span></a>
            <span class="text-black-50 mx-1">/</span>
        </span>
        <span class="home">
            <a class="text-black-50 small" href="index.php?p=news"><span>Blog</span></a>
            <span class="text-black-50 mx-1">/</span>
        </span>
        <span class="text-main"><strong>
                Một Cách Đơn Giản & Nhanh Chóng Giúp Tẩy Trắng Móng</strong></s>
    </div>
</div>

<div class="row px-6">
    <div class="col-xxl-3 col-12 order-xxl-1 order-2 pt-md-0 pt-4">
        <h3 class="text-main mb-4">Danh mục sản phẩm</h3>
        <div class="mb-2 nav_item mb-4">
            <div class="mb-2 nav_item">
                <a href="index.php"><span class="position-relative">Sơn thường</span></a>
            </div>
            <div class="mb-2 nav_item">
                <a href="index.php"><span class="position-relative">Sơn gel</span></a>
            </div>
            <div class="mb-2 nav_item">
                <a href="index.php"><span class="position-relative">Đắp bột</span></a>
            </div>

            <div class="mb-2 nav_item">
                <a href="index.php"><span class="position-relative">Móng giả</span></a>
            </div>
            <div class="mb-2 nav_item">
                <a href="index.php"><span class="position-relative">Gắn hạt</span></a>
            </div>
            <div class="mb-2 nav_item">
                <a href="index.php"><span class="position-relative">Vẽ móng</span></a>
            </div>
            <div class="mb-2 nav_item">
                <a href="index.php"><span class="position-relative">Đá trang trí</span></a>
            </div>
        </div>

        <h3 class="text-main mb-3">
            Lọc theo giá
        </h3>
        <div style="height: 15px;" class="mb-3">
            <div id="slider" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                <div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 100%;"></div><span
                    tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;"></span><span
                    tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 100%;"></span>
            </div>
        </div>

        <div class="d-flex">
            <div>0</div>
            <div class="col text-center">-</div>
            <div>100.000.000₫</div>
        </div>
        <div class="mt-1">
            <a href="#" class="btn my-btn-primary">Lọc giá</a>
        </div>

        <h3 class="text-main my-3">
            Loại
        </h3>

        <div class="filter-items filter-item--check-box">
            <label for="filter-bao-ve-mong" class="position-relative d-block mb-2">
                <input type="checkbox">
                <i class="fa"></i>
                Bảo vệ móng
            </label>
            <label for="filter-bao-ve-mong" class="position-relative d-block mb-2">
                <input type="checkbox">
                <i class="fa"></i>
                Dụng cụ chăm sóc móng
            </label>
            <label for="filter-bao-ve-mong" class="position-relative d-block mb-2">
                <input type="checkbox">
                <i class="fa"></i>
                Chăm sóc móng
            </label>
            <label for="filter-bao-ve-mong" class="position-relative d-block mb-2">
                <input type="checkbox">
                <i class="fa"></i>
                Bảo vệ móng
            </label>
            <label for="filter-bao-ve-mong" class="position-relative d-block mb-2">
                <input type="checkbox">
                <i class="fa"></i>
                Dụng cụ chăm sóc móng
            </label>
            <label for="filter-bao-ve-mong" class="position-relative d-block mb-2">
                <input type="checkbox">
                <i class="fa"></i>
                Chăm sóc móng
            </label>
        </div>

        <h3 class="text-main my-4">
            <a class="aboutus text-main" href="index.php?p=aboutus">
                Top sản phẩm
            </a>
        </h3>

        <div class="d-flex mb-3">
            <div class="me-3">
                <img width="70" height="70" src="public/demo/item-product-1.png" alt="">
            </div>
            <div class="d-flex flex-column justify-content-between">
                <h6>
                    <a class="line-2" href="index.php?p=detailproduct"
                        title="Sơn dưỡng móng tay có màu Innisfree Real Color Nail">
                        Sơn dưỡng móng tay có màu Innisfree Real Color Nail
                    </a>
                </h6>
                <div>
                    <span class="text-main fw-bold me-1">60.000₫</span>

                    <del class="text-black-50">100.000₫</del>
                </div>
            </div>
        </div>
        <div class="d-flex mb-3">
            <div class="me-3">
                <img width="70" height="70" src="public/demo/item-product-1.png" alt="">
            </div>
            <div class="d-flex flex-column justify-content-between">
                <h6>
                    <a class="line-2" href="index.php?p=detailproduct"
                        title="Sơn dưỡng móng tay có màu Innisfree Real Color Nail">
                        Sơn dưỡng móng tay có màu Innisfree Real Color Nail
                    </a>
                </h6>
                <div>
                    <span class="text-main fw-bold me-1">60.000₫</span>

                    <del class="text-black-50">100.000₫</del>
                </div>
            </div>
        </div>
        <div class="d-flex mb-3">
            <div class="me-3">
                <img width="70" height="70" src="public/demo/item-product-1.png" alt="">
            </div>
            <div class="d-flex flex-column justify-content-between">
                <h6>
                    <a class="line-2" href="index.php?p=detailproduct"
                        title="Sơn dưỡng móng tay có màu Innisfree Real Color Nail">
                        Sơn dưỡng móng tay có màu Innisfree Real Color Nail
                    </a>
                </h6>
                <div>
                    <span class="text-main fw-bold me-1">60.000₫</span>

                    <del class="text-black-50">100.000₫</del>
                </div>
            </div>
        </div>
        <div class="d-flex mb-3">
            <div class="me-3">
                <img width="70" height="70" src="public/demo/item-product-1.png" alt="">
            </div>
            <div class="d-flex flex-column justify-content-between">
                <h6>
                    <a class="line-2" href="index.php?p=detailproduct"
                        title="Sơn dưỡng móng tay có màu Innisfree Real Color Nail">
                        Sơn dưỡng móng tay có màu Innisfree Real Color Nail
                    </a>
                </h6>
                <div>
                    <span class="text-main fw-bold me-1">60.000₫</span>

                    <del class="text-black-50">100.000₫</del>
                </div>
            </div>
        </div>
        <div class="d-flex mb-3">
            <div class="me-3">
                <img width="70" height="70" src="public/demo/item-product-1.png" alt="">
            </div>
            <div class="d-flex flex-column justify-content-between">
                <h6>
                    <a class="line-2" href="index.php?p=detailproduct"
                        title="Sơn dưỡng móng tay có màu Innisfree Real Color Nail">
                        Sơn dưỡng móng tay có màu Innisfree Real Color Nail
                    </a>
                </h6>
                <div>
                    <span class="text-main fw-bold me-1">60.000₫</span>

                    <del class="text-black-50">100.000₫</del>
                </div>
            </div>
        </div>
        <div class="d-flex mb-3">
            <div class="me-3">
                <img width="70" height="70" src="public/demo/item-product-1.png" alt="">
            </div>
            <div class="d-flex flex-column justify-content-between">
                <h6>
                    <a class="line-2" href="index.php?p=detailproduct"
                        title="Sơn dưỡng móng tay có màu Innisfree Real Color Nail">
                        Sơn dưỡng móng tay có màu Innisfree Real Color Nail
                    </a>
                </h6>
                <div>
                    <span class="text-main fw-bold me-1">60.000₫</span>

                    <del class="text-black-50">100.000₫</del>
                </div>
            </div>
        </div>

        <div class="mt-4">
            <img class="img-fluid" src="public/demo/banner_sidebar.jpg">
        </div>
    </div>

    <div class="col-xxl-9 col-12 order-xxl-2 order-1">
        <h3 class="text-main mb-3">
            Tất cả sản phẩm
        </h3>
        <div class="row g-4">
            <div class="col-xxl-4">
                <div class="item-product">
                    <div class="overflow-hidden bg-white rounded-16">
                        <a href="index.php?p=detailproduct">
                            <div class="bg-img-main" style="background-image: url(public/demo/item-product-1.png);">
                            </div>
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
                            <span style="font-weight: 300;"
                                class="small text-decoration-line-through text-black-50">700.000₫</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4">
                <div class="item-product">
                    <div class="overflow-hidden bg-white rounded-16">
                        <a href="index.php?p=detailproduct">
                            <div class="bg-img-main" style="background-image: url(public/demo/item-product-1.png);">
                            </div>
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
                            <span style="font-weight: 300;"
                                class="small text-decoration-line-through text-black-50">700.000₫</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4">
                <div class="item-product">
                    <div class="overflow-hidden bg-white rounded-16">
                        <a href="index.php?p=detailproduct">
                            <div class="bg-img-main" style="background-image: url(public/demo/item-product-1.png);">
                            </div>
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
                            <span style="font-weight: 300;"
                                class="small text-decoration-line-through text-black-50">700.000₫</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4">
                <div class="item-product">
                    <div class="overflow-hidden bg-white rounded-16">
                        <a href="index.php?p=detailproduct">
                            <div class="bg-img-main" style="background-image: url(public/demo/item-product-1.png);">
                            </div>
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
                            <span style="font-weight: 300;"
                                class="small text-decoration-line-through text-black-50">700.000₫</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4">
                <div class="item-product">
                    <div class="overflow-hidden bg-white rounded-16">
                        <a href="index.php?p=detailproduct">
                            <div class="bg-img-main" style="background-image: url(public/demo/item-product-1.png);">
                            </div>
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
                            <span style="font-weight: 300;"
                                class="small text-decoration-line-through text-black-50">700.000₫</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4">
                <div class="item-product">
                    <div class="overflow-hidden bg-white rounded-16">
                        <a href="index.php?p=detailproduct">
                            <div class="bg-img-main" style="background-image: url(public/demo/item-product-1.png);">
                            </div>
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
                            <span style="font-weight: 300;"
                                class="small text-decoration-line-through text-black-50">700.000₫</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix">
            <ul class="pagination pt-5 float-end">
                <li class="page-item active rounded-circle"><a class="page-link" href="#">1</a></li>
                <li class="page-item rounded-circle"><a class="page-link" href="#">2</a></li>
                <li class="page-item rounded-circle"><a class="page-link" href="#">3</a></li>
                <li class="page-item rounded-circle"><a class="page-link" href="#"><i
                            class="bi bi-chevron-right"></i></a></li>
            </ul>
        </div>
    </div>
</div>