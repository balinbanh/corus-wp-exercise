<?php
/*
 * Functions
 */

/**
 * Enqueue scripts and styles.
 */
function test_scripts() {
	wp_enqueue_style( 'main-stylesheet', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'test_scripts' );

/*
 * Create gallery custom post type.
 */
function Gallery() {
  $labels = array(
    'name'               => _x( 'Gallery', 'post type general name' ),
    'singular_name'      => _x( 'Gallery', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
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
    'menu_position' => 6,
    'menu_icon'           => 'dashicons-format-gallery',
    'show_in_nav_menus' => true,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments', 'page-attributes', 'author' ),
    'hierachical' => true,
    'has_archive'   => true,
  );
  register_post_type( 'Gallery', $args );
}
add_action( 'init', 'Gallery' );
