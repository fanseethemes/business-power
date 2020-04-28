<?php
/**
* Footer options
*
* @return array
* @since 1.0
* @package Business Power WordPress Theme
*/
if(! function_exists( 'business_power_get_footer_options' ) ){
	function business_power_get_footer_options(){
		return array(
			array(
				'id'      => 'footer-social-menu',
				'label'   => esc_html__( 'Show Social Menu', 'business-power' ),
				'description' => esc_html__( 'Please add Social menus for enabling Social menus. Go to Menus for setting up', 'business-power' ),
				'default' => true,
				'type'    => 'toggle',
			),
			array(
			    'id'      	  => 'layout-footer',
			    'label'   	  => esc_html__( 'Footer Layout', 'business-power' ),
			    'description' => esc_html__( 'Add widget to display in footer.', 'business-power' ),
			    'type'    	  => 'radio-image',
			    'default' 	  => '4',
			    'choices' 	  => array(
			        '1' => array(
			            'label' => esc_html__( 'One widget', 'business-power' ),
						'url'   => Business_Power_Helper::get_theme_uri( '/classes/customizer/assets/images/footer-1.png' ),
						'svg'   => '<svg xmlns:xlink="http://www.w3.org/1999/xlink" fill="#D5DADF" viewBox="0 0 100 50"><path d="M100,0V50H0V0Z"></path></svg>'
			        ),
			        '2' => array(
			            'label' => esc_html__( 'Two widget', 'business-power' ),
						'url'   => Business_Power_Helper::get_theme_uri( '/classes/customizer/assets/images/footer-2.png' ),
						'svg'   => '<svg xmlns:xlink="http://www.w3.org/1999/xlink" fill="#D5DADF" viewBox="0 0 100 50"><path d="M49,0V50H0V0Z M100,0V50H51V0Z"></path></svg>'
			        ),
			        '3' => array(
			            'label' => esc_html__( 'Thee widget', 'business-power' ),
						'url'   => Business_Power_Helper::get_theme_uri( '/classes/customizer/assets/images/footer-3.png' ),
						'svg'   => '<svg xmlns:xlink="http://www.w3.org/1999/xlink" fill="#D5DADF" viewBox="0 0 100 50"><path d="M32,0V50H0V0Z M66,0V50H34V0Z M100,0V50H68V0Z"></path></svg>'
			        ),
			        '4' => array(
			            'label' => esc_html__( 'Four widget', 'business-power' ),
						'url'   => Business_Power_Helper::get_theme_uri( '/classes/customizer/assets/images/footer-4.png' ),
						'svg'   => '<svg xmlns:xlink="http://www.w3.org/1999/xlink" fill="#D5DADF" viewBox="0 0 100 50"><path d="M23.5,0V50H0V0Z M49,0V50H25.5V0Z M74.5,0V50H51V0Z M100,0V50H76.5V0Z"></path></svg>'
			        ) 
			    )
			),
			array(
				'id'      => 'footer-copyright-text',
				'label'   => esc_html__( 'Copyright Text', 'business-power' ),
				'default' => esc_html__( 'Copyright &copy; All right reserved', 'business-power' ),
				'type'    => 'textarea',
			    'partial' =>	array(
			    	'selector'	=>	'span#business-power-copyright'
				)
			)
		);
	}
}