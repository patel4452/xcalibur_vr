<?php
/**
* The VC Functions
*/
add_action( 'vc_before_init', 'genemy_hero_app_showcase_shortcode_vc' );
function genemy_hero_app_showcase_shortcode_vc( $return = false ) {
    $args = array(
        'icon' => 'genemy-hero-icon',
        'name' => __( 'Header - App Showcase', 'genemy' ),
        'base' => 'genemy_hero_app_showcase',
        'class' => 'genemy-vc',
        'category' => __( 'Genemy', 'genemy' ),
        'description' => __( 'Display title, subtitle, button & image', 'genemy' ),
        'params' => array(
        	array(
                'type' => 'image_upload',
                'heading' => __( 'Image', 'genemy' ),
                'param_name' => 'image',
                'description' => '',
                'value' => GENEMY_URI . '/images/hero-8-img.png' 
            ),
            array(
                'type' => 'textfield',
                'heading' => __( 'Name', 'genemy' ),
                'param_name' => 'section_name',
                'value' => 'Geremy Mobile App',
                'description' => __('Use {} for highlight text', 'genemy' ),
                'admin_label' => true 
            ),
            array(
                'type' => 'textfield',
                'heading' => __( 'Heading Title', 'genemy' ),
                'param_name' => 'title',
                'value' => '#Plan_your day_easily',
                'description' => __('Use {} for highlight text', 'genemy' ),
                'admin_label' => true 
            ),
            array(
                'type' => 'textarea',
                'heading' => __( 'Lead text', 'genemy' ),
                'param_name' => 'lead_text',
                'description' => '',
                'value' => 'Egestas magna egestas magna ipsum vitae purus ipsum primis in congue laoreet augue luctus magna',
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
                        'image' => GENEMY_URI. '/images/appstore.png',
                        'title' => 'Download on the app store',
                        'link' => '#'
                    ),
                    array(
                        'image' => GENEMY_URI. '/images/googleplay.png',
                        'title' => 'Get it on Google play',
                        'link' => '#'
                    ),
                ) ) ),
                'params' => array(
                	array(
		                'type' => 'textfield',
		                'heading' => __( 'Icon Title', 'genemy' ),
		                'param_name' => 'title',
		                'value' => 'Get it on Amazon',
		                'admin_label' => true 
		            ),
                	array(
		                'type' => 'image_upload',
		                'heading' => __( 'Icon Image', 'genemy' ),
		                'param_name' => 'image',
		                'description' => '',
		                'value' => GENEMY_URI . '/images/amazon.png',
		            ),
		            array(
		                'type' => 'textfield',
		                'heading' => __( 'Icon link', 'genemy' ),
		                'param_name' => 'link',
		                'value' => '#',
		            ),
                )
            ),
            array(
                'type' => 'textfield',
                'heading' => __( 'Icons requirements', 'genemy' ),
                'param_name' => 'require',
                'value' => '* Requires iOS 7.0 or higher',
                'admin_label' => true 
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
class WPBakeryShortCode_Genemy_hero_app_showcase extends WPBakeryShortCode {
}