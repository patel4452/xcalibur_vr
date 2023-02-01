<?php $atts = $args ?>
<div class="hero-class video-play white-color"
	data-class="bg-video" 
	data-poster="<?php echo esc_url($image) ?>" 
	data-webm="<?php echo esc_url($webm) ?>" 
	data-ogv="<?php echo esc_url($ogv) ?>" 
	data-mp4="<?php echo esc_url($mp4) ?>">
	<?php echo wpb_js_remove_wpautop($content); ?>
</div>	<!-- END HERO-2 -->