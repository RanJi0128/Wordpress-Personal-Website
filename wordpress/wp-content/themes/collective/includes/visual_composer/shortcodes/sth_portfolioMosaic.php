<?php
function stonedthemes_portfoliomosaic_vc_map_init(){

	if ( class_exists( "WPBakeryShortCode" ) ) {
		class WPBakeryShortCode_sth_portfoliomosaic extends WPBakeryShortCode {

			protected function content( $atts, $content = null ) {

				$atts = vc_map_get_attributes( $this->getShortcode(), $atts );

				$text_position = $atts['text_position'];
				$overlay_offset = $atts['overlay_offset'];
				$overlay_color = $atts['overlay_color'];		
				$overlay_opacity = $atts['overlay_opacity'];
				$overlay_active = $atts['overlay_active'];
				$text_overlay_offset = $atts['text_overlay_offset'];
				$title_color = $atts['title_color'];
				$category_color = $atts['category_color'];
				$border_offset = $atts['border_offset'];

				$item_hover_effect = $atts['item_hover_effect']?$atts['item_hover_effect']:'zoom-effect';

				stonedthemes_portfolio_style('',
								$overlay_offset,
								$overlay_color,
								$overlay_opacity,
								$text_overlay_offset,
								$title_color,
								$category_color,
								$border_offset);

				$border_class = '';
				if($border_offset)
					$border_class = 'bordered';

				$overlay_active_class = '';
				if($overlay_active=='Yes')
					$overlay_active_class = 'overlay-active';

					$output ='<div class="horizontal-mosaic-container visible-md-block visible-lg-block" data-customScrollbar data-customScrollbarOptions=\'{"scrollInertia": 10,"axis":"x","theme": "minimal-dark"}\'>
								<section class="horizontal-mosaic '.esc_attr($item_hover_effect).'" style="height: 600px;">';
									
									$projects = explode(",",$atts['projects']);
									$args = array(
											'post_type' => 'project_post',
											'post__in'  =>  $projects,
											'posts_per_page' => count($projects),
											'orderby'	=>	'menu_order date',
										);	
									$item_format = array("big-square","horizontal-rect","horizontal-rect","small-square","small-square","small-square","small-square","vertical-rect","vertical-rect");
									$image_format = array(	"stonedthemes_about-us",
															"stonedthemes_horizontal-rect",
															"stonedthemes_horizontal-rect",
															"stonedthemes_small-square",
															"stonedthemes_small-square",
															"stonedthemes_small-square",
															"stonedthemes_small-square",
															"stonedthemes_vertical-rect",
															"stonedthemes_vertical-rect");	

									$counter = 0;
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

											$thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), $image_format[$counter]);
											$thumb_img = get_template_directory_uri().'/css/img/f_image.png';
											if(has_post_thumbnail())
												$thumb_img = $thumb_url[0];
											

										$output .='	<div class="item '.esc_attr($item_format[$counter]).'">
														<div class="overlay-container">
															<a href="'.esc_url(get_the_permalink()).'">
																<img src="'.esc_url($thumb_img).'" alt="alt"/>
																<div class="overlay '.esc_attr($overlay_active_class).' text-'.esc_attr($text_position).'">
																	<div class="'.esc_attr($border_class).'">
																		<div class="overlay-text-container">
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
													</div>';
										$counter++;		
										if($counter==9)
											$counter=0;
									 } 
								
				$output .='		</section>
							</div>';

				$output .= '<div class="portfolio-items visible-xs-block visible-sm-block '.esc_attr($item_hover_effect).'">
								<div class="row">';
									$args = array(
										'post_type' => 'project_post',
											'post__in'  =>  $projects,
											'posts_per_page' => count($projects),
											'orderby'	=>	'menu_order date',
									);

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

											$border_class = '';
											if($border_offset)
												$border_class = 'bordered';
								   			$output .= '<div class="col-sm-6 portfolio-item-container">
															<div class="portfolio-item">
																<div class="overlay-container">
																	<a href="'.esc_url(get_permalink()).'">
																		<img src="'.esc_url($thumb_img).'" alt="alt"/>
																		<div class="overlay '.esc_attr($overlay_active_class).' text-'.esc_attr($text_position).'">
																			<div class="'.esc_attr($border_class).'">
																				<div class="overlay-text-container">
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
			return $output;	
			}
		}
	}
		
	$values = array();
	$args = array(
		'post_type' => 'project_post',
		'posts_per_page' => -1
	);	
	$the_Query = new WP_Query($args);
	while ($the_Query->have_posts()){
		$the_Query->the_post();
		array_push($values, array('value'=>get_the_ID(),'label'=>get_the_title()));
		//$values[get_the_title()] = get_the_ID();	
	}

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
		"base" => "sth_portfoliomosaic",
		"name" => esc_html__( "Portfolio Mosaic", "collective" ),
		"class" => "",
		"icon" => get_template_directory_uri().'/includes/visual_composer/sth_module_icon.png',
		"category" => 'StonedThemes',
		"params" => array(
			array(
				"type" => "autocomplete",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Portfolio Projects", "collective" ),
				"param_name" => "projects",
				'settings'    => array(
						'multiple' => true,
						'sortable' => true,
						'min_length' => 1,
						'no_hide' => true, // In UI after select doesn't hide an select list
						'groups' => true, // In UI show results grouped by groups
						'unique_values' => true, // In UI show results except selected. NB! You should manually check values in backend
						'display_inline' => true, // In UI show results inline view
						'values'   => $values,
					),
				"description" => esc_html__( "Choose projects you want to show.", "collective" )
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Text Position", "collective" ),
				"param_name" => "text_position",
				"value" => $text_position,
				"group" => esc_html__( 'Item Design', 'collective' ),
				"description" => esc_html__("Choose position of title and category.", "collective" )
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

add_action('vc_after_init', 'stonedthemes_portfoliomosaic_vc_map_init');
?>