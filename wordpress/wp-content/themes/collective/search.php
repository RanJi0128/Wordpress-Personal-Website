<?php get_header();?>
<div class="container">
	<div class="row">
		<?php if(is_active_sidebar('sidebar-1')):?>
		<div class="col-md-9">
		<?php else : ?>
		<div class="col-md-12">
		<?php endif; ?>	
		<?php if($wp_query->have_posts()){?>
			<h4 class="text-uppercase"><?php esc_html_e('Search Results','collective');?></h4>
		<?php } else {?>
			 <h4 class="text-uppercase"><?php esc_html_e('No Result found','collective'); ?></h4>
			 <p class="text-center"> <?php esc_html_e("Sorry we couldn't find any results.",'collective'); ?></p>
			 <p class="smile text-center"><i class="fa fa-meh-o fa-3x"></i></p>
		<?php }?>
		<div class="blog-masonry row">
			<?php  while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
				
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
				$thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'stonedthemes_portfolio'); 
				?>
					<div class="masonry-item col-md-4">
						<div class="blog-masonry-item">
							<?php if(has_post_thumbnail()):?>
								<a href="<?php echo esc_url(get_permalink());?>">
									<div class="overlay-container">
									<div class="overlay overlay-blog-masonry-item"></div>
										<img src="<?php echo esc_url($thumb_url[0]);?>" alt="alt"/>
									</div>
								</a>
							<?php endif;?>
								<div class="blog-item-content">
									<div class="post-details">
										<p><?php echo trim($post_categories_realNames);?> / <?php echo get_the_date('M Y');?></p>
										<h4 class="text-normal"><a href="<?php echo esc_url(get_permalink());?>"><?php the_title();?></a></h4>
									</div>
									<a href="<?php echo esc_url(get_permalink());?>"><p><?php the_excerpt();?></p></a>
								</div>
						</div>
				</div>
			<?php endwhile; ?>	
		</div>
		<?php if($wp_query->max_num_pages != 1):?>	
			<div class="col-md-12">
				<div id="pagination1" class="text-center nav2">			
					<?php	previous_posts_link(wp_kses( __( '<span><i class="fa fa-long-arrow-left"></i> PREV.</span>','collective'),
															array('i'=> array('class'=>array()),'span'=>array())
													)); ?>
					<span> / </span>
					<?php 	next_posts_link(wp_kses( __( '<span>NEXT <i class="fa fa-long-arrow-right"></i></span>','collective'),
															array('i'=> array('class'=>array()),'span'=>array())
													)); ?>	
				</div>
				<?php wp_link_pages(); ?>
			</div>						
		<?php endif;?>
		</div>
		<?php if(is_active_sidebar('sidebar-1')):?>
			<div class="col-md-3">
				<?php  if ( !function_exists('dynamic_sidebar') ||  !dynamic_sidebar('sidebar-1') ) ?>
			</div>
		<?php endif;?>
	</div>
</div>		
<script>
jQuery(document).ready(function($) {
	+function($){
		 "use strict";

		$(window).on('load', function(){
			var $container = $('.blog-masonry').isotope({
				layoutMode: 'masonry',
				itemSelector: '.masonry-item'
			});
		});

	}(jQuery);
	//blogmasonry();
});
</script>	
<?php get_footer(); ?>