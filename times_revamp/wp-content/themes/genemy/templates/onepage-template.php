<?php
/**
 * Template Name: Landing page template
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>    
    <?php get_template_part( 'header/preloader' ); ?>  

    <div id="page" class="page">

    <?php 
    get_template_part( 'header/'.GenemyHeader::get_navbar_style() );    

	if ( have_posts() ) :  
      
        while ( have_posts() ) : the_post();    
            ?>       
           <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php the_content(); ?>
            </div>   
            <?php        
        endwhile;
        // If no content, include the "No posts found" template.
        else :
        get_template_part( 'template-parts/post/content', 'none' );
    endif;
    ?>

    <?php get_template_part( 'footer/onepage', 'footer' ); ?>
    <?php get_template_part( 'footer/quick-form' ); ?>

  </div>

 <?php wp_footer(); ?>

</body>
</html>