<?php
/*Adding removing likes to project posts*/
	add_action('wp_ajax_stoned_insert_likes', 'stoned_insert_likes');
	add_action('wp_ajax_nopriv_stoned_insert_likes', 'stoned_insert_likes');
	function stoned_insert_likes()
	{
		$post_id = $_POST["post_id"];
		add_like($post_id);
		echo get_post_meta($post_id,'stoned_like',true);
		die();
	}
	function add_like($post_id)
	{
		$like = get_post_meta($post_id,'stoned_like',true);
		$like = $like + 1;
		update_post_meta($post_id,'stoned_like',$like);
	}

	add_action('wp_ajax_stoned_remove_likes', 'stoned_remove_likes');
	add_action('wp_ajax_nopriv_stoned_remove_likes', 'stoned_remove_likes');
	function stoned_remove_likes()
	{
		$post_id = $_POST["post_id"];
		remove_like($post_id);
		echo get_post_meta($post_id,'stoned_like',true);
		die();
	}
	function remove_like($post_id)
	{
		$like = get_post_meta($post_id,'stoned_like',true);
		$like = $like - 1;
		update_post_meta($post_id,'stoned_like',$like);
	}
/*Adding removing like to project post*/	


/* Lightbox */
add_action('wp_ajax_stonedthemes_lightbox', 'stonedthemes_lightbox');
add_action('wp_ajax_nopriv_stonedthemes_lightbox', 'stonedthemes_lightbox');
function stonedthemes_lightbox(){
	$post_id = $_POST["postID"];
	$images = array();
	while ( have_rows('gallery',$post_id) ) : the_row();  
		$image = wp_get_attachment_image_src(get_sub_field('image'),'stonedthemes_single');
   		$image_alt = get_post_meta( get_sub_field('image'), '_wp_attachment_image_alt', true);
		array_push($images, array("src" => $image[0],"alt" => $image_alt));
	endwhile;
	echo json_encode($images);
	die();
}
/* Lightbox */

add_action('wp_ajax_stonedthemes_blog_masonry', 'stonedthemes_blog_masonry');
add_action('wp_ajax_nopriv_stonedthemes_blog_masonry', 'stonedthemes_blog_masonry');
function stonedthemes_blog_masonry(){

	   $blog_page = $_POST["blog_page"];
	   $postID = $_POST["postID"];
	   $post_categories = $_POST["post_categories"];
	   $grid_elements = $_POST["grid_elements"];
	   $orderby = $_POST["orderby"];
	   $sorting = $_POST["sorting"];
	   
	   $post_per_page = get_option('post_per_page');

		
	   $args = array(
			'post_type' => 'post',
			'cat'	=> $post_categories,
			'posts_per_page' => $post_per_page,
			'paged'     => $blog_page,
			'orderby'	=>	$orderby,
			'order' 	=> 	$sorting,
		);
	    
	   
		$the_Query = new WP_Query($args);

		while ($the_Query->have_posts()):
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
							
		?>
			<div class="masonry-item col-md-<?php echo esc_attr($grid_elements);?>">
				<div class="blog-masonry-item">
					<a href="<?php echo esc_url(get_permalink());?>">
						<div class="overlay-container">
						<div class="overlay overlay-blog-masonry-item"></div>
							<img src="<?php echo esc_url($thumb_url[0]);?>">
						</div>
					</a>
					<div class="blog-item-content">
						<div class="post-details">
							<p><?php echo trim($post_categories_realNames).' / '.get_the_date("M Y");?></p>
							<h4 class="text-normal"><a href="<?php echo esc_url(get_permalink());?>"><?php echo get_the_title();?></a></h4>
						</div>
						<a href="<?php echo esc_url(get_permalink());?>">
							<p><?php echo get_the_excerpt();?></p>
						</a>
					</div>
				</div>
			</div>
		<?php endwhile; ?>  
	<?php 
	wp_reset_postdata();
	die();	
}


add_action('wp_ajax_stonedthemes_blog', 'stonedthemes_blog');
add_action('wp_ajax_nopriv_stonedthemes_blog', 'stonedthemes_blog');
function stonedthemes_blog(){

	   $blog_page = $_POST["blog_page"];
	   $postID = $_POST["postID"];

	   $post_categories = $_POST["post_categories"];
	   $grid_elements = $_POST["grid_elements"];
	   $orderby = $_POST["orderby"];
	   $sorting = $_POST["sorting"];
	   
	   $post_per_page = get_field('post_per_page',$postID)?get_field('post_per_page',$postID):get_option('posts_per_page');
	   $args = array(
			'post_type' => 'post',
			'posts_per_page' => $post_per_page,
			'cat'	=> $post_categories,
			'paged'     => $blog_page,
			'orderby'	=>	$orderby,
			'order' 	=> 	$sorting,
		);
	    
	   
		$the_Query = new WP_Query($args);

		while ($the_Query->have_posts()):
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
		?>
			<div class="col-md-<?php echo esc_attr($grid_elements);?>">
				<div class="blog-item">
					<a href="<?php echo esc_url(get_permalink());?>">
						<div class="overlay-container">
							<?php 
								 $large_image_url =  wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'stonedthemes_portfolio' );
							?>
							<img src="<?php echo esc_url($large_image_url[0]);?>"/>
							<div class="overlay text-left-bottom">
								<div class="overlay-text-container">
									<div class="text">
										<h6 class="margin-bottom-none text-uppercase"><?php echo trim($post_categories_realNames);?> / <?php echo get_the_date('M Y');?></h6>
										<h4 class="text-normal"><?php the_title();?></h4>
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>	
		<?php endwhile; ?>  
	<?php 
	wp_reset_postdata();
	die();	
}

add_action('wp_ajax_stonedthemes_portfolio_load_more', 'stonedthemes_portfolio_load_more');
add_action('wp_ajax_nopriv_stonedthemes_portfolio_load_more', 'stonedthemes_portfolio_load_more');	

function stonedthemes_portfolio_load_more(){

	$paged = isset($_POST["paged"])?$_POST["paged"]:'';
	$postID = $_POST["postID"];

 	$post_per_page = get_field('post_per_page',$postID)?get_field('post_per_page',$postID):get_option('posts_per_page');
	$columns = get_field('columns',$postID)?get_field('columns',$postID):'col-lg-3';
	$columns_md = get_field('columns_md',$postID)?get_field('columns_md',$postID):'col-md-4';
	$columns_sm = get_field('columns_sm',$postID)?get_field('columns_sm',$postID):'col-sm-6';
	$category = isset($_POST["category"])?$_POST["category"]:'';
		
	$text_position = get_field('text_aligment',$postID); 

	$overlay = get_field('overlay',$postID);
		
	$text_decoration = get_field('text_decoration',$postID);
	$border_offset = get_field('border_offset',$postID)?get_field('border_offset',$postID):'';

	$border_class = '';
	if($border_offset)
		$border_class = 'bordered'; 

	$overlay_active = get_field('overlay_active',$postID);

	$overlay_active_class = '';
	if($overlay_active)
		$overlay_active_class = 'overlay-active';


	if($overlay=='Custom')
	{
		 list($r, $g, $b) = sscanf(get_field('overlay_color',$postID), "#%02x%02x%02x");
		 $rgba =  "$r".","."$g".","."$b".",".(get_field('overlay_opacity',$postID)/10);
	}

    if($category=='All'){
		$args = array(
			'post_type' => 'project_post',
			'posts_per_page' => -1,
			'orderby' => array('menu_order' => 'ASC' , 'date' => 'DESC') 
		);
		
		$custom_categories_ = get_field('portfolio_cats',$postID);
	
		$custom_categories = array();
		if($custom_categories_){
			foreach ((array)$custom_categories_ as $term) {
				$custom_categories[] = $term->slug;
			}
		}

		if($custom_categories){
				$args = array(
					'post_type' => 'project_post',
					'posts_per_page' => -1,
					'tax_query' => array(
	                        array(
	                            'taxonomy' => 'projects_category',
	                            'field' => 'slug',
	                            'terms' => $custom_categories
	                        )
	                    ),
					'orderby' => array('menu_order' => 'ASC' , 'date' => 'DESC') 
				);
			}
	}
	elseif($category!='') {
    	$args = array(
		'post_type' => 'project_post',
		'posts_per_page' => -1,
		'tax_query' => array(
				array(
					'taxonomy' => 'projects_category',
					'field' => 'slug',
					'terms' => $category
				)
			),
		'orderby' => array('menu_order' => 'ASC' , 'date' => 'DESC') 
		);	
	}
	else {
		$custom_categories_ = get_field('portfolio_cats',$postID);
	
		$custom_categories = array();
		if($custom_categories_){
			foreach ((array)$custom_categories_ as $term) {
				$custom_categories[] = $term->slug;
			}
		}

		if($custom_categories){
				$args = array(
					'post_type' => 'project_post',
					'posts_per_page' => $post_per_page,
					'paged'     => $paged,
					'tax_query' => array(
	                        array(
	                            'taxonomy' => 'projects_category',
	                            'field' => 'slug',
	                            'terms' => $custom_categories
	                        )
	                    ),
					'orderby' => array('menu_order' => 'ASC' , 'date' => 'DESC') 
				);
			}
		else{		
		    $args = array(
					'post_type' => 'project_post',
					'posts_per_page' => $post_per_page,
					'paged'     => $paged,
					'orderby' => array('menu_order' => 'ASC' , 'date' => 'DESC') 
				);	
			}
	}

	$the_Query = new WP_Query($args);
    $counter = 0;					 
	while ($the_Query->have_posts()):
		$the_Query->the_post(); 							

		global $post;
		setup_postdata($post);
		$terms = get_the_terms( $post->ID, 'projects_category' );
		$post_terms = '';
		$post_term_name = "";
		if($terms){
			foreach ($terms as $term){
				$post_terms .= str_replace(' ', '_', $term->name).' ';
				$post_term_name .= $term->name.' ';
			}
		}
	?>	
		<div class="<?php echo esc_attr($columns);?> <?php echo esc_attr($columns_md);?> <?php echo esc_attr($columns_sm);?> portfolio-item-container">
			<div class="portfolio-item">
				<div class="overlay-container">
					<?php 
						if(get_field('project_display',get_the_ID())=='external')
							echo '<a href="'.get_field('external_link',get_the_ID()).'" target="_blank">';
						else
							echo '<a href="'.get_the_permalink().'">';
					?>
						<?php if(has_post_thumbnail()):?>
							<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'stonedthemes_portfolio'); ?>
							<img src="<?php echo esc_url($large_image_url[0]);?>"> 
							<!-- <img class="lazy" width="405" height="227" data-original="<?php echo esc_url($large_image_url[0]);?>"/> -->
						<?php else : ?>
							<img src="<?php echo esc_url(get_template_directory_uri().'/css/img/f_image.png');?>"/>
						<?php endif; ?>		
						<div class="overlay <?php echo esc_attr($overlay_active_class);?> <?php if($text_position !== ''){echo "text-".$text_position;}else{echo "text-left-bottom";} ?>">
							<div class="<?php echo esc_attr($border_class);?>">
								<div class="overlay-text-container<?php if($text_decoration){echo " text-decoration";} ?>">
									<div class="vertical-center2-container">
										<div class="vertical-center2-content">
											<div class="text">
												<h4 class="margin-bottom-none"><?php the_title();?></h4>
												<h6 class="text-normal text-uppercase"><?php echo esc_html($post_term_name); ?> </h6>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	<?php 
	$counter++;
	endwhile; 
	wp_reset_postdata();
	die(); 	
}

add_action('wp_ajax_stonedthemes_portfolio_mosaic_load_more', 'stonedthemes_portfolio_mosaic_load_more');
add_action('wp_ajax_nopriv_stonedthemes_portfolio_mosaic_load_more', 'stonedthemes_portfolio_mosaic_load_more');	

function stonedthemes_portfolio_mosaic_load_more(){

	$paged = isset($_POST["paged"])?$_POST["paged"]:'';
	$postID = $_POST["postID"];

 	$post_per_page = get_field('post_per_page',$postID)?get_field('post_per_page',$postID):get_option('posts_per_page');
	$columns = get_field('columns',$postID)?get_field('columns',$postID):'col-lg-3';
	$columns_md = get_field('columns_md',$postID)?get_field('columns_md',$postID):'col-md-4';
	$columns_sm = get_field('columns_sm',$postID)?get_field('columns_sm',$postID):'col-sm-6';
	$category = isset($_POST["category"])?$_POST["category"]:'';
		
	$text_position = get_field('text_aligment',$postID); 

	$overlay = get_field('overlay',$postID);
		
	$text_decoration = get_field('text_decoration',$postID);
	$border_offset = get_field('border_offset',$postID)?get_field('border_offset',$postID):'';

	$border_class = '';
	if($border_offset)
		$border_class = 'bordered'; 
	
	$image_format = array(	"stonedthemes_portfolio",
							"stonedthemes_portfolio_vertical",
							"stonedthemes_portfolio",
							"stonedthemes_portfolio",
							"stonedthemes_portfolio_vertical",
							"stonedthemes_portfolio",
							"stonedthemes_portfolio_vertical",
							"stonedthemes_portfolio",
							"stonedthemes_portfolio",	
							);

	if($overlay=='Custom')
	{
		 list($r, $g, $b) = sscanf(get_field('overlay_color',$postID), "#%02x%02x%02x");
		 $rgba =  "$r".","."$g".","."$b".",".(get_field('overlay_opacity',$postID)/10);
	}

    if($category=='All'){
		$args = array(
			'post_type' => 'project_post',
			'posts_per_page' => -1,
			'orderby' => array('menu_order' => 'ASC' , 'date' => 'DESC') 
		);
		
		$custom_categories_ = get_field('portfolio_cats',$postID);
	
		$custom_categories = array();
		if($custom_categories_){
			foreach ((array)$custom_categories_ as $term) {
				$custom_categories[] = $term->slug;
			}
		}

		if($custom_categories){
				$args = array(
					'post_type' => 'project_post',
					'posts_per_page' => -1,
					'tax_query' => array(
	                        array(
	                            'taxonomy' => 'projects_category',
	                            'field' => 'slug',
	                            'terms' => $custom_categories
	                        )
	                    ),
					'orderby' => array('menu_order' => 'ASC' , 'date' => 'DESC') 
				);
			}
	}
	elseif($category!='') {
    	$args = array(
		'post_type' => 'project_post',
		'posts_per_page' => -1,
		'tax_query' => array(
				array(
					'taxonomy' => 'projects_category',
					'field' => 'slug',
					'terms' => $category
				)
			),
		'orderby' => array('menu_order' => 'ASC' , 'date' => 'DESC') 
		);	
	}
	else {
		$custom_categories_ = get_field('portfolio_cats',$postID);
	
		$custom_categories = array();
		if($custom_categories_){
			foreach ((array)$custom_categories_ as $term) {
				$custom_categories[] = $term->slug;
			}
		}

		if($custom_categories){
				$args = array(
					'post_type' => 'project_post',
					'posts_per_page' => $post_per_page,
					'paged'     => $paged,
					'tax_query' => array(
	                        array(
	                            'taxonomy' => 'projects_category',
	                            'field' => 'slug',
	                            'terms' => $custom_categories
	                        )
	                    ),
					'orderby' => array('menu_order' => 'ASC' , 'date' => 'DESC') 
				);
			}
		else{		
		    $args = array(
					'post_type' => 'project_post',
					'posts_per_page' => $post_per_page,
					'paged'     => $paged,
					'orderby' => array('menu_order' => 'ASC' , 'date' => 'DESC') 
				);	
			}
	}
	
	$the_Query = new WP_Query($args);
    $counter = 0;					 
	while ($the_Query->have_posts()):
		$the_Query->the_post(); 							

		global $post;
		setup_postdata($post);
		$terms = get_the_terms( $post->ID, 'projects_category' );
		$post_terms = '';
		$post_term_name = "";
		$post_term_slugs = "";
		if($terms){
			foreach ($terms as $term){
				$post_terms .= str_replace(' ', '_', $term->name).' ';
				$post_term_name .= $term->name.' ';
				$post_term_slugs .= $term->slug.' ';
			}
		}
	?>	
		<div class="<?php echo esc_attr($columns);?> <?php echo esc_attr($columns_md);?> <?php echo esc_attr($columns_sm);?>  portfolio-item-container <?php echo esc_attr($post_term_slugs); ?>">
			<div class="portfolio-item">
				<div class="overlay-container">
					<?php 
						if(get_field('project_display',get_the_ID())=='external')
							echo '<a href="'.get_field('external_link',get_the_ID()).'" target="_blank">';
						else
							echo '<a href="'.get_the_permalink().'">';
					?>
						<?php if(has_post_thumbnail()):?>
							<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $image_format[$counter]); ?>
							<img src="<?php echo esc_url($large_image_url[0]);?>">
							<!-- <img src="http://lorempixel.com/800/450/"> -->
						<?php else : ?>
							<img src="<?php echo esc_url(get_template_directory_uri().'/css/img/f_image.png');?>"/>
						<?php endif; ?>	
						<div class="overlay <?php if($text_position !== ''){echo "text-".$text_position;}else{echo "text-left-bottom";} ?>">
							<div class="bordered">
								<div class="overlay-text-container<?php if($text_decoration){echo " text-decoration";} ?>">
									<div class="vertical-center2-container">
										<div class="vertical-center2-content">
											<div class="text">
												<h4 class="margin-bottom-none"><?php the_title();?></h4>
												<h6 class="text-normal text-uppercase"><?php echo esc_html($post_term_name); ?> </h6>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	<?php 
	$counter++;
	endwhile; 
	wp_reset_postdata();
	die(); 	
}