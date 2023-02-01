<?php $atts = $args ?>
<div class="hero-class" data-class="hero-section division" data-section_id="hero-5">
	<div class="bg-scroll hero-5-text division"<?php echo $style ?>>
		<div class="container white-color">		
			<div id="hero-5-content" class="row">
				<div class="col-md-12 hero-txt text-center">
					<h3 class="<?php echo esc_attr($titleClass) ?>" data-animation="fadeInUp" data-animation-delay="300"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'title', $atts) ?>>
						<?php echo apply_filters('perch_modules_text_filter', $title, 'title', $atts) ?>
					</h3> <!-- Title -->
					<p class="<?php echo esc_attr($subtitleClass) ?>" data-animation="fadeInUp" data-animation-delay="400"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'lead_text', $atts) ?>>
					   <?php echo apply_filters('perch_modules_text_filter', $lead_text, 'lead_text', $atts) ?>
					</p> <!-- lead text -->				
					<div class="hero-btns"><?php echo genemy_get_button_groups($paramsArr, 'tra-hover btn-yellow m-top-35 ') ?></div><!-- Button -->
				</div>							
			</div>													
		</div>		
	</div> 	  <!-- END HERO TEXT -->
</div>	<!-- END HERO-6 -->

<div class="hero-5-image division">
	<div class="container">		
		<div id="hero-5-img" class="row">								
			<div class="col-md-12 text-center">	
				<picture>
					<?php do_action( 'genemy_responsive_images', 'image', $atts ); ?>														
					<img class="img-fluid" src="<?php echo esc_url($image) ?>" alt="<?php echo esc_attr($title) ?>">
				</picture>
			</div>							
		</div>												
	</div>
</div> <!-- HERO IMAGE -->