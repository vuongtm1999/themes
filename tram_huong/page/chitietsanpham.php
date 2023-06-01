<style>
    p {
        margin-bottom: 1em !important;
    }

    .detail-product.owl-theme .owl-nav [class*=owl-]:hover {
        background: transparent;
        color: #FFF;
        text-decoration: none;
    }

    .detail-product.owl-theme .owl-nav .disabled {
        display: none;
    }

    .detail-product>.owl-nav>.owl-next {
        top: 50%;
        transform: translateY(-50%);
        position: absolute;
        right: 10px;
    }

    .detail-product>.owl-nav>.owl-prev {
        top: 50%;
        transform: translateY(-50%);
        position: absolute;
        left: 10px;
    }

    .img-detail-product {
        overflow: hidden;
        padding-top: 100%;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .product-price {
        background: #fafafa;
    }

    .option label {
        position: relative;
        display: block;
        margin: 0;
        padding: 7px 10px;
        min-width: 70px;
        font-size: 12px;
        font-weight: 500;
        color: var(--shop-color-title);
        background-color: #fff;
        border: 1px solid #bdbfbe;
        border-radius: 4px;
        text-align: center;
        cursor: pointer;
    }

    .option label.active {
        border: 1px solid var(--shop-color-main);
    }

    .option label:before {
        position: absolute;
        content: "";
        width: 0;
        height: 0;
        right: -1px;
        top: -1px;
        border-style: solid;
        border-width: 0px 19px 19px 0px;
        border-color: transparent var(--shop-color-main) transparent transparent;
    }

    .option label:after {
        position: absolute;
        content: "";
        width: 19px;
        height: 19px;
        right: -1px;
        top: -1px;
        background-image: url("public/demo/check_icon.svg");
    }

    .quantity-input {
        height: 40px;
        width: 40px;
        padding: 0;
        text-align: center;
        border: 2px solid #f3f4f4;
        border-left: none;
        border-right: none;
        float: left;
    }

    .quantity-btn {
        border: 1px solid #f3f4f4;
        height: 40px;
        width: 40px;
        background: white;
    }

    .quantity-btn:hover svg {
        fill: #000;
    }

    .my-btn {
        background-color: white;
        width: 220px;
        height: 45px;
        border-radius: 4px;
        text-transform: uppercase;
        font-weight: 600;
    }

    .btn-add-to-cart_1 {
        border: 1px solid #e70505;
        color: #e70505;
    }

    .btn-buy-now {
        background-color: #e70505;
        color: white;
        border: none;
    }

    .product-toshare a {
        margin-left: 10px;
    }

    .product-deliverly {
        border-radius: 4px;
        border: 1px solid #eee;
    }

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
    }

    .btn-coupon {
        font-size: 11px;
        min-width: 92px;
        padding: 2px 0px;
        text-transform: uppercase;
        vertical-align: middle;
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

    .nav-item.active:before {
        position: absolute;
        content: "";
        width: 100%;
        height: 2px;
        background: var(--shop-color-title);
        bottom: -10px;
        left: 0;
    }

    .table-of-contents {
        background: #f7fbf9;
        border: 1px solid #e0f1e9;
        border-radius: 6px;
        display: block;
        box-shadow: 0 1px 1px rgb(0 0 0 / 5%);
    }

    .btn-submit-review,
    .btn-sent-review {
        background: #e70505 !important;
        padding: 10px;
        border: 0;
        color: white;
    }

    .form-review {
        padding: 20px;
        border: 1px solid #ff9b20;
        background-color: #ff9b2000;
        border-radius: 2px;
        margin-top: 10px;
        width: 80%;
        margin-right: auto;
        margin-left: auto;
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

    .pro-sale {
        top: 2px;
        left: 3px;
        background: red;
        min-width: 40px;
        text-align: center;
        padding-top: 1px;
        padding-bottom: 1px;
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

    .btnico svg {
        width: 16px;
        height: 31px;
        display: block;
        margin: auto;
        fill: #ffffff;
    }

    .btnico {
        display: block;
        width: 32px;
        height: 32px;
        background: #c73328;
        border-radius: 50%;
        transition: all 0.5s;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .btn-add-to-cart {
        border-radius: 16px;
        border: 1px solid transparent;
        transition: border 0.2s ease;
        border-right: 0px transparent;
        text-transform: uppercase;
    }

    .btn-add-to-cart:hover {
        border-color: #c73328;
    }

    .star-filled {
        color: rgb(236, 186, 85);
    }


    .silider-product .owl-nav [class*="owl-"]:hover {
        background: var(--shop-color-button);
        color: #fff;
    }

    .silider-product .owl-prev.disabled:hover {
        background: #fff !important;
        color: #858380;
        cursor: no-drop;
    }

    .silider-product .icon-next,
    .silider-product .icon-prev {
        width: 30px;
        height: 30px;
        vertical-align: middle;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .silider-product>.owl-nav>.owl-next,
    .silider-product>.owl-nav>.owl-prev {
        background-color: white;
        z-index: 3;
        border-radius: 50%;
        color: #858380;
        background: #fff;
        border: 1px solid var(--shop-color-border);
        box-shadow: 0 0.125rem 0.25rem rgb(0 0 0 / 8%);
        margin: 0px;
    }

    .silider-product>.owl-nav>.owl-next {
        position: absolute;
        top: -12%;
        right: 0;
    }

    .silider-product>.owl-nav>.owl-prev {
        position: absolute;
        top: -12%;
        right: 8vw;
    }

    .silider-product.owl-theme .owl-nav {
        margin-top: 0px !important;
    }

    @media (max-width: 768px) {
        .promotion-item {
            margin-bottom: 15px;
        }
    }

    @media (min-width: 768px) {
        .promotion-item {
            margin-bottom: 15px;
        }

        .px-6 {
            padding-left: 4vw !important;
            padding-right: 4vw !important;
        }

        .silider-product>.owl-nav>.owl-prev {
            position: absolute;
            top: -14%;
            right: 40px;
        }

        .silider-product>.owl-nav>.owl-next {
            position: absolute;
            top: -14%;
            right: 0;
        }
    }

    @media (min-width: 1400px) {}
</style>

<div class="row px-6 bg_light_grey">
    <div class="pt-2">
        <p class="breadcrumb">Trang chủ / Danh mục / Bột Trầm Hương Thượng Hạng</p>
    </div>

    <!-- Images and info product -->
    <div class="bg-white d-flex flex-wrap">
        <div class="col-xxl-5 col-12 pe-xxl-3 pt-3">
            <div class="detail-product moi2 owl-carousel owl-theme">
                <div class="img-detail-product" style="background-image: url(public/demo/product_detail_1.webp);">
                </div>
                <div class="img-detail-product" style="background-image: url(public/demo/product_detail_1.webp);">
                </div>
                <div class="img-detail-product" style="background-image: url(public/demo/product_detail_1.webp);">
                </div>
            </div>
        </div>
        <div class="col-xxl-7 col-12" style="border-left: 1px solid #eee;">
            <h4 class="mb-0 pt-3">Bột Trầm Hương Thượng Hạng</h4>
            <div class="d-flex align-items-center">
                <i style="color: #fdd836 !important;" class="bi bi-star fs-5 me-1"></i>
                <i style="color: #fdd836 !important;" class="bi bi-star fs-5 me-1"></i>
                <i style="color: #fdd836 !important;" class="bi bi-star fs-5 me-1"></i>
                <i style="color: #fdd836 !important;" class="bi bi-star fs-5 me-1"></i>
                <i style="color: #fdd836 !important;" class="bi bi-star fs-5 me-1"></i>
                <p class="mb-0" style="vertical-align: middle;">(0 đánh giá)</p>
            </div>
            <span class="fw-light">Mã sản phẩm: <strong class="fw-bold text-primary">DCTT 00142</strong>
            </span>
            <span class="fw-light">Tình trạng: <strong class="fw-bold text-primary">Còn hàng</strong>
            </span>

            <div class="d-flex flex-wrap">
                <div class="col-xxl-8 col-12 pe-4">
                    <div class="product-price p-3 mt-2">
                        <span class="me-5"><span class="fw-bolder">Giá:</span> </span><span
                            style="color: red; vertical-align: middle;" class="fw-bold fs-3">1,568,000₫</span>
                    </div>

                    <div class="d-flex align-items-center p-3 group-btn">
                        <div class="fw-bolder me-3">Số nén: </div>
                        <div class="option me-3">
                            <input hidden checked id="swatch-25-nen" type="radio" name="option1" value="25 nén">
                            <label for="swatch-25-nen" class="px-4 option1 py-2 active">
                                <span>25 nén</span>
                            </label>
                        </div>
                        <div class="option">
                            <input hidden id="swatch-50-nen" type="radio" name="option1" value="50 nén">
                            <label for="swatch-50-nen" class="px-4 option2 py-2">
                                <span>50 nén</span>
                            </label>
                        </div>
                    </div>

                    <!-- quantity -->
                    <div class="d-flex align-items-center p-3">
                        <div class="me-3 fw-bolder">Số lượng: </div>
                        <button type="button" class="quantity-btn">
                            <svg style="display: block; margin: 0 auto;" focusable="false" width="12" fill="#a4aaaf"
                                viewBox="0 0 10 2" role="presentation">
                                <path d="M10 0v2H0V0z"></path>
                            </svg>
                        </button>
                        <input type="text" value="1" min="1" class="quantity-input">
                        <button type="button" class="quantity-btn">
                            <svg style="display: block; margin: 0 auto;" focusable="false" width="12" fill="#a4aaaf"
                                viewBox="0 0 10 10" role="presentation">
                                <path d="M6 4h4v2H6v4H4V6H0V4h4V0h2v4z"></path>
                            </svg>
                        </button>


                    </div>

                    <!-- Add to card and buy -->
                    <div class="ps-3 py-2 d-none d-xxl-block">
                        <button type="button" class="my-btn btn-add-to-cart_1 me-3">Thêm vào
                            giỏ</button>

                        <button onclick="window.location='index.php/?p=thanhtoan';" type="button" class="my-btn btn-buy-now"
                            name="add">
                            Mua ngay
                        </button>

                    </div>

                    <!-- Chia sẻ -->
                    <div class="d-flex flex-wrap align-items-center p-3 mt-5 product-toshare">
                        <div>Chia sẻ:</div>
                        <a href="#"><i style="color: #25479b;" class="fa-brands fa-facebook fs-3"></i></i></a>
                        <a href="#"><i style="color: #535EF6" class="fa-brands fa-facebook-messenger fs-3"></i></a>
                        <a href="#"><i style="color: #1DA1F2;" class="fab fa-twitter fs-3"></i></a>
                        <a href="#"><i style="color: #B7081B;" class="fa-brands fa-pinterest fs-3"></i></a>
                        <a href="#"><i style="color: #2196F3;" class="fa fa-link fs-3" aria-hidden="true"></i></a>
                    </div>
                </div>

                <div class="col-xxl-4 col-12">
                    <div class="d-flex flex-wrap product-deliverly p-3">
                        <div class="col-xxl-12 col-md-6 col-12">
                            <h6>Chính sách bán hàng</h6>
                            <div class="infoList-deliverly">
                                <div class="d-flex align-items-center py-2 deliverly-item">
                                    <div class="me-2">
                                        <img style="width: 30px; height: 20px;" class="img-fluid"
                                            src="public/demo/product_deliverly_1_ico.webp" alt="">
                                    </div>
                                    <div>Cam kết chính hãng</div>
                                </div>
                                <div class="d-flex align-items-center py-2 deliverly-item">
                                    <div class="me-2 ps-1">
                                        <img style="width: 35px; height: 25px;" class="img-fluid"
                                            src="public/demo/product_deliverly_2_ico.webp" alt="">
                                    </div>
                                    <div>Miễn phí giao hàng với hóa đơn trên 1 triệu</div>
                                </div>
                                <div class="d-flex align-items-center py-2 deliverly-item">
                                    <div class="me-2 ps-1">
                                        <img style="width: 35px; height: 25px;" class="img-fluid"
                                            src="public/demo/product_deliverly_3_ico.webp" alt="">
                                    </div>
                                    <div>Hỗ trợ 24/7</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-12 col-md-6 col-12 mt-3">
                            <h6>Thông tin thêm</h6>
                            <div>
                                <div class="d-flex align-items-center">
                                    <span>
                                        <img style="width: 33px; height: 33px;" class="img-fluid"
                                            src="public/demo/product_deliverly_4_ico.webp" alt="">
                                    </span>
                                    <span>Hoàn tiền nếu hàng giả</span>
                                </div>
                                <div class="d-flex align-items-center mt-2">
                                    <span>
                                        <img style="width: 33px; height: 33px;" class="img-fluid"
                                            src="public/demo/product_deliverly_5_ico.webp" alt="">
                                    </span>
                                    <span>Mở hộp kiểm tra nhận hàng</span>
                                </div>
                                <div class="d-flex align-items-center mt-2">
                                    <span>
                                        <img style="width: 33px; height: 33px;" class="img-fluid"
                                            src="public/demo/product_deliverly_6_ico.webp" alt="">
                                    </span>
                                    <span>Chính sách đổi trả hàng</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white mt-3 pb-3">
        <h5 class="mt-3">Khuyến mãi dành cho bạn</h5>
        <div class="d-flex flex-wrap gx-3">
            <div class="col-xxl-3 col-md-6 col-12 promotion-item">
                <div class="d-flex coupon-wrapper">
                    <div class="col-4 coupon-left d-inline-flex align-items-center justify-content-center">
                        <img src="public/demo/home_coupon_1_img.webp" class="img-fluid w-50 h-30" alt="coupon 1" />
                    </div>
                    <div class="col-8 p-2 coupon-right position-relative">
                        <button type="button" class="border-0 position-absolute info-coupon">
                            <i class="bi bi-info-circle"></i>
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
            <div class="col-xxl-3 col-md-6 col-12 promotion-item">
                <div class="d-flex coupon-wrapper">
                    <div class="col-4 coupon-left d-inline-flex align-items-center justify-content-center">
                        <img src="public/demo/home_coupon_1_img.webp" class="img-fluid w-50 h-30" alt="coupon 1" />
                    </div>
                    <div class="col-8 p-2 coupon-right position-relative">
                        <button type="button" class="border-0 position-absolute info-coupon">
                            <i class="bi bi-info-circle"></i>
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
            <div class="col-xxl-3 col-md-6 col-12 promotion-item">
                <div class="d-flex coupon-wrapper">
                    <div class="col-4 coupon-left d-inline-flex align-items-center justify-content-center">
                        <img src="public/demo/home_coupon_1_img.webp" class="img-fluid w-50 h-30" alt="coupon 1" />
                    </div>
                    <div class="col-8 p-2 coupon-right position-relative">
                        <button type="button" class="border-0 position-absolute info-coupon" >
                            <i class="bi bi-info-circle"></i>
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

    <div class="bg-white mt-3 p-4">
        <div style="border-bottom: 2px solid #ededed;" class="pb-1">
            <a class="nav-item active position-relative text-uppercase fw-bold fs-5" id="nav-desc" href="#nav-desc">Mô
                tả sản phẩm</a>
        </div>
        <div class="table-of-contents mt-4 mb-3 ms-3">
            <div class="ms-3">
                <h6 class="py-2">
                    Các nội dung chính [<a class="toggle-btn" href="javascript:void(0)">Ẩn</a>]
                </h6>
                <ul class="pb-3 mb-0 ms-3 ps-3 danh-muc">
                    <li><a href="#y_nghia_">Ý nghĩa đặc biệt và tác dụng của vòng trầm hương</a>
                    <li><a href="#nhung_loai_">Những loại vòng tay trầm hương tại Trầm Hương Thiện Tâm </a>
                    <li><a href="#dia_chi">Địa chỉ bán vòng trầm hương cao cấp - Cung Trầm Gallery by Trầm Hương Thiện
                            Tâm </a>
                </ul>
            </div>
        </div>
        <!-- describe product -->
        <div class="ms-3">
            <p>Trầm hương - món quà quý giá mà mẹ thiên nhiên ban tặng cho con người. Ngoài sản phẩm hương trầm hương,
                trầm còn được chế tác thành những món trang sức tinh tế thời thượng.&nbsp;</p>
            <p>Theo quan niệm bấy lâu nay của cha ông ta, vòng trầm hương ngoài mục đích làm trang sức, mà còn có ý
                nghĩa tâm linh, có thể giúp người đeo xua đuổi tà khí, thu hút năng lượng tích cực, mang lại may mắn
                bình an.&nbsp;</p>
            <p>Hiện nay, trên thị trường có rất nhiều vòng trầm hương đa dạng mẫu mã như vòng tay dạng tròn, vòng tay
                khắc chữ, vòng tay tết chỉ, vòng tay trúc trầm,.. phù hợp với mọi nhu cầu thị hiếu người dùng. Cũng vì
                vậy, trên thị trường hiện nay tràn lan các loại vòng với nhiều mức giá khác nhau, Quý khách hàng cần lưu
                ý chọn lựa nhà cung cấp vòng trầm hương uy tín trên thị trường như Trầm Hương Thiện Tâm để được trải
                nghiệm sản phẩm tốt nhất.&nbsp;</p>

            <p>Mỗi mẫu vòng trầm hương tại Cung Trầm Gallery by&nbsp;Trầm&nbsp;Thiện Tâm đều có những câu chuyện truyền
                cảm hứng khác nhau. Cùng Cung Trầm Gallery&nbsp;khám phá vòng trầm hương từ A-Z tại đây nhé.&nbsp;</p>
            <h4>Ý nghĩa đặc biệt và tác dụng của vòng trầm
                hương</h4>
            <p>Ngoài là vật phẩm trang sức giá trị, vòng trầm hương cũng mang lại nhiều lợi ích và ý nghĩa cho người đeo
                như:&nbsp;</p>
            <p style="text-align: center"><img class="img-fluid" src="public/demo/mo_ta_san_pham.webp">
            </p>
            <ul>
                <li>
                    <p>Sức khỏe: mùi thơm dễ chịu của trầm hương nguyên chất tự nhiên giúp an thần, ngủ ngon và sâu
                        giấc, giảm mệt mỏi, căng thẳng, lo âu.&nbsp;</p>
                </li>
                <li>Phong thủy: vòng trầm hương giúp thu hút năng lượng tích cực, may mắn giúp cho người làm ăn kinh
                    doanh thuận lợi, gia đạo bình an.&nbsp;</li>
                <li>Trang sức: vòng trầm hương tại Trầm Hương Thiện Tâm thiết kế nhiều mẫu mã, tùy thuộc vào yêu cầu của
                    khách hàng, thể hiện sự đẳng cấp sang trọng một cách tinh tế.&nbsp;</li>
                <li>Quà tặng: Với mỗi độ tuổi, vòng trầm hương đều mang lại những lợi ích khác nhau, phù hợp làm quà
                    tặng khi muốn gửi gắm những điều tốt đẹp đến người nhận.&nbsp;</li>
            </ul>
            <p>Vòng trầm hương tại Trầm Hương Thiện Tâm được chế tác tinh xảo bởi các thợ thủ công lành nghề. Đây là một
                món đồ phù hợp vừa để trang trí, vừa để bảo vệ sức khỏe của bản thân, cũng là một món quà tinh tế để bạn
                tặng cho người thân gia đình, bạn bè hay đối tác.&nbsp;</p>
            <h4>Những loại vòng tay trầm hương tại Trầm Hương Thiện Tâm</h4>
            <p><strong>1. Theo số lượt hạt của vòng&nbsp;&nbsp;</strong></p>
            <ul>
                <li>Vòng trầm hương đơn: là loại vòng có số hạt 17-21 hạt (tùy thuộc vào kích thước tay người đeo). Có
                    hình dạng là một vòng dây đơn giản.</li>
                <li>Vòng trầm hương đôi: là loại vòng có số hạt từ 54 hạt. Khi đeo lên tay sẽ được 2 vòng.&nbsp;&nbsp;
                </li>
                <li>Vòng trầm hương 108 hạt: đây là mẫu vòng trầm hương cao cấp phù hợp gồm 108 hạt. Khi đeo lên tay sẽ
                    được 4 vòng.&nbsp;</li>
            </ul>
            <p><strong>2. Theo hình dáng hạt&nbsp;</strong></p>
            <ul>
                <li>Kiểu hạt tròn cơ bản: phiên bản hạt tròn (to/nhỏ) trơn, phù hợp với lối sống tối giản.&nbsp;</li>
                <li>Kiểu vòng tròn trúc: trụ trúc được lấy cảm hứng từ hình ảnh cây tre, cây trúc của Việt Nam, thể hiện
                    ý nghĩa về sức mạnh bền bỉ, kiên cường và bản lĩnh. Được sắp xếp xen kẽ với hạt trầm tròn, thể hiện
                    vẻ đẹp nhẹ nhàng, sang trọng nhưng vẫn cứng cỏi, mạnh mẽ.&nbsp;</li>
                <li>Vòng hạt khắc chữ Phúc - Lộc - Thọ: biểu tượng cho sự hạnh phúc, tài lộc và trường thọ, thể hiện
                    niềm tin mong ước một đời trọn vẹn của mọi người.&nbsp;</li>
            </ul>
        </div>
    </div>

    <!-- comment -->
    <div class="bg-white mt-3 p-4">
        <h6 class="text-center fw-bolder">ĐÁNH GIÁ SẢN PHẨM</h6>
        <div>
            <div class="d-flex align-items-center justify-content-center">
                <i style="color: #fdd836 !important;" class="bi bi-star fs-5 me-1"></i>
                <i style="color: #fdd836 !important;" class="bi bi-star fs-5 me-1"></i>
                <i style="color: #fdd836 !important;" class="bi bi-star fs-5 me-1"></i>
                <i style="color: #fdd836 !important;" class="bi bi-star fs-5 me-1"></i>
                <i style="color: #fdd836 !important;" class="bi bi-star fs-5 me-1"></i>
            </div>
            <div class="text-center">
                <p class="mb-0" style="vertical-align: middle;">(0 đánh giá)</p>
            </div>
        </div>
        <div>
            <div class="text-center mt-3">
                <button class="btn-submit-review" href="#">Viết đánh giá</button>
            </div>
            <div style="transform-origin: top center;" class="mt-3 form-review">
                <h5>Viết đánh giá mới</h5>
                <form id="hrv-product-reviews-frm" name="hrv-product-reviews-frm">
                    <div class="mb-3">
                        <label for="reviews_form_name" class="form-label">Email address</label>
                        <input class="form-control" id="reviews_form_name" type="text"
                            placeholder="Tên của bạn (>3 ký tự và < 20 ký tự)" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label for="reviews_form_email" class="form-label">Email address</label>
                        <input class="form-control" id="reviews_form_email" type="text"
                            placeholder="john.smith@example.com" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label for="reviews_form_title" class="form-label">Tiêu đề</label>
                        <input class="form-control" id="reviews_form_title" type="text"
                            placeholder="Hãy cho một tiêu đề (>3 ký tự và < 50 ký tự)" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label for="reviews_form_content" class="form-label">Tiêu đề</label>
                        <textarea rows="7" class="form-control" id="reviews_form_content" type="text"
                            placeholder="Viết nội dung đánh giá ở đây (>3 ký tự và < 1000 ký tự)"
                            autocomplete="off"></textarea>
                    </div>

                    <div class="mb-3 mt-5 clearfix">
                        <button class="btn-sent-review" style="float: right;">Gửi đánh giá</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Sản phẩm liên quan -->
    <div class="d-flex flex-wrap mt-5 mb-4">
        <h4 class="mb-4">Sản phẩm liên quan</h4>
        <div class="related-product silider-product owl-carousel owl-theme">
            <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                    <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                    <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                        <span>-26%</span>
                    </div>
                </a>
                <div class="card-body p-2 pt-3">
                    <h6 class="card-title text-center">
                        Thác khói đĩa tròn phật thủ liên hoa CTM1
                    </h6>
                    <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
                        data-id="1043979047">
                        <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
                            title="gorgeous">
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
                                <i style="vertical-align: middle;" class="bi bi-bag-plus text-white"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                    <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                    <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                        <span>-26%</span>
                    </div>
                </a>
                <div class="card-body p-2 pt-3">
                    <h6 class="card-title text-center">
                        Thác khói đĩa tròn phật thủ liên hoa CTM1
                    </h6>
                    <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
                        data-id="1043979047">
                        <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
                            title="gorgeous">
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
                                <i style="vertical-align: middle;" class="bi bi-bag-plus text-white"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                    <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                    <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                        <span>-26%</span>
                    </div>
                </a>
                <div class="card-body p-2 pt-3">
                    <h6 class="card-title text-center">
                        Thác khói đĩa tròn phật thủ liên hoa CTM1
                    </h6>
                    <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
                        data-id="1043979047">
                        <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
                            title="gorgeous">
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
                                <i style="vertical-align: middle;" class="bi bi-bag-plus text-white"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                    <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                    <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                        <span>-26%</span>
                    </div>
                </a>
                <div class="card-body p-2 pt-3">
                    <h6 class="card-title text-center">
                        Thác khói đĩa tròn phật thủ liên hoa CTM1
                    </h6>
                    <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
                        data-id="1043979047">
                        <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
                            title="gorgeous">
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
                                <i style="vertical-align: middle;" class="bi bi-bag-plus text-white"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                    <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                    <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                        <span>-26%</span>
                    </div>
                </a>
                <div class="card-body p-2 pt-3">
                    <h6 class="card-title text-center">
                        Thác khói đĩa tròn phật thủ liên hoa CTM1
                    </h6>
                    <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
                        data-id="1043979047">
                        <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
                            title="gorgeous">
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
                                <i style="vertical-align: middle;" class="bi bi-bag-plus text-white"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                    <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                    <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                        <span>-26%</span>
                    </div>
                </a>
                <div class="card-body p-2 pt-3">
                    <h6 class="card-title text-center">
                        Thác khói đĩa tròn phật thủ liên hoa CTM1
                    </h6>
                    <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
                        data-id="1043979047">
                        <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
                            title="gorgeous">
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
                                <i style="vertical-align: middle;" class="bi bi-bag-plus text-white"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                    <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                    <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                        <span>-26%</span>
                    </div>
                </a>
                <div class="card-body p-2 pt-3">
                    <h6 class="card-title text-center">
                        Thác khói đĩa tròn phật thủ liên hoa CTM1
                    </h6>
                    <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
                        data-id="1043979047">
                        <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
                            title="gorgeous">
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
                                <i style="vertical-align: middle;" class="bi bi-bag-plus text-white"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                    <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                    <div class="position-absolute pro-sale fs_12 text-light rounded fw_500">
                        <span>-26%</span>
                    </div>
                </a>
                <div class="card-body p-2 pt-3">
                    <h6 class="card-title text-center">
                        Thác khói đĩa tròn phật thủ liên hoa CTM1
                    </h6>
                    <div class="haravan-product-reviews-badge text-center" style="font-size: 11px; margin: 6px auto"
                        data-id="1043979047">
                        <div id="hrv-prv-summary-star" class="hrv-product-reviews-star" data-score="5" data-number="5"
                            title="gorgeous">
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
                                <i style="vertical-align: middle;" class="bi bi-bag-plus text-white"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sản phẩm đã xem -->
    <div class="d-flex flex-wrap mt-5 mb-5">
        <h4 class="mb-4">Sản phẩm đã xem</h4>
        <div class="related-product silider-product owl-carousel owl-theme">
            <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                    <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                </a>
                <div class="card-body p-2 pt-3">
                    <h6 class="text-center">
                        Thác khói đĩa tròn phật thủ liên hoa CTM1
                    </h6>
                    <p class="text-center">
                        <span class="fw-bold">668,000₫</span>
                    </p>
                </div>
            </div>
            <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                    <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                </a>
                <div class="card-body p-2 pt-3">
                    <h6 class="text-center">
                        Thác khói đĩa tròn phật thủ liên hoa CTM1
                    </h6>
                    <p class="text-center">
                        <span class="fw-bold">668,000₫</span>
                    </p>
                </div>
            </div>
            <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                    <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                </a>
                <div class="card-body p-2 pt-3">
                    <h6 class="text-center">
                        Thác khói đĩa tròn phật thủ liên hoa CTM1
                    </h6>
                    <p class="text-center">
                        <span class="fw-bold">668,000₫</span>
                    </p>
                </div>
            </div>
            <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                    <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                </a>
                <div class="card-body p-2 pt-3">
                    <h6 class="text-center">
                        Thác khói đĩa tròn phật thủ liên hoa CTM1
                    </h6>
                    <p class="text-center">
                        <span class="fw-bold">668,000₫</span>
                    </p>
                </div>
            </div>
            <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                    <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                </a>
                <div class="card-body p-2 pt-3">
                    <h6 class="text-center">
                        Thác khói đĩa tròn phật thủ liên hoa CTM1
                    </h6>
                    <p class="text-center">
                        <span class="fw-bold">668,000₫</span>
                    </p>
                </div>
            </div>
            <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                    <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                </a>
                <div class="card-body p-2 pt-3">
                    <h6 class="text-center">
                        Thác khói đĩa tròn phật thủ liên hoa CTM1
                    </h6>
                    <p class="text-center">
                        <span class="fw-bold">668,000₫</span>
                    </p>
                </div>
            </div>
            <div class="card p-1">
                <a class="position-relative" href="index.php?p=chitietsanpham">
                    <img src="public/demo/thac_khoi_CTM1.webp" class="img-fluid w-100 h-100" alt="thac khoi CTM1" />
                </a>
                <div class="card-body p-2 pt-3">
                    <h6 class="text-center">
                        Thác khói đĩa tròn phật thủ liên hoa CTM1
                    </h6>
                    <p class="text-center">
                        <span class="fw-bold">668,000₫</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="owlcarousel/owl.carousel.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".detail-product").owlCarousel({
            center: false,
            loop: false,
            margin: 0,
            nav: true,
            dots: true,
            responsive: {
                0: {
                    items: 1,
                },
            },
        });
        $(".detail-product .owl-next").html('<i style="color: #FAFAFA;" class="fa-regular fa-greater-than fs-5"></i>');
        $(".detail-product .owl-prev").html('<i style="color: #FAFAFA;" class="fa-regular fa-less-than fs-5"></i>');

        $(".silider-product").owlCarousel({
            center: false,
            loop: false,
            margin: 0,
            nav: true,
            dots: false,
            margin: 14,
            responsive: {
                0: {
                    items: 1,
                },
                768: {
                    items: 2,
                },
                1400: {
                    items: 6,
                },
            },
        });

        $(".silider-product .owl-next").html('<i class="bi bi-arrow-right-short fs-4"></i>');
        $(".silider-product .owl-prev").html('<i class="bi bi-arrow-left-short fs-4"></i>');

        // An hien danh muc chi tiet kien thuc

        $(".toggle-btn").click(function () {
            $(".danh-muc").toggle(500);
            if ($(".toggle-btn").text() == "Ẩn") {
                $(".toggle-btn").text("Hiện");
            } else {
                $(".toggle-btn").text("Ẩn");
            }
        });

        $(".btn-submit-review").click(function () {
            $(".form-review").slideToggle();
        });
    });
</script>