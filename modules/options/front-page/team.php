<?php
/**
* ------------------------------------------------------
*  Active callback functions
* ------------------------------------------------------
*
* @since 1.0
* @package Business Power WordPress Theme
*/
if( !function_exists( 'business_power_team_shortcode_callback' ) ){
	function business_power_team_shortcode_callback(){
		return business_power_get( 'enable-team-shortcode' );
	}
}

if( !function_exists( 'business_power_team_callback' ) ){
	function business_power_team_callback(){
		return business_power_get( 'enable-team' );
	}
}

/**
* ------------------------------------------------------
*  Options for team section
* ------------------------------------------------------
*
* @since 1.0
* @package Business Power WordPress Theme
*/
if(! function_exists( 'business_power_get_team_options' ) ){
	function business_power_get_team_options(){
		return array(
			array(
				'id'      => 'enable-team',
				'label'   => esc_html__( 'Enable', 'business-power' ),
				'type'    => 'toggle',
				'default' => true
			),
			array(
				'id'    => 'team-page',
				'label' => esc_html__( 'Content Page', 'business-power' ),
				'type'  => 'dropdown-pages',
				'default' => '0',
				# framework will append prefix eg: business_power_team_callback
				'active_callback' => 'team_callback'
			),
			array(
				'id'    => 'team-btn-text',
				'label' => esc_html__( 'Button Text', 'business-power' ),
				'type'  => 'text',
				'default' => esc_html__( 'View All Member' ,'business-power' ),
				'active_callback' => 'team_callback'
			),
			array(
				'id'    => 'team-pages',
				'label' => esc_html__( 'Sub Pages', 'business-power' ),
				'type'  => 'page-repeater',
				'limit' => 5,
				'active_callback' => 'team_callback'
			),
			array(
				'id'    => 'team-posts-per-page',
				'label' => esc_html__( 'Total team to show', 'business-power' ),
				'type'  => 'number',
				'input_attrs' => array( 'max' => 4, 'min' => 1 ),
				'default' => 3,
				# framework will append prefix eg: business_power_blog_callback
				'active_callback' => 'team_callback'
			),
			array(
				'id'    => 'team-col',
				'label' => esc_html__( 'Total column per row', 'business-power' ),
				'type'  => 'number',
				'input_attrs' => array( 'max' => 4, 'min' => 1 ),
				'default' => 3,
				# framework will append prefix eg: business_power_team_callback
				'active_callback' => 'team_callback'
			),		
			array(
				'id'    => 'team-archive-page',
				'label' => esc_html__( 'Select a Team Archive Page', 'business-power' ),
				'type'  => 'dropdown-pages',
				'default' => 0,
				'active_callback' => 'team_callback'
			),
			
			array(
				'id'      => 'enable-team-shortcode',
				'label'   => esc_html__( 'Enable Shortcode', 'business-power' ),
				'type'    => 'toggle',
				'default' => false
			),
			array(
				'id'    => 'team-shortcode',
				'label' => esc_html__( 'Shortcode', 'business-power' ),
				'type'  => 'text',
				# framework will append prefix eg: business_power_team_shortcode_callback
				'active_callback' => 'team_shortcode_callback'
			)
		);
	}
}