<?php
function stonedthemes_about_vc_map_init(){

	if ( class_exists( "WPBakeryShortCode" ) ) {
		
		class WPBakeryShortCode_sth_aboutMeSlider extends WPBakeryShortCodesContainer {
				
			protected function content( $atts, $content = null ) {
				$atts = vc_map_get_attributes( $this->getShortcode(), $atts );

				$slider_height = $atts['slider_height'];
				$css = $atts['css'];
				$el_class = $atts['el_class'];

				$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );
				
				$output =	'<div class="royal-slider-container about-me-slider '.$css_class.' '.$el_class.'" style="height: '.$slider_height.';">
								<div class="royal-slider" data-royal-slider data-royal-slider-options=\'{
									"keyboardNavEnabled": true,
									"imageScaleMode": "fill",
									"loop": true,
									"controlNavigation": "none",
							 		"transitionType": "fade",
									"arrowsNav": false,
									"deeplinking": {
							    		"enabled": true,
							    		"prefix": "person-"
							    	},
									"autoScaleSlider":false,
										"autoPlay": {
							    			"enabled": false,
							    			"pauseOnHover": false,
							    			"delay": 8000    	
							    		},
						    			"autoHeight": false
									,"thumbs": {
							    		"spacing": 10,
							    		"arrowsAutoHide": true,
							    		"fitInViewport": false
							    	}
								}\'>'.do_shortcode($content).'
								</div>
								<nav class="side style-1">
									<div class="prev">
										<i class="fa fa-angle-left fa-vertical-center"></i>
									</div>
									<div class="next">
										<i class="fa fa-angle-right fa-vertical-center"></i>
									</div>
								</nav>
							</div>';

				return $output;
			}
			
		}

		class WPBakeryShortCode_sth_aboutme extends WPBakeryShortCode {

			protected function content( $atts, $content = null ) {

				$atts = vc_map_get_attributes( $this->getShortcode(), $atts );

				$author = $atts['author'];
				$author_color = $atts['author_color'];
				$author_position = $atts['author_position'];
				$author_position_color = $atts['author_position_color'];

				$image_url = $atts['image_url'];
				$img = wp_get_attachment_image_src($image_url,'full');
				
				$position = $atts["position"];

				$cvs = vc_param_group_parse_atts( $atts['cvs'] );

				$content = do_shortcode($content);	

				$output =	'<div class="royal-slider-slide '.esc_attr($position).'">
								<div>
									<img class="rsImg" src="'.$img[0].'" alt="alt" data-rsTmb="" />
									<div class="animation-block">';
						if($position=='right')
							$output .=	'<div class="col-md-6 about-me-content"></div>';

				$output .=	'			<div class="col-md-6 about-me-content">
											<div class="rsABlock" data-move-effect="none" data-customScrollbar1 data-customscrollbaroptions=\'{"scrollInertia": 10, "theme": "minimal-dark"}\'>
												<div class="vertical-center2-container">
													<div class="vertical-center2-content">
														<div class="author-name-title">
															<h1 style="color: '.esc_attr($author_color).';">'.$author.'</h1>
															<h2 style="color: '.esc_attr($author_position_color).';">'.$author_position.'</h2>
														</div>';
														if($cvs){
															$output .= '<div class="margin-top-lg">';

																foreach ($cvs as $cvdata) {					
																$output .= '<div class="row">
																				<div class="col-xs-4">
																					<p class="text-right"><b>'.$cvdata['cv_field_name'].'</b></p>
																				</div>
																				<div class="col-xs-8">
																					'.$cvdata['cv_field_value'].'
																				</div>
																			</div>
																			';	
																}

															$output .='</div>';
														}	else {
															$output .= $content;
														}
				$output .= 	'
													</div>
												</div>
											</div>
										</div>';
						if($position=='left')
							$output .=	'<div class="col-md-6 about-me-content"></div>';	

				$output .=	'		</div>
								</div>
							</div>'	;	
								
				return $output;

			}
		}
	}	

	vc_map( array(
		"base" => "sth_aboutMeSlider",
		"name" => esc_html__( "About Me Slider", "collective" ),
		"as_parent" => array('only' => 'sth_aboutme'),
		"content_element" => true,
		"class" => "",
		"icon" => get_template_directory_uri().'/includes/visual_composer/sth_module_icon.png',
		'category' => 'StonedThemes',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "h3",
				"class" => "",
				"heading" => esc_html__( "Title", "collective" ),
				"param_name" => "title",
				"value" => "",
				"description" => esc_html__( "Enter Title", "collective" )
			),
			array(
				"type" => "textfield",
				"class" => "",
				"heading" => esc_html__( "Slider Height", "collective" ),
				"param_name" => "slider_height",
				"value" => "",
				"description" => esc_html__( "Enter slider height ex: 700px", "collective" )
			),
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Extra class name', 'collective' ),
				'param_name' => 'el_class',
				'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'collective' ),
			),
			array(
				'type' => 'css_editor',
				'heading' => esc_html__( 'CSS box', 'collective' ),
				'param_name' => 'css',
				// 'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'collective' ),
				'group' => esc_html__( 'Design Options', 'collective' )
			),

		),
		"js_view" => 'VcColumnView'
	) );

	vc_map( array(
		"base" => "sth_aboutme",
		"name" => esc_html__( "About Me", "collective" ),
		"as_child" => array('only' => 'sth_aboutMeSlider'),
		"class" => "",
		"icon" => get_template_directory_uri().'/includes/visual_composer/sth_module_icon.png',
		'category' => 'StonedThemes',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "h3",
				"class" => "",
				"heading" => esc_html__( "Author Name", "collective" ),
				"param_name" => "author",
				"value" => "",
				"description" => esc_html__( "Enter Author", "collective" )
			),
			array(
				'type' => 'colorpicker',
				'heading' => esc_html__( 'Author Name color', 'collective' ),
				'param_name' => 'author_color',
				'description' => esc_html__( 'Select author name color.', 'collective' ),
			),
			array(
				"type" => "textfield",
				"holder" => "h3",
				"class" => "",
				"heading" => esc_html__( "Author Position", "collective" ),
				"param_name" => "author_position",
				"value" => "",
				"description" => esc_html__( "Enter Author postion in company, or profession or any relevant info.", "collective" )
			),
			array(
				'type' => 'colorpicker',
				'heading' => esc_html__( 'Author Position Color', 'collective' ),
				'param_name' => 'author_position_color',
				'description' => esc_html__( 'Select Author Position Color.', 'collective' ),
			),
			array(
				"type" => "attach_image",
				"holder" => "",
				"class" => "",
				"heading" => esc_html__( "Image", "collective" ),
				"param_name" => "image_url",
				"value" => "",
				"description" => esc_html__( "Add photo", "collective" )
			),
			array(
				"type" => "dropdown",
				"holder" => "",
				"class" => "",
				"heading" => esc_html__( "Author Info position", "collective" ),
				"param_name" => "position",
				"value" => array("left","right"),
				"description" => esc_html__( "Choose text position", "collective" )
			),
			array(
				"type" => "checkbox",
				"class" => "",
				"heading" => esc_html__( "Author Cv", "collective" ),
				"param_name" => "author_cv",
				"value" => "",
				"description" => esc_html__( "If checked you can add cv data", "collective" )
			),
			array(
				"type" => "textarea_html",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Author Info", "collective" ),
				"param_name" => "content",
				"value" => "",
				"description" => esc_html__( "Add author informations", "collective" )
			),
			array(
			        "type" => "param_group",
			        "value" => "CV",
			        "heading" => esc_html__("CV Data", "collective" ),
			        "param_name" => "cvs",
			        "params" => array(
			            array(
			                "type" => "textfield",
			                "class" => "",
			                "value" => "",
			                "heading" => esc_html__("CV Field Name", "collective" ),
			                "param_name" => "cv_field_name",
			            ),
			             array(
			                "type" => "textarea",
			                "class" => "",
			                "value" => "",
			                "heading" => esc_html__("Cv Field Value", "collective" ),
			                "param_name" => "cv_field_value",
			            )
			        ),
			        "dependency" => array(
						"element" => "author_cv",
						"value" => "true",
						)
			    ),
		)
	) );
}
add_action('vc_after_init', 'stonedthemes_about_vc_map_init');