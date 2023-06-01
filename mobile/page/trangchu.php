<style>
    .banner-slider {
        margin-top: -100px;
    }

    .banner-slider.owl-carousel>.owl-nav>.owl-prev {
        width: 34px;
        height: 60px;
        transition: .3s;
        outline: none;
        opacity: .9;
        padding-left: 7px;
        border-radius: 0 100px 100px 0;
        background: #f7f7f7;
        box-shadow: 0 0 4px 0 rgb(0 0 0 / 20%);
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        left: 0;
    }

    .banner-slider.owl-carousel>.owl-nav>.owl-next {
        width: 34px;
        height: 60px;
        transition: .3s;
        outline: none;
        opacity: .9;
        padding-left: 7px;
        border-radius: 100px 0 0 100px;
        background: #f7f7f7;
        box-shadow: 0 0 4px 0 rgb(0 0 0 / 20%);
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        right: 0;
    }

    .banner-slider .owl-nav [class*=owl-]:hover {
        color: var(--mainColor);
        background-color: #f7f7f7;
    }

    .owl-theme .owl-nav [class*=owl-] {
        margin: 0px;
    }

    .gap-cate {
        gap: 8px;
    }

    .item-cate {
        flex: 1;
        max-width: 100px;
        min-width: 100px;
        box-shadow: 0px 0px 5px 0px #e5e5e5;
    }

    .item-cate:hover {
        box-shadow: 0px 0px 5px 0px var(--mainColor);
    }

    .img-cate {
        width: 60px;
    }

    .cl_tit_fl a {
        color: var(--cl_tit_fl);
    }

    .bg-flash {
        background: linear-gradient(var(--bg_fl_1) 0%, var(--bg_fl_2));
    }


    /* product item */
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

    .sold-module {
        height: 20px;
        border-radius: 10px;
        background: #ff9a9a;
        z-index: 1;
    }

    .sold-module .sold {
        font-size: 12px;
        color: #fff;
        z-index: 2;
        line-height: normal;
    }

    .sold-module .remain {
        background: linear-gradient(to right, #ec1a17, #ffad00);
        left: 0;
        top: 0;
        z-index: 1;
        border-radius: 10px;
    }

    @keyframes progress_bar_fill {
        0% {
            background-position: 0 0
        }

        100% {
            background-position: 30px 0
        }
    }

    .sold-module .remain:before {
        content: '';
        width: 100%;
        height: 100%;
        background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.25) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.25) 50%, rgba(255, 255, 255, 0.25) 75%, transparent 75%, transparent);
        animation: progress_bar_fill 2s linear infinite;
        background-size: 30px 30px;
        position: absolute;
    }

    .hot-sale {
        width: 20px !important;
        height: 20px !important;
        z-index: 2;
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

    /* flash slider */
    .flash-sale.owl-carousel>.owl-nav>.owl-prev {
        width: 34px;
        height: 60px;
        transition: .3s;
        outline: none;
        opacity: .9;
        padding-left: 7px;
        border-radius: 0 100px 100px 0;
        background: #f7f7f7;
        box-shadow: 0 0 4px 0 rgb(0 0 0 / 20%);
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        left: 0;
    }

    .flash-sale.owl-carousel>.owl-nav>.owl-next.disabled,
    .flash-sale.owl-carousel>.owl-nav>.owl-prev.disabled {
        display: none;
    }

    .flash-sale.owl-carousel>.owl-nav>.owl-next {
        width: 34px;
        height: 60px;
        transition: .3s;
        outline: none;
        opacity: .9;
        padding-left: 7px;
        border-radius: 100px 0 0 100px;
        background: #f7f7f7;
        box-shadow: 0 0 4px 0 rgb(0 0 0 / 20%);
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        right: 0;
    }

    .flash-sale .owl-nav [class*=owl-]:hover {
        color: var(--mainColor);
        background-color: #f7f7f7;
    }

    /* side slide */
    .side-slider.owl-carousel>.owl-nav>.owl-prev {
        width: 34px;
        height: 60px;
        transition: .3s;
        outline: none;
        opacity: .9;
        padding-left: 7px;
        border-radius: 0 100px 100px 0;
        background: #f7f7f7;
        box-shadow: 0 0 4px 0 rgb(0 0 0 / 20%);
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        left: 0;
    }

    .side-slider.owl-carousel>.owl-nav>.owl-next.disabled,
    .side-slider.owl-carousel>.owl-nav>.owl-prev.disabled {
        display: none;
    }

    .side-slider.owl-carousel>.owl-nav>.owl-next {
        width: 34px;
        height: 60px;
        transition: .3s;
        outline: none;
        opacity: .9;
        padding-left: 7px;
        border-radius: 100px 0 0 100px;
        background: #f7f7f7;
        box-shadow: 0 0 4px 0 rgb(0 0 0 / 20%);
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        right: 0;
    }

    .side-slider .owl-nav [class*=owl-]:hover {
        color: var(--mainColor);
        background-color: #f7f7f7;
    }

    /*  review slider */
    .review-slider.owl-carousel>.owl-nav>.owl-prev {
        width: 34px;
        height: 60px;
        transition: .3s;
        outline: none;
        opacity: .9;
        padding-left: 7px;
        border-radius: 0 100px 100px 0;
        background: #f7f7f7;
        box-shadow: 0 0 4px 0 rgb(0 0 0 / 20%);
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        left: 0;
    }

    .review-slider.owl-carousel>.owl-nav>.owl-next.disabled,
    .review-slider.owl-carousel>.owl-nav>.owl-prev.disabled {
        display: none;
    }

    .review-slider.owl-carousel>.owl-nav>.owl-next {
        width: 34px;
        height: 60px;
        transition: .3s;
        outline: none;
        opacity: .9;
        padding-left: 7px;
        border-radius: 100px 0 0 100px;
        background: #f7f7f7;
        box-shadow: 0 0 4px 0 rgb(0 0 0 / 20%);
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        right: 0;
    }

    .review-slider .owl-nav [class*=owl-]:hover {
        color: var(--mainColor);
        background-color: #f7f7f7;
    }

    .nav-item {
        transition: all .15s ease;
    }

    .nav-colection .nav-item a.active {
        background: #fff;
        color: var(--mainColor);
        border-color: var(--mainColor) !important;
    }

    .nav-colection .nav-item a:hover {
        background: #fff;
        color: var(--mainColor);
        border-color: var(--mainColor) !important;
    }

    .bg-top-trending {
        background: linear-gradient(90deg, var(--bg_trending_1) 0%, var(--bg_trending_2) 100%);
    }

    .more_pr {
        top: 0;
        left: 0;
        background: rgba(0, 0, 0, 0.3);
        font-size: 25px;
    }

    .top-trending-info i {
        position: absolute;
        right: 5px;
        top: 50%;
        transform: translateY(-50%);
        width: 40px;
        height: 40px;
        padding: 12px;
        background: #f8f8f8;
        fill: #9d9d9d;
        transition: 0.3s all ease;
        will-change: transform;
    }

    .item_cate:hover .top-trending-info i {
        right: -2px;
    }

    .poli-item {
        border: 1px dashed var(--mainColor);
    }

    .poli-item .fs-5 {
        font-size: 1rem !important;
    }

    .list_link {
        gap: 8px;
    }

    .list_link a {
        background-color: #f3f4f6;
        padding: 5px 10px;
        font-size: 13px;
        white-space: nowrap;
    }

    .list_link a:hover {
        background: #fff;
        color: var(--mainColor);
        border-color: var(--mainColor) !important;
    }

    .side-slider .product-item {
        margin: 6px;
    }

    .title-black {
        color: black;
    }

    /* 24h technology */
    .item-news-bg {
        padding-bottom: calc(100%*2/3);
    }

    .item-news-bg::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #000;
        opacity: 0.3;
        z-index: 1;
    }

    .item-news-block:hover .play-btn {
        animation: play_video 1.5s ease infinite;
    }

    .overlay-news {
        top: 0;
        left: 0;
        padding: 30px;
        backface-visibility: hidden;
        pointer-events: none;
        z-index: 3;
    }

    .overlay-news::before {
        content: '';
        position: absolute;
        top: 30px;
        right: 30px;
        bottom: 30px;
        left: 30px;
        border: 1px solid #fff;
        border-radius: 0.25rem;
        box-shadow: 0 0 0 45px rgba(255, 255, 255, 0.2);
        opacity: 0;
        transition: opacity 0.35s, transform 0.35s;
        transform: scale3d(1.4, 1.4, 1);
        background-image: url(public/demo/favicon.png);
        background-repeat: no-repeat;
        background-position: center center;
        background-size: 70px;
        background-color: rgba(76, 175, 80, 0.2);
    }

    .img-thumb:hover .overlay-news::before {
        opacity: 1;
        transform: scale3d(1, 1, 1);
    }

    .img-thumb-2 .bg-img-main {
        overflow: hidden;
        transition: .8s ease-out;
        will-change: transform;

    }

    .img-thumb-2:hover .bg-img-main {
        transform: scale(1.1);
    }

    .entry-date {
        color: #ffffff;
        top: 10px;
        left: 0;
        padding: 0px 7px;
        line-height: normal;
        z-index: 2;
    }

    .entry-date:before {
        content: '';
        background: var(--mainColor);
        width: 120px;
        height: 120px;
        border-radius: 50%;
        position: absolute;
        top: -60px;
        left: -40px;
        pointer-events: none;
        z-index: -1;
    }

    /* end 24h technology */


    .bg-linear-mobile {
        background: linear-gradient(var(--mainColor), #fff);
        height: 170px;
    }


    @media (min-width: 768px) {
        .bg-linear-mobile {
            background: linear-gradient(-180deg, var(--mainColor), var(--mainColor2));
            height: unset;
        }
    }



    @media (min-width: 768px) {
        .item-cate {
            flex: 1;
            min-width: 13%;
            max-width: unset;
            box-shadow: 0px 0px 5px 0px #e5e5e5;
        }

        .poli-item .fs-5 {
            font-size: 1.25rem !important;
        }

        .poli-item {
            border: unset;
        }

        .banner-slider {
            margin-top: -54px;
        }
    }

    @media (min-width: 1400px) {
        .item-cate {
            flex: 1;
            min-width: 9%;
            max-width: 12%;
            box-shadow: 0px 0px 5px 0px #e5e5e5;
        }

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

        .banner-slider {
            margin-top: -100px;
        }
    }
</style>

<div class="row d-md-flex d-none position-relative">
    <div class="px-0">
        <img class="img-fluid" src="public/demo/big_bn_slide.jpg" alt="">
    </div>
</div>

<div class="row bg-primary px-6">
    <div class="banner-slider owl-carousel owl-theme px-0">
        <img class="rounded-10" src="public/demo/slide-img1.jpg" alt="">
        <img class="rounded-10" src="public/demo/slide-img2.jpg" alt="">
        <img class="rounded-10" src="public/demo/slide-img1.jpg" alt="">
        <img class="rounded-10" src="public/demo/slide-img2.jpg" alt="">
    </div>
</div>

<div class="row bg-primary px-6 pt-2">
    <div class="col-6 col-xxl-3 mb-3 mb-xxl-0">
        <div class="d-flex align-items-center p-2 p-xxl-3 bg-white rounded-10 h-100 poli-item">
            <div style="width: 32px;" class="me-md-3 me-3">
                <img src="public/demo/img_poli_1.png" alt="">
            </div>
            <div class="fs-5">
                Sản phẩm an toàn
            </div>
        </div>
    </div>
    <div class="col-6 col-xxl-3 mb-3 mb-xxl-0">
        <div class="d-flex align-items-center p-2 p-xxl-3 bg-white rounded-10 h-100 poli-item ">
            <div style="width: 32px;" class="me-md-3 me-3">
                <img src="public/demo/img_poli_2.png" alt="">
            </div>
            <div class="fs-5">
                Chất lượng cam kết
            </div>
        </div>
    </div>
    <div class="col-6 col-xxl-3 ">
        <div class="d-flex align-items-center p-2 p-xxl-3 bg-white rounded-10 h-100 poli-item ">
            <div style="width: 32px;" class="me-md-3 me-3">
                <img src="public/demo/img_poli_3.png" alt="">
            </div>
            <div class="fs-5">
                Dịch vụ vượt trội
            </div>
        </div>
    </div>
    <div class="col-6 col-xxl-3 ">
        <div class="d-flex align-items-center p-2 p-xxl-3 bg-white rounded-10 h-100 poli-item ">
            <div style="width: 32px;" class="me-md-3 me-3">
                <img src="public/demo/img_poli_4.png" alt="">
            </div>
            <div class="fs-5">
                Giao hàng nhanh chóng
            </div>
        </div>
    </div>
</div>

<div class="row bg-primary px-6 pt-3 pb-3">
    <div class="bg-white rounded p-3">
        <h4 class="text-uppercase fw-bold position-relative mb-3">
            Danh mục nổi bật
        </h4>
        <div class="d-flex flex-md-wrap flex-nowrap overflow-auto gap-cate p-1">
            <a class="d-flex flex-column align-items-center rounded-10 item-cate" title="Điện thoại"
                href="index.php?p=listproducts">
                <div class="img-cate pt-2">
                    <div class="bg-img-main" style="background-image: url(public/demo/cate-1.png);"></div>
                </div>
                <span class="px-3 my-2 text-center line_2">Điện thoại</span>
            </a>
            <a class="d-flex flex-column align-items-center rounded-10 item-cate" title="Smart watch"
                href="index.php?p=listproducts">
                <div class="img-cate pt-2">
                    <div class="bg-img-main" style="background-image: url(public/demo/cate-2.png);"></div>
                </div>
                <span class="px-3 my-2 text-center line_2">Smart watch</span>
            </a>
            <a class="d-flex flex-column align-items-center rounded-10 item-cate" title="Laptop"
                href="index.php?p=listproducts">
                <div class="img-cate pt-2">
                    <div class="bg-img-main" style="background-image: url(public/demo/cate-3.png);"></div>
                </div>
                <span class="px-3 my-2 text-center line_2">Laptop</span>
            </a>
            <a class="d-flex flex-column align-items-center rounded-10 item-cate" title="Máy tính bảng"
                href="index.php?p=listproducts">
                <div class="img-cate pt-2">
                    <div class="bg-img-main" style="background-image: url(public/demo/cate-4.png);"></div>
                </div>
                <span class="px-3 my-2 text-center line_2">Máy tính bảng</span>
            </a>
            <a class="d-flex flex-column align-items-center rounded-10 item-cate" title="Thiết bị mạng"
                href="index.php?p=listproducts">
                <div class="img-cate pt-2">
                    <div class="bg-img-main" style="background-image: url(public/demo/cate-5.png);"></div>
                </div>
                <span class="px-3 my-2 text-center line_2">Thiết bị mạng</span>
            </a>
            <a class="d-flex flex-column align-items-center rounded-10 item-cate" title="Tivi"
                href="index.php?p=listproducts">
                <div class="img-cate pt-2">
                    <div class="bg-img-main" style="background-image: url(public/demo/cate-6.png);"></div>
                </div>
                <span class="px-3 my-2 text-center line_2">Tivi</span>
            </a>
            <a class="d-flex flex-column align-items-center rounded-10 item-cate" title="Tai nghe"
                href="index.php?p=listproducts">
                <div class="img-cate pt-2">
                    <div class="bg-img-main" style="background-image: url(public/demo/cate-7.png);"></div>
                </div>
                <span class="px-3 my-2 text-center line_2">Tai nghe</span>
            </a>
            <a class="d-flex flex-column align-items-center rounded-10 item-cate" title="Ốp lưng, bao da"
                href="index.php?p=listproducts">
                <div class="img-cate pt-2">
                    <div class="bg-img-main" style="background-image: url(public/demo/cate-8.png);"></div>
                </div>
                <span class="px-3 my-2 text-center line_2">Ốp lưng, bao da</span>
            </a>
            <a class="d-flex flex-column align-items-center rounded-10 item-cate" title="Loa"
                href="index.php?p=listproducts">
                <div class="img-cate pt-2">
                    <div class="bg-img-main" style="background-image: url(public/demo/cate-9.png);"></div>
                </div>
                <span class="px-3 my-2 text-center line_2">Loa</span>
            </a>
            <a class="d-flex flex-column align-items-center rounded-10 item-cate" title="Pin dự phòng"
                href="index.php?p=listproducts">
                <div class="img-cate pt-2">
                    <div class="bg-img-main" style="background-image: url(public/demo/cate-10.png);"></div>
                </div>
                <span class="px-3 my-2 text-center line_2">Pin dự phòng</span>
            </a>
            <a class="d-flex flex-column align-items-center rounded-10 item-cate" title="Cáp, củ sạc"
                href="index.php?p=listproducts">
                <div class="img-cate pt-2">
                    <div class="bg-img-main" style="background-image: url(public/demo/cate-11.png);"></div>
                </div>
                <span class="px-3 my-2 text-center line_2">Cáp, củ sạc</span>
            </a>
            <a class="d-flex flex-column align-items-center rounded-10 item-cate" title="Màn hình"
                href="index.php?p=listproducts">
                <div class="img-cate pt-2">
                    <div class="bg-img-main" style="background-image: url(public/demo/cate-12.png);"></div>
                </div>
                <span class="px-3 my-2 text-center line_2">Màn hình</span>
            </a>
            <a class="d-flex flex-column align-items-center rounded-10 item-cate" title="Chuột"
                href="index.php?p=listproducts">
                <div class="img-cate pt-2">
                    <div class="bg-img-main" style="background-image: url(public/demo/cate-13.png);"></div>
                </div>
                <span class="px-3 my-2 text-center line_2">Chuột</span>
            </a>
            <a class="d-flex flex-column align-items-center rounded-10 item-cate" title="Bàn phím"
                href="index.php?p=listproducts">
                <div class="img-cate pt-2">
                    <div class="bg-img-main" style="background-image: url(public/demo/cate-14.png);"></div>
                </div>
                <span class="px-3 my-2 text-center line_2">Bàn phím</span>
            </a>

            <a class="d-flex flex-column align-items-center rounded-10 item-cate" title="Phụ kiện gaming"
                href="index.php?p=listproducts">
                <div class="img-cate pt-2">
                    <div class="bg-img-main" style="background-image: url(public/demo/cate-15.png);"></div>
                </div>
                <span class="px-3 my-2 text-center line_2">Phụ kiện gaming</span>
            </a>
            <a class="d-flex flex-column align-items-center rounded-10 item-cate" title="Camera, webcam"
                href="index.php?p=listproducts">
                <div class="img-cate pt-2">
                    <div class="bg-img-main" style="background-image: url(public/demo/cate-16.png);"></div>
                </div>
                <span class="px-3 my-2 text-center line_2">Camera, webcam</span>
            </a>
            <a class="d-flex flex-column align-items-center rounded-10 item-cate" title="Máy in"
                href="index.php?p=listproducts">
                <div class="img-cate pt-2">
                    <div class="bg-img-main" style="background-image: url(public/demo/cate-17.png);"></div>
                </div>
                <span class="px-3 my-2 text-center line_2">Máy in</span>
            </a>
            <a class="d-flex flex-column align-items-center rounded-10 item-cate" title="Máy quét mã vạch"
                href="index.php?p=listproducts">
                <div class="img-cate pt-2">
                    <div class="bg-img-main" style="background-image: url(public/demo/cate-18.png);"></div>
                </div>
                <span class="px-3 my-2 text-center line_2">Máy quét mã vạch</span>
            </a>
            <a class="d-flex flex-column align-items-center rounded-10 item-cate" title="Thiết bị nhà thông minh"
                href="index.php?p=listproducts">
                <div class="img-cate pt-2">
                    <div class="bg-img-main" style="background-image: url(public/demo/cate-19.png);"></div>
                </div>
                <span class="px-3 my-2 text-center line_2">Thiết bị nhà thông minh</span>
            </a>
        </div>
    </div>
</div>

<div class="row bg-primary px-6 pt-3 pb-3">
    <div class="bg-flash rounded p-3">
        <div class="d-flex flex-wrap py-3">
            <div class="col-12 col-xxl-4">
                <h4 class="text-uppercase m-0 fw-bold text-center text-xxl-start cl_tit_fl">
                    <a class="position-relative" href="flash-sale" title="FLASH SALE">
                        <img style="vertical-align: text-top;" width="23" height="23" src="public/demo/flash.png"
                            alt="">
                        FLASH SALE
                    </a>
                </h4>
            </div>
            <div class="col-12 col-xxl-8">
                <div class="slider-auto-banner owl-carousel owl-theme py-2">
                    <div class="text-white text-center text-xxl-start">
                        Giảm ngay 120k (áp dụng cho các đơn hàng trên 500k)
                    </div>
                    <div class="text-white text-center text-xxl-start">
                        Giảm ngay 20% tổng giá trị đơn hàng. Số lượng có hạn
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex flex-wrap">
            <div class="flash-sale owl-carousel owl-theme">
                <div class="d-flex flex-column">
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
                            <div class="sold-module d-flex w-100 position-relative overflow-hidden">
                                <img class="hot-sale" src="public/demo/hot-sale.png">
                                <div
                                    class="d-flex align-items-center justify-content-center sold text-uppercase position-absolute h-100 w-100">
                                    Sắp cháy hàng</div>
                                <div class="remain overflow-hidden position-absolute h-100" style="width:90%"></div>
                            </div>
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
                    <div style="margin-top: 18px;"
                        class="product-item position-relative box_shadow bg-white p-2 rounded-10">
                        <a class="d-block position-relative overflow-hidden" href="index.php?p=detailproduct">
                            <div class="zoom-img bg-img-main"
                                style="background-image: url(public/demo/item-product-2.jpg);"></div>
                        </a>
                        <div class="item-product-info mt-1 position-relative">
                            <a class="btn p-1 d-flex justify-content-center align-items-center rounded-circle play0"
                                href="index.php?p=detailproduct" title="Xem chi tiết sản phẩm">
                                <i class="bi bi-gear fs-4 text-white"></i>
                            </a>
                            <div class="sold-module d-flex w-100 position-relative overflow-hidden">
                                <div
                                    class="d-flex align-items-center justify-content-center sold text-uppercase position-absolute h-100 w-100">
                                    Đã bán: 8</div>
                                <div class="remain overflow-hidden position-absolute h-100" style="width:90%"></div>
                            </div>
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
                <div class="d-flex flex-column">
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
                            <div class="sold-module d-flex w-100 position-relative overflow-hidden">
                                <img class="hot-sale" src="public/demo/hot-sale.png">
                                <div
                                    class="d-flex align-items-center justify-content-center sold text-uppercase position-absolute h-100 w-100">
                                    Sắp cháy hàng</div>
                                <div class="remain overflow-hidden position-absolute h-100" style="width:90%"></div>
                            </div>
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
                    <div style="margin-top: 18px;"
                        class="product-item position-relative box_shadow bg-white p-2 rounded-10">
                        <a class="d-block position-relative overflow-hidden" href="index.php?p=detailproduct">
                            <div class="zoom-img bg-img-main"
                                style="background-image: url(public/demo/item-product-1.jpg);"></div>
                        </a>
                        <div class="item-product-info mt-1 position-relative">
                            <a class="btn p-1 d-flex justify-content-center align-items-center rounded-circle play0"
                                href="index.php?p=detailproduct" title="Xem chi tiết sản phẩm">
                                <i class="bi bi-gear fs-4 text-white"></i>
                            </a>
                            <div class="sold-module d-flex w-100 position-relative overflow-hidden">
                                <img class="hot-sale" src="public/demo/hot-sale.png">
                                <div
                                    class="d-flex align-items-center justify-content-center sold text-uppercase position-absolute h-100 w-100">
                                    Sắp cháy hàng</div>
                                <div class="remain overflow-hidden position-absolute h-100" style="width:90%"></div>
                            </div>
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
                <div class="d-flex flex-column">
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
                            <div class="sold-module d-flex w-100 position-relative overflow-hidden">
                                <img class="hot-sale" src="public/demo/hot-sale.png">
                                <div
                                    class="d-flex align-items-center justify-content-center sold text-uppercase position-absolute h-100 w-100">
                                    Sắp cháy hàng</div>
                                <div class="remain overflow-hidden position-absolute h-100" style="width:90%"></div>
                            </div>
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
                    <div style="margin-top: 18px;"
                        class="product-item position-relative box_shadow bg-white p-2 rounded-10">
                        <a class="d-block position-relative overflow-hidden" href="index.php?p=detailproduct">
                            <div class="zoom-img bg-img-main"
                                style="background-image: url(public/demo/item-product-1.jpg);"></div>
                        </a>
                        <div class="item-product-info mt-1 position-relative">
                            <a class="btn p-1 d-flex justify-content-center align-items-center rounded-circle play0"
                                href="index.php?p=detailproduct" title="Xem chi tiết sản phẩm">
                                <i class="bi bi-gear fs-4 text-white"></i>
                            </a>
                            <div class="sold-module d-flex w-100 position-relative overflow-hidden">
                                <img class="hot-sale" src="public/demo/hot-sale.png">
                                <div
                                    class="d-flex align-items-center justify-content-center sold text-uppercase position-absolute h-100 w-100">
                                    Sắp cháy hàng</div>
                                <div class="remain overflow-hidden position-absolute h-100" style="width:90%"></div>
                            </div>
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
                <div class="d-flex flex-column">
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
                            <div class="sold-module d-flex w-100 position-relative overflow-hidden">
                                <img class="hot-sale" src="public/demo/hot-sale.png">
                                <div
                                    class="d-flex align-items-center justify-content-center sold text-uppercase position-absolute h-100 w-100">
                                    Sắp cháy hàng</div>
                                <div class="remain overflow-hidden position-absolute h-100" style="width:90%"></div>
                            </div>
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
                    <div style="margin-top: 18px;"
                        class="product-item position-relative box_shadow bg-white p-2 rounded-10">
                        <a class="d-block position-relative overflow-hidden" href="index.php?p=detailproduct">
                            <div class="zoom-img bg-img-main"
                                style="background-image: url(public/demo/item-product-1.jpg);"></div>
                        </a>
                        <div class="item-product-info mt-1 position-relative">
                            <a class="btn p-1 d-flex justify-content-center align-items-center rounded-circle play0"
                                href="index.php?p=detailproduct" title="Xem chi tiết sản phẩm">
                                <i class="bi bi-gear fs-4 text-white"></i>
                            </a>
                            <div class="sold-module d-flex w-100 position-relative overflow-hidden">
                                <img class="hot-sale" src="public/demo/hot-sale.png">
                                <div
                                    class="d-flex align-items-center justify-content-center sold text-uppercase position-absolute h-100 w-100">
                                    Sắp cháy hàng</div>
                                <div class="remain overflow-hidden position-absolute h-100" style="width:90%"></div>
                            </div>
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
                <div class="d-flex flex-column">
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
                            <div class="sold-module d-flex w-100 position-relative overflow-hidden">
                                <img class="hot-sale" src="public/demo/hot-sale.png">
                                <div
                                    class="d-flex align-items-center justify-content-center sold text-uppercase position-absolute h-100 w-100">
                                    Sắp cháy hàng</div>
                                <div class="remain overflow-hidden position-absolute h-100" style="width:90%"></div>
                            </div>
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
                    <div style="margin-top: 18px;"
                        class="product-item position-relative box_shadow bg-white p-2 rounded-10">
                        <a class="d-block position-relative overflow-hidden" href="index.php?p=detailproduct">
                            <div class="zoom-img bg-img-main"
                                style="background-image: url(public/demo/item-product-1.jpg);"></div>
                        </a>
                        <div class="item-product-info mt-1 position-relative">
                            <a class="btn p-1 d-flex justify-content-center align-items-center rounded-circle play0"
                                href="index.php?p=detailproduct" title="Xem chi tiết sản phẩm">
                                <i class="bi bi-gear fs-4 text-white"></i>
                            </a>
                            <div class="sold-module d-flex w-100 position-relative overflow-hidden">
                                <img class="hot-sale" src="public/demo/hot-sale.png">
                                <div
                                    class="d-flex align-items-center justify-content-center sold text-uppercase position-absolute h-100 w-100">
                                    Sắp cháy hàng</div>
                                <div class="remain overflow-hidden position-absolute h-100" style="width:90%"></div>
                            </div>
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
                <div class="d-flex flex-column">
                    <div class="product-item position-relative box_shadow bg-white p-2 rounded-10">
                        <a class="d-block position-relative overflow-hidden" href="index.php?p=detailproduct">
                            <div class="zoom-img bg-img-main"
                                style="background-image: url(public/demo/item-product-3.jpg);"></div>
                        </a>
                        <div class="item-product-info mt-1 position-relative">
                            <a class="btn p-1 d-flex justify-content-center align-items-center rounded-circle play0"
                                href="index.php?p=detailproduct" title="Xem chi tiết sản phẩm">
                                <i class="bi bi-gear fs-4 text-white"></i>
                            </a>
                            <div class="sold-module d-flex w-100 position-relative overflow-hidden">
                                <img class="hot-sale" src="public/demo/hot-sale.png">
                                <div
                                    class="d-flex align-items-center justify-content-center sold text-uppercase position-absolute h-100 w-100">
                                    Sắp cháy hàng</div>
                                <div class="remain overflow-hidden position-absolute h-100" style="width:90%"></div>
                            </div>
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
                    <div style="margin-top: 18px;"
                        class="product-item position-relative box_shadow bg-white p-2 rounded-10">
                        <a class="d-block position-relative overflow-hidden" href="index.php?p=detailproduct">
                            <div class="zoom-img bg-img-main"
                                style="background-image: url(public/demo/item-product-4.jpg);"></div>
                        </a>
                        <div class="item-product-info mt-1 position-relative">
                            <a class="btn p-1 d-flex justify-content-center align-items-center rounded-circle play0"
                                href="index.php?p=detailproduct" title="Xem chi tiết sản phẩm">
                                <i class="bi bi-gear fs-4 text-white"></i>
                            </a>
                            <div class="sold-module d-flex w-100 position-relative overflow-hidden">
                                <img class="hot-sale" src="public/demo/hot-sale.png">
                                <div
                                    class="d-flex align-items-center justify-content-center sold text-uppercase position-absolute h-100 w-100">
                                    Sắp cháy hàng</div>
                                <div class="remain overflow-hidden position-absolute h-100" style="width:90%"></div>
                            </div>
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
        </div>
    </div>
</div>

<div class="row bg-primary px-6">
    <div class="bg-white rounded p-3">
        <ul class="nav nav-colection mb-3 gap-2">
            <li class="nav-item mb-2 pointer">
                <a class="d-block px-3 py-2 fw-bold rounded-10 border active" id="pills-home-tab" data-bs-toggle="pill"
                    data-bs-target="#tab-1" role="tab" aria-controls="pills-home">
                    <img class="me-1" width="32" height="32" src="public/demo/goiy.png" alt="">
                    Gợi ý cho bạn
                </a>
            </li>
            <li class="nav-item mb-2 pointer">
                <a class="d-block px-3 py-2 fw-bold rounded-10 border" id="pills-profile-tab" data-bs-toggle="pill"
                    data-bs-target="#tab-2" role="tab" aria-controls="pills-profile">
                    <img class="me-1" width="32" height="32" src="public/demo/icon-xa-hang.png" alt="">
                    Xả hàng giảm sốc
                </a>
            </li>
            <li class="nav-item mb-2 pointer">
                <a class="d-block px-3 py-2 fw-bold rounded-10 border" id="pills-contact-tab" data-bs-toggle="pill"
                    data-bs-target="#tab-3" role="tab" aria-controls="pills-contact">
                    <img class="me-1" width="32" height="32" src="public/demo/sale-cuoi-he.png" alt="">
                    Sale cuối hè
                </a>
            </li>
            <li class="nav-item mb-2 pointer">
                <a class="d-block px-3 py-2 fw-bold rounded-10 border" id="pills-contact-tab" data-bs-toggle="pill"
                    data-bs-target="#tab-4" role="tab" aria-controls="pills-contact">
                    <img class="me-1" width="32" height="32" src="public/demo/99k-deal.png" alt="">
                    Deal ngon bổ rẻ
                </a>
            </li>
        </ul>

        <div class="tab-content tab-collection" id="pills-tabContent">
            <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="pills-home-tab"
                tabindex="0">
                <div class="row g-xxl-3 g-4">
                    <div class="col-xxl-2 col-md-6 col-6">
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
                                <div class="sold-module d-flex w-100 position-relative overflow-hidden">
                                    <img class="hot-sale" src="public/demo/hot-sale.png">
                                    <div
                                        class="d-flex align-items-center justify-content-center sold text-uppercase position-absolute h-100 w-100">
                                        Sắp cháy hàng</div>
                                    <div class="remain overflow-hidden position-absolute h-100" style="width:90%"></div>
                                </div>
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
                    <div class="col-xxl-2 col-md-6 col-6">
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
                                <div class="sold-module d-flex w-100 position-relative overflow-hidden">
                                    <img class="hot-sale" src="public/demo/hot-sale.png">
                                    <div
                                        class="d-flex align-items-center justify-content-center sold text-uppercase position-absolute h-100 w-100">
                                        Sắp cháy hàng</div>
                                    <div class="remain overflow-hidden position-absolute h-100" style="width:90%"></div>
                                </div>
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
                    <div class="col-xxl-2 col-md-6 col-6">
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
                                <div class="sold-module d-flex w-100 position-relative overflow-hidden">
                                    <img class="hot-sale" src="public/demo/hot-sale.png">
                                    <div
                                        class="d-flex align-items-center justify-content-center sold text-uppercase position-absolute h-100 w-100">
                                        Sắp cháy hàng</div>
                                    <div class="remain overflow-hidden position-absolute h-100" style="width:90%"></div>
                                </div>
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
                    <div class="col-xxl-2 col-md-6 col-6">
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
                                <div class="sold-module d-flex w-100 position-relative overflow-hidden">
                                    <img class="hot-sale" src="public/demo/hot-sale.png">
                                    <div
                                        class="d-flex align-items-center justify-content-center sold text-uppercase position-absolute h-100 w-100">
                                        Sắp cháy hàng</div>
                                    <div class="remain overflow-hidden position-absolute h-100" style="width:90%"></div>
                                </div>
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
                    <div class="col-xxl-2 col-md-6 col-6">
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
                                <div class="sold-module d-flex w-100 position-relative overflow-hidden">
                                    <img class="hot-sale" src="public/demo/hot-sale.png">
                                    <div
                                        class="d-flex align-items-center justify-content-center sold text-uppercase position-absolute h-100 w-100">
                                        Sắp cháy hàng</div>
                                    <div class="remain overflow-hidden position-absolute h-100" style="width:90%"></div>
                                </div>
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
                    <div class="col-xxl-2 col-md-6 col-6">
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
                                <div class="sold-module d-flex w-100 position-relative overflow-hidden">
                                    <img class="hot-sale" src="public/demo/hot-sale.png">
                                    <div
                                        class="d-flex align-items-center justify-content-center sold text-uppercase position-absolute h-100 w-100">
                                        Sắp cháy hàng</div>
                                    <div class="remain overflow-hidden position-absolute h-100" style="width:90%"></div>
                                </div>
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
                    <div class="col-xxl-2 col-md-6 col-6">
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
                                <div class="sold-module d-flex w-100 position-relative overflow-hidden">
                                    <img class="hot-sale" src="public/demo/hot-sale.png">
                                    <div
                                        class="d-flex align-items-center justify-content-center sold text-uppercase position-absolute h-100 w-100">
                                        Sắp cháy hàng</div>
                                    <div class="remain overflow-hidden position-absolute h-100" style="width:90%"></div>
                                </div>
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
                    <div class="col-xxl-2 col-md-6 col-6">
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
                                <div class="sold-module d-flex w-100 position-relative overflow-hidden">
                                    <img class="hot-sale" src="public/demo/hot-sale.png">
                                    <div
                                        class="d-flex align-items-center justify-content-center sold text-uppercase position-absolute h-100 w-100">
                                        Sắp cháy hàng</div>
                                    <div class="remain overflow-hidden position-absolute h-100" style="width:90%"></div>
                                </div>
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
            </div>
            <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                <div class="row g-xxl-3 g-4">
                    <div class="col-xxl-2 col-md-6 col-6">
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
                                <div class="sold-module d-flex w-100 position-relative overflow-hidden">
                                    <img class="hot-sale" src="public/demo/hot-sale.png">
                                    <div
                                        class="d-flex align-items-center justify-content-center sold text-uppercase position-absolute h-100 w-100">
                                        Sắp cháy hàng</div>
                                    <div class="remain overflow-hidden position-absolute h-100" style="width:90%"></div>
                                </div>
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
                    <div class="col-xxl-2 col-md-6 col-6">
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
                                <div class="sold-module d-flex w-100 position-relative overflow-hidden">
                                    <img class="hot-sale" src="public/demo/hot-sale.png">
                                    <div
                                        class="d-flex align-items-center justify-content-center sold text-uppercase position-absolute h-100 w-100">
                                        Sắp cháy hàng</div>
                                    <div class="remain overflow-hidden position-absolute h-100" style="width:90%"></div>
                                </div>
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
                    <div class="col-xxl-2 col-md-6 col-6">
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
                                <div class="sold-module d-flex w-100 position-relative overflow-hidden">
                                    <img class="hot-sale" src="public/demo/hot-sale.png">
                                    <div
                                        class="d-flex align-items-center justify-content-center sold text-uppercase position-absolute h-100 w-100">
                                        Sắp cháy hàng</div>
                                    <div class="remain overflow-hidden position-absolute h-100" style="width:90%"></div>
                                </div>
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
                    <div class="col-xxl-2 col-md-6 col-6">
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
                                <div class="sold-module d-flex w-100 position-relative overflow-hidden">
                                    <img class="hot-sale" src="public/demo/hot-sale.png">
                                    <div
                                        class="d-flex align-items-center justify-content-center sold text-uppercase position-absolute h-100 w-100">
                                        Sắp cháy hàng</div>
                                    <div class="remain overflow-hidden position-absolute h-100" style="width:90%"></div>
                                </div>
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
            </div>
            <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                <div class="row g-xxl-3 g-4">
                    <div class="col-xxl-2 col-md-6 col-6">
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
                                <div class="sold-module d-flex w-100 position-relative overflow-hidden">
                                    <img class="hot-sale" src="public/demo/hot-sale.png">
                                    <div
                                        class="d-flex align-items-center justify-content-center sold text-uppercase position-absolute h-100 w-100">
                                        Sắp cháy hàng</div>
                                    <div class="remain overflow-hidden position-absolute h-100" style="width:90%"></div>
                                </div>
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
                    <div class="col-xxl-2 col-md-6 col-6">
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
                                <div class="sold-module d-flex w-100 position-relative overflow-hidden">
                                    <img class="hot-sale" src="public/demo/hot-sale.png">
                                    <div
                                        class="d-flex align-items-center justify-content-center sold text-uppercase position-absolute h-100 w-100">
                                        Sắp cháy hàng</div>
                                    <div class="remain overflow-hidden position-absolute h-100" style="width:90%"></div>
                                </div>
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
                    <div class="col-xxl-2 col-md-6 col-6">
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
                                <div class="sold-module d-flex w-100 position-relative overflow-hidden">
                                    <img class="hot-sale" src="public/demo/hot-sale.png">
                                    <div
                                        class="d-flex align-items-center justify-content-center sold text-uppercase position-absolute h-100 w-100">
                                        Sắp cháy hàng</div>
                                    <div class="remain overflow-hidden position-absolute h-100" style="width:90%"></div>
                                </div>
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
                    <div class="col-xxl-2 col-md-6 col-6">
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
                                <div class="sold-module d-flex w-100 position-relative overflow-hidden">
                                    <img class="hot-sale" src="public/demo/hot-sale.png">
                                    <div
                                        class="d-flex align-items-center justify-content-center sold text-uppercase position-absolute h-100 w-100">
                                        Sắp cháy hàng</div>
                                    <div class="remain overflow-hidden position-absolute h-100" style="width:90%"></div>
                                </div>
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
            </div>
            <div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">
                <div class="row g-xxl-3 g-4">
                    <div class="col-xxl-2 col-md-6 col-6">
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
                                <div class="sold-module d-flex w-100 position-relative overflow-hidden">
                                    <img class="hot-sale" src="public/demo/hot-sale.png">
                                    <div
                                        class="d-flex align-items-center justify-content-center sold text-uppercase position-absolute h-100 w-100">
                                        Sắp cháy hàng</div>
                                    <div class="remain overflow-hidden position-absolute h-100" style="width:90%"></div>
                                </div>
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
                    <div class="col-xxl-2 col-md-6 col-6">
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
                                <div class="sold-module d-flex w-100 position-relative overflow-hidden">
                                    <img class="hot-sale" src="public/demo/hot-sale.png">
                                    <div
                                        class="d-flex align-items-center justify-content-center sold text-uppercase position-absolute h-100 w-100">
                                        Sắp cháy hàng</div>
                                    <div class="remain overflow-hidden position-absolute h-100" style="width:90%"></div>
                                </div>
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
                    <div class="col-xxl-2 col-md-6 col-6">
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
                                <div class="sold-module d-flex w-100 position-relative overflow-hidden">
                                    <img class="hot-sale" src="public/demo/hot-sale.png">
                                    <div
                                        class="d-flex align-items-center justify-content-center sold text-uppercase position-absolute h-100 w-100">
                                        Sắp cháy hàng</div>
                                    <div class="remain overflow-hidden position-absolute h-100" style="width:90%"></div>
                                </div>
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
                    <div class="col-xxl-2 col-md-6 col-6">
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
                                <div class="sold-module d-flex w-100 position-relative overflow-hidden">
                                    <img class="hot-sale" src="public/demo/hot-sale.png">
                                    <div
                                        class="d-flex align-items-center justify-content-center sold text-uppercase position-absolute h-100 w-100">
                                        Sắp cháy hàng</div>
                                    <div class="remain overflow-hidden position-absolute h-100" style="width:90%"></div>
                                </div>
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
            </div>
        </div>

        <div class="text-center mt-4">
            <a class="view_mores box_shadow rounded-10 d-block py-2 px-3 mt-3 text-center fw-bold"
                href="index.php?p=listproducts" title="Xem tất cả">
                Xem tất cả
            </a>
        </div>
    </div>
</div>

<div class="row bg-primary px-6 pb-3">
    <div class="bg-top-trending rounded p-3 mt-4">
        <h4 style="color: #333;" class="fw-bold">TOP TRENDING</h4>
        <div class="d-flex flex-xxl-wrap flex-nowrap overflow-auto">
            <div class="col-xxl-3 col-md-5 col-7 mb-3 px-2">
                <a href="index.php?p=listproducts" title="Điện thoại Hot"
                    class="item_cate d-flex flex-column position-relative bg-white rounded-10 p-3">
                    <div class="d-flex align-items-center justify-content-space-between">
                        <div class="item modal-open position-relative p-2">
                            <div class="position-relative m-0 ratio1by1 has-edge aspect">
                                <img class="img-fluid" src="public/demo/top-trending-1.jpg">
                            </div>
                        </div>
                        <div class="item modal-open position-relative p-2">
                            <div class="position-relative m-0 ratio1by1 has-edge aspect">
                                <img class="img-fluid" src="public/demo/top-trending-1.1.jpg">
                            </div>
                            <div
                                class="more_pr position-absolute w-100 h-100 rounded-10 text-white d-flex align-items-center justify-content-center fw-bold">
                                +11
                            </div>
                        </div>
                    </div>
                    <div class="top-trending-info mt-3 mb-4 position-relative">
                        <p style="color: #007bff!important;" class="tit m-0 modal-open text-primary">
                            Điện thoại Hot
                        </p>
                        <p class="tit m-0 fw-bold">
                            Galaxy S Series
                        </p>
                        <i class="fa-solid fa-chevron-right rounded-circle text-center"></i>
                    </div>
                </a>
            </div>
            <div class="col-xxl-3 col-md-5 col-7 mb-3 px-2">
                <a href="index.php?p=listproducts" title="Điện thoại Hot"
                    class="item_cate d-flex flex-column position-relative bg-white rounded-10 p-3">
                    <div class="d-flex align-items-center justify-content-space-between">
                        <div class="item modal-open position-relative p-2">
                            <div class="position-relative m-0 ratio1by1 has-edge aspect">
                                <img class="img-fluid" src="public/demo/top-trending-1.jpg">
                            </div>
                        </div>
                        <div class="item modal-open position-relative p-2">
                            <div class="position-relative m-0 ratio1by1 has-edge aspect">
                                <img class="img-fluid" src="public/demo/top-trending-1.1.jpg">
                            </div>
                            <div
                                class="more_pr position-absolute w-100 h-100 rounded-10 text-white d-flex align-items-center justify-content-center fw-bold">
                                +11
                            </div>
                        </div>
                    </div>
                    <div class="top-trending-info mt-3 mb-4 position-relative">
                        <p style="color: #007bff!important;" class="tit m-0 modal-open text-primary">
                            Điện thoại Hot
                        </p>
                        <p class="tit m-0 fw-bold">
                            Galaxy S Series
                        </p>
                        <i class="fa-solid fa-chevron-right rounded-circle text-center"></i>
                    </div>
                </a>
            </div>
            <div class="col-xxl-3 col-md-5 col-7 mb-3 px-2">
                <a href="index.php?p=listproducts" title="Điện thoại Hot"
                    class="item_cate d-flex flex-column position-relative bg-white rounded-10 p-3">
                    <div class="d-flex align-items-center justify-content-space-between">
                        <div class="item modal-open position-relative p-2">
                            <div class="position-relative m-0 ratio1by1 has-edge aspect">
                                <img class="img-fluid" src="public/demo/top-trending-1.jpg">
                            </div>
                        </div>
                        <div class="item modal-open position-relative p-2">
                            <div class="position-relative m-0 ratio1by1 has-edge aspect">
                                <img class="img-fluid" src="public/demo/top-trending-1.1.jpg">
                            </div>
                            <div
                                class="more_pr position-absolute w-100 h-100 rounded-10 text-white d-flex align-items-center justify-content-center fw-bold">
                                +11
                            </div>
                        </div>
                    </div>
                    <div class="top-trending-info mt-3 mb-4 position-relative">
                        <p style="color: #007bff!important;" class="tit m-0 modal-open text-primary">
                            Điện thoại Hot
                        </p>
                        <p class="tit m-0 fw-bold">
                            Galaxy S Series
                        </p>
                        <i class="fa-solid fa-chevron-right rounded-circle text-center"></i>
                    </div>
                </a>
            </div>
            <div class="col-xxl-3 col-md-5 col-7 mb-3 px-2">
                <a href="index.php?p=listproducts" title="Điện thoại Hot"
                    class="item_cate d-flex flex-column position-relative bg-white rounded-10 p-3">
                    <div class="d-flex align-items-center justify-content-space-between">
                        <div class="item modal-open position-relative p-2">
                            <div class="position-relative m-0 ratio1by1 has-edge aspect">
                                <img class="img-fluid" src="public/demo/top-trending-1.jpg">
                            </div>
                        </div>
                        <div class="item modal-open position-relative p-2">
                            <div class="position-relative m-0 ratio1by1 has-edge aspect">
                                <img class="img-fluid" src="public/demo/top-trending-1.1.jpg">
                            </div>
                            <div
                                class="more_pr position-absolute w-100 h-100 rounded-10 text-white d-flex align-items-center justify-content-center fw-bold">
                                +11
                            </div>
                        </div>
                    </div>
                    <div class="top-trending-info mt-3 mb-4 position-relative">
                        <p style="color: #007bff!important;" class="tit m-0 modal-open text-primary">
                            Điện thoại Hot
                        </p>
                        <p class="tit m-0 fw-bold">
                            Galaxy S Series
                        </p>
                        <i class="fa-solid fa-chevron-right rounded-circle text-center"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row bg-primary px-6 pb-3">
    <div class="bg-white rounded p-3">
        <div class="d-flex justify-content-between">
            <h4 class="fw-bold"><a class="title-black" href="index.php?p=listproducts">ĐIỆN THOẠI NỔI BẬT</a></h4>
            <div class="list_link d-flex overflow-auto align-items-center">
                <a class="d-block border rounded-10 fw-bold" href="index.php?p=listproducts" title="Galaxy Ford">
                    Galaxy Ford
                </a>
                <a class="d-block border rounded-10 fw-bold" href="index.php?p=listproducts" title="SamSung">
                    SamSung
                </a>
                <a class="d-block border rounded-10 fw-bold" href="index.php?p=listproducts" title="Apple">
                    Apple
                </a>
                <a class="d-block border rounded-10 fw-bold" href="index.php?p=listproducts" title="Xiaomi">
                    Xiaomi
                </a>
                <a class="d-block border rounded-10 fw-bold" href="index.php?p=listproducts" title="OPPO">
                    OPPO
                </a>
                <a class="d-block border rounded-10 fw-bold" href="index.php?p=listproducts" title="Xem tất cả">
                    Xem tất cả
                </a>
            </div>
        </div>
        <div class="row align-items-center g-3 pt-4">
            <div class="col-xxl-9 col-md-12 col-12 order-xxl-2">
                <div class="side-slider owl-carousel owl-theme">
                    <div class="d-flex flex-column">
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
                        <div style="margin-top: 8px;"
                            class="product-item d-md-block d-none position-relative box_shadow bg-white p-2 rounded-10">
                            <a class="d-block position-relative overflow-hidden" href="index.php?p=detailproduct">
                                <div class="zoom-img bg-img-main"
                                    style="background-image: url(public/demo/item-product-2.jpg);"></div>
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
                    <div class="d-flex flex-column">
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
                        <div style="margin-top: 8px;"
                            class="product-item d-md-block d-none position-relative box_shadow bg-white p-2 rounded-10">
                            <a class="d-block position-relative overflow-hidden" href="index.php?p=detailproduct">
                                <div class="zoom-img bg-img-main"
                                    style="background-image: url(public/demo/item-product-2.jpg);"></div>
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
                    <div class="d-flex flex-column">
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
                        <div style="margin-top: 8px;"
                            class="product-item d-md-block d-none position-relative box_shadow bg-white p-2 rounded-10">
                            <a class="d-block position-relative overflow-hidden" href="index.php?p=detailproduct">
                                <div class="zoom-img bg-img-main"
                                    style="background-image: url(public/demo/item-product-2.jpg);"></div>
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
                    <div class="d-flex flex-column">
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
                        <div style="margin-top: 8px;"
                            class="product-item d-md-block d-none position-relative box_shadow bg-white p-2 rounded-10">
                            <a class="d-block position-relative overflow-hidden" href="index.php?p=detailproduct">
                                <div class="zoom-img bg-img-main"
                                    style="background-image: url(public/demo/item-product-2.jpg);"></div>
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
            </div>

            <div class="col-xxl-3 col-md-12 col-12 order-xxl-1">
                <div class="d-flex flex-row flex-xxl-column gap-3">
                    <a class="sitdown position-relative d-block" href="index.php?p=listproducts">
                        <img class="img-fluid rounded" src="public/demo/banner-side-1.jpg" alt="">
                    </a>
                    <a class="sitdown position-relative d-block" href="index.php?p=listproducts">
                        <img class="img-fluid rounded" src="public/demo/banner-side-2.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="row bg-primary px-6 pb-3">
    <div class="bg-white rounded p-3">
        <div class="d-flex justify-content-between">
            <h4 class="fw-bold"><a class="title-black" href="index.php?p=listproducts">LAPTOP HOT</a></h4>
            <div class="list_link d-flex overflow-auto align-items-center">
                <a class="d-block border rounded-10 fw-bold" href="index.php?p=listproducts" title="Galaxy Ford">
                    Galaxy Ford
                </a>
                <a class="d-block border rounded-10 fw-bold" href="index.php?p=listproducts" title="SamSung">
                    SamSung
                </a>
                <a class="d-block border rounded-10 fw-bold" href="index.php?p=listproducts" title="Apple">
                    Apple
                </a>
                <a class="d-block border rounded-10 fw-bold" href="index.php?p=listproducts" title="Xiaomi">
                    Xiaomi
                </a>
                <a class="d-block border rounded-10 fw-bold" href="index.php?p=listproducts" title="OPPO">
                    OPPO
                </a>
                <a class="d-block border rounded-10 fw-bold" href="index.php?p=listproducts" title="Xem tất cả">
                    Xem tất cả
                </a>
            </div>
        </div>
        <div class="row align-items-center g-3 pt-4">
            <div class="col-xxl-9 col-md-12 col-12">
                <div class="side-slider owl-carousel owl-theme">
                    <div class="d-flex flex-column">
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
                        <div style="margin-top: 8px;"
                            class="product-item d-md-block d-none position-relative box_shadow bg-white p-2 rounded-10">
                            <a class="d-block position-relative overflow-hidden" href="index.php?p=detailproduct">
                                <div class="zoom-img bg-img-main"
                                    style="background-image: url(public/demo/item-product-2.jpg);"></div>
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
                    <div class="d-flex flex-column">
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
                        <div style="margin-top: 8px;"
                            class="product-item d-md-block d-none position-relative box_shadow bg-white p-2 rounded-10">
                            <a class="d-block position-relative overflow-hidden" href="index.php?p=detailproduct">
                                <div class="zoom-img bg-img-main"
                                    style="background-image: url(public/demo/item-product-2.jpg);"></div>
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
                    <div class="d-flex flex-column">
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
                        <div style="margin-top: 8px;"
                            class="product-item d-md-block d-none position-relative box_shadow bg-white p-2 rounded-10">
                            <a class="d-block position-relative overflow-hidden" href="index.php?p=detailproduct">
                                <div class="zoom-img bg-img-main"
                                    style="background-image: url(public/demo/item-product-2.jpg);"></div>
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
                    <div class="d-flex flex-column">
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
                        <div style="margin-top: 8px;"
                            class="product-item d-md-block d-none position-relative box_shadow bg-white p-2 rounded-10">
                            <a class="d-block position-relative overflow-hidden" href="index.php?p=detailproduct">
                                <div class="zoom-img bg-img-main"
                                    style="background-image: url(public/demo/item-product-2.jpg);"></div>
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
            </div>

            <div class="col-xxl-3 col-md-12 col-12">
                <div class="d-flex flex-row flex-xxl-column gap-3">
                    <a class="sitdown position-relative d-block" href="index.php?p=listproducts">
                        <img class="img-fluid rounded" src="public/demo/banner-side-3.jpg" alt="">
                    </a>
                    <a class="sitdown position-relative d-block" href="index.php?p=listproducts">
                        <img class="img-fluid rounded" src="public/demo/banner-side-4.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="row bg-primary px-6 pb-3">
    <div class="bg-white rounded p-3">
        <div class="d-flex flex-wrap align-items-center justify-content-between">
            <h4 class="fw-bold mb-0"><a class="title-black" href="index.php?p=listproducts">ĐỒNG HỒ THÔNG MINH</a></h4>
            <div class="list_link d-flex d-flex align-items-center">
                <a class="d-block border rounded-10 fw-bold" href="index.php?p=listproducts" title="Xem tất cả">
                    Xem tất cả
                </a>
            </div>
        </div>
        <div class="row g-3 pt-4">
            <div class="col-xxl-2 col-6">
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
            <div class="col-xxl-2 col-6">
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
            <div class="col-xxl-2 col-6">
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
            <div class="col-xxl-2 col-6">
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
            <div class="col-xxl-2 col-6">
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
            <div class="col-xxl-2 col-6">
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

        <div class="d-flex pt-3">
            <div class="col-12 sitdown position-relative">
                <img class="img-fluid rounded" src="public/demo/banner-bottom.jpg" alt="">
            </div>
        </div>
    </div>
</div>

<div class="row bg-primary px-6 pb-3">
    <div class="bg-white rounded p-3">
        <h4 class="fw-bold mb-0">
            <a class="title-black" href="index.php?p=listproducts">
                CÙNG MEW REVIEW
            </a>
        </h4>
        <div class="review-slider owl-carousel owl-theme pt-3">
            <div class="item-news-block">
                <div class="item-news-bg overflow-hidden rounded-10 bg-img-main position-relative"
                    style="background-image: url(public/demo/detail-news.jpg);">
                    <div style="z-index: 3;"
                        class="play-btn d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100">
                        <img style="width: 64px; height: 64px;" src="public/demo/play-button.png" alt="">
                    </div>
                </div>
                <h5 class="fw-bold mt-2">
                    <a class="line_2" href="index.php?p=detailnews"
                        title="So sánh Xiaomi 12S Ultra và Samsung Galaxy S22 Ultra: Ai mới thật sự là kẻ hủy diệt Android?">So
                        sánh Xiaomi 12S Ultra và Samsung Galaxy S22 Ultra: Ai mới thật sự là kẻ hủy diệt
                        Android?
                    </a>
                </h5>
            </div>
            <div class="item-news-block">
                <div class="item-news-bg overflow-hidden rounded-10 bg-img-main position-relative"
                    style="background-image: url(public/demo/detail-news.jpg);">
                    <div style="z-index: 3;"
                        class="play-btn d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100">
                        <img style="width: 64px; height: 64px;" src="public/demo/play-button.png" alt="">
                    </div>
                </div>
                <h5 class="fw-bold mt-2">
                    <a class="line_2" href="index.php?p=detailnews"
                        title="Đánh giá chi tiết OPPO A57: Thiết kế đẹp, pin siêu khỏe lại có sạc nhanh nhưng hiệu năng chưa tốt">
                        Đánh giá chi tiết OPPO A57: Thiết kế đẹp, pin siêu khỏe lại có sạc nhanh nhưng hiệu năng chưa
                        tốt
                    </a>
                </h5>
            </div>
            <div class="item-news-block">
                <div class="item-news-bg overflow-hidden rounded-10 bg-img-main position-relative"
                    style="background-image: url(public/demo/detail-news.jpg);">
                    <div style="z-index: 3;"
                        class="play-btn d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100">
                        <img style="width: 64px; height: 64px;" src="public/demo/play-button.png" alt="">
                    </div>
                </div>
                <h5 class="fw-bold mt-2">
                    <a class="line_2" href="index.php?p=detailnews"
                        title="So sánh Xiaomi 12S Ultra và Samsung Galaxy S22 Ultra: Ai mới thật sự là kẻ hủy diệt Android?">So
                        sánh Xiaomi 12S Ultra và Samsung Galaxy S22 Ultra: Ai mới thật sự là kẻ hủy diệt
                        Android?
                    </a>
                </h5>
            </div>
            <div class="item-news-block">
                <div class="item-news-bg overflow-hidden rounded-10 bg-img-main position-relative"
                    style="background-image: url(public/demo/detail-news.jpg);">
                    <div style="z-index: 3;"
                        class="play-btn d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100">
                        <img style="width: 64px; height: 64px;" src="public/demo/play-button.png" alt="">
                    </div>
                </div>
                <h5 class="fw-bold mt-2">
                    <a class="line_2" href="index.php?p=detailnews"
                        title="So sánh Xiaomi 12S Ultra và Samsung Galaxy S22 Ultra: Ai mới thật sự là kẻ hủy diệt Android?">So
                        sánh Xiaomi 12S Ultra và Samsung Galaxy S22 Ultra: Ai mới thật sự là kẻ hủy diệt
                        Android?
                    </a>
                </h5>
            </div>
            <div class="item-news-block">
                <div class="item-news-bg overflow-hidden rounded-10 bg-img-main position-relative"
                    style="background-image: url(public/demo/detail-news.jpg);">
                    <div style="z-index: 3;"
                        class="play-btn d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100">
                        <img style="width: 64px; height: 64px;" src="public/demo/play-button.png" alt="">
                    </div>
                </div>
                <h5 class="fw-bold mt-2">
                    <a class="line_2" href="index.php?p=detailnews"
                        title="So sánh Xiaomi 12S Ultra và Samsung Galaxy S22 Ultra: Ai mới thật sự là kẻ hủy diệt Android?">So
                        sánh Xiaomi 12S Ultra và Samsung Galaxy S22 Ultra: Ai mới thật sự là kẻ hủy diệt
                        Android?
                    </a>
                </h5>
            </div>
        </div>
    </div>
</div>

<div class="row bg-primary px-6 pb-3">
    <div class="bg-white rounded p-3">
        <h4 class="fw-bold mb-0">
            <a class="title-black" href="index.php?p=listproducts">
                24H CÔNG NGHỆ
            </a>
        </h4>
        <div class="row pt-3">
            <div class="col-12 col-md-6">
                <a class="img-thumb d-block position-relative overflow-hidden" href="index.php?p=detailnews">
                    <div class="bg-img-main ratio3by2 rounded-10"
                        style="background-image: url(public/demo/item-24h-1.jpg);"></div>
                    <div class="position-absolute w-100 h-100 overlay-news"></div>
                    <div style="top: 10px;" class="entry-date mx-1 start-0 position-absolute text-center">
                        <p class="fw-bold fs-5 mb-0 text-center">
                            09
                        </p>
                        <p class="mb-0 small">
                            08/2022
                        </p>
                    </div>
                </a>
                <div>
                    <h5 class="fw-bold mt-2">
                        <a class="line_1" href="index.php?p=detailnews"
                            title="Hé lộ thông số kỹ thuật Galaxy Buds 2 Pro, rất đáng để chờ đợi!!!">
                            Hé lộ thông số kỹ thuật Galaxy Buds 2 Pro, rất đáng để chờ đợi!!!
                        </a>
                    </h5>
                    <div class="line_2 text-justify">
                        Đã một thời gian kể từ khi&nbsp;Samsung&nbsp;tung ra một cặp&nbsp;tai nghe không
                        dây&nbsp;cho người dùng. Công ty sẽ khắc phục điều đó vào ngày 10 tháng 8 tại sự kiện
                        Unpacked, bằng việc giới thiệu&nbsp;Galaxy Buds 2 Pro&nbsp;mới cùng loạt Galaxy Z thế hệ
                        mới cũng như Galaxy Watch5 series.
                        Đã có một vài rò rỉ cung cấp thông tin về Galaxy Buds 2 Pro, bao gồm tính năng khử tiếng
                        ồn được cải tiến và chất lượng âm thanh tốt hơn.
                        Theo đó, Galaxy Buds 2 Pro được cho là có tính năng Khử tiếng ồn chủ động thông minh
                        có...
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 pt-3 pt-md-0">
                <div class="d-flex flex-wrap mb-3">
                    <div class="col-4 col-xxl-3 pe-2">
                        <a class="img-thumb-2 d-block rounded-10 position-relative overflow-hidden"
                            href="index.php?p=detailnews">
                            <div class="bg-img-main ratio3by2"
                                style="background-image: url(public/demo/24h-item-2.jpg);"></div>
                        </a>
                    </div>
                    <div class="col-8 col-xxl-9">
                        <div class="news-info">
                            <h5 class="fw-bold mb-0">
                                <a class="line_1" href="index.php?p=detailnews"
                                    title="Hé lộ thông số kỹ thuật Galaxy Buds 2 Pro, rất đáng để chờ đợi!!!">
                                    Hé lộ thông số kỹ thuật Galaxy Buds 2 Pro, rất đáng để chờ đợi!!!
                                </a>
                            </h5>
                            <div class="small">09/08/2022</div>
                            <div class="line_2 text-justify">
                                Đã một thời gian kể từ khi&nbsp;Samsung&nbsp;tung ra một cặp&nbsp;tai nghe không
                                dây&nbsp;cho người dùng. Công ty sẽ khắc phục điều đó vào ngày 10 tháng 8 tại sự kiện
                                Unpacked, bằng việc giới thiệu&nbsp;Galaxy Buds 2 Pro&nbsp;mới cùng loạt Galaxy Z thế hệ
                                mới cũng như Galaxy Watch5 series.
                                Đã có một vài rò rỉ cung cấp thông tin về Galaxy Buds 2 Pro, bao gồm tính năng khử tiếng
                                ồn được cải tiến và chất lượng âm thanh tốt hơn.
                                Theo đó, Galaxy Buds 2 Pro được cho là có tính năng Khử tiếng ồn chủ động thông minh
                                có...
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-wrap mb-3">
                    <div class="col-4 col-xxl-3 pe-2">
                        <a class="img-thumb-2 d-block rounded-10 position-relative overflow-hidden"
                            href="index.php?p=detailnews">
                            <div class="bg-img-main ratio3by2"
                                style="background-image: url(public/demo/24h-item-2.jpg);"></div>
                        </a>
                    </div>
                    <div class="col-8 col-xxl-9">
                        <div class="news-info">
                            <h5 class="fw-bold mb-0">
                                <a class="line_1" href="index.php?p=detailnews"
                                    title="Hé lộ thông số kỹ thuật Galaxy Buds 2 Pro, rất đáng để chờ đợi!!!">
                                    Hé lộ thông số kỹ thuật Galaxy Buds 2 Pro, rất đáng để chờ đợi!!!
                                </a>
                            </h5>
                            <div class="small">09/08/2022</div>
                            <div class="line_2 text-justify">
                                Đã một thời gian kể từ khi&nbsp;Samsung&nbsp;tung ra một cặp&nbsp;tai nghe không
                                dây&nbsp;cho người dùng. Công ty sẽ khắc phục điều đó vào ngày 10 tháng 8 tại sự kiện
                                Unpacked, bằng việc giới thiệu&nbsp;Galaxy Buds 2 Pro&nbsp;mới cùng loạt Galaxy Z thế hệ
                                mới cũng như Galaxy Watch5 series.
                                Đã có một vài rò rỉ cung cấp thông tin về Galaxy Buds 2 Pro, bao gồm tính năng khử tiếng
                                ồn được cải tiến và chất lượng âm thanh tốt hơn.
                                Theo đó, Galaxy Buds 2 Pro được cho là có tính năng Khử tiếng ồn chủ động thông minh
                                có...
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-wrap mb-3">
                    <div class="col-4 col-xxl-3 pe-2">
                        <a class="img-thumb-2 d-block rounded-10 position-relative overflow-hidden"
                            href="index.php?p=detailnews">
                            <div class="bg-img-main ratio3by2"
                                style="background-image: url(public/demo/24h-item-2.jpg);"></div>
                        </a>
                    </div>
                    <div class="col-8 col-xxl-9">
                        <div class="news-info">
                            <h5 class="fw-bold mb-0">
                                <a class="line_1" href="index.php?p=detailnews"
                                    title="Hé lộ thông số kỹ thuật Galaxy Buds 2 Pro, rất đáng để chờ đợi!!!">
                                    Hé lộ thông số kỹ thuật Galaxy Buds 2 Pro, rất đáng để chờ đợi!!!
                                </a>
                            </h5>
                            <div class="small">09/08/2022</div>
                            <div class="line_2 text-justify">
                                Đã một thời gian kể từ khi&nbsp;Samsung&nbsp;tung ra một cặp&nbsp;tai nghe không
                                dây&nbsp;cho người dùng. Công ty sẽ khắc phục điều đó vào ngày 10 tháng 8 tại sự kiện
                                Unpacked, bằng việc giới thiệu&nbsp;Galaxy Buds 2 Pro&nbsp;mới cùng loạt Galaxy Z thế hệ
                                mới cũng như Galaxy Watch5 series.
                                Đã có một vài rò rỉ cung cấp thông tin về Galaxy Buds 2 Pro, bao gồm tính năng khử tiếng
                                ồn được cải tiến và chất lượng âm thanh tốt hơn.
                                Theo đó, Galaxy Buds 2 Pro được cho là có tính năng Khử tiếng ồn chủ động thông minh
                                có...
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-wrap mb-3">
                    <div class="col-4 col-xxl-3 pe-2">
                        <a class="img-thumb-2 d-block rounded-10 position-relative overflow-hidden"
                            href="index.php?p=detailnews">
                            <div class="bg-img-main ratio3by2"
                                style="background-image: url(public/demo/24h-item-2.jpg);"></div>
                        </a>
                    </div>
                    <div class="col-8 col-xxl-9">
                        <div class="news-info">
                            <h5 class="fw-bold mb-0">
                                <a class="line_1" href="index.php?p=detailnews"
                                    title="Hé lộ thông số kỹ thuật Galaxy Buds 2 Pro, rất đáng để chờ đợi!!!">
                                    Hé lộ thông số kỹ thuật Galaxy Buds 2 Pro, rất đáng để chờ đợi!!!
                                </a>
                            </h5>
                            <div class="small">09/08/2022</div>
                            <div class="line_2 text-justify">
                                Đã một thời gian kể từ khi&nbsp;Samsung&nbsp;tung ra một cặp&nbsp;tai nghe không
                                dây&nbsp;cho người dùng. Công ty sẽ khắc phục điều đó vào ngày 10 tháng 8 tại sự kiện
                                Unpacked, bằng việc giới thiệu&nbsp;Galaxy Buds 2 Pro&nbsp;mới cùng loạt Galaxy Z thế hệ
                                mới cũng như Galaxy Watch5 series.
                                Đã có một vài rò rỉ cung cấp thông tin về Galaxy Buds 2 Pro, bao gồm tính năng khử tiếng
                                ồn được cải tiến và chất lượng âm thanh tốt hơn.
                                Theo đó, Galaxy Buds 2 Pro được cho là có tính năng Khử tiếng ồn chủ động thông minh
                                có...
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-block mt-auto text-center">
                    <a href="index.php?p=news" title="Xem thêm"
                        class="view_mores box_shadow rounded-10 d-block py-2 px-3 mt-3 text-center fw-bold">Xem thêm</a>
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
                    items: 1,
                    margin: 18,
                },
                768: {
                    items: 2,
                },
                1400: {
                    items: 2
                }
            }
        });

        $('.slider-auto-banner').owlCarousel({
            center: false,
            loop: true,
            margin: 0,
            dots: false,
            nav: false,
            autoplay: true,
            autoplayTimeout: 4000,
            animateIn: 'fadeIn',
            animateOut: 'fadeOut',
            smartSpeed: 450,
            autoplayHoverPause: false,
            responsive: {
                0: {
                    items: 1,
                    margin: 18,
                },
                768: {
                    items: 1,
                },
                1400: {
                    items: 1
                }
            }
        });

        $('.flash-sale').owlCarousel({
            center: false,
            loop: false,
            margin: 0,
            dots: false,
            nav: true,
            margin: 18,
            autoplay: false,
            smartSpeed: 900,
            autoplayHoverPause: false,
            responsive: {
                0: {
                    items: 2,
                },
                768: {
                    items: 3,
                },
                1400: {
                    items: 5
                }
            }
        });

        $('.side-slider').owlCarousel({
            center: false,
            loop: false,
            margin: 0,
            dots: false,
            nav: false,
            autoplay: false,
            margin: 2,
            smartSpeed: 900,
            autoplayHoverPause: false,
            responsive: {
                0: {
                    items: 2,
                    nav: true,
                },
                768: {
                    items: 2,
                    nav: true,
                },
                1400: {
                    items: 4,
                    nav: false,
                }
            }
        });

        $('.review-slider').owlCarousel({
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
                    items: 1.3,
                    nav: true,
                },
                768: {
                    items: 2.3,
                    nav: true,
                },
                1400: {
                    items: 4,
                    nav: true,
                }
            }
        });

        $(".owl-next").html(`<i class="bi bi-chevron-right fs-3 ms-2"></i>`);
        $(".owl-prev").html(`<i class="bi bi-chevron-left fs-3 me-2"></i>`);

    });
</script>