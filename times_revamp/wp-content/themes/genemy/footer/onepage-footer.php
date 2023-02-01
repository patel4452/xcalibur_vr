<?php 
$onepage_footer_display = get_post_meta( get_the_ID(), 'onepage_footer_display', true );
$footer_bg_style = get_post_meta( get_the_ID(), 'footer_bg_style', true );
$widget_display = ot_get_option( 'footer_widget_area', 'on' );
if( $onepage_footer_display == 'on' ):
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
        </div>    <!-- END FOOTER CONTENT -->

        <?php get_template_part( 'footer/copyright' ); ?>

    </div>     <!-- End container -->                                       
</footer>   <!-- END FOOTER-1 -->
<?php endif; ?>