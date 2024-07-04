<section class="content-section" data-background="#F6FAFB">
		<span class="section-bg" data-background="<?php echo get_template_directory_uri(); ?>/assets/section-bg05.png" data-scroll data-scroll-speed="2"></span>
		<!-- end section-bg -->
      <div class="container">
        <div class="row justify-content-center g-0">
          <div class="col-12">
			  <div data-scroll data-scroll-speed="0.5">
            <div class="section-title text-center">
              <figure><img src="<?php the_field('tb_icon','option')?>" alt="Image"></figure>
              <h6><?php the_field('tb_sub_title','option')?></h6>
              <h2><?php the_field('tb_title','option')?></h2>
            </div>
            <!-- end section-title --> 
				 </div>
			  <!-- end data-scroll -->
          </div>
          <!-- end col-12 -->
          <div class="col-xl-3 col-lg-4 col-md-6">
			  <div data-scroll data-scroll-speed="-0.5">
            <div class="price-box">
              <h5><?php the_field('tb_title_box_1','option')?></h5>
              <div class="price"> <span class="currency">€</span> <span class="value"><?php the_field('tb_valor_1','option')?></span> </div>
              <!-- end price -->
             
              <a  href="#exampleModalCenter"  data-target="exampleModalCenter" class="custom-button" data-toggle="modal"> <span class="circle" aria-hidden="true"> <span class="icon arrow"></span> </span> <span class="button-text"><?php the_field('tb_texto_botao_1','option')?></span></a> </div>
            <!-- end price-box --> 
				  </div>
			  <!-- end data-scroll -->
          </div>
          <!-- end col-3 -->
          <div class="col-xl-3 col-lg-4 col-md-6">
			   <div data-scroll data-scroll-speed="0.5">
            <div class="price-box featured">
            <h5><?php the_field('tb_title_box_2','option')?></h5>
              <div class="price"> <span class="currency">€</span> <span class="value"><?php the_field('tb_valor_2','option')?></span> </div>
              <!-- end price -->
             
              <a href="#" class="custom-button"> <span class="circle" aria-hidden="true"> <span class="icon arrow"></span> </span> <span class="button-text"><?php the_field('tb_texto_botao_2','option')?></span></a></div>
            <!-- end price-box --> 
				   </div>
			  <!-- end data-scroll -->
          </div>
          <!-- end col-3 -->
          <div class="col-xl-3 col-lg-4 col-md-6">
			  <div data-scroll data-scroll-speed="-0.5">
            <div class="price-box">
            <h5><?php the_field('tb_title_box_3','option')?></h5>
              <div class="price"> <span class="currency">€</span> <span class="value"><?php the_field('tb_valor_3','option')?></span> </div>
              <!-- end price -->
             
              <a href="#" class="custom-button"> <span class="circle" aria-hidden="true"> <span class="icon arrow"></span> </span> <span class="button-text"><?php the_field('tb_texto_botao_3','option')?></span></a> </div>
            <!-- end price-box --> 
				    </div>
			  <!-- end data-scroll -->
          </div>
          <!-- end col-3 --> 
        </div>
        <!-- end row --> 
      </div>
      <!-- end container --> 
    </section>


