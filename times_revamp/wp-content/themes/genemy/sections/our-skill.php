<div class="row"> 	
 	<div class="col-md-6">
 		<div class="about-txt ind-30">
 			<?php if( $subtitle != '' ): ?>
	 			<span class="section-id rose-color wow fadeInUp" data-wow-delay="0.1s"><?php echo esc_attr($subtitle) ?></span>
 		 	<?php endif; ?>
 			
			<h3 class="h3-xl wow fadeInUp" data-wow-delay="0.2s"><?php echo genemy_parse_text($title, array('tagclass' => genemy_default_color().'-color')) ?></h3><!-- Title -->	
			
			<p class="p-md grey-color wow fadeInUp" data-wow-delay="0.3s">
			   <?php echo apply_filters( 'genemy_allowed_tag_for_input', $lead_text ); ?> 
			</p><!-- Text --> 			

			
			<div class="wow fadeInUp" data-wow-delay="0.5s">
			   <?php echo wpautop($content); ?>
			</div> <!-- Text -->

			<?php if( $list_display == 'yes' ): ?>					
				<div class="m-bottom-15"><?php genemy_vc_get_strategy_list( 'list', $listArr ); ?></div>
			<?php else: ?>		
				<?php genemy_vc_get_strategy_list( 'simple', $listArr ); ?>
			<?php endif; ?>
				
 		</div>
 	</div>	  <!-- END ABOUT TEXT -->

 	<?php if( !empty($paramsArr) ): $animation_duration = 400; ?>
 	<!-- ABOUT SKILLS -->
	<div class="col-md-6">
		<div class="about-skills ind-30">
			<!-- SKILLS -->	
			<div class="skills rose-progress m-top-30">
				<?php foreach ($paramsArr as $key => $value): ?>
					<div class="barWrapper animated" data-animation="fadeInUp" data-animation-delay="<?php echo intval($animation_duration) ?>">	
						<p><?php echo esc_attr($value['title']) ?></p>
						<span class="skill-percent"><?php echo intval($value['count']) ?>%</span> 
						<div class="progress">
								<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo intval($value['count']) ?>" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
					<?php $animation_duration = $animation_duration + 200; ?>
				<?php endforeach; ?>
			</div>	<!-- END SKILLS -->	

 		</div>
	</div>
	<?php endif; ?>	
</div>	   <!-- End row -->