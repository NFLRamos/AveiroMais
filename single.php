<?php
/**
 * The template for displaying all single posts
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
	<div class="mt-5 <?php echo esc_attr( $container ); ?>" id="content" tabindex="-1 " >

	<?php the_content() ?>

	</div><!-- #content -->
</div>


<?php
get_footer();
