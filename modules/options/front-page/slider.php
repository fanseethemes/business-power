<?php
/**
* ------------------------------------------------------
*  Active callback functions for shortcode
* ------------------------------------------------------
*
* @since 1.0
* @package Business Power WordPress Theme
*/
if( !function_exists( 'business_power_slider_shortcode_callback' ) ){
	function business_power_slider_shortcode_callback(){
		return business_power_get( 'enable-slider-shortcode' );
	}
}

/**
* ------------------------------------------------------
*  Active callback functions for slider options
* ------------------------------------------------------
*
* @since 1.0
* @package Business Power WordPress Theme
*/
if( !function_exists( 'business_power_slider_callback' ) ){
	function business_power_slider_callback(){
		return business_power_get( 'enable-slider' );
	}
}

/**
* ------------------------------------------------------
*  Slider Options
* ------------------------------------------------------
*
* @since 1.0
* @package Business Power WordPress Theme
*/
if(! function_exists( 'business_power_get_slider_options' ) ){
	function business_power_get_slider_options(){
		return array(
			array(
				'id'      => 'enable-slider',
				'label'   => esc_html__( 'Enable Slider', 'business-power' ),
				'type'    => 'toggle',
				'default' => true
			),
			array(
				'id'    => 'slider-pages',
				'label' => esc_html__( 'Pages', 'business-power' ),
				'type'  => 'page-repeater',
				'limit' => 3,
				# framework will append prefix eg: business_power_slider_callback
				'active_callback' => 'slider_callback'
			),
			array(
				'id'    => 'slider-curve',
				'label' => esc_html__( 'Use Curve Style', 'business-power' ),
				'type'  => 'toggle',
				'default' => true,
				# framework will append prefix eg: business_power_slider_callback
				'active_callback' => 'slider_callback'
			),
			array(
				'id'    => 'slider-autoplay',
				'label' => esc_html__( 'Auto Play', 'business-power' ),
				'type'  => 'toggle',
				'default' => false,
				# framework will append prefix eg: business_power_slider_callback
				'active_callback' => 'slider_callback'
			),			
			array(
				'id'    => 'slider-dots',
				'label' => esc_html__( 'Dots', 'business-power' ),
				'type'  => 'toggle',
				'default' => true,
				# framework will append prefix eg: business_power_slider_callback
				'active_callback' => 'slider_callback'
			),			
			array(
				'id'    => 'slider-infinite',
				'label' => esc_html__( 'Infinite Scroll', 'business-power' ),
				'type'  => 'toggle',
				'default' => true,
				# framework will append prefix eg: business_power_slider_callback
				'active_callback' => 'slider_callback'
			),
			array(
				'id'      => 'enable-slider-shortcode',
				'label'   => esc_html__( 'Enable Shortcode', 'business-power' ),
				'type'    => 'toggle',
				'default' => false
			),
			array(
				'id'    => 'slider-shortcode',
				'label' => esc_html__( 'Shortcode', 'business-power' ),
				'type'  => 'text',
				# framework will append prefix eg: business_power_slider_shortcode_callback
				'active_callback' => 'slider_shortcode_callback'
			)
		);
	}
}