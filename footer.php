<?php
/**
 * The template for displaying the footer.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @since 1.0
 * @package Business Power WordPress theme
 */
?>
	<section class="site-footer footer-area">

		<?php do_action( 'business_power_footer' ); ?>

	    <div class="footer-divider w-100"></div>
	    <footer <?php Business_Power_Helper::schema( 'footer' ); ?> class="business-power-lower-footer-section">
	        <div class="container-fluid">
	             <div class="row justify-content-between">
	             	<?php do_action( 'business_power_copyright' ); ?>
	            </div>
	        </div>
	    </footer>
	</section>
	<?php 
		do_action( 'business_power_after_footer' );  
		wp_footer(); 
	?>
 </body>
 </html>