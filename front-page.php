<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Business Power WordPress Theme
 */
get_header();  
?>
<div id="content">
	<div id="primary" class="content-area">
		<main id="main" class="site-main ">
			<?php 
				if ( have_posts() ){
					while ( have_posts() ){
						the_post();
						$show_content = business_power_get( 'show-content' );
						$show_content_above = business_power_get( 'show-content-above' );

						if( $show_content && $show_content_above ){ 
							get_template_part( 'templates/content/content', '' ); 
						}

						foreach( business_power_get_content_order() as $template ){
							if( business_power_get( "enable-{$template}-shortcode" ) ){
								$shortcode = business_power_get( "{$template}-shortcode" );
								echo do_shortcode( $shortcode );
							}
							
							if( business_power_get( "enable-{$template}" ) ){
								get_template_part( 'templates/front-page/front-page', $template );
							}
						} 

						if( $show_content && !$show_content_above ){ 
							get_template_part( 'templates/content/content', '' ); 
						}
					}
				}
			?>
		</main><!-- .site-main -->
	</div><!-- .content-area -->
</div><!-- content -->
		
<?php get_footer() ?>