<?php
if( !function_exists('vc_get_shared') ):
/**
 * @param string $asset
 *
 * @return array|string
 */
function vc_get_shared( $asset = '' ) {
    switch ( $asset ) {
        case 'colors':
            return VcSharedLibrary::getColors();
            break;

        case 'colors-dashed':
            return VcSharedLibrary::getColorsDashed();
            break;

        case 'icons':
            return VcSharedLibrary::getIcons();
            break;

        case 'sizes':
            return VcSharedLibrary::getSizes();
            break;

        case 'button styles':
        case 'alert styles':
            return VcSharedLibrary::getButtonStyles();
            break;
        case 'message_box_styles':
            return VcSharedLibrary::getMessageBoxStyles();
            break;
        case 'cta styles':
            return VcSharedLibrary::getCtaStyles();
            break;

        case 'text align':
            return VcSharedLibrary::getTextAlign();
            break;

        case 'cta widths':
        case 'separator widths':
            return VcSharedLibrary::getElementWidths();
            break;

        case 'separator styles':
            return VcSharedLibrary::getSeparatorStyles();
            break;

        case 'separator border widths':
            return VcSharedLibrary::getBorderWidths();
            break;

        case 'single image styles':
            return VcSharedLibrary::getBoxStyles();
            break;

        case 'single image external styles':
            return VcSharedLibrary::getBoxStyles( array( 'default', 'round' ) );
            break;

        case 'toggle styles':
            return VcSharedLibrary::getToggleStyles();
            break;

        case 'animation styles':
            return VcSharedLibrary::getAnimationStyles();
            break;

        default:
            # code...
            break;
    }

    return '';
}
endif;

include GENEMY_DIR . '/admin/vc-icons.php';
include GENEMY_DIR . '/admin/vc-typography-field.php';
if( class_exists('PerchVcMap')):
include GENEMY_DIR . '/admin/vc-extends2.php';
endif;

if ( function_exists( 'vc_set_as_theme' ) ):
    vc_set_as_theme( $disable_updater = false );
endif;
$dir = get_template_directory() . '/vc_templates';
vc_set_shortcodes_templates_dir( $dir );

function genemy_vc_hero_options(){
    $array = array('Default Landing', 'Creative Agency', 'Startup Agency', 'Design Studio', 'Digital Agency',
        'Business Multipurpose', 'Marketing Agency', 'App Showcase', 'Innovation Agency', 'Portfolio Minimal',
        'Creative Business', 'Business Agency', 'Freelancer', 'App Landing');
    $new_arr = array();
    foreach ($array as $key => $value) {
        $new_arr["{$value}"] = 'hero-'.($key+1);
    }

    return $new_arr;
}

if ( !function_exists( 'genemy_get_posts_dropdown' ) ):
    function genemy_get_posts_dropdown( $args = array( ) ) {
        global $wpdb, $post;
        $dropdown  = array( );
        $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) {
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                $dropdown[ get_the_ID() ] = get_the_title();
            } //$the_query->have_posts()
        } //$the_query->have_posts()
        wp_reset_postdata();
        return $dropdown;
    }
endif;
if ( !function_exists( 'genemy_get_terms' ) ):
    function genemy_get_terms( $tax = 'category', $key = 'id' ) {
        $terms = array( );
        if ( !taxonomy_exists( $tax ) )
            return false;
        if ( $key === 'id' )
            foreach ( (array) get_terms( $tax, array(
                 'hide_empty' => false 
            ) ) as $term )
                $terms[ $term->term_id ] = $term->name;
        elseif ( $key === 'slug' )
            foreach ( (array) get_terms( $tax, array(
                 'hide_empty' => false 
            ) ) as $term )
                $terms[ $term->slug ] = $term->name;
        return $terms;
    }
endif;
if ( !function_exists( 'genemy_number_settings_field' ) ):
    function genemy_number_settings_field( $settings, $value ) {
        return '<div class="my_param_block">' . '<input name="' . esc_attr( $settings[ 'param_name' ] ) . '" class="wpb_vc_param_value wpb-textinput ' . esc_attr( $settings[ 'param_name' ] ) . ' ' . esc_attr( $settings[ 'type' ] ) . '_field" type="number" min="' . intval( $settings[ 'min' ] ) . '" max="' . intval( $settings[ 'max' ] ) . '" step="' . intval( $settings[ 'step' ] ) . '" value="' . esc_attr( $value ) . '" />' . '</div>'; // This is html markup that will be outputted in content elements edit form
    }
endif;
if ( !function_exists( 'genemy_vc_image_upload_settings_field' ) ):
    function genemy_vc_image_upload_settings_field( $settings, $value ) {
        return '<div class="genemy-upload-container">

      <input type="text" name="' . esc_attr( $settings[ 'param_name' ] ) . '" value="' . esc_url( $value ) . '" class="wpb_vc_param_value wpb-textinput perch-generator-attr perch-generator-upload-value" />

      <a href="javascript:;" class="button genemy-upload-button"><span class="wp-media-buttons-icon"></span>' . esc_attr( __( 'Media manager', 'genemy' ) ) . '</a>

      <img width="80" src="' . esc_url( $value ) . '" alt="">     

    </div>';
    }
endif;
if ( !function_exists( 'genemy_perch_select_settings_field' ) ):
    function genemy_perch_select_settings_field( $args, $value ) {
        $selected = is_array( $value ) ? $value : explode( ',', $value );
        $args     = wp_parse_args( $args, array(
             'param_name' => '',
            'heading' => '',
            'class' => 'wpb_vc_param_value wpb-input wpb-select dropdown',
            'multiple' => '',
            'size' => '',
            'disabled' => '',
            'selected' => $selected,
            'none' => '',
            'value' => array( ),
            'style' => '',
            'format' => 'keyval', // keyval/idtext
            'noselect' => '' // return options without <select> tag
        ) );
        $options  = array( );
        if ( !is_array( $args[ 'value' ] ) )
            $args[ 'value' ] = array( );
        if ( $args[ 'param_name' ] )
            $name = ' name="' . $args[ 'param_name' ] . '"';
        if ( $args[ 'param_name' ] )
            $args[ 'param_name' ] = ' id="' . $args[ 'param_name' ] . '"';
        if ( $args[ 'class' ] )
            $args[ 'class' ] = ' class="' . $args[ 'class' ] . '"';
        if ( $args[ 'style' ] )
            $args[ 'style' ] = ' style="' . esc_attr( $args[ 'style' ] ) . '"';
        if ( $args[ 'multiple' ] )
            $args[ 'multiple' ] = ' multiple="multiple"';
        if ( $args[ 'disabled' ] )
            $args[ 'disabled' ] = ' disabled="disabled"';
        if ( $args[ 'size' ] )
            $args[ 'size' ] = ' size="' . $args[ 'size' ] . '"';
        if ( $args[ 'none' ] && $args[ 'format' ] === 'keyval' )
            $args[ 'options' ][ 0 ] = $args[ 'none' ];
        if ( $args[ 'none' ] && $args[ 'format' ] === 'idtext' )
            array_unshift( $args[ 'options' ], array(
                 'id' => '0',
                'text' => $args[ 'none' ] 
            ) );
        // keyval loop
        // $args['options'] = array(
        //   id => text,
        //   id => text
        // );
        if ( $args[ 'format' ] === 'keyval' )
            foreach ( $args[ 'value' ] as $id => $text ) {
                $options[ ] = '<option value="' . (string) $id . '">' . (string) $text . '</option>';
            } //$args[ 'value' ] as $id => $text
        // idtext loop
        // $args['options'] = array(
        //   array( id => id, text => text ),
        //   array( id => id, text => text )
        // );
        elseif ( $args[ 'format' ] === 'idtext' )
            foreach ( $args[ 'options' ] as $option ) {
                if ( isset( $option[ 'id' ] ) && isset( $option[ 'text' ] ) )
                    $options[ ] = '<option value="' . (string) $option[ 'id' ] . '">' . (string) $option[ 'text' ] . '</option>';
            } //$args[ 'options' ] as $option
        $options = implode( '', $options );
        if ( is_array( $args[ 'selected' ] ) ) {
            foreach ( $args[ 'selected' ] as $key => $value ) {
                $options = str_replace( 'value="' . $value . '"', 'value="' . $value . '" selected="selected"', $options );
            } //$args[ 'selected' ] as $key => $value
        } //is_array( $args[ 'selected' ] )
        else {
            $options = str_replace( 'value="' . $args[ 'selected' ] . '"', 'value="' . $args[ 'selected' ] . '" selected="selected"', $options );
        }
        $output = ( $args[ 'noselect' ] ) ? $options : '<select' . $name . $args[ 'param_name' ] . $args[ 'class' ] . $args[ 'multiple' ] . $args[ 'size' ] . $args[ 'disabled' ] . $args[ 'style' ] . '>' . $options . '</select>';
        // $output .= '<input type="hidden" '.$name.' value="'.$value.'">';
        return '<div class="perch_select_param_block">' . $output . '</div>';
    }
endif;

function genemy_vc_icontype_dropdown( $name = 'icon_type', $value = array( 'flaticon' => 'flaticon', 'Linecons' => 'linecons', 'Entypo' => 'entypo', 'Typicons' => 'typicons', 'Openiconic' => 'openiconic', 'Fontawesome' => 'fontawesome' ) ) {
    return array(
         'type' => 'dropdown',
        'heading' => __( 'Icon type', 'genemy' ),
        'param_name' => $name,
        'description' => '',
        'value' => $value 
    );
}
function genemy_vc_icon_set( $type, $name = 'icon_fontawesome', $value = '', $dependency = '' ) {
    $arr = array(
         'type' => 'iconpicker',
        'heading' => __( 'Icon', 'genemy' ),
        'param_name' => $name,
        'value' => $value,
        'settings' => array(
             'emptyIcon' => true,
            'type' => $type,
            'iconsPerPage' => 4000 
        ),
        'description' => __( 'Select icon from library.', 'genemy' ) 
    );
    if ( $dependency != '' ) {
        $arr[ 'dependency' ][ 'element' ] = $dependency;
        $arr[ 'dependency' ][ 'value' ]   = $type;
    } //$dependency != ''
    return $arr;
}

function genemy_vc_animation_duration( $label = true, $default = 300 ){
    return array(
                 'type' => 'textfield',
                'value' => intval($default),
                'heading' => __( 'Animation delay', 'genemy' ) ,
                'param_name' => 'animation_delay',
                'admin_label' => $label,
                'description' => __( 'Number only', 'genemy' ),       
            );
}

function genemy_vc_animation_type(){
    $output = vc_map_add_css_animation();
    $output['group'] = __( 'Animation', 'genemy' );

    return $output;
}

add_filter( 'genemy_vc_element_params', 'genemy_vc_element_params_callback' );
function genemy_vc_element_params_callback($args){
    $args['params'][] = genemy_vc_animation_type();
    $args['params'][] = genemy_vc_animation_duration();
    return $args;
}

function genemy_animation_attr($css_animation, $animation_delay = 100){
    $output = '';
    if($css_animation == '') return $output;  
    $output .= ' data-wow-delay="'.intval($animation_delay).'ms"';

    return $output;
}
function genemy_vc_heading_size_options(){
    $arr = array(
        __('H2 Normal', 'genemy') => 'h2:h2-normal',
        __('H2 Huge', 'genemy') => 'h2:h2-huge',
        __('H2 extra large', 'genemy') => 'h2:h2-xl',
        __('H2 Large', 'genemy') => 'h2:h2-lg',
        __('H2 Medium', 'genemy') => 'h2:h2-md',
        __('H2 small', 'genemy') => 'h2:h2-sm',
        __('H2 Extra small', 'genemy') => 'h2:h2-xs',
        
        __('H3 Normal', 'genemy') => 'h3:h3-normal',
        __('H3 extra large', 'genemy') => 'h3:h3-xl',
        __('H3 Large', 'genemy') => 'h3:h3-lg',
        __('H3 Medium', 'genemy') => 'h3:h3-md',
        __('H3 small', 'genemy') => 'h3:h3-sm',
        __('H3 Extra small', 'genemy') => 'h3:h3-xs',

         __('H4 extra large') => 'h4:h4-xl',
        __('H4 Large', 'genemy') => 'h4:h4-lg',
        __('H4 Medium', 'genemy') => 'h4:h4-md',
        __('H4 small', 'genemy') => 'h4:h4-sm',
        __('H4 Extra small', 'genemy') => 'h4:h4-xs',

         __('H5 extra large', 'genemy') => 'h5:h5-xl',
        __('H5 Large', 'genemy') => 'h5:h5-lg',
        __('H5 Medium', 'genemy') => 'h5:h5-md',
        __('H5 small', 'genemy') => 'h5:h5-sm',
        __('H5 Extra small', 'genemy') => 'h5:h5-xs',
    );

    return $arr;
}
function genemy_vc_underline_color_options(){
    $arr = array(
        __('None', 'genemy') => 'none',
        __('Image', 'genemy') => 'underline-image',
         __('Font weight bold', 'genemy') => 'font-weight-bold',
         __('Italic text', 'genemy') => 'font-italic',
         __('Indicates uppercased text', 'genemy') => 'text-uppercase',
    );

    $colors = genemy_default_color_classes();
    foreach ($colors as $key => $value) {
        $color_name = $value['label'];
        $color_class = 'underline-'.$key;
        $arr[$color_name] = $color_class;
    }

    return $arr;
}
function genemy_vc_global_color_options(){
    $arr = array();

    $colors = genemy_default_color_classes();
    foreach ($colors as $key => $value) {
        $color_name = $value['label'];
        $color_class = $key;
        $arr[$color_name] = $color_class;
    }

    return $arr;
}

function genemy_vc_text_size_options(){
    return array(
        __('Default', 'genemy') => 'p-normal',
        __('Small', 'genemy') => 'p-sm',
        __('Medium', 'genemy') => 'p-md',
        __('large', 'genemy') => 'p-lg',
        __('Font weight bold', 'genemy') => 'p-lg font-weight-bold',
         __('Italic text', 'genemy') => 'p-lg font-italic',
         __('Indicates uppercased text', 'genemy') => 'p-lg text-uppercase',
    );
}

function genemy_vc_spacing_options($type='padding', $pos = 'bottom'){
    $total = apply_filters('genemy_vc_spacing_total', 150);
    $arr = array();
    $prefix = ($type == 'padding')? 'p-' : 'm-';
    $prefix = $prefix.$pos.'-';
    $arr = array(
        __('Default', 'genemy') => $prefix.'default',     
    );
    for ($i=0; $i <= $total; $i+=5) { 
        $name = ucfirst($type).' '.$pos. ' '.$i.'px';
       $arr[$name] = $prefix.$i; 
    }
    return $arr;
}

function genemy_vc_spacing_options_param($type = 'padding', $pos = 'bottom'){
    $prefix = ($type == 'padding')? 'p' : 'm';
    $param_name = $prefix.$pos;
    $heading = ucfirst($type).' '.$pos;
    return array(
                'type' => 'dropdown',
                'heading' => $heading,
                'param_name' => $param_name,
                'value' => genemy_vc_spacing_options($type, $pos),
                'group' => __( 'Spacing option', 'genemy' ),
            );
}

function genemy_vc_content_list_group(){
    return array(
            'type' => 'param_group',
            'save_always' => true,
            'heading' => __( 'Content list', 'genemy' ),
            'param_name' => 'content_list',
            'value' => urlencode( json_encode( array(
                array( 'title' => 'Fully Responsive Design' ),
                array( 'title' => 'Bootstrap 4.0 Based' ),
                array( 'title' => 'Google Analytics Ready' ),
                array( 'title' => 'Cross Browser Compatability' ),
                array( 'title' => 'Developer Friendly Commented Code' ),
                array( 'title' => 'and much more...' ),
            ) ) ),
            'params' => array(
                 array(
                    'type' => 'textarea',
                    'heading' => __( 'Title', 'genemy' ),
                    'param_name' => 'title',
                    'description' => '',
                    'value' => '',
                    'admin_label' => true 
                ),
            ),            
            'dependency' => array(
                'element' => 'enable_list',
                'value' => 'yes'
            )  
        );
}

if( !function_exists('genemy_target_param_list') ):
function genemy_target_param_list() {
    return array(
        __( 'Same window', 'genemy' ) => '_self',
        __( 'New window', 'genemy' ) => '_blank',
    );
}
endif;


function genemy_vc_counter_group(){
    return array(
        'type' => 'param_group',
        'save_always' => true,
        'heading' => __( 'Counter up', 'genemy' ),
        'param_name' => 'counter_group',
        'value' => urlencode( json_encode( array(
            array(
                 'title' => 'Happy Clients',
                'count' => '438',
                'prefix' => '3,',
            ),
            array(
                 'title' => 'Tickets Closed',
                'count' => '263',
                'prefix' => '1,',
            ),
        ) ) ),
        'params' => array(
            array(
                 'type' => 'textfield',
                'heading' => __( 'Counter Prefix', 'genemy' ),
                'param_name' => 'prefix',
                'description' => '',
                'value' => '3,',
                'admin_label' => true 
            ),
            array(
                 'type' => 'textfield',
                'heading' => __( 'Count', 'genemy' ),
                'param_name' => 'count',
                'description' => 'Number only',
                'value' => '' ,
                'admin_label' => true 
            ),
             array(
                 'type' => 'textfield',
                'heading' => __( 'Title', 'genemy' ),
                'param_name' => 'title',
                'description' => '',
                'value' => '',
                'admin_label' => true 
            ),
            
        ),
        'dependency' => array(
            'element' => 'display',
            'value' => 'counter'
        ),
        'group' => __( 'Content bottom', 'genemy' ),  
    );
}

function genemy_vc_techs_group(){
    return array(
        'type' => 'param_group',
        'save_always' => true,
        'heading' => __( 'Techs', 'genemy' ),
        'param_name' => 'techs_group',
        'value' => urlencode( json_encode( array(
            array(
                 'title' => 'HTML5',
                'icon' => 'fa fa-html5',
                'image' => ''
            ),
            array(
                 'title' => 'CSS3',
                'icon' => 'fa fa-css3',
                'image' => ''
            ),
            array(
                 'title' => 'jsfiddle',
                'icon' => 'fa fa-jsfiddle',
                'image' => ''
            ),
            array(
                 'title' => 'git',
                'icon' => 'fa fa-git',
                'image' => ''
            ),
            array(
                 'title' => 'WordPress',
                'icon' => 'fa fa-wordpress',
                'image' => ''
            ),
            array(
                 'title' => 'mixcloud',
                'icon' => 'fa fa-mixcloud',
                'image' => ''
            ),
        ) ) ),
        'params' => array(
             array(
                'type' => 'textfield',
                'heading' => __( 'Title', 'genemy' ),
                'param_name' => 'title',
                'description' => '',
                'value' => '',
                'admin_label' => true 
            ),
             genemy_vc_icon_set( 'fontawesome', 'icon' ),
             array(
                'type' => 'image_upload',
                'heading' => __( 'Icon Image', 'genemy' ),
                'param_name' => 'image',
                'description' => 'You can use image instead of Icon',
                'value' => '' 
            ),
        ),
        'dependency' => array(
            'element' => 'display',
            'value' => 'techs'
        ),
        'group' => __( 'Content bottom', 'genemy' ),  
    );
}

function genemy_vc_strategy_list_group($group = true){
    $output = array(
            'type' => 'param_group',
            'save_always' => true,
            'heading' => __( 'Content group', 'genemy' ),
            'param_name' => 'strategy_list',
            'value' => urlencode( json_encode( array(
                array(
                     'title' => 'Vitae auctor integer congue magna at pretium purus pretium ligula rutrum luctus risus velna auctor congue tempus undo magna ',
                ),
                array(
                     'title' => 'An enim nullam tempor sapien gravida donec enim ipsum porta blandit justo integer odio velna vitae auctor integer luctus',
                ),
            ) ) ),
            'params' => array(
                 array(
                    'type' => 'textarea',
                    'heading' => __( 'Description', 'genemy' ),
                    'param_name' => 'title',
                    'description' => '',
                    'value' => '',
                    'admin_label' => true 
                ),
            ),
        );

    if($group) $output['group'] = __( 'Content', 'genemy' );

    return $output;
}

function genemy_vc_get_strategy_list( $type = 'list', $paramsArr = array() , $duration = 400  ){
    if( empty($paramsArr) ) return false;
   
    if( $type == 'list' ){
        echo '<ul class="content-list">';
            foreach ($paramsArr as $key => $value): 
                extract($value);                                    
                echo '<li class="wow fadeInUp" data-wow-delay="'.intval($duration).'ms">';
                    echo wpautop($title);                 
                echo '</li>';
                $duration = $duration + 100;
            endforeach;
        echo '</ul>';
    }else{
        foreach ($paramsArr as $key => $value): 
            extract($value);                                    
            echo '<div class="wow fadeInUp" data-wow-delay="'.intval($duration).'ms">';
                echo wpautop($title);                 
            echo '</div>';
            $duration = $duration + 100;
        endforeach;
    }
}

function genemy_vc_element_display_option(){
    return array(
                    'None' => 'none',
                    'Video link' => 'video',                    
                    'Counter' => 'counter',
                    'Techs' => 'techs',
                );
}

function genemy_vc_get_content_list_group( $paramsArr = array(), $animation = '', $delay = '100'){
    if(empty($paramsArr)) return false;
    echo '<ul class="content-list">';
    foreach ($paramsArr as $key => $value):                     
        echo '<li class="wow '.esc_attr($animation).'" data-wow-delay="'. intval($delay).'ms">'.esc_attr($value['title']).'</li>';
        $delay = $delay + 100; 
    endforeach; 
    echo '</ul>';
}

if ( function_exists( 'vc_set_as_theme' ) ):
    vc_set_as_theme( $disable_updater = false );
    $list = array(
         'page',
        'post',
        'team',
        'portfolio',
        'service',
        'job' 
    );
    vc_set_default_editor_post_types( $list );
endif;
/* global vc include files */
foreach ( glob( GENEMY_DIR . "/vc-extends/*.php" ) as $filename ) {
    include $filename;
} //glob( GENEMY_DIR . "/admin/vc-extends/*.php" ) as $filename

/**
* Possible class options
*
* @since 1.2
* @return array
*/
function genemy_div_class_options(){
    $array = array(
            'None' => '',
            'Section name' => 'section-id',
            'Os version' => 'os-version',
            'Pricing validity' => 'validity',
            'Price' => 'price',
            'Font weight 100' => 'txt-100',
            'Font weight thin' => 'txt-300',
            'Font weight regular' => 'txt-400',
            'Font weight 500' => 'txt-500',
            'Font weight 600' => 'txt-600',
            'Font weight Bold' => 'txt-700',
            'Font weight 800' => 'txt-800',
            'Font weight 900' => 'txt-900',
            'Font weight 900' => 'txt-900',
            'Text uppercase' => 'text-uppercase',
            'Text lowercase' => 'text-lowercase',
            'Text capitalize' => 'text-capitalize',
            'Text lead' => 'text-lead',
            'Truncate the text with an ellipsis' => 'text-truncate',
            'Text Muted' => 'text-muted',
            'Text italic' => 'font-italic',
            'Text success' => 'text-success',                               
            'Text danger' => 'text-danger',                               
            'Text warning' => 'text-warning',                               
            'Text info' => 'text-info',                               
            'Text opacity 25%' => 'opacity-25',                               
            'Text opacity 50%' => 'opacity-50',                               
            'Text opacity 75%' => 'opacity-75',                               
            'Text monospace' => 'text-monospace',                               
            'Blockquote' => 'blockquote',
            'Blockquote footer' => 'blockquote-footer',
            'Figure caption' => 'figure-caption',
            'Attribute' => 'attribute',
            'Screen readers text' => 'sr-only',
             'Clearfix' => 'clearfix',
           
        );
    $array = apply_filters( 'genemy_div_class_options', $array );

    return $array; 
}

function genemy_vc_tag_options(){
    $arr = array(
        __('Default', 'genemy') => '',
        __('H1', 'genemy') => 'h1',
        __('H2', 'genemy') => 'h2',
        __('H3', 'genemy') => 'h3',
        __('H4', 'genemy') => 'h4',
        __('H5', 'genemy') => 'h5',
        __('H6', 'genemy') => 'h6',
        __('P', 'genemy') => 'p',                
        __('Span', 'genemy') => 'span',       
        __('Small', 'genemy') => 'small',       
        __('Strong', 'genemy') => 'strong', 
        __('Div', 'genemy') => 'div',
        __('Footer', 'genemy') => 'footer', 
         __('Underline', 'genemy') => 'u',      
        __('Blockquote', 'genemy') => 'blockquote',               
        __('Address', 'genemy') => 'address',       
        __('em', 'genemy') => 'em',       
        __('Del', 'genemy') => 'del',       
        __('Mark', 'genemy') => 'mark',       
        __('S', 'genemy') => 's',       
        __('Ins', 'genemy') => 'ins',       
        __('Code', 'genemy') => 'code',       
        __('Pre', 'genemy') => 'pre',       
        __('Var', 'genemy') => 'var',       
        __('kbd', 'genemy') => 'kbd',       
        __('samp', 'genemy') => 'samp',       
             
    );

    return $arr;
}

function genemy_vc_size_class_options(){
    $arr = array(
        __('Default', 'genemy') => '',
        __('Huge', 'genemy') => 'huge',
        __('Extra large', 'genemy') => 'xl',
        __('Large', 'genemy') => 'lg',
        __('Medium', 'genemy') => 'md',
        __('Small', 'genemy') => 'sm',
        __('Extra small', 'genemy') => 'xs',
    );

    return $arr;
}

function genemy_vc_weight_class_options(){
    $arr = array(
        __('Default', 'genemy') => '',
        __('Font weight thin', 'genemy') => 'txt-300',    
        __('Font weight normal', 'genemy') => 'txt-400',
        __('Font weight 500', 'genemy') => 'txt-500',    
        __('Font weight 600', 'genemy') => 'txt-600',    
        __('Font weight Bold', 'genemy') => 'txt-700',    
        __('Font weight 800', 'genemy') => 'txt-800',    
        __('Font weight 900', 'genemy') => 'txt-900',  
         __('Section id', 'genemy') => 'section-id',  
    );

    return $arr;
}

/**
* vc_map default values
* @param array
*
* @since 1.2
* @return array
*/
function genemy_vc_get_params_value($args = array(), $_content = NULL){
    $array = array();
    if( !isset($args['base']) || !isset($args['params']) ){
        return $array;
    }

    $newarray = array();
    $map_arr = $args['params'];
    foreach ( $map_arr as $key => $value) {
        $param_name = isset($value['param_name'])? $value['param_name'] : '';
            $std = '';
            if(isset($value['value']) ){
                if( is_array($value['value']) ) {                    
                    if(!isset($value['std'])){
                        $array = $value['value']; reset($array); $std = key($array);
                    }else{
                        $std = $value['std'];
                    }
                }else {
                    $std = $value['value'];
                }
            }
            $std = isset($value['std'])? $value['std'] : $std;

            if( $param_name != '' ){
                $newarray[$param_name] = $std;
            }
    }
    $newarray['content'] = $_content;


    if( !empty($newarray) ) $array = $newarray;

    return $array;
}

function genemy_validate_video_url($url = '#'){
  $url_parse = wp_parse_url($url);
  $url = str_replace('watch?v=', 'embed/', $url);
  return $url;
}
