<?php
/**
 * Plugin Name: Sedoo - VUE JS Misva
 * Description: Permet l'affichage des composants par le chargement de viewers Misva
 * Version: 0.0.12
 * Author: Nicolas Gruwe 
 * GitHub Plugin URI: sedoo/sedoo-wppl-misva
 * GitHub Branch:     master
 */


include 'sedoo-wppl-misva-functions.php';
include 'sedoo-wppl-misva-acf.php';
include 'inc/sedoo-wppl-misva-acf-fields.php';

// Register Custom Post Type
function sedoo_misva_register() {

	$labels = array(
		'name'                  => _x( 'Viewer Misva', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Viewer Misva', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Viewer Misva', 'text_domain' ),
		'name_admin_bar'        => __( 'Viewer Misva', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Viewer Misva', 'text_domain' ),
		'description'           => __( 'Elements Misva', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title','author','revisions'),
		'taxonomies'            => '',
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'menu_icon'				=> 'dashicons-desktop',
	);
	register_post_type( 'misva_viewers', $args );	
}
add_action( 'init', 'sedoo_misva_register', 0 );



////////
// Embed css for the front
///////
function enqueue_search_style() {
    wp_register_style( 'sedoo_misva_css', plugins_url('css/misva.css', __FILE__) );
    wp_enqueue_style( 'sedoo_misva_css' );
}
add_action( 'wp_head', 'enqueue_search_style' );


