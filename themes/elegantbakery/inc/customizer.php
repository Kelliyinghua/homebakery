<?php
/**
 * Elegant Bakery Theme Theme Customizer
 *
 * @package Elegant_Bakery_Theme
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function elegantbakerytheme_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'elegantbakerytheme_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'elegantbakerytheme_customize_partial_blogdescription',
			)
		);


		// $wp_customize->add_panel( 'panel_id', array(
		// 	'priority'       => 10,
		// 	'capability'     => 'edit_theme_options',
		// 	'theme_supports' => '',
		// 	'title'          => 'Social media',
		// 	'description'    => 'Add social links',
		// ) );
		$wp_customize->add_section(
			'social_media',
			array(
				'title' => 'Social Media Links',
				'capability' => 'edit_theme_options',
				// 'panel' => 'social media',
			));
		$wp_customize->add_setting(
			'facebook_url',
			array(
				'default' => '',
				'transport' => 'refresh',
			));
		
		$wp_customize->add_control(
			'facebook_url',
			array(
				'label' => 'Facebook URL',
				'section' => 'social_media',
				'setting' => 'facebook_url',
			));
		$wp_customize->add_setting(
			'twitter_url',
			array(
				'default' => '',
				'transport' => 'refresh',
			));
		
		$wp_customize->add_control(
			'twitter_url',
			array(
				'label' => 'Twitter URL',
				'section' => 'social_media',
				'setting' => 'facebook_url',
			));
	};
	
}
add_action( 'customize_register', 'elegantbakerytheme_customize_register' );









/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function elegantbakerytheme_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function elegantbakerytheme_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function elegantbakerytheme_customize_preview_js() {
	wp_enqueue_script( 'elegantbakerytheme-customizer', get_template_directory_uri() . 'assets/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'elegantbakerytheme_customize_preview_js' );