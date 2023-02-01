<div class="abox-2 wow"<?php echo genemy_animation_attr($css_animation, $animation_delay); ?>>
	<!-- Image -->
	<img class="img-fluid" src="<?php echo esc_url($image) ?>" alt="<?php echo esc_attr($title) ?>">	
	<!-- Text -->
	<div class="cbox-txt">
		<h5 class="h5-lg"><?php echo genemy_parse_text($title, array('tagclass' => 'rose-color')); ?></h5>
		<?php echo wpautop($content); ?>
	</div>	
</div>