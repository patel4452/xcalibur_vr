<?php
add_action( 'vc_after_init', 'genemy_vc_tta_tabs_settings' );
function genemy_vc_tta_tabs_settings( ) {
	$value = array(
			'type' => 'dropdown',
			'param_name' => 'style',
			'value' => array(
				'Genemy style1' => 'genemy',
				'Genemy style2' => 'genemy-style2',
				__( 'Classic', 'genemy' ) => 'classic',
				__( 'Modern', 'genemy' ) => 'modern',
				__( 'Flat', 'genemy' ) => 'flat',
				__( 'Outline', 'genemy' ) => 'outline',
			),
			'heading' => __( 'Style', 'genemy' ),
			'description' => __( 'Select tabs display style.', 'genemy' ),
		);
	vc_update_shortcode_param( 'vc_tta_tabs', $value );
}