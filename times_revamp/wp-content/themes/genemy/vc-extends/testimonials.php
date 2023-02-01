<?php
/**
* The VC Functions
*/
add_action( 'vc_before_init', 'genemy_testimonials_shortcode_vc' );
function genemy_testimonials_shortcode_vc( $return = false ) {
    $args = array(
        'icon' => 'genemy-icon',
        'name' => __( 'Testimonials', 'genemy' ),
        'base' => 'genemy_testimonials',
        'class' => 'genemy-vc',
        'category' => __( 'Genemy', 'genemy' ),
        'description' => __( 'Display clients testimonials', 'genemy' ),
        'params' => array(
            array(
                'type' => 'dropdown',
                'heading' => __( 'Display style', 'genemy' ),
                'param_name' => 'style',
                'value' => array(
                     'Single column' => '1column', 
                     'Three column' => '3column', 
                ),
                'std' => '1column',
                'admin_label' => true 
            ), 
            // params group
            array(
                'type' => 'param_group',
                'save_always' => true,
                'heading' => __( 'Testimonials', 'genemy' ),
                'param_name' => 'params',
                'value' => urlencode( json_encode( array(
                    array(
                        'name' => 'pebz13',
                        'title' => 'Programmer',
                        'image' => GENEMY_URI. '/images/review-author-1.jpg',
                        'desc' => '" Etiam sapien sem at sagittis congue augue massa varius sodales sapien undo tempus dolor        egestas magna suscipit magna tempus aliquet porta sodales augue suscipit luctus neque "'
                    ),
                    array(
                        'name' => 'Evelyn Martinez',
                        'title' => 'Housewife',
                        'image' => GENEMY_URI. '/images/review-author-2.jpg',
                        'desc' => '" Etiam sapien sem at sagittis congue augue massa varius sodales sapien undo tempus dolor        egestas magna suscipit magna tempus aliquet porta sodales augue suscipit luctus neque "'
                    ),
                    array(
                        'name' => 'Robert Peterson',
                        'title' => 'SEO Manager',
                        'image' => GENEMY_URI. '/images/review-author-3.jpg',
                        'desc' => '" Etiam sapien sem at sagittis congue augue massa varius sodales sapien undo tempus dolor        egestas magna suscipit magna tempus aliquet porta sodales augue suscipit luctus neque "'
                    ),
                ) ) ),
                'params' => array(
                    array(
                        'type' => 'textfield',
                        'heading' => __( 'Name', 'genemy' ),
                        'param_name' => 'name',
                        'admin_label' => true 
                    ),
                    array(
                        'type' => 'textfield',
                        'heading' => __( 'Title', 'genemy' ),
                        'param_name' => 'title',
                        'admin_label' => true 
                    ),
                    array(
                        'type' => 'image_upload',
                        'heading' => __( 'Client Image', 'genemy' ),
                        'param_name' => 'image',
                        'description' => '', 
                    ),
                    array(
                        'type' => 'textarea',
                        'heading' => __( 'Description', 'genemy' ),
                        'param_name' => 'desc',
                    ),
                ) 
            )  
        ) 
    );

    $args = apply_filters( 'genemy_vc_map_filter', $args, $args['base'] );
    $args = apply_filters( 'genemy_vc_map_carousel_settings', $args, $args['base'] );
    if( $return ) {
        return genemy_vc_get_params_value($args);
    }else{
        vc_map( $args );
    }
}
class WPBakeryShortCode_Genemy_testimonials extends WPBakeryShortCode {
}