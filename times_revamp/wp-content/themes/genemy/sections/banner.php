<div class="row" id="banner-2">	
	<div class="<?php echo implode(' ', $sectionclass) ?>">
		<div class="banner-txt">
			<?php if( $name != '' ): ?>
				<span class="section-id rose-color wow fadeInUp" data-wow-delay="0.1"><?php echo esc_attr($name); ?></span>
			<?php endif; ?>

			<?php if( $title != '' ): ?>			
				<<?php echo esc_attr($tagname) ?> class="<?php echo esc_attr($classname) ?>" data-wow-delay="0.2s"><?php echo genemy_parse_text($title, array('tagclass' => 'h-bg bg-yellow')); ?></<?php echo esc_attr($tagname) ?>>
			<?php endif; ?>
			
			<p class="p-lg wow fadeInUp" data-wow-delay="0.3s">
				<?php echo genemy_parse_text($subtitle, array('tagclass' => 'font-weight-bold')); ?>
			</p>
		</div>				
	</div>		
</div> 	 <!-- END banner-2 -->