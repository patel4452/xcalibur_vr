<?php $atts = $args ?>
<div class="hero-class" data-class="bg-scroll hero-section division" data-section_id="hero-3">
	<div class="row d-flex align-items-center">
		<div class="col-md-7 col-xl-7">
			<div class="hero-txt white-color">
				<h3 class="<?php echo esc_attr($titleClass) ?>" data-animation="fadeInUp" data-animation-delay="300"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'title', $atts) ?>>
					<?php echo apply_filters('perch_modules_text_filter', $title, 'title', $atts) ?>
				</h3> <!-- title -->
				<p class="<?php echo esc_attr($subtitleClass) ?>" data-animation="fadeInUp" data-animation-delay="400"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'lead_text', $atts) ?>>
				   <?php echo apply_filters('perch_modules_text_filter', $lead_text, 'lead_text', $atts) ?>
				</p> <!-- Text -->
				<?php if( $video_popup == 'yes' ): ?>					
				<div class="modal-video">								
					<a class="video-popup2" href="<?php echo esc_url($video_link); ?>"> <i class="white-color fas fa-play-circle"></i><?php echo genemy_parse_text($video_title) ?></a>
				</div>
				<?php endif; ?>
			</div>	
		</div>	<!-- END HERO TEXT -->
		<div id="hero-form" class="col-md-5 col-xl-4 offset-md-0 offset-xl-1">
			<div class="hero-form">
				<div class="row register-form">
					<h5 class="h5-xl"><?php echo esc_attr($form_title) ?></h5>						
					<p><?php echo esc_attr($form_desc) ?></p>							
					<?php echo do_shortcode('[contact-form-7 id="'.intval($id).'"]'); ?>
				</div>
			</div>
		</div>	<!-- END HERO FORM -->
	</div>	   <!-- End row -->	
</div>	<!-- END HERO-3 -->