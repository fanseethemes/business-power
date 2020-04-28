<?php
/**
* Register Header Options
*
* @return array
* @since 1.0
* @package Business Power WordPress Theme
*/
if( ! function_exists( 'business_power_get_header_options' ) ){
	function business_power_get_header_options(){	
		return array(
			array(
				'id'      	  => 'ib-blog-title',
				'label'   	  => esc_html__( 'Title' , 'business-power' ),
				'description' => esc_html__( 'When your homepage displays your latest posts. Leave it empty to hide it.' , 'business-power' ),
				'default' 	  => esc_html__( 'Latest Blog' , 'business-power' ),
				'type'	  	  => 'text',
				'priority'    => 10,
			),
		    array(
		        'id'	  	  => 'ib-title-size',
		        'label'   	  => esc_html__( 'Font Size', 'business-power' ),
		        'description' => esc_html__( 'The value is in px. Defaults to 40px.' , 'business-power' ),
		        'default' => array(
		    		'desktop' => 40,
		    		'tablet'  => 32,
		    		'mobile'  => 32,
		    	),
				'input_attrs' =>  array(
		            'min'   => 1,
		            'max'   => 60,
		            'step'  => 1,
		        ),
		        'type' => 'slider',
		        'priority' => 20
		    ),
		    array(
		        'id'      => 'ib-title-color',
		        'label'   => esc_html__( 'Text Color' , 'business-power' ),
		        'type'    => 'color',
		        'default' => '#ffffff',
		        'priority' => 30
		    ),
		    array(
		    	'id' 	   => 'ib-background-color',
		    	'label'    => esc_html__( 'Overlay Color', 'business-power' ),
		    	'default'  => 'rgba(10,10,10,0.7)',
		    	'type' 	   => 'color-picker',
		    	'priority' => 40,
		    ),
		    array(
		        'id'      => 'ib-text-align',
		        'label'   => esc_html__( 'Alignment' , 'business-power' ),
		        'type'    => 'buttonset',
		        'default' => 'banner-content-center',
		        'choices' => array(
		        	'banner-content-left'   => esc_html__( 'Left' , 'business-power'   ),
		        	'banner-content-center' => esc_html__( 'Center' , 'business-power' ),
		        	'banner-content-right'  => esc_html__( 'Right' , 'business-power'  ),
		         ),
		        'priority' => 50
		    ),
			array(
			    'id'      => 'ib-image-attachment', 
			    'label'   => esc_html__( 'Image Attachment' , 'business-power' ),
			    'type'    => 'buttonset',
			    'default' => 'banner-background-scroll',
			    'choices' => array(
			    	'banner-background-scroll'           => esc_html__( 'Scroll' , 'business-power' ),
			    	'banner-background-attachment-fixed' => esc_html__( 'Fixed' , 'business-power' ),
			    ),
		        'priority' => 60
			),
			array(
			    'id'      	=> 'ib-height',
			    'label'   	=> esc_html__( 'Height (px)', 'business-power' ),
			    'type'    	=> 'slider',
	            'description' => esc_html__( 'The value is in px. Defaults to 420px.' , 'business-power' ),
	            'default' => array(
	        		'desktop' => 420,
	        		'tablet'  => 420,
	        		'mobile'  => 420,
	        	),
	    		'input_attrs' =>  array(
	                'min'   => 1,
	                'max'   => 1000,
	                'step'  => 1,
	            ),
			),
		);
	}
}