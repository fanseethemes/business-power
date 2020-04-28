<?php
/**
 * ------------------------------------------------------
 *  Lists of files to be loaded for css module
 * ------------------------------------------------------
 *
 * @since 1.0
 * @package Business Power WordPress Theme
 */
function business_power_css_files( $files ){

	$new_files = array(
		'class-css.php',
		'common.php',
		'responsive.php',
	);

	return array_merge( $files, $new_files );
}
add_filter( 'business_power_modules_css', 'business_power_css_files' );