<?php
/**
 * Theme copyright template
 *
 * @since 1.0
 * @package Business Power WordPress Theme
 */ ?>
 <div class="col-xs-12 col-sm-4">
  	<span id="business-power-copyright">
     	<?php
     		$footer_text = business_power_get( 'footer-copyright-text' );
     		echo esc_html( $footer_text );
     	?>
  	</span>	                 	
 </div>