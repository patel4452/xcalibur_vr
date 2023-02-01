<?php
if ( !defined( 'ABSPATH' ) ) {
    die( '-1' );
} //!defined( 'ABSPATH' )
add_action( 'vc_after_init', 'genemy_vc_button_param' );
function genemy_vc_button_param( ) {
    $newParamData = array(
         array(
             'type' => 'dropdown',
            'heading' => __( 'Style', 'genemy' ),
            'description' => __( 'Select button display style.', 'genemy' ),
            'param_name' => 'style',
            // partly compatible with btn2, need to be converted shape+style from btn2 and btn1
            'value' => array(
                 __( 'Genemy', 'genemy' ) => 'genemy',
                __( 'Modern', 'genemy' ) => 'modern',
                __( 'Classic', 'genemy' ) => 'classic',
                __( 'Flat', 'genemy' ) => 'flat',
                __( 'Outline', 'genemy' ) => 'outline',
                __( '3d', 'genemy' ) => '3d',
                __( 'Custom', 'genemy' ) => 'custom',
                __( 'Outline custom', 'genemy' ) => 'outline-custom',
                __( 'Gradient', 'genemy' ) => 'gradient',
                __( 'Gradient Custom', 'genemy' ) => 'gradient-custom' 
            ) 
        ),
        array(
             'type' => 'dropdown',
            'heading' => __( 'Shape', 'genemy' ),
            'description' => __( 'Select button shape.', 'genemy' ),
            'param_name' => 'shape',
            // need to be converted
            'value' => array(
                 __( 'Square', 'genemy' ) => 'square',
                __( 'Rounded', 'genemy' ) => 'rounded',
                __( 'Round', 'genemy' ) => 'round' 
            ) 
        ),
        array(
             'type' => 'dropdown',
            'heading' => __( 'Color', 'genemy' ),
            'param_name' => 'color',
            'description' => __( 'Select button color.', 'genemy' ),
            // compatible with btn2, need to be converted from btn1
            'param_holder_class' => 'vc_colored-dropdown vc_btn3-colored-dropdown',
            'value' => array(
                // Btn1 Colors
                 __( 'Genemy Primary', 'genemy' ) => 'btn-primary',
                __( 'Genemy Primary outline', 'genemy' ) => 'btn-primary-outline',
                __( 'Genemy Secondary', 'genemy' ) => 'btn-secondary',
                __( 'Classic Grey', 'genemy' ) => 'default',
                __( 'Classic Blue', 'genemy' ) => 'primary',
                __( 'Classic Turquoise', 'genemy' ) => 'info',
                __( 'Classic Green', 'genemy' ) => 'success',
                __( 'Classic Orange', 'genemy' ) => 'warning',
                __( 'Classic Red', 'genemy' ) => 'danger',
                __( 'Classic Black', 'genemy' ) => 'inverse' 
                // + Btn2 Colors (default color set)
            ) + vc_get_shared( 'colors-dashed' ),
            'std' => 'btn-primary',
            // must have default color grey
            'dependency' => array(
                 'element' => 'style',
                'value_not_equal_to' => array(
                     'custom',
                    'outline-custom',
                    'gradient',
                    'gradient-custom' 
                ) 
            ) 
        ) 
    );
    foreach ( $newParamData as $key => $value ) {
        vc_update_shortcode_param( 'vc_btn', $value );
    } //$newParamData as $key => $value
}

