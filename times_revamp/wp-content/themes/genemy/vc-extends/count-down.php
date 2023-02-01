<?php
/**
* The VC Functions
*/
add_action( 'vc_before_init', 'genemy_count_down_shortcode_vc' );
function genemy_count_down_shortcode_vc( $return = false ) {
    $args = array(
        'icon' => 'genemy-icon',
        'name' => __( 'Countdown', 'genemy' ),
        'base' => 'genemy_count_down',
        'class' => 'genemy-vc',
        'category' => __( 'Genemy', 'genemy' ),
        'description' => __( 'Display countdown by date-time', 'genemy' ),
        'params' => array(            
            array(
                'type' => 'textfield',
                'heading' => __( 'Date & time', 'genemy' ),
                'param_name' => 'date',
                'description' => 'Format: Year/Month/Date Hours:Minutes:Second e.g: 2019/11/23 09:00:00',
                'value' => '2019/11/23 09:00:00' ,
                'admin_label' => true 
            ),
            array(
                'type' => 'textfield',
                'heading' => __( 'Countdown text', 'genemy' ),
                'param_name' => 'datetxt',
                'description' => 'Format: Days:HRS:MIN:SEC',
                'value' => 'Days:HRS:MIN:SEC' ,
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
class WPBakeryShortCode_Genemy_count_down extends WPBakeryShortCode {
}