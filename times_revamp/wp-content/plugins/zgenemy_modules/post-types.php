<?php

if ( ! function_exists('genemy_portfolio_post_type') ) {



// Register Custom Post Type

function genemy_portfolio_post_type() {



	$title = _x( 'Portfolios', 'Post Type General Name', 'genemy' );

	$title = apply_filters( 'genemy_portfolio_post_type_title', $title );





	$labels = array(

		'name'                  => esc_attr($title),

		'singular_name'         => _x( 'Portfolio', 'Post Type Singular Name', 'genemy' ),

		'menu_name'             => __( 'Portfolio', 'genemy' ),

		'name_admin_bar'        => __( 'Portfolio', 'genemy' ),

		'archives'              => __( 'Portfolio Archives', 'genemy' ),

		'parent_item_colon'     => __( 'Parent Portfolio:', 'genemy' ),

		'all_items'             => __( 'All Portfolio Items', 'genemy' ),

		'add_new_item'          => __( 'Add New Portfolio', 'genemy' ),

		'add_new'               => __( 'Add New', 'genemy' ),

		'new_item'              => __( 'New Portfolio', 'genemy' ),

		'edit_item'             => __( 'Edit Portfolio', 'genemy' ),

		'update_item'           => __( 'Update Portfolio', 'genemy' ),

		'view_item'             => __( 'View Portfolio', 'genemy' ),

		'search_items'          => __( 'Search Portfolio', 'genemy' ),

		'not_found'             => __( 'Not found', 'genemy' ),

		'not_found_in_trash'    => __( 'Not found in Trash', 'genemy' ),

		'featured_image'        => __( 'Featured Image', 'genemy' ),

		'set_featured_image'    => __( 'Set featured image', 'genemy' ),

		'remove_featured_image' => __( 'Remove featured image', 'genemy' ),

		'use_featured_image'    => __( 'Use as featured image', 'genemy' ),

		'insert_into_item'      => __( 'Insert into Portfolio', 'genemy' ),

		'uploaded_to_this_item' => __( 'Uploaded to this Portfolio', 'genemy' ),

		'items_list'            => __( 'Portfolio list', 'genemy' ),

		'items_list_navigation' => __( 'Portfolio list navigation', 'genemy' ),

		'filter_items_list'     => __( 'Filter Portfolio list', 'genemy' ),

	);

	$args = array(

		'label'                 => __( 'Portfolio', 'genemy' ),

		'description'           => __( 'Post Type Description', 'genemy' ),

		'labels'                => $labels,

		'supports'              => array( 'title', 'editor', 'thumbnail' ),

		'taxonomies'            => array( 'portfolio_category', 'tag' ),

		'hierarchical'          => false,

		'public'                => true,

		'show_ui'               => true,

		'show_in_menu'          => true,

		'menu_position'         => 5,

		'show_in_admin_bar'     => true,

		'show_in_nav_menus'     => true,

		'can_export'            => true,

		'has_archive'           => true,		

		'exclude_from_search'   => false,

		'publicly_queryable'    => true,

		'capability_type'       => 'page',		

	);



	$slug = apply_filters( 'genemy_portfolio_post_type_slug', 'portfolio' );

	$args['rewrite'] = array('slug' => $slug,'with_front' => false);

	



	if( !in_array('portfolio', genemy_disable_post_type_arr()) ){

		register_post_type( 'portfolio', $args );

	}

	



}

add_action( 'init', 'genemy_portfolio_post_type', 0 );



}







if ( ! function_exists( 'genemy_portfolio_category_taxonomy' ) ) {



// Register Custom Taxonomy

function genemy_portfolio_category_taxonomy() {



	$labels = array(

		'name'                       => _x( 'Categories', 'Taxonomy General Name', 'genemy' ),

		'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'genemy' ),

		'menu_name'                  => __( 'Category', 'genemy' ),

		'all_items'                  => __( 'All Categories', 'genemy' ),

		'parent_item'                => __( 'Parent Category', 'genemy' ),

		'parent_item_colon'          => __( 'Parent Category:', 'genemy' ),

		'new_item_name'              => __( 'New Category Name', 'genemy' ),

		'add_new_item'               => __( 'Add New Category', 'genemy' ),

		'edit_item'                  => __( 'Edit Category', 'genemy' ),

		'update_item'                => __( 'Update Category', 'genemy' ),

		'view_item'                  => __( 'View Category', 'genemy' ),

		'separate_items_with_commas' => __( 'Separate Categories with commas', 'genemy' ),

		'add_or_remove_items'        => __( 'Add or remove Categories', 'genemy' ),

		'choose_from_most_used'      => __( 'Choose from the most used', 'genemy' ),

		'popular_items'              => __( 'Popular Categories', 'genemy' ),

		'search_items'               => __( 'Search Items', 'genemy' ),

		'not_found'                  => __( 'Not Found', 'genemy' ),

		'no_terms'                   => __( 'No Categories', 'genemy' ),

		'items_list'                 => __( 'Categories list', 'genemy' ),

		'items_list_navigation'      => __( 'Categories list navigation', 'genemy' ),

	);

	$args = array(

		'labels'                     => $labels,

		'hierarchical'               => true,

		'public'                     => true,

		'show_ui'                    => true,

		'show_admin_column'          => true,

		'show_in_nav_menus'          => true,

		'show_tagcloud'              => false,

		'rewrite'           => array( 'slug' => apply_filters('genemy_portfolio_category_slug', 'portfolio_category') ),

	);

	register_taxonomy( 'portfolio_category', array( 'portfolio' ), $args );



}

add_action( 'init', 'genemy_portfolio_category_taxonomy', 0 );

}



if ( ! function_exists('genemy_team_post_type') ) {



// Register Custom Post Type

function genemy_team_post_type() {



	$title = _x( 'Team', 'Post Type General Name', 'genemy' );

	$title = apply_filters( 'genemy_team_post_type_title', $title );



	$labels = array(

		'name'                  => esc_attr($title),

		'singular_name'         => _x( 'Team', 'Post Type Singular Name', 'genemy' ),

		'menu_name'             => __( 'Team', 'genemy' ),

		'name_admin_bar'        => __( 'Team', 'genemy' ),

		'archives'              => __( 'Team Archives', 'genemy' ),

		'parent_item_colon'     => __( 'Parent Team:', 'genemy' ),

		'all_items'             => __( 'All Team', 'genemy' ),

		'add_new_item'          => __( 'Add New Team', 'genemy' ),

		'add_new'               => __( 'Add New', 'genemy' ),

		'new_item'              => __( 'New Team', 'genemy' ),

		'edit_item'             => __( 'Edit Team', 'genemy' ),

		'update_item'           => __( 'Update Team', 'genemy' ),

		'view_item'             => __( 'View Team', 'genemy' ),

		'search_items'          => __( 'Search Team', 'genemy' ),

		'not_found'             => __( 'Not found', 'genemy' ),

		'not_found_in_trash'    => __( 'Not found in Trash', 'genemy' ),

		'featured_image'        => __( 'Featured Image', 'genemy' ),

		'set_featured_image'    => __( 'Set featured image', 'genemy' ),

		'remove_featured_image' => __( 'Remove featured image', 'genemy' ),

		'use_featured_image'    => __( 'Use as featured image', 'genemy' ),

		'insert_into_item'      => __( 'Insert into Team', 'genemy' ),

		'uploaded_to_this_item' => __( 'Uploaded to this Team', 'genemy' ),

		'items_list'            => __( 'Team list', 'genemy' ),

		'items_list_navigation' => __( 'Team list navigation', 'genemy' ),

		'filter_items_list'     => __( 'Filter Team list', 'genemy' ),

	);

	$args = array(

		'label'                 => __( 'Team', 'genemy' ),

		'description'           => __( 'Post Type Description', 'genemy' ),

		'labels'                => $labels,

		'supports'              => array( 'title', 'editor', 'thumbnail', 'page-attributes', 'excerpt' ),

		'hierarchical'          => false,

		'public'                => true,

		'show_ui'               => true,

		'show_in_menu'          => true,

		'menu_position'         => 6,

		'show_in_admin_bar'     => true,

		'show_in_nav_menus'     => true,

		'can_export'            => true,

		'has_archive'           => true,		

		'exclude_from_search'   => false,

		'publicly_queryable'    => true,

		'capability_type'       => 'page',

	);



	$slug = apply_filters( 'genemy_team_post_type_slug', 'team' );

	$args['rewrite'] = array('slug' => $slug,'with_front' => false);



	if( !in_array('team', genemy_disable_post_type_arr()) ){

		register_post_type( 'team', $args );

	}



}

add_action( 'init', 'genemy_team_post_type', 0 );



}