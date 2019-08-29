<?php
function stonedthemes_smallslider_vc_map_init(){

	if ( class_exists( "WPBakeryShortCode" ) ) {

		class WPBakeryShortCode_sth_smallslider extends WPBakeryShortCode {

			protected function content( $atts, $content = null ) {

				$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
					
				$images = $atts['images'];		
				$image_per_slide = $atts['image_per_slide']?$atts['image_per_slide']:1;
				$img_size = $atts['img_size']?$atts['img_size']:'thumbnail';
				$arrow_style = $atts['arrow_style']?$atts['arrow_style']:'style-3';
				$arrow_position = $atts['arrow_position']?$atts['arrow_position']:'side';

				$output ='<div class="owl-container margin-bottom-lg">
							<div class="owl-carousel" data-owl-carousel="" data-owl-carousel-options=\'{"items": '.$image_per_slide.', "autoHeight": true}\' />';
								
								$images = explode( ',', $images );

								foreach ( $images as $attach_id ): 
								
									$thumbnail1 = wp_get_attachment_image_src($attach_id,$img_size);
									
									$output .= '<div>
													<img src="'.esc_url($thumbnail1[0]).'" alt="alt" />
												</div>';
								endforeach; 

								 
				$output .='	</div>
							<nav class="'.esc_attr($arrow_position).' '.esc_attr($arrow_style).'">
									<div class="prev">
										<i class="fa fa-vertical-center"></i>
									</div>
									<div class="next">
										<i class="fa fa-vertical-center"></i>
									</div>
							</nav>
						</div>';
			return $output;	
			}
		}
	}

	vc_map( array(
		"base" => "sth_smallslider",
		"name" => esc_html__( "Small Slider", "collective" ),
		"class" => "",
		"icon" => get_template_directory_uri().'/includes/visual_composer/sth_module_icon.png',
		"category" => 'StonedThemes',
		"params" => array(
			array(
		        "type" => "attach_images",
		        "holder" => "div",
				"class" => "",
		        "heading" => esc_html__("Images", "collective" ),
		        "param_name" => "images",
		        "value"	=> "",  
		    ),
		    array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Image per Slide', 'collective' ),
				'param_name' => 'image_per_slide',
				'description' => esc_html__( 'Enter number of images you want to show on one slide.', 'collective' )
			),
		    array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Arrow Style', 'collective' ),
				'param_name' => 'arrow_style',
				'value' => array('style-1','style-2','style-3'),
				'description' => esc_html__( 'Choose between three different arrow style.', 'collective' ),
			),
			array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Arrow Postion', 'collective' ),
				'param_name' => 'arrow_position',
				'value' => array('side','bottom-left','bottom-center','bottom-right'),
				'description' => esc_html__( 'Choose postion of arrows in slider.', 'collective' ),
			),
		    array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Image size', 'collective' ),
				'param_name' => 'img_size',
				'description' => esc_html__( 'Enter image size (Example: "thumbnail", "medium", "large", "full" or other sizes defined by theme).Leave parameter empty to use "thumbnail" by default.', 'collective' )
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
				'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'collective' ),
				'group' => esc_html__( 'Design Options', 'collective' )
			),
		)
	) );
}
add_action('vc_after_init', 'stonedthemes_smallslider_vc_map_init');
?>