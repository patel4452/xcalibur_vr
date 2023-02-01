<?php $atts = $args ?>
<div class="hero-class bg-scroll division" data-class="bg-grey hero-section division" data-section_id="hero-11">
	<div class="row">
		<div class="col-md-6">
			<div class="hero-txt">					
			 	<span class="<?php echo esc_attr($subtitleClass2) ?>" data-animation="fadeInUp" data-animation-delay="300"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'subtitle', $atts) ?>>
					<?php echo apply_filters('perch_modules_text_filter', $subtitle, 'subtitle', $atts) ?>
				</span>				
				<!-- Title -->
				<h3 class="<?php echo esc_attr($titleClass) ?>" data-animation="fadeInUp" data-animation-delay="300"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'title', $atts) ?>>
					<?php echo apply_filters('perch_modules_text_filter', $title, 'title', $atts) ?>
				</h3>		
				<!-- lead text -->
				<p class="<?php echo esc_attr($subtitleClass) ?>" data-animation="fadeInUp" data-animation-delay="400"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'lead_text', $atts) ?>>
				   <?php echo apply_filters('perch_modules_text_filter', $lead_text, 'lead_text', $atts) ?>
				</p>
		
				<div class="es_shortcode_form" data-es_form_id="es_shortcode_form">
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
					<?php foreach ($paramsArr as $key => $value): ?>						
						<span>
							<?php echo isset( $value['link_before'] )? esc_attr($value['link_before']) : ''; ?>
							<?php if( isset($value['add_link']) && ($value['link_title'] != '') ):  ?>
								<a href="<?php echo isset($value['link_url'])? esc_url($value['link_url']) : '#'; ?>"><?php echo esc_attr($value['link_title']) ?></a> 
							<?php endif; ?>
							<?php echo isset( $value['title'] )? esc_attr( $value['title'] ) : ''; ?>
						</span>	
					<?php endforeach; ?>
				</div>
				<?php endif; ?>
			</div>
		</div>	
	</div><!-- End row -->
	
	<div class="hero-11-img" <?php echo $background_imges; ?>>
		<div class="hero-11-btn">
			<div class="video-btn">
				<div class="video-block">
					<?php if( $video_popup == 'yes' ): ?>
					<a class="video-popup2" href="<?php echo esc_url($url); ?>"><!-- Change the link HERE!!! -->
						<div class="video-btn-sm"> <!-- Play Icon -->
							<div class="video-block-wrapper">
								<div class="play-icon-rose"><div class="ico-bkg"></div>
									<i class="fas fa-play-circle"></i>
								</div>
							</div>
						</div>
					</a>
					<?php endif; ?>
				</div>	
			</div>	
		</div>
	</div>	<!-- END HERO IMAGE -->	
</div>	<!-- END HERO-11 -->