<?php $atts = $args ?>
<div class="abox-3 wow <?php echo esc_attr($css_animation) ?>"<?php echo genemy_animation_attr($css_animation, $animation_delay); ?>>
	<h2 class="<?php echo esc_attr($digitClass) ?>" data-animation="fadeInUp" data-animation-delay="300"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'digit', $atts) ?>>
		<?php echo apply_filters('perch_modules_text_filter', $digit, 'digit', $atts) ?>
	</h2>
	
	<h5 class="<?php echo esc_attr($titleClass) ?>" data-animation="fadeInUp" data-animation-delay="300"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'title', $atts) ?>>
		<?php echo apply_filters('perch_modules_text_filter', $title, 'title', $atts) ?>
	</h5><!-- title -->	
	
	<p class="<?php echo esc_attr($subtitleClass) ?>" data-animation="fadeInUp" data-animation-delay="400"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'subtitle', $atts) ?>>
	   <?php echo apply_filters('perch_modules_text_filter', $subtitle, 'subtitle', $atts) ?>
	</p><!-- lead text -->
</div>