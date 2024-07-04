<?php
/**
 * Template Name: cancro prostata
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package aveiromais
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'aveiromais_container_type' );

?>

<div class="section-wrapper" >
    <header class="page-header" <?php /* data-background="<?php echo get_template_directory_uri(); ?>/assets/page-header-bg.png"*/ ?>>
      <div class="container">
        <div class="inner">
         <!-- <span class="h6">NICE TO BE PART OF INSPIRED MOMENTS</span>-->
          <h1 class="h2"><?php the_title() ?></h1>
        </div>
        <!-- end inner --> 
      </div>
      <!-- end container --> 
    </header>

    <?php include_once('theme-parts-pages/cancro_prostata/main_conference_prostata.php'); ?>
<?php include __DIR__ . "/../theme-parts/event_days_tabs.php"; ?>
<?php //include_once('theme-parts-pages/cancro_prostata/event_days_tabs_prostata.php'); ?>
<?php include_once('theme-parts-pages/cancro_prostata/why_us_prostata.php'); ?>

	<section class="content-section">

		<span class="section-bg" data-background="<?php echo get_template_directory_uri(); ?>/assets/section-bg01.png" data-scroll data-scroll-speed="2"></span>
		<!-- end section-bg -->
      <div class="container">
        <div class="row">
     
		<?php
				while ( have_posts() ) {
					the_post();
					get_template_part( 'loop-templates/content', 'page' );

				}
				?>


        </div>
        <!-- end row --> 
      </div>
      <!-- end container --> 
    </section>
</div>




<?php //include_once('theme-parts-pages/cancro_prostata/partners_prostata.php'); ?>


<?php
get_footer();
