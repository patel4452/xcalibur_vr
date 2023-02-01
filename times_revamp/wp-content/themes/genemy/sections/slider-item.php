<?php $atts = $args ?>
<li class="hero-slide">	
	
	<h3 class="<?php echo esc_attr($subtitleClass2) ?>" data-animation="fadeInUp" data-animation-delay="300"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'sub_title', $atts) ?>>
		<?php echo apply_filters('perch_modules_text_filter', $sub_title, 'sub_title', $atts) ?>
	</h3>
	<!-- Title -->
	<h2 class="<?php echo esc_attr($titleClass) ?>" data-animation="fadeInUp" data-animation-delay="300"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'title', $atts) ?>>
		<?php echo apply_filters('perch_modules_text_filter', $title, 'title', $atts) ?>
	</h2>
	<!-- lead text -->
	<p class="<?php echo esc_attr($subtitleClass) ?>" data-animation="fadeInUp" data-animation-delay="400"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'lead_text', $atts) ?>>
	   <?php echo apply_filters('perch_modules_text_filter', $lead_text, 'lead_text', $atts) ?>
	</p>	
	<?php echo genemy_get_button_groups($paramsArr, 'tra-hover m-top-50') ?>						
</li>	 <!-- END HERO SLIDE -->