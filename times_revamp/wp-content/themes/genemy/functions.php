<?php
define( 'GENEMY_VERSION', '1.4.8' );
define( 'GENEMY_URI', get_template_directory_uri() );
define( 'GENEMY_DIR', get_template_directory() );

// Set content width value based on the theme's design
if ( ! isset( $content_width ) )
	$content_width = 1170;
	

if ( ! function_exists('genemy_theme_features') ) {
// Register Theme Features
function genemy_theme_features()  {

	// Add theme support for Automatic Feed Links
	add_theme_support( 'automatic-feed-links' );

	// Add theme support for Post Formats
	add_theme_support( 'post-formats', array( 'video' ) );

	// Add theme support for Featured Images
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'genemy-800x400-crop', 800, 400, true );
	add_image_size( 'genemy-700x700-crop', 700, 700, true );
	add_image_size( 'genemy-600x600-crop', 600, 600, true );
	add_image_size( 'genemy-600x--nocrop', 600, '', false );
	add_image_size( 'genemy-500x--nocrop', 500, '', false );	
	add_image_size( 'genemy-400x400-crop', 400, 400, true );	
	add_image_size( 'genemy-400x500-crop', 400, 500, true );	
	add_image_size( 'genemy-350x270-crop', 350, 270, true );	
	add_image_size( 'genemy-400x--nocrop', 400, '', false );		
	add_image_size( 'genemy-150x150-crop', 150, 150, true );


	// add theme support for woocommerce
	add_theme_support( 'woocommerce' );


	 // Set custom thumbnail dimensions
	set_post_thumbnail_size( 830, 540, true );

	// Add theme support for Custom Background

	$background_args = array(
		'default-color'          => '#fff',
		'default-image'          => '',
		'default-repeat'         => '',
		'default-position-x'     => ''
	);

	//add_theme_support( 'custom-background', $background_args );


	// Add theme support for HTML5 Semantic Markup
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );


	// Add theme support for document Title tag
	add_theme_support( 'title-tag' );

	// Add theme support for custom CSS in the TinyMCE visual editor
	add_editor_style( 'css/editor-style.css', genemy_fonts_url(), 'css/flaticon.css' );

	// Add theme support for Translation
	load_theme_textdomain( 'genemy', get_template_directory() . '/languages' );	

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Add support for Block Styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );

	// Add support for editor styles.
	add_theme_support( 'editor-styles' );

	// Add support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );

}

add_action( 'after_setup_theme', 'genemy_theme_features' );
}



if ( !function_exists( 'genemy_navigation_menus' ) ) {
	// Register Navigation Menus
	function genemy_navigation_menus() {
		$locations = array(
			'primary' => __( 'Header Menu', 'genemy' )
		);
		register_nav_menus( $locations );
	}
	add_action( 'init', 'genemy_navigation_menus' );

} //!function_exists( 'genemy_navigation_menus' )

function genemy_default_color(){
	return 'rose';
}

add_filter( 'perch_modules/current_theme', 'genemy_current_theme_name' );
function genemy_current_theme_name($theme_name){
	$my_theme = wp_get_theme( 'genemy' );
	if ( $my_theme->exists() ){
		$theme_name = $my_theme->get( 'Name' );
	}
	return 	$theme_name;
}

/**
 * Filters the Layouts ID
 */

function genemy_filter_demo_layouts_id() {
  return 'genemy';
}

add_filter( 'ot_layouts_id', 'genemy_filter_demo_layouts_id' );

/**
 * Theme Mode
 */
add_filter( 'ot_theme_mode', '__return_true' );

/**
 * Child Theme Mode
 */
add_filter( 'ot_child_theme_mode', '__return_false' );

/**
 * Show Settings Pages
 */
add_filter( 'ot_show_pages', '__return_false' );

/**
 * Show Theme Options UI Builder
 */
add_filter( 'ot_show_options_ui', '__return_false' );

/**
 * Show Settings Import
 */
add_filter( 'ot_show_settings_import', '__return_false' );

/**
 * Show Settings Export
 */
add_filter( 'ot_show_settings_export', '__return_false' );

/**
 * Show New Layout
 */
add_filter( 'ot_show_new_layout', '__return_true' );

/**
 * Show posts format
 */
add_filter( 'ot_post_formats', '__return_true' );

// Required: include OptionTree.
require( GENEMY_DIR . '/admin/google-web-fonts.php' );

// Required: include OptionTree.
require( GENEMY_DIR . '/option-tree/ot-loader.php' );

// Theme Options
require( GENEMY_DIR . '/admin/theme-options.php' );

//admin functions 
include GENEMY_DIR. '/admin/functions.php';

//frontent functions
include GENEMY_DIR. '/includes/functions.php';


/**
* @version 1.5.7
*/
include GENEMY_DIR . '/admin/helpers.php';

//required plugins
require( GENEMY_DIR . '/tgmpa/genemy-plugins.php' );