<?php
/**
* The VC Functions
*/
add_action( 'vc_before_init', 'genemy_hero_text_block_shortcode_vc' );
function genemy_hero_text_block_shortcode_vc( $return = false ) {
    $args = array(
        'icon' => 'genemy-icon',
        'name' => __( 'Text blocks', 'genemy' ),
        'base' => 'genemy_hero_text_block',
        'class' => 'genemy-vc',
        'category' => __( 'Genemy', 'genemy' ),
        'description' => __( 'Display Text block in 3 column', 'genemy' ),
        'params' => array(            
            // params group
            array(
                'type' => 'param_group',
                'save_always' => true,
                'heading' => __( 'Text blocks', 'genemy' ),
                'param_name' => 'params',
                'value' => urlencode( json_encode( array(
                    array(
                        'title' => 'Concept & Idea',
                        'subtitle' => 'Semper lacus cursus vitae ultrice porta feugiat primis and ligula auctor tempus risus undo magna integer dolor augue vitae at auctor ullam libero purus',
                    ),
                    array(
                        'title' => 'User Experience',
                        'subtitle' => 'Semper lacus cursus vitae ultrice porta feugiat primis and ligula auctor tempus risus undo magna integer dolor augue vitae at auctor ullam libero purus',
                    ),
                    array(
                        'title' => 'Free Consultations',
                        'subtitle' => 'Semper lacus cursus vitae ultrice porta feugiat primis and ligula auctor tempus risus undo magna integer dolor augue vitae at auctor ullam libero purus',
                    ),
                ) ) ),
                'params' => array(
                    array(
                        'type' => 'textfield',
                        'heading' => __( 'Title', 'genemy' ),
                        'param_name' => 'title',
                        'value' => '',
                        'admin_label' => true 
                    ),
                    array(
                        'type' => 'textarea',
                        'heading' => __( 'Sub-Title', 'genemy' ),
                        'param_name' => 'subtitle',
                        'value' => '',
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
class WPBakeryShortCode_Genemy_hero_text_block extends WPBakeryShortCode {
}