<?php
/**
 * The VC Functions
 */
add_action( 'vc_before_init', 'genemy_pricing_table_shortcode_vc');
function genemy_pricing_table_shortcode_vc(  $return = false ) {
	$args = array(
			'icon' => 'genemy-icon',
			'name' => __('Pricing table', 'genemy'),
			'base' => 'genemy_pricing_table',
			'class' => 'genemy-vc',
			'category' => __('Genemy', 'genemy'),
			'params' => array(	
				array(
					'type' => 'checkbox',
					'heading' => __( 'Featured?', 'genemy' ),
					'param_name' => 'featured',
					'value' => array( __( 'Yes', 'genemy' ) => 'yes' ),
					'std' => '',
					'edit_field_class' => 'vc_col-sm-6',			
				),	
				array(
		            'type' => 'dropdown',
		            'heading' => __( 'Pricing button position', 'genemy' ),
		            'param_name' => 'button_position',
		            'value' => array(
		            	'After feature list' => 'after',
		            	'Before feature list' => 'before'
		            ),
		            'std' => 'after',
		            'description' => '',
		            'edit_field_class' => 'vc_col-sm-6',
		        ),
				array(
		            'type' => 'dropdown',
		            'heading' => __( 'Pricing background', 'genemy' ),
		            'param_name' => 'pricing_bg',
		            'value' => genemy_vc_background_options(),
		            'std' => 'bg-lightgrey',
		            'description' => '',
		            'edit_field_class' => 'vc_col-sm-6',
		            'dependency' => array( 'element' => 'featured','value' => 'yes' )
		        ),
				array(
		            'type' => 'dropdown',
		            'heading' => __( 'Pricing plan background', 'genemy' ),
		            'param_name' => 'plan_bg',
		            'value' => genemy_vc_background_options(),
		            'std' => 'bg-rose',
		            'description' => '',
		            'edit_field_class' => 'vc_col-sm-6',
		            'dependency' => array( 'element' => 'featured','value' => 'yes' )
		        ),						
            	array(
					'type' => 'textfield',
					'heading' => __('Title', 'genemy'),
					'param_name' => 'title',
					'value' => 'Personal Plan',
					'admin_label' => true,
				),
				array(
					'type' => 'textfield',
					'heading' => __('Price unit', 'genemy'),
					'param_name' => 'unit',
					'value' => '$',
					'edit_field_class' => 'vc_col-sm-4',
				),
				array(
					'type' => 'textfield',
					'heading' => __('Price', 'genemy'),
					'param_name' => 'price',
					'value' => '29',
					'admin_label' => true,
					'edit_field_class' => 'vc_col-sm-8',
				),
				array(
					'type' => 'textfield',
					'heading' => __('Validity', 'genemy'),
					'param_name' => 'validity',
					'value' => 'monthly',
					'admin_label' => true,
				),
				array(
					'type' => 'textarea_html',
					'heading' => __('Description', 'genemy'),
					'param_name' => 'content',
					'description' => '',
					'value' => '<ul class="features">
								<li><strong>10</strong> Users Tasks</li>
								<li><strong>5 GB</strong> of Storage</li>
								<li><strong>10 mySQL</strong> Database</li>
								<li><strong>9/5</strong> Support</li>									
							</ul>',
				),
				array(
					'type' => 'textfield',
					'heading' => __('Button link text', 'genemy'),
					'param_name' => 'link_title',
					'description' => 'Leave blank to avoid button',
					'value' => 'Get started now',
					'edit_field_class' => 'vc_col-sm-3',
				),
				array(
					'type' => 'textfield',
					'heading' => __('Button url', 'genemy'),
					'param_name' => 'link',
					'value' => '#',
					'edit_field_class' => 'vc_col-sm-6',
				),
				array(
		            'type' => 'dropdown',
		            'heading' => __( 'Button style', 'genemy' ),
		            'param_name' => 'button_style',
		            'std' => 'btn-tra-black',
		            'value' => genemy_vc_btn_style(),
		            'edit_field_class' => 'vc_col-sm-3',
		            'admin_label' => true 
		        ),
				vc_map_add_css_animation(), 
        		genemy_vc_animation_duration(), 
				
			)
		);

	$args = apply_filters( 'genemy_vc_map_filter', $args, $args['base'] );
    if( $return ) {
        return genemy_vc_get_params_value($args);
    }else{
        vc_map( $args );
    }
	
}
class WPBakeryShortCode_Genemy_pricing_table extends WPBakeryShortCode {
}
