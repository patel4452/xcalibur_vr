<?php

// Register Style

function genemy_iconpicker_styles() {	

	wp_register_style( 'genemy-admin-bootstrap', GENEMY_URI. '/admin/iconpicker/bootstrap-3.2.0/css/bootstrap.css', false, '1.0.0', 'all' );
	wp_register_style( 'fontawesome', GENEMY_URI. '/admin/iconpicker/icon-fonts/fontawesome-5.2.0/css/fontawesome.min.css', false, '5.2.1', 'all' );
	wp_register_style( 'genemy-iconpicker', GENEMY_URI. '/admin/iconpicker/bootstrap-iconpicker/css/bootstrap-iconpicker.min.css', array('genemy-admin-bootstrap'), '1.0.0', 'all' );
	wp_register_style( 'flaticon', GENEMY_URI. '/css/flaticon.css', false, '1.0' );
	wp_register_style( 'tonicons', GENEMY_URI. '/css/tonicons.css', false, '1.0' );
}

// Hook into the 'admin_enqueue_scripts' action
add_action( 'init', 'genemy_iconpicker_styles' );


// Register Script
function genemy_iconpicker_scripts() {	
	wp_register_script( 'genemy-admin-bootstrap', GENEMY_URI. '/admin/iconpicker/bootstrap-3.2.0/js/bootstrap.min.js', array( 'jquery' ), false, false );
	wp_register_script( 'genemy-iconset', GENEMY_URI. '/admin/iconpicker/bootstrap-iconpicker/js/iconset/iconset-genemy.js', array( 'jquery' ), false, false );
	
	wp_register_script( 'genemy-iconset-all', GENEMY_URI. '/admin/iconpicker/bootstrap-iconpicker/js/iconset/iconset-all.min.js', array( 'jquery' ), false, false );
	wp_register_script( 'genemy-iconpicker', GENEMY_URI. '/admin/iconpicker/bootstrap-iconpicker/js/bootstrap-iconpicker.js', array( 'jquery', 'genemy-admin-bootstrap' ), false, false );

}



add_action( 'init', 'genemy_iconpicker_scripts' );



function genemy_get_iconpicker_inputgroup( $name, $atts, $iconset='fontawesome', $iconprefix=""){
	if($name == '') return;

	extract(shortcode_atts( array('icon' => 'icon-home', 'input' => ''), $atts ));
	$iconsetArr = explode('|', $iconset);
	foreach ($iconsetArr as $key => $value) {
		wp_enqueue_style( 'genemy-'.esc_attr($value));
	}	
	wp_enqueue_style( 'genemy-iconpicker');
	wp_enqueue_script( 'iconset-fontawesome');
	wp_enqueue_script( 'genemy-iconset-all');
	wp_enqueue_script('genemy-iconpicker');

	return '<div class="input-group">
		    <span class="input-group-btn">
		        <button class="btn btn-primary iconpicker" name="'.esc_attr($name).'[icon]" data-iconset="'.esc_attr($iconset).'" data-icon="'.esc_attr($icon).'" data-cols="9" data-selected-class="btn-primary" role="iconpicker">
		        '.(($icon != '')?'<i class="'.$iconprefix.esc_attr($icon).'"></i>' : '<i class="fa fa-adjust"></i>').'
		        <input type="hidden" name="'.esc_attr($name).'[icon]" value="'.esc_attr($icon).'">
		        </button>
		    </span>
		    <input type="text" name="'.esc_attr($name).'[input]" class="form-control" value="'.esc_attr($input).'">
		</div>';

}


add_filter( 'ot_option_types_array', 'genemy_ot_option_types_array', 10, 1 );
function genemy_ot_option_types_array($args){
	$args['iconpicker_input'] = 'Icon picker input group';
	return $args;
}

/**
 * Text option type
 *
 * See @ot_display_by_type to see the full list of available argenemyents.
 *
 * @param     array     An array of argenemyents.
 * @return    string
 *
 * @access    public
 * @since     2.0
 */
if ( ! function_exists( 'ot_type_iconpicker_input' ) ) {  
  function ot_type_iconpicker_input( $args = array() ) {  

    /* turns argenemyents array into variables */ 
    extract( $args ); //print_r($args);   

    /* verify a description */
    $has_desc = $field_desc ? true : false;    

    /* format setting outer wrapper */
    echo '<div class="format-setting type-text ' . ( $has_desc ? 'has-desc' : 'no-desc' ) . '">';      

      /* description */
      if($has_desc) echo '<div class="description">' . wpb_js_remove_wpautop( $field_desc ) . '</div>';      

      /* format setting inner wrapper */
      echo '<div class="format-setting-inner">';
     	$field_value = !empty($field_value)? $field_value : $field_std;
     	$name = 'option_tree['.$field_id.']';
        echo genemy_get_iconpicker_inputgroup( $field_name,  $field_value );    
      echo '</div>';   
    echo '</div>';   

  } 

}

function genemy_ot_iconpicker($field_id = ''){
  if( $field_id == '' ) return;
  $field_value = ot_get_option($field_id);
  $iconclass = '';
  if( $field_value != '' ) { $v= explode('|',$field_value); $iconclass = $v[0].' '.$v[1]; }
  return ( $iconclass != '' )? "<i class='{$iconclass}'></i>" : "";
}

function genemy_ot_get_icon($field_value = ''){
  if( $field_value == '' ) return;
  $iconclass = '';
  if( $field_value != '' ) { $v= explode('|',$field_value); $iconclass = $v[0].' '.$v[1]; }
  return ( $iconclass != '' )? "<i class='{$iconclass}'></i>" : "";
}