<?php 
/**
* ------------------------------------------------------
*  Lists of files to be loaded for custom fields module
* ------------------------------------------------------
*
* @since 1.0
* @package Business Power WordPress Theme
*/
function business_power_modules_custom_fields_files( $files ){
	$new_files = array( 'class-custom-fields.php' );
	return array_merge( $files, $new_files );
}
add_action( 'business_power_modules_custom-fields', 'business_power_modules_custom_fields_files' );

/**
* ------------------------------------------------------
*  create custom fields
* ------------------------------------------------------
*
* @since 1.0
* @package Business Power WordPress Theme
*/
function business_power_custom_fields(){
	# meta box for sidebar options
	$post_types = array( 'page', 'post' );
	$label = esc_html__( 'Power Business Settings', 'business-power' );
	foreach ( $post_types as $type ) {

		$post = new Business_Power_Custom_Fields( $type );
		$options = array(
			'sidebar-position' => array(
				'type'    => 'select',
				'label'   => esc_html__( 'Sidebar Position:', 'business-power' ),
				'default' => 'customizer',
				'choices' => array(
					'customizer' 	=> esc_html__( 'From customizer', 'business-power' ),
					'left-sidebar' 	=> esc_html__( 'Left', 'business-power' ),
					'right-sidebar' => esc_html__( 'Right', 'business-power' ),
					'no-sidebar' 	=> esc_html__( 'Hide', 'business-power' ),
				),
			),
			'use-customizer-image-for-banner' => array(
				'type'    => 'checkbox',
				'label'   => esc_html__( 'Use banner from customizer', 'business-power' )
			)
		);

		if( 'page' == $type ){
			$page_options = array(
				'disable-inner-banner' => array(
					'type'  => 'checkbox',
					'label' => esc_html__( 'Disable Banner', 'business-power' ),
				),
				'disable-footer-widget' => array(
					'type'  => 'checkbox',
					'label' => esc_html__( 'Disable Footer Widget', 'business-power' ),
				)
			);

			$options = array_merge( $options, $page_options );
		}

		$post->add_meta_box( $label, $options );
	}
}
add_action( 'init', 'business_power_custom_fields' );