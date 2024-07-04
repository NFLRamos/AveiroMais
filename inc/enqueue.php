<?php
/**
 * aveiromais enqueue scripts
 *
 * @package aveiromais
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'aveiromais_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function aveiromais_scripts() {
		// Get the theme data.
		$the_theme         = wp_get_theme();
		$theme_version     = $the_theme->get( 'Version' );
		$bootstrap_version = get_theme_mod( 'aveiromais_bootstrap_version', 'bootstrap4' );
		$suffix            = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

		// Grab asset urls.
		$theme_styles  = "/css/theme{$suffix}.css";
		$theme_scripts = "/js/theme{$suffix}.js";
		if ( 'bootstrap4' === $bootstrap_version ) {
			$theme_styles  = "/css/theme-bootstrap4{$suffix}.css";
			$theme_scripts = "/js/theme-bootstrap4{$suffix}.js";
		}

		$css_version = $theme_version . '.' . filemtime( get_template_directory() . $theme_styles );
		wp_enqueue_style( 'aveiromais-styles', get_template_directory_uri() . $theme_styles, array(), $css_version );
		wp_enqueue_style( 'fontawesome.min', get_template_directory_uri() . '/css/fontawesome.min.css', $css_version );
		wp_enqueue_style('s5', get_template_directory_uri() . '/css/slick.css', array(), $css_version);
		wp_enqueue_style('s6', get_template_directory_uri() . '/css/slick-theme.css', array(), $css_version);
		wp_enqueue_script( 'jquery' );

		$js_version = $theme_version . '.' . filemtime( get_template_directory() . $theme_scripts );
		wp_enqueue_script( 'gsap', get_template_directory_uri() .'/js/gsap.min.js', array(), $js_version, true );
		wp_enqueue_script( 'locomotive-scroll', get_template_directory_uri() .'/js/locomotive-scroll.min.js', array(), $js_version, true );
		wp_enqueue_script( 'ScrollTrigger', get_template_directory_uri() .'/js/ScrollTrigger.min.js', array(), $js_version, true );
		wp_enqueue_script( 'isotope', get_template_directory_uri() .'/js/isotope.min.js', array(), $js_version, true );
		wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.min.js', array(),true );
		wp_enqueue_script( 'aveiromais-scripts', get_template_directory_uri() . $theme_scripts, array(), $js_version, true );
		wp_enqueue_script( 'aveiromais', get_template_directory_uri() .'/js/aveiromais.js', array(), $js_version, true );

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // End of if function_exists( 'aveiromais_scripts' ).

add_action( 'wp_enqueue_scripts', 'aveiromais_scripts' );
