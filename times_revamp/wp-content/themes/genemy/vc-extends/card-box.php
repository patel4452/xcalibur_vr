<?php
/**
* The VC Functions
*/
add_action( 'vc_before_init', 'genemy_card_box_shortcode_vc' );
function genemy_card_box_shortcode_vc( $return = false ) {
    $args = array(
        'icon' => 'genemy-icon',
        'name' => __( 'Card box', 'genemy' ),
        'base' => 'genemy_card_box',
        'class' => 'genemy-vc',
        'category' => __( 'Genemy', 'genemy' ),
        'description' => __( 'Display image, title & description', 'genemy' ),
        'params' => array(           
            array(
                'type' => 'image_upload',
                'heading' => __( 'Image', 'genemy' ),
                'param_name' => 'image',
                'description' => '',
                'value' => GENEMY_URI . '/images/image-05.jpg' 
            ),
            array(
                'type' => 'textfield',
                'heading' => __( 'Heading Title', 'genemy' ),
                'param_name' => 'title',
                'value' => 'Client Interaction',
                'description' =>  __( 'Use {} to highlight title', 'genemy' ),
                'admin_label' => true 
            ), 
            array(
                'type' => 'textarea_html',
                'heading' => __( 'Description', 'genemy' ),
                'param_name' => 'content',
                'description' => '',
                'value' => 'Augue iaculis purus tempor undo congue magna egestas magna ipsum vitae purus cubilia ipsum primis in augue luctus undo blandit suscipit lectus gestas neque',
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
class WPBakeryShortCode_Genemy_card_box extends WPBakeryShortCode {
}