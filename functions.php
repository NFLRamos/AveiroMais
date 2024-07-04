<?php
/**
 * aveiromais functions and definitions
 *
 * @package aveiromais
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// aveiromais's includes directory.
$aveiromais_inc_dir = 'inc';

// Array of files to include.
$aveiromais_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/aveiromais/aveiromais/issues/567.
	'/editor.php',                          // Load Editor functions.
	'/block-editor.php',                    // Load Block Editor functions.
	'/types.php',                    // Load Block Editor functions.
	'/plugin-update-checker/plugin-update-checker.php', // Load CTG Update Checks
	'/deprecated.php',                      // Load deprecated functions.
);

// Load WooCommerce functions if WooCommerce is activated.
if ( class_exists( 'WooCommerce' ) ) {
	$aveiromais_includes[] = '/woocommerce.php';
}

// Load Jetpack compatibility file if Jetpack is activiated.
if ( class_exists( 'Jetpack' ) ) {
	$aveiromais_includes[] = '/jetpack.php';
}

// Include files.
foreach ( $aveiromais_includes as $file ) {
	require_once get_theme_file_path( $aveiromais_inc_dir . $file );
}
$updateToken="tLFAIEXnf2AhXvU4keJ5SbBhs2oWAPlmHeT5Q36GgkG4NIc51L";
$myUpdateChecker2 = Puc_v4_Factory::buildUpdateChecker(
	'http://plugins.contagio.pt/aveiromais/' . $updateToken . '/details.json',
	__FILE__
);