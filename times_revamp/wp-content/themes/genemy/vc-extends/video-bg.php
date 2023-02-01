<?php
/**
* The VC Functions
*/
add_action( 'vc_before_init', 'genemy_video_bg_shortcode_vc' );
function genemy_video_bg_shortcode_vc( $return = false ) {
    $args = array(
        'icon' => 'genemy-hero-icon',
        'name' => __( 'Video background', 'genemy' ),
        'base' => 'genemy_video_bg',
        'class' => 'genemy-vc',
        'category' => __( 'Genemy', 'genemy' ),
        'description' => __( 'Display video background', 'genemy' ),
        'as_parent'  => array('only' => 'vc_row_inner'), 
        'content_element' => true,
        'show_settings_on_create' => true,
        'is_container' => true,
        'js_view' => 'VcColumnView',
        'params' => array(
            array(
                'type' => 'image_upload',
                'heading' => __( 'Poster Image', 'genemy' ),
                'param_name' => 'image',
                'description' => '',
                'value' => GENEMY_URI . '/images/video/video.jpg' 
            ),
            array(
                'type' => 'image_upload',
                'heading' => __( '.mp4 format video', 'genemy' ),
                'param_name' => 'mp4',
                'description' => '',
                'value' => '//jthemes.org/wp/genemy/files/images/video/video.mp4' 
            ),
            array(
                'type' => 'image_upload',
                'heading' => __( '.webm format video', 'genemy' ),
                'param_name' => 'webm',
                'description' => '',
                'value' => '//jthemes.org/wp/genemy/files/images/video/video.webm' 
            ),
            array(
                'type' => 'image_upload',
                'heading' => __( '.ogv format video', 'genemy' ),
                'param_name' => 'ogv',
                'description' => '',
                'value' => '//jthemes.org/wp/genemy/files/images/video/video.ogv' 
            ),
        )       
    );

    $args = apply_filters( 'genemy_vc_map_filter', $args, $args['base'] );
    if( $return ) {
        return genemy_vc_get_params_value($args);
    }else{
        vc_map( $args );
    }
}
// A must for container functionality, replace Wbc_Item with your base name from mapping for parent container
if(class_exists('WPBakeryShortCodesContainer')){
    class WPBakeryShortCode_Genemy_video_bg extends WPBakeryShortCodesContainer {
    }
}

