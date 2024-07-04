<section class="content-section no-spacing top-half-white-bg " data-background="#fff">
		<span class="section-bg" data-background="<?php echo get_template_directory_uri(); ?>/assets/section-bg01.png" data-scroll data-scroll-speed="1"></span>
		<!-- end section-bg -->
      <div class="container pt-5">
        <div class="row align-items-center">
          <div class="col-lg-6">
			  <div data-scroll data-scroll-speed="-0.5">
            <div class="side-content left">
              <h6><?php the_field('about_sub_titulo','option')?> </h6>
              <h2><?php the_field('about_titulo','option')?></h2>
              <p><?php the_field('about_conteudo','option')?></p>
              <a href="<?php the_field('about_link','option')?>" class="custom-button"> <span class="circle" aria-hidden="true"> <span class="icon arrow"></span> </span> <span class="button-text"><?php the_field('about_texto_botao','option')?></span></a> </div>
            <!-- end side-content --> 
				  </div>
			  <!-- end data-scroll -->
          </div>
          <!-- end col-6 -->
          <div class="col-lg-6">
			  <div data-scroll data-scroll-speed="0.5">
            <figure class="side-image"> <img src="<?php the_field('about_imagem','option')?>" alt="Image"> </figure>
            <!-- end side-image --> 
				  </div>
			   <!-- end data-scroll -->
          </div>
          <!-- end col-6 --> 
        </div>
        <!-- end row --> 
      </div>
      <!-- end container --> 
    </section>
    <!-- end content-section -->
