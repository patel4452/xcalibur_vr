<?php if(GenemyHeader::header_banner_is_on()): ?>
<!-- BLOG LISTING PAGE HERO
============================================= -->	
<section id="breadcrumbs-hero" class="bg-dark breadcrumbs-area page-hero-section division">
	<div class="container white-color">	
		<div class="row">

			<!-- HERO TEXT -->
			<div class="col-md-10 offset-md-1">
				<div class="hero-txt text-center white-color">

					<!-- Title -->
					<h2 class="h2-xl"><?php echo GenemyHeader::get_title(); ?></h2>
					<?php if( GenemyHeader::header_breadcrumb_is_on()) : ?>
						<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
							<ul class="list-inline">
								<?php 
									if(function_exists('bcn_display_list')){
									    bcn_display_list();
									}
								?>
							</ul>
						</div><!-- .breadcrumbs -->
					<?php endif; ?>
					<!-- Text -->
					<p class="p-hero subtitle">
						<?php echo GenemyHeader::get_subtitle(); ?>						
					</p>				

				</div>
			</div>	<!-- END HERO TEXT -->

		</div>	  <!-- End row -->
	</div>	   <!-- End container --> 	
</section>	<!-- END BLOG LISTING HERO -->
<?php else: ?>
	<?php GenemyHeader::get_shortcode() ?>
<?php endif; ?>