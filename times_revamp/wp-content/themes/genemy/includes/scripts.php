<?php
function genemy_get_typography_font_options(){
	$arr = array();
	
	$default_fonts = array(
		'Roboto:300,regular,500,700,900',
		'Montserrat:300,regular,500,600,700,800,900',
	);

	if( function_exists('ot_get_option') ):
	$fonts = ot_get_option('genemy_google_fonts', $default_fonts);
	endif;

	
	if( empty($fonts) ) return $default_fonts;

	$ot_set_google_fonts  = get_theme_mod( 'ot_google_fonts', array() );
	
	$default = array(			
            'montserrat'     => 'Montserrat',
            'roboto' => 'Roboto',
            'arial'     => 'Arial',
            'georgia'   => 'Georgia',
            'helvetica' => 'Helvetica',
            'palatino'  => 'Palatino',
            'tahoma'    => 'Tahoma',
            'times'     => '"Times New Roman", sans-serif',
            'trebuchet' => 'Trebuchet',
            'verdana'   => 'Verdana'
          );
	$default = apply_filters( 'genemy/recognized_font_families', $default );

	if( !empty($fonts) ){		
		foreach ($fonts as $key => $value) {
			 $f = isset($value['family'])? $value['family'] : 'Roboto';	

			 $familyArr = isset($ot_set_google_fonts[$f])? $ot_set_google_fonts[$f] : array('family' => $f);

			 $family = $familyArr['family'];
			 $variants = (isset($value['variants']) && !empty($value['variants']) )? implode(',', $value['variants']): '';
			 $arr[] = $family.':'.$variants;
		}
	}else{
		return $default_fonts;
	}

	return $arr;
}

if ( ! function_exists( 'genemy_fonts_url' ) ) :
/**
 * Register Google fonts for Twenty Fifteen.
 *
 * @return string Google fonts URL for the theme.
 */
function genemy_fonts_url() {
	$fonts_url = '';
	$fonts     = array();

	/*
	 * Translators: If there are characters in your language that are not supported
	 */
	$fonts = genemy_get_typography_font_options();
	

	$subsets   = 'latin,latin-ext';
	$subset = 'no-subset';

	if ( 'cyrillic' == $subset ) {
		$subsets .= ',cyrillic,cyrillic-ext';
	} elseif ( 'greek' == $subset ) {
		$subsets .= ',greek,greek-ext';
	} elseif ( 'devanagari' == $subset ) {
		$subsets .= ',devanagari';
	} elseif ( 'vietnamese' == $subset ) {
		$subsets .= ',vietnamese';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), '//fonts.googleapis.com/css' );
	}

	return $fonts_url;
}
endif;

/**
 * JavaScript Detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 */
function genemy_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'genemy_javascript_detection', 0 );

// Register Style
function genemy_styles() {

	wp_dequeue_style( 'ot-google-fonts' );
	wp_register_style( 'genemy-google-fonts', genemy_fonts_url(), array(), null );
	wp_enqueue_style( 'genemy-google-fonts' );
	

	if( is_rtl() ){
		wp_enqueue_style( 'bootstrap', GENEMY_URI. '/rtl/bootstrap-rtl.min.css', false, '4.0.0' );		
	}else{
		wp_enqueue_style( 'bootstrap', GENEMY_URI. '/css/bootstrap.min.css', false, '4.0.0' );
	}
	wp_enqueue_style( 'fa-svg-with-js', GENEMY_URI. '/css/fa-svg-with-js.css', false, '1.0' );			
	wp_enqueue_style( 'tonicons' );
	wp_enqueue_style( 'flaticon' );
	wp_enqueue_style( 'fontawesome' );
	wp_enqueue_style( 'magnific-popup', GENEMY_URI. '/css/magnific-popup.css', false, '1.0' );		
	wp_enqueue_style( 'genemy-flexslider', GENEMY_URI. '/css/flexslider.css', false, '100' );
	wp_enqueue_style( 'owl-carousel', GENEMY_URI. '/css/owl.carousel.min.css', false, '1.0' );
	wp_enqueue_style( 'owl-theme-default', GENEMY_URI. '/css/owl.theme.default.min.css', false, '1.0' );
	wp_enqueue_style( 'animate', GENEMY_URI. '/css/animate.css', false, '1.0' );	
	wp_enqueue_style( 'selectize-bootstrap4', GENEMY_URI. '/css/selectize.bootstrap4.css', false, '1.0' );	
	wp_enqueue_style( 'genemy-spinner', GENEMY_URI. '/css/spinner.css', false, '1.0' );

	if( function_exists('is_woocommerce') ){
    	wp_enqueue_style( 'genemy-woocommerce', GENEMY_URI . '/css/woocommerce.css', array('bootstrap'), '1.0.1.3' );
	}

	wp_enqueue_style( 'genemy-default-style', GENEMY_URI. '/css/style.css', false, GENEMY_VERSION );
	wp_enqueue_style( 'genemy-style', get_stylesheet_uri(), false, GENEMY_VERSION );
	if( is_rtl() ){
		wp_enqueue_style( 'genemy-styles-rtl', GENEMY_URI. '/rtl/style-rtl.css', array('genemy-style'), GENEMY_VERSION );		
	}
	
	wp_enqueue_style( 'genemy-responsive', GENEMY_URI. '/css/responsive.css', array('genemy-style'), GENEMY_VERSION );

	$genemy_layout_style = ot_get_option( 'genemy_layout_style', 'rounded' );
	if( $genemy_layout_style != 'rounded' ){
		wp_enqueue_style( 'genemy-layout-'.$genemy_layout_style, GENEMY_URI. '/css/genemy-'.$genemy_layout_style.'.css', array('genemy-style'), GENEMY_VERSION );
	}
}
add_action( 'wp_enqueue_scripts', 'genemy_styles' );

// Register Script
function genemy_scripts() {
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_register_script( 'genemy-map', GENEMY_URI .'/js/genemy-map.js', array( 'jquery' ), '1.0', true );
	$key = 'AIzaSyC3VridlI2w6LmX_55OQQ4airseVZo-uVI';
	$key = ot_get_option( 'google_map_api', $key );
	wp_register_script( 'googleapis', '//maps.googleapis.com/maps/api/js?key='.esc_attr($key).'&callback=genemyinitMap', array( 'jquery', 'genemy-map' ), '1.0', true );	
	
	wp_enqueue_script( 'bootstrap', GENEMY_URI .'/js/bootstrap.min.js', array( 'jquery' ), '4.1.2', true ); 	
	wp_enqueue_script( 'fontawesome-all', GENEMY_URI .'/js/fontawesome-all.js', array('jquery'),'1.0',true );
	wp_enqueue_script( 'modernizr-custom', GENEMY_URI .'/js/modernizr.custom.js', array('jquery'),'1.0',true );	
	wp_enqueue_script( 'jquery-easing', GENEMY_URI .'/js/jquery.easing.js', array('jquery'),'1.0',true );
	wp_enqueue_script( 'jquery-stellar', GENEMY_URI .'/js/jquery.stellar.min.js', array('jquery'),'1.0',true );
	wp_enqueue_script( 'jquery-scrollto', GENEMY_URI .'/js/jquery.scrollto.js', array('jquery'),'1.0',true );
	wp_enqueue_script( 'jquery-appear', GENEMY_URI .'/js/jquery.appear.js', array('jquery'),'1.0',true );
	wp_enqueue_script( 'jquery-superslides', GENEMY_URI .'/js/jquery.superslides.js', array('jquery'),'1.0',true );
	wp_enqueue_script( 'imagesloaded-pkgd', GENEMY_URI .'/js/imagesloaded.pkgd.min.js', array('jquery'),'1.0',true );
	wp_enqueue_script( 'vidbg', GENEMY_URI .'/js/vidbg.min.js', array('jquery'),'0.5.1',true );
	wp_enqueue_script( 'isotope-pkgd', GENEMY_URI .'/js/isotope.pkgd.min.js', array('jquery'),'1.0',true );
	wp_enqueue_script( 'jquery-flexslider', GENEMY_URI .'/js/jquery.flexslider.js', array('jquery'),'1.0',true );
	wp_enqueue_script( 'owl-carousel', GENEMY_URI .'/js/owl.carousel.min.js', array('jquery'),'1.0',true );
	wp_enqueue_script( 'selectize', GENEMY_URI .'/js/selectize.min.js', array('bootstrap'),'1.0',true );
	wp_enqueue_script( 'wow', GENEMY_URI .'/js/wow.js', array('jquery'),'1.0',true );
	wp_enqueue_script( 'jquery-magnific-popup', GENEMY_URI .'/js/jquery.magnific-popup.min.js', array('jquery'),'1.0',true );

	wp_enqueue_script( 'genemy-custom', GENEMY_URI . '/js/custom.js', array( 'jquery' ), GENEMY_VERSION, true );
	wp_register_script( 'jquery-countdown', GENEMY_URI .'/js/jquery.countdown.min.js', array( 'genemy-custom' ), GENEMY_VERSION, true );
	 

	$arr = array( 
		'ajaxurl' => admin_url( 'admin-ajax.php' ),
		'GENEMY_URI' => GENEMY_URI,
		'GENEMY_DIR' => GENEMY_DIR,
		'animation' => ot_get_option( 'genemy_animation', 'on' ),
		'backtotop' => ot_get_option( 'backtotop', 'on' )
		);
	wp_localize_script( 'genemy-custom', 'GENEMY', $arr );

}
add_action( 'wp_enqueue_scripts', 'genemy_scripts' );

if( function_exists('register_block_type') ):
// Pergo gutenberg button block compability
function genemy_gutenberg_block_styles() {
	wp_register_style(
        'genemy-fonts',
        genemy_fonts_url(),
        array(),
        false
    );

    wp_register_style(
        'button',
        get_theme_file_uri( 'css/buttons/style.css' ),
        array(),
        filemtime( GENEMY_DIR . '/css/buttons/style.css' )
    );


    
	    register_block_type( 'core/button', array(
	        'style' => 'button',
	    ));
	

    if( is_admin() ):
	    wp_register_style(
	        'paragraph',
	        get_theme_file_uri( 'css/typography/style.css' ),
	        array( 'genemy-fonts' ),
	        filemtime( GENEMY_DIR . '/css/typography/style.css' )
	    );

	    register_block_type( 'core/paragraph', array(
	        'style' => 'paragraph',
	    ));
	endif;
}

add_action( 'init', 'genemy_gutenberg_block_styles' );
endif;

