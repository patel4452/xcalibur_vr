<?php
/**
* The VC Functions
*/
add_action( 'vc_before_init', 'genemy_single_team_shortcode_vc' );
function genemy_single_team_shortcode_vc( $return = false ) {
    $args = array(
         'icon' => 'genemy-icon',
        'name' => __( 'Team', 'genemy' ),
        'base' => 'genemy_single_team',
        'class' => 'genemy-vc',
        'category' => __( 'Genemy', 'genemy' ),
        'description' => __( 'Display image, title & description', 'genemy' ),
        'params' => array(    
            array(
                'type' => 'dropdown',
                'heading' => __( 'Style', 'genemy' ),
                'param_name' => 'style',
                'std' => 'team-1',
                'value' => array(
                    'Team style 1' => 'team-1',
                    'Team style 2' => 'team-2',
                    'Team style 3' => 'team-3',
                ),
                'admin_label' => true,
            ),        
            array(
                'type' => 'image_upload',
                'heading' => __( 'Image', 'genemy' ),
                'param_name' => 'image',                
                'value' => GENEMY_URI . '/images/team-5.jpg' 
            ),
            array(
                 'type' => 'textfield',
                'heading' => __( 'Name', 'genemy' ),
                'param_name' => 'title',
                'value' => 'Jonathan Barnes',
                'admin_label' => true 
            ),
            array(
                 'type' => 'textfield',
                'heading' => __( 'Link', 'genemy' ),
                'param_name' => 'link',
                'value' => '', 
                'description' => __( 'Leave blank to avoid link', 'genemy' ),
            ),
            array(
                 'type' => 'textfield',
                'heading' => __( 'Designation', 'genemy' ),
                'param_name' => 'subtitle',
                'value' => 'CEO, Founder',
                'admin_label' => true 
            ), 
            array(
                 'type' => 'textarea',
                'heading' => __( 'Description', 'genemy' ),
                'param_name' => 'content',
                'description' => '',
                'value' => '',
                'dependency' => array(
                    'element' => 'style',
                    'value' => array('team-2', 'team-3') 
                ), 
            ),   
            vc_map_add_css_animation(), 
            genemy_vc_animation_duration(),             
            array(
                'type' => 'dropdown',
                'heading' => __( 'Align', 'genemy' ),
                'param_name' => 'align',
                'std' => 'left',
                'value' => array(
                    'Left' => 'left',
                    'Center' => 'center',
                    'Right' => 'right',
                ),
                'admin_label' => true,
                'group' => __( 'Design option', 'genemy' ),
            ),
            array(
                'type' => 'dropdown',
                'heading' => __( 'Heading tag', 'genemy' ),
                'param_name' => 'tag',
                'std' => 'h5:h5-sm',
                'value' => genemy_vc_heading_size_options(),
                'group' => __( 'Design option', 'genemy' ),
            ), 
            array(
                 'type' => 'dropdown',
                'heading' => __( 'Title text color', 'genemy' ),
                'param_name' => 'title_text_color',
                'value' => genemy_vc_color_options(true),
                'std' => 'default',
                'group' => __( 'Design option', 'genemy' ),
                'description' => __( 'Only worked for Subtitle', 'genemy' ),                 
            ),
            array(
                 'type' => 'dropdown',
                'heading' => __( 'Subtitle text color', 'genemy' ),
                'param_name' => 'subtitle_text_color',
                'value' => genemy_vc_color_options(true),
                'std' => 'grey',
                'group' => __( 'Design option', 'genemy' ),
                'description' => __( 'Only worked for Subtitle', 'genemy' ),                 
            ),
            array(
                 'type' => 'dropdown',
                'heading' => __( 'Content text color', 'genemy' ),
                'param_name' => 'content_text_color',
                'value' => genemy_vc_color_options(true),
                'std' => 'grey',
                'group' => __( 'Design option', 'genemy' ),
                'description' => __( 'Only worked for content', 'genemy' ),                 
            ),
            array(
                 'type' => 'dropdown',
                'heading' => __( 'Content text size', 'genemy' ),
                'param_name' => 'content_text_size',
                'value' => genemy_vc_text_size_options(),
                'std' => 'p-sm',
                'description' => __( 'Only worked for {highlighted text}', 'genemy' ),
                'group' => __( 'Design option', 'genemy' )                
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
class WPBakeryShortCode_Genemy_single_team extends WPBakeryShortCode {
}