<?php
// Register Style
function genemy_admin_styles( ) {
    wp_enqueue_style( 'genemy-admin-style', GENEMY_URI . '/admin/assets/css/style.css', false, '1.0.1.6', 'all' );
    wp_enqueue_style( 'tonicons' );
    wp_enqueue_style( 'flaticon' );
	wp_enqueue_style( 'fontawesome' );
}
// Hook into the 'admin_enqueue_scripts' action
add_action( 'admin_enqueue_scripts', 'genemy_admin_styles' );
// Register Script
function genemy_admin_scripts( ) {
    wp_enqueue_media();
    wp_enqueue_script( 'v4-shims', GENEMY_URI .'/js/v4-shims.js', array( 'jquery' ), '1.0', true ); 
    wp_enqueue_script( 'perch-ui', GENEMY_URI . '/admin/assets/js/perch-ui.js', array( 'jquery' ), '1.0.0.1', true ); 
    wp_register_script( 'genemy-scripts', GENEMY_URI . '/admin/assets/js/scripts.js', array(
         'jquery' 
    ), '1.0.9', false );
    wp_enqueue_script( 'genemy-scripts' );
}
// Hook into the 'admin_enqueue_scripts' action
add_action( 'admin_enqueue_scripts', 'genemy_admin_scripts' );

function genemy_admin_editor_dynamic_css() {    
    wp_add_inline_style( 'genemy-admin-style', genemy_dynamic_general_style_css() );  
}
add_action( 'admin_enqueue_scripts', 'genemy_admin_editor_dynamic_css' );