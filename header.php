<?php
/**
 * The Header for our theme.
 *
 * @since 1.0 
 *
 * @package Business Power WordPress Theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
 	<meta charset="<?php bloginfo( 'charset' ); ?>">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
 	<?php wp_head(); ?>
</head>
<body <?php echo Business_Power_Helper::schema( 'body' ); body_class(); ?> >
<?php
	wp_body_open();

	do_action( 'business_power_before_header' ); 
	
	do_action( 'business_power_header' ); 

	do_action( 'business_power_after_header' );

	           
