<?php
/**

* The VC Functions

*/
add_action( 'vc_before_init', 'genemy_copyright_bar_shortcode_vc' );
function genemy_copyright_bar_shortcode_vc( $return = false ) {
    $args = array(
        'icon' => 'genemy-icon',
        'name' => __( 'Copyright bar', 'genemy' ),
        'base' => 'genemy_copyright_bar',
        'class' => 'genemy-vc',
        'category' => __( 'Genemy', 'genemy' ),
        'description' =>  __( 'Generally used this element on landing page', 'genemy' ),
        'params' => array(                    
            array(
                'type' => 'textfield',
                'value' => '&copy; 2018 {Genemy}. All Rights Reserved',
                'heading' => 'Copyright text',
                'param_name' => 'title',
                'admin_label' => true 
            ),
             array(
                'type' => 'dropdown',
                'heading' => __( 'Select nav menu', 'genemy' ),
                'param_name' => 'nav_menu',
                'description' => __( 'You can create menu Appearance > Menu', 'genemy' ),
                'value' => array_flip( array_merge( array('' => 'None'), genemy_get_terms( 'nav_menu', 'slug' )) ),
                'std' => '', 
                'admin_label' => true
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
class WPBakeryShortCode_Genemy_copyright_bar extends WPBakeryShortCode {
}