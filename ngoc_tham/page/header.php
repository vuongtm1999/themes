<style type="text/css">
  .header-item {
    color: #6f6f6f;
  }

  .ticky-menu {
    border-top: 4px solid var(--color-red-main);
    z-index: 99;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
  }

  a:hover {
    color: var(--color-red-main);
  }

  .content-price-gold {
    position: absolute;
    left: 0;
    right: 0;
    top: 146px;
    z-index: 2;
    display: none;
  }

  .overlay-1 {
    content: "";
    position: fixed;
    top: calc(var(--header-height-value) - 1px);
    left: 0;
    right: 0;
    bottom: 0;
    height: 100%;
    background-color: #000;
    z-index: 1;
    opacity: 0.5;
    display: none;
    animation: growth linear 0.1s;
    will-change: opacity;
  }

  .overlay {
    content: "";
    position: fixed;
    top: calc(var(--header-height-value) + 1px);
    left: 0;
    right: 0;
    bottom: 0;
    height: 100%;
    background-color: #000;
    z-index: 3;
    opacity: 0.5;
    display: none;
    animation: growth linear 0.1s;
    will-change: opacity;
  }

  .content-item {
    position: absolute;
    left: 0;
    right: 0;
    top: calc(var(--header-height-value) - 2px);
    z-index: 7;
    display: none;
    animation: growth linear 0.2s;
    will-change: opacity;
  }

  .nav-item:hover {
    border-bottom: 2px solid var(--color-red-main);
  }

  .nav-item:hover .header-item {
    color: var(--color-red-main);
  }

  .nav-item:hover .content-item {
    display: block;
  }

  .nav-item:hover~.overlay {
    display: block;
  }

  .price-table thead {
    color: var(--color-red-main);
    text-transform: uppercase;
    border-bottom: 2px solid var(--color-red-main);
  }

  .price-table td {
    letter-spacing: 1.35px;
  }

  .price-table .type {
    letter-spacing: 1.8px;
  }

  .header-main {
    height: var(--header-height-value);
  }

  .search-input-toggle {
    position: absolute;
    left: 0;
    right: 0;
    top: 146px;
    display: none;
    height: 13vh;
    z-index: 99;
  }

  .header-main .overlay-2 {
    content: "";
    position: fixed;
    top: calc(var(--header-height-value) + 1px);
    left: 0;
    right: 0;
    bottom: 0;
    height: 100%;
    background-color: #000;
    z-index: 3;
    opacity: 0.5;
    display: none;
  }

  .search-btn {
    color: var(--color-red-main);
  }

  .search-input-toggle input[type=text] {
    border: none;
    border-bottom: 1px solid #f0c98d;
    color: #3e3d42;
    font-size: 32px;
    background: 0 0;
    width: 100%;
    outline: 0;
  }

  .search-input-toggle button {
    font-size: 32px;
    background: transparent;
  }

  .search-offcanvas input[type=text] {
    border: none;
    border-bottom: 1px solid #f0c98d;
    color: #3e3d42;
    font-size: 32px;
    background: 0 0;
    width: 100%;
    outline: 0;
  }

  .search-offcanvas button {
    font-size: 32px;
    background: transparent;
  }

  #offcanvas-menu {
    width: 75vw;
  }

  #offcanvas-search {
    width: 100%;
    height: 100%;
  }


  /* md */
  @media (min-width: 768px) {}

  /* PC */
  @media (min-width: 1400px) {}
</style>

<div class="row d-none d-xxl-flex header-main position-relative">
  <div class="ticky-menu bg-primary">
    <div class="d-xxl-flex flex-wrap align-items-center py-4 px-5">
      <!-- Gia vang -->
      <div class="col-xxl-1">
        <a style="width: 105px;" class="fs-6 d-block text-uppercase hover-yellow fw-bold hover-offcanvas"
          href="javascript:void();">
          <i class="fa-solid fa-money-check-dollar"></i> Giá vàng
        </a>
        <div class="content-price-gold bg-primary">
          <div class="d-flex flex-wrap justify-content-center pb-5">
            <div class="col-xxl-2 position-relative">
              <div style="line-height: normal;" class="mt-2 text-uppercase fw-bold fs-3">Giá vàng</div>
              <p class="position-absolute start-0 bottom-0 text-uppercase fs-6">
                <span class="text-red fw-bolder">ĐƠN VỊ TÍNH</span> VND/CHỈ<br>
                10/04/2023 11:48 AM
              </p>
            </div>
            <div class="col-xxl-7">
              <table class="table price-table">
                <thead>
                  <tr>
                    <th>Loại vàng</th>
                    <th>Giá mua</th>
                    <th>Giá bán</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="city-0" style="display: table-row;">
                    <td class="fs-5 fw-bolder type">Vàng miếng SJC</td>
                    <td class="fs-5">6.610.000</td>
                    <td class="fs-5">6.690.000</td>
                  </tr>
                  <tr class="city-0" style="display: table-row;">
                    <td class="fs-5 fw-bolder type">Nhẫn 999.9</td>
                    <td class="fs-5">5.460.000</td>
                    <td class="fs-5">5.540.000</td>
                  </tr>
                  <tr class="city-0" style="display: table-row;">
                    <td class="fs-5 fw-bolder type">Vàng 24K (990)</td>
                    <td class="fs-5">5.400.000</td>
                    <td class="fs-5">5.520.000</td>
                  </tr>
                  <tr class="city-0" style="display: table-row;">
                    <td class="fs-5 fw-bolder type">Vàng 18K (750)</td>
                    <td class="fs-5">4.015.000</td>
                    <td class="fs-5">4.345.000</td>
                  </tr>
                  <tr class="city-0" style="display: table-row;">
                    <td class="fs-5 fw-bolder type">Vàng trắng Au750</td>
                    <td class="fs-5">4.015.000</td>
                    <td class="fs-5">4.345.000</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="overlay-1"></div>
      </div>
      <!--  -->
      <div class="col text-center">
        <a href="index.php"><img src="public/demo/logo_header.svg" alt=""></a>
      </div>
      <!-- search and products have loved -->
      <div class="col-xxl-1">
        <div class="d-flex justify-content-end">
          <span class="search-icon"><i class="bi bi-search hover-yellow me-3 fs-5"></i></span>
          <a href="index.php?p=lovedproduct"><i class="bi bi-heart-half hover-yellow fs-5"></i></a>
        </div>

        <div class="search-input-toggle bg-primary px-5">
          <div class="d-flex justify-content-center pt-1">
            <div class="col-10">
              <form action="/" class="form position-relative">
                <input type="text" class="w-100" placeholder="Tìm kiếm...">
                <button class="search-btn border-0 hover-yellow position-absolute end-0 top-0">
                  <i class="bi bi-search"></i>
                </button>
              </form>
            </div>
          </div>
        </div>
        <div class="overlay-2"></div>
      </div>
    </div>



    <div class="d-xxl-flex flex-wrap justify-content-center">
      <div class="px-3 py-3 mx-4 nav-item">
        <a class="header-item fw-bolder" href="index.php">TRANG CHỦ</a>
      </div>
      <div class="px-3 py-3 mx-4 nav-item">
        <a class="header-item fw-bolder" href="javascript:void()">VỀ NGỌC THẨM</a>
        <div class="content-item bg-primary text-center pt-4 py-5">
          <div class="d-flex flex-wrap justify-content-center">
            <!-- Nav toggle -->
            <div class="col-2 text-start">
              <ul class="nav flex-column">
                <li class="title-link active mb-3" onmouseover="openImage(event, 'thegioitrangsuc')">
                  <a href="index.php?p=thegioitrangsuc" class="text-grey" data-toggle="tab">
                    THẾ GIỚI TRANG SỨC
                  </a>
                </li>
                <li class="title-link mb-3" onmouseover="openImage(event, 'tamnhin')">
                  <a href="index.php?p=tamnhin" class="text-grey" data-toggle="tab">
                    TẦM NHÌN & SỨ MỆNH
                  </a>
                </li>
                <li class="title-link mb-3" onmouseover="openImage(event, 'giatri')">
                  <a href="index.php?p=giatri" class="text-grey" data-toggle="tab">
                    GIÁ TRỊ THƯƠNG HIỆU
                  </a>
                </li>
                <li class="title-link mb-3" onmouseover="openImage(event, 'quatrinh')">
                  <a href="index.php?p=quatrinh" class="text-grey" data-toggle="tab">
                    QUÁ TRÌNH PHÁT TRIỂN
                  </a>
                </li>
                <li class="title-link mb-3" onmouseover="openImage(event, 'thanhtuu')">
                  <a href="index.php?p=thanhtuu" class="text-grey" data-toggle="tab">
                    THÀNH TỰU
                  </a>
                </li>
                <li class="title-link mb-3" onmouseover="openImage(event, 'flagship')">
                  <a href="index.php?p=flagship" class="text-grey" data-toggle="tab">
                    NTJ FLAGSHIP
                  </a>
                </li>
              </ul>
            </div>

            <!-- Tab panes -->
            <div class="col-4 tab-content well">
              <div class="tab-pane active" id="thegioitrangsuc">
                <img src="public/demo/about_us_1.jpg" class="img-fluid" alt="">
              </div>
              <div class="tab-pane" id="tamnhin">
                <img src="public/demo/about_us_2.jpg" class="img-fluid" alt="">
              </div>
              <div class="tab-pane" id="giatri">
                <img src="public/demo/about_us_3.jpg" class="img-fluid" alt="">
              </div>
              <div class="tab-pane" id="quatrinh">
                <img src="public/demo/about_us_4.jpg" class="img-fluid" alt="">
              </div>
              <div class="tab-pane" id="thanhtuu">
                <img src="public/demo/about_us_5.jpg" class="img-fluid" alt="">
              </div>
              <div class="tab-pane" id="flagship">
                <img src="public/demo/about_us_6.jpg" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="px-3 py-3 mx-4 nav-item">
        <a class="header-item fw-bolder" href="javascript:void()">BỘ SƯU TẬP</a>
        <div class="content-item bg-primary text-center pt-4 py-5">
          <div class="d-flex flex-wrap justify-content-center">
            <!-- Nav pills -->
            <div class="col-2 text-start">
              <ul class="nav flex-column">
                <li class="title-link mb-3" onmouseover="openImage(event, 'dauanphaimanh')">
                  <a href="index.php?p=dauanphaimanh" class="text-grey text-uppercase" data-toggle="tab">
                    Dấu Ấn Phái Mạnh
                  </a>
                </li>
                <li class="title-link mb-3" onmouseover="openImage(event, 'lunglinhsacviet')">
                  <a href="index.php?p=lunglinhsacviet" class="text-grey" data-toggle="tab">
                    LUNG LINH SẮC VIỆT
                  </a>
                </li>
                <li class="title-link mb-3" onmouseover="openImage(event, 'anxuan')">
                  <a href="index.php?p=anxuan" class="text-grey" data-toggle="tab">
                    AN XUÂN
                  </a>
                </li>
                <li class="title-link mb-3" onmouseover="openImage(event, 'thantai')">
                  <a href="index.php?p=thantai" class="text-grey" data-toggle="tab">
                    THẦN TÀI ĐẠI CÁT 2023
                  </a>
                </li>
                <li class="title-link mb-3" onmouseover="openImage(event, 'dinhcaophaimanh')">
                  <a href="index.php?p=dinhcaophaimanh" class="text-grey" data-toggle="tab">
                    ĐỈNH CAO PHÁI MẠNH
                  </a>
                </li>
                <li class="title-link mb-3" onmouseover="openImage(event, 'enuyenuong')">
                  <a href="index.php?p=enuyenuong" class="text-grey" data-toggle="tab">
                    ÉN UYÊN ƯƠNG
                  </a>
                </li>
                <li class="title-link mb-3" onmouseover="openImage(event, 'cucvienman')">
                  <a href="index.php?p=cucvienman" class="text-grey" data-toggle="tab">
                    CÚC VIÊN MÃN
                  </a>
                </li>
                <li class="title-link mb-3 active" onmouseover="openImage(event, 'xuhuongmoi')">
                  <a href="index.php?p=listproducts1" class="text-grey" data-toggle="tab">
                    XU HƯỚNG MỚI NHẤT
                  </a>
                </li>
              </ul>
            </div>

            <!-- Tab panes -->
            <div class="col-4 tab-content well">
              <div class="tab-pane" id="dauanphaimanh">
                <img src="public/demo/collection_1.jpg" class="img-fluid" alt="">
              </div>
              <div class="tab-pane" id="lunglinhsacviet">
                <img src="public/demo/collection_2.jpg" class="img-fluid" alt="">
              </div>
              <div class="tab-pane" id="anxuan">
                <img src="public/demo/collection_3.jpg" class="img-fluid" alt="">
              </div>
              <div class="tab-pane" id="thantai">
                <img src="public/demo/collection_4.jpg" class="img-fluid" alt="">
              </div>
              <div class="tab-pane" id="dinhcaophaimanh">
                <img src="public/demo/collection_5.jpg" class="img-fluid" alt="">
              </div>
              <div class="tab-pane" id="enuyenuong">
                <img src="public/demo/collection_6.jpg" class="img-fluid" alt="">
              </div>
              <div class="tab-pane active" id="cucvienman">
                <img src="public/demo/collection_7.jpg" class="img-fluid" alt="">
              </div>
              <div class="tab-pane" id="xuhuongmoi">
                <img src="public/demo/collection_7.jpg" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="px-3 py-3 mx-4 nav-item">
        <a class="header-item fw-bolder" href="javascript:void()">DÒNG TRANG SỨC</a>
        <div class="content-item bg-primary text-center pt-4 py-5">
          <div class="d-flex flex-wrap justify-content-center">
            <!-- Nav pills -->
            <div class="col-3 text-start d-flex">
              <ul class="nav flex-column me-5">
                <li class="title-link active mb-3" onmouseover="openImage(event, 'vang')">
                  <a href="index.php?p=listproducts2" class="text-grey" data-toggle="tab">
                    VÀNG
                  </a>
                </li>
                <li class="title-link mb-3" onmouseover="openImage(event, 'cuoi')">
                  <a href="index.php?p=listproducts2" class="text-grey" data-toggle="tab">
                    CƯỚI
                  </a>
                </li>
                <li class="title-link mb-3" onmouseover="openImage(event, 'kimcuong')">
                  <a href="index.php?p=listproducts2" class="text-grey" data-toggle="tab">
                    KIM CƯƠNG
                  </a>
                </li>
                <li class="title-link mb-3" onmouseover="openImage(event, 'damauswa')">
                  <a href="index.php?p=listproducts2" class="text-grey" data-toggle="tab">
                    ĐÁ MÀU SWAROVSKI
                  </a>
                </li>
                <li class="title-link mb-3" onmouseover="openImage(event, 'damautonghop')">
                  <a href="index.php?p=listproducts2" class="text-grey" data-toggle="tab">
                    ĐÁ MÀU TỔNG HỢP
                  </a>
                </li>
              </ul>
              <ul class="nav flex-column">
                <li class="title-link mb-3 active" onmouseover="openImage(event, 'camthach')">
                  <a href="index.php?p=listproducts2" class="text-grey" data-toggle="tab">
                    CẨM THẠCH
                  </a>
                </li>
                <li class="title-link mb-3" onmouseover="openImage(event, 'ngoctrai')">
                  <a href="index.php?p=listproducts3" class="text-grey" data-toggle="tab">
                    NGỌC TRAI
                  </a>
                </li>
                <li class="title-link mb-3" onmouseover="openImage(event, 'phongthuy')">
                  <a href="index.php?p=listproducts2" class="text-grey" data-toggle="tab">
                    PHONG THỦY
                  </a>
                </li>
                <li class="title-link mb-3" onmouseover="openImage(event, 'tatca')">
                  <a href="index.php?p=listproducts2" class="text-grey" data-toggle="tab">
                    TẤT CẢ
                  </a>
                </li>
              </ul>
            </div>
            <!-- space -->
            <div class="col-1"></div>
            <!-- Tab panes -->
            <div class="col-4 tab-content well">
              <div class="tab-pane" id="vang">
                <img src="public/demo/cate_1.jpg" class="img-fluid" alt="">
              </div>
              <div class="tab-pane" id="cuoi">
                <img src="public/demo/cate_2.jpg" class="img-fluid" alt="">
              </div>
              <div class="tab-pane" id="kimcuong">
                <img src="public/demo/cate_3.jpg" class="img-fluid" alt="">
              </div>
              <div class="tab-pane" id="damauswa">
                <img src="public/demo/cate_4.jpg" class="img-fluid" alt="">
              </div>
              <div class="tab-pane" id="damautonghop">
                <img src="public/demo/cate_5.jpg" class="img-fluid" alt="">
              </div>
              <div class="tab-pane active" id="camthach">
                <img src="public/demo/cate_6.jpg" class="img-fluid" alt="">
              </div>
              <div class="tab-pane" id="ngoctrai">
                <img src="public/demo/cate_7.jpg" class="img-fluid" alt="">
              </div>
              <div class="tab-pane" id="phongthuy">
                <img src="public/demo/cate_8.jpg" class="img-fluid" alt="">
              </div>
              <div class="tab-pane" id="tatca">
                <img src="public/demo/cate_9.jpg" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="px-3 py-3 mx-4 nav-item">
        <a class="header-item fw-bolder" href="javascript:void()">LOẠI SẢN PHẨM</a>
        <div class="content-item bg-primary text-center pt-4 py-5">
          <div class="d-flex flex-wrap justify-content-center">
            <!-- Nav pills -->
            <div class="col-3 text-start d-flex">
              <ul class="nav flex-column me-5">
                <li class="title-link active mb-3" onmouseover="openImage(event, 'loai-1')">
                  <a href="index.php?p=listproducts3" class="text-grey" data-toggle="tab">
                    NHẪN NỮ
                  </a>
                </li>
                <li class="title-link mb-3" onmouseover="openImage(event, 'loai-2')">
                  <a href="index.php?p=listproducts3" class="text-grey" data-toggle="tab">
                    NHẪN NAM
                  </a>
                </li>
                <li class="title-link mb-3" onmouseover="openImage(event, 'loai-3')">
                  <a href="index.php?p=listproducts3" class="text-grey" data-toggle="tab">
                    NHẪN CƯỚI 
                  </a>
                </li>
                <li class="title-link mb-3" onmouseover="openImage(event, 'loai-4')">
                  <a href="index.php?p=listproducts3" class="text-grey" data-toggle="tab">
                    BÔNG TAI
                  </a>
                </li>
                <li class="title-link mb-3" onmouseover="openImage(event, 'loai-5')">
                  <a href="index.php?p=listproducts3" class="text-grey" data-toggle="tab">
                    MẶT DÂY CHUYỀN
                  </a>
                </li>
              </ul>
              <ul class="nav flex-column">
                <li class="title-link mb-3 active" onmouseover="openImage(event, 'loai-6')">
                  <a href="index.php?p=listproducts3" class="text-grey" data-toggle="tab">
                    DÂY CHUYỀN
                  </a>
                </li>
                <li class="title-link mb-3" onmouseover="openImage(event, 'loai-7')">
                  <a href="index.php?p=listproducts3" class="text-grey" data-toggle="tab">
                    LẮC & VÒNG TAY
                  </a>
                </li>
                <li class="title-link mb-3" onmouseover="openImage(event, 'loai-8')">
                  <a href="index.php?p=listproducts3" class="text-grey" data-toggle="tab">
                    BỘ TRANG SỨC
                  </a>
                </li>
                <li class="title-link mb-3" onmouseover="openImage(event, 'loai-9')">
                  <a href="index.php?p=listproducts3" class="text-grey" data-toggle="tab">
                    KIỀNG 
                  </a>
                </li>
                <li class="title-link mb-3" onmouseover="openImage(event, 'loai-10')">
                  <a href="index.php?p=listproducts3" class="text-grey" data-toggle="tab">
                    TRẺ EM 
                  </a>
                </li>
                <li class="title-link mb-3" onmouseover="openImage(event, 'loai-11')">
                  <a href="index.php?p=listproducts3" class="text-grey" data-toggle="tab">
                    PHỤ KIỆN  
                  </a>
                </li>
                <li class="title-link mb-3" onmouseover="openImage(event, 'loai-12')">
                  <a href="index.php?p=listproducts3" class="text-grey" data-toggle="tab">
                    TẤT CẢ 
                  </a>
                </li>
              </ul>
            </div>
            <!-- space -->
            <div class="col-1"></div>
            <!-- Tab panes -->
            <div class="col-4 tab-content well">
              <div class="tab-pane" id="loai-1">
                <img src="public/demo/type_1.jpg" class="img-fluid" alt="">
              </div>
              <div class="tab-pane" id="loai-2">
                <img src="public/demo/type_2.jpg" class="img-fluid" alt="">
              </div>
              <div class="tab-pane" id="loai-3">
                <img src="public/demo/type_3.jpg" class="img-fluid" alt="">
              </div>
              <div class="tab-pane" id="loai-4">
                <img src="public/demo/type_4.jpg" class="img-fluid" alt="">
              </div>
              <div class="tab-pane" id="loai-5">
                <img src="public/demo/type_5.jpg" class="img-fluid" alt="">
              </div>
              <div class="tab-pane active" id="loai-6">
                <img src="public/demo/type_6.jpg" class="img-fluid" alt="">
              </div>
              <div class="tab-pane" id="loai-7">
                <img src="public/demo/type_7.jpg" class="img-fluid" alt="">
              </div>
              <div class="tab-pane" id="loai-8">
                <img src="public/demo/type_8.jpg" class="img-fluid" alt="">
              </div>
              <div class="tab-pane" id="loai-9">
                <img src="public/demo/type_9.jpg" class="img-fluid" alt="">
              </div>
              <div class="tab-pane" id="loai-10">
                <img src="public/demo/type_10.jpg" class="img-fluid" alt="">
              </div>
              <div class="tab-pane" id="loai-11">
                <img src="public/demo/type_11.jpg" class="img-fluid" alt="">
              </div>
              <div class="tab-pane" id="loai-12">
                <img src="public/demo/type_12.jpg" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="px-3 py-3 mx-4 nav-item">
        <a class="header-item fw-bolder" href="index.php?p=lienhe">LIÊN HỆ</a>
      </div>
      <div class="overlay"></div>
    </div>
  </div>
</div>

<!-- Header Mobile and tablet -->
<div style="height: 66px;" class="row bg-primary px-3 py-2 d-flex d-xxl-none">
  <div class="ticky-menu d-flex flex-wrap bg-primary align-items-center py-2">
    <div class="col-3">
      <a class="me-4" data-bs-toggle="offcanvas" href="#offcanvas-menu">
        <i class="fa-solid fa-bars"></i>
      </a>
      <a class="fs-6 text-uppercase fw-bold" href="javascript:void();">
        <i class="fa-solid fa-money-check-dollar"></i>
      </a>
    </div>
    <div class="col-6 text-center">
      <a href="index.php"><img class="img-fluid" src="public/demo/logo_header.svg" alt=""></a>
    </div>
    <div class="col-3 text-end">
      <a data-bs-toggle="offcanvas" href="#offcanvas-search"><i class="bi bi-search hover-yellow me-3 fs-5"></i></a>
      <i class="bi bi-heart-half hover-yellow fs-5"></i>
    </div>
  </div>
</div>

<!-- offcanvas -->
<div class="offcanvas offcanvas-start bg-primary" tabindex="-1" id="offcanvas-menu"
  aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <a type="button" class="text-red fw-bold" data-bs-dismiss="offcanvas" aria-label="Close">
      <i class="fa-solid fa-xmark fs-5 me-2"></i> <span class="align-text-bottom">Đóng</span>
    </a>
  </div>
  <div class="offcanvas-body">
    <h6 class="text-center fw-bold text-red border-1 border-bottom border-danger py-2 text-uppercase">Menu</h5>
      <h5 class="mt-4"><a class="text-uppercase" href="index.php?p=trangchu">Trang chủ</a></h5>
      <h5 class="mt-4 d-flex justify-content-between">
        <a class="text-uppercase" data-bs-toggle="offcanvas" href="#offcanvas-sub-menu-1">
          Về Ngọc Thẩm
        </a>
        <i class="fa-solid fa-caret-right fs-5"></i>
      </h5>
      <h5 class="mt-4 d-flex justify-content-between">
        <a class="text-uppercase" href="#">Bộ Sưu Tập</a>
        <i class="fa-solid fa-caret-right fs-5"></i>
      </h5>
      <h5 class="mt-4 d-flex justify-content-between">
        <a class="text-uppercase" href="#">Dòng Trang Sức</a>
        <i class="fa-solid fa-caret-right fs-5"></i>
      </h5>
      <h5 class="mt-4 d-flex justify-content-between">
        <a class="text-uppercase" href="#">Loại Sản Phẩm</a>
        <i class="fa-solid fa-caret-right fs-5"></i>
      </h5>
      <h5 class="mt-4"><a class="text-uppercase" href="index.php?p=lienhe">Liên hệ</a></h5>
  </div>
</div>

<div class="offcanvas offcanvas-top bg-primary" tabindex="-1" id="offcanvas-search"
  aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <a type="button" class="text-red fw-bold" data-bs-dismiss="offcanvas" aria-label="Close">
      <i class="fa-solid fa-xmark fs-5 me-2"></i> <span class="align-text-bottom">Đóng</span>
    </a>
  </div>
  <div class="offcanvas-body search-offcanvas">
    <form action="/" class="form position-relative mt-5">
      <input type="text" class="w-100" placeholder="Tìm kiếm...">
      <button class="search-btn border-0 hover-yellow position-absolute end-0 top-0">
        <i class="bi bi-search"></i>
      </button>
    </form>
  </div>
</div>

<script>
  function openImage(evt, cityName) {
    $(".title-link").each(function () {
      $(this).removeClass("active");
    });

    evt.currentTarget.className += " active";

    $(".tab-content .tab-pane").each(function () {
      $(this).removeClass("active");
    });

    $(`.tab-content #${cityName}`).addClass("active");
  }

  $(document).ready(function () {
    $(".hover-offcanvas").click(function () {
      if ($(this).text().includes("Giá vàng")) {
        $(this).html(`<i class="bi bi-x-lg me-2"></i> <span>Đóng</span>`);
      } else {
        $(this).html(`<i class="fa-solid fa-money-check-dollar"></i> Giá vàng`);
      }

      $(this).toggleClass("text-red");

      $(".content-price-gold").slideToggle(300, "linear");
      $(".overlay-1").toggle();
    });

    $(".overlay-1").click(function () {
      $(".content-price-gold").slideToggle();
      $(".overlay-1").toggle();
      $(".hover-offcanvas").html(`<i class="fa-solid fa-money-check-dollar"></i> Giá vàng`);
    });

    $(".header-main .search-icon").click(function () {
      $(".search-input-toggle").slideToggle(500);
      if ($(this).html() == `<i class="bi bi-search hover-yellow me-3 fs-5"></i>`) {
        $(this).html(`<i style="color: var(--color-red-main);" class="bi bi-x-lg me-3 hover-yellow fs-5"></i>`);
      } else {
        $(this).html(`<i class="bi bi-search hover-yellow me-3 fs-5"></i>`);
      }

      $(".overlay-2").toggle();
    });

    $(".overlay-2").click(function () {
      $(".search-input-toggle").slideToggle();
      $(".overlay-2").toggle();
      if ($(".header-main .search-icon").html() == `<i class="bi bi-search hover-yellow me-3 fs-5"></i>`) {
        $(".header-main .search-icon").html(`<i style="color: var(--color-red-main);" class="bi bi-x-lg me-3 hover-yellow fs-5"></i>`);
      } else {
        $(".header-main .search-icon").html(`<i class="bi bi-search hover-yellow me-3 fs-5"></i>`);
      }
    });
  });

</script>