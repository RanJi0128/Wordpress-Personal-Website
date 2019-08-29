<?php
function stonedthemes_blogposts_vc_map_init(){

	if ( class_exists( "WPBakeryShortCode" ) ) {
		class WPBakeryShortCode_sth_blogposts extends WPBakeryShortCode {

			protected function content( $atts, $content = null ) {

				$atts = vc_map_get_attributes( $this->getShortcode(), $atts );

				$title = $atts['title'];	
				$grid_elements = $atts['grid_elements']?$atts['grid_elements']:'3';
				$post_cats = $atts['categories'];

				$orderby = $atts["orderby"];
				$sorting = $atts['sorting'];
				$exclude = $atts['exclude'];

				$item_display = $atts['item_display'];

				$width_class = '';

				$exclude =  explode(",", $exclude);

				$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width_class, $this->settings['base'], $atts );
				$output ='';
				
				$blog_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$post_per_page = get_option('post_per_page');

				if($item_display=='Style1'){
			
					if($title)
						$output .= 		'<h4 class="collective-title">'.$title.'</h4>';
					
					$output .= 		'<div class="blog-masonry row" id="blog-items">';
										$args = array(
											'post_type' => 'post',
											'post__not_in'  =>  $exclude,
											'cat'	=> $post_cats,
											'posts_per_page' => $post_per_page,
											'paged'	=> $blog_page,
											'orderby'	=>	$orderby,
											'order' 	=> 	$sorting,
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

												$thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'stonedthemes_portfolio'); 
												
									   			$output .= '<div class="masonry-item col-md-'.esc_attr($grid_elements).'">
																<div class="blog-masonry-item">
																	<a href="'.esc_url(get_permalink()).'">
																		<div class="overlay-container">
																		<div class="overlay overlay-blog-masonry-item"></div>
																			<img src="'.esc_url($thumb_url[0]).'" alt="alt"/>
																		</div>
																	</a>
																	<div class="blog-item-content">
																		<div class="post-details">
																			<p>'.trim($post_categories_realNames).' / '.get_the_date("M Y").'</p>
																			<h4 class="text-normal"><a href="'.esc_url(get_permalink()).'">'.get_the_title().'</a></h4>
																		</div>
																		<a href="'.esc_url(get_permalink()).'">
																			<p>'.get_the_excerpt().'</p>
																		</a>
																	</div>
																</div>
															</div>';
								   			}
					$output .= '</div>';
								
								if($the_Query->max_num_pages != 1):
								$output .= '<div class="load-more-container text-center">
												<a href="" class="button loadMoreBtn">
													<span>load more</span>
													<div class="load-more-container">
														<div class="spinner-1"></div>
														<div class="spinner-2"></div>
														<div class="spinner-3"></div>
													</div>
												</a>
											</div>';
								endif;		
							
					$output .= '<script>
									var blog_page = parseInt("'.$blog_page.'");
									var blog_last_page = parseInt('.$the_Query->max_num_pages.');
									var blog_masonry = true;
									var post_categories = "'.$post_cats.'";
									var grid_elements = "'.$grid_elements.'";
									var orderby = "'.$orderby.'";
									var sorting = "'.$sorting.'";
								</script>';

				} else {

					if($title)
						$output .= 		'<h4 class="collective-title">'.$title.'</h4>';
					
					$output .= 		'<div class="row" id="blog-items">';
										$args = array(
											'post_type' => 'post',
											'post__not_in'  =>  $exclude,
											'cat'	=> $post_cats,
											'posts_per_page' => $post_per_page,
											'paged'	=> $blog_page,
											'orderby'	=>	$orderby,
											'order' 	=> 	$sorting,
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

												$thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'stonedthemes_portfolio'); 
												
									   			$output .= '<div class="col-md-'.esc_attr($grid_elements).'">
																<div class="blog-item">
																	<a href="'.esc_url(get_permalink()).'">
																		<div class="overlay-container">
																			<img src="'.esc_url($thumb_url[0]).'" alt="alt"/>
																			<div class="overlay text-left-bottom">
																				<div class="overlay-text-container">
																					<div class="text">
																						<h6 class="margin-bottom-none text-uppercase">'.trim($post_categories_realNames).' / '.get_the_date("M Y").'</h6>
																						<h4 class="text-normal">'.get_the_title().'</h4>
																					</div>
																				</div>
																			</div>
																		</div>
																	</a>
																</div>
															</div>';			
								   			}
					$output .= '</div>';
								
								if($the_Query->max_num_pages != 1):
								$output .= '<div class="load-more-container text-center">
												<a href="" class="button loadMoreBtn">
													<span>load more</span>
													<div class="load-more-container">
														<div class="spinner-1"></div>
														<div class="spinner-2"></div>
														<div class="spinner-3"></div>
													</div>
												</a>
											</div>';
								endif;		
							
					$output .= '<script>
									var blog_page = parseInt("'.$blog_page.'");
									var blog_last_page = parseInt('.$the_Query->max_num_pages.');
									var post_categories = "'.$post_cats.'";
									var grid_elements = "'.$grid_elements.'";
									var orderby = "'.$orderby.'";
									var sorting = "'.$sorting.'";
								</script>';	
					
					

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

	$categories = get_categories();

	$values = array();
	foreach($categories as $category){
		array_push($values, array('value'=>$category->term_id,'label'=>$category->name));	
	}

	vc_map( array(
		"base" => "sth_blogposts",
		"name" => esc_html__( "Blog Posts", "collective" ),
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
				"type" => "dropdown",
				"heading" => esc_html__( "Grid elements per row", "collective" ),
				"param_name" => "grid_elements",
				"value" => $cols,
				"description" => esc_html__( "Select number of single grid elements per row.", "collective" )
			),
			
			array(
				'type' => 'autocomplete',
				'heading' => esc_html__( 'Post Categories', 'collective' ),
				'param_name' => 'categories',
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
					'values' => $values
				),
				'param_holder_class' => 'vc_not-for-custom',
				'description' => esc_html__( 'Enter categories.', 'collective' ),
			),
			array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Order by', 'collective' ),
				'param_name' => 'orderby',
				'value' => array(
					esc_html__( 'Date', 'collective' ) => 'date',
					esc_html__( 'Order by post ID', 'collective' ) => 'ID',
					esc_html__( 'Author', 'collective' ) => 'author',
					esc_html__( 'Title', 'collective' ) => 'title',
					esc_html__( 'Last modified date', 'collective' ) => 'modified',
					esc_html__( 'Post/page parent ID', 'collective' ) => 'parent',
					esc_html__( 'Number of comments', 'collective' ) => 'comment_count',
					esc_html__( 'Menu order/Page Order', 'collective' ) => 'menu_order',
					esc_html__( 'Random order', 'collective' ) => 'rand',
				),
				'description' => esc_html__( 'Select order type.', 'collective' ),
				'param_holder_class' => 'vc_grid-data-type-not-ids',
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Sort order", "collective" ),
				"param_name" => "sorting",
				"value" => array('ASC','DESC'),
				"description" =>  esc_html__( "Select sorting order.", "collective" )
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
				"heading" => esc_html__( "Item Display", "collective" ),
				"param_name" => "item_display",
				"value" => array("Style1","Style2"),
				"group" => esc_html__( 'Item Design', 'collective' ),
				"description" => esc_html__( "Choose item display.", "collective" )
			),
			
			
		)
	) );
}
add_action('vc_after_init', 'stonedthemes_blogposts_vc_map_init');
?>