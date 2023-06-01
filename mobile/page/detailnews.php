<style>
    .breadcrumbs {
        box-shadow: 0 1px 2px 0 rgba(60, 64, 67, 0.1), 0 2px 6px 2px rgba(60, 64, 67, 0.15)
    }

    .breadcrumbs a {
        color: #000;
    }

    .breadcrumbs a:hover {
        color: var(--mainColor);
    }

    .topic-item img {
        width: 3rem;
        height: 3rem;
        min-width: 48px;
    }

    .item_tags:hover {
        background: var(--mainColor);
        border-color: var(--mainColor) !important;
        color: #fff;
    }

    .avatar {
        min-width: 120px;
        max-width: 120px;
        min-height: 120px;
        max-height: 120px;
        border-radius: 50%;
        border: 1px solid #fff;
        outline: 1px solid var(--mainColor);
        outline-offset: 3px;
    }

    .avatar:hover {
        outline: 3px solid var(--mainColor);
    }

    .line_5 {
        font-size: 15px;
        display: -webkit-box;
        overflow: hidden;
        -webkit-box-orient: vertical;
        word-break: break-word;
        -webkit-line-clamp: 5;
        height: calc(21px* 5);
        line-height: 21px;
    }

    .zoom-img {
        transition: .8s ease-out;
        will-change: transform;
    }

    .zoom-img:hover {
        transform: scale(1.1);
    }

    .send-comment-btn {
        color: white !important;
        background: var(--mainColor);
        transition: all 0.5s;
    }

    .send-comment-btn:hover {
        border-radius: 20px;
        filter: hue-rotate(17deg) contrast(1.2);
    }
</style>

<div class="row breadcrumbs position-relative">
    <div class="d-flex px-6 py-2">
        <span>
            <a href="index.php" title="Trang chủ">
                <i style="color: var(--mainColor);" class="bi bi-house"></i>
                Trang chủ
            </a>
        </span>
        <span class="mx-2">/</span>
        <span>
            <a href="index.php?p=news">
                Tin tức
            </a>
        </span>
        <span class="mx-2">/</span>
        <span>
            OPPO Reno8 series ra mắt tại Việt Nam vào ngày 18/8
        </span>
    </div>
</div>

<div class="row px-6 bg-primary">
    <div class="bg-white my-3 rounded">
        <div class="row g-4 p-3">
            <div class="col-xxl-3 col-12 d-none d-xxl-block">
                <div class="ticky-left">
                    <h4 class="pb-3 mb-3 fw-bolder d-flex align-items-center border-bottom">
                        <img class="img-fluid me-2" src="public/demo/hot_ico.png" alt=""> Chủ đề Hot
                    </h4>
                    <div class="d-flex align-items-center topic-item mb-2">
                        <a class="d-inline-block me-3" href="">
                            <img class="rounded" src="public/demo/news-icon-1.jpg" alt="">
                        </a>
                        <div>
                            <h6 class="fw-bold mb-0"><a href="#" title="24hCông nghệ">24hCông nghệ</a></h6>
                            <span class="d-block small">13 bài tin</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center topic-item mb-2">
                        <a class="d-inline-block me-3" href="">
                            <img class="rounded" src="public/demo/news-icon-1.jpg" alt="">
                        </a>
                        <div>
                            <h6 class="fw-bold mb-0"><a href="#" title="24hCông nghệ">News</a></h6>
                            <span class="d-block small">2 bài tin</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center topic-item mb-2">
                        <a class="d-inline-block me-3" href="">
                            <img class="rounded" src="public/demo/news-icon-1.jpg" alt="">
                        </a>
                        <div>
                            <h6 class="fw-bold mb-0"><a href="#" title="24hCông nghệ">24hCông nghệ</a></h6>
                            <span class="d-block small">13 bài tin</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center topic-item mb-2">
                        <a class="d-inline-block me-3" href="">
                            <img class="rounded" src="public/demo/news-icon-1.jpg" alt="">
                        </a>
                        <div>
                            <h6 class="fw-bold mb-0"><a href="#" title="24hCông nghệ">24hCông nghệ</a></h6>
                            <span class="d-block small">13 bài tin</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center topic-item mb-2">
                        <a class="d-inline-block me-3" href="">
                            <img class="rounded" src="public/demo/news-icon-1.jpg" alt="">
                        </a>
                        <div>
                            <h6 class="fw-bold mb-0"><a href="#" title="24hCông nghệ">24hCông nghệ</a></h6>
                            <span class="d-block small">13 bài tin</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center topic-item mb-2">
                        <a class="d-inline-block me-3" href="">
                            <img class="rounded" src="public/demo/news-icon-1.jpg" alt="">
                        </a>
                        <div>
                            <h6 class="fw-bold mb-0"><a href="#" title="24hCông nghệ">24hCông nghệ</a></h6>
                            <span class="d-block small">13 bài tin</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center topic-item mb-2">
                        <a class="d-inline-block me-3" href="">
                            <img class="rounded" src="public/demo/news-icon-1.jpg" alt="">
                        </a>
                        <div>
                            <h6 class="fw-bold mb-0"><a href="#" title="24hCông nghệ">24hCông nghệ</a></h6>
                            <span class="d-block small">13 bài tin</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center topic-item mb-2">
                        <a class="d-inline-block me-3" href="">
                            <img class="rounded" src="public/demo/news-icon-1.jpg" alt="">
                        </a>
                        <div>
                            <h6 class="fw-bold mb-0"><a href="#" title="24hCông nghệ">24hCông nghệ</a></h6>
                            <span class="d-block small">13 bài tin</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-9 col-12">
                <div>
                    <h5 class="-bold mt-1">OPPO Reno8 series ra mắt tại Việt Nam vào ngày 18/8
                    </h5>
                    <div class="entry-date">
                        <p class="day mb-0 mb-lg-3 pt-1">
                            Đăng bởi: <b>Mew Theme - 09/08/2022</b>
                        </p>
                    </div>
                    <div class="js-toc table-of-contents w-100 position-relative p-2 rounded mb-3 d-none" data-toc="">
                    </div>
                    <div class="entry-content text-justify rte " data-content="">
                        <p><strong>Cùng chào đón bộ ba&nbsp;OPPO Reno8&nbsp;series sắp được giới thiệu tại thị trường
                                Việt Nam vào ngày 18/8 tới đây.</strong></p>
                        <p>OPPO&nbsp;mới đây đã công bố sự kiện ra mắt dòng sản phẩm Reno8 series sẽ diễn ra vào ngày
                            18/8 tới đây. Sự kiện sẽ được tổ chức theo hình thức họp báo và trực tuyến, với sự góp mặt
                            của các đơn vị truyền thông và đại sứ thương hiệu OPPO.</p>
                        <p>Theo đó, dòng OPPO Reno8 series được giới thiệu tại thị trường Việt Nam với 3 phiên bản:
                            Reno8 4G,&nbsp;<strong>Reno8 5G</strong>&nbsp;và&nbsp;<strong>Reno8 Z 5G</strong>. Trong đó
                            phiên bản Reno8 4G sẽ là phiên bản có giá rẻ nhất, sau đó tới Reno8 Z 5G và cuối cùng là
                            Reno8 5G. Trong tương lai gần OPPO có thể sẽ giới thiệu cả phiên bản&nbsp;<strong>Reno8 Pro
                                5G</strong>&nbsp;tại thị trường Việt Nam.</p>
                        <p>Dòng sản phẩm Reno8 series tiếp tục được định nghĩa “Chuyên gia Chân Dung” với khả năng chụp
                            ảnh ấn tượng. Thế hệ lần này bên cạnh việc trang bị thiết kế mới thì sản phẩm còn có nâng
                            cấp về&nbsp;camera,&nbsp;màn hình&nbsp;và hiệu năng, giúp trải nghiệm sử dụng của người dùng
                            trở nên tốt hơn.</p>
                        <p>Ở thế hệ mới, OPPO cũng sẽ chuyển sang sử dụng vi xử lý Dimensiy 1300 mạnh mẽ tới từ
                            MediaTek, kèm theo đó là&nbsp;công nghệ&nbsp;sạc siêu nhanh SuperVOOC công suất 80W tương tự
                            như OPPO Find X5 Pro, chiếc flagship cao cấp nhất của OPPO ra mắt trong tháng 3 vừa qua.</p>
                        <p>Dự kiến mức giá của OPPO Reno8 series cũng sẽ không cao hơn quá nhiều so với thế hệ Reno7
                            series tiền nhiệm.</p>
                    </div>
                </div>
                <div class="tag-product mt-2 pt-2 border-top">
                    <label class="fw-bold m-0">Tags: </label>
                    <a class="item_tags pt-1 pb-1 px-3 ms-2 mt-1 mb-1 rounded-pill d-inline-block border"
                        href="index.php?p=news" title="Nguyễn Hà Trang">Nguyễn Hà Trang</a>
                </div>

                <div class="pb-3 mb-3 pt-3 mt-2 border-top border-bottom">
                    <div class="row">
                        <div class="col-12 col-md-3">
                            <div class="avatar m-auto">
                                <a href="index.php?p=news">
                                    <img class="img-fluid rounded-circle" alt="Nguyễn Hà Trang"
                                        src="public/demo/nguyen-ha-trang.jpg">
                                </a>
                            </div>
                            <div class="text-center">
                                <a href="index.php?p=author" class="d-block fw-bold mt-2">
                                    Nguyễn Hà Trang
                                </a>
                                <span class="small">Tác giả</span>
                            </div>
                        </div>
                        <div class="col-12 col-md-9">
                            <div class="text-justify mt-3 line_5 mb-3">
                                Thông tin tác giả:
                                Nữ Sinh Chuyên Amsterdam Chinh Phục Học Bổng 100% Đại Học Yonsei, Làm Trợ Lý
                                Video Cho Black Pink, EXO &amp; Sở Hữu Kênh Youtube Triệu View
                                Hà Trang (Meichan) đang là một trong những du học sinh Việt tại nước ngoài
                                thu hút sự chú ý của cộng đồng mạng. Không khỏi ngưỡng mộ khi biết cô nàng
                                du học sinh Việt tài năng này từng gặp gỡ, làm việc với các idol Kpop nổi
                                tiếng - công v...
                            </div>
                            <a href="index.php?p=author" title="Chi tiết"
                                class="btn btn-outline-danger rounded-pill pt-1 pb-1 px-3 d-inline-block border">Chi
                                tiết</a>
                        </div>
                    </div>
                </div>

                <div class="main blogs">
                    <h5 class="fw-bold mb-3">
                        <a href="index.php?p=news" title="Bài viết liên quan: ">
                            Bài viết liên quan:
                        </a>
                    </h5>
                    <div class="col-md-6 col-12">
                        <div class="d-flex flex-wrap">
                            <div class="col-4 col-xxl-3">
                                <a href="index.php?p=detailnews" class="h-100 me-2 rounded overflow-hidden d-block"
                                    title="Rò rỉ mới cho thấy Galaxy Z Flip4 sẽ có pin lớn hơn 12% so với thế hệ trước">
                                    <img src="public/demo/relative-news.jpg" class="img-fluid h-100 zoom-img rounded">
                                </a>
                            </div>
                            <div class="col-8 col-xxl-9">
                                <a class="line_1 fs-6 fw-bold" href="index.php?p=detailnews">
                                    Rò rỉ mới cho thấy Galaxy Z Flip4 sẽ có pin lớn hơn 12% so với thế hệ trước</a>
                                <div class="line_2 text-justify">
                                    Galaxy Z Flip3&nbsp;là một thiết bị tuyệt vời nhưng thời lượng pin của nó chắc chắn
                                    còn nhiều điểm để cải thiện. Đó là một trong những thay đổi mà người hâm mộ hy
                                    vọng&nbsp;Samsung&nbsp;sẽ thực hiện với người kế nhiệm.
                                    Các báo cáo trước đó đã gợi ý rằng&nbsp;Galaxy Z Flip4&nbsp;sẽ có pin lớn hơn thế hệ
                                    trước. Giờ đây, một rò rỉ mới vừa cho chúng ta biết cách Samsung sẽ tích hợp viên
                                    pin lớn hơn bên trong chiếc&nbsp;smartphone&nbsp;màn hình&nbsp;gập dọc tiếp theo của
                                    mình như thế nào.
                                    Được biết, Samsung đã trang bị viên pin 3,300 mAh cho...
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white my-3 p-3 rounded">
        <div class="row g-4">
            <div class="col-xxl-6 col-12">
                <h4 style="color: #212529;" class="mb-3 fw-bold">Viết bình luận</h4>
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Tên *" title="Tên" name="Author" value="">
                </div>
                <div class="mb-3">
                    <input class="form-control" title="E-mail" type="email" placeholder="E-mail *" name="Email"
                        value="">
                </div>
                <div class="mb-3">
                    <textarea rows="6" cols="50" class="form-control" title="Nội dung *" placeholder="Nội dung*"
                        name="Body"></textarea>
                </div>

                <button class="btn send-comment-btn">Gửi bình luận</button>
            </div>
            <div class="col-xxl-6 col-12">
                <h4 style="color: #212529;" class="mb-3 fw-bold">Bình luận</h4>
                <p class="alert alert-warning">Hiện tại bài viết này chưa có bình luận.</p>
            </div>
        </div>
    </div>
</div>