<style>
  a:hover,
  a:focus {
    color: var(--shop-color-hover);
    outline: none;
  }

  .news .entry-content {
    white-space: initial;
    overflow: hidden;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    display: -webkit-box;
  }

  .article-item {
    box-shadow: 0 0 4px 0 rgb(0 0 0 / 8%);
  }

  .news .bg-img-cover {
    background-repeat: no-repeat;
    background-size: cover;
    height: 1px;
    padding-bottom: 52.5%;
  }

  .article-item h6,
  .post-title {
    white-space: initial;
    overflow: hidden;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    display: -webkit-box;
  }

  .news .date {
    color: #74839f;
  }

  .articles-wrapper {
    counter-reset: post-ranking;
  }

  .news .post-img::before {
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

  .news .collapse_title::after {
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
    -ms-transition: transform .2s ease;
    -webkit-transition: transform .2s ease;
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

  .p_x {
    padding-bottom: 2vw;
  }

  @media (min-width: 768px) {
    .blogs-aside--sticky {
      top: 30px;
      position: -webkit-sticky;
      position: sticky;
      transition: top 400ms ease;
    }

    .p_x {
      padding-top: 0px;
      padding-left: 0px;
      padding-right: 2vw;
      padding-bottom: 2vw;
    }
  }

  @media (min-width: 1400px) {}
</style>

<div class="row px-md-5 px-3 pb-5 bg_light_grey news">
  <div class="p-3">
    <nav class="pt-2 pe-0" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tin tức</li>
      </ol>
    </nav>
    <h3 class="pb-3">Tin tức</h3>
  </div>
  <div class="d-flex flex-wrap">
    <div class="col-xxl-8 col-12 pe-md-5 pe-0">
      <div class="d-flex flex-wrap">
        <div class="col-md-6 col-12 px-2 mb-3">
          <div class="article-item bg-white">
            <a class="bg-img-cover d-block" href="index.php?p=chitiettintuc" style="background-image: url(public/demo/khai_truong.webp);">
            </a>
            <div class="p-3">
              <h5 class="post-title">
                <a href="index.php?p=chitiettintuc"
                  title="Khai trương Cung Trầm Gallery - Nhìn lại cột mốc ngày 24/10/2022">Khai trương Cung
                  Trầm
                  Gallery - Nhìn lại cột mốc ngày 24/10/2022</a>
              </h5>
              <p class="entry-content">Sau một thời gian dài ấp ủ cùng sự chuẩn bị kỹ lưỡng, ngày 24/10 vừa qua, Công ty
                Cổ phần Trầm Thiện Tâm đã&nbsp;long trọng tổ chức lễ ra mắt, khai trương Cung Trầm...</p>
              <div class="article-post-meta">
                <span class="author">bởi: Trang LH</span>
                <i style="vertical-align: middle;" class="bi bi-dot fs-4"></i>
                <span class="date">
                  <time pubdate="" datetime="26 Tháng 10, 2022">26 Tháng 10, 2022</time>
                </span>
              </div>
              </di>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-12 px-2 mb-3">
          <div class="article-item bg-white">
            <a class="bg-img-cover d-block" href="index.php?p=chitiettintuc" style="background-image: url(public/demo/khai_truong.webp);">
            </a>
            <div class="p-3">
              <h5 class="post-title">
                <a href="index.php?p=chitiettintuc"
                  title="Khai trương Cung Trầm Gallery - Nhìn lại cột mốc ngày 24/10/2022">Khai trương Cung
                  Trầm
                  Gallery - Nhìn lại cột mốc ngày 24/10/2022</a>
              </h5>
              <p class="entry-content">Sau một thời gian dài ấp ủ cùng sự chuẩn bị kỹ lưỡng, ngày 24/10 vừa qua, Công ty
                Cổ phần Trầm Thiện Tâm đã&nbsp;long trọng tổ chức lễ ra mắt, khai trương Cung Trầm...</p>
              <div class="article-post-meta">
                <span class="author">bởi: Trang LH</span>
                <i style="vertical-align: middle;" class="bi bi-dot fs-4"></i>
                <span class="date">
                  <time pubdate="" datetime="26 Tháng 10, 2022">26 Tháng 10, 2022</time>
                </span>
              </div>
              </di>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-12 px-2 mb-3">
          <div class="article-item bg-white">
            <a class="bg-img-cover d-block" href="index.php?p=chitiettintuc" style="background-image: url(public/demo/khai_truong.webp);">
            </a>
            <div class="p-3">
              <h5 class="post-title">
                <a href="index.php?p=chitiettintuc"
                  title="Khai trương Cung Trầm Gallery - Nhìn lại cột mốc ngày 24/10/2022">Khai trương Cung
                  Trầm
                  Gallery - Nhìn lại cột mốc ngày 24/10/2022</a>
              </h5>
              <p class="entry-content">Sau một thời gian dài ấp ủ cùng sự chuẩn bị kỹ lưỡng, ngày 24/10 vừa qua, Công ty
                Cổ phần Trầm Thiện Tâm đã&nbsp;long trọng tổ chức lễ ra mắt, khai trương Cung Trầm...</p>
              <div class="article-post-meta">
                <span class="author">bởi: Trang LH</span>
                <i style="vertical-align: middle;" class="bi bi-dot fs-4"></i>
                <span class="date">
                  <time pubdate="" datetime="26 Tháng 10, 2022">26 Tháng 10, 2022</time>
                </span>
              </div>
              </di>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-12 px-2 mb-3">
          <div class="article-item bg-white">
            <a class="bg-img-cover d-block" href="index.php?p=chitiettintuc" style="background-image: url(public/demo/khai_truong.webp);">
            </a>
            <div class="p-3">
              <h5 class="post-title">
                <a href="index.php?p=chitiettintuc"
                  title="Khai trương Cung Trầm Gallery - Nhìn lại cột mốc ngày 24/10/2022">Khai trương Cung
                  Trầm
                  Gallery - Nhìn lại cột mốc ngày 24/10/2022</a>
              </h5>
              <p class="entry-content">Sau một thời gian dài ấp ủ cùng sự chuẩn bị kỹ lưỡng, ngày 24/10 vừa qua, Công ty
                Cổ phần Trầm Thiện Tâm đã&nbsp;long trọng tổ chức lễ ra mắt, khai trương Cung Trầm...</p>
              <div class="article-post-meta">
                <span class="author">bởi: Trang LH</span>
                <i style="vertical-align: middle;" class="bi bi-dot fs-4"></i>
                <span class="date">
                  <time pubdate="" datetime="26 Tháng 10, 2022">26 Tháng 10, 2022</time>
                </span>
              </div>
              </di>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-12 px-2 mb-3">
          <div class="article-item bg-white">
            <a class="bg-img-cover d-block" href="index.php?p=chitiettintuc" style="background-image: url(public/demo/khai_truong.webp);">
            </a>
            <div class="p-3">
              <h5 class="post-title">
                <a href="index.php?p=chitiettintuc"
                  title="Khai trương Cung Trầm Gallery - Nhìn lại cột mốc ngày 24/10/2022">Khai trương Cung
                  Trầm
                  Gallery - Nhìn lại cột mốc ngày 24/10/2022</a>
              </h5>
              <p class="entry-content">Sau một thời gian dài ấp ủ cùng sự chuẩn bị kỹ lưỡng, ngày 24/10 vừa qua, Công ty
                Cổ phần Trầm Thiện Tâm đã&nbsp;long trọng tổ chức lễ ra mắt, khai trương Cung Trầm...</p>
              <div class="article-post-meta">
                <span class="author">bởi: Trang LH</span>
                <i style="vertical-align: middle;" class="bi bi-dot fs-4"></i>
                <span class="date">
                  <time pubdate="" datetime="26 Tháng 10, 2022">26 Tháng 10, 2022</time>
                </span>
              </div>
              </di>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xxl-4 col-12">
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
                      <a href="index.php?p=chitiettintuc">Bột trầm hương là gì? Công dụng và cách
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
                      <a href="index.php?p=chitiettintuc">Bột trầm hương là gì? Công dụng và cách
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
                      <a href="index.php?p=chitiettintuc">Bột trầm hương là gì? Công dụng và cách
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
                      <a href="index.php?p=chitiettintuc">Bột trầm hương là gì? Công dụng và cách
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
                  <a href="/collections/tram-huong-xong-dot" title="Trầm Hương Xông Đốt">Trầm Hương Xông Đốt
                    <span class="icon-plus-submenu plus-nClick1"></span>
                  </a>
                </li>
                <li class="has-submenu level0 ">
                  <a href="/collections/dung-cu-thuong-tram" title="Dụng Cụ Thưởng Trầm">Dụng Cụ Thưởng Trầm
                    <span class="icon-plus-submenu plus-nClick1"></span>
                  </a>
                </li>
                <li class="has-submenu level0 ">
                  <a href="/collections/qua-tang-tram-huong" title="Quà Tặng Trầm Hương">Quà Tặng Trầm Hương
                    <span class="icon-plus-submenu plus-nClick1"></span>
                  </a>
                </li>
                <li class="has-submenu level0 ">
                  <a href="/collections/trang-suc-tram-huong" title="Trang Sức Trầm Hương">Trang Sức Trầm Hương
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
</div>