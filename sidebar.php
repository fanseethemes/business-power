<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @since 1.0
 *
 * @package Business Power WordPress Theme
 */

if ( ! is_active_sidebar( 'business_power_sidebar' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php 
		$sidebar = apply_filters( 'business_power_sidebar', 'business_power_sidebar' );
		dynamic_sidebar( $sidebar ); 
	?>
</aside><!-- #secondary -->