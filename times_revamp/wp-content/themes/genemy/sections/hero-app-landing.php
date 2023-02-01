<?php $atts = $args ?>
<div class="hero-class" data-class="bg-scroll bg-inner division" data-section_id="hero-14">
	<div class="row d-flex align-items-center">		
		<div class="col-md-7">
			<div class="hero-txt white-color">				
				
				<!-- Title -->
				<h2 class="<?php echo esc_attr($titleClass) ?>" data-animation="fadeInUp" data-animation-delay="300"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'title', $atts) ?>>
					<?php echo apply_filters('perch_modules_text_filter', $title, 'title', $atts) ?>
				</h2>

				<!-- lead text -->
				<p class="<?php echo esc_attr($subtitleClass) ?>" data-animation="fadeInUp" data-animation-delay="400"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'lead_text', $atts) ?>>
				   <?php echo apply_filters('perch_modules_text_filter', force_balance_tags($lead_text), 'lead_text', $atts) ?>
				</p>
			
				<?php if( $video_popup == 'yes' ): ?>													
				<div class="modal-video">								
					<a class="video-popup2" href="<?php echo esc_url($video_link); ?>"><i class="white-color fas fa-play-circle"></i><?php echo genemy_parse_text($video_title) ?></a>						
				</div>
				<?php endif; ?>
			</div>
		</div>	<!-- END HERO TEXT -->
		
		<div class="col-md-5">	
			<div class="hero-14-img">
				<picture>
					<?php do_action( 'genemy_responsive_images', 'image', $atts ); ?>														
					<img class="img-fluid" src="<?php echo esc_url($image) ?>" alt="<?php echo esc_attr($title) ?>">
				</picture>
			</div>
		</div><!-- HERO IMAGE -->

	</div>	  <!-- End row -->
</div>	<!-- END HERO-8 -->