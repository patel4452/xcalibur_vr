<?php if( $style == 'style2' ): ?>
<div class="row p-top-40 p-bottom-40" id="banner-1">
	<div class="col-md-12">
		<div class="banner-txt text-center">			
			<span class="section-id wow fadeInUp" data-wow-delay="0.1s"><?php echo esc_attr($subtitle); ?></span>
			<h2 class="wow fadeInUp" data-wow-delay="0.3s"><?php echo genemy_parse_text($title) ?></h2>
			
			<p class="p-lg wow fadeInUp" data-wow-delay="0.4s"><?php echo apply_filters( 'genemy_allowed_tag_for_input', $lead_text ); ?></p>
			<div class="stores-badge wow fadeInUp" data-wow-delay="0.5s"> <!-- HERO STORE BADGES -->
				<?php if( $display == 'buttons' ): ?>
					<?php echo genemy_get_button_groups($paramsArr, 'tra-hover') ?>
				<?php endif; ?>
				<?php if( $display == 'icons' ): ?>	
					<?php foreach ($paramsArr2 as $key => $value) : ?>
						<a href="<?php echo esc_url($value['link']) ?>" class="store">
							<img class="appstore" src="<?php echo esc_url($value['image']) ?>" width="160" height="50" alt="<?php echo esc_attr($value['title']) ?>" />
						</a>
					<?php endforeach; ?>				
				<?php endif; ?>
				<span class="os-version"><?php echo esc_attr($bottom_text); ?></span><!-- OS Prerequisite -->
			</div>	<!-- End Store Badges -->		

		</div>
	</div>	<!-- END CALL TO ACTION TEXT -->
</div>	 <!-- End row -->
<?php endif; ?>

<?php if( $style == 'style1' ): ?>
<div id="cta-1" class="cta-section">
	<div class="row d-flex align-items-center">	
		<div class="col-lg-9">
			<div class="cta-txt m-bottom-40">
				<h3 class="h3-xs"><?php echo genemy_parse_text($title, array('tagclass' => 'yellow-color underline-rose', 'after' => '<br>')) ?></h3>			
				<div class="p-md"><?php echo wpautop($lead_text); ?></div>
			</div>
		</div>	<!-- END CALL TO ACTION TEXT -->
		
		<div class="col-lg-3">
			<div class="cta-btn text-center m-bottom-40 wow fadeInUp" data-wow-delay="0.2s">			
				
				<p class="p-md txt-900"><?php echo genemy_parse_text($subtitle) ?></p>
				<?php if( $display == 'buttons' ): ?>
					<?php echo genemy_get_button_groups($paramsArr, 'tra-hover') ?>
				<?php endif; ?>

				<?php if( $display == 'icons' ): ?>	
					<?php foreach ($paramsArr2 as $key => $value) : ?>
						<a href="<?php echo esc_url($value['link']) ?>" class="store">
							<img class="appstore" src="<?php echo esc_url($value['image']) ?>" width="160" height="50" alt="<?php echo esc_attr($value['title']) ?>" />
						</a>
					<?php endforeach; ?>				
				<?php endif; ?>
			</div>
		</div>	<!-- END CALL TO ACTION TEXT -->
	</div>	 <!-- End row -->
</div>	
<?php endif; ?>