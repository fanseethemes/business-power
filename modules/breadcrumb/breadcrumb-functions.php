<?php
/**
 * Shows a breadcrumb for all types of pages.  This is a wrapper function for the Breadcrumb_Trail class,
 * which should be used in theme templates.
 *
 * @since  0.1.0
 * @access public
 * @param  array $args Arguments to pass to Breadcrumb_Trail.
 * @return void|string
 */
if( !function_exists( 'business_power_breadcrumb_trail') ){
	function business_power_breadcrumb_trail( $args = array() ) {

		$breadcrumb = apply_filters( 'business_power_breadcrumb_trail_object', null, $args );

		if ( !is_object( $breadcrumb ) ) 
			$breadcrumb = new Business_Power_Breadcrumb_Trail( $args );

		return $breadcrumb->trail();
	}
}

/**
 * ------------------------------------------------------
 *  Lists of files to be loaded for theme options module
 * ------------------------------------------------------
 *
 * @since 1.0
 * @package Business Power WordPress Theme
 */
function business_power_breadcrumb_files( $files ){

    $new_files = array( 'class-breadcrumb.php' );

    return array_merge( $files, $new_files );
}
add_filter( 'business_power_modules_breadcrumb', 'business_power_breadcrumb_files' );