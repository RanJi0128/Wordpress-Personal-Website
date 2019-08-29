<?php
/**
 * Admin Class
 *
 * Handles the Admin side functionality of plugin
 *
 * @package Popup Anything
 * @since 1.0.0
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

class Popupaoc_Admin {

	function __construct() {
		
		// Action to add metabox
		add_action( 'add_meta_boxes', array($this, 'popupaoc_post_sett_metabox') );

		// Action to save metabox
		add_action( 'save_post', array($this, 'popupaoc_save_metabox_value') );		

		// Action to add custom column to Slider listing
		add_filter( 'manage_'.POPUPAOC_POST_TYPE.'_posts_columns', array($this, 'popupaoc_manage_posts_columns') );

		// Action to add custom column data to Slider listing
		add_action('manage_'.POPUPAOC_POST_TYPE.'_posts_custom_column', array($this, 'popupaoc_post_columns_data'), 10, 2);

		// Filter to add row data
		add_filter( 'post_row_actions', array($this, 'popupaoc_add_post_row_action'), 10, 2 );
		
		// Action to add admin menu
		add_action( 'admin_menu', array($this, 'popupaoc_register_menu'), 12 );

		// Admin prior process
		add_action( 'admin_init', array($this, 'popupaoc_admin_init_process') );
	}

	/**
	 * Post Settings Metabox
	 * 
	 * @package Popup Anything
	 * @since 1.0.0
	 */
	function popupaoc_post_sett_metabox() {
		add_meta_box( 'popupaoc-post-sett', __( 'Popup - Settings', 'popup-anything-on-click' ), array($this, 'popupaoc_post_sett_mb_content'), POPUPAOC_POST_TYPE, 'normal', 'high' );
	}

	/**
	 * Post Settings Metabox HTML
	 * 
	 * @package Popup Anything
	 * @since 1.0.0
	 */
	function popupaoc_post_sett_mb_content() {
		include_once( POPUPAOC_DIR .'/includes/admin/metabox/popupaoc-post-sett-metabox.php');
	}

	/**
	 * Function to save metabox values
	 * 
	 * @package Popup Anything
	 * @since 1.0.0
	 */
	function popupaoc_save_metabox_value( $post_id ) {

		global $post_type;
		
		if ( ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )                	// Check Autosave
		|| ( ! isset( $_POST['post_ID'] ) || $post_id != $_POST['post_ID'] )  	// Check Revision
		|| ( $post_type !=  POPUPAOC_POST_TYPE ) )              				// Check if current post type is supported.
		{
		  return $post_id;
		}

		$prefix = POPUPAOC_META_PREFIX; // Taking metabox prefix

		// Taking variables
		$popup_type 	= isset($_POST[$prefix.'popup_type']) 	? $_POST[$prefix.'popup_type'] 	: '';
		$popup_image_url 	= isset($_POST[$prefix.'popup_image_url']) 	? $_POST[$prefix.'popup_image_url'] 	: '';
		$popup_button_txt 	= isset($_POST[$prefix.'popup_button_txt']) 	? $_POST[$prefix.'popup_button_txt'] 	: '';
		$popup_link_txt 	= isset($_POST[$prefix.'popup_link_txt']) 	? $_POST[$prefix.'popup_link_txt'] 	: '';
		$full_screen 		= isset($_POST[$prefix.'full_screen']) 	? $_POST[$prefix.'full_screen'] 	: '';
		$enable_loader 		= isset($_POST[$prefix.'enable_loader']) 	? $_POST[$prefix.'enable_loader'] 	: '';
		$enable_ovelay 		= isset($_POST[$prefix.'enable_ovelay']) 	? $_POST[$prefix.'enable_ovelay'] 	: '';
		$popup_effect 		= isset($_POST[$prefix.'popup_effect']) 	? $_POST[$prefix.'popup_effect'] 	: '';
		$popup_positionx 	= isset($_POST[$prefix.'popup_positionx']) 	? $_POST[$prefix.'popup_positionx'] 	: '';
		$popup_positiony 	= isset($_POST[$prefix.'popup_positiony']) 	? $_POST[$prefix.'popup_positiony'] 	: '';
		$speedin 			= isset($_POST[$prefix.'speedin']) 	? $_POST[$prefix.'speedin'] 	: '';
		$speedout 			= isset($_POST[$prefix.'speedout']) 	? $_POST[$prefix.'speedout'] 	: '';
		$delay 				= isset($_POST[$prefix.'delay']) 	? $_POST[$prefix.'delay'] 	: '';
		
		update_post_meta($post_id, $prefix.'popup_type', $popup_type);
		update_post_meta($post_id, $prefix.'popup_button_txt', $popup_button_txt);
		update_post_meta($post_id, $prefix.'popup_link_txt', $popup_link_txt);
		update_post_meta($post_id, $prefix.'popup_image_url', $popup_image_url);
		update_post_meta($post_id, $prefix.'full_screen', $full_screen);
		update_post_meta($post_id, $prefix.'enable_loader', $enable_loader);
		update_post_meta($post_id, $prefix.'enable_ovelay', $enable_ovelay);
		update_post_meta($post_id, $prefix.'popup_effect', $popup_effect);
		update_post_meta($post_id, $prefix.'popup_positionx', $popup_positionx);
		update_post_meta($post_id, $prefix.'popup_positiony', $popup_positiony);
		update_post_meta($post_id, $prefix.'speedin', $speedin);
		update_post_meta($post_id, $prefix.'speedout', $speedout);
		update_post_meta($post_id, $prefix.'delay', $delay);
	}

	/**
	 * Add custom column to Post listing page
	 * 
	 * @package Popup Anything
	 * @since 1.0.0
	 */
	function popupaoc_manage_posts_columns( $columns ) {
		
		$new_columns['popupaoc_shortcode'] 	= __( 'Shortcode', 'popup-anything-on-click' );	   

	    $columns = popupaoc_add_array( $columns, $new_columns, 1, true );

	    return $columns;
	}

	/**
	 * Add custom column data to Post listing page
	 * 
	 * @package Popup Anything on Click
	 * @since 1.0.0
	 */
	function popupaoc_post_columns_data( $column, $post_id ) {

		$prefix = POPUPAOC_META_PREFIX; // Taking metabox prefix

	    switch ($column) {
			case 'popupaoc_shortcode':			
				$shortcode_string = '';
				$shortcode_string .= '[popup_anything id="'.$post_id.'"] ';				
				echo $shortcode_string;
				break;
		}
	}

	/**
	 * Function to add custom quick links at post listing page
	 * 
	 * @package Popup Anything on Click
	 * @since 1.0.0
	 */
	function popupaoc_add_post_row_action($actions, $post ) {
		if( $post->post_type == POPUPAOC_POST_TYPE ) {
			return array_merge( array( 'popupaoc_id' => 'ID: ' . $post->ID ), $actions );
		}
		return $actions;
	}
	
	/**
	 * Function to add menu
	 * 
	 * @package Popup Anything on Click
	 * @since 1.0.0
	 */
	function popupaoc_register_menu() {

		// Register plugin premium page
		add_submenu_page( 'edit.php?post_type='.POPUPAOC_POST_TYPE, __('Upgrade to PRO - Popup Anything', 'popup-anything-on-click'), '<span style="color:#2ECC71">'.__('Upgrade to PRO', 'popup-anything-on-click').'</span>', 'manage_options', 'popupaoc-premium', array($this, 'popupaoc_premium_page') );

		// Hire Us Menu
		add_submenu_page( 'edit.php?post_type='.POPUPAOC_POST_TYPE, __('Hire Us', 'popup-anything-on-click'), '<span style="color:#2ECC71">'.__('Hire Us', 'popup-anything-on-click').'</span>', 'manage_options', 'popupaoc-hireus', array($this, 'popupaoc_hireus_page') );		
	}

	/**
	 * Getting Started Page Html
	 * 
	 * @package Popup Anything on Click
	 * @since 1.0.0
	 */
	function popupaoc_premium_page() {
		include_once( POPUPAOC_DIR . '/includes/settings/premium.php' );
	}

	/**
	 * Getting Started Page Html
	 * 
	 * @package Popup Anything on Click
	 * @since 1.2.2
	 */
	function popupaoc_hireus_page() {
		include_once( POPUPAOC_DIR . '/includes/settings/hire-us.php' );
	}

	/**
	 * Admin Prior Process
	 * 
	 * @package Popup Anything
	 * @since 1.2.2
	 */
	function popupaoc_admin_init_process() {
		// If plugin notice is dismissed
	    if( isset($_GET['message']) && $_GET['message'] == 'popupaoc-plugin-notice' ) {
	    	set_transient( 'popupaoc_install_notice', true, 604800 );
	    }
	}
}

$popupaoc_admin = new Popupaoc_Admin();