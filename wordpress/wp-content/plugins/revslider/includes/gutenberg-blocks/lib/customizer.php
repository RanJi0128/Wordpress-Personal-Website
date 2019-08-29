<?php 

namespace Gutenberg_Courses\Example_Blocks;

function themepunch_customize_register( $wp_customize ) {
	/*$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'themepunch_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'themepunch_customize_partial_blogdescription',
		) );
	}*/

	/**
	 * Remove not needed standard sections
	*/
	foreach (array('colors','header_image','background_image') as $id) {
		$wp_customize->remove_section($id);
	}	

    /**
     * ThemePunch Blocks Default Accent
     */
    $wp_customize->add_section( 'tpc_blocks_colors_section',
        array(
            'title' => __( 'ThemePunch Blocks Colors' ),
            'description' => esc_html__( 'Set the colors used in the ThemePunch blocks.' ),
            'capability' => 'edit_theme_options', // Not typically needed. Default is edit_theme_options
            'description_hidden' => 'false', // Rarely needed. Default is False
            'priority' => 99999,
        )
    );

        /**
         * Accent Color Background
         */
        $wp_customize->add_setting(
            'tpc_blocks_accent_color', array(
                'default'           => '#5e35b1',
                'sanitize_callback' => 'wp_strip_all_tags',
                'transport'         => 'postMessage',
            )
        );
        $wp_customize->add_control(
            new \WP_Customize_Color_Control(
                $wp_customize, 'tpc_blocks_accent_color', array(
                    'label'       => esc_html__( 'Accent Color Background', 'themepunch' ),
                    'description' => esc_html__( 'Used for e.g. Button Backgrounds, Headline Borders', 'themepunch' ),
                    'section'     => 'tpc_blocks_colors_section',
                )
            )
        );
        $wp_customize->add_setting(
            'tpc_blocks_accent_color_font', array(
                'default'           => '#ffffff',
                'sanitize_callback' => 'wp_strip_all_tags',
                'transport'         => 'postMessage',
            )
        );
        $wp_customize->add_control(
            new \WP_Customize_Color_Control(
                $wp_customize, 'tpc_blocks_accent_color_font', array(
                    'label'       => esc_html__( 'Accent Color Font', 'themepunch' ),
                    'description' => esc_html__( 'Used for e.g. Button Fonts', 'themepunch' ),
                    'section'     => 'tpc_blocks_colors_section',
                )
            )
        );

        /**
         * Supporting Color Background
         */
        $wp_customize->add_setting(
            'tpc_blocks_supporting_color_1', array(
                'default'           => '#d9dadb',
                'sanitize_callback' => 'wp_strip_all_tags',
                'transport'         => 'postMessage',
            )
        );
        $wp_customize->add_control(
            new \WP_Customize_Color_Control(
                $wp_customize, 'tpc_blocks_supporting_color_1', array(
                    'label'       => esc_html__( 'Supporting Color Background', 'themepunch' ),
                    'description' => esc_html__( 'Used for e.g. Tab Backgrounds, Headline Borders', 'themepunch' ),
                    'section'     => 'tpc_blocks_colors_section',
                )
            )
        );

        $wp_customize->add_setting(
            'tpc_blocks_supporting_color_1_font', array(
                'default'           => '#5b5c5e',
                'sanitize_callback' => 'wp_strip_all_tags',
                'transport'         => 'postMessage',
            )
        );
        $wp_customize->add_control(
            new \WP_Customize_Color_Control(
                $wp_customize, 'tpc_blocks_supporting_color_1_font', array(
                    'label'       => esc_html__( 'Supporting Color Font', 'themepunch' ),
                    'description' => esc_html__( 'Used for e.g. Tab Fonts', 'themepunch' ),
                    'section'     => 'tpc_blocks_colors_section',
                )
            )
        );

        
	

}
add_action( 'customize_register', __NAMESPACE__ .'\themepunch_customize_register' );
?>