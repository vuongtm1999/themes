<?php 
    class licensing
    {
        
        function __construct($name,$meta_description,$image){
                $this->name=$name;
                $this->meta_description=$meta_description;
                $this->image=$image;
            }
        }
        $datalicensing = array(
            array('WrapStyle',' The main reason for getting the WrapStyle franchise In Qatar is a brand different from others as it has mission and vision. I’ve known Martin Turecek since 2012. The founders of WrapStyle started small 10 years ago, now see the WrapStyle went all over the world thanks to the amazing strategy Martin and Marek who implemented it to become international. They showed us how business is done, it’s not about the materials, it’s about the technique of wrapping, passion, dedication. This testimonial is nothing compared to what we achieved in the last 10 years.','dubai-photo.jpg'),
            array('WrapStyle',' The main reason for getting the WrapStyle franchise In Qatar is a brand different from others as it has mission and vision. I’ve known Martin Turecek since 2012. The founders of WrapStyle started small 10 years ago, now see the WrapStyle went all over the world thanks to the amazing strategy Martin and Marek who implemented it to become international. They showed us how business is done, it’s not about the materials, it’s about the technique of wrapping, passion, dedication. This testimonial is nothing compared to what we achieved in the last 10 years.','copenhagen-photo.jpg'),
            array('WrapStyle',' The main reason for getting the WrapStyle franchise In Qatar is a brand different from others as it has mission and vision. I’ve known Martin Turecek since 2012. The founders of WrapStyle started small 10 years ago, now see the WrapStyle went all over the world thanks to the amazing strategy Martin and Marek who implemented it to become international. They showed us how business is done, it’s not about the materials, it’s about the technique of wrapping, passion, dedication. This testimonial is nothing compared to what we achieved in the last 10 years.','quatar-photo.jpg'),
            array('WrapStyle',' The main reason for getting the WrapStyle franchise In Qatar is a brand different from others as it has mission and vision. I’ve known Martin Turecek since 2012. The founders of WrapStyle started small 10 years ago, now see the WrapStyle went all over the world thanks to the amazing strategy Martin and Marek who implemented it to become international. They showed us how business is done, it’s not about the materials, it’s about the technique of wrapping, passion, dedication. This testimonial is nothing compared to what we achieved in the last 10 years.','riyadh-photo.jpg'),
            array('WrapStyle',' The main reason for getting the WrapStyle franchise In Qatar is a brand different from others as it has mission and vision. I’ve known Martin Turecek since 2012. The founders of WrapStyle started small 10 years ago, now see the WrapStyle went all over the world thanks to the amazing strategy Martin and Marek who implemented it to become international. They showed us how business is done, it’s not about the materials, it’s about the technique of wrapping, passion, dedication. This testimonial is nothing compared to what we achieved in the last 10 years.','singapore-photo.jpg'),
        );
    
        
        $licensing = array();
        foreach($datalicensing as $key => $value){
            array_push($licensing,new licensing($value[0],$value[1],$value[2]));
        }
?>
<style>
    .owl-theme .owl-nav [class*=owl-]:hover {
        color: unset;
        background-color: unset;
    }

    .owl-nav>.owl-next {
        top: 40%;
        position: absolute;
        right: -50px;
    }

    .owl-nav>.owl-prev {
        top: 40%;
        position: absolute;
        left: -50px;
    }

    @media (min-width: 768px) {
    }
</style>




<div class="px-0">
    <div class="moi1 owl-carousel owl-theme">

        <?php
                    foreach ($licensing as $key => $value) {
                        # code...
                    
                ?>
        <div class="card mx-4 h-100 border-0 shadow franchise-carousel-item">
            <a href="https://www.wrapstyle.com" target="_blank" rel="noopener" tabindex="-1">
                <img class="img-fluid" src="img/<?php echo $value->image ?>" alt="WrapStyle Qatar">
            </a>
            <div class="card-body ">
                <h4 class="card-title mb-3 text-center "><a class="link-service text-decoration-none text-dark"
                        href="https://www.wrapstyle.com" target="_blank" rel="noopener" tabindex="-1">
                        <?php echo $value->name ?>
                    </a></h4>
                <div class="card-text text-grey">
                    <?php echo $value->meta_description ?>
                </div>
            </div>
        </div>
        <?php } ?>

    </div>
</div>




<script src="owlcarousel/owl.carousel.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {

        $('.moi1').owlCarousel({
            center: false,
            loop: true,
            margin: 0,
            nav: true,
            dots: false,
            autoplay: true,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1400: {
                    items: 3
                }
            }
        });
        $(".owl-prev").html('<i class="bi bi-arrow-left-short fs-1"></i>');
        $(".owl-next").html('<i class="bi bi-arrow-right-short fs-1"></i>');
    });
</script>