<?php

namespace Gutenberg_Courses\Example_Blocks;

add_action( 'enqueue_block_editor_assets', __NAMESPACE__ . '\enqueue_block_editor_assets' );
/**
 * Enqueue block editor only JavaScript and CSS.
 */
function enqueue_block_editor_assets() {
	// Make paths variables so we don't write em twice ;)
	$block_path = '/assets/js/editor.blocks.js';
	$style_path = '/assets/css/blocks.editor.css';
	// Enqueue the bundled block JS file
	wp_enqueue_script(
		'jsforwp-blocks-js',
		_get_plugin_url() . $block_path,
		[ 'wp-i18n', 'wp-element', 'wp-blocks', 'wp-components', 'wp-editor' ],
		filemtime( _get_plugin_directory() . $block_path )
	);

	if(class_exists("\RevSlider")){
		$slider = new \RevSlider();
		$arrSliders = $slider->getArrSliders();
		$sliderlist = array();
		foreach($arrSliders as $sliderony){
			$sliderlist[] = array('value' => $sliderony->getAlias(), 'label' =>  $sliderony->getTitle(), 'type' => $sliderony->getParam('source_type') );
		}
	}
	else $sliderlist = array('value' => '' , 'label' => __('No Sliders available','themepunchblocks'));

	if(shortcode_exists("ess_grid")){
		global $wpdb;
		global $table_prefix;
		$wpdb->tablename = $table_prefix . 'eg_grids';
		
		$grids = $wpdb->get_results( 
			"
			SELECT handle,name 
			FROM $wpdb->tablename
			"
		);
		
		$gridlist = array();
		if(is_array($grids)){
			foreach ( $grids as $grid ) 
			{
				$gridlist[$grid->handle] = $grid->name;
			}
		}
		else {
			$gridlist[] = __('No Grid available','themepunch');
		}
			
	}	
	else {
		$gridlist[] = __('No Grid available','themepunch');
	}

	wp_localize_script(
		'jsforwp-blocks-js',
		'themepunch_blocks',
		array(
			'sliderlist' => $sliderlist,
			'gridlist' =>$gridlist
		)
	);

	// Enqueue optional editor only styles
	wp_enqueue_style(
		'jsforwp-blocks-editor-css',
		_get_plugin_url() . $style_path,
		[ 'wp-blocks' ],
		filemtime( _get_plugin_directory() . $style_path )
	);
	wp_add_inline_style( 'jsforwp-blocks-editor-css', tpc_customizer_colors() );
}

add_action( 'enqueue_block_assets', __NAMESPACE__ . '\enqueue_assets' );
/**
 * Enqueue front end and editor JavaScript and CSS assets.
 */
function enqueue_assets() {
	$style_path = '/assets/css/blocks.style.css';
	wp_enqueue_style(
		'jsforwp-blocks',
		_get_plugin_url() . $style_path,
		[ 'wp-blocks' ],
		filemtime( _get_plugin_directory() . $style_path )
	);
	wp_add_inline_style( 'jsforwp-blocks', tpc_customizer_colors() );
}

/*add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_frontend_assets' );
function enqueue_frontend_assets() {

	// If in the backend, bail out.
	if ( is_admin() ) {
		return;
	}

	$block_path = '/assets/js/frontend.blocks.js';
	wp_enqueue_script(
		'jsforwp-blocks-frontend',
		_get_plugin_url() . $block_path,
		['jQuery'],
		filemtime( _get_plugin_directory() . $block_path )
	);

	
}
*/

function tpc_tabs_add_frontend_assets() {
	$block_path = '/blocks/tpc-tabs/front.js';
	wp_enqueue_script(
		'tpc-tabs-front-script',
		_get_plugin_url() . $block_path,
		array( 'jquery' ),
		filemtime( _get_plugin_directory() . $block_path )
	);
}

add_action( 'wp_enqueue_scripts',  __NAMESPACE__ . '\tpc_tabs_add_frontend_assets' );

/**
 * Add custom colors to Gutenberg.
 */
function tpc_customizer_colors() {
	
	// Retrieve the colors from the Customizer
	$accent = get_theme_mod( 'tpc_blocks_accent_color', '#5e35b1' );
	$accent_font = get_theme_mod( 'tpc_blocks_accent_color_font', '#fff' );
	$support1 = get_theme_mod( 'tpc_blocks_supporting_color_1', '#d9dadb' );
	$support1_font = get_theme_mod( 'tpc_blocks_supporting_color_1_font', '#5b5c5e' );
	
	// Build Custom CSS from Customizer 
	$css = '
		h2.tpc-headline, 
		h3.tpc-contentheadline, 
		h2.wp-block-themepunchblocks-tpcheadline, 
		h3.wp-block-themepunchblocks-tpcheadline  { border-left: 10px solid ' . esc_attr( $accent ) . '; }

		h2.tpc-headline em, 
		h3.tpc-contentheadline em , 
		h4.tpc-caption em , 
		h2.wp-block-themepunchblocks-tpcheadline em , 
		h3.wp-block-themepunchblocks-tpcheadline, 
		h4.wp-block-themepunchblocks-tpcheadline em { color: ' . esc_attr( $accent ) . '; }
		
		.tpc-related ul li a,
		.tpc-related ul li a:visited,
		.tpc-related ul li a:hover { color: ' . esc_attr( $accent ) . ';}

		.tpc-related ul li:first-child,
		button.tpc-btn,
		button.tpc-btn:focus,
		.wp-block-themepunchblocks-tpc-tabs-tab-title-wrap.active .wp-block-themepunchblocks-tpc-tabs-tab-title {background: ' . esc_attr( $accent ) . '}
		
		button.tpc-btn,
		button.tpc-btn:focus,
		.tpc-related ul li:first-child,
		.wp-block-themepunchblocks-tpc-tabs-tab-title-wrap.active .wp-block-themepunchblocks-tpc-tabs-tab-title { color: ' . esc_attr( $accent_font ) . '!important; }

		h4.tpc-caption, 
		h4.wp-block-themepunchblocks-tpcheadline, 
		.tpc-contents ol {border-left: 10px solid ' . esc_attr( $support1 ) . ';}

		.wp-block-themepunchblocks-tpc-tabs { border-top: 3px solid ' . esc_attr( $support1 ) . '; }
		.wp-block-themepunchblocks-tpc-tabs-tab-title,
		.wp-block-themepunchblocks-tpc-tabs-tab-title-wrap { background: ' . esc_attr( $support1 ) . ';}

		.wp-block-themepunchblocks-tpc-tabs-tab-title,
		.wp-block-themepunchblocks-tpc-tabs-tab-title-wrap .dashicons-plus-alt { color: ' . esc_attr( $support1_font ) . ';}
	';
		
	return wp_strip_all_tags( $css );
}