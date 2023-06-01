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

    .nav-cate .nav-item:hover>a {
        color: #d5dd02 !important;
    }

    .nav-cate .nav-item:hover>i {
        color: #d5dd02 !important;
    }

    .nav-cate .nav-item a {
        height: initial;
        line-height: initial;
        display: block;
        color: #707070;
        font-size: 14px;
    }

    .nav-cate .nav-item {
        display: block;
        width: 100%;
    }

    .nav-cate .nav-link {
        padding: 8px 0px;
    }

    .icon-nav {
        width: 30px;
        height: 30px;
        display: flex;
        justify-content: center;
        align-items: center;
        position: absolute;
        top: 0;
        right: 0;
        transition: all 0.3s linear;
    }

    .dropdown-menu.news-dropdown {
        display: none;
    }

    .sub-menu {
        padding: 4px 0 10px 20px;
    }

    .route-180 {
        transform: rotate(90deg);
    }

    .image-blog {
        display: block;
        overflow: hidden;
    }

    .blog_item {
        min-height: 80px;
        padding: 20px 0;
    }

    .blog_item:not(:last-child) {
        border-bottom: 1px solid #ebebeb;
    }

    .my-bg-img {
        background-position: top center;
        background-repeat: no-repeat;
        background-size: cover;
        padding-top: 55%;
        transition: all 0.3s linear;
    }

    .date_blog {
        position: absolute;
        bottom: -1px;
        left: 0px;
        background: #fff;
        opacity: 0.9;
        padding: 10px 20px 8px 20px;
        font-size: 13px;
        color: #707070;
    }

    .scale_hover:hover .my-bg-img {
        transform: scale(1.025);
    }

    .page-link:hover {
        background-color: #d5dd02;
        color: #fff;
        background: #d5dd02;
        font-weight: 400;
    }

    .page-item {
        padding: 0 5px;
    }

    .page-item .page-link {
        background-color: white;
        color: #7d7d7d;
        border-radius: 50%;
        width: 31px;
        height: 31px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .page-item.active .page-link {
        border: 1px solid #d5dd02;
    }

    .page-item.active .page-link {
        background-color: white;
        color: #7d7d7d;
        border-radius: 50%;
    }

    .page-item:last-child .page-link {
        border-top-right-radius: 50% !important;
        border-bottom-right-radius: 50% !important;
    }



    @media (min-width: 768px) {}

    @media (min-width: 1400px) {
        .blog_left_base {
            padding-right: 68px;
        }

        .right-content:before {
            content: "";
            position: absolute;
            top: 0;
            left: -15px;
            background: #ebebeb;
            width: 1px;
            height: 100%;
        }
    }
</style>

<div class="row breadcrumb_background px-6">
    <div>
        <a href="/"><span>Trang chủ</span></a>
        <span class="mx-3"><i class="fa fa-angle-right"></i></span>
        <strong><span>Tin tức</span></strong>
    </div>
    <h2 class="fw-bold">Tin tức</h3>
</div>

<div class="row px-6">
    <div class="col-xxl-4 col-12 blog_left_base order-xxl-1 order-2">
        <h5 class="fw-bold">Danh mục tin tức</h5>
        <ul style="border-bottom: 1px solid #ebebeb;" class="nav d-block nav-cate">
            <li class="nav-item"><a class="nav-link px-0" href="index.php">Trang chủ</a></li>
            <li class="nav-item"><a class="nav-link px-0" href="index.php?p=aboutus">Giới thiệu</a></li>
            <li class="nav-item position-relative">
                <a href="index.php?p=listproducts" class="nav-link d-flex justify-content-between">
                    Sản phẩm
                </a>
                <i data-bs-toggle="collapse" href="#collapseProduct-1" class="fa fa-angle-right icon-nav pointer"></i>
                <div class="collapse" id="collapseProduct-1">
                    <ul class="nav sub-menu">
                        <li class="nav-item position-relative">
                            <a class="nav-link" href="index.php?p=listproducts">Sản phẩm hot</a>
                            <i data-bs-toggle="collapse" href="#collapseProduct-2"
                                class="fa fa-angle-right icon-nav pointer"></i>

                            <div class="collapse" id="collapseProduct-2">
                                <ul class="nav sub-menu">
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?p=listproducts">Đồ dùng nhà bếp</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?p=listproducts">Đồ dùng dọn dẹp</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?p=listproducts">Đồ sứ đẹp</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?p=listproducts">Trang trí - Quà tặng</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?p=listproducts">Sản phẩm mới</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?p=listproducts">Đồ tiện ích thông minh</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?p=listproducts">Đồ dùng nhà bếp</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?p=listproducts">Đồ dùng phòng khách</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?p=listproducts">Đồ dùng phòng ngủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?p=listproducts">Đồ dùng dọn dẹp</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?p=listproducts">Trang trí - Quà tặng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?p=listproducts">Đồ dùng trẻ em</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?p=listproducts">Đồ sứ đẹp</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?p=listproducts">Sản phẩm mua nhiều</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?p=listproducts">Sản phẩm khuyến mãi</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item"><a class="nav-link" href="index.php?p=news">Tin tức</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php?p=contactus">Liên hệ</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php?p=listproducts">Sản phẩm nổi bật</a></li>
        </ul>

        <h5 class="fw-bold mt-5">Tin nổi bật</h5>
        <div class="d-flex blog_item">
            <div class="col-5">
                <a class="image-blog scale_hover" href="index.php?p=detailnews">
                    <img class="img-fluid w-100" src="public/demo/artical-1.jpg">
                </a>
            </div>
            <div class="col-7 ps-3">
                <a class="fs-6" href="index.php?p=detailnews">Những gợi ý lưu trữ đồ dùng nhà bếp gọn gàng và sạch sẽ
                    hơn</a>
            </div>
        </div>
        <div class="d-flex blog_item">
            <div class="col-5">
                <a class="image-blog scale_hover" href="index.php?p=detailnews">
                    <img class="img-fluid w-100" src="public/demo/artical-2.jpg">
                </a>
            </div>
            <div class="col-7 ps-3">
                <a class="fs-6" href="index.php?p=detailnews">Những gợi ý lưu trữ đồ dùng nhà bếp gọn gàng và sạch sẽ
                    hơn</a>
            </div>
        </div>
        <div class="d-flex blog_item">
            <div class="col-5">
                <a class="image-blog scale_hover" href="index.php?p=detailnews">
                    <img class="img-fluid w-100" src="public/demo/artical-2.jpg">
                </a>
            </div>
            <div class="col-7 ps-3">
                <a class="fs-6" href="index.php?p=detailnews">Những gợi ý lưu trữ đồ dùng nhà bếp gọn gàng và sạch sẽ
                    hơn</a>
            </div>
        </div>
        <div class="d-flex blog_item">
            <div class="col-5">
                <a class="image-blog scale_hover" href="index.php?p=detailnews">
                    <img class="img-fluid w-100" src="public/demo/artical-1.jpg">
                </a>
            </div>
            <div class="col-7 ps-3">
                <a class="fs-6" href="index.php?p=detailnews">Những gợi ý lưu trữ đồ dùng nhà bếp gọn gàng và sạch sẽ
                    hơn</a>
            </div>
        </div>
        <div class="d-flex blog_item">
            <div class="col-5">
                <a class="image-blog scale_hover" href="index.php?p=detailnews">
                    <img class="img-fluid w-100" src="public/demo/artical-1.jpg">
                </a>
            </div>
            <div class="col-7 ps-3">
                <a class="fs-6" href="index.php?p=detailnews">Những gợi ý lưu trữ đồ dùng nhà bếp gọn gàng và sạch sẽ
                    hơn</a>
            </div>
        </div>
    </div>
    <div class="col-xxl-8 col-12 right-content position-relative order-xxl-2 order-1 mb-5">
        <div class="row">
            <div class="col-xxl-6 col-md-6 col-12">
                <a class="d-block position-relative scale_hover overflow-hidden" href="index.php?p=detailnews">
                    <div class="my-bg-img article" style="background-image: url(public/demo/news-1.jpg);"></div>
                    <div class="date_blog"><i class="fas fa-calendar-alt me-2"></i>23/11/2018</div>
                </a>
                <h5 class="my-2">
                    <a class="fw-normal" href="index.php?p=detailnews"
                        title="Những gợi ý lưu trữ đồ dùng nhà bếp gọn gàng và sạch sẽ hơn">Những gợi ý
                        lưu trữ đồ dùng nhà bếp gọn gàng và sạch sẽ hơn</a>
                </h5>
                <p class="text-black-50">
                    Những đồ dùng nhà bếp đang chiếm nhiều diện tích, bừa bộn và làm bạn khó chịu.
                    Vậy hãy thử những ...
                </p>
            </div>
            <div class="col-xxl-6 col-md-6 col-12">
                <a class="d-block position-relative scale_hover overflow-hidden" href="index.php?p=detailnews">
                    <div class="my-bg-img article" style="background-image: url(public/demo/news-2.jpg);"></div>
                    <div class="date_blog"><i class="fas fa-calendar-alt me-2"></i>23/11/2018</div>
                </a>
                <h5 class="my-2">
                    <a class="fw-normal" href="index.php?p=detailnews"
                        title="Những gợi ý lưu trữ đồ dùng nhà bếp gọn gàng và sạch sẽ hơn">Những gợi ý
                        lưu trữ đồ dùng nhà bếp gọn gàng và sạch sẽ hơn</a>
                </h5>
                <p class="text-black-50">
                    Những đồ dùng nhà bếp đang chiếm nhiều diện tích, bừa bộn và làm bạn khó chịu.
                    Vậy hãy thử những ...
                </p>
            </div>
            <div class="col-xxl-6 col-md-6 col-12">
                <a class="d-block position-relative scale_hover overflow-hidden" href="index.php?p=detailnews">
                    <div class="my-bg-img article" style="background-image: url(public/demo/news-3.jpg);"></div>
                    <div class="date_blog"><i class="fas fa-calendar-alt me-2"></i>23/11/2018</div>
                </a>
                <h5 class="my-2">
                    <a class="fw-normal" href="index.php?p=detailnews"
                        title="Những gợi ý lưu trữ đồ dùng nhà bếp gọn gàng và sạch sẽ hơn">Những gợi ý
                        lưu trữ đồ dùng nhà bếp gọn gàng và sạch sẽ hơn</a>
                </h5>
                <p class="text-black-50">
                    Những đồ dùng nhà bếp đang chiếm nhiều diện tích, bừa bộn và làm bạn khó chịu.
                    Vậy hãy thử những ...
                </p>
            </div>
            <div class="col-xxl-6 col-md-6 col-12">
                <a class="d-block position-relative scale_hover overflow-hidden" href="index.php?p=detailnews">
                    <div class="my-bg-img article" style="background-image: url(public/demo/news-1.jpg);"></div>
                    <div class="date_blog"><i class="fas fa-calendar-alt me-2"></i>23/11/2018</div>
                </a>
                <h5 class="my-2">
                    <a class="fw-normal" href="index.php?p=detailnews"
                        title="Những gợi ý lưu trữ đồ dùng nhà bếp gọn gàng và sạch sẽ hơn">Những gợi ý
                        lưu trữ đồ dùng nhà bếp gọn gàng và sạch sẽ hơn</a>
                </h5>
                <p class="text-black-50">
                    Những đồ dùng nhà bếp đang chiếm nhiều diện tích, bừa bộn và làm bạn khó chịu.
                    Vậy hãy thử những ...
                </p>
            </div>
            <div class="col-xxl-6 col-md-6 col-12">
                <a class="d-block position-relative scale_hover overflow-hidden" href="index.php?p=detailnews">
                    <div class="my-bg-img article" style="background-image: url(public/demo/news-2.jpg);"></div>
                    <div class="date_blog"><i class="fas fa-calendar-alt me-2"></i>23/11/2018</div>
                </a>
                <h5 class="my-2">
                    <a class="fw-normal" href="index.php?p=detailnews"
                        title="Những gợi ý lưu trữ đồ dùng nhà bếp gọn gàng và sạch sẽ hơn">Những gợi ý
                        lưu trữ đồ dùng nhà bếp gọn gàng và sạch sẽ hơn</a>
                </h5>
                <p class="text-black-50">
                    Những đồ dùng nhà bếp đang chiếm nhiều diện tích, bừa bộn và làm bạn khó chịu.
                    Vậy hãy thử những ...
                </p>
            </div>
            <div class="col-xxl-6 col-md-6 col-12">
                <a class="d-block position-relative scale_hover overflow-hidden" href="index.php?p=detailnews">
                    <div class="my-bg-img article" style="background-image: url(public/demo/news-3.jpg);"></div>
                    <div class="date_blog"><i class="fas fa-calendar-alt me-2"></i>23/11/2018</div>
                </a>
                <h5 class="my-2">
                    <a class="fw-normal" href="index.php?p=detailnews"
                        title="Những gợi ý lưu trữ đồ dùng nhà bếp gọn gàng và sạch sẽ hơn">Những gợi ý
                        lưu trữ đồ dùng nhà bếp gọn gàng và sạch sẽ hơn</a>
                </h5>
                <p class="text-black-50">
                    Những đồ dùng nhà bếp đang chiếm nhiều diện tích, bừa bộn và làm bạn khó chịu.
                    Vậy hãy thử những ...
                </p>
            </div>

            <ul class="pagination justify-content-end my-4">
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
            </ul>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('.icon-nav').click(function () {
            $(this).toggleClass('route-180');
        });
    });
</script>