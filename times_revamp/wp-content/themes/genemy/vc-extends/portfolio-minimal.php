<?php
/**
* The VC Functions
*/
add_action( 'vc_before_init', 'genemy_hero_portfolio_minimal_shortcode_vc' );
function genemy_hero_portfolio_minimal_shortcode_vc( $return = false ) {
    $args = array(
        'icon' => 'genemy-hero-icon',
        'name' => __( 'Header - Portfolio Minimal', 'genemy' ),
        'base' => 'genemy_hero_portfolio_minimal',
        'class' => 'genemy-vc',
        'category' => __( 'Genemy', 'genemy' ),
        'description' => __( 'Display title & subtitle', 'genemy' ),
        'params' => array(
            array(
                'type' => 'textfield',
                'value' => '',
                'heading' => 'Section name',
                'param_name' => 'name',
                'admin_label' => true 
            ),
             array(
                'type' => 'textfield',
                'value' => 'Hi, I\'m {Matthew Peterson} - Creative Doer based in New York City',
                'heading' => 'Title',
                'param_name' => 'title',
                'description' =>  __( 'Use {} to highlight title', 'genemy' ),
                'admin_label' => true 
            ),
            array(
                'type' => 'textarea',
                'value' => '',
                'heading' => 'Subtitle',
                'param_name' => 'subtitle',
                'admin_label' => true 
            ),
            array(
                'type' => 'dropdown',
                'heading' => __( 'Align', 'genemy' ),
                'param_name' => 'align',
                'std' => 'left',
                'value' => array(
                    'Left' => 'left',
                    'Center' => 'center',
                ),
                'group' => __( 'Design option', 'genemy' ),
            ),
            array(
                'type' => 'dropdown',
                'heading' => __( 'Section name color', 'genemy' ),
                'param_name' => 'name_color',
                'value' => genemy_vc_color_options(true),
                'group' => __( 'Design option', 'genemy' ),
                'std' => 'rose',
                'description' => __( 'Only worked for Subtitle', 'genemy' ),                 
            ),
            array(
                'type' => 'dropdown',
                'heading' => __( 'Heading tag', 'genemy' ),
                'param_name' => 'tag',
                'group' => __( 'Design option', 'genemy' ),
                'std' => 'h3:h3-xl',
                'value' => array(
                    'H2' => 'h2:h2-xl',
                    'H3' => 'h3:h3-xl',
                    'H4' => 'h4:h4-sm',
                    'H5' => 'h4:h5-sm',
                ),
            ),
            array(
                'type' => 'checkbox',
                'heading' => __( 'Enable highlight text options?', 'genemy' ),
                'param_name' => 'underline',
                'description' => __( 'Checked to select custom underline color', 'genemy' ),
                'value' => array( __( 'Yes', 'genemy' ) => 'yes' ),  
                'std' => 'yes',                 
                'admin_label' => true,
                'group' => __( 'Design option', 'genemy' ),  
            ), 
            array(
                'type' => 'dropdown',
                'heading' => __( 'Underline for highlight text', 'genemy' ),
                'param_name' => 'underline_color',
                'value' => genemy_vc_underline_color_options(),
                'std' => 'underline',
                'group' => __( 'Design option', 'genemy' ),
                'dependency' => array(
                     'element' => 'underline',
                    'value' => 'yes' 
                ), 
            ), 
            array(
                'type' => 'dropdown',
                'heading' => __( 'Highlight text color', 'genemy' ),
                'param_name' => 'highlight_text_color',
                'value' => genemy_vc_color_options(true),
                'group' => __( 'Design option', 'genemy' ),
                'std' => '',
                'description' => __( 'Only worked for highlighted text', 'genemy' ),
                'dependency' => array(
                     'element' => 'underline',
                    'value' => 'yes' 
                ),  
            ),
            array(
                'type' => 'dropdown',
                'heading' => __( 'Subtitle text color', 'genemy' ),
                'param_name' => 'subtitle_text_color',
                'value' => genemy_vc_color_options(true),
                'group' => __( 'Design option', 'genemy' ),
                'description' => __( 'Only worked for Subtitle', 'genemy' ),                 
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
class WPBakeryShortCode_Genemy_hero_portfolio_minimal extends WPBakeryShortCode {
}