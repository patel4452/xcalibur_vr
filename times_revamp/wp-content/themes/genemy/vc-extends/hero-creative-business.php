<?php
/**
* The VC Functions
*/
add_action( 'vc_before_init', 'genemy_creative_business_shortcode_vc' );
function genemy_creative_business_shortcode_vc( $return = false ) {
    $lists_id_name_map = (function_exists('ES'))? ES()->lists_db->get_list_id_name_map(): '';
    $args = array(
        'icon' => 'genemy-hero-icon',
        'name' => __( 'Header - Creative Business', 'genemy' ),
        'base' => 'genemy_creative_business',
        'class' => 'genemy-vc',
        'category' => __( 'Genemy', 'genemy' ),
        'description' => __( 'Display title, subtitle & subscription form ', 'genemy' ),
        'params' => array(
            array(
                'type' => 'checkbox',
                'heading' => __( 'enable Background Image?', 'genemy' ),
                'param_name' => 'bg_image',
                'description' => __( 'Checked to video popup link on image', 'genemy' ),
                'value' => array( __( 'Yes', 'genemy' ) => 'yes' ),
            ),
           array(
                'type' => 'image_upload',
                'heading' => __( 'Image', 'genemy' ),
                'param_name' => 'image',
                'description' => '',
                'value' => GENEMY_URI . '/images/hero-11-img.jpg',
                'dependency' => array(
                    'element' => 'bg_image',
                    'value' => 'yes' 
                ) ,
            ),
            array(
                'type' => 'textfield',
                'heading' => __( 'Heading Sub-Title', 'genemy' ),
                'param_name' => 'subtitle',
                'value' => 'Front-End Development',
                'description' => __('Use {} for highlight text', 'genemy' ),
                'admin_label' => true 
            ),
            array(
                'type' => 'textfield',
                'heading' => __( 'Heading Title', 'genemy' ),
                'param_name' => 'title',
                'value' => 'Design Better. {Uniquie. Faster.}',
                'description' => __('Use {} for highlight text', 'genemy' ),
                'admin_label' => true 
            ),
            array(
                'type' => 'textarea',
                'heading' => __( 'Lead text', 'genemy' ),
                'param_name' => 'lead_text',
                'description' => '',
                'value' => 'Semper lacus cursus porta, feugiat primis luctus ultrice tellus potenti neque dolor in magna suscipit begestas magna, mauris rhoncus ipsum placerat',
                'admin_label' => true 
            ),
            array(
                'type' => 'textfield',
                'heading' => __( 'Email placeholder', 'genemy' ),
                'param_name' => 'placeholder',
                'value' => 'Your email address',
                'admin_label' => true 
            ),
            array(
                'type' => 'perch_select',
                'multiple' => 'multiple',
                'heading' => esc_attr__( 'Selected lists', 'genemy' ),
                'param_name' => 'selected_lists',
                'value' => $lists_id_name_map,                   
            ),
            array(
                'type' => 'checkbox',
                'heading' => __( 'Display list in checkbox', 'genemy' ),
                'param_name' => 'show_list',
                'std' => '0',
                'value' => array( __( 'Checked to enable.', 'genemy' ) => '1' ),  
                'admin_label' => true,               
            ),
            array(
                'type' => 'perch_select',
                'multiple' => 'multiple',
                'heading' => esc_attr__( 'Display lists', 'perch' ),
                'param_name' => 'list_ids',
                'value' => $lists_id_name_map, 
                'dependency' => array( 'element' => 'show_list', 'value' => '1', ),
            ),
            array(
                'type' => 'dropdown',
                'heading' => __( 'List column', 'genemy' ),
                'param_name' => 'columns',
                'std' => '0',
                'value' => array(
                    esc_attr__('Initial', 'genemy') => '0',
                    esc_attr__('Single column', 'genemy') => '1',
                    esc_attr__('2 column', 'genemy') => '2',
                    esc_attr__('3 column', 'genemy') => '3',
                    esc_attr__('4 column', 'genemy') => '4',
                    esc_attr__('6 column', 'genemy') => '6',
                ),  
                'admin_label' => true,
                'dependency' => array( 'element' => 'show_list', 'value' => '1', ),  
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
                'param_name' => 'url',
                'value' => 'https://www.youtube.com/embed/SZEflIVnhH8',
                'dependency' => array(
                     'element' => 'video_popup',
                    'value' => 'yes' 
                ) ,                 
            ), 
            // params group
            array(
                'type' => 'param_group',
                'save_always' => true,
                'heading' => __( 'Form footer', 'genemy' ),
                'param_name' => 'params',
                'value' => urlencode( json_encode( array(
                    array(
                    	'add_link' => '',
                        'title' => 'No credit card required',
                        'link_title' => '',
                        'link_url' => '#',
                        'link_before' => ''
                    ),                    
                    array(
                    	'add_link' => 'yes',
                        'title' => '',
                        'link_title' => 'Privacy Policy',
                        'link_url' => '#',
                        'link_before' => ''
                    ),
                ) ) ),
                'params' => array(
                	array(
		                'type' => 'checkbox',
		                'heading' => __( 'Add link?', 'genemy' ),
		                'param_name' => 'add_link',
		                'value' => array( __( 'Yes', 'genemy' ) => 'yes' )  ,
		                'admin_label' => true                  
		            ),
                	array(
                        'type' => 'textfield',
                        'heading' => __( 'Link before', 'genemy' ),
                        'param_name' => 'link_before',
                        'description' => __( 'Leave blank to avoid link', 'genemy' ),
                        'value' => '*' ,
                        'dependency' => array(
                        	'element' => 'add_link',
                        	'value' => 'yes'
                        )
                    ),
                	array(
                        'type' => 'textfield',
                        'heading' => __( 'Link title', 'genemy' ),
                        'param_name' => 'link_title',
                        'description' => __( 'Leave blank to avoid link', 'genemy' ),
                        'value' => '' ,
                        'dependency' => array(
                        	'element' => 'add_link',
                        	'value' => 'yes'
                        )
                    ),
                    array(
                        'type' => 'textfield',
                        'heading' => __( 'Link url', 'genemy' ),
                        'param_name' => 'link_url',
                        'value' => '' ,
                        'dependency' => array(
                            'element' => 'add_link',
                            'value' => 'yes'
                        )
                    ),
                    array(
                        'type' => 'textfield',
                        'heading' => __( 'Title', 'genemy' ),
                        'param_name' => 'title',
                        'description' => __( 'Leave blank to avoid link', 'genemy' ),
                        'value' => '',
                        'admin_label' => true 
                    ),
                    
                ), 
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
// A must for container functionality, replace Wbc_Item with your base name from mapping for parent container
    
class WPBakeryShortCode_Genemy_creative_business extends WPBakeryShortCode {
}
