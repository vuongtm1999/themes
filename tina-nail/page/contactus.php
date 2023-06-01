<style>
    .iframe iframe {
        width: 100% !important;
        height: 700px;
        display: block;
    }

    .contact-title {
        font-family: 'svn-haptic_scriptregular';
        color: var(--mainColor);
        font-size: 62px;
    }

    .contact-form .form-control {
        border-radius: 0px !important;
        font-size: 15px;
        color: #7c7c7c;
        background: transparent;
        height: 45px;
        border: 0;
        border-bottom: 1px solid #d6d2cc;
        margin: 0;
        padding: 0;
        display: block;
        width: 100%;
        min-height: 40px;
        box-shadow: none;
    }

    .bread-crumb {
        border-top: unset;
    }

    @media (min-width: 768px) {
        .bread-crumb {
            border-top: 1px solid #e6b08c;
        }
    }
</style>

<div class="row px-6 pb-4">
    <div class="py-4 bread-crumb">
        <span class="home">
            <a class="text-black-50 small" href="index.php"><span>Trang chủ</span></a>
            <span class="text-black-50 mx-1">/</span>
        </span>
        <span class="text-main"><strong>Đặt lịch</strong></span>
    </div>
</div>

<div class="row px-6">
    <div class="col-md-6 col-12 ps-md-4 order-md-2">
        <h1 class="contact-title">Tina Nail</h1>
        <h4 class="text-main">GỬI THÔNG TIN CHO CHÚNG TÔI</h4>
        <p>
            Hãy liên hệ ngay với chúng tôi để nhận được nhiều ưu đãi hấp dẫn dành cho bạn
        </p>
        <div class="mb-2">
            <i class="bi bi-geo-alt-fill fs-5 text-main me-2"></i>
            <span>
                <span class="fw-bold">Địa chỉ:</span>
                Tâng 6 toà nhà Ladeco, 266 Đội Cấn, phường Liễu Giai, Hà
                Nội.
            </span>
        </div>
        <div class="mb-2">
            <i class="bi bi-telephone-fill fs-5 text-main me-2"></i>
            <span>
                <span class="fw-bold">Hotline:</span>
                <a href="tel:1900 6750">1900 6750</a>
            </span>
        </div>
        <div class="mb-2">
            <i class="bi bi-envelope-fill fs-5 text-main me-2"></i>
            <span>
                <span class="fw-bold">Email:</span>
                <a href="mailto:admin@tgsoft.vn">admin@tgsoft.vn</a>
            </span>
        </div>
        <div class="mt-4 contact-form">
            <div class="mb-3">
                <input placeholder="Họ tên*" type="text" class="form-control form-control-lg" required="" value=""
                    name="contact[Name]">
            </div>
            <div class="mb-3">
                <input placeholder="Email*" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required=""
                    class="form-control form-control-lg" value="">
            </div>

            <div class="mb-4">
                <input type="text" placeholder="Số điện thoại*" name="contact[phone]"
                    class="form-control form-control-lg" required="">
            </div>

            <div class="mb-4">
                <textarea placeholder="Nội dung*" name="contact[body]" id="comment"
                    class="form-control content-area form-control-lg" rows="9" required=""></textarea>
            </div>
            <div>
                <a class="btn my-btn-primary rounded-pill px-5 py-3" href="javascript:;">Gửi thông tin</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-12 order-md-1">
        <div class="iframe">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.523432255908!2d106.68435221472184!3d10.771164262236313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f07b3a24645%3A0x8190331668205de4!2zVMOyYSBuaMOgIEhNIFRvd24!5e0!3m2!1svi!2s!4v1637802707613!5m2!1svi!2s"
                allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</div>