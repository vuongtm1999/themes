<style>
    .bread-crumb {
        border-top: unset;
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

    .article-title {
        color: #5d6567;
        font-weight: 700;
        font-size: 18px;
        margin: 0;
        padding: 0 0 15px;
        border-bottom: 1px solid #d0cdc7;
        position: relative;
        line-height: 1.4;
    }

    .article-title:before {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        width: 27px;
        background: #5d6567;
        height: 2px;
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
        <span class="home">
            <a class="text-black-50 small" href="index.php?p=news"><span>Blog</span></a>
            <span class="text-black-50 mx-1">/</span>
        </span>
        <span class="text-main"><strong>
                Một Cách Đơn Giản & Nhanh Chóng Giúp Tẩy Trắng Móng</strong></span>
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
        <div class="mb-3">
            <img class="img-fluid" src="public/demo/banner-detail-news.png" alt="">
        </div>

        <p class="mb-1 text-black-50">
            26/05/2021
        </p>
        <h5 class="article-title mb-3">
            Một Cách Đơn Giản &amp; Nhanh Chóng Giúp Tẩy Trắng Móng
        </h5>

        <div class="article-content">
            <div>
                <p>Móng tay bị ngả vàng có lẽ là trường hợp khá phổ biến đối với các chị em thường xuyên sơn móng mà
                    không chăm sóc đúng cách. Để cải thiện tình trạng này, giúp cho móng trắng lên chỉ với một cách đơn
                    giản và nhanh chóng, sử dụng baking soda.</p>
                <h3>Nguyên Liệu</h3>
                <p>2 thìa baking soda</p>
                <p>1 thìa hydrogen peroxide 3%</p>
                <h2>Cách Thực Hiện</h2>
                <p>Trộn hai thành phần trên lại với nhau. Nếu hỗn hợp không đủ sánh đặc hoặc nhiều bạn có thể thêm
                    nguyên liệu. Nhúng móng tay của bạn vào hỗn hợp trên, để yên trong 20-30 phút. Trong khoảng thời
                    gian đó,<br>
                    bạn có thể sử dụng bàn chải để đánh móng. Sau khi hoàn thành, rửa tay lại với nước ấm và thoa kem
                    dưỡng da.</p>
                <p>Việc chăm sóc móng, làm trắng móng tay chỉ cần những bước thực hiện đơn giản tại nhà. Bạn không cần
                    phải tốn nhiều thời gian đến tiệm nail, đặc biệt có thể tranh thủ thực hiện khi đang xem tivi, đọc
                    báo hay thư giãn tại nhà. Thật tiện lợi phải không?</p>
            </div>
        </div>

        <div class="row py-3 mt-3 border-top border-bottom">
            <div class="col-md-6 col-12 small">
                <span>Tag:</span>
                <a href="index.php?p=news">Làm đẹp</a>
                <a href="index.php?p=news">Nail</a>
            </div>
            <div class="col-md-6 col-12 text-end">
                <i class="bi bi-share-fill fs-5"></i>
                <span class="me-1">Chia sẻ bài viết: </span>
                <span class="me-1"><i class="bi bi-twitter fs-5"></i> </span>
                <span class="me-1">
                    <i class="bi bi-google"></i>
                </span>
            </div>
        </div>
    </div>
</div>

<div class="row px-6">
    <h2 class="mb-4 pb-1 mt-5"><a style="font-family: 'svn-haptic_scriptregular';" class="text-main"
            href="index.php?=news">Bài viết liên quan</a></h2>
    <div class="row d-md-flex d-none overflow-auto">
        <div class="col-md-4 col-12">
            <div class="bg-img-news rounded-16" style="background-image: url(public/demo/item-news-1.png);"></div>
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
        <div class="col-md-4 col-12">
            <div class="bg-img-news rounded-16" style="background-image: url(public/demo/item-news-1.png);"></div>
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
        <div class="col-md-4 col-12">
            <div class="bg-img-news rounded-16" style="background-image: url(public/demo/item-news-1.png);"></div>
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

    <div class="news-slider owl-theme owl-carousel d-block d-md-none">
        <div class="col-md-4 col-12">
            <div class="bg-img-news rounded-16" style="background-image: url(public/demo/item-news-1.png);"></div>
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
        <div class="col-md-4 col-12">
            <div class="bg-img-news rounded-16" style="background-image: url(public/demo/item-news-1.png);"></div>
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
        <div class="col-md-4 col-12">
            <div class="bg-img-news rounded-16" style="background-image: url(public/demo/item-news-1.png);"></div>
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
</div>

<script>
    $(document).ready(function () {
        $(".js-toggle").click(function () {
            $(this).toggleClass("active");
        });

        $('.news-slider').owlCarousel({
            center: false,
            loop: false,
            margin: 0,
            dots: false,
            margin: 35,
            autoplay: false,
            responsive: {
                0: {
                    items: 1,
                    margin: 18,
                    nav: false,
                },
                768: {
                    items: 1,
                    nav: false,
                },
                1400: {
                    items: 1
                }
            }
        });
    });
</script>