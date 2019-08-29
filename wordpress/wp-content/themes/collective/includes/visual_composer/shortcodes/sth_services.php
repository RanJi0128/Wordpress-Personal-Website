<?php
function stonedthemes_services_vc_map_init(){

	if ( class_exists( "WPBakeryShortCode" ) ) {

		class WPBakeryShortCode_sth_services extends WPBakeryShortCode {

			protected function content( $atts, $content = null ) {
				
				$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
				
				$icon_type = $atts['icon_type'];
				$icon_aligment = $atts['icon_aligment'];
				$color = $atts['color'];
				$title_color = $atts['title_color'];
				$icon = $atts['icon_'.$icon_type];
				$size = $atts['size'];

				$service_title = $atts['service_title'];		

				$content = do_shortcode($content);	
				
				vc_icon_element_fonts_enqueue( $icon_type );

				$css = $atts['css'];
				$output = '';
				$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );
				
				$custom_color = '';
				if($color){
					$custom_color = 'color:'.$color;
				}
				if($title_color)
					$title_color = 'style="color:'.$title_color.'"';

				$output .=	'<div class="iconed-box '.esc_attr($icon_aligment).' '.esc_attr($css_class).'">
									<div class="icon-container vc_icon_element-size-'.esc_attr($size).'" style="'.esc_attr($custom_color).'">
										<span class="vc_icon_element-icon '.esc_attr($icon).'"></span>
									</div>
									<div class="iconed-box-content">';
								if($atts['href'])
									$output .=	'<a href="'.esc_url($atts['href']).'"><h5 class="text-uppercase" '.$title_color.'>'.$service_title.'</h5></a>';
								else	
									$output .=	'<h5 class="text-uppercase" '.$title_color.'>'.$service_title.'</h5>';
				$output .=	 			$content.'
									</div>
								</div>';
				
				
				return $output;	
			}
		}		
	}

	vc_map( array(
		"base" => "sth_services",
		"name" => esc_html__( "Services", "collective" ),
		"class" => "",
		"icon" => get_template_directory_uri().'/includes/visual_composer/sth_module_icon.png',
		'category' => 'StonedThemes',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "h3",
				"class" => "",
				"heading" => esc_html__( "Service Title", "collective" ),
				"param_name" => "service_title",
				"value" => "",
				"description" => esc_html__( "Enter service title", "collective" )
			),
			array(
				'type' => 'colorpicker',
				'heading' => esc_html__( 'Title color', 'collective' ),
				'param_name' => 'title_color',
				'description' => esc_html__( 'Select icon color.', 'collective' ),
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon type", "collective" ),
				"param_name" => "icon_type",
				"value" => array("fontawesome","openiconic","typicons","entypo","linecons"),
				'description' => esc_html__( 'Select icon library.', 'collective' ),
			),
			array(
				'type' => 'iconpicker',
				'heading' => esc_html__( 'Icon', 'collective' ),
				'param_name' => 'icon_fontawesome',
				'settings' => array(
				'emptyIcon' => false, // default true, display an "EMPTY" icon?
				'type' => 'fontawesome',
				'iconsPerPage' => 200, // default 100, how many icons per/page to display
				),
				'dependency' => array(
				'element' => 'icon_type',
				'value' => 'fontawesome',
				),
				'description' => esc_html__( 'Select icon from library.', 'collective' ),
			),
			array(
				'type' => 'iconpicker',
				'heading' => esc_html__( 'Icon', 'collective' ),
				'param_name' => 'icon_openiconic',
				'settings' => array(
				'emptyIcon' => false, // default true, display an "EMPTY" icon?
				'type' => 'openiconic',
				'iconsPerPage' => 200, // default 100, how many icons per/page to display
				),
				'dependency' => array(
				'element' => 'icon_type',
				'value' => 'openiconic',
				),
				'description' => esc_html__( 'Select icon from library.', 'collective' ),
			),
			array(
				'type' => 'iconpicker',
				'heading' => esc_html__( 'Icon', 'collective' ),
				'param_name' => 'icon_typicons',
				'settings' => array(
				'emptyIcon' => false, // default true, display an "EMPTY" icon?
				'type' => 'typicons',
				'iconsPerPage' => 200, // default 100, how many icons per/page to display
				),
				'dependency' => array(
				'element' => 'icon_type',
				'value' => 'typicons',
				),
				'description' => esc_html__( 'Select icon from library.', 'collective' ),
			),
			array(
				'type' => 'iconpicker',
				'heading' => esc_html__( 'Icon', 'collective' ),
				'param_name' => 'icon_entypo',
				'settings' => array(
				'emptyIcon' => false, // default true, display an "EMPTY" icon?
				'type' => 'entypo',
				'iconsPerPage' => 200, // default 100, how many icons per/page to display
				),
				'dependency' => array(
				'element' => 'icon_type',
				'value' => 'entypo',
				),
				'description' => esc_html__( 'Select icon from library.', 'collective' ),
			),
			array(
				'type' => 'iconpicker',
				'heading' => esc_html__( 'Icon', 'collective' ),
				'param_name' => 'icon_linecons',
				'settings' => array(
				'emptyIcon' => false, // default true, display an "EMPTY" icon?
				'type' => 'linecons',
				'iconsPerPage' => 200, // default 100, how many icons per/page to display
				),
				'dependency' => array(
				'element' => 'icon_type',
				'value' => 'linecons',
				),
				'description' => esc_html__( 'Select icon from library.', 'collective' ),
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Aligment", "collective" ),
				"param_name" => "icon_aligment",
				"value" => array("left","right","top"),
				'description' => esc_html__( 'Set position of icon on right or top of content.', 'collective' ),
			),
			array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Size', 'collective' ),
				'param_name' => 'size',
				'value' => array_diff_key( getVcShared( 'sizes' ), array( 'Mini' => '' ) ),
				'std' => 'md',
				'description' => esc_html__( 'Select toggle size', 'collective' )
			),
			array(
				'type' => 'colorpicker',
				'heading' => esc_html__( 'Icon color', 'collective' ),
				'param_name' => 'color',
				'description' => esc_html__( 'Select icon color.', 'collective' ),
			),
			array(
				'type' => 'href',
				'heading' => esc_html__( 'URL (Link)', 'collective' ),
				'param_name' => 'href',
				'description' => esc_html__( 'Enter button link.', 'collective' )
			),
			array(
				"type" => "textarea_html",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Service Content", "collective" ),
				"param_name" => "content",
				"value" => "",
				"description" => esc_html__( "Add service content", "collective" )
			),
			array(
				'type' => 'css_editor',
	            'heading' => esc_html__( 'Css', 'collective' ),
	            'param_name' => 'css',
	            'group' => esc_html__( 'Design Options', 'collective' ),
			)
		)
	) );
}
add_action('vc_after_init', 'stonedthemes_services_vc_map_init');
?>