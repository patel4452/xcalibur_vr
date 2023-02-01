<?php
add_action( 'vc_after_init', 'genemy_hero_image_shortcode_vc' );
function genemy_hero_image_shortcode_vc( $return = false ) {
	$args = array(
		'name' => __( 'Single Image', 'genemy' ),
		'base' => 'genemy_single_image',
		'icon' => 'genemy-icon',
		'category' => __( 'Genemy', 'genemy' ),
		'description' => __( 'Simple image with CSS animation', 'genemy' ),
		'params' => array(			
			array(
				'type' => 'dropdown',
				'heading' => __( 'Image source', 'genemy' ),
				'param_name' => 'source',
				'std' => 'external_link',
				'value' => array(
					__( 'Media library', 'genemy' ) => 'media_library',
					__( 'External link', 'genemy' ) => 'external_link',
					__( 'Featured Image', 'genemy' ) => 'featured_image',
				),
				'description' => __( 'Select image source.', 'genemy' ),
			),
			array(
				'type' => 'attach_image',
				'heading' => __( 'Image', 'genemy' ),
				'param_name' => 'image',
				'value' => '',
				'description' => __( 'Select image from media library.', 'genemy' ),
				'dependency' => array(
					'element' => 'source',
					'value' => 'media_library',
				),
				'admin_label' => true,
			),
			array(
				'type' => 'image_upload',
				'heading' => __( 'External link', 'genemy' ),
				'param_name' => 'custom_src',
				'value' => GENEMY_URI. '/images/image-01.png',
				'description' => __( 'Select external link.', 'genemy' ),
				'dependency' => array(
					'element' => 'source',
					'value' => 'external_link',
				),
				'admin_label' => true,
			),
			array(
				'type' => 'dropdown',
				'heading' => __( 'Image size', 'genemy' ),
				'param_name' => 'img_size',
				'std' => 'full',
				'value' => array_flip( genemy_get_image_sizes_Arr() ),
				'description' => __( 'Enter image size (Example: "thumbnail", "medium", "large", "full" or other sizes defined by theme). Alternatively enter size in pixels (Example: 200x100 (Width x Height)).', 'genemy' ),
				'dependency' => array(
					'element' => 'source',
					'value' => array(
						'media_library',
						'featured_image',
					),
				),
			),
			array(
				'type' => 'textfield',
				'heading' => __( 'Image size', 'genemy' ),
				'param_name' => 'external_img_size',
				'value' => '',
				'description' => __( 'Enter image size in pixels. Example: 200x100 (Width x Height).', 'genemy' ),
				'dependency' => array(
					'element' => 'source',
					'value' => 'external_link',
				),
			),
			array(
				'type' => 'textfield',
				'heading' => __( 'Caption', 'genemy' ),
				'param_name' => 'caption',
				'description' => __( 'Enter text for image caption.', 'genemy' ),
				'dependency' => array(
					'element' => 'source',
					'value' => 'external_link',
				),
			),
			array(
				'type' => 'checkbox',
				'heading' => __( 'Add caption?', 'genemy' ),
				'param_name' => 'add_caption',
				'description' => __( 'Add image caption.', 'genemy' ),
				'value' => array( __( 'Yes', 'genemy' ) => 'yes' ),
				'dependency' => array(
					'element' => 'source',
					'value' => array(
						'media_library',
						'featured_image',
					),
				),
			),
			array(
				'type' => 'dropdown',
				'heading' => __( 'Image alignment', 'genemy' ),
				'param_name' => 'alignment',
				'value' => array(
					__( 'Left', 'genemy' ) => 'left',
					__( 'Right', 'genemy' ) => 'right',
					__( 'Center', 'genemy' ) => 'center',
				),
				'description' => __( 'Select image alignment.', 'genemy' ),
			),
			array(
				'type' => 'dropdown',
				'heading' => __( 'Image style', 'genemy' ),
				'param_name' => 'style',
				'value' => vc_get_shared( 'single image styles' ),
				'description' => __( 'Select image display style.', 'genemy' ),
				'dependency' => array(
					'element' => 'source',
					'value' => array(
						'media_library',
						'featured_image',
					),
				),
			),
			array(
				'type' => 'dropdown',
				'heading' => __( 'Image style', 'genemy' ),
				'param_name' => 'external_style',
				'value' => vc_get_shared( 'single image external styles' ),
				'description' => __( 'Select image display style.', 'genemy' ),
				'dependency' => array(
					'element' => 'source',
					'value' => 'external_link',
				),
			),
			array(
				'type' => 'dropdown',
				'heading' => __( 'Border color', 'genemy' ),
				'param_name' => 'border_color',
				'value' => vc_get_shared( 'colors' ),
				'std' => 'grey',
				'dependency' => array(
					'element' => 'style',
					'value' => array(
						'vc_box_border',
						'vc_box_border_circle',
						'vc_box_outline',
						'vc_box_outline_circle',
						'vc_box_border_circle_2',
						'vc_box_outline_circle_2',
					),
				),
				'description' => __( 'Border color.', 'genemy' ),
				'param_holder_class' => 'vc_colored-dropdown',
			),
			array(
				'type' => 'dropdown',
				'heading' => __( 'Border color', 'genemy' ),
				'param_name' => 'external_border_color',
				'value' => vc_get_shared( 'colors' ),
				'std' => 'grey',
				'dependency' => array(
					'element' => 'external_style',
					'value' => array(
						'vc_box_border',
						'vc_box_border_circle',
						'vc_box_outline',
						'vc_box_outline_circle',
					),
				),
				'description' => __( 'Border color.', 'genemy' ),
				'param_holder_class' => 'vc_colored-dropdown',
			),
			array(
                'type' => 'checkbox',
                'heading' => __( 'Force image to overflow container?', 'genemy' ),
                'param_name' => 'max_width',
                'description' => __( 'Checked to force image to overflow container.', 'genemy' ),
                'value' => array( __( 'Yes', 'genemy' ) => 'yes' ),  
                'admin_label' => true,
            ),
            array(
                'type' => 'checkbox',
                'heading' => __( 'Display image as background image', 'genemy' ),
                'param_name' => 'image_as_bg',
                'description' => __( 'Checked to force image to overflow container.', 'genemy' ),
                'value' => array( __( 'Yes', 'genemy' ) => 'yes' ),  
                'admin_label' => true,
            ),
			array(
				'type' => 'dropdown',
				'heading' => __( 'On click action', 'genemy' ),
				'param_name' => 'onclick',
				'value' => array(
					__( 'None', 'genemy' ) => '',
					__( 'Link to large image', 'genemy' ) => 'img_link_large',
					__( 'Open prettyPhoto', 'genemy' ) => 'link_image',
					__( 'Open custom link', 'genemy' ) => 'custom_link',
					__( 'Zoom', 'genemy' ) => 'zoom',
					__( 'Video', 'genemy' ) => 'video',
				),
				'description' => __( 'Select action for click action.', 'genemy' ),
				'std' => '',
				'group' => __('On click action', 'genemy'),
			),
			array(
				'type' => 'href',
				'heading' => __( 'Video link', 'genemy' ),
				'param_name' => 'video_link',
				'value' => 'https://www.youtube.com/embed/SZEflIVnhH8',
				'description' => __( 'Enter URL if you want this image to have a popup video link', 'genemy' ),
				'dependency' => array(
					'element' => 'onclick',
					'value' => 'video',
				),
				'group' => __('On click action', 'genemy'),
			),
			array(
	             'type' => 'dropdown',
	            'heading' => __( 'Video icon color', 'genemy' ),
	            'param_name' => 'icon_class',	            
	            'value' => genemy_vc_global_color_options(),
	            'std' => 'preset',
	            'description' => '',
	            'dependency' => array(
					'element' => 'onclick',
					'value' => 'video',
				), 
				'group' => __('On click action', 'genemy'),
	        ),
			array(
				'type' => 'href',
				'heading' => __( 'Image link', 'genemy' ),
				'param_name' => 'link',
				'description' => __( 'Enter URL if you want this image to have a link (Note: parameters like "mailto:" are also accepted).', 'genemy' ),
				'dependency' => array(
					'element' => 'onclick',
					'value' => 'custom_link',
				),
				'group' => __('On click action', 'genemy'),
			),
			array(
				'type' => 'dropdown',
				'heading' => __( 'Link Target', 'genemy' ),
				'param_name' => 'img_link_target',
				'value' => genemy_target_param_list(),
				'dependency' => array(
					'element' => 'onclick',
					'value' => array(
						'custom_link',
						'img_link_large',
					),
				),
				'group' => __('On click action', 'genemy'),
			),
			genemy_vc_animation_type(),
			array(
				'type' => 'el_id',
				'heading' => __( 'Element ID', 'genemy' ),
				'param_name' => 'el_id',
				'description' => sprintf( __( 'Enter element ID (Note: make sure it is unique and valid according to <a href="%s" target="_blank">w3c specification</a>).', 'genemy' ), 'http://www.w3schools.com/tags/att_global_id.asp' ),
			),
			array(
				'type' => 'textfield',
				'heading' => __( 'Extra class name', 'genemy' ),
				'param_name' => 'el_class',
				'value' => '',
				'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'genemy' ),
			),
			array(
				'type' => 'css_editor',
				'heading' => __( 'CSS box', 'genemy' ),
				'param_name' => 'css',
				'group' => __( 'Design Options', 'genemy' ),
			),
			// backward compatibility. since 4.6
			array(
				'type' => 'hidden',
				'param_name' => 'img_link_large',
			),
		),
	);

	$args = apply_filters( 'genemy_vc_map_filter', $args, $args['base'] );
    if( $return ) {
        return genemy_vc_get_params_value($args);
    }else{
        vc_map( $args );
    }
	
	$newParamData = $args['params'];

 	foreach ( $newParamData as $key => $value ) {
        vc_update_shortcode_param( 'vc_single_image', $value );
    } //$newParamData as $key => $value

    $settings = array (	 
	  'category' => __( 'Genemy', 'genemy' ),
	);
	vc_map_update( 'vc_single_image', $settings );
}