<?php
function genemy_footer_options( $options = array( ) ) {
    $options = array(
        array(
             'id' => 'footer_Newsletter_option_tab',
            'label' => __( 'Newsletter settings', 'genemy' ),
            'type' => 'tab',
            'section' => 'footer_options',
        ), 
         array(
             'id' => 'newsletter_area',
            'label' => __( 'Newsletter area Display','genemy' ),
            'desc' => __( 'Display before footer area','genemy' ),
            'std' => 'off',
            'type' => 'on-off',
            'section' => 'footer_options' 
        ), 
        array(
             'id' => 'newsletter_bg',
            'label' => __( 'Newsletter background image', 'genemy' ),
            'std' => '',
            'type' => 'upload',
            'section' => 'footer_options',
            'condition' => 'newsletter_area:not(off)',
            'operator' => 'and' 
        ), 
        array(
             'id' => 'newsletter_title',
            'label' => __( 'Newsletter title', 'genemy' ),
            'desc' => __( 'Use {} to highlight text', 'genemy' ),
            'std' => __( 'Stay up to date with our news, ideas and updates', 'genemy' ),
            'type' => 'text',
            'section' => 'footer_options',
            'condition' => 'newsletter_area:not(off)',
            'operator' => 'and' 
        ), 
        array(
             'id' => 'newsletter_placeholder',
            'label' => __( 'Newsletter iemail placeholder', 'genemy' ),
            'std' => __( 'Your email address', 'genemy' ),
            'type' => 'text',
            'section' => 'footer_options',
            'condition' => 'newsletter_area:not(off)',
            'operator' => 'and' 
        ),
        array(
             'id' => 'footer_Widget_option_tab',
            'label' => __( 'Widget area settings', 'genemy' ),
            'type' => 'tab',
            'section' => 'footer_options',
        ), 
        array(
             'id' => 'footer_widget_area',
            'label' => __( 'Footer widget area Display','genemy' ),
            'desc' => '',
            'std' => 'on',
            'type' => 'on-off',
            'section' => 'footer_options' 
        ),
        array(
            'id' => 'footer_bg_style',
            'label' => __('Footer background style', 'genemy'),
            'desc' => '',
            'std' => 'bg-dark white-color',
            'type' => 'select',
            'choices' => array(           
                array( 'label' => 'Transparent', 'value' => '' ),
                array( 'label' => 'Light', 'value' => 'bg-light' ),
                array( 'label' => 'Grey', 'value' => 'bg-grey' ),
                array( 'label' => 'Dark', 'value' => 'bg-dark white-color' ),                    
           
            ),
            'section' => 'footer_options'
        ),
        array(
        'id'          => 'footer_background',
        'label'       => __( 'Footer background', 'genemy' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'background',
        'section'     => 'footer_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'footer_widget_area:is(on)',
        'operator'    => 'and',
        'action'   => array()
      ),
        array(
             'id' => 'footer_widget_area_column',
            'label' => __( 'Footer widget area column', 'genemy' ),
            'desc' => '',
            'std' => 4,
            'type' => 'numeric-slider',
            'section' => 'footer_options',
            'min_max_step' => '1,4,1',
            'condition' => 'footer_widget_area:is(on)',
            'operator' => 'and' 
            
        ), 
        array(
             'id' => 'footer_Copyright_option_tab',
            'label' => __( 'Copyright settings', 'genemy' ),
            'type' => 'tab',
            'section' => 'footer_options',
        ),        
        array(
             'id' => 'footer_copyright_bar',
            'label' => __( 'Footer copyright', 'genemy' ),
            'desc' => '',
            'std' => 'on',
            'type' => 'on-off',
            'section' => 'footer_options',
            'condition' => '',
            'operator' => 'and' 
        ),
        array(
            'id' => 'copyright_text',
            'label' => __( 'Copyright Text', 'genemy' ),
            'desc' => '',
            'std' => '&copy; ' . date( 'Y' ).' <span>Genemy.</span> All Rights Reserved',
            'type' => 'text',
            'section' => 'footer_options',
            'rows' => '2',
            'condition' => 'footer_copyright_bar:not(off)',
            'operator' => 'and' 
        ),
        array(
             'id' => 'footer_contact_option_tab',
            'label' => __( 'Quick contact form settings', 'genemy' ),
            'type' => 'tab',
            'section' => 'footer_options',
        ),
        array(
             'id' => 'quickform_area',
            'label' => __( 'Quick contact form Display','genemy' ),
            'desc' => __( 'Display in bottom of page','genemy' ),
            'std' => 'off',
            'type' => 'on-off',
            'section' => 'footer_options' 
        ),
        array(
             'id' => 'quickform_title',
            'label' => __( 'Contact form title', 'genemy' ),
            'std' => __( 'Quick Contact Form', 'genemy' ),
            'type' => 'text',
            'section' => 'footer_options',
            'operator' => 'and' 
        ),
        array(
             'id' => 'quickform_shortcode',
            'label' => __( 'Contact form shortcode', 'genemy' ),
            'std' => '',
            'desc' => __('Choose shortcode from Contact form 7.', 'genemy').' <a href="'.admin_url('admin.php?page=wpcf7').'" target="_blank">'.__('Click here', 'genemy').'</a>',
            'type' => 'text',
            'section' => 'footer_options',
            'operator' => 'and' 
        ),
        array(
             'id' => 'footer_backtotop_option_tab',
            'label' => __( 'Back to top settings', 'genemy' ),
            'type' => 'tab',
            'section' => 'footer_options',
        ),
        array(
             'id' => 'backtotop',
            'label' => __( 'Back to top Display','genemy' ),
            'desc' => __( 'Display in backtotop','genemy' ),
            'std' => 'on',
            'type' => 'on-off',
            'section' => 'footer_options',
        ),
    );
    return apply_filters( 'genemy_footer_options', $options );
}