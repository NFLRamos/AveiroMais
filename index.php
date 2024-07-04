<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package aveiromais
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

$container = get_theme_mod('aveiromais_container_type');
?>

<?php if (is_front_page() && is_home()) : ?>
	<?php get_template_part('global-templates/hero'); ?>
<?php endif; ?>





<div class="section-wrapper">
	<header class="page-header" <?php /* data-background="<?php echo get_template_directory_uri(); ?>/assets/page-header-bg.png"*/ ?>>
		<div class="container">
			<div class="inner">
				<!-- <span class="h6">NICE TO BE PART OF INSPIRED MOMENTS</span>-->
				<h1 class="h2">Artigos</h1>
			</div>
			<!-- end inner -->
		</div>
		<!-- end container -->
	</header>
	<!-- end page-header -->
	<section class="content-section ">
		<!-- end section-bg -->
		<div class="container">
			<div class="row">
				<div class="col-lg-8">

					<?php if (have_posts()) {
						while (have_posts()) {
							the_post();
							$image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); ?>

							<div class="blog-post">
								<figure class="post-image"><img src="<?php echo $image[0] ?>" alt="Image"></figure>
								<div class="content-box"> <small><?php the_date() ?></small>
									<h3><?php the_title() ?></h3>
									<p><?php the_field('descricao_breve') ?> </p>
									<a href="<?php the_permalink() ?>" class="custom-link mb-5">Ver artigo</a>
								</div>
							</div>
					<?php }
					} ?>

				</div>

				<!-- end col-8 -->
				<div class="d-none d-lg-block col-lg-4">

					<!-- end widget -->
					<div id="sidebar">

						<div class="caixa_pesquisa ">
							<h5>Pesquisa</h5>
							<?php get_search_form() ?>
						</div>

						<h6 class="mt-5" style="font-size:30px; font-weight:bold;padding-left:2rem;">Categorias</h6>

						<ul class="categories_artigos">
							<?php
							$categories = get_categories(array(
								'orderby' => 'name',
								'order'   => 'ASC'
							));
							foreach ($categories as $category) {
							?>
								<a class="dropdown-item pt-3 pb-3" href="<?php echo esc_url(get_category_link($category->term_id)) ?>"><?php echo $category->name; ?></a>
							<?php
							} ?>
						</ul>

					</div>
					<!-- end widget -->

					<!-- end widget -->

					<!-- end sidebar -->
				</div>
				<!-- end col-4 -->
			</div>
			<!-- end row -->
		</div>
		<!-- end container -->
	</section>

</div><!-- #content -->



<?php
get_footer();
