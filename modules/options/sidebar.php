<?php
/**
* Sidebar options
*
* @return array
* @since 1.0
* @package Business Power WordPress Theme
*/
if(! function_exists( 'business_power_get_sidebar_options' ) ){
	function business_power_get_sidebar_options(){
		return array(
			array(
			'id'      => 'sidebar-position',
			'label'   => esc_html__( 'Position' , 'business-power' ),
			'type'    => 'buttonset',
			'default' => 'right-sidebar',
			'choices' => array(
			    'left-sidebar'  => esc_html__( 'Left' , 'business-power' ),
			    'right-sidebar' => esc_html__( 'Right' , 'business-power' ),
			    'no-sidebar'    => esc_html__( 'None', 'business-power' ),
			)
		));
	}
}