<?php get_header(); ?>

	
		<?php get_template_part( 'template-parts/content', 'before' );	?>

		<!-- HERO-15
		============================================= -->	
		<div id="hero-15" class="division m-bottom-30">
			<div class="container">	
				<div class="row">

					<?php
					$title = ot_get_option( '404_title', '404');
					?>
					<!-- HERO TEXT -->
					<div class="col-md-10 offset-md-1">
						<div class="hero-txt text-center">
								
							<!-- Image -->
							<img class="img-fluid" src="<?php echo GENEMY_URI; ?>/images/404-error.jpg" alt="<?php echo esc_attr($title) ?>">

							<!-- Text -->
							<h4 class="h4-xl"><?php echo esc_attr(__('Oops! It looks like you are lost ...!', 'genemy')); ?></h4>

							<!-- Button -->
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-lg btn-arrow">
								<span><?php echo esc_attr( __('Go Back To Home', 'genemy') ); ?> <i class="fas fa-angle-double-right"></i></span>
							</a>
							
						</div>
					</div>	<!-- END HERO TEXT -->
					

				</div>	  <!-- End row -->
			</div>	   <!-- End container --> 	
		</div>	<!-- END HERO-15 -->	


	<?php get_template_part( 'template-parts/content', 'after' );	?>
		 			

<?php get_footer(); ?>