<style>
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
</style>


<div class="row">
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
                        <a style="height: 45px;" class="d-flex align-items-center" title="Thêm vào giỏ hàng"
                            href="javascript:void();">
                            <img width="20" height="20" src="public/demo/card-icon.svg" alt="">
                        </a>
                    </div>
                    <div class="action-item">
                        <a style="height: 45px;" class="d-flex align-items-center" href="javascript:void(0)"
                            title="Thêm vào yêu thích">
                            <img width="20" height="20" src="public/demo/heart-icon.svg" alt="">
                        </a>
                    </div>
                    <div class="action-item">
                        <a style="height: 45px;" class="d-flex align-items-center" href="javascript:void(0)"
                            title="Xem nhanh">
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
            <span class="product-brand">Lofi Cosmetics</span>
            <div>
                <span class="price me-2">2.880.000₫</span>
                <span class="compare-price">3.200.000₫</span>
            </div>
        </div>
    </div>
</div>