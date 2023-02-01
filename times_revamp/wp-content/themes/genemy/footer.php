		<?php get_template_part( 'footer/newsletter' ); ?>
		<?php 
		$footer_bg_style = ot_get_option( 'footer_bg_style', 'bg-dark white-color' ); 
		$widget_display = ot_get_option( 'footer_widget_area', 'on' );
		$footer_padding = ($widget_display == 'on')? ' p-top-100' : '';
		?>
		
		<!-- FOOTER-1
		============================================= -->
		<footer id="footer-1" class="footer division <?php echo esc_attr($footer_bg_style) ?><?php echo esc_attr($footer_padding); ?> footer-widget-area-<?php echo esc_attr($widget_display) ?>">
			<div class="container">

				<!-- FOOTER CONTENT -->
				<div class="row">
					<?php get_template_part( 'footer/widget-area' ); ?>
				</div>	  <!-- END FOOTER CONTENT -->

				<?php get_template_part( 'footer/copyright' ); ?>

			</div>	   <!-- End container -->										
		</footer>	<!-- END FOOTER-1 -->
		<?php get_template_part( 'footer/quick-form' ); ?>
	</div>	<!-- END PAGE CONTENT -->

<?php wp_footer(); ?>

</body>
</html>