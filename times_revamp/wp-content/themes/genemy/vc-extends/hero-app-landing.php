<?php
/**
* The VC Functions
*/
add_action( 'vc_before_init', 'genemy_hero_app_landing_shortcode_vc' );
function genemy_hero_app_landing_shortcode_vc( $return = false ) {
    $args =  array(
        'icon' => 'genemy-hero-icon',
        'name' => __( 'Header - App landing', 'genemy' ),
        'base' => 'genemy_hero_app_landing',
        'class' => 'genemy-vc',
        'category' => __( 'Genemy', 'genemy' ),
        'description' => __( 'Display title, subtitle, button & image', 'genemy' ),
        'params' => array(
        	array(
                'type' => 'image_upload',
                'heading' => __( 'Image', 'genemy' ),
                'param_name' => 'image',
                'description' => '',
                'value' => GENEMY_URI . '/images/hero-14-img.png' 
            ),
            array(
                'type' => 'textfield',
                'heading' => __( 'Heading Title', 'genemy' ),
                'param_name' => 'title',
                'value' => 'Capture and share your best memories',
                'description' => __('Use {} for highlight text', 'genemy' ),
                'admin_label' => true 
            ),
            array(
                'type' => 'textarea',
                'heading' => __( 'Lead text', 'genemy' ),
                'param_name' => 'lead_text',
                'description' => '',
                'value' => 'Donec vel sapien augue integer urna vel turpis cursus porta, mauris sed augue luctus magna luctus',
                'admin_label' => true 
            ),
            array(
                'type' => 'checkbox',
                'heading' => __( 'enable video popup?', 'genemy' ),
                'param_name' => 'video_popup',
                'description' => __( 'Checked to video popup link on image', 'genemy' ),
                'value' => array( __( 'Yes', 'genemy' ) => 'yes' ),
                'admin_label' => true,
                'std' => 'yes'         
            ),
            array(
                'type' => 'textfield',
                'heading' => __( 'Video link Title', 'genemy' ),
                'param_name' => 'video_title',
                'value' => 'Watch Our Video {duration: 2:40 min}',
                'description' => __('Use {} for highlight text', 'genemy' ),
                'dependency' => array(
                    'element' => 'video_popup',
                    'value' => 'yes' 
                ) ,              
            ),
            array(
                'type' => 'textfield',
                'heading' => __( 'Youtube url', 'genemy' ),
                'param_name' => 'video_link',
                'value' => 'https://www.youtube.com/embed/SZEflIVnhH8',
                'dependency' => array(
                    'element' => 'video_popup',
                    'value' => 'yes' 
                ) ,
            ),   
        ) 
    );

    $args = apply_filters( 'genemy_vc_map_filter', $args, $args['base'] );
    $args = apply_filters( 'genemy_vc_responsive_options', $args, $args['base'] );
    
    if( $return ) {
        return genemy_vc_get_params_value($args);
    }else{
        vc_map( $args );
    }
}
class WPBakeryShortCode_Genemy_hero_app_landing extends WPBakeryShortCode {
}