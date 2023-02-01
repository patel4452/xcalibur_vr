<?php $atts = $args ?>
<div class="<?php echo implode(' ', $class) ?>"<?php echo genemy_animation_attr($css_animation, $animation_delay); ?>>
	<?php if( $icon != '' ): ?>
	<div class="b-icon <?php echo esc_attr($icon_color) ?>-icon"><span class="<?php echo esc_attr($icon); ?>"></span></div>
	<?php endif; ?>
	<?php if( $tra_text_display == 'yes' ): ?>
		<h2 class="tra-digit"><?php echo esc_attr($tra_digit) ?></h2>
	<?php endif; ?>	
	<?php if( class_exists('PerchVcMap')): ?>	
		<h5 class="<?php echo esc_attr($heading_class) ?>"><?php echo genemy_add_link_in_vc_element( $title_html, 'title', $atts); ?></h5>
	<?php endif; ?>
	<div class="<?php echo esc_attr($subtitle_text_color) ?>-color"><?php echo wpautop($subtitle); ?></div>	
	<?php if( $add_button == 'yes' ){ echo genemy_element_buttons_html($atts, 'm-top-15'); } ?>
</div>