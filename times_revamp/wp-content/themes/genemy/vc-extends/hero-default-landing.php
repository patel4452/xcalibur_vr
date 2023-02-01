<?php
/**
* The VC Functions
*/
add_action( 'vc_before_init', 'genemy_startup_landing_shortcode_vc' );
function genemy_startup_landing_shortcode_vc( $return = false ) {
    $lists_id_name_map = (function_exists('ES'))? ES()->lists_db->get_list_id_name_map(): '';
    $args = array(
        'icon' => 'genemy-hero-icon',
        'name' => __( 'Header - Startup landing', 'genemy' ),
        'base' => 'genemy_startup_landing',
        'class' => 'genemy-vc',
        'category' => __( 'Genemy', 'genemy' ),
        'description' => __( 'Display title, subtitle & subscription form ', 'genemy' ),
        'as_parent'  => array('only' => 'genemy_hero_text_block'),
        'content_element' => true,
        'show_settings_on_create' => false,
        'is_container' => true,
        'js_view' => 'VcColumnView',
        'params' => array(
            array(
                'type' => 'image_upload',
                'heading' => __( 'Background Image', 'pergo' ),
                'param_name' => 'bg',
                'description' => '',
                'value' => GENEMY_URI . '/images/hero-1.jpg' 
            ),
            array(
                'type' => 'dropdown',
                'heading' => __( 'Alignment', 'genemy' ),
                'param_name' => 'align',
                'std' => '',
                'value' => array(
                     'Default' => '',
                    'Center' => 'text-center' 
                ),
                'admin_label' => true 
            ),
            array(
                'type' => 'textfield',
                'heading' => __( 'Heading Title', 'genemy' ),
                'param_name' => 'title',
                'value' => 'Your website is ready for launch',
                'description' => __('Use {} for highlight text', 'genemy' ),
                'admin_label' => true 
            ),
            array(
                'type' => 'textarea',
                'heading' => __( 'Lead text', 'genemy' ),
                'param_name' => 'lead_text',
                'description' => '',
                'value' => 'Donec vel sapien augue integer urna vel turpis cursus porta, mauris sed augue luctus dolor luctus velna auctor congue tempus undo magna integer',
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
                'heading' => esc_attr__( 'Display lists', 'genemy' ),
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
                    esc_attr__('Initial', 'perch') => '0',
                    esc_attr__('Single column', 'genemy') => '1',
                    esc_attr__('2 column', 'genemy') => '2',
                    esc_attr__('3 column', 'genemy') => '3',
                    esc_attr__('4 column', 'genemy') => '4',
                    esc_attr__('6 column', 'genemy') => '6',
                ),  
                'admin_label' => true,
                'dependency' => array( 'element' => 'show_list', 'value' => '1', ),  
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
                        'title' => 'for more details',
                        'link_title' => 'See FAQ',
                        'link_url' => '#',
                        'link_before' => '*'
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
if(class_exists('WPBakeryShortCodesContainer')){    
    class WPBakeryShortCode_Genemy_startup_landing extends WPBakeryShortCodesContainer {
    }
}