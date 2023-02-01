<?php $atts = $args ?>
<div class="hero-class" data-class="bg-fixed hero-section division" data-section_id="hero-8">
	<div class="row">	
		<div class="col-md-7 col-lg-6">
			<div class="hero-txt white-color">
			 	<span class="<?php echo esc_attr($nameClass) ?>" data-animation="fadeInUp" data-animation-delay="300"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'section_name', $atts) ?>>
					<?php echo apply_filters('perch_modules_text_filter', $section_name, 'section_name', $atts) ?>
				</span>
			 	<!-- Title -->
				<h2 class="<?php echo esc_attr($titleClass) ?>" data-animation="fadeInUp" data-animation-delay="300"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'title', $atts) ?>>
					<?php echo apply_filters('perch_modules_text_filter', $title, 'title', $atts) ?>
				</h2>
				<!-- lead text -->
				<p class="<?php echo esc_attr($subtitleClass) ?>" data-animation="fadeInUp" data-animation-delay="400"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'lead_text', $atts) ?>>
				   <?php echo apply_filters('perch_modules_text_filter', $lead_text, 'lead_text', $atts) ?>
				</p>															
				<div class="stores-badge">
					<?php foreach ($paramsArr as $key => $value) : ?>
						<a href="<?php echo esc_url($value['link']) ?>" class="store">
							<img class="appstore" src="<?php echo esc_url($value['image']) ?>" width="160" height="50" alt="<?php echo esc_attr($value['title']) ?>" />
						</a>
					<?php endforeach; ?>
					<span class="os-version"><?php echo esc_attr($require) ?></span>
				</div>	<!-- End Store Badges -->
			</div>
		</div>	<!-- END HERO TEXT -->

		
		<div class="col-md-5 col-lg-5 offset-lg-1">	
			<div class="hero-img">				
				<picture>
					<?php do_action( 'genemy_responsive_images', 'image', $atts ); ?>														
					<img class="img-fluid" src="<?php echo esc_url($image) ?>" alt="<?php echo esc_attr($title) ?>">
				</picture>
			</div>
		</div><!-- HERO IMAGE -->
	</div>	  <!-- End row -->
</div>	<!-- END HERO-8 -->	