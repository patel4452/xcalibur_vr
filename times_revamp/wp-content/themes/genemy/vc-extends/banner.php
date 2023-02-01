<?php
/**

* The VC Functions

*/
add_action( 'vc_before_init', 'genemy_banner_shortcode_vc' );
function genemy_banner_shortcode_vc( $return = false ) {
    $args = array(
        'icon' => 'genemy-icon',
        'name' => __( 'Banner', 'genemy' ),
        'base' => 'genemy_banner',
        'class' => 'genemy-vc',
        'category' => __( 'Genemy', 'genemy' ),
        'description' =>  __( 'Display title & subtitle', 'genemy' ),
        'params' => array( 
            array(
                'type' => 'dropdown',
                'heading' => __( 'Align', 'genemy' ),
                'param_name' => 'align',
                'std' => 'left',
                'value' => array(
                    'Left' => 'left',
                    'Center' => 'center',
                ),
            ),           
            array(
                'type' => 'textfield',
                'value' => 'We plan your projects',
                'heading' => 'Section name',
                'param_name' => 'name',
                'admin_label' => true 
            ),
             array(
                'type' => 'textfield',
                'value' => 'High {Converting} Landing Page',
                'heading' => 'Title',
                'param_name' => 'title',
                'description' =>  __( 'Use {} to highlight title', 'genemy' ),
                'admin_label' => true 
            ),
            array(
                'type' => 'textarea',
                'value' => 'Semper lacus cursus porta, feugiat primis ultrice ligula risus auctor rhoncus purus ipsum primis in cubilia augue vitae laoreet augue laoreet an augue egestas. Augue iaculis purus tempor undo congue magna egestas magna ipsum vitae purus cubilia ipsum primis in augue luctus undo blandit gestas neque magna integer dolor vitae',
                'heading' => 'Subtitle',
                'param_name' => 'subtitle',
                'admin_label' => true 
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
class WPBakeryShortCode_Genemy_banner extends WPBakeryShortCode {
}