<?php
/**
* The VC Functions
*/
add_action( 'vc_before_init', 'genemy_button_group_shortcode_vc' );
function genemy_button_group_shortcode_vc( $return = false ) {
    $args = array(
        'icon' => 'genemy-icon',
        'name' => __( 'Button group', 'genemy' ),
        'base' => 'genemy_button_group',
        'class' => 'genemy-vc',
        'category' => __( 'Genemy', 'genemy' ),
        'description' => __( 'Display button group', 'genemy' ),
        'params' => array(
            array(
                'type' => 'dropdown',
                'heading' => __( 'Align', 'genemy' ),
                'param_name' => 'align',
                'std' => 'left',
                'save_always' => true,
                'value' => array(
                    'Left' => 'left',
                    'Center' => 'center',
                    'Right' => 'right',
                ),
                'admin_label' => true,
            ),                       
            array(
                'type' => 'dropdown',
                'heading' => __( 'Display', 'genemy' ),
                'param_name' => 'display',
                'value' => array(
                    'Button' => 'buttons',
                    'Icons' => 'icons',
                ),
                'std' => 'buttons',
                'admin_label' => true 
            ),
            // params group
            array(
                'type' => 'param_group',
                'save_always' => true,
                'heading' => __( 'Buttons', 'genemy' ),
                'param_name' => 'params',
                'value' => urlencode( json_encode( array(
                    array(
                        'button_text' => 'Get Started Now',
                        'button_size' => 'btn-md',
                    ),
                ) ) ),
                'params' => genemy_button_groups_param(),
                'dependency' => array(
                    'element' => 'display',
                    'value' => 'buttons'
                )
            ),
            // params group
            array(
                'type' => 'param_group',
                'save_always' => true,
                'heading' => __( 'Icon Buttons', 'genemy' ),
                'param_name' => 'params2',
                'dependency' => array(
                    'element' => 'display',
                    'value' => 'icons'
                ),
                'value' => urlencode( json_encode( array(
                    array(
                        'image' => GENEMY_URI. '/images/appstore.png',
                        'title' => 'Download on the app store',
                        'link' => '#'
                    ),
                    array(
                        'image' => GENEMY_URI. '/images/googleplay.png',
                        'title' => 'Get it on Google play',
                        'link' => '#'
                    ),
                ) ) ),
                'params' => array(
                    array(
                        'type' => 'textfield',
                        'heading' => __( 'Icon Title', 'genemy' ),
                        'param_name' => 'title',
                        'value' => 'Get it on Amazon',
                        'admin_label' => true 
                    ),
                    array(
                        'type' => 'image_upload',
                        'heading' => __( 'Icon Image', 'genemy' ),
                        'param_name' => 'image',
                        'description' => '',
                        'value' => GENEMY_URI . '/images/amazon.png',
                    ),
                    array(
                        'type' => 'textfield',
                        'heading' => __( 'Icon link', 'genemy' ),
                        'param_name' => 'link',
                        'value' => '#',
                    ),
                )
            ),
            array(
                'type' => 'textarea',
                'heading' => __( 'Footer text', 'genemy' ),
                'param_name' => 'footer_text',
                'description' => 'Optional',
                'value' => '',
            ), 
            genemy_vc_spacing_options_param('margin', 'left'),
            genemy_vc_spacing_options_param('margin', 'top'),
            genemy_vc_spacing_options_param('margin', 'right'),
            genemy_vc_spacing_options_param('margin', 'bottom'),  
        ) 
    );

    $args = apply_filters( 'genemy_vc_map_filter', $args, $args['base'] );
    if( $return ) {
        return genemy_vc_get_params_value($args);
    }else{
        vc_map( $args );
    }
}
class WPBakeryShortCode_Genemy_button_group extends WPBakeryShortCode {
}