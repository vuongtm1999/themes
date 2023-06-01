<style>
    .bread-crumb {
        border-top: unset;
    }

    .my-thumnail-img {
        width: 75px;
        height: 75px;
    }

    .detail-product.owl-theme .owl-nav.disabled+.owl-dots {
        margin-top: 20px;
    }


    .ma-san-pham:before {
        content: "";
        height: 17px;
        width: 1px;
        position: absolute;
        right: 0;
        top: 0;
        background: #5d6567;
    }

    .color label:before {
        content: "";
        height: 100%;
        width: 100%;
        border: none;
        position: absolute;
        left: 0;
        top: 0;
    }

    .color input:checked+label:after {
        content: "";
        background-image: url(public/demo/i-check.svg);
        background-repeat: no-repeat;
        width: 20px;
        height: 12px;
        display: block;
        background-size: contain;
        position: absolute;
        top: 5px;
        right: -2px;
    }

    .color input:checked+label {
        background: #daa785;
        border-color: #daa785;
        color: #fff;
    }

    .color label {
        border-radius: 0;
        width: 25px;
        min-width: unset !important;
        height: 25px !important;
        line-height: 25px !important;
        border: 1px solid #cccccc;
        border-radius: 0px !important;
    }

    .icon-share:hover {
        color: black;
    }

    .custom-btn-number {
        width: 90px;
        display: inline-block;
        position: relative;
        padding: 0;
        float: left;
        margin: 0 15px 0 0;
        border: none;
        background: transparent;
        box-shadow: none;
        height: 70px;
        min-height: unset;
    }

    .input_number_product input {
        display: block;
        color: #333;
        text-align: center;
        box-shadow: none;
        background: transparent;
        margin: 0;
        padding: 12px 35px 12px 0;
        height: 70px;
        width: 100%;
        line-height: 45px;
        box-shadow: none;
        border-radius: 0px;
        font-size: 16px;
        border: solid 1px #dfdbd6;
    }

    .input_number_product .form-control:focus {
        background: transparent;
        border-color: #dfdbd6;
    }

    .btn_num {
        text-align: center;
        border: 1px solid #dfdbd6;
        cursor: pointer;
        background: transparent;
        width: 35px;
        height: 35px;
        line-height: 35px;
        font-size: 20px;
        padding: 0;
    }

    .btn_num.num_1 {
        display: inline-block;
        position: absolute;
        right: 0;
        bottom: 0;
        top: auto;
        border-top: 0;
    }

    .btn_num.num_2 {
        display: inline-block;
        position: absolute;
        right: 0;
        top: 0;
    }

    .nav.nav-colection {
        border-bottom: 1px solid #dbd7d1;
    }

    .nav-item-tab {
        width: 100%;
        border: 1px solid #969798;
        margin-bottom: 9px;
        border-radius: 16px;
        overflow: hidden;
    }

    .nav-item-tab>a {
        font-size: 20px;
        color: #969798;
        padding: 5px 15px 5px;
        height: 100%;
    }

    .nav-item-tab:hover>a {
        background: var(--mainColor);
        color: white;
    }

    .nav-item-tab>a.active {
        background: var(--mainColor);
        color: white;
    }

    .relative-products.owl-carousel>.owl-nav>.owl-prev,
    .relative-products.owl-carousel>.owl-nav>.owl-next {
        height: 30px;
        width: 30px;
        border-radius: 50%;
        transition: .3s;
        outline: none;
        opacity: .9;
        background: #daa785;
        border: solid 1px #daa785;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .relative-products.owl-carousel>.owl-nav>.owl-prev {
        box-shadow: 0 0 4px 0 rgb(0 0 0 / 20%);
        position: absolute;
        top: 40%;
        left: 20px;
        margin: 0;
    }

    .relative-products.owl-carousel>.owl-nav>.owl-next {
        box-shadow: 0 0 4px 0 rgb(0 0 0 / 20%);
        position: absolute;
        top: 40%;
        right: 20px;
        margin: 0;
    }

    .relative-products .owl-nav [class*=owl-]:hover {
        color: white;
        background-color: var(--mainColor);
    }

    .relative-products.owl-carousel>.owl-nav>.owl-prev.disabled,
    .relative-products.owl-carousel>.owl-nav>.owl-next.disabled {
        display: flex;
        opacity: .35;
    }

    .relative-products.owl-theme .owl-dots {
        margin-top: 16px;
    }

    @media (min-width: 768px) {
        .bread-crumb {
            border-top: 1px solid #e6b08c;
        }

        .my-thumnail-img {
            height: 150px;
            width: 170px;
        }

        .nav.nav-colection {
            border-bottom: 1px solid #dbd7d1;
        }

        .nav-item-tab>a {
            margin: 0 0 0 20px;
            padding: 10px 50px;
            font-size: 20px;
            color: #969798;
            border-top-left-radius: 16px;
            border-top-right-radius: 16px;
        }

        .nav-item-tab:hover>a {
            background: var(--mainColor);
            color: white;
        }

        .nav-item-tab>a.active {
            background: var(--mainColor);
            color: white;
            border-top-left-radius: 16px;
            border-top-right-radius: 16px;
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
            <a class="text-black-50 small" href="index.php?p=news">
                <span>Sản phẩm khuyến mãi</span></a>
            <span class="text-black-50 mx-1">/</span>
        </span>
        <span class="text-main">
            <strong>
                Sơn móng tay gel lạnh bền đẹp Lakme
            </strong>
        </span>
    </div>
</div>

<div class="row px-6 g-4">
    <div class="col-xxl-6 col-12">
        <div class="detail-product owl-carousel owl-theme">
            <div class="bg-img-main rounded-16" style="background-image: url(public/demo/detail-product-1.png);"></div>
            <div class="bg-img-main rounded-16" style="background-image: url(public/demo/detail-product-2.png);"></div>
            <div class="bg-img-main rounded-16" style="background-image: url(public/demo/detail-product-3.jpg);"></div>
        </div>
    </div>
    <div class="col-xxl-6 col-12">
        <h3 class="mb-3" style="color: #5d6567;">Sơn móng tay gel lạnh bền đẹp Lakme</h3>
        <div class="mb-3">
            <span class="ma-san-pham position-relative pe-2 me-2">
                <span class="fw-bold">Mã sản phẩm:</span>
                <span>H5G6J3</span>
            </span>
            <span class="fw-bold">Tình trạng:</span>
            <span>Còn hàng</span>
        </div>
        <div class="text-main fs-2 fw-bold mb-2">
            180.000₫
        </div>
        <div class="mb-3">
            <del>
                230.000₫
            </del>
        </div>
        <div class="d-flex align-items-center">
            <span class="me-5">Màu sắc:</span>
            <div class="d-inline-block color me-2">
                <div class="tooltip">Đỏ</div>
                <input hidden id="swatch-1" type="radio" name="option-0" value="Đỏ" checked="">
                <label class="position-relative" data-bs-toggle="tooltip" data-bs-placement="top"
                    data-bs-title="Tooltip on top" for="sswatch-1" style="background-color: #f20808;">
                </label>
            </div>
            <div class="d-inline-block color me-2">
                <div class="tooltip">Đỏ</div>
                <input hidden id="swatch-2" type="radio" name="option-0" value="Đỏ">
                <label class="position-relative" data-bs-toggle="tooltip" data-bs-placement="top"
                    data-bs-title="Tooltip on top" for="swatch-2" style="background-color: #db23b6;">
                </label>
            </div>
        </div>

        <p class="py-4 border-bottom">
            Đây là một trong những thương hiệu lâu đời nhất ở Ấn Độ và dẫn đầu trong ngành công nghiệp mỹ phẩm tại thị
            trường này, đặc biệt với các dòng sản phẩm đòi hỏi nhiều màu sắc. Cái tên Lakme ban đầu được lấy cảm hứng từ
            một vở opera Lakmé của Pháp về nữ thần vô cùng xinh đẹp Lakshmi. Trong số các sản phẩm của Lakme, có thể nói
            sơn móng tay là biểu tượng tiêu biểu nhất.
        </p>
        <div class="mb-4">
            <span class="me-2">Chia sẻ : </span>
            <span class="me-2 icon-share text-main"><i class="fa-brands fa-facebook-f fs-5"></i></span>
            <span class="me-2 icon-share text-main"><i class="bi bi-twitter fs-5"></i></span>
            <span class="me-2 icon-share text-main"><i class="fa-brands fa-pinterest-p fs-5"></i></span>
            <span class="me-2 icon-share text-main"><i class="bi bi-google fs-5"></i></span>
        </div>

        <div class="d-flex align-items-center">
            <span class="me-3">Số lượng:</span>
            <div class="custom input_number_product custom-btn-number form-control">
                <button class="btn_num num_1 button button_qty" type="button">
                    <i class="bi bi-caret-down-fill fs-6"></i>
                </button>
                <input type="text" id="qtym" name="quantity" value="1" maxlength="3" class="form-control prd_quantity "
                    onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;"
                    onchange="if(this.value == 0)this.value=1;">
                <button class="btn_num num_2 button button_qty" type="button">
                    <i class="bi bi-caret-up-fill fs-6"></i>
                </button>
            </div>

        </div>

        <div class="d-md-block d-inline-block mt-md-0 mt-3">
            <a class="btn my-btn-primary py-3 px-5 rounded-16 fs-4 fw-bold text-uppercase" href="">
                <i class="bi bi-cart3"></i> Đặt hàng ngay
            </a>
        </div>

        <div class="mt-5">
            <div class="small">Thông tin</div>
            <div class="small">
                Thể loại:
                Sơn móng
            </div>
        </div>
    </div>
</div>


<div class="row px-6 pt-5">
    <ul class="nav nav-colection mb-3 gap-2">
        <li class="nav-item-tab active pointer">
            <a class="d-block rounded-10 active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#tab-1"
                role="tab" aria-controls="pills-home" aria-selected="false">
                Mô tả
            </a>
        </li>
        <li class="nav-item-tab pointer">
            <a class="d-block rounded-10" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#tab-2"
                role="tab" aria-controls="pills-profile" aria-selected="true">
                Thông tin thêm
            </a>
        </li>
    </ul>

    <div class="tab-content tab-collection" id="pills-tabContent">
        <div class="tab-pane fade active show" id="tab-1" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
            <div>
                <p>Không chỉ trang điểm mặt, móng tay/ chân cũng là những bộ phận cần được makeup để mang lại vẻ đẹp
                    lộng lẫy một cách trọn vẹn. Lakme Absolute Gel Stylist Nail có chất sơn rất mịn, trơn bóng và tỏa
                    sáng thực sự, làm cho đôi bàn tay của nàng nổi bật hơn rất nhiều.</p>
                <p>Đầu cọ không quá cứng, giúp bạn dễ dàng sử dụng và màu sơn được đánh đều lên móng. Chất sơn nhanh khô
                    và có thể lưu giữ được trong một tuần. Đặc biệt, với 18 gam màu đa dạng, nàng hoàn toàn có thể linh
                    hoạt sử dụng, phối hợp theo sở thích của mình.</p>
                <p><b><i>Ưu điểm</i></b></p>
                <ul>
                    <li>Chất sơn bóng mịn</li>
                    <li>Thời gian khô nhanh</li>
                    <li>Thiết kế bao bì bên ngoài mang lại được vẻ đẹp sang trọng</li>
                </ul>
                <p><b><i>Nhược điểm</i></b></p>
                <ul>
                    <li>Không có</li>
                </ul>
            </div>
        </div>
        <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
            Nội dung tùy chỉnh viết ở đây
        </div>
    </div>
</div>


<div class="row px-6">
    <h2 class="my-3">
        <a class="text-main" href="index.php?p=listproducts" title="Có thể bạn sẽ thích">
            Có thể bạn sẽ thích
        </a>
    </h2>

    <div class="relative-products owl-carousel owl-theme pt-3">
        <div class="item-product">
            <div class="overflow-hidden bg-white rounded-16-16">
                <a href="index.php?p=detailproduct">
                    <div class="bg-img-main" style="background-image: url(public/demo/item-product-1.png);"></div>
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
        <div class="item-product">
            <div class="overflow-hidden bg-white rounded-16">
                <a href="index.php?p=detailproduct">
                    <div class="bg-img-main" style="background-image: url(public/demo/item-product-2.png);"></div>
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
        <div class="item-product">
            <div class="overflow-hidden bg-white rounded-16">
                <a href="index.php?p=detailproduct">
                    <div class="bg-img-main" style="background-image: url(public/demo/item-product-3.png);"></div>
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
        <div class="item-product">
            <div class="overflow-hidden bg-white rounded-16">
                <a href="index.php?p=detailproduct">
                    <div class="bg-img-main" style="background-image: url(public/demo/item-product-4.png);"></div>
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
        <div class="item-product">
            <div class="overflow-hidden bg-white rounded-16">
                <a href="index.php?p=detailproduct">
                    <div class="bg-img-main" style="background-image: url(public/demo/item-product-1.png);"></div>
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


<script type="text/javascript">
    $(document).ready(function () {
        $('.detail-product').owlCarousel({
            center: false,
            loop: true,
            margin: 0,
            dots: true,
            margin: 35,
            autoplay: false,
            responsive: {
                0: {
                    items: 1,
                    margin: 18,
                    nav: false,
                },
                768: {
                    items: 1,
                    nav: false,
                },
                1400: {
                    items: 1
                }
            }
        });

        // replace dot to thumnail image
        let lengthOfDot = $(".detail-product .owl-dot").length;
        $(".detail-product .owl-dot").each(function (index, element) {
            if (index + 1 !== lengthOfDot) {
                $(element).html(`<img class="img-fluid my-thumnail-img rounded-16 me-3" src="public/demo/detail-product-thumnail-${index + 1}.png" alt="">`);
            } else {
                $(element).html(`<img class="img-fluid my-thumnail-img rounded-16" src="public/demo/detail-product-thumnail-${index + 1}.png" alt="">`);
            }
        })

        $('.relative-products').owlCarousel({
            center: false,
            loop: false,
            margin: 0,
            dots: false,
            nav: true,
            items: 1,
            merge: true,
            margin: 30,
            autoplay: false,
            responsive: {
                0: {
                    items: 2,
                    nav: false,
                    dots: false,
                    margin: 15,
                },
                768: {
                    items: 3,
                },
                1400: {
                    items: 4,
                }
            }
        });

        $(".relative-products .owl-next").html(`<i class="bi bi-chevron-right fs-5"></i>`);
        $(".relative-products .owl-prev").html(`<i class="bi bi-chevron-left fs-5"></i>`);
    });
</script>