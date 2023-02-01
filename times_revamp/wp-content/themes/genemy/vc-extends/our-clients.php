<?php
/**
* The VC Functions
*/
add_action( 'vc_before_init', 'genemy_our_clients_shortcode_vc' );
function genemy_our_clients_shortcode_vc( $return = false ) {
    $args = array(
        'icon' => 'genemy-icon',
        'name' => __( 'Our clients', 'genemy' ),
        'base' => 'genemy_our_clients',
        'class' => 'genemy-vc',
        'category' => __( 'Genemy', 'genemy' ),
        'description' => __( 'Display clients images', 'genemy' ),
        'params' => array(
            array(            
                'type' => 'el_id',
                'heading' => __( 'Elements ID', 'genemy' ),
                'param_name' => 'el_id',
                'std' => 'brands-2',
                'description' => sprintf( __( 'Enter section ID (Note: make sure it is unique and valid according to <a href="%s" target="_blank">w3c specification</a>).', 'genemy' ), 'http://www.w3schools.com/tags/att_global_id.asp' ),
                 'weight' => 123
            ), 
            array(
                'type' => 'dropdown',
                'heading' => __( 'Display title', 'genemy' ),
                'param_name' => 'style',
                'std' => 'style1',
                'value' => array(
                    'No' => 'style1',
                    'Yes' => 'style2',
                ),
                'admin_label' => true 
            ),
            array(
                'type' => 'textfield',
                'heading' => __( 'Title', 'genemy' ),
                'param_name' => 'title',
                'value' => 'We partner with companies of all sizes, all around the world',   
                'dependency' => array(
                    'element' => 'style',
                    'value' => 'style2'
                )            
            ),
            // params group
            array(
                'type' => 'param_group',
                'save_always' => true,
                'heading' => __( 'Brands', 'genemy' ),
                'param_name' => 'params',
                'value' => urlencode( json_encode( array(
                    array(
                        'title' => 'Brand image',
                        'url' => '',
                        'image' => GENEMY_URI. '/images/brand-1.png',
                    ),
                    array(
                        'title' => 'Brand image',
                        'url' => '',
                        'image' => GENEMY_URI. '/images/brand-2.png',
                    ),
                    array(
                        'title' => 'Brand image',
                        'url' => '',
                        'image' => GENEMY_URI. '/images/brand-3.png',
                    ),
                    array(
                        'title' => 'Brand image',
                        'url' => '',
                        'image' => GENEMY_URI. '/images/brand-4.png',
                    ),
                    array(
                        'title' => 'Brand image',
                        'image' => GENEMY_URI. '/images/brand-5.png',
                    ),
                    array(
                        'title' => 'Brand image',
                        'url' => '',
                        'image' => GENEMY_URI. '/images/brand-6.png',
                    ),
                ) ) ),
                'params' => array(
                    array(
                        'type' => 'textfield',
                        'heading' => __( 'Brand name', 'genemy' ),
                        'param_name' => 'title',
                        'description' => '',
                        'value' => 'Brand name',
                        'admin_label' => true 
                    ),
                    array(
                        'type' => 'image_upload',
                        'heading' => __( 'Brand Image', 'genemy' ),
                        'param_name' => 'image',
                        'description' => '', 
                    ),
                    array(
                        'type' => 'textfield',
                        'heading' => __( 'Brand url', 'genemy' ),
                        'param_name' => 'url',
                        'description' => __( 'Optional', 'genemy' ),
                        'value' => '',
                    ),
                ) 
            ),            
            array(
                'type' => 'textfield',
                'heading' => __( 'Extra class name', 'genemy' ),
                'param_name' => 'el_class',
                'value' => '',
                'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'genemy' ),
            ),  
        ) 
    );

    $args = apply_filters( 'genemy_vc_map_filter', $args, $args['base'] );
    $args = apply_filters( 'genemy_vc_map_carousel_settings', $args, $args['base'] );
    if( $return ) {
        return genemy_vc_get_params_value($args);
    }else{
        vc_map( $args );
    }
}
class WPBakeryShortCode_Genemy_our_clients extends WPBakeryShortCode {
}