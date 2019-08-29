<div class="header-v5 <?php if(get_field('gap_header_and_content')): echo 'header-gap'; endif;?>">
	<div class="header-container">
		<div class="logo-container">
			<?php if(get_field("logo_type","options")=="image"||get_field('page_logo')){ ?>
			<?php $logo = esc_attr(get_field('logo','options'));?>
			<?php if(get_field('page_logo')) $logo = get_field('page_logo');?>
				<?php $image = wp_get_attachment_image_src($logo,'full'); ?>
				<a href="<?php echo esc_url(get_site_url()); ?>" class="logo">
					<img src="<?php echo esc_url($image[0]);?>" alt="logo">
				</a>
				<?php } else if (get_field("logo_type","options")=="text"){ ?>
					 <?php $font = get_field('logo_font','options');?>
					 <a href="<?php echo esc_url(get_site_url()); ?>"  class="logo" style="width: auto; color:<?php the_field('logo_color','options'); ?>!important; font-family: <?php echo esc_attr($font['font_name']); ?>; font-size: <?php the_field('text_font_size','options'); ?>px; " class="titleLogo"><?php the_field('text_logo','options');?></a>
				<?php } else { ?>
					<a href="<?php echo esc_url(get_site_url()); ?>" class="logo"><?php bloginfo('name');?></a>
				 <?php } ?>
		</div>
		<div class="slogan-container text-center">
			<?php if(get_field('slogan_title','options')): ?>
				<h4 class="text-uppercase"><?php echo esc_attr(get_field('slogan_title','options'));?></h4>
			<?php endif; ?>

			<?php if(get_field('slogan_subtitle','options')): ?>
				<p class="subtitle"><?php echo esc_attr(get_field('slogan_subtitle','options'));?></p>
			<?php endif; ?>
		</div>
		<div class="menu-container text-right">
			<ul class="list-unstyled list-inline margin-none">
				<li class="menu-icon">
					<a class="um_menuTrigger">
                    	<span class="um_menuAnimatedIcon"></span>
                	</a>
					<?php wp_nav_menu(array( 'theme_location' => 'primary', 'container_class' => 'menu-menu-container'));?>
				</li>
			</ul>
		</div>
	</div>
</div>