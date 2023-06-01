<style>
    .moi1 .owl-nav [class*=owl-]:hover {
        color: #b68944;
        background-color: unset;
    }

    .moi1>.owl-nav>.owl-next {
        top: 50%;
        position: absolute;
        left: 5vw;
    }

    .moi1>.owl-nav>.owl-prev {
        top: 50%;
        position: absolute;
        right: 5vw;
    }

    @media (min-width: 768px) {
        .moi1>.owl-nav>.owl-next {
            top: 50%;
            position: absolute;
            left: -5vw;
        }

        .moi1>.owl-nav>.owl-prev {
            top: 50%;
            position: absolute;
            right: -5vw;
        }
    }
</style>

<script src="owlcarousel/owl.carousel.min.js"></script>
<script>
    $(document).ready(function () {
        $('.moi1').owlCarousel({
            center: false,
            loop: false,
            margin: 0,
            nav: false,
            dots: false,
            autoplay: true,
            responsive: {
                0: {
                    items: 1
                }
            }
        });
        $(".moi1 .owl-next").html('<i class="bi bi-arrow-left-short fs-1"></i>');
        $(".moi1 .owl-prev").html('<i class="bi bi-arrow-right-short fs-1"></i>');
    });
</script>