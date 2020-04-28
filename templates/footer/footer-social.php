<?php
/**
 * Theme social menu
 *
 * @since 1.0
 * @package Business Power WordPress Theme
 */ ?>
 <div class="col-xs-12 col-sm-4 business-power-social-link-footer business-power-social-menu">
 	<?php 
 		wp_nav_menu(array(
 			'theme_location' => 'social-menu-footer',
 			'menu_id'      => 'social-menu-footer',
 			'menu_class'   => 'menu',
 			'link_before'  => '<span>',
 			'link_after'   => '</span>',
 			'fallback_cb'     => array( 'Business_Power_Helper' ,'social_menu_fb' ),
 			'depth'        => 1,
 			'echo'         => true
 		));
 	?>
 </div>