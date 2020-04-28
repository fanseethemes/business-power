<?php
/**
* ------------------------------------------------------
*  Template for service section
* ------------------------------------------------------
*
* @since 1.0
* @package Business Power WordPress Theme
*/
?>
<section class="business-power-services-section">

	<svg class="business-power-frontpage-shape"
		 xmlns="http://www.w3.org/2000/svg"
		 xmlns:xlink="http://www.w3.org/1999/xlink"
		 width="745px" height="746px">								
		<path fill-rule="evenodd"  fill="#bfe5fc"
		 d="M635.902,636.009 L372.651,745.051 L109.400,636.009 L0.358,372.758 L109.400,109.508 L372.651,0.466 L635.902,109.508 L744.943,372.758 L635.902,636.009 Z"/>
	</svg><!-- polygon -->

	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6 order-mobile-2">
				<div class="business-power-services-icon-box-wrapper">
					<?php 
						$pages = business_power_get( 'service-pages' ); 
						if( $pages ){
							$args = apply_filters( 'business_power_service_args', array(
								'post_type' => 'page',
								'limit'     => 6,
								'post__in'  => json_decode( $pages )
							));
							$query = new WP_Query( $args );
							if( $query->have_posts() ){
								while( $query->have_posts() ){
									$query->the_post();
							?>
								<div class="business-power-services-icon-box">
									<div class="business-power-services-icon-box-inner">
										<?php the_post_thumbnail(); ?>
										<h3><?php the_title(); ?></h3>
										<a href="<?php the_permalink(); ?>"></a>
									</div>
								</div>
							<?php
								}
								wp_reset_postdata();
							}
						}
					?>
				</div><!-- icon box wrapper -->	
				<?php
					$btn_txt = business_power_get( 'service-btn-text' );
					$page_id = business_power_get( 'service-page' );
					$query = new WP_Query(array(
						'page_id' => $page_id
					));
					$data = array();
					if( $query->have_posts() ){
						while( $query->have_posts() ){
							$query->the_post();
							$data = array(
								'title'   => get_the_title(),
								'link'    => get_the_permalink(),
								'content' => get_the_excerpt()
							);
						}
						wp_reset_postdata();
					}
				?>

				<?php if( $page_id ): ?>
					<div class="display-on-mobile more-services-mbl">
						<a href="<?php echo esc_url( $data['link'] ); ?>" class="business-power-btn-primary"> 
							<span><?php echo esc_html( $btn_txt ); ?> <i class="fa fa-long-arrow-right"></i> </span> 
						</a>
					</div>
				<?php endif; ?>								
			</div><!-- col-6 -->

			<div class="col-12 col-md-6 order-mobile-1">
				<?php if( $page_id ): ?>
					<div class="business-power-services-text-wrapper">
						<div class="business-power-services-text">
							<h2 class="business-power-section-title section-title-black"><?php echo esc_html( $data['title'] ); ?></h2>
							<div class="business-power-services-text-desc"><?php echo $data['content']; //WPCS: XSS ok ?></div>
							<a href="<?php echo esc_url( $data[ 'link' ] ); ?>" class="business-power-btn-primary hide-on-mobile"> 
								<span><?php echo esc_html( $btn_txt ); ?> <i class="fa fa-long-arrow-right"></i> </span> 
							</a>	
						</div>										
					</div>
				<?php endif; ?>
			</div><!-- col-6 -->
		</div><!-- row -->
	</div><!-- container -->
</section>
			