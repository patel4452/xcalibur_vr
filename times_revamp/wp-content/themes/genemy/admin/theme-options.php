<?php
//include all available options
include GENEMY_DIR . '/admin/options/general_options.php';
include GENEMY_DIR . '/admin/options/background_options.php';
include GENEMY_DIR . '/admin/options/header_options.php';
include GENEMY_DIR . '/admin/options/sidebar_options.php';
include GENEMY_DIR . '/admin/options/footer_options.php';
include GENEMY_DIR . '/admin/options/blog_options.php';
include GENEMY_DIR . '/admin/options/portfolio_options.php';
include GENEMY_DIR . '/admin/options/typography_options.php';
include GENEMY_DIR . '/admin/options/styling_options.php';
include GENEMY_DIR . '/admin/options/slider_options.php';
include GENEMY_DIR . '/admin/options/404_options.php';
include GENEMY_DIR . '/admin/options/woo_options.php';
function genemy_woo_ot_section() {
    return array(
         'id' => 'woo_options',
        'title' => __( 'Woo options', 'genemy' ) 
    );
}
/**

* Initialize the custom theme options.

*/
add_action( 'admin_init', 'genemy_theme_options', 1 );
/**

* Build the custom settings & update OptionTree.

*/
function genemy_theme_options( ) {
    /* OptionTree is not loaded yet */
    if ( !function_exists( 'ot_settings_id' ) )
        return false;
    /**
    
    * Get a copy of the saved settings array. 
    
    */
    $saved_settings     = get_option( ot_settings_id(), array( ) );
    /**
    
    * Custom settings array that will eventually be 
    
    * passes to the OptionTree Settings API Class.
    
    */
    //available option functions - return type array()
    $general_options    = genemy_general_options();
    $background_options = genemy_background_options();
    $header_options     = genemy_header_options();
    $slider_options     = genemy_slider_options();
    $sidebar_options    = genemy_sidebar_options();
    $footer_options     = genemy_footer_options();
    $blog_options       = genemy_blog_options();
    $portfolio_options  = genemy_portfolio_options();
    $typography_options = genemy_typography_options();
    $styling_options    = genemy_styling_options();
    $error_options      = genemy_404_options();
    $woo_options        = genemy_woo_options();

    //merge all available options
    $settings           = array_merge( $general_options, $background_options, $header_options, $slider_options, $sidebar_options, $footer_options, $blog_options, $portfolio_options, $error_options, $typography_options, $styling_options, $woo_options );
    $custom_settings    = array(
         'contextual_help' => array(
             'sidebar' => '' 
        ),
        'sections' => array(
             array(
                 'id' => 'general_options',
                'title' => __( 'General options', 'genemy' ) 
            ),
            array(
                 'id' => 'header_options',
                'title' => __( 'Header options', 'genemy' ) 
            ),
            array(
                 'id' => 'background_options',
                'title' => __( 'Background Options', 'genemy' ) 
            ),
            array(
                 'id' => 'footer_options',
                'title' => __( 'Footer options', 'genemy' ) 
            ),
            array(
                 'id' => 'sidebar_option',
                'title' => __( 'Sidebar options', 'genemy' ) 
            ),
            array(
                 'id' => 'blog_options',
                'title' => __( 'Blog options', 'genemy' ) 
            ),
            array(
                 'id' => 'portfolio_options',
                'title' => __( 'Portfolio & Team options', 'genemy' ) 
            ),
            genemy_woo_ot_section(),
            array(
                 'id' => '404_options',
                'title' => __( '404 page', 'genemy' ) 
            ),
            array(
                 'id' => 'fonts',
                'title' => __( 'Typography options', 'genemy' ) 
            ),
            array(
                 'id' => 'styling_options',
                'title' => __( 'Styling options', 'genemy' ) 
            ),
        ),
        'settings' => $settings 
    );
    /* allow settings to be filtered before saving */
    //$custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );
    /* settings are not the same update the DB */
    if ( ( $saved_settings !== $custom_settings ) ) {
        update_option( ot_settings_id(), $custom_settings );
    } //( $saved_settings !== $custom_settings )
    /* Lets OptionTree know the UI Builder is being overridden */
    global $ot_has_custom_theme_options;
    $ot_has_custom_theme_options = true;
    return $custom_settings[ 'settings' ];
}