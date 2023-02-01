<?php
/**

* The VC Functions

*/
add_action( 'vc_before_init', 'genemy_hero_slide2_shortcode_vc' );
function genemy_hero_slide2_shortcode_vc( $return = false ) {
    $args = array(
        'icon' => 'genemy-icon',
        'name' => __( 'Hero slide item (Depreciated)', 'genemy' ),
        'base' => 'genemy_hero_slide2',
        'as_child'  => array('only' => 'genemy_hero_business_multipurpose'),
        'class' => 'genemy-vc',
        'category' => __( 'Genemy', 'genemy' ),        
        'params' => array(  
            array(
                'type' => 'dropdown',
                'heading' => __( 'Align', 'genemy' ),
                'param_name' => 'align',
                'std' => 'center',
                'save_always' => true,
                'value' => array(
                    'Left' => 'left',
                    'Center' => 'center',
                    'Right' => 'right',
                ),
                'admin_label' => true,
            ), 
            array(
                'type' => 'dropdown',
                'heading' => __( 'Column', 'genemy' ),
                'param_name' => 'column',
                'std' => 'full',
                'value' => array(
                    'Full width column' => 'full',
                    'Half + Half column' => 'half',
                ),
                'save_always' => true,
                'dependency' => array(
                     'element' => 'align',
                    'value' => 'left' 
                ),
            ), 
            array(
                'type' => 'image_upload',
                'heading' => __( 'Background Image', 'genemy' ),
                'param_name' => 'bg',
                'description' => '',
                'value' => GENEMY_URI . '/images/slider/slide_3.jpg' 
            ),    	 
        	array(
                'type' => 'textfield',
                'value' => 'We\'re award-winning digital',
                'heading' => 'Section name',
                'param_name' => 'name',
                'description' =>  __( 'Leave blank to avoid this field', 'genemy' ),
                'admin_label' => true 
            ),
             array(
                'type' => 'textfield',
                'value' => 'Cr{e}ative Agency',
                'heading' => 'Title',
                'param_name' => 'title',
                'description' =>  __( 'Use {} to highlight text. Example: Welcome to {Genemy}', 'genemy' ),
                'admin_label' => true 
            ),
            array(
                'type' => 'textarea',
                'value' => 'Donec vel sapien augue integer urna vel turpis cursus porta, mauris sed augue luctus magna dolor luctus neque primis libero tempor purus pretium',
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
                'type' => 'textarea',
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
                'admin_label' => true,
            ),
            genemy_vc_content_list_group(),
            array(
                'type' => 'checkbox',
                'heading' => __( 'Enable button?', 'genemy' ),
                'param_name' => 'enable_button',
                'description' => __( 'Checked to enable button', 'genemy' ),
                'value' => array( __( 'Yes', 'genemy' ) => 'yes' ),
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
                'heading' => __( 'Right side content type', 'genemy' ),
                'param_name' => 'right_content_type',
                'std' => 'none',
                'value' => array(
                    'None' => 'none',
                    'Image' => 'image',
                    'Contact form' => 'form',
                    'Shortcode' => 'shortcode',
                ),
                'description' => __( 'Please make sure Column is not "Full width column".', 'genemy' ),
                'admin_label' => true,
                'group' => __( 'Right-side option', 'genemy' ), 
            ), 
            array(
                'type' => 'textfield',
                'heading' => __( 'Form Title', 'genemy' ),
                'param_name' => 'form_title',
                'value' => 'Get Started',
                'admin_label' => true,
                'group' => __( 'Right-side option', 'genemy' ), 
                'dependency' => array(
                     'element' => 'right_content_type',
                    'value' => 'form' 
                ), 
            ),
            array(
                'type' => 'textarea',
                'heading' => __( 'Form description', 'genemy' ),
                'param_name' => 'form_desc',
                'value' => 'Please fill all fields so we can get some info about you. We will never send you spam',
                'group' => __( 'Right-side option', 'genemy' ), 
                'admin_label' => true,
                'dependency' => array(
                     'element' => 'right_content_type',
                    'value' => 'form' 
                ), 
            ),
            array(
                'type' => 'dropdown',
                'heading' => __( 'Select contact form', 'genemy' ),
                'param_name' => 'form_id',
                'value' => genemy_contact_form_options(),
                'save_always' => true,
                'description' => __( 'Choose previously created contact form from the drop down list','genemy' ),
                'group' => __( 'Right-side option', 'genemy' ),
                'dependency' => array(
                     'element' => 'right_content_type',
                    'value' => 'form' 
                ),
            ),
            array(
                'type' => 'dropdown',
                'heading' => __( 'Select form background color', 'genemy' ),
                'param_name' => 'form_bg',
                'value' => genemy_vc_background_options(),
                'std' => 'bg-white',
                'group' => __( 'Right-side option', 'genemy' ),
                'dependency' => array(
                     'element' => 'right_content_type',
                    'value' => 'form' 
                ),
            ),
            array(
                'type' => 'image_upload',
                'heading' => __( 'Image', 'genemy' ),
                'param_name' => 'image',
                'value' => GENEMY_URI. '/images/image-12.png',
                'group' => __( 'Right-side option', 'genemy' ), 
                'dependency' => array(
                     'element' => 'right_content_type',
                    'value' => 'image' 
                ),
            ),
            array(
                'type' => 'checkbox',
                'heading' => __( 'enable video popup?', 'genemy' ),
                'param_name' => 'video_popup',
                'description' => __( 'Checked to video popup link on image', 'genemy' ),
                'value' => array( __( 'Yes', 'genemy' ) => 'yes' ),
                'admin_label' => true,  
                'group' => __( 'Right-side option', 'genemy' ), 
                'dependency' => array(
                     'element' => 'right_content_type',
                    'value' => 'image' 
                ),                 
            ),
            array(
                'type' => 'textfield',
                'heading' => __( 'Youtube url', 'genemy' ),
                'param_name' => 'url',
                'group' => __( 'Right-side option', 'genemy' ), 
                'value' => 'https://www.youtube.com/embed/SZEflIVnhH8',
                'dependency' => array(
                     'element' => 'video_popup',
                    'value' => 'yes' 
                )  
            ), 
            array(
                'type' => 'dropdown',
                'heading' => __( 'Video icon color', 'genemy' ),
                'param_name' => 'icon_class',               
                'value' => genemy_vc_global_color_options(),
                'std' => 'rose',
                'description' => '',
                'group' => __( 'Right-side option', 'genemy' ), 
                'dependency' => array(
                    'element' => 'video_popup',
                    'value' => 'yes',
                ), 
            ),
            array(
                'type' => 'textfield',
                'heading' => __( 'Shortcode', 'genemy' ),
                'param_name' => 'shortcode',
                'group' => __( 'Right-side option', 'genemy' ), 
                'value' => '',
                'dependency' => array(
                     'element' => 'right_content_type',
                    'value' => 'shortcode' 
                ),
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
                'std' => 'h2:h2-normal',
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
            vc_map_add_css_animation(), 
            genemy_vc_animation_duration(),  
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
class WPBakeryShortCode_Genemy_hero_slide2 extends WPBakeryShortCode {
}