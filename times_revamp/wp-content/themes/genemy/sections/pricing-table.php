<div class="<?php echo implode(' ', $wrapper_class); ?>"<?php echo genemy_animation_attr($css_animation, $animation_delay); ?>>
	<h5 class="h5-lg"><?php echo esc_attr($title) ?></h5><!-- Plan Price  -->
	<div class="pricing-plan <?php echo esc_attr($borderclass) ?>">									
		<sup><?php echo esc_attr($unit) ?></sup>								
		<span class="price"><?php echo esc_attr($price) ?></span>
		<p class="validity"><?php echo esc_attr($validity) ?></p>
	</div>
	<?php if( $button_position == 'before' ): ?>
	<a href="<?php echo esc_url($link); ?>" class="btn btn-arrow m-top-45 <?php echo esc_attr($btnclass) ?>">
		<span><?php echo esc_attr($link_title) ?> <i class="fas fa-angle-double-right"></i></span>
	</a><!-- Pricing Table Button  -->
	<?php endif; ?>
	<?php echo wpb_js_remove_wpautop($content, true) ?>
	<?php if( $button_position == 'after' ): ?>
	<a href="<?php echo esc_url($link); ?>" class="btn btn-arrow <?php echo esc_attr($btnclass) ?>">
		<span><?php echo esc_attr($link_title) ?> <i class="fas fa-angle-double-right"></i></span>
	</a><!-- Pricing Table Button  -->
	<?php endif; ?>
</div>