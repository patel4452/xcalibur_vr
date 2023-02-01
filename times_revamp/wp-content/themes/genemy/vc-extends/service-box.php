<?php
/**
* The VC Functions
*/
add_action( 'vc_before_init', 'genemy_service_box_shortcode_vc' );
function genemy_service_box_shortcode_vc(  $return = false ) {
    $args = array(
        'icon' => 'genemy-icon',
        'name' => __( 'Service box', 'genemy' ),
        'base' => 'genemy_service_box',
        'class' => 'genemy-vc',
        'category' => __( 'Genemy', 'genemy' ),
        'description' => __( 'Display icon, title & subtitle', 'genemy' ),
        'params' => array(            
            genemy_vc_icon_set( 'tonicons', 'icon', 'ti-Line-Cog' ),            
            array(
                'type' => 'checkbox',
                'heading' => __( 'Add transparent text?', 'genemy' ),
                'param_name' => 'tra_text_display',
                'description' => __( 'Checked to select custom icon color', 'genemy' ),
                'value' => array( __( 'Yes', 'genemy' ) => 'yes' ),      
            ),
            array(
                'type' => 'textfield',
                'value' => '01',
                'heading' => 'Transparent text',
                'param_name' => 'tra_digit',
                'description' => __( 'Optional. e.g: 01.', 'genemy' ),
                'dependency' => array(
                     'element' => 'tra_text_display',
                    'value' => 'yes' 
                ), 
            ),
            array(
                'type' => 'textfield',
                'value' => 'Web Development',
                'heading' => 'Title',
                'param_name' => 'title',
                'description' =>  __( 'Use {} to highlight title', 'genemy' ),
                'edit_field_class' => 'vc_col-sm-8',
                'admin_label' => true 
            ),
            array(
                'type' => 'checkbox',
                'heading' => __( 'Add link on title?', 'pergo' ),
                'param_name' => 'title_link',
                'value' => array( __( 'Yes', 'pergo' ) => 'yes' ),
                'std' => '',
                'edit_field_class' => 'vc_col-sm-4'                   
            ),
            array(
                'type' => 'vc_link',
                'heading' => __( 'Create a link for title', 'pergo' ),
                'param_name' => 'title_url',
                'std' => '',
                'dependency' => array( 'element' => 'title_link', 'value' => 'yes' )
            ),
            array(
                'type' => 'textarea',
                'value' => 'Maecenas laoreet augue egestas laoreet augue egestas, congue gestas volutpat posuere cubilia congue ipsum mauris lectus laoreet gestas neque volutpat and gestas posuere congue ipsum',
                'heading' => 'Subtitle',
                'param_name' => 'subtitle',
                'admin_label' => true 
            ),
            array(
                'type' => 'checkbox',
                'heading' => __( 'Add button?', 'genemy' ),
                'param_name' => 'add_button',
                'value' => array( __( 'Checked to enable', 'genemy' ) => 'yes' ),
                'std' => '',   
                'admin_label' => true                  
            ),
            array(
                'type' => 'vc_link',
                'heading' => __( 'Create a link for title', 'pergo' ),
                'param_name' => 'btn_url',
                'value' => 'title:Learn more|url:#',
                'dependency' => array( 'element' => 'add_button', 'value' => 'yes' ),
                'edit_field_class' => 'vc_col-sm-8'
            ),
            array(
                'type' => 'dropdown',
                'heading' => __( 'Button style', 'genemy' ),
                'param_name' => 'button_style',
                'std' => '',
                'value' => genemy_vc_btn_style(),
                'dependency' => array( 'element' => 'add_button', 'value' => 'yes' ), 
                'edit_field_class' => 'vc_col-sm-4',
                
            ),
            array(
                'type' => 'dropdown',
                'heading' => __( 'Align', 'genemy' ),
                'param_name' => 'align',
                'value' => array(
                    'Default' => 'default-align',
                    'Center' => 'text-center',
                ),
                'group' => __( 'Design option', 'genemy' ),
            ),
            array(
                'type' => 'checkbox',
                'heading' => __( 'Round border?', 'genemy' ),
                'param_name' => 'border',
                'description' => __( 'Checked to get rounded border in service box', 'genemy' ),
                'value' => array( __( 'Yes', 'genemy' ) => 'yes' ),
                'group' => __( 'Design option', 'genemy' ),      
            ),
            array(
                'type' => 'checkbox',
                'heading' => __( 'Custom icon color?', 'genemy' ),
                'param_name' => 'custom_color',
                'description' => __( 'Checked to select custom icon color', 'genemy' ),
                'value' => array( __( 'Yes', 'genemy' ) => 'yes' ),  
                'std' => 'yes', 
                'group' => __( 'Design option', 'genemy' ),  
            ),
            array(
                'type' => 'dropdown',
                'heading' => __( 'Icon color', 'genemy' ),
                'param_name' => 'icon_color',
                'value' => genemy_vc_color_options(true),
                'std' => 'grey',
                'admin_label' => true,
                'group' => __( 'Design option', 'genemy' ),
                'dependency' => array(
                     'element' => 'custom_color',
                    'value' => 'yes' 
                ), 
            ),
            array(
                'type' => 'dropdown',
                'heading' => __( 'Title size', 'genemy' ),
                'param_name' => 'heading_class',
                'std' => 'h5-xs',
                'value' => array(
                    'Default' => 'h5-xs',
                    'Large' => 'h5-xl',
                ),
                'group' => __( 'Design option', 'genemy' ),
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
                'std' => 'grey',
                'description' => __( 'Only worked for Subtitle', 'genemy' ),                 
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
class WPBakeryShortCode_Genemy_service_box extends WPBakeryShortCode {
}