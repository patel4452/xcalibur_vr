<?php
/**
* The VC Functions
*/
add_action( 'vc_before_init', 'genemy_counter_up_group_shortcode_vc' );
function genemy_counter_up_group_shortcode_vc( $return = false ) {
    $args = array(
        'icon' => 'genemy-icon',
        'name' => __( 'Counter up Group', 'genemy' ),
        'base' => 'genemy_counter_up_group',
        'class' => 'genemy-vc',
        'category' => __( 'Genemy', 'genemy' ),
        'description' => __( 'Display number, title & subtitle ', 'genemy' ),
        'params' => array(
            array(
                'type' => 'dropdown',
                'heading' => __( 'Column', 'genemy' ),
                'param_name' => 'column',
                'std' => 'col-sm-6 col-md-6',
                'value' => array(
                    '1/4 column' => 'col-sm-3 col-md-3',
                    '1/3 column' => 'col-sm-4 col-md-4',
                    '1/2 column' => 'col-sm-6 col-md-6',
                    'FUll width column' => 'col-md-12',                    
                ),
                'admin_label' => true,
            ), 
            array(
                'type' => 'dropdown',
                'heading' => __( 'Align', 'genemy' ),
                'param_name' => 'align',
                'std' => 'left',
                'value' => array(
                    'Left' => 'left',
                    'Center' => 'center',
                    'Right' => 'right',
                ),
                'admin_label' => true,
            ),  
            array(
                'type' => 'param_group',
                'save_always' => true,
                'heading' => __( 'Counter up', 'genemy' ),
                'param_name' => 'params',
                'value' => urlencode( json_encode( array(
                    array(
                        'count_prefix' => '',
                        'count_postfix' => '',
                        'count' => '1154',
                        'title' => 'Happy Clients', 
                        'subtitle' => '',
                    ),
                    array(
                        'count_prefix' => '',
                        'count_postfix' => '',
                        'title' => 'Tickets Closed',
                        'count' => '409',
                        'subtitle' => '',
                    ),
                ) ) ),
                'params' => array(
                     array(
                        'type' => 'textfield',
                        'heading' => __( 'Title', 'genemy' ),
                        'param_name' => 'title',
                        'description' => '',
                        'value' => '',
                        'admin_label' => true 
                    ),
                    array(
                        'type' => 'textfield',
                        'heading' => __( 'Count prefix', 'genemy' ),
                        'param_name' => 'count_prefix',
                        'description' => 'Display in just before countable number. e.g. $',
                        'value' => '' ,
                    ),
                    array(
                        'type' => 'textfield',
                        'heading' => __( 'Count', 'genemy' ),
                        'param_name' => 'count',
                        'description' => 'Number only',
                        'value' => '' ,
                        'admin_label' => true 
                    ),
                    array(
                        'type' => 'textfield',
                        'heading' => __( 'Count postfix', 'genemy' ),
                        'param_name' => 'count_postfix',
                        'description' => 'Display in just after countable number. e.g. k',
                        'value' => '' ,
                    ),
                    array(
                        'type' => 'textfield',
                        'heading' => __( 'Sub-Title', 'genemy' ),
                        'param_name' => 'subtitle',
                        'description' => '',
                        'value' => '',
                    ),  
                ),
                
            ),
            
            array(
                'type' => 'dropdown',
                'heading' => __( 'Counter prefix color', 'genemy' ),
                'param_name' => 'prefix_color',
                'value' => genemy_vc_color_options(true),
                'group' => __( 'Design option', 'genemy' ),
                'std' => 'rose',
                'description' => __( 'Only worked for Counter prefix', 'genemy' ),                 
            ), 
            array(
                'type' => 'dropdown',
                'heading' => __( 'Counter color', 'genemy' ),
                'param_name' => 'counter_color',
                'value' => genemy_vc_color_options(true),
                'group' => __( 'Design option', 'genemy' ),
                'std' => 'rose',
                'description' => __( 'Only worked for Counter up number', 'genemy' ),                 
            ),
            array(
                'type' => 'dropdown',
                'heading' => __( 'Counter postfix color', 'genemy' ),
                'param_name' => 'postfix_color',
                'value' => genemy_vc_color_options(true),
                'group' => __( 'Design option', 'genemy' ),
                'std' => 'rose',
                'description' => __( 'Only worked for Counter postfix', 'genemy' ),                 
            ),
            array(
                'type' => 'dropdown',
                'heading' => __( 'Title color', 'genemy' ),
                'param_name' => 'title_color',
                'value' => genemy_vc_color_options(true),
                'group' => __( 'Design option', 'genemy' ),
                'std' => 'default',
                'description' => __( 'Only worked for title', 'genemy' ),                 
            ), 
            array(
                'type' => 'dropdown',
                'heading' => __( 'Subtitle color', 'genemy' ),
                'param_name' => 'subtitle_color',
                'value' => genemy_vc_color_options(true),
                'group' => __( 'Design option', 'genemy' ),
                'std' => 'lightgrey',
                'description' => __( 'Only worked for subtitle', 'genemy' ),                 
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
class WPBakeryShortCode_Genemy_counter_up_group extends WPBakeryShortCode {
}