<section class="content-section">
		<span class="section-bg" data-background="<?php echo get_template_directory_uri(); ?>/assets/section-bg04.png" data-scroll data-scroll-speed="2"></span>
		<!-- end section-bg -->
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
			   <div data-scroll data-scroll-speed="-0.5">
            <div class="section-title text-center">
              <figure><img src="<?php the_field('st_icon','option')?>" alt="Image"></figure>
              <h6><?php the_field('st_sub_title','option')?></h6>
              <h2><?php the_field('st_title','option')?></h2>
            </div>
            <!-- end section-title --> 
				    </div>
			  <!-- end data-scroll -->
          </div>
          <!-- end col-12 -->
          <?php 
            $loop = new WP_Query( array( 'post_type' => 'team', 'posts_per_page' => -1 ) );
            while ( $loop->have_posts() ) : $loop->the_post();
                    $thumb_id = get_post_thumbnail_id();
                    $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full');
                    $thumb_url = $thumb_url_array["0"];
                    ?>
                    <div class="col-lg-3 col-md-6">
                      <div data-scroll data-scroll-speed="0.5">
                        <div class="speaker">
                          <figure> <img src="<?php echo $thumb_url ?>" alt="Image">
                            <figcaption>
                              <ul>
                                <li><a href="<?php the_field('fb') ;?>"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="<?php the_field('tw') ;?>"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="<?php the_field('in') ;?>"><i class="fab fa-linkedin-in"></i></a></li>
                              </ul>
                            </figcaption>
                          </figure>
                          <div class="content-box">
                            <h4><?php the_title();?></h4>
                            <small><?php the_field('Function') ;?></small> </div>
                          <!-- end content-box --> 
                        </div>
                        <!-- end speaker --> 
                        </div>
                  <!-- end data-scroll -->
                    </div>
                    <!-- end col-3 -->
                  <?php endwhile; ?>
        </div>
        <!-- end row --> 
      </div>
      <!-- end container --> 
    </section>