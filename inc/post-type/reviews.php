<?php
/**
 * Ieverly reviews post-type
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ieverly
 */

function reviews() {
	$labels = array(
		'name'               => esc_html__( 'Reviews', 'ieverly' ),
		'singular_name'      => esc_html__( 'Reviews', 'ieverly' ),
		'add_new'            => esc_html__( 'Add New', 'ieverly' ),
		'add_new_item'       => esc_html__( 'Add New case', 'ieverly' ),
		'edit_item'          => esc_html__( 'Edit case', 'ieverly' ),
		'new_item'           => esc_html__( 'New case', 'ieverly' ),
		'view_item'          => esc_html__( 'View case', 'ieverly' ),
		'search_items'       => esc_html__( 'Search case', 'ieverly' ),
		'not_found'          => esc_html__( 'No case found', 'ieverly' ),
		'not_found_in_trash' => esc_html__( 'No case found in Trash', 'ieverly' ),
		'parent_item_colon'  => '',
	);
	
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => false,
		'show_ui'            => true,
		'query_var'          => true,
		'show_in_menu'       => true,
		'has_archive'        => true,
		'show_in_nav_menus'  => false,
		'capability_type'    => 'post',
		'hierarchical'       => true,
		'menu_icon'          => 'dashicons-admin-comments',
		'menu_position'      => 20,
		'supports'           => array( 'title', 'editor', 'thumbnail', 'revisions', 'page-attributes' ),
		'taxonomies'         => array( 'reviews-tag' ),
	);

	$tag_labels = array(
		'name'                       => esc_html__( 'Reviews tag', 'ieverly' ),
		'singular_name'              => esc_html__( 'Reviews tag', 'ieverly' ),
		'search_items'               => esc_html__( 'Search reviews tags', 'ieverly' ),
		'popular_items'              => esc_html__( 'Popular reviews tags', 'ieverly' ),
		'all_items'                  => esc_html__( 'All reviews tags', 'ieverly' ),
		'parent_item'                => esc_html__( 'Parent reviews tag', 'ieverly' ),
		'parent_item_colon'          => esc_html__( 'Parent reviews tag:', 'ieverly' ),
		'edit_item'                  => esc_html__( 'Edit reviews tag', 'ieverly' ),
		'update_item'                => esc_html__( 'Update reviews tag', 'ieverly' ),
		'add_new_item'               => esc_html__( 'Add New reviews tag', 'ieverly' ),
		'new_item_name'              => esc_html__( 'New reviews tag Name', 'ieverly' ),
		'separate_items_with_commas' => esc_html__( 'Separate reviews tags with commas', 'ieverly' ),
		'add_or_remove_items'        => esc_html__( 'Add or remove reviews tags', 'ieverly' ),
		'choose_from_most_used'      => esc_html__( 'Choose from the most used reviews tags', 'ieverly' ),
		'menu_name'                  => esc_html__( 'Reviews tags', 'ieverly' ),
	);
	
	register_post_type( 'reviews', $args );
}
add_action( 'init', 'reviews' );
