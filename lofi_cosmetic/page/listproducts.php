<style>
    .coupon_item .coupon_info_toggle {
        font-size: 12px;
        text-decoration: underline;
        color: #2E72D2;
        cursor: pointer;
        margin-bottom: 3px;
    }

    .coupon_item {
        position: relative;
        filter: drop-shadow(0px 0px 3px #ccc);
        border-radius: 5px;
        min-height: 100px;
        background: #fff;
    }

    .coupon_item:before {
        content: "";
        position: absolute;
        top: 0;
        left: -3px;
        height: 100%;
        width: 10px;
        color: #fff;
        background: repeating-linear-gradient(#e5e5e5, #e5e5e5 5px, transparent 0, transparent 9px, #e5e5e5 0, #e5e5e5 10px) 0/1px 100% no-repeat, radial-gradient(circle at 0 7px, transparent, transparent 2px, #e5e5e5ee 0, #e5e5e5 3px, currentColor 0) 1px 0/100% 10px repeat-y;
    }

    .coupon_item .coupon_desc {
        font-size: 13px;
        line-height: 21px;
        color: #727272;
        padding-bottom: 10px;
    }

    .coupon_item .coupon_copy {
        border: none;
        padding: 7px 15px;
        margin-bottom: 3px;
        font-size: 12px;
        border-radius: 25px;
        background: var(--color-bold-green);
        color: #fff;
    }

    .btn-close {
        top: 7px;
        right: 8px;
    }

    .coupon-row {
        background-color: #f3f3f3;
    }

    .coupon-label {
        color: #4c4c4c;
    }

    .btn-coppy {
        border: none;
        background: var(--color-bold-green);
        color: #fff;
        width: 100%;
    }

    .btn-dong {
        border: none;
        font-size: #EFEFEF;
        width: 100%;
    }

    .second-image {
        opacity: 0;
    }

    .product-image:hover .second-image {
        opacity: 1;
    }

    .product-image:hover .main-image {
        opacity: 0;
    }

    .product-name a {
        color: #333;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
    }

    .product-name a:hover {
        color: #00dca0;
    }

    .compare-price {
        text-decoration: line-through;
        font-size: 14px;
        color: #707070;
        line-height: 17px;
        font-weight: 300;
        display: inline;
    }

    .product-image::before {
        content: attr(data-sale);
        position: absolute;
        top: 15px;
        left: 15px;
        z-index: 3;
        text-align: center;
        color: #fff;
        background: #0a402b;
        font-weight: 500;
        font-size: 12px;
        width: 46px;
        height: 18px;
    }

    .lofi-mybints {
        position: absolute;
        bottom: 15px;
        left: 50%;
        background: #fff;
        padding: 0px;
        z-index: 2;
        display: flex;
        justify-content: center;
        border-radius: 5px;
        box-shadow: 0 5px 10px rgb(0 0 0 / 5%);
        transform: translate3d(-50%, 150%, 0);
        transition: all .3s ease;
        opacity: 0;
        overflow: hidden;
    }

    .product-image:hover .lofi-mybints {
        opacity: 1;
        transform: translate3d(-50%, 0, 0);
    }

    .center-action {
        border-right: 1px solid #eee;
        border-left: 1px solid #eee;
    }

    .action-item {
        width: 45px;
        height: 45px;
    }

    .action-item:hover {
        background-color: #f5f5f5;
    }

    .price {
        color: #d81c1c;
        font-size: 16px;
        font-weight: 700;
    }

    .shadow-sm {
        box-shadow: 0 0 0.25rem rgba(0, 0, 0, .075) !important;
    }

    .sticky-left-side {
        position: sticky;
        top: 90px;
    }

    .scrollBar {
        overflow-x: auto;
        flex-wrap: nowrap;
    }

    .scrollBar::-webkit-scrollbar {
        display: none;
    }
</style>


<div class="row">
    <div style="background-color: var(--bg-grey);" class="py-3 px-xxl-5">
        <a class="fs-6" href="index.php">Trang chủ</a> / <span class="fs-6">Tất cả sản phẩm</span>
    </div>
</div>

<div class="row my-4 px-xxl-4 px-2 scrollBar">
    <div class="col-xxl-3 col-md-4 col-12 mb-3">
        <div class="coupon_item p-3">
            <div class="coupon_head">
                <p class="fw-bold text-bold-green mb-1">NHẬP MÃ: FEB</p>
                <div class="coupon_desc">Mã giảm THÊM 12% tối đa 50k cho mọi đơn hàng</div>
            </div>
            <div class="d-flex align-items-center flex-wrap justify-content-between">
                <a class="btn btn-main btn-sm coupon_copy">Sao chép
                    mã</a>
                <span class="coupon_info_toggle" data-bs-toggle="modal" data-bs-target="#coupon-1">
                    Điều kiện
                </span>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-md-4 col-12 mb-3">
        <div class="coupon_item p-3">
            <div class="coupon_head">
                <p class="fw-bold text-bold-green mb-1">NHẬP MÃ: FEB</p>
                <div class="coupon_desc">Mã giảm THÊM 12% tối đa 50k cho mọi đơn hàng</div>
            </div>
            <div class="d-flex align-items-center flex-wrap justify-content-between">
                <a class="btn btn-main btn-sm coupon_copy">Sao chép
                    mã</a>
                <span class="coupon_info_toggle" data-bs-toggle="modal" data-bs-target="#coupon-2">
                    Điều kiện
                </span>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-md-4 col-12 mb-3">
        <div class="coupon_item p-3">
            <div class="coupon_head">
                <p class="fw-bold text-bold-green mb-1">NHẬP MÃ: FEB</p>
                <div class="coupon_desc">Mã giảm THÊM 12% tối đa 50k cho mọi đơn hàng</div>
            </div>
            <div class="d-flex align-items-center flex-wrap justify-content-between">
                <a class="btn btn-main btn-sm coupon_copy">Sao chép
                    mã</a>
                <span class="coupon_info_toggle" data-bs-toggle="modal" data-bs-target="#coupon-1">
                    Điều kiện
                </span>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-md-4 col-12 mb-3">
        <div class="coupon_item p-3">
            <div class="coupon_head">
                <p class="fw-bold text-bold-green mb-1">NHẬP MÃ: FEB</p>
                <div class="coupon_desc">Mã giảm THÊM 12% tối đa 50k cho mọi đơn hàng</div>
            </div>
            <div class="d-flex align-items-center flex-wrap justify-content-between">
                <a class="btn btn-main btn-sm coupon_copy">Sao chép
                    mã</a>
                <span class="coupon_info_toggle" data-bs-toggle="modal" data-bs-target="#coupon-2">
                    Điều kiện
                </span>
            </div>
        </div>
    </div>
</div>

<div class="row px-xxl-4 px-2">
    <div class="col-md-3 d-none d-xxl-block">
        <div class="sticky-left-side mb-5">
            <p class="fw-bold pointer mt-1" data-bs-toggle="collapse" href="#type-product"
                aria-controls="collapseExample">
                LOẠI SẢN PHẨM
                <i class="bi bi-chevron-down float-end"></i>
            </p>
            <div class="collapse show" id="type-product">
                <ul class="list-unstyled">
                    <li>
                        <label class="fs-6" for="filter-phan">
                            <input type="checkbox" id="filter-phan">
                            Phấn
                        </label>
                    </li>
                    <li>
                        <label class="fs-6" for="filter-phan-mat">
                            <input type="checkbox" id="filter-phan-mat">
                            Phấn mắt
                        </label>
                    </li>
                </ul>
            </div>

            <p class="fw-bold pointer mt-4" data-bs-toggle="collapse" href="#branch" aria-controls="branch">
                THƯƠNG HIỆU
                <i class="bi bi-chevron-down float-end"></i>
            </p>
            <div class="collapse show" id="branch">
                <ul class="list-unstyled">
                    <li>
                        <label class="fs-6" for="filter-phan">
                            <input type="checkbox" id="filter-phan">
                            3CE
                        </label>
                    </li>
                    <li>
                        <label class="fs-6" for="filter-phan-mat">
                            <input type="checkbox" id="filter-phan-mat">
                            Flormar
                        </label>
                    </li>
                    <li>
                        <label class="fs-6" for="filter-phan">
                            <input type="checkbox" id="filter-phan">
                            Gilaa
                        </label>
                    </li>
                    <li>
                        <label class="fs-6" for="filter-phan-mat">
                            <input type="checkbox" id="filter-phan-mat">
                            Lofi Cosmetics
                        </label>
                    </li>
                </ul>
            </div>

            <p class="fw-bold pointer mt-4" data-bs-toggle="collapse" href="#price" aria-controls="collapseExample">
                GIÁ SẢN PHẨM
                <i class="bi bi-chevron-down float-end"></i>
            </p>
            <div class="collapse show" id="price">
                <ul class="list-unstyled">
                    <li>
                        <label class="fs-6" for="filter-phan">
                            <input type="checkbox" id="filter-phan">
                            Giá dưới 1.000.000đ
                        </label>
                    </li>
                    <li>
                        <label class="fs-6" for="filter-phan-mat">
                            <input type="checkbox" id="filter-phan-mat">
                            1.000.000đ - 3.000.000đ
                        </label>
                    </li>
                    <li>
                        <label class="fs-6" for="filter-phan">
                            <input type="checkbox" id="filter-phan">
                            3.000.000đ - 5.000.000đ
                        </label>
                    </li>
                    <li>
                        <label class="fs-6" for="filter-phan-mat">
                            <input type="checkbox" id="filter-phan-mat">
                            5.000.000đ - 10.000.000đ
                        </label>
                    </li>
                    <li>
                        <label class="fs-6" for="filter-phan-mat">
                            <input type="checkbox" id="filter-phan-mat">
                            Giá trên 10.000.000đ
                        </label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-xxl-9 col-12 ps-xxl-5">
        <div style="border-bottom: 1px solid #0a402b;" class="d-flex justify-content-between pb-md-2 pb-4 mb-2">
            <h4 class="d-md-block d-none">Trang điểm</h4>
            <div id="sort-by">
                <label class="fs-5 me-3">Sắp xếp: </label>

                <select name="sortBy" id="sortBy" class="px-2 py-1 rounded">
                    <option selected value="default">Mặc định</option>
                    <option value="alpha-asc">A → Z</option>
                    <option value="alpha-desc">Z → A</option>
                    <option value="price-asc">Giá tăng dần</option>
                    <option value="price-desc">Giá giảm dần</option>
                    <option value="created-desc">Hàng mới nhất</option>
                    <option value="created-asc">Hàng cũ nhất</option>
                </select>
                <script src="//bizweb.dktcdn.net/100/473/812/themes/889220/assets/sortby.js?1681183006918"
                    type="text/javascript"></script>
            </div>
        </div>
        <div class="row gy-4 mt-2">
            <div class="col-md-4 col-6">
                <div class="bg-white shadow-sm">
                    <a title="Halio Máy triệt lông cá nhân
                      IPL Hair Removal Device (IP02)" href="index.php?p=chitietsanpham">
                        <div class="product-image position-relative" data-sale="-10%">
                            <img class="img-fluid main-image" src="public/demo/main-img-product.png"
                                alt="product-img-1">
                            <div class="second-image position-absolute second-image top-0 start-0 bottom-0">
                                <img class="img-fluid" src="public/demo/second-img-product.png" alt="product-img-2">
                            </div>
                            <div class="lofi-mybints d-flex align-items-center">
                                <div class="action-item">
                                    <a style="height: 45px;" class="d-flex align-items-center justify-content-center"
                                        title="Thêm vào giỏ hàng" href="javascript:void();">
                                        <img width="20" height="20" src="public/demo/card-icon.svg" alt="">
                                    </a>
                                </div>
                                <div class="action-item">
                                    <a style="height: 45px;" class="d-flex align-items-center justify-content-center"
                                        href="javascript:void(0)" title="Thêm vào yêu thích">
                                        <img width="20" height="20" src="public/demo/heart-icon.svg" alt="">
                                    </a>
                                </div>
                                <div class="action-item">
                                    <a style="height: 45px;" class="d-flex align-items-center justify-content-center"
                                        href="javascript:void(0)" title="Xem nhanh">
                                        <img width="20" height="20" src="public/demo/xem-nhanh-icon.svg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </a>

                    <div style="z-index: 5;" class="p-2 pb-4 position-relative">
                        <h6 class="product-name">
                            <a title="Halio Máy triệt lông cá nhân
                          IPL Hair Removal Device (IP02)" href="#">
                                Halio Máy triệt lông cá nhân
                                IPL Hair Removal Device (IP02)
                            </a>
                        </h6>
                        <div>
                            <span class="price me-2">2.880.000₫</span>
                            <span class="compare-price">3.200.000₫</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-6">
                <div class="bg-white shadow-sm">
                    <a title="Halio Máy triệt lông cá nhân
                      IPL Hair Removal Device (IP02)" href="index.php?p=chitietsanpham">
                        <div class="product-image position-relative" data-sale="-10%">
                            <img class="img-fluid main-image" src="public/demo/main-img-product.png"
                                alt="product-img-1">
                            <div class="second-image position-absolute second-image top-0 start-0 bottom-0">
                                <img class="img-fluid" src="public/demo/second-img-product.png" alt="product-img-2">
                            </div>
                            <div class="lofi-mybints d-flex align-items-center">
                                <div class="action-item">
                                    <a style="height: 45px;" class="d-flex align-items-center justify-content-center"
                                        title="Thêm vào giỏ hàng" href="javascript:void();">
                                        <img width="20" height="20" src="public/demo/card-icon.svg" alt="">
                                    </a>
                                </div>
                                <div class="action-item">
                                    <a style="height: 45px;" class="d-flex align-items-center justify-content-center"
                                        href="javascript:void(0)" title="Thêm vào yêu thích">
                                        <img width="20" height="20" src="public/demo/heart-icon.svg" alt="">
                                    </a>
                                </div>
                                <div class="action-item">
                                    <a style="height: 45px;" class="d-flex align-items-center justify-content-center"
                                        href="javascript:void(0)" title="Xem nhanh">
                                        <img width="20" height="20" src="public/demo/xem-nhanh-icon.svg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </a>

                    <div style="z-index: 5;" class="p-2 pb-4 position-relative">
                        <h6 class="product-name">
                            <a title="Halio Máy triệt lông cá nhân
                          IPL Hair Removal Device (IP02)" href="#">
                                Halio Máy triệt lông cá nhân
                                IPL Hair Removal Device (IP02)
                            </a>
                        </h6>
                        <div>
                            <span class="price me-2">2.880.000₫</span>
                            <span class="compare-price">3.200.000₫</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-6">
                <div class="bg-white shadow-sm">
                    <a title="Halio Máy triệt lông cá nhân
                      IPL Hair Removal Device (IP02)" href="index.php?p=chitietsanpham">
                        <div class="product-image position-relative" data-sale="-10%">
                            <img class="img-fluid main-image" src="public/demo/main-img-product.png"
                                alt="product-img-1">
                            <div class="second-image position-absolute second-image top-0 start-0 bottom-0">
                                <img class="img-fluid" src="public/demo/second-img-product.png" alt="product-img-2">
                            </div>
                            <div class="lofi-mybints d-flex align-items-center">
                                <div class="action-item">
                                    <a style="height: 45px;" class="d-flex align-items-center justify-content-center"
                                        title="Thêm vào giỏ hàng" href="javascript:void();">
                                        <img width="20" height="20" src="public/demo/card-icon.svg" alt="">
                                    </a>
                                </div>
                                <div class="action-item">
                                    <a style="height: 45px;" class="d-flex align-items-center justify-content-center"
                                        href="javascript:void(0)" title="Thêm vào yêu thích">
                                        <img width="20" height="20" src="public/demo/heart-icon.svg" alt="">
                                    </a>
                                </div>
                                <div class="action-item">
                                    <a style="height: 45px;" class="d-flex align-items-center justify-content-center"
                                        href="javascript:void(0)" title="Xem nhanh">
                                        <img width="20" height="20" src="public/demo/xem-nhanh-icon.svg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </a>

                    <div style="z-index: 5;" class="p-2 pb-4 position-relative">
                        <h6 class="product-name">
                            <a title="Halio Máy triệt lông cá nhân
                          IPL Hair Removal Device (IP02)" href="#">
                                Halio Máy triệt lông cá nhân
                                IPL Hair Removal Device (IP02)
                            </a>
                        </h6>
                        <div>
                            <span class="price me-2">2.880.000₫</span>
                            <span class="compare-price">3.200.000₫</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-6">
                <div class="bg-white shadow-sm">
                    <a title="Halio Máy triệt lông cá nhân
                      IPL Hair Removal Device (IP02)" href="index.php?p=chitietsanpham">
                        <div class="product-image position-relative" data-sale="-10%">
                            <img class="img-fluid main-image" src="public/demo/main-img-product.png"
                                alt="product-img-1">
                            <div class="second-image position-absolute second-image top-0 start-0 bottom-0">
                                <img class="img-fluid" src="public/demo/second-img-product.png" alt="product-img-2">
                            </div>
                            <div class="lofi-mybints d-flex align-items-center">
                                <div class="action-item">
                                    <a style="height: 45px;" class="d-flex align-items-center justify-content-center"
                                        title="Thêm vào giỏ hàng" href="javascript:void();">
                                        <img width="20" height="20" src="public/demo/card-icon.svg" alt="">
                                    </a>
                                </div>
                                <div class="action-item">
                                    <a style="height: 45px;" class="d-flex align-items-center justify-content-center"
                                        href="javascript:void(0)" title="Thêm vào yêu thích">
                                        <img width="20" height="20" src="public/demo/heart-icon.svg" alt="">
                                    </a>
                                </div>
                                <div class="action-item">
                                    <a style="height: 45px;" class="d-flex align-items-center justify-content-center"
                                        href="javascript:void(0)" title="Xem nhanh">
                                        <img width="20" height="20" src="public/demo/xem-nhanh-icon.svg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </a>

                    <div style="z-index: 5;" class="p-2 pb-4 position-relative">
                        <h6 class="product-name">
                            <a title="Halio Máy triệt lông cá nhân
                          IPL Hair Removal Device (IP02)" href="#">
                                Halio Máy triệt lông cá nhân
                                IPL Hair Removal Device (IP02)
                            </a>
                        </h6>
                        <div>
                            <span class="price me-2">2.880.000₫</span>
                            <span class="compare-price">3.200.000₫</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-6">
                <div class="bg-white shadow-sm">
                    <a title="Halio Máy triệt lông cá nhân
                      IPL Hair Removal Device (IP02)" href="index.php?p=chitietsanpham">
                        <div class="product-image position-relative" data-sale="-10%">
                            <img class="img-fluid main-image" src="public/demo/main-img-product.png"
                                alt="product-img-1">
                            <div class="second-image position-absolute second-image top-0 start-0 bottom-0">
                                <img class="img-fluid" src="public/demo/second-img-product.png" alt="product-img-2">
                            </div>
                            <div class="lofi-mybints d-flex align-items-center">
                                <div class="action-item">
                                    <a style="height: 45px;" class="d-flex align-items-center justify-content-center"
                                        title="Thêm vào giỏ hàng" href="javascript:void();">
                                        <img width="20" height="20" src="public/demo/card-icon.svg" alt="">
                                    </a>
                                </div>
                                <div class="action-item">
                                    <a style="height: 45px;" class="d-flex align-items-center justify-content-center"
                                        href="javascript:void(0)" title="Thêm vào yêu thích">
                                        <img width="20" height="20" src="public/demo/heart-icon.svg" alt="">
                                    </a>
                                </div>
                                <div class="action-item">
                                    <a style="height: 45px;" class="d-flex align-items-center justify-content-center"
                                        href="javascript:void(0)" title="Xem nhanh">
                                        <img width="20" height="20" src="public/demo/xem-nhanh-icon.svg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </a>

                    <div style="z-index: 5;" class="p-2 pb-4 position-relative">
                        <h6 class="product-name">
                            <a title="Halio Máy triệt lông cá nhân
                          IPL Hair Removal Device (IP02)" href="#">
                                Halio Máy triệt lông cá nhân
                                IPL Hair Removal Device (IP02)
                            </a>
                        </h6>
                        <div>
                            <span class="price me-2">2.880.000₫</span>
                            <span class="compare-price">3.200.000₫</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-6">
                <div class="bg-white shadow-sm">
                    <a title="Halio Máy triệt lông cá nhân
                      IPL Hair Removal Device (IP02)" href="index.php?p=chitietsanpham">
                        <div class="product-image position-relative" data-sale="-10%">
                            <img class="img-fluid main-image" src="public/demo/main-img-product.png"
                                alt="product-img-1">
                            <div class="second-image position-absolute second-image top-0 start-0 bottom-0">
                                <img class="img-fluid" src="public/demo/second-img-product.png" alt="product-img-2">
                            </div>
                            <div class="lofi-mybints d-flex align-items-center">
                                <div class="action-item">
                                    <a style="height: 45px;" class="d-flex align-items-center justify-content-center"
                                        title="Thêm vào giỏ hàng" href="javascript:void();">
                                        <img width="20" height="20" src="public/demo/card-icon.svg" alt="">
                                    </a>
                                </div>
                                <div class="action-item">
                                    <a style="height: 45px;" class="d-flex align-items-center justify-content-center"
                                        href="javascript:void(0)" title="Thêm vào yêu thích">
                                        <img width="20" height="20" src="public/demo/heart-icon.svg" alt="">
                                    </a>
                                </div>
                                <div class="action-item">
                                    <a style="height: 45px;" class="d-flex align-items-center justify-content-center"
                                        href="javascript:void(0)" title="Xem nhanh">
                                        <img width="20" height="20" src="public/demo/xem-nhanh-icon.svg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </a>

                    <div style="z-index: 5;" class="p-2 pb-4 position-relative">
                        <h6 class="product-name">
                            <a title="Halio Máy triệt lông cá nhân
                          IPL Hair Removal Device (IP02)" href="#">
                                Halio Máy triệt lông cá nhân
                                IPL Hair Removal Device (IP02)
                            </a>
                        </h6>
                        <div>
                            <span class="price me-2">2.880.000₫</span>
                            <span class="compare-price">3.200.000₫</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row my-5 justify-content-center">
            <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">»</a></li>
            </ul>
        </div>
    </div>
</div>


<div class="modal fade" id="coupon-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header position-relative justify-content-center border-0">
                <h5 class="text-center text-bold-green fs-4">NHẬP MÃ: FEB</h5>
                <button type="button" class="btn-close position-absolute" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="coupon-row d-flex align-content-center px-4 py-2">
                    <div class="coupon-label">Mã khuyến mãi:</div>
                    <span class="ms-5">FEB</span>
                </div>

                <div class="py-3 px-4 mb-3">
                    <div class="coupon-label">Điều kiện:</div>
                    <div class="coupon-info">
                        - Áp dụng từ ngày 23.02-03.03.2023<br>
                        - Mã giảm THÊM 12% tối đa 50k cho mọi đơn hàng
                    </div>
                </div>
            </div>
            <div class="modal-footer align-items-center flex-nowrap">
                <div class="w-50 mx-2">
                    <button type="button" class="btn-dong py-2 px-2" data-bs-dismiss="modal">Đóng</button>
                </div>
                <div class="w-50 mx-2">
                    <button class="btn-coppy py-2 px-2" data-ega-coupon="FEB">
                        <span>Sao chép mã</span></button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="coupon-2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header position-relative justify-content-center border-0">
                <h5 class="text-center text-bold-green fs-4">NHẬP MÃ: FEB</h5>
                <button type="button" class="btn-close position-absolute" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="coupon-row d-flex align-content-center px-4 py-2">
                    <div class="coupon-label">Mã khuyến mãi:</div>
                    <span class="ms-5">FEB</span>
                </div>

                <div class="py-3 px-4 mb-3">
                    <div class="coupon-label">Điều kiện:</div>
                    <div class="coupon-info">
                        - Áp dụng từ ngày 23.02-03.03.2023<br>
                        - Mã giảm THÊM 12% tối đa 50k cho mọi đơn hàng
                    </div>
                </div>
            </div>
            <div class="modal-footer align-items-center flex-nowrap">
                <div class="w-50 mx-2">
                    <button type="button" class="btn-dong py-2 px-2" data-bs-dismiss="modal">Đóng</button>
                </div>
                <div class="w-50 mx-2">
                    <button class="btn-coppy py-2 px-2" data-ega-coupon="FEB">
                        <span>Sao chép mã</span></button>
                </div>
            </div>
        </div>
    </div>
</div>