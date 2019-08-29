<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

/**
 * Shortcode attributes
 * @var $atts
 * @var $content - shortcode content
 * @var $this WPBakeryShortCode_VC_Tta_Section
 */
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
$this->resetVariables( $atts, $content );
WPBakeryShortCode_VC_Tta_Section::$self_count ++;
WPBakeryShortCode_VC_Tta_Section::$section_info[] = $atts;
$isPageEditable = vc_is_page_editable();

$background_image = $thumbnail1 = wp_get_attachment_image_src($atts['background_image'],'full');

$padding_top_bottom = $atts["padding_top_bottom"];
$padding_left_right = $atts["padding_left_right"];
$subtitle = $atts["subtitle"];

$output = '';

$output .= '<div class="' . esc_attr( $this->getElementClasses() ) . '"';
$output .= ' id="' . esc_attr( $this->getTemplateVariable( 'tab_id' ) ) . '"';
$output .= ' data-vc-content=".vc_tta-panel-body">';
$output .= '<div class="vc_tta-panel-heading" style="padding:'.esc_attr($padding_top_bottom).'px '.esc_attr($padding_left_right).'px;background-image:url(\''.esc_attr( $background_image[0]).'\');">';
$output .= $this->getTemplateVariable( 'heading' );

if($subtitle)
	$output .= '<h6>' . $subtitle . '</h6>';

$output .= '</div>';
$output .= '<div class="vc_tta-panel-body">';
if ( $isPageEditable ) {
	$output .= '<div data-js-panel-body>'; // fix for fe - shortcodes container, not required in b.e.
}
$output .= $this->getTemplateVariable( 'content' );
if ( $isPageEditable ) {
	$output .= '</div>';
}
$output .= '</div>';
$output .= '</div>';

echo "".$output;
