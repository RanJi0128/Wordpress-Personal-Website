<?php
function stonedthemes_portfolio_style($item_offset,$overlay_offset,$overlay_color,$overlay_opacity,$text_overlay_offset,$title_color,$category_color,$border_offset){

	// portfolio options
	if($item_offset > -1 && $item_offset!=''){
		echo 
		"<style>".
			".portfolio-items .row{".
				"margin-left: -".($item_offset / 2)."px;".
				"margin-right: -" .($item_offset / 2). "px;".
				"margin-top: " .($item_offset / 2). "px;".
				"margin-bottom: " .($item_offset / 2). "px;".
			"}".
			".portfolio-item-container{".
				"padding-left: ".($item_offset / 2)."px;".
				"padding-right: " .($item_offset / 2). "px;".
			"}".
			".portfolio-item{".
				"margin-top: ".($item_offset / 2)."px;".
				"margin-bottom: ".($item_offset / 2)."px;".
			"}".
			".portfolio-filter-v2{".
				"margin-top: " .$item_offset. "px;".
			"}".
		"</style>";
	}

	if($overlay_offset !== ''){
		echo 
		"<style>".
			".portfolio-items .overlay{".
				"top: ".$overlay_offset."px;".
				"left: ".$overlay_offset."px;".
				"right: ".$overlay_offset."px;".
				"bottom: ".$overlay_offset."px;".
			"}".
		"</style>";
	}

	//$overlay_color = false /*"rgba(255, 255, 255, 0.5)"*/;
	if($overlay_color!=='')
	{
		 list($r, $g, $b) = sscanf($overlay_color, "#%02x%02x%02x");
		 $rgba =  "$r".","."$g".","."$b".",".($overlay_opacity/10);
		 $overlay_color = $rgba;
	}
	if($overlay_color !== ''){
		echo 
		"<style>".
			".portfolio-items .overlay{".
				"background: rgba(".$overlay_color.");".
			"}".
		"</style>";
		echo 
		"<style>".
			".horizontal-mosaic-container .overlay{".
				"background: rgba(".$overlay_color.");".
			"}".
		"</style>";
	}

	if($text_overlay_offset !== ''){
		echo 
		"<style>".
			".portfolio-items .overlay .overlay-text-container{".
				"top: ".$text_overlay_offset."px;".
				"left: ".$text_overlay_offset."px;".
				"right: ".$text_overlay_offset."px;".
				"bottom: ".$text_overlay_offset."px;".
			"}".
		"</style>";
	}

	if($title_color !== ''){
		echo 
		"<style>".
			".portfolio-item .overlay-container:hover .text h4{".
				"color: ".$title_color.";".
			"}".
			".overlay-text-container.text-decoration:before{".
				"border-color: ".$title_color." !important;".
			"}".
		"</style>";
	}

	if($category_color !== ''){
		echo 
		"<style>".
			".portfolio-item .overlay-container:hover .text h6{".
				"color: ".$category_color.";".
			"}".
		"</style>";
	}
	if($border_offset > -1){
		echo '<style>
				.overlay .bordered {
				    top: '.$border_offset.'px;
				    left: '.$border_offset.'px;
				    right: '.$border_offset.'px;
				    bottom: '.$border_offset.'px;
				}
			</style>';
	}
}

function stonedthemes_portfolio_filter_style($bakcground_color,$text_color,$decoration_color){

	echo '<style type="text/css">';
	/*------------------------------------------------------------------
	[filter customization]
	*/
	/*filter v1 background color*/
	if($bakcground_color != ''){
	 echo	'.portfolio-filter-v1{
			background-color: '.$bakcground_color.';
		}';
	}

	if($text_color != ''){
		/*filter v1 text color*/
		echo '.portfolio-filter-v1{
		    color: '.$text_color.';
		}';

		/*filter v2 text color*/
		echo '.portfolio-filter-v2 ul li{
		    color: '.$text_color.';
		}';
	}

	if($decoration_color!=''){
		echo '.portfolio-filter-v2 ul li.active, .guxhi{
			color: '.$decoration_color.';
		}';
	}
	echo '</style>';
}

function stonedthemes_portfolio_single_sytle($item_offset){
	echo "<style type='text/css'>".
	".single-portfolio-container .portfolio-images{".
		"margin-top: -" . ($item_offset / 2 ). "px;".
		"margin-bottom: -" . ($item_offset / 2 ). "px;".
		"margin-right: -" . ($item_offset / 2 ). "px;".
		"margin-left: -" . ($item_offset / 2 ). "px;".
	"}".
	".single-portfolio-container .portfolio-images .portfolio-image{".
		"margin-top: " . ($item_offset / 2 ). "px;".
		"margin-bottom: " . ($item_offset / 2 ). "px;".
		"padding-left: " . ($item_offset / 2 ). "px;".
		"padding-right: " . ($item_offset / 2 ). "px;".
	"}".
	"</style>";
}

function stonedthemes_branding(){
	echo '<style type="text/css">';

	if(get_field('brand_color','option')!=''){

		list($r, $g, $b) = sscanf(get_field('brand_color','options'), "#%02x%02x%02x");
		
		/*------------------------------------------------------------------
		[4.1 brand text color]
		*/
	 
		echo 'header .current-menu-item > a, .quote-container i, .oops{
			color: '.get_field('brand_color','options').';
		}';

		/*------------------------------------------------------------------
		[4.2 brand hover text color]
		*/
		echo '.header-v1 .menu > li:hover > a, .header-v2 .menu > li:hover > a, .header-v3 .menu > li:hover > a, .header-v5 .menu > li:hover > a, .header-v6 .menu > li:hover > a,
		.header-v1 .menu ul li:hover > a, .header-v2 .menu ul li:hover > a, .header-v3 .menu ul li:hover > a, .header-v5 .menu ul li:hover > a, .header-v6 .menu ul li:hover > a,
		header .circle-shares li a:hover,
		.owl-container nav.style-1 div:hover, .royal-slider-container nav.style-1 div:hover,
		.owl-container nav.style-2 div:hover, .royal-slider-container nav.style-1 div:hover,
		.owl-container nav.style-3 div:hover, .royal-slider-container nav.style-1 div:hover,
		.vertical-project:hover .text h1,
		.circle-shares li a:hover{
			color: '.get_field('brand_color','options').';
		}';

		/*------------------------------------------------------------------
		[4.3 brand background(overlay) color]
		*/
		echo '.portfolio-items .overlay,
		.horizontal-mosaic .overlay,
		.blog-item .overlay,
		.blog-masonry-item .overlay{
		    background-color: rgba('.$r.','.$g.','.$b.', 0.8);
		}';

		echo '.vc_progress_bar .vc_single_bar .vc_bar, header > div.responsive-header .responsive-menu{
			background-color: rgba('.$r.','.$g.','.$b.', 1);
		}';
	}	
	
	/*------------------------------------------------------------------
	[1.1 header background color]
	*/
	if(get_field('header_background_color','options')!=''){
		echo 'header{
			background: '.get_field('header_background_color','options').';
		}';
	}

	/*------------------------------------------------------------------
	[1.2 header divider color]
	*/
	if(get_field('header_divider_color','options')!=''){
		echo 'header{
			border-bottom: 1px solid '.get_field('header_divider_color','options').';
		}';
	}

	/*------------------------------------------------------------------
	[1.3 main menu items text color, header style-5 icon color]
	*/
	if(get_field('menu_text_color','options')!=''){
		echo '.header-v1 .menu, .header-v2 .menu, .header-v3 .menu, .header-v5 .menu, .header-v6 .menu{
				color: '.get_field('menu_text_color','options').';
		}';
	}

	/*------------------------------------------------------------------
	[1.4 main menu items hover text color]
	*/
	if(get_field('menu_hover_text_color','options')!=''){
		echo '.header-v1 .menu > li:hover > a, .header-v2 .menu > li:hover > a, .header-v3 .menu > li:hover > a, .header-v5 .menu > li:hover > a, .header-v6 .menu > li:hover > a{
			color: '.get_field('menu_hover_text_color','options').';
		}';
	}

	/*------------------------------------------------------------------
	[1.5 sub menu items text color]
	*/
	if(get_field('menu_sub_item_text_color','options')!=''){
		echo 	'.header-v1 .menu ul.sub-menu, .header-v2 .menu > li > ul.sub-menu,
				.header-v1 .menu ul.children, .header-v2 .menu > li > ul.children,
				.header-v1 .menu > li > ul.sub-menu, .header-v2 .menu > li > ul.sub-menu 
				.header-v1 .menu > li > ul.children, .header-v2 .menu > li > ul.children,
				.header-v3 .menu > li > ul.sub-menu, .header-v3 .menu-menu-container:first-of-type .menu > li > ul.sub-menu,
				.header-v5 ul.sub-menu, .header-v5 ul.children,
				.header-v6 ul.sub-menu, .header-v6 ul.children, .header-v6 .menu > li > ul.sub-menu, .header-v6 .menu > li > ul.children{
					color: '.get_field('menu_sub_item_text_color','options').';
				}';
	}

	/*------------------------------------------------------------------
	[1.6 sub menu items hover color]
	*/
	if(get_field('menu_sub_item_hover_text_color','options')!=''){
		echo 	'.header-v1 .menu ul li:hover > a, .header-v2 .menu ul li:hover > a, .header-v3 .menu ul li:hover > a, .header-v5 .menu ul li:hover > a, .header-v6 .menu ul li:hover > a{
			color: '.get_field('menu_sub_item_hover_text_color','options').';
		}';
	}

	/*------------------------------------------------------------------
	[1.7 sub menu items background color, header style v-5 backdrop color]
	*/
	if(get_field('menu_sub_item_background','options')!=''){
		echo '.header-v1 .menu ul.sub-menu, .header-v2 .menu ul.sub-menu,
			.header-v1 .menu ul.children, .header-v2 .menu ul.children,
			.header-v1 .menu > li > ul.sub-menu, .header-v2 .menu > li > ul.sub-menu 
			.header-v1 .menu > li > ul.children, .header-v2 .menu > li > ul.children,
			.header-v3 .menu .sub-menu, .header-v3 .menu ul.children,
			.header-v6 .menu ul.sub-menu, .header-v6 .menu ul.children{
				background-color: '.get_field('menu_sub_item_background','options').';
			}
			.header-v1 .menu > li > ul.sub-menu:after, .header-v2 .menu > li > ul.sub-menu:after,
			.header-v1 .menu > li > ul.children:after, .header-v2 .menu > li > ul.children:after,
			.header-v3 .menu > li > ul.sub-menu:after, .header-v3 .menu-menu-container:first-of-type .menu > li > ul.sub-menu:after,
			.header-v3 .menu > li > ul.children:after, .header-v3 .menu-menu-container:first-of-type .menu > li > ul.children:after,
			.header-v6 .menu > li > ul.sub-menu:after, .header-v6 .menu > li > ul.children:after{
				border-left: 10px solid rgba(0, 0, 0, 0);
				border-bottom: 10px solid '.get_field('menu_sub_item_background','options').';
				border-right: 10px solid rgba(0, 0, 0, 0);
			}

			.header-v1 .menu ul.sub-menu li > ul.sub-menu:after, .header-v1 .menu ul.sub-menu li > ul.children:after,
			.header-v6 .menu ul.sub-menu li > ul.sub-menu:after, .header-v6 .menu ul.sub-menu li > ul.children:after{
				border-top: 10px solid rgba(0, 0, 0, 0);
				border-right: 10px solid '.get_field('menu_sub_item_background','options').';
				border-bottom: 10px solid rgba(0, 0, 0, 0);
			}

			.header-v2 .menu ul.sub-menu li > ul.sub-menu:after, 
			.header-v2 .menu ul.sub-menu li > ul.children:after{
				border-top: 10px solid rgba(255, 0, 0, 0);
				border-left: 10px solid '.get_field('menu_sub_item_background','options').';
				border-bottom: 10px solid rgba(255, 0, 0, 0);
			}

			.header-v3 .menu > li > ul.sub-menu ul:after,
			.header-v3 .menu > li > ul.children ul:after{
				border-top: 10px solid rgba(255, 0, 0, 0);
			    border-right: 10px solid '.get_field('menu_sub_item_background','options').';
			    border-bottom: 10px solid rgba(255, 0, 0, 0);
			}

			.header-v3 .menu-menu-container:first-of-type .menu > li > ul.sub-menu ul:after,
			.header-v3 .menu-menu-container:first-of-type .menu > li > ul.children ul:after{
				border-top: 10px solid rgba(255, 0, 0, 0);
			    border-left: 10px solid '.get_field('menu_sub_item_background','options').';
			    border-bottom: 10px solid rgba(255, 0, 0, 0);
			}';
	}

	if(get_field('menu_v5_backdrop_color','options')!=''){

		 list($r, $g, $b) = sscanf(get_field('menu_v5_backdrop_color','options'), "#%02x%02x%02x");
			echo '.header-v5 .menu-icon > div{
					background-color: rgba('.$r.','.$g.','.$b.', 0.8);
				}';
	}

	/*------------------------------------------------------------------
	[1.8 sub menu items border color]
	*/
	if(get_field('menu_border_color','options')!=''){
		echo '.header-v1 .menu ul.sub-menu, .header-v2 .menu ul.sub-menu,
			.header-v1 .menu ul.children, .header-v2 .menu ul.children, 
			.header-v1 .menu > li > ul.sub-menu, .header-v2 .menu > li > ul.sub-menu
			.header-v1 .menu > li > ul.children, .header-v2 .menu > li > ul.children,
			.header-v3 .menu .sub-menu, .header-v3 .menu ul.children,
			.header-v6 .menu ul.sub-menu, .header-v6 .menu ul.children{
				border-color: '.get_field('menu_border_color','options').';
			}

			.header-v1 .menu > li > ul.sub-menu:before, .header-v2 .menu > li > ul.sub-menu:before,
			.header-v1 .menu > li > ul.children:before, .header-v2 .menu > li > ul.children:before,
			.header-v3 .menu > li > ul.sub-menu:before, .header-v3 .menu-menu-container:first-of-type .menu > li > ul.sub-menu:before,
			.header-v6 .menu > li > ul.sub-menu:before, .header-v6 .menu > li > ul.children:before{
				border-left: 10px solid rgba(0, 0, 0, 0);
				border-bottom: 10px solid '.get_field('menu_border_color','options').';
				border-right: 10px solid rgba(0, 0, 0, 0);
			}


			.header-v1 .menu ul.sub-menu li > ul.sub-menu:before, .header-v1 .menu ul.sub-menu li > ul.children:before,
			.header-v3 .menu > li > ul.sub-menu ul:before, .header-v3 .menu > li > ul.children ul:before,
			.header-v6 .menu ul.sub-menu li > ul.sub-menu:before, .header-v6 .menu ul.sub-menu li > ul.children:before{
				border-top: 10px solid rgba(0, 0, 0, 0);
				border-right: 10px solid '.get_field('menu_border_color','options').';
				border-bottom: 10px solid rgba(0, 0, 0, 0);
			}

			.header-v2 .menu ul.sub-menu li > ul.sub-menu:before,
			.header-v2 .menu ul.sub-menu li > ul.children:before,
			.header-v3 .menu-menu-container:first-of-type .menu > li > ul.sub-menu ul:before,
			.header-v3 .menu-menu-container:first-of-type .menu > li > ul.children ul:before{
			    border-top: 10px solid rgba(255, 0, 0, 0);
			    border-left: 10px solid '.get_field('menu_border_color','options').';
			    border-bottom: 10px solid rgba(255, 0, 0, 0);
			}';
	}

	/*------------------------------------------------------------------
	[1.9.1 header style v-5 icon color]
	*/
	if(get_field('menu_v5_icon_color','options')!=''){
		echo '.header-v5 .menu-icon > a{
			color: '.get_field('menu_v5_icon_color','options').';
		}';
	}

	/*------------------------------------------------------------------
	[1.9.2 header style v-5 icon hover color]
	*/
	if(get_field('menu_v5_icon_hover_color','options')!=''){
		echo '.header-v5 .menu-icon > a:hover{
			color: '.get_field('menu_v5_icon_hover_color','options').';
		}';
	}

	/*------------------------------------------------------------------
	[2. shares options]
	*/
	/*------------------------------------------------------------------
	[2.1 enable/disable shares]
	*/
	if(get_field('hide_social_networks','options')){
		echo 'header .shares-container .circle-shares{
			display: none;
		}
		.header-v6 .shares-container{
			padding: 0;
		}';
	}

	/*------------------------------------------------------------------
	[2.2 shares icon color and border color]
	*/
	if(get_field('social_icons_color','options')!=''){
		echo 'header .circle-shares li a{
			color: '.get_field('social_icons_color','options').';
		}';
	}

	if(get_field('social_border_icons_color','options')!=''){
		echo 'header .circle-shares li a{
			border-color: '.get_field('social_border_icons_color','options').';
		}';
	}
	/*------------------------------------------------------------------
	[2.3 shares icon color and border color on hover]
	*/
	if(get_field('social_hover_icons_color','options')!=''){
		echo 'header .circle-shares li a:hover{
			color: '.get_field('social_hover_icons_color','options').';
		}';
	}
	if(get_field('social_hover_border_icons_color','options')!=''){
		echo 'header .circle-shares li a:hover{
			border-color: '.get_field('social_hover_border_icons_color','options').';
		}';
	}

	/*------------------------------------------------------------------
	[3.2 text and paragraph options]
	*/
	/*------------------------------------------------------------------
	[3.2.1 text and paragraph color]
	*/
	if(get_field('text_paragraphs_color','options')!=''){
		echo 'p, html, body{
			color: '.get_field('text_paragraphs_color','options').';
		}';
	}

	/*------------------------------------------------------------------
	[3.2.2 text and paragraph font size]
	*/
	if(get_field('text_and_paragraphs_fontsize','options')!=''){
		echo 'p, html, body{
			font-size: '.get_field('text_and_paragraphs_fontsize','options').'px;
		}';
	}	

	/*------------------------------------------------------------------
	[3.2.3 text and paragraph font weight]
	*/
	if(get_field('text_and_paragraphs_fontweight','options')!='' && get_field('text_and_paragraphs_fontweight','options')!='none'){
		echo 'p, html, body{
			font-weight: '.get_field('text_and_paragraphs_fontweight','options').';
		}';
	}

	/*------------------------------------------------------------------
	[3.3 heading options]
	*/
	/*------------------------------------------------------------------
	[3.3.1 headings color]
	*/
	if(get_field('headings_color','options')!=''){
		echo 'h1, h2, h3, h4, h5, h6{
			color: '.get_field('headings_color','options').';
		}';
	}

	/*------------------------------------------------------------------
	[3.3.2 headings font weight]
	*/
	if(get_field('headings_fontweight','options')!='' && get_field('headings_fontweight','options')!='none'){
		echo 'h1, h2, h3, h4, h5, h6{
			font-weight: '.get_field('headings_fontweight','options').';
		}';
	}

	/*------------------------------------------------------------------
	[3.3.3 stoned heading color]
	*/
	if(get_field('stoned_headings_color','options')!=''){
		echo ' .collective-title, .single-portfolio-container .collective-title, h2.wpb_heading{
			color: '.get_field('stoned_headings_color','options').';
		}';
	}

	/*------------------------------------------------------------------
	[3.3.4 stoned heading font size]
	*/
	if(get_field('stoned_heading_fontsize','options')!=''){
		echo ' .collective-title, .single-portfolio-container .collective-title, h2.wpb_heading{
			font-size: '.get_field('stoned_heading_fontsize','options').'px;
		}';
	}

	/*------------------------------------------------------------------
	[3.3.5 stoned heading font weight]
	*/
	if(get_field('stoned_headings_fontweight','options')!='' && get_field('stoned_headings_fontweight','options')!='none'){
		echo ' .collective-title, .single-portfolio-container .collective-title, h2.wpb_heading{
			font-weight: '.get_field('stoned_headings_fontweight','options').';
		}';
	}	

	/*------------------------------------------------------------------
	[3.3.6 stoned heading disable bottom line]
	*/
	if(get_field('disable_stoned_headings_bottom_line','option')){
		echo ' .collective-title:after, .single-portfolio-container .collective-title:after, h2.wpb_heading:after{
			opacity: 0;
			padding: 0;
		}';
	}

	/* Loading Screen */
	if(get_field('loading_color','options'))
	{
		list($r, $g, $b) = sscanf(get_field('loading_color','options'), "#%02x%02x%02x");	
		$loading_color_opacity =  get_field('loading_color_opacity','options');
		echo '#loading-container{
					background-color: rgba('.$r.','.$g.','.$b.', '.($loading_color_opacity/10).');
				}';
	}

	/* Frame */
	if(get_field('enable_frame')){
		
		$frame_width = get_field('frame_width');
		$frame_color = get_field('frame_color');
	
		
		echo 'body.framed-body{
				width: calc(100% - '.(2*$frame_width).'px);
				margin: 0px auto;
				box-sizing: content-box;
				border: '.esc_attr($frame_width).'px solid '.esc_attr($frame_color).';
			}';
		
	} elseif(get_field('enable_frame','option')){
		
		$frame_width = get_field('frame_width','option');
		$frame_color = get_field('frame_color','option');
		
		
		echo 'body.framed-body{
				width: calc(100% - '.(2*$frame_width).'px);
				margin: 0px auto;
				box-sizing: content-box;
				border: '.esc_attr($frame_width).'px solid '.esc_attr($frame_color).';
			}';
		
	}

	/* Page Header*/
	if(get_field('header_text_color')){
			
			echo '.header-v1 .menu > li, .header-v1 .circle-shares li a, .header-v1 .circle-shares li a:hover,
					.header-v2 .menu > li,
					.header-v3 .menu > li,
					.header-v4 .menu, .header-v4 .circle-shares li a, .header-v4 .circle-shares li a:hover,
					.header-v5 .menu-icon > a,
					.header-v6 .menu > li, .header-v6 .circle-shares li a, .header-v6 .circle-shares li a:hover,
					header > div.responsive-header .responsive-social-shares,
					header .minicart ul > li .cart-info span,
					header .minicart > ul > li{
					color: '.get_field('header_text_color').';
				}

				.um_menuTrigger .um_menuAnimatedIcon, .navbar-toggle .um_menuAnimatedIcon, .um_menuTrigger .um_menuAnimatedIcon::before, .um_menuTrigger .um_menuAnimatedIcon::after, .navbar-toggle .um_menuAnimatedIcon::before, .navbar-toggle .um_menuAnimatedIcon::after {
					background-color: '.get_field('header_text_color').';
				}';
			
	}

	/* Footer */
	if(get_field('footer_background_color','option')){
			
			echo 'footer {
			    background: '.get_field('footer_background_color','option').';
			}';
	}
	if(get_field('footer_text_color','option')){
			
			echo 'footer {
			    color: '.get_field('footer_text_color','option').';
			}';
	}

	/* Page Footer */
	if(get_field('footer_text_color')){
			
			echo '@media(min-width: 768px){
					footer{
						color: '.get_field('footer_text_color').';
					}
				}';
			
	}

	if(get_field('disable_header_divider')){
		echo 'header{
			border:none;
		}';
	}

	echo '</style>';

}
?>