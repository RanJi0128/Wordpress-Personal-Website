<?php get_header(); ?>
<?php 
	$container = '';
	if(function_exists('get_field')){
		$container = get_field('container');	
	}
	

	$container_type = 'container';
	if($container=='stoned-container'){
		$container_type = 'stoned-container';
	}
?>
<div class="single-blog-post-media" <?php post_class(); ?> >
	<!-- <div>optional -->
	<!-- Gallery Post-->
	<?php if(has_post_format('gallery')) {
		if(function_exists('get_field')){

			$images = get_field('gallery');

			$height = get_field('height');
			$width  = get_field('width');
			$max_width  = get_field('max_width');
		}
		if($images):?>

			<div class="owl-container">
				<div class="owl-carousel" data-owl-carousel data-owl-carousel-options='{"items": 1, "animateOut": "fadeOut", "loop": true}'>
				<?php
		 			foreach( $images as $image ): ?>
		 				<div>
		 					<!-- <div class="container-16-9">
								<div class="content"> -->
									<img src="<?php echo esc_url($image['url']); ?>" alt="alt"/>
								<!-- </div>
							</div> -->
		 				</div>
					<?php endforeach; ?>
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

	<!-- Video Post-->
	<?php	}  elseif(has_post_format('video')||has_post_format('audio')) { 
		if(function_exists('get_field')){
			if(get_field('video')):?>
				<div class="embed-container">
					<div class="container-16-9">
						<div class="content">
							<?php the_field('video'); ?>
						</div>
					</div>
				</div>
	<?php 	endif; 
		}
	?>

	<!-- Quote Post-->
	<?php	} elseif(has_post_format('quote')) { 
			if(function_exists('get_field')){
				?>
				<div class="container-16-9">
					<div class="content text-center">
						<div class="quote-container">
							<div class="vertical-center2-container">
								<div class="vertical-center2-content padding-lg">
									<div class="margin-bottom-lg">
										<i class="fa fa-3x fa-quote-left"></i>
									</div>
									<?php the_field('quote'); ?>
									<h4 class="margin-top-lg"><?php the_field('quote_author');?></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
		<?php } ?>
	<!-- Standard Post-->			
	<?php   } else { ?>	
				<?php 	if(function_exists('get_field')){
							$height = get_field('height');
							$width  = get_field('width');
							$max_width  = get_field('max_width'); 
						}
				?>
				<?php 	if(has_post_thumbnail()): ?>	
						<div class="post-featured-image">
							<img src="<?php the_post_thumbnail_url(); ?>" alt="alt" />
						</div>
				<?php 	endif; ?>	
	<?php } ?>
	<!-- </div>container -->
</div>
<div class="<?php echo esc_attr($container_type);?>">
	<div class="row margin-bottom-lg">
		<div class="col-md-offset-2 col-md-10">
			<div class="single-blog-post-title">
				<h3 class="text-uppercase margin-none"><?php the_title(); ?></h3>
			</div>
		</div>
		<div class="col-md-2 text-right single-blog-details">
			<div class="margin-bottom-lg">
				<p class="text-uppercase margin-bottom-xs"><?php esc_html_e('category','collective');?></p>
				<?php
					$post_categories  = get_the_category();
					$post_categories_realNames = '';
					if($post_categories){
						foreach ($post_categories as $post_cat){
							$post_categories_realNames .= $post_cat->name.' ';
						}
					}
				?>
				<h6 class="margin-none"><?php echo trim($post_categories_realNames);?></h6>
			</div>
			<div class="margin-bottom-lg">
				<p class="text-uppercase margin-bottom-xs"><?php esc_html_e('author','collective');?></p>
				<h6 class="margin-none"><?php echo get_the_author();?></h6>
			</div>
			<?php 	
				$posttags = get_the_tags();
				if ($posttags) : 
			?>
					<div class="margin-bottom-lg">
						<p class="text-uppercase margin-bottom-xs"><?php esc_html_e('tags','collective');?></p>
						<h6 class="margin-none">
							<?php  $count_tags = count($posttags);  $counter = 0;
							  foreach($posttags as $tag) {
							  	$counter++;
								echo '<a href="'.get_tag_link($tag->term_id).'">'.$tag->name .'</a> '; 
								if($counter!=$count_tags)	echo ',';
							  }
							?>
						</h6>
					</div>
			<?php endif;?>
			<?php if(function_exists('get_field')){ ?>
				<?php if(!get_field('disable_blog_social_shares','options')):?>
						<div class="single-shares">
							<p>
								<span class="share-text"><?php the_field('share_text','option');?></span>
							</p>
							<ul class="post-shares">
								<?php addSocialShareButtons_blog(get_field('share_posts','options')) ?>
							</ul>
						</div>
				<?php endif ; ?>	
			<?php } ?>	
		</div>
		<div class="col-md-8">
			<div class="single-blog-content">
					<?php  setup_postdata($post);?>
					<?php  the_content();?>
					<?php  wp_link_pages();?>	
					<?php  wp_reset_postdata();?>
			</div>
			<?php comments_template(); ?>
		</div>
		<div class="col-md-2">
				<?php  if ( !function_exists('dynamic_sidebar') ||  !dynamic_sidebar('sidebar-1') ) ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>