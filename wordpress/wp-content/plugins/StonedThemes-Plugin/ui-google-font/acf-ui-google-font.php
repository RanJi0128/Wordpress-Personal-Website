<?php

function include_field_types_ui_google_font( $version ) {
	
	include_once('acf-ui-google-font-v5.php');
	
}

add_action('acf/include_field_types', 'include_field_types_ui_google_font');	




// 3. Include field type for ACF4
function register_fields_ui_google_font() {
	
	include_once('acf-ui-google-font-v4.php');
	
}

add_action('acf/register_fields', 'register_fields_ui_google_font');	



	
?>