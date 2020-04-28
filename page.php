<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @since 1.0
 * @package Business Power WordPress Theme
 */
get_header();
?>
<div id="content" class="container">
	<div class="row">
		<div id="primary" class="<?php echo esc_attr( Business_Power_Helper::is_sidebar_active() ? 'col-md-8 col-lg-8 content-order' : 'col-lg-12' ); ?>">
			<main id="main" class="site-main">
				<?php 
					while ( have_posts() ) : 
						the_post(); 
				?>
						<article <?php Business_Power_Helper::schema( 'article' ); ?> 
							id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
							<div class="entry-content">
								<?php the_content(); ?>		
							</div><!-- .entry-content -->
							<?php						
								Business_Power_Helper::post_content_navigation();
						
								# If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) {
									comments_template();
								}
							?>
						</article>
				<?php endwhile; ?>
			</main><!-- #main -->
		</div><!-- #primary -->
		<?php Business_Power_Helper::the_sidebar(); ?>
	</div>
</div>		
<?php
get_footer();