<?php $atts = $args ?>
<li class="hero-slide">
<div class="container hero-content hero-content2">
<?php if( $column != 'full' ): 

$left_column_class = 'col-md-6';		
$right_column_class = 'col-md-6';	
if( $right_content_type == 'form' ){
	$right_column_class = 'col-md-5 col-xl-4 offset-xl-2 offset-md-1';
}
?>
	<div class="d-flex align-items-center">
		<div class="<?php echo esc_attr($left_column_class) ?> wow fadeInUp" data-wow-delay="300ms">
		<?php endif; ?>	

		<div class="row">	
			<div class="<?php echo implode(' ', $sectionclass) ?>">
				<?php if( $name != '' ): ?>
				<h3 class="<?php echo esc_attr($name_color) ?>-color"><?php echo esc_attr($name); ?></h3>
				<?php endif; ?>
				<?php if( $title != '' ): ?>			
					<<?php echo esc_attr($tagname) ?> class="<?php echo esc_attr($classname) ?>"><?php echo genemy_parse_text($title, $parse_args); ?></<?php echo esc_attr($tagname) ?>>
				<?php endif; ?>
				<p class="<?php echo  esc_attr($subtitle_text_size) ?> <?php echo esc_attr($subtitle_text_color) ?>-color"><?php echo genemy_parse_text($subtitle, $parse_args); ?></p>	

				<?php if( $enable_content == 'yes' ): ?>
					<div class="section-content m-top-20 wow fadeInUp" data-wow-delay="300ms">
						<?php echo wpautop($content) ?>
					</div>
				<?php endif; ?>

				<?php if( $enable_list == 'yes' ): ?>
					<div class="section-list m-top-20">
					<?php 
					$Arr=(function_exists('vc_param_group_parse_atts'))?vc_param_group_parse_atts($content_list):array();
					genemy_vc_get_content_list_group($Arr, 'fadeInUp', '400'); 
					?>
					</div>
				<?php endif; ?>	

				<?php if( $enable_button == 'yes' ): ?>
					<div class="section-buttons m-top-35 m-bottom-15 wow fadeInUp" data-wow-delay="1000">
					<?php 
					$paramsArr=(function_exists('vc_param_group_parse_atts'))?vc_param_group_parse_atts($params):array();
					echo genemy_get_button_groups($paramsArr); 
					?>
					</div>
				<?php endif; ?>	

				<?php if( $footer_text != '' ): ?>
				<span class="os-version grey-color"><?php echo esc_attr($footer_text) ?></span>
				<?php endif; ?>	

			</div>		
		</div> 	 <!-- End Hero content -->

	<?php if( $column != 'full' ): ?>
	</div>	<!-- end left column class -->	
		<div class="<?php echo esc_attr($right_column_class) ?>">
			<?php if($right_content_type == 'shortcode'): ?>
				<?php echo do_shortcode($shortcode); ?>
			<?php endif; ?>	

			<?php if($right_content_type == 'form'): 
				$dark_color_class = genemy_default_dark_color_classes();

				if( in_array($form_bg, $dark_color_class) ){
					$form_bg .= ' white-color';	
				}else{
					$form_bg .= ' dark-color';
				}	

				?>

				<div id="hero-form">
					<div class="hero-form <?php echo esc_attr($form_bg); ?> wow fadeInLeft" data-wow-delay="0.2s">
						<div class="row register-form form">
							<h5 class="h5-xl"><?php echo esc_attr($form_title) ?></h5><!-- Title -->
							<p><?php echo esc_attr($form_desc) ?></p><!-- Text -->
							<?php echo do_shortcode('[contact-form-7 id="'.intval($form_id).'"]'); ?>
						</div>
					</div>
				</div>	<!-- END HERO FORM -->
			<?php endif; ?>

			<?php if($right_content_type == 'image'): 
					$video_class = ( $video_popup == 'yes' )? ' video-preview' : '';
					?>
					<div class="hero-img p-left-30 wow fadeInLeft<?php echo esc_attr($video_class) ?>" data-wow-delay="0.2s">
						<?php if( $video_popup == 'yes' ): ?>					
							<a class="video-popup2" href="<?php echo esc_url($url) ?>"> 
																
								<div class="video-btn-md  wow fadeInUp" data-wow-delay="0.3s"><!-- Play Icon -->
									<div class="video-block-wrapper">
										<div class="play-icon-<?php echo esc_attr($icon_class); ?>"><div class="ico-bkg"></div>
											<i class="fas fa-play-circle"></i>
										</div>
									</div>
								</div>
								
								<img class="img-fluid" src="<?php echo esc_url($image) ?>" alt="<?php echo esc_attr($title) ?>"> <!-- Preview Image -->
							</a>
							<?php else: ?>
							<img class="img-fluid" src="<?php echo esc_url($image) ?>" alt="<?php echo esc_attr($title) ?>" />
							<?php endif; ?>
				 		</div>
					</div>
			<?php endif; ?>		
	</div><!-- .row .d-flex .align-items-center -->

<?php endif; ?>	
</div><!-- .container -->
<picture>
	<?php do_action( 'genemy_responsive_images', 'bg', $atts ); ?>										
	<img src="<?php echo esc_url($bg) ?>" alt="<?php echo esc_attr($atts['title']) ?>">
</picture>
</li>