<?php
/*
Plugin Name: StonedThemes-Importer
Plugin URI:  http://stonedthemes.com/
Description: This plugin serves to import dummy data.
Version: 1.3
Author: StonedThemes
Author URI:  http://stonedthemes.com/
*/

$plugin_url = plugin_dir_url( __FILE__ );

include_once 'admin_import_page.php' ;

add_action( 'admin_enqueue_scripts', 'sth_load_admin_js' );
    
function sth_load_admin_js()
{
    wp_enqueue_script("sth_throne_import",plugins_url( 'collective-import.js', __FILE__ ),array('jquery'),'',TRUE);
}

add_action( 'wp_ajax_my_action', 'my_action_callback' );
function my_action_callback() 
{
    global $wpdb; 

    $demo_version = $_POST['version'];

    if ( !defined('WP_LOAD_IMPORTERS') ) define('WP_LOAD_IMPORTERS', true);

    // Load Importer API
    require_once ABSPATH . 'wp-admin/includes/import.php';

    if ( ! class_exists( 'WP_Importer' ) ) {
        $class_wp_importer = ABSPATH . 'wp-admin/includes/class-wp-importer.php';
        if ( file_exists( $class_wp_importer ) )
        {
            require $class_wp_importer;
        }
    }

    if ( ! class_exists( 'WP_Import' ) ) {
        $class_wp_importer = "wordpress-importer.php";
        
            require $class_wp_importer;
    }


    if ( class_exists( 'WP_Import' ) ) 
    { 
        if($demo_version=='demo'){
            $import_filepath = get_template_directory() ."/includes/demo-data/collective.xml" ; // Get the xml file from directory 
        } else if($demo_version=='arch'){
            $import_filepath = get_template_directory() ."/includes/demo-data/collective-arch.xml" ; // Get the xml file from directory   
        } else if($demo_version=='photo'){
            $import_filepath = get_template_directory() ."/includes/demo-data/collective-photo.xml" ; // Get the xml file from directory   
        } else if($demo_version=='onepage'){
            $import_filepath = get_template_directory() ."/includes/demo-data/collective-onepage.xml" ; // Get the xml file from directory   
        } else if($demo_version=='light'){
            $import_filepath = get_template_directory() ."/includes/demo-data/collective-light.xml" ; // Get the xml file from directory   
        }
         elseif($demo_version=='woocommerce') {
            $import_filepath = get_template_directory() ."/includes/demo-data/woocommerce.xml" ; // Get the xml file from directory 
        }
        
        
        include_once('wordpress-importer.php');

        $wp_import = new WP_Import();
        $wp_import->fetch_attachments = true;
        $wp_import->import($import_filepath);

       

    }
        die(); // this is required to return a proper result
}