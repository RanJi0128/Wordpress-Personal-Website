<?php get_header(); ?>
<div class="fit-to-screen not-found-page">
	<div class="vertical-center2-container text-center">
		<div class="vertical-center2-content">
			<?php if(function_exists('get_field')):?>
				<p class="error-text"><?php the_field('404_title','options');?></p>
				<p class="oops"><?php the_field('404_oops','options');?></p>
				<div class="clearfix"></div>
				<p class="error-description margin-top-lg"><?php the_field('404_text','options');?></p>
				<p class="error-description"><a href="<?php echo esc_url(home_url('/'));?>"><?php the_field('back_to_home','options');?></a></p>
			<?php else: ?>
				<p class="error-text"><?php echo esc_html__('404','collective');?></p>
				<p class="oops"><?php echo esc_html__('Oops','collective');?></p>
				<div class="clearfix"></div>
				<p class="error-description margin-top-lg"><?php echo esc_html__('The page you requested doesn\’t exist.','collective');?></p>
				<p class="error-description"><a href="<?php echo esc_url(home_url('/'));?>"><?php echo esc_html__('Go back to homepage','collective');?></a></p>
			<?php endif;?>
		</div>
	</div>
</div>
<?php get_footer(); ?>