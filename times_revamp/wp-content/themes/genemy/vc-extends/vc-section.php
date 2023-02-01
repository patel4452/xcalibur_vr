<?php
add_action( 'vc_after_init', 'genemy_vc_section_settings' );
function genemy_vc_section_settings( $return = 0 ) {
    $newParamData = array(      
        array(
            'group' => 'Genemy Settings',
            'type' => 'el_id',
            'heading' => __( 'Section ID', 'genemy' ),
            'param_name' => 'el_id',
            'description' => sprintf( __( 'Enter section ID (Note: make sure it is unique and valid according to <a href="%s" target="_blank">w3c specification</a>).', 'genemy' ), 'http://www.w3schools.com/tags/att_global_id.asp' ),
             'weight' => 123 
        ), 
        array(
             'group' => 'Genemy Settings',
            'type' => 'dropdown',
            'heading' => __( 'Section stretch', 'genemy' ),
            'param_name' => 'full_width',
            'value' => array(
                 __( 'Default', 'genemy' ) => 'container',
                __( 'Stretch section', 'genemy' ) => 'container-wide' 
            ),
            'description' => __( 'Select stretching options for section and content', 'genemy' ),
            'weight' => 122, 
            'edit_field_class' => 'vc_col-sm-8', 
        ),
        array(
            'type' => 'checkbox',
            'param_name' => 'enable_inner',
            'description' => __( 'Checked to setup section inner bg. You can change image in Design options', 'genemy' ),
            'value' => array( __( 'Enable section inner', 'genemy' ) => 'yes' ), 
            'group' => 'Genemy Settings',
            'edit_field_class' => 'vc_col-sm-4 m-top-20', 
        ),
        array(
            'group' => 'Genemy Settings',
            'type' => 'checkbox',
            'heading' => __( 'Enable hero section?', 'genemy' ),
            'param_name' => 'enable_hero',
            'description' => __( 'Checked to use this section as a Hero Background', 'genemy' ),
            'value' => array( __( 'Yes', 'genemy' ) => 'yes' ),    
            'edit_field_class' => 'vc_col-sm-8',   
        ),
        array(
             'type' => 'dropdown',
            'heading' => __( 'Choose a hero style', 'genemy' ),
            'param_name' => 'hero_id',
            'group' => 'Genemy Settings',
            'value' => genemy_vc_hero_options(),
            'description' => __( 'You need to add also hero element in this section, then it worked perfectly. Hero style select mean changes the default background, font size, spacing etc. of this section.', 'genemy' ),
            'std'  => '',
            'description' => '',
            'edit_field_class' => 'vc_col-sm-4', 
            'dependency' => array(
                 'element' => 'enable_hero',
                'not_empty' => true 
            ) 
        ),        
        array(
             'type' => 'dropdown',
            'heading' => __( 'Background', 'genemy' ),
            'param_name' => 'inner_bg_class',
            'group' => 'Section inner settings',
            'value' => genemy_vc_background_options(),
            'std' => 'bg-tra',
            'description' => '',
            'edit_field_class' => 'vc_col-sm-6',
            'dependency' => array(
                'element' => 'enable_inner',
                'value' => 'yes'
            )
        ),
        array(
             'type' => 'dropdown',
            'heading' => __( 'Section inner wide', 'genemy' ),
            'param_name' => 'inner_padding_class',
            'group' => 'Section inner settings',
            'value' => genemy_vc_padding_options(),
            'description' => __( 'Section top & bottom padding', 'genemy' ),  
            'edit_field_class' => 'vc_col-sm-6', 
            'dependency' => array(
                'element' => 'enable_inner',
                'value' => 'yes'
            )       
        ),
        array(
             'type' => 'dropdown',
            'heading' => __( 'Padding top', 'genemy' ),
            'param_name' => 'inner_padding_top',
            'group' => 'Section inner settings',
            'value' => genemy_vc_spacing_options('padding', 'top'),
            'edit_field_class' => 'vc_col-sm-6',
            'dependency' => array(
                'element' => 'enable_inner',
                'value' => 'yes'
            )
        ),
        array(
             'type' => 'dropdown',
            'heading' => __( 'Padding bottom', 'genemy' ),
            'param_name' => 'inner_padding_bottom',
            'group' => 'Section inner settings',
            'value' => genemy_vc_spacing_options('padding', 'bottom'),
            'edit_field_class' => 'vc_col-sm-6',
            'dependency' => array(
                'element' => 'enable_inner',
                'value' => 'yes'
            )
        ),        
        
        array(
             'type' => 'dropdown',
            'heading' => __( 'Margin top', 'genemy' ),
            'param_name' => 'inner_margin_top',
            'group' => 'Section inner settings',
            'value' => genemy_vc_spacing_options('margin', 'top'),
            'edit_field_class' => 'vc_col-sm-6',
            'dependency' => array(
                'element' => 'enable_inner',
                'value' => 'yes'
            )
        ),
        array(
             'type' => 'dropdown',
            'heading' => __( 'Margin bottom', 'genemy' ),
            'param_name' => 'inner_margin_bottom',
            'group' => 'Section inner settings',
            'value' => genemy_vc_spacing_options('margin', 'bottom'),
            'edit_field_class' => 'vc_col-sm-6',
            'dependency' => array(
                'element' => 'enable_inner',
                'value' => 'yes'
            )
        ),         
        array(
             'type' => 'dropdown',
            'heading' => __( 'Section top & bottom padding', 'genemy' ),
            'param_name' => 'padding_class',
            'group' => 'Genemy Settings',
            'value' => genemy_vc_padding_options(),
            'std'  => 'wide-60',
            'description' => '',
        ),
        array(
             'type' => 'dropdown',
            'heading' => __( 'Section Background', 'genemy' ),
            'param_name' => 'bg_class',
            'group' => 'Genemy Settings',
            'value' => genemy_vc_background_options(),
            'std' => 'bg-white',
            'description' => '',
            'edit_field_class' => 'vc_col-sm-8', 
        ),
        array(
            'type' => 'dropdown',
            'group' => 'Genemy Settings',
            'heading' => __( 'Background attachment', 'genemy' ),
            'param_name' => 'parallax_image_attachment',
            'std' => 'cover',
            'value' => array(
                 'Default' => 'inherit',
                'Fixed' => 'fixed',
                'Scroll' => 'scroll',
                'Local' => 'local',
                'Unset' => 'inset' 
            ),
            'edit_field_class' => 'vc_col-sm-4',
        ),
          array(
             'type' => 'dropdown',
            'heading' => __( 'Padding top', 'genemy' ),
            'param_name' => 'padding_top',
            'group' => 'Genemy Settings',
            'value' => genemy_vc_spacing_options('padding', 'top'),
            'edit_field_class' => 'vc_col-sm-6',  
            'dependency' => array(
                'element' => 'padding_class',
                'value' => array('')
            )          
        ),
        array(
             'type' => 'dropdown',
            'heading' => __( 'Padding bottom', 'genemy' ),
            'param_name' => 'padding_bottom',
            'group' => 'Genemy Settings',
            'value' => genemy_vc_spacing_options('padding', 'bottom'),
            'edit_field_class' => 'vc_col-sm-6',
            'dependency' => array(
                'element' => 'padding_class',
                'value' => array('')
            )            
        ),        
        array(
             'type' => 'dropdown',
            'heading' => __( 'Section wide', 'genemy' ),
            'param_name' => 'padding_class',
            'group' => 'Genemy Settings',
            'value' => genemy_vc_padding_options(),
            'std'  => 'wide-60',
            'description' => __( 'Section top & bottom padding', 'genemy' ),          
        ),
        array(
             'type' => 'dropdown',
            'heading' => __( 'Margin top', 'genemy' ),
            'param_name' => 'margin_top',
            'group' => 'Genemy Settings',
            'value' => genemy_vc_spacing_options('margin', 'top'),
            'edit_field_class' => 'vc_col-sm-6',
        ),        
        array(
             'type' => 'dropdown',
            'heading' => __( 'Margin bottom', 'genemy' ),
            'param_name' => 'margin_bottom',
            'group' => 'Genemy Settings',
            'value' => genemy_vc_spacing_options('margin', 'bottom'),
            'edit_field_class' => 'vc_col-sm-6',
        ),
        array(
             'type' => 'image_upload',
            'heading' => __( 'Image', 'genemy' ),
            'param_name' => 'parallax_image',
            'weight' => 119,
            'value' => GENEMY_URI . '/images/banner-1.jpg',
            'description' => __( 'Select image from media library.', 'genemy' ),
            'dependency' => array(
                 'element' => 'parallax',
                'not_empty' => true 
            ) 
        ),
        array(
            'group' => 'Parallax Settings',
            'type' => 'textfield',
            'heading' => __( 'Parallax background image opacity', 'genemy' ),
            'param_name' => 'parallax_image_opacity',
            'value' => '1',      
            'description' => __( 'Maximum value 1', 'genemy' ),
            'dependency' => array(
                 'element' => 'parallax',
                'not_empty' => true 
            ),
            'edit_field_class' => 'vc_col-sm-6',  
        ),
        array(
             'group' => 'Parallax Settings',
            'type' => 'dropdown',
            'heading' => __( 'Parallax width', 'genemy' ),
            'param_name' => 'parallax_width',
            'std' => '100%',
            'value' => array(
                 '100%' => '100%',
                '75%' => '75%',
                '50%' => '50%',
                '25%' => '25%' 
            ),
            'dependency' => array(
                 'element' => 'parallax',
                'not_empty' => true 
            ),
            'edit_field_class' => 'vc_col-sm-6',  
        ),
        array(
             'group' => 'Parallax Settings',
            'type' => 'dropdown',
            'heading' => __( 'Parallax background image size', 'genemy' ),
            'param_name' => 'parallax_image_size',
            'std' => 'cover',
            'value' => array(
                 'Cover' => 'cover',
                'Contain' => 'contain',
                'Auto' => 'auto',
                '25% auto' => '25% auto',
                '50% auto' => '50% auto',
                'auto 50%' => 'auto 50%',
                'auto 25%' => 'auto 25%' 
            ),
            'dependency' => array(
                 'element' => 'parallax',
                'not_empty' => true 
            ) ,
            'edit_field_class' => 'vc_col-sm-6', 
        ),
        array(
             'group' => 'Parallax Settings',
            'type' => 'dropdown',
            'heading' => __( 'Parallax background image repeat', 'genemy' ),
            'param_name' => 'parallax_image_repeat',
            'std' => 'cover',
            'value' => array(
                 'Default' => '',
                'No Repeat' => 'no-repeat',
                'Repeat' => 'repeat' 
            ),
            'dependency' => array(
                 'element' => 'parallax',
                'not_empty' => true 
            ) ,
            'edit_field_class' => 'vc_col-sm-6', 
        ),
        array(
             'group' => 'Parallax Settings',
            'type' => 'dropdown',
            'heading' => __( 'Parallax background image position', 'genemy' ),
            'param_name' => 'parallax_image_position',
            'std' => 'cover',
            'value' => array(
                 'Default' => '50% 0',
                'Center' => 'center',
                'Top center' => 'top center',
                'Bottom center' => 'bottom center',
                'Top left' => 'top left',
                'Bottom left' => 'bottom left',
                'Top right' => 'top right',
                'Bottom right' => 'bottom right' 
            ),
            'dependency' => array(
                 'element' => 'parallax',
                'not_empty' => true 
            ),
            'edit_field_class' => 'vc_col-sm-6',  
        ),
         
    );

    if( $return ) return $newParamData;

    foreach ( $newParamData as $key => $value ) {
        vc_update_shortcode_param( 'vc_section', $value );
    } //$newParamData as $key => $value
    $array = array(
             'group' => 'Genemy Settings',
            'type' => 'dropdown',
            'heading' => __( 'Column style', 'genemy' ),
            'param_name' => 'column_style',
            'std' => 'genemy-default',
            'value' => array(
                 'Default' => 'genemy-default',
                'Border separated' => 'border-separated-column',
                'No spacing in column' => 'no-spacing-column',
            ),
        );
    vc_update_shortcode_param( 'vc_row', $array );

    $array = array(
             'type' => 'dropdown',
            'heading' => __( 'Row Background', 'genemy' ),
            'param_name' => 'row_bg_class',
            'group' => 'Genemy Settings',
            'value' => genemy_vc_background_options(),
            'std' => 'bg-tra',
            'description' => '' 
        );
    vc_update_shortcode_param( 'vc_row', $array );
    vc_update_shortcode_param( 'vc_row_inner', $array );
    vc_update_shortcode_param( 'vc_column', $array );
    vc_update_shortcode_param( 'vc_column_inner', $array );
}

