<?php
/*
Plugin Name: Genemy shortcode and Post type
Plugin URI: http://themeperch.net/
Description: Just another Shortcode and post type plugin. Simple but flexible.
Author: ThemePerch
Author URI: http://themeforest.net/user/themeperch?ref=themeperch
Text Domain: genemy
Domain Path: /languages/
Version: 1.1
*/

define( 'GENEMY_MODULES_VERSION', '1.1' );

define( 'GENEMY_MODULES_REQUIRED_WP_VERSION', '4.3' );

define( 'GENEMY_MODULES_PLUGIN', __FILE__ );

define( 'GENEMY_MODULES_PLUGIN_BASENAME', plugin_basename( GENEMY_MODULES_PLUGIN ) );

define( 'GENEMY_MODULES_PLUGIN_NAME', trim( dirname( GENEMY_MODULES_PLUGIN_BASENAME ), '/' ) );

define( 'GENEMY_MODULES_PLUGIN_DIR', untrailingslashit( dirname( GENEMY_MODULES_PLUGIN ) ) );

// Deprecated, not used in the plugin core. Use wpcf7_plugin_url() instead.
define( 'GENEMY_MODULES_PLUGIN_URL', untrailingslashit( plugins_url( '', GENEMY_MODULES_PLUGIN ) ) );

add_action('plugins_loaded', 'genemy_module_modules_load_textdomain');
function genemy_module_modules_load_textdomain() {
	load_plugin_textdomain( 'genemy', false, dirname( plugin_basename(__FILE__) ) . '/lang/' );
}

if( !function_exists('genemy_get_posts_dropdown') ):
function genemy_get_posts_dropdown( $args = array() ) {
    global $wpdb, $post;

    $dropdown = array();
    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
            $the_query->the_post(); 
            $dropdown[get_the_ID()] = get_the_title();
        }
    }
    wp_reset_postdata();

    return $dropdown;
}
endif;

if( !function_exists('genemy_disable_post_type_arr') ):
function genemy_disable_post_type_arr(){
    if(function_exists('ot_get_option')){
      return ot_get_option('disable_post_type', array());
    }else{
      return array();
    }
}
endif;

if( !function_exists('genemy_get_terms') ):
function genemy_get_terms( $tax = 'category', $key = 'id' ) {
    $terms = array();

    if(!taxonomy_exists($tax)) return false;

    if ( $key === 'id' ) foreach ( (array) get_terms( $tax, array( 'hide_empty' => false ) ) as $term ) $terms[$term->term_id] = $term->name;
      elseif ( $key === 'slug' ) foreach ( (array) get_terms( $tax, array( 'hide_empty' => false ) ) as $term ) $terms[$term->slug] = $term->name;
        return $terms;
}
endif;

if(!function_exists('genemy_number_settings_field')):
function genemy_number_settings_field( $settings, $value ) {
   return '<div class="my_param_block">'
             .'<input name="' . esc_attr( $settings['param_name'] ) . '" class="wpb_vc_param_value wpb-textinput ' .
             esc_attr( $settings['param_name'] ) . ' ' .
             esc_attr( $settings['type'] ) . '_field" type="number" min="'.intval($settings['min']).'" max="'.intval($settings['max']).'" step="'.intval($settings['step']).'" value="' . esc_attr( $value ) . '" />' .
             '</div>'; // This is html markup that will be outputted in content elements edit form
}
endif;

if(!function_exists('genemy_vc_image_upload_settings_field')):
function genemy_vc_image_upload_settings_field($settings, $value){
  return '<div class="genemy-upload-container">
      <input type="text" name="' . esc_attr( $settings['param_name'] ) . '" value="'.esc_url($value).'" class="wpb_vc_param_value wpb-textinput perch-generator-attr perch-generator-upload-value" />
      <a href="javascript:;" class="button genemy-upload-button"><span class="wp-media-buttons-icon"></span>'.__( 'Media manager', 'genemy' ).'</a>
      <img width="80" src="'.esc_url($value).'" alt="Image URL">     
    </div>';
}
endif;

if(!function_exists('genemy_perch_select_settings_field')):
function genemy_perch_select_settings_field( $args, $value ) {
    $selected = is_array($value)? $value : explode(',', $value);
    $args = wp_parse_args( $args, array(
        'param_name'       => '',
        'heading'     => '',
        'class'    => 'wpb_vc_param_value wpb-input wpb-select dropdown',
        'multiple' => '',
        'size'     => '',
        'disabled' => '',
        'selected' => $selected,
        'none'     => '',
        'value'  => array(),
        'style' => '',
        'format'   => 'keyval', // keyval/idtext
        'noselect' => '' // return options without <select> tag
      ) );
    $options = array();
    if ( !is_array( $args['value'] ) ) $args['value'] = array();
     if ( $args['param_name'] ) $name = ' name="' . $args['param_name'] . '"';
    if ( $args['param_name'] ) $args['param_name'] = ' id="' . $args['param_name'] . '"';   
    if ( $args['class'] ) $args['class'] = ' class="' . $args['class'] . '"';
    if ( $args['style'] ) $args['style'] = ' style="' . esc_attr( $args['style'] ) . '"';
    if ( $args['multiple'] ) $args['multiple'] = ' multiple="multiple"';
    if ( $args['disabled'] ) $args['disabled'] = ' disabled="disabled"';
    if ( $args['size'] ) $args['size'] = ' size="' . $args['size'] . '"';
    if ( $args['none'] && $args['format'] === 'keyval' ) $args['options'][0] = $args['none'];
    if ( $args['none'] && $args['format'] === 'idtext' ) array_unshift( $args['options'], array( 'id' => '0', 'text' => $args['none'] ) );
    
    // keyval loop
    // $args['options'] = array(
    //   id => text,
    //   id => text
    // );
    if ( $args['format'] === 'keyval' ) foreach ( $args['value'] as $id => $text ) {
        $options[] = '<option value="' . (string) $id . '">' . (string) $text . '</option>';
      }
    // idtext loop
    // $args['options'] = array(
    //   array( id => id, text => text ),
    //   array( id => id, text => text )
    // );
    elseif ( $args['format'] === 'idtext' ) foreach ( $args['options'] as $option ) {
        if ( isset( $option['id'] ) && isset( $option['text'] ) )
          $options[] = '<option value="' . (string) $option['id'] . '">' . (string) $option['text'] . '</option>';
      }
    $options = implode( '', $options );

    if(is_array($args['selected'])){
        foreach ($args['selected'] as $key => $value) {
          $options = str_replace( 'value="' . $value . '"', 'value="' . $value . '" selected="selected"', $options );
        }
    }else{
      $options = str_replace( 'value="' . $args['selected'] . '"', 'value="' . $args['selected'] . '" selected="selected"', $options );
    }
    
    $output = ( $args['noselect'] ) ? $options : '<select' .$name. $args['param_name'] . $args['class'] . $args['multiple'] . $args['size'] . $args['disabled'] . $args['style'] . '>' . $options . '</select>';
   // $output .= '<input type="hidden" '.$name.' value="'.$value.'">';
    return '<div class="perch_select_param_block">'.$output.'</div>';
}
endif;

if(function_exists('vc_add_shortcode_param')):
if(function_exists('genemy_number_settings_field')){ 
  vc_add_shortcode_param( 'number', 'genemy_number_settings_field' );
}

if(function_exists('genemy_perch_select_settings_field')){ 
  vc_add_shortcode_param( 'perch_select', 'genemy_perch_select_settings_field' );
}

if(function_exists('genemy_vc_image_upload_settings_field')){ 
  vc_add_shortcode_param( 'image_upload', 'genemy_vc_image_upload_settings_field' );
}   
endif;
    


function genemy_archive_page(){
  global $wpdb;
    

    // Create post object
    $my_post = array(
      'post_title'    => 'Team member',
      'post_status'   => 'publish',
      'post_author'   => get_current_user_id(),
      'post_type'     => 'page',
    );

    // Insert the post into the database
    $page = get_page_by_title( 'Team member' );
    if(get_post_status($page->ID) != 'publish'){
      $post_id = wp_insert_post( $my_post, '' );
      update_post_meta($post_id, 'header_image', get_template_directory_uri().'/images/team/team-header-bg.jpg');
      delete_option('team_archive_id');
      add_option('team_archive_id', $post_id);
    }
    
}

$theme = wp_get_theme(); // gets the current theme
if ('Genemy' == $theme->name || 'Genemy' == $theme->parent_theme){

	if(function_exists('vc_add_shortcode_param')){ 
	    vc_add_shortcode_param( 'number', 'genemy_module_number_settings_field' );
	    vc_add_shortcode_param( 'perch_select', 'genemy_module_perch_select_settings_field' );
	    vc_add_shortcode_param( 'image_upload', 'genemy_module_vc_image_upload_settings_field' );
	}
	
	require_once GENEMY_MODULES_PLUGIN_DIR . '/post-types.php';
  
  if( defined( 'WPB_VC_VERSION' ) ) {
    require_once GENEMY_MODULES_PLUGIN_DIR . '/vc-templates.php';
  }
  require_once GENEMY_MODULES_PLUGIN_DIR . '/shortcodes.php';
	

}else{
	function genemy_module_modules_admin_notice__error() {
		$class = 'notice notice-error';
		$message = __( 'Oops! An error has occurred. Genemy shortcode and Post type plugin is disabled. This plugin only worked when GENEMY theme is activated.', 'genemy' );

		printf( '<div class="%1$s"><p>%2$s</p></div>', $class, $message ); 
	}
	add_action( 'admin_notices', 'genemy_module_modules_admin_notice__error' );
}

if( !function_exists('genemy_module_get_posts_dropdown') ):
function genemy_module_get_posts_dropdown( $args = array() ) {
    global $wpdb, $post;

    $dropdown = array();
    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
            $the_query->the_post(); 
            $dropdown[get_the_ID()] = get_the_title();
        }
    }
    wp_reset_postdata();

    return $dropdown;
}
endif;

if( !function_exists('genemy_module_get_terms') ):
function genemy_module_get_terms( $tax = 'category', $key = 'id' ) {
    $terms = array();

    if(!taxonomy_exists($tax)) return false;

    if ( $key === 'id' ) foreach ( (array) get_terms( $tax, array( 'hide_empty' => false ) ) as $term ) $terms[$term->term_id] = $term->name;
      elseif ( $key === 'slug' ) foreach ( (array) get_terms( $tax, array( 'hide_empty' => false ) ) as $term ) $terms[$term->slug] = $term->name;
        return $terms;
}
endif;

if(!function_exists('genemy_module_number_settings_field')):
function genemy_module_number_settings_field( $settings, $value ) {
   return '<div class="my_param_block">'
             .'<input name="' . esc_attr( $settings['param_name'] ) . '" class="wpb_vc_param_value wpb-textinput ' .
             esc_attr( $settings['param_name'] ) . ' ' .
             esc_attr( $settings['type'] ) . '_field" type="number" min="'.intval($settings['min']).'" max="'.intval($settings['max']).'" step="'.intval($settings['step']).'" value="' . esc_attr( $value ) . '" />' .
             '</div>'; // This is html markup that will be outputted in content elements edit form
}
endif;

if(!function_exists('genemy_module_vc_image_upload_settings_field')):
function genemy_module_vc_image_upload_settings_field($settings, $value){
  return '<div class="genemy-upload-container">
      <input type="text" name="' . esc_attr( $settings['param_name'] ) . '" value="'.esc_url($value).'" class="wpb_vc_param_value wpb-textinput perch-generator-attr perch-generator-upload-value" />
      <a href="javascript:;" class="button genemy-upload-button"><span class="wp-media-buttons-icon"></span>'.__( 'Media manager', 'genemy' ).'</a>
      <img width="80" src="'.esc_url($value).'" alt="Image URL">     
    </div>';
}
endif;

if(!function_exists('genemy_module_perch_select_settings_field')):
function genemy_module_perch_select_settings_field( $args, $value ) {
    $selected = is_array($value)? $value : explode(',', $value);
    $args = wp_parse_args( $args, array(
        'param_name'       => '',
        'heading'     => '',
        'class'    => 'wpb_vc_param_value wpb-input wpb-select dropdown',
        'multiple' => '',
        'size'     => '',
        'disabled' => '',
        'selected' => $selected,
        'none'     => '',
        'value'  => array(),
        'style' => '',
        'format'   => 'keyval', // keyval/idtext
        'noselect' => '' // return options without <select> tag
      ) );
    $options = array();
    if ( !is_array( $args['value'] ) ) $args['value'] = array();
     if ( $args['param_name'] ) $name = ' name="' . $args['param_name'] . '"';
    if ( $args['param_name'] ) $args['param_name'] = ' id="' . $args['param_name'] . '"';   
    if ( $args['class'] ) $args['class'] = ' class="' . $args['class'] . '"';
    if ( $args['style'] ) $args['style'] = ' style="' . esc_attr( $args['style'] ) . '"';
    if ( $args['multiple'] ) $args['multiple'] = ' multiple="multiple"';
    if ( $args['disabled'] ) $args['disabled'] = ' disabled="disabled"';
    if ( $args['size'] ) $args['size'] = ' size="' . $args['size'] . '"';
    if ( $args['none'] && $args['format'] === 'keyval' ) $args['options'][0] = $args['none'];
    if ( $args['none'] && $args['format'] === 'idtext' ) array_unshift( $args['options'], array( 'id' => '0', 'text' => $args['none'] ) );
    
    // keyval loop
    // $args['options'] = array(
    //   id => text,
    //   id => text
    // );
    if ( $args['format'] === 'keyval' ) foreach ( $args['value'] as $id => $text ) {
        $options[] = '<option value="' . (string) $id . '">' . (string) $text . '</option>';
      }
    // idtext loop
    // $args['options'] = array(
    //   array( id => id, text => text ),
    //   array( id => id, text => text )
    // );
    elseif ( $args['format'] === 'idtext' ) foreach ( $args['options'] as $option ) {
        if ( isset( $option['id'] ) && isset( $option['text'] ) )
          $options[] = '<option value="' . (string) $option['id'] . '">' . (string) $option['text'] . '</option>';
      }
    $options = implode( '', $options );

    if(is_array($args['selected'])){
        foreach ($args['selected'] as $key => $value) {
          $options = str_replace( 'value="' . $value . '"', 'value="' . $value . '" selected="selected"', $options );
        }
    }else{
      $options = str_replace( 'value="' . $args['selected'] . '"', 'value="' . $args['selected'] . '" selected="selected"', $options );
    }
    
    $output = ( $args['noselect'] ) ? $options : '<select' .$name. $args['param_name'] . $args['class'] . $args['multiple'] . $args['size'] . $args['disabled'] . $args['style'] . '>' . $options . '</select>';
   // $output .= '<input type="hidden" '.$name.' value="'.$value.'">';
    return '<div class="perch_select_param_block">'.$output.'</div>';
}
endif;

/**
        
 * Add new fields above 'Update' button.        
 */    
function genemy_additional_profile_fields( $user ) {
        
    $title =  get_the_author_meta( 'title', $user->ID );
    ?>
   
    <table class="form-table">
     <tr>
       <th><label for="title"><?php echo esc_attr(__('Title', 'genemy')); ?></label></th>
       <td>
        <input name="title" id="title" value="<?php echo esc_attr($title) ?>" class="regular-text" type="text">
       </td>
     </tr>
    </table>
    <?php
} 
        
add_action( 'show_user_profile', 'genemy_additional_profile_fields' );        
add_action( 'edit_user_profile', 'genemy_additional_profile_fields' );

/**    
 * Save additional profile fields.
 */   
function genemy_save_profile_fields( $user_id ) {
        
    if ( ! current_user_can( 'edit_user', $user_id ) ) {
     return false;
    }
    if ( empty( $_POST['title'] ) ) {
     return false;
    }
    update_usermeta( $user_id, 'title', $_POST['title'] );
}
        
add_action( 'personal_options_update', 'genemy_save_profile_fields' );
add_action( 'edit_user_profile_update', 'genemy_save_profile_fields' );