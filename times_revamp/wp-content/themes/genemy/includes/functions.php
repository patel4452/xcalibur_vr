<?php
include get_template_directory(). '/includes/scripts.php';
include get_template_directory(). '/includes/comment-form.php';
include get_template_directory(). '/includes/template-tags.php';
include get_template_directory(). '/includes/general-style.php';
include get_template_directory(). '/includes/dynamic-style.php';

if(function_exists('is_woocommerce')){
	include get_template_directory(). '/includes/woo-functions.php';
}

add_filter( 'crmm_dropdown_tag', 'genemy_dropdown_tag_callback', 21, 3 );
function genemy_dropdown_tag_callback($tag, $depth, $args){ 

    return $tag;
}
add_filter( 'crmm_dropdown_list_tag', 'genemy_dropdown_list_tag_callback', 11, 4 );
function genemy_dropdown_list_tag_callback($tag, $item, $depth, $args){    
    return $tag;
}

add_filter( 'crmm_dropdown_inner_before', 'genemy_dropdown_inner_before_callback', 10, 3 );
function genemy_dropdown_inner_before_callback($output, $depth, $args){
    return $args->dropdown_inner_before;
}
add_filter( 'crmm_dropdown_inner_after', 'genemy_dropdown_inner_after_callback', 10, 3 );
function genemy_dropdown_inner_after_callback($output, $depth, $args){
    return $args->dropdown_inner_after ; 
}

function genemy_section_wrap_class( $class = '' ) {
	// Separates classes with a single space, collates classes for body element
	echo 'class="' . join( ' ', genemy_get_section_wrap_class( $class ) ) . '"';
}

function genemy_get_section_wrap_class( $class = '' ) {
	global $wp_query;

	$classes = array();

	$classes[] = GenemyHeader::get_container_spacing();
	$classes[] = 'division';
	if ( 'post' == get_post_type() ){		
		if( is_single() ){
			$classes[] = 'blog-page-section single-blog-page';
		}else{
			$classes[] = 'blog-page-section blog-page';
		}
	}

	$header_sticky_nav = ot_get_option('header_sticky_nav', 'on');
    
    if(!GenemyHeader::header_banner_is_on() && (GenemyHeader::get_shortcode() == false) && ( $header_sticky_nav == 'on' )){
    	$classes[] = 'header-area-hide';
    }    

	if ( ! empty( $class ) ) {
		if ( !is_array( $class ) )
			$class = preg_split( '#\s+#', $class );
		$classes = array_merge( $classes, $class );
	} else {
		// Ensure that we always coerce class to being an array.
		$class = array();
	}

	$classes = array_map( 'esc_attr', $classes );


	$classes = apply_filters( 'genemy_section_wrap_class', $classes, $class );

	return array_unique( $classes );
}


function genemy_post_class( $classes ) {
	global $post;

	if(!has_post_thumbnail()) $classes[] = 'no-post-thumbnail';

	if(is_singular()){
		$classes[] = 'single-'.get_post_type().'-details';
	}
	if(is_singular('portfolio')){
		$classes[] = 'division';
	}
	if(is_search()){
		$classes[] = 'blog-post';
	}

	if ( 'post' == get_post_type() ){
		$classes[] = 'blog-post';
		

		if(is_singular()){
			$classes[] = 'single-post-details';
		}
	}

	if ( 'product' == get_post_type() ){
		if(!is_singular()){
			$classes[] = 'text-center loop-item';			
		}

		if(is_singular()){
			$classes[] = 'single-post-details';
		}

	}

	if ( ('page' == get_post_type()) && !is_home() ){
		
	}
	
	return $classes;
}
add_filter( 'post_class', 'genemy_post_class' );

function genemy_get_optiontree_layout($arr = false){
	$layouts = array();
	$options = get_option('genemy');
	$active = isset($options['active_layout'])? $options['active_layout'] : 'layout-minimal';
	$layouts['active_layout'] = $active;
	$layouts['layouts'] = array();
	if( !empty($options) ):
		foreach ($options as $key => $value) {
			$layouts['layouts'][] = $key;
		}
	endif;

	if($arr) return $options;
	else return $layouts['active_layout'];
}

function genemy_get_header_search_icon(){
	$output = '';
	$icon = ot_get_option('header_search_icon', 'on');
	if( $icon == 'off' ) return false;

	return '<li class="search-link"><a href="#"  data-toggle="modal" data-target=".bs-search-modal-lg"><i class="fa fa-search dark-color"></i></a></li>';
}

if ( ! function_exists( 'genemy_comment_nav' ) ) :
/**
 * Display navigation to next/previous comments when applicable.
 */
function genemy_comment_nav() {
	// Are there comments to navigate through?
	if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
	?>
	<nav class="Page navigation m-top-50 m-bottom-50" role="navigation">
		<h2 class="screen-reader-text"><?php _e( 'Comment navigation', 'genemy' ); ?></h2>
		<ul class="pagination justify-content-left">
			<?php
				$previous_text = __( 'Older Comments', 'genemy' );
				if ( $prev_link = get_previous_comments_link( esc_attr($previous_text) ) ) :
					printf( '<li class="page-item nav-previous"><span class="page-link">%s</span></li>', $prev_link );
				endif;

				$next_text = __( 'Newer Comments', 'genemy' );
				if ( $next_link = get_next_comments_link( esc_attr($next_text) ) ) :
					printf( '<li class="page-item nav-next"><span class="page-link">%s</span></li>', $next_link );
				endif;
			?>
		</ul><!-- .nav-links -->
	</nav><!-- .comment-navigation -->
	<?php
	endif;
}
endif;

if(!function_exists('genemy_comment_callback')):
function genemy_comment_callback($comment, $args, $depth) {
    if ( 'div' === $args['style'] ) {
        $tag       = 'li';
        $add_below = 'comment';
    } else {
        $tag       = 'li';
        $add_below = 'div-comment';
    }
    ?>
    <<?php echo esc_attr($tag) ?> <?php comment_class( empty( $args['has_children'] ) ? 'clearfix' : 'parent clearfix' ); ?> id="comment-<?php comment_ID() ?>">
    <div id="div-comment-<?php comment_ID() ?>" class="media">

    
	    
        <?php if ( $args['avatar_size'] != 0 ) echo '<div class="comment-avatar">'.get_avatar( $comment, $args['avatar_size'] ).'</div>'; ?>

        <div class="media-body">
		        
		        <div class="comment-meta">	
		        	<?php printf( __( '<h5 class="fn h5-xs mt-0">%s</h5>', 'genemy' ), get_comment_author_link() ); ?>				
					<a class="comment-date href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>"><?php
		                /* translators: 1: date, 2: time */
		                printf( 
		                    __('%1$s at %2$s', 'genemy'), 
		                    get_comment_date(),  
		                    get_comment_time() 
		                ); ?>
		            </a>&nbsp;-&nbsp;
		            <?php echo genemy_comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
		            <span class="btn-reply"><?php edit_comment_link( esc_attr(__( 'Edit', 'genemy' )), '  ', '' ); ?></span>
				   
				</div>
		    

		    <?php if ( $comment->comment_approved == '0' ) : ?>
		         <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'genemy' ); ?></em>
		          <br />
		    <?php endif; ?>

	    		<div class="comment-body">
	    			<?php comment_text(); ?>
	    		</div>	 

	    	</div><!-- .content -->
	    </div><!-- .comment-info -->

    <?php
}
endif;

add_filter('next_posts_link_attributes', 'genemy_next_posts_link_attributes');
function genemy_next_posts_link_attributes() {
    return 'class="older-posts"';
}

add_filter('previous_posts_link_attributes', 'genemy_previous_posts_link_attributes');
function genemy_previous_posts_link_attributes(){
	return 'class="newer-posts"';
}

if(!function_exists('genemy_posts_navigation')){
	function genemy_posts_navigation($numeric = false){	
		if($numeric){
			if( is_singular() )
				return;

			global $wp_query;

			/** Stop execution if there's only 1 page */
			if( $wp_query->max_num_pages <= 1 )
				return;

			$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
			$max   = intval( $wp_query->max_num_pages );

			/**	Add current page to the array */
			if ( $paged >= 1 )
				$links[] = $paged;

			/**	Add the pages around the current page to the array */
			if ( $paged >= 3 ) {
				$links[] = $paged - 1;
				$links[] = $paged - 2;
			}

			if ( ( $paged + 2 ) <= $max ) {
				$links[] = $paged + 2;
				$links[] = $paged + 1;
			}

			echo '<div class="post-pagination"><ul class="list-inline">';

			/**	Previous Post Link */
			if ( get_previous_posts_link() )
				printf( '<li><a href="%s"><i class="genemy-angle-long-left-o"></i></a></li></li>', esc_url( get_pagenum_link( 1 ) ) );

			/**	Link to first page, plus ellipses if necessary */
			if ( ! in_array( 1, $links ) ) {
				$class = 1 == $paged ? ' class="active"' : '';

				printf( '<li><a%s href="%s">%s</a></li>', $class, esc_url( get_pagenum_link( 1 ) ), '1' );

				if ( ! in_array( 2, $links ) )
					echo '<li>...</li>';
			}

			/**	Link to current page, plus 2 pages in either direction if necessary */
			sort( $links );
			foreach ( (array) $links as $link ) {
				$class = $paged == $link ? ' class="active"' : '';
				printf( '<li><a%s href="%s">%s</a></li>', $class, esc_url( get_pagenum_link( $link ) ), $link );
			}

			/**	Link to last page, plus ellipses if necessary */
			if ( ! in_array( $max, $links ) ) {
				if ( ! in_array( $max - 1, $links ) )
					echo '<li>...</li>';

				$class = $paged == $max ? ' class="active"' : '';
				printf( '<li><a%s href="%s">%s</a></li>', $class, esc_url( get_pagenum_link( $max ) ), $max );
			}

			/**	Next Post Link */
			if ( get_next_posts_link() )
				printf( '<li><a href="%s"><i class="genemy-angle-long-right-o"></i></a></li>', esc_url( get_pagenum_link( $max ) ) );

			echo '</ul></div>' . "\n";
			

		}else{
			echo '<div class="posts-navigation">';	
			echo get_previous_posts_link('<i class="genemy-angle-long-left-o"></i>'.esc_attr(__('Newer Posts', 'genemy')));
			echo get_next_posts_link(__('Older Posts', 'genemy').'<i class="genemy-angle-long-right-o"></i>');
			echo '</div>';
		}
	}
}

if(!function_exists('genemy_post_navigation')):
function genemy_post_navigation(){
	if ( is_singular( 'attachment' ) ) {
				// Parent post navigation.
				the_post_navigation( array(
					'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'genemy' ),
				) );
			} elseif ( is_singular( array('post', 'portfolio') ) ) {
				// Previous/next post navigation.
				the_post_navigation( array(
					'next_text' => '<h5 class="meta-nav h5-xs" aria-hidden="true">' . sprintf(_x('%s', 'Next post text', 'genemy'), ot_get_option('next_post_text', 'Next')) . ' <i class="fas fa-arrow-right"></i></h5> ' .
						'<span class="screen-reader-text">' . esc_attr(__( 'Next post:', 'genemy' )) . '</span> ' .	'<p class="color-text">%title</p>',
					'prev_text' => '<h5 class="meta-nav" aria-hidden="true"><i class="fas fa-arrow-left"></i> ' . sprintf(_x('%s', 'Previous post text', 'genemy'), ot_get_option('prev_post_text', 'Previous')) . '</h5> ' .
						'<span class="screen-reader-text">' . esc_attr(__( 'Previous post:', 'genemy' )) . '</span> ' .
						'<p class="color-text">%title</p>',
				) );
			}
}
endif;

if(!( function_exists('genemy_template_pagination') )){
	function genemy_template_pagination($pages = '', $range = 2, $number=true){
		$showitems = ($range * 2)+1;
		global $wp_query;
		$paged = (isset($wp_query->query['paged']))? $wp_query->query['paged'] : 1;
		
		if($pages == ''){
			
			$pages = $query->max_num_pages;
				if(!$pages) {
					$pages = 1;
				}
		}
		$older_posts_text = ot_get_option( 'older_posts_text', 'Older Posts' );
		$newer_posts_text = ot_get_option( 'newer_posts_text', 'Newer Posts' );
		
		$output = '';
			
		if((1 != $pages) && (!$number)){
			$output .= "<div class='text-center'><ul class='pagination list-inline'>";
			if($paged > 2 && $paged > $range+1 && $showitems < $pages) $output .= "<li><a href='".get_pagenum_link(1)."' aria-label='Previous'><span aria-hidden='true'>&laquo;</span></a></li> ";
			
			for ($i=1; $i <= $pages; $i++){
				if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
					$output .= ($paged == $i)? "<li class='active'><a href='".get_pagenum_link($i)."'>".$i."</a></li> ":"<li><a href='".get_pagenum_link($i)."'>".$i."</a></li> ";
				}
			}
		
			if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) $output .= "<li><a href='".get_pagenum_link($pages)."' aria-label='Next'><span aria-hidden='true'>&raquo;</span></a></li> ";
			$output.= "</ul></div>";
		}else{
			$older_posts_text = sprintf(_x('%s', 'Older post text', 'genemy'), $older_posts_text);
			$newer_posts_text = sprintf(_x('%s', 'Newer post text', 'genemy'), $newer_posts_text);

			$output .= '<div class="posts-navigation">';
			$output .= ($paged > 1)? '<a href="'.get_pagenum_link($paged-1).'" class="btn btn-default newer-posts"><i class="genemy-angle-long-left-o"></i>'.esc_attr($newer_posts_text).'</a>' : '';
			$output .= ($pages != $paged)? '<a href="'.get_pagenum_link($paged+1).'" class="btn btn-default older-posts pull-right">'.esc_attr($older_posts_text).'<i class="genemy-angle-long-right-o"></i></a>' : '';
			$output .= '</div>';
		}
		

		return $output;
	}
}

if( !function_exists('genemy_post_category') ):
function genemy_post_category(){
	global $post;
	$categories_list = get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'genemy' ), '', $post->ID );
	if ( $categories_list) {
		printf( '%1$s',
			$categories_list
		);
	}
}
endif;

if( !function_exists('genemy_sticky_post_text') ):
function genemy_sticky_post_text(){
	global $post;
	if ( is_sticky() ) {
		$sticky = ot_get_option( 'sticky_post_text', 'Sticky' );
		echo '<span class="sticky-post color-bg badge bg-'.genemy_default_color().'">';
		printf( _x('%s', 'Sticky post text', 'genemy'), $sticky );
		echo '</span>';
	}
}
endif;

function genemy_post_date( $format = 'l, M d, Y' ){
	global $post;
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';		
	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		get_the_date()
	);
	printf( '<a class="post-time" href="%1$s" rel="bookmark">%2$s</a>',
		esc_url( get_permalink() ),
		$time_string
	);	
}

function genemy_post_author(){
	global $post;
	printf( '%1$s <a class="by url fn n" href="%2$s"><span class="byline"><span class="author vcard">%3$s</span></span></a> ',
			_x( 'by', 'Used before post author name.', 'genemy' ),
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			get_the_author()
		);
}

function genemy_post_category_meta(){
	echo '<span class="'.genemy_default_color().'-color">&nbsp;';
	echo esc_attr(_x( 'in', 'Used before post category.', 'genemy' )).'&nbsp;';
	genemy_post_category();
	echo '</span> ';	
}

function genemy_post_comment_meta(){
	global $post;
	if ( in_array( get_post_type(), array( 'post', 'attachment' ) ) ) {
		$num_comments = get_comments_number();
		if ( comments_open() ) {
			if ( $num_comments == 0 ) {
				$comments = __('No comment', 'genemy');
			} elseif ( $num_comments > 1 ) {
				$comments = $num_comments . __(' Comments', 'genemy');
			} else {
				$comments = __('1 Comment', 'genemy');
			}
			echo '<a class="comments" href="' . get_comments_link() .'"><span class="post-comment">'. $comments.'</span></a> ';
			
		}
	}
}

if ( ! function_exists( 'genemy_entry_meta' ) ) :
/**
 * Prints HTML with meta information for the categories, date.
 <p class="post-meta">May 10, 2018 <span class="rose-color">in Photography</span></p>
 */
function genemy_entry_meta( $display_in = 'post_meta' ) {	

	$post_meta_display = ot_get_option('post_meta_display', 'on');
	if($post_meta_display == 'off') return false;

	$post_metaArr = ot_get_option( esc_attr($display_in), array('date', 'category') );	

	if ( in_array( get_post_type(), array( 'post', 'attachment' ) ) ) {

		echo '<p class="post-meta">';
			if( in_array('date', $post_metaArr) ) genemy_post_date();			
			
			if( in_array('category', $post_metaArr) ) genemy_post_category_meta();	

			if( in_array('author', $post_metaArr) ) genemy_post_author();

			if( in_array('comment', $post_metaArr) ) genemy_post_comment_meta();

		echo '</p>';
	}
}
endif;

function genemy_date_meta() {
	echo '<span class="post-meta">';	
	if ( in_array( get_post_type(), array( 'post', 'attachment' ) ) ) {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		
		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'c' ) ),
			get_the_date('M d, Y')
		);

		printf( '%1$s <a href="%2$s" rel="bookmark">%3$s</a>',
			esc_attr(__( 'Posted On :', 'genemy' )),
			esc_url( get_permalink() ),
			$time_string
		);
	}

	echo '</span>';
}



if ( ! function_exists( 'genemy_footer_entry_meta' ) ) :	
/**
 * Prints HTML with meta information for the categories, tags.
 */
function genemy_footer_entry_meta(){
	global $post;

	$twitter = 'https://twitter.com/intent/tweet?text='.get_the_title($post->ID).' &amp;url='. get_permalink($post->ID);
	$facebook = 'http://www.facebook.com/sharer.php?u='.get_permalink($post->ID).'&amp;t='.get_the_title($post->ID);
	$linkedin = 'http://www.linkedin.com/shareArticle?mini=true&amp;title='.get_the_title($post->ID).'&amp;url='. get_permalink($post->ID);
	$gplus = 'https://plus.google.com/share?url='. get_permalink($post->ID);

	echo '<div class="post-footer">';

    if((is_single() && ('post' == get_post_type()))){
		echo get_the_tag_list('<div class="tag-wrapper">', '&nbsp;&nbsp;', '</div>');
	}
    echo '<div class="share-wrapper">
        <ul>
            <li><a href="'.esc_url($facebook).'" target="_blank"><i class="fa fa-facebook"></i></a>
            </li>
            <li><a href="'.esc_url($twitter).'" target="_blank"><i class="fa fa-twitter"></i></a>
            </li>
            <li><a href="'.esc_url($linkedin).'" target="_blank"><i class="fa fa-linkedin"></i></a>
            </li>
            <li><a href="'.esc_url($gplus).'" target="_blank"><i class="fa fa-google-plus"></i></a>
            </li>
        </ul>
    </div>';
    echo '</div>';
}
endif;
function genemy_social_share( $icon = true ) {
	if( is_singular('post')){
		$single_share = ot_get_option( 'single_post_share', 'off' );
		if( $single_share == 'off') return false;
		$sharing_style = ot_get_option( 'single_post_sharing_style', 'color' );
		
	}

	if( is_singular('portfolio')){
		$single_share = ot_get_option( 'single_portfolio_share', 'on' );
		$single_share = get_post_meta( get_the_ID(), 'project_share_display', true );
		if( $single_share == 'off') return false;
		$sharing_style = ot_get_option( 'single_portfolio_sharing_style', 'grey' );		
	}	

	$icon = ($sharing_style == 'grey')? false : true;
	
	
	global $post;

	$twitter = 'https://twitter.com/intent/tweet?text='.get_the_title($post->ID).' &amp;url='. get_permalink($post->ID);
	$facebook = 'http://www.facebook.com/sharer.php?u='.get_permalink($post->ID).'&amp;t='.get_the_title($post->ID);
	$linkedin = 'http://www.linkedin.com/shareArticle?mini=true&amp;title='.get_the_title($post->ID).'&amp;url='. get_permalink($post->ID);
	$gplus = 'https://plus.google.com/share?url='. get_permalink($post->ID);
	if($icon){
		echo '<div class="m-bottom-50">
				<p class="screen-reader-text">'.esc_attr(__('Share:', 'genemy')).'</p>
				<ul class="share-social-icons clearfix">
		            <li class="active"><a class="share-ico ico-facebook" href="'.esc_url($facebook).'" target="_blank"><i class="fa fa-facebook-f"></i></a>
		            </li>
		            <li><a class="share-ico ico-twitter" href="'.esc_url($twitter).'" target="_blank"><i class="fa fa-twitter"></i></a>
		            </li>            
		            <li><a class="share-ico ico-google-plus" href="'.esc_url($gplus).'" target="_blank"><i class="fab  fa-google-plus-g"></i></a>
		            </li>
		            <li><a class="share-ico ico-linkedin" href="'.esc_url($linkedin).'" target="_blank"><i class="fab fa-linkedin-in"></i></a>
		            </li>
	        	</ul>
	        </div>';
    }else{
    	echo '<div class="m-bottom-50">
				<p class="screen-reader-text">'.esc_attr(__('Share:', 'genemy')).'</p>    	
				<ul class="project-share-links text-center clearfix">											
					<li><a class="ico-facebook" href="'.esc_url($facebook).'" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
					<li><a class="ico-twitter" href="'.esc_url($twitter).'" target="_blank"><i class="fab fa-twitter"></i></a></li>												
					<li><a class="ico-google-plus" href="'.esc_url($gplus).'" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
					<li><a class="ico-linkedin" href="'.esc_url($linkedin).'" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
				</ul>
			</div>';
    }    
	
}


function genemy_facebook_share_url(){
	global $post;
	return 'http://www.facebook.com/sharer.php?u='.get_permalink($post->ID).'&amp;t='.get_the_title($post->ID);
}
function genemy_twitter_share_url(){
	global $post;
	return 'http://twitter.com/share?text='.get_the_title($post->ID).'&amp;url='.get_permalink($post->ID);
}

if ( ! function_exists( 'genemy_excerpt_length' ) ) :
//excerpt length	
	function genemy_excerpt_length( $length ) {
		return ot_get_option( 'excerpt_length', 40 );
	}
	add_filter( 'excerpt_length', 'genemy_excerpt_length', 999 );
endif;

if ( ! function_exists( 'genemy_excerpt_more' ) && ! is_admin() ) :
function genemy_excerpt_more( $more ) {
	global $posts;
	$readmore_text = ot_get_option( 'read_more_text', 'Read More' );
	return '...';
}
add_filter( 'excerpt_more', 'genemy_excerpt_more' );
add_filter( 'the_content_more_link', 'genemy_excerpt_more' );
endif;

function genemy_read_more_button( ) {
	global $post;
	$readmore_text = ot_get_option( 'read_more_text', 'Read More' );	
	return '<div class="mt-30"><a href="'.get_permalink($post->ID).'" class="button active-btn sabbi-button hupup">'.esc_attr($readmore_text).' <i class="fa fa-long-arrow-right"></i></a></div>';
}

if ( ! function_exists( 'genemy_get_trim_words' ) ) :
function genemy_get_trim_words($content='', $count=55, $ext='...', $wrap=false, $btn=false, $btnclass="read-more", $btntext=''){
	global $post;
	if($count == 0) return false;
	
	if($content == '') $content = get_the_excerpt($post->ID);
	if($wrap){
		$output =  '<p>'.wp_trim_words( $content, $count, $ext ).'</p>';
	}else{
		$output =  wp_trim_words( $content, $count, $ext );
	}
	
	if($btn){
		$readmore_text = ot_get_option( 'read_more_text', 'Read More' );
		$readmore_text = ($btntext == '')? $readmore_text : $btntext;

		$output .= '<a class="'.esc_attr($btnclass).'" href="'.get_permalink($post->ID).'">'.
		sprintf( _x( '%s','Continue Reading text', 'genemy' ), esc_attr($readmore_text)).' <i class="fa fa-long-arrow-right"></i></a>';
	}

	return $output;
          
}
endif;

//add_filter('get_the_excerpt', 'genemy_get_the_excerpt', 10, 2);
function genemy_get_the_excerpt($excerpt, $post){

	$output = '';
	$readmore_text = ot_get_option( 'read_more_text', 'Read More' );

	$output .= '<a class="btn btn-primary" href="'.get_permalink($post->ID).'">'.
	sprintf( _x( '%s','Continue Reading text', 'genemy' ), esc_attr($readmore_text)).' <i class="genemy-angle-long-right-o"></i></a>';

	return '<p class="normal">'.$excerpt.'</p>'.$output;
}

/* Layout option for genemy */
function genemy_layout_option_values( $options = array() ){
	global $wp_query;
	
	if( is_page() ):		
		$layout = get_post_meta( get_the_ID(), 'page_layout', true );

		$sidebar = 	get_post_meta( get_the_ID(), 'sidebar', true );	
		$sidebar = ( $sidebar== '' )? 'sidebar-page' : $sidebar;
	elseif( is_single() ):
		$layout = ot_get_option('single_layout', 'rs');	
		$sidebar = 	ot_get_option( 'single_layout_sidebar', 'sidebar-1' );	
	else:
		$layout = ot_get_option('blog_layout', 'rs');
		$sidebar = 	ot_get_option( 'blog_layout_sidebar', 'sidebar-1' );
	endif;

	if( function_exists('is_woocommerce') ){
		if( is_product() ):
			$layout = ot_get_option('product_layout', 'rs');
			$sidebar = 	ot_get_option( 'product_layout_sidebar', 'sidebar-product' );
		elseif( is_woocommerce() ):
			$layout = ot_get_option('shop_layout', 'full');
			$sidebar = 	ot_get_option( 'shop_layout_sidebar', 'sidebar-product' );
		endif;
	}

	

	if ( 'portfolio' == get_post_type() ){
		$archive_id = ot_get_option('portfolio_archive');
		if(get_post_status($archive_id) == 'publish'){
			$page_id = $archive_id; 
			$layout = get_post_meta( $page_id, 'page_layout', true );
			$sidebar = 	get_post_meta( $page_id, 'sidebar', true );

		}else{
			$layout = ot_get_option('portfolio_layout', 'full');
			$sidebar = 	ot_get_option( 'portfolio_layout_sidebar', 'sidebar-portfolio' );			
		}

		if( is_singular('portfolio') ){
			$layout = ot_get_option('portfolio_single_layout', 'full');
			$sidebar = 	ot_get_option( 'portfolio_single_layout_sidebar', 'sidebar-portfolio' );
		}		
	}


	if ( 'team' == get_post_type() ){
		$archive_id = ot_get_option('team_archive');
		if(get_post_status($archive_id) == 'publish'){
			$page_id = $archive_id; 
			$layout = get_post_meta( $page_id, 'page_layout', true );
			$sidebar = 	get_post_meta( $page_id, 'sidebar', true );

		}else{
			$layout = ot_get_option('team_layout', 'full');
			$sidebar = 	ot_get_option( 'team_layout_sidebar', 'sidebar-page' );			
		}

		if( is_singular('team') ){
			$layout = ot_get_option('team_single_layout', 'full');
			$sidebar = 	ot_get_option( 'team_single_layout_sidebar', 'sidebar-page' );
		}		
	}

	

	if(is_404()) $layout = 'full';

	$layout = ( $layout == '' )	? 'full' : $layout;

	$options['layout'] = $layout;
	$options['sidebar'] = ( $layout != 'full' )? $sidebar : '';

	return apply_filters(  'genemy_layout_option_values', $options );
	
}

function genemy_get_layout(){
	global $wp_query;
	return $wp_query->genemy['layout'];
}

function genemy_get_sidebar(){
	global $wp_query;
	return $wp_query->genemy['sidebar'];
}

function genemy_page_title_display(){
	global $post;
	$display = get_post_meta( $post->ID, 'title_display', true );
	return ($display == 'off')? false : true;
	
}
function genemy_get_page_title(){
	global $post;
	$title = get_post_meta( $post->ID, 'title', true );
	$subtitle = get_post_meta( $post->ID, 'subtitle', true );

	$output = '<div class="post-info page-info text-center">
				<h3 class="post-title">'.(($title != '')? esc_attr($title) : esc_attr(get_the_title()) ).'</h3>'
				.(($subtitle != '')? '<p class="subtitle">'.esc_attr($subtitle).'</p>' : '').'
				<div class="shape1"><i class="perch perch-cross-leaf"></i></div>
      			</div><!-- .post-info -->';
	return $output;
	
}

function genemy_page_title(){
	echo (genemy_page_title_display())?  genemy_get_page_title() : '';
}

//add layout option
function genemy_body_class($classes ){
	global $wp_query;

	$classes[] = genemy_get_optiontree_layout();

	$classes[] = 'genemy-layout-'.esc_attr( ot_get_option('genemy_layout_style', 'rounded') );


	$wp_query->genemy = genemy_layout_option_values();
	if ( !is_page_template( 'page-templates/one-page.php' ) ) {
		$style = ot_get_option( 'background_style', 'width' );
		$classes[] = $style;
		if($style == 'boxed'){
			$classes[] = ot_get_option('background_type', 'pattern');
		}
		
	}

	if($wp_query->genemy['layout'] == 'ls'){
		$classes[] = 'left-sidebar';
	}elseif ($wp_query->genemy['layout'] == 'rs') {
		$classes[] = 'right-sidebar';
	}else{
		$classes[] = 'no-sidebar';
	}

	if( is_page() && is_front_page() ){
		$header_style = ot_get_option('frontpage_header_style', 'transparent-header');
		$classes[] = 'frontpage-'.$header_style;		
	}

	if( is_page() ){
		$force_transparent_header = get_post_meta( get_the_ID(), 'force_transparent_header', true );
		if( $force_transparent_header == 'on' ){
			$classes[] = 'frontpage-transparent-header';
		}
	}

	$post_type_arr = array('portfolio', 'service', 'team', 'partner', 'job');
	foreach ($post_type_arr as $key => $value) {
		if ( $value == get_post_type() ){
			if( get_post_status(get_option($value.'_archive_id')) == 'publish' ){
				$page_id = get_option($value.'_archive_id'); 
				$force_transparent_header = get_post_meta( $page_id, 'force_transparent_header', true );
				if( $force_transparent_header == 'on' ){
					$classes[] = 'frontpage-transparent-header';
				}
			}
		}
	}

	if ( 'post' == get_post_type() ){
		if( get_post_status(get_option('page_for_posts')) == 'publish' ){
			$page_id = get_option('page_for_posts'); 
			$force_transparent_header = get_post_meta( $page_id, 'force_transparent_header', true );
			if( $force_transparent_header == 'on' ){
				$classes[] = 'frontpage-transparent-header';
			}
		}
	}

	return $classes;
}
add_filter( 'body_class', 'genemy_body_class' );


function genemy_header_class( $class = '' ) {
	// Separates classes with a single space, collates classes for body element
	echo 'class="' . join( ' ', genemy_get_header_class( $class ) ) . '"';
}


function genemy_get_header_class( $class = '' ) {
	global $wp_query;

	$classes = array();

	$classes[] = ot_get_option('header_style', 'header-style1');
	$classes[] = ot_get_option('header_background', 'default-bg');
	if( is_front_page() && !is_home() ){
		$classes[] = ot_get_option('frontpage_header_style', 'transparent-header');
	}


	if( is_page() ){
		$force_transparent_header = get_post_meta( get_the_ID(), 'force_transparent_header', true );
		if( $force_transparent_header == 'on' ){
			$classes[] = 'transparent-header';
		}
	}

	if ( 'post' == get_post_type() ){
		if( get_post_status(get_option('page_for_posts')) == 'publish' ){
			$page_id = get_option('page_for_posts'); 
			$force_transparent_header = get_post_meta( $page_id, 'force_transparent_header', true );
			if( $force_transparent_header == 'on' ){
				$classes[] = 'transparent-header';
			}
		}
	}
        

	if ( ! empty( $class ) ) {
		if ( !is_array( $class ) )
			$class = preg_split( '#\s+#', $class );
		$classes = array_merge( $classes, $class );
	} else {
		// Ensure that we always coerce class to being an array.
		$class = array();
	}

	$classes = array_map( 'esc_attr', $classes );


	$classes = apply_filters( 'genemy_header_class', $classes, $class );

	return array_unique( $classes );
}

function genemy_content_wrap_class(){
	$classes = array();
	$layout = genemy_get_layout();
	$classes[] = ($layout != 'full')? 'col-md-8' : 'col-md-12';
	$classes[] = ($layout == 'ls')? 'order-md-last' : '';

	$classes = array_unique($classes);

    echo implode(' ', $classes);
}

if(!function_exists('genemy_gallery_format_content')):
function genemy_gallery_format_content(){
	global $post;
	$meta_value = get_post_meta( $post->ID, '_format_gallery', true );
	if($meta_value != '') echo do_shortcode($meta_value);
}
endif;

if(!function_exists('genemy_video_format_content')):
function genemy_video_format_content(){
	global $post;
	$meta_value = get_post_meta( $post->ID, '_format_video_embed', true );
	if($meta_value != '') {
		$embed = new WP_Embed();
		echo '<div class="responsive-video">'.$embed->run_shortcode($meta_value).'</div>';
	}	
}
endif;

if(!function_exists('genemy_audio_format_content')):
function genemy_audio_format_content(){
	global $post;
	$meta_value = get_post_meta( $post->ID, '_format_audio_embed', true );
	if($meta_value != '') {
		$embed = new WP_Embed();
		echo '<div class="audio-holder">'.$embed->run_shortcode($meta_value).'</div>';
	}	
}
endif;

if(!function_exists('genemy_status_format_content')):
function genemy_status_format_content(){
	global $post;
	$meta_value = get_post_meta( $post->ID, '_format_status_embed', true );
	if($meta_value != '') {
		$style = '';
		$background_type = get_post_meta( $post->ID, 'status_background_type', true );	

		if( ($background_type == 'featured') && has_post_thumbnail($post->ID) ){
			$fullImage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );	
			$imageurl = $fullImage[0];		
		}else{
			$imageurl = get_post_meta( $post->ID, '_format_status_image', true );
		}
		$style = ' style="background-image: url('.esc_url($imageurl).')"';
		$tag = 'iframe';
		echo '<div class="twitter-holder"'.$style.'>
      <'.$tag.'  height=240 width=500  scrolling=no src="http://twitframe.com/show?url='.esc_url($meta_value).'"></'.$tag.'>
    </div>';
	}	
}
endif;

if(!function_exists('genemy_quote_format_content')):
function genemy_quote_format_content(){
	global $post;
	$meta_value = get_post_meta( $post->ID, '_format_quote_text', true );
	if($meta_value != '') {
		$style = '';
		$background_type = get_post_meta( $post->ID, 'quote_background_type', true );	

		if( ($background_type == 'featured') && has_post_thumbnail($post->ID) ){
			$fullImage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );	
			$imageurl = $fullImage[0];		
		}else{
			$imageurl = get_post_meta( $post->ID, '_format_quote_image', true );
		}
		$style = ' style="background-image: url('.esc_url($imageurl).')"';

		$name = get_post_meta( $post->ID, '_format_quote_name', true );

		echo '<div class="blog-post qutoe-wrap"'.$style.'>
			    <div class="post-content"> 
			      <div class="post-info text-center">
			        <span class="post-format-icon">&ldquo;</span>
			      </div><!-- .post-info -->
			      
			      <div class="entry-summary qutoe-content text-center">
			          <p><span>&ldquo;</span> '.esc_attr($meta_value).' <span>&rdquo;</span></p>
			      <div class="shape1"><i class="perch perch-cross-leaf"></i></div>
			      '.(($name != '')? '<h3 class="post-title">'.esc_attr($name).'</h3>' : '').'
			      </div><!-- .entry-summary -->                      
			    </div><!-- .post-content -->
			  </div><!-- .blog-post --> ';
	}	
}
endif;

if(!function_exists('genemy_link_format_content')):
function genemy_link_format_content(){
	global $post;
	$linkurl = get_post_meta( $post->ID, '_format_link_url', true );
	$title = get_post_meta( $post->ID, '_format_link_title', true );

	$style = '';
	if( has_post_thumbnail($post->ID) ){
		$fullImage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );	
		$imageurl = $fullImage[0];	
		$style = ' style="background-image: url('.esc_url($imageurl).')"';	
	}
	
	$title = ($title != '')? $title : get_the_title();
	echo '<div class="link-holder text-center"'.$style.'>
	    <div class="link-content">
	      <i class="fa fa-link format-link-icon"></i>
	      <h3 class="post-title"><a href="'.get_permalink($post->ID).'" title="'.esc_attr($title).'">'.esc_attr($title).'</a></h3>
	      '.(($linkurl != '')? '<span class="link">'.esc_url($linkurl).'</span>' : '').'
	    </div>
	</div>';
		
}
endif;




/* Check if Class Exists. */
if ( !class_exists( 'Genemy_Walker_Menu' ) ) {

  /**
   * WP_Bootstrap_Navwalker class
   *
   * @package        Template
   * @subpackage     Bootstrap4
   *
   * @since          1.0.0
   * @see            https://getbootstrap.com/docs/4.0/components/navbar/
   * @extends        Walker_Nav_Menu
   * @author         Javier Prieto
   */
  class Genemy_Walker_Menu extends Walker_Nav_Menu {

    /**
     * @since       1.0.0
     * @access      public
     * @var type    bool
     */
    private $dropdown = false;

    /**
     * Starts the list before the elements are added.
     *
     * @since       1.0.0
     *
     * @see Walker::start_lvl()
     *
     * @param string   $output Passed by reference. Used to append additional content.
     * @param int      $depth  Depth of menu item. Used for padding.
     * @param stdClass $args   An object of wp_nav_menu() arguments.
     */
    public function start_lvl( &$output, $depth = 0, $args = array() ) {
      if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
        $t = '';
        $n = '';
      } else {
        $t = "\t";
        $n = "\n";
      }

      $this->dropdown = true;
      $output         .= $n . str_repeat( $t, $depth ) . '<div class="dropdown-menu" role="menu">' . $n;
    }

    /**
     * Ends the list of after the elements are added.
     *
     * @since       1.0.0
     *
     * @see Walker::end_lvl()
     *
     * @param string   $output Passed by reference. Used to append additional content.
     * @param int      $depth  Depth of menu item. Used for padding.
     * @param stdClass $args   An object of wp_nav_menu() arguments.
     */
    public function end_lvl( &$output, $depth = 0, $args = array() ) {
      if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
        $t = '';
        $n = '';
      } else {
        $t = "\t";
        $n = "\n";
      }

      $this->dropdown = false;
      $output         .= $n . str_repeat( $t, $depth ) . '</div>' . $n;
    }

    /**
     * Starts the element output.
     *
     * @since 1.0.0
     *
     * @see Walker::start_el()
     *
     * @param string   $output Passed by reference. Used to append additional content.
     * @param WP_Post  $item   Menu item data object.
     * @param int      $depth  Depth of menu item. Used for padding.
     * @param stdClass $args   An object of wp_nav_menu() arguments.
     * @param int      $id     Current item ID.
     */
    public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
      if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
        $t = '';
        $n = '';
      } else {
        $t = "\t";
        $n = "\n";
      }

      $indent = str_repeat( $t, $depth );

      if ( 0 === strcasecmp( $item->attr_title, 'divider' ) && $this->dropdown ) {
        $output .= $indent . '<div class="dropdown-divider"></div>' . $n;
        return;
      } elseif ( 0 === strcasecmp( $item->title, 'divider' ) && $this->dropdown ) {
        $output .= $indent . '<div class="dropdown-divider"></div>' . $n;
        return;
      }

      $classes   = empty( $item->classes ) ? array() : (array) $item->classes;
      $classes[] = 'menu-item-' . $item->ID;
      $classes[] = 'nav-item';

      if ( $args->walker->has_children ) {
        $classes[] = 'dropdown';
      }

      if ( 0 < $depth ) {
        $classes[] = 'dropdown-menu';
      }

      /**
       * Filters the arguments for a single nav menu item.
       *
       * @since 1.2.0
       *
       * @param stdClass $args  An object of wp_nav_menu() arguments.
       * @param WP_Post  $item  Menu item data object.
       * @param int      $depth Depth of menu item. Used for padding.
       */
      $args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );

      /**
       * Filters the CSS class(es) applied to a menu item's list item element.
       *
       * @since 3.0.0
       * @since 4.1.0 The `$depth` parameter was added.
       *
       * @param array    $classes The CSS classes that are applied to the menu item's `<li>` element.
       * @param WP_Post  $item    The current menu item.
       * @param stdClass $args    An object of wp_nav_menu() arguments.
       * @param int      $depth   Depth of menu item. Used for padding.
       */
      $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
      $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

      /**
       * Filters the ID applied to a menu item's list item element.
       *
       * @since 3.0.1
       * @since 4.1.0 The `$depth` parameter was added.
       *
       * @param string   $menu_id The ID that is applied to the menu item's `<li>` element.
       * @param WP_Post  $item    The current menu item.
       * @param stdClass $args    An object of wp_nav_menu() arguments.
       * @param int      $depth   Depth of menu item. Used for padding.
       */
      $id = apply_filters( 'nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args, $depth );
      $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

      if ( !$this->dropdown ) {
        $output .= $indent . '<li' . $id . $class_names . '>' . $n . $indent . $t;
      }

      $atts           = array();
      $atts['title']  = !empty( $item->attr_title ) ? $item->attr_title : '';
      $atts['target'] = !empty( $item->target ) ? $item->target : '';
      $atts['rel']    = !empty( $item->xfn ) ? $item->xfn : '';
      $atts['href']   = !empty( $item->url ) ? $item->url : '';

      /**
       * Filters the HTML attributes applied to a menu item's anchor element.
       *
       * @since 3.6.0
       * @since 4.1.0 The `$depth` parameter was added.
       *
       * @param array $atts {
       *     The HTML attributes applied to the menu item's `<a>` element, empty strings are ignored.
       *
       *     @type string $title  Title attribute.
       *     @type string $target Target attribute.
       *     @type string $rel    The rel attribute.
       *     @type string $href   The href attribute.
       * }
       * @param WP_Post  $item  The current menu item.
       * @param stdClass $args  An object of wp_nav_menu() arguments.
       * @param int      $depth Depth of menu item. Used for padding.
       */
      $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

      if ( $args->walker->has_children && ( $depth < 1 ) ) {
        $atts['data-toggle']   = 'dropdown';
        $atts['aria-haspopup'] = 'true';
        $atts['aria-expanded'] = 'false';
      }

      $attributes = '';
      foreach ( $atts as $attr => $value ) {
        if ( !empty( $value ) ) {
          $value      = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
          $attributes .= ' ' . $attr . '="' . $value . '"';
        }
      }

      /** This filter is documented in wp-includes/post-template.php */
      $title = apply_filters( 'the_title', $item->title, $item->ID );

      /**
       * Filters a menu item's title.
       *
       * @since 4.4.0
       *
       * @param string   $title The menu item's title.
       * @param WP_Post  $item  The current menu item.
       * @param stdClass $args  An object of wp_nav_menu() arguments.
       * @param int      $depth Depth of menu item. Used for padding.
       */
      $title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );

      $item_classes = array( 'nav-link' );

      if ( $args->walker->has_children && ( $depth < 1 ) ) {
        $item_classes[] = 'dropdown-toggle';
      }

      if ( 0 < $depth ) {      	
        $item_classes = array_diff( $item_classes, [ 'nav-link' ] );
        $item_classes[] = 'dropdown-item';
        $item_classes[] = in_array('current-menu-item', $classes)? 'active' : '';
      }

      $item_output = $args->before;
      $item_output .= '<a class="' . implode( ' ', $item_classes ) . '" ' . $attributes . '>';
      $item_output .= $args->link_before . $title . $args->link_after;
      $item_output .= '</a>';
      $item_output .= $args->after;

      /**
       * Filters a menu item's starting output.
       *
       * The menu item's starting output only includes `$args->before`, the opening `<a>`,
       * the menu item's title, the closing `</a>`, and `$args->after`. Currently, there is
       * no filter for modifying the opening and closing `<li>` for a menu item.
       *
       * @since 3.0.0
       *
       * @param string   $item_output The menu item's starting HTML output.
       * @param WP_Post  $item        Menu item data object.
       * @param int      $depth       Depth of menu item. Used for padding.
       * @param stdClass $args        An object of wp_nav_menu() arguments.
       */
      $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }

    /**
     * Ends the element output, if needed.
     *
     * @since 1.0.0
     *
     * @see Walker::end_el()
     *
     * @param string   $output Passed by reference. Used to append additional content.
     * @param WP_Post  $item   Page data object. Not used.
     * @param int      $depth  Depth of page. Not Used.
     * @param stdClass $args   An object of wp_nav_menu() arguments.
     */
    public function end_el( &$output, $item, $depth = 0, $args = array() ) {
      if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
        $t = '';
        $n = '';
      } else {
        $t = "\t";
        $n = "\n";
      }

      $output .= $this->dropdown ? '' : str_repeat( $t, $depth ) . '</li>' . $n;
    }

    /**
     * Menu Fallback
     *
     * @since 1.0.0
     *
     * @param array $args passed from the wp_nav_menu function.
     */
    public static function fallback( $args ) {
      if ( current_user_can( 'edit_theme_options' ) ) {

        $defaults = array(
            'container'       => '',
            'container_id'    => false,
            'container_class' => false,
            'menu_class'      => '',
            'menu_id'         => false,
        );
        $args     = wp_parse_args( $args, $defaults );
        if ( !empty( $args['container'] ) ) {
          echo sprintf( '<%s id="%s" class="%s">', $args['container'], $args['container_id'], $args['container_class'] );
        }
        echo sprintf( '<ul id="%s" class="%s">', $args['menu_id'], $args['menu_class'] ) .
        '<li class="nav-item">' .
        '<a href="' . admin_url( 'nav-menus.php' ) . '" class="nav-link">' . esc_attr(__( 'Add a menu', 'genemy' )) . '</a>' .
        '</li></ul>';
        if ( !empty( $args['container'] ) ) {
          echo sprintf( '</%s>', $args['container'] );
        }
      }
    }

  }

}

add_filter( 'crmm_nav_link_css_class', 'genemy_crmm_nav_menu_link_attributes', 10, 4 );
function genemy_crmm_nav_menu_link_attributes( $classes, $item, $args, $depth ){ 

	if ( 0 < $depth ) {		
        $classes[] = in_array('current-menu-item', $item->classes)? 'active' : '';
    }
	return $classes;
}

function genemy_image_gallery_ids($gallery){
	if($gallery == '') return false;

	$arr = explode(',', $gallery);
	$arr = array_filter($arr);

	return $arr;
}

function genemy_image_gallery($gallery, $echo=true){
	if($gallery == '') return false;

	$arr = explode(',', $gallery);
	$arr = array_filter($arr);
	if( !empty($arr) ){
		$count = $remain = 0;
		$moreclass = (count($arr) > 3)? ' plusmore' : '';		
		echo '<div class="row genemy-image-gallery'.$moreclass.'">';
		foreach ($arr as $key => $value) {
			$size = ( $count > 0 )? 'genemy-300x300-crop' : 'genemy-630x335-crop';
			$class = ( $count > 0 )? 'col-md-6 col-sm-6 col-xs-6 image'.$count : 'col-md-12 col-sm-12 col-xs-12 image'.$count;
			$image = wp_get_attachment_image_src($value, $size);
			$thumb = $image[0];
			$image = wp_get_attachment_image_src($value, 'full');
			$fullimage = $image[0];
			$title = get_the_title($value);

			if( $count > 2 ){
				echo '<a class="hidden" href="'.$fullimage.'" title="'.$title.'"></a>';
			}else{
				if(($count == 2) && (count($arr) > 3)){
					echo '<div class="'.esc_attr($class).'"><div><a href="'.esc_url($fullimage).'" title="'.esc_attr($title).'">'.(count($arr) -3).'+</a><img src="'.esc_url($thumb).'" alt="'.esc_attr($title).'"></div></div>';
				}else{
					echo '<div class="'.esc_attr($class).'"><div><a href="'.esc_url($fullimage).'" title="'.esc_attr($title).'"><img src="'.esc_url($thumb).'" alt="'.esc_attr($title).'"></a></div></div>';
				}
				
			}
			$count++;
			
		}
		
		echo '</div>';
		
	}
}
function genemy_page_wrapper_class($class=""){
	$classArr = array();
	$classArr[] = $class;
	$classArr[] = 'boxed-wrapper';
	if( !is_page() && ('post' != get_post_type()) ){
		$classArr[] = 'page-wrapper-'.get_post_type(); 
	}
	$classArr = array_filter($classArr);

	echo 'class="'.implode(' ', $classArr).'"';
}


function genemy_add_nav_menu_classes($classes, $item){

	if(get_post_status(get_option('team_archive_id')) == 'publish'){
		$mypost = get_post(get_option('team_archive_id')); 
		$title = $mypost->post_title;

		if( is_post_type_archive('team') && ($item->title == $title ) ){
		      $classes[] = 'current-menu-item current_page_item active';
		   }
	}
   
   return $classes;
}
add_filter('nav_menu_css_class' , 'genemy_add_nav_menu_classes' , 10 , 2);

if( !function_exists('genemy_team_archive_content') ):
function genemy_team_archive_content(){
	if( get_post_status(get_option('team_archive_id')) == 'publish' ){
		$page_id = get_option('team_archive_id'); 
		$post = get_post( $page_id );
		echo apply_filters('the_content', $post->post_content);
	}
}
endif;

function genemy_numeric_posts_nav($class = 'm-top-80') {

    if( is_singular() )
        return;

    global $wp_query;

    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;

    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );

    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;

    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

 
    echo '<div class="blog-page-pagination '.esc_attr($class).'"><nav aria-label="Page navigation"><ul class="pagination justify-content-center">' . "\n";

    /** Previous Post Link */
    if ( get_previous_posts_link() ){
    	$nexttext = __('Previous', 'genemy');
        printf( '<li class="page-item prev"><span class="page-link">%s</span></li>' . "\n", get_previous_posts_link('<i class="icon-chevron-left"></i>'.esc_attr($nexttext)) );
    }
    	

    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';

        printf( '<li class="page-item"><a%s href="%s" class="page-link">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

        if ( ! in_array( 2, $links ) )
            echo '<li class="page-item"><span class="page-link">...</span></li>';
    }

    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="page-item active"' : ' class="page-item"';
        printf( '<li%s><a href="%s" class="page-link">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }

    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li class="page-item"><span class="page-link">...</span></li>' . "\n";

        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li class="page-item"><a%s href="%s" class="page-link">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }

    /** Next Post Link */
    if ( get_next_posts_link() ){
    	$nexttext = __('Next', 'genemy');
        printf( '<li class="page-item next"><span class="page-link">%s</span></li>' . "\n", get_next_posts_link(esc_attr($nexttext).' <i class="icon-chevron-right"></i>') );
    }
    	

    echo '</ul></nav></div>' . "\n";

}

add_filter('wp_link_pages', 'genemy_link_pages', 10, 2);
function genemy_link_pages( $output, $args = '' ) {
    global $page, $numpages, $multipage, $more;
 
    $defaults = array(
        'before'           => '<nav class="Page navigation m-top-25 m-bottom-25"><ul class="pagination justify-content-left"><li class="page-item"><span class="page-link">' . __( 'Pages:', 'genemy' ) . '</span></li>',
        'after'            => '</ul></nav>',
        'link_before'      => '<span class="page-link">',
        'link_after'       => '</span>',
        'next_or_number'   => 'number',
        'separator'        => '',
        'nextpagelink'     => esc_attr(__( 'Next', 'genemy')),
        'previouspagelink' => esc_attr(__( 'Previous', 'genemy' )),
        'pagelink'         => '%',
        'echo'             => 1
    );
 
    $params = wp_parse_args( $args, $defaults );
 
    /**
     * Filters the arguments used in retrieving page links for paginated posts.
     *
     * @since 3.0.0
     *
     * @param array $params An array of arguments for page links for paginated posts.
     */
    $r = apply_filters( 'wp_link_pages_args', $params );
 
    $output = '';
    if ( $multipage ) {
        if ( 'number' == $r['next_or_number'] ) {
            $output .= $r['before'];
            for ( $i = 1; $i <= $numpages; $i++ ) {
            	if( $page == $i ){
            		$link = '<li class="page-item active">'.$r['link_before'] . str_replace( '%', $i, $r['pagelink'] ) . $r['link_after'].'</li>';
            	}else{
            		$link = '<li class="page-item">'.$r['link_before'] . str_replace( '%', $i, $r['pagelink'] ) . $r['link_after'].'</li>';
            	}
                
                if ( $i != $page || ! $more && 1 == $page ) {
                    $link = '<li class="page-item">'._wp_link_page( $i ) . $link . '</a></li>';
                }
                /**
                 * Filters the HTML output of individual page number links.
                 *
                 * @since 3.6.0
                 *
                 * @param string $link The page number HTML output.
                 * @param int    $i    Page number for paginated posts' page links.
                 */
                $link = apply_filters( 'wp_link_pages_link', $link, $i );
 
                // Use the custom links separator beginning with the second link.
                $output .= ( 1 === $i ) ? ' ' : $r['separator'];
                $output .= $link;
            }
            $output .= $r['after'];
        } elseif ( $more ) {
            $output .= $r['before'];
            $prev = $page - 1;
            if ( $prev > 0 ) {
                $link = '<li class="page-item">'._wp_link_page( $prev ) . $r['link_before'] . $r['previouspagelink'] . $r['link_after'] . '</a></li>';
 
                /** This filter is documented in wp-includes/post-template.php */
                $output .= apply_filters( 'wp_link_pages_link', $link, $prev );
            }
            $next = $page + 1;
            if ( $next <= $numpages ) {
                if ( $prev ) {
                    $output .= $r['separator'];
                }
                $link = '<li class="page-item">'._wp_link_page( $next ) . $r['link_before'] . $r['nextpagelink'] . $r['link_after'] . '</a></li>';
 
                /** This filter is documented in wp-includes/post-template.php */
                $output .= apply_filters( 'wp_link_pages_link', $link, $next );
            }
            $output .= $r['after'];
        }
    }
 
    /**
     * Filters the HTML output of page links for paginated posts.
     *
     * @since 3.6.0
     *
     * @param string $output HTML output of paginated posts' page links.
     * @param array  $args   An array of arguments.
     */
    //$html = apply_filters( 'wp_link_pages', $output, $args );
 
   
    return $output;
}
add_filter( 'genemy_thumbnail_size', 'genemy_thumbnail_size' );
function genemy_thumbnail_size($size){
	$column = 3;
	if('portfolio' == get_post_type() ){
			$column = genemy_get_portfolio_column();
	}
	if('service' == get_post_type() ){
			$column = genemy_get_service_column();
	}
	if('team' == get_post_type() ){
			$column = genemy_get_team_column();
	}
	$size = ( $column == 2 )? 'genemy-630x335-crop' : $size; 
	return $size;
}

add_filter( 'genemy_portfolio_post_type_slug', 'genemy_portfolio_post_type_slug', 10, 1 );
function genemy_portfolio_post_type_slug($slug){
	$id = genemy_get_post_type_archive_page_id('portfolio');
	
	if($id){
		$slug = genemy_get_the_slug($id);
	}

	return $slug;
}

add_filter( 'genemy_team_post_type_slug', 'genemy_team_post_type_slug', 10, 1 );
function genemy_team_post_type_slug($slug){
	$id = genemy_get_post_type_archive_page_id('team');
	
	if($id){
		$slug = genemy_get_the_slug($id);
	}

	return $slug;
}

function genemy_footer_social_icons(){
	$arr = ot_get_option( 'social_icons', genemy_default_social_icons() );
	$args = array(
		'wrapclass' => 'foo-links text-center clearfix'
	);
	return '<!-- Social Icons -->
                <div class="footer-socials-links">
                '.genemy_get_social_icons($arr, $args).'                                  
                </div>
              ';
}

if( !function_exists('genemy_team_archive_content') ):
function genemy_team_archive_content(){
	$id = ot_get_option('team_archive');
	if( get_post_status($id) == 'publish' ){
		$page_id = $id; 
		$post = get_post( $page_id );
		echo apply_filters('the_content', $post->post_content);
	}
}
endif;

if( !function_exists('genemy_portfolio_archive_content') ):
function genemy_portfolio_archive_content(){
	$id = ot_get_option('portfolio_archive');
	if( get_post_status($id) == 'publish' ){
		$page_id = $id; 
		$post = get_post( $page_id );
		echo apply_filters('the_content', $post->post_content);
	}
}
endif;

/*Single portfolio*/

function portfolio_get_post_title_tag(){
    $tag = ot_get_option('portfolio_single_post_title_tag', 'h3');
    $tag = ( $tag != '' )? $tag : 'h3';
    return esc_attr($tag);
}
function genemy_portfolio_post_title_before(){
    $tag = portfolio_get_post_title_tag();
    $tag_size = ot_get_option('portfolio_post_title_tag_size', 'xs'); 
    $tag_size = ($tag_size != '')?  $tag.'-'.$tag_size : '';

    return sprintf('<%s class="%s">', $tag, $tag_size );
}
function genemy_portfolio_post_title_after(){
    $tag = portfolio_get_post_title_tag();
    return sprintf('</%s>', $tag);
}

/*Single team*/

function genemy_team_get_post_title_tag(){
    $tag = ot_get_option('team_single_post_title_tag', 'h3');
    $tag = ( $tag != '' )? $tag : 'h3';
    return esc_attr($tag);
}
function genemy_team_post_title_before(){
    $tag = genemy_team_get_post_title_tag();
    $tag_size = ot_get_option('team_post_title_tag_size', 'xs'); 
    $tag_size = ($tag_size != '')?  $tag.'-'.$tag_size : '';

    return sprintf('<%s class="%s m-top-35">', $tag, $tag_size );
}
function genemy_team_post_title_after(){
    $tag = genemy_team_get_post_title_tag();
    return sprintf('</%s>', $tag);
}

/*Single Post*/

function genemy_get_post_title_tag(){
    $tag = ot_get_option('single_post_title_tag', 'h4');
    $tag = ( $tag != '' )? $tag : 'h4';
    return esc_attr($tag);
}
function genemy_post_title_before(){
    $tag = genemy_get_post_title_tag();
    $tag_size = ot_get_option('post_title_tag_size', 'lg'); 
    $tag_size = ($tag_size != '')?  $tag.'-'.$tag_size : '';

    return sprintf('<%s class="%s">', $tag, $tag_size );
}
function genemy_post_title_after(){
    $tag = genemy_get_post_title_tag();
    return sprintf('</%s>', $tag);
}