<?php
/**
* The VC Functions
*/
add_action( 'vc_before_init', 'genemy_hero_slide_shortcode_vc' );
function genemy_hero_slide_shortcode_vc( $return = false ) {
    $args = array(
        'icon' => 'genemy-icon',
        'name' => __( 'Hero Slide item', 'genemy' ),
        'base' => 'genemy_hero_slide',
        'class' => 'genemy-vc',
        'as_child'  => array('only' => 'genemy_hero_business_multipurpose'),
        'category' => __( 'Genemy', 'genemy' ),
        'description' => __( 'Display title, description & button with background image', 'genemy' ),
        'params' => array(
            array(
                'type' => 'image_upload',
                'heading' => __( 'Background Image', 'genemy' ),
                'param_name' => 'image',
                'description' => '',
                'value' => GENEMY_URI . '/images/slider/slide_1.jpg' 
            ),
            array(
                'type' => 'textfield',
                'heading' => __( 'Sub-Title', 'genemy' ),
                'param_name' => 'subtitle',
                'value' => 'We\'re award-winning digital',
                'admin_label' => true 
            ),
            array(
                'type' => 'textfield',
                'heading' => __( 'Title', 'genemy' ),
                'param_name' => 'title',
                'description' => '',
                'value' => 'Creative Agency',
                'admin_label' => true 
            ),
            // params group
            array(
                'type' => 'textarea',
                'heading' => __( 'Lead text', 'genemy' ),
                'param_name' => 'lead_text',
                'description' => '',
                'value' => 'We\'re a creative team with full of ideas',
                'admin_label' => true 
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
class WPBakeryShortCode_Genemy_hero_slide extends WPBakeryShortCode {
}