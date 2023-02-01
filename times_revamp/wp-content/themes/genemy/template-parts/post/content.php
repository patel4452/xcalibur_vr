<?php $video_popup_enable = get_post_meta( get_the_ID(), 'video_popup_enable', true ); ?>
<?php $video_url = get_post_meta( get_the_ID(), 'video_url', true ); ?>
	<div id="post-<?php the_ID(); ?>" <?php post_class('wow fadeInUp'); ?>  data-wow-delay="0.1s">
		<?php if( has_post_thumbnail() ): ?>			
		<div class="blog-post-img m-bottom-25">
			<?php if($video_popup_enable == 'on'): ?>
				<div class="video-preview text-center m-bottom-10">

					<!-- Change the link HERE!!! -->						
				<a class="video-popup2" href="<?php echo esc_url($video_url) ?>"> 
					<!-- Play Icon -->									
					<div class="video-btn-md animated" data-animation="fadeInUp" data-animation-delay="800">	
						<div class="video-block-wrapper">
							<div class="play-icon-<?php echo genemy_default_color(); ?>"><div class="ico-bkg"></div>
								<i class="fas fa-play-circle"></i>
							</div>
						</div>
					</div>
			<?php endif; ?>
			<?php the_post_thumbnail( 'genemy-800x400-crop', array('class' => 'img-fluid') ) ?>
			<?php if($video_popup_enable == 'on'): ?>
				</a>								

			</div>
			<?php endif; ?>
		</div><!-- BLOG POST IMAGE -->
		<?php endif; ?>
		
		<div class="blog-post-txt m-bottom-10">
			<?php genemy_entry_meta(); ?>
			<h5 class="h5-xl"><?php genemy_sticky_post_text(); ?><a href="<?php the_permalink() ?>" class="rose-hover"><?php the_title(); ?></a></h5><!-- Post Title -->
			
			<div class="m-bottom-25 entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- Post Text -->
			
		</div><!-- BLOG POST TEXT -->

		<?php
		wp_link_pages( array(					
			'nextpagelink'     => esc_attr(__( 'Next', 'genemy')),
		'previouspagelink' => esc_attr(__( 'Previous', 'genemy' )),
			'pagelink'         => '%',
			'echo'             => 1
		) );

		$read_more_text = ot_get_option( 'read_more_text', 'More Details' );
		$read_more_text = sprintf( _x('%s', 'Read more text', 'genemy'), $read_more_text );
		?>

		<a href="<?php the_permalink(); ?>" class="btn btn-sm btn-arrow btn-<?php echo genemy_default_color(); ?>" >
			<span><?php echo esc_attr($read_more_text); ?> <i class="fas fa-angle-double-right"></i></span>
		</a><!-- Post Link -->

	</div>	<!-- END BLOG POST #post-<?php the_ID(); ?> -->

