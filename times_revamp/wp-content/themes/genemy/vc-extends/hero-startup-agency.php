<?php
/**
* The VC Functions
*/
add_action( 'vc_before_init', 'genemy_startup_agency_shortcode_vc' );
function genemy_startup_agency_shortcode_vc( $return = false  ) {
    $args = array(
        'icon' => 'genemy-hero-icon',
        'name' => __( 'Header - Startup agency', 'genemy' ),
        'base' => 'genemy_startup_agency',
        'class' => 'genemy-vc',
        'category' => __( 'Genemy', 'genemy' ),
        'description' => __( 'Display title, subtitle, video & form', 'genemy' ),
        'params' => array(
            array(
                'type' => 'textfield',
                'heading' => __( 'Heading Title', 'genemy' ),
                'param_name' => 'title',
                'value' => 'We provide the solutions to grow your business',
                'description' => __('Use {} for highlight text', 'genemy' ),
                'admin_label' => true 
            ),
            array(
                'type' => 'textarea',
                'heading' => __( 'Lead text', 'genemy' ),
                'param_name' => 'lead_text',
                'description' => '',
                'value' => 'Maecenas laoreet augue egestas suscipit ut egestas congue and gestas cubilia congue ipsum mauris',
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
            
            array(
                'type' => 'textfield',
                'heading' => __( 'Form Title', 'genemy' ),
                'param_name' => 'form_title',
                'value' => 'Get Started',
                'admin_label' => true,
                'group' =>   __( 'Form settings', 'genemy' ),
            ),
            array(
                'type' => 'textarea',
                'heading' => __( 'Form description', 'genemy' ),
                'param_name' => 'form_desc',
                'value' => 'Fill all fields so we can get some info about you. We\'ll never send you spam',
                'group' =>   __( 'Form settings', 'genemy' ),
                'admin_label' => true 
            ),
            array(
                'type' => 'dropdown',
                'heading' => __( 'Select contact form', 'genemy' ),
                'param_name' => 'id',
                'value' => genemy_contact_form_options(),
                'save_always' => true,
                'description' => __( 'Choose previously created contact form from the drop down list.', 'genemy' ),
                'group' =>   __( 'Form settings', 'genemy' ),
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
class WPBakeryShortCode_Genemy_startup_agency extends WPBakeryShortCode {
}