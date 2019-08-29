<?php
function stonedthemes_portfoliovertical_vc_map_init(){

	if ( class_exists( "WPBakeryShortCode" ) ) {

		class WPBakeryShortCode_sth_portfoliovertical extends WPBakeryShortCode {

			protected function content( $atts, $content = null ) {

				$atts = vc_map_get_attributes( $this->getShortcode(), $atts );

				$title = $atts['title'];
				$feed = $atts['feed'];	
				$display = $atts['display'];
				$specific_height = $atts['specific_height'];
				$fit_to_screen = '';
				$text_position = $atts['text_position'];
				
				$hide_numbers = $atts['hide_numbers'];	
				$overlay_color = $atts['overlay_color'];		
				$overlay_opacity = $atts['overlay_opacity'];

				$output = '';
				if($overlay_color!=''&&$overlay_opacity!=''){
					
					list($r, $g, $b) = sscanf($overlay_color, "#%02x%02x%02x");
		 			$rgba =  "$r".","."$g".","."$b".",".($overlay_opacity/10);
		 			$hover_rgba =  "$r".","."$g".","."$b".",".(($overlay_opacity-2)/10);
		 			$overlay_color = $rgba;

					$output .= '<style>
								.vertical-project .overlay-container .overlay {
									background-color: rgba('.$rgba.');
								}
								.vertical-project .overlay-container:hover .overlay {
									background-color: rgba('.$hover_rgba.');
								}
								</style>';
				}
				if($display=='Fullscreen')
					$fit_to_screen='fit-to-screen';

					$output .='<div class="vertical-projects '.esc_attr($fit_to_screen).'">';

									if($feed=='Images'): 
										 $images = vc_param_group_parse_atts( $atts['images'] ); 
										 foreach ($images as $image) {	 
										  	$img = wp_get_attachment_image_src($image['image'],'full'); 
											$link = $image['image_link'];
											$url = vc_build_link( $link);
								$output .='	<div class="vertical-project" style="background-image: url('.esc_url($img[0]).');">
												<div class="overlay-container">';
													 if ( strlen( $link ) > 0 && strlen( $url['url'] ) > 0 ) {
															$output .='<a class="vc_icon_element-link" href="' . esc_attr( $url['url'] ) . '" title="' . esc_attr( $url['title'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '">';
														}
											$output .='<img src="'.esc_url($img[0]).'" alt="alt"/>
														<div class="overlay overlay-2 overlay-active text-'.esc_attr($text_position).'">
															<div class="overlay-text-container">
																<div class="vertical-center2-container">
																	<div class="vertical-center2-content">
																		<div class="text">
																			<h2 class="text-normal">'.$image["image_number"].'</h2>
																			<h1 class="text-uppercase">'.$image["image_title"].'</h1>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</a>
												</div>
											</div>';
										 } 
									else: 
									
									$projects = explode(",",$atts['projects']);
									$args = array(
											'post_type' => 'project_post',
											'post__in'  =>  $projects,
											'posts_per_page' => count($projects),
											'orderby'	=>	'menu_order date',
										);	
										
									$the_Query = new WP_Query($args);
										while ($the_Query->have_posts()){
											$the_Query->the_post();	 
											$thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full');
							$output .='	<div class="vertical-project" style="background-image: url('.esc_url($thumb_url[0]).');">
											<div class="overlay-container">
												<a href="'.esc_attr(get_the_permalink()).'">
													<img src="'.esc_url($thumb_url[0]).'" alt="alt"/>
													<div class="overlay overlay-2 overlay-active text-'.esc_attr($text_position).'">
														<div class="overlay-text-container">
															<div class="vertical-center2-container">
																<div class="vertical-center2-content">
																	<div class="text">';
																		if($hide_numbers!='YES')
																			$output .='<h2 class="text-normal">'.count(get_field('gallery')).'</h2>';
																		$output .='<h1 class="text-uppercase">'.get_the_title().'</h1>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</a>
											</div>
										</div>';
									 } 
								endif; 
				$output .='	</div>';
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
		"base" => "sth_portfoliovertical",
		"name" => esc_html__( "Portfolio Vertical", "collective" ),
		"class" => "",
		"icon" => get_template_directory_uri().'/includes/visual_composer/sth_module_icon.png',
		"category" => 'StonedThemes',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "h3",
				"class" => "",
				"heading" => esc_html__( "Title", "collective" ),
				"param_name" => "title",
				"value" => "",
				"description" => esc_html__( "Enter Title.", "collective" )
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Feed", "collective" ),
				"param_name" => "feed",
				"value" => array("Portfolio","Images"),
				"description" => esc_html__( "Choose source of feed for this modul.", "collective" )
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Display", "collective" ),
				"param_name" => "display",
				"value" => array("Fullscreen","Specific Height"),
				"description" => esc_html__( "Choose between fullscreen and specific height for this element.", "collective" )
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Specific Height", "collective" ),
				"param_name" => "specific_height",
				"value" => "500",
				"dependency" => array(
					"element" => "display",
					"value" => "Specific Height",
					),
				"description" => esc_html__( "Set height for this element.", "collective" )
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Hide Numbers", "collective" ),
				"param_name" => "hide_numbers",
				"value" => array("NO","YES"),
				"group" => esc_html__( 'Item Design', 'collective' ),
				"description" => esc_html__( "Choose yes if you want to hide numbers.", "collective" )
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
				"heading" => esc_html__( "Text Position", "collective" ),
				"param_name" => "text_position",
				"value" => $text_position,
				"group" => esc_html__( 'Design options', 'collective' ),
				"description" => esc_html__( "Choose position of title and category.", "collective" )
			),
			array(
		        "type" => "param_group",
		        "value" => "Images",
		        "heading" => esc_html__("Images", "collective" ),
		        "param_name" => "images",
		        "params" => array(
		            array(
		                "type" => "attach_image",
		                "class" => "",
		                "value" => "",
		                "heading" => esc_html__("Image", "collective" ),
		                "param_name" => "image",
		            ),
		             array(
		                "type" => "textarea",
		                "class" => "",
		                "value" => "",
		                "heading" => esc_html__("Image Title", "collective" ),
		                "param_name" => "image_title",
		            ),
		            array(
		                "type" => "textarea",
		                "class" => "",
		                "value" => "",
		                "heading" => esc_html__("Image number", "collective" ),
		                "param_name" => "image_number",
		            ),
		            array(
		                "type" => "vc_link",
		                "class" => "",
		                "value" => "",
		                "heading" => esc_html__("Image link", "collective" ),
		                "param_name" => "image_link",
		            )
		        ),
		        "dependency" => array(
					"element" => "feed",
					"value" => "Images",
					)
		    ),
		)
	) );
}

add_action('vc_after_init', 'stonedthemes_portfoliovertical_vc_map_init');
?>