<script>
    $('#sliderHome').bind('mousewheel DOMMouseScroll', function (e) {
        if (e.originalEvent.wheelDelta > 0 || e.originalEvent.detail < 0) {
            $(this).carousel('prev');
        }
        else {
            $(this).carousel('next');
        }
        e.preventDefault();
    });

    $("#sliderHome").on("touchstart", function (event) {
        var yTouchPointStart = event.originalEvent.touches[0].pageY;
        $(this).on("touchmove", function (event) {
            var yTouchPointEnd = event.originalEvent.touches[0].pageY;
            if (Math.floor(yTouchPointStart - yTouchPointEnd) > 1) {
                $(".carousel").carousel('next');
            }
            else if (Math.floor(yTouchPointStart - yTouchPointEnd) < -1) {
                $(".carousel").carousel('prev');
            }
        });
        $(".carousel").on("touchend", function () {
            $(this).off("touchmove");
        });
        event.preventDefault();
    });
</script>
<section class="slider">
    <div class="w-100">
    <?php $loop = new WP_Query( array( 'post_type' => 'slider', 'posts_per_page' => -1 ) );?>
    <div id="sliderHome" class="sliderHome carousel slide " data-bs-ride="carousel">
        
        <div class="carousel-inner">
            <?php
            $i = 0;
            $loop = new WP_Query( array( 'post_type' => 'slider', 'posts_per_page' => -1 ) );
            while ( $loop->have_posts() ) : $loop->the_post();
                    $thumb_id = get_post_thumbnail_id();
                    $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full');
                    $thumb_url = $thumb_url_array["0"];
            ?>
            <div class="carousel-item <?php if($i==0){ echo 'active'; } ?> ">
                <div class="row slideIn h_100">
                    <div class="col-lg-5 offset-lg-2 d-flex align-items-center">
                        <div class="w-100 pe-lg-5 pb-4 pb-lg-0">
                            <h1 class="h2"><?php the_title() ?></h1>
                            <div class="d-flex">
                            <a href="<?php echo home_url() ?>/bilhetes" class="slider-button"> <span class="circle" aria-hidden="true"> <span class="icon arrow"></span> </span> <span class="button-text">Quero participar</span></a>
                            <div class="slider-button-fake ms-5"> <span class="circle" > <img src="<?php echo get_template_directory_uri() ?>../assets/icon-location.svg" > </span> <span class="button-text">Aveiro</span></div>

                            </div>
  
                        </div>
                    </div>
                    <div class="col-lg-5 p-0">
                        <div class="events-slider-images text-end">
                            <img src="<?php echo $thumb_url; ?>">
                        </div>
                    </div>
                </div>
            </div>

            <?php
                $i++;
                endwhile;
                wp_reset_query();
            ?>
        </div>
        
        <button class="carousel-control-prev" type="button" data-bs-target="#sliderHome" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#sliderHome" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        
            </div>

    </div>
</section>