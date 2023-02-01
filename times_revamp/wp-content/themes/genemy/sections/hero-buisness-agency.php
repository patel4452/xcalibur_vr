<?php $atts = $args ?>
<div class="hero-class" data-class="hero-section division" data-section_id="hero-12">
	<div class="row d-flex align-items-center">			
		<div class="col-md-6">
			<div class="hero-img video-preview m-bottom-40">
				<?php if( $video_popup == 'yes' ): ?>
				<a class="video-popup2" href="<?php echo esc_url($video_link); ?>">
					<div class="video-btn-md">	
						<div class="video-block-wrapper">
							<div class="play-icon-rose"><div class="ico-bkg"></div>
								<i class="fas fa-play-circle"></i>
							</div>
						</div>
					</div>						
					<picture>
						<?php do_action( 'genemy_responsive_images', 'image', $atts ); ?>
						<img class="img-fluid" src="<?php echo esc_url($image) ?>" alt="<?php echo esc_attr($subtitle) ?>">
					</picture>
				</a>
				<?php else: ?>
					<picture>
						<?php do_action( 'genemy_responsive_images', 'image', $atts ); ?>													
						<img class="img-fluid" src="<?php echo esc_url($image) ?>" alt="<?php echo esc_attr($subtitle) ?>">
					</picture>				
				<?php endif; ?>
			</div>
		</div>

		<div class="col-md-6">
			<div class="hero-txt p-left-45 m-bottom-40">
					
				<!-- Title -->
				<h3 class="<?php echo esc_attr($titleClass) ?>" data-animation="fadeInUp" data-animation-delay="300"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'title', $atts) ?>>
					<?php echo apply_filters('perch_modules_text_filter', $title, 'title', $atts) ?>
				</h3>
				<!-- lead text -->
				<p class="<?php echo esc_attr($subtitleClass) ?>" data-animation="fadeInUp" data-animation-delay="400"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'lead_text', $atts) ?>>
				   <?php echo apply_filters('perch_modules_text_filter', $lead_text, 'lead_text', $atts) ?>
				</p>
				<?php echo genemy_get_button_groups($paramsArr, 'm-top-15') ?>				
			</div>
		</div>	<!-- END HERO TEXT -->
	</div>	  <!-- END HERO-4 CONTENT -->		
</div>	<!-- END HERO-12 -->