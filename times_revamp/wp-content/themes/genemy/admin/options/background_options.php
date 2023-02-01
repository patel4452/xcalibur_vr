<?php
function genemy_background_options( $options = array( ) ) {
    $options = array(
        array(
             'id' => 'container_width',
            'label' => __( 'Container width', 'genemy' ),
            'desc' => '',
            'std' => array( '1140',  'px' ),
            'type' => 'measurement',
            'section' => 'background_options',
            'rows' => '',
            'post_type' => '',
            'taxonomy' => '',
            'min_max_step' => '320,2000,1',
            'class' => '',
            'condition' => '',
            'operator' => 'and',
            'action' => array( ) 
        ),
        array(
             'id' => 'body_background',
            'label' => __( 'Body background', 'genemy' ),
            'desc' => '',
            'std' => '',
            'type' => 'background',
            'section' => 'background_options',
            'rows' => '',
            'post_type' => '',
            'taxonomy' => '',
            'min_max_step' => '',
            'class' => '',
            'operator' => 'and',
            'action' => array( ) 
        ),
        array(
             'id' => 'title_display',
            'label' => __( 'Banner display', 'genemy' ),
            'desc' => __('You can edit banner option from each page.', 'genemy'),
            'std' => 'on',
            'type' => 'on-off',
            'section' => 'background_options',
        ),
        array(
             'id' => 'header_bg_img',
            'label' => __( 'Header Default background image', 'genemy' ),
            'desc' => '',
            'std' => GenemyHeader::get_default_header_image(),
            'type' => 'upload',
            'section' => 'background_options',
            'condition' => '',
            'operator' => 'and' 
        ),  
        array(
             'id' => 'overlay_opacity',
            'label' => __( 'Header image overlay opacity', 'genemy' ),
            'desc' => '',
            'std' => '0',
            'type' => 'numeric-slider',
            'section' => 'background_options',
            'min_max_step' => '0,100,1',
            'condition' => '',
            'operator' => 'and' 
        ),
    );
    return apply_filters( 'genemy_background_options', $options );
}
?>