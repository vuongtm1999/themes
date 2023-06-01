<style>
    a:hover,
    a:focus {
        color: var(--shop-color-hover);
        outline: none;
    }

    .menuList-links>li>a {
        padding: 4px 0;
        font-weight: 500;
        font-size: 15px;
        display: block;
    }

    .btn-filter {
        color: #333;
    }



    .caret-down-icon {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        right: 6%;
        color: #bababa;
    }

    .sliderbar-menu .collapse_title::after {
        content: " ";
        position: absolute;
        top: 0;
        bottom: 0;
        right: 25px;
        margin: auto;
        width: 8px;
        height: 8px;
        border-color: #666;
        border-style: solid;
        border-width: 0 2px 2px 0;
        transform: translateY(-50%) rotate(45deg);
        transition: transform .2s ease;
        -ms-transition: transform .2s ease;
        -webkit-transition: transform .2s ease;
    }

    .checkbox-large {
        width: 15px;
        height: 15px;
    }

    .color-filter .checkbox-list li label {
        border: 1px solid #eaeaea;
        width: 25px;
        height: 25px;
        border-radius: 4px;
        float: left;
        position: relative;
        font-size: 0;
        margin: 0 14px 15px 0;
    }

    .color-filter li {
        display: inline;
    }

    .color-filter .checkbox-list input[type="checkbox"] {
        display: none;
    }

    .color-filter .checkbox-list input[type='checkbox'] {
        position: absolute;
        top: 0px;
        left: 0px;
        margin-top: 0;
        vertical-align: top;
        width: 16px;
        height: 16px;
        cursor: pointer;
        outline: none;
        border: 1px solid transparent;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }

    .card-title {
        font-size: 14px;
        margin: 0 0 5px;
        font-weight: 500;
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

    .btn-add-to-cart {
        border-radius: 16px;
        border: 1px solid transparent;
        transition: border 0.2s ease;
        border-right: 0px transparent;
        text-transform: uppercase;
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

    .btnico i {
        width: 16px;
        height: 31px;
        line-height: 31px;
        display: block;
        margin: auto;
        fill: #ffffff;
    }

    .btn-add-to-cart:hover {
        border-color: #c73328;
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

    .nav-link:hover {
        color: var(--shop-color-hover);
    }

    .px-7 {
        padding-left: 0vw !important;
        padding-right: 0vw !important;
    }


    @media (max-width: 768px) {
        .row-cols-5>* {
            flex: 0 0 50%;
            width: 50%;
        }
    }

    @media (min-width: 768px) {
        .px-7 {
            padding-left: 3vw !important;
            padding-right: 3vw !important;
        }

        .sidebar-menu--sticky {
            top: 30px;
            position: -webkit-sticky;
            position: sticky;
            transition: top 400ms ease;
        }
    }
</style>
<div class="row px-7 px-3 bg_light_grey pb-5">
    <div class="pt-2">
        <p class="breadcrumb">Trang chủ / Danh mục / Hương Trầm</p>
    </div>

    <div class="d-flex flex-wrap">
        <!--  -->
        <div class="col-xxl-3 d-none d-xxl-flex pe-3">
            <div class="sliderbar-menu sidebar-menu--sticky w-100">
                <!-- group filter  -->
                <div class="bg-white mb-3">
                    <a href="#collapseGroup" data-bs-toggle="collapse" role="button" aria-expanded="false"
                        aria-controls="collapseExample">
                        <h6 class="mb-0 px-3 py-3 position-relative collapse_title rounded-top border border-bottom-0">
                            Danh mục sản phẩm
                        </h6>
                    </a>
                    <div class="collapse show" id="collapseGroup">
                        <div class="card p-2 group-filter rounded-bottom">
                            <ul class="menuList-links list-unstyled">
                                <li>
                                    <a href="index.php/?p=all" title="Tất cả sản phẩm">
                                        <span>Tất cả sản phẩm</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="" title="Trầm Hương Xông Đốt">Trầm
                                        Hương
                                        Xông Đốt
                                    </a>
                                </li>
                                <li>
                                    <a href="" title="Dụng Cụ Thưởng Trầm">Dụng Cụ
                                        Thưởng Trầm
                                    </a>
                                </li>
                                <li>
                                    <a href="" title="Quà Tặng Trầm Hương">Quà Tặng
                                        Trầm
                                        Hương
                                    </a>
                                </li>
                                <li>
                                    <a href="" title="Trang Sức Trầm Hương">Trang
                                        Sức
                                        Trầm Hương
                                    </a>
                                </li>
                                <li>
                                    <a href="" title="Sản Phẩm Khác">Sản Phẩm Khác
                                    </a>
                                </li>
                                <li>
                                    <a href="" title="Sản phẩm khuyến mãi">
                                        Sản phẩm khuyến mãi
                                    </a>
                                </li>
                                <li>
                                    <a href="" title="Sản phẩm nổi bật">
                                        <span>Sản phẩm nổi bật</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- price filter   -->
                <div class="bg-white mb-3">
                    <a href="#filterPrice" data-bs-toggle="collapse" role="button" aria-expanded="false"
                        aria-controls="collapseExample">
                        <h6 class="mb-0 px-3 py-3 position-relative collapse_title rounded-top border border-bottom-0">
                            Lọc giá
                        </h6>
                    </a>
                    <div class="collapse show" id="filterPrice">
                        <div class="card p-2 ps-3 price-filter rounded-bottom">
                            <div class="d-flex flex-wrap align-items-center mb-2">
                                <input class="fs-4 checkbox-large" type="checkbox" id="vehicle1" name="vehicle1"
                                    value="Bike">
                                <label class="ps-2 " for="vehicle1"> Dưới 1.000.000₫</label>
                            </div>
                            <div class="d-flex flex-wrap align-items-center mb-2">
                                <input class="fs-4 checkbox-large" type="checkbox" id="vehicle1" name="vehicle1"
                                    value="Bike">
                                <label class="ps-2 " for="vehicle1">1.000.000₫ - 2.000.000₫</label>
                            </div>
                            <div class="d-flex flex-wrap align-items-center mb-2">
                                <input class="fs-4 checkbox-large" type="checkbox" id="vehicle1" name="vehicle1"
                                    value="Bike">
                                <label class="ps-2 " for="vehicle1">2.000.000₫ - 3.000.000₫</label>
                            </div>
                            <div class="d-flex flex-wrap align-items-center mb-2">
                                <input class="fs-4 checkbox-large" type="checkbox" id="vehicle1" name="vehicle1"
                                    value="Bike">
                                <label class="ps-2 " for="vehicle1">3.000.000₫ - 4.000.000₫</label>
                            </div>
                            <div class="d-flex flex-wrap align-items-center mb-2">
                                <input class="fs-4 checkbox-large" type="checkbox" id="vehicle1" name="vehicle1"
                                    value="Bike">
                                <label class="ps-2 " for="vehicle1">Trên 4.000.000₫</label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- color filter -->
                <div class="bg-white mb-3">
                    <a href="#filterColor" data-bs-toggle="collapse" role="button" aria-expanded="false"
                        aria-controls="collapseExample">
                        <h6 class="mb-0 px-3 py-3 position-relative collapse_title rounded-top border border-bottom-0">
                            Màu sắc
                        </h6>
                    </a>
                    <div class="collapse show" id="filterColor">
                        <div class="card p-2 ps-3 color-filter rounded-bottom">
                            <ul class="list-unstyled checkbox-list">
                                <li>
                                    <input type="checkbox" id="data-color-p1" value="Tím">
                                    <label for="data-color-p1" style="background-color: #eb11eb">Tím</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="data-color-p2" value="Vàng">
                                    <label for="data-color-p2" style="background-color: #ffff05">Vàng</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="data-color-p3" value="Cam">
                                    <label for="data-color-p3" style="background-color: #f54105">Cam</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="data-color-p4" value="Hồng">
                                    <label for="data-color-p4" style="background-color: #f23895">Hồng</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="data-color-p5" value="Đen">
                                    <label for="data-color-p5" style="background-color: #000000">Đen</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="data-color-p6" value="Xám">
                                    <label for="data-color-p6" style="background-color: #cccaca">Xám</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="data-color-p7" value="Trắng">
                                    <label for="data-color-p7" style="background-color: #fffcfc">Trắng</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="data-color-p8" value="Xanh dương">
                                    <label for="data-color-p8" style="background-color: #1757eb">Xanh dương</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="data-color-p9" value="Xanh">
                                    <label for="data-color-p9" style="background-color: #099116">Xanh</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="data-color-p10" value="Xanh lá">
                                    <label for="data-color-p10" style="background-color: #52ff52">Xanh lá</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="data-color-p11" value="Đỏ">
                                    <label for="data-color-p11" style="background-color: #ff0000">Đỏ</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--  -->
        <div class="col-xxl-9">
            <div>
                <img class="img-fluid" src="public/demo/huong_tram_banner.webp" alt="">
            </div>
            <div class="d-flex flex-wrap align-items-center py-3">
                <div class="col">
                    <div class="d-flex flex-wrap align-items-center">
                        <h4 class="mb-0 me-4">Hương Trầm</h4>
                        <span class="title-count"><b>3</b> sản phẩm</span>
                    </div>
                </div>
                <div class="col-md-3 col-xxl-3 col-4">
                    <div class="nav-item dropdown dropup">
                        <a class="text__hover nav-link btn-filter p-2 bg-white position-relative" href="#"
                            id="selectFilter" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-sort-alpha-asc fs-6 me-1" aria-hidden="true"></i> <span class="fw-bold">Sắp
                                xếp</span>
                            <i class="fa fa-caret-down caret-down-icon" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu custom_dropdown_menu w-100" aria-labelledby="selectFilter">
                            <li><a class="dropdown-item" href="#">Sản phẩm nổi bật</a></li>
                            <li><a class="dropdown-item" href="#">Giá: Tăng dần</a></li>
                            <li><a class="dropdown-item" href="#">Giá: Giảm dần</a></li>
                            <li><a class="dropdown-item" href="#">Tên: A-Z</a></li>
                            <li><a class="dropdown-item" href="#">Tên: Z-A</a></li>
                            <li><a class="dropdown-item" href="#">Cũ nhất</a></li>
                            <li><a class="dropdown-item" href="#">Mới nhất</a></li>
                            <li><a class="dropdown-item" href="#">Bán chạy nhất</a></li>
                            <li><a class="dropdown-item" href="#">Tồn kho giảm dần</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- product items -->
            <div class="row g-2 row-cols-5">
                <div class="col">
                    <div class="card p-1">
                        <a class="position-relative" href="index.phpindex.php?p=chitietsanpham">
                            <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100"
                                alt="thac khoi CTM1" />
                            <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                                <span>-26%</span>
                            </div>
                        </a>
                        <div class="card-body p-2 pt-3">
                            <h3 class="card-title text-center">
                                Thác khói đĩa tròn phật thủ liên hoa CTM1
                            </h3>
                            <div class="text-center" style="font-size: 11px; margin: 6px auto" data-id="1043979047">
                                <div data-score="5" data-number="5" title="gorgeous">
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
                                <a href="#"
                                    class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
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
                        <a class="position-relative" href="index.phpindex.php?p=chitietsanpham">
                            <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100"
                                alt="thac khoi CTM1" />
                            <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                                <span>-26%</span>
                            </div>
                        </a>
                        <div class="card-body p-2 pt-3">
                            <h3 class="card-title text-center">
                                Thác khói đĩa tròn phật thủ liên hoa CTM1
                            </h3>
                            <div class=" text-center" style="font-size: 11px; margin: 6px auto" data-id="1043979047">
                                <div data-score="5" data-number="5" title="gorgeous">
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
                                <a href="#"
                                    class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
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
                        <a class="position-relative" href="index.phpindex.php?p=chitietsanpham">
                            <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100"
                                alt="thac khoi CTM1" />
                            <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                                <span>-26%</span>
                            </div>
                        </a>
                        <div class="card-body p-2 pt-3">
                            <h3 class="card-title text-center">
                                Thác khói đĩa tròn phật thủ liên hoa CTM1
                            </h3>
                            <div class=" text-center" style="font-size: 11px; margin: 6px auto" data-id="1043979047">
                                <div data-score="5" data-number="5" title="gorgeous">
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
                                <a href="#"
                                    class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
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
                        <a class="position-relative" href="index.phpindex.php?p=chitietsanpham">
                            <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100"
                                alt="thac khoi CTM1" />
                            <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                                <span>-26%</span>
                            </div>
                        </a>
                        <div class="card-body p-2 pt-3">
                            <h3 class="card-title text-center">
                                Thác khói đĩa tròn phật thủ liên hoa CTM1
                            </h3>
                            <div class=" text-center" style="font-size: 11px; margin: 6px auto" data-id="1043979047">
                                <div data-score="5" data-number="5" title="gorgeous">
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
                                <a href="#"
                                    class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
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
                        <a class="position-relative" href="index.phpindex.php?p=chitietsanpham">
                            <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100"
                                alt="thac khoi CTM1" />
                            <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                                <span>-26%</span>
                            </div>
                        </a>
                        <div class="card-body p-2 pt-3">
                            <h3 class="card-title text-center">
                                Thác khói đĩa tròn phật thủ liên hoa CTM1
                            </h3>
                            <div class="text-center" style="font-size: 11px; margin: 6px auto" data-id="1043979047">
                                <div data-score="5" data-number="5" title="gorgeous">
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
                                <a href="#"
                                    class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
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
                        <a class="position-relative" href="index.phpindex.php?p=chitietsanpham">
                            <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100"
                                alt="thac khoi CTM1" />
                            <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                                <span>-26%</span>
                            </div>
                        </a>
                        <div class="card-body p-2 pt-3">
                            <h3 class="card-title text-center">
                                Thác khói đĩa tròn phật thủ liên hoa CTM1
                            </h3>
                            <div class="text-center" style="font-size: 11px; margin: 6px auto" data-id="1043979047">
                                <div data-score="5" data-number="5" title="gorgeous">
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
                                <a href="#"
                                    class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
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
                        <a class="position-relative" href="index.phpindex.php?p=chitietsanpham">
                            <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100"
                                alt="thac khoi CTM1" />
                            <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                                <span>-26%</span>
                            </div>
                        </a>
                        <div class="card-body p-2 pt-3">
                            <h3 class="card-title text-center">
                                Thác khói đĩa tròn phật thủ liên hoa CTM1
                            </h3>
                            <div class=" text-center" style="font-size: 11px; margin: 6px auto" data-id="1043979047">
                                <div data-score="5" data-number="5" title="gorgeous">
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
                                <a href="#"
                                    class="btn-add-to-cart fw-bold d-inline-flex align-items-center justify-content-center">
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
            <div class="text-center mt-4">
                <a class="see-all-btn" href="javascript:void(0);">Xem thêm sản phẩm</a>
            </div>

            <div class="py-3 px-2 mt-4 bg-white">
                <p>Chưa có mô tả cho nhóm sản phẩm này</p>
            </div>
        </div>
    </div>
</div>