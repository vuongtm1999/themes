<style>
    .detail-product .owl-nav [class*=owl-]:hover {
        color: unset;
        background-color: unset;
    }

    .detail-product .owl-prev.disabled {
        display: none;
    }

    .detail-product .owl-next.disabled {
        display: none;
    }

    .detail-product>.owl-nav>.owl-next {
        top: 40%;
        position: absolute;
        width: 40px;
        height: 40px;
        right: 10px;
        opacity: .7;
        background: #fff !important;
        border-radius: 50%;
    }

    .detail-product>.owl-nav>.owl-prev {
        top: 40%;
        position: absolute;
        width: 40px;
        height: 40px;
        left: 10px;
        opacity: .7;
        background: #fff !important;
        border-radius: 50%;
    }

    .detail-product>.owl-nav>.owl-next:hover {
        opacity: 1;
    }

    .detail-product>.owl-nav>.owl-prev:hover {
        opacity: 1;
    }



    .btn-love {
        background: #fff;
        display: block;
        margin-top: 10px;
        border-radius: 5px;
        box-shadow: 1px 1px 1px rgb(0 0 0 / 10%);
        display: block;
        height: 32px;
        width: 32px;
        line-height: 30px;
        text-align: center;
        top: 7px;
        right: 7px;
        z-index: 1;
    }

    .detail-product .owl-dots {
        margin-top: 20px !important;
        text-align: start;
    }

    .detail-product .owl-dot {
        margin-right: 8px;
    }

    .detail-product .owl-dot:hover {
        border: 1px solid #0fb587;
    }

    .detail-product .owl-dot.active {
        border: 1px solid #0fb587;
    }

    .swatch {
        border: 1px solid #ccc;
        line-height: 16px;
        border-radius: 4px;
        font-size: 14px;
        padding: 7px 10px;
        cursor: pointer;
        text-align: center;
    }

    .swatch.active {
        color: #fff;
        border: 1px solid #0a402b;
        position: relative;
        background-color: #0a402b;
    }

    .custom-btn-numbers {
        width: 150px;
        border: 1px solid #ced4da;
        border-radius: 5px;
    }

    .custom-btn-numbers button {
        border: none;
        background-color: white;
    }

    .btn-buy-now {
        background-color: #0fb587;
        border-color: #0fb587;
        color: #fff;
        text-align: center;
        font-size: 14px;
        border-radius: 25px;
        text-transform: uppercase;
    }

    .btn-buy-now:hover {
        opacity: 0.8;
    }

    .btn-add-to-card {
        background: #0a402b;
        font-size: 14px;
        border-radius: 25px;
    }

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
        top: 12px;
        right: 12px;
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

    .scrollBar {
        overflow-x: auto;
        flex-wrap: nowrap;
    }

    .scrollBar::-webkit-scrollbar {
        display: none;
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

    .product-brand {
        color: #707070;
        font-size: 12px;
        display: block;
        margin-bottom: 3px;
        font-weight: normal;
        text-transform: uppercase;
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

    .scrollBar {
        overflow-x: auto;
        flex-wrap: nowrap;
    }

    .scrollBar::-webkit-scrollbar {
        display: none;
    }

    .title-detail-info {
        width: 100%;
    }

    /* md */
    @media (min-width: 768px) {
        .title-detail-info {
            width: auto;
        }
    }
</style>

<div class="row">
    <div style="background-color: var(--bg-grey);" class="py-3 px-xxl-5">
        <a class="fs-6" href="index.php">Trang chủ</a>
        <span class="mx-1">/</span>
        <span class="fs-6">Some By Mi Sữa tắm AHA-BHA-PHA 30 Days Miracle Acne Clear Body Cleanser 400g (IP04)</span>
    </div>
</div>

<!--  -->
<div class="row px-4">
    <div class="col-xxl-4 col-12 position-relative py-5">
        <div class="detail-product owl-carousel owl-theme rounded-pill px-0">
            <img src="public/demo/detail-product-1.png" alt="">
            <img src="public/demo/detail-product-2.png" alt="">
            <img src="public/demo/detail-product-3.png" alt="">


        </div>
        <a href="javascript:void(0)" class="position-absolute btn-love" tabindex="0" title="Thêm vào yêu thích">
            <img style="width: 15px; height: 16px;" class="d-inline" width="16" height="15"
                src="public/demo/hear-icon-detail-product.svg" alt="">
        </a>
    </div>
    <div class="col-xxl-6 col-12  py-xxl-5 py-0">
        <h3>3CE Phấn mắt Multi Eye Color Palate</h3>
        <div>
            <span class="me-2">Thương hiệu: <strong>3CE</strong></span>
            <span>(Đang cập nhật...)</span>
        </div>
        <div>
            <span style="color: #d81c1c;" class="me-2 fs-5 fw-bold">720.000₫</span>
            <span style="color: #949494;" class="text-thougline text-decoration-line-through fs-6">780.000₫</span>
        </div>
        <p class="mb-1">(Tiết kiệm: <span style="color: #d81c1c;">60.000₫</span>)</p>
        <div class="mb-1">
            Loại:
        </div>
        <div>
            <label title="All Nighter" class="swatch active">
                All Nighter
            </label>
            <label title="Dry Bouquet" class="swatch">
                Dry Bouquet
            </label>
        </div>
        <div class="custom-btn-numbers my-2">
            <button class="px-2 py-1 ms-2 fs-4" type="button">–</button>
            <input aria-label="Số lượng" type="text" class="border-0 text-center" size="4" value="1" maxlength="3">
            <button class="px-2 py-1 ms-2 fs-4" type="button">+</button>
        </div>
        <div class="mt-4">
            <a href="index.php?p=thanhtoan" class="btn-buy-now px-5 py-3 me-3 text-white d-inline-block">Mua ngay</a>
            <a href="index.php?p=cart" class="btn-add-to-card px-5 py-3 text-white d-inline-block">Thêm
                vào giỏ</a>
        </div>
        <p class="my-2 fs-5">Phương thức thanh toán</p>
        <div class="mb-3">
            <span><img height="40" src="public/demo/visa.jpg" alt=""></span>
            <span><img height="40" src="public/demo/visa.jpg" alt=""></span>
            <span><img height="40" src="public/demo/visa.jpg" alt=""></span>
            <span><img height="40" src="public/demo/visa.jpg" alt=""></span>
            <span><img height="40" src="public/demo/momo.jpg" alt=""></span>
        </div>

        <div style="border-top: 1px solid #eee;">
            <div class="row pt-2">
                <div class="col-6 d-flex align-items-center py-2">
                    <div class="me-3">
                        <img width="32" height="32" class="lazy img-responsive loaded"
                            src="//bizweb.dktcdn.net/100/473/812/themes/889220/assets/policises_1.png?1681183006918"
                            data-src="//bizweb.dktcdn.net/100/473/812/themes/889220/assets/policises_1.png?1681183006918"
                            alt="Giao hàng toàn quốc" data-was-processed="true">
                    </div>
                    <div class="fs-6">
                        Giao hàng toàn quốc
                    </div>
                </div>
                <div class="col-6 d-flex align-items-cente py-2">
                    <div class="me-3">
                        <img width="32" height="32" class="lazy img-responsive loaded"
                            src="//bizweb.dktcdn.net/100/473/812/themes/889220/assets/policises_2.png?1681183006918"
                            data-src="//bizweb.dktcdn.net/100/473/812/themes/889220/assets/policises_2.png?1681183006918"
                            alt="Tích điểm tất cả sản phẩm" data-was-processed="true">
                    </div>
                    <div class="fs-6">
                        Tích điểm tất cả sản phẩm
                    </div>
                </div>
                <div class="col-6 d-flex align-items-cente py-2">
                    <div class="me-3">
                        <img width="32" height="32" class="lazy img-responsive loaded"
                            src="//bizweb.dktcdn.net/100/473/812/themes/889220/assets/policises_3.png?1681183006918"
                            data-src="//bizweb.dktcdn.net/100/473/812/themes/889220/assets/policises_3.png?1681183006918"
                            alt="Miễn phí vận chuyển đơn từ 80k" data-was-processed="true">
                    </div>
                    <div class="fs-6">
                        Miễn phí vận chuyển đơn từ 80k
                    </div>
                </div>
                <div class="col-6 d-flex align-items-cente py-2">
                    <div class="me-3">
                        <img width="32" height="32" class="lazy img-responsive loaded"
                            src="//bizweb.dktcdn.net/100/473/812/themes/889220/assets/policises_4.png?1681183006918"
                            data-src="//bizweb.dktcdn.net/100/473/812/themes/889220/assets/policises_4.png?1681183006918"
                            alt="Cam kết chính hãng" data-was-processed="true">
                    </div>
                    <div class="fs-6">
                        Cam kết chính hãng
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-12 py-5 scrollBar">
        <div class="d-flex">
            <div class="col-xxl-12 col-md-5 col-10 mb-xxl-3 me-xxl-0 me-4">
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
            <div class="col-xxl-12 col-md-5 col-10 mb-xxl-3 me-xxl-0 me-4">
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
            <div class="col-xxl-12 col-md-5 col-10 mb-xxl-3 me-xxl-0 me-4">
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
            <div class="col-xxl-12 col-md-5 col-10 mb-xxl-3 me-xxl-0 me-4">
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
    </div>
</div>

<div class="row px-4">
    <div style="height: 40px;" class="text-white col-12">
        <span
            class="h-100 px-5 bg-light-green d-inline-flex align-items-center justify-content-md-start justify-content-center title-detail-info">Thông
            tin chi tiết</span>
    </div>
    <div class="col-12">
        <div style="border: solid 1px #ebebeb;" class="p-3">
            <div>
                <p><span style="font-family:Arial,Helvetica,sans-serif;"><strong>Phấn mắt&nbsp;3CE Multi Eye Color
                            Palate</strong><strong>&nbsp;</strong>với những tone màu nhẹ nhàng theo hơi hướng vintage
                        rất phù hợp với phong cách make up đơn giản mỗi ngày.&nbsp;Mỗi bảng phấn mắt chứa tới 9 ô màu đa
                        dạng, dễ sử dụng,&nbsp;có thể kết hợp với nhau tùy thích để cho ra đời những màu mắt ấn tượng và
                        độc đáo nhất.</span></p>
                <p class="text-center"><img class="img-fluid" src="public/demo/descript-product-img.webp">
                </p>
                <p><strong>Bảng màu:</strong></p>
                <ul>
                    <li><strong>#All Nighter</strong>: Gồm 9 ô nhũ đủ tone tươi sáng đến trầm ấm dịu nhẹ.</li>
                </ul>
                <p class="text-center"><img class="img-fluid" src="public/demo/descript-product-img.webp">
                </p>
                <ul>
                    <li><strong>#Dry Bouquet</strong>: Gồm 9 ô lì mang tone hồng đất chủ đạo.</li>
                </ul>
                <p class="text-center"><img class="img-fluid" src="public/demo/descript-product-img.webp">
                <p><strong>Công dụng:</strong></p>
                <ul>
                    <li><strong>Chất phấn hoàn hảo</strong>&nbsp;với những hạt phấn li ti siêu nhỏ, siêu mềm mịn, hoàn
                        không không gây cảm giác nặng nề khi apply lên mắt.&nbsp;</li>
                    <li><strong>Khả năng lên màu cực tốt,</strong>&nbsp;bám màu cực lâu - lên đến 24 giờ đồng hồ. Bạn có
                        thể thoải mái hoạt động làm việc cả ngày mà không cần dặm lại phấn.</li>
                    <li><strong>Bảng phấn mắt gồm 9 tone màu đa dạng:&nbsp;</strong>đủ tone từ tươi sáng đến trầm ấm dịu
                        nhẹ, không kén tone da và cực dễ phối hợp với nhiều&nbsp; phong cách trang điểm khác nhau, thỏa
                        thích cho bạn gái tỏa sáng dịp thu đông này.</li>
                </ul>
                <p><strong>Thành phần chi tiết:</strong></p>
                <p>Mica, Nylon-12, Ethylhexylglycerin, Hydrogen Dimethicone, Methicone, Iron Oxides(CI 77492), Boron,
                    Hydrogen Dimethicone, Calcium Titanium Borosilicate, Octyldodecyl Stearoyl Stearate, Diisostearyl
                    Malate, Vinyl Dimethicone/ Methicone, Silsesquioxane, Crosspolymer, Nitride, Dimethicone, Vinyl
                    Dimethicone/ Methicone Silsesquioxane Crosspolymer, Isostearylneopentanoate, Talc, Boron Nitride,
                    Dipentaerythrityl Hexahydroxystearate/ Hexastearate/&nbsp;Hexarosinate, Hexyl Laurate, Hexyl
                    Laurate, Glyceryl Caprylate, Isostearyl neopentanoate, Phenyl Trimethicone, Octyldodecyl Stearoyl
                    Stearate, Glyceryl Caprylate, Iron Oxides(CI 77491), Dipentaerythrityl Hexahydroxystearate/
                    Hexastearate/ Hexarosinate, Tin Oxide, Titanium Dioxide, Phenyl Trimethicone, IronOxides (CI77491),
                    Iron Oxides (CI 77499), TitaniumDioxide, Diisostearyl Malate.</p>
                <p><strong>Hướng dẫn sử dụng:</strong></p>
                <ul>
                    <li>Sử dụng kem lót mắt để phấn mắt bám lâu và lên màu rõ hơn.</li>
                    <li>Dùng cọ chuyên dụng đánh màu mắt từ giữa bầu mí mắt sang mí khoé mắt, dài xuống đuôi mắt. Sau đó
                        tán đều màu mắt lên qua mí mắt và một lớp nhẹ dưới mi mắt để tạo điểm nhấn và chiều sâu cho mắt,
                        bạn cần phủ một lớp phấn nâu theo khối chữ V ở đuôi mắt.</li>
                    <li>Có thể sử dụng một hoặc phối nhiều màu tùy thích để tạo nên độ đậm nhạt cho mắt.</li>
                </ul>
                <p><strong>Bảo quản:</strong></p>
                <ul>
                    <li>Để nơi khô ráo, thoáng mát.</li>
                    <li>Tránh ánh nắng trực tiếp.</li>
                    <li>Đóng nắp sau khi sử dụng.</li>
                </ul>
                <p><strong>Thông số sản phẩm:</strong></p>
                <ul>
                    <li><strong>Thương hiệu:&nbsp;</strong>3CE</li>
                    <li><strong>Xuất xứ:&nbsp;</strong>Hàn Quốc</li>
                    <li><strong>Nơi sản xuất:&nbsp;</strong>Hàn Quốc</li>
                    <li><strong>Khối lượng:&nbsp;</strong>8.5g</li>
                    <li><strong>Hạn sử dụng:</strong>&nbsp;3 năm kể từ ngày sản xuất.</li>
                    <li><strong>Ngày sản xuất:&nbsp;</strong>Xem trên bao bì sản phẩm.</li>
                </ul>
            </div>
            <div class="text-center">
                <span style="border: 1px solid #333;" class="px-4 py-1 pointer">Thu gọn</span>
            </div>
        </div>
    </div>
</div>

<div class="row px-4">
    <h5 class="text-center my-4">SẢN PHẨM TƯƠNG TỰ</h5>
</div>

<!-- relative products -->
<div class="row px-xxl-4 px-2 mb-4 scrollBar">
    <div class="col-xxl-3 col-md-4 col-6">
        <div class="bg-white">
            <a title="Halio Máy triệt lông cá nhân
              IPL Hair Removal Device (IP02)" href="index.php?p=chitietsanpham">
                <div class="product-image position-relative" data-sale="-10%">
                    <img class="img-fluid main-image" src="public/demo/main-img-product.png" alt="product-img-1">
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
                <span class="product-brand">Lofi Cosmetics</span>
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
    <div class="col-xxl-3 col-md-4 col-6">
        <div class="bg-white">
            <a title="Halio Máy triệt lông cá nhân
              IPL Hair Removal Device (IP02)" href="index.php?p=chitietsanpham">
                <div class="product-image position-relative" data-sale="-10%">
                    <img class="img-fluid main-image" src="public/demo/main-img-product.png" alt="product-img-1">
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
                <span class="product-brand">Lofi Cosmetics</span>
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
    <div class="col-xxl-3 col-md-4 col-6">
        <div class="bg-white">
            <a title="Halio Máy triệt lông cá nhân
              IPL Hair Removal Device (IP02)" href="index.php?p=chitietsanpham">
                <div class="product-image position-relative" data-sale="-10%">
                    <img class="img-fluid main-image" src="public/demo/main-img-product.png" alt="product-img-1">
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
                <span class="product-brand">Lofi Cosmetics</span>
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
    <div class="col-xxl-3 col-md-4 col-6">
        <div class="bg-white">
            <a title="Halio Máy triệt lông cá nhân
              IPL Hair Removal Device (IP02)" href="index.php?p=chitietsanpham">
                <div class="product-image position-relative" data-sale="-10%">
                    <img class="img-fluid main-image" src="public/demo/main-img-product.png" alt="product-img-1">
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
                <span class="product-brand">Lofi Cosmetics</span>
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

<script>
    $(document).ready(function () {
        $('.detail-product').owlCarousel({
            center: false,
            loop: false,
            dots: true,
            nav: true,
            autoplay: false,
            autoplayTimeout: 3000,
            autoplayHoverPause: false,
            responsive: {
                0: {
                    items: 1,
                    nav: true,
                },
                768: {
                    items: 1,
                    nav: true,
                },
                1400: {
                    items: 1,
                    nav: true,
                }
            }
        });


        $(".owl-next").html(`<i class="bi bi-chevron-right fs-4"></i>`);
        $(".owl-prev").html(`<i class="bi bi-chevron-left fs-4"></i>`);

        $(".detail-product .owl-dot").each(function (index, element) {
            $(element).html(`<img width="80" height="80" class="img-fluid my-thumnail-img" src="public/demo/thumnail-${index + 1}.png" alt="">`);
        })
    });
</script>