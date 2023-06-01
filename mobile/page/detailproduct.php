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

    .detail-slider.owl-carousel>.owl-nav>.owl-prev {
        width: 34px;
        height: 60px;
        transition: .3s;
        outline: none;
        opacity: .9;
        border-radius: 0 100px 100px 0;
        background: #f7f7f7;
        box-shadow: 0 0 4px 0 rgb(0 0 0 / 20%);
        position: absolute;
        top: 50%;
        left: 0;
        transform: translateY(-50%);
        margin: 0;
    }

    .detail-slider.owl-carousel>.owl-nav>.owl-next {
        width: 34px;
        height: 60px;
        transition: .3s;
        outline: none;
        opacity: .9;
        border-radius: 100px 0 0 100px;
        background: #f7f7f7;
        box-shadow: 0 0 4px 0 rgb(0 0 0 / 20%);
        position: absolute;
        top: 50%;
        right: 0;
        transform: translateY(-50%);
        margin: 0;
    }

    .detail-slider .owl-nav [class*=owl-]:hover {
        color: var(--mainColor);
        background-color: #f7f7f7;
    }

    .detail-slider.owl-carousel>.owl-nav>.owl-prev.disabled,
    .detail-slider.owl-carousel>.owl-nav>.owl-prev.disabled {
        display: none;
    }

    .detail-slider.owl-theme .owl-dots {
        margin-top: 16px;
    }

    .detail-slider .owl-dot.active {
        border: 1px solid var(--mainColor);
    }

    .ratio {
        width: 12px;
        height: 12px;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 50%;
        margin-right: 5px;
        vertical-align: -1px;
    }

    .item:hover .ratio {
        background-image: url(public/demo/check.png);
        background-repeat: no-repeat;
        background-size: 100%;
        background-position: center;
        border: none;
    }

    .item:hover {
        border: 1px solid var(--mainColor) !important;
        background: #fffaeb;
    }

    .item.active {
        border: 1px solid var(--mainColor) !important;
        background: #fffaeb;
    }

    .color-checked {
        width: 1.2rem;
        height: 1.2rem;
        overflow: hidden;
        right: 0;
        bottom: 0;
        pointer-events: none;
    }

    .color-checked::before {
        border: 1.2rem solid transparent;
        border-bottom-color: var(--mainColor);
        content: '';
        position: absolute;
        right: -1.2rem;
        bottom: 0;
    }

    .input-so-luong {
        max-width: 80px;
        height: 42px;
    }

    .btn-buy-now {
        background: linear-gradient(var(--mainColor2), var(--mainColor));
        color: #fff;
        transition: all 0.5s;
    }

    .btn-outline-danger:hover {
        color: #fff;
        background-color: var(--mainColor);
        border-color: var(--mainColor);
    }

    .tel-number {
        font-size: 20px;
        color: var(--mainColor);
    }

    .tel-number:hover {
        color: #00b907;
    }

    .free-gifts {
        border: 1px dashed var(--mainColor);
        padding-bottom: 5px !important;
    }

    .free-gifts .title {
        width: auto;
        color: var(--mainColor);
        font-weight: 600;
        background: #ffeaea;
        border-radius: 20px;
        border: 1px solid;
        font-size: 18px;
        position: absolute;
        top: -5%;
        left: 5%;
    }

    .free-gifts .title img {
        max-width: 23px;
        mix-blend-mode: multiply;
        vertical-align: -3px
    }

    .btn_copy {
        background: var(--mainColor);
        border-radius: 15px;
        border: 1px solid;
        padding: 0.25rem 0.5rem;
        display: block;
    }

    .btn_copy:hover {
        background: #fff;
        color: var(--mainColor) !important;
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

    /* product item */
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

    .relative-products.owl-carousel>.owl-nav>.owl-prev {
        width: 23px;
        height: 30px;
        transition: .3s;
        outline: none;
        opacity: .9;
        border-radius: 100px 0 0 100px;
        background: #f7f7f7;
        box-shadow: 0 0 4px 0 rgb(0 0 0 / 20%);
        position: absolute;
        top: -35px;
        right: 32px;
        margin: 0;
    }

    .relative-products.owl-carousel>.owl-nav>.owl-next {
        width: 23px;
        height: 30px;
        transition: .3s;
        outline: none;
        opacity: .9;
        border-radius: 0 100px 100px 0;
        background: #f7f7f7;
        box-shadow: 0 0 4px 0 rgb(0 0 0 / 20%);
        position: absolute;
        top: -35px;
        right: 0;
        margin: 0;
    }

    .special-content table td:first-child {
        width: 115px;
    }

    .table-striped tbody tr:nth-of-type(even) {
        background: #f9f9f9;
    }

    .special-content {
        max-height: 333px;
        line-height: 1.3;
    }

    .modal-dialog-scrollable {
        height: calc(100% - 4.5rem);
        max-width: 600px;
    }

    .special-content-modal table td:first-child {
        width: 200px;
    }


    /* Khong bi overflow khi vao tablet va mobile */
    @media (min-width: 1400px) {
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

    /* end product item */
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
            Liên hệ
        </span>
    </div>
</div>

<div class="row bg-primary px-6 py-3">
    <div class="p-3 bg-white rounded">
        <div class="d-flex align-items-center mb-3">
            <h5 class="fw-bolder mb-0 me-4">
                iPhone 13 512GB
            </h5>
            <span class="d-flex aling-items-cener text-main py-1 px-2 border rounded-10">
                <i class="bi bi-plus-circle me-2"></i>
                So sánh
            </span>
        </div>
        <div class="row pb-3">
            <div class="col-xxl-4 col-md-5">
                <div class="detail-slider owl-carousel owl-theme">
                    <div class="bg-img-main" style="background-image: url(public/demo/detail-product-1.jpg);"></div>
                    <div class="bg-img-main" style="background-image: url(public/demo/detail-product-2.jpg);"></div>
                    <div class="bg-img-main" style="background-image: url(public/demo/detail-product-3.jpg);"></div>
                    <div class="bg-img-main" style="background-image: url(public/demo/detail-product-4.jpg);"></div>
                    <div class="bg-img-main" style="background-image: url(public/demo/detail-product-5.jpg);"></div>
                </div>
            </div>
            <div class="col-xxl-5 col-md-7">
                <div style="background: #fafafa;" class="fw-bold py-2 px-3 rounded mb-2">
                    <span class="text-main fs-3">25.990.000&nbsp;₫</span>
                    <del style="color: var(--accentColor1);" class="ms-2">33.990.000&nbsp;₫</del>
                </div>
                <div class="d-flex flex-wrap gap-2">
                    <div class="item active rounded border">
                        <a class="d-inline-block p-2 text-center" href="jascript:;">
                            <p class="fw-bold m-0">
                                <i class="ratio"></i>128GB
                            </p>
                            <p class="fw-bold text-main m-0">
                                20.190.000₫
                            </p>
                        </a>
                    </div>
                    <div class="item rounded border">
                        <a class="d-inline-block p-2 text-center" href="jascript:;">
                            <p class="fw-bold m-0">
                                <i class="ratio"></i>128GB
                            </p>
                            <p class="fw-bold text-main m-0">
                                20.190.000₫
                            </p>
                        </a>
                    </div>
                    <div class="item rounded border">
                        <a class="d-inline-block p-2 text-center" href="jascript:;">
                            <p class="fw-bold m-0">
                                <i class="ratio"></i>128GB
                            </p>
                            <p class="fw-bold text-main m-0">
                                20.190.000₫
                            </p>
                        </a>
                    </div>
                </div>

                <p class="pt-3">Màu sắc</p>
                <div class="d-flex flex-wrap">
                    <div
                        class="pointer me-2 mb-2 position-relative d-flex align-items-center border border-danger rounded p-1">
                        <img width="30" height="30" class="border rounded-circle" src="public/demo/color-product-1.jpg"
                            alt="">
                        <small class="px-1 fw-bold">Xanh dương</small>
                        <div class="color-checked position-absolute text-end">
                            <i style="vertical-align: -2px;"
                                class="bi bi-check2 text-white position-relative small"></i>
                        </div>
                    </div>
                    <div
                        class="pointer me-2 mb-2 position-relative d-flex align-items-center border border-danger rounded p-1">
                        <img width="30" height="30" class="border rounded-circle" src="public/demo/color-product-1.jpg"
                            alt="">
                        <small class="px-1 fw-bold">Đen</small>
                        <div class="color-checked position-absolute text-end">
                            <i style="vertical-align: -2px;"
                                class="bi bi-check2 text-white position-relative small"></i>
                        </div>
                    </div>
                    <div
                        class="pointer me-2 mb-2 position-relative d-flex align-items-center border border-danger rounded p-1">
                        <img width="30" height="30" class="border rounded-circle" src="public/demo/color-product-1.jpg"
                            alt="">
                        <small class="px-1 fw-bold">Đỏ</small>
                        <div class="color-checked position-absolute text-end">
                            <i style="vertical-align: -2px;"
                                class="bi bi-check2 text-white position-relative small"></i>
                        </div>
                    </div>
                    <div
                        class="pointer me-2 mb-2 position-relative d-flex align-items-center border border-danger rounded p-1">
                        <img width="30" height="30" class="border rounded-circle" src="public/demo/color-product-1.jpg"
                            alt="">
                        <small class="px-1 fw-bold">Xanh dương</small>
                        <div class="color-checked position-absolute text-end">
                            <i style="vertical-align: -2px;"
                                class="bi bi-check2 text-white position-relative small"></i>
                        </div>
                    </div>
                    <div
                        class="pointer me-2 mb-2 position-relative d-flex align-items-center border border-danger rounded p-1">
                        <img width="30" height="30" class="border rounded-circle" src="public/demo/color-product-1.jpg"
                            alt="">
                        <small class="px-1 fw-bold">Xanh dương</small>
                        <div class="color-checked position-absolute text-end">
                            <i style="vertical-align: -2px;"
                                class="bi bi-check2 text-white position-relative small"></i>
                        </div>
                    </div>
                    <div
                        class="pointer me-2 mb-2 position-relative d-flex align-items-center border border-danger rounded p-1">
                        <img width="30" height="30" class="border rounded-circle" src="public/demo/color-product-1.jpg"
                            alt="">
                        <small class="px-1 fw-bold">Xanh dương</small>
                    </div>
                </div>

                <div class="d-flex align-items-center pt-3">
                    <p class="fw-bold mb-0 me-4">Số lượng </p>
                    <button
                        class="px-3 py-2 me-2 border rounded bg-white d-flex justify-content-center align-items-center">
                        <i class="bi bi-dash text-main"></i>
                    </button>
                    <button
                        class="px-3 py-2 me-2 border rounded bg-white d-flex justify-content-center align-items-center">
                        <i class="bi bi-plus text-main"></i>
                    </button>
                    <input type="number" min="1" value="1"
                        class="form-control input-so-luong d-inline-block mb-0 border rounded">
                </div>

                <div class="d-flex pt-3 gap-2">
                    <button
                        class="btn btn-buy-now w-75 d-flex justify-content-center flex-column align-items-center rounded pt-2 pb-2 sitdown position-relative">
                        <span class="text-uppercase fw-bold">Mua ngay</span>
                        <small>(Giao tận nơi hoặc lấy tại cửa hàng)</small>
                    </button>
                    <button
                        class="btn btn-outline-danger d-flex justify-content-center flex-column align-items-center rounded p-2 product-action_buy js-addToCart modal-open font-weight-bold position-relative">
                        <i class="bi bi-cart4"></i>
                        <small>Thêm vào giỏ</small>
                    </button>
                </div>

                <div class="alert-warning rounded-10 px-3 py-1 mt-3">
                    Đang cập nhật
                </div>
            </div>
            <div class="col-xxl-3 col-12">
                <div class="d-flex align-items-center alert-warning rounded-10 px-3 py-3 mt-3">
                    <img style="max-width: 40px;" class="img-fluid me-3" src="public/demo/customer-service.png" alt="">
                    <div class="fw-bold">
                        <span class="d-block">
                            Gọi ngay <a class="tel-number" href="tel:1900123321">1900 123 321</a> để được tư vấn tốt
                            nhất!
                        </span>
                    </div>
                </div>

                <div class="mt-3 mb-xxl-3 mb-4 position-relative p-2 border rounded-10">
                    <span>
                        Tình trạng:
                        <span class="text-success">Còn hàng</span>
                    </span>
                    <div>
                        Thương hiệu: <span class="text-success fw-bold">Apple</span>
                    </div>
                    <div>Loại: <span class="text-success fw-bold">IOS</span></div>
                </div>

                <div class="free-gifts p-3 pb-4 pb-md-3 rounded position-relative">
                    <div class="title d-inline-block px-3 mb-0">
                        <img src="public/demo/gift.gif">
                        Code Ưu Đãi
                    </div>
                    <div class="row pt-2">
                        <div class="col-xxl-12 col-md-6 col-12 ">
                            <div class="pb-2 ">
                                <span class="mb-2 d-block">
                                    <small>Nhập mã <b>MewMobile2022</b> để được giảm ngay 120k
                                        (áp dụng cho các đơn hàng trên 500k)
                                    </small>
                                    <button class="btn btn_copy text-white mt-1">
                                        Sao chép
                                    </button>
                                </span>
                            </div>
                        </div>
                        <div class="col-xxl-12 col-md-6 col-12 ">
                            <div class="pb-2 ">
                                <span class="mb-2 d-block">
                                    <small>Nhập mã <b>MewMobile2022</b> để được giảm ngay 120k
                                        (áp dụng cho các đơn hàng trên 500k)
                                    </small>
                                    <button class="btn btn_copy text-white mt-1">
                                        Sao chép
                                    </button>
                                </span>
                            </div>
                        </div>
                        <div class="col-xxl-12 col-md-6 col-12 ">
                            <div class="pb-2 ">
                                <span class="mb-2 d-block">
                                    <small>Nhập mã <b>MewMobile2022</b> để được giảm ngay 120k
                                        (áp dụng cho các đơn hàng trên 500k)
                                    </small>
                                    <button class="btn btn_copy text-white mt-1">
                                        Sao chép
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-xxl-9 col-md-8 col-12 order-xxl-1 order-2">
                <div class="p-2 box_shadow rounded-10 modal-open px-xxl-3 mb-3">
                    <h6 class="fw-bold d-block w-100 pt-2 pb-2 mb-0">Thông tin chi tiết
                    </h6>
                    <div class="product-content pt-2 pb-2 mewcontent">
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

                <div class="p-2 box_shadow rounded-10 modal-open px-xxl-3 mb-3">
                    <h6 class="pt-2 fw-bold position-relative mb-1">
                        <a class="position-relative" href="index.php?p=listproducts" title="Sản phẩm liên quan">Sản phẩm
                            liên quan</a>
                    </h6>
                    <div class="relative-products owl-carousel owl-theme mt-3">
                        <div
                            class="product-item m-1 d-flex align-items-center position-relative box_shadow bg-white p-2 rounded-10">
                            <a class="d-block w-100 h-100 position-relative overflow-hidden"
                                href="index.php?p=detailproduct">
                                <div class="zoom-img bg-img-main"
                                    style="background-image: url(public/demo/item-product-1.jpg);"></div>
                            </a>
                            <div class="item-product-info position-relative">
                                <a class="btn p-1 d-flex justify-content-center align-items-center rounded-circle play0"
                                    href="index.php?p=detailproduct" title="Xem chi tiết sản phẩm">
                                    <i class="bi bi-gear fs-4 text-white"></i>
                                </a>
                                <h5 class="item-title fw-bold my-1">
                                    <a class="line_2" href="index.php?p=detailproduct"
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
                            <div class="sale-label sale-top-right position-absolute fw-bold">
                                -19%
                            </div>
                        </div>
                        <div
                            class="product-item m-1 d-flex align-items-center position-relative box_shadow bg-white p-2 rounded-10">
                            <a class="d-block w-100 h-100 position-relative overflow-hidden"
                                href="index.php?p=detailproduct">
                                <div class="zoom-img bg-img-main"
                                    style="background-image: url(public/demo/item-product-1.jpg);"></div>
                            </a>
                            <div class="item-product-info position-relative">
                                <a class="btn p-1 d-flex justify-content-center align-items-center rounded-circle play0"
                                    href="index.php?p=detailproduct" title="Xem chi tiết sản phẩm">
                                    <i class="bi bi-gear fs-4 text-white"></i>
                                </a>
                                <h5 class="item-title fw-bold my-1">
                                    <a class="line_2" href="index.php?p=detailproduct"
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
                            <div class="sale-label sale-top-right position-absolute fw-bold">
                                -19%
                            </div>
                        </div>
                        <div
                            class="product-item m-1 d-flex align-items-center position-relative box_shadow bg-white p-2 rounded-10">
                            <a class="d-block w-100 h-100 position-relative overflow-hidden"
                                href="index.php?p=detailproduct">
                                <div class="zoom-img bg-img-main"
                                    style="background-image: url(public/demo/item-product-1.jpg);"></div>
                            </a>
                            <div class="item-product-info position-relative">
                                <a class="btn p-1 d-flex justify-content-center align-items-center rounded-circle play0"
                                    href="index.php?p=detailproduct" title="Xem chi tiết sản phẩm">
                                    <i class="bi bi-gear fs-4 text-white"></i>
                                </a>
                                <h5 class="item-title fw-bold my-1">
                                    <a class="line_2" href="index.php?p=detailproduct"
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
                            <div class="sale-label sale-top-right position-absolute fw-bold">
                                -19%
                            </div>
                        </div>
                        <div
                            class="product-item m-1 d-flex align-items-center position-relative box_shadow bg-white p-2 rounded-10">
                            <a class="d-block w-100 h-100 position-relative overflow-hidden"
                                href="index.php?p=detailproduct">
                                <div class="zoom-img bg-img-main"
                                    style="background-image: url(public/demo/item-product-1.jpg);"></div>
                            </a>
                            <div class="item-product-info position-relative">
                                <a class="btn p-1 d-flex justify-content-center align-items-center rounded-circle play0"
                                    href="index.php?p=detailproduct" title="Xem chi tiết sản phẩm">
                                    <i class="bi bi-gear fs-4 text-white"></i>
                                </a>
                                <h5 class="item-title fw-bold my-1">
                                    <a class="line_2" href="index.php?p=detailproduct"
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
                            <div class="sale-label sale-top-right position-absolute fw-bold">
                                -19%
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <div class="col-xxl-3 col-md-4 col-12 order-xxl-2 order-1 mb-3">
                <div class="p-2 box_shadow rounded-10">
                    <h6 class="fw-bold py-2 mb-2">Thông số kỹ thuật</h6>
                    <div class="border rounded-10 small overflow-hidden">
                        <div class="special-content">
                            <h6 class="text-main px-2 pt-3 pb-2 fw-bold">Màn hình</h6>
                            <table border="1" cellpadding="1" cellspacing="1" class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td>Công nghệ màn hình</td>
                                        <td>OLED</td>
                                    </tr>
                                    <tr>
                                        <td>Độ phân giải</td>
                                        <td>2532 x 1170 pixels</td>
                                    </tr>
                                    <tr>
                                        <td>Màn hình rộng</td>
                                        <td>6.1 inches</td>
                                    </tr>
                                    <tr>
                                        <td>Tính năng màn hình</td>
                                        <td>Màn hình super Retina XDR, OLED, 460 ppi, HDR display, công nghệ True Tone
                                            Wide color (P3), Haptic Touch, Lớp phủ oleophobic chống bám vân tay</td>
                                    </tr>
                                    <tr>
                                        <td>Tần số quét</td>
                                        <td>60Hz</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h6 class="text-main px-2 pt-3 pb-2 fw-bold">Camera sau</h6>
                            <table border="1" cellpadding="1" cellspacing="1" class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td>Độ phân giải</td>
                                        <td>Camera góc rộng: 12MP, f/1.6<br>
                                            Camera góc siêu rộng: 12MP, ƒ/2.4</td>
                                    </tr>
                                    <tr>
                                        <td>Quay phim</td>
                                        <td>4K 2160p@30fps<br>
                                            FullHD 1080p@30fps<br>
                                            FullHD 1080p@60fps<br>
                                            HD 720p@30fps</td>
                                    </tr>
                                    <tr>
                                        <td>Đèn flash</td>
                                        <td>Có</td>
                                    </tr>
                                    <tr>
                                        <td>Tính năng</td>
                                        <td>Chạm lấy nét<br>
                                            HDR<br>
                                            Nhận diện khuôn mặt<br>
                                            Quay chậm (Slow Motion)<br>
                                            Toàn cảnh (Panorama)<br>
                                            Tự động lấy nét (AF)<br>
                                            Xóa phông<br>
                                            Nhãn dán (AR Stickers)<br>
                                            Nhận diện khuôn mặt</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h6 class="text-main px-2 pt-3 pb-2 fw-bold">Camera trước</h6>
                            <table border="1" cellpadding="1" cellspacing="1" class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td>Độ phân giải</td>
                                        <td>12MP, f/2.2</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h6 class="text-main px-2 pt-3 pb-2 fw-bold">Hệ điều hành</h6>
                            <table border="1" cellpadding="1" cellspacing="1" class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td>OS</td>
                                        <td>iOS 15</td>
                                    </tr>
                                    <tr>
                                        <td>CPU</td>
                                        <td>Apple A15</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h6 class="text-main px-2 pt-3 pb-2 fw-bold">Bộ nhớ, lưu trữ</h6>
                            <table border="1" cellpadding="1" cellspacing="1" class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td>RAM</td>
                                        <td>4GB</td>
                                    </tr>
                                    <tr>
                                        <td>Bộ nhớ trong</td>
                                        <td>128GB</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h4>Kết nối</h4>
                            <table border="1" cellpadding="1" cellspacing="1" class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td>Mạng di động</td>
                                        <td>Hỗ trợ 5G</td>
                                    </tr>
                                    <tr>
                                        <td>SIM</td>
                                        <td>1 Nano Sim</td>
                                    </tr>
                                    <tr>
                                        <td>Wifi</td>
                                        <td>Wi‑Fi 6 (802.11ax)</td>
                                    </tr>
                                    <tr>
                                        <td>GPS</td>
                                        <td>GPS, GLONASS, Galileo, QZSS, and BeiDou</td>
                                    </tr>
                                    <tr>
                                        <td>Bluetooth</td>
                                        <td>v5.0</td>
                                    </tr>
                                    <tr>
                                        <td>Cổng kết nối/sạc</td>
                                        <td>Lightning</td>
                                    </tr>
                                    <tr>
                                        <td>Jack tai nghe</td>
                                        <td>Lightning</td>
                                    </tr>
                                    <tr>
                                        <td>Kết nối khác</td>
                                        <td>NFC</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h6 class="text-main px-2 pt-3 pb-2 fw-bold">Pin, sạc</h6>
                            <table border="1" cellpadding="1" cellspacing="1" class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td>Dung lượng pin</td>
                                        <td>3.240mAh</td>
                                    </tr>
                                    <tr>
                                        <td>Công nghệ pin</td>
                                        <td>Sạc không dây</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h6 class="text-main px-2 pt-3 pb-2 fw-bold">Tiện ích</h6>
                            <table border="1" cellpadding="1" cellspacing="1" class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td>Bảo mật nâng cao</td>
                                        <td>Face ID</td>
                                    </tr>
                                    <tr>
                                        <td>Tính năng đặc biệt</td>
                                        <td>Hỗ trợ 5G, Sạc không dây, Nhận diện khuôn mặt, Kháng nước, kháng bụi</td>
                                    </tr>
                                    <tr>
                                        <td>Kháng nước, bụi</td>
                                        <td>IP67</td>
                                    </tr>
                                    <tr>
                                        <td>Ghi âm</td>
                                        <td>Ghi âm cuộc gọi, ghi âm mặc định</td>
                                    </tr>
                                    <tr>
                                        <td>Radio</td>
                                        <td>Có</td>
                                    </tr>
                                    <tr>
                                        <td>Xem phim</td>
                                        <td>3GP<br>
                                            AVI<br>
                                            MP4<br>
                                            WMV</td>
                                    </tr>
                                    <tr>
                                        <td>Nghe nhạc</td>
                                        <td>AAC<br>
                                            AMR<br>
                                            FLAC<br>
                                            Midi<br>
                                            MP3<br>
                                            OGG</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <a href="javascript:;" title="Xem chi tiết cấu hình"
                        class="view_mores box_shadow rounded-10 d-block p-2 small mb-2 mt-3 text-center fw-bold"
                        data-bs-toggle="modal" data-bs-target="#InfoProduct">
                        Xem chi tiết cấu hình</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="InfoProduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Thông số kỹ thuật</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modal-body">
                    <div class="special-content-modal">
                        <h6 class="text-main px-2 pt-3 pb-2 fw-bold">Màn hình</h6>
                        <table border="1" cellpadding="1" cellspacing="1" class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Công nghệ màn hình</td>
                                    <td>OLED</td>
                                </tr>
                                <tr>
                                    <td>Độ phân giải</td>
                                    <td>2532 x 1170 pixels</td>
                                </tr>
                                <tr>
                                    <td>Màn hình rộng</td>
                                    <td>6.1 inches</td>
                                </tr>
                                <tr>
                                    <td>Tính năng màn hình</td>
                                    <td>Màn hình super Retina XDR, OLED, 460 ppi, HDR display, công nghệ True Tone
                                        Wide color (P3), Haptic Touch, Lớp phủ oleophobic chống bám vân tay</td>
                                </tr>
                                <tr>
                                    <td>Tần số quét</td>
                                    <td>60Hz</td>
                                </tr>
                            </tbody>
                        </table>
                        <h6 class="text-main px-2 pt-3 pb-2 fw-bold">Camera sau</h6>
                        <table border="1" cellpadding="1" cellspacing="1" class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Độ phân giải</td>
                                    <td>Camera góc rộng: 12MP, f/1.6<br>
                                        Camera góc siêu rộng: 12MP, ƒ/2.4</td>
                                </tr>
                                <tr>
                                    <td>Quay phim</td>
                                    <td>4K 2160p@30fps<br>
                                        FullHD 1080p@30fps<br>
                                        FullHD 1080p@60fps<br>
                                        HD 720p@30fps</td>
                                </tr>
                                <tr>
                                    <td>Đèn flash</td>
                                    <td>Có</td>
                                </tr>
                                <tr>
                                    <td>Tính năng</td>
                                    <td>Chạm lấy nét<br>
                                        HDR<br>
                                        Nhận diện khuôn mặt<br>
                                        Quay chậm (Slow Motion)<br>
                                        Toàn cảnh (Panorama)<br>
                                        Tự động lấy nét (AF)<br>
                                        Xóa phông<br>
                                        Nhãn dán (AR Stickers)<br>
                                        Nhận diện khuôn mặt</td>
                                </tr>
                            </tbody>
                        </table>
                        <h6 class="text-main px-2 pt-3 pb-2 fw-bold">Camera trước</h6>
                        <table border="1" cellpadding="1" cellspacing="1" class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Độ phân giải</td>
                                    <td>12MP, f/2.2</td>
                                </tr>
                            </tbody>
                        </table>
                        <h6 class="text-main px-2 pt-3 pb-2 fw-bold">Hệ điều hành</h6>
                        <table border="1" cellpadding="1" cellspacing="1" class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>OS</td>
                                    <td>iOS 15</td>
                                </tr>
                                <tr>
                                    <td>CPU</td>
                                    <td>Apple A15</td>
                                </tr>
                            </tbody>
                        </table>
                        <h6 class="text-main px-2 pt-3 pb-2 fw-bold">Bộ nhớ, lưu trữ</h6>
                        <table border="1" cellpadding="1" cellspacing="1" class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>RAM</td>
                                    <td>4GB</td>
                                </tr>
                                <tr>
                                    <td>Bộ nhớ trong</td>
                                    <td>128GB</td>
                                </tr>
                            </tbody>
                        </table>
                        <h4>Kết nối</h4>
                        <table border="1" cellpadding="1" cellspacing="1" class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Mạng di động</td>
                                    <td>Hỗ trợ 5G</td>
                                </tr>
                                <tr>
                                    <td>SIM</td>
                                    <td>1 Nano Sim</td>
                                </tr>
                                <tr>
                                    <td>Wifi</td>
                                    <td>Wi‑Fi 6 (802.11ax)</td>
                                </tr>
                                <tr>
                                    <td>GPS</td>
                                    <td>GPS, GLONASS, Galileo, QZSS, and BeiDou</td>
                                </tr>
                                <tr>
                                    <td>Bluetooth</td>
                                    <td>v5.0</td>
                                </tr>
                                <tr>
                                    <td>Cổng kết nối/sạc</td>
                                    <td>Lightning</td>
                                </tr>
                                <tr>
                                    <td>Jack tai nghe</td>
                                    <td>Lightning</td>
                                </tr>
                                <tr>
                                    <td>Kết nối khác</td>
                                    <td>NFC</td>
                                </tr>
                            </tbody>
                        </table>
                        <h6 class="text-main px-2 pt-3 pb-2 fw-bold">Pin, sạc</h6>
                        <table border="1" cellpadding="1" cellspacing="1" class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Dung lượng pin</td>
                                    <td>3.240mAh</td>
                                </tr>
                                <tr>
                                    <td>Công nghệ pin</td>
                                    <td>Sạc không dây</td>
                                </tr>
                            </tbody>
                        </table>
                        <h6 class="text-main px-2 pt-3 pb-2 fw-bold">Tiện ích</h6>
                        <table border="1" cellpadding="1" cellspacing="1" class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Bảo mật nâng cao</td>
                                    <td>Face ID</td>
                                </tr>
                                <tr>
                                    <td>Tính năng đặc biệt</td>
                                    <td>Hỗ trợ 5G, Sạc không dây, Nhận diện khuôn mặt, Kháng nước, kháng bụi</td>
                                </tr>
                                <tr>
                                    <td>Kháng nước, bụi</td>
                                    <td>IP67</td>
                                </tr>
                                <tr>
                                    <td>Ghi âm</td>
                                    <td>Ghi âm cuộc gọi, ghi âm mặc định</td>
                                </tr>
                                <tr>
                                    <td>Radio</td>
                                    <td>Có</td>
                                </tr>
                                <tr>
                                    <td>Xem phim</td>
                                    <td>3GP<br>
                                        AVI<br>
                                        MP4<br>
                                        WMV</td>
                                </tr>
                                <tr>
                                    <td>Nghe nhạc</td>
                                    <td>AAC<br>
                                        AMR<br>
                                        FLAC<br>
                                        Midi<br>
                                        MP3<br>
                                        OGG</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function () {
        $('.detail-slider').owlCarousel({
            center: false,
            loop: false,
            margin: 0,
            dots: true,
            nav: true,
            autoplay: false,
            margin: 15,
            smartSpeed: 900,
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

        $('.relative-products').owlCarousel({
            center: false,
            loop: false,
            margin: 0,
            dots: false,
            nav: true,
            autoplay: false,
            margin: 15,
            smartSpeed: 900,
            autoplayHoverPause: false,
            responsive: {
                0: {
                    items: 1,
                },
                768: {
                    items: 2,
                },
                1400: {
                    items: 3,
                }
            }
        });

        $(".owl-next").html(`<i class="bi bi-chevron-right fs-3 ms-2"></i>`);
        $(".owl-prev").html(`<i class="bi bi-chevron-left fs-3 me-2"></i>`);

        $(".relative-products .owl-next").html(`<i class="bi bi-chevron-right fs-5 ms-1"></i>`);
        $(".relative-products .owl-prev").html(`<i class="bi bi-chevron-left fs-5 me-1"></i>`);

        // replace dot to thumnail image
        $(".detail-slider .owl-dot").each(function (index, element) {
            $(element).html(`<img width="65" height="65" class="img-fluid my-thumnail-img" src="public/demo/detail-product-thumnail-${index + 1}.jpg" alt="">`);
        })

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