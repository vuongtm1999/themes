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

    .btn-primary {
        transition: all 0.5s;
        color: #fff;
        background-color: var(--mainColor);
        border-color: var(--mainColor);
    }

    .btn-primary:hover {
        background-color: var(--mainColor2);
        border-color: var(--mainColor2);
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
            Liên hệ
        </span>
    </div>
</div>

<div class="row bg-primary px-6 py-3">
    <div class="p-3 bg-white rounded">
        <h4 style="color: var(--mainColor);" class="fw-bolder">
            Liên hệ
        </h4>

        <div class="row pt-4">
            <div class="col-md-6 col-12">
                <div class="mb-4">
                    <p class="adr mb-1"><b>Trụ sở chính: </b>Ladeco Building, 266 Doi Can Street, Ba Dinh District,
                        Hanoi.</p>
                    <p class="mb-1"><b>Email: </b><a href="mailto:support@sapo.vn"
                            title="support@sapo.vn">support@sapo.vn</a></p>
                    <p class="mb-1"><b>Hotline: </b><a href="tel:19006750" title="1900 6750">1900 6750</a></p>
                    <p class="mb-1">Giấy chứng nhận Đăng ký Kinh doanh số 0309532xxx do Sở Kế hoạch và Đầu tư Thành phố
                        Hà Nội cấp ngày 01/04/2002</p>
                </div>

                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Tên *" required="">
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" placeholder="Địa chỉ email *" required="">
                </div>
                <div class="mb-3">
                    <textarea placeholder="Nội dung *" class="form-control" rows="3" spellcheck="false"></textarea>
                </div>
                <div class="mb-3"><em class="required">* </em>Thông tin bắt buộc</div>

                <div class="mb-3">
                    <button type="submit" title="Submit"
                        class="sitdown rounded-10 modal-open position-relative book-submit btn btn-primary text-center d-flex align-items-center font-weight-bold subml">Gửi
                        liên hệ</button>
                </div>
            </div>

            <div class="col-md-6 col-12">
                <iframe style="min-height: 400px;" class="w-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8780847756075!2d105.8118063154837!3d21.037563592852386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab1306e135ff%3A0x206f91b00da7b3ce!2zMjY2IMSQ4buZaSBD4bqlbiwgQ-G7kW5nIFbhu4ssIEJhIMSQw6xuaCwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2sus!4v1562602124854!5m2!1svi!2sus"
                    allowfullscreen=""></iframe>
            </div>
        </div>

    </div>
</div>