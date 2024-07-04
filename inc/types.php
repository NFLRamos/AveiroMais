<?php

function cpt_amais() {
 
       
    $labels = [
        "name" => __( "Slider", "aveiromais" ),
        "singular_name" => __( "Slide", "aveiromais" ),
    ];
    
    $args = [
        "label" => __( "Slider", "aveiromais" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => true,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => [ "slug" => "slider", "with_front" => true ],
        "query_var" => true,
        "supports" => [ "title", "editor", "thumbnail"],
    ];
    
    register_post_type( "slider", $args );

    $labels = [
        "name" => __( "reviews", "aveiromais" ),
        "singular_name" => __( "reviews", "aveiromais" ),
    ];
    
    $args = [
        "label" => __( "reviews", "aveiromais" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => true,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => [ "slug" => "reviews", "with_front" => true ],
        "query_var" => true,
        "supports" => [ "title", "editor", "thumbnail"],
    ];
    
    register_post_type( "reviews", $args );

    $labels = [
        "name" => __( "Team", "aveiromais" ),
        "singular_name" => __( "Team", "aveiromais" ),
    ];
    
    $args = [
        "label" => __( "Team", "aveiromais" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => true,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => [ "slug" => "team", "with_front" => true ],
        "query_var" => true,
        "supports" => [ "title", "editor", "thumbnail"],
    ];
    
    register_post_type( "team", $args );

    $labels = [
        "name" => __( "Partners", "aveiromais" ),
        "singular_name" => __( "Partners", "aveiromais" ),
    ];
    
    $args = [
        "label" => __( "Partners", "aveiromais" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => true,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => [ "slug" => "partners", "with_front" => true ],
        "query_var" => true,
        "supports" => [ "title", "editor", "thumbnail"],
    ];
    
    register_post_type( "partners", $args );
}
add_action( 'init', 'cpt_amais' );


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Configurações',
		'menu_title'	=> 'Configurações',
		'menu_slug' 	=> 'configs',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}
add_action( 'init', 'amais_taxonomy', 0 );

function amais_taxonomy() {
 
    $labels = array(
      'name' => _x( 'Type of partner', 'aveiromais' ),
      'singular_name' => _x( 'Types', 'aveiromais' ),
      'search_items' =>  __( 'Procurar' ),
      'all_items' => __( 'Todos' ),
      'edit_item' => __( 'Editar' ), 
      'update_item' => __( 'Actualizar' ),
      'add_new_item' => __( 'Novo' ),
      'new_item_name' => __( 'Novo' ),
      'menu_name' => __( 'Type of partner' ),
    );    
    register_taxonomy('typeofpartner',array('partners'), array(
      'hierarchical' => true,
      'labels' => $labels,
      'show_ui' => true,
      'show_in_rest' => true,
      'show_admin_column' => true,
      'query_var' => true,
      'rewrite' => true,
      'rewrite' => array( 'slug' => 'servicetype'),
    ));
  }