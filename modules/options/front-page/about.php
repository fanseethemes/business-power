<?php
/**
* ------------------------------------------------------
*  Active callback functions
* ------------------------------------------------------
*
* @since 1.0
* @package Business Power WordPress Theme
*/
if( !function_exists( 'business_power_about_shortcode_callback' ) ){
	function business_power_about_shortcode_callback(){
		return business_power_get( 'enable-about-shortcode' );
	}
}

if( !function_exists( 'business_power_about_callback' ) ){
	function business_power_about_callback(){
		return business_power_get( 'enable-about' );
	}
}

/**
* ------------------------------------------------------
*  Options for about section
* ------------------------------------------------------
*
* @since 1.0
* @package Business Power WordPress Theme
*/
if(! function_exists( 'business_power_get_about_options' ) ){
	function business_power_get_about_options(){
		return array(
			array(
				'id'      => 'enable-about',
				'label'   => esc_html__( 'Enable', 'business-power' ),
				'type'    => 'toggle',
				'default' => true
			),
			array(
				'id'    => 'about-page',
				'label' => esc_html__( 'Page', 'business-power' ),
				'type'  => 'dropdown-pages',
				'default' => '0',
				# framework will append prefix eg: business_power_about_callback
				'active_callback' => 'about_callback'
			),
			array(
				'id'    => 'about-btn-text',
				'label' => esc_html__( 'Button Text', 'business-power' ),
				'type'  => 'text',
				'default' => esc_html__( 'Know More' ,'business-power' ),
				'active_callback' => 'about_callback'
			),
			array(
				'id'      => 'enable-about-shortcode',
				'label'   => esc_html__( 'Enable Shortcode', 'business-power' ),
				'type'    => 'toggle',
				'default' => false
			),
			array(
				'id'    => 'about-shortcode',
				'label' => esc_html__( 'Shortcode', 'business-power' ),
				'type'  => 'text',
				# framework will append prefix eg: business_power_about_shortcode_callback
				'active_callback' => 'about_shortcode_callback'
			)
		);
	}
}