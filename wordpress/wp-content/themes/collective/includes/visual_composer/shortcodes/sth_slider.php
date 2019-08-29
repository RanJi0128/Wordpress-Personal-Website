<?php
function stonedthemes_slider_vc_map_init(){

	if ( class_exists( "WPBakeryShortCode" ) ) {
		class WPBakeryShortCode_sth_slider extends WPBakeryShortCode {

			protected function content( $atts, $content = null ) {

				$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
				$slider_id = $atts['slider'];
				$title = $atts['title'];

				$content = do_shortcode($content);	
				
				$width_class = '';
				$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width_class, $this->settings['base'], $atts );

				//check if it is HTTPS
				$isSecured = is_ssl();

				if(function_exists('get_field')){

					$slider_display = esc_attr(get_field('slider_display',$slider_id));
					$slider_height = esc_attr(get_field('slider_height',$slider_id));
					
					$slider_orientation_vertical = esc_attr(get_field('slider_orientation_vertical',$slider_id));
					$auto_slide = esc_attr(get_field('autoslide',$slider_id));
					$autoslide_timer = esc_attr(get_field('autoslide_timer',$slider_id));
					$slider_animation = esc_attr(get_field('slider_animation',$slider_id));
					$enable_thumbnails = esc_attr(get_field('enable_thumbnails',$slider_id));

					$arrow_style = get_field('arrow_style',$slider_id)?get_field('arrow_style',$slider_id):'style-1';
					$arrow_position = get_field('arrow_position',$slider_id)?get_field('arrow_position',$slider_id):'side';
					
					$fit_to_screen = '';
					if($slider_display=='fullscreen')
						$fit_to_screen = "fit-to-screen";

					$bordered = esc_attr(get_field('display_border',$slider_id));
					$border_class = '';
					$border_style = '';
					if($bordered){
						$border_class = 'bordered';
						$border_color = esc_attr(get_field('border_color',$slider_id));
						$border_style = 'style="border-color:'.$border_color.';"';
					}
					$vertical_slider = '';
					if($slider_orientation_vertical){
						$vertical_slider = "vertical-slider";
					}

					$output = '<div class="royal-slider-container framed '.$fit_to_screen.' '.$border_class.' '.$vertical_slider.'"';

					if($slider_display=='specific height')
						$output .= ' style="height:'.$slider_height.'px;"';
					
					$output .= ' >
									<div class="royal-slider" data-royal-slider data-royal-slider-options=\'{
										"keyboardNavEnabled": true,
										"imageScaleMode": "fill",
										"loop": true,';
								if($enable_thumbnails) :
									$output .= '"controlNavigation": "thumbnails",';
								else:  
									$output .= '"controlNavigation": "none",';
								endif; 
									$output .= '"transitionType": "'.$slider_animation.'",
												"arrowsNav": false,
												"autoScaleSlider":false,';
								if($auto_slide) :
									$output .= '"autoPlay": {
								    		"enabled": true,
								    		"pauseOnHover": false,
								    		"stopAtAction": false,
								    		"delay":'.($autoslide_timer * 1000).'
								    	},';
						    	endif;

						    	if($isSecured) :
						    		$output .= '"video": {
							    		"youTubeCode": "<iframe src=\"https://www.youtube.com/embed/%id%?rel=0&showinfo=0&autoplay=1&mute=1&enablejsapi=1\" allow=\"autoplay; encrypted-media\"  frameborder=\"0\" allowfullscreen></iframe>",
									    "vimeoCode": "<iframe src=\"https://player.vimeo.com/video/%id%?byline=0&amp;portrait=0&amp;autoplay=1\" frameborder=\"no\" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>"
							    	},';
					    		else: 
					    			$output .= '"video": {
							    		"youTubeCode": "<iframe src=\"http://www.youtube.com/embed/%id%?rel=0&showinfo=0&autoplay=1&mute=1&enablejsapi=1\" allow=\"autoplay; encrypted-media\"  frameborder=\"0\" allowfullscreen></iframe>",
									    "vimeoCode": "<iframe src=\"http://player.vimeo.com/video/%id%?byline=0&amp;portrait=0&amp;autoplay=1\" frameborder=\"no\" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>"
							    	},';
				    			endif;
						    	
						    	if($slider_orientation_vertical):
						    		$output .= '"slidesOrientation": "vertical",
				    							"loop": true,
				    							"slidesSpacing": 0,
				    							"loopRewind": false,';
						    	endif;
							    
							    	$output .= '"autoHeight": false
										,"thumbs": {
								    		"spacing": 10,
								    		"arrowsAutoHide": true,
								    		"fitInViewport": false,
								    		"orientation":	"horizontal"
								    	}
									}\'>';

										$slider_gallery = get_field('slider',$slider_id);
										if($slider_gallery):
											foreach ($slider_gallery as $slide) {

												 $type = $slide['type']; 
												 $overlay_color = "255, 255, 255";
												 if($slide['overlay_color']){
												 	 $overlay_color = stonedthemes_hex2rgb($slide['overlay_color']);		
												 	 $overlay_color =  implode(", ", $overlay_color);	
												 	}
												 $overlay_opacity = "0.75";
												 if($slide['overlay_opacity']!='')
												 	 $overlay_opacity = ($slide['overlay_opacity']/10) ;
												 
												if($type=='image') {
													$image = wp_get_attachment_image_src($slide['image'],'full' );
													$image_thumb = wp_get_attachment_image_src($slide['image'],'thumbnail' );
														
															
														
												$output .= '<div class="royal-slider-slide">
																<img class="rsImg" src="'.esc_url($image[0]).'" alt="alt" data-rsTmb="'.esc_attr($image_thumb[0]).'" />
																<div class="overlay overlay-active" style="background: rgba('.esc_attr($overlay_color).','.esc_attr($overlay_opacity).');"></div>
																<div class="animation-block '.$slide['text_position'].'" '.$border_style.'>
																	<div class="vertical-center2-container">
																		<div class="vertical-center2-content">
																			<div class="rsABlock" data-move-effect="none">
																				'.$slide["text"];
																				 if($slide["button_text"]):
																			$output .= '<a href="'.$slide["button_link"].'" class="btn-slider">
																							<span>'.$slide["button_text"].'</span>
																						</a>';
																				 endif;
															$output .= '	</div>
																		</div>
																	</div>
																</div>
															</div>';
														  }
											   	else {
															$video = $slide['video_url'];
															if($slide['video_thumb']){
																$image = wp_get_attachment_image_src($slide['video_thumb'],'full' );
																$image_thumb = wp_get_attachment_image_src($slide['video_thumb'],'stonedthemes_slider-thumbs' );
																$video_thumb_url = $image[0];
															} else {
																$video_thumb_url = stonedthemes_get_video_thumbnail_uri($video); 
																$image_thumb = $video_thumb_url;
															}

												$output .= '<div class="royal-slider-slide">
																<img class="rsImg" src="'.esc_url($video_thumb_url).'" alt="alt" data-rsTmb="'.esc_attr($image_thumb).'" data-rsVideo="'.esc_attr($video).'" />
																<div class="overlay full-slider-overlay overlay-active" style="background: rgba('.esc_attr($overlay_color).','.esc_attr($overlay_opacity).');"></div>
																<div class="animation-block '.esc_attr($slide["text_position"]).'">
																	<div class="vertical-center2-container">
																		<div class="vertical-center2-content">
																			<div class="rsABlock" data-move-effect="none">
																				'.$slide["text"];
																				 if($slide["button_text"]):
																					$output .= '<a href="'.esc_url($slide["button_link"]).'" class="btn-slider">
																								<span>'.$slide["button_text"].'</span>
																							</a>';
																				 endif;
																$output .= '</div>
																		</div>
																	</div>
																</div>	
															</div>';
																	
													}
												} 
										endif;		
						$output .= '</div>
									<nav class="'.esc_attr($arrow_position).' '.esc_attr($arrow_style).'">
										<div class="prev">
											<i class="fa fa-angle-left fa-vertical-center"></i>
										</div>
										<div class="next">
											<i class="fa fa-angle-right fa-vertical-center"></i>
										</div>
									</nav>
								</div>';
							
					return $output; 
				}	
			}
		}		
	}
		
	$slider_array = array('');
	$slider_posts = get_posts(array('post_type'=>'slider_post','posts_per_page'=>-1) );
	if ($slider_posts) {
		foreach ( $slider_posts as $slider ) {
			$slider_array[$slider->post_title] = $slider->ID;
		}
	} else {
		$slider_array["No slider found"] = 0;
	}

	vc_map( array(
			"base" => "sth_slider",
			"name" => esc_html__( "Slider", "collective" ),
			"class" => "",
			"icon" => get_template_directory_uri().'/includes/visual_composer/sth_module_icon.png',
			'category' => 'StonedThemes',
			"params" => array(
				array(
					"type" => "textfield",
					"holder" => "h3",
					"class" => "",
					"heading" => esc_html__( "Title", "collective" ),
					"param_name" => "title",
					"value" => "",
					"description" => esc_html__( "Enter Title", "collective" )
				),
				array(
					"type" => "dropdown",
					"heading" => esc_html__( "Slider", "collective" ),
					"param_name" => "slider",
					"value" => $slider_array,
					"description" => esc_html__( "Choose slider you want to add", "collective" )
				),
			
			)
		) );
	}

add_action('vc_after_init', 'stonedthemes_slider_vc_map_init');
?>