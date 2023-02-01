<?php
/**
* The VC Functions
*/
add_action( 'vc_before_init', 'genemy_hero_marketing_agency_shortcode_vc' );
function genemy_hero_marketing_agency_shortcode_vc( $return = false ) {
    $args = array(
        'icon' => 'genemy-hero-icon',
        'name' => __( 'Header - Marketing Agency', 'genemy' ),
        'base' => 'genemy_hero_marketing_agency',
        'class' => 'genemy-vc',
        'category' => __( 'Genemy', 'genemy' ),
        'description' => __( 'Display title, subtitle & button', 'genemy' ),
        'params' => array(
            array(
                'type' => 'textfield',
                'heading' => __( 'Heading Title', 'genemy' ),
                'param_name' => 'title',
                'value' => 'We craft marketing & digital products {that grow business}',
                'description' => __('Use {} for highlight text', 'genemy' ),
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
                        'button_text' => 'Find Out More',
                        'button_size' => 'btn-md',
                    ),
                ) ) ),
                'params' => genemy_button_groups_param()
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
    if( $return ) {
        return genemy_vc_get_params_value($args);
    }else{
        vc_map( $args );
    }
}
class WPBakeryShortCode_Genemy_hero_marketing_agency extends WPBakeryShortCode {
}