<?php
function stonedthemes_gallery_vc_map_init(){

	if ( class_exists( "WPBakeryShortCode" ) ) {

		class WPBakeryShortCode_sth_gallery extends WPBakeryShortCode {

			protected function content( $atts, $content = null ) {

				$atts = vc_map_get_attributes( $this->getShortcode(), $atts );

				$feed = $atts['feed'];	
				$images = $atts['images'];		
				
				$css = $atts['css'];
				$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );
				
				$output = '<style type="text/css">
							.variable-sized-gallery img{
								border: 10px solid #fff;
								box-shadow: 4px 4px 0 2px #e0e0e0;
							}
							</style>';

				$output .='<div class="vertical-center-flexbox">
							<div class="variable-sized-gallery '.esc_attr($css_class).'">
								<div class="owl-container">
									<div class="owl-carousel" data-owl-carousel data-owl-carousel-options=\'{"margin":40, "loop":true, "center": true, "responsive" : {"0" : {"items" : 1, "stagePadding": 50}, "768" : {"items" : 1}, "992" : {"items" : 2}, "1200" : {"items" : 3, "stagePadding" : 100}}}\'>';

									if($feed=='Image Gallery'): 
										$images = explode( ',', $images );

										foreach ( $images as $attach_id ): 
										
											$thumbnail1 = wp_get_attachment_image_src($attach_id,'full');
											$thumbnail2 = wp_get_attachment_image_src($attach_id,'full');
											
											$output .= '<div class="black-and-white-effect" style="text-align: center;">
															<div class="vertical-center2-container">
																<div class="vertical-center2-content">
																	<div style="display: inline-block; position: relative;">
																		<a href="">
																			<img src="'.$thumbnail1[0].'" alt="alt" style="max-height: 95%; width: auto; height: auto; margin: 0 auto;"/>
																		</a>
																		<a class="like">
																			<span style="">21</span>
																			<i class="fa fa-heart fa-2x"></i>
																		</a>
																	</div>
																</div>
															</div>
														</div>';
										endforeach; 

									else: 
									
									$enable_lightbox = $atts['enable_lightbox'];
									$enable_likes = $atts['enable_likes'];

									$projects = explode(",",$atts['projects']);
									$args = array(
											'post_type' => 'project_post',
											'post__in'  =>  $projects,
											'posts_per_page' => count($projects),
											'orderby'	=>	'menu_order date',
										);	
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

												$thumb_url1 = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full');
												$thumb_url2 = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full');
												$num_like = get_post_meta(get_the_ID(),'stoned_like',true);

												$link = '<a href="'.get_the_permalink().'">';

												if($enable_lightbox=='Yes')
													$link = 	'<a href="'.get_the_permalink().'" class="ajax_lightbox" data-id="'.get_the_ID().'" data-title="'.get_the_title().'" data-cat="'.$post_term_name.'">';
												if($counter%2==0){
													$output .= '<div class="black-and-white-effect" style="text-align: center;">
																	<div class="vertical-center2-container">
																		<div class="vertical-center2-content">
																			<div style="display: inline-block; position: relative;">
																				'.$link.'
																					<img src="'.$thumb_url1[0].'" style="max-height: 95%; width: auto; height: auto; margin: 0 auto;" alt="alt"/>
																				</a>';
																			if($enable_likes=='Yes'):

																			$output .=	'<a class="like" data-id="'.get_the_ID().'">
																							<span>'.$num_like.'</span>
																							<i class="fa fa-heart fa-2x"></i>
																						</a>';
																			endif;	

													$output .=				'</div>
																		</div>
																	</div>
																</div>';
												} else {
													$output .= '<div class="black-and-white-effect" style="text-align: center;">
																	<div class="vertical-center2-container">
																		<div class="vertical-center2-content">
																			<div style="display: inline-block; position: relative;">
																				'.$link.'
																					<img src="'.$thumb_url2[0].'" style="max-height: 95%; width: auto; height: auto; margin: 0 auto;" alt="alt"/>
																				</a>';
																			if($enable_likes=='Yes'):

																			$output .=	'<a class="like" data-id="'.get_the_ID().'">
																							<span>'.$num_like.'</span>
																							<i class="fa fa-heart fa-2x"></i>
																						</a>';
																			endif;	

													$output .=				'</div>
																		</div>
																	</div>
																</div>';
												}
											$counter++;				
										 } 
									endif; 
				$output .='				</div>
										<nav class="bottom-middle outside style-1">
											<div class="prev">
												<i class="fa fa-angle-left fa-vertical-center"></i>
											</div>
											<div class="next">
												<i class="fa fa-angle-right fa-vertical-center"></i>
											</div>
										</nav>
									</div>
								</div>
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

	wp_reset_query();
	//global $cat_values;


	// $portfolio_cats = get_terms( 'projects_category', array('hide_empty'=>true));
	// $cat_values = array();

	// foreach ($portfolio_cats as $term) {
	// 	array_push($cat_values, array('value'=>($term->term_id),'label'=>($term->name)));
	// 	// $cat_values[$term->name] = $term->term_id;
	// }
	

	vc_map( array(
		"base" => "sth_gallery",
		"name" => esc_html__( "Gallery", "collective" ),
		"class" => "",
		"icon" => get_template_directory_uri().'/includes/visual_composer/sth_module_icon.png',
		"category" => 'StonedThemes',
		"params" => array(
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Feed", "collective" ),
				"param_name" => "feed",
				"value" => array("Portfolio","Image Gallery"),
				"description" => esc_html__( "Choose source of feed for this modul.", "collective" )
			),
			
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
				"dependency" => array(
					"element" => "feed",
					"value" => "Portfolio",
					),
				"description" => esc_html__( "Choose projects you want to show.", "collective" )
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Enable lightbox", "collective" ),
				"param_name" => "enable_lightbox",
				"value" => array("No","Yes"),
				"dependency" => array(
					"element" => "feed",
					"value" => "Portfolio",
					),
				"description" => esc_html__( "Choose if you want to open lightbox otherwise it will redirect to single", 'collective' )
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Enable likes", "collective" ),
				"param_name" => "enable_likes",
				"value" => array("No","Yes"),
				"dependency" => array(
					"element" => "feed",
					"value" => "Portfolio",
					),
				"description" => esc_html__( "Choose if you want to allow users to like your items (heart icon will be show in buttome edge).", 'collective' )
			),
			array(
		        "type" => "attach_images",
		        "holder" => "div",
				"class" => "",
		        "heading" => esc_html__("Images", "collective" ),
		        "param_name" => "images",
		        "value"	=> "",
		        "dependency" => array(
					"element" => "feed",
					"value" => "Image Gallery",
					)
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
		)
	) );
}
add_action('vc_after_init', 'stonedthemes_gallery_vc_map_init');
?>