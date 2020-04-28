<?php
/**
* ------------------------------------------------------
*  Active callback functions
* ------------------------------------------------------
*
* @since 1.0
* @package Business Power WordPress Theme
*/
if( !function_exists( 'business_power_service_shortcode_callback' ) ){
	function business_power_service_shortcode_callback(){
		return business_power_get( 'enable-service-shortcode' );
	}
}

if( !function_exists( 'business_power_service_callback' ) ){
	function business_power_service_callback(){
		return business_power_get( 'enable-service' );
	}
}

/**
* ------------------------------------------------------
*  Options for service section
* ------------------------------------------------------
*
* @since 1.0
* @package Business Power WordPress Theme
*/
if(! function_exists( 'business_power_get_service_options' ) ){
	function business_power_get_service_options(){
		return array(
			array(
				'id'      => 'enable-service',
				'label'   => esc_html__( 'Enable', 'business-power' ),
				'type'    => 'toggle',
				'default' => true
			),
			array(
				'id'    => 'service-page',
				'label' => esc_html__( 'Content Page', 'business-power' ),
				'type'  => 'dropdown-pages',
				'default' => '0',
				# framework will append prefix eg: business_power_service_callback
				'active_callback' => 'service_callback'
			),
			array(
				'id'    => 'service-btn-text',
				'label' => esc_html__( 'Button Text', 'business-power' ),
				'type'  => 'text',
				'default' => esc_html__( 'More Services' ,'business-power' ),
				'active_callback' => 'service_callback'
			),
			array(
				'id'    => 'service-pages',
				'label' => esc_html__( 'Sub Pages', 'business-power' ),
				'type'  => 'page-repeater',
				'limit' => 6,
				'active_callback' => 'service_callback'
			),
			array(
				'id'      => 'enable-service-shortcode',
				'label'   => esc_html__( 'Enable Shortcode', 'business-power' ),
				'type'    => 'toggle',
				'default' => false
			),
			array(
				'id'    => 'service-shortcode',
				'label' => esc_html__( 'Shortcode', 'business-power' ),
				'type'  => 'text',
				# framework will append prefix eg: business_power_service_shortcode_callback
				'active_callback' => 'service_shortcode_callback'
			)
		);
	}
}