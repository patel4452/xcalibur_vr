<div class="row bottom-footer hero-class" data-class="bg-scroll p-top-100 footer division" data-section_id="footer-2">
	<div class="col-md-5">
		<div class="footer-copyright">
			<p class="m-bottom-0"><?php echo genemy_parse_text($title); ?></p>
		</div>
	</div>

	<?php if( $nav_menu != '' ): ?>	
	<div class="col-md-7">
		<?php
		wp_nav_menu( array(
			'container_class' => 'footer-links text-right',
			'menu_class' => 'clearfix',
		    'menu'           => $nav_menu, 
		    'fallback_cb'    => false // Do not fall back to wp_page_menu()
		) );
		?>		
	</div>
	<?php endif; ?>
</div>	<!-- END BOTTOM FOOTER -->