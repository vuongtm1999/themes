<style>
    .item-1::after {
        background-image: url(public/demo/branch-icon-1.png);
    }

    .item-2::after {
        background-image: url(public/demo/branch-icon-2.png);
    }

    .item-3::after {
        background-image: url(public/demo/branch-icon-3.png);
    }

    .item-4::after {
        background-image: url(public/demo/branch-icon-4.png);
    }

    .item-info-shop::after {
        content: '';
        position: absolute;
        bottom: 0;
        right: 15px;
        width: 84px;
        height: 72px;
        background-position: bottom center;
        background-size: contain;
        background-repeat: no-repeat;
    }

    .resultStore {
        height: 395px;
    }

    .resultStore::-webkit-scrollbar {
        width: 3px;
    }

    .resultStore::-webkit-scrollbar-thumb {
        border-radius: 0;
        -webkit-box-shadow: none;
        -moz-box-shadow: none;
        background-color: var(--mainColor);
    }

    .resultStore::-webkit-scrollbar-track {
        -webkit-box-shadow: none;
        -moz-box-shadow: none;
        border-radius: 0;
        background-color: #ddd;
    }

    .list-store .item {
        font-size: 0.875rem;
        cursor: pointer;
        border: 1px solid var(--mainColor);
        transition: all 0.5s;
        background: #fff;
    }

    .list-store .item:hover {
        background: var(--mainColor);
        color: #fff;
    }

    .list-store .item.active {
        background: var(--mainColor);
        color: #fff;
    }



    @media (min-width: 768px) {}

    @media (min-width: 1400px) {}
</style>


<div class="row bg-primary px-6 py-3">
    <div class="p-3 bg-white rounded">
        <h4 style="color: var(--mainColor);" class="fw-bolder mb-3">
            Hệ thống cửa hàng
        </h4>
        <div class="row pb-3 g-2">
            <div class="col-xxl-3 col-6">
                <div class="item-info-shop item-1 position-relative ps-3 py-2 rounded-10"
                    style="background-color: #ff9800;">
                    <p class="fs-5 m-0 text-white">
                        Cửa hàng
                    </p>
                    <p class="fs-2 fw-bold m-0 text-white">
                        45
                    </p>
                </div>
            </div>
            <div class="col-xxl-3 col-6">
                <div class="item-info-shop item-2 position-relative ps-3 py-2 rounded-10"
                    style="background-color: #03a9f4;">
                    <p class="fs-5 m-0 text-white">
                        Cửa hàng
                    </p>
                    <p class="fs-2 fw-bold m-0 text-white">
                        45
                    </p>
                </div>
            </div>
            <div class="col-xxl-3 col-6">
                <div class="item-info-shop item-3 position-relative ps-3 py-2 rounded-10"
                    style="background-color: #4caf50;">
                    <p class="fs-5 m-0 text-white">
                        Cửa hàng
                    </p>
                    <p class="fs-2 fw-bold m-0 text-white">
                        45
                    </p>
                </div>
            </div>
            <div class="col-xxl-3 col-6">
                <div class="item-info-shop item-4 position-relative ps-3 py-2 rounded-10"
                    style="background-color: #9c27b0;">
                    <p class="fs-5 m-0 text-white">
                        Cửa hàng
                    </p>
                    <p class="fs-2 fw-bold m-0 text-white">
                        45
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-4">
                <div style="background: var(--lightLeftColBackground);" class="h-100 p-2 p-lg-3 rounded">
                    <div class="form-group m-0">
                        <label class="fw-bold text-uppercase position-relative mb-2">Chọn tỉnh/ thành phố</label>
                        <label class="d-block mb-1">
                            <select class="form-select" aria-label="Default select example">
                                <option value="" disabled="" selected="">Chọn tỉnh/ thành phố</option>
                                <option value="Hà Nội">Hà Nội</option>
                                <option value="Hải Phòng">Hải Phòng</option>
                            </select>
                        </label>
                    </div>
                    <div class="resultStore overflow-auto pt-1">
                        <div class="list-store pe-1">
                            <div class="item active position-relative p-1 mb-1 rounded checked">
                                <div class="fw-bold fs-6">Mew Long Biên</div>
                                <div>Mail: mew_longbien@mew.vn</div>
                                <div>Hotline: 937 079 668</div>
                                <div>Số 34 Ngõ 2 Ngọc Thụy, Ngọc Thụy - Long Biên</div>
                            </div>
                            <div class="item position-relative p-1 mb-1 rounded">
                                <div class="fw-bold">Mew Ba Đình</div>
                                <div>Mail: mew_badinh@mew.vn</div>
                                <div>Hotline: 0936 079 888</div>
                                <div>266 Đội Cấn - Ba Đình</div>
                            </div>
                            <div class="item position-relative p-1 mb-1 rounded">
                                <div class="fw-bold fs-6">Mew Cầu Giấy</div>
                                <div>Mail: mew_caugiay@mew.vn</div>
                                <div>Hotline: 0975 99 77 36</div>
                                <div>Ngõ 110 Trần Duy Hưng, Trung Hoà - Cầu Giấy</div>
                            </div>
                            <div class="item position-relative p-1 mb-1 rounded">
                                <div class="fw-bold fs-6">Mew Hoàn Kiếm</div>
                                <div>Mail: mew_hoankiem@mew.vn</div>
                                <div>Hotline: 0936 079 868</div>
                                <div>2 Tràng Thi, Hàng Trống - Hoàn Kiếm</div>
                            </div>
                            <div class="item position-relative p-1 mb-1 rounded">
                                <div class="fw-bold fs-6">Mew Đống Đa</div>
                                <div>Mail: mew_dongda@mew.vn</div>
                                <div>Hotline: 0936 079 887</div>
                                <div>43 Ngõ 38 Ngô Sỹ Liên - Đống Đa</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-8">
                <iframe style="width: 100%; height: 100%; min-height: 300px;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.623471534505!2d105.86742361562092!3d21.047746692504173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abd38ceedb19%3A0x31b39ed5c7a6a1b4!2zTmfDtSAyIE5n4buNYyBUaOG7pXksIExvbmcgQmnDqm4sIEjDoCBO4buZaSwgVmlldG5hbQ!5e0!3m2!1sen!2s!4v1640683824037!5m2!1sen!2s"
                    ,https:="" www.google.com="" maps=""
                    embed?pb="!1m18!1m12!1m3!1d3723.623471534505!2d105.86742361562092!3d21.047746692504173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abd38ceedb19%3A0x31b39ed5c7a6a1b4!2zTmfDtSAyIE5n4buNYyBUaOG7pXksIExvbmcgQmnDqm4sIEjDoCBO4buZaSwgVmlldG5hbQ!5e0!3m2!1sen!2s!4v1640683824037!5m2!1sen!2s"
                    allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
</div>