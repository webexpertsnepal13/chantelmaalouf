<?php
/**
 * Custom post type for services.
 */
add_action( 'init', 'cpt_services' );
/**
 * Register a Custom post type.
 */
function cpt_services() {
	$labels = array(
		'name'               => _x( 'Services', 'fuel-me' ),
		'singular_name'      => _x( 'Services', 'fuel-me' ),
		'menu_name'          => _x( 'Services', 'admin menu' ),
		'name_admin_bar'     => _x( 'Services', 'add new on admin bar' ),
		'add_new'            => _x( 'Add Services', 'Services' ),
		'add_new_item'       => __( 'Services', 'fuel-me' ),
		'new_item'           => __( 'New Services', 'fuel-me' ),
		'edit_item'          => __( 'Edit Services', 'fuel-me' ),
		'view_item'          => __( 'View Services', 'fuel-me' ),
		'all_items'          => __( 'All Services', 'fuel-me' ),
		'featured_image'     => __( 'Featured Image', 'fuel-me', 'fuel-me' ),
		'search_items'       => __( 'Search Services', 'fuel-me' ),
		'parent_item_colon'  => __( 'Parent Services:', 'fuel-me' ),
		'not_found'          => __( 'No Services found.', 'fuel-me' ),
		'not_found_in_trash' => __( 'No Services found in Trash.', 'fuel-me' ),
	);

	$args = array(
		'labels'             => $labels,
		'menu_icon'	     => 'dashicons-admin-generic',
    	        'description'        => __( 'Description.' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array( 'title','editor','thumbnail', 'excerpt' )
	);

	register_post_type( 'services', $args );
}