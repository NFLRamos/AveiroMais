<section class="content-section left-white-bg mt-5" data-background="#e76800">
		<span class="section-bg" data-background="<?php echo get_template_directory_uri(); ?>/assets/section-bg03.png" data-scroll data-scroll-speed="1"></span>
		<!-- end section-bg -->
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
			  <div data-scroll data-scroll-speed="0.5">
            <figure class="side-image"> <img src="<?php the_field('mama_imagem')?>" alt="Image"> </figure>
            <!-- end side-image --> 
				   </div>
			  <!-- end data-scroll -->
          </div>
          <!-- end col-6 -->
          <div class="col-lg-6">
			  <div data-scroll data-scroll-speed="-0.5">
            <div class="side-content right light">
              <h3><?php the_field('mama_titulo')?></h3>
              <p><?php the_field('mama_conteudo')?></p>
                
              <div class="countdown light right" data-event="<?php the_field('mama_data')?>" id="js-countdown">
                <div class="countdown-item countdown-item " >
                  <div class="countdown__timer js-countdown-days"></div>
                  <!-- end countdown__timer --> 
                  <span>Day</span> </div>
                <!-- end countdown-item -->
                <div class="countdown-item">
                  <div class="countdown__timer js-countdown-hours"></div>
                  <span>Hrs</span> </div>
                <!-- end countdown-item -->
                <div class="countdown-item">
                  <div class="countdown__timer js-countdown-minutes"></div>
                  <span>Min</span> </div>
                <!-- end countdown-item -->
                <div class="countdown-item">
                  <div class="countdown__timer js-countdown-seconds"></div>
                  <span>Sec</span> </div>
                <!-- end countdown-item --> 
              </div>
                 
              <!-- end countdown --> 
              <a href="<?php the_field('mama_botao_link')?>" class="custom-button light"> <span class="circle" aria-hidden="true"> <span class="icon arrow"></span> </span> <span class="button-text"><?php the_field('mama_botao')?></span></a> </div>
            <!-- end side-content -->
				    </div>
			  <!-- end data-scroll -->
          </div>
          <!-- end col-6 --> 
        </div>
        <!-- end row --> 
      </div>
      <!-- end container --> 
    </section>