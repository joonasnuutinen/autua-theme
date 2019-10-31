<?php
/**
 * Autua Theme Customizer
 *
 * @package Autua
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function autua_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	// Custom 404 page
	$wp_customize->add_setting( 'custom_404_id', array(
		'default' => 0,
		'sanitize_callback' => 'absint' // Post ID is a positive integer
	) );
	$wp_customize->add_control( 'custom_404_id', array( 
		'type' => 'dropdown-pages',
		'priority' => 10,
		'section' => 'static_front_page',
		'label' => __( '404 Page', 'autua' ),
		'allow_addition' => true
	) );

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'autua_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'autua_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'autua_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function autua_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function autua_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function autua_customize_preview_js() {
	wp_enqueue_script( 'autua-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'autua_customize_preview_js' );
