<div class="hero-class" data-class="hero-section division" data-section_id="hero-10">
	<div class="row d-flex align-items-center">	
		<div class="<?php echo implode(' ', $sectionclass) ?>">
			<?php if( $name != '' ): ?>
			<span class="section-id <?php echo esc_attr($name_color) ?>-color"><?php echo esc_attr($name); ?></span>
			<?php endif; ?>
			<?php if( $title != '' ): ?>			
				<<?php echo esc_attr($tagname) ?> class="<?php echo esc_attr($classname) ?>"><?php echo genemy_parse_text($title, $parse_args); ?></<?php echo esc_attr($tagname) ?>>
			<?php endif; ?>
			<?php if( $subtitle != '' ): ?>
			<p class="p-lg <?php echo esc_attr($subtitle_text_color) ?>-color"><?php echo genemy_parse_text($subtitle, $parse_args); ?></p>		
			<?php endif; ?>
		</div>		
	</div> 	 
</div>