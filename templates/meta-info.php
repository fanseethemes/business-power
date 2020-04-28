<?php
/**
 * Displays the meta information
 *
 * @since 1.0
 *
 * @package Business Power WordPress Theme
 */?>

<?php if ( 'post' === get_post_type() ) : ?>
	<?php 
		$category = business_power_get( 'post-category' );
		$author   = business_power_get( 'post-author' );
		$date     = business_power_get( 'post-date' );
	if( $category || $author || $date ) : ?>
		<div class="entry-meta 
			<?php 
				if( is_single() ){
					echo esc_attr( 'single' );
				} 
			?>"
		>
			<?php Business_Power_Helper::get_author_image(); ?>
			<?php if( $author || $date ) : ?>
				<div class="author-info">
					<?php
						Business_Power_Helper::the_date();			
						Business_Power_Helper::posted_by();
					?>
				</div>
			<?php endif; ?>
		</div>
		<?php Business_Power_Helper::the_category(); ?>	
	<?php endif; ?>
<?php endif; ?>