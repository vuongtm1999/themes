<style>
    .breadcrumb_background {
        background-image: url(public/demo/bg_breadcrumb.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        margin-bottom: 40px;
        padding-top: 65px;
        padding-bottom: 65px;
    }

    .breadcrumb_background a {
        color: #707070;
    }

    .breadcrumb_background a:hover {
        color: #d5dd02;
    }

    .special-price {
        font-size: 1.9rem;
        color: var(--accentColor2);
    }

    .prd_quantity {
        max-width: 60px;
    }

    .item-cart {
        border-top: solid 1px #ebebeb;
    }

    .btn-cart {
        color: white;
    }
</style>

<div class="row breadcrumb_background px-6">
    <div>
        <a href="/"><span>Trang chủ</span></a>
        <span class="mx-3"><i class="fa fa-angle-right"></i></span>
        <strong><span>Giỏ hàng</span></strong>
    </div>
    <h2 class="fw-bold">Giỏ hàng</h3>
</div>

<div class="row px-6">
    <h6 class="fw-bolder text-uppercase mb-4">
        Giỏ hàng của bạn
    </h6>

    <div class="item-cart py-4 d-flex align-items-center">
        <div class="col-3 col-xxl-2">
            <a class="product-image a-left" title="Máy đánh trứng cao cấp Lock&Lock" href="index.php?p=detailproduct">
                <img width="75" height="auto" src="public/demo/cart-1.png">
            </a>
        </div>
        <div class="col-4 col-xxl-5 px-2">
            <a class="d-block" href="index.php?p=detailproduct" title="Máy đánh trứng cao cấp Lock&Lock">
                Máy đánh trứng cao cấp Lock&Lock
            </a>
            <div style="color: #d5dd02;">
                Giá: 150.000₫
            </div>
            <div class="small text-black-50">
                <em>To / Đỏ</em>
            </div>
        </div>
        <div class="col-4">
            <div class="product-quantity d-flex align-items-center clearfix">
                <div class="fw-bold d-flex rounded border w-xxl-50 justify-content-between">
                    <button style="background: initial;"
                        class="border-0 justify-content-center align-items-center d-flex">
                        <i class="fas fa-minus-circle"></i>
                    </button>
                    <input type="text" name="quantity" min="1" value="1"
                        class="fw-bold border-0 text-center form-control prd_quantity" id="qtym">
                    <button style="background: initial;"
                        class="border-0 justify-content-center align-items-center d-flex">
                        <i class="fas fa-plus-circle"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-1 text-end">
            <a title="Xóa" href="javascript:;">
                <span><i class="fa fa-times"></i></span>
            </a>
        </div>
    </div>
    <div class="item-cart py-4 d-flex align-items-center">
        <div class="col-3 col-xxl-2">
            <a class="product-image a-left" title="Máy đánh trứng cao cấp Lock&Lock" href="index.php?p=detailproduct">
                <img width="75" height="auto" src="public/demo/cart-1.png">
            </a>
        </div>
        <div class="col-4 col-xxl-5 px-2">
            <a class="d-block" href="index.php?p=detailproduct" title="Máy đánh trứng cao cấp Lock&Lock">
                Máy đánh trứng cao cấp Lock&Lock
            </a>
            <div style="color: #d5dd02;">
                Giá: 150.000₫
            </div>
            <div class="small text-black-50">
                <em>To / Đỏ</em>
            </div>
        </div>
        <div class="col-4">
            <div class="product-quantity d-flex align-items-center clearfix">
                <div class="fw-bold d-flex rounded border w-xxl-50 justify-content-between">
                    <button style="background: initial;"
                        class="border-0 justify-content-center align-items-center d-flex">
                        <i class="fas fa-minus-circle"></i>
                    </button>
                    <input type="text" name="quantity" min="1" value="1"
                        class="fw-bold border-0 text-center form-control prd_quantity" id="qtym">
                    <button style="background: initial;"
                        class="border-0 justify-content-center align-items-center d-flex">
                        <i class="fas fa-plus-circle"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-1 text-end">
            <a title="Xóa" href="javascript:;">
                <span><i class="fa fa-times"></i></span>
            </a>
        </div>
    </div>
    <div class="item-cart py-4 d-flex align-items-center">
        <div class="col-3 col-xxl-2">
            <a class="product-image a-left" title="Máy đánh trứng cao cấp Lock&Lock" href="index.php?p=detailproduct">
                <img width="75" height="auto" src="public/demo/cart-1.png">
            </a>
        </div>
        <div class="col-4 col-xxl-5 px-2">
            <a class="d-block" href="index.php?p=detailproduct" title="Máy đánh trứng cao cấp Lock&Lock">
                Máy đánh trứng cao cấp Lock&Lock
            </a>
            <div style="color: #d5dd02;">
                Giá: 150.000₫
            </div>
            <div class="small text-black-50">
                <em>To / Đỏ</em>
            </div>
        </div>
        <div class="col-4">
            <div class="product-quantity d-flex align-items-center clearfix">
                <div class="fw-bold d-flex rounded border w-xxl-50 justify-content-between">
                    <button style="background: initial;"
                        class="border-0 justify-content-center align-items-center d-flex">
                        <i class="fas fa-minus-circle"></i>
                    </button>
                    <input type="text" name="quantity" min="1" value="1"
                        class="fw-bold border-0 text-center form-control prd_quantity" id="qtym">
                    <button style="background: initial;"
                        class="border-0 justify-content-center align-items-center d-flex">
                        <i class="fas fa-plus-circle"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-1 text-end">
            <a title="Xóa" href="javascript:;">
                <span><i class="fa fa-times"></i></span>
            </a>
        </div>
    </div>

    <div class="mt-5 text-end">
        <div class="col-xxl-5 col-12 offset-xxl-7 offset-0 text-end">
            <div class="d-flex justify-content-between">
                <span class="fw-bold fs-5">Tổng tiền</span>
                <span style="color: #d5dd02;" class="fw-bold fs-5">4.550.000₫</span>
            </div>
        </div>
        <div class="col-xxl-5 col-12 offset-xxl-7 offset-0 text-end my-4">
            <div class="row justify-content-between gx-2 gy-3">
                <div class="col-xxl-6 col-12">
                    <a href="index.php?p=listproduct" class="btn btn_base btn-cart justify-content-center">
                        <i class="fas fa-reply me-2"></i>
                        Tiếp tục mua hàng
                    </a>
                </div>
                <div class="col-xxl-6 col-12">
                    <a href="index.php?p=thanhtoan" class="btn btn_base btn-cart justify-content-center">
                        <i class="fas fa-check me-2"></i>Tiến hành thanh toán
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>