<?php 
function perch_range_option( $start, $limit, $step = 1 ) {
  if ( $step < 0 )
  $step = 1;
  $range = range( $start, $limit, $step );	
  foreach( $range as $k => $v ) {
    if ( strpos( $v, 'E' ) ) {
      $range[$k] = 0;
    }
  }

  return $range;
}

function perch_vc_dropdown_options($start, $limit, $step = 1, $unit = 'px'){
   $range = perch_range_option( $start, $limit, $step );
	$array = array( '' => 'Letter spacing' );
    foreach( $range as $k => $v ) {
      $array[$v . $unit] = $v . $unit;
    } 

   $array = array_flip($array);

   return apply_filters( 'perch_vc_dropdown_options', $array );
}

vc_add_shortcode_param( 'number', 'perch_module_number_settings_field' );
vc_add_shortcode_param( 'perch_select', 'perch_module_perch_select_settings_field' );
vc_add_shortcode_param( 'image_upload', 'perch_module_vc_image_upload_settings_field' );

require_once PERCH_MODULES_DIR . '/vc-typography-field.php';
require_once PERCH_MODULES_DIR . '/perch_vc.php';
require_once PERCH_MODULES_DIR . '/vc-templates.php';
/* global vc include files */
foreach ( glob( PERCH_MODULES_DIR . "/vc-extends/*.php" ) as $filename ) {
    include $filename;
} //glob( PERCH_MODULES_DIR . "/admin/vc-extends/*.php" ) as $filename


function perch_modules_get_vc_param_html( $param_name = '', $atts = array() ){

	$_atts = $atts;

    if( !isset($atts[$param_name]) || ($atts[$param_name] == '') ) return '';
    $output = $atts[$param_name];

    $output = apply_filters('perch_modules_text_filter', $output, $param_name, $_atts);


    $font_container = $param_name.'_font_container';
    if( isset($atts[$font_container])  && ($atts[$font_container] != '')){       
        $typo_settings =  perch_modules_get_vc_typography_value($atts[$font_container], $param_name, $_atts);
        extract($typo_settings);
        if( '' == $inner_tag ){
            $output = "<{$tag}{$all_classes}{$inline_css}>{$output}</{$tag}>";
        }else{
            $output = "<{$tag}{$all_classes}{$inline_css}><{$inner_tag}>{$output}</{$inner_tag}></{$tag}>";
        }
        
    }
    


    return $output;
}

function perch_modules_highlight_text($output, $param_name, $atts){
	
	$field_id = $param_name. '_highlight_text_enable';
	if( ('' != $param_name) && ( 'yes' == $atts[$field_id] ) ){
		$key = $param_name. '_highlight_text';
		if( isset($atts[$key])  && ($atts[$key] != '')){
			$args = perch_modules_get_vc_typography_value($atts[$key], $param_name, $atts);
			$output = perch_modules_parse_text($output, $args);
		}
	}

	return $output;
}
add_filter( 'perch_modules_text_filter', 'perch_modules_highlight_text', 10, 3 );

function perch_modules_vc_class_filter( $classes, $field_id , $atts){
        $array = array( $classes );

        $font_container = $field_id.'_font_container';
        if( isset($atts[$font_container])  && ($atts[$font_container] != '')){
          $_arr = perch_modules_get_vc_typography_atts($atts[$font_container], $field_id, $atts);  
          $array[] = $_arr[ 'all_classes' ];
        } 
        

        $array = array_filter($array);
        return implode(' ', $array);

}
add_filter( 'perch_vc_class_filter', 'perch_modules_vc_class_filter', 10, 3 );


function perch_modules_vc_inline_css_filter( $output, $field_id , $atts){
        $array = array( $output );

        $font_container = $field_id.'_font_container';
        if( isset($atts[$font_container])  && ($atts[$font_container] != '')){
          $_arr = perch_modules_get_vc_typography_atts($atts[$font_container], $field_id, $atts);  
          $array[] = $_arr[ 'inline_css' ];
        } 
        

        $array = array_filter($array);

        if(!empty($array)){
          return ' style="'.implode(' ', $array).'"';
        }

}
add_filter( 'perch_vc_inline_css_filter', 'perch_modules_vc_inline_css_filter', 10, 3 );

