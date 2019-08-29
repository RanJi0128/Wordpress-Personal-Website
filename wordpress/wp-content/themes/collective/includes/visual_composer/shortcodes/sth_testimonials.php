<?php
function stonedthemes_testimonials_vc_map_init(){

	if ( class_exists( "WPBakeryShortCode" ) ) {
		class WPBakeryShortCode_sth_testimonials extends WPBakeryShortCode {

			protected function content( $atts, $content = null ) {

				$atts = vc_map_get_attributes( $this->getShortcode(), $atts );

				$author = $atts['author'];
				$author_position = $atts['author_position'];
				$position = $atts['position'];
				$image_url = $atts['image_url'];

				$content = do_shortcode($content);	
				
				$width_class = $atts['css'];
				$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width_class, $this->settings['base'], $atts );
				$img = wp_get_attachment_image_src($image_url,'full');

				if($position=='Top'){
					$output ='<div class="testmonial '.esc_attr($css_class).'">
									<div class="testmonial-image">
										<div class="container-square">
											<div class="content">
												<div class="overlay-container img-circle">
													<div class="overlay img-circle"></div>
													<img src="'.esc_url($img[0]).'">
												</div>
											</div>
										</div>
									</div>
									<p class="text-center no-margin">'.$author_position.'</p>
									<h4 class="text-center testmonial-author">'.$author.'</h4>
									<div class="text-center">	
										'.$content.'
									</div>
								</div>';
				}
				else{
					$output =  '<div class="testmonial horizontal '.esc_attr($css_class).'">
									<div class="testmonial-image">
										<div class="container-square">
											<div class="content">
												<div class="overlay-container img-circle">
													<div class="overlay img-circle brand-color"></div>
													<img src="'.esc_url($img[0]).'">
												</div>
											</div>
										</div>
									</div>
									<div class="testmonial-text">
										<p class="no-margin">'.$author_position.'</p>
										<h4 class="testmonial-author">'.$author.'</h4>
										<div class="">	
											'.$content.'
										</div>
									</div>
								</div>';
				}			
				
				return $output; 
			}
		}		
	}

	vc_map( array(
		"base" => "sth_testimonials",
		"name" => esc_html__( "Testimonials", "collective" ),
		"class" => "",
		"icon" => get_template_directory_uri().'/includes/visual_composer/sth_module_icon.png',
		'category' => 'StonedThemes',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "h3",
				"class" => "",
				"heading" => esc_html__( "Author", "collective" ),
				"param_name" => "author",
				"value" => "",
				"description" => esc_html__( "Enter Author", "collective" )
			),
			array(
				"type" => "textfield",
				"holder" => "h3",
				"class" => "",
				"heading" => esc_html__( "Author Position", "collective" ),
				"param_name" => "author_position",
				"value" => "",
				"description" => esc_html__( "Enter Author's position", "collective" )
			),
			array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Image", "collective" ),
				"param_name" => "image_url",
				"value" => "",
				"description" => esc_html__( "Add photo", "collective" )
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Image position", "collective" ),
				"param_name" => "position",
				"value" => array("Top","Side"),
				"description" => esc_html__( "Choose image position", "collective" )
			),
			array(
				"type" => "textarea_html",
				"holder" => "h3",
				"class" => "",
				"heading" => esc_html__( "Testimonial", "collective" ),
				"param_name" => "content",
				"value" => "",
				"description" => esc_html__( "Add Testimonial", "collective" )
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

add_action('vc_after_init', 'stonedthemes_testimonials_vc_map_init');
?>