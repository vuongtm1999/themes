<style>
    p {
        margin-bottom: 1rem;
    }

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

    .my_collapse_title::after {
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

    .news-author,
    .article-post-meta {
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

    .table-of-contents li::marker {
        color: var(--shop-color-main);
    }

    .table-of-contents {
        background: #f7fbf9;
        border: 1px solid #e0f1e9;
        border-radius: 6px;
        display: block;
        padding: 8px 15px;
        box-shadow: 0 1px 1px rgb(0 0 0 / 5%);
        position: relative;
        margin: 0 auto 30px;
        width: 100%;
        max-width: 860px;
        display: table;
    }

    .box-tags .tag {
        color: red;
    }

    .article-comment-form h4 {
        border-bottom: 1px solid var(--shop-color-border);
    }

    .sent-comment-btn {
        border: none;
        outline: unset;
        color: #ffffff;
        background-color: var(--shop-color-button);
    }

    .box-captcha {
        color: #9e9e9e;
    }

    .box-captcha a {
        color: #2962ff;
    }

    .article-item {
        min-height: 334px;
    }

    .related_article .owl-nav [class*="owl-"]:hover {
        background: var(--shop-color-button);
        color: #fff;
    }

    .related_article .owl-prev.disabled:hover {
        background: #fff !important;
        color: #858380;
        cursor: no-drop;
    }

    .related_article .icon-next,
    .related_article .icon-prev {
        width: 30px;
        height: 30px;
        vertical-align: middle;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .related_article>.owl-nav>.owl-next,
    .related_article>.owl-nav>.owl-prev {
        background-color: white;
        z-index: 3;
        border-radius: 50%;
        color: #858380;
        background: #fff;
        border: 1px solid var(--shop-color-border);
        box-shadow: 0 0.125rem 0.25rem rgb(0 0 0 / 8%);
        margin: 0px;
    }

    .related_article>.owl-nav>.owl-next {
        position: absolute;
        top: -20%;
        right: 0;
    }

    .related_article>.owl-nav>.owl-prev {
        position: absolute;
        top: -20%;
        right: 40px;
    }

    @media(min-width: 768px) {
        .px-6 {
            padding-left: 4vw !important;
            padding-right: 4vw !important;
        }
    }

    @media(min-width: 1400px) {
        .px-6 {
            padding-left: 4vw !important;
            padding-right: 4vw !important;
        }

        .blogs-aside--sticky {
            top: 30px;
            position: -webkit-sticky;
            position: sticky;
            transition: top 400ms ease;
        }
    }
</style>

<div class="row px-6 py-1 bg_light_grey">
    <div class="pt-2">
        <p class="breadcrumb">Trang chủ / Tin tức / >Khai trương Cung Trầm Gallery - Nhìn lại cột mốc ngày
            24/10/2022</p>
    </div>
</div>
<div class="row px-6 bg_light_grey pb-5">
    <div class="col-xxl-8 col-12 py-3 rounded">
        <!-- Bai viet -->
        <div class="bg-white p-4">
            <h5>
                Bột trầm hương là gì? Công dụng và cách bảo quản bột trầm hương
            </h5>
            <p class="fw-light news-author">bởi: Anh LTQ
                <i style="vertical-align:middle;" class="bi bi-dot fs-3 opacity-25"></i>
                26 Tháng 10, 2022
                <i style="vertical-align:middle;" class="bi bi-dot fs-3 opacity-25"></i>
                <i style="vertical-align:middle;" class="fa-regular fa-comment"></i>
                0 Bình luận
            </p>
            <div class="mb-4">
                <img class="img-fluid" src="public/demo/chi_tiet_kien_thuc.JPG" alt="">
            </div>

            <!-- body news -->
            <div class="pb-4 px-xxl-5 px-0">
                <div id="table-content-container" class="table-of-contents">
                    <h6 class="py-2">
                        Các nội dung chính [<a class="toggle-btn" href="javascript:void(0)">Ẩn</a>]
                    </h6>
                    <ul class="mb-0 ps-3 danh-muc">
                        <li><a href="#bot_tram_huong_la_gi__co_may_loai_bot_tram_huong_">Bột trầm hương là gì? Có mấy
                                loại
                                bột trầm hương?</a>
                            <ul>
                                <li><a href="#bot_tram_huong_nguyen_chat">Bột trầm hương nguyên chất&nbsp;</a></li>
                                <li><a href="#bot_tram_huong_cao_cap">Bột trầm hương cao cấp</a></li>
                                <li><a href="#bot_tram_huong_thuong_hang">Bột trầm hương thượng hạng&nbsp;</a></li>
                            </ul>
                        </li>
                        <li><a href="#bot_tram_huong_xong_dot_co_tac_dung_gi_">Bột trầm hương xông đốt có tác dụng
                                gì?</a>
                        </li>
                        <li><a href="#xong_dot_bot_tram_huong_mang_y_nghia_gi_">Xông đốt bột trầm hương mang ý nghĩa
                                gì?</a>
                            <ul>
                                <li><a href="#y_nghia_doi_voi_doi_song_phong_thuy">Ý nghĩa đối với đời sống phong
                                        thủy</a>
                                </li>
                                <li><a href="#y_nghia_trong_y_hoc_-_suc_khoe">Ý nghĩa trong y học - sức khỏe&nbsp;</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#bot_tram_huong_de_lam_gi_">Bột trầm hương để làm gì?</a></li>
                        <li><a href="#cach_su_dung_va_bao_quan_bot_tram_huong">Cách sử dụng và bảo quản bột trầm
                                hương</a>
                            <ul>
                                <li><a href="#cach_su_dung_bot_tram_huong">Cách sử dụng bột trầm hương</a></li>
                                <li><a href="#cach_bao_quan_bot_tram_huong">Cách bảo quản bột trầm hương</a></li>
                            </ul>
                        </li>
                        <li><a href="#mua_bot_tram_huong_o_dau_uy_tin_-_chat_luong_-_gia_ca_hop_ly">Mua bột trầm hương ở
                                đâu
                                uy tín - chất lượng - giá cả hợp lý&nbsp;</a></li>
                    </ul>
                </div>

                <div class="box-article-detail article-body article-table-contents typeList-style">
                    <p>Những người yêu thích trầm hương chắc hẳn cũng đã từng nghe qua về Bột trầm hương. Để tìm hiểu kỹ
                        hơn về sản phẩm này, ngay dưới đây chúng tôi sẽ cung cấp tất tần tật những thông tin liên quan
                        đến Bột trầm hương.</p>
                    <h2 id="bot_tram_huong_la_gi__co_may_loai_bot_tram_huong_">Bột trầm hương là gì? Có mấy loại bột
                        trầm hương?</h2>
                    <p>Bột trầm hương có nguồn gốc từ các miếng trầm hương tự nhiên nghiền thành dạng bột được hầu hết
                        giới trầm sử dụng trong các hoạt động thưởng trầm. Bột trầm hương trên thị trường hiện nay
                        thường được chia làm 3 dạng để bạn dễ dàng chọn lựa sản phẩm từng loại bột trầm phù hợp với nhu
                        cầu của mình. Cùng chúng tôi tìm hiểu về 3 dạng bột trầm hương dưới đây nhé.</p>
                    <p style="text-align: center"><img class="img-fluid" src="public/demo/chi_tiet_kien_thuc.JPG">
                    </p>
                    <h3 id="bot_tram_huong_nguyen_chat">Bột trầm hương nguyên chất&nbsp;</h3>
                    <p>Là loại bột trầm có lượng tinh dầu ít nhất trong 3 cấp bậc, nhưng khi xông đốt vẫn sẽ khiến bạn
                        cảm nhận rõ được hương của trầm hương.&nbsp;&nbsp;</p>
                    <h3 id="bot_tram_huong_cao_cap">Bột trầm hương cao cấp</h3>
                    <p>Tương tự như các loại sản phẩm trầm hương xông đốt khác, bột trầm hương cao cấp được làm từ trầm
                        hương tự nhiên và lượng dầu trầm khá nhiều. Khi đốt bột trầm, mùi hương sẽ tạo cho bạn cảm giác
                        thư giãn, như giúp bạn gỡ bỏ được gánh nặng trong lòng mình.&nbsp;</p>
                    <h3 id="bot_tram_huong_thuong_hang">Bột trầm hương thượng hạng&nbsp;</h3>
                    <p>Đối với bột trầm thượng hạng là loại bột trầm thượng hạng tốt nhất trong 3 loại đang có mặt trên
                        thị trường. Không chỉ có lượng dầu trầm nhân đôi, mà hương thơm của nó khi xông đốt cũng sẽ lưu
                        hương trong không gian được lâu hơn và thơm hơn rất nhiều.&nbsp;</p>
                    <p>Tóm lại, bột trầm hương khi xông đốt sẽ mang lại hương thơm ngọt nhẹ lan tỏa đều trong không
                        gian, nó giúp cho tinh thần bạn được tỉnh táo và tập trung hơn. Ngoài ra bột trầm hương khi xông
                        đốt, còn hỗ trợ cải thiện các tình trạng mất ngủ và đau mỏi cơ lâu ngày khá tốt.</p>
                    <h2 id="bot_tram_huong_xong_dot_co_tac_dung_gi_">Bột trầm hương xông đốt có tác dụng gì?</h2>
                    <p>Bột trầm hương có nguồn gốc từ cây dó bầu và được xay nhuyễn thành bột từ gỗ trầm hương. Bột trầm
                        hương thường được sử dụng trong thưởng trầm hoặc khi bạn muốn thanh tẩy không gian sống. Dưới
                        đây là một số tác dụng được không ngờ tới của bột trầm hương:</p>
                    <p style="text-align: center;">
                        <img class="img-fluid" alt="công dụng của bột trầm" width="600"
                            src="public/demo/chi_tiet_kien_thuc.JPG">
                    </p>
                    <ul>
                        <li>
                            <p>Thư giãn tinh thần: Bột trầm hương khi xông đốt tỏa mùi hương đặc trưng được cho là có
                                tác dụng giảm căng thẳng, lo lắng và giúp thư giãn tinh thần. Nhiều người sử dụng xông
                                đốt trầm hương để giảm stress và tăng cường trí nhớ</p>
                        </li>
                        <li>
                            <p>Hỗ trợ sức khỏe: hương thơm của Bột trầm hương có tác dụng cải thiện các tình trạng đau
                                đầu, chứng mất ngủ, mệt mỏi và lo âu. Ngoài ra, bột trầm hương khi xông đốt còn có thể
                                giúp cải thiện tình trạng đau khớp và đau cơ khi được kết hợp với trà trầm hương.</p>
                        </li>
                        <li>
                            <p>Khử mùi: Trầm hương còn được sử dụng để khử mùi trong nhà và trong quần áo.</p>
                        </li>
                        <li>
                            <p>Tăng cường năng lượng: Một số người tin rằng trầm hương mang bên người có thể giúp tăng
                                cường năng lượng phong thủy, thu hút tài lộc quý báu.</p>
                        </li>
                    </ul>
                    <p>Tuy nhiên, cần lưu ý rằng bột trầm hương không phải là một loại thuốc và không nên được sử dụng
                        như một phương pháp chữa bệnh chính thống. Nếu bạn có bất kỳ vấn đề sức khỏe nào, hãy tham khảo
                        ý kiến ​​bác sĩ trước khi sử dụng bột trầm hương.</p>
                    <h2 id="xong_dot_bot_tram_huong_mang_y_nghia_gi_">Xông đốt bột trầm hương mang ý nghĩa gì?</h2>
                    <p>Bột trầm hương là sản phẩm được khá nhiều người trong giới trầm sử dụng trong các hoạt động
                        thưởng trầm. Bột trầm không chỉ góp phần nâng cao giá trị nghệ thuật trầm mà còn mang nhiều ý
                        nghĩa khác như:</p>
                    <h3 id="y_nghia_doi_voi_doi_song_phong_thuy">Ý nghĩa đối với đời sống phong thủy</h3>
                    <p>Bột trầm hương khi xông đốt tạo ra mùi hương rất ấm áp, được các cụ từ thời xa xưa cho rằng nó có
                        khả năng kết nối với thế giới tâm linh, giúp xua đuổi vận khí xấu và thu hút lộc tài may mắn đến
                        với mọi người. Đây cũng chỉ là những câu nói truyền miệng từ đời này qua đời khác, hoàn toàn
                        chưa có chứng thực cho là đúng. Nhưng vẫn không hiểu vì lí do gì mà xưa đến nay Trầm hương vẫn
                        được nhà nhà , người người săn đón và sử dụng khá nhiều. Nhìn chung, sử dụng trầm hương xông đốt
                        đã được đi sâu vào tâm trí cũng như văn hóa của dân Việt Nam chúng ta.&nbsp;</p>
                    <h3 id="y_nghia_trong_y_hoc_-_suc_khoe">Ý nghĩa trong y học - sức khỏe&nbsp;</h3>
                    <p>Xông đốt bột trầm hương được coi là liệu pháp thảo dược đã được sử dụng từ lâu trong nền văn hóa
                        Việt Nam. Mang ý nghĩa tương trợ cho sức khỏe và tinh thần của con người chúng ta. Bột trầm
                        hương chứa một lượng tinh dầu trầm đáng kể, nên khi xông đốt mùi hương của bột trầm sẽ tỏa hương
                        thơm khiến tinh thần bạn được dễ chịu và giúp hỗ trợ cho các vấn đề đường hô hấp rất tốt.</p>
                    <p>Ngoài ra, có thể sử dụng bột trầm hương có thể uống khi pha một lượng nhỏ với nước ấm. Điều này
                        giúp nâng cao sức đề kháng cơ thể, rất có lợi cho đường ruột và ngăn ngừa mắc các bệnh tim mạch,
                        đột quỵ. Sản phẩm bột trầm của chúng tôi được làm từ 100% trầm hương thiên nhiên, hoàn toàn
                        không gây hại cho sức khỏe nên bạn có thể yên tâm sử dụng lâu dài.&nbsp;</p>
                    <h2 id="bot_tram_huong_de_lam_gi_">Bột trầm hương để làm gì?</h2>
                    <p>Bột trầm hương được sử dụng với nhiều mục đích khác nhau, Hầu hết sẽ được dùng trong các buổi
                        thưởng trầm hoặc khi làm việc, đọc sách, tập yoga, ngồi thiền, ... Mục đích khi sử dụng bột trầm
                        hương xông nhà là để tạo ra một không gian trong sạch, thoảng hương thơm. Khiến tinh thần chúng
                        ta được thoải mái, dễ chịu hơn sau một ngày dài mệt mỏi.</p>
                    <h2 id="cach_su_dung_va_bao_quan_bot_tram_huong">Cách sử dụng và bảo quản bột trầm hương</h2>
                    <div>Hiện tại, có rất nhiều quý khách đang yêu thích và sử dụng bột trầm hương để xông đốt hàng
                        ngày. Bởi tác dụng mà bột trầm hương đem lại rất tốt cho sức khoẻ và tinh thần. Nhưng vẫn còn có
                        các quý khách hàng mới biết đến trầm hương chưa biết cách sử dụng và bảo quản như nào thì hãy
                        xem tiếp nội dung dưới đây:</div>
                    <h3 id="cach_su_dung_bot_tram_huong">Cách sử dụng bột trầm hương</h3>
                    <p>Để xông đốt bột trầm hương đúng cách, phát huy hết công dụng. Ngay dưới đây Cung Trầm sẽ chia sẻ
                        cho mọi người như sau:&nbsp;</p>
                    <p><strong>Xông đốt bột trầm hương bằng lư điện</strong>: Bạn cần chuẩn bị 1 lư điện và bột trầm với
                        lượng vừa đủ. Sau đó bạn cho bột trầm vào bên trong lư và cắm điện. Chờ đến khi nhiệt đủ nóng
                        làm cho bột trầm được làm nóng và tỏa hương.&nbsp;</p>
                    <p><strong>Xông đốt bột trầm bằng lư đồng</strong>: Đầu tiên bạn sẽ cần phải chuẩn bị bột trầm
                        hương, bật lửa, lư đồng. Bước tiếp theo bạn cho bột trầm hương vào trong lư đồng có miếng cách
                        nhiệt. Sau đó dùng bật lửa hoặc máy khò đốt bột trầm và chờ khi bột cháy sẽ tỏa hương
                        thơm.&nbsp;</p>
                    <p style="text-align: center;"><span style="font-size:11px;"><img class="img-fluid"
                                alt="xông bột trầm hương bằng lư đồng" width="600"
                                src="https://lh4.googleusercontent.com/ihua5Pdcqy6DpLItfYuLqKr8lBJX4ZxnF3qsb8lE4o3rMztgsaPgnK87azG_pdCKL24VzJJTbXOEDkAR2l5BUhQnjrSip7-2VmAEfu7KXnOEyKWKeSZSo-6gIAIu2OqQ_LFyumeHhPwsSjaohmhFQPGzQWTtncBZ2H3OXs5qo-2Tqd1I0U-prStGeQ"></span>
                    </p>
                    <h3 id="cach_bao_quan_bot_tram_huong">Cách bảo quản bột trầm hương</h3>
                    <p>Bột trầm hương là sản phẩm có chứa hàm lượng tinh dầu trầm cao và rất dễ bị bay hơi nếu không
                        biết cách bảo quản. Dưới đây là một vài chia sẻ nhỏ về cách bảo quản bột trầm hương như sau:</p>
                    <ul>
                        <li>
                            <p>Bạn nên đựng bột trầm hương trong hộp kín để giữ cho nó khô ráo và không bị ẩm hoặc nhiễm
                                tạp chất từ môi trường bên ngoài.</p>
                        </li>
                        <li>
                            <p>Hãy đặt hộp đựng bột trầm hương ở một nơi thoáng mát, khô ráo và không có ánh nắng trực
                                tiếp chiếu vào.</p>
                        </li>
                        <li>
                            <p>Tránh mất mùi hương của bột trầm hương không nên để nó ở ngoài&nbsp; không khí quá lâu,
                                bằng cách đóng kín bao bì sau khi sử dụng.</p>
                        </li>
                    </ul>
                    <h2 id="mua_bot_tram_huong_o_dau_uy_tin_-_chat_luong_-_gia_ca_hop_ly">Mua bột trầm hương ở đâu uy
                        tín - chất lượng - giá cả hợp lý&nbsp;</h2>
                    <p>Cung Trầm Gallery là cơ sở uy tín, tất cả các sản phẩm tại đây đều có nguồn gốc trầm hương tự
                        nhiên, không pha trộn thêm bất kỳ tạp chất hóa học nào. Vì vậy bạn có thể hoàn toàn yên tâm sử
                        dụng Bột trầm hương của chúng tôi.&nbsp;Nếu bạn mong muốn tìm mua cho mình sản phẩm Bột trầm
                        hương từ trầm hương tự nhiên, an toàn cho sức khỏe thì hãy gọi ngay cho chúng tôi qua <a
                            href="tel:0876733333"><span style="color:#e74c3c;"><strong>Hotline:
                                    08767.33333</strong></span></a> hoặc ghé tới <strong>Địa chỉ: Lô TT02-15, KĐT HD
                            Mon, Nam Từ Liêm, Hà Nội</strong> để được trực tiếp trải nghiệm sản phẩm.</p>
                </div>
            </div>

            <!-- Tag -->
            <div class="mb-4 box-tags">
                <strong>Tags: </strong>

                <a class="tag" href="/">#bột trầm hương,</a>

                <a class="tag" href="/">#bột trầm hương là gì,</a>

            </div>

            <!-- info news -->
            <div class="mb-4">
                <p>------------------</p>
                <p>CUNG TRẦM GALLERY BY TRẦM THIỆN TÂM - TINH HOA TRẦM VIỆT</p>
                <p><img height="16" width="16" alt="🌏" src="public/demo/chi_tiet_kien_thuc.JPG"> <a
                        href="tel:0876733333">Hotline: 08767.33333</a> | <a href="tel:0877999666">08779.99666</a></p>
                <p><img height="16" width="16" alt="🌏" src="public/demo/chi_tiet_kien_thuc.JPG">
                    Website: tramthientam.com.vn - <a rel="nofollow noopener" target="_blank"
                        href="/">tinhhoatramviet.com</a></p>
                <p><img height="16" width="16" alt="📧" src="public/demo/chi_tiet_kien_thuc.JPG">
                    <a href="mailto:info@tramthientam.com.vn">Email: info@tramthientam.com.vn</a>
                </p>
                <p><img height="16" width="16" alt="🏠" src="public/demo/chi_tiet_kien_thuc.JPG">Địa
                    chỉ:
                    <a href="/"> Lô TT02-15, KĐT HD Mon, Nam Từ Liêm, Hà Nội</a>
                </p>
                <p><img height="16" width="16" alt="⏰" src="public/demo/chi_tiet_kien_thuc.JPG"> Giờ
                    mở
                    cửa: 8h00 - 22h00</p>
            </div>

            <!-- Navigate -->
            <div class="d-flex flex-wrap justify-content-between py-4 post-navigation">
                <p class="col-xxl-9 col-12 text-center text-md-center text-xxl-start">Đang xem:<span class="fw-bold">
                        Bột trầm hương là gì? Công dụng và cách bảo quản bột
                        trầm
                        hương</span>
                </p>
                <div class="col-xxl col-12 text-center">
                    <span class="fw-bold d-none d-xxl-inline me-4">
                        <i class="bi bi-chevron-left"></i>
                        <a href="index.php?p=chitietkienthuc" title="">Bài trước</a>
                    </span>
                    <span class="fw-bold">
                        <a href="index.php?p=chitietkienthuc" title="">Bài sau</a>
                        <i class="bi bi-chevron-right"></i>
                    </span>
                </div>
            </div>
            </di>
        </div>

        <!-- Viết bình luận -->
        <div class="bg-white mt-4 p-3">
            <div class="article-comment-form">
                <h4 class="pb-2">Viết bình luận</h4>
                <form class="pt-2" action="">
                    <div class="row mb-2">
                        <div class="col-6">
                            <div class="form-group">
                                <input required="" type="text" class="text form-control" placeholder="Tên của bạn ">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <input required="" type="text" class="text form-control" placeholder="Email của bạn">
                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <textarea id="comment_body" name="comment[body]" cols="40" rows="5"
                                class="text form-control" placeholder="Viết bình luận ..." required="required"
                                spellcheck="false"></textarea>
                            <div class="pt-2 box-captcha">
                                This site is protected by reCAPTCHA and the Google
                                <a href="https://policies.google.com/privacy" target="_blank" rel="noreferrer">Privacy
                                    Policy</a>
                                and <a href="https://policies.google.com/terms" target="_blank" rel="noreferrer">Terms
                                    of Service</a> apply.
                            </div>

                            <div class="notice">Bình luận của bạn sẽ được duyệt trước khi đăng lên</div>

                        </div>
                    </div>

                    <button type="submit" class="sent-comment-btn rounded-pill px-4 py-1" id="comment-submit">Gửi bài
                        viết</button>
                </form>
            </div>
        </div>

        <!-- Bai viet lien quan -->
        <div class="bg_light_grey">
            <h4 class="pt-5 pb-2">Bài viết liên quan</h4>
            <div class="related_article owl-carousel owl-theme">
                <div class="article-item bg-white h-100">
                    <a class="bg-img-cover d-block" href="#"
                        style="background-image: url(public/demo/khai_truong.webp);">
                    </a>
                    <div class="p-3">
                        <h6 class="post-title">
                            <a href="index.php?p=index.php?p=chitiettintuc"
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
                            <span>
                                26 Tháng 10, 2022
                            </span>
                        </div>
                        </di>
                    </div>
                </div>
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
                            <span>
                                26 Tháng 10, 2022
                            </span>
                        </div>
                        </di>
                    </div>
                </div>
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
                            <span>
                                26 Tháng 10, 2022
                            </span>
                        </div>
                        </di>
                    </div>
                </div>
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
                            <span>
                                26 Tháng 10, 2022
                            </span>
                        </div>
                        </di>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xxl-4 col-12 d-none d-xxl-block">
        <div class="sidebar-blogs blogs-aside--sticky">
            <!-- Bai viet moi nhat -->
            <div class="bg-white mb-3">
                <a class="index.php?p=chitietkienthuc" href="#collapseFooter2" data-bs-toggle="collapse" role="button"
                    aria-expanded="false" aria-controls="collapseExample">
                    <h6 class="mb-0 px-3 py-3 position-relative my_collapse_title rounded-top border border-bottom-0">
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
                                        <a href="index.php?p=chitietkienthuc">Bột trầm hương là
                                            gì? Công dụng và cách
                                            bảo quản bột trầm hương</a>
                                    </h6>
                                    <p class="post-meta fs-6">
                                        <span class="cate">Kiến thức</span>
                                        <span class="author d-none">
                                            <a href="index.php?p=chitietkienthuc">Anh LTQ</a>
                                        </span>
                                        <span>- 26.03.2023</span>
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
                                        <a href="index.php?p=chitietkienthuc">Bột trầm hương là
                                            gì? Công dụng và cách
                                            bảo quản bột trầm hương</a>
                                    </h6>
                                    <p class="post-meta fs-6">
                                        <span class="cate">Kiến thức</span>
                                        <span class="author d-none">
                                            <a href="index.php?p=chitietkienthuc">Anh LTQ</a>
                                        </span>
                                        <span>- 26.03.2023</span>
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
                                        <a href="index.php?p=chitietkienthuc">Bột trầm hương là
                                            gì? Công dụng và cách
                                            bảo quản bột trầm hương</a>
                                    </h6>
                                    <p class="post-meta fs-6">
                                        <span class="cate">Kiến thức</span>
                                        <span class="author d-none">
                                            <a href="index.php?p=chitietkienthuc">Anh LTQ</a>
                                        </span>
                                        <span>- 26.03.2023</span>
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
                                        <a href="index.php?p=chitietkienthuc">Bột trầm hương là
                                            gì? Công dụng và cách
                                            bảo quản bột trầm hương</a>
                                    </h6>
                                    <p class="post-meta fs-6">
                                        <span class="cate">Kiến thức</span>
                                        <span class="author d-none">
                                            <a href="index.php?p=chitietkienthuc">Anh LTQ</a>
                                        </span>
                                        <span>- 26.03.2023</span>
                                    </p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <!-- Menu bai viet -->
            <div class="bg-white mb-3">
                <a class="index.php?p=chitietkienthuc" href="#collapseArticle2" data-bs-toggle="collapse" role="button"
                    aria-expanded="false" aria-controls="collapseExample">
                    <h6 class="mb-0 px-3 py-3 position-relative my_collapse_title rounded-top border border-bottom-0">
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

<script src="owlcarousel/owl.carousel.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".related_article").owlCarousel({
            center: false,
            loop: false,
            margin: 30,
            nav: true,
            dots: false,
            autoplay: false,
            responsive: {
                0: {
                    items: 2.2,
                    margin: 14,
                    nav: false,
                },
                768: {
                    items: 3,
                    margin: 18,
                },
                900: {
                    items: 3,
                },
            },
        });
        $(".owl-next").html('<i class="bi bi-arrow-right-short icon-prev" style="font-size: 28px;"></i>');
        $(".owl-prev").html('<i class="bi bi-arrow-left-short icon-next" style="font-size: 28px;"></i>');
    });

    // An hien danh muc chi tiet kien thuc
    $(document).ready(function () {
        $(".toggle-btn").click(function () {
            $(".danh-muc").toggle(500);
            if ($(".toggle-btn").text() == "Ẩn") {
                $(".toggle-btn").text("Hiện");
            } else {
                $(".toggle-btn").text("Ẩn");
            }
        });
    });
</script>