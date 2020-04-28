<?php
/**
 * ------------------------------------------------------
 *  Helper for loading modules
 * ------------------------------------------------------
 *
 * @since 1.0
 * @package Business Power WordPress Theme
 */
if( !class_exists( 'Business_Power_Modules_Loader' ) ){

	class Business_Power_Modules_Loader{

		public function __construct( $modules ){
			$base = '/modules/';
			foreach( $modules as $module ){
				$file = $base . $module . '/' . $module . '-functions.php';
				require_once get_theme_file_path( $file );

				$module_files = apply_filters( "business_power_modules_{$module}", array() );
				if( count( $module_files ) > 0 ){
					foreach( $module_files as $file ){
						require_once  get_theme_file_path( $base . $module . '/' . $file );
					}
				}
			}
		}
	}
}

new Business_Power_Modules_Loader(array(
	'hooks',
	'customizer',
	'options',
	'css',
	'breadcrumb',
	'custom-fields'
));