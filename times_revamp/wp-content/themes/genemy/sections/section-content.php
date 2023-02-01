<div class="row">	
	<div class="<?php echo implode(' ', $sectionclass) ?>"> 
		<div class="content-txt">
			<?php if( $name != '' ): ?>
			<span class="section-id <?php echo esc_attr($name_color) ?>-color wow fadeInUp" data-wow-delay="<?php echo intval($duration) ?>ms"><?php echo esc_attr($name); ?></span>
			<?php endif; ?>
			<?php if( $title != '' ): $duration = $duration + 100; ?>			
				<<?php echo esc_attr($tagname) ?> class="<?php echo esc_attr($classname) ?>"  data-animation="fadeInUp" data-wow-delay="<?php echo intval($duration) ?>ms"><?php echo genemy_parse_text($title, $parse_args); ?></<?php echo esc_attr($tagname) ?>>
			<?php endif; ?>
			<?php if( $subtitle != '' ): $duration = $duration + 100; ?>
				<p class="<?php echo  esc_attr($subtitle_text_size) ?> <?php echo esc_attr($subtitle_text_color) ?>-color wow fadeInUp" data-animation="fadeInUp" data-wow-delay="<?php echo intval($duration) ?>ms"><?php echo genemy_parse_text($subtitle, $parse_args); ?></p>	
			<?php endif; ?>

			<?php if( $enable_content == 'yes' ): $duration = $duration + 100; ?>
				<div class="section-content m-top-20 wow fadeInUp" data-wow-delay="<?php echo intval($duration) ?>ms">
					<?php echo wpautop($content) ?>
				</div>
			<?php endif; ?>

			<?php if( $enable_list == 'yes' ):  ?>
				<div class="section-list m-top-20 wow fadeInUp" data-wow-delay="<?php echo intval($duration) ?>ms">
				<?php 
				$Arr=(function_exists('vc_param_group_parse_atts'))?vc_param_group_parse_atts($content_list):array();
				genemy_vc_get_content_list_group($Arr, 'fadeInUp', $duration); 
				?>
				</div>
			<?php endif; ?>	

			<?php if( $enable_button == 'yes' ): $duration = $duration + 100; ?>
				<div class="section-buttons m-top-35 wow fadeInUp" data-wow-delay="<?php echo intval($duration) ?>ms">
				<?php 
				$paramsArr=(function_exists('vc_param_group_parse_atts'))?vc_param_group_parse_atts($params):array();
				echo genemy_get_button_groups($paramsArr); 
				?>
				</div>
			<?php endif; ?>	

			<?php if( $footer_text != '' ): $duration = $duration + 100; ?>
			<span class="m-top-20 os-version grey-color wow fadeInUp" data-wow-delay="<?php echo intval($duration) ?>ms"><?php echo esc_attr($footer_text) ?></span>
			<?php endif; ?>	
		</div>
	</div>		
</div> 	 <!-- END SECTION content -->