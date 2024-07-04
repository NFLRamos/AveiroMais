<section class="content-section">
  <span class="section-bg" data-background="<?php echo get_template_directory_uri(); ?>/assets/section-bg01.png" data-scroll data-scroll-speed="2"></span>
  <!-- end section-bg -->
  <div class="container">
    <div class="row align-items-center">

    
      <div class="col-lg-6">
        <div data-scroll data-scroll-speed="0.5">
          <figure class="testimonial-side-image"> <img src="<?php the_field('re_img', 'option') ?>" alt="Image"> </figure>
          <!-- end testimonial-side-image -->
        </div>
        <!-- end data-scroll -->
      </div>
      <!-- end col-6 -->


      <div class="col-lg-6">
        <div data-scroll data-scroll-speed="-0.5">
          <div class="testimonial">
            <h6><?php the_field('re_sub_title', 'option') ?></h6>
            <h2><?php the_field('re_title', 'option') ?></h2>

           
              <div class="slider_depoi w-100">
                <?php
                $args = array(
                  'post_type' => 'reviews',
                  'orderby' => 'rand',
                  'posts_per_page' => -1
                );
                $depoi = new WP_Query($args);
                while ($depoi->have_posts()) {
                  $depoi->the_post();  ?>
                  <div class="mb-4">
                    <div class="card-body">
                      <p><?php the_field('content') ?></p>
                      <strong><?php the_title(); ?>,</strong> <small><?php the_field('categoria') ?></small>
                    </div>
                  </div>
                <?php
                }
                wp_reset_postdata();
                ?>
              </div>
            
            <?php /* 
              <p>"Can I just say that it's been an absolute pleasure 
                working with you all.  Everyone's been so friendly, 
                helpful and delightful, so please pass my thanks 
                on to all!"</p>
              <strong>Rubina Jaffer,</strong> <small>Event Manager and Director</small> </div>
                */  ?>
            <!-- end testimonial -->
          </div>
          <!-- end data-scroll -->
        </div>
        <!-- end col-6 -->
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </div>
</section>

<script>
  jQuery(document).ready(function($) {
    $('.slider_depoi').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 4000,
      //centerMode: true,
      arrows: false,
      dots: true,
      responsive: [{
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          //centerMode: true,
        }
      }, {
        breakpoint: 1200,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          //centerMode: true,
        }
      }, ]
    });
  });
</script>