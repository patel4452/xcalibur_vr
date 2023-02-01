<?php $atts = $args ?>
<div class="hero-class white-color" data-class="bg-scroll hero-section division" data-section_id="hero-7">
	<div class="row">
		<div class="col-md-10">
			<div class="hero-txt">
				<!-- title -->
				<h3 class="<?php echo esc_attr($titleClass) ?>" data-animation="fadeInUp" data-animation-delay="300"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'title', $atts) ?>>
					<?php echo apply_filters('perch_modules_text_filter', $title, 'title', $atts) ?>
				</h3>
				<?php echo genemy_get_button_groups($paramsArr, 'm-top-15 m-right-25 tra-hover') ?>
				<?php if( $video_popup == 'yes' ): ?>
				<div class="modal-video">								
					<a class="video-popup2" href="<?php echo esc_url($video_link); ?>"> <i class="white-color fas fa-play-circle"></i><?php echo genemy_parse_text($video_title) ?></a>									
				</div>
				<?php endif; ?>
			</div>
		</div>	<!-- END HERO TEXT -->
	</div>	  <!-- End row -->	
</div>	<!-- END HERO-4 -->