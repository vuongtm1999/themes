<div class="search-block mr-3">
    <div class="input-group mb-3 left-search">
        <input type="text" class="form-control" placeholder="Từ khoá..." aria-describedby="button-addon2">
        <button class="btn position-absolute end-0">
            <i class="bi bi-search"></i>
        </button>
    </div>
</div>
<div class="overlay-search"></div>


<script>
    $(document).ready(function () {
        $('.js-toggle-search-box').click(function () {
            $('.search-block').toggleClass('open-search');
            $('.overlay-search').css('display', 'block');
        })

        $('.overlay-search').click(function () {
            $('.search-block').toggleClass('open-search');
            $('.overlay-search').css('display', 'none');
        })
    });
</script>