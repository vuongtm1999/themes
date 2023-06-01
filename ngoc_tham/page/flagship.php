<style>
    .video-container {
        width: 100vw;
        height: 30vh;
        overflow: hidden;
        position: relative;
    }

    iframe {
        width: 100%;
        height: 100%;
        scale: 1;
        pointer-events: none;
    }

    .flagship-title {
        font-size: 80px;
    }

    .owl-theme .owl-nav [class*=owl-]:hover {
        color: unset;
        background-color: unset;
    }

    .owl-nav>.owl-next {
        top: 40%;
        position: absolute;
        right: -40px;
    }

    .owl-nav>.owl-prev {
        top: 40%;
        position: absolute;
        left: -40px;
    }

    .background-img-branch {
        background-image: url(public/demo/back-ground-img-2.jpg);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        padding-top: 35%;
    }

    .lien-he {
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 30%;
        padding: 25px 16px;
        background: #941e22;
        color: #f8c883;
        transition: background .2s linear;
        border: 2px solid #a2041b;
    }

    .lien-he:hover {
        color: #941e22;
        background-color: white;
    }

    /* md */
    @media (min-width: 768px) {
        .video-container {
            width: 100vw;
            height: 100vh;
            overflow: hidden;
            position: relative;
        }

        iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            scale: 1.5 1;
        }
    }

    /* PC */
    @media (min-width: 1400px) {}
</style>
<div class="row">
    <div class="px-0 video-container">
        <iframe
            src="https://www.youtube.com/embed/ttva-QNlkvk?controls=0&autoplay=1&mute=1&playsinline=1&loop=1&playlist=ttva-QNlkvk"></iframe>
    </div>
    <div class="d-flex justify-content-center mt-5">
        <div class="col-xxl-5 col-md-12 col-12">
            <h4 class="text-center text-red flagship-title fw-light">NTJ FLAGSHIP</h4>
            <h3 class="text-center text-red fw-bold mt-3">KIỆT TÁC KIÊU HÃNH – VƯƠN TẦM VỊ THẾ</h1>
        </div>
    </div>

    <div class="d-flex justify-content-center mb-5">
        <div class="col-xxl-4 col-md-5 col-12">
            <p class="text-center fs-6 mt-4">
                Toạ lạc tại vị trí trung tâm Thành Phố Mỹ Tho, NTJ khẳng định dấu ấn tiên phong với kiệt tác không
                gian
                mua sắm trang sức đẳng cấp bậc nhất.</p>
        </div>
    </div>
</div>

<div class="row px-6">
    <div class="flagship owl-carousel owl-theme">
        <a href="#flagship-1">
            <img src="public/demo/flagship_slider.png" alt="" class="img-fluid">
            <span class="text-center">
                <h3 class="text-red">
                    BẢO HÀNH<br>
                    UY TÍN &amp; TẬN TÂM </h3>
                </p>
            </span>
        </a>
        <a href="#flagship-2">
            <img src="public/demo/flagship_slider.png" alt="" class="img-fluid">
            <span class="text-center">
                <h3 class="text-red">
                    DẤU ẤN<br>
                    TRANG SỨC ĐỘC BẢN </h3>
                <p>
                </p>
            </span>
        </a>
        <a href="#flagship-3">
            <img src="public/demo/flagship_slider.png" alt="" class="img-fluid">
            <span class="text-center">
                <h3 class="text-red">
                    DẤU ẤN<br>
                    TRANG SỨC ĐỘC BẢN </h3>
                <p>
                </p>
            </span>
        </a>
        <a href="#flagship-4">
            <img src="public/demo/flagship_slider.png" alt="" class="img-fluid">
            <span class="text-center">
                <h3 class="text-red">
                    DẤU ẤN<br>
                    TRANG SỨC ĐỘC BẢN </h3>
                <p>
                </p>
            </span>
        </a>
        <a href="#flagship-5">
            <img src="public/demo/flagship_slider.png" alt="" class="img-fluid">
            <span class="text-center">
                <h3 class="text-red">
                    DẤU ẤN<br>
                    TRANG SỨC ĐỘC BẢN </h3>
                <p>
                </p>
            </span>
        </a>
    </div>
</div>

<div class="row px-6 mt-md-5 py-md-4">
    <div class="col-md-6 col-12 px-4">
        <img class="img-fluid" src="public/demo/qua_trinh_2009.jpg" alt="">
    </div>
    <div class="col-md-6 col-12 px-4">
        <img class="img-fluid pt-md-5 mt-md-5" src="public/demo/qua_trinh_2010.jpg" alt="">
    </div>
    <div class="d-flex justify-content-center mt-5 pt-2">
        <div class="col-md-4 col-12">
            <h4 class="text-center text-red fw-bold">
                BIỂU TƯỢNG KIẾN TRÚC HÀNG ĐẦU
            </h4>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div class="col-md-5 col-12">
            <p class="text-center fs-6">Trong không gian 600m², hơi thở thương hiệu NTJ kết tinh rõ nét qua sự kết hợp
                hài hòa giữa chất liệu cao cấp bậc nhất trên nền sắc đỏ yên chi và màu vàng đồng rực rỡ.</p>
        </div>
    </div>
</div>

<!-- DẤU ẤN TRANG SỨC ĐỘC BẢN -->
<div class="row align-items-center bg-primary">
    <div class="col-md-7 ps-0">
        <img class="img-fluid" src="public/demo/flagship-1.png" alt="">
    </div>
    <div class="col-md-3 offset-md-1 pt-md-5 mt-md-5 pt-xxl-0 mt-xxl-0">
        <h4 class="text-red fw-bold">
            DẤU ẤN TRANG SỨC ĐỘC BẢN
        </h4>
        <p>Cửa hàng NTJ Flagship mở ra không gian trưng bày với hơn 3000 thiết kế trang sức xu hướng và những bộ sưu tập
            độc tôn làm nên tên tuổi của thương hiệu.</p>
    </div>
</div>

<!-- TẬN HƯỞNG ĐẶC QUYỀN ĐẲNG CẤP -->
<div class="row mt-xxl-5 pt-5">
    <div class="px-0 px-md-5 px-xxl-0">
        <img class="img-fluid" src="public/demo/flagship_3.jpg" alt="">
    </div>
    <div class="d-flex justify-content-md-start justify-content-xxl-center mt-5">
        <div class="col-xxl-3 col-md-4 col-12">
            <h4 class="text-red fw-bold text-center">
                TẬN HƯỞNG
                ĐẶC QUYỀN ĐẲNG CẤP
            </h4>
        </div>
    </div>
    <div class="d-flex justify-content--md-start justify-content-xxl-center">
        <div class="col-md-4 col-12">
            <p class="text-center fs-6">
                Hướng đến trải nghiệm mua sắm khác biệt, mỗi Khách hàng sẽ nhận được lời khuyên và phương án tối ưu nhất
                về chất liệu, hình dáng và kích thước nhằm sở hữu thiết kế trang sức phù hợp.
        </div>
    </div>
</div>

<div class="row px-6 align-items-center mt-3 py-5 bg-primary">
    <div class="col-md-6">
        <img class="img-fluid h-100" src="public/demo/flagship_4.jpg" alt="">
    </div>
    <div class="col-md-6">
        <img class="img-fluid h-100" src="public/demo/flagship_5.jpg" alt="">

    </div>
    <div class="col-md-6 mt-4">
        <h4 class="text-red fw-bold">BẢO HÀNH UY TÍN & TẬN TÂM</h4>
    </div>
    <div class="col-md-6 mt-4">
        <p>NTJ kiến tạo nên không gian bảo hành riêng biệt, nơi mà Khách hàng hoàn toàn an tâm khi được theo dõi toàn bộ
            quá trình chăm sóc những thiết kế trang sức yêu thích.</p>
    </div>
</div>

<!-- TRẢI NGHIỆM DỊCH VỤ TỐT NHẤT -->
<div class="row align-items-md-start px-6 py-xxl-5 my-xxl-4 py-md-5">
    <div class="col-md-8 col-xxl-7">
        <img class="img-fluid" src="public/demo/the-gioi-4.jpg" alt="">
    </div>
    <div class="col-md-3 offset-md-1 mt-md-5 pt-md-5">
        <h4 class="text-red fw-bold">
            TRẢI NGHIỆM
            DỊCH VỤ TỐT NHẤT
        </h4>
        <p>Cửa hàng NTJ Flagship mở ra không gian trưng bày với hơn 3000 thiết kế trang sức xu hướng và những bộ sưu tập
            độc tôn làm nên tên tuổi của thương hiệu.</p>
    </div>
</div>

<div class="row">
    <div class="background-img-branch position-relative">
        <a class="lien-he position-absolute text-uppercase text-center fs-6 fw-bolder" href="index.php?p=lienhe">
            KHÁM PHÁ CỬA HÀNG
        </a>
    </div>
</div>


<script>
    $(document).ready(function () {
        $('.flagship').owlCarousel({
            center: false,
            loop: true,
            margin: 0,
            nav: true,
            dots: false,
            margin: 18,
            autoplay: true,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 1,
                    stagePadding: 170,
                },
                1400: {
                    items: 3
                }
            }
        });

        $(".owl-next").html(`<i class="fa-solid fa-caret-right fs-5"></i>`);
        $(".owl-prev").html(`<i class="fa-solid fa-caret-left fs-5"></i>`);
    });
</script>