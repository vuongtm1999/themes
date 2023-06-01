<style>
    .booking-form .form-control {
        border-radius: 0px !important;
        font-size: 15px;
        color: #EEE7E8;
        background: transparent;
        height: 45px;
        border: 0;
        border-bottom: 1px solid #e4af8b;
        margin: 0;
        padding: 0 15px;
        display: block;
        width: 100%;
        min-height: 40px;
        box-shadow: none;
        line-height: 1.5;
    }

    .booking-form .form-control::placeholder {
        /* Chrome, Firefox, Opera, Safari 10.1+ */
        color: #EEE7E8;
        opacity: 1;
        /* Firefox */
    }

    .booking-form .form-control:-ms-input-placeholder {
        /* Internet Explorer 10-11 */
        color: #EEE7E8;
    }

    .booking-form .form-control::-ms-input-placeholder {
        /* Microsoft Edge */
        color: #EEE7E8;
    }

    .booking-title {
        font-family: 'svn-haptic_scriptregular';
        color: #fdd3b7;
        font-size: 57px;
        line-height: 57px;
        height: 57px;
    }

    .my-btn-primary.btn-booking {
        background: #faf3eb;
        color: #daa785;
        border: 1px solid #daa785;
        transition: border-color 0.001s linear, all 0.3s;
    }

    .my-btn-primary.btn-booking:hover {
        border-color: #333;
    }

    .right_booking {
        background-image: url(//bizweb.dktcdn.net/100/427/775/themes/894864/assets/booking_banner.png?1665452606124);
        background-repeat: no-repeat;
        background-size: cover;
        width: 484px;
        height: 555px;
        background-position: right;
        padding: 0;
        z-index: -1;
        position: absolute;
        left: -16px;
        top: 50%;
        transform: translateY(-50%);
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

<div class="row px-6 pb-4">
    <div class="col-md-12 col-xxl-7 col-12">
        <div class="bg-main rounded-16 px-4 py-5">
            <h1 class="booking-title">
                Tina Nail
            </h1>
            <h3 style="font-family: '$font-base';" class="text-white text-uppercase fw-normal">
                Thời gian làm việc
            </h3>
            <p class="mb-4 text-white">
                Tina muốn cung cấp cho tất cả phái đẹp tại Việt Nam một sự lựa chọn đáng tin cậy nhất với những dịch vụ
                chăm sóc cơ thể và làm đẹp chất lượng cao, nhằm đáp ứng mọi nhu cầu ngày càng khắt khe từ phổ biến cho
                đến cao cấp nhất của khách hàng.
            </p>
            <div class="fw-bold fs-6 text-white">
                Mở cửa: 8h00 - 20h00 (Từ thứ 2 - chủ nhật)
            </div>
            <div class="booking-form mt-4">
                <div class="mb-3">
                    <input placeholder="Họ và tên" type="text" class="form-control  form-control-lg" required=""
                        value="" name="contact[Name]">
                </div>
                <div class="row mb-3">
                    <div class="col-xxl-6 col-12">
                        <input placeholder="Họ và tên" type="text" class="form-control  form-control-lg" required=""
                            value="" name="contact[Name]">
                    </div>
                    <div class="col-xxl-6 col-12">
                        <input id="startDate" class="form-control text-white" type="date" />
                    </div>
                </div>
                <div class="mb-3">
                    <select class="form-control" aria-label="Default select example">
                        <option class="text-black" selected>Chi nhánh spa</option>
                        <option class="text-black" value="1">Chi nhánh Hà Nội</option>
                        <option class="text-black" value="2">Chi nhánh Long An</option>
                        <option class="text-black" value="3">Chi nhánh Hồ Chí Minh</option>
                    </select>
                </div>
            </div>

            <div class="ps-3 mt-5 pb-5 mb-4">
                <a class="btn my-btn-primary btn-booking rounded-pill px-5 py-3" href="jascript:;">Đặt lịch ngay</a>
            </div>
        </div>

    </div>
    <div class="col-md-5 col-xxl-5 col-12 d-xxl-block d-none position-relative">
        <div class="right_booking"></div>
    </div>
</div>