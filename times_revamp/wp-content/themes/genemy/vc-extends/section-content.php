<?php
/**

* The VC Functions

*/
add_action( 'vc_before_init', 'genemy_section_content_shortcode_vc' );
function genemy_section_content_shortcode_vc( $return = false ) {
    $args = array(
        'icon' => 'genemy-icon',
        'name' => __( 'Section content', 'genemy' ),
        'base' => 'genemy_section_content',
        'class' => 'genemy-vc',
        'category' => __( 'Genemy', 'genemy' ),
        'description' =>  __( 'Display title & subtitle, button etc.', 'genemy' ),
        'params' => array(        	 
        	array(
                'type' => 'textfield',
                'value' => '',
                'heading' => 'Section name',
                'param_name' => 'name',
                'description' =>  __( 'Leave blank to avoid this field', 'genemy' ),
                'admin_label' => true 
            ),
             array(
                'type' => 'textfield',
                'value' => 'We\'re making {better design} for everyone',
                'heading' => 'Title',
                'param_name' => 'title',
                'description' =>  __( 'Use {} to highlight text. Example: Welcome to {Genemy}', 'genemy' ),
                'admin_label' => true 
            ),
            array(
                'type' => 'textarea',
                'value' => 'Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero tempus, tempor posuere ligula varius augue luctus donec sapien',
                'heading' => 'Subtitle',
                'param_name' => 'subtitle',
                'admin_label' => true 
            ), 
            array(
                'type' => 'checkbox',
                'heading' => __( 'Enable content?', 'genemy' ),
                'param_name' => 'enable_content',
                'description' => __( 'Checked to Content area', 'genemy' ),
                'value' => array( __( 'Yes', 'genemy' ) => 'yes' ),
                'admin_label' => true,
            ),
            array(
                'type' => 'textarea_html',
                'heading' => __( 'Description', 'genemy' ),
                'param_name' => 'content',
                'description' => '',
                'value' => '',
                'dependency' => array(
                    'element' => 'enable_content',
                    'value' => 'yes' 
                ),
            ),
            array(
                'type' => 'checkbox',
                'heading' => __( 'Enable animated content list?', 'genemy' ),
                'param_name' => 'enable_list',
                'description' => __( 'Checked to Content area', 'genemy' ),
                'value' => array( __( 'Yes', 'genemy' ) => 'yes' ),   
                'std' => 'yes',                
                'admin_label' => true,
            ),
            genemy_vc_content_list_group(),
            array(
                'type' => 'checkbox',
                'heading' => __( 'Enable button?', 'genemy' ),
                'param_name' => 'enable_button',
                'description' => __( 'Checked to enable button', 'genemy' ),
                'value' => array( __( 'Yes', 'genemy' ) => 'yes' ),
                'std' => 'yes',
                'admin_label' => true,
            ), 
            // params group
            array(
                'type' => 'param_group',
                'save_always' => true,
                'heading' => __( 'Buttons', 'genemy' ),
                'param_name' => 'params',
                'value' => urlencode( json_encode( array(
                    array(
                        'button_text' => 'Start Exploring',
                        'button_size' => 'btn-md',
                    ),
                ) ) ),
                'params' => genemy_button_groups_param(),
                'dependency' => array(
                    'element' => 'enable_button',
                    'value' => 'yes' 
                ),
            ), 
            array(
                'type' => 'textarea',
                'value' => '',
                'heading' => 'Footer text',
                'param_name' => 'footer_text',
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
                    'Right' => 'right',
                ),
                'admin_label' => true,
                'group' => __( 'Design option', 'genemy' ),
            ),
            array(
                'type' => 'checkbox',
                'heading' => __( 'Full width title area?', 'genemy' ),
                'param_name' => 'fullwidth',
                'description' => __( 'Default show compressed area section title', 'genemy' ),
                'value' => array( __( 'Yes', 'genemy' ) => 'yes' ),  
                'std' => 'yes',
                'admin_label' => true,
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
                'std' => 'h3:h3-sm',
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
                'type' => 'checkbox',
                'heading' => __( 'Enable highlight text options?', 'genemy' ),
                'param_name' => 'underline',
                'description' => __( 'Checked to select custom underline color, text color', 'genemy' ),
                'value' => array( __( 'Yes', 'genemy' ) => 'yes' ),  
                'std' => 'yes',                 
                'admin_label' => true,
                'group' => __( 'Design option', 'genemy' ),  
            ), 
            array(
                'type' => 'dropdown',
                'heading' => __( 'Underline color for highlight text for Title', 'genemy' ),
                'param_name' => 'underline_color',
                'value' => genemy_vc_underline_color_options(),
                'std' => 'underline-yellow',
                'description' => __( 'Only worked for {highlighted text}', 'genemy' ),
                'group' => __( 'Design option', 'genemy' ),
                'dependency' => array(
                    'element' => 'underline',
                    'value' => 'yes' 
                ), 
            ), 
            array(
                'type' => 'dropdown',
                'heading' => __( 'Highlight text color for Title', 'genemy' ),
                'param_name' => 'highlight_text_color',
                'value' => genemy_vc_color_options(true),
                'group' => __( 'Design option', 'genemy' ),
                'std' => 'rose',
                'description' => __( 'Only worked for {highlighted text}', 'genemy' ),
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
                'std' => 'grey',
                'group' => __( 'Design option', 'genemy' ),
                'description' => __( 'Only worked for Subtitle', 'genemy' ),                 
            ),
            array(
                'type' => 'dropdown',
                'heading' => __( 'Subtitle text size', 'genemy' ),
                'param_name' => 'subtitle_text_size',
                'value' => genemy_vc_text_size_options(),
                'std' => 'p-lg',
                'description' => __( 'Only worked for {highlighted text}', 'genemy' ),
                'group' => __( 'Design option', 'genemy' )                
            ),
            genemy_vc_spacing_options_param('margin', 'left'),
            genemy_vc_spacing_options_param('margin', 'top'),
            genemy_vc_spacing_options_param('margin', 'right'),
            genemy_vc_spacing_options_param('margin', 'bottom'),
            genemy_vc_spacing_options_param('padding', 'left'),
            genemy_vc_spacing_options_param('padding', 'top'),
            genemy_vc_spacing_options_param('padding', 'right'),
            genemy_vc_spacing_options_param('padding', 'bottom'),
            
        ) 
    );
     $args = apply_filters( 'genemy_vc_map_filter', $args, $args['base'] );
    if( $return ) {
        return genemy_vc_get_params_value($args);
    }else{
        vc_map( $args );
    }
}
class WPBakeryShortCode_Genemy_section_content extends WPBakeryShortCode {
}