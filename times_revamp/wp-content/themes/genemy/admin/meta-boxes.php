<?php
/**
 * Initialize the meta boxes. 
 */

add_action( 'admin_init', 'genemy_general_meta_boxes' );
if( !function_exists('genemy_general_meta_boxes') ):
function genemy_general_meta_boxes() {
    $screen = get_current_screen();   

  $my_meta_box = array(
    'id'        => 'genemy_settings_box',
    'title'     => 'Genemy settings',
    'desc'      => '',
    'pages'     => array( 'page' ),
    'context'   => 'normal',
    'priority'  => 'high',
    'fields'    => array(  
        array(
            'id'          => 'title_settings',
            'label'       => 'Header settings',
            'desc'        => '',
            'std'         => '',
            'type'        => 'tab',
            'class'       => '',
      ),     

      array(
        'id'          => 'title_display',
        'label'       => 'Title display',
        'desc'        => 'Title off only work for page.',
        'std'         => ot_get_option('title_display', 'on'),
        'type'        => 'on-off',
        'class'       => '',
        'choices'     => array()
      ),

      array(
        'id'          => 'title',
        'label'       => 'Title',
        'desc'        => 'Optional, Leave blank to show the main title.',
        'std'         => '',
        'type'        => 'text',
        'class'       => '',
        'condition'   => 'title_display:is(on)',
        'choices'     => array()
      ),

      array(
        'id'          => 'subtitle',
        'label'       => 'Sub-Title',
        'desc'        => 'Optional, Leave blank to avoid.',
        'std'         => '',
        'type'        => 'text',
        'class'       => '',
        'condition'   => 'title_display:is(on)',
        'choices'     => array()
      ),
      array(
             'id' => 'breadcrumb_display_in_page',
            'label' => __( 'Header breadcrumb display', 'genemy' ),
            'desc' => '',
            'std' => 'off',
            'type' => 'on-off',
            'condition'   => 'title_display:is(on)',
        ),
      array(

        'id'          => 'header_bg',
        'label'       => __('Header Background' , 'genemy' ),
        'desc'        => '',
        'std'         => array(
                            'background-color' => '',
                            'background-attachment' => 'fixed',
                            'background-image' => ot_get_option('header_bg_img', GenemyHeader::get_default_header_image()),
                            'background-size' => 'cover'
                        ),
        'type'        => 'background',
        'class'       => '',
        'condition'   => 'title_display:is(on)',
        ), 

        array(
            'id'          => 'shortcode',
            'label'       => 'Shortcode',
            'desc'        => 'Use shortcode here',
            'std'         => '',
            'type'        => 'text',
            'class'       => '',
            'condition'   => 'title_display:is(off)',
        ), 
    )

  );

    



    if ( genemy_get_current_post_type() == 'page' ) {
        $page_metaboxes =    array(
        /*array(
             'id' => 'breadcrumb_display',
            'label' => __( 'Breadcrumb display', 'genemy' ),
            'desc' => '',
            'std' => 'on',
            'type' => 'on-off',
        ),*/
        array(
                'id'          => 'layout_settings',
                'label'       => 'Layout settings',
                'desc'        => '',
                'std'         => '',
                'type'        => 'tab',
                'class'       => '',
          ),  
          array(
            'id'          => 'container_spacing',
            'label'       => 'Content area spacing',
            'desc'        => 'Top & bottom padding',
            'std'         => 'p-top-bottom-100',
            'type'        => 'select',
            'class'       => '',
            'choices'     => genemy_spacing_options()
          ),         
        array(
        'id'          => 'page_layout',
        'label'       => __( 'Default layout', 'genemy' ),
        'desc'        => '',
        'std'         => 'full',
        'type'        => 'radio-image',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'full',
            'label'       => __( 'Full width', 'genemy' ),
            'src'         => OT_URL . '/assets/images/layout/full-width.png'
          ),

          array(
            'value'       => 'ls',
            'label'       => __( 'Left sidebar', 'genemy' ),
            'src'         => OT_URL . '/assets/images/layout/left-sidebar.png'
          ),

          array(
            'value'       => 'rs',
            'label'       => __( 'Right sidebar', 'genemy' ),
            'src'         => OT_URL . '/assets/images/layout/right-sidebar.png'
          ),
        )

      ),

      array(

        'id'          => 'sidebar',
        'label'       => 'Select sidebar',
        'desc'        => '',
        'std'         => 'sidebar-page',
        'type'        => 'sidebar-select',
        'class'       => '',
        'choices'     => array(),
        'operator'    => 'and',
        'condition'   => 'page_layout:not(full)'

      ),

        );
        $my_meta_box['fields'] = array_merge($my_meta_box['fields'], $page_metaboxes);

    }

    ot_register_meta_box( $my_meta_box );

    $my_meta_box = array(
    'id'        => 'genemy_settings_box',
    'title'     => __('Genemy Portfolio settings', 'genemy'),
    'desc'      => '',
    'pages'     => array( 'portfolio' ),
    'context'   => 'normal',
    'priority'  => 'high',
    'fields'    => array( 
        array(
            'id'          => 'Project_info_display_settings',
            'label'       => __( 'Single portfolio display', 'genemy' ),
            'type'        => 'tab',
        ),
        array(
            'id'          => 'project_vc_display',
            'label'       => __( 'Single portfolio display with visual composer elements', 'genemy'),
            'desc'        => __( 'ON to force hide all default information display in display page.', 'genemy'),
            'std'         => 'off',
            'type'        => 'on-off',
        ), 
        array(
            'id'          => 'project_image_display',
            'label'       => __( 'Project image display', 'genemy'),
            'desc'        => __( 'Off to hide Portfolio image in single portfolio page', 'genemy'),
            'std'         => 'on',
            'type'        => 'on-off',
        ), 
        array(
            'id'          => 'project_info_display',
            'label'       => __( 'Project informations display', 'genemy'),
            'desc'        => __( 'Off to hide Portfolio informations in single portfolio page', 'genemy'),
            'std'         => 'on',
            'type'        => 'on-off',
        ), 
        array(
            'id'          => 'project_cat_display',
            'label'       => __( 'Project category display', 'genemy'),
            'desc'        => __( 'Off to hide Portfolio category in single portfolio page', 'genemy'),
            'std'         => 'on',
            'type'        => 'on-off',
        ),
        array(
            'id'          => 'project_share_display',
            'label'       => __( 'Project share icons display', 'genemy'),
            'desc'        => __( 'Off to hide Portfolio sharing options in single portfolio page', 'genemy'),
            'std'         => 'on',
            'type'        => 'on-off',
        ), 
        array(
             'id' => 'portfolio_button_display',
            'label' => __( 'Portfolio button display', 'genemy' ),
            'desc' => '',
            'std' => 'off',
            'type' => 'on-off',
            'section' => 'header_options',
        ),        
        array(
            'id'          => 'Project_info_settings',
            'label'       => __( 'Project informations', 'genemy' ),
            'type'        => 'tab',
          ),
         array(
            'id'          => 'portfolio_infos_title',
            'label'       => __('Portfolio Informations Title', 'genemy' ),
            'std'         => 'Project Info:',
            'type'        => 'text',
            'class'       => '',
          ),
          array(
            'id'          => 'portfolio_infos',
            'label'       => __('Portfolio Informations', 'genemy' ),
            'std'        => array(
                    array(
                            'title' => 'Client:',
                            'desc' => 'Jthemes',
                            'linkable' => 'off',
                            'url' => '#',
                            'target' => '_self',
                        ),
                    array(
                            'title' => 'Date:',
                            'desc' => '2018-08-10',
                            'linkable' => 'off',
                            'url' => '#',
                            'target' => '_self',
                        ),  
                    array(
                            'title' => 'Tags:',
                            'desc' => 'Graphics, Illustration',
                            'linkable' => 'off',
                            'url' => '#',
                            'target' => '_self',
                        ), 
                    array(
                            'title' => 'Open Website:',
                            'desc' => 'www.website.com',
                            'linkable' => 'off',
                            'url' => '#',
                            'target' => '_self',
                        ),                     
                ),
            'type'        => 'list-item',
            'settings'    => array(
                    array(
                        'id'          => 'desc',
                        'label'       => __('Short description','genemy' ),
                        'type'        => 'text',
                      ),
                    array(
                        'id'          => 'linkable',
                        'label'       => __( 'Is this information will be linkable?', 'genemy'),
                        'std'         => 'off',
                        'type'        => 'on-off',
                    ),
                    array(
                        'id'          => 'url',
                        'label'       => __('URL','genemy' ),
                        'type'        => 'text',
                        'std'         => '#',
                        'condition'   => 'linkable:is(on)'
                      ),
                    array(
                         'id' => 'target',
                        'label' => 'Link target',
                        'std' => '_self',
                        'type' => 'select',
                        'condition'   => 'linkable:is(on)',
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
                ),  
          ),
          array(
            'id'          => 'category_title',
            'label'       => __('Category Title', 'genemy' ),
            'std'         => 'Category:',
            'type'        => 'text',
            'class'       => '',
            'choices'     => array()
          ),
          array(
            'id'          => 'share_title',
            'label'       => __('Share Title', 'genemy' ),
            'std'         => 'Share Project:',
            'type'        => 'text',
            'class'       => '',
            'choices'     => array()
          ),          
          array(
             'id' => 'portfolio_button',
            'label' => __( 'Portfolio Button', 'genemy' ),
            'desc' => '',
            'std' => GenemyHeader::get_default_portfolio_buttons(),
            'type' => 'list-item',
            'condition' => '',
            'operator' => 'and',
            'settings' => array(
                 array(
                     'id' => 'button_url',
                    'label' => __( 'link', 'genemy' ),
                    'desc' => '',
                    'std' => '#',
                    'type' => 'text' 
                ),
                array(
                     'id' => 'button_style',
                    'label' => 'Button style',
                    'std' => 'btn-default',
                    'type' => 'select',
                    'choices' => genemy_btn_style_options()
                ),
                array(
                     'id' => 'button_target',
                    'label' => 'Link target',
                    'std' => '_self',
                    'type' => 'select',
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


        )
    );
    ot_register_meta_box( $my_meta_box );

    $my_meta_box = array(
        'id'        => 'genemy_team_settings_box',
        'title'     => __('Genemy Team settings', 'genemy'),
        'desc'      => '',
        'pages'     => array( 'team' ),
        'context'   => 'normal',
        'priority'  => 'high',
        'fields'    => array(  
             array(
                'id'          => 'title_settings',
                'label'       => __( 'Header settings', 'genemy'),
                'desc'        => '',
                'std'         => '',
                'type'        => 'tab',
                'class'       => '',
              ),     
              array(
                'id'          => 'designation',
                'label'       => __( 'Designation', 'genemy'),
                'std'         => '',
                'type'        => 'text',
                'desc'        => __( 'Example: CEo & Finance Manager ', 'genemy'),
              ),
              array(
                'id'          => 'member_info',
                'label'       => __( 'Team member Information', 'genemy'),
                'std'        => array(
                        array(
                                'title' => __( 'Phone number', 'genemy'),
                                'linkable' => 'on',
                                'link' => 'tel:+1 888-456-7895',
                                'icon_desc' => array('icon' => 'fa-phone', 'input' => ' +1 888-456-7895')
                            ),
                        array(
                                'title' => __( 'Email Address', 'genemy'),
                                'linkable' => 'on',
                                'link' => 'mailto:info@themeperch.net',
                                'icon_desc' => array('icon' => 'fa-envelope', 'input' => 'info@genemylanding.net')
                            ),
                        array(
                                'title' => __( 'Address', 'genemy'),
                                'linkable' => 'on',
                                'link' => '#',
                                'icon_desc' => array('icon' => 'fa-map-marker', 'input' => '70 W. Madison Street, Ste. 1400 Chicago, IL 60602, United States')
                            ),
                        
                    ),
                'type'        => 'list-item',
                'settings'    => array(
                        array(
                            'id'          => 'linkable',
                            'label'       => __( 'Is this information will be linkable?', 'genemy'),
                            'std'         => 'on',
                            'type'        => 'on-off',
                        ),
                        array(
                            'id'          => 'link',
                            'label'       => 'Link',
                            'std'         => '#',
                            'type'        => 'text',
                            'condition' => 'linkable:is(on)'
                          ),
                        array(
                            'id'          => 'icon_desc',
                            'label'       => __( 'Icon & description', 'genemy'),
                            'type'        => 'iconpicker_input',
                          ),
                    ),  
              ),
              array(
                'id'          => 'member_social_links_display',
                'label'       => __( 'Member Social link display', 'genemy'),
                'std'         => 'on',
                'type'        => 'on-off',
              ),
              array(
                'id'          => 'social_links',
                'label'       => __( 'Team member social links', 'genemy'),
                'std'        => array(
                        array(
                                'title' => 'Facebook',
                                'icon_link' => array('icon' => 'fa-facebook-f', 'input' => '#')
                            ),
                        array(
                                'title' => 'Twitter',
                                'icon_link' => array('icon' => 'fa-twitter', 'input' => '#')
                            ),
                        array(
                                'title' => 'Linkedin',
                                'icon_link' => array('icon' => 'fa-linkedin-in', 'input' => '#')
                            ),
                    ),
                'type'        => 'list-item',
                'condition' => 'member_social_links_display:is(on)',
                'settings'    => array(
                        array(
                            'id'          => 'icon_link',
                            'label'       => __( 'Icon & link', 'genemy'),
                            'type'        => 'iconpicker_input',
                          ),
                    ),  
              ),
              
              


            )
        );

      ot_register_meta_box( $my_meta_box );

      $my_meta_box = array(
        'id'        => 'genemy_post_settings_box',
        'title'     => __('Post settings', 'genemy'),
        'desc'      => '',
        'pages'     => array( 'post' ),
        'context'   => 'normal',
        'priority'  => 'high',
        'fields'    => array(
            array(
                'id'          => 'video_popup_enable',
                'label'       => __( 'Enable video popup in featured image', 'genemy'),
                'std'         => 'on',
                'type'        => 'on-off',
            ),
            array(
                'id'          => 'video_url',
                'label'       => __( 'Is this information will be linkable?', 'genemy'),
                'std'         => 'https://www.youtube.com/embed/SZEflIVnhH8',
                'type'        => 'text',
                'desc' => 'URL format: https://www.youtube.com/embed/SZEflIVnhH8',
                'condition' => 'video_popup_enable:is(on)'
            ),
        ),

      );

      ot_register_meta_box( $my_meta_box );


}
endif;

add_action( 'portfolio_category_add_form_fields', 'genemy_portfolio_category_add_form_fields', 10, 2 );
function genemy_portfolio_category_add_form_fields($taxonomy) {   

    ?><div class="form-field term-group">
        <label for="custom-link"><?php _e('Custom Category link', 'genemy'); ?></label>
        <input name="custom-link" id="custom-link" value="" size="40" type="text">
        <p>Leave blank to avoid custom link. Default term link will be used.</p>
    </div><?php
}

add_action( 'created_portfolio_category', 'genemy_save_portfolio_category_meta', 10, 2 );
function genemy_save_portfolio_category_meta( $term_id, $tt_id ){

    if( isset( $_POST['custom-link'] ) && '' !== $_POST['custom-link'] ){
        $link = esc_url( $_POST['custom-link'] );
        add_term_meta( $term_id, 'custom-link', $link, true );
    }

}

add_action( 'portfolio_category_edit_form_fields', 'genemy_portfolio_category_edit_form_fields', 10, 2 );
function genemy_portfolio_category_edit_form_fields( $term, $taxonomy ){

    // get current group
    $link = get_term_meta( $term->term_id, 'custom-link', true );                

    ?><tr class="form-field term-group-wrap">
        <th scope="row"><label for="custom-link"><?php _e('Custom Category link', 'genemy'); ?></label></th>
        <td><input name="custom-link" id="custom-link" value="<?php echo esc_url($link) ?>" size="40" type="text">
       </td>
    </tr><?php
}

add_action( 'edited_portfolio_category', 'genemy_edited_portfolio_category', 10, 2 );
function genemy_edited_portfolio_category( $term_id, $tt_id ){

    if( isset( $_POST['custom-link'] ) && '' !== $_POST['custom-link'] ){
        $link = esc_url( $_POST['custom-link'] );
        update_term_meta( $term_id, 'custom-link', $link );
    }
}