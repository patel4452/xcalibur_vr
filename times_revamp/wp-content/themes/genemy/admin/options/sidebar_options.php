<?php
function genemy_sidebar_options( $options = array( ) ) {
    $options = array(
         array(
             'id' => 'create_sidebar',
            'label' => __( 'Create Sidebar', 'genemy' ),
            'desc' => 'You must save after create sidebar, otherwise creared sidebar is not populated in Sidebar selection dropdown list.',
            'std' => '',
            'type' => 'list-item',
            'section' => 'sidebar_option',
            'rows' => '',
            'post_type' => '',
            'taxonomy' => '',
            'min_max_step' => '',
            'class' => '',
            'condition' => '',
            'operator' => 'and',
            'settings' => array(
                 array(
                     'id' => 'desc',
                    'label' => __( 'Description', 'genemy' ),
                    'desc' => __( '(optional)', 'genemy' ),
                    'std' => '',
                    'type' => 'text',
                    'rows' => '',
                    'post_type' => '',
                    'taxonomy' => '',
                    'min_max_step' => '',
                    'class' => '',
                    'condition' => '',
                    'operator' => 'and' 
                ) 
            ) 
        ),
    );
    return apply_filters( 'genemy_sidebar_options', $options );
}
?>