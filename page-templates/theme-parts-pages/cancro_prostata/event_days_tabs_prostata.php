<section class="content-section" data-background="#F6FAFB">
		<span class="section-bg" data-background="<?php echo get_template_directory_uri(); ?>/assets/section-bg02.png" data-scroll data-scroll-speed="2"></span>
		<!-- end section-bg -->
      <div class="container">
        <div class="row">
          <div class="col-12">
			  <div data-scroll data-scroll-speed="-0.5">
            <div class="section-title">
              <h6><?php the_field('prostata_sub_title')?></h6>
              <h2><?php the_field('prostata_title')?></h2>
            </div>
            <!-- end section-title --> 
				   </div>
			  <!-- end data-scroll -->
          </div>
          <!-- end col-12 -->
          <div class="col-12">
			  <div data-scroll data-scroll-speed="0.5">
            <div class="schedule-box">
              <div class="nav">
            <?php
              if( have_rows('prostata_lineup_day') ):
                $i = 1 ;
                    while( have_rows('prostata_lineup_day') ) : the_row(); 
                    ?>
                    <div class="<?php if($i == 1 ) echo 'active'; ?>" data-bs-toggle="tab" data-bs-target="#tab-content0<?php echo $i;?>"> <span class="day"><?php the_sub_field('prostata_tab'); ?></span> <small class="date"><?php the_sub_field('prostata_sub_title_tab'); ?></small> </div>
                <?php 
                    $i++;
                    endwhile;
                endif;
                ?>
              </div>

              <div class="tab-content">
              <?php
              if( have_rows('prostata_lineup_day') ):
                $i = 1 ;
                    while( have_rows('prostata_lineup_day') ) : the_row(); 
                    ?>
                    
                    
                            <div class="tab-pane fade <?php if($i == 1 ) echo 'show active'; ?>" id="tab-content0<?php echo $i;?>">
                            <?php 
                            if( have_rows('schedule') ):
                            
                            while( have_rows('schedule') ) : the_row(); 
                            ?>
                            <div class="timeline">
                                <div class="event-time"><img src="<?php echo get_template_directory_uri(); ?>/assets/icon-time.svg" alt="Image"><?php the_sub_field('prostata_time'); ?></div>
                                <!-- end event-time -->
                                <div class="event-description">
                                    <?php the_sub_field('prostata_descricao'); ?>
                                </div>
                                <!-- end event-description -->
                                </div>
                                <?php 

                                endwhile;
                                endif;
                                ?> 
                          
                           
                </div>
                <?php 
                $i++;
                endwhile;
                endif;
                ?>




              
              </div>
              <!-- end tab-content --> 
            </div>
            <!-- end schedule-box --> 
				   </div>
			  <!-- end data-scroll -->
          </div>
          <!-- end col-12 --> 
        </div>
        <!-- end row --> 
      </div>
      <!-- end container --> 
    </section>