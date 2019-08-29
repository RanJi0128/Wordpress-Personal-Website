<?php
function stonedthemes_portfolio_vc_map_init(){

	if ( class_exists( "WPBakeryShortCode" ) ) {
		class WPBakeryShortCode_sth_portfolio extends WPBakeryShortCode {

			protected function content( $atts, $content = null ) {

				$atts = vc_map_get_attributes( $this->getShortcode(), $atts );

				$total_items = $atts['total_items'];	
				$grid_elements = $atts['grid_elements'];
				$grid_elements1 = $atts['grid_elements1'];
				$grid_elements2 = $atts['grid_elements2'];
				$portfolio_cats = $atts['portfolio_cats'];
				$sorting = $atts['sorting'];
				$exclude = $atts['exclude'];

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
				$category_color = $atts['category_color'];
				$border_offset = $atts['border_offset'];
				$item_hover_effect = $atts['item_hover_effect']?$atts['item_hover_effect']:'zoom-effect';

				$width_class = '';

				$exclude =  explode(",", $exclude);

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
										$args = array(
											'post_type' => 'project_post',
											'post__not_in'  =>  $exclude,
											'posts_per_page' => $total_items,
											'orderby'	=>	'menu_order date',
											'order' 	=> 	$sorting,
										);	

										if($portfolio_cats){
											$portfolio_cats = explode(",", $portfolio_cats);
											
											$args['tax_query'] = array(
											                        	array(
											                        		'taxonomy' => 'projects_category',
										                           	 		'field' => 'slug',
											                            	'terms' => $portfolio_cats
											                        	)
											                    	);
										}
										
										$the_Query = new WP_Query($args);
											while ($the_Query->have_posts()){
												$the_Query->the_post();
												$terms = get_the_terms( get_the_ID(), 'projects_category' );
												$post_terms = '';
												$post_term_name = "";
												if($terms){
													foreach ($terms as $term){
														$post_terms .= str_replace(' ', '_', $term->name).' ';
														$post_term_name .= $term->name.' ';
													}
												}

												$thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'stonedthemes_about-us'); 
												
												$thumb_img = get_template_directory_uri().'/css/img/f2_image.png';
													if(has_post_thumbnail())
														$thumb_img = $thumb_url[0];

												if($item_display=='Vertical Rect'){	
													$thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'stonedthemes_portfolio_portret'); 
													$thumb_img = get_template_directory_uri().'/css/img/f3_image.png';
													if(has_post_thumbnail())
														$thumb_img = $thumb_url[0];	
												} else if($item_display=='Horizontal Rect'){	
													$thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'stonedthemes_portfolio'); 	
													$thumb_img = get_template_directory_uri().'/css/img/f_image.png';
													if(has_post_thumbnail())
														$thumb_img = $thumb_url[0];
												}	
												
												$link = get_permalink();
												if(($terms[0]->slug)=='landing'||($terms[0]->slug)=='landing-projects'){
													$link = get_field('landing_link',get_the_ID());
													$post_term_name = '';
												}
												
												$enable_lightbox = $atts['enable_lightbox'];
												$link = '<a href="'.get_the_permalink().'">';

												if($enable_lightbox=='Yes')
													$link = 	'<a href="'.get_the_permalink().'" class="ajax_lightbox" data-id="'.get_the_ID().'" data-title="'.get_the_title().'" data-cat="'.$post_term_name.'">';
											

												$border_class = '';
												if($border_offset)
													$border_class = 'bordered';
									   			$output .= '<div class="col-lg-'.esc_attr($grid_elements).' col-md-'.esc_attr($grid_elements1).' col-sm-'.esc_attr($grid_elements2).' portfolio-item-container">
																<div class="portfolio-item">
																	<div class="overlay-container">
																		'.$link.'
																			<img src="'.esc_url($thumb_img).'" alt="alt"/>
																			<div class="overlay '.esc_attr($overlay_active_class).' text-'.esc_attr($text_position).'">
																				<div class="'.esc_attr($border_class).'">
																					<div class="overlay-text-container '.esc_attr($text_decoration_class).'">
																						<div class="vertical-center2-container">
																							<div class="vertical-center2-content">
																								<div class="text">
																									<h4 class="margin-bottom-none">'.get_the_title().'</h4>
																									<h6 class="text-uppercase">'.$post_term_name.'</h6>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>	
																			</div>
																		</a>
																	</div>
																</div>
															</div>';
								   			}
					$output .= '	</div>
								</div>';	
				} else {
					if($item_offset == -1){
						$item_offset = 30;
					}
					$output .= '<div class="portfolio-items owl-container">

									<div class="row owl-carousel" data-owl-carousel data-owl-carousel-options=\'{"responsive" : {"0" : {"items": 1}, "768" : {"items": '.esc_attr(12 / $grid_elements2).'}, "992" : {"items": '.esc_attr(12 / $grid_elements1).'}, "1200" : {"items": '.esc_attr(12 / $grid_elements).'}}, "loop": true, "margin": '.esc_attr($item_offset).'}\'>';
										$args = array(
											'post_type' => 'project_post',
											'post__not_in'  =>  $exclude,
											'posts_per_page' => $total_items,
											'orderby'	=>	'menu_order date',
											'order' 	=> 	$sorting,
										);	

										if($portfolio_cats){
											$portfolio_cats = explode(",", $portfolio_cats);
											
											$args['tax_query'] = array(
											                        	array(
											                        		'taxonomy' => 'projects_category',
										                           	 		'field' => 'slug',
											                            	'terms' => $portfolio_cats
											                        	)
											                    	);
										}
										
										$the_Query = new WP_Query($args);
											while ($the_Query->have_posts()){
												$the_Query->the_post();
												$terms = get_the_terms( get_the_ID(), 'projects_category' );
												$post_terms = '';
												$post_term_name = "";
												if($terms){
													foreach ($terms as $term){
														$post_terms .= str_replace(' ', '_', $term->name).' ';
														$post_term_name .= $term->name.' ';
													}
												}

												$thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'stonedthemes_about-us'); 
												
												$thumb_img = get_template_directory_uri().'/css/img/f2_image.png';
													if(has_post_thumbnail())
														$thumb_img = $thumb_url[0];

												if($item_display=='Vertical Rect'){	
													$thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'stonedthemes_portfolio_portret'); 
													$thumb_img = get_template_directory_uri().'/css/img/f3_image.png';
													if(has_post_thumbnail())
														$thumb_img = $thumb_url[0];	
												} else if($item_display=='Horizontal Rect'){	
													$thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'stonedthemes_portfolio'); 	
													$thumb_img = get_template_directory_uri().'/css/img/f_image.png';
													if(has_post_thumbnail())
														$thumb_img = $thumb_url[0];
												}	

												$border_class = '';
												if($border_offset)
													$border_class = 'bordered';

												$enable_lightbox = $atts['enable_lightbox'];
												$link = '<a href="'.get_the_permalink().'">';

												if($enable_lightbox=='Yes')
													$link = 	'<a href="'.get_the_permalink().'" class="ajax_lightbox" data-id="'.get_the_ID().'" data-title="'.get_the_title().'" data-cat="'.$post_term_name.'">';
											
												// if(($terms[0]->slug)=='landing'||($terms[0]->slug)=='landing-projects'){
												// 	$link = get_field('landing_link',get_the_ID());
												// 	$post_term_name = '';
												// }

									   			$output .= '<div class="portfolio-item-container">
																<div class="portfolio-item">
																	<div class="overlay-container">
																		'.$link.'
																			<img src="'.esc_url($thumb_img).'" alt="alt"/>
																			<div class="overlay '.esc_attr($overlay_active_class).' text-'.esc_attr($text_position).'">
																				<div class="'.esc_attr($border_class).'">
																					<div class="overlay-text-container '.esc_attr($text_decoration_class).'">
																						<div class="vertical-center2-container">
																							<div class="vertical-center2-content">
																								<div class="text">
																									<h4 class="margin-bottom-none">'.get_the_title().'</h4>
																									<h6 class="text-uppercase">'.$post_term_name.'</h6>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>	
																			</div>
																		</a>
																	</div>
																</div>
															</div>';
								   			}
					$output .= '	</div>
									<nav class="side style-1">
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

	$taxonomies=get_terms('projects_category', array('orderby'    => 'term_id',  'order'=>'ASC', 'hide_empty'=>false) );
	$portfolio_cats = array();
	if($taxonomies){
		foreach ($taxonomies as $taxonomy ) {
			if(isset($taxonomy->slug))
			 	array_push($portfolio_cats, array('value'=>$taxonomy->slug,'label'=>$taxonomy->name));	
		} 
	}

	vc_map( array(
		"base" => "sth_portfolio",
		"name" => esc_html__( "Portfolio Projects", "collective" ),
		"class" => "",
		"icon" => get_template_directory_uri().'/includes/visual_composer/sth_module_icon.png',
		"category" => 'StonedThemes',
		"params" => array(
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Total items", "collective" ),
				"param_name" => "total_items",
				"value" => "4",
				"description" => esc_html__( "Set max limit for items in grid or enter -1 to display all.", "collective" )
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
				'type' => 'autocomplete',
				'heading' => esc_html__( 'Portfolio Categories', 'collective' ),
				'param_name' => 'portfolio_cats',
				'settings' => array(
					'multiple' => true,
					'min_length' => 1,
					'groups' => true,
					// In UI show results grouped by groups, default false
					'unique_values' => true,
					// In UI show results except selected. NB! You should manually check values in backend, default false
					'display_inline' => true,
					// In UI show results inline view, default false (each value in own line)
					'delay' => 500,
					// delay for search. default 500
					'auto_focus' => true,
					// auto focus input, default true
					'values' => $portfolio_cats
				),
				'param_holder_class' => 'vc_not-for-custom',
				'description' => esc_html__( 'Include portfolio categories if empty returns posts from all categories.', 'collective' ),
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Sorting", "collective" ),
				"param_name" => "sorting",
				"value" => array('ASC','DESC'),
				"description" => esc_html__("Select sorting order.", "collective" ),
			),
			
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Exclude", "collective" ),
				"param_name" => "exclude",
				"value" => "",
				"description" => esc_html__( "Add project posts ids split by commas.", "collective" )
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
				"type" => "dropdown",
				"heading" => esc_html__( "Item Display", "collective" ),
				"param_name" => "item_display",
				"value" => array("Squar","Vertical Rect","Horizontal Rect"),
				"group" => esc_html__( 'Item Design', 'collective' ),
				"description" => esc_html__( "Choose item display as squar or vertical rectangle.", 'collective' )
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Enable lightbox", "collective" ),
				"param_name" => "enable_lightbox",
				"value" => array("No","Yes"),
				
				"description" => esc_html__( "Choose if you want to open lightbox otherwise it will redirect to single", 'collective' )
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
				"type" => "colorpicker",
				"heading" => esc_html__( "Category Color", "collective" ),
				"param_name" => "category_color",
				"value" => "",
				"group" => esc_html__( 'Item Design', 'collective' ),
				"description" => esc_html__( "Set category color.", "collective" )
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

add_action('vc_after_init', 'stonedthemes_portfolio_vc_map_init');
?>