<style>
    .nav-link {
        color: #999;
    }

    .nav-link:hover {
        color: #0fb587;
    }

    .nav-link.active {
        font-weight: 600;
        color: #303846;
    }

    .my-nav-link.active:before {
        content: "";
        position: absolute;
        height: 1px;
        left: 30px;
        right: 30px;
        bottom: -1px;
        background-color: #0a402b;
    }

    .my-btn-dark {
        padding: 10px 25px;
        line-height: normal;
        border: 1px solid #000;
        font-size: 14px;
        text-align: center;
        font-weight: 400;
        font-style: normal;
        background-color: #000;
        color: #fff;
    }

    .my-btn-dark:hover {
        background-color: #0a402b;
        border-color: #0a402b;
    }
</style>

<div class="row">
    <div style="background-color: var(--bg-grey);" class="py-3 px-xxl-5">
        <a class="fs-6" href="index.php">Trang chủ</a>
        <span class="mx-1">/</span>
        <span class="fs-6">Đăng nhập tài khoản</span>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-lg-7 col-md-12">
        <div style="box-shadow: 0 0 10px rgb(204 204 204 / 30%);"
            class="d-flex justify-content-center align-items-center mt-5">
            <div class="w-100">
                <ul style="border-bottom: 1px solid #eee;" class="nav mb-3" role="tablist">
                    <li style="border-right: 1px solid #eee;" class="active w-50 text-center">
                        <a class="nav-link my-nav-link position-relative active py-3" id="pills-home-tab"
                            data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home"
                            aria-selected="true">Đăng nhập</a>
                    </li>
                    <li class="w-50 text-center">
                        <a class="nav-link my-nav-link position-relative py-3" id="pills-profile-tab" data-toggle="pill"
                            href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Đăng
                            ký</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active px-3" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab">
                        <label class="fs-6 text-uppercase fw-bolder">Email *</label>
                        <div class="mt-1">
                            <input placeholder="Nhập Địa chỉ Email" type="email" name="contact[email]"
                                data-validation="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$"
                                class="form-control form-control-lg rounded-pill" required="">
                        </div>

                        <label class="fs-6 text-uppercase mt-3 fw-bolder">Mật khẩu *</label>
                        <div class="mt-1">
                            <input placeholder="Nhập Mật khẩu" type="password" name="contact[email]"
                                data-validation="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$"
                                class="form-control form-control-lg rounded-pill" required="">
                        </div>
                        <div class="my-2">
                            <a href="javascript:void();" class="text-light-green" title="Quên mật khẩu?">Quên mật
                                khẩu?</a>
                        </div>

                        <div class="my-2">
                            <button class="my-btn-dark w-100 rounded" type="submit" value="Đăng nhập">Đăng nhập</button>
                        </div>
                    </div>
                    <div class="tab-pane fade px-3" id="pills-profile" role="tabpanel"
                        aria-labelledby="pills-profile-tab">
                        <label class="fs-6 text-uppercase fw-bolder">HỌ *</label>
                        <div class="mt-1">
                            <input placeholder="Nhập họ" type="email" name="contact[email]" data-validation="email"
                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$"
                                class="form-control form-control-lg rounded-pill" required="">
                        </div>
                        <label class="fs-6 text-uppercase fw-bolder mt-3">TÊN *</label>
                        <div class="mt-1">
                            <input placeholder="Nhập tên" type="email" name="contact[email]" data-validation="email"
                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$"
                                class="form-control form-control-lg rounded-pill" required="">
                        </div>
                        <label class="fs-6 text-uppercase fw-bolder mt-3">SỐ ĐIỆN THOẠI *</label>
                        <div class="mt-1">
                            <input placeholder="Nhập số điện thoại" type="email" name="contact[email]"
                                data-validation="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$"
                                class="form-control form-control-lg rounded-pill" required="">
                        </div>
                        <!--  -->

                        <label class="fs-6 text-uppercase fw-bolder mt-3">Email *</label>
                        <div class="mt-1">
                            <input placeholder="Nhập Địa chỉ Email" type="email" name="contact[email]"
                                data-validation="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$"
                                class="form-control form-control-lg rounded-pill" required="">
                        </div>

                        <label class="fs-6 text-uppercase mt-3 fw-bolder">Mật khẩu *</label>
                        <div class="mt-1">
                            <input placeholder="Nhập Mật khẩu" type="password" name="contact[email]"
                                data-validation="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$"
                                class="form-control form-control-lg rounded-pill" required="">
                        </div>

                        <div class="my-3">
                            <button class="my-btn-dark w-100 rounded" type="submit" value="Đăng nhập">Đăng nhập</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>