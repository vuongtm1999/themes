<style>
    .special-price {
        font-size: 1.9rem;
        color: var(--accentColor2);
    }

    .prd_quantity {
        max-width: 60px;
    }
</style>

<div class="row">
    <div class="product-quantity mb-3 d-flex align-items-center clearfix">
        <header class="fw-bold me-2">Số lượng </header>
        <div class="fw-bold d-flex rounded border">
            <button style="background: initial;" class="border-0 justify-content-center align-items-center d-flex">
                <i class="bi bi-dash-lg"></i>
            </button>
            <input type="text" name="quantity" min="1" value="1"
                class="fw-bold border-0 text-center form-control prd_quantity" id="qtym">
            <button style="background: initial;" class="border-0 justify-content-center align-items-center d-flex">
                <i class="bi bi-plus-lg"></i>
            </button>
        </div>
    </div>
</div>