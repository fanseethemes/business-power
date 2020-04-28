<?php
/**
* Register Color Options
*
* @return array
* @since 1.0
* @package Business Power WordPress Theme
*/
if( ! function_exists( 'business_power_get_color_options' ) ){
	function business_power_get_color_options(){	
		return array(
			array(
				'id'      => 'primary-color',
				'label'   => esc_html__( 'Primary Color', 'business-power' ),
				'default' => '#1a55cb',
				'type'    => 'color-picker',
			),
			array(
				'id'      => 'body-paragraph-color',
				'label'   => esc_html__( 'Body Text Color', 'business-power' ),
				'default' => '#5f5f5f',
				'type'    => 'color-picker',
			),
			array(
				'id'      => 'primary-menu-item-color',
				'label'   => esc_html__( 'Primary Menu Item color', 'business-power' ),
				'default' => '#737373',
				'type'    => 'color-picker',
			),
			array(
				'id'   => 'line-1',
				'type' => 'horizontal-line',
			),
			array(
				'id'      => 'link-color',
				'label'   => esc_html__( 'Link Color', 'business-power' ),
				'default' => '#145fa0',
				'type'    => 'color-picker',
			),
			array(
				'id'      => 'link-hover-color',
				'label'   => esc_html__( 'Link Hover Color', 'business-power' ),
				'default' => '#737373',
				'type'    => 'color-picker',
			),
			array(
				'id'   => 'line-2',
				'type' => 'horizontal-line',
			),
			array(
				'id'      => 'sb-widget-title-color',
				'label'   => esc_html__( 'Sidebar Widget Title Color', 'business-power' ),
				'default' => '#000000',
				'type'    => 'color-picker',
			),
			array(
				'id'      => 'sb-widget-content-color',
				'label'   => esc_html__( 'Sidebar Widget Content Color', 'business-power' ),
				'default' => '#282835',
				'type'    => 'color-picker',
			),
			array(
				'id'   => 'line-3',
				'type' => 'horizontal-line',
			),
			array(
				'id'      => 'footer-title-color',
				'label'   => esc_html__( 'Footer Widget Title Color', 'business-power' ),
				'default' => '#fff',
				'type'    => 'color-picker',
			),
			array(
				'id'      => 'footer-content-color',
				'label'   => esc_html__( 'Footer Widget Content Color', 'business-power' ),
				'default' => '#a8a8a8',
				'type'    => 'color-picker',
			),
			array(
				'id'   => 'line-4',
				'type' => 'horizontal-line',
			),
			array(
				'id'      => 'footer-top-background-color',
				'label'   => esc_html__( 'Footer Background Color', 'business-power' ),
				'default' => '#28292a',
				'type'    => 'color-picker',
			),
			array(
				'id'      => 'footer-copyright-background-color',
				'label'   => esc_html__( 'Footer Copyright Background Color', 'business-power' ),
				'default' => '#0c0808',
				'type'    => 'color-picker',
			),
			array(
				'id'      => 'footer-copyright-text-color',
				'label'   => esc_html__( 'Footer Copyright Text Color', 'business-power' ),
				'default' => '#ffffff',
				'type'    => 'color-picker',
			),
		);
	}
}