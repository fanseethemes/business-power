<?php
/**
* ------------------------------------------------------
*  Active callback functions
* ------------------------------------------------------
*
* @since 1.0
* @package Business Power WordPress Theme
*/
if( !function_exists( 'business_power_cta_shortcode_callback' ) ){
	function business_power_cta_shortcode_callback(){
		return business_power_get( 'enable-cta-shortcode' );
	}
}

if( !function_exists( 'business_power_cta_callback' ) ){
	function business_power_cta_callback(){
		return business_power_get( 'enable-cta' );
	}
}

/**
* ------------------------------------------------------
*  Options for cta section
* ------------------------------------------------------
*
* @since 1.0
* @package Business Power WordPress Theme
*/
if(! function_exists( 'business_power_get_cta_options' ) ){
	function business_power_get_cta_options(){
		return array(
			array(
				'id'      => 'enable-cta',
				'label'   => esc_html__( 'Enable', 'business-power' ),
				'type'    => 'toggle',
				'default' => true
			),
			array(
				'id'    => 'cta-page',
				'label' => esc_html__( 'Content Page', 'business-power' ),
				'type'  => 'dropdown-pages',
				'default' => '0',
				# framework will append prefix eg: business_power_cta_callback
				'active_callback' => 'cta_callback'
			),
			array(
				'id'    => 'cta-btn-link',
				'label' => esc_html__( 'Button Link', 'business-power' ),
				'type'  => 'text',
				'default' => '#',
				'active_callback' => 'cta_callback'
			),
			array(
				'id'    => 'cta-btn-text',
				'label' => esc_html__( 'Button Text', 'business-power' ),
				'type'  => 'text',
				'default' => esc_html__( 'GET IN TOUCH' ,'business-power' ),
				'active_callback' => 'cta_callback'
			),
			array(
				'id'      => 'enable-cta-shortcode',
				'label'   => esc_html__( 'Enable Shortcode', 'business-power' ),
				'type'    => 'toggle',
				'default' => false
			),
			array(
				'id'    => 'cta-shortcode',
				'label' => esc_html__( 'Shortcode', 'business-power' ),
				'type'  => 'text',
				# framework will append prefix eg: business_power_cta_shortcode_callback
				'active_callback' => 'cta_shortcode_callback'
			)
		);
	}
}