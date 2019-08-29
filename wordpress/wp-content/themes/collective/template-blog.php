<?php 
/*
* Template Name: Blog
*/
?>
<?php get_header(); ?>
<div class="container">
	<div class="row">
		<?php 
		$sidebar = get_field('enable_sidebar')?get_field('enable_sidebar'):false;
		$sidebar_position = get_field('sidebar_position')?get_field('sidebar_position'):'Right';
		$columns = get_field('columns')?get_field('columns'):3;
		if($sidebar):
			if($sidebar_position=='Left'):?>
			<div class="col-md-3">
			<!-- <div class="padding-lg"> -->
				<?php  if ( !function_exists('dynamic_sidebar') ||  !dynamic_sidebar('sidebar-1') ) ?>
			<!-- </div> -->
			</div>
			<?php endif; ?>
		<div class="col-md-9">
		<?php else : ?>
		<div class="col-md-12">
		<?php endif;?>
			<?php setup_postdata( $post );?>
			<?php the_content();?>
			<?php wp_reset_postdata();?>
			<div class="row" id="blog-items">
				<?php 
					   $blog_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
					   $post_per_page = get_field('post_per_page');
					   $args = array(
							'post_type' => 'post',	
							'posts_per_page' => $post_per_page,									
							'paged'     => $blog_page
						);
					   
						$the_Query = new WP_Query($args); 
						while ($the_Query->have_posts()):
							$the_Query->the_post(); 							
					?>
					<?php
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
					<div class="col-md-6">
						<div class="blog-item">
							<a href="<?php echo esc_url(get_permalink());?>">
								<div class="overlay-container">
									<?php 
										 $large_image_url =  wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'stonedthemes_portfolio' );
									?>
									<img src="<?php echo esc_url($large_image_url[0]);?>" alt="alt"/>
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
			</div>
			<div class="load-more-container text-center">
				<?php if($the_Query->max_num_pages != 1):?>
				<a href="" class="button loadMoreBtn">
					<span><?php esc_html_e('load more','collective');?></span>
					<div class="load-more-container">
						<div class="spinner-1"></div>
						<div class="spinner-2"></div>
						<div class="spinner-3"></div>
					</div>
				</a>
				<?php endif;?>
			</div>
		</div>
		<?php if($sidebar):?>
			<?php if($sidebar_position=='Right'):?>
			<div class="col-md-3">
				<?php  if ( !function_exists('dynamic_sidebar') ||  !dynamic_sidebar('sidebar-1') ) ?>
			</div>
			<?php endif;?>
		<?php endif;?>
	</div>
</div>
<script>
var blog_page = parseInt("<?php echo esc_html($blog_page); ?>");
var blog_last_page = parseInt('<?php echo esc_html($the_Query->max_num_pages); ?>');
var post_categories = "";
var grid_elements = "6";
var orderby = "date";
var sorting = "DESC";
</script>
<?php get_footer(); ?>