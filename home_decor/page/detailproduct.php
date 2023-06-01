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

    /* slider */
    .detail-product .owl-nav [class*=owl-]:hover {
        color: unset;
        background-color: unset;
    }

    .background-img-product {
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        padding-top: 105%;
    }

    .detail-product .owl-dot.active {
        border: 1px solid var(--color-main);
    }

    .detail-product.owl-carousel .owl-stage-outer {
        border: 1px solid #ebebeb;
    }

    /* mau sac */
    .swatch input:checked+label {
        box-shadow: 0px 1px 9px 0px rgba(4, 4, 4, 0.14);
        color: #616324;
    }

    .swatch label {
        float: left;
        min-width: 30px !important;
        height: 30px !important;
        margin: 0;
        padding: 0 5px !important;
        border: 1px solid #e1e1e1;
        background-color: #fff;
        font-size: 14px;
        text-align: center;
        line-height: 30px;
        white-space: nowrap;
        font-weight: 400;
        padding: 0;
        border-radius: 30px;
    }

    .swatch .color input:checked+label {
        border: 1px solid #d5dd02;
    }

    .swatch .color input:checked+label:after {
        content: "\f00c";
        font-family: 'Font Awesome\ 5 Free';
        font-weight: 900;
        color: #fff;
        font-size: 12px;
    }

    /* end slider */

    .form_product {
        background: #ebebeb;
        padding: 5px;
        height: 55px;
        border-radius: 3px;
    }

    .input_number_product {
        display: block;
        color: #000;
        height: 26px;
        width: 48px;
        min-height: 26px;
        border: 1px solid #e1e1e1;
        width: 48px;
        text-align: center;
        box-shadow: none;
        font-size: 14px;
        font-weight: 400;
        padding: 0;
        margin: 0 5px;
        border-radius: 3px;
    }

    .btn_num {
        font-size: 16px;
        line-height: 0px;
        display: inline-block;
        border: 1px solid #e1e1e1;
        width: 26px;
        height: 26px;
        background: #fff;
        text-align: center;
        padding: 0px;
        padding-right: 0px;
        line-height: 0px;
        border-radius: 3px;
    }

    .tab-link {
        cursor: pointer;
        border-bottom: 1px solid #ebebeb;
    }

    .tab-link:before {
        content: '\f0d7';
        font-size: 14px;
        font-family: 'Font Awesome\ 5 Free';
        font-weight: 900;
        float: right;
        margin-right: 0;
        margin-top: 3px;
        color: #707070;
    }

    /* item product */
    .my-bg-img {
        background-position: top center;
        background-repeat: no-repeat;
        background-size: cover;
        padding-top: 100%;
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

    .bg-img-main {
        background-image: url(public/demo/bg_base.png);
        background-repeat: repeat;
    }

    /* product item end */

    .titile-info-product {
        border-right: 3px solid #707070;
    }
</style>

<div class="row breadcrumb_background px-6">
    <div>
        <a href="/"><span>Trang chủ</span></a>
        <span class="mx-3"><i class="fa fa-angle-right"></i></span>
        <strong><span>Máy đánh trứng cao cấp Lock&Lock</span></strong>
    </div>
    <h2 class="fw-bold">Máy đánh trứng cao cấp Lock&Lock</h3>
</div>

<div class="row px-6">
    <div class="col-xxl-7 col-12">
        <div class="detail-product owl-carousel owl-theme rounded-pill px-0">
            <div class="background-img-product" style="background-image: url(public/demo/detail-product-1.png);"></div>
            <div class="background-img-product" style="background-image: url(public/demo/detail-product-2.png);"></div>
            <div class="background-img-product" style="background-image: url(public/demo/detail-product-3.png);"></div>
            <div class="background-img-product" style="background-image: url(public/demo/detail-product-4.png);"></div>
        </div>
    </div>

    <div class="col-xxl-5 col-12">
        <div class="text-black-50">Thương hiệu: <span class="fw-bold">Lock&Lock</span></div>
        <h4 class="fw-light">Máy đánh trứng cao cấp Lock&amp;Lock</h4>
        <div class="text-black-50"><em>Mô tả đang cập nhật</em></div>
        <div class="d-flex align-items-center">
            <span class="fw-bold fs-3 me-2">150.000₫</span>
            <del class="price product-price-old fs-6">160.000₫</del>
        </div>
        <p>Kích thước</p>
        <div style="height: 39px;" class="swatch">
            <div data-value="To">
                <input hidden id="swatch-0-to" type="radio" name="option-0" value="To" checked="">
                <label class="me-2" for="swatch-0-to">
                    To
                </label>
            </div>
            <div data-value="Vừa">
                <input hidden id="swatch-0-vua" type="radio" name="option-0" value="Vừa">
                <label class="me-2" for="swatch-0-vua">
                    Vừa
                </label>
            </div>
            <div data-value="Nhỏ">
                <input hidden id="swatch-0-nho" type="radio" name="option-0" value="Nhỏ">
                <label class="me-2" for="swatch-0-nho">
                    Nhỏ
                </label>
            </div>
        </div>

        <p class="fw-light">Màu sắc</p>
        <div class="swatch pb-5">
            <div class="color">
                <div class="tooltip">Đỏ</div>
                <input hidden id="swatch-1-do" type="radio" name="option-1" value="Đỏ" checked="">
                <label class="me-2" for="swatch-1-do" style="background-color: #f20808;">
                </label>
            </div>
            <div class="color">
                <div class="tooltip">Xanh</div>
                <input hidden id="swatch-1-xanh" type="radio" name="option-1" value="Xanh">
                <label class="me-2" for="swatch-1-xanh" style="background-color: #0554ff;">
                </label>
            </div>
            <div class="color">
                <div class="tooltip">Nâu</div>
                <input hidden id="swatch-1-nau" type="radio" name="option-1" value="Nau">
                <label class="me-2" for="swatch-1-nau" style="background-color: #0554ff;">
                </label>
            </div>
        </div>

        <div class="form_product d-inline-flex">
            <div class="d-flex px-3 py-2">
                <button class="btn_num"><i class="fas fa-minus"></i></button>
                <input type="text" value="1" maxlength="3" class="form-control input_number_product">
                <button class="btn_num"><i class="fas fa-plus"></i></button>
            </div>
            <button class="btn btn_base px-3" href="#">
                <img class="me-2" height="24" width="29" src="public/demo/i_cart.png" alt="">
                Thêm vào giỏ hàng
            </button>
        </div>

        <div class="my-3">
            Gọi đặt mua: <a href="tel:18006750">18006750</a> để nhanh chóng đặt hàng
        </div>
        <div class="mt-5">
            <h6 class="text-black-50 tab-link py-2">Chế độ bảo hành chính hãng</h6>
            <h6 class="text-black-50 tab-link py-2">Thể lệ nhận quà</h6>
            <h6 class="text-black-50 tab-link py-2">Vận chuyển và trả lại</h6>
        </div>

    </div>
</div>

<div class="row px-6 bg-img-main pb-5">
    <h2 class="fw-bold text-center my-5 pt-5">
        <span>Sản phẩm vừa xem</span>
    </h2>

    <div class="viewed-slider owl-carousel owl-theme px-0">
        <div class="item-info-product">
            <div class="position-relative">
                <a href="index.php?p=detailproduct">
                    <div class="my-bg-img" style="background-image: url(public/demo/product-thumnail.png);"></div>
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
                        </but>
                        <input class="hidden" type="hidden" name="variantId" value="21894984">
                        <button class="btn btn-cart btn btn-views left-to" title="Tuỳ chọn" type="button"
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
        <div class="item-info-product">
            <div class="position-relative">
                <a href="index.php?p=detailproduct">
                    <div class="my-bg-img" style="background-image: url(public/demo/product-thumnail-2.png);"></div>
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
                        </but>
                        <input class="hidden" type="hidden" name="variantId" value="21894984">
                        <button class="btn btn-cart btn btn-views left-to" title="Tuỳ chọn" type="button"
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
        <div class="item-info-product">
            <div class="position-relative">
                <a href="index.php?p=detailproduct">
                    <div class="my-bg-img" style="background-image: url(public/demo/product-thumnail-3.png);"></div>
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
                        </but>
                        <input class="hidden" type="hidden" name="variantId" value="21894984">
                        <button class="btn btn-cart btn btn-views left-to" title="Tuỳ chọn" type="button"
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
        <div class="item-info-product">
            <div class="position-relative">
                <a href="index.php?p=detailproduct">
                    <div class="my-bg-img" style="background-image: url(public/demo/product-thumnail-4.png);"></div>
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
                        </but>
                        <input class="hidden" type="hidden" name="variantId" value="21894984">
                        <button class="btn btn-cart btn btn-views left-to" title="Tuỳ chọn" type="button"
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
        <div class="item-info-product">
            <div class="position-relative">
                <a href="index.php?p=detailproduct">
                    <div class="my-bg-img" style="background-image: url(public/demo/product-thumnail.png);"></div>
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
                        </but>
                        <input class="hidden" type="hidden" name="variantId" value="21894984">
                        <button class="btn btn-cart btn btn-views left-to" title="Tuỳ chọn" type="button"
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
        <div class="item-info-product">
            <div class="position-relative">
                <a href="index.php?p=detailproduct">
                    <div class="my-bg-img" style="background-image: url(public/demo/product-thumnail-2.png);"></div>
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
                        </but>
                        <input class="hidden" type="hidden" name="variantId" value="21894984">
                        <button class="btn btn-cart btn btn-views left-to" title="Tuỳ chọn" type="button"
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
        <div class="item-info-product">
            <div class="position-relative">
                <a href="index.php?p=detailproduct">
                    <div class="my-bg-img" style="background-image: url(public/demo/product-thumnail-3.png);"></div>
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
                        </but>
                        <input class="hidden" type="hidden" name="variantId" value="21894984">
                        <button class="btn btn-cart btn btn-views left-to" title="Tuỳ chọn" type="button"
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
        <div class="item-info-product">
            <div class="position-relative">
                <a href="index.php?p=detailproduct">
                    <div class="my-bg-img" style="background-image: url(public/demo/product-thumnail-4.png);"></div>
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
                        </but>
                        <input class="hidden" type="hidden" name="variantId" value="21894984">
                        <button class="btn btn-cart btn btn-views left-to" title="Tuỳ chọn" type="button"
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
</div>

<div class="row px-6">
    <div class="py-5">
        <h2 class="fw-bold d-inline-block pe-3 titile-info-product">Thông tin</h2>
        <h2 style="color: #707070;" class="d-inline-block ps-3">Đánh giá</h2>
    </div>
    <p class="text-black-50">
        Dụng cụ đánh trứng cao cấp Lock&Lock là sản phẩm rất dễ sử dụng và đánh nhanh hơn máy điện thông thường.<br>
        Sản phẩm tuyệt vời ngoài đánh bong được lòng trắng trứng, còn có thể đánh được kem lỏng, nước chấm, nước sốt, bơ
        và các món tráng miệng với thời gian nhanh chóng.<br>
        Đặc biệt, bạn chỉ cần mất 25 giây để đánh bong kem từ lòng trắng trứng với thiết kế hình dạng que đánh đặc biệt
        cho phép đánh nhanh và trộn đều các nguyên liệu dễ dàng.<br>
        Sản phẩm được vận hành êm ái và hiệu quả, dễ dàng tháo lắp khi làm vệ sinh, với kích thước nhỏ gọn, giúp tiết
        kiệm không gian lưu trữ.
    </p>
</div>

<div class="row px-6 pb-5">
    <div class="col-xxl-3 col-md-4 col-6">
        <div class="item-info-product">
            <div class="position-relative">
                <a href="index.php?p=detailproduct">
                    <div class="my-bg-img" style="background-image: url(public/demo/product-thumnail.png);"></div>
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
                        </but>
                        <input class="hidden" type="hidden" name="variantId" value="21894984">
                        <button class="btn btn-cart btn btn-views left-to" title="Tuỳ chọn" type="button"
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
                    <div class="my-bg-img" style="background-image: url(public/demo/product-thumnail-2.png);"></div>
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
                        </but>
                        <input class="hidden" type="hidden" name="variantId" value="21894984">
                        <button class="btn btn-cart btn btn-views left-to" title="Tuỳ chọn" type="button"
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
                    <div class="my-bg-img" style="background-image: url(public/demo/product-thumnail-3.png);"></div>
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
                        </but>
                        <input class="hidden" type="hidden" name="variantId" value="21894984">
                        <button class="btn btn-cart btn btn-views left-to" title="Tuỳ chọn" type="button"
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
                    <div class="my-bg-img" style="background-image: url(public/demo/product-thumnail-4.png);"></div>
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
                        </but>
                        <input class="hidden" type="hidden" name="variantId" value="21894984">
                        <button class="btn btn-cart btn btn-views left-to" title="Tuỳ chọn" type="button"
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
                    <div class="my-bg-img" style="background-image: url(public/demo/product-thumnail-4.png);"></div>
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
                        </but>
                        <input class="hidden" type="hidden" name="variantId" value="21894984">
                        <button class="btn btn-cart btn btn-views left-to" title="Tuỳ chọn" type="button"
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
</div>

<script>
    $(document).ready(function () {
        $('.detail-product').owlCarousel({
            center: false,
            loop: false,
            dots: true,
            nav: false,
            autoplay: false,
            autoplayTimeout: 3000,
            autoplayHoverPause: false,
            responsive: {
                0: {
                    items: 1,
                },
                768: {
                    items: 1,
                },
                1400: {
                    items: 1,
                }
            }
        });


        $(".detail-product .owl-next").html(`<i class="bi bi-chevron-right fs-4"></i>`);
        $(".detail-product .owl-prev").html(`<i class="bi bi-chevron-left fs-4"></i>`);

        $(".detail-product .owl-dot").each(function (index, element) {
            $(element).html(`<img width="80" height="80" class="img-fluid my-thumnail-img" src="public/demo/thumnail-${index + 1}.png" alt="">`);
        })

        $('.viewed-slider').owlCarousel({
            center: false,
            loop: false,
            margin: 0,
            dots: false,
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
    })
</script>