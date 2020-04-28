<?php
/**
 * Content for header
 *
 * @since 1.0
 * @package Business Power WordPress Theme
 */ 
?>
<div class="business-power-main-header-wrapper">
	<div class="container">
		<section class="business-power-main-header">

			<div class="business-power-header-search">
				<?php get_search_form(); ?>
				<button type="button" class="close business-power-toggle-search">
					<i class="fa fa-times" aria-hidden="true"></i>
				</button>
			</div>
			
			<div class="site-branding">
				<div>
					<?php the_custom_logo(); ?>
					<div>
						<?php if ( is_front_page() ) :
							?>
							<h1 class="site-title">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
									<?php bloginfo( 'name' ); ?>
								</a>
							</h1>
							<?php
						else :
							?>
							<p class="site-title">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
									<?php bloginfo( 'name' ); ?>
								</a>
							</p>
							<?php
						endif;
						$description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ) :
							?>
							<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
						<?php endif; ?>
					</div>
				</div>
			</div>

			<div class="business-power-navigation-n-options">
				<nav class="business-power-main-menu" id="site-navigation">
					<?php 
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'fallback_cb'    => array( 'Business_Power_Helper', 'primary_menu_fb' ),
							'echo'           => true,
							'container'      => false,
							'menu_id'        => 'primary-menu',
							'menu_class'     => 'navigation clearfix'
						)); 
					?>
				</nav> 
				<?php do_action( 'business_power_after_primary_menu' ); ?>
			</div>				
		</section>

	</div>
</div>