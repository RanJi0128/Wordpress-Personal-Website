<?php
global $post;
setup_postdata($post);?>
<?php 
	$container = get_field('container');

	$container_type = 'container';
	if($container=='stoned-container'){
		$container_type = 'stoned-container';
	}
?>
<?php	if( have_rows('gallery') ): ?>
	<div class="royal-slider-container" style="height: 70vh;">
		<div class="royal-slider" data-royal-slider data-royal-slider-options='{
			"keyboardNavEnabled": true,
			"imageScaleMode": "fill",
			"loop": true,
						"controlNavigation": "none",
			 		"transitionType": "fade",
			"arrowsNav": false,
			"autoScaleSlider":false,
					"autoPlay": {
	    		"enabled": true,
	    		"pauseOnHover": false,
	    		"delay": 8000    	},
	    			"autoHeight": false
			,"thumbs": {
	    		"spacing": 10,
	    		"arrowsAutoHide": true,
	    		"fitInViewport": false
	    	}
		}'>
			<?php while ( have_rows('gallery') ) : the_row();  ?>
				<div class="royal-slider-slide">
					<?php $image = wp_get_attachment_image_src(get_sub_field('image'),'full');?>
					<img class="rsImg" alt="alt" src="<?php echo esc_url($image[0]);?>" data-rsTmb=""/>
				</div>
			<?php endwhile; ?>
		</div>
		<nav class="side style-1">
			<div class="prev">
				<i class="fa fa-angle-left fa-vertical-center"></i>
			</div>
			<div class="next">
				<i class="fa fa-angle-right fa-vertical-center"></i>
			</div>
		</nav>
	</div>
<?php endif; ?>
<div class="single-portfolio-container">
	<div class="<?php echo esc_attr($container_type);?>">
		<div class="col-md-4 single-blog-details text-right">
			<?php if( have_rows('brief_items') ): ?>
			
					<h4 class="collective-title title-right"><?php the_field('brief_title');?></h4>
					<?php while ( have_rows('brief_items') ) : the_row();  ?>
							<div class="margin-bottom-lg">
								<p class="text-uppercase margin-bottom-xs"><?php echo get_sub_field('item_title');?></p>
								<h6 class="margin-none"><?php echo get_sub_field('item_description');?></h6>
							</div>
					<?php endwhile; ?>
			<?php endif; ?>
			
		</div>
		<div class="col-md-8">
			<h4 class="collective-title"><?php the_title();?></h4>
			<?php the_content();?>
			<ul class="list-inline margin-top-lg">
				<?php if(!get_field('disable_project_social_shares','options')):?>
					<li>
						<span class="share-text padding-right-md"><?php the_field('share_text','option');?></span>
					</li>
					<li>
						<ul class="post-shares">
							<?php addSocialShareButtons_projects(get_field('share_posts','options')) ?>
						</ul>
					</li>	
				<?php endif ; ?>
			</ul>
		</div>
	</div>
</div>
<?php
 $project_page = get_field('project_page','options');
 $project_page_link = '';
 if($project_page):
 	foreach ($project_page as $page) {
 		
 		$project_page_link = get_permalink($page );
 	}
 endif;
?>
<nav class="projects-nav">
	<div class="prev-project">
		<?php previous_post_link('%link',
								wp_kses( __( '<h4 class="text-uppercase">%title</h4><span>Previous Project</span>','collective'),
										array('h4'=> array('class'=>array()),'span'=>array())
								)); ?>
	</div>
	<div class="all-projects">
		<a href="<?php echo esc_url($project_page_link);?>">
			<i class="fa fa-th"></i>
		</a>
	</div>
	<div class="next-project text-right">
		<?php next_post_link('%link',
								wp_kses( __( '<h4 class="text-uppercase">%title</h4><span>Next Project</span>','collective'),
									array('h4'=> array('class'=>array()),'span'=>array())
							)); ?>
	</div>
</nav>