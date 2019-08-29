<?php
/*
Plugin Name: StonedThemes-Plugin
Plugin URI:  http://stonedthemes.com/
Description: This plugin serves to create custom posts and taxonomies for our themes.
Version: 1.2
Author: StonedThemes
Author URI:  http://stonedthemes.com/
*/
define( 'PLUGIN_DIR', dirname(__FILE__).'/' );

include 'shortcodes.php';
include 'widgets/author-widget.php';
include 'widgets/instagram-widget.php';
include 'widgets/twitter-widget.php';

add_action( 'vc_before_init', 'stonedthemes_initialize_vc' );

function stonedthemes_initialize_vc(){
	include 'Sth_googlemap.php';

	if ( class_exists( 'WPBakeryShortCode' ) ) {
	 
	    class WPBakeryShortCode_Sth_contact extends WPBakeryShortCode {}

	}
}

add_action( 'init', 'register_posts',3);

	function register_posts() {	
		register_post_type( 'slider_post',
			array(
				'labels' => array(
					'name' => __( "Sliders","sth_lang"),
					'singular_name' => __( "Slider" ,"sth_lang")
				),
				'public' => true,
				'has_archive' => true,			
				'rewrite' => array('slug' => "slider_post", 'with_front' => TRUE),
				'supports' => array('title','editor','thumbnail','page-attributes')					
			)
		);

		 
       register_post_type( 'project_post',
			array(
				'labels' => array(
					'name' => __( "Projects","sth_lang"),
					'singular_name' => __( "Projects" ,"sth_lang")
				),
				'public' => true,
				'has_archive' => true,			
				'exclude_from_search' => false, 
				'rewrite' => array('slug' => "projects", 'with_front' => TRUE),
				'supports' => array('title','editor','thumbnail','page-attributes')					
			)
		);

		register_taxonomy('projects_category',array (
		  0 => 'project_post',
		),array( 'hierarchical' => true, 
				 'label' => __('Projects Category',"sth_lang"),
				 'public' => true,
				 'show_ui' => true,
				 'query_var' => true,
				 'singular_label' => __('Project Category',"sth_lang")) );
	}

	add_action( 'admin_enqueue_scripts', 'throne_custom_admin_css' );
	
	function throne_custom_admin_css()
	{
		wp_enqueue_style("sth_adminCss", plugins_url() . '/StonedThemes-Plugin/sth_admin_css.css' , false, "1.0");
	}

	/*css*/		
	add_action( 'wp_enqueue_scripts', 'throne_front_stylesheets' );
	function throne_front_stylesheets()
	{
		wp_enqueue_style("sth_front_stylesheets",plugins_url() . '/StonedThemes-Plugin/sth_admin_css.css' , false, "1.0");
	}

/**
 * Add ACF
 */
 include_once plugin_dir_path( dirname( __FILE__ ) ) . 'StonedThemes-Plugin/advanced-custom-fields-pro/acf.php';

 function acf_settings_path ( $path ) { 
	 $path = plugin_dir_path( dirname( __FILE__ ) ) . 'StonedThemes-Plugin/advanced-custom-fields-pro/';
	 return $path;
}
 
function acf_settings_dir ( $dir ) { 
 $path = plugin_dir_url( __FILE__ ) . 'StonedThemes-Plugin/advanced-custom-fields-pro/';
 return $dir;
}

add_filter( 'acf/settings/path', 'acf_settings_path' );
add_filter( 'acf/settings/dir', 'acf_settings_dir' );
// 3. Hide ACF field group menu item
add_filter('acf/settings/show_admin', '__return_false');

//Add google font field to acf
require_once(plugin_dir_path( dirname( __FILE__ ) ) . 'StonedThemes-Plugin/ui-google-font/acf-ui-google-font.php');	

?>