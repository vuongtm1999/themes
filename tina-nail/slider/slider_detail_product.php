<style type="text/css">
    .detail-product.owl-carousel>.owl-nav>.owl-prev {
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

    .detail-product.owl-carousel>.owl-nav>.owl-next {
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

    .detail-product .owl-nav [class*=owl-]:hover {
        color: var(--mainColor);
        background-color: #f7f7f7;
    }

    .detail-product.owl-carousel>.owl-nav>.owl-prev.disabled,
    .detail-product.owl-carousel>.owl-nav>.owl-next.disabled {
        display: none;
    }

    .detail-product.owl-theme .owl-dots {
        margin-top: 16px;
    }

    .detail-product .owl-dot.active {
        border: 1px solid var(--mainColor);
    }

    /* modify dots */
    .detail-product .owl-dots .owl-dot span {
        margin: 0 3px !important;
        width: 15px;
        height: 5px;
        background: white;
        border: 1px solid white;
        border-radius: initial;
        opacity: 1;
    }

    .detail-product .owl-dots .owl-dot.active span {
        width: 30px;
        height: 5px;
        border-radius: initial;
        background: #0fb587;
        border: 1px solid #0fb587;
        transition: all 0.2s linear;
    }

    .detail-product .owl-dots {
        margin-top: 20px !important;
    }

    /* property center */
    .detail-product .owl-dots.disabled {
        display: block;
    }
</style>

<div class="row">
    <div class="suggestion-product owl-carousel owl-theme">
        <a href="index.php?p=chitietsanpham">
            <div class="product-block position-relative">
                <div class="background-img-product"></div>
                <span style="color: initial;" class="btn-add-to-wishlist position-absolute">
                    <i class="bi bi-heart-half"></i>
                </span>
                <div style="color: initial;" class="p-3">
                    <div>
                        Nhẫn nam Vàng trắng DVNATTT0100D298
                    </div>
                    <div class="fw-bold">
                        21.522.000 VND
                    </div>
                </div>
            </div>
        </a>
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

        $(".detail-product .owl-next").html(`<i class="fa-solid fa-caret-right fs-1"></i>`);
        $(".detail-product .owl-prev").html(`<i class="fa-solid fa-caret-left fs-1"></i>`);


        // replace dot to thumnail image
        $(".detail-product .owl-dot").each(function (index, element) {
            $(element).html(`<img class="img-fluid my-thumnail-img" src="public/demo/detail-product-thumnail-${index + 1}.jpg" alt="">`);
        })
    });
</script>