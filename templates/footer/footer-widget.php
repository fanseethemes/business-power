<?php
/**
 * Content for footer widget
 *
 * @since 1.0
 * @package Business Power WordPress Theme
 */
 if( !apply_filters( 'business_power_disable_footer_widget', false ) ): ?>
    <footer <?php Business_Power_Helper::schema( 'footer' ); ?> class="business-power-main-footer-section">
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                 	<?php
                 		$num_footer = business_power_get( 'layout-footer' );
                 		for( $i = 1; $i <= $num_footer ; $i++ ){ ?>
                 			<?php if ( is_active_sidebar( "business_power_footer_sidebar_{$i}" ) ) : ?>
		                 		<aside class="col footer-widget-wrapper py-5">
		                 	    	<?php dynamic_sidebar( "business_power_footer_sidebar_{$i}" ); ?>
		                 		</aside>
	                 		<?php endif; ?>
                 	<?php } ?>
                </div>
            </div>
        </div>
    </footer>
<?php endif;
