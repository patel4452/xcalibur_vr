<?php $atts = $args ?>
<!-- HERO-1-->	
<div id="hero-1-txt" class="hero-class bg-scroll division" data-class="hero-section" data-section_id="hero-1"<?php echo $style ?>>	
	<div class="container">
	<div class="row white-color d-flex align-items-center <?php echo esc_attr($align) ?>">

		<div class="col-md-10 col-lg-9">
			<div class="hero-txt ">				
				<h2 class="<?php echo esc_attr($titleClass) ?>" data-animation="fadeInUp" data-animation-delay="300"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'title', $atts) ?>>
					<?php echo apply_filters('perch_modules_text_filter', $title, 'title', $atts) ?>
				</h2>				
				<p class="<?php echo esc_attr($subtitleClass) ?>" data-animation="fadeInUp" data-animation-delay="400"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'lead_text', $atts) ?>>
				   <?php echo apply_filters('perch_modules_text_filter', $lead_text, 'lead_text', $atts) ?>
				</p>
				<div class="es_form_container m-bottom-30">

						<?php

						if(class_exists('ES_Shortcode')){
							$attrs = array();
						$group = 'Genemy';
						$atts['es_desc'] = '';
        				$atts['es_group'] = 'Public';
						$atts['es_desc']  = trim($atts['es_desc']);
				        $atts['es_group'] = trim($atts['es_group']);
				        $atts['es_pre'] = 'shortcode';
						$atts['button_style'] = 'btn-rose';
						$atts['enable_name'] = false;
						$atts['name'] = false;
						$atts['el_class'] = false;
						$atts['email'] = esc_attr($placeholder);
						$atts['group'] = esc_attr($group);
						echo GenemyNewsletter::es_get_form_simple( $atts );
						}else{
							echo 'Please Install Theme Required & Recommended PLugins.';
						}
						?>
				</div>

				<?php if( !empty($paramsArr) ): ?>				
				<div class="hero-links">
				<?php foreach ($paramsArr as $key => $value): 					
					$link_before = isset( $value['link_before'] )? esc_attr($value['link_before']) : '';
					?>
					<span><?php echo esc_attr($link_before);  ?>
						<?php if( isset($value['add_link']) && ($value['link_title'] != '') ):  ?>
							<a href="<?php echo isset($value['link_url'])? esc_url($value['link_url']) : '#'; ?>"><?php echo esc_attr($value['link_title']) ?></a> 
						<?php endif; ?>
						<?php echo isset( $value['title'] )? esc_attr( $value['title'] ) : ''; ?></span>	
				<?php endforeach; ?>
				</div>
				<?php endif; ?>
			</div>
		</div>	<!-- END HERO TEXT -->
	</div>	  <!-- End row -->
	</div>
</div>	<!-- END HERO-1 -->	
<?php if( $content != '' ): ?>
<div class="container">	
	<div class="hero-boxes">					
		<div class="row">
			<?php echo do_shortcode($content); ?>
		</div>	
	</div>
</div>
<?php endif; ?>