<?php
/**
* The VC Functions
*/
add_action( 'vc_before_init', 'genemy_our_skills_shortcode_vc' );
function genemy_our_skills_shortcode_vc( $return = false ) {
    $args = array(
        'icon' => 'genemy-icon',
        'name' => __( 'Our skills', 'genemy' ),
        'base' => 'genemy_our_skills',
        'class' => 'genemy-vc',
        'category' => __( 'Genemy', 'genemy' ),
        'description' => __( 'Display title, desc & tenchnical skills', 'genemy' ),
        'params' => array(           
            array(
                'type' => 'textfield',
                'heading' => __( 'Sub Title', 'genemy' ),
                'param_name' => 'subtitle',
                'value' => '',
                'admin_label' => true 
            ),
            array(
                'type' => 'textfield',
                'heading' => __( 'Heading Title', 'genemy' ),
                'param_name' => 'title',
                'value' => '',
                'admin_label' => true 
            ),
            array(
                'type' => 'textarea',
                'heading' => __( 'Lead text', 'genemy' ),
                'param_name' => 'lead_text',
                'description' => '',
                'value' => 'An magnis nulla dolor sapien augue erat iaculis tempor purus ipsum vitae purus primis ipsum congue',
                'admin_label' => true,
            ),
            genemy_vc_strategy_list_group(false),
            array(
                'type' => 'checkbox',
                'heading' => __( 'Enable content group as list', 'genemy' ),
                'param_name' => 'list_display',
                'description' => __( 'Checked to display animated list', 'genemy' ),
                'value' => array( __( 'Yes', 'genemy' ) => 'yes' ),
                'std' => 'yes',
                'admin_label' => true,
            ),
            array(
                'type' => 'textarea_html',
                'heading' => __( 'Description', 'genemy' ),
                'param_name' => 'content',
                'description' => '',
                'value' => '',
                'admin_label' => true 
            ),
            // params group
            array(
                'type' => 'param_group',
                'save_always' => true,
                'heading' => __( 'Skills', 'genemy' ),
                'param_name' => 'params',
                'value' => urlencode( json_encode( array(
                    array(
                        'title' => 'Coding Knowledge',
                        'count' => ' 97',
                    ),
                    array(
                        'title' => 'Digital Marketing',
                        'count' => '92',
                    ),
                    array(
                        'title' => 'Front End Development',
                        'count' => '85',
                    ),
                    array(
                        'title' => 'WordPress',
                        'count' => '94',
                    ),
                ) ) ),
                'params' => array(
                     array(
                        'type' => 'textfield',
                        'heading' => __( 'Title', 'genemy' ),
                        'param_name' => 'title',
                        'description' => '',
                        'value' => 'PHP',
                        'admin_label' => true 
                    ),
                    array(
                        'type' => 'textfield',
                        'heading' => __( 'Number in percent', 'genemy' ),
                        'param_name' => 'count',
                        'description' => __( 'Number only (1-100)', 'genemy' ),
                        'value' => '90' ,
                        'admin_label' => true 
                    ) 
                ) 
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
class WPBakeryShortCode_Genemy_our_skills extends WPBakeryShortCode {
}