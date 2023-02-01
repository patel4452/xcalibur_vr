<?php $video_popup_enable = get_post_meta( get_the_ID(), 'video_popup_enable', true ); ?>
<?php $video_url = get_post_meta( get_the_ID(), 'video_url', true ); ?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?> data-animation="fadeInUp" data-animation-delay="300">

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

	<!-- BLOG POST TEXT -->
	<div class="sblog-post-txt m-bottom-10">			
		<?php genemy_entry_meta( 'single_post_meta' ); ?><!-- Post Data -->
		
		<?php the_title(genemy_post_title_before(), genemy_post_title_after()); ?><!-- Post Title -->
		<?php genemy_social_share(); ?>
		
		<div class="m-bottom-80 p-bottom-40 entry-content">
			<?php the_content(); ?>
		</div><!-- Post Text -->
	</div>
</div>	<!-- END BLOG POST #<?php the_ID(); ?> -->
