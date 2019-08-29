<?php
/**
 * Plugin Name: Popup anything on click
 * Plugin URI: https://www.wponlinesupport.com/plugins
 * Text Domain: popup-anything-on-click
 * Description: Display a modal popup by clicking on a link, image or button. Also work with Gutenberg shortcode block. 
 * Domain Path: /languages/
 * Version: 1.4.2
 * Author: WP OnlineSupport
 * Author URI: https://www.wponlinesupport.com
*/

if( !defined( 'POPUPAOC_VERSION' ) ) {
	define( 'POPUPAOC_VERSION', '1.4.2' ); // Version of plugin
}
if( !defined( 'POPUPAOC_DIR' ) ) {
	define( 'POPUPAOC_DIR', dirname( __FILE__ ) ); // Plugin dir
}
if( !defined( 'POPUPAOC_URL' ) ) {
	define( 'POPUPAOC_URL', plugin_dir_url( __FILE__ )); // Plugin url
}
if( !defined( 'POPUPAOC_PLUGIN_BASENAME' ) ) {
	define( 'POPUPAOC_PLUGIN_BASENAME', plugin_basename( __FILE__ ) ); // plugin base name
}
if(!defined( 'POPUPAOC_POST_TYPE' ) ) {
	define('POPUPAOC_POST_TYPE', 'aoc_popup'); // Plugin post type
}
if(!defined( 'POPUPAOC_META_PREFIX' ) ) {
	define('POPUPAOC_META_PREFIX','_aoc_'); // Plugin metabox prefix
}

/**
 * Load Text Domain
 * This gets the plugin ready for translation
 * 
 * @package Popup anything on click
 * @since 1.0.0
 */
add_action('plugins_loaded', 'popupaoc_load_textdomain');
function popupaoc_load_textdomain() {
	load_plugin_textdomain( 'popup-anything-on-click', false, dirname( plugin_basename(__FILE__) ) . '/languages/' );
}


register_activation_hook( __FILE__, 'popupaoc_install' );
function popupaoc_install() {
	if( is_plugin_active('popup-anything-on-click-pro/popup-anything-on-click-pro.php') ) {
		add_action('update_option_active_plugins', 'popupaoc_deactivate_pro_version');
	}
}

function popupaoc_deactivate_pro_version() {
   deactivate_plugins('popup-anything-on-click-pro/popup-anything-on-click-pro.php',true);
}

add_action( 'admin_notices', 'popupaoc_plugin_admin_notice');
function popupaoc_plugin_admin_notice() {

	global $pagenow;

	$dir                = WP_PLUGIN_DIR . '/popup-anything-on-click-pro/popup-anything-on-click-pro.php';
	$notice_link        = add_query_arg( array('message' => 'popupaoc-plugin-notice'), admin_url('plugins.php') );
	$notice_transient   = get_transient( 'popupaoc_install_notice' );

	if( $notice_transient == false && $pagenow == 'plugins.php' && file_exists( $dir ) && current_user_can( 'install_plugins' ) ) {
		echo '<div class="updated notice" style="position:relative;">
			<p>
				<strong>'.sprintf( __('Thank you for activating %s', 'popup-anything-on-click'), 'Popup anything on click').'</strong>.<br/>
				'.sprintf( __('It looks like you had PRO version %s of this plugin activated. To avoid conflicts the extra version has been deactivated and we recommend you delete it.', 'popup-anything-on-click'), '<strong>(<em>Popup anything on click PRO</em>)</strong>' ).'
			</p>
			<a href="'.esc_url( $notice_link ).'" class="notice-dismiss" style="text-decoration:none;"></a>
		</div>';
	}
}

// Taking some global variable
global $paoc_popup_data;

// Funcions File
require_once( POPUPAOC_DIR .'/includes/popupaoc-functions.php' );

// Post Type File
require_once( POPUPAOC_DIR . '/includes/popupaoc-post-types.php' );

// Script Class File
require_once( POPUPAOC_DIR . '/includes/class-popupaoc-script.php' );

// Admin Class File
require_once( POPUPAOC_DIR . '/includes/admin/class-popupaoc-admin.php' );

// Shortcode file
require_once( POPUPAOC_DIR . '/includes/shortcode/popupaoc-popup-shortcode.php' );

// Public File
require_once( POPUPAOC_DIR . '/includes/class-paoc-public.php' );

/* Plugin Wpos Analytics Data Starts */
function wpos_analytics_anl32_load() {

	require_once dirname( __FILE__ ) . '/wpos-analytics/wpos-analytics.php';

	$wpos_analytics =  wpos_anylc_init_module( array(
							'id'			=> 32,
							'file'			=> plugin_basename( __FILE__ ),
							'name'			=> 'Popup anything on click',
							'slug'			=> 'popup-anything-on-click',
							'type'			=> 'plugin',
							'menu'			=> 'edit.php?post_type=aoc_popup',
							'text_domain'	=> 'popup-anything-on-click',
							'promotion'		=> array( 
													'bundle' => array(
															'name'	=> 'Download FREE 50+ Plugins, 10+ Themes and Dashboard Plugin',
															'desc'	=> 'Download FREE 50+ Plugins, 10+ Themes and Dashboard Plugin',
															'file'	=> 'https://www.wponlinesupport.com/latest/wpos-free-50-plugins-plus-12-themes.zip'
														)
													),
							'offers'		=> array(
													'trial_premium' => array(
														'image'	=> 'http://analytics.wponlinesupport.com/?anylc_img=32',
														'link'	=> 'http://analytics.wponlinesupport.com/?anylc_redirect=32',
														'desc'	=> 'Or start using the plugin from admin menu',
													)
												),
						));

	return $wpos_analytics;
}

// Init Analytics
wpos_analytics_anl32_load();
/* Plugin Wpos Analytics Data Ends */