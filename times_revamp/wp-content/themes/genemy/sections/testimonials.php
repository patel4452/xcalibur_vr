<?php 
if( !empty($paramsArr) && ($style == '1column')): ?>
	<div class="row" id="reviews-2">
		<div class="col-lg-12 testimonials text-center">
			<div class="quote-icon"></div> <!-- TRANSPARENT QUOTE ICON -->
			<div class="flexslider purple-nav">	<!-- TESTIMONIALS CONTENT -->
				<ul class="slides">
					<?php foreach ($paramsArr as $key => $value) : extract($value); ?>
						
						<li class="review-2"> <!-- TESTIMONIAL #1 -->
							<div class="review-txt">
								<?php echo wpautop($desc); ?> <!-- Testimonial Text -->
							</div>	
							<!-- Testimonial Author Avatar -->
							<img src="<?php echo esc_url($image) ?>" alt="<?php echo esc_attr($name) ?>">
							<div class="review-author"> <!-- Testimonial Author -->
								<p class="testimonial-autor"><?php echo esc_attr($name) ?></p>	
								<span class="rose-color"><?php echo esc_attr($title) ?></span>									
							</div>														
						</li>
					<?php endforeach; ?>					

				</ul>
			</div><!-- .flexslider -->

		</div>
 	</div>	<!-- End row -->
<?php endif; ?>
<?php if( !empty($paramsArr) && ($style == '3column')): $count=1; ?> 
<div id="reviews-2" class="reviews-section">	
	<div class="owl-carousel owl-theme reviews-holder"<?php echo $car_attr; ?>>

		<?php foreach ($paramsArr as $key => $value) : extract($value); ?>
			<div class="review-2">
				<div class="testimonial-avatar">
					<img src="<?php echo esc_url($image) ?>" alt="<?php echo esc_attr($name) ?>">
				</div><!-- Testimonial Author Avatar -->				
				<div class="review-author">
					<h5 class="h5-sm txt-up txt-800"><?php echo esc_attr($name) ?></h5>	
					<span class="grey-color"><?php echo esc_attr($title) ?></span>
				</div><!-- Testimonial Author -->
				
				<div class="review-txt">
					<?php echo wpautop($desc); ?>
				</div><!-- Testimonial Text -->
			</div><!-- TESTIMONIAL #<?php echo intval($count); ?> -->

		<?php $count++; endforeach; ?>	

	</div>
</div>	<!-- TESTIMONIALS CAROUSEL -->

<?php endif; ?>	