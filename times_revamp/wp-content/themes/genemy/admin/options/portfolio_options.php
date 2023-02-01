<?php
function genemy_portfolio_options( $options = array( ) ) {
    $options = array(
        array(
             'id' => 'Portfolio_option_tab',
            'label' => __( 'Portfolio settings', 'genemy' ),
            'type' => 'tab',
            'section' => 'portfolio_options',
        ),
         array(
             'id' => 'portfolio_archive',
            'label' => 'Portfolio Archive page',
            'desc' => sprintf( __( 'If archive page is not working, then save again <a href="%s" target="_blank">permalink settings</a>, For best performance use Pretty permalink(Example: Post name, Day and name etc)', 'genemy' ), admin_url( 'options-permalink.php' ) ),
            'std' => ( get_post_status( get_option( 'portfolio_archive_id' ) ) == 'publish' ) ? get_option( 'portfolio_archive_id' ) : '',
            'type' => 'page-select',
            'section' => 'portfolio_options',
            'rows' => '' 
        ),
        array(
             'id' => 'portfolio_single_layout',
            'label' => __( 'Single portfolio layout', 'genemy' ),
            'desc' => '',
            'std' => 'full',
            'type' => 'radio-image',
            'section' => 'portfolio_options',
            'operator' => 'and',
            'choices' => array(
                 array(
                     'value' => 'full',
                    'label' => __( 'Full width', 'genemy' ),
                    'src' => OT_URL . '/assets/images/layout/full-width.png' 
                ),
                array(
                     'value' => 'ls',
                    'label' => __( 'Left sidebar', 'genemy' ),
                    'src' => OT_URL . '/assets/images/layout/left-sidebar.png' 
                ),
                array(
                     'value' => 'rs',
                    'label' => __( 'Right sidebar', 'genemy' ),
                    'src' => OT_URL . '/assets/images/layout/right-sidebar.png' 
                ) 
            ) 
        ),
        array(
            'id'          => 'portfolio_single_post_title_tag',
            'label'       => esc_attr__( 'Single post title tag', 'genemy' ),
            'std'         => 'h3',
            'type'        => 'select',           
            'section'     => 'portfolio_options',
            'operator'    => 'and',
            'choices'     => array(                 
              array(
                'value'       => 'h1',
                'label'       => esc_attr__( 'H1', 'genemy' ),
              ),
              array(
                'value'       => 'h2',
                'label'       => esc_attr__( 'H2', 'genemy' ),
              ),
              array(
                'value'       => 'h3',
                'label'       => esc_attr__( 'H3', 'genemy' ),
              ),
              array(
                'value'       => 'h4',
                'label'       => esc_attr__( 'H4', 'genemy' ),
              ),
              array(
                'value'       => 'h5',
                'label'       => esc_attr__( 'H5', 'genemy' ),
              ),
              array(
                'value'       => 'h6',
                'label'       => esc_attr__( 'H6', 'genemy' ),
              )
            )
        ),
        array(
            'id'          => 'portfolio_post_title_tag_size',
            'label'       => esc_attr__( 'Single post title tag size', 'genemy' ),
            'std'         => 'lg',
            'type'        => 'select',           
            'section'     => 'portfolio_options',
            'operator'    => 'and',
            'choices'     => array(                 
              array(
                'value'       => '',
                'label'       => esc_attr__( 'Initial', 'genemy' ),
              ),
              array(
                'value'       => 'xl',
                'label'       => esc_attr__( 'Extra large', 'genemy' ),
              ),
              array(
                'value'       => 'lg',
                'label'       => esc_attr__( 'Large', 'genemy' ),
              ),
              array(
                'value'       => 'md',
                'label'       => esc_attr__( 'Medium', 'genemy' ),
              ),
              array(
                'value'       => 'sm',
                'label'       => esc_attr__( 'Small', 'genemy' ),
              ),
              array(
                'value'       => 'xs',
                'label'       => esc_attr__( 'Extra small', 'genemy' ),
              )
            )
        ),
        array(
             'id' => 'portfolio_single_layout_sidebar',
            'label' => __( 'Single portfolio Sidebar', 'genemy' ),
            'desc' => '',
            'std' => 'sidebar-1',
            'type' => 'sidebar-select',
            'section' => 'portfolio_options',
            'rows' => '',
            'post_type' => '',
            'taxonomy' => '',
            'min_max_step' => '',
            'class' => '',
            'condition' => 'portfolio_single_layout:not(full)',
            'operator' => 'and' 
        ),  
        array(
             'id' => 'single_portfolio_sharing_style',
            'label' => __( 'Sharing Icon style', 'genemy' ),
            'desc' => '',
            'std' => 'grey',
            'type' => 'select',
            'section' => 'portfolio_options',
            'condition' => '',
            'operator' => 'and',
            'choices' => array(
                array(
                     'label' => 'Colored icon',
                    'value' => 'color' 
                ),
                array(
                     'label' => 'Grey icon',
                    'value' => 'grey' 
                ),
            ) 
        ),
        array(
             'id' => 'display_single_related_portfolio',
            'label' => __( 'Related portfolio', 'genemy' ),
            'desc' => '',
            'std' => 'on',
            'type' => 'on-off',
            'section' => 'portfolio_options',
            'condition' => '',
            'operator' => 'and' 
        ),
        array(
             'id' => 'related_portfolio_title',
            'label' => __( 'Related portfolio title', 'genemy' ),
            'desc' => '',
            'std' => 'Related portfolio',
            'type' => 'text',
            'section' => 'portfolio_options',
            'condition' => 'display_single_related_portfolio:is(on)',
            'operator' => 'and' 
        ),
        array(
             'id' => 'related_portfolio',
            'label' => __( 'Related portfolio display', 'genemy' ),
            'min_max_step' => '-1,20,1',
            'std' => '3',
            'type' => 'numeric-slider',
            'section' => 'portfolio_options',
            'condition' => 'display_single_related_portfolio:is(on)',
            'operator' => 'and' 
        ), 
        array(
             'id' => 'Team_option_tab',
            'label' => __( 'Team settings', 'genemy' ),
            'type' => 'tab',
            'section' => 'portfolio_options',
        ),       
        array(
             'id' => 'team_archive',
            'label' => 'Team Archive page',
            'desc' => sprintf( __( 'If archive page is not working, then save again <a href="%s" target="_blank">permalink settings</a>, For best performance use Pretty permalink(Example: Post name, Day and name etc)', 'genemy' ), admin_url( 'options-permalink.php' ) ),
            'std' => ( get_post_status( get_option( 'team_archive_id' ) ) == 'publish' ) ? get_option( 'team_archive_id' ) : '',
            'type' => 'page-select',
            'section' => 'portfolio_options',
            'rows' => '' 
        ),
        array(
             'id' => 'display_team_hiring',
            'label' => __( 'Display team hiring', 'genemy' ),
            'desc' => '',
            'std' => 'on',
            'type' => 'on-off',
            'section' => 'portfolio_options',
            'condition' => '',
            'operator' => 'and' 
        ),

        array(
            'id'          => 'team_single_post_title_tag',
            'label'       => esc_attr__( 'Single post title tag', 'genemy' ),
            'std'         => 'h3',
            'type'        => 'select',           
            'section'     => 'portfolio_options',
            'operator'    => 'and',
            'choices'     => array(                 
              array(
                'value'       => 'h1',
                'label'       => esc_attr__( 'H1', 'genemy' ),
              ),
              array(
                'value'       => 'h2',
                'label'       => esc_attr__( 'H2', 'genemy' ),
              ),
              array(
                'value'       => 'h3',
                'label'       => esc_attr__( 'H3', 'genemy' ),
              ),
              array(
                'value'       => 'h4',
                'label'       => esc_attr__( 'H4', 'genemy' ),
              ),
              array(
                'value'       => 'h5',
                'label'       => esc_attr__( 'H5', 'genemy' ),
              ),
              array(
                'value'       => 'h6',
                'label'       => esc_attr__( 'H6', 'genemy' ),
              )
            )
        ),
        array(
            'id'          => 'team_post_title_tag_size',
            'label'       => esc_attr__( 'Single post title tag size', 'genemy' ),
            'std'         => 'lg',
            'type'        => 'select',           
            'section'     => 'portfolio_options',
            'operator'    => 'and',
            'choices'     => array(                 
              array(
                'value'       => '',
                'label'       => esc_attr__( 'Initial', 'genemy' ),
              ),
              array(
                'value'       => 'xl',
                'label'       => esc_attr__( 'Extra large', 'genemy' ),
              ),
              array(
                'value'       => 'lg',
                'label'       => esc_attr__( 'Large', 'genemy' ),
              ),
              array(
                'value'       => 'md',
                'label'       => esc_attr__( 'Medium', 'genemy' ),
              ),
              array(
                'value'       => 'sm',
                'label'       => esc_attr__( 'Small', 'genemy' ),
              ),
              array(
                'value'       => 'xs',
                'label'       => esc_attr__( 'Extra small', 'genemy' ),
              )
            )
        ),
        array(
             'id' => 'team_hiring_title',
            'label' => __( 'Team hiring title', 'genemy' ),
            'desc' => '',
            'std' => 'We Are Hiring!',
            'type' => 'text',
            'section' => 'portfolio_options',
            'condition' => 'display_team_hiring:is(on)',
            'operator' => 'and' 
        ),
        array(
             'id' => 'team_hiring_link_text',
            'label' => __( 'Team hiring link text', 'genemy' ),
            'desc' => '',
            'std' => 'Become part of our team',
            'type' => 'text',
            'section' => 'portfolio_options',
            'condition' => 'display_team_hiring:is(on)',
            'operator' => 'and' 
        ),
        array(
             'id' => 'team_hiring_link',
            'label' => __( 'Team hiring link', 'genemy' ),
            'desc' => '',
            'std' => '#',
            'type' => 'text',
            'section' => 'portfolio_options',
            'condition' => 'display_team_hiring:is(on)',
            'operator' => 'and' 
        ),
        array(
             'id' => 'team_single_layout',
            'label' => __( 'Single team layout', 'genemy' ),
            'desc' => '',
            'std' => 'full',
            'type' => 'radio-image',
            'section' => 'portfolio_options',
            'operator' => 'and',
            'choices' => array(
                 array(
                     'value' => 'full',
                    'label' => __( 'Full width', 'genemy' ),
                    'src' => OT_URL . '/assets/images/layout/full-width.png' 
                ),
                array(
                     'value' => 'ls',
                    'label' => __( 'Left sidebar', 'genemy' ),
                    'src' => OT_URL . '/assets/images/layout/left-sidebar.png' 
                ),
                array(
                     'value' => 'rs',
                    'label' => __( 'Right sidebar', 'genemy' ),
                    'src' => OT_URL . '/assets/images/layout/right-sidebar.png' 
                ) 
            ) 
        ),
        array(
             'id' => 'team_single_layout_sidebar',
            'label' => __( 'Single portfolio Sidebar', 'genemy' ),
            'desc' => '',
            'std' => 'sidebar-page',
            'type' => 'sidebar-select',
            'section' => 'portfolio_options',
            'rows' => '',
            'post_type' => '',
            'taxonomy' => '',
            'min_max_step' => '',
            'class' => '',
            'condition' => 'team_single_layout:not(full)',
            'operator' => 'and' 
        ),
    );
    return apply_filters( 'genemy_portfolio_options', $options );
}
?>