<section class="content-section no-spacing top-half-white-bg" data-background="#F6FAFB">
		<span class="section-bg" data-background="<?php echo get_template_directory_uri(); ?>/assets/section-bg01.png" data-scroll data-scroll-speed="2"></span>
		<!-- end section-bg -->
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
			   <div data-scroll data-scroll-speed="-1">
            <div class="side-content left">
              <h6><?php the_field('mama_sub_titulo')?></h6>
              <h2><?php the_field('mama_titulo_why')?></h2>
              <p><?php the_field('mama_content')?></p>
              <a href="<?php the_field('mama_link_botao')?>" class="custom-button"> <span class="circle" aria-hidden="true"> <span class="icon arrow"></span> </span> <span class="button-text"><?php the_field('mama_texto_botao')?></span></a> </div>
            <!-- end side-content --> 
				     </div>
			  <!-- end data-scroll -->
          </div>
          <!-- end col-7 -->
          <div class="col-xl-3 col-lg-4 offset-xl-2 offset-lg-1">
			   <div data-scroll data-scroll-speed="-0.5">
            <div class="color-icon-box" data-background="#388B7C">
              <div class="inner-bg" data-background="<?php echo get_template_directory_uri(); ?>/assets/icon-color-box-bg03.svg"></div>
              <!-- end inner-bg -->
              <figure> <img src="<?php the_field('mama_box_1')?>" alt="Image"> </figure>
              <?php the_field('mama_content_card_1')?>
            </div>
            <!-- end color-icon-box -->
				    </div>
			  <!-- end data-scroll -->
			   <div data-scroll data-scroll-speed="0.5">
            <div class="color-icon-box" data-background="#151517">
              <div class="inner-bg" data-background="<?php echo get_template_directory_uri(); ?>/assets/icon-color-box-bg02.svg"></div>
              <!-- end inner-bg -->
              <figure> <img src="<?php the_field('mama_box_2','option')?>" alt="Image"> </figure>
              <?php the_field('mama_content_card_2')?>
            </div>
            <!-- end color-icon-box --> 
				      </div>
			  <!-- end data-scroll -->
          </div>
          <!-- end col-4 -->
          <div class="col-xl-3 col-lg-4 offset-xl-6 offset-lg-4">
			  <div data-scroll data-scroll-speed="-0.5">
            <div class="color-icon-box" data-background="#334AC1">
              <div class="inner-bg" data-background="<?php echo get_template_directory_uri(); ?>/assets/icon-color-box-bg01.svg"></div>
              <!-- end inner-bg -->
              <figure> <img src="<?php the_field('mama_box_3')?>" alt="Image"> </figure>
              <?php the_field('mama_content_card_3')?>
            </div>
            <!-- end color-icon-box --> 
				   </div>
			  <!-- end data-scroll -->
          </div>
          <!-- end col-3 --> 
        </div>
        <!-- end row --> 
      </div>
      <!-- end container --> 
    </section>