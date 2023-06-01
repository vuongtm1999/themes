<style>
 
</style>

<div class="row">
    <div style="background-color: var(--bg-grey);" class="py-3 px-xxl-5">
        <a class="fs-6" href="index.php">Trang chủ</a>
        <span class="mx-1">/</span>
        <span class="fs-6">Giỏ hàng</span>
    </div>
</div>

<div class="row px-3 my-4">
    <h4>Giỏ hàng của bạn</h4>

    <div class="col-xxl-9 col-12">
        <div class="text-center">
            <img class="m-3" width="80" src="public/demo/cart-rong-icon.svg" alt="">
        </div>
        <p class="text-center">Không có sản phẩm nào trong giỏ hàng của bạn</p>
    </div>
    <div class="col-xxl-3 col-12">
        <div style="background-color: #F8F8F8;" class="p-3">
            <form method="post">
                <h4>
                    Thời gian giao hàng
                </h4>
                <div class="timedeli-modal">
                    <input class="px-2 py-1" type="date" placeholder="Chọn ngày">
                    <select name="time" class="px-2 py-2">
                        <option selected="">Chọn thời gian</option>


                        <option value="08h00 - 12h00">08h00 - 12h00</option>

                        <option value=" 14h00 - 18h00"> 14h00 - 18h00</option>

                        <option value=" 19h00 - 21h00"> 19h00 - 21h00</option>

                    </select>

                    <div class="my-3 toggle-bill-btn">
                        <input type="checkbox" id="checkbox-bill" name="attributes[invoice]" value="có"
                            class="regular-checkbox">
                        <label for="checkbox-bill" style="vertical-align: text-bottom;">Xuất hóa đơn công ty</label>
                    </div>
                </div>

                <div class="toggle-bill-content">
                    <div class="bill-field">
                        <div class="form-group">
                            <label>Tên công ty</label>
                            <input type="text" class="form-control val-f" name="attributes[company_name]" value=""
                                placeholder="Tên công ty">
                        </div>
                        <div class="form-group mt-3">
                            <label>Mã số thuế</label>
                            <input type="number" pattern=".{10,}" class="form-control val-f val-n"
                                name="attributes[tax_code]" value="" placeholder="Mã số thuế">
                        </div>
                        <div class="form-group mt-3">
                            <label>Địa chỉ công ty</label>
                            <textarea type="text" class="form-control val-f" name="attributes[company_address]"
                                placeholder="Nhập địa chỉ công ty (bao gồm Phường/Xã, Quận/Huyện, Tỉnh/Thành phố nếu có)"></textarea>
                        </div>
                        <div class="form-group mt-3">
                            <label>Email nhận hoá đơn</label>
                            <input type="email" class="form-control val-f val-email" name="attributes[invoice_email]"
                                value="" placeholder="Email nhận hoá đơn">
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>


<script>
    
</script>