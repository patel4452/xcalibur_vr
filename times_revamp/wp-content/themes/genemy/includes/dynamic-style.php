<?php
if( !function_exists('genemy_hex2rgb') ):
function genemy_hex2rgb( $color, $opacity='1' ) {
  $color = trim( $color, '#' );

  if ( strlen( $color ) == 3 ) {
    $r = hexdec( substr( $color, 0, 1 ).substr( $color, 0, 1 ) );
    $g = hexdec( substr( $color, 1, 1 ).substr( $color, 1, 1 ) );
    $b = hexdec( substr( $color, 2, 1 ).substr( $color, 2, 1 ) );
  } else if ( strlen( $color ) == 6 ) {
    $r = hexdec( substr( $color, 0, 2 ) );
    $g = hexdec( substr( $color, 2, 2 ) );
    $b = hexdec( substr( $color, 4, 2 ) );
  } else {
    return '';
  }

  return "rgba( {$r}, {$g}, {$b}, {$opacity} )";
}
endif;

function genemy_compress($buffer) {
    //Remove CSS comments
    $buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);
    //Remove tabs, spaces, newlines, etc.
    $buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer);
    return $buffer;
}

function genemy_background_css($option_id, $selector = ''){
  $background = ot_get_option($option_id, array());
   $output = '';
   if ( !empty( $background ) ) {
        $background_color       = ( isset($background['background-color']) && ($background['background-color'] != '') ) ? 'background-color:'. $background['background-color'] . '!important ; '."\n" : '';
        $background_image       = ( isset($background['background-image']) && ($background['background-image'] != '') ) ? 'background-image: url('.esc_url($background['background-image']).');'."\n" : '';
        $background_repeat      = ( isset($background['background-repeat']) && ($background['background-repeat'] != '') ) ? 'background-repeat: '. $background['background-repeat']. ';'."\n" : '';
        $background_positon     = ( isset($background['background-position']) && ($background['background-position'] != '') ) ? 'background-position:'. $background['background-position']. ';'."\n" : '';
        $background_attachment  = ( isset($background['background-attachment']) && ($background['background-attachment'] != '') ) ? 'background-attachment:'. $background['background-attachment']. ';'."\n" : '';
        $background_size        = ( isset($background['background-size']) && ($background['background-size'] != '') ) ? 'background-size: '. $background['background-size']. ';'."\n" : '';
        

        $output .=  "\n".esc_attr($selector) .' { '."\n".$background_color.$background_image.$background_repeat.$background_attachment.$background_positon. $background_size .'}'. "\n";
        
    }
    return $output;
}

function genemy__background_css($background, $selector = ''){  
   $output = '';
   if ( !empty( $background ) ) {
        $background_color       = ( isset($background['background-color']) && ($background['background-color'] != '') ) ? 'background-color:'. $background['background-color'] . ';'."\n" : '';
        $background_image       = ( isset($background['background-image']) && ($background['background-image'] != '') ) ? 'background-image: url('.esc_url($background['background-image']).');'."\n" : '';
        $background_repeat      = ( isset($background['background-repeat']) && ($background['background-repeat'] != '') ) ? 'background-repeat: '. $background['background-repeat']. ';'."\n" : '';
        $background_positon     = ( isset($background['background-position']) && ($background['background-position'] != '') ) ? 'background-position:'. $background['background-position']. ';'."\n" : '';
        $background_attachment  = ( isset($background['background-attachment']) && ($background['background-attachment'] != '') ) ? 'background-attachment:'. $background['background-attachment']. ';'."\n" : '';
        $background_size        = ( isset($background['background-size']) && ($background['background-size'] != '') ) ? 'background-size: '. $background['background-size']. ';'."\n" : '';
        

        $output .=  "\n".esc_attr($selector) .' { '."\n".$background_color.$background_image.$background_repeat.$background_attachment.$background_positon. $background_size .'}'. "\n";
        
    }
    return $output;
}

function genemy_spacing_option( $option_id ){
  $spacing = ot_get_option( $option_id, array() );
  if(!empty($spacing)){
      $unit = (isset($spacing['unit']) && ($spacing['unit'] != ''))? $spacing['unit'] : 'px';
      return (isset($spacing['top'])? $spacing['top'].$unit : 0).' '.(isset($spacing['right'])? $spacing['right'].$unit : 0).' '.(isset($spacing['bottom'])? $spacing['bottom'].$unit : 0).' '.(isset($spacing['left'])? $spacing['left'].$unit : 0);
  }else{
    return '';
  } 
  
}

function genemy_typography_css($option_id){
    $typography = ot_get_option( $option_id, array() );
    $css = '';
    if(!empty($typography) && is_array($typography)) :       
                
        foreach ($typography as $key => $value) {

            if( ($key == 'font-color') && ($value != '') ) $css .= 'color: '.$value.'; ';
            elseif( $key == 'font-family' ){
                if($value != ''){
                    $ot_set_google_fonts  = get_theme_mod( 'ot_google_fonts', array() );


                    $default = array(
                        'roboto'     => 'Roboto',
                        'montserrat'     => 'Montserrat',
                        'arial'     => 'Arial',
                        'georgia'   => 'Georgia',
                        'helvetica' => 'Helvetica',
                        'palatino'  => 'Palatino',
                        'tahoma'    => 'Tahoma',
                        'times'     => '"Times New Roman"',
                        'trebuchet' => 'Trebuchet',
                        'verdana'   => 'Verdana'
                      );

                    $default = apply_filters( 'genemy/recognized_font_families', $default );
                    $family = isset($ot_set_google_fonts[$value])? $ot_set_google_fonts[$value]['family'] : '';
                    $family = (($family == '') && isset($default[$value]))? $default[$value]. ';' : $family;                    
                    $css .= ($family != '')? 'font-family: '.$family.'; ' : '';
                }
                
            } 
            else
              $css .= ( ($key != 'font-family') && ($value != '') )? $key. ': '.$value.'; ' : '';
        }

    endif;

    return $css;
}

/**
 * Returns CSS for the color schemes.
 *
 * @param array $colors Color scheme colors.
 * @return string Color scheme CSS.
 */
function genemy_get_dynamic_header_css() {
	$css = '';
  
  $default_header_bg = array(
        'background-color' => '',
        'background-attachment' => 'fixed',
        'background-image' => ot_get_option('header_bg_img', GenemyHeader::get_default_header_image()),
        'background-size' => 'cover'
    ); 
  $header_bg = apply_filters( 'genemy_header_image_url', $default_header_bg ); 
  $css .= genemy__background_css($header_bg, '#breadcrumbs-hero' );
  $css .= genemy_background_css('body_background', 'body' );
  $css .= genemy_background_css('footer_background', '#footer-1' );


  $arr = ot_get_option( 'container_width', array( '1140',  'px' ) );
  $css .= '@media (min-width: 1200px) { .container {  max-width: '.esc_attr($arr[0]).esc_attr($arr[1]).'; } }';
   
   $logo_height = ot_get_option('logo_height', array('36', 'px'));        
  if(is_page_template('templates/onepage-template.php')){
      $newval = get_post_meta( get_the_ID(), 'logo_height', true );
      $logo_height = ( !empty($newval) )? $newval : $logo_height;
  } 

  $css .= '.navbar-brand > img{ max-height: '.implode('', $logo_height).' }';
  $overlay_opacity = ot_get_option('overlay_opacity', 0);
  $css .= '.breadcrumbs-area{ box-shadow: 0px 1000px rgba(0,0,0, 0.'.intval($overlay_opacity).') inset; }';

  /* primary color */  

  $css .= '/* color */ 
  body{ '.genemy_typography_css( 'primary_font' ).' }  
  .navbar-expand-lg .navbar-nav .nav-link,
  .statistic-block p.statistic-number,
  .statistic-block p,
  .pricing-table span.price,
  span.section-id,
  .barWrapper p,
  .skill-percent,
  .project-data p,
  .project-link p,
  .blog-post-txt p.post-meta, .sblog-post-txt p.post-meta,
  .modal-video a,
  .portfolio-filter button,
  h1, h2, h3, h4, h5, h6, .btn { '.genemy_typography_css( 'secondary_font' ).' }
  body{'.genemy_typography_css('body').'} 
  h1{ '.genemy_typography_css('h1').'}
  h2, h2.h2-sm{'.genemy_typography_css('h2').'}
  h3, h3.h3-xl{'.genemy_typography_css('h3').'}
  h4, h4.h4-sm{'.genemy_typography_css('h4').'}
  h5, h5.h5-sm{'.genemy_typography_css('h5').'}
  h6{'.genemy_typography_css('h6').'}
  .navbar-expand-lg .navbar-nav .nav-link{'.genemy_typography_css('menu_a').'}
  .navbar-expand-lg .navbar-nav .dropdown-menu a,
  .navbar-expand-lg .navbar-nav .sub-menu a{'.genemy_typography_css('submenu_a').'}
  .navbar-nav .nav-link:hover,
  .navbar.scroll.navbar-dark .rose-hover .navbar-nav .nav-link:hover,
  .navbar.scroll.navbar-dark .rose-hover .navbar-nav .nav-link:focus{'.genemy_typography_css('menu_hover').'}
  .widget-area h5.h5-sm{'.genemy_typography_css('sidebar_title').'}
  footer, .footer-copyright p{'.genemy_typography_css('footer').'}
  ';

  

	return genemy_compress($css);
}



/**
 * Output an Underscore template for generating CSS for the color scheme.
 *
 * The template generates the css dynamically for instant display in the Customizer
 * preview.
 *
 */
function genemy_color_scheme_css() {	
	wp_add_inline_style( 'genemy-style', genemy_get_dynamic_header_css() );	
  wp_add_inline_style( 'genemy-default-style', genemy_dynamic_general_style_css() );
  wp_add_inline_style( 'bootstrap', genemy_bootstrap_style_css() );  
  if(function_exists('is_woocommerce')){
    wp_add_inline_style( 'woocommerce-general', genemy_woocommerce_general_style_css() );
  }
}
add_action( 'wp_enqueue_scripts', 'genemy_color_scheme_css' );
