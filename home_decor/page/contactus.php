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

    .x-icon {
        width: 30px;
        height: 30px;
        background: var(--color-main);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
    }

    @media (min-width: 768px) {}

    @media (min-width: 1400px) {
        .sec_contact_right:before {
            content: "";
            position: absolute;
            top: 0;
            left: -15px;
            background: #ebebeb;
            width: 1px;
            height: 88%;
        }

    }
</style>

<div class="row breadcrumb_background px-6">
    <div>
        <a href="/"><span>Trang chủ</span></a>
        <span class="mx-3"><i class="fa fa-angle-right"></i></span>
        <strong><span>Liên hệ</span></strong>
    </div>
    <h2 class="fw-bold">Liên hệ</h3>
</div>


<div class="row px-6">
    <div class="mb-5">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.456141986804!2d106.68765417486895!3d10.776333659195805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3ae35e3725%3A0x20c5174a47f97be3!2sHCMC%20Open%20University%20-%20Campus%201!5e0!3m2!1sen!2s!4v1684045010795!5m2!1sen!2s"
            style="border:0; height: 600px; width: 100%;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="col-xxl-6 mb-5">
        <h4 class="mb-3">
            Liên hệ với chúng tôi
        </h4>
        <div class="mb-3">
            <input placeholder="Họ và tên*" type="text" class="form-control  form-control-lg" required="">
        </div>
        <div class="mb-3">
            <input placeholder="Email*" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required=""
                id="email1" class="form-control form-control-lg" name="contact[email]">
        </div>
        <div class="mb-3">
            <textarea placeholder="Nội dung*" name="contact[body]" class="form-control content-area form-control-lg"
                rows="5" required=""></textarea>
        </div>
        <div>
            <button type="submit" class="btn btn_base px-5 py-2 rounded-0">Gửi liên
                hệ</button>
        </div>
    </div>
    <div class="col-xxl-5 offset-xxl-1 sec_contact_right position-relative">
        <p class="mb-3 pt-3">
            HomeDekor là một trong những cửa hàng cung cấp đồ nội thất gia đình chất lượng tại Hà Nội với hơn 10 năm
            kinh nghiệm trong lĩnh vực bán hàng...
        </p>

        <div class="mb-3">
            <span class="x-icon me-2">
                <i style="color: #d5dd02;" class="fas fa-map-marker-alt fs-6 text-white"></i>
            </span>
            <span>266 Đội Cấn, Hà Nội</span>
        </div>
        <div class="mb-3">
            <span class="x-icon me-2">
                <i style="color: #d5dd02;" class="fas fa-mobile-alt fs-6 text-white"></i>
            </span>
            <a href="tel:19006750">1900 6750</a>
        </div>
        <div class="mb-3">
            <span class="x-icon me-2">
                <i style="color: #d5dd02;" class="far fa-envelope fs-6 text-white"></i>
            </span>
            <a href="mailto:admin@tgsoft.vn">admin@tgsoft.vn</a>
        </div>
    </div>
</div>