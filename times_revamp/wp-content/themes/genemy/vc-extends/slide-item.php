<?php
/**
* The VC Functions
*/
add_action( 'vc_before_init', 'genemy_slide_item_shortcode_vc' );
function genemy_slide_item_shortcode_vc( $return = false ) {
    $args = array(
        'icon' => 'genemy-icon',
        'name' => __( 'Slide item', 'genemy' ),
        'base' => 'genemy_slide_item',
        'class' => 'genemy-vc',
        'as_child'        => array('only' => 'genemy_hero_creative_agency'),
        'category' => __( 'Genemy', 'genemy' ),
        'description' => __( 'Display title, description & button', 'genemy' ),
        'params' => array(
            array(
                'type' => 'textfield',
                'heading' => __( 'Sub Title', 'genemy' ),
                'param_name' => 'sub_title',
                'value' => 'We\'re award-winning digital',
                'admin_label' => true 
            ),
            array(
                'type' => 'textfield',
                'heading' => __( 'Title', 'genemy' ),
                'param_name' => 'title',
                'value' => 'Creative Agency',
                'admin_label' => true 
            ),
            array(
                'type' => 'textarea',
                'heading' => __( 'Lead text', 'genemy' ),
                'param_name' => 'lead_text',
                'description' => '',
                'value' => 'Donec vel sapien augue integer urna vel turpis cursus porta, mauris sed augue luctus magna dolor luctus neque primis libero tempor purus pretium',
                'admin_label' => true 
            ),
            array(
                'type' => 'perch_vc_typography',
                'param_name' => 'lead_text_font_container',
                'title' => __( 'Lead text typography settings', 'js_composer' ),
                'column' => 3,
                'std' => 'tag:p|font_size:lg',            
                'settings' => array(
                    'fields' => array(
                        'tag' => 'h2',  
                        'font_size',
                        'color',                       
                        'tag_description' => __( 'Select element tag.', 'appset' ),
                        'text_align_description' => __( 'Select text alignment.', 'appset' ),
                        'font_size_description' => __( 'Select font size.', 'appset' ),
                        'line_height_description' => __( 'Enter line height.', 'appset' ),
                        'color_description' => __( 'Select heading color.', 'appset' ),
                        'font_family_description' => __( 'Select heading font', 'appset' ),
                    ),
                ),
            ), 
            array(
                'type' => 'perch_vc_typography',
                'param_name' => 'highlighttext_font_container',
                'title' => __( 'Highlight text typography settings', 'js_composer' ),
                'column' => 2,
                'std' => 'color:preset-color|font_size:lg',            
                'settings' => array(
                    'fields' => array(                       
                        'font_size',
                        'color',                       
                        'tag_description' => __( 'Select element tag.', 'appset' ),
                        'text_align_description' => __( 'Select text alignment.', 'appset' ),
                        'font_size_description' => __( 'Select font size.', 'appset' ),
                        'line_height_description' => __( 'Enter line height.', 'appset' ),
                        'color_description' => __( 'Select highligh text color.', 'appset' ),
                        'font_family_description' => __( 'Select highligh text font', 'appset' ),
                    ),
                ),
            ),  
            // params group
            array(
                'type' => 'param_group',
                'save_always' => true,
                'heading' => __( 'Buttons', 'genemy' ),
                'param_name' => 'params',
                'value' => urlencode( json_encode( array(
                    array(
                         'button_text' => 'Find Out More',
                        'button_size' => 'btn-lg',
                        'button_style' => 'btn-yellow',
                    ),
                ) ) ),
                'params' => genemy_button_groups_param()
            )  
        ) 
    );

    $args = apply_filters( 'genemy_vc_map_filter', $args, $args['base'] );
    if( $return ) {
        return genemy_vc_get_params_value($args);
    }else{
        vc_map( $args );
    }
    
}
class WPBakeryShortCode_Genemy_slide_item extends WPBakeryShortCode {
}