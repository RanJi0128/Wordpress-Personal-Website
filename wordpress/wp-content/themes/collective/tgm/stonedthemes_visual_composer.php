<?php
/**
 * Include the TGM_Plugin_Activation class.
 */
require_once get_template_directory(). '/tgm/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'stonedthemes_call_visualComposer' );
/**
 * Register the required plugins for this theme.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
function stonedthemes_call_visualComposer() {
    /**
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(
        // This is an example of how to include a plugin pre-packaged with a theme
        array(
            'name'          => esc_html__('WPBakery Visual Composer','collective'), // The plugin name
            'slug'          => 'js_composer', // The plugin slug (typically the folder name)
            'source'            => get_template_directory_uri().'/tgm/plugins/js_composer.zip', // The plugin source
            'required'          => false, // If false, the plugin is only 'recommended' instead of required
            'version'           => '5.7', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'      => '', // If set, overrides default API URL and points to an external URL
        )
    );
  
    // Change this to your theme text domain, used for internationalising strings
    $theme_text_domain = 'collective';
  
    /**
     * Array of configuration settings. Amend each line as needed.
     * If you want the default strings to be available under your own theme domain,
     * leave the strings uncommented.
     * Some of the strings are added into a sprintf, so see the comments at the
     * end of each line for what each argument will be.
     */
    $config = array(
        'domain'        => $theme_text_domain, // Text domain - likely want to be the same as your theme.
        'default_path'      => '', // Default absolute path to pre-packaged plugins
        'menu'          => 'install-required-plugins', // Menu slug
        'has_notices'       => true, // Show admin notices or not
        'is_automatic'      => false, // Automatically activate plugins after installation or not
        'message'       => '', // Message to output right before the plugins table
    );
    tgmpa( $plugins, $config );
}
  
/**
 * Force Visual Composer to initialize as "built into the theme". This will hide certain tabs under the Settings->Visual Composer page
 */
add_action( 'vc_before_init', 'stonedthemes_vcSetAsTheme' );
function stonedthemes_vcSetAsTheme() {
    vc_set_as_theme();
}
?>