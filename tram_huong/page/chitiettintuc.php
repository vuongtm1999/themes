<style>
    a:hover,
    a:focus {
        color: var(--shop-color-hover);
        outline: none;
    }

    .articles-wrapper {
        counter-reset: post-ranking;
    }

    .post-img::before {
        position: absolute;
        content: counter(post-ranking);
        top: calc(50% - 16px);
        left: -16px;
        border: 2px solid #fff;
        height: 28px;
        width: 28px;
        line-height: 26px;
        text-align: center;
        border-radius: 100%;
        background: var(--shop-color-main);
        color: #fff;
        font-size: 12px;
        counter-increment: post-ranking;
        z-index: 1;
    }

    .collapse_title::after {
        content: " ";
        position: absolute;
        top: 0;
        bottom: 0;
        right: 25px;
        margin: auto;
        width: 8px;
        height: 8px;
        border-color: #666;
        border-style: solid;
        border-width: 0 2px 2px 0;
        transform: translateY(-50%) rotate(45deg);
        transition: transform .2s ease;
    }

    .menuList-links>li>a {
        padding: 12px 0;
        font-weight: 500;
        font-size: 15px;
        display: block;
    }

    .menuList-links>li:not(:last-child) {
        border-bottom: 1px dashed var(--shop-color-border);
    }

    .news-author {
        color: #74839f;
    }

    .post-navigation {
        border-top: 1px solid var(--shop-color-border);
    }

    .bg-img-cover {
        background-repeat: no-repeat;
        background-size: cover;
        height: 1px;
        padding-bottom: 52.5%;
    }

    .entry-content {
        white-space: initial;
        overflow: hidden;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        display: -webkit-box;
    }

    @media(min-width: 768px) {
        .px-6 {
            padding-left: 6vw !important;
            padding-right: 6vw !important;
        }
    }

    @media(min-width: 1400px) {
        .px-6 {
            padding-left: 6vw !important;
            padding-right: 6vw !important;
        }

        .blogs-aside--sticky {
            top: 30px;
            position: -webkit-sticky;
            position: sticky;
            transition: top 400ms ease;
        }
    }
</style>

<div class="px-6 py-1 bg_light_grey">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
            <li class="breadcrumb-item" aria-current="page">Tin tức</li>
            <li class="breadcrumb-item active" aria-current="page">Khai trương Cung Trầm Gallery - Nhìn lại cột mốc ngày
                24/10/2022</li>
        </ol>
    </nav>
</div>
<div class="row px-6 px-2 bg_light_grey gx-md-0 gx-xxl-5 pb-5">
    <div class="col-xxl-8 col-12 py-3 rounded">
        <!-- Bai viet -->
        <div class="bg-white p-4">
            <h5>
                Khai trương Cung Trầm Gallery - Nhìn lại cột mốc ngày 24/10/2022
            </h5>
            <p class="fw-light news-author">bởi: Trang LH
                <i style="vertical-align:middle;" class="bi bi-dot fs-3 opacity-25"></i>
                26 Tháng 10, 2022
            </p>
            <div class="mb-4">
                <img class="img-fluid"
                    src="public/demo/chi_tiet_tin_tuc.JPG"
                    alt="">
            </div>

            <!-- body news -->
            <div class="pb-5 px-5">
                <p class="pb-2">Sau một thời gian dài ấp ủ cùng sự chuẩn bị kỹ lưỡng, ngày 24/10 vừa qua, Công ty Cổ
                    phần
                    Trầm Thiện Tâm
                    đã&nbsp;long trọng tổ chức lễ ra mắt, khai trương <strong>Cung Trầm Gallery</strong>. Sự kiện này là
                    cột
                    mốc quan trọng đánh dấu sự phát triển của thương hiệu trầm hương Thiện Tâm.</p>
                <p class="pb-2">Trong không khí dịu dàng mát mẻ của tiết trời mùa thu, cùng với đó là sự tin tưởng và
                    yêu
                    mến của Quý
                    khách hàng gần xa, Cung Trầm Gallery đã khai trương một cách trang trọng và thành công. Cùng Trầm
                    Thiện
                    Tâm nhìn lại ngày trọng đại này qua những hình ảnh dưới đây.&nbsp;</p>
                <p class="pb-2">Đội ngũ Trầm Thiện Tâm đã tự tay và tự tâm chuẩn bị từng túi thơm từ trầm hương để gửi
                    đến
                    quý khách hàng
                    ghé thăm Cung Trầm thay cho lời cảm ơn.</p>
                <p class="pb-2" style="text-align: center"><img class="img-fluid" alt="khai truong cung tram gallery"
                        src="public/demo/chi_tiet_tin_tuc.JPG">
                </p>
                <p class="pb-2">Công ty Cổ phần Trầm Thiện Tâm ra đời với một sứ mệnh lớn: Đó là mang những tinh hoa của
                    Trầm hương, hoàn
                    toàn thiên nhiên đến với công chúng Việt Nam. Mang đến một phong cách sống mới cho những con người
                    tinh
                    hoa, thành công, có khát khao, tầm nhìn lớn và hành động mạnh mẽ.&nbsp;<br>Anh <strong>Trần Lê
                        Đồng</strong> - Chủ tịch HĐQT Công ty Cổ phần <strong>Trầm Thiện Tâm</strong>&nbsp;lên phát biểu
                    khai mạc buổi khai trương <strong>Cung Trầm Gallery</strong></p>
                <p class="pb-2" style="text-align: center"><img class="img-fluid" alt="khai truong cung tram gallery"
                        src="public/demo/chi_tiet_tin_tuc.JPG">
                </p>
                <p class="pb-2">Anh <strong>Trần Lê Đồng</strong> - Chủ tịch HĐQT Công ty Cổ phần Trầm Thiện Tâm cùng
                    chị Đỗ
                    Thành Thoa -
                    Phó Hiệu trưởng Trường Cao đẳng Y tế Cộng đồng, Viện trưởng Viện Đào tạo quốc tế Edu Beauty, Chủ
                    tịch
                    điều hành Cộng Đồng Thế giới đẹp - Edu Beauty<br>ký kết thỏa thuận hợp tác chiến lược.</p>
                <p class="pb-2" style="text-align: center"><img class="img-fluid" alt="khai truong cung tram gallery"
                        src="public/demo/chi_tiet_tin_tuc.JPG">
                </p>
                <p class="pb-2">Anh Đồng - chị Thoa cùng các Cổ Đông cắt băng khánh thành, chính thức khai trương Cung
                    Trầm
                    Gallery&nbsp;
                </p>
                <p class="pb-2" style="text-align: center"><img class="img-fluid" alt="khai truong cung tram gallery"
                        src="public/demo/chi_tiet_tin_tuc.JPG">
                </p>
                <p class="pb-2">Mọi người&nbsp;chill cùng tiếng đàn bầu và xin chữ từ Thư hoạ gia - Ông đồ <strong>Kiều
                        Quốc
                        Khánh</strong> - Trưởng ban khảo thí ông đồ Văn Miếu - Thành viên sáng lập thư pháp Việt Nam.
                </p>
                <p class="pb-2" style="text-align: center"><img class="img-fluid" alt="khai truong cung tram gallery"
                        src="public/demo/chi_tiet_tin_tuc.JPG">
                </p>
                <p class="pb-2">Những vị khách quý tham gia Workshop "Tìm hiểu về trầm hương" do Phó Giáo sư - Nhà
                    nghiên
                    cứu cổ sử trẻ
                    tuổi nhất Việt Nam Nguyễn Quang Vinh, anh Trần Lê Đồng và chị Nguyễn Hải Yến chia sẻ.&nbsp;</p>
                <p class="pb-2" style="text-align: center"><img class="img-fluid" alt="khai truong cung tram gallery"
                        src="public/demo/chi_tiet_tin_tuc.JPG">
                </p>
                <p class="pb-2">Chứng nhận đảm bảo an toàn chất lượng&nbsp;các vật phẩm trầm hương tại Cung Trầm Gallery
                    được chứng nhận
                    bởi Tổng cục Tiêu chuẩn Đo lường chất lượng Hà Nội.&nbsp;</p>
                <p class="pb-2" style="text-align: center"><img class="img-fluid" alt="khai truong cung tram gallery"
                        src="public/demo/chi_tiet_tin_tuc.JPG">
                </p>
                <p class="pb-2">&nbsp;</p>
                <p class="pb-2">Một số hình ảnh những vị khách của Cung Trầm Gallery vào ngày khai trương. Vì số lượng
                    hình
                    ảnh&nbsp;trên
                    bài viết có hạn nên Đội ngũ Trầm Thiện Tâm sẽ cập nhật hình ảnh khách hàng đầy đủ và sớm nhất trên
                    fanpage <a href="https://www.facebook.com/tramthientam.official">Trầm Hương Thiện Tâm</a>.&nbsp;</p>
                <p class="pb-2" style="text-align: center"><img class="img-fluid" alt="khai truong cung tram gallery"
                        src="public/demo/chi_tiet_tin_tuc.JPG">
                </p>
                <p class="pb-2" style="text-align: center">&nbsp;</p>
                <p class="pb-2" style="text-align: center"><img class="img-fluid" alt="khai truong cung tram gallery"
                        src="public/demo/chi_tiet_tin_tuc.JPG">
                </p>
                <p class="pb-2">&nbsp;</p>
                <p class="pb-2" style="text-align: justify;">Buổi lễ khai trương Cung Trầm Gallery đã diễn ra thành công
                    tốt
                    đẹp. Đội ngũ
                    Trầm Thiện Tâm biết ơn từng sự góp mặt ủng hộ của Quý khách vào ngày hôm nay, hôm sau và những ngày
                    sau.
                    Chúng tôi cam kết chỉ cung cấp các vật phẩm trầm hương tự nhiên 100% để được đồng hành trên chặng
                    đường
                    dài cùng quý khách.</p>
                <p style="text-align: justify;">Nếu Quý vị và các bạn chưa thể đến Cung Trầm vào ngày khai trương, thì
                    cũng
                    hãy yên tâm vì chúng tôi vẫn đang có chương trình Tuần Lễ Khai Trương - chương trình giảm giá 25%
                    tất cả
                    các mặt hàng vật phẩm trầm hương và tặng quà duy nhất. Xin được hoan hỉ kính mời anh chị và các bạn
                    ghé
                    thăm Cung Trầm Gallery để tham quan và trải nghiệm các vật phẩm trầm hương tự nhiên của Trầm Thiện
                    Tâm
                    hoặc đặt hàng trực tuyến qua hotline <strong>0877.999.666.</strong></p>
            </div>

            <!-- info news -->
            <div class="mb-4">
                <p>------------------</p>
                <p>CUNG TRẦM GALLERY BY TRẦM THIỆN TÂM - TINH HOA TRẦM VIỆT</p>
                <p><img height="16" width="16" alt="🌏"
                        src="https://file.hstatic.net/200000583021/file/phone_66362ff0f1ec49fa80dbe9dc6bc44c61.png"> <a
                        href="tel:0876733333">Hotline: 08767.33333</a> | <a href="tel:0877999666">08779.99666</a></p>
                <p><img height="16" width="16" alt="🌏"
                        src="https://file.hstatic.net/200000583021/file/global_b078d68d500749cfa128d667b0eac680.png">
                    Website: tramthientam.com.vn - <a rel="nofollow noopener" target="_blank"
                        href="/">tinhhoatramviet.com</a></p>
                <p><img height="16" width="16" alt="📧"
                        src="https://file.hstatic.net/200000583021/file/evelope_036bb91eef3d4f1ab37dad9ea630bffc.png">
                    <a href="mailto:info@tramthientam.com.vn">Email: info@tramthientam.com.vn</a>
                </p>
                <p><img height="16" width="16" alt="🏠"
                        src="https://file.hstatic.net/200000583021/file/home_e07d2b59cecd40b4ae6d0e5c2085176c.png">Địa
                    chỉ:
                    <a href="/"> Lô TT02-15, KĐT HD Mon, Nam Từ Liêm, Hà Nội</a>
                </p>
                <p><img height="16" width="16" alt="⏰"
                        src="https://file.hstatic.net/200000583021/file/clock_5cf9248322ee4e628c687f8ceabeee79.png"> Giờ
                    mở
                    cửa: 8h00 - 22h00</p>
            </div>

            <div class="d-flex justify-content-between align-items-center py-4 post-navigation">
                <p>Đang xem:<span class="fw-bold"> Khai trương Cung Trầm Gallery - Nhìn lại cột mốc ngày
                        24/10/2022</span>
                </p>
                <span class="fw-bold">
                    <a href="index.php?p=chitiettintuc" title="">Bài sau</a>
                    <i class="bi bi-chevron-right"></i>
                </span>
            </div>
            </di>


        </div>

        <!-- Bai viet lien quan -->
        <div class="bg_light_grey">
            <h4 class="pt-5 pb-2">Bài viết liên quan</h4>
            <div class="row gx-xxl-4">
                <div class="col-md-4">
                    <div class="article-item bg-white h-100">
                        <a class="bg-img-cover d-block" href="#"
                            style="background-image: url(public/demo/khai_truong.webp);">
                        </a>
                        <div class="p-3">
                            <h6 class="post-title">
                                <a href="/?p=index.php?p=chitiettintuc"
                                    title="Khai trương Cung Trầm Gallery - Nhìn lại cột mốc ngày 24/10/2022">Khai trương
                                    Cung
                                    Trầm
                                    Gallery - Nhìn lại cột mốc ngày 24/10/2022</a>
                            </h6>
                            <p class="entry-content">Sau một thời gian dài ấp ủ cùng sự chuẩn bị kỹ lưỡng, ngày 24/10
                                vừa qua,
                                Công ty
                                Cổ phần Trầm Thiện Tâm đã&nbsp;long trọng tổ chức lễ ra mắt, khai trương Cung Trầm...
                            </p>
                            <div class="article-post-meta">
                                <span class="date">
                                    26 Tháng 10, 2022
                                </span>
                            </div>
                            </di>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="article-item bg-white h-100">
                        <a class="bg-img-cover d-block" href="#"
                            style="background-image: url(public/demo/khai_truong.webp);">
                        </a>
                        <div class="p-3">
                            <h6 class="post-title">
                                <a href="/?p=index.php?p=chitiettintuc"
                                    title="Khai trương Cung Trầm Gallery - Nhìn lại cột mốc ngày 24/10/2022">Khai trương
                                    Khai trương Cung Trầm Gallery</a>
                            </h6>
                            <p class="entry-content">Sau một thời gian dài ấp ủ cùng sự chuẩn bị kỹ lưỡng, ngày 24/10
                                vừa qua,
                                Công ty
                                Cổ phần Trầm Thiện Tâm đã&nbsp;long trọng tổ chức lễ ra mắt, khai trương Cung Trầm...
                            </p>
                            <div class="article-post-meta">
                                <span class="date">
                                    26 Tháng 10, 2022
                                </span>
                            </div>
                            </di>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-4 col-12 d-none d-xxl-block">
        <div class="sidebar-blogs blogs-aside--sticky">
            <!-- Bai viet moi nhat -->
            <div class="bg-white mb-3">
                <a class="" href="#collapseFooter2" data-bs-toggle="collapse" role="button" aria-expanded="false"
                    aria-controls="collapseExample">
                    <h6 class="mb-0 px-3 py-3 position-relative collapse_title rounded-top border border-bottom-0">
                        Bài viêt mới nhất
                    </h6>
                </a>
                <div class="collapse show" id="collapseFooter2">
                    <div class="card card-body articles-wrapper rounded-bottom">
                        <div class="d-flex flex-wrap pb-3">
                            <div class="col-3 pe-2 position-relative post-img">
                                <img src="public/demo/article_1.webp" class="img-fluid h-100" alt="">
                            </div>
                            <div class="col-9">
                                <div class="post-content">
                                    <h6 class="fw-normal mb-1">
                                        <a href="index.php?p=chitiettintuc">Bột trầm hương là
                                            gì? Công dụng và cách
                                            bảo quản bột trầm hương</a>
                                    </h6>
                                    <p class="post-meta fs-6">
                                        <span class="cate">Kiến thức</span>
                                        <span class="author d-none">
                                            <a href="index.php?p=chitiettintuc">Anh LTQ</a>
                                        </span>
                                        <span class="date">- 26.03.2023</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap pb-3">
                            <div class="col-3 pe-2 position-relative post-img">
                                <img src="public/demo/article_1.webp" class="img-fluid h-100" alt="">
                            </div>
                            <div class="col-9">
                                <div class="post-content">
                                    <h6 class="fw-normal mb-1">
                                        <a href="index.php?p=chitiettintuc">Bột trầm hương là
                                            gì? Công dụng và cách
                                            bảo quản bột trầm hương</a>
                                    </h6>
                                    <p class="post-meta fs-6">
                                        <span class="cate">Kiến thức</span>
                                        <span class="author d-none">
                                            <a href="index.php?p=chitiettintuc">Anh LTQ</a>
                                        </span>
                                        <span class="date">- 26.03.2023</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap pb-3">
                            <div class="col-3 pe-2 position-relative post-img">
                                <img src="public/demo/article_1.webp" class="img-fluid h-100" alt="">
                            </div>
                            <div class="col-9">
                                <div class="post-content">
                                    <h6 class="fw-normal mb-1">
                                        <a href="index.php?p=chitiettintuc">Bột trầm hương là
                                            gì? Công dụng và cách
                                            bảo quản bột trầm hương</a>
                                    </h6>
                                    <p class="post-meta fs-6">
                                        <span class="cate">Kiến thức</span>
                                        <span class="author d-none">
                                            <a href="index.php?p=chitiettintuc">Anh LTQ</a>
                                        </span>
                                        <span class="date">- 26.03.2023</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap pb-3">
                            <div class="col-3 pe-2 position-relative post-img">
                                <img src="public/demo/article_1.webp" class="img-fluid h-100" alt="">
                            </div>
                            <div class="col-9">
                                <div class="post-content">
                                    <h6 class="fw-normal mb-1">
                                        <a href="index.php?p=chitiettintuc">Bột trầm hương là
                                            gì? Công dụng và cách
                                            bảo quản bột trầm hương</a>
                                    </h6>
                                    <p class="post-meta fs-6">
                                        <span class="cate">Kiến thức</span>
                                        <span class="author d-none">
                                            <a href="index.php?p=chitiettintuc">Anh LTQ</a>
                                        </span>
                                        <span class="date">- 26.03.2023</span>
                                    </p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <!-- Menu bai viet -->
            <div class="bg-white mb-3">
                <a class="" href="#collapseArticle2" data-bs-toggle="collapse" role="button" aria-expanded="false"
                    aria-controls="collapseExample">
                    <h6 class="mb-0 px-3 py-3 position-relative collapse_title rounded-top border border-bottom-0">
                        Bài viêt mới nhất
                    </h6>
                </a>
                <div class="collapse show" id="collapseArticle2">
                    <div class="card card-body py-0 articles-wrapper rounded-bottom">
                        <ul class="menuList-links list-unstyled">
                            <li class="">
                                <a href="/?p=all" title="Tất cả sản phẩm">
                                    <span>Tất cả sản phẩm</span>
                                </a>
                            </li>
                            <li class="has-submenu level0 ">
                                <a href="/collections/tram-huong-xong-dot" title="Trầm Hương Xông Đốt">Trầm Hương
                                    Xông Đốt
                                    <span class="icon-plus-submenu plus-nClick1"></span>
                                </a>
                            </li>
                            <li class="has-submenu level0 ">
                                <a href="/collections/dung-cu-thuong-tram" title="Dụng Cụ Thưởng Trầm">Dụng Cụ
                                    Thưởng Trầm
                                    <span class="icon-plus-submenu plus-nClick1"></span>
                                </a>
                            </li>
                            <li class="has-submenu level0 ">
                                <a href="/collections/qua-tang-tram-huong" title="Quà Tặng Trầm Hương">Quà Tặng Trầm
                                    Hương
                                    <span class="icon-plus-submenu plus-nClick1"></span>
                                </a>
                            </li>
                            <li class="has-submenu level0 ">
                                <a href="/collections/trang-suc-tram-huong" title="Trang Sức Trầm Hương">Trang Sức
                                    Trầm Hương
                                    <span class="icon-plus-submenu plus-nClick1"></span>
                                </a>
                            </li>
                            <li class="has-submenu level0 ">
                                <a href="/collections/san-pham-khac" title="Sản Phẩm Khác">Sản Phẩm Khác
                                    <span class="icon-plus-submenu plus-nClick1"></span>
                                </a>
                            </li>
                            <li class="">
                                <a href="/collections/onsale" title="Sản phẩm khuyến mãi">
                                    <span>Sản phẩm khuyến mãi</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="/collections/hot-products" title="Sản phẩm nổi bật">
                                    <span>Sản phẩm nổi bật</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>