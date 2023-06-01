<style>
    .nav_item>a>span:before {
        content: "";
        background: var(--mainColor);
        height: 1px;
        width: 100%;
        bottom: 0;
        left: 0;
        position: absolute;
        display: none;
    }

    .nav_item:hover>a>span:before {
        display: block;
    }

    .nav_item:hover>a {
        color: var(--mainColor);
    }

    .js-toggle.active {
        color: var(--mainColor);
    }

    .js-toggle.active>span::before {
        display: block;
    }

    .js-toggle .bi-chevron-down {
        transition: all 0.3s linear;
    }

    .js-toggle.active .bi-chevron-down {
        transform: rotate(180deg);
    }

    .aboutus:hover {
        color: #333 !important;
    }

    .bg-img-news {
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        padding-top: 75%;
    }

    .line-3 {
        font-weight: 400;
        line-height: 28px;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 3;
        text-overflow: ellipsis;
        overflow: hidden;
        color: #828282;
    }


    .img-thumbnail-2 {
        width: 100%;
        height: 160px;
    }


    .bread-crumb {
        border-top: unset;
    }

    @media (min-width: 768px) {
        .img-thumbnail-2 {
            width: 160px;
            height: 120px;
        }

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
        <span class="text-main"><strong>Đặt lịch</strong></s>
    </div>
</div>

<div class="row px-6">
    <div class="col-xxl-3 col-12 order-xxl-1 order-2 pt-md-0 pt-4">
        <h3 class="text-main mb-4">Danh mục tin tức</h3>
        <div class="mb-2 nav_item">
            <a href="index.php"><span class="position-relative">Trang chủ</span></a>
        </div>
        <div class="mb-2 nav_item mb-4">
            <a href="index.php?p=listproducts" class="d-flex justify-content-between mb-2 js-toggle"
                data-bs-toggle="collapse" data-bs-target="#collapseProduct">
                <span class="position-relative">Sản phẩm</span> <i class="bi bi-chevron-down pointer"></i>
            </a>

            <div class="collapse ps-2" id="collapseProduct" style="">
                <div class="mb-2 nav_item">
                    <a href="index.php" class="d-flex justify-content-between js-toggle" data-bs-toggle="collapse"
                        data-bs-target="#collapseProduct2">
                        <span class="position-relative">Sản phẩm nổi bật</span> <i
                            class="bi bi-chevron-down pointer"></i>
                    </a>
                    <div class="collapse ps-4" id="collapseProduct2">
                        <div class="mb-2 nav_item">
                            <a href="index.php"><span class="position-relative">Sơn thường</span></a>
                        </div>
                        <div class="mb-2 nav_item">
                            <a href="index.php"><span class="position-relative">Sơn gel</span></a>
                        </div>
                    </div>
                </div>
                <div class="mb-2 nav_item">
                    <a href="index.php"><span class="position-relative">Sản phẩm nổi mới</span></a>
                </div>
                <div class="mb-2 nav_item">
                    <a href="index.php"><span class="position-relative">Sản phẩm khuyến mãi</span></a>
                </div>
                </ul>
            </div>
            <div class="mb-2 nav_item">
                <a href="index.php"><span class="position-relative">Tin tức</span></a>
            </div>
            <div class="mb-2 nav_item">
                <a href="index.php"><span class="position-relative">Đặt lịch</span></a>
            </div>
            <div class="mb-2 nav_item">
                <a href="index.php"><span class="position-relative">Liên hệ</span></a>
            </div>
        </div>

        <h3 class="text-main mb-4"><a class="aboutus text-main" href="index.php?p=aboutus">Về chúng tôi</a></h3>
        <div class="mb-3">
            <div class="mb-3">
                <img class="img-fluid" src="public/demo/banner-about-blog.png" alt="">
            </div>

            <p>Tĩnh lặng và dịu sâu – đó là cảm giác đầu tiên khi khẽ mở cánh cửa gỗ nâu quen thuộc Calming spa muốn
                mang đến cho khách hàng – những người bạn của...</p>

            <a class="btn my-btn-primary rounded-pill px-4 py-2" href="index.php?p=aboutus">Đọc tiếp</a>
        </div>
    </div>

    <div class="col-xxl-9 col-12 order-xxl-2 order-1">
        <div class="row">
            <div class="col-xxl-6 col-12">
                <div class="bg-img-news" style="background-image: url(public/demo/item-news-1.png);"></div>
                <h5 class="my-4 fw-bold">
                    <a href="index.php?p=detailnews" title="Một Cách Đơn Giản &amp; Nhanh Chóng Giúp Tẩy Trắng Móng">Một
                        Cách Đơn Giản &amp; Nhanh
                        Chóng Giúp Tẩy Trắng Móng
                    </a>
                </h5>
                <p class="line-3">
                    Móng tay bị ngả vàng có lẽ là trường hợp khá phổ biến đối với các chị em thường xuyên sơn móng mà
                    không chăm sóc đúng cách. Để cải thiện tình trạng này, giúp cho móng trắng lên chỉ với một cách đơn
                    giản và nhanh chóng, sử dụng baking soda.
                    Nguyên Liệu
                    2 thìa baking soda
                    1 thìa hydrogen peroxide 3%
                    Cách Thực Hiện
                    Trộn hai thành phần trên lại với nhau. Nếu hỗn hợp không đủ sánh đặc hoặc nhiều bạn có thể thêm
                    nguyên liệu. Nhúng móng tay của bạn vào hỗn hợp trên, để yên trong 20-30 phút. Trong khoảng thời
                    gian đó,
                    bạn có thể sử dụng bàn chải để đánh móng. Sau khi hoàn thành, rửa tay lại với nước ấm và thoa kem
                    dưỡng da.
                    Việc chăm sóc móng, làm trắng móng tay chỉ cần những bước thực hiện đơn giản tại nhà. Bạn không cần
                    phải tốn nhiều thời gian đến tiệm nail, đặc biệt có thể tranh thủ thực hiện khi đang xem tivi, đọc
                    báo hay thư giãn tại nhà. Thật tiện lợi phải không?
                </p>
            </div>
            <div class="col-xxl-6 col-12">
                <div class="bg-img-news" style="background-image: url(public/demo/item-news-1.png);"></div>
                <h5 class="my-4 fw-bold">
                    <a href="index.php?p=detailnews" title="Một Cách Đơn Giản &amp; Nhanh Chóng Giúp Tẩy Trắng Móng">Một
                        Cách Đơn Giản &amp; Nhanh
                        Chóng Giúp Tẩy Trắng Móng
                    </a>
                </h5>
                <p class="line-3">
                    Móng tay bị ngả vàng có lẽ là trường hợp khá phổ biến đối với các chị em thường xuyên sơn móng mà
                    không chăm sóc đúng cách. Để cải thiện tình trạng này, giúp cho móng trắng lên chỉ với một cách đơn
                    giản và nhanh chóng, sử dụng baking soda.
                    Nguyên Liệu
                    2 thìa baking soda
                    1 thìa hydrogen peroxide 3%
                    Cách Thực Hiện
                    Trộn hai thành phần trên lại với nhau. Nếu hỗn hợp không đủ sánh đặc hoặc nhiều bạn có thể thêm
                    nguyên liệu. Nhúng móng tay của bạn vào hỗn hợp trên, để yên trong 20-30 phút. Trong khoảng thời
                    gian đó,
                    bạn có thể sử dụng bàn chải để đánh móng. Sau khi hoàn thành, rửa tay lại với nước ấm và thoa kem
                    dưỡng da.
                    Việc chăm sóc móng, làm trắng móng tay chỉ cần những bước thực hiện đơn giản tại nhà. Bạn không cần
                    phải tốn nhiều thời gian đến tiệm nail, đặc biệt có thể tranh thủ thực hiện khi đang xem tivi, đọc
                    báo hay thư giãn tại nhà. Thật tiện lợi phải không?
                </p>
            </div>
        </div>

        <div class="row pt-md-5 gy-4 pt-3">
            <div class="col-xxl-6 col-12 mb-md-5 pb-md-4">
                <div class="d-md-flex d-block">
                    <div class="me-3 mb-3">
                        <img class="img-thumbnail-2" src="public/demo/item-news-1.jpg" alt="">
                    </div>
                    <div>
                        <h6 class="mb-3 fw-bold">
                            <a href="index.php?p=detailnews">
                                CÁCH DƯỠNG MÓNG TAY TẠI NHÀ SAU KHI LÀM NAIL
                            </a>
                        </h6>
                        <p class="line-3 mb-0">
                            Móng tay bị ngả vàng có lẽ là trường hợp khá phổ biến đối với các chị em thường xuyên sơn
                            móng mà
                            không chăm sóc đúng cách. Để cải thiện tình trạng này, giúp cho móng trắng lên chỉ với một
                            cách đơn
                            giản và nhanh chóng, sử dụng baking soda.
                            Nguyên Liệu
                            2 thìa baking soda
                            1 thìa hydrogen peroxide 3%
                            Cách Thực Hiện
                            Trộn hai thành phần trên lại với nhau. Nếu hỗn hợp không đủ sánh đặc hoặc nhiều bạn có thể
                            thêm
                            nguyên liệu. Nhúng móng tay của bạn vào hỗn hợp trên, để yên trong 20-30 phút. Trong khoảng
                            thời
                            gian đó,
                            bạn có thể sử dụng bàn chải để đánh móng. Sau khi hoàn thành, rửa tay lại với nước ấm và
                            thoa kem
                            dưỡng da.
                            Việc chăm sóc móng, làm trắng móng tay chỉ cần những bước thực hiện đơn giản tại nhà. Bạn
                            không cần
                            phải tốn nhiều thời gian đến tiệm nail, đặc biệt có thể tranh thủ thực hiện khi đang xem
                            tivi, đọc
                            báo hay thư giãn tại nhà. Thật tiện lợi phải không?
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-12 mb-md-5 pb-md-4">
                <div class="d-md-flex d-block">
                    <div class="me-3 mb-3">
                        <img class="img-thumbnail-2" src="public/demo/item-news-3.png" alt="">
                    </div>
                    <div>
                        <h6 class="mb-3 fw-bold">
                            <a href="index.php?p=detailnews">
                                CÁCH DƯỠNG MÓNG TAY TẠI NHÀ SAU KHI LÀM NAIL
                            </a>
                        </h6>
                        <p class="line-3 mb-0">
                            Móng tay bị ngả vàng có lẽ là trường hợp khá phổ biến đối với các chị em thường xuyên sơn
                            móng mà
                            không chăm sóc đúng cách. Để cải thiện tình trạng này, giúp cho móng trắng lên chỉ với một
                            cách đơn
                            giản và nhanh chóng, sử dụng baking soda.
                            Nguyên Liệu
                            2 thìa baking soda
                            1 thìa hydrogen peroxide 3%
                            Cách Thực Hiện
                            Trộn hai thành phần trên lại với nhau. Nếu hỗn hợp không đủ sánh đặc hoặc nhiều bạn có thể
                            thêm
                            nguyên liệu. Nhúng móng tay của bạn vào hỗn hợp trên, để yên trong 20-30 phút. Trong khoảng
                            thời
                            gian đó,
                            bạn có thể sử dụng bàn chải để đánh móng. Sau khi hoàn thành, rửa tay lại với nước ấm và
                            thoa kem
                            dưỡng da.
                            Việc chăm sóc móng, làm trắng móng tay chỉ cần những bước thực hiện đơn giản tại nhà. Bạn
                            không cần
                            phải tốn nhiều thời gian đến tiệm nail, đặc biệt có thể tranh thủ thực hiện khi đang xem
                            tivi, đọc
                            báo hay thư giãn tại nhà. Thật tiện lợi phải không?
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-12 mb-md-5 pb-md-4">
                <div class="d-md-flex d-block">
                    <div class="me-3 mb-3">
                        <img class="img-thumbnail-2" src="public/demo/item-news-1.jpg" alt="">
                    </div>
                    <div>
                        <h6 class="mb-3 fw-bold">
                            <a href="index.php?p=detailnews">
                                CÁCH DƯỠNG MÓNG TAY TẠI NHÀ SAU KHI LÀM NAIL
                            </a>
                        </h6>
                        <p class="line-3 mb-0">
                            Móng tay bị ngả vàng có lẽ là trường hợp khá phổ biến đối với các chị em thường xuyên sơn
                            móng mà
                            không chăm sóc đúng cách. Để cải thiện tình trạng này, giúp cho móng trắng lên chỉ với một
                            cách đơn
                            giản và nhanh chóng, sử dụng baking soda.
                            Nguyên Liệu
                            2 thìa baking soda
                            1 thìa hydrogen peroxide 3%
                            Cách Thực Hiện
                            Trộn hai thành phần trên lại với nhau. Nếu hỗn hợp không đủ sánh đặc hoặc nhiều bạn có thể
                            thêm
                            nguyên liệu. Nhúng móng tay của bạn vào hỗn hợp trên, để yên trong 20-30 phút. Trong khoảng
                            thời
                            gian đó,
                            bạn có thể sử dụng bàn chải để đánh móng. Sau khi hoàn thành, rửa tay lại với nước ấm và
                            thoa kem
                            dưỡng da.
                            Việc chăm sóc móng, làm trắng móng tay chỉ cần những bước thực hiện đơn giản tại nhà. Bạn
                            không cần
                            phải tốn nhiều thời gian đến tiệm nail, đặc biệt có thể tranh thủ thực hiện khi đang xem
                            tivi, đọc
                            báo hay thư giãn tại nhà. Thật tiện lợi phải không?
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-12 mb-md-5 pb-md-4">
                <div class="d-md-flex d-block">
                    <div class="me-3 mb-3">
                        <img class="img-thumbnail-2" src="public/demo/item-news-1.jpg" alt="">
                    </div>
                    <div>
                        <h6 class="mb-3 fw-bold">
                            <a href="index.php?p=detailnews">
                                CÁCH DƯỠNG MÓNG TAY TẠI NHÀ SAU KHI LÀM NAIL
                            </a>
                        </h6>
                        <p class="line-3 mb-0">
                            Móng tay bị ngả vàng có lẽ là trường hợp khá phổ biến đối với các chị em thường xuyên sơn
                            móng mà
                            không chăm sóc đúng cách. Để cải thiện tình trạng này, giúp cho móng trắng lên chỉ với một
                            cách đơn
                            giản và nhanh chóng, sử dụng baking soda.
                            Nguyên Liệu
                            2 thìa baking soda
                            1 thìa hydrogen peroxide 3%
                            Cách Thực Hiện
                            Trộn hai thành phần trên lại với nhau. Nếu hỗn hợp không đủ sánh đặc hoặc nhiều bạn có thể
                            thêm
                            nguyên liệu. Nhúng móng tay của bạn vào hỗn hợp trên, để yên trong 20-30 phút. Trong khoảng
                            thời
                            gian đó,
                            bạn có thể sử dụng bàn chải để đánh móng. Sau khi hoàn thành, rửa tay lại với nước ấm và
                            thoa kem
                            dưỡng da.
                            Việc chăm sóc móng, làm trắng móng tay chỉ cần những bước thực hiện đơn giản tại nhà. Bạn
                            không cần
                            phải tốn nhiều thời gian đến tiệm nail, đặc biệt có thể tranh thủ thực hiện khi đang xem
                            tivi, đọc
                            báo hay thư giãn tại nhà. Thật tiện lợi phải không?
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $(".js-toggle").click(function () {
            $(this).toggleClass("active");
        });
    });
</script>