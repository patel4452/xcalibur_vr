<?php
/**
* The VC Functions
*/
add_action( 'vc_before_init', 'genemy_call_to_action_shortcode_vc' );
function genemy_call_to_action_shortcode_vc( $return = false ) {
    $args = array(
        'icon' => 'genemy-icon',
        'name' => __( 'Call to action', 'genemy' ),
        'base' => 'genemy_call_to_action',
        'class' => 'genemy-vc',
        'category' => __( 'Genemy', 'genemy' ),
        'description' => __( 'Display title, description & button', 'genemy' ),
        'params' => array(
            array(
                'type' => 'dropdown',
                'heading' => __( 'Style', 'genemy' ),
                'param_name' => 'style',
                'value' => array(
                    '2 column' => 'style1',
                    'Single column + center align' => 'style2',
                ),
                'std' => 'style1',
                'admin_label' => true 
            ),
            array(
                'type' => 'textfield',
                'heading' => __( 'Title', 'genemy' ),
                'param_name' => 'title',
                'value' => 'Need {something specific?} Let\'s discuss your next project',
                'admin_label' => true 
            ),
            array(
                'type' => 'textarea',
                'heading' => __( 'Lead text', 'genemy' ),
                'param_name' => 'lead_text',
                'description' => '',
                'value' => 'Egestas magna egestas magna ipsum vitae purus ipsum primis in cubilia laoreet augue luctus magna aenean primis in augue laoreet',
            ),
            array(
                'type' => 'textfield',
                'heading' => __( 'Sub Title', 'genemy' ),
                'param_name' => 'subtitle',
                'value' => 'Call us : +12 9 8765 4321',                
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
                         'button_text' => 'Let\'s Started',
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
                'type' => 'textfield',
                'heading' => __( 'Bootom text', 'genemy' ),
                'param_name' => 'bottom_text',
                'value' => '* Requires iOS 7.0 or higher',
                'dependency' => array(
                    'element' => 'style',
                    'value' => 'style2'
                )
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
class WPBakeryShortCode_Genemy_call_to_action extends WPBakeryShortCode {
}