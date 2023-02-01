<?php
/**
* The VC Functions
*/
add_action( 'vc_before_init', 'genemy_text_box_shortcode_vc' );
function genemy_text_box_shortcode_vc( $return = false ) {
    $args = array(
        'icon' => 'genemy-icon',
        'name' => __( 'Text box', 'genemy' ),
        'base' => 'genemy_text_box',
        'class' => 'genemy-vc',
        'description' => __( 'Display Digit, title & description', 'genemy' ),
        'category' => __( 'Genemy', 'genemy' ),
        'params' => array(  
            array(
                'type' => 'textfield',
                'heading' => __( 'Digit', 'genemy' ),
                'param_name' => 'digit',
                'value' => '01.',
                'admin_label' => true 
            ),          
            array(
                'type' => 'textfield',
                'heading' => __( 'Title', 'genemy' ),
                'param_name' => 'title',
                'value' => 'Client Interaction',
                'description' =>  __( 'Use {} to highlight title', 'genemy' ),
                'admin_label' => true 
            ),
            array(
                'type' => 'textarea',
                'heading' => __( 'Sub-Title', 'genemy' ),
                'param_name' => 'subtitle',
                'value' => 'Augue iaculis in purus tempor undo congue magna egestas magna ipsum vitae purus and cubilia in primis augue ',
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
class WPBakeryShortCode_Genemy_text_box extends WPBakeryShortCode {
}