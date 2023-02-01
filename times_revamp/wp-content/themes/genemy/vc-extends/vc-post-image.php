<?php
if ( !defined( 'ABSPATH' ) ) {
    die( '-1' );
} //!defined( 'ABSPATH' )
add_action( 'vc_after_init', 'genemy_vc_post_image_param' );
function genemy_vc_post_image_param( ) {
    $newParamData = array(
         array(
             'type' => 'dropdown',
            'heading' => __( 'Image size', 'genemy' ),
            'param_name' => 'img_size',
            'value' => array_flip( genemy_get_image_sizes_Arr() ),
            'description' => __( 'Enter image size (Example: "thumbnail", "medium", "large", "full" or other sizes defined by theme). Alternatively enter size in pixels (Example: 200x100 (Width x Height)). Leave parameter empty to use "thumbnail" by default.', 'genemy' ) 
        ) 
    );
    foreach ( $newParamData as $key => $value ) {
        vc_update_shortcode_param( 'vc_gitem_image', $value );
    } //$newParamData as $key => $value
}

