<?php
/**
 * The VC Functions
 */
add_action( 'vc_before_init', 'genemy_portfolio_templates_shortcode_vc' );
function genemy_portfolio_templates_shortcode_vc( $return = false ) {
    $category = genemy_get_terms( 'portfolio_category', 'slug' );
    $category = ( !$category ) ? array( ) : $category;
    $args = array(
         'icon' => 'genemy-icon',
        'name' => __( 'Portfolio template', 'genemy' ),
        'base' => 'genemy_portfolios',
        'class' => 'genemy-vc',
        'category' => __( 'Genemy', 'genemy' ),
        'description' => __( 'Show Portfolio item with isotope, grid etc', 'genemy' ),
        'params' => array(             
            array(
                 'type' => 'dropdown',
                'heading' => __( 'Display type', 'genemy' ),
                'param_name' => 'template',
                'value' => array(
                    __('Isotope style 1', 'genemy') => 'portfolio/isotope1.php',
                    __('Isotope style 2', 'genemy') => 'portfolio/isotope2.php',
                ),
                'admin_label' => true 
            ),
            array(
                 'type' => 'dropdown',
                'heading' => __( 'Show filter', 'genemy' ),
                'param_name' => 'filter',
                'std' => 'yes',
                'value' => array(
                    __('Yes', 'genemy') => 'yes',
                    __('No', 'genemy') => 'no',
                ),
                'admin_label' => true 
            ),
            array(
                 'type' => 'dropdown',
                'heading' => __( 'Image size', 'genemy' ),
                'param_name' => 'img_size',
                'value' => array_flip( genemy_get_image_sizes_Arr() ),
                'description' => __( 'Enter image size (Example: "thumbnail", "medium", "large", "full" or other sizes defined by theme). Alternatively enter size in pixels (Example: 200x100 (Width x Height)). Leave parameter empty to use "thumbnail" by default.', 'genemy' ),
                'std' => 'genemy-400x--nocrop' 
            ),
            array(
                 'type' => 'dropdown',
                'heading' => __( 'Item spacing', 'genemy' ),
                'param_name' => 'spacing',
                'std' => 'yes',
                'value' => array(
                    __('Yes', 'genemy') => 'yes',
                    __('No', 'genemy') => 'no',
                ),
                'admin_label' => true 
            ),
            array(
                 'type' => 'dropdown',
                'heading' => __( 'Link type', 'genemy' ),
                'param_name' => 'link_type',
                'std' => 'popup',
                'value' => array(
                    __('Popup', 'genemy') => 'popup',
                    __('Link', 'genemy') => 'link',
                ),
                'admin_label' => true 
            ),
            array(
                 'type' => 'number',
                'heading' => __( 'Posts per page', 'genemy' ),
                'param_name' => 'posts_per_page',
                'value' => 9,
                'min' => -1,
                'max' => '100',
                'step' => '1',
                'description' =>  __('Specify number of items that you want to show. Enter -1 to get all items', 'genemy'),
                'admin_label' => true 
            ),
            array(
                 'type' => 'perch_select',
                'multiple' => 'multiple',
                'heading' => __( 'Select category', 'genemy' ),
                'param_name' => 'tax_term',
                'value' => genemy_get_terms( 'portfolio_category' ),
                'group' => __('Portfolio settings', 'genemy'),
                'description' => 'Default all category are selected' 
            ),
            array(
                 'type' => 'perch_select',
                'heading' => __( 'Active category', 'genemy' ),
                'param_name' => 'active',
                'value' => array_merge( array(
                     '' => 'All' 
                ), $category ),
                'group' => __('Portfolio settings', 'genemy'),
                'dependency' => array(
                     'element' => 'template',
                    'value' => 'portfolio/isotope.php' 
                ) 
            ),
            array(
                 'type' => 'textfield',
                'heading' => __( 'Post ID\'s', 'genemy' ),
                'param_name' => 'id',
                'value' => '',
                'description' => 'Enter comma separated ID\'s of the posts that you want to show',
                'group' => __('Portfolio settings', 'genemy'),
            ),
            array(
                 'type' => 'dropdown',
                'heading' => __( 'Taxonomy term operator', 'genemy' ),
                'param_name' => 'tax_operator',
                'description' => 'IN - posts that have any of selected categories terms<br/>NOT IN - posts that is does not have any of selected terms<br/>AND - posts that have all selected terms',
                'value' => array(
                     'IN' => 'IN',
                    'NOT IN' => 'NOT IN',
                    'AND' => 'AND' 
                ),
                'group' => __('Portfolio settings', 'genemy'),
            ),
            array(
                 'type' => 'textfield',
                'heading' => __( 'Authors', 'genemy' ),
                'param_name' => 'author',
                'description' => 'Enter here comma-separated list of author\'s IDs. Example: 1,7,18',
                'group' => __('Portfolio settings', 'genemy'),
            ),
            array(
                 'type' => 'dropdown',
                'heading' => __( 'Order', 'genemy' ),
                'param_name' => 'order',
                'description' => 'Posts order',
                'value' => array_flip(array(
                     'desc' => __( 'Descending', 'genemy' ),
                    'asc' => __( 'Ascending', 'genemy' ) 
                )),
                'group' => __('Portfolio settings', 'genemy'),
            ),
            array(
                 'type' => 'dropdown',
                'heading' => __( 'Order by', 'genemy' ),
                'param_name' => 'orderby',
                'description' => __( 'Order posts by', 'genemy' ),
                'selected' => 'date',
                'value' => array_flip(array(
                     'none' => __( 'None', 'genemy' ),
                    'id' => __( 'Post ID', 'genemy' ),
                    'post__in' => __( 'Post ID\'s', 'genemy' ),
                    'author' => __( 'Post author', 'genemy' ),
                    'title' => __( 'Post title', 'genemy' ),
                    'name' => __( 'Post slug', 'genemy' ),
                    'date' => __( 'Date', 'genemy' ),
                    'modified' => __( 'Last modified date', 'genemy' ),
                    'parent' => __( 'Post parent', 'genemy' ),
                    'rand' => __( 'Random', 'genemy' ),
                    'comment_count' => __( 'Comments number', 'genemy' ),
                    'menu_order' => __( 'Menu order', 'genemy' ),
                    'meta_value' => __( 'Meta key values', 'genemy' ) 
                )), 
                'group' => __('Portfolio settings', 'genemy'),
            ) 
        ) 
    );

    $args = apply_filters( 'genemy_vc_map_filter', $args, $args['base'] );
    if( $return ) {
        return genemy_vc_get_params_value($args);
    }else{
        vc_map( $args );
    }
}

