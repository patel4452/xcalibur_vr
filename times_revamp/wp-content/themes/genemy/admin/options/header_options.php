<?php
function genemy_woo_cart_icon_option( ) {
    if ( function_exists( 'is_woocommerce' ) ) {
        return array(
             'id' => 'header_cart_icon',
            'label' => __( 'Header cart icon display', 'genemy' ),
            'desc' => '',
            'std' => 'off',
            'type' => 'on-off',
            'section' => 'header_options',
            'condition' => '',
            'operator' => 'or' 
        );
    } //function_exists( 'is_woocommerce' )
}
function genemy_langs_dropdown_option( ) {
    return array(
         'id' => 'header_language_dropdown',
        'label' => __( 'Header topbar Language dropdown display', 'genemy' ),
        'desc' => 'This option only applicable when <strong>WPML</strong>, <strong>Polylang</strong> or <strong>Multilanguage by BestWebSoft</strong> plugins are installed',
        'std' => 'on',
        'type' => 'on-off',
        'section' => 'header_options',
        'condition' => '',
        'operator' => 'or' 
    );
}
function genemy_header_options( $options = array( ) ) {
    $options = array( 
        array(
             'id' => 'header_general_option_tab',
            'label' => __( 'Logo settings', 'genemy' ),
            'type' => 'tab',
            'section' => 'header_options',
        ),       
         array(
             'id' => 'logo',
            'label' => __( 'Logo', 'genemy' ),
            'desc' =>  __( 'Display on light color background', 'genemy' ),
            'std' => apply_filters( 'genemy_header_logo_default', GENEMY_URI . '/images/logo.png'),
            'type' => 'upload',           
            'section' => 'header_options',
            'operator' => 'and' 
        ),
        array(
             'id' => 'logo_white',
            'label' => __( 'Logo white', 'genemy' ),
            'desc' => __( 'Display on dark type background', 'genemy' ),
            'std' => apply_filters( 'genemy_header_logo_white_default', GENEMY_URI . '/images/logo-white.png'),
            'type' => 'upload',
            'section' => 'header_options',
            'condition' => '',
            'operator' => 'and' 
        ),
        array(
             'id' => 'logo_height',
            'label' => __( 'Logo height maximum', 'genemy' ),
            'std' => array(
                 '30',
                'px' 
            ),
            'type' => 'measurement',
            'section' => 'header_options',
            'operator' => 'and' 
        ),
        array(
             'id' => 'header_navbar_option_tab',
            'label' => __( 'Navbar settings', 'genemy' ),
            'type' => 'tab',
            'section' => 'header_options',
        ),
        array(
             'id' => 'navbar_style',
            'label' => __( 'Navbar style', 'genemy' ),
            'desc' => '',
            'std' => 'navbar-style1',
            'type' => 'select',
            'section' => 'header_options',
            'choices' => array(
                array( 'label' => 'Navbar style #1',  'value' => 'navbar-style1' ),
                array( 'label' => 'Navbar style #2',  'value' => 'navbar-style2' ),
            )
        ),
        array(
             'id' => 'nav_style',
            'label' => __( 'Navbar bg style', 'genemy' ),
            'desc' => '',
            'std' => 'navbar-dark bg-tra',
            'type' => 'select',
            'section' => 'header_options',
            'choices' => genemy_nav_bg_color_options(),
            //'class' => 'half-column-size',  
        ),
        array(
             'id' => 'header_sticky_nav',
            'label' => __( 'Sticky navbar', 'genemy' ),
            'desc' => '',
            'std' => 'on',
            'type' => 'on-off',
            'section' => 'header_options',
            //'class' => 'half-column-size', 
        ), 
        array(
             'id' => 'nav_right_option_tab',
            'label' => __( 'Navbar right settings', 'genemy' ),
            'desc' => __( 'Display social Icon or Buttons', 'genemy' ),
            'type' => 'tab',
            'section' => 'header_options',
        ),        
        array(
             'id' => 'header_search_display',
            'label' => __( 'Navbar Search icon display', 'genemy' ),
            'desc' => '',
            'std' => 'off',
            'type' => 'on-off',
            'section' => 'header_options',
            //'class' => 'half-column-size', 
        ),
        array(
             'id' => 'nav_search_placeholder',
            'label' => __( 'Navbar Search placeholder text', 'genemy' ),
            'desc' => '',
            'std' => 'What are you looking for?',
            'type' => 'text',
            'section' => 'header_options',
            'condition' => 'header_search_display:is(on)',
            'operator' => 'and' 
        ),
        genemy_woo_cart_icon_option(),
        array(
             'id' => 'header_social_icons_display',
            'label' => __( 'Social Icons display', 'genemy' ),
            'desc' => '',
            'std' => 'off',
            'type' => 'on-off',
            'section' => 'header_options' 
        ),
        array(
             'id' => 'header_social_icons',
            'label' => __( 'Social Icons', 'genemy' ),
            'desc' => '',
            'std' => genemy_header_default_social_icons(),
            'type' => 'list-item',
            'section' => 'header_options',
            'condition' => 'header_social_icons_display:is(on)',
            'operator' => 'and',
            'settings' => array(
                 array(
                     'id' => 'icon_link',
                    'label' => __( 'Top bar Title', 'genemy' ),
                    'desc' => '',
                    'std' => array(
                         'icon' => 'fa-heart',
                        'input' => '#' 
                    ),
                    'type' => 'iconpicker_input' 
                ) 
            ) 
        ),
        array(
             'id' => 'header_button_display',
            'label' => __( 'Header button display', 'genemy' ),
            'desc' => '',
            'std' => 'off',
            'type' => 'on-off',
            'section' => 'header_options',
        ),
        array(
             'id' => 'header_button',
            'label' => __( 'header Button', 'genemy' ),
            'desc' => '',
            'std' => GenemyHeader::get_default_nav_buttons(),
            'type' => 'list-item',
            'section' => 'header_options',
            'condition' => 'header_button_display:is(on)',
            'operator' => 'and',
            'settings' => array(
                 array(
                     'id' => 'link',
                    'label' => __( 'link', 'genemy' ),
                    'desc' => '',
                    'std' => '#',
                    'type' => 'text' 
                ),
                array(
                     'id' => 'style',
                    'label' => 'Button style',
                    'std' => 'btn-default',
                    'type' => 'select',
                    'choices' => genemy_btn_style_options()
                ),
                array(
                     'id' => 'modal_button',
                    'label' => __( 'Enable modal button', 'genemy' ),
                    'desc' => '',
                    'std' => 'off',
                    'type' => 'on-off',
                ),
                array(
                     'id' => 'target',
                    'label' => 'Link target',
                    'std' => '_self',
                    'type' => 'select',
                    'condition' => 'modal_button:is(off)',
                    'choices' => array(
                         array(
                             'value' => '_self',
                            'label' => __( 'Same window','genemy' ),
                        ),
                        array(
                             'value' => '_blank',
                            'label' => __( 'New window','genemy' ),
                        ),
                        
                    ) 
                ), 
                
            ) 
        ),
        /*array(        
        'id' => 'header_menu_breakpoint',        
        'label' => __( 'Header menu breakpoint', 'genemy' ),        
        'desc' => 'in pixel',        
        'std' => '800',        
        'type' => 'text',
        'section' => 'header_options'         
        ),*/
        //genemy_langs_dropdown_option(),
        //genemy_woo_cart_icon_option(),         
    );
    return apply_filters( 'genemy_header_options', $options );
}
?>