<?php $atts = $args ?>
<li class="hero-slide">
	<div class="hero-content">		
		<h3 class="<?php echo esc_attr($subtitleClass2) ?>" data-animation="fadeInUp" data-animation-delay="300"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'subtitle', $atts) ?>>
			<?php echo apply_filters('perch_modules_text_filter', $subtitle, 'subtitle', $atts) ?>
		</h3>		
		
		<h2 class="<?php echo esc_attr($titleClass) ?>" data-animation="fadeInUp" data-animation-delay="300"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'title', $atts) ?>>
			<?php echo apply_filters('perch_modules_text_filter', $title, 'title', $atts) ?>
		</h2><!-- Title -->
		
		<p class="<?php echo esc_attr($subtitleClass) ?>" data-animation="fadeInUp" data-animation-delay="400"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'lead_text', $atts) ?>>
		   <?php echo apply_filters('perch_modules_text_filter', $lead_text, 'lead_text', $atts) ?>
		</p><!-- lead text -->
	</div>
	<picture>
		<?php do_action( 'genemy_responsive_images', 'image', $atts ); ?>										
		<img src="<?php echo esc_url($image) ?>" alt="<?php echo esc_attr($atts['subtitle']) ?>">
	</picture>	
</li>	<!-- END SLIDE -->