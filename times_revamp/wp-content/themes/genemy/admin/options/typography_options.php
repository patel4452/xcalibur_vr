<?php
function genemy_recognized_font_families( $families ) {
    $families[ 'roboto' ] = 'Roboto';
    $families[ 'montserrat' ] = 'Montserrat';
    return $families;
}
add_filter( 'ot_recognized_font_families', 'genemy_recognized_font_families' );
function genemy_filter_typography_fields( $array, $field_id ) {
    if ( $field_id == "primary_font" ) {
        $array = array(
             'font-family' 
        );
    } //$field_id == "primary_font"
    if ( $field_id == "secondary_font" ) {
        $array = array(
             'font-family' 
        );
    } //$field_id == "secondary_font"
    return $array;
}
add_filter( 'ot_recognized_typography_fields', 'genemy_filter_typography_fields', 10, 2 );
function genemy_typography_options( $options = array( ) ) {
    $body          = array();
    $menu_a        = array();
    $submenu_a     = array();
    $h1            = array();
    $h2            = array();
    $h3            = array();
    $h4            = array();
    $h5            = array();
    $h6            = array();
    $sidebar_title = array();
    $footer_p      = array();
    $footer_link   = array();

    $options       = array(
        array(
             'id' => 'typography_general_option_tab',
            'label' => __( 'General font settings', 'genemy' ),
            'type' => 'tab',
            'section' => 'fonts',
        ),
         array(
             'id' => 'genemy_google_fonts',
            'label' => __( 'Google Fonts', 'genemy' ),
            'desc' => __( 'The Google Fonts option type will dynamically enqueue any number of Google Web Fonts into the document. As well, once the option has been saved each font family will automatically be inserted 

          into the font family dropdown', 'genemy' ),
            'std' => array(
                 array(
                    'family' => 'roboto',
                    'variants' => array(
                         '300',
                         'regular',
                        '500',
                        '700', 
                        '900'
                    ),
                    'subsets' => array(
                         'latin',
                        'latin-ext' 
                    ) 
                ),
                array(
                     'family' => 'montserrat',
                    'variants' => array(
                         '300',
                         'regular',
                        '500',
                        '600',
                        '700', 
                        '800', 
                        '900'
                    ),
                    'subsets' => array(
                         'latin',
                        'latin-ext' 
                    ) 
                ) 
            ),
            'type' => 'google-fonts',
            'section' => 'fonts',
            'operator' => 'and' 
        ),
        array(
             'id' => 'primary_font',
            'label' => __( 'Primary font', 'genemy' ),
            'desc' => __( 'It is a global Font setting for whole pages.', 'genemy' ),
            'std' => array(
                 'font-family' => 'roboto' 
            ),
            'type' => 'typography',
            'section' => 'fonts',
            'operator' => 'and' 
        ),
        array(
             'id' => 'secondary_font',
            'label' => __( 'Title font', 'genemy' ),
            'desc' => __( 'It is a global title Font setting for whole pages.', 'genemy' ),
            'std' => array(
                 'font-family' => 'montserrat' 
            ),
            'type' => 'typography',
            'section' => 'fonts',
            'operator' => 'and' 
        ),
        array(
             'id' => 'typography_advance_option_tab',
            'label' => __( 'Advanced settings', 'genemy' ),
            'type' => 'tab',
            'section' => 'fonts',
        ),
        array(
             'id' => 'body',
            'label' => __( 'Body', 'genemy' ),
            'desc' => __( 'It is a global Font setting for whole pages.', 'genemy' ),
            'std' => $body,
            'selector' => 'body, p',
            'type' => 'typography',
            'section' => 'fonts' 
        ),
        array(        
            'id'          => 'menu_a',        
            'label'       => __( 'First lavel menu', 'genemy' ),        
            'desc'        => '',        
            'std'         => $menu_a, 
            'type'        => 'typography',        
            'section'     => 'fonts',
        ),        
        array(        
            'id'          => 'submenu_a',        
            'label'       => __( 'Submenu', 'genemy' ),        
            'desc'        => '',        
            'std'         => $submenu_a, 
            'type'        => 'typography',        
            'section'     => 'fonts'        
        ),
        array(        
            'id'          => 'menu_hover',        
            'label'       => __( 'Menu hover', 'genemy' ),        
            'desc'        => '',        
            'std'         => '', 
            'type'        => 'typography',        
            'section'     => 'fonts',
        ),
        array(
             'id' => 'h1',
            'label' => __( 'H1', 'genemy' ),
            'desc' => '',
            'std' => $h1,
            'selector' => 'h1',
            'type' => 'typography',
            'section' => 'fonts',
            'rows' => '',
            'post_type' => '',
            'taxonomy' => '',
            'min_max_step' => '',
            'class' => '',
            'condition' => '',
            'operator' => 'and',
            'action' => array(
                 array(
                     'selector' => 'h1',
                    'property' => '' 
                ) 
            ) 
        ),
        array(
             'id' => 'h2',
            'label' => __( 'H2', 'genemy' ),
            'desc' => '',
            'std' => $h2,
            'selector' => 'h2',
            'type' => 'typography',
            'section' => 'fonts',
        ),
        array(
             'id' => 'h3',
            'label' => __( 'H3', 'genemy' ),
            'desc' => '',
            'std' => $h3,
            'selector' => 'h3',
            'type' => 'typography',
            'section' => 'fonts',         
        ),        
        array(
             'id' => 'h4',
            'label' => __( 'H4', 'genemy' ),
            'desc' => '',
            'std' => $h4,
            'selector' => 'h4',
            'type' => 'typography',
            'section' => 'fonts',
            'rows' => '',
            'post_type' => '',
            'taxonomy' => '',
            'min_max_step' => '',
            'class' => '',
            'condition' => '',
            'operator' => 'and',
            'action' => array(
                 array(
                     'selector' => 'h4',
                    'property' => '' 
                ) 
            ) 
        ),
        array(
             'id' => 'h5',
            'label' => __( 'H5', 'genemy' ),
            'desc' => '',
            'std' => $h5,
            'type' => 'typography',
            'section' => 'fonts',
            'rows' => '',
            'post_type' => '',
            'taxonomy' => '',
            'min_max_step' => '',
            'class' => '',
            'condition' => '',
            'operator' => 'and',
            'action' => array(
                 array(
                     'selector' => 'h5',
                    'property' => '' 
                ) 
            ) 
        ),
        array(
             'id' => 'h6',
            'label' => __( 'H6', 'genemy' ),
            'desc' => '',
            'std' => $h6,
            'type' => 'typography',
            'section' => 'fonts',
            'rows' => '',
            'post_type' => '',
            'taxonomy' => '',
            'min_max_step' => '',
            'class' => '',
            'condition' => '',
            'operator' => 'and' 
        ),
        array(
             'id' => 'sidebar_title',
            'label' => __( 'Sidebar title', 'genemy' ),
            'desc' => '',
            'std' => $sidebar_title,
            'type' => 'typography',
            'section' => 'fonts',
            'rows' => '',
            'post_type' => '',
            'taxonomy' => '',
            'min_max_step' => '',
            'class' => '',
            'condition' => '',
            'operator' => 'and' 
        ),
        array(
             'id' => 'footer',
            'label' => __( 'Footer', 'genemy' ),
            'desc' => '',
            'std' => $footer_p,
            'type' => 'typography',
            'section' => 'fonts',
            'rows' => '',
            'post_type' => '',
            'taxonomy' => '',
            'min_max_step' => '',
            'class' => '',
            'condition' => '',
            'operator' => 'and' 
        ),
        array(
             'id' => 'font_css',
            'label' => __( 'CSS', 'genemy' ),
            'class' => 'hide-field',
            'desc' => '',
            'std' => '



',
            'type' => 'css',
            'section' => 'fonts',
            'rows' => '20',
            'post_type' => '',
            'taxonomy' => '',
            'min_max_step' => '',
            'condition' => '',
            'operator' => 'and' 
        ) 
    );
    return apply_filters( 'genemy_typography_options', $options );
}
?>