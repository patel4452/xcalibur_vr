<?php
/**
* The VC Functions
*/
add_action( 'vc_before_init', 'genemy_google_map_shortcode_vc' );
function genemy_google_map_shortcode_vc( $return = false ) {
    $args = array(
        'icon' => 'genemy-icon',
        'name' => __( 'Google Map', 'genemy' ),
        'base' => 'genemy_google_map',
        'class' => 'genemy-vc',
        'category' => __( 'Genemy', 'genemy' ),
        'description' => __( 'Display map.', 'genemy' ),
        'params' => array(
            array(
                'type' => 'textfield',
                'heading' => __( 'Map title', 'genemy' ),
                'param_name' => 'title',
                'value' => '121 King Street, Melbourne, Victoria 3000 Australia',
                'admin_label' => true 
            ),            
            array(
                'type' => 'textfield',
                'heading' => __( 'Latitude', 'genemy' ),
                'param_name' => 'latitude',
                'value' => '-37.817214',
                'description' => __( 'Number only', 'genemy' ),
                'admin_label' => true 
            ),
            array(
                'type' => 'textfield',
                'heading' => __( 'Longitude', 'genemy' ),
                'param_name' => 'longitude',
                'value' => '144.955925',
                'description' => __( 'Number only', 'genemy' ),
                'admin_label' => true 
            ),
            array(
                'type' => 'textfield',
                'heading' => __( 'Zoom', 'genemy' ),
                'param_name' => 'zoom',
                'value' => '17',
                'description' => __( 'Number only', 'genemy' ),
                'admin_label' => true 
            ),
            array(
                'type' => 'image_upload',
                'heading' => __( 'Marker Icon', 'genemy' ),
                'param_name' => 'image',
                'description' => '',
                'value' => GENEMY_URI . '/images/place-marker.png' 
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
class WPBakeryShortCode_Genemy_google_map extends WPBakeryShortCode {
}