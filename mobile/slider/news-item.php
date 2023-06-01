<style>
    /* big item news */
    .item-news-bg {
        padding-bottom: calc(100%*2/3);
    }

    .item-news-bg::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #000;
        opacity: 0.3;
        z-index: 1;
    }

    .item-news-block:hover .play-btn {
        animation: play_video 1.5s ease infinite;
    }

    .overlay-news {
        top: 0;
        left: 0;
        padding: 30px;
        backface-visibility: hidden;
        pointer-events: none;
        z-index: 3;
    }

    .overlay-news::before {
        content: '';
        position: absolute;
        top: 30px;
        right: 30px;
        bottom: 30px;
        left: 30px;
        border: 1px solid #fff;
        border-radius: 0.25rem;
        box-shadow: 0 0 0 45px rgba(255, 255, 255, 0.2);
        opacity: 0;
        transition: opacity 0.35s, transform 0.35s;
        transform: scale3d(1.4, 1.4, 1);
        background-image: url(public/demo/favicon.png);
        background-repeat: no-repeat;
        background-position: center center;
        background-size: 70px;
        background-color: rgba(76, 175, 80, 0.2);
    }

    .img-thumb:hover .overlay-news::before {
        opacity: 1;
        transform: scale3d(1, 1, 1);
    }

    /* end big item news */

    /* horizontal item news */
    /* end horizontal item news */

</style>

<!-- big item news -->
<div class="row">
    <a class="img-thumb d-block position-relative overflow-hidden" href="index.php?p=detailnews">
        <div class="bg-img-main ratio3by2 rounded-10" style="background-image: url(public/demo/item-24h-1.jpg);"></div>
        <div class="position-absolute w-100 h-100 overlay-news"></div>
    </a>
    <div class="news-info">
        <h5 class="fw-bold mt-2">
            <a class="line_1" href="index.php?p=detailnews"
                title="Hé lộ thông số kỹ thuật Galaxy Buds 2 Pro, rất đáng để chờ đợi!!!">
                Hé lộ thông số kỹ thuật Galaxy Buds 2 Pro, rất đáng để chờ đợi!!!
            </a>
        </h5>
        <div class="line_2 text-justify">
            Đã một thời gian kể từ khi&nbsp;Samsung&nbsp;tung ra một cặp&nbsp;tai nghe không
            dây&nbsp;cho người dùng. Công ty sẽ khắc phục điều đó vào ngày 10 tháng 8 tại sự kiện
            Unpacked, bằng việc giới thiệu&nbsp;Galaxy Buds 2 Pro&nbsp;mới cùng loạt Galaxy Z thế hệ
            mới cũng như Galaxy Watch5 series.
            Đã có một vài rò rỉ cung cấp thông tin về Galaxy Buds 2 Pro, bao gồm tính năng khử tiếng
            ồn được cải tiến và chất lượng âm thanh tốt hơn.
            Theo đó, Galaxy Buds 2 Pro được cho là có tính năng Khử tiếng ồn chủ động thông minh
            có...
        </div>
    </div>
</div>
<!-- end big item news -->