<?php $atts = $args ?>
<div class="hero-class" data-class="hero-section division" data-section_id="hero-4">
	<div class="row d-flex align-items-center">		
		<div class="col-md-6">
			<div class="hero-txt">
			 	<span class="<?php echo esc_attr($nameClass) ?>" data-animation="fadeInUp" data-animation-delay="300"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'section_name', $atts) ?>>
					<?php echo apply_filters('perch_modules_text_filter', $section_name, 'section_name', $atts) ?>
				</span>
				<h3 class="<?php echo esc_attr($titleClass) ?>" data-animation="fadeInUp" data-animation-delay="300"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'title', $atts) ?>>
					<?php echo apply_filters('perch_modules_text_filter', $title, 'title', $atts) ?>
				</h3> <!-- title -->
				<p class="<?php echo esc_attr($subtitleClass) ?>" data-animation="fadeInUp" data-animation-delay="400"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'lead_text', $atts) ?>>
				   <?php echo apply_filters('perch_modules_text_filter', $lead_text, 'lead_text', $atts) ?>
				</p> <!-- lead text -->	
				<?php echo genemy_get_button_groups($paramsArr, 'm-top-20') ?>					
			</div>
		</div>	<!-- END HERO TEXT -->

		<?php if(!empty($paramsArr2)): ?>			
		<div class="col-md-6">				
			<div class="hero-img portfolio-items-list">
				<div class="masonry-wrap grid-loaded">
					<?php foreach ($paramsArr2 as $key => $value) :  ?>						
				  	<div class="portfolio-item width_2">
						<img class="img-fluid" src="<?php echo esc_url($value['image']) ?>" alt="<?php echo esc_attr($value['title']) ?>" />							
					</div><!-- IMAGE #1 -->
					<?php endforeach; ?>
				</div>
			</div>			
		</div>	<!-- END HERO IMAGE -->
		<?php endif; ?>	
	</div>	  <!-- End row -->
</div>	<!-- END HERO-4 -->