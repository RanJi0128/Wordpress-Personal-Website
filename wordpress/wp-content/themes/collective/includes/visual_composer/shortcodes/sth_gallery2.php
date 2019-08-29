<?php
function stonedthemes_sth_gallery2_vc_map_init(){

	if ( class_exists( "WPBakeryShortCode" ) ) {
		class WPBakeryShortCode_sth_gallery2 extends WPBakeryShortCode {

			protected function content( $atts, $content = null ) {

				$atts = vc_map_get_attributes( $this->getShortcode(), $atts );

				$images = $atts['images'];		

				$custom_links = vc_value_from_safe(  $atts['custom_links'] );
				$custom_links = explode( ',', $custom_links );

				$image_titles = vc_value_from_safe(  $atts['image_titles'] );
				$image_titles = explode( ',', $image_titles );

				$grid_elements = $atts['grid_elements'];
				$grid_elements1 = $atts['grid_elements1'];
				$grid_elements2 = $atts['grid_elements2'];	

				$slider_display = $atts['slider_display'];
				$item_display = $atts['item_display'];
				$item_offset = $atts['item_offset'];
				$text_position = $atts['text_position'];
				$text_decoration = $atts['text_decoration'];
				$overlay_offset = $atts['overlay_offset'];
				$overlay_color = $atts['overlay_color'];		
				$overlay_opacity = $atts['overlay_opacity'];
				$overlay_active = $atts['overlay_active'];
				$text_overlay_offset = $atts['text_overlay_offset'];
				$title_color = $atts['title_color'];
				$category_color = '';
				$border_offset = $atts['border_offset'];
				$item_hover_effect = $atts['item_hover_effect']?$atts['item_hover_effect']:'zoom-effect';

				$width_class = '';

				$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width_class, $this->settings['base'], $atts );
				
				$output =''; 
				
				$text_decoration_class = '';
				if($text_decoration=='Yes')
					$text_decoration_class = 'text-decoration';

				$overlay_active_class = '';
				if($overlay_active=='Yes')
					$overlay_active_class = 'overlay-active';

				stonedthemes_portfolio_style($item_offset,
								$overlay_offset,
								$overlay_color,
								$overlay_opacity,
								$text_overlay_offset,
								$title_color,
								$category_color,
								$border_offset);

				if($slider_display=="No"){
					$output .= '<div class="portfolio-items '.esc_attr($item_hover_effect).'">
									<div class="row">';
										$images = explode( ',', $images );
										$i=-1;

										foreach ( $images as $attach_id ): 
												$i ++;
												$thumb_url = wp_get_attachment_image_src( $attach_id, 'stonedthemes_about-us'); 
												
												$thumb_img = get_template_directory_uri().'/css/img/f2_image.png';
													
														$thumb_img = $thumb_url[0];

												if($item_display=='Vertical Rect'){	
													$thumb_url = wp_get_attachment_image_src( $attach_id, 'stonedthemes_portfolio_portret'); 
													$thumb_img = $thumb_url[0];	
												} else if($item_display=='Horizontal Rect'){	
													$thumb_url = wp_get_attachment_image_src( $attach_id, 'stonedthemes_scrollable'); 	
													$thumb_img = $thumb_url[0];
												}	

												$link = '';
												if( isset( $custom_links[ $i ] ) && '' !== $custom_links[ $i ])
													$link = $custom_links[ $i ];
											
												$title = '';
												
												if( isset( $image_titles[ $i ] ) && '' !== $image_titles[ $i ])
													$title = $image_titles[ $i ];

												$border_class = '';
												if($border_offset)
													$border_class = 'bordered';
									   			$output .= '<div class="col-lg-'.esc_attr($grid_elements).' col-md-'.esc_attr($grid_elements1).' col-sm-'.esc_attr($grid_elements2).' portfolio-item-container">
									   							<div class="intro-animation">
																	<div class="portfolio-item scrollable-image">
																		<div class="overlay-container">
																			<a href="'.esc_url($link).'" target="blank">
																				<div class="container-16-9">
																					<div class="content">
																						<img src="'.esc_url($thumb_img).'" alt="alt"/>
																						<div class="overlay '.esc_attr($overlay_active_class).' text-'.esc_attr($text_position).'"></div>
																					</div>
																				</div>
																			</a>
																		</div>
																	</div>
																	<h4>'.$title.'</h4>
																</div>
															</div>';
								   			endforeach;
					$output .= '	</div>
								</div>';	
				} else {
					if($item_offset == -1){
						$item_offset = 30;
					}
					
					$arrow_style = $atts['arrow_style']?$atts['arrow_style']:'style-1';
					$arrow_position = $atts['arrow_position']?$atts['arrow_position']:'side';	

					$output .= '<div class="portfolio-items owl-container">

									<div class="row owl-carousel" data-owl-carousel data-owl-carousel-options=\'{"responsive" : {"0" : {"items": 1}, "768" : {"items": '.esc_attr(12 / $grid_elements2).'}, "992" : {"items": '.esc_attr(12 / $grid_elements1).'}, "1200" : {"items": '.esc_attr(12 / $grid_elements).'}}, "loop": true, "margin": '.esc_attr($item_offset).'}\'>';
											$images = explode( ',', $images );

											$i=-1;

											foreach ( $images as $attach_id ): 
												$i ++;

												$thumb_url = wp_get_attachment_image_src( $attach_id, 'stonedthemes_about-us'); 
												
												$thumb_img = get_template_directory_uri().'/css/img/f2_image.png';
												$thumb_img = $thumb_url[0];

												if($item_display=='Vertical Rect'){	
													$thumb_url = wp_get_attachment_image_src( $attach_id, 'stonedthemes_portfolio_portret'); 
													$thumb_img = $thumb_url[0];	
												} else if($item_display=='Horizontal Rect'){	
													$thumb_url = wp_get_attachment_image_src( $attach_id, 'stonedthemes_scrollable'); 	
													$thumb_img = $thumb_url[0];
												}	

												$border_class = '';
												if($border_offset)
													$border_class = 'bordered';

												$link = '';
												if( isset( $custom_links[ $i ] ) && '' !== $custom_links[ $i ])
													$link = $custom_links[ $i ];
											
												$title = '';
												
												if( isset( $image_titles[ $i ] ) && '' !== $image_titles[ $i ])
													$title = $image_titles[ $i ];

									   			$output .= '<div class="portfolio-item-container">
																<div class="portfolio-item scrollable-image">
																	<div class="overlay-container">
																		<a href="'.esc_url($link).'" target="blank">
																			<div class="container-16-9">
																				<div class="content">
																					<img src="'.esc_url($thumb_img).'" alt="alt"/>
																					<div class="overlay '.esc_attr($overlay_active_class).' text-'.esc_attr($text_position).'"></div>
																				</div>
																			</div>
																		</a>
																	</div>
																</div>
															</div>';
								   			endforeach;
					$output .= '	</div>
									<nav class="'.esc_attr($arrow_position).' '.esc_attr($arrow_style).'">
										<div class="prev">
											<i class="fa fa-angle-left fa-vertical-center"></i>
										</div>
										<div class="next">
											<i class="fa fa-angle-right fa-vertical-center"></i>
										</div>
									</nav>
								</div>';	
				}	
				wp_reset_postdata();
				return $output; 
			}
		}
	}


	$cols = array();
	$cols['2 Posts'] = '6';
	$cols['3 Posts'] = '4';
	$cols['4 Posts'] = '3';
	$cols['6 Posts'] = '2';

	$text_position = array( 'left-top',
							'middle-top',
							'right-top',
							'left-middle',
							'middle-middle',
							'right-middle',
							'left-bottom',
							'middle-bottom',
							'right-bottom');

	

	vc_map( array(
		"base" => "sth_gallery2",
		"name" => esc_html__( "Collective Gallery", "collective" ),
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
				'type' => 'exploded_textarea_safe',
				'heading' => esc_html__( 'Image Titles', 'collective' ),
				'param_name' => 'image_titles',
				'description' => esc_html__( 'Enter titles for each image (Note: divide titles with linebreaks (Enter)).', 'collective' ),
			),
		    array(
				'type' => 'exploded_textarea_safe',
				'heading' => esc_html__( 'Custom links', 'collective' ),
				'param_name' => 'custom_links',
				'description' => esc_html__( 'Enter links for each image (Note: divide links with linebreaks (Enter)).', 'collective' ),
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Grid elements per row in lg", "collective" ),
				"param_name" => "grid_elements",
				"value" => $cols,
				"description" => esc_html__( "Select number of grid elements per row in Large Desktop Screens.", "collective" )
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Grid elements per row in md", "collective" ),
				"param_name" => "grid_elements1",
				"value" => $cols,
				"description" => esc_html__( "Select number of grid elements per row in Small Desktop Screens and Tablet landscape.", "collective" )
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Grid elements per row in sm", "collective" ),
				"param_name" => "grid_elements2",
				"value" => $cols,
				"description" => esc_html__( "Select number of single grid elements per row in Tablet portrait.", "collective" )
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Display as slider", "collective" ),
				"param_name" => "slider_display",
				"value" => array("No","Yes"),
				"group" => esc_html__( 'Item Design', 'collective' ),
				"description" => esc_html__( "Choose if you want elements to display in slider", 'collective' )
			),
			array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Arrow Style', 'collective' ),
				'param_name' => 'arrow_style',
				'value' => array('style-1','style-2','style-3'),
				'description' => esc_html__( 'Choose between three different arrow style.', 'collective' ),
				'dependency' => array(
						"element" => "slider_display",
						"value" => "Yes",
						)
			),
			array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Arrow Postion', 'collective' ),
				'param_name' => 'arrow_position',
				'value' => array('side','bottom-left','bottom-center','outside bottom-middle','bottom-right'),
				'description' => esc_html__( 'Choose postion of arrows in slider.', 'collective' ),
				'dependency' => array(
						"element" => "slider_display",
						"value" => "Yes",
						)
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Item Display", "collective" ),
				"param_name" => "item_display",
				"value" => array("Squar","Vertical Rect","Horizontal Rect"),
				"group" => esc_html__( 'Item Design', 'collective' ),
				"description" => esc_html__( "Choose item display as squar or vertical rectangle.", 'collective' )
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Text Position", "collective" ),
				"param_name" => "text_position",
				"value" => $text_position,
				"group" => esc_html__( 'Item Design', 'collective' ),
				"description" => esc_html__( "Choose position of title and category.", 'collective' )
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Text Decoration", "collective" ),
				"param_name" => "text_decoration",
				"value" => array('Yes','No'),
				"group" => esc_html__( 'Item Design', 'collective' ),
				"description" => esc_html__("If yes in diagonal with text will apear a decoration.", 'collective' )
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Item Offset", "collective" ),
				"param_name" => "item_offset",
				"value" => "-1",
				"group" => esc_html__( 'Item Design', 'collective' ),
				"description" => esc_html__( "Set gap between grid elements ex:5. for default value set -1.", "collective" )
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Border Offset", "collective" ),
				"param_name" => "border_offset",
				"value" => "",
				"group" => esc_html__( 'Item Design', 'collective' ),
				"description" => esc_html__( "Set offset of border inside item ex:10.", "collective" )
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Overlay Offset", "collective" ),
				"param_name" => "overlay_offset",
				"value" => "",
				"group" => esc_html__( 'Item Design', 'collective' ),
				"description" => esc_html__( "Set offset of overlay inside item ex:5.", "collective" )
			), 
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Overlay Color", "collective" ),
				"param_name" => "overlay_color",
				"value" => "",
				"group" => esc_html__( 'Item Design', 'collective' ),
				"description" => esc_html__( "Set overlay color.", "collective" )
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Overlay Opacity", "collective" ),
				"param_name" => "overlay_opacity",
				"value" => "",
				"group" => esc_html__( 'Item Design', 'collective' ),
				"description" => esc_html__( "Set overlay opacity 0-9.", "collective" )
			), 
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Overlay Active", "collective" ),
				"param_name" => "overlay_active",
				"value" => array('No','Yes'),
				"group" => esc_html__( 'Item Design', 'collective' ),
				"description" => esc_html__( "If Yes overlay will be active if no it will be active only on hover.", "collective" )
			), 
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Text Overlay Offset", "collective" ),
				"param_name" => "text_overlay_offset",
				"value" => "",
				"group" => esc_html__( 'Item Design', 'collective' ),
				"description" => esc_html__( "Set offset of text from overlay ex:5.", "collective" )
			), 
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Title Color", "collective" ),
				"param_name" => "title_color",
				"value" => "",
				"group" => esc_html__( 'Item Design', 'collective' ),
				"description" => esc_html__( "Set post title color.", "collective" )
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Item Hover Effect", "collective" ),
				"param_name" => "item_hover_effect",
				"value" => array('none','zoom-effect'),
				"group" => esc_html__( 'Item Design', 'collective' ),
				"description" => esc_html__( "Choose if you want zoom effect on hover of items.", "collective" )
			), 
		)
	) );
}

add_action('vc_after_init', 'stonedthemes_sth_gallery2_vc_map_init');
?>