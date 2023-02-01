<?php get_header(); ?>

	
		<?php get_template_part( 'template-parts/content', 'before' );	?>	

			<?php
		if ( have_posts() ) :

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/post/content-single', get_post_format() );


				wp_link_pages( array(					
					'nextpagelink'     => esc_attr(__( 'Next', 'genemy')),
					'previouspagelink' => esc_attr(__( 'Previous', 'genemy' )),
					'pagelink'         => '%',
					'echo'             => 1
				) );
	

			endwhile;

			get_template_part( 'template-parts/post/related', 'posts' );

			// If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
			
		else :

			get_template_part( 'template-parts/post/content', 'none' );

		endif;
		?>

	<?php get_template_part( 'template-parts/content', 'after' );	?>

		 			

<?php get_footer(); ?>