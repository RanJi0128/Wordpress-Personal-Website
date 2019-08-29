<div class="header-v4 <?php if(get_field('gap_header_and_content')): echo 'header-gap'; endif;?>">
	<div class="stoned-container" style="padding-top: 0; padding-bottom: 0;">
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
					 <?php $font = esc_attr(get_field('logo_font','options'));?>
					 <a href="<?php echo esc_url(get_site_url()); ?>"  class="logo" style="width: auto; color:<?php the_field('logo_color','options'); ?>!important; font-family: <?php echo esc_attr($font['font_name']); ?>; font-size: <?php the_field('text_font_size','options'); ?>px; " class="titleLogo"><?php the_field('text_logo','options');?></a>
				<?php } else { ?>
					<a href="<?php echo esc_url(get_site_url()); ?>" class="logo"><?php bloginfo('name');?></a>
				 <?php } ?>
			</div>
			<div class="menu-container">
				<?php wp_nav_menu(array( 'theme_location' => 'primary',  'container_class' => 'menu-menu-container'));?>
				<?php wp_nav_menu(array( 'theme_location' => 'secondary', 'container_class' => 'menu-menu-container'));?>
			</div>
			<?php $social_medias =  get_field('social_networks','options'); ?>
			<?php if($social_medias): ?>
			<div class="shares-container">
				<div class="pull-right circle-shares">
					<ul class="list-inline">
						<?php foreach($social_medias as $social_media):?>
							<li>
								<a href="<?php echo esc_url($social_media['url']);?>" target="_blank">
									<i class="fa fa <?php echo esc_attr($social_media['network']); ?> fa-vertical-center"></i>
								</a>
							</li>
						<?php endforeach;?>
					</ul>
				</div>
			</div>
			<?php endif;?>
		</div>
	</div>
</div>