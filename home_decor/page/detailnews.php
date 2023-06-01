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
        <strong><span>Những gợi ý lưu trữ đồ dùng nhà bếp gọn gàng và sạch sẽ hơn</span></strong>
    </div>
    <h2 class="fw-bold">Những gợi ý lưu trữ đồ dùng nhà bếp gọn gàng và sạch sẽ hơn</h3>
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
    <div class="col-xxl-8 col-12 order-xxl-2 order-1 right-content position-relative">
        <div class="d-block position-relative overflow-hidden">
            <div class="my-bg-img article" style="background-image: url(public/demo/news-1.jpg);"></div>
            <div class="date_blog"><i class="fas fa-calendar-alt me-2"></i>23/11/2018</div>
        </div>
        <h5 class="my-2">13 món phụ kiện bếp sẽ khiến chị em nào cũng phải xốn xang khi nhìn thấy</h5>
        <div>
            <p>Người ta vẫn nói nấu ăn là một môn nghệ thuật, và khi đã là một môn nghệ thuật thì chẳng thể nào thiếu
                được những món dụng cụ cần thiết. 13 món&nbsp;<b>phụ kiện bếp</b>&nbsp;dưới đây xứng đáng để trở thành
                món quà mà mọi tín đồ mê nấu nướng phải khao khát. Không phải bởi sự đắt giá của những món đồ ấy, cũng
                chẳng phải sự hiếm hoi của sản phẩm, sức thu hút của 13 món đồ này nằm ở sự hữu ích chúng mang đến mà
                chỉ có những người hay vào bếp mới có thể hiểu hết được.</p>
            <p>
                <img class="img-fluid" src="public/demo/detail-news-1.webp" alt="">
            </p>
            <p>1. Những mẫu thớt bắt mắt này chắc chắn là một món quà khiến người
                bạn mê nấu nướng của bạn phát điên. Không chỉ đơn thuần dùng làm thớt chế biến nguyên liệu, những chiếc
                thớt sắc màu này còn có thể được dùng như những chiếc đĩa trưng bày món ăn đầy bắt mắt.</p>
            <p>
                <img class="img-fluid" src="public/demo/detail-news-2.webp" alt="">
            </p>
            <p>2. Những chiếc xúc xắc nhỏ bé nhưng lại vô cùng hữu ích trong việc
                quản lý lưu trữ của nhà bếp.</p>
            <p>
                <img class="img-fluid" src="public/demo/detail-news-3.webp" alt="">
            </p>
            <p>3. Để chế biến ra những món ăn đặc sắc thì một bộ dao thái chất lượng
                là không thể nào thiếu được.</p>
            <p>
            <p>
                <img class="img-fluid" src="public/demo/detail-news-4.webp" alt="">
            </p>
            </p>
            <p>4. Những chiếc bình đựng dụng cụ nhà bếp trông có vẻ bình thường
                nhưng lại vô cùng hữu dụng bên trong mỗi căn bếp.</p>
            <p>
                <img class="img-fluid" src="public/demo/detail-news-5.webp" alt="">
            </p>
            <p>5. Những chiếc khăn lau tay bằng chất liệu cotton cũng là một món quà
                hữu ích mà bạn có thể cân nhắc đem tặng cho những tâm hồn say mê nấu nướng.</p>
            <p>
                <img class="img-fluid" src="public/demo/detail-news-6.webp" alt="">
            </p>
            <p>
                <img class="img-fluid" src="public/demo/detail-news-7.webp" alt="">
            </p>
            <p>6. Như một món đồ đại diện đặc trưng chẳng thể thiếu, liệu có một ai
                thường xuyên vào bếp lại không sở hữu một, hai cái tạp dề như thế này.</p>
            <p>
                <img class="img-fluid" src="public/demo/detail-news-8.webp" alt="">
            </p>
            <p>7. Những chiếc găng tay sẽ giúp bảo vệ bạn khỏi nhiệt độ cao trong
                quá trình đun nấu.</p>
            <p>
                <img class="img-fluid" src="public/demo/detail-news-9.webp" alt="">
            </p>
            <p>8. Bộ chày cối đá cẩm thạch và gỗ đẹp hút hồn này cũng là món quà mà
                hàng vạn người mong muốn.</p>
            <p>
                <img class="img-fluid" src="public/demo/detail-news-10.webp" alt="">
            </p>
            <p>9. Dụng cụ bào bằng tay cũng là một món quà đáng để bạn cân nhắc.</p>
            <p>
                <img class="img-fluid" src="public/demo/detail-news-11.webp" alt="">
            </p>
            <p>10. Với những người ưu vào bếp thì bộ dụng cụ làm bánh là chẳng thể
                nào thiếu được.</p>
            <p>
                <img class="img-fluid" src="public/demo/detail-news-12.webp" alt="">
            </p>
            <p>11. Những lọ đựng gia vị với thiết kế lạ mắt khiến chủ nhân của chúng
                chẳng thể quên đi được người đã tặng quà.</p>
            <p>
                <img class="img-fluid" src="public/demo/detail-news-13.webp" alt="">
            </p>
            <p>12. Những mảnh gỗ sồi chắc chắn cho bạn sử dụng với nhiều mục đích
                khác nhau bên trong nhà bếp như dùng là đĩa trang trí bày đồ ăn hay đặt đồ nóng phía trên.</p>
            <p>
                <img class="img-fluid" src="public/demo/detail-news-14.webp" alt="">
            </p>iến chị em nào cũng phải xốn xang khi nhìn thấy - Ảnh 14."
            type="photo" width=""></a></p>
            <p>13. Món phụ kiện bếp đẹp mắt này sẽ giúp bạn bảo vệ mặt bàn khỏi
                nhiệt độ tỏa ra từ nồi,chảo vừa dùng chế biến món ăn.</p>
        </div>

        <div class="px-xxl-4 px-0">
            <div class="border-top">
                <h5 class="fw-bold my-4">Viết bình luận của bạn:</h5>
            </div>
            <div class="d-flex flex-wrap pb-5">
                <div class="col-xxl-6 col-12 pe-xxl-3 pe-0 mb-3">
                    <input placeholder="Họ và tên" type="text" class="form-control" value="" id="full-name"
                        name="Author" required="">
                </div>
                <div class="col-xxl-6 col-12 ps-xxl-3 pe-0 mb-3">
                    <input placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" type="email"
                        class="form-control" value="" name="Email" required="">
                </div>
                <div class="col-12 mb-3">
                    <textarea placeholder="Nội dung" class="form-control form-control-lg" id="comment" name="Body"
                        rows="6" required=""></textarea>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn_base px-4">Gửi bình luận</button>
                </div>
            </div>
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