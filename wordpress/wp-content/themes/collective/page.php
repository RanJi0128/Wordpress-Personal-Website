<?php 
	get_header();
    setup_postdata($post);

	$full_width = '';
	$container_type = 'stoned-container';
if(function_exists('get_field')){ 

	if(get_field('full_width','options'))
		$full_width = 'no-padding';
	if(get_field('full_width'))
		$full_width = 'no-padding';

	if(get_field('page_background_image')){
		  echo '<style type="text/css">
			  		.stoned-container.main{
				    background-image: url('.get_field('page_background_image').');
				}
				</style>';
	}

	if(get_field('custom_css'))
	{
	  echo '<style type="text/css">';
	  echo get_field('custom_css');
	  echo '</style>';
	}

	$container = get_field('enable_default_container_1200px');
	
	if($container){
		$container_type = 'container';
	}
}	
?>
<?php if(function_exists('get_field')){  ?>
	<?php if(get_field('sub_header_content')||get_field('sub_header_background_image')): ?>
		<?php 
		$subheader_style = '';
		if(get_field('sub_header_background_image')){
			$subheader_style = 'background-image: url("'.get_field('sub_header_background_image').'");';
		} elseif(get_field('sub_header_background_color')){
			$subheader_style = 'background-color: '.get_field('sub_header_background_color').';';
		}
		?>
	<div class="subheader" style="<?php echo esc_attr($subheader_style);?>; padding: 40px 0;">
		<div class="stoned-container">
			<?php 
				echo get_field('sub_header_content');
			?>
		</div>
	</div>
	<?php endif;?>
<?php } ?>	
<div id="<?php echo esc_attr($post->post_name); ?>">
	<div class="main <?php echo esc_attr($container_type);?> <?php echo esc_attr($full_width);?>" >
		<!-- page heading -->
		<!-- page tittle -->
		<?php 
		if(function_exists('get_field')){ 
			if(!get_field('hide_page_titles','options')){?>
				<h3 class="page-title"><?php the_title(); ?></h3>
		<?php }
		} else { ?>
			<h3 class="page-title"><?php the_title(); ?></h3>
		<?php } ?>
		
		<?php the_content();?>
		<?php comments_template(); ?>
	</div>
</div>
<?php get_footer();?>