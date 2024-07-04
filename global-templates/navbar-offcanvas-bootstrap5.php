<?php
/**
 * Header Navbar (bootstrap5)
 *
 * @package aveiromais
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'aveiromais_container_type' );
?>

<nav id="main-nav" class="navbar navbar-expand-md dark" style="top:0px; position:fixed; z-index:99" aria-labelledby="main-nav-label">

	<h2 id="main-nav-label" class="screen-reader-text">
		<?php esc_html_e( 'Main Navigation', 'aveiromais' ); ?>
	</h2>


	<div class="<?php echo esc_attr( $container ); ?>">

		<!-- Your site title as branding in the menu -->
		<?php if ( ! has_custom_logo() ) { ?>

			<?php if ( is_front_page() && is_home() ) : ?>

				<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

			<?php else : ?>

				<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

			<?php endif; ?>

			<?php
		} else {
			the_custom_logo();
		}
		?>
		<!-- end custom logo -->

		<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarNavOffcanvas" aria-controls="navbarNavOffcanvas" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'aveiromais' ); ?>">
			<div class="menu">
				<svg width="45" height="45" viewBox="0 0 100 100">
					<path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058"></path>
					<path class="line line2" d="M 20,50 H 80"></path>
					<path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942"></path>
				</svg>
			</div>
		</button>

		<div class="offcanvas offcanvas-end dark" tabindex="-1" id="navbarNavOffcanvas">

			<div class="offcanvas-header justify-content-end">
				<button type="button" class="btn-close btn-close-white text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			</div><!-- .offcancas-header -->

			<!-- The WordPress Menu goes here -->
			<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'primary',
					'container_class' => 'offcanvas-body site-menu',
					'container_id'    => '',
					'menu_class'      => 'navbar-nav justify-content-end flex-grow-1 pe-3',
					'fallback_cb'     => '',
					'menu_id'         => 'main-menu',
					'depth'           => 2,
					'walker'          => new aveiromais_WP_Bootstrap_Navwalker(),
				)
			);
			?>
			<div class="navbar-button d-flex d-lg-none">
			<a href="<?php echo home_url()?>/bilhetes">
				<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/icon-navbar-button.png" alt="Image"></figure>
				<?php _e('Bilhetes') ?> </a> 	
		</div>
		</div><!-- .offcanvas -->
			<?php /*  
		<div class="navbar-button d-lg-inline-block d-none">
			<a class="d-none" href="#">
				<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/icon-navbar-button.png" alt="Image"></figure>
				<?php _e('Bilhetes') ?> </a> 	
		</div>
			*/ ?>
	</div><!-- .container(-fluid) -->

</nav><!-- .site-navigation -->
