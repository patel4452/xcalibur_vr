<?php
function genemy_general_options( $options = array( ) ) {
    $options = array(
        array(
            'id'          => 'preloader_display',
            'label'       => __( 'Preloader display', 'genemy' ),
            'desc'        => '',
            'std'         => 'default',
            'type'        => 'select',
            'section'     => 'general_options',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and',
            'choices'   => array(
                array(
                    'label' => 'None',
                    'value' => 'none' 
                    ),
                array(
                    'label' => 'Genemy default preloader',
                    'value' => 'default' 
                    ),
                array(
                    'label' => 'Custom preloader image',
                    'value' => 'custom' 
                    ),
                )
        ),
        array(
            'id'          => 'genemy_layout_style',
            'label'       => __( 'Global layout design', 'genemy' ),
            'desc'        => __('Globally effect on theme buttons, form elements etc', 'genemy'),
            'std'         => 'rounded',
            'type'        => 'select',
            'section'     => 'general_options',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and',
            'choices'   => array(
                array(
                    'label' => 'Rounded',
                    'value' => 'rounded' 
                    ),
                array(
                    'label' => 'Semi-rounded',
                    'value' => 'semirounded' 
                    ),
                array(
                    'label' => 'Flat',
                    'value' => 'flat' 
                    ),
                )
        ),
        array(
             'id' => 'custom_preloader',
            'label' => __( 'Custom preloader image', 'genemy' ),
            'desc' => '',
            'std' => GENEMY_URI . '/images/preloader.png',
            'type' => 'upload',
            'section' => 'general_options',
            'condition' => 'preloader_display:is(custom)',
            'operator' => 'and' 
        ),
        array(
             'id' => 'genemy_animation',
            'label' => __( 'Animation', 'genemy' ),
            'desc' => __('OFF to force disable all animation', 'genemy'),
            'std' => 'on',
            'type' => 'on-off',
            'section' => 'general_options',
        ),
        array(
             'id' => 'admin_logo',
            'label' => __( 'Admin logo', 'genemy' ),
            'desc' => '',
            'std' => GENEMY_URI . '/images/logo.png',
            'type' => 'upload',
            'section' => 'general_options',
            'condition' => '',
            'operator' => 'and' 
        ),        
        array(
             'id' => 'google_map_api',
            'label' => __( 'Google map API', 'genemy' ),
            'desc' => 'Authentication for the standard API - API keys. <br><a class="button" href="//console.developers.google.com/flows/enableapi?apiid=maps_backend,geocoding_backend,directions_backend,distance_matrix_backend,elevation_backend&keyType=CLIENT_SIDE&reusekey=true" target="_blank"><strong>Get an API key</strong></a>',
            'std' => '',
            'type' => 'text',
            'section' => 'general_options',
            'condition' => '',
            'operator' => 'and' 
        ),
        array(
             'id' => 'search_placeholder',
            'label' => __( 'Search Placeholder Text', 'genemy' ),
            'desc' => '',
            'std' => 'Search...',
            'type' => 'text',
            'section' => 'general_options',
            'condition' => '',
            'operator' => 'and' 
        ),
        array(
             'id' => 'social_icons',
            'label' => __( 'Social Icons', 'genemy' ),
            'desc' => '',
            'std' => genemy_default_social_icons(),
            'type' => 'list-item',
            'section' => 'general_options',
            'condition' => '',
            'operator' => 'and',
            'settings' => array(
                 array(
                     'id' => 'icon_link',
                    'label' => __( 'Icon & link', 'genemy' ),
                    'desc' => '',
                    'std' => array(
                         'icon' => 'fa-heart',
                        'input' => '#' 
                    ),
                    'type' => 'iconpicker_input' 
                ) 
            ) 
        ),
        
    );
    return apply_filters( 'genemy_general_options', $options );
}
?>