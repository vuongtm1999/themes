<style>
    .btn-send {
        background: var(--color-bold-green);
        border-color: var(--color-bold-green);
        color: #fff;
        border-radius: 25px;
    }
</style>

<div class="row">
    <div style="background-color: var(--bg-grey);" class="py-3 px-xxl-5">
        <a class="fs-6" href="index.php">Trang chủ</a>
        <span class="mx-1">/</span>
        <span class="fs-6">Liên hệ</span>
    </div>
</div>


<div class="row px-3 mt-4">
    <div class="col-md-4 col-12">
        <div class="text-center"><i class="bi bi-telephone fs-1 text-light-green"></i></div>
        <p class="fw-bold text-center">Điện thoại</p>
        <p class="text-center">19006750</span>
    </div>
    <div class="col-md-4 col-12">
        <div class="text-center"><i class="bi bi-geo-alt fs-1 text-light-green"></i></div>
        <p class="fw-bold text-center">Địa chỉ</p>
        <p class="text-center">266 Đội Cấn, Phường Liễu Giai, Quận Ba Đình, TP Hà Nội</span>
    </div>
    <div class="col-md-4 col-12">
        <div class="text-center">
            <i class="bi bi-envelope-paper fs-1 text-light-green"></i>
        </div>
        <p class="fw-bold text-center">Địa chỉ</p>
        <p class="text-center">266 Đội Cấn, Phường Liễu Giai, Quận Ba Đình, TP Hà Nội</span>
    </div>
</div>

<div class="row mt-2 px-4 mb-5">
    <div class="col-xxl-6 col-12">
        <iframe style="width: 100%;"
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7839.047001476831!2d106.686541!3d10.771159!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f07b3a24645%3A0x8190331668205de4!2zVMOyYSBuaMOgIEhNIFRvd24!5e0!3m2!1svi!2sus!4v1682408770431!5m2!1svi!2sus"
            height="530" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="col-xxl-6 col-12">
        <h4 class="text-uppercase fw-bold mt-xxl-0 mt-4">Liên hệ chúng tôi</h4>
        <p>Để liên hệ và nhận các thông tin khuyến mãi sớm nhất, Chúng tôi sẽ liên lạc với bạn trong
            thời gian sớm nhất.</p>

        <div class="my-4">
            <input placeholder="Họ và tên *" type="text" class="form-control form-control-lg rounded-pill" required="">
        </div>

        <div class="my-4">
            <input placeholder="Email *" type="email" name="contact[email]" data-validation="email"
                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" data-validation-error-msg="Email sai định dạng"
                id="email" class="form-control form-control-lg rounded-pill" required="">
        </div>
        <div class="my-4">
            <input placeholder="Số điện thoại *" type="tel" name="contact[phone]"
                data-validation-error-msg="Không được để trống" data-validation="required" id="tel"
                class="number-phone form-control form-control-lg rounded-pill" required="">
        </div>

        <textarea style="border-radius: 26px;" placeholder="Nội dung *" name="contact[body]" id="comment"
            class="form-control form-control-lg" rows="5" data-validation-error-msg="Không được để trống"
            data-validation="required" required="" spellcheck="false"></textarea>

        <button type="submit" class="btn-send px-4 py-2 mt-4 fw-bold">Gửi</button>
    </div>
</div>