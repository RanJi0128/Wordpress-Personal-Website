<?php
/**
 * Register Post type functionality 
 * @package popup-anything-on-click
 * @since 1.0.0
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

/**
 * Function to register post type
 * 
 * @package popup-anything-on-click
 * @since 1.0.0
 */
function popupaoc_register_post_type() {

	$popupaoc_post_lbls = apply_filters( 'popupaoc_post_labels', array(
								'name'                 	=> __('Popup Anything', 'popup-anything-on-click'),
								'singular_name'        	=> __('Popup Anything', 'popup-anything-on-click'),
								'add_new'              	=> __('Add Popup', 'popup-anything-on-click'),
								'add_new_item'         	=> __('Add New Popup', 'popup-anything-on-click'),
								'edit_item'            	=> __('Edit Popup', 'popup-anything-on-click'),
								'new_item'             	=> __('New Popup', 'popup-anything-on-click'),
								'view_item'            	=> __('View Popup', 'popup-anything-on-click'),
								'search_items'         	=> __('Search Popup', 'popup-anything-on-click'),
								'not_found'            	=> __('No Popup found', 'popup-anything-on-click'),
								'not_found_in_trash'   	=> __('No Popup found in trash', 'popup-anything-on-click'),
								'parent_item_colon'    	=> '',
								'menu_name'            	=> __('Popup Anything', 'popup-anything-on-click')
							));

	$popupaoc_args = array(
		'labels'				=> $popupaoc_post_lbls,
		'public'              	=> false,
		'show_ui'             	=> true,
		'query_var'           	=> false,
		'rewrite'             	=> false,
		'capability_type'     	=> 'post',
		'hierarchical'        	=> false,
		'menu_icon'				=> 'dashicons-editor-bold',
		'supports'            	=> apply_filters('popupaoc_post_supports', array('title','editor')),
	);

	// Register slick slider post type
	register_post_type( POPUPAOC_POST_TYPE, apply_filters( 'popupaoc_registered_post_type_args', $popupaoc_args ) );
}

// Action to register plugin post type
add_action('init', 'popupaoc_register_post_type');

/**
 * Function to update post message for popup
 * 
 * @package Popup anything on click
 * @since 1.0.0
 */
function popupaoc_post_updated_messages( $messages ) {

	global $post, $post_ID;

	$messages[POPUPAOC_POST_TYPE] = array(
		0 => '', // Unused. Messages start at index 1.
		1 => sprintf( __( 'Popup updated.', 'popup-anything-on-click' ) ),
		2 => __( 'Custom field updated.', 'popup-anything-on-click' ),
		3 => __( 'Custom field deleted.', 'popup-anything-on-click' ),
		4 => __( 'Popup updated.', 'popup-anything-on-click' ),
		5 => isset( $_GET['revision'] ) ? sprintf( __( 'Popup restored to revision from %s', 'popup-anything-on-click' ), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		6 => sprintf( __( 'Popup published.', 'popup-anything-on-click' ) ),
		7 => __( 'Popup saved.', 'popup-anything-on-click' ),
		8 => sprintf( __( 'Popup submitted.', 'popup-anything-on-click' ) ),
		9 => sprintf( __( 'Popup scheduled for: <strong>%1$s</strong>.', 'popup-anything-on-click' ),
		  date_i18n( 'M j, Y @ G:i', strtotime( $post->post_date ) ) ),
		10 => sprintf( __( 'Popup draft updated.', 'popup-anything-on-click' ) ),
	);	
	return $messages;
}
// Filter to update slider post message
add_filter( 'post_updated_messages', 'popupaoc_post_updated_messages' );