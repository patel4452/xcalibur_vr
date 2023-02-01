<?php
/**
* The VC Functions
*/
add_action( 'vc_before_init', 'genemy_counter_up_shortcode_vc' );
function genemy_counter_up_shortcode_vc( $return = false ) {
    $args = array(
        'icon' => 'genemy-icon',
        'name' => __( 'Counter up', 'genemy' ),
        'base' => 'genemy_counter_up',
        'class' => 'genemy-vc',
        'category' => __( 'Genemy', 'genemy' ),
        'description' => __( 'Display number, title & subtitle ', 'genemy' ),
        'params' => array(
            array(
                'type' => 'textfield',
                'heading' => __( 'Count prefix', 'genemy' ),
                'param_name' => 'prefix',
                'value' => '3,' ,
                'admin_label' => true,
                'edit_field_class' => 'vc_col-sm-4', 
            ),
            array(
                'type' => 'textfield',
                'heading' => __( 'Count', 'genemy' ),
                'param_name' => 'count',
                'description' => 'Number only',
                'value' => '154' ,
                'edit_field_class' => 'vc_col-sm-8',
                'admin_label' => true 
            ), 
            array(
                'type' => 'textfield',
                'heading' => __( 'Title', 'genemy' ),
                'param_name' => 'title',
                'description' => '',
                'value' => 'Happy Clients',
                'admin_label' => true 
            ),
            array(
                'type' => 'textfield',
                'heading' => __( 'Sub-Title', 'genemy' ),
                'param_name' => 'subtitle',
                'description' => '',
                'value' => '',
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
class WPBakeryShortCode_Genemy_counter_up extends WPBakeryShortCode {
}