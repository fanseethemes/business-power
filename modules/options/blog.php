<?php
/**
* Blog options
*
* @return array
* @since 1.0
* @package Business Power WordPress Theme
*/
if(! function_exists( 'business_power_get_post_options' ) ){
	function business_power_get_post_options(){
		return array(
            array(
                'id'      => 'post-category',
                'label'   =>  esc_html__( 'Show Categories', 'business-power' ),
                'default' => 1,
                'type'    => 'toggle',
            ),
            array(
                'id'      => 'post-date',
                'label'   => esc_html__( 'Show Date', 'business-power' ),
                'default' => 1,
                'type'    => 'toggle',
            ),
            array(
                'id'      => 'post-author',
                'label'   =>  esc_html__( 'Show Author', 'business-power' ),
                'default' => 1,
                'type'    => 'toggle',
            )
     	);
	}
}