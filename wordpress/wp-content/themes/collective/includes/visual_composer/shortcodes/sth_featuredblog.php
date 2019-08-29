<?php
function stonedthemes_featuredPosts_vc_map_init(){

	if ( class_exists( "WPBakeryShortCode" ) ) {
		class WPBakeryShortCode_sth_featuredPosts extends WPBakeryShortCode {

			protected function content( $atts, $content = null ) {

				$atts = vc_map_get_attributes( $this->getShortcode(), $atts );

				$title = $atts['title'];
				$arrow_style = $atts['arrow_style']?$atts['arrow_style']:'style-3';
				$arrow_position = $atts['arrow_position']?$atts['arrow_position']:'bottom-right';				

				$output ='<h2 class="collective-title">'.$title.'</h2>
							<div class="owl-container blog-main-slider">
								<div class="owl-carousel" data-owl-carousel="" data-owl-carousel-options=\'{"items": 1, "loop": true, "animateOut": "fadeOut"}\'>';
									
									$featured_posts = explode(",",$atts['featured_posts']);
									$args = array(
											'post_type' => 'post',
											'post__in'  =>  $featured_posts,
											'orderby'	=>	'menu_order date',
										);	
									
									$the_Query = new WP_Query($args);
									while ($the_Query->have_posts()){
										$the_Query->the_post();	 
										$post_categories  = get_the_category();
										$post_categories_names = '';
										$post_categories_realNames = '';
										if($post_categories){
											foreach ($post_categories as $post_cat){
												$post_categories_names .= str_replace(' ', '_',$post_cat->name)." ";
												$post_categories_realNames .= $post_cat->name.' ';
											}
										}

										$thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'stonedthemes_featuredSlider');
										$output .='	<div class="overlay-container">
														<img src="'.esc_url($thumb_url[0]).'" alt="alt" />
														<div class="overlay overlay-active">
															<div class="blog-text">
																<h6 class="text-normal text-uppercase">
																	<a href="'.esc_url(get_permalink()).'">'.trim($post_categories_realNames).' / '.get_the_date("M Y").'</a>
																</h6>
																<h4 class="margin-bottom-none">
																	<a href="'.esc_url(get_permalink()).'">'.get_the_title().'</a>
																</h4>
															</div>
														</div>
													</div>';
									 } 
								
				$output .='		</div>
								<nav class="'.esc_attr($arrow_position).' '.esc_attr($arrow_style).'">
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
	}
		
	$values = array();
	$args = array(
		'post_type' => 'post',
		'posts_per_page' => -1
	);	
	$the_Query = new WP_Query($args);
	while ($the_Query->have_posts()){
		$the_Query->the_post();
		array_push($values, array('value'=>get_the_ID(),'label'=>get_the_title()));
		//$values[get_the_title()] = get_the_ID();	
	}


	vc_map( array(
		"base" => "sth_featuredPosts",
		"name" => esc_html__( "Featured Posts", "collective" ),
		"class" => "",
		"icon" => get_template_directory_uri().'/includes/visual_composer/sth_module_icon.png',
		"category" => 'StonedThemes',
		"params" => array(
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Title", "collective" ),
				"param_name" => "title",
				"value" => "",
				"description" => esc_html__( "Set title for this modul.", "collective" )
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
				"type" => "autocomplete",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Featured Posts", "collective" ),
				"param_name" => "featured_posts",
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
				"description" => esc_html__( "Choose posts you want to show in slider.", "collective" )
			),
		)
	) );
}

add_action('vc_after_init', 'stonedthemes_featuredPosts_vc_map_init');
?>