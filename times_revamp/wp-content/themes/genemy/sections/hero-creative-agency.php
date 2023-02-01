<?php $atts = $args ?>
<div class="hero-class" data-section_id="hero-2" data-class="hero-section bg-scroll division">
	<div class="row">		
		<div class="col-lg-12 hero-txt">
			<div class="hero-slider text-center"<?php echo genemy_hero_slider_attr($atts); ?>>											
				<ul class="slides">
					<?php echo wpb_js_remove_wpautop( $__content ); ?>										
				</ul>									
			</div>
		</div>	 <!-- END HERO SLIDER HOLDER -->
	</div>	  <!-- End row -->
</div>	<!-- END HERO-2 -->