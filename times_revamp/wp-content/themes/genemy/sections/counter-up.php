<div class="statistic-block wow <?php echo esc_attr($css_animation) ?>"<?php echo genemy_animation_attr($css_animation, $animation_delay); ?>>						
	<p class="statistic-number rose-color"><?php echo esc_attr($prefix) ?><span class="count-element"><?php echo intval($count) ?></span></p>
	<p><?php echo esc_attr($title); ?></p>
	<?php if( $subtitle != '' ): ?>
	<p class="p-sm"><?php echo esc_attr($subtitle); ?></p>		
	<?php endif; ?>					
</div>