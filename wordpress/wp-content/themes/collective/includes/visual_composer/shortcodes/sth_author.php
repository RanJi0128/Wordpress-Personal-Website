<?php
function stonedthemes_auth_vc_map_init(){

	if ( class_exists( "WPBakeryShortCode" ) ) {

		class WPBakeryShortCode_sth_author extends WPBakeryShortCode {
				
			protected function content( $atts, $content = null ) {
				$atts = vc_map_get_attributes( $this->getShortcode(), $atts );

				$author_name = $atts['author_name'];
				$author_position = $atts['author_position'];
				$author_link = $atts["author_link"];
				$image_url = $atts['image_url'];		
				$img = wp_get_attachment_image_src($image_url,'stonedthemes_about-us');
				$display = $atts['display'];

				$sc_networks = vc_param_group_parse_atts( $atts['sc_networks'] );


				$content = do_shortcode($content);	

				$css = $atts['css'];
				$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );
				if($display=='Extended Info'){
					$output =	'<div class="about-member '.esc_attr( $css_class ).'">
									<div class="overlay-container">
										<img src="'.esc_url($img[0]).'" alt="alt">
										<div class="about-member-info" data-customScrollbar data-customscrollbaroptions=\'{"scrollInertia": 10, "theme": "minimal-dark"}\'>';
										if($sc_networks){					
											$output .=	'<div class="pull-right circle-shares">
															<ul class="list-inline">';
												foreach ($sc_networks as $social_net) {								
													$output .=	'<li>
																	<a href="'.$social_net['sc_net_url'].'" target="_blank">
																		<i class="fa '.$social_net['icon_fontawesome'].' fa-vertical-center"></i>
																	</a>
																</li>';
														}
																			
											$output .=	'	</ul>
														</div>';
											}					
					$output .=				'<h4 class="margin-top-none margin-bottom-xs text-uppercase"><a href="'.esc_attr($author_link).'">'.$author_name.'</a></h4>
											<p>'.$author_position.'</p>
											<div class="margin-top-lg">
												<p>'.$content.'</p>
											</div>
										</div>
									</div>
								</div>';
				}	else {
					$output = '<div class="about-member-small '.esc_attr( $css_class ).'">
									<img src="'.esc_url($img[0]).'" alt="alt">
									<div class="about-member-info">
										<h5 class="margin-top-none margin-bottom-none text-uppercase"><a href="'.esc_attr($author_link).'"  target="_blank">'.$author_name.'</a></h5>
										<p class="margin-bottom-none">'.$author_position.'</p>
									</div>
								</div>';
				}		
				return $output;
			}
			
		}
	}	

	vc_map( array(
		"base" => "sth_author",
		"name" => esc_html__( "Author", "collective" ),
		"class" => "",
		"icon" => get_template_directory_uri().'/includes/visual_composer/sth_module_icon.png',
		'category' => 'StonedThemes',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "h3",
				"class" => "",
				"heading" => esc_html__( "Author Name", "collective" ),
				"param_name" => "author_name",
				"value" => "",
				"description" => esc_html__( "Enter author name", "collective" )
			),
			array(
				"type" => "textfield",
				"holder" => "h3",
				"class" => "",
				"heading" => esc_html__( "Author Position", "collective" ),
				"param_name" => "author_position",
				"value" => "",
				"description" => esc_html__( "Enter author postion in company or proffesion", "collective" )
			),
			array(
				"type" => "textfield",
				"holder" => "h3",
				"class" => "",
				"heading" => esc_html__( "Author Link", "collective" ),
				"param_name" => "author_link",
				"value" => "",
				"description" => esc_html__( "Add link", "collective" )
			),
			array(
				"type" => "attach_image",
				"holder" => "",
				"class" => "",
				"heading" => esc_html__( "Author Image", "collective" ),
				"param_name" => "image_url",
				"value" => "",
				"description" => esc_html__( "Add photo", "collective" )
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Display", "collective" ),
				"param_name" => "display",
				"value" => array("Basic Info","Extended Info"),
				'description' => esc_html__( 'Choose between basic info display or more information', 'collective' ),
			),
			array(
				"type" => "textarea_html",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Author Content", "collective" ),
				"param_name" => "content",
				"value" => "",
				'dependency' => array(
				'element' => 'display',
				'value' => 'Extended Info',
				),
				"description" => esc_html__( "Add author extra Information", "collective" )
			),
			array(
			        "type" => "param_group",
			        "value" => "Social Networks",
			        "heading" => esc_html__("Social Networks", "collective" ),
			        "param_name" => "sc_networks",
			        'dependency' => array(
					'element' => 'display',
					'value' => 'Extended Info',
					),
			        "params" => array(
			            array(
			                "type" => "textfield",
			                "class" => "",
			                "value" => "",
			                "heading" => esc_html__("Social Network Url", "collective" ),
			                "param_name" => "sc_net_url",
			            ),
			            array(
							'type' => 'iconpicker',
							'heading' => esc_html__( 'Social Network Icon', 'collective' ),
							'param_name' => 'icon_fontawesome',
							'settings' => array(
								'emptyIcon' => false, // default true, display an "EMPTY" icon?
								'type' => 'fontawesome',
								'iconsPerPage' => 200, // default 100, how many icons per/page to display
								),
							'description' => esc_html__( 'Select icon from library.', 'collective' ),
						),
			        ),
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
add_action('vc_after_init', 'stonedthemes_auth_vc_map_init');
?>