<?php
/**
 * Initialize the meta boxes. 
 */

add_action( 'admin_init', 'genemy_general_onepage_meta_boxes' );
if( !function_exists('genemy_general_onepage_meta_boxes') ):
function genemy_general_onepage_meta_boxes() {
    $screen = get_current_screen(); 
    $navarr = array(
            array(
                 'id' => 'nav_general_option_tab',
                'label' => __( 'General settings', 'genemy' ),
                'desc' => __( 'Display social Icon or Buttons', 'genemy' ),
                'type' => 'tab',
                'section' => 'header_options',
                //'class' => 'half-column-size', 
            ),
            array(
                'id' => 'one_page_wp_nav',
                'label' => __('Select Nav menu', 'genemy'),
                'desc' => '<a href="' . admin_url( 'nav-menus.php' ) . '" class="nav-link">' . __( 'Add a menu', 'genemy' ) . '</a>',
                'std' => '',
                'type' => 'select',
                'choices' => genemy_get_terms_choices('nav_menu')
            ),
        );  

      $my_meta_box = array(
        'id'        => 'genemy_onepage_sttings_boxes',
        'title'     => __('Landing Page Navbar Settings', 'genemy'),
        'desc'      => '',
        'pages'     => array( 'page' ),
        'context'   => 'normal',
        'priority'  => 'high',
        'fields'    =>  array_merge($navarr, genemy_header_options())

      );
      ot_register_meta_box( $my_meta_box );

      $my_meta_box = array(
        'id'        => 'genemy_onepage_footer_sttings_boxes',
        'title'     => __('Landing Page footer Settings', 'genemy'),
        'desc'      => '',
        'pages'     => array( 'page' ),
        'context'   => 'normal',
        'priority'  => 'high',
        'fields'    => array(
            array(
                 'id' => 'onepage_footer_display',
                'label' => __( 'Footer display', 'genemy' ),
                'type' => 'on-off',
                'std' => 'on',
                //'class' => 'half-column-size', 
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
                'id' => 'footer_bg_style',
                'label' => __('Footer background style', 'genemy'),
                'desc' => '',
                'std' => '',
                'type' => 'select',
                'choices' => array(           
                    array( 'label' => 'Transparent', 'value' => '' ),
                    array( 'label' => 'Light', 'value' => 'bg-light' ),
                    array( 'label' => 'Grey', 'value' => 'bg-grey' ),
                    array( 'label' => 'Dark', 'value' => 'bg-dark white-color' ),                    
               
                )
            ),
        )

      );
      ot_register_meta_box( $my_meta_box );

}
endif;