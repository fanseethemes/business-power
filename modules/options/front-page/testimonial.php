<?php
/**
* ------------------------------------------------------
*  Active callback functions
* ------------------------------------------------------
*
* @since 1.0
* @package Business Power WordPress Theme
*/
if( !function_exists( 'business_power_testimonial_shortcode_callback' ) ){
	function business_power_testimonial_shortcode_callback(){
		return business_power_get( 'enable-testimonial-shortcode' );
	}
}

if( !function_exists( 'business_power_testimonial_callback' ) ){
	function business_power_testimonial_callback(){
		return business_power_get( 'enable-testimonial' );
	}
}

/**
* ------------------------------------------------------
*  Options for testimonial section
* ------------------------------------------------------
*
* @since 1.0
* @package Business Power WordPress Theme
*/
if(! function_exists( 'business_power_get_testimonial_options' ) ){
	function business_power_get_testimonial_options(){
		return array(
			array(
				'id'      => 'enable-testimonial',
				'label'   => esc_html__( 'Enable', 'business-power' ),
				'type'    => 'toggle',
				'default' => true
			),
			array(
				'id'    => 'testimonial-page',
				'label' => esc_html__( 'Content Page', 'business-power' ),
				'type'  => 'dropdown-pages',
				'default' => '0',
				# framework will append prefix eg: business_power_testimonial_callback
				'active_callback' => 'testimonial_callback'
			),
			array(
				'id'    => 'testimonial-pages',
				'label' => esc_html__( 'Sub Pages', 'business-power' ),
				'type'  => 'page-repeater',
				'limit' => 3,
				'active_callback' => 'testimonial_callback'
			),
			array(
				'id'      => 'enable-testimonial-shortcode',
				'label'   => esc_html__( 'Enable Shortcode', 'business-power' ),
				'type'    => 'toggle',
				'default' => false
			),
			array(
				'id'    => 'testimonial-shortcode',
				'label' => esc_html__( 'Shortcode', 'business-power' ),
				'type'  => 'text',
				# framework will append prefix eg: business_power_testimonial_shortcode_callback
				'active_callback' => 'testimonial_shortcode_callback'
			)
		);
	}
}