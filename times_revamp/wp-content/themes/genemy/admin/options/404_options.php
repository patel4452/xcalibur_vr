<?php
function genemy_404_options( $options = array( ) ) {
    $options = array(
         array(
             'id' => '404_title',
            'label' => __( 'Large Title', 'genemy' ),
            'desc' => '',
            'std' => '404',
            'type' => 'text',
            'section' => '404_options',
            'condition' => '',
            'operator' => 'and' 
        ),
        array(
             'id' => '404_subtitle',
            'label' => __( 'Subtitle', 'genemy' ),
            'desc' => '<strong>{}</strong> use this symbol to highlight text',
            'std' => '{Sorry}, The page was not found',
            'type' => 'text',
            'section' => '404_options',
            'condition' => '',
            'operator' => 'and' 
        ),
        array(
             'id' => '404_content',
            'label' => __( '404 Content', 'genemy' ),
            'desc' => '',
            'std' => '',
            'type' => 'textarea',
            'section' => '404_options',
            'condition' => '',
            'operator' => 'and' 
        ) 
    );
    return apply_filters( 'genemy_404_options', $options );
}
?>