<div id="<?php echo esc_attr($el_id) ?>" class="row brands-section <?php echo esc_attr($el_class) ?>">
	<div class="col text-center">	
	<?php if( $style == 'style2' ): ?>
		<p class="p-lg txt-400 grey-color m-bottom-50">
			<?php echo genemy_parse_text($title, array('tagclass' => 'black-color')) ?>
		</p>		
	<?php endif; ?>

	<?php if( !empty($paramsArr) ):  ?>		
		<div class="owl-carousel brands-logo-holder"<?php echo $car_attr; ?>>
			
			<?php foreach ($paramsArr as $key => $value): extract($value); ?>
				<div class="brand-logo">
					<?php if( isset($value['url']) && ($value['url'] != '') ): ?>	
					<a href="<?php echo esc_url($value['url']) ?>" target="_blank">
					<?php endif; ?>	
					<img class="img-fluid" src="<?php echo esc_url($image) ?>" alt="<?php echo esc_attr($title) ?>" />
					<?php if( isset($value['url']) && ($value['url'] != '') ): ?>
					</a>
					<?php endif; ?>	
				</div><!-- BRAND LOGO IMAGE -->
				
			<?php endforeach; ?>
		</div>	   <!-- End row -->	
	<?php endif; ?>	
	</div>
</div>