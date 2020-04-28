<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @since 1.0
 *
 * @package Business Power WordPress Theme
 */
get_header();
?>
<div id="content" class="container">
	<div class="row">
		<div class="<?php echo esc_attr( Business_Power_Helper::is_sidebar_active() ? 'col-lg-8' : 'col-lg-12' ); ?> content-order">
			<div id="primary" class="content-area">	
				<main id="main" class="post-main-content" role="main">
					<?php
						# Loop Start
						while( have_posts() ): 
							the_post(); 
					?>
							<article <?php Business_Power_Helper::schema( 'article' ); ?> 
								id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
								<div class="entry-content">								
									<?php 

										the_content();

										Business_Power_Helper::post_content_navigation();

										get_template_part( 'templates/meta', 'info' );
										
										# If comments are open or we have at least one comment, load up the comment template.
										if ( comments_open() || get_comments_number() ) {
											comments_template();
										}

										# Navigate the post. Next post and Previou post.
										Business_Power_Helper::single_post_navigation();
									?>
								</div><!-- .entry-content -->
							</article><!-- #post-<?php the_ID(); ?> -->
						<?php endwhile; ?>
				</main>
			</div>
		</div>
		<?php Business_Power_Helper::the_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>