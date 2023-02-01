<?php if ( $posts->have_posts() ): extract($posts->info); 
	$size = $img_size;
	$portfolio_id = (($spacing) && ($spacing == 'yes'))? 'portfolio-4' : 'portfolio-3';
	?>
	<div id="<?php echo esc_attr($portfolio_id) ?>" class="portfolio-section">
	<?php 
	$args = array(
	    'hide_empty' => true,
	);

	if($tax_term != '') $args['include'] = $tax_term;

	$terms = get_terms( 'portfolio_category', $args );
	if( !empty($terms) && ( $filter == 'yes' ) ):
	?>
	<!--   PORTFOLIO  -->
	<div class="row">
		<div class="col-lg-12">
			<div class="portfolio-filter m-bottom-50" data-active="<?php echo esc_attr($active) ?>">
			
					<button class="is-checked" data-filter="*"><?php printf(_x('%s', 'All text', 'genemy'), ot_get_option('portfolio_all_text', 'All')); ?></button>
					<?php 
					foreach ($terms as $key => $value) {
						echo '<button class="'.(($value->slug == $active)? ' is-checked' : '').'" data-filter=".'.esc_attr($value->slug).'">'.esc_attr($value->name).'</button>';
					} 
					?>
				
			</div>	
		</div>	
	</div>	
	<?php endif; ?>				

	<!-- PORTFOLIO IMAGES HOLDER -->
	<div class="row">	
		<div class="col-md-12 portfolio-items-list">
			<div class="masonry-wrap grid-loaded">
				<?php 
				$count = 0;
				while ( $posts->have_posts() ) : $posts->the_post(); ?>				

		               <!-- IMAGE #1 -->
				  	<div class="portfolio-item <?php echo genemy_get_the_term_list( get_the_ID(), 'portfolio_category', ' ', ' ', '', false ) ?>">
						<div class="hover-overlay"> 
							
							<?php if( has_post_thumbnail() ): ?>
								<!-- Project Preview Image -->
								<img class="img-fluid" src="<?php the_post_thumbnail_url( $size ); ?>" alt="<?php the_title_attribute(); ?>" />	
							<?php endif; ?>
							<div class="item-overlay"></div>

							
							<div class="project-data white-color">								
									
								<p class="<?php echo genemy_default_color() ?>-color"><?php echo genemy_get_the_term_list( get_the_ID(), 'portfolio_category', '', ', ', '', true ) ?></p><!-- Project Meta -->	

								<h5 class="h5-lg">
									<?php if( $link_type == 'link' ): ?>
										<a class="portfolio-link" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
									<?php else: ?>	
									<!-- Image Zoom -->
									<a class="image-link" href="<?php the_post_thumbnail_url( 'full' ); ?>" title="<?php the_title_attribute(); ?>">
									<?php endif; ?>
										<?php the_title(); ?>											
									</a>
								</h5><!-- Project Link -->
								
							</div><!-- Project Description -->
							
						</div>	
					</div>	<!-- END IMAGE #1 -->

				<?php endwhile; ?>
			</div>	
		</div>							
	</div>		<!-- END PORTFOLIO IMAGES HOLDER -->
	</div>
<?php

	// Posts not found
	else :
		echo '<h4>' . __( 'Portfolio not found', 'genemy' ) . '</h4>';
	endif;
?>
