<?php
if( !function_exists( 'business_power_container_width_callback' ) ){
	function business_power_container_width_callback( $control ){
		return 'default' == business_power_get( 'container-width' );
	}
}

if( !function_exists( 'business_power_scroll_to_top_callback' ) ){
	function business_power_scroll_to_top_callback( $control ){
		return business_power_get( 'enable-scroll-to-top' );
	}
}
/**
 * ------------------------------------------------------
 *  Returns array fields for advanced options
 * ------------------------------------------------------
 *
 * @since 1.0
 * @package Business Power WordPress Theme
 */
if( !function_exists( 'business_power_get_advanced_options' ) ){
	function business_power_get_advanced_options(){
		return array(
			array(
				'id'	=> 'pre-loader',
				'label' => esc_html__( 'Show Preloader', 'business-power' ),
				'type'  => 'toggle',
			),
			array(
				'id'      => 'enable-scroll-to-top',
				'label'   => esc_html__( 'Enable Scroll To Top', 'business-power' ),
				'default' => true,
				'type'    => 'toggle'
			),
			array(
				'id'      => 'scroll-to-top-bg-color',
				'label'   => esc_html__( 'Scroll To Top Background Color', 'business-power' ),
				'default' => '#1955ca',
				'type'    => 'color',
				'active_callback' => 'scroll_to_top_callback',
			),
			array(
			    'id'      =>  'container-width',
			    'label'   => esc_html__( 'Site Layout', 'business-power' ),
			    'type'    => 'buttonset',
			    'default' => 'default',
			    'choices' => array(
			        'default' => esc_html__( 'Default', 'business-power' ),
			        'box'	  => esc_html__( 'Boxed', 'business-power' ),
			    )
			),
		    array(
		        'id'          	  => 'container-custom-width',
		        'label'   	  	  => esc_html__( 'Container Width', 'business-power' ),
				# framework will append prefix eg: business_power_container_width_callback
		        'active_callback' => 'container_width_callback',
		        'type'        	  => 'range',
		        'default'     	  => '1140',
	    		'input_attrs' 	  =>  array(
	                'min'   => 400,
	                'max'   => 2000,
	                'step'  => 5,
	            ),
		    ),
		);
	}
}