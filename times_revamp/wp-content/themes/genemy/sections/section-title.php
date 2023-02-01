<div class="row">	
	<div class="<?php echo implode(' ', $sectionclass) ?>">
		<?php if( $name != '' ): ?>
		<span class="<?php echo esc_attr($nameClass) ?>"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'name', $atts) ?>><?php echo apply_filters('perch_modules_text_filter', $name, 'name', $atts) ?></span>
		<?php endif; ?>
		<?php if( $title != '' ): ?>			
			<<?php echo esc_attr($tagname) ?> class="<?php echo esc_attr($titleClass) ?>"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'title', $atts) ?>><?php echo apply_filters('perch_modules_text_filter', $title, 'title', $atts) ?></<?php echo esc_attr($tagname) ?>>
		<?php endif; ?>
		<p class="<?php echo esc_attr($subtitleClass) ?>"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'subtitle', $atts) ?>><?php echo apply_filters('perch_modules_text_filter', $subtitle, 'subtitle', $atts) ?>
		</p>		
	</div>		
</div> 	 <!-- END SECTION TITLE -->	