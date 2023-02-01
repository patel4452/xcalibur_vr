<?php
/**

* The VC Functions

*/
add_action( 'vc_before_init', 'genemy_contact_info_shortcode_vc' );
function genemy_contact_info_shortcode_vc( $return = false ) {
    $args = array(
        'icon' => 'genemy-icon',
        'name' => __( 'Contact info', 'genemy' ),
        'base' => 'genemy_contact_info',
        'class' => 'genemy-vc',
        'category' => __( 'Genemy', 'genemy' ),
        'description' => __( 'Display title & contact info.', 'genemy' ),
        'params' => array(
             array(
                'type' => 'textfield',
                'value' => 'Our Location',
                'heading' => 'Title',
                'param_name' => 'title',
                'admin_label' => true 
            ),
            array(
                'type' => 'textarea',
                'value' => '121 King Street, Melbourne,Victoria 3000 Australia',
                'heading' => 'Subtitle',
                'param_name' => 'subtitle',
                'admin_label' => true 
            ),
            vc_map_add_css_animation(), 
            genemy_vc_animation_duration(), 
        ) 
    );

   $args = apply_filters( 'genemy_vc_map_filter', $args, $args['base'] );
    if( $return ) {
        return genemy_vc_get_params_value($args);
    }else{
        vc_map( $args );
    }
}
class WPBakeryShortCode_Genemy_contact_info extends WPBakeryShortCode {
}