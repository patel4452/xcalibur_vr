<?php
/**
* Modified vc element base
*
* @since 1.2
* @return array
*/
function genemy_modified_element_base(){
    $array = array( 
        'genemy_slide_item', 
        'genemy_text_box', 
        'genemy_hero_slide', 
        'genemy_hero_slide',         
        'genemy_startup_landing',         
        'genemy_startup_agency',         
        'genemy_hero_design_studio',         
        'genemy_hero_digital_agency',         
        'genemy_hero_marketing_agency',         
        'genemy_hero_app_showcase',         
        'genemy_creative_business',         
        'genemy_hero_business_agency',         
        'genemy_hero_freelancer',         
        'genemy_hero_app_landing',
        'genemy_section_title', 
    ); 

    return apply_filters( 'genemy_modified_element_base', $array );
}

/**
* Set typogography options
*
* @since 1.2
* @return array
*/
function genemy_add_param_typography_options(){
    $array = array( 'name', 'digit', 'section_name', 'sub_title', 'subtitle', 'title',  'lead_text' );   

    return apply_filters( 'genemy_param_add_typography_options', $array );
}


/**
* Additional params typography options
*
* @since 1.2
* @return array
*/
add_filter( 'genemy_vc_map_filter', 'genemy_vc_elements_param_extention', 11, 2 );
function genemy_vc_elements_param_extention( $args, $base ){
    $elementArr = genemy_modified_element_base();
    $paramsArr = genemy_add_param_typography_options();

   if( in_array($base, $elementArr) ){
        $params = $args['params'];        

        foreach ($paramsArr as $field_id) {           
            if(genemy_is_field_id_exists($params, $field_id)):
            $params = genemy_vc_param_typography_extention($params, $base, $field_id);       
            endif;
        }
        
        $params = array_filter($params);
       
       $args['params'] = $params;
       
   }

    return $args;
}

/**
* Set params weight
*
* @since 1.2
* @param array
* @return array
*/
function genemy_set_param_weight($args){
    $weight = 200;
    $new_args = array();
    $typoParams = genemy_add_param_typography_options();
    foreach ($args as $key => $value) {
        $value[ 'weight' ] = $weight;

        if( in_array($value['param_name'], $typoParams) ){
            $description = (isset($value['description']) && ('' != $value['description'])) ? $value['description'] . '<br>' : '';
            $_description = __( 'Typography options available', 'genemy' );
            $value[ 'description' ] = $description . $_description;
        }       
        $new_args[] = $value;
        
        $weight = $weight - 10;
    }

    return $new_args;
}


/**
* get param array
*
* @since 1.2
* @return array
*/
function genemy_get_param_array( $params, $param_name, $key = 'param_name' ){

     $arrKey = array_search($param_name, array_column($params, $key));
     if($params[$arrKey]['param_name'] == $param_name){         
         return $params[$arrKey];
     }else{
        return false;
     }
}
/**
* is param_name exists in params
* @param array, string, string(optional)
*
* @since 1.2
* @return array
*/
function genemy_is_field_id_exists($params, $param_name, $key = 'param_name'){
    $arrKey = array_search($param_name, array_column($params, $key));
     if( isset($params[$arrKey]['param_name']) && ($params[$arrKey]['param_name'] == $param_name)){         
         return true;
     }else{
        return false;
     }
}

/**
* Typography options for params element
* @param array, string, string
*
* @since 1.2
* @return array
*/
function genemy_vc_param_typography_extention( $params, $base, $field_id ){  
    $param = genemy_get_param_array($params, $field_id);
    $heading = $param['heading'];
        
    $params[] =  PerchVcMap::_vc_param_enable_highlight_text( $field_id, $heading ); 
    $params[] =  PerchVcMap::_vc_highlight_text_typography( $field_id, $heading );           
    $params[] =  PerchVcMap::_vc_param_typography( $field_id, $heading );

    //$params[] =  PerchVcMap::_vc_param_enable_google_fonts( $field_id, $heading );
    //$params[] =  PerchVcMap::_vc_param_custom_google_fonts( $field_id, $heading );            
          
    
    $params = array_filter($params);
  
    return $params;    
}

/**
* vc_map default values
* @param string
* @param array
*
* @since 1.2
* @return mixed html
*/
function genemy_get_vc_param_html( $param_name = '', $atts = array() ){

    if( !isset($atts[$param_name]) || ($atts[$param_name] == '') ) return '';

    $output = $atts[$param_name];


    $font_container = $param_name.'_font_container';
    if( isset($atts[$font_container])  && ($atts[$font_container] != '')){       
        $typo_settings =  genemy_get_vc_typography_value($atts[$font_container]);
        extract($typo_settings);
        if( '' == $inner_tag ){
            $output = "<{$tag}{$all_classes}{$inline_css}>{$output}</{$tag}>";
        }else{
            $output = "<{$tag}{$all_classes}{$inline_css}><{$inner_tag}>{$output}</{$inner_tag}></{$tag}>";
        }
        
    }
    


    return $output;
}


add_filter( 'perch/vc_param_enable_highlight_text', 'genemy_param_enable_highlight_text', 10, 1 );
function genemy_param_enable_highlight_text( $args ){
    $args['edit_field_class'] = 'vc_col-sm-6';
    return $args;
}
add_filter( 'perch_vc_typography_fields_column', 'genemy_vc_typography_fields_column', 10, 2 );
function genemy_vc_typography_fields_column( $column, $field_id ){
    if( $field_id == 'title' ){
        $column = 3;
    }else{
        $column = 4;
    }
    return intval($column);
}

add_filter( 'perch_vc_typography_std', 'genemy_vc_typography_std', 10, 2 );
function genemy_vc_typography_std( $std, $field_id ){
    if( $field_id == 'title' ){
        $std = '';
    }else{
        $std = 'tag:p';
    }
    return $std;
}

add_filter( 'perch_vc_typography_fields', 'genemy_perch_vc_typography_fields', 10, 2 );
function genemy_perch_vc_typography_fields( $fields, $field_id ){
    if(  in_array($field_id, array('title', 'name', 'section_name') ) ){
    $fields = array(              
                'text_color',              
                'text_underline',
                'extra_class',
                // inline css
                'font_family',
                'font_size',
                'font_style',
                'font_size',
                'text_transform',
                'text_decoration',            
                'font_variant',
                'font_weight',
                'letter_spacing',           
                'line_height',
            );
    }

    if( ($field_id == 'subtitle') || ($field_id == 'sub_title')  || ($field_id == 'lead_text') ){
    $fields = array(              
                'text_color', 
                'size',             
                'text_underline',
                'extra_class',
                // inline css
                'font_family',
                'font_size',
                'font_style',
                'font_size',
                'text_transform',
                'text_decoration',            
                'font_variant',
                'font_weight',
                'letter_spacing',           
                'line_height',
            );
    }
    return $fields;
}

add_filter( 'perch/vc_param_enable_highlight_text', 'genemy_vc_param_enable_highlight_text' );
function genemy_vc_param_enable_highlight_text( $args ){
    $args['std'] = 'yes';
    return $args;
}
function genemy_vc_map_carousel_options(){
    return array(
        array(
                'type' => 'dropdown',
                'heading' => __( 'Large screen column', 'genemy' ),
                'param_name' => 'column_lg',
                'std' => '',
                'value' => array(                    
                    'Default' => '',
                    'Single item' => '1',
                    '2 column' => '2',
                    '3 column' => '3',
                    '4 column' => '4',
                    '5 column' => '5',
                    '6 column' => '6',
                ),
                'edit_field_class' => 'vc_col-sm-6',
            ),
            array(
                'type' => 'dropdown',
                'heading' => __( 'Medium screen column', 'genemy' ),
                'param_name' => 'column_md',
                'std' => '',
                'value' => array(
                    'Default' => '',
                    'Single item' => '1',
                    '2 column' => '2',
                    '3 column' => '3',
                    '4 column' => '4',
                    '5 column' => '5',
                    '6 column' => '6',
                ),
                'edit_field_class' => 'vc_col-sm-6',
            ),            
            array(
                'type' => 'dropdown',
                'heading' => __( 'Autoplay', 'genemy' ),
                'param_name' => 'autoplay',
                'std' => '',
                'value' => array(
                    'Default' => '',
                    'Yes' => '1',
                    'No' => '0',
                ),
                'edit_field_class' => 'vc_col-sm-6',
            ),
            array(
                'type' => 'dropdown',
                'heading' => __( 'Loop', 'genemy' ),
                'param_name' => 'loop',
                'std' => '',
                'value' => array(
                    'Default' => '',
                    'Yes' => '1',
                    'No' => '0',
                ),
                'edit_field_class' => 'vc_col-sm-6',
            ),           
           /* array(
                'type' => 'dropdown',
                'heading' => __( 'Show dots navigation.', 'genemy' ),
                'param_name' => 'dots',
                'std' => '',
                'value' => array(
                    'Default' => '',
                    'Yes' => '1',
                    'No' => '0',
                ),
                'edit_field_class' => 'vc_col-sm-6',
            ),            
            array(
                'type' => 'dropdown',
                'heading' => __( 'Show next/prev buttons.', 'genemy' ),
                'param_name' => 'navs',
                'std' => '',
                'value' => array(
                    'Default' => '',
                    'Yes' => '1',
                    'No' => '0',
                ),
                'edit_field_class' => 'vc_col-sm-6',
            ),*/
   );
}
add_filter( 'genemy_vc_map_carousel_settings', 'genemy_vc_map_carousel_settings', 10, 2 );
function genemy_vc_map_carousel_settings($args, $base){
    $params = $args['params'];
   $new_params = genemy_vc_map_carousel_options();

   $args['params'] = array_merge($params, $new_params) ;


    return $args;
}

add_filter( 'genemy_carousel_attr', 'genemy_carousel_attr', 10, 2 );
function genemy_carousel_attr($output, $atts){
    $car_attr = array();
    $car_options = genemy_vc_map_carousel_options();
    foreach ($car_options as $key => $param) {
        extract($param);
        $car_attr[] = ($atts[$param_name] != '')? 'data-'.$param_name.'='.$atts[$param_name] : '';
    }
    $car_attr = array_filter($car_attr);
    if(!empty($car_attr)){        
        return ' '.implode(' ', $car_attr);
    }
}

/**
* developer pre print
*
* @since 1.2
* @return output
*/
if( !function_exists('genemy_print') ):
function genemy_print($array = array()){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}
endif;

/*
* @since 1.2.5
* @return mixed html
*/

add_filter( 'genemy_add_link_filter', 'genemy_add_link_in_vc_element', 10, 3 );
add_filter( 'perch_modules_text_filter', 'genemy_add_link_in_vc_element', 10, 3 );
function genemy_add_link_in_vc_element( $value, $field_id, $atts ){
    $args = array( 
        'title' => '', 
        'url' => '', 
        'target' => '',
        'class' => '',
        'link_title' => $value 
    );    
    $enable_id = $field_id.'_link';

    if( isset($atts[$enable_id]) && ($atts[$enable_id] == 'yes') ){
        $link_id = $field_id.'_url';
        $href = vc_build_link( $atts[$link_id] );        
        $link_atts = shortcode_atts($args , $href);
        $value = genemy_build_safe_link($link_atts);
    }

    return $value;
}

/*
*
* @param array('title'=>'', 'url' => '', 'target' => '', 'link_title' => $link_title)
*
* @since 1.2.5
* @return mixed html
*/
function genemy_build_safe_link( $args = array() ){
   
    if( empty($args) ) return false;
    extract($args);

    if($link_title == '') return false;
    if( $url == '' ) return $link_title;

    $atts = array();

    $atts[] = 'href="'.esc_url($url).'"';
    $atts[] = ($class != '')? 'class="'.esc_attr($class).'"' : '';    
    $atts[] = ( $title != '' )? 'title="'.esc_attr($title).'"' : '';   
    $atts[] = ( $target != '' )? 'target="'.esc_attr($target).'"' : '';
    $atts = array_filter($atts);

    $output = '<a '.implode(' ', $atts).'>'.$link_title.'</a>';

    return $output;

}

/*
*
* @param array
* @param string
*
* @since 1.2.6
* @return mixed html
*/
function genemy_element_buttons_html($atts, $extra_class = ''){
    if( empty($atts) ) return false;
    if( !isset($atts['btn_url']) ) return false;

    $args = array( 
        'title' => '', 
        'url' => '', 
        'target' => '',
        'class' => 'btn-link btn-arrow rose-color',
    ); 

    $href = vc_build_link( $atts['btn_url'] ); 
    $link_atts = shortcode_atts($args , $href);
    $link_atts['class'] = ( isset($atts['button_style']) && ($atts['button_style'] != ''))? 'btn btn-sm btn-arrow '.$atts['button_style'] : $args['class'];

    if( $extra_class != '' ){
        $output = '<div class="'.esc_attr($extra_class).'">'. genemy_build_safe_btn_link($link_atts).'</div>';
    }else{
        $output = genemy_build_safe_btn_link($link_atts);
    }
    

    return $output;
}

/*
*
* @param array
*
* @since 1.2.6
* @return mixed html
*/
function genemy_build_safe_btn_link( $args = array() ){
   
    if( empty($args) ) return false;
    extract($args);  

    if( $title == '' ) return false;  

    $atts = array();

    $atts[] = 'href="'.esc_url($url).'"';
    $atts[] = ($class != '')? 'class="'.esc_attr($class).'"' : '';    
    $atts[] = ( $title != '' )? 'title="'.esc_attr($title).'"' : '';   
    $atts[] = ( $target != '' )? 'target="'.esc_attr($target).'"' : '';
    $atts = array_filter($atts);

    $output = '<a '.implode(' ', $atts).'><span>'.$title.' <i class="fas fa-angle-double-right"></i></span></a>';

    return $output;

}

/*
*
*
* @since 1.2.6
* @return array
*/
function genemy_allowed_responsive_field_ids(){
    return array('image' => 'Responsive Images', 'bg' => 'Responsive Background');
}

/*
*
* @param array
* @param string
*
* @since 1.2.6
* @return array
*/
add_filter('genemy_vc_responsive_options', 'genemy_vc_responsive_options_image_callback', 10, 2);
function genemy_vc_responsive_options_image_callback( $args, $base ){
    $params = $args['params'];
    $fields = genemy_allowed_responsive_field_ids();

    foreach ($fields as $field_id => $field_title) {        
        if(genemy_is_field_id_exists($params, $field_id)){
            $new_params = genemy_responsive_image_group_args($field_id, $field_title);
            $params = array_merge($params, $new_params);
            $args['params'] = $params;
        }
    }

    return $args;
}

/*
*
* @param string
* @param string
*
* @since 1.2.6
* @return array
*/

function genemy_responsive_image_group_args( $field_id, $field_title = 'Images' ){
    $group_name = 'Responsive options';
    $args = array(
        // params group
            array(
                'type' => 'param_group',
                'group' => esc_attr($group_name),
                'heading' => esc_attr($field_title),
                'param_name' => $field_id.'_media_group',
                'value' => '',
                'params' => array(
                    array(
                         'type' => 'dropdown',
                        'heading' => __( 'Media type', 'genemy' ),
                        'param_name' => 'type',
                        'description' => '',
                        'std' => 'max-width',
                        'value' => array(
                            'Maximum width' => 'max-width',
                            'Minimum width' => 'min-width',
                        ),
                        'edit_field_class' => 'vc_col-sm-4',
                        'admin_label' => true 
                    ),
                    array(
                         'type' => 'textfield',
                        'heading' => __( 'Screen width', 'genemy' ),
                        'param_name' => 'width',
                        'description' => '',
                        'value' => '767px',
                        'edit_field_class' => 'vc_col-sm-4',
                        'admin_label' => true 
                    ),
                    array(
                        'type' => 'attach_image',
                        'heading' => __( 'Media Image', 'genemy' ),
                        'param_name' => 'attach_id',
                        'description' => '',
                        'edit_field_class' => 'vc_col-sm-4',
                    ),
                ) 
            ),  
    );

    return $args;
}

/*
*
* @param string
* @param array
*
* @since 1.2.6
* @return Mixed html
*/
add_action( 'genemy_responsive_images', 'genemy_responsive_images_callback', 10, 2 );
function genemy_responsive_images_callback($field_id, $atts){
    if('' == $field_id) return false;
    if(empty($atts)) return false;
    if($atts[$field_id] == '') return false;
    $params = $atts[$field_id.'_media_group'];
    if(!isset($params)) return false;

    $paramsArr = (function_exists('vc_param_group_parse_atts'))? vc_param_group_parse_atts($params) : array();

    if( !empty($paramsArr) ):
        foreach ($paramsArr as $key => $value) {
            if( isset($value['attach_id']) && $value['attach_id'] != '' ){
                extract($value);
                $arr = wp_get_attachment_image_src($attach_id, 'full');
                echo '<source media="('.esc_attr($type).': '.esc_attr($width).')" srcset="'.esc_url($arr[0]).'">';
            }
        }
        
    endif;

}

/*
*
* @since 1.2.6
* @return array
*/
function genemy_vc_map_hero_slider_options(){
    return array(    
            array(
                'type' => 'dropdown',
                'heading' => __( 'Autoplay', 'genemy' ),
                'param_name' => 'autoplay',
                'std' => '',
                'value' => array(
                    'Default' => '',
                    'Yes' => '1',
                    'No' => '0',
                ),
                'edit_field_class' => 'vc_col-sm-6',
            ),
            array(
                'type' => 'dropdown',
                'heading' => __( 'Pause on Hover', 'genemy' ),
                'param_name' => 'pauseonhover',
                'std' => '',
                'value' => array(
                    'Default' => '',
                    'Yes' => '1',
                    'No' => '0',
                ),
                'edit_field_class' => 'vc_col-sm-6',
            ),
            array(
                'type' => 'dropdown',
                'heading' => __( 'Pagination', 'genemy' ),
                'param_name' => 'pagination',
                'std' => '',
                'value' => array(
                    'Default' => '',
                    'Yes' => '1',
                    'No' => '0',
                ),
                'edit_field_class' => 'vc_col-sm-6',
            ),
           /* array(
                'type' => 'dropdown',
                'heading' => __( 'Animation', 'genemy' ),
                'param_name' => 'animation',
                'std' => 'fade',
                'value' => array(                  
                    'Fade' => 'fade',
                    'Slide' => 'slide',
                ),
                'edit_field_class' => 'vc_col-sm-6',
            ),*/
            array(
                'type' => 'textfield',
                'heading' => __( 'Animation speed', 'genemy' ),
                'param_name' => 'animation_speed',
                'value' => '4500',
                'edit_field_class' => 'vc_col-sm-6',
            ),
   );
}

/*
*
* @since 1.2.6
* @return array
*/
add_filter( 'genemy_vc_map_hero_slider_settings', 'genemy_vc_map_hero_slider_settings', 10, 2 );
function genemy_vc_map_hero_slider_settings($args, $base){
    $params = $args['params'];
   $new_params = genemy_vc_map_hero_slider_options();

   $args['params'] = array_merge($params, $new_params) ;


    return $args;
}

/*
*
* @since 1.2.6
* @return string
*/
function genemy_hero_slider_attr($atts){
    $car_attr = array();
    $car_options = genemy_vc_map_hero_slider_options();
    foreach ($car_options as $key => $param) {
        extract($param);
        $car_attr[] = (isset($atts[$param_name]) && $atts[$param_name] != '')? 'data-'.$param_name.'='.$atts[$param_name] : '';
    }
    $car_attr = array_filter($car_attr);
    if(!empty($car_attr)){        
        return ' '.implode(' ', $car_attr);
    }
}