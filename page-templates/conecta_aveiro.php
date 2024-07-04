<?php

/**
 * Template Name: conecta aveiro
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package aveiromais
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

$container = get_theme_mod('aveiromais_container_type');

?>

<div class="section-wrapper">
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

  <section class="content-section">

    <span class="section-bg" data-background="<?php echo get_template_directory_uri(); ?>/assets/section-bg01.png" data-scroll data-scroll-speed="2"></span>
    <!-- end section-bg -->
    <div class="container">
      <div class="row">

        <?php
        while (have_posts()) {
          the_post();
          get_template_part('loop-templates/content', 'page');
        }
        ?>


      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </section>
</div>


<?php include_once('theme-parts-pages/conecta/why_us_conecta.php'); ?>
<?php //include_once('theme-parts-pages/conecta/main_conference_conecta.php'); 
?>
<?php include_once('theme-parts-pages/conecta/floating_box_conecta.php'); ?>
<?php include_once('theme-parts-pages/conecta/partners_conecta.php'); ?>
<div class="container mb-5">
  <?php echo do_shortcode('[postx_template id="596"]') ?>
</div>




<?php
get_footer();
