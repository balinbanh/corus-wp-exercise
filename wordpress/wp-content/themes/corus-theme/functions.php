<?php
/*
 * Functions
 */

/**
 * Enqueue scripts and styles.
 */
function corus_theme_scripts() {
	wp_enqueue_style( 'main-stylesheet', get_stylesheet_uri() );
	wp_enqueue_script('jquery');

	//only load slick if singular. Optimize page load time.
	if (is_singular()):
		wp_enqueue_style('slick-styles', get_template_directory_uri() . '/components/slick-slider/slick.css');

		//Enqueue slick-js to footer
		wp_enqueue_script('slick-js', get_template_directory_uri() . '/components/slick-slider/slick.min.js', array(), false, true);
	endif;
}
add_action( 'wp_enqueue_scripts', 'corus_theme_scripts' );

/*
 * Create gallery custom post type.
 */
function Gallery() {
  $labels = array(
    'name'               => _x( 'Gallery', 'post type general name' ),
    'singular_name'      => _x( 'Gallery', 'post type singular name' ),
    'add_new_item'       => __( 'Add New Gallery Item' ),
    'edit_item'          => __( 'Edit Gallery' ),
    'new_item'           => __( 'New Gallery' ),
    'all_items'          => __( 'All Gallery' ),
    'view_item'          => __( 'View Gallery' ),
    'search_items'       => __( 'Search Gallery' ),
    'not_found'          => __( 'No Gallery found' ),
    'not_found_in_trash' => __( 'No Gallery found in the Trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Gallery'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Gallery',
    'public'        => true,
    'menu_icon'           => 'dashicons-format-gallery',
    'show_in_nav_menus' => true,
    'supports'      => array( 'title' ),
    'hierachical' => true,
    'has_archive'   => true,
  );
  register_post_type( 'Gallery', $args );
}
add_action( 'init', 'Gallery' );
