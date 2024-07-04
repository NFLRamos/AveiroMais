<?php
/**
 * aveiromais Theme Customizer
 *
 * @package aveiromais
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
if ( ! function_exists( 'aveiromais_customize_register' ) ) {
	/**
	 * Register basic customizer support.
	 *
	 * @param object $wp_customize Customizer reference.
	 */
	function aveiromais_customize_register( $wp_customize ) {
		$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
		$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
		$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	}
}
add_action( 'customize_register', 'aveiromais_customize_register' );

if ( ! function_exists( 'aveiromais_theme_customize_register' ) ) {
	/**
	 * Register individual settings through customizer's API.
	 *
	 * @param WP_Customize_Manager $wp_customize Customizer reference.
	 */
	function aveiromais_theme_customize_register( $wp_customize ) {

		// Theme layout settings.
		$wp_customize->add_section(
			'aveiromais_theme_layout_options',
			array(
				'title'       => __( 'Theme Layout Settings', 'aveiromais' ),
				'capability'  => 'edit_theme_options',
				'description' => __( 'Container width and sidebar defaults', 'aveiromais' ),
				'priority'    => apply_filters( 'aveiromais_theme_layout_options_priority', 160 ),
			)
		);

		/**
		 * Select sanitization function
		 *
		 * @param string               $input   Slug to sanitize.
		 * @param WP_Customize_Setting $setting Setting instance.
		 * @return string Sanitized slug if it is a valid choice; otherwise, the setting default.
		 */
		function aveiromais_theme_slug_sanitize_select( $input, $setting ) {

			// Ensure input is a slug (lowercase alphanumeric characters, dashes and underscores are allowed only).
			$input = sanitize_key( $input );

			// Get the list of possible select options.
			$choices = $setting->manager->get_control( $setting->id )->choices;

			// If the input is a valid key, return it; otherwise, return the default.
			return ( array_key_exists( $input, $choices ) ? $input : $setting->default );

		}

		$wp_customize->add_setting(
			'aveiromais_bootstrap_version',
			array(
				'default'           => 'bootstrap4',
				'type'              => 'theme_mod',
				'sanitize_callback' => 'sanitize_text_field',
				'capability'        => 'edit_theme_options',
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'aveiromais_bootstrap_version',
				array(
					'label'       => __( 'Bootstrap Version', 'aveiromais' ),
					'description' => __( 'Choose between Bootstrap 4 or Bootstrap 5', 'aveiromais' ),
					'section'     => 'aveiromais_theme_layout_options',
					'settings'    => 'aveiromais_bootstrap_version',
					'type'        => 'select',
					'choices'     => array(
						'bootstrap4' => __( 'Bootstrap 4', 'aveiromais' ),
						'bootstrap5' => __( 'Bootstrap 5', 'aveiromais' ),
					),
					'priority'    => apply_filters( 'aveiromais_bootstrap_version_priority', 10 ),
				)
			)
		);

		$wp_customize->add_setting(
			'aveiromais_container_type',
			array(
				'default'           => 'container',
				'type'              => 'theme_mod',
				'sanitize_callback' => 'aveiromais_theme_slug_sanitize_select',
				'capability'        => 'edit_theme_options',
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'aveiromais_container_type',
				array(
					'label'       => __( 'Container Width', 'aveiromais' ),
					'description' => __( 'Choose between Bootstrap\'s container and container-fluid', 'aveiromais' ),
					'section'     => 'aveiromais_theme_layout_options',
					'settings'    => 'aveiromais_container_type',
					'type'        => 'select',
					'choices'     => array(
						'container'       => __( 'Fixed width container', 'aveiromais' ),
						'container-fluid' => __( 'Full width container', 'aveiromais' ),
					),
					'priority'    => apply_filters( 'aveiromais_container_type_priority', 10 ),
				)
			)
		);

		$wp_customize->add_setting(
			'aveiromais_navbar_type',
			array(
				'default'           => 'collapse',
				'type'              => 'theme_mod',
				'sanitize_callback' => 'sanitize_text_field',
				'capability'        => 'edit_theme_options',
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'aveiromais_navbar_type',
				array(
					'label'             => __( 'Responsive Navigation Type', 'aveiromais' ),
					'description'       => __(
						'Choose between an expanding and collapsing navbar or an offcanvas drawer.',
						'aveiromais'
					),
					'section'           => 'aveiromais_theme_layout_options',
					'settings'          => 'aveiromais_navbar_type',
					'type'              => 'select',
					'sanitize_callback' => 'aveiromais_theme_slug_sanitize_select',
					'choices'           => array(
						'collapse'  => __( 'Collapse', 'aveiromais' ),
						'offcanvas' => __( 'Offcanvas', 'aveiromais' ),
					),
					'priority'          => apply_filters( 'aveiromais_navbar_type_priority', 20 ),
				)
			)
		);

		$wp_customize->add_setting(
			'aveiromais_sidebar_position',
			array(
				'default'           => 'right',
				'type'              => 'theme_mod',
				'sanitize_callback' => 'sanitize_text_field',
				'capability'        => 'edit_theme_options',
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'aveiromais_sidebar_position',
				array(
					'label'             => __( 'Sidebar Positioning', 'aveiromais' ),
					'description'       => __(
						'Set sidebar\'s default position. Can either be: right, left, both or none. Note: this can be overridden on individual pages.',
						'aveiromais'
					),
					'section'           => 'aveiromais_theme_layout_options',
					'settings'          => 'aveiromais_sidebar_position',
					'type'              => 'select',
					'sanitize_callback' => 'aveiromais_theme_slug_sanitize_select',
					'choices'           => array(
						'right' => __( 'Right sidebar', 'aveiromais' ),
						'left'  => __( 'Left sidebar', 'aveiromais' ),
						'both'  => __( 'Left & Right sidebars', 'aveiromais' ),
						'none'  => __( 'No sidebar', 'aveiromais' ),
					),
					'priority'          => apply_filters( 'aveiromais_sidebar_position_priority', 20 ),
				)
			)
		);

		$wp_customize->add_setting(
			'aveiromais_site_info_override',
			array(
				'default'           => '',
				'type'              => 'theme_mod',
				'sanitize_callback' => 'wp_kses_post',
				'capability'        => 'edit_theme_options',
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'aveiromais_site_info_override',
				array(
					'label'       => __( 'Footer Site Info', 'aveiromais' ),
					'description' => __( 'Override aveiromais\'s site info located at the footer of the page.', 'aveiromais' ),
					'section'     => 'aveiromais_theme_layout_options',
					'settings'    => 'aveiromais_site_info_override',
					'type'        => 'textarea',
					'priority'    => 20,
				)
			)
		);

	}
} // End of if function_exists( 'aveiromais_theme_customize_register' ).
add_action( 'customize_register', 'aveiromais_theme_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
if ( ! function_exists( 'aveiromais_customize_preview_js' ) ) {
	/**
	 * Setup JS integration for live previewing.
	 */
	function aveiromais_customize_preview_js() {
		wp_enqueue_script(
			'aveiromais_customizer',
			get_template_directory_uri() . '/js/customizer.js',
			array( 'customize-preview' ),
			'20130508',
			true
		);
	}
}
add_action( 'customize_preview_init', 'aveiromais_customize_preview_js' );

/**
 * Loads javascript for conditionally showing customizer controls.
 */
if ( ! function_exists( 'aveiromais_customize_controls_js' ) ) {
	/**
	 * Setup JS integration for live previewing.
	 */
	function aveiromais_customize_controls_js() {
		wp_enqueue_script(
			'aveiromais_customizer',
			get_template_directory_uri() . '/js/customizer-controls.js',
			array( 'customize-preview' ),
			'20130508',
			true
		);
	}
}
add_action( 'customize_controls_enqueue_scripts', 'aveiromais_customize_controls_js' );



if ( ! function_exists( 'aveiromais_default_navbar_type' ) ) {
	/**
	 * Overrides the responsive navbar type for Bootstrap 4
	 *
	 * @param string $current_mod
	 * @return string
	 */
	function aveiromais_default_navbar_type( $current_mod ) {

		if ( 'bootstrap5' !== get_theme_mod( 'aveiromais_bootstrap_version' ) ) {
			$current_mod = 'collapse';
		}

		return $current_mod;
	}
}
add_filter( 'theme_mod_aveiromais_navbar_type', 'aveiromais_default_navbar_type', 20 );
