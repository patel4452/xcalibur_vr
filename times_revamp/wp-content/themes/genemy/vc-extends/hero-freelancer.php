<?php
/**
* The VC Functions
*/
add_action( 'vc_before_init', 'genemy_hero_freelancer_shortcode_vc' );
function genemy_hero_freelancer_shortcode_vc( $return = false ) {
    $args = array(
        'icon' => 'genemy-hero-icon',
        'name' => __( 'Header - Freelancer', 'genemy' ),
        'base' => 'genemy_hero_freelancer',
        'class' => 'genemy-vc',
        'category' => __( 'Genemy', 'genemy' ),
        'description' => __( 'Display title & subtitle', 'genemy' ),
        'params' => array(  
            array(
                'type' => 'image_upload',
                'heading' => __( 'Image', 'genemy' ),
                'param_name' => 'image',
                'description' => '',
                'value' => GENEMY_URI . '/images/hero-13-img.png' 
            ),      	
            array(
                'type' => 'textfield',
                'heading' => __( 'Heading Title', 'genemy' ),
                'param_name' => 'title',
                'value' => 'Jonathan {Barnes}',
                'description' => __('Use {} for highlight text', 'genemy' ),
                'admin_label' => true 
            ),
            array(
                'type' => 'textarea',
                'heading' => __( 'Lead text', 'genemy' ),
                'param_name' => 'lead_text',
                'description' => '',
                'value' => 'Egestas magna egestas magna ipsum vitae purus ipsum primis in cubilia laoreet augue luctus magna dolor luctus undo magna an dolor vitae',
                'admin_label' => true 
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
    $args = apply_filters( 'genemy_vc_responsive_options', $args, $args['base'] );
    
    if( $return ) {
        return genemy_vc_get_params_value($args);
    }else{
        vc_map( $args );
    }
}
class WPBakeryShortCode_Genemy_hero_freelancer extends WPBakeryShortCode {
}