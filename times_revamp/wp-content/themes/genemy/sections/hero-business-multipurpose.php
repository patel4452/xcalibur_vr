<?php $atts = $args ?>
<div class="hero-class" data-section_id="hero-6" data-class="bg-scroll hero-section division">	
	<div id="slides"<?php echo genemy_hero_slider_attr($atts); ?>>
		<ul class="slides-container white-color">
			<?php echo wpb_js_remove_wpautop( $content ); ?>										
		</ul><!-- SLIDES HOLDER -->
	</div>	 <!-- END HERO SLIDER HOLDER -->	
</div>	<!-- END HERO-2 -->

<div class="scroll-down">
	<?php if( $subtitle != '' ): ?>
	<div class="mouse"><span class="fa fa-angle-down"></span></div>	
	<span><?php echo esc_attr($subtitle) ?></span>
	<?php endif; ?>
</div><!-- SCROLL DOWN MOUSE -->