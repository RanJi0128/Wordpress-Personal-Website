<?php
/**
 * Adds new shortcode "myprefix_say_hello" and registers it to
 * the Visual Composer plugin
 *
 */

if ( ! class_exists( 'Sth_googlemap' ) ) {

	class Sth_googlemap {

		public function __construct() {
			
			// Registers the shortcode in WordPress
			add_shortcode( 'sth_googlemap', array( 'Sth_googlemap', 'output' ) );

			// Map shortcode to Visual Composer
			if ( function_exists( 'vc_lean_map' ) ) {
				vc_lean_map( 'sth_googlemap', array( 'Sth_googlemap', 'map' ) );
			}

		}

	
		public static function output( $atts, $content = null ) {

			// Extract shortcode attributes (based on the vc_lean_map function - see next function)
			extract( vc_map_get_attributes( 'sth_googlemap', $atts ) );

			

			$vc_coordinates = vc_param_group_parse_atts( $atts['vc_coordinates'] );
			$zoom_level = $atts['zoom_level'];
			$map_title = $atts['map_title'];	
			$map_marker_id = $atts['map_marker'];
			$map_marker = wp_get_attachment_image_src($map_marker_id,'full');
			$map_style = $atts['map_style']?$atts['map_style']:'';

			$fullscreen = $atts['fit_to_screen']?$atts['fit_to_screen']:'fullscreen';

			$map_desc = $atts['map_desc'];
			$map_background = $atts['map_background'];
			$map_background_color = $atts['map_background_color'];
			
			$zoom = 15;
			$fit_to_screen = '';
			$height = '';

			if($zoom_level)
				$zoom = $zoom_level;
			
			
			if($fullscreen=='fullscreen'){
				$fit_to_screen = 'fit-to-screen';
			} else{
				$map_height = $atts['map_height'];
				$height = "height:".$map_height;
			}

			$background_class = 'map-overlay-gradient';

			list($r, $g, $b) = sscanf($map_background_color, "#%02x%02x%02x");
			$rgb =  "$r".","."$g".","."$b";
			

			$style = '<style> 
						.map-contact-info.map-overlay-gradient {
							background: -webkit-linear-gradient(left, rgba('.esc_attr($rgb).',1) 30%, rgba('.esc_attr($rgb).',0) 100%);
							background: -o-linear-gradient(right, rgba('.esc_attr($rgb).',1) 30%, rgba('.esc_attr($rgb).',0) 100%);
							background: -moz-linear-gradient(right, rgba('.esc_attr($rgb).',1) 30%, rgba('.esc_attr($rgb).',0) 100%);
							background: linear-gradient(to right, rgba('.esc_attr($rgb).',1) 30%, rgba('.esc_attr($rgb).',0) 100%);
					  	}
					  	@media(max-width: 767px){
					  		.map-contact-info.map-overlay-gradient {
						  		background: rgba('.esc_attr($rgb).', 1);
							}
					  	} 
					  </style>';

			if($map_background=='solid background'){
				$background_class = 'map-overlay-solid';
				$style = '<style> .map-overlay-solid {backround-color:'.esc_attr($map_background_color).';}</style>';
			} 
			
			$output = $style;
			$map_style = htmlentities( rawurldecode( base64_decode( $map_style ) ), ENT_COMPAT, 'UTF-8' ) ;
			
			$coordinates_container = '';
			
			$coordinates_container = '';
			$coordinate = '';
			if($vc_coordinates){
				foreach ($vc_coordinates as $vc_coordinate) {	
					
					if(isset($vc_coordinate['coordinate'])){
						$coordinate = $vc_coordinate['coordinate'];

						$new_coords1 = explode(',', $coordinate); 
						$lattitude1 = $new_coords1[0];
						$longtitude1 = $new_coords1[1];

						$coordinates_container .= '<div class="marker" data-lat="'.esc_attr($lattitude1).'" data-lng="'.esc_attr($longtitude1).'"></div>';
					}
				}
			}

			$output .= '<div class="main-container map-contact-container '.esc_attr($fit_to_screen).'" style="position:relative;'.$height.'">
						<div class="map-canvas" data-map data-map-options=\'{"zoom": '.esc_attr($zoom).', "title": "'.esc_attr($map_title).'", "icon": "'.esc_url($map_marker[0]).'"}\' 	data-mapStyle=\''.$map_style.'\'>'.$coordinates_container.'</div>';
			if(!$map_desc)	{		
			$output .='<div class="map-contact-info '.esc_attr($background_class).'">
							<div data-customScrollbar data-customscrollbaroptions=\'{"scrollInertia": 10, "theme": "minimal-dark"}\'>
								'.do_shortcode($content).'
							</div>
						</div>';
					}
			$output .='</div>';

			return $output;

		}

	
		public static function map() {
			return array(
						'name' => esc_html__( 'Contact', 'collective' ),
						'base' => 'sth_googlemap',
						"icon" => '',
						"category" => 'StonedThemes',
						'description' => esc_html__( 'Map block', 'collective' ),
						'params' => array(
							array(
						        "type" => "param_group",
						        "value" => "Coordinates",
						        "heading" => esc_html__("Coordinates", "collective" ),
						        "param_name" => "vc_coordinates",
						        "params" => array(
						            array(
						                "type" => "textfield",
						                "class" => "",
						                "value" => "",
						                "heading" => esc_html__("Coordinate", "collective" ),
						                "param_name" => "coordinate",
						                'description' => esc_html__( 'Enter google map coordinates lattitude and longtitude (ex. 43.73841760000001,7.42461579999997).', 'collective' )
						            ),
						        ),
						    ),
							array(
								'type' => 'textfield',
								'heading' => esc_html__( 'Map Title', 'collective' ),
								'param_name' => 'map_title',
								'description' => esc_html__( 'Enter map title (Note: will display on hover in map marker).', 'collective' )
							),
							array(
								'type' => 'textfield',
								'heading' => esc_html__( 'Zoom Level', 'collective' ),
								'param_name' => 'zoom_level',
								'description' => esc_html__( 'Enter zoom level 0-20.', 'collective' )
							),
							array(
								'type' => 'dropdown',
								'heading' => esc_html__( 'Map Display', 'collective' ),
								'param_name' => 'fit_to_screen',
								'value' => array('fullscreen','Specific height'),
								
								'description' => esc_html__( 'Choose to show map on fullscreen or add map height', 'collective' )
							),
							array(
								'type' => 'attach_image',
								'heading' => esc_html__( 'Map Marker', 'collective' ),
								'param_name' => 'map_marker',
								'value' => '',
								'description' => esc_html__( 'Add image for map marker', 'collective' )
							),
							array(
								'type' => 'textarea_raw_html',
								'heading' => esc_html__( 'Map Style', 'collective' ),
								'param_name' => 'map_style',
								'value' => '',
								'description' => esc_html__( 'Enter map style from <a href="https://snazzymaps.com/">snazzymaps</a>', 'collective' )
							),
							array(
								'type' => 'textfield',
								'heading' => esc_html__( 'Map Height', 'collective' ),
								'param_name' => 'map_height',
								 "dependency" => array(
											"element" => "fit_to_screen",
											"value" => "Specific height",
											),
								'description' => esc_html__( 'Enter map height in px', 'collective' )
							),
							array(
								'type' => 'checkbox',
								'heading' => esc_html__( 'Disable Map Description', 'collective' ),
								'param_name' => 'map_desc',
								'value' => '',
								'description' => esc_html__( 'If checked extra info on map will not be displayed', 'collective' )
							),
							array(
								'type' => 'dropdown',
								'heading' => esc_html__( 'Map Details Background', 'collective' ),
								'param_name' => 'map_background',
								'value' => array('linear background','solid background'),
								'description' => esc_html__( 'Display linear or solid background', 'collective' )
							),
							array(
								'type' => 'colorpicker',
								'heading' => esc_html__( 'Map Background', 'collective' ),
								'param_name' => 'map_background_color',
								'value' => '',
								'description' => esc_html__( 'Choose a backround Color', 'collective' )
							),
							array(
									"type" => "textarea_html",
									"holder" => "div",
									"class" => "",
									"heading" => esc_html__( "Contact Extra Info", "collective" ),
									"param_name" => "content",
									"value" => "",
									"description" => esc_html__( "Add extra contact information.", "collective" )
							),
							array(
								'type' => 'textfield',
								'heading' => esc_html__( 'Extra class name', 'collective' ),
								'param_name' => 'el_class',
								'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'collective' )
							)
						)
					) ;
		}

	}

}
new Sth_googlemap;