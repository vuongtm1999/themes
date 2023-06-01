<style>
    .px-6 {
        padding-left: 3vw;
        padding-right: 3vw;
    }

    .branches-wrapper {
        max-height: 532px;
        overflow-y: auto;
    }

    .branches-wrapper>div.active {
        background-color: #fff4e8;
    }

    .branch-address {
        opacity: 0;
        transition: opacity .2s ease-in;
        will-change: opacity;
        color: var(--color-text-white);
        background-color: var(--color-red-main);
    }

    .branch-address-wrapper:hover .branch-address {
        opacity: 1;
    }


    /* md */
    @media (min-width: 768px) {
        .img-responsive-wrapper {
            min-height: 560px;
        }

        .img-responsive {
            object-fit: cover;
            object-position: left;
        }

        .px-6 {
            padding-left: 5vw;
            padding-right: 5vw;
        }

        .branch-address {
            width: 90%;
        }
    }

    /* PC */
    @media (min-width: 1400px) {
        .img-responsive-wrapper {
            min-height: unset;
        }

        .img-responsive {
            object-fit: unset;
            object-position: unset;
        }

        .px-6 {
            padding-left: 7vw;
            padding-right: 7vw;
        }

        .branch-address {
            width: max-content;
        }
    }
</style>

<div class="row">
    <div class="px-0 img-responsive-wrapper">
        <img class="img-fluid h-100 img-responsive" src="public/demo/banner-lien-he.jpg" alt="">
    </div>

    <h2 class="text-red text-uppercase mb-3 text-center mt-5">dịch vụ khách hàng</h2>

    <div class="d-flex justify-content-center">
        <div class="col-xxl-3">
            <p class="p1 text-center">Hướng tới chất lượng dịch vụ cao cấp, NTJ chú trọng mang đến trải nghiệm tốt nhất
                cho Quý khách, đồng thời sẵn sàng lắng nghe mọi chia sẻ và hỗ trợ tận tình trong suốt quá trình sử dụng
                sản phẩm.</p>
        </div>
    </div>

    <h2 class="text-red text-uppercase mb-3 text-center mt-4">LIÊN HỆ</h2>

    <div class="d-flex justify-content-center">
        <div class="col-6">
            <div class="d-flex flex-wrap">
                <div class="col-xxl-4 col-6 py-2">
                    <a class="d-flex justify-content-xxl-center justify-content-md-start" href="#">
                        <img style="width: 16px;" class="img-fluid me-2" src="public/demo/email.svg" alt="">
                        <span>EMAIL</span>
                    </a>
                </div>
                <div class="col-xxl-4 col-6 py-2">
                    <a class="d-flex justify-content-xxl-center justify-content-md-start" href="#">
                        <img style="width: 16px;" class="img-fluid me-2" src="public/demo/phone.svg" alt="">
                        <span>1800 599 973</span>
                    </a>
                </div>
                <div class="col-xxl-4 col-6 py-2">
                    <a class="d-flex justify-content-xxl-center justify-content-md-start" href="#">
                        <img style="width: 16px;" class="img-fluid me-2" src="public/demo/calendar.svg" alt="">
                        <span>ĐẶT HẸN</span>
                    </a>
                </div>
                <div class="col-xxl-4 col-6 py-2">
                    <a class="d-flex justify-content-xxl-center justify-content-md-start" href="#">
                        <img style="width: 16px;" class="img-fluid me-2" src="public/demo/facebook-red.svg" alt="">
                        <span>FACEBOOK</span>
                    </a>
                </div>
                <div class="col-xxl-4 col-6 py-2">
                    <a class="d-flex justify-content-xxl-center justify-content-md-start" href="#">
                        <img style="width: 16px;" class="img-fluid me-2" src="public/demo/zalo-red.svg" alt="">
                        <span>ZALO</span>
                    </a>
                </div>
                <div class="col-xxl-4 col-6 py-2">
                    <a class="d-flex justify-content-xxl-center justify-content-md-start" href="#">
                        <img style="width: 16px;" class="img-fluid me-2" src="public/demo/insta-red.svg" alt="">
                        <span>INSTAGRAM</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex flex-wrap mt-3 px-6">
        <div style="height: 652px;" class="col-xxl-4 col-12 pe-xxl-5 pe-0">
            <h5 class="text-center fw-bold text-red mt-2">HỆ THỐNG CHI NHÁNH</h5>
            <div class="d-flex justify-content-between align-items-center mt-5">
                <span class="fs-6" style="white-space: nowrap; margin-right: 10px;">Khu vực</span>
                <select class="fs-5 border-0 outline-0 text-uppercase">
                    <option value="0">Thành phố Mỹ Tho</option>
                    <option value="1">Thành phố Vĩnh Long</option>
                    <option value="2">Thành phố Long Xuyên</option>
                    <option value="3">Thành phố Cần Thơ</option>
                    <option value="4">Thành phố Sa Đéc</option>
                    <option value="5">Thành phố Trà Vinh</option>
                    <option value="6">Thành phố Tân An</option>
                </select>
            </div>

            <div class="mt-4 branches-wrapper">
                <div class="pointer border-top border-1 border-warning py-3 ps-2">
                    <h5>Chi Nhánh NTJ06</h5>
                    <p>1A Đường Hùng Vương,<br>
                        Phường 1, TP. Mỹ Tho, tỉnh Tiền Giang</p>
                    <p>Điện thoại: 0812 536 333</p>
                    <span>Giờ làm việc: 08:00 - 12:00, 13:30 - 20:00</span>
                </div>
                <div class="pointer border-top border-1 border-warning py-3 ps-2">
                    <h5>Chi Nhánh NTJ06</h5>
                    <p>1A Đường Hùng Vương,<br>
                        Phường 1, TP. Mỹ Tho, tỉnh Tiền Giang</p>
                    <p>Điện thoại: 0812 536 333</p>
                    <span>Giờ làm việc: 08:00 - 12:00, 13:30 - 20:00</span>
                </div>
                <div class="pointer border-top border-1 border-warning py-3 ps-2">
                    <h5>Chi Nhánh NTJ06</h5>
                    <p>1A Đường Hùng Vương,<br>
                        Phường 1, TP. Mỹ Tho, tỉnh Tiền Giang</p>
                    <p>Điện thoại: 0812 536 333</p>
                    <span>Giờ làm việc: 08:00 - 12:00, 13:30 - 20:00</span>
                </div>
                <div class="pointer border-top border-1 border-warning py-3 ps-2">
                    <h5>Chi Nhánh NTJ06</h5>
                    <p>1A Đường Hùng Vương,<br>
                        Phường 1, TP. Mỹ Tho, tỉnh Tiền Giang</p>
                    <p>Điện thoại: 0812 536 333</p>
                    <span>Giờ làm việc: 08:00 - 12:00, 13:30 - 20:00</span>
                </div>
            </div>

        </div>
        <div class="col-xxl-8 col-12">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.925050868642!2d106.6749189146841!3d10.81704766140073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528e1f241211f%3A0xc9ef195798144b1f!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBN4bufIFRQLkhDTSAtIEPGoSBz4bufIDM!5e0!3m2!1svi!2sus!4v1681305845695!5m2!1svi!2sus"
                width="100%" height="652px" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>

    <div class="py-5 bg-primary px-6">
        <h4 class="text-center text-red fw-bolder">HỆ THỐNG CHI NHÁNH TIÊU BIỂU</h4>
        <div style="margin-left: -1rem; margin-right: -1rem;" class="d-flex flex-wrap pb-5">
            <div class="col-xxl-6 col-12 p-xxl-3 p-2 pt-md-0 position-relative branch-address-wrapper">
                <img class="img-fluid" src="public/demo/chi_nhanh_1.jpg" alt="">
                <div class="position-absolute top-50 start-50 translate-middle p-3 pe-5 branch-address">
                    <div>Chi Nhánh NTJ05 Shophouse Cần Thơ</div>
                    <div>209 Đường 30/4, P.Xuân Khánh,<br>
                        Quận Ninh Kiều, TP. Cần Thơ</div>
                    <div>0917 981 865</div>
                    <h6 class="text-uppercase font-weight-bold mt-4">
                        <a class="text-yellow hover-yellow" href="#" target="_blank">
                            Bản đồ <i class="fa-solid fa-caret-right fs-5"></i>
                        </a>
                    </h6>
                </div>
            </div>
            <div class="col-xxl-6 col-12 p-xxl-3 p-2 position-relative branch-address-wrapper">
                <img class="img-fluid" src="public/demo/chi_nhanh_1.jpg" alt="">
                <div class="position-absolute top-50 start-50 translate-middle p-3 pe-5 branch-address">
                    <div>Chi Nhánh NTJ05 Shophouse Cần Thơ</div>
                    <div>209 Đường 30/4, P.Xuân Khánh,<br>
                        Quận Ninh Kiều, TP. Cần Thơ</div>
                    <div>0917 981 865</div>
                    <h6 class="text-uppercase font-weight-bold mt-4">
                        <a class="text-yellow hover-yellow" href="#" target="_blank">
                            Bản đồ <i class="fa-solid fa-caret-right fs-5"></i>
                        </a>
                    </h6>
                </div>
            </div>
            <div class="col-xxl-6 col-12 p-xxl-3 p-2">
                <img class="img-fluid" src="public/demo/chi_nhanh_2.jpg" alt="">
            </div>
            <div class="col-xxl-6 col-12 p-xxl-3 p-2">
                <img class="img-fluid" src="public/demo/chi_nhanh_2.jpg" alt="">
            </div>
            <div class="col-xxl-6 col-12 p-xxl-3 p-2">
                <img class="img-fluid" src="public/demo/chi_nhanh_2.jpg" alt="">
            </div>
            <div class="col-xxl-6 col-12 p-xxl-3 p-2">
                <img class="img-fluid" src="public/demo/chi_nhanh_2.jpg" alt="">
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {

        $(".branches-wrapper > div").click(function () {

            // Cach 1 (forEach la js)
            // $(".branches-wrapper > div").toArray().forEach(branch => {
            //     branch.classList.remove('active')
            // });

            // Cach 2 (full jquery)
            $(".branches-wrapper > div").each(function () {
                $(this).removeClass('active');
            });

            $(this).addClass("active");
        });
    });
</script>