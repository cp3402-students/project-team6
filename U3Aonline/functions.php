<?php 

if ( ! function_exists( 'u3aonline_theme_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since My theme name 1.0
	 *
	 * @return void
	 */
	function u3aonline_theme_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;
add_action( 'after_setup_theme', 'u3aonline_theme_support' );

/*-----------------------------------------------------------
Enqueue Styles
------------------------------------------------------------*/

if ( ! function_exists( 'u3aonline_styles' ) ) :

	function u3aonline_styles() {
	  // Register Stylesheet
	  wp_enqueue_style('paperless-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
	  wp_enqueue_style('paperless-style-blocks', get_template_directory_uri() . '/assets/css/blocks.css');
	}
  
endif;
  
add_action( 'wp_enqueue_scripts', 'u3aonline_styles' );

// function pp_scripts() {
// 	// Registering Bootstrap style
// 	wp_enqueue_style( 'bootstrap_min', get_stylesheet_directory_uri().'/css/bootstrap.min.css' );
	
// 	wp_enqueue_script('jquery');
// 	//Registering Bootstrap Script
// 	wp_enqueue_script( 'bootstrap_min', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '', true );
// 	}
// 	add_action( 'wp_enqueue_scripts', 'pp_scripts' );


// 	add_action( 'init', 'custom_bootstrap_slider' );
// /**
//  * Register a Custom post type for.
//  */
// function custom_bootstrap_slider() {
// 	$labels = array(
// 		'name'               => _x( 'Slider', 'post type general name'),
// 		'singular_name'      => _x( 'Slide', 'post type singular name'),
// 		'menu_name'          => _x( 'Bootstrap Slider', 'admin menu'),
// 		'name_admin_bar'     => _x( 'Slide', 'add new on admin bar'),
// 		'add_new'            => _x( 'Add New', 'Slide'),
// 		'add_new_item'       => __( 'Name'),
// 		'new_item'           => __( 'New Slide'),
// 		'edit_item'          => __( 'Edit Slide'),
// 		'view_item'          => __( 'View Slide'),
// 		'all_items'          => __( 'All Slide'),
// 		'featured_image'     => __( 'Featured Image', 'text_domain' ),
// 		'search_items'       => __( 'Search Slide'),
// 		'parent_item_colon'  => __( 'Parent Slide:'),
// 		'not_found'          => __( 'No Slide found.'),
// 		'not_found_in_trash' => __( 'No Slide found in Trash.'),
// 	);

// 	$args = array(
// 		'labels'             => $labels,
// 		'menu_icon'	     => 'dashicons-star-half',
//     	        'description'        => __( 'Description.'),
// 		'public'             => true,
// 		'publicly_queryable' => true,
// 		'show_ui'            => true,
// 		'show_in_menu'       => true,
// 		'query_var'          => true,
// 		'rewrite'            => true,
// 		'capability_type'    => 'post',
// 		'has_archive'        => true,
// 		'hierarchical'       => true,
// 		'menu_position'      => null,
// 		'supports'           => array('title','editor','thumbnail')
// 	);

// 	register_post_type( 'slider', $args );
// }