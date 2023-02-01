<?php
/**
* The VC Functions
*/
add_action( 'vc_before_init', 'genemy_hero_design_studio_shortcode_vc' );
function genemy_hero_design_studio_shortcode_vc( $return = false ) {
    $args = array(
        'icon' => 'genemy-hero-icon',
        'name' => __( 'Header - Design Studio', 'genemy' ),
        'base' => 'genemy_hero_design_studio',
        'class' => 'genemy-vc',
        'category' => __( 'Genemy', 'genemy' ),
        'description' => __( 'Display title, subtitle & button', 'genemy' ),
        'params' => array(
            array(
                'type' => 'textfield',
                'heading' => __( 'Name', 'genemy' ),
                'param_name' => 'section_name',
                'value' => 'Design and Development',
                'description' => __('Use {} for highlight text', 'genemy' ),
                'admin_label' => true 
            ),
            array(
                'type' => 'textfield',
                'heading' => __( 'Heading Title', 'genemy' ),
                'param_name' => 'title',
                'value' => 'We use our experience & innovations',
                'description' => __('Use {} for highlight text', 'genemy' ),
                'admin_label' => true 
            ),
            array(
                'type' => 'textarea',
                'heading' => __( 'Lead text', 'genemy' ),
                'param_name' => 'lead_text',                
                'value' => 'Donec vel sapien augue integer urna vel turpis cursus porta, mauris sed augue luctus GeneGenemy - Creative Multi Concept Landing Pages Pack magna at risus',
                'admin_label' => true 
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
                'params' => genemy_button_groups_param()
            ),
             array(
                'type' => 'param_group',
                'save_always' => true,
                'heading' => __( 'Images', 'genemy' ),
                'param_name' => 'params2',
                'description' => __('Display images in 2 column', 'genemy'),
                'value' => urlencode( json_encode( array(
                    array(
                        'title' => 'Image 1',
                        'image' => GENEMY_URI . '/images/portfolio/img-6.jpg',
                    ),
                    array(
                        'title' => 'Image 2',
                        'image' => GENEMY_URI . '/images/portfolio/img-13.jpg',
                    ),
                    array(
                        'title' => 'Image 3',
                        'image' => GENEMY_URI . '/images/portfolio/img-12.jpg',
                    ),
                    array(
                        'title' => 'Image 4',
                        'image' => GENEMY_URI . '/images/portfolio/img-4.jpg',
                    ),
                ) ) ),
                'params' => array(
                    array(
                        'type' => 'textfield',
                        'heading' => __( 'Title', 'genemy' ),
                        'param_name' => 'title',
                        'admin_label' => true 
                    ),
                    array(
                        'type' => 'image_upload',
                        'heading' => __( 'Image', 'genemy' ),
                        'param_name' => 'image',
                        'description' => '',
                    ),
                )
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
class WPBakeryShortCode_Genemy_hero_design_studio extends WPBakeryShortCode {
}