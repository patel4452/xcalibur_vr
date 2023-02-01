<?php
/**
* The VC Functions
*/
add_action( 'vc_before_init', 'genemy_about_us_shortcode_vc' );
function genemy_about_us_shortcode_vc( $return = false ) {
    $args = array(
        'icon' => 'genemy-icon',
        'name' => __( 'About us', 'genemy' ),
        'base' => 'genemy_about_us',
        'class' => 'genemy-vc',
        'category' => __( 'Genemy', 'genemy' ),
        'description' => __( 'Display image, title, description & counter ', 'genemy' ),
        'params' => array(
            array(
                'type' => 'checkbox',
                'heading' => __( 'Image in right position?', 'genemy' ),
                'param_name' => 'position',
                'description' => __( 'Default image in left', 'genemy' ),
                'value' => array( __( 'Yes', 'genemy' ) => 'yes' ),
                'group' => __( 'Image options', 'genemy' ),                 
            ),
            array(
                'type' => 'image_upload',
                'heading' => __( 'Image', 'genemy' ),
                'param_name' => 'image',
                'description' => '',
                'value' => GENEMY_URI . '/images/image-01.png',
                'group' => __( 'Image options', 'genemy' ), 
            ),
            array(
                'type' => 'checkbox',
                'heading' => __( 'enable video popup?', 'genemy' ),
                'param_name' => 'video_popup',
                'description' => __( 'Checked to video popup link on image', 'genemy' ),
                'value' => array( __( 'Yes', 'genemy' ) => 'yes' ),
                'admin_label' => true,  
                'group' => __( 'Image options', 'genemy' ),            
            ),
            array(
                'type' => 'textfield',
                'heading' => __( 'Youtube url', 'genemy' ),
                'param_name' => 'url',
                'value' => 'https://www.youtube.com/embed/SZEflIVnhH8',
                'dependency' => array(
                    'element' => 'video_popup',
                    'value' => 'yes' 
                ) ,
                'group' => __( 'Image options', 'genemy' ), 
            ), 
            array(
                'type' => 'textfield',
                'heading' => __( 'Sub Title', 'genemy' ),
                'param_name' => 'subtitle',
                'value' => 'Welcome to Genemy',
                'admin_label' => true,
                'group' => __( 'Content', 'genemy' ), 
            ),
            array(
                'type' => 'textfield',
                'heading' => __( 'Heading Title', 'genemy' ),
                'param_name' => 'title',
                'value' => 'We bring the best things for you',
                'admin_label' => true,
                'group' => __( 'Content', 'genemy' ), 
            ),
            array(
                'type' => 'textarea',
                'heading' => __( 'Lead text', 'genemy' ),
                'param_name' => 'lead_text',
                'description' => '',
                'value' => 'An magnis nulla dolor sapien augue erat iaculis pretium purus tempor magna ipsum vitae purus primis ipsum and congue magna odio augue ligula rutrum nullam',
                'admin_label' => true,
                'group' => __( 'Content', 'genemy' ), 
            ),
            array(
                'type' => 'textfield',
                'heading' => __( 'Title #2', 'genemy' ),
                'param_name' => 'title2',
                'value' => '',
                'description' => 'optional',
                'admin_label' => true,
                'group' => __( 'Content', 'genemy' ), 
            ),            
            genemy_vc_strategy_list_group(),
            array(
                'type' => 'checkbox',
                'heading' => __( 'Enable content group as list', 'genemy' ),
                'param_name' => 'list_display',
                'description' => __( 'Checked to display animated list', 'genemy' ),
                'value' => array( __( 'Yes', 'genemy' ) => 'yes' ),
                'std' => 'yes',
                'admin_label' => true,    
                'group' => __( 'Content', 'genemy' ),         
            ),
            array(
                'type' => 'dropdown',
                'heading' => __( 'Display', 'genemy' ),
                'param_name' => 'display',
                'value' => genemy_vc_element_display_option(),
                'std' => 'video',
                'admin_label' => true,
                'group' => __( 'Content bottom', 'genemy' ), 
            ),
            array(
                'type' => 'textfield',
                'heading' => __( 'Tech Title', 'genemy' ),
                'param_name' => 'tech_title',
                'value' => 'Technologies we use:',
                'admin_label' => true,
                'dependency' => array(
                    'element' => 'display',
                    'value' => 'techs'
                ) , 
                'group' => __( 'Content bottom', 'genemy' ),               
            ),
            array(
                'type' => 'dropdown',
                'param_name' => 'style',
                'value' => genemy_vc_color_options(true),
                'std' => 'rose',
                'heading' => __( 'Counter color', 'genemy' ),
                'dependency' => array(
                    'element' => 'display',
                    'value' => 'counter'
                ) , 
                'group' => __( 'Content bottom', 'genemy' ),                
            ),
            array(
                'type' => 'textfield',
                'heading' => __( 'Video link Title', 'genemy' ),
                'param_name' => 'video_link_title',
                'value' => 'Watch Our Video {duration: 2:40 min}',
                'dependency' => array(
                    'element' => 'display',
                    'value' => 'video'
                ) , 
                'group' => __( 'Content bottom', 'genemy' ),               
            ),
            array(
                'type' => 'textfield',
                'heading' => __( 'Video link', 'genemy' ),
                'param_name' => 'video_link',
                'value' => 'https://www.youtube.com/embed/SZEflIVnhH8',
                'admin_label' => true,
                'dependency' => array(
                    'element' => 'display',
                    'value' => 'video'
                ) , 
                'group' => __( 'Content bottom', 'genemy' ),               
            ),
            // params group
            genemy_vc_techs_group(),
            genemy_vc_counter_group(),            
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
class WPBakeryShortCode_Genemy_about_us extends WPBakeryShortCode {
}