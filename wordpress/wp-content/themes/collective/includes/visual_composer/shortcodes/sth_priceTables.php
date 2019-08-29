<?php 
function stonedthemes_priceTable_vc_map_init(){

	if ( class_exists( "WPBakeryShortCode" ) ) {
		class WPBakeryShortCode_sth_priceTable extends WPBakeryShortCodesContainer {
				
			protected function content( $atts, $content = null ) {
				
				
				$atts = vc_map_get_attributes( $this->getShortcode(), $atts );

				$b_title = $atts['b_title'];

				$width_class = '';
				$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width_class, $this->settings['base'], $atts );
				
				$output =  '<ul class="list-unstyled text-center list-inline pricing-tables '.esc_attr($css_class).'">
								'.do_shortcode($content).'
							</ul>';				
				
				return $output;
			}
			
		}

		class WPBakeryShortCode_sth_price_column extends WPBakeryShortCode {
			protected function content( $atts, $content = null ) {
				
				$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
				
				$title = $atts['title'];
				$price = $atts['price'];
				$color = $atts['color'];
				$sc_price_items = vc_param_group_parse_atts( $atts['sc_price_items'] );

				$output = '<li class="pricing-col">';

				if($color){
					$output .= '<div class="pricing-col-header" style="background-color:'.esc_attr($color).';">';
				} else {
					$output .= '<div class="pricing-col-header">';
				}	

				$output .= '	<h3 class="no-margin">'.$title.'</h3>
								<p class="no-margin">'.$price.'</p>
								</div>
							';
							if($sc_price_items){	
								$output .= '<ul class="list-unstyled">';	
									foreach ($sc_price_items as $sc_price_item) {	
										if(isset($sc_price_item['yes'])){
											$output .= '<li>
															<i class="fa fa-check-circle-o pull-right"></i>
															'.$sc_price_item['item_title'].'
														</li>';;
										} else {
											if(isset($sc_price_item['item_title']))
											$output = '<li>
															<i class="fa fa-times-circle-o pull-right"></i>
															'.$sc_price_item['item_title'].'
														</li>';
										}
									}
								$output .= '</ul>';	
							}	

				$output .= '</li>';	
				
				return $output;
			}
			
		}
	}

	vc_map( array(
		"base" => "sth_priceTable",
		"name" => esc_html__( "Pricing Table", "collective" ),
		"as_parent" => array('only' => 'sth_price_column'),
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
				"param_name" => "b_title",
				"value" => "",
				"description" => esc_html__( "Enter Title", "collective" )
			)
		),
		"js_view" => 'VcColumnView'
	) );
	
	
	vc_map( array(
		"base" => "sth_price_column",
		"name" => esc_html__( "Price Column", "collective" ),
		"as_child" => array('only' => 'sth_priceTable'),
		"class" => "",
		"icon" => get_template_directory_uri().'/includes/visual_composer/sth_module_icon.png',
		'category' => 'StonedThemes',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Column Title", "collective" ),
				"param_name" => "title",
				"value" => "",
				"description" => esc_html__( "Enter title for this column", "collective" )
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Column Price", "collective" ),
				"param_name" => "price",
				"value" => "",
				"description" => esc_html__( "Enter Price for this column", "collective" )
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Color", "collective" ),
				"param_name" => "color",
				"value" => "",
				"description" => esc_html__( "Choose a color", "collective" )
			),
			array(
				"type" => "textarea_html",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Description", "collective" ),
				"param_name" => "content",
				"value" => "",
				"description" => esc_html__( "Enter Description", "collective" )
			),
			array(
		        "type" => "param_group",
		        "value" => "Column Items",
		        "heading" => esc_html__("Column Items", "collective" ),
		        "param_name" => "sc_price_items",
		        "params" => array(
		           array(
						"type" => "textfield",
						"holder" => "div",
						"class" => "",
						"heading" => esc_html__( "Item Title", "collective" ),
						"param_name" => "item_title",
						"value" => "",
						"description" => esc_html__( "Enter Description", "collective" )
					),
					array(
						"type" => "checkbox",
						"holder" => "div",
						"class" => "",
						"heading" => esc_html__( "Yes", "collective" ),
						"param_name" => "yes",
						"value" => "",
						"description" => esc_html__( "Check if feature is part of this package", "collective" )
					)
		        ),
		    ),
			
		),
		
	) );
}

add_action('vc_after_init', 'stonedthemes_priceTable_vc_map_init');
 ?>