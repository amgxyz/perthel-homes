<?php
/**
 * Perthel Homes CPT Current Homes
 *
 * @package Perthel Homes
 */


/**add_action( 'init', 'register_cpt_current_homes' );

function register_cpt_current_homes() {

    $labels = array( 
        'name' => _x( 'Current Homes', 'current_home' ),
        'singular_name' => _x( 'Current Home', 'current_home' ),
        'add_new' => _x( 'Add New', 'current_home' ),
        'add_new_item' => _x( 'Add New Current Home', 'current_home' ),
        'edit_item' => _x( 'Edit Current Home', 'current_home' ),
        'new_item' => _x( 'New Current Home', 'current_home' ),
        'view_item' => _x( 'View Current Home', 'current_home' ),
        'search_items' => _x( 'Search Current Homes', 'current_home' ),
        'not_found' => _x( 'No current homes found', 'current_home' ),
        'not_found_in_trash' => _x( 'No current homes found in Trash', 'current_home' ),
        'parent_item_colon' => _x( 'Parent Current Home:', 'current_home' ),
        'menu_name' => _x( 'Current Homes', 'current_home' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        
        'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail' ), // , 'trackbacks', 'custom-fields'
        
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'current-homes', $args );
}


add_action( 'init', 'register_txm_current_homes' );

function register_txm_current_homes() {
  // Add new taxonomy, make it hierarchical (like categories)
  $labels = array(
    'name' => _x( 'Home Plans', 'taxonomy general name' ),
    'singular_name' => _x( 'Home Plan', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Home Plans' ),
    'popular_items' => __( 'Popular Home Plans' ),
    'all_items' => __( 'All Home Plans' ),
    'parent_item' => __( 'Parent Home Plans' ),
    'parent_item_colon' => __( 'Parent Home Plans:' ),
    'edit_item' => __( 'Edit Home Plan' ),
    'update_item' => __( 'Update Home Plan' ),
    'add_new_item' => __( 'Add New Home Plan' ),
    'new_item_name' => __( 'New Home Plan' ),
  );
  register_taxonomy('home-plans',array('current-homes'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'home-plans' ),
  ));
}*/


add_action( 'init', 'register_cpt_home_plan' );

function register_cpt_home_plan() {

    $labels = array( 
        'name' => _x( 'Home Plans', 'home-plans' ),
        'singular_name' => _x( 'Home Plan', 'home-plans' ),
        'add_new' => _x( 'Add New', 'home-plans' ),
        'add_new_item' => _x( 'Add New Home Plan', 'home-plans' ),
        'edit_item' => _x( 'Edit Home Plan', 'home-plans' ),
        'new_item' => _x( 'New Home Plan', 'home-plans' ),
        'view_item' => _x( 'View Home Plan', 'home-plans' ),
        'search_items' => _x( 'Search Home Plans', 'home-plans' ),
        'not_found' => _x( 'No home plans found', 'home-plans' ),
        'not_found_in_trash' => _x( 'No home plans found in Trash', 'home-plans' ),
        'parent_item_colon' => _x( 'Parent Home Plan:', 'home-plans' ),
        'menu_name' => _x( 'Home Plans', 'home-plans' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        
        'supports' => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies' => array( 'page-category', 'Home Type' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'home-plans', $args );
}

add_action( 'init', 'register_taxonomy_home_type' );

function register_taxonomy_home_type() {

    $labels = array( 
        'name' => _x( 'Home Types', 'home-type' ),
        'singular_name' => _x( 'Home Type', 'home-type' ),
        'search_items' => _x( 'Search Home Types', 'home-type' ),
        'popular_items' => _x( 'Popular Home Types', 'home-type' ),
        'all_items' => _x( 'All Home Types', 'home-type' ),
        'parent_item' => _x( 'Parent Home Type', 'home-type' ),
        'parent_item_colon' => _x( 'Parent Home Type:', 'home-type' ),
        'edit_item' => _x( 'Edit Home Type', 'home-type' ),
        'update_item' => _x( 'Update Home Type', 'home-type' ),
        'add_new_item' => _x( 'Add New Home Type', 'home-type' ),
        'new_item_name' => _x( 'New Home Type', 'home-type' ),
        'separate_items_with_commas' => _x( 'Separate home types with commas', 'home-type' ),
        'add_or_remove_items' => _x( 'Add or remove home types', 'home-type' ),
        'choose_from_most_used' => _x( 'Choose from the most used home types', 'home-type' ),
        'menu_name' => _x( 'Home Types', 'home-type' ),
    );

    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'show_tagcloud' => false,
        'hierarchical' => true,

        'rewrite' => true,
        'query_var' => true
    );

    register_taxonomy( 'home-type', array('home-plans'), $args );
}

add_action( 'init', 'register_cpt_current_home' );

function register_cpt_current_home() {

    $labels = array( 
        'name' => _x( 'Current Homes', 'current-homes' ),
        'singular_name' => _x( 'Current Home', 'current-homes' ),
        'add_new' => _x( 'Add New', 'home-plans' ),
        'add_new_item' => _x( 'Add New Current Home', 'current-homes' ),
        'edit_item' => _x( 'Edit Current Home', 'current-homes' ),
        'new_item' => _x( 'New Current Home', 'current-homes' ),
        'view_item' => _x( 'View Current Home', 'current-homes' ),
        'search_items' => _x( 'Search Current Homes', 'current-homes' ),
        'not_found' => _x( 'No Current Homes found', 'current-homes' ),
        'not_found_in_trash' => _x( 'No Current Homes found in Trash', 'current-homes' ),
        'parent_item_colon' => _x( 'Parent Current Home:', 'current-homes' ),
        'menu_name' => _x( 'Current Homes', 'current-homes' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        
        'supports' => array( 'title', 'editor', 'thumbnail' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'current-homes', $args );
}


?>