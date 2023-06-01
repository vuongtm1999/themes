<style>
    .px-6 {
        padding-left: 3vw;
        padding-right: 3vw;
    }

    .thanh-toan .item-price span {
        font-weight: 600;
        color: #8f9bb3;
    }

    .thanh-toan .item-remove {
        position: absolute;
        top: -7px;
        left: -10px;
    }

    .thanh-toan .item-remove a {
        display: block;
        background: #8f9bb3;
        color: #fff;
        font-size: 8px;
        font-weight: 400;
        width: 20px;
        height: 20px;
        line-height: 20px;
        text-align: center;
        border-radius: 50%;
    }

    .quantity-input {
        height: 30px;
        width: 30px;
        padding: 0;
        text-align: center;
        border: 2px solid #f3f4f4;
        border-left: none;
        border-right: none;
        float: left;
    }

    .quantity-btn {
        border: 1px solid #f3f4f4;
        height: 30px;
        width: 30px;
        background: #F9F9F9;
    }

    .quantity-btn:hover svg {
        fill: #000;
    }

    .box {
        border: 2px solid var(--shop-color-main);
        padding: 9px;
        border-radius: 50%;
        opacity: 0.25;
        display: inline-block;
        margin-right: 14px;
        position: relative;
        left: 5px;
        top: 4px;
        transition: opacity;
    }

    .box:after {
        content: '\2714\fe0e';
        font-size: 13px;
        position: absolute;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        text-align: center;
        top: 0px;
        left: 0px;
        color: var(--shop-color-main);
        transition: color;
    }

    .box.active {
        opacity: 1;
    }

    .box.active:after {
        color: #ffff;
        background: var(--shop-color-main);
    }

    .btn-main {
        color: white;
        background-color: var(--shop-color-button);
        border: unset;
    }

    /* slider */
    .coupon-discount .owl-nav [class*="owl-"]:hover {
        background: transparent;
        color: unset;
    }

    .coupon-discount>.owl-nav>.owl-next {
        top: -10%;
        right: 0px;
        transform: translateY(-50%);
        position: absolute;
    }

    .coupon-discount>.owl-nav>.owl-prev {
        top: -10%;
        right: 30px;
        transform: translateY(-50%);
        position: absolute;
    }

    /* slider end */

    .coupon-wrapper {
        background: var(--home-coupon-bg);
        border-radius: 15px;
        height: 100%;
        border: 1px solid rgba(0, 0, 0, 0.08);
    }

    .info-coupon {
        top: 2px;
        right: 2px;
        background: transparent;
    }

    .btn-have-animation {
        border: unset;
        background-color: var(--shop-color-button);
        color: var(--bs-white);
        vertical-align: text-bottom;
    }

    .btn-coupon {
        font-size: 11px;
        min-width: 92px;
        padding: 2px 0px;
        text-transform: uppercase;
    }

    .coupon-left {
        border-right: 1px dashed var(--shop-color-border);
        position: relative;
    }

    .coupon-left::before,
    .coupon-left::after {
        content: "";
        width: 20px;
        height: 10px;
        right: -10px;
        position: absolute;
        background: var(--shop-color-bg);
        z-index: 99;
        border: 1px solid rgba(0, 0, 0, 0.08);
    }

    .coupon-left::before {
        top: -1px;
        border-top: 0;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
    }

    .coupon-left::after {
        bottom: -1px;
        border-bottom: 0;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    @media (min-width: 768px) {
        .px-6 {
            padding-left: 4vw;
            padding-right: 4vw;
        }

        .wrap-order-summary {
            position: -webkit-sticky;
            position: sticky;
            top: 40px;
        }
    }
</style>
<div class="row px-6 bg_light_grey thanh-toan">
    <div class="pt-2">
        <p class="breadcrumb">Trang chủ / Giỏ hàng (5)</p>
    </div>
    <div class="d-flex flex-wrap mt-2">
        <div class="col-xxl-8 col-12">
            <div class="rounded me-xxl-4 mb-5 bg-white">
                <h4 class="py-2 ps-3" style="border-bottom: 1px solid var(--shop-color-border);">Giỏ hàng của bạn</h4>

                <div class="p-3">
                    <p class="mb-2">
                        Bạn đang có <strong class="count-cart">5 sản phẩm</strong> trong giỏ hàng
                    </p>

                    <div style="border: 2px solid var(--shop-color-border);" class="p-3 rounded">
                        <!-- one selected product  -->
                        <div class="p-2 d-flex justify-content-between">
                            <div class="d-flex">
                                <div style="max-width: 80px;" class="position-relative">
                                    <img src="  //product.hstatic.net/200000583021/product/dsc06544_09f795dd12174675a211b42ffd95507c_medium.jpg"
                                        alt="Bột Trầm Hương" class="img-fluid rounded">
                                    <div class="item-remove">
                                        <a href="javascript:void(0)" class="cart">Xóa</a>
                                    </div>
                                </div>
                                <div class="ms-3">
                                    <a class="fw-light" href="/products/bot-tram-huong">Bột Trầm Hương</a>
                                    <div class="fw-light opacity-75">
                                        25g
                                    </div>
                                    <div class="item-price">
                                        <p>
                                            <span>768,000₫</span>

                                            <del style="vertical-align: text-top;"
                                                class="fs_12 opacity-75">768,000₫</del>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="text-end">
                                <div class="fw-bold fs-5 mb-1">768,000₫</div>
                                <div class="d-flex align-items-center">
                                    <button type="button" class="quantity-btn">
                                        <svg focusable="false" width="12" fill="#a4aaaf" viewBox="0 0 10 2"
                                            role="presentation">
                                            <path d="M10 0v2H0V0z"></path>
                                        </svg>
                                    </button>
                                    <input disabled type="text" value="1" min="1" class="quantity-input">
                                    <button type="button" class="quantity-btn">
                                        <svg focusable="false" width="12" fill="#a4aaaf" viewBox="0 0 10 10"
                                            role="presentation">
                                            <path d="M6 4h4v2H6v4H4V6H0V4h4V0h2v4z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="p-2 d-flex justify-content-between">
                            <div class="d-flex">
                                <div style="max-width: 80px;" class="position-relative">
                                    <img src="  //product.hstatic.net/200000583021/product/dsc06544_09f795dd12174675a211b42ffd95507c_medium.jpg"
                                        alt="Bột Trầm Hương" class="img-fluid rounded">
                                    <div class="item-remove">
                                        <a href="javascript:void(0)" class="cart">Xóa</a>
                                    </div>
                                </div>
                                <div class="ms-3">
                                    <a class="fw-light" href="/products/bot-tram-huong">Bột Trầm Hương</a>
                                    <div class="fw-light opacity-75">
                                        25g
                                    </div>
                                    <div class="item-price">
                                        <p>
                                            <span>768,000₫</span>

                                            <del style="vertical-align: text-top;"
                                                class="fs_12 opacity-75">768,000₫</del>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="text-end">
                                <div class="fw-bold fs-5 mb-1">768,000₫</div>
                                <div class="d-flex align-items-center">
                                    <button type="button" class="quantity-btn">
                                        <svg focusable="false" width="12" fill="#a4aaaf" viewBox="0 0 10 2"
                                            role="presentation">
                                            <path d="M10 0v2H0V0z"></path>
                                        </svg>
                                    </button>
                                    <input disabled type="text" value="1" min="1" class="quantity-input">
                                    <button type="button" class="quantity-btn">
                                        <svg focusable="false" width="12" fill="#a4aaaf" viewBox="0 0 10 10"
                                            role="presentation">
                                            <path d="M6 4h4v2H6v4H4V6H0V4h4V0h2v4z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="p-2 d-flex justify-content-between">
                            <div class="d-flex">
                                <div style="max-width: 80px;" class="position-relative">
                                    <img src="  //product.hstatic.net/200000583021/product/dsc06544_09f795dd12174675a211b42ffd95507c_medium.jpg"
                                        alt="Bột Trầm Hương" class="img-fluid rounded">
                                    <div class="item-remove">
                                        <a href="javascript:void(0)" class="cart">Xóa</a>
                                    </div>
                                </div>
                                <div class="ms-3">
                                    <a class="fw-light" href="/products/bot-tram-huong">Bột Trầm Hương</a>
                                    <div class="fw-light opacity-75">
                                        25g
                                    </div>
                                    <div class="item-price">
                                        <p>
                                            <span>768,000₫</span>

                                            <del style="vertical-align: text-top;"
                                                class="fs_12 opacity-75">768,000₫</del>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="text-end">
                                <div class="fw-bold fs-5 mb-1">768,000₫</div>
                                <div class="d-flex align-items-center">
                                    <button type="button" class="quantity-btn">
                                        <svg focusable="false" width="12" fill="#a4aaaf" viewBox="0 0 10 2"
                                            role="presentation">
                                            <path d="M10 0v2H0V0z"></path>
                                        </svg>
                                    </button>
                                    <input disabled type="text" value="1" min="1" class="quantity-input">
                                    <button type="button" class="quantity-btn">
                                        <svg focusable="false" width="12" fill="#a4aaaf" viewBox="0 0 10 10"
                                            role="presentation">
                                            <path d="M6 4h4v2H6v4H4V6H0V4h4V0h2v4z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg_light_grey p-3 mt-4">
                        <label for="note" class="fw-bolder mb-2">Ghi chú đơn hàng</label>
                        <div>
                            <textarea class="form-control" id="note" name="note" rows="5" spellcheck="false"></textarea>
                        </div>
                    </div>

                    <div class="mt-3">
                        <label for="checkbox-bill" class="box"></label>
                        <label for="checkbox-bill" class="fw-bolder">Xuất hoá đơn cho đơn hàng</label>
                        <div class="export-receipt mt-3" style="display: none;">
                            <div style="margin-right: -0.5rem; margin-left: -0.5rem;" class="d-flex flex-wrap">
                                <div class="col-md-4 col-12 px-2 mb-3">
                                    <input type="text" class="form-control" placeholder="Tên công ty...">
                                </div>
                                <div class="col-md-4 col-12 px-2 mb-3">
                                    <input type="text" class="form-control" placeholder="Mã số thuế...">
                                </div>
                                <div class="col-md-4 col-12 px-2 mb-3">
                                    <input type="text" class="form-control" placeholder="Email...">
                                </div>
                            </div>
                            <input type="text" class="form-control mb-3" placeholder="Địa chỉ công ty...">
                            <div class="mt-3">
                                <button href="javascript:void();" class="btn-main px-3 py-2 rounded-pill">Lưu thông
                                    tin</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-12 ">
            <div class="wrap-order-summary mb-5">
                <!-- top sider -->
                <div class="p-3 bg-white">
                    <h6>Thông tin đơn hàng</h6>

                    <div style="border-top: 1px dotted #dfe0e1;
                            border-bottom: 1px dotted #dfe0e1;"
                        class="d-flex align-item-center justify-content-between py-3">
                        <span style="line-height: 36px" class="fw-bold">Tổng tiền:</span>
                        <h4 style="color: red;">7,108,000₫</h4>
                    </div>

                    <div class="summary-action mt-3">
                        <li class="fw-light">Phí vận chuyển sẽ được tính ở trang thanh toán.</li>
                        <li class="fw-light">Bạn cũng có thể nhập mã giảm giá ở trang thanh toán.</li>
                    </div>

                    <a style="background: red;" class="btn-main text-center mt-3 py-2 d-block" href="#">THANH TOÁN </a>
                </div>

                <!-- bottom sider -->
                <div class="mt-3 p-3 bg-white mb-4">
                    <h6>Khuyến mãi dành cho bạn</h6>
                    <div class="coupon-discount owl-carousel owl-theme position-relative">
                        <div>
                            <div class="d-flex coupon-wrapper mb-3">
                                <div class="col-4 coupon-left d-inline-flex align-items-center justify-content-center">
                                    <img src="public/demo/home_coupon_1_img.webp" class="img-fluid w-50 h-30"
                                        alt="coupon 1" />
                                </div>
                                <div class="col-8 p-2 coupon-right position-relative">
                                    <button type="button" class="border-0 position-absolute info-coupon"
                                        data-toggle="popover" data-container="body" data-placement="bottom"
                                        data-popover-content="#cp-tooltip-1" data-class="coupon-popover" title=""
                                        data-original-title="Miễn phí vận chuyển ">
                                        <img src="public/demo/info-icon.svg" class="img-fluid" alt="">
                                    </button>
                                    <div class="cp-top pb-4">
                                        <h6 class="fs_14 mb-0">Miễn phí vận chuyển</h6>
                                        <p class="fs_12">Đơn hàng từ 1.000k</p>
                                    </div>
                                    <div class="cp-bottom pt-1">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="fs_10">
                                                    Mã: <span class="fw-bold">CT1MFREESHIP</span>
                                                </p>
                                                <p class="fs_10">HSD:</p>
                                            </div>
                                            <div class="cp-bottom-btn">
                                                <button class="btn-have-animation rounded-pill btn-coupon"
                                                    data-coupon="CT1MFREESHIP">
                                                    Sao chép mã
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex coupon-wrapper">
                                <div class="col-4 coupon-left d-inline-flex align-items-center justify-content-center">
                                    <img src="public/demo/home_coupon_1_img.webp" class="img-fluid w-50 h-30"
                                        alt="coupon 1" />
                                </div>
                                <div class="col-8 p-2 coupon-right position-relative">
                                    <button type="button" class="border-0 position-absolute info-coupon"
                                        data-toggle="popover" data-container="body" data-placement="bottom"
                                        data-popover-content="#cp-tooltip-1" data-class="coupon-popover" title=""
                                        data-original-title="Miễn phí vận chuyển ">
                                        <img src="public/demo/info-icon.svg" class="img-fluid" alt="">
                                    </button>
                                    <div class="cp-top pb-4">
                                        <h6 class="fs_14 mb-0">Miễn phí vận chuyển</h6>
                                        <p class="fs_12">Đơn hàng từ 1.000k</p>
                                    </div>
                                    <div class="cp-bottom pt-1">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="fs_10">
                                                    Mã: <span class="fw-bold">CT1MFREESHIP</span>
                                                </p>
                                                <p class="fs_10">HSD:</p>
                                            </div>
                                            <div class="cp-bottom-btn">
                                                <button class="btn-have-animation rounded-pill btn-coupon"
                                                    data-coupon="CT1MFREESHIP">
                                                    Sao chép mã
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex coupon-wrapper mb-3">
                                <div class="col-4 coupon-left d-inline-flex align-items-center justify-content-center">
                                    <img src="public/demo/home_coupon_1_img.webp" class="img-fluid w-50 h-30"
                                        alt="coupon 1" />
                                </div>
                                <div class="col-8 p-2 coupon-right position-relative">
                                    <button type="button" class="border-0 position-absolute info-coupon"
                                        data-toggle="popover" data-container="body" data-placement="bottom"
                                        data-popover-content="#cp-tooltip-1" data-class="coupon-popover" title=""
                                        data-original-title="Miễn phí vận chuyển ">
                                        <img src="public/demo/info-icon.svg" class="img-fluid" alt="">
                                    </button>
                                    <div class="cp-top pb-4">
                                        <h6 class="fs_14 mb-0">Miễn phí vận chuyển</h6>
                                        <p class="fs_12">Đơn hàng từ 1.000k</p>
                                    </div>
                                    <div class="cp-bottom pt-1">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="fs_10">
                                                    Mã: <span class="fw-bold">CT1MFREESHIP</span>
                                                </p>
                                                <p class="fs_10">HSD:</p>
                                            </div>
                                            <div class="cp-bottom-btn">
                                                <button class="btn-have-animation rounded-pill btn-coupon"
                                                    data-coupon="CT1MFREESHIP">
                                                    Sao chép mã
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="owlcarousel/owl.carousel.min.js"></script>
<script>
    $(document).ready(function () {
        // 
        $("label[for=checkbox-bill]").on("click", function () {
            $(".export-receipt").slideToggle(500);
            $(".box").toggleClass("active");
        });

        // 
        $(".coupon-discount").owlCarousel({
            center: false,
            loop: false,
            margin: 14,
            nav: true,
            dots: false,
            autoplay: false,
            responsive: {
                0: {
                    items: 1,
                }
            },
        });
        $(".coupon-discount .owl-next").html('<i class="bi bi-arrow-right-short icon-prev" style="font-size: 28px;"></i>');
        $(".coupon-discount .owl-prev").html('<i class="bi bi-arrow-left-short icon-next" style="font-size: 28px;"></i>');
    })
</script>