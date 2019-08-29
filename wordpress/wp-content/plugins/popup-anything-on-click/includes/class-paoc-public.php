<?php
/**
 * Public Class
 *
 * Handles the Public side functionality of plugin
 *
 * @package Popup Anything on Click Pro
 * @since 1.0
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

class Paoc_Public {

	function __construct() {

		// Action to create popup content
		add_action( 'wp_footer', array($this, 'paoc_create_popup_data'), 999 );
	}

	/**
	 * Function generate popup data
	 * 
	 * @package Popup Anything on Click Pro
	 * @since 1.0
	 */
	function paoc_create_popup_data() {

		global $paoc_popup_data;

		if( !empty($paoc_popup_data) ) {
			foreach ($paoc_popup_data as $unique => $popup_data) {
?>
				<div id="paoc-modal-<?php echo $unique;?>" class="paoc-popup-modal">
			      	<a href="javascript:void(0);" onclick="Custombox.modal.close();" class="paoc-popup-close"></a>	     
					<div class="paoc-popup-modal-cnt">
						<?php echo $popup_data; ?>
					</div>
				</div>
		<?php } ?>

			<script>
			jQuery(function() {
				jQuery(document).on('click', '.paoc-popup', function() {
					var options = jQuery(this).data('conf');
					new Custombox.modal(options).open();
				});
			});
			</script>
<?php

			// Flushing the global variable
			$paoc_popup_data = '';

		} // End of main if
	}
}

$paoc_public = new Paoc_Public();