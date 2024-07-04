<?php
/**
 * Custom hooks
 *
 * @package aveiromais
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'aveiromais_site_info' ) ) {
	/**
	 * Add site info hook to WP hook library.
	 */
	function aveiromais_site_info() {
		do_action( 'aveiromais_site_info' );
	}
}

add_action( 'aveiromais_site_info', 'aveiromais_add_site_info' );
if ( ! function_exists( 'aveiromais_add_site_info' ) ) {
	/**
	 * Add site info content.
	 */

	function aveiromais_add_site_info() {
	echo '<span class="copyright">© '. date('Y ') . date('M ')  .' </span> <span class="creation">created with love by <a href="https://contagio.pt">contágio</a></span> </span>';

	}
}
