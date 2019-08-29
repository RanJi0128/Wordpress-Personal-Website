<?php 
/*
* Template Name: Portfolio Mosaic
*/
?>
<?php get_header(); 
stonedthemes_portfolio_style(get_field("item_offset"),
				get_field('overlay_offset'),
				get_field('overlay_color'),
				get_field('overlay_opacity'),
				get_field('text_overlay_offset'),
				get_field('title_color'),
				get_field('category_color'),
				get_field('border_offset'));

stonedthemes_portfolio_filter_style(get_field("filter_background_color"),get_field("filter_text_color"),get_field("text_decoration_color"));

$item_hover_effect = get_field('item_hover_effect')?get_field('item_hover_effect'):'zoom-effect';

?>
<?php setup_postdata( $post );?>
<?php the_content();?>
<?php wp_reset_postdata();?>
<div class="portfolio-items <?php echo esc_attr($item_hover_effect);?> fit-to-screen-mh">
<?php
	$custom_categories_ = get_field('portfolio_cats',$post->ID);
	
	$custom_categories = array();
	if($custom_categories_){
		foreach ((array)$custom_categories_ as $term) {
			$custom_categories[] = $term->slug;
		}
	}

	$columns = get_field('columns')?get_field('columns'):'col-lg-3';
	$columns_md = get_field('columns_md')?get_field('columns_md'):'col-md-4';
	$columns_sm = get_field('columns_sm')?get_field('columns_sm'):'col-sm-6';
	$text_position = get_field('text_aligment');
	$text_decoration = get_field('text_decoration');
	$border_offset = get_field('border_offset')?get_field('border_offset'):'';

	$border_class = '';
	if($border_offset!='')
		$border_class = 'bordered';
?>	

	<?php $filter = get_field('filter');?>
	<?php if($filter):?>

	<?php if($filter=='top'): ?>
		<div class="portfolio-filter-v1">
			<ul class="list-inline filter <?php if(get_field('filter_position')) echo get_field('filter_position');?>">
	<?php elseif($filter=='right' || $filter=='left' ): ?>
		<div class="portfolio-filter-v2 <?php echo get_field('filter');?>">
			<ul class="list-inline filter">		
	<?php endif;?>		
				<?php 
					$taxonomies=get_terms('projects_category', array('orderby'    => 'count',  'order'=>'DESC') );
					if($custom_categories):
						if(count($custom_categories)>1){?>
						<?php
							$args = array(
								'post_type' => 'project_post',
								'posts_per_page' => '-1',
								'tax_query' => array(
				                        array(
				                            'taxonomy' => 'projects_category',
				                            'field' => 'slug',
				                            'terms' => $custom_categories
				                        )
				                    )
							);
							$the_Query = new WP_Query($args);
							$custom_all_count = $the_Query->post_count;
						?>	
							<li class="active">
								<?php if($filter!='top'): ?>
									<span class="category-items-number"><?php echo esc_attr($custom_all_count);?></span>
								<?php endif; ?>	
									<a href="" class="cbutton" data-filter="*" data-slug="All"><?php esc_html_e('All','collective');?></a>
							</li>
						<?php }
						foreach ($taxonomies as $taxonomy ) {
							if(in_array($taxonomy->slug,$custom_categories)): ?>	
							 <li>
							 	<?php if($filter!='top'): ?>
									<span class="category-items-number"><?php echo esc_html($taxonomy->count);?></span>
								<?php endif; ?>
							 		<a href="" data-filter="<?php echo '.' . strtolower(esc_attr($taxonomy->slug));?>" data-slug="<?php echo esc_attr($taxonomy->slug);?>"><?php echo esc_html($taxonomy->name);?></a>
							 </li>
							<?php
							endif;	
						 }
					else:?>
						<li class="active">
							<?php if($filter!='top'): ?>
								<span class="category-items-number"><?php echo wp_count_posts('project_post')->publish;?></span>
							<?php endif; ?>	
								<a href="" data-filter="*" data-slug="All"><?php esc_html_e('All','collective');?></a>
						</li>						 
						<?php
							foreach ($taxonomies as $taxonomy ) {?>
							 <li>
							 	<?php if($filter!='top'): ?>
									<span class="category-items-number"><?php echo esc_html($taxonomy->count);?></span>
								<?php endif; ?>
							 	<a href="" data-filter="<?php echo '.' . strtolower(esc_attr($taxonomy->slug));?>" data-slug="<?php echo esc_attr($taxonomy->slug);?>"><?php echo esc_html($taxonomy->name);?></a>
							 </li>
						<?php } ?>
					<?php endif; ?>	
			</ul>
			<span class="guxhi" style="opacity: 0;"></span>
		</div>
	<?php endif; //filter ?>
	
	
	<?php if(get_field('page_layout')=='Boxed'):?>
		<div class="container">
	<?php endif;?>
	<div class="row mosaic" id="portfolio-itmes" data-id="<?php echo esc_attr($post->ID);?>">
		<?php  	
		   $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		   $post_per_page = get_field('post_per_page');
		   $args = array(
				'post_type' => 'project_post',
				'posts_per_page' => $post_per_page,
				'paged'     => $paged,
				'orderby' => array('menu_order' => 'ASC' , 'date' => 'DESC') 
			);		
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

			$the_Query = new WP_Query($args);
			$counter = 0;					 
			while ($the_Query->have_posts()):
				$the_Query->the_post(); 							
		?>
		<?php
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
			<div class="<?php echo esc_attr($columns);?> <?php echo esc_attr($columns_md);?> <?php echo esc_attr($columns_sm);?> portfolio-item-container <?php echo esc_attr($post_term_slugs); ?>">
				<div class="portfolio-item">
					<div class="overlay-container">
						<?php 
							if(get_field('project_display',get_the_ID())=='external')
								echo  '<a href="'.get_field('external_link',get_the_ID()).'" target="_blank">';
							else
								echo '<a href="'.get_the_permalink().'">';
						?>
							<?php if(has_post_thumbnail()):?>
								<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $image_format[$counter]); ?>
								<span class="lazy-container" style="padding-bottom: <?php echo esc_attr( ($large_image_url[2] * 100) / $large_image_url[1]); ?>%; height: 0;">
									<img class="lazy" alt="alt" width="<?php echo esc_attr($large_image_url[1]);?>" src="" height="<?php echo esc_attr($large_image_url[2]);?>" data-original="<?php echo esc_url($large_image_url[0]);?>"/>
								</span>
							<?php else : ?>
								<span style="padding-bottom: 56.25%; height: 0;">
									<img src="<?php echo esc_url(get_template_directory_uri().'/css/img/f_image.png');?>" alt="alt" />
								</span>
							<?php endif; ?>	
							<div class="overlay <?php if($text_position !== ''){echo "text-".esc_attr($text_position);}else{echo "text-left-bottom";} ?>">
								<div class="<?php echo esc_attr($border_class);?>">
									<div class="overlay-text-container<?php if($text_decoration){echo " text-decoration";} ?>">
										<div class="vertical-center2-container">
											<div class="vertical-center2-content">
												<div class="text">
													<h4 class="margin-bottom-none"><?php the_title();?></h4>
													<h6 class="text-normal text-uppercase"><?php echo esc_html($post_term_name); ?></h6>
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
		<?php $counter++; 
				if($counter==9)
					$counter=0; 
			endwhile; ?> 
		
	</div>
	<div class="row load-more-container">
		<?php if($the_Query->max_num_pages != 1):?>
			<div class="text-center">
				<a href="" class="button loadMoreBtn margin-top-none">
					<span><?php esc_html_e('LOAD MORE','collective');?></span>
					<div class="load-more-container">
						<div class="spinner-1"></div>
						<div class="spinner-2"></div>
						<div class="spinner-3"></div>
					</div>
				</a>
			</div>
		<?php endif;?>
	</div>
	<?php wp_reset_postdata();?>
	<?php if(get_field('page_layout')=='Boxed'):?>
		 </div> <!-- container -->
	<?php endif;?>
	
</div>
<script>
var portfolioMosaic = true;
var page = parseInt("<?php echo esc_attr($paged); ?>");
var last_page = parseInt('<?php echo esc_attr($the_Query->max_num_pages); ?>');
</script>
<?php get_footer();?>