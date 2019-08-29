<?php 
/*Check if Visual Composer is running in a "theme mode"*/

add_action( 'vc_before_init', 'stonedthemes_vc_setAsTheme' );
function stonedthemes_vc_setAsTheme() {
    vc_set_as_theme(true);
}

$dir = get_template_directory() . '/includes/visual_composer/shortcodes';
vc_set_shortcodes_templates_dir( $dir );

/*Include VC Custom Shortcodes*/    
include get_template_directory() . '/includes/visual_composer/shortcodes/sth_aboutMe.php';
include get_template_directory() . '/includes/visual_composer/shortcodes/sth_author.php';
include get_template_directory() . '/includes/visual_composer/shortcodes/sth_portfolio.php';
include get_template_directory() . '/includes/visual_composer/shortcodes/sth_portfolioVertical.php';
include get_template_directory() . '/includes/visual_composer/shortcodes/sth_portfolioMosaic.php';
include get_template_directory() . '/includes/visual_composer/shortcodes/sth_gallery.php';
include get_template_directory() . '/includes/visual_composer/shortcodes/sth_gallery2.php';
include get_template_directory() . '/includes/visual_composer/shortcodes/sth_priceTables.php';
include get_template_directory() . '/includes/visual_composer/shortcodes/sth_testimonials.php';
include get_template_directory() . '/includes/visual_composer/shortcodes/sth_slider.php';
include get_template_directory() . '/includes/visual_composer/shortcodes/sth_services.php';
include get_template_directory() . '/includes/visual_composer/shortcodes/sth_featuredblog.php';
include get_template_directory() . '/includes/visual_composer/shortcodes/sth_blogposts.php';
include get_template_directory() . '/includes/visual_composer/shortcodes/sth_smallslider.php';

include get_template_directory() . '/includes/visual_composer/shortcodes/sth_vc-templates.php';

add_action( 'vc_after_init', 'stonedthemes_vc_add_params' );
function stonedthemes_vc_add_params() {

	$attributes = array(
			array(
			    'type' => 'textfield',
			    'heading' => esc_html__( "Subtitle", "collective" ),
			    'param_name' => 'subtitle',
			    'value' => "",
			    'description' => esc_html__( "Enter section subtitle (Note: you can leave it empty)", "collective" )
			),
			array(
			    'type' => 'attach_image',
			    'heading' => esc_html__( "Backround Image", "collective" ),
			    'param_name' => 'background_image',
			    'value' => "",
			    'description' => esc_html__( "New style attribute", "collective" )
			),
			array(
			    'type' => 'textfield',
			    'heading' => esc_html__( "Padding top-bottom", "collective" ),
			    'param_name' => 'padding_top_bottom',
			    'value' => "",
			    'description' => esc_html__( "Add padding.", "collective" )
			),
			array(
			    'type' => 'textfield',
			    'heading' => esc_html__( "Padding left-right", "collective" ),
			    'param_name' => 'padding_left_right',
			    'value' => "",
			    'description' => esc_html__( "Add padding.", "collective" )
			)
		);
	vc_add_params( 'vc_tta_section', $attributes );
	
}
?>