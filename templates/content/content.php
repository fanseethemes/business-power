<?php
/**
 * Template part for displaying page content in index.php and archive.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @since 1.0
 * @package Business Power WordPress Theme
 */
?>
<article <?php echo Business_Power_Helper::schema( 'article' ); ?> id="post-<?php the_ID(); ?>" <?php post_class( 'business-power-post' ); ?> >
	<div class="image-full post-image" style="background-image: url( '<?php the_post_thumbnail_url( array( 360, 252 ) );?>') , url('<?php echo esc_attr( Business_Power_Helper::get_theme_uri( 'assets/img/default-image.jpg' ) ); ?>' )">
		<?php Business_Power_Helper::post_format_icon() ?>
	</div>	
	
	<div class="post-content-wrap">		
		<?php 
			Business_Power_Helper::get_title();
			get_template_part( 'templates/meta', 'info' );
			the_excerpt();	
			Business_Power_Helper::get_comment_number();
		?>
	</div>
</article>