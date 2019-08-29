<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class( ); ?> <?php if(function_exists('get_field')){ if(get_field('enable_onepage','options')):?>id="one-page"<?php endif; }?>>
	
	<?php
		
		$gap_header_and_content = '';
		if(function_exists('get_field')){
			stonedthemes_branding();

			$site_font =  get_field('web_site_font','options');	
			if($site_font){
				echo '<style type="text/css">';
				echo 'body{font-family:'.esc_attr(str_replace("+"," ",$site_font["font_name"])).' !important;';
				echo '</style>';
			}

			if(get_field('custom_css','options'))
			{
			  echo '<style type="text/css">';
			  echo get_field('custom_css','options');
			  echo '</style>';
			}
			if(get_field('custom_js','options'))
			{
				echo '<script>';
				echo get_field('custom_js','options');
				echo '</script>';
			}  
			
			if(get_field('gap_header_and_content'))
			{
				$gap_header_and_content = 'header-gap';
			}
		}	

		if(is_search()){
			$gap_header_and_content = 'header-gap';
		}
		
		$loading_image1 = get_template_directory_uri()."/admin/loading/loading_icon_collective1.png";
		$loading_image2 = get_template_directory_uri()."/admin/loading/loading_icon_collective2.png";
		if(function_exists('get_field')){	

			if(get_field('loading_image1','options'))
				$loading_image1 = get_field('loading_image1','options');
			if(get_field('loading_image2','options'))
				$loading_image2 = get_field('loading_image2','options');
		}	
	?>
	<div id="loading-container">
		<div class="vertical-center2-container">
			<div class="vertical-center2-content text-center">
				<div class="loading-logo-container">
					<img src="<?php echo esc_attr($loading_image1);?>" alt="loading1">
					<div id="current-loading" class="current-loading-status">
						<img src="<?php echo esc_attr($loading_image2);?>" alt="loading2">
					</div>
				</div>
			</div>
		</div>
	</div>
	<header class="<?php echo esc_attr($gap_header_and_content );?>">
		<div class="stoned-container">
			<div class="row">
				<div class="col-md-12">
					<?php 
						if(function_exists('get_field')){
							$header_version = get_field('header_type','options'); 
						} else {
							$header_version = 'v1'; 
						}

						if($header_version == 'v1'||$header_version ==''){
							get_template_part('headers/header', '1');
						}
						else if($header_version == 'v2'){
							get_template_part('headers/header', '2');
						}
						else if($header_version == 'v3'){
							get_template_part('headers/header', '3');
						}
						else if($header_version == 'v4'){
							get_template_part('headers/header', '4');
						}
						else if($header_version == 'v5'){
							get_template_part('headers/header', '5');
						}
						else if($header_version == 'v6'){
							get_template_part('headers/header', '6');
						}
					?>	
				</div>
			</div>
		</div>
		<div class="responsive-header">
			<div class="responsive-logo text-center">
				<?php if(function_exists('get_field')){ ?>
					<?php if(get_field("logo_type","options")=="image"||get_field('page_logo')){ ?>
						<?php
							$logo = esc_attr(get_field('logo','options'));
						
							if(get_field('logo_mobile','options'))
								$logo = esc_attr(get_field('logo_mobile','options'));?>

						<?php $image = wp_get_attachment_image_src($logo,'full'); ?>
						<a href="<?php echo esc_url(get_site_url()); ?>" class="logo">
							<img src="<?php echo esc_url($image[0]);?>" alt="logo">
						</a>
					<?php } else if (get_field("logo_type","options")=="text"){ ?>
						 <?php $font = esc_attr(get_field('logo_font','options'));?>
						 <a href="<?php echo esc_url(get_site_url()); ?>"  class="logo" style="width: auto; color:<?php the_field('logo_color','options'); ?>!important; font-family: <?php echo esc_attr($font['font_name']); ?>; font-size: <?php the_field('text_font_size','options'); ?>px; " class="titleLogo"><?php the_field('text_logo','options');?></a>
					<?php } else { ?>
						<h1><a href="<?php echo esc_url(get_site_url()); ?>" class="logo"><?php bloginfo('name');?></a></h1>
					 <?php } ?>
				<?php } else { ?>
						<h1><a href="<?php echo esc_url(get_site_url()); ?>" class="logo"><?php bloginfo('name');?></a></h1>
				<?php } ?>	 
			</div>
			<div class="responsive-menu text-center">
				<a href="#" class="responsive-menu-btn">
					<i class="fa fa-bars"></i>
				</a>
				<?php if ( class_exists( 'WooCommerce' ) ) { ?>
				<a href="<?php echo WC()->cart->get_cart_url(); ?>">
					<i class="fa fa-shopping-cart"></i>
				</a>
				<?php } ?>
				
					<div class="responsive-social-shares text-center">
						<?php if(function_exists('get_field')){ ?>
							<?php $social_medias =  get_field('social_networks','options'); ?>
							<?php if($social_medias): ?>
								<?php foreach($social_medias as $social_media):?>
									<a href="<?php echo esc_url($social_media['url']);?>"  target="_blank">
										<i class="fa fa-vertical-center <?php echo esc_attr($social_media['network']); ?>"></i>
									</a>
								<?php endforeach;?>
							<?php endif;?>
						<?php } ?>	
					</div>
				
				<?php if($header_version == 'v3'):?>
						<ul class="menu">
							<?php wp_nav_menu(array( 'theme_location' => 'primary', 'items_wrap' => '%3$s', 'container_class' => 'menu-menu-container'));?>
							<?php wp_nav_menu(array( 'theme_location' => 'secondary', 'items_wrap' => '%3$s', 'container_class' => 'menu-menu-container'));?>
						</ul>
				<?php else : ?>
					<?php wp_nav_menu(array( 'theme_location' => 'primary', 'container_class' => 'menu-menu-container'));?>
				<?php endif;?>
			</div>
		</div>
	</header>