<?php 
	wp_reset_postdata();

	$disable_footer = false;
	$sidebar = 'sidebar-2';
	if(function_exists('get_field')){ 
		if(get_field('disable_footer',$post->ID))
			$disable_footer = true;
		
		if(get_field('footer_sidebar',$post->ID))
			$sidebar = get_field('footer_sidebar',$post->ID);
	}	
?>
<?php if(!$disable_footer){?>
	<?php if(is_active_sidebar($sidebar)):?>
		<footer>
			<div class="stoned-container">
				<div class="row">
					<?php  if ( !function_exists('dynamic_sidebar') ||  !dynamic_sidebar($sidebar) ) ?>
				</div>
			</div>
		</footer>	
	<?php endif;?>
<?php } ?>
<a id="to-top"><i class="fa fa-angle-up"></i></a>
<?php wp_footer(); ?>
</body>
</html>