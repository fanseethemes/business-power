<?php
/**
* ------------------------------------------------------
*  Active callback functions
* ------------------------------------------------------
*
* @since 1.0
* @package Business Power WordPress Theme
*/
if( !function_exists( 'business_power_blog_shortcode_callback' ) ){
	function business_power_blog_shortcode_callback(){
		return business_power_get( 'enable-blog-shortcode' );
	}
}

if( !function_exists( 'business_power_blog_callback' ) ){
	function business_power_blog_callback(){
		return business_power_get( 'enable-blog' );
	}
}

/**
* ------------------------------------------------------
*  Options for blog section
* ------------------------------------------------------
*
* @since 1.0
* @package Business Power WordPress Theme
*/
if(! function_exists( 'business_power_get_blog_options' ) ){
	function business_power_get_blog_options(){
		return array(
			array(
				'id'      => 'enable-blog',
				'label'   => esc_html__( 'Enable', 'business-power' ),
				'type'    => 'toggle',
				'default' => true
			),
			array(
				'id'    => 'blog-page',
				'label' => esc_html__( 'Content Page', 'business-power' ),
				'type'  => 'dropdown-pages',
				'default' => '0',
				# framework will append prefix eg: business_power_blog_callback
				'active_callback' => 'blog_callback'
			),
			array(
				'id'    => 'blog-posts-per-page',
				'label' => esc_html__( 'Total posts to show', 'business-power' ),
				'type'  => 'number',
				'input_attrs' => array( 'max' => 4, 'min' => 1 ),
				'default' => 4,
				# framework will append prefix eg: business_power_blog_callback
				'active_callback' => 'blog_callback'
			),
			array(
				'id'    => 'blog-col',
				'label' => esc_html__( 'Total column per row', 'business-power' ),
				'type'  => 'number',
				'input_attrs' => array( 'max' => 4, 'min' => 1 ),
				'default' => 4,
				# framework will append prefix eg: business_power_blog_callback
				'active_callback' => 'blog_callback'
			),
			array(
				'id'      => 'enable-blog-shortcode',
				'label'   => esc_html__( 'Enable Shortcode', 'business-power' ),
				'type'    => 'toggle',
				'default' => false
			),
			array(
				'id'    => 'blog-shortcode',
				'label' => esc_html__( 'Shortcode', 'business-power' ),
				'type'  => 'text',
				# framework will append prefix eg: business_power_blog_shortcode_callback
				'active_callback' => 'blog_shortcode_callback'
			)
		);
	}
}