<?php
/**
* The VC Functions
*/
add_action( 'vc_before_init', 'genemy_hero_business_agency_shortcode_vc' );
function genemy_hero_business_agency_shortcode_vc( $return = false ) {

    $args = array(
        'icon' => 'genemy-icon',
        'name' => __( 'Header - Business Agency', 'genemy' ),
        'base' => 'genemy_hero_business_agency',
        'class' => 'genemy-vc',
        'category' => __( 'Genemy', 'genemy' ),
        'description' => __( 'Display image, title, description & counter ', 'genemy' ),
        'params' => array(             
            array(
                'type' => 'image_upload',
                'heading' => __( 'Image', 'genemy' ),
                'param_name' => 'image',
                'description' => '',
                'value' => GENEMY_URI . '/images/hero-12-img.png',                 
            ),
            array(
                'type' => 'checkbox',
                'heading' => __( 'enable video popup?', 'genemy' ),
                'param_name' => 'video_popup',
                'description' => __( 'Checked to video popup link on image', 'genemy' ),
                'value' => array( __( 'Yes', 'genemy' ) => 'yes' ),
                'std' => 'yes',
                'admin_label' => true,                          
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
            array(
                'type' => 'textfield',
                'heading' => __( 'Sub Title', 'genemy' ),
                'param_name' => 'subtitle',
                'value' => 'Welcome to Genemy',
                'admin_label' => true,                 
            ),
            array(
                'type' => 'textfield',
                'heading' => __( 'Heading Title', 'genemy' ),
                'param_name' => 'title',
                'value' => 'We bring the best things for you',
                'admin_label' => true,                 
            ),
            array(
                'type' => 'textarea',
                'heading' => __( 'Lead text', 'genemy' ),
                'param_name' => 'lead_text',
                'description' => '',
                'value' => 'An magnis nulla dolor sapien augue erat iaculis pretium purus tempor magna ipsum vitae purus primis ipsum and congue magna odio augue ligula rutrum nullam',
                'admin_label' => true,                
            ),           
             array(
                'type' => 'param_group',
                'save_always' => true,
                'heading' => __( 'Buttons', 'genemy' ),
                'param_name' => 'params',
                'value' => urlencode( json_encode( array(
                    array(
                         'button_text' => 'How It Works',
                        'button_size' => 'btn-md',
                        'button_style' => '',
                    ),
                ) ) ),
                'params' => genemy_button_groups_param()
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
class WPBakeryShortCode_genemy_hero_business_agency extends WPBakeryShortCode {
}