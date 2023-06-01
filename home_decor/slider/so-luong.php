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
    <div class="product-quantity d-flex align-items-center clearfix">
        <div class="fw-bold d-flex rounded border w-50 justify-content-between">
            <button style="background: initial;" class="border-0 justify-content-center align-items-center d-flex">
                <i class="fas fa-minus-circle"></i>
            </button>
            <input type="text" name="quantity" min="1" value="1"
                class="fw-bold border-0 text-center form-control prd_quantity" id="qtym">
            <button style="background: initial;" class="border-0 justify-content-center align-items-center d-flex">
                <i class="fas fa-plus-circle"></i>
            </button>
        </div>
    </div>
</div>