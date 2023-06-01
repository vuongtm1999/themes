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

    .product-item {
        border: 1px solid #E8E8E8;
        background: #FCFCFC;
        padding: 20px;
        transition: all 0.3s ease;
    }

    .product-item:hover {
        cursor: pointer;
        border-color: var(--mainColor);
        background-color: #fff;
    }

    .product-item:hover a {
        color: var(--mainColor);
    }

    .product-item img {
        max-height: 85px;
        max-width: 58px;
    }

    .prd_quantity {
        max-width: 60px;
    }

    .prd_quantity {
        border: solid #ddd !important;
        border-width: 0 1px !important;
        border-radius: 0px;
    }

    .product-quantity>div {
        height: 33px;
    }

    .product-quantity+.btn {
        padding: 1px 6px;
    }

    .btn-dark {
        color: #fff;
        background-color: #343a40;
        border-color: #343a40;
    }

    .btn-dark:hover {
        color: #fff;
        background-color: #23272b;
        border-color: #1d2124;
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
            Giỏ hàng
        </span>
    </div>
</div>

<div class="row bg-primary px-6 py-3">
    <div class="p-3 bg-white rounded">
        <h4 class="fw-bolder">
            Giỏ hàng
        </h4>
        <div class="row">
            <div class="col-md-8 col-12">
                <div class="d-flex flex-wrap align-items-center product-item rounded mb-4">
                    <div class="mx-2"><img src="public/demo/cart-1.png" alt=""></div>
                    <div style="flex: 1;" class="d-flex flex-wrap p-0">
                        <div class="d-flex justify-content-between w-100">
                            <p class="fw-bold mb-2">
                                <a href="index.php?p=detailproducts">
                                    Cáp dữ liệu sạc nhanh an toàn từ tính Baseus Zinc
                                    Type-C đến iP PD 20W
                                </a>
                            </p>
                            <span style="color: var(--accentColor2);"
                                class="fw-bold ms-auto text-end">550.000&nbsp;₫</span>
                        </div>
                        <div class="d-flex flex-wrap justify-content-between w-100">
                            <div class="product-quantity d-flex align-items-center">
                                <div class="fw-bold d-flex rounded border">
                                    <button style="background: initial;"
                                        class="border-0 justify-content-center align-items-center d-flex">
                                        <i class="bi bi-dash-lg"></i>
                                    </button>
                                    <input type="text" name="quantity" min="1" value="1"
                                        class="fw-bold border-0 text-center form-control prd_quantity" id="qtym">
                                    <button style="background: initial;"
                                        class="border-0 justify-content-center align-items-center d-flex">
                                        <i class="bi bi-plus-lg"></i>
                                    </button>
                                </div>
                            </div>
                            <button class="btn btn-outline-danger " title="Xoá" data-variantid="70237343">Xoá</button>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-wrap align-items-center product-item rounded mb-4">
                    <div class="mx-2"><img src="public/demo/cart-1.png" alt=""></div>
                    <div style="flex: 1;" class="d-flex flex-wrap p-0">
                        <div class="d-flex justify-content-between w-100">
                            <p class="fw-bold mb-2">
                                <a href="index.php?p=detailproducts">
                                    Cáp dữ liệu sạc nhanh an toàn từ tính Baseus Zinc
                                    Type-C đến iP PD 20W
                                </a>
                            </p>
                            <span style="color: var(--accentColor2);"
                                class="fw-bold ms-auto text-end">550.000&nbsp;₫</span>
                        </div>
                        <div class="d-flex flex-wrap justify-content-between w-100">
                            <div class="product-quantity d-flex align-items-center">
                                <div class="fw-bold d-flex rounded border">
                                    <button style="background: initial;"
                                        class="border-0 justify-content-center align-items-center d-flex">
                                        <i class="bi bi-dash-lg"></i>
                                    </button>
                                    <input type="text" name="quantity" min="1" value="1"
                                        class="fw-bold border-0 text-center form-control prd_quantity" id="qtym">
                                    <button style="background: initial;"
                                        class="border-0 justify-content-center align-items-center d-flex">
                                        <i class="bi bi-plus-lg"></i>
                                    </button>
                                </div>
                            </div>
                            <button class="btn btn-outline-danger " title="Xoá" data-variantid="70237343">Xoá</button>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-wrap align-items-center product-item rounded mb-4">
                    <div class="mx-2"><img src="public/demo/cart-1.png" alt=""></div>
                    <div style="flex: 1;" class="d-flex flex-wrap p-0">
                        <div class="d-flex justify-content-between w-100">
                            <p class="fw-bold mb-2">
                                <a href="index.php?p=detailproducts">
                                    Cáp dữ liệu sạc nhanh an toàn từ tính Baseus Zinc
                                    Type-C đến iP PD 20W
                                </a>
                            </p>
                            <span style="color: var(--accentColor2);"
                                class="fw-bold ms-auto text-end">550.000&nbsp;₫</span>
                        </div>
                        <div class="d-flex flex-wrap justify-content-between w-100">
                            <div class="product-quantity d-flex align-items-center">
                                <div class="fw-bold d-flex rounded border">
                                    <button style="background: initial;"
                                        class="border-0 justify-content-center align-items-center d-flex">
                                        <i class="bi bi-dash-lg"></i>
                                    </button>
                                    <input type="text" name="quantity" min="1" value="1"
                                        class="fw-bold border-0 text-center form-control prd_quantity" id="qtym">
                                    <button style="background: initial;"
                                        class="border-0 justify-content-center align-items-center d-flex">
                                        <i class="bi bi-plus-lg"></i>
                                    </button>
                                </div>
                            </div>
                            <button class="btn btn-outline-danger " title="Xoá" data-variantid="70237343">Xoá</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-12">
                <div style="background-color: var(--menuHover);"
                    class="text-white mb-4 p-3 d-flex align-items-center flex-wrap rounded">
                    <div class="text-uppercase fw-bold roun">Tổng tiền</div>
                    <div class="fs-4 fw-bold ms-auto mb-0">16.289.000&nbsp;₫</div>
                </div>

                <a class="btn btn-danger d-block rounded mb-3 text-uppercase fw-bold pt-3 pb-3" href="#">
                    Thanh toán
                </a>

                <a class="btn btn-dark rounded w-100 fw-bold mb-4" href="javascript:;" role="button"
                    title="Xoá tất cả">Xoá tất cả</a>

                <div class="free-gifts p-3 pb-4 pb-md-3 rounded position-relative">
                    <div class="title d-inline-block px-3 mb-0">
                        <img src="public/demo/gift.gif">
                        Code Ưu Đãi
                    </div>
                    <div class="row pt-4">
                        <div class="col-xxl-12 col-12 ">
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
                        <div class="col-xxl-12 col-12 ">
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
                        <div class="col-xxl-12 col-12 ">
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
    </div>
</div>