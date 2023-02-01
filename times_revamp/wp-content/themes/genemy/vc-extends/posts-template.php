<?php
/**

* The VC Functions

*/
add_action( 'vc_before_init', 'genemy_posts_shortcode_vc' );
function genemy_posts_shortcode_vc( $return = false ) {
    $category = genemy_get_terms( 'category', 'slug' );
    $category = ( !$category ) ? array( ) : $category;
    $args = array(
         'icon' => 'genemy-icon',
        'name' => __( 'Posts template', 'genemy' ),
        'base' => 'genemy_posts',
        'class' => 'genemy-vc',
        'category' => __( 'Genemy', 'genemy' ), 
        'description' => '',
        'params' => array(
             array(
                 'type' => 'dropdown',
                'heading' => __( 'Display type', 'genemy' ),
                'param_name' => 'template',
                'value' => array(
                     'Default' => 'templates/default-loop.php', 
                     'Carousel' => 'templates/carousel-loop.php', 
                     'Isotope' => 'templates/isotope-loop.php', 
                ),
                'std' => 'templates/default-loop.php',
                'admin_label' => true 
            ),
            array(
                 'type' => 'dropdown',
                'heading' => __( 'Image size', 'genemy' ),
                'param_name' => 'img_size',
                'value' => array_flip( genemy_get_image_sizes_Arr() ),
                'description' => __( 'Enter image size (Example: "thumbnail", "medium", "large", "full" or other sizes defined by theme). Alternatively enter size in pixels (Example: 200x100 (Width x Height)). Leave parameter empty to use "thumbnail" by default.', 'genemy' ),
                'std' => 'genemy-600x600-crop' 
            ),
            array(
                 'type' => 'number',
                'heading' => __( 'Excerpt length', 'genemy' ),
                'param_name' => 'excerpt_length',
                'value' => '18',
                'min' => '0',
                'max' => '100',
                'step' => '1',
                'description' => 'Specify number of posts excerpt length that you want to show. Enter 0 to hide excerpt',
                'admin_label' => true 
            ),
            array(
                 'type' => 'number',
                'heading' => __( 'Posts per page', 'genemy' ),
                'param_name' => 'posts_per_page',
                'value' => '3',
                'min' => '-1',
                'max' => '100',
                'step' => '1',
                'description' => 'Specify number of posts that you want to show. Enter -1 to get all posts',
                'admin_label' => true 
            ),
            array(
                 'type' => 'dropdown',
                'heading' => __( 'Display filter', 'genemy' ),
                'param_name' => 'filter',
                'std' => 'yes',
                'value' => array(
                     'Yes' => 'yes',
                    'No' => 'no' 
                ),
                'dependency' => array(
                     'element' => 'template',
                    'value' => array(
                         'templates/isotope-loop.php' 
                    ) 
                ) 
            ),
            array(
                 'type' => 'perch_select',
                'heading' => __( 'Active category', 'genemy' ),
                'param_name' => 'active',
                'value' => array_merge( array(
                     '' => 'All' 
                ), $category ),               
                'dependency' => array(
                     'element' => 'template',
                    'value' => array(
                         'templates/isotope-loop.php',
                        
                    ) 
                ) 
            ),
            array(
                 'type' => 'number',
                'heading' => __( 'Column', 'genemy' ),
                'param_name' => 'column',
                'value' => '3',
                'min' => '2',
                'max' => '4',
                'step' => '1',
                'dependency' => array(
                     'element' => 'template',
                    'value' => array(
                         'templates/carousel-loop.php',
                        
                    ) 
                ) 
            ),
            array(
                 'type' => 'dropdown',
                'heading' => __( 'Autoplay', 'genemy' ),
                'param_name' => 'autoplay',
                'std' => 'no',
                'value' => array(
                     'Yes' => 'yes',
                    'No' => 'no' 
                ),
                'dependency' => array(
                     'element' => 'template',
                    'value' => array(
                         'templates/carousel-loop.php' 
                    ) 
                ) 
            ),
            array(
                 'type' => 'dropdown',
                'heading' => __( 'Dots', 'genemy' ),
                'param_name' => 'dots',
                'std' => 'no',
                'value' => array(
                     'Yes' => 'yes',
                    'No' => 'no' 
                ),
                'dependency' => array(
                     'element' => 'template',
                    'value' => array(
                         'templates/carousel-loop.php' 
                    ) 
                ) 
            ),
            array(
                 'type' => 'dropdown',
                'heading' => __( 'Navs', 'genemy' ),
                'param_name' => 'navs',
                'std' => 'no',
                'value' => array(
                     'Yes' => 'yes',
                    'No' => 'no' 
                ),
                'dependency' => array(
                     'element' => 'template',
                    'value' => array(
                         'templates/default-loop.php' 
                    ) 
                ) 
            ),
             array(
                 'type' => 'dropdown',
                'heading' => __( 'Ignore sticky', 'genemy' ),
                'param_name' => 'ignore_sticky_posts',
                'description' => 'Select Yes to ignore posts that is sticked',
                'value' => array_flip( array(
                     'no' => __( 'No', 'genemy' ),
                    'yes' => __( 'Yes', 'genemy' ) 
                ) ),
                'group' => 'Posts Settings' 
            ) ,
            array(
                 'type' => 'textfield',
                'heading' => __( 'Post ID\'s', 'genemy' ),
                'param_name' => 'id',
                'value' => '',
                'description' => 'Enter comma separated ID\'s of the posts that you want to show',
                'group' => 'Posts Settings' 
            ),
            array(
                 'type' => 'perch_select',
                'multiple' => 'multiple',
                'heading' => __( 'Select category', 'genemy' ),
                'param_name' => 'tax_term',
                'value' => genemy_get_terms(),
                'group' => 'Posts Settings' 
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
                'group' => 'Posts Settings' 
            ),
            array(
                 'type' => 'textfield',
                'heading' => __( 'Authors', 'genemy' ),
                'param_name' => 'author',
                'description' => 'Enter here comma-separated list of author\'s IDs. Example: 1,7,18',
                'group' => 'Posts Settings' 
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
                'group' => __('Posts settings', 'genemy'),
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
                'group' => __('Posts settings', 'genemy'),
            ) ,
           
        ) 
    );

    $args = apply_filters( 'genemy_vc_map_filter', $args, $args['base'] );
    if( $return ) {
        return genemy_vc_get_params_value($args);
    }else{
        vc_map( $args );
    }
}

