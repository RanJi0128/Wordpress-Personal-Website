<?php
global $post;
setup_postdata($post);?>
<?php 

$item_offset = get_field('gallery_padding','option');

if(get_field('gallery_padding')!='')
	$item_offset = get_field('gallery_padding');
elseif($item_offset=='')
	$item_offset = 15;

stonedthemes_portfolio_single_sytle($item_offset);

?>
<?php 
	$container = get_field('container');

	$container_type = 'container';
	if($container=='stoned-container'){
		$container_type = 'stoned-container';
	}
?>

<?php $content_aligment = get_field('content_aligment')?get_field('content_aligment'):'right';?>
<?php $project_type = get_field('project_type',$post->ID); ?>
<div class="single-portfolio-container" id="<?php if($content_aligment=='left'){echo 'left-side';}else{echo 'right-side';} ?>">
	<div class="<?php echo esc_attr($container_type);?>">
		<div class="col-md-4<?php if($content_aligment=='right'){ echo " col-md-push-8";} ?>">
			<h4 class="collective-title"><?php the_title();?></h4>
			<?php the_content();?>
	
			<?php if( have_rows('brief_items') ): ?>
				<div class="margin-top-lg">
					<h4 class="collective-title"><?php the_field('brief_title');?></h4>
					<?php	
						while ( have_rows('brief_items') ) : the_row();  ?>
							<div class="margin-bottom-lg">
								<p class="text-uppercase margin-bottom-xs"><?php echo get_sub_field('item_title');?></p>
								<h6 class="margin-none"><?php echo get_sub_field('item_description');?></h6>
							</div>
						<?php
							endwhile;
						?>
				</div>
			<?php endif; ?>
			<?php if(!get_field('disable_project_social_shares','options')):?>
				<p class="margin-bottom-md">
					<span class="share-text"><?php the_field('share_text','option');?></span>
				</p>
				<ul class="post-shares">
					<?php addSocialShareButtons_projects(get_field('share_posts','options')) ?>
				</ul>
			<?php endif ; ?>
		</div>
		<?php $image_preload = get_field('image_preload','options'); ?>

		<div class="col-md-8<?php if($content_aligment=='right'){ echo " col-md-pull-4";} ?>">
			<div class="row portfolio-images">
				<?php   if( $project_type=='gallery'){ ?>	
				<?php while ( have_rows('gallery') ) : the_row();  ?>
					<div class="col-md-<?php echo esc_attr(get_sub_field('item_size'));?> portfolio-image">
						<?php $image = wp_get_attachment_image_src(get_sub_field('image'),'stonedthemes_single');?>
						<?php $small_image_url = wp_get_attachment_image_src( get_sub_field('image'), 'stonedthemes_blur'); ?>
						<?php
							$image_alt = '';
							$disable_lightbox = '';
							if (get_field('show_image_alt','option')) :
							 	$image_alt = get_post_meta( get_sub_field('image'), '_wp_attachment_image_alt', true);
							endif;

							if (get_field('disable_lightbox','option')) :
							 	$disable_lightbox = ' disable-lightbox';
							endif;
							?>
						<?php //print_r($image);?>
						<?php if($image_preload==''||$image_preload=='None'): ?>
							<a href="<?php echo esc_url($image[0]);?>" class="image-link<?php echo esc_html($disable_lightbox); ?>">
								<span style="padding-bottom: <?php echo esc_attr(($image[2] * 100) / $image[1]); ?>%; height: 0; display: block;">
									<img alt="<?php  echo esc_attr($image_alt); ?>" width="<?php echo esc_attr($image[1]);?>" height="<?php echo esc_attr($image[2]);?>" src="<?php echo esc_url($image[0]);?>" data-original="<?php echo esc_url($image[0]);?>"/>
								</span>	
							</a>
						<?php elseif($image_preload=='Lazy-Load'): ?>
							<a href="<?php echo esc_url($image[0]);?>" class="image-link<?php echo esc_html($disable_lightbox); ?>">
								<span class="lazy-container" style="padding-bottom: <?php echo esc_attr(($image[2] * 100) / $image[1]); ?>%; height: 0;">
									<img alt="<?php  echo esc_attr($image_alt); ?>" class="lazy" alt="alt" width="<?php echo esc_attr($image[1]);?>" height="<?php echo esc_attr($image[2]);?>" data-original="<?php echo esc_url($image[0]);?>"/>
								</span>
							</a>
						<?php elseif($image_preload=='Blur-Preload'): ?>
							<a href="<?php echo esc_url($image[0]);?>" class="image-link<?php echo esc_html($disable_lightbox); ?>">
								<span class="blur-container" style="padding-bottom: <?php echo esc_attr(($image[2] * 100) / $image[1]); ?>%; height: 0;">
									<img alt="<?php echo esc_attr($image_alt); ?>" class="preload" alt="alt" src="<?php echo esc_url($small_image_url[0]);?>" data-original="<?php echo esc_url($image[0]);?>"/>
								</span>
							</a>
						<?php endif;?>
						
					</div>
				<?php endwhile;?>
				<?php } else { ?>
					<div class="embed-container">
						<div class="container-16-9">
							<div class="content">
								<?php the_field('video'); ?>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
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
<div class="modal fade" id="sth-lightbox" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
            	<div class="modal-carousel-header text-center">
    				<div class="slider-number">
    					<div class="slide-positions">
    						<span class="current-slide">01</span>
    						<span class="all-slides">15</span>
    					</div>
    				</div>
    				<div class="slide-title">
	    				<h4 class="text-uppercase"><?php the_title();?></h4>
	    				<p>
    						<?php $term_list = wp_get_post_terms($post->ID, 'projects_category', array("fields" => "names"));
		    				foreach ($term_list as $term){
		    						echo esc_html($term).' / ';
		    				}?> <?php the_date('d M Y'); ?>	
	    				</p>
    				</div>
    				<div class="close-modal">
    					<div class="close-lightbox"></div>
    				</div>
            	</div>
                <div class="modal-carousel">
                	<div class="vertical-center2-container">
                		<div class="vertical-center2-content text-center"></div>
                	</div>
                	<div class="owl-container">
	                    <div class="owl-carousel">
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
                </div>
               
                <div class="modal-carousel-footer">
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
            	</div>
            </div>
        </div>
    </div>
</div>