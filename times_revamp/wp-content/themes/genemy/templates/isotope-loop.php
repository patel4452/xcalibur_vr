<?php 
if ( $posts->have_posts() ):
	$info = $posts->info; 
	extract($posts->info); 
	$size = (!$img_size)? 'genemy-400x--nocrop' : $img_size;
	?>
	<div id="<?php echo esc_attr($portfolio_id) ?>">
	<?php 
	$args = array(
	    'hide_empty' => true,
	);

	if($tax_term != '') $args['include'] = $tax_term;
	$terms = get_terms( 'category', $args );
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
				  	<div class="portfolio-item <?php echo genemy_get_the_term_list( get_the_ID(), 'category', ' ', ' ', '', false ) ?>">
						<div class="blog-post p-right-30 animated" data-animation="fadeInUp" data-animation-delay="<?php echo intval($count) ?>">        
                <?php if( has_post_thumbnail() ): ?>
                    <!-- BLOG POST IMAGE -->
                    <div class="blog-post-img m-bottom-30">
                        <img class="img-fluid" src="<?php the_post_thumbnail_url( esc_attr($info['img_size']) ); ?>" alt="<?php the_title_attribute(); ?>" /> 
                    </div>
                <?php endif; ?>

                <!-- BLOG POST TEXT -->
                <div class="blog-post-txt">
                    <!-- Post Data -->
                    <?php genemy_entry_meta(); ?>
                    <!-- Post Title -->
                    <h5 class="h5-md">
                        <a class="rose-hover" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h5>
                    <!-- Post Text -->
                    <p><?php echo genemy_get_trim_words(get_the_excerpt(), intval($info['excerpt_length']), '...'); ?>
                    </p>

                </div>
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
