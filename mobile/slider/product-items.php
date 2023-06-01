<style>
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
        display: none;
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
</style>

<div>
    <div class="product-item position-relative box_shadow bg-white p-2 rounded-10">
        <a class="d-block position-relative overflow-hidden" href="index.php?p=detailproduct">
            <div class="zoom-img bg-img-main" style="background-image: url(public/demo/item-product-1.jpg);"></div>
        </a>
        <div class="item-product-info mt-1 position-relative">
            <a class="btn p-1 d-flex justify-content-center align-items-center rounded-circle play0"
                href="index.php?p=detailproduct" title="Xem chi tiết sản phẩm">
                <i class="bi bi-gear fs-4 text-white"></i>
            </a>
            <h5 class="item-title fw-bold my-1">
                <a class="line_1" href="index.php?p=detailproduct" title="Samsung Galaxy S22 Ultra (8GB - 128GB)">
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