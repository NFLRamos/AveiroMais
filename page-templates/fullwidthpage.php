<?php

/**
 * Template Name: Full Width Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package aveiromais
 */

// Exit if accessed directly.
// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

$container = get_theme_mod('aveiromais_container_type');
?>

<div class="section-wrapper">
  <header class="page-header">
    <div class="container">
      <div class="inner">

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
<?php
get_footer();
