<div class="header-v1 <?php if(function_exists('get_field')){ if(get_field('gap_header_and_content')): echo 'header-gap'; endif;}?>">
	<div class="header-container">
		<div class="logo-container">
			<?php if(function_exists('get_field')){ ?>
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
					<h1><a href="<?php echo esc_url(get_site_url()); ?>" class="logo"><?php bloginfo('name');?></a></h1>
				 <?php } ?>
			<?php } else { ?>
					<h1><a href="<?php echo esc_url(get_site_url()); ?>" class="logo"><?php bloginfo('name');?></a></h1>
			<?php } ?>		 
		</div>
		<div class="menu-container text-center">
			<?php wp_nav_menu(array( 'theme_location' => 'primary',  'container_class' => 'menu-menu-container'));?>
		</div>
		
		<div class="shares-container">
			<?php if(function_exists('get_field')){ ?>
			<?php $social_medias =  get_field('social_networks','options'); ?>
		
				<?php if($social_medias): ?>
				<div class="pull-right circle-shares">
					<ul class="list-unstyled list-inline margin-none">
						<li class="shares">
							<a href="">
								<i class="fa fa-share-alt fa-vertical-center"></i>
							</a>
							<ul class="list-unstyled">
								<?php foreach($social_medias as $social_media):?>
								<li>
									<a href="<?php echo esc_url($social_media['url']);?>"  target="_blank">
										<i class="fa fa <?php echo esc_attr($social_media['network']); ?>"></i>
									</a>
								</li>
								<?php endforeach;?>
							</ul>
						</li>
					</ul>
				</div>
				<?php endif;?>
			<?php } ?>
			<?php if ( class_exists( 'WooCommerce' ) ) { ?>
				<div class="minicart pull-right">
					<ul class="list-unstyled">
						<li><a href="<?php echo WC()->cart->get_cart_url(); ?>" class="cart-info"><span><?php echo WC()->cart->get_cart_total(); ?></span> - <?php echo sprintf (_n( '%d item', '%d items', WC()->cart->get_cart_contents_count(),'collective' ), WC()->cart->get_cart_contents_count() ); ?></a></li>
						<li><a href="<?php echo esc_url(wp_login_url()); ?>" class="sign"><?php esc_html_e( 'Sign In' ,'collective'); ?></a></li>
					</ul>
					<div class="minicart-container">
						<a href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php esc_html_e( 'View your shopping cart' ,'collective'); ?>" class="cart-button">
							<i class="fa fa-shopping-cart"></i>
							<span class="notification"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
						</a>
						<div class="minicart-items">
							<?php st_mini_cart();?>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>