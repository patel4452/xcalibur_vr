<?php
/**
 * The template for displaying comments
 */
if ( post_password_required() ) {
	return;
}
?>


<div id="comments" class="comments-and-replay single-post-comments m-top-50">
	<?php if ( have_comments() ) : ?>		
		<h4 class="h4-xs m-bottom-50">
			<?php
			$comments_number = get_comments_number();
			if ( '0' === $comments_number ) {
				
			} else {
				echo ' <span>'.$comments_number.'</span> '. esc_attr(__('Comments', 'genemy' ));
			}
			?>
		</h4>
	<?php endif; // have_comments() ?>
	
		<?php if ( have_comments() ) : ?>
			<?php genemy_comment_nav(); ?>		
			<ul class="media-list comment-list">
				<?php
					wp_list_comments( array(
						'style'       => 'ul',
						'short_ping'  => true,
						'avatar_size' => 60,
						'callback' => 'genemy_comment_callback',
						'max_depth' => 3,
					) );
				?>
			</ul><!-- .comment-list -->

			<?php genemy_comment_nav(); ?>

			<?php
				// If comments are closed and there are comments, let's leave a little note, shall we?
				if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
			?>
				<p class="no-comments"><?php _e( 'Comments are closed.', 'genemy' ); ?></p>
			<?php endif; ?>			
		<?php endif; // have_comments() ?>

		<?php genemy_comment_form(); ?>	
	
</div><!-- .comments-area -->