<?php
/**
* The VC Functions
*/
add_action( 'vc_before_init', 'genemy_hero_digital_agency_shortcode_vc' );
function genemy_hero_digital_agency_shortcode_vc( $return = false ) {
    $args = array(
        'icon' => 'genemy-hero-icon',
        'name' => __( 'Header - Digital Agency', 'genemy' ),
        'base' => 'genemy_hero_digital_agency',
        'class' => 'genemy-vc',
        'category' => __( 'Genemy', 'genemy' ),
        'description' => __( 'Display title, subtitle, button & bottom image', 'genemy' ),
        'params' => array(
            array(
                'type' => 'image_upload',
                'heading' => __( 'Background Image', 'pergo' ),
                'param_name' => 'bg',
                'description' => '',
                'value' => GENEMY_URI . '/images/hero-5.jpg' 
            ),
            array(
                'type' => 'textfield',
                'heading' => __( 'Heading Title', 'genemy' ),
                'param_name' => 'title',
                'value' => 'We have everything to make your business a success',
                'description' => __('Use {} for highlight text', 'genemy' ),
                'admin_label' => true 
            ),
            array(
                'type' => 'textarea',
                'heading' => __( 'Lead text', 'genemy' ),
                'param_name' => 'lead_text',
                'description' => '',
                'value' => 'Feugiat primis ligula risus auctor laoreet augue egestas mauris viverra tortor in iaculis suscipit begestas magna, mauris rhoncus ipsum placerat',
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
                         'button_text' => 'Discover Our Services',
                        'button_size' => 'btn-md',
                        'button_style' => 'btn-tra-white'
                    ),
                ) ) ),
                'params' => genemy_button_groups_param()
            ),
            array(
                'type' => 'image_upload',
                'heading' => __( 'Image', 'genemy' ),
                'param_name' => 'image',
                'description' => '',
                'value' => GENEMY_URI . '/images/hero-5-img.png' 
            ),
           
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
class WPBakeryShortCode_Genemy_hero_digital_agency extends WPBakeryShortCode {
}