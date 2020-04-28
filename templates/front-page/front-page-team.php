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
<section class="business-power-team-section">
	<svg class="business-power-frontpage-shape"
	 xmlns="http://www.w3.org/2000/svg"
	 xmlns:xlink="http://www.w3.org/1999/xlink"
	 width="501px" height="501px">							
		<path fill-rule="evenodd"  fill="#bde4fb"
		 d="M427.562,427.686 L250.754,500.923 L73.945,427.686 L0.709,250.878 L73.945,74.069 L250.754,0.833 L427.562,74.069 L500.799,250.878 L427.562,427.686 Z"/>
	</svg>
	<div class="container">
		<?php business_power_frontpage_title( 'team' ); ?>
			<?php 
				$pages = business_power_get( 'team-pages' ); 
				if( $pages ){
					$args = apply_filters( 'business_power_team_args', array(
						'post_type'      => 'page',
						'posts_per_page' => business_power_get( 'team-posts-per-page' ),
						'post__in'       => json_decode( $pages )
					));
					$query = new WP_Query( $args );
					if( $query->have_posts() ){
						$cls = "business-power-team-col-" . business_power_get( 'team-col' );
						?>
						<div class="row <?php echo esc_attr( $cls ); ?>">
					<?php
						while( $query->have_posts() ){
							$query->the_post();
							$heading = business_power_get_piped_title();
					?>
							<div class="business-power-team-col-inner">
								<div class="business-power-team-box">
									<div class="business-power-team-image">
										<?php the_post_thumbnail(); ?>
										<div class="business-power-wave-buttom small-wave">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none"><path class="business-power-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7  c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4  c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path></svg>
										</div>
									</div>
									<div class="business-power-team-description">
										<h3><?php echo esc_html( $heading[ 0 ] ); ?></h3>
										<h4><?php echo esc_html( $heading[ 1 ] ); ?></h4>
									</div>
									<a href="<?php the_permalink(); ?>"></a>
								</div>
							</div>
					<?php
						}
						wp_reset_postdata();
					?>
					</div>
						<?php
					}
				}
			?>
		</div>
		<?php
			$btn_txt = business_power_get( 'team-btn-text' );
			$team_archive_id = business_power_get( 'team-archive-page' );
			if( $team_archive_id > 0 ):
		?>
				<div class="business-power-team-btn">
					<a href="<?php echo esc_attr( get_permalink( $team_archive_id ) ) ?>" class="business-power-btn-primary"> 
						<span> <?php echo esc_html( $btn_txt ); ?> <i class="fa fa-long-arrow-right"></i> </span> 
					</a>	
				</div>
			<?php endif; ?>	
	</div> <!-- container -->
</section> <!-- team section -->