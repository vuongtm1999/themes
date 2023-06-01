<style>
    @media (min-width: 768px) {}

    @media (min-width: 1400px) {}
</style>

<div style="background-color: #F5F5F5;" class="row justify-content-center">
    <div class="col-xxl-9 col-11 my-4 bg-white">
        <div class="d-flex flex-wrap justify-content-center my-4 rounded">
            <div style="background-color: #E4E4E4;" class="col-xxl-5 col-12 px-3 rounded">
                <h6 class="fw-bold text-center my-3"><i class="bi bi-search me-2"></i>Kiểm tra đơn hàng của bạn</h6>
                <hr class="text-white my-4">
                <p class="mb-1">Kiểm tra bằng</p>

                <span class="me-3 d-block d-md-inline">
                    <input type="radio" id="number_phone" value="number_phone">
                    <label class="align-text-bottom" for="number_phone">Số điện thoại</label>
                </span>
                <span class="me-3 d-block d-md-inline">
                    <input type="radio" id="emai" value="emai;">
                    <label class="align-text-bottom" for="emai">Emai</label>
                </span>
                <span class="d-block d-md-inline">
                    <input type="radio" id="phone-and-email" value="phone-and-email">
                    <label class="align-text-bottom" for="phone-and-email">
                        Số điện thoại và Email
                    </label>
                </span>

                <p class="mt-4">Số điện thoại</p>
                <input type="text" value="" placeholder="0909 xxx xxx" data-val-regex-pattern="^[0-9]*$"
                    data-val-regex="Chỉ được nhập số" class="form-control">

                <button style="background-color: #357ebd;" class="btn float-end text-white my-3" type="submit">
                    Kiểm tra
                </button>
            </div>

            <div class="col-xxl-7 col-12 text-center">
                <p class="text-danger fs-5 text-center">Không tìm thấy dữ liệu đơn hàng</p>
                <i style="font-size: 100px;" class="fa fa-credit-card text-muted"></i>
            </div>
        </div>
    </div>
</div>