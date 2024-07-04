<section class="content-section ">
  <div class="section-bg" _data-background="<?php echo get_template_directory_uri(); ?>/assets/section-bg02.png" data-scroll data-scroll-speed="1"></div>
  <!-- end section-bg -->
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-12">

        <div class="section-title text-center">
          <figure><img src="<?php the_field('pr_img', 'option') ?>" alt="Image"></figure>
          <h6><?php the_field('pr_sub_title', 'option') ?></h6>
          <h2><?php the_field('pr_title') ?></h2>
        </div>
        <!-- end data-scroll -->
      </div>
      <!-- end col-12 -->
      <div class="col-12"> <strong class="sponsor-title"><?php //echo $t->name; 
                                                          ?></strong> </div>

      <?php

      $loop = new WP_Query(array(
        'post_type' => 'partners',
        'posts_per_page' => -1,
      ));
      while ($loop->have_posts()) : $loop->the_post();
        $thumb_id = get_post_thumbnail_id();
        $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full');
        $thumb_url = $thumb_url_array["0"];
      ?>
        <div class="col-lg-2 col-md-3 col-6">
          <div data-scroll data-scroll-speed="0.5">

            <figure class="sponsor-logo-img"> <img src="<?php echo $thumb_url ?>" alt="Image">
              <figcaption></figcaption>
            </figure>

          </div>
        </div>
      <?php
      endwhile;

      ?>
    </div>
    <!-- end row -->
  </div>
  <!-- end container -->
</section>