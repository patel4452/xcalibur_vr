<?php $atts = $args ?>
<div id="content-4" class="content-section division">
	<div class="row d-flex align-items-center">

	 	<div class="<?php echo esc_attr($content_order) ?>">
	 		<div class="content-txt">
	 			<?php if( $subtitle != '' ): ?>
		 		<span class="section-id rose-color wow fadeInUp" data-wow-delay="0.1s"><?php echo esc_attr($subtitle) ?></span>
	 		 	<?php endif; ?>	 			
				<h3 class="h3-xl wow fadeInUp" data-wow-delay="0.2s">
				    <?php echo genemy_parse_text($title, array('tagclass' => genemy_default_color().'-color')) ?>
				</h3>
				
				<p class="p-md grey-color wow fadeInUp" data-wow-delay="0.3s"><?php echo apply_filters( 'genemy_allowed_tag_for_input', $lead_text ); ?></p><!-- Text --> 

				<?php if( $title2 != '' ): ?>					
				<h5 class="h5-sm txt-up wow fadeInUp" data-wow-delay="0.4s"><?php echo esc_attr($title2); ?></h5>
				<?php endif; ?>

				<div class="wow fadeInUp" data-wow-delay="0.5s"><?php echo wpautop($content); ?></div>

				<?php if( $list_display == 'yes' ): ?>					
				<div class="m-bottom-15"><?php genemy_vc_get_strategy_list( 'list', $listArr ); ?></div>
				<?php endif; ?>

				<?php if(!$list_display): ?>					
				<?php genemy_vc_get_strategy_list( 'simple', $listArr ); ?>
				<?php endif; ?>

				<?php if( $display == 'video' ): ?>					
				<div class="modal-video wow fadeInUp" data-wow-delay="0.6s">							
					<a class="video-popup2" href="<?php echo esc_url($video_link); ?>"><i class="rose-color fas fa-play-circle"></i> <?php echo genemy_parse_text($video_link_title) ?></a>
				</div>	
				<?php endif; ?>	

				<?php if( $display == 'techs' ): ?>					
				<div class="technologies wow fadeInUp m-top-35" data-wow-delay="0.6s">						
					<p><?php echo esc_attr($tech_title); ?></p>
					<?php if( !empty($paramsArr) ): ?>						
						<?php foreach ($paramsArr as $key => $value): ?>
							<?php if( isset($value['icon']) ): ?>							
							<span class="html-ico">
								<?php if( isset($value['image']) && ($value['image'] != '') ): ?>
								<img src="<?php echo esc_url($value['image']) ?>" alt="<?php echo esc_attr($value['title']) ?>">
								<?php else: ?>
								<i class="<?php echo esc_attr($value['icon']) ?>"></i>
								<?php endif; ?>
							</span>
							<?php endif; ?>
						<?php endforeach; ?>
					<?php endif; ?>
				</div>
				<?php endif; ?>		

				<?php if( $display == 'counter' ): ?>
				<?php if( !empty($paramsArr) ): $animation_duration = 700; ?>					
				<div class="small-statistic m-top-40">
					<div class="row">	
					<?php foreach ($paramsArr as $key => $value): ?>
						<div class="col-sm-4 col-md-6 col-lg-6">	
							<div class="statistic-block wow fadeInUp" data-wow-delay="<?php echo intval($animation_duration) ?>ms">
								<p class="statistic-number <?php echo esc_attr($style) ?>-color"><?php echo esc_attr($value['prefix']) ?><span class="count-element"><?php echo intval($value['count']) ?></span></p>
								<p><?php echo esc_attr($value['title']) ?></p>							
							</div>								
						</div>
						<?php $animation_duration = $animation_duration + 100; ?>
					<?php endforeach; ?>					
					</div>	
				</div>	<!-- END SMALL STATISTIC -->	
				<?php endif; ?>
				<?php endif; ?>
	 		</div>
	 	</div><!-- END ABOUT TEXT -->

	 	
		<div class="<?php echo esc_attr($img_order) ?>">	
			<?php if( $image != '' ): ?>			
	 		<div class="<?php echo esc_attr($video_class); ?> content-4-img wow <?php echo esc_attr($animation_class) ?>"  data-wow-delay="0.4s">
				<?php if( $video_popup == 'yes' ): ?>									
				<a class="video-popup2" href="<?php echo esc_url($url) ?>">
					<div class="video-btn-md wow fadeInUp"  data-wow-delay="0.5s">	
						<div class="video-block-wrapper"><div class="play-icon-<?php echo genemy_default_color(); ?>"><div class="ico-bkg"></div><i class="fas fa-play-circle"></i></div>
						</div>
					</div><!-- Play Icon -->
					<picture>
						<?php do_action( 'genemy_responsive_images', 'image', $atts ); ?>													
						<img class="img-fluid" src="<?php echo esc_url($image) ?>" alt="<?php echo esc_attr($subtitle) ?>">
					</picture>	
				</a>
				<?php else: ?>
					<picture>
						<?php do_action( 'genemy_responsive_images', 'image', $atts ); ?>													
						<img class="img-fluid" src="<?php echo esc_url($image) ?>" alt="<?php echo esc_attr($subtitle) ?>">
					</picture>	
				<?php endif; ?>
	 		</div>
	 		<?php endif; ?>
		</div>
		
	</div>	   <!-- End row -->			
</div><!-- END ABOUT-3 -->	