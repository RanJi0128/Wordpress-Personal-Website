<?php
/**
 * Handles Post Setting metabox HTML
 *
 * @package Buttons With Style Pro
 * @since 1.0.0
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

global $post;

// Taking some variables
$prefix 				= POPUPAOC_META_PREFIX; // Metabox prefix
$popup_type_list 		= popupaoc_popup_type();
$popup_effect_list 		= popupaoc_effect();
$popup_positionx_list	= popupaoc_positionx();
$popup_positiony_list 	= popupaoc_positiony();

$popup_fullscreen_list 	= popupaoc_popupfullscreen();
$popup_overlay_list     = popupaoc_popupoverlay();
$popup_lodaer_list 	    = popupaoc_lodaer();


// Getting saved values


$popup_type 			= get_post_meta( $post->ID, $prefix.'popup_type', true );
$popup_link_txt 		= get_post_meta( $post->ID, $prefix.'popup_link_txt', true );
$popup_button_txt 		= get_post_meta( $post->ID, $prefix.'popup_button_txt', true );
$popup_image_url 		= get_post_meta( $post->ID, $prefix.'popup_image_url', true );
$full_screen 			= get_post_meta( $post->ID, $prefix.'full_screen', true );
$enable_loader 			= get_post_meta( $post->ID, $prefix.'enable_loader', true );
$enable_ovelay 			= get_post_meta( $post->ID, $prefix.'enable_ovelay', true );
$popup_effect 			= get_post_meta( $post->ID, $prefix.'popup_effect', true );
$popup_positionx 		= get_post_meta( $post->ID, $prefix.'popup_positionx', true );
$popup_positiony 		= get_post_meta( $post->ID, $prefix.'popup_positiony', true );
$speedin 				= get_post_meta( $post->ID, $prefix.'speedin', true );
$speedout 				= get_post_meta( $post->ID, $prefix.'speedout', true );
$delay 					= get_post_meta( $post->ID, $prefix.'delay', true );

if($popup_type == 'simple_link' || $popup_type == '') {
	$popup_simple_style = 'style = "display:table"';
	$popup_img_style = 'style = "display:none"';
	$popup_img_btn = 'style = "display:none"';
} elseif($popup_type == 'image') {
	$popup_img_style = 'style = "display:table"';
	$popup_simple_style = 'style = "display:none"';
	$popup_img_btn = 'style = "display:none"';
}
else{
	$popup_img_btn = 'style = "display:table"';
	$popup_simple_style = 'style = "display:none"';
	$popup_img_style = 'style = "display:none"';
}
?>



<table class="form-table popupaoc-post-sett-tbl">
	<tbody>
		<!-- popup button text -->
		<tr valign="top">
			<th scope="row">
				<label for="popup-btn-type"><?php _e('Link type', 'popup-anything-on-click'); ?></label>
			</th>
			<td class="row-meta">
				<select name="<?php echo $prefix;?>popup_type" class="popupaoc-select-box popup-btn-type" id="popup-btn-type">
					<?php
					if( !empty($popup_type_list) ) {
						foreach ($popup_type_list as $key => $value) {
							echo '<option value="'.$key.'" '.selected($popup_type,$key).'>'.$value.'</option>';
						}
					}
					?>
				</select>
				<br/>
				<span class="description"><?php _e('Select on click type ie where user going to click.', 'popup-anything-on-click'); ?></span>
			</td>			
		</tr>
		<!-- Simple button settings -->
		<tr valign="top">
			<td colspan="2" class="popupaoc-no-padding">
				<table class="form-table popupaoc-simple-link" <?php echo $popup_simple_style;?>>
								
					<tr>
						<th><label for="popupaoc-simple-btn-name"><?php echo __('Link Text','popup-anything-on-click');?></label></th>
						<td class="row-meta">
							<input type="text" name="<?php echo $prefix;?>popup_link_txt" value="<?php echo $popup_link_txt; ?>" class="large-text" placeholder="<?php _e('Link Text', 'popup-anything-on-click'); ?>" /><br/>
							<br/>
							<span class="description"><?php _e('Enter text.', 'popup-anything-on-click'); ?></span>
						</td>
					</tr>						
					
				</table>
				<table class="form-table popupaoc-simple-button" <?php echo $popup_img_btn;?>>
					
					<tr>
						<th>
							<?php _e('Button Text','');?>
						</th>
						<td class="row-meta">
							<input type="text" name="<?php echo $prefix;?>popup_button_txt" value="<?php echo $popup_button_txt; ?>" class="large-text" placeholder="<?php _e('Button Text', 'popup-anything-on-click'); ?>" /><br/>
							<br/>
							<span class="description"><?php _e('Enter Popup button text.', 'popup-anything-on-click'); ?></span>
						</td>
					</tr>
					
				</table><!-- end .popupaoc-group-button-sett -->
				<table class="form-table popupaoc-simple-image" <?php echo $popup_img_style;?>>
					
					<tr>
						<th>
							<?php _e('Upload Image','');?>
						</th>
						<td>
							<input type="text" name="<?php echo $prefix.'popup_image_url';?>" value="<?php echo $popup_image_url;?>" id="popup-anything-default-img" class="regular-text popup-antything-default-img popup-antything-img-upload-input" />
							<input type="button" name="popup_default_img" class="button-secondary popup-anything-img-uploader" value="<?php _e( 'Upload Image', 'popup-anything-on-click'); ?>" />
							<input type="button" name="popu_default_img_clear" id="popup-anything-default-img-clear" class="button button-secondary popup-anything-image-clear" value="<?php _e( 'Clear', 'popup-anything-on-click'); ?>" /> <br />
							<span class="description"><?php _e( 'Upload popup button image.','popup-anything-on-click' ); ?></span>
							<?php
								$default_img = '';
								if( !empty($popup_image_url)) { 
									$default_img = '<img src="'.esc_url($popup_image_url).'" alt="" />';
								}
							?>
							<div class="popup-anything-imgs-preview"><?php echo $default_img; ?></div>
						</td>
					</tr>
					
				</table><!-- end .popupaoc-group-button-sett -->
			</td>
		</tr>
		
		<!-- popup screen -->
		<tr valign="top" style="border-top:1px solid #ddd;">
			<th scope="row">
				<label for="popupaoc-btn-style-type"><?php _e('Full Screen', 'popup-anything-on-click'); ?></label>
			</th>			
			<td class="row-meta">			
				<select name="<?php echo $prefix;?>full_screen" class="popupaoc-select-box popupaoc-btn-clr-class" id="popupaoc-btn-clr-class">
					<?php
					if( !empty($popup_fullscreen_list) ) {
						foreach ($popup_fullscreen_list as $key => $value) {
							echo '<option value="'.$key.'" '.selected($full_screen,$key).'>'.$value.'</option>';
						}
					}
					?>
				</select><br/>
				<span class="description"><?php _e('Enable popup full screen.', 'popup-anything-on-click'); ?></span>
			</td>			
		</tr>
		<!-- popup loader -->
		<tr valign="top">
			<th scope="row">
				<label for="popupaoc-btn-style-type"><?php _e('Enable Loader', 'popup-anything-on-click'); ?></label>
			</th>
			<td class="row-meta">			
				<select name="<?php echo $prefix;?>enable_loader" class="popupaoc-select-box popupaoc-btn-clr-class" id="popupaoc-btn-clr-class">
					<?php
					if( !empty($popup_lodaer_list) ) {
						foreach ($popup_lodaer_list as $key => $value) {
							echo '<option value="'.$key.'" '.selected($enable_loader,$key).'>'.$value.'</option>';
						}
					}
					?>
				</select><br/>
				<span class="description"><?php _e('Enable loader.', 'popup-anything-on-click'); ?></span>
			</td>				
		</tr>
		<!-- popup overlay -->
		<tr valign="top">
			<th scope="row">
				<label for="popupaoc-btn-style-type"><?php _e('Enable Overlay', 'popup-anything-on-click'); ?></label>
			</th>
			<td class="row-meta">			
				<select name="<?php echo $prefix;?>enable_ovelay" class="popupaoc-select-box popupaoc-btn-clr-class" id="popupaoc-btn-clr-class">
					<?php
					if( !empty($popup_overlay_list) ) {
						foreach ($popup_overlay_list as $key => $value) {
							echo '<option value="'.$key.'" '.selected($enable_ovelay,$key).'>'.$value.'</option>';
						}
					}
					?>
				</select><br/>
				<span class="description"><?php _e('Enable Overlay', 'popup-anything-on-click'); ?></span>
			</td>				
		</tr>
		<!-- popup effect -->
		<tr valign="top">
			<th scope="row">
				<label for="popupaoc-btn-clr-class"><?php _e('Effect', 'popup-anything-on-click'); ?></label>
			</th>
			<td class="row-meta">			
				<select name="<?php echo $prefix;?>popup_effect" class="popupaoc-select-box popupaoc-btn-clr-class" id="popupaoc-btn-clr-class">
					<?php
					if( !empty($popup_effect_list) ) {
						foreach ($popup_effect_list as $key => $value) {
							echo '<option value="'.$key.'" '.selected($popup_effect,$key).'>'.$value.'</option>';
						}
					}
					?>
				</select><br/>
				<span class="description"><?php _e('Select effect.', 'popup-anything-on-click'); ?></span>
			</td>			
		</tr>
		<!-- popup positionx -->
		<tr valign="top">
			<th scope="row">
				<label for="popupaoc-btn-clr-class"><?php _e('PositionX', 'popup-anything-on-click'); ?></label>
			</th>
			<td class="row-meta">			
				<select name="<?php echo $prefix;?>popup_positionx" class="popupaoc-select-box popupaoc-btn-clr-class" id="popupaoc-btn-clr-class">
					<?php
					if( !empty($popup_positionx_list) ) {
						foreach ($popup_positionx_list as $key => $value) {
							echo '<option value="'.$key.'" '.selected($popup_positionx,$key).'>'.$value.'</option>';
						}
					}
					?>
				</select><br/>
				<span class="description"><?php _e('Select positionx.', 'popup-anything-on-click'); ?></span>
			</td>			
		</tr>
		<!-- popup positiony -->
		<tr valign="top">
			<th scope="row">
				<label for="popupaoc-btn-clr-class"><?php _e('PositionY', 'popup-anything-on-click'); ?></label>
			</th>
			<td class="row-meta">			
				<select name="<?php echo $prefix;?>popup_positiony" class="popupaoc-select-box popupaoc-btn-clr-class" id="popupaoc-btn-clr-class">
					<?php
					if( !empty($popup_positiony_list) ) {
						foreach ($popup_positiony_list as $key => $value) {
							echo '<option value="'.$key.'" '.selected($popup_positiony,$key).'>'.$value.'</option>';
						}
					}
					?>
				</select><br/>
				<span class="description"><?php _e('Select positiony.', 'popup-anything-on-click'); ?></span>
			</td>			
		</tr>
		<!-- popup speedin -->
		<tr valign="top">
			<th scope="row">
				<label for="popupaoc-btn-clr-class"><?php _e('SpeedIn', 'popup-anything-on-click'); ?></label>
			</th>
			<td class="row-meta">			
				<input type="number" name="<?php echo $prefix;?>speedin" value="<?php echo $speedin; ?>" class="large-text" placeholder="<?php _e('300', 'popup-anything-on-click'); ?>" /><br/>
				<span class="description"><?php _e('Enter the speed start of the animation in milliseconds.', 'popup-anything-on-click'); ?></span>
			</td>			
		</tr>
		<!-- popup speedout -->
		<tr valign="top">
			<th scope="row">
				<label for="popupaoc-btn-clr-class"><?php _e('SpeedOut', 'popup-anything-on-click'); ?></label>
			</th>
			<td class="row-meta">			
				<input type="number" name="<?php echo $prefix;?>speedout" value="<?php echo $speedout; ?>" class="large-text" placeholder="<?php _e('300', 'popup-anything-on-click'); ?>" /><br/>
				<span class="description"><?php _e('Enter the speed end of the animation in milliseconds.', 'popup-anything-on-click'); ?></span>
			</td>			
		</tr>
		<!-- popup delay -->
		<tr valign="top">
			<th scope="row">
				<label for="popupaoc-btn-clr-class"><?php _e('Delay', 'popup-anything-on-click'); ?></label>
			</th>
			<td class="row-meta">			
				<input type="number" name="<?php echo $prefix;?>delay" value="<?php echo $delay; ?>" class="large-text" placeholder="<?php _e('150', 'popup-anything-on-click'); ?>" /><br/>
				<span class="description"><?php _e('Enter the wait before the transition effect start.', 'popup-anything-on-click'); ?></span>
			</td>			
		</tr>
		

	</tbody>
</table><!-- end .popupaoc-post-sett-tbl -->