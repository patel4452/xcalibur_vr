<?php
/**
* The VC Functions
*/
add_action( 'vc_before_init', 'genemy_hero_creative_agency_shortcode_vc' );
function genemy_hero_creative_agency_shortcode_vc( $return = false ) {
    $args = array(
        'icon' => 'genemy-hero-icon',
        'name' => __( 'Header - Creative Agency', 'genemy' ),
        'base' => 'genemy_hero_creative_agency',
        'class' => 'genemy-vc',
        'category' => __( 'Genemy', 'genemy' ),
        'description' => __( 'Display slider', 'genemy' ),
        'as_parent'  => array('only' => 'genemy_slide_item'), 
        'content_element' => true,
        'show_settings_on_create' => false,
        'is_container' => true,
        'js_view' => 'VcColumnView',
        'params' => array()       
    );
    $args = apply_filters( 'genemy_vc_map_hero_slider_settings', $args, $args['base'] );
    $args = apply_filters( 'genemy_vc_map_filter', $args, $args['base'] );
    if( $return ) {
        return genemy_vc_get_params_value($args);
    }else{
        vc_map( $args );
    }
}
// A must for container functionality, replace Wbc_Item with your base name from mapping for parent container
if(class_exists('WPBakeryShortCodesContainer')){
    class WPBakeryShortCode_Genemy_hero_creative_agency extends WPBakeryShortCodesContainer {
    }
}

