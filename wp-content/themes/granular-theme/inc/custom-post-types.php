<?php
/**
 * _s functions and definitions
 *
 * @package _s
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */

function our_talent_register() {
  $talent_labels = array(
    'name'               => 'Our Talent',
    'singular_name'      => 'Our Talent',
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Talent',
    'edit_item'          => 'Edit Talent',
    'new_item'           => 'New Talent',
    'all_items'          => 'All Talent',
    'view_item'          => 'View Our Talent',
    'search_items'       => 'Search Our Talent',
    'not_found'          => 'No Talent found',
    'not_found_in_trash' => 'No Our Talent found in Trash',
    'parent_item_colon'  => '',
    'menu_name'          => 'Our Talent'
  );

  $talent_args = array(
    'labels'             => $talent_labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'our-talent' ),
    'capability_type'    => 'post',
    'has_archive'        => false,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array( 'title' )
  );

  register_post_type( 'our-talent', $talent_args );
}
add_action( 'init', 'our_talent_register' );

function hair_care_register() {
  $hair_care_labels = array(
    'name'               => 'Hair Care',
    'singular_name'      => 'Hair Care',
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Hair Care',
    'edit_item'          => 'Edit Hair Care',
    'new_item'           => 'New Hair Care',
    'all_items'          => 'All Hair Care',
    'view_item'          => 'View Hair Care',
    'search_items'       => 'Search Hair Care',
    'not_found'          => 'No Hair Care found',
    'not_found_in_trash' => 'No Hair Care found in Trash',
    'parent_item_colon'  => '',
    'menu_name'          => 'Hair Care'
  );

  $hair_care_args = array(
    'labels'             => $hair_care_labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'hair-care' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array( 'title', 'thumbnail' )
  );

  register_post_type( 'hair-care', $hair_care_args );
}
add_action( 'init', 'hair_care_register' );

function spa_services_register() {
  $spa_services_labels = array(
    'name'               => 'Spa Services',
    'singular_name'      => 'Spa Service',
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Spa Service',
    'edit_item'          => 'Edit Spa Service',
    'new_item'           => 'New Spa Service',
    'all_items'          => 'All Spa Services',
    'view_item'          => 'View Spa Services',
    'search_items'       => 'Search Spa Services',
    'not_found'          => 'No Spa Services found',
    'not_found_in_trash' => 'No Spa Services found in Trash',
    'parent_item_colon'  => '',
    'menu_name'          => 'Spa Services'
  );

  $spa_servicers_args = array(
    'labels'             => $spa_services_labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'spa-services' ),
    'capability_type'    => 'post',
    'has_archive'        => false,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array( 'title', 'thumbnail' )
  );

  register_post_type( 'spa-services', $spa_servicers_args );
}
add_action( 'init', 'spa_services_register' );

// function gallery_register() {
//   $spa_services_labels = array(
//     'name'               => 'Our Gallery',
//     'singular_name'      => 'Our Gallery',
//     'add_new'            => 'Add New',
//     'add_new_item'       => 'Add New Gallery',
//     'edit_item'          => 'Edit Gallery',
//     'new_item'           => 'New Gallery',
//     'all_items'          => 'All Galleries',
//     'view_item'          => 'View Gallery',
//     'search_items'       => 'Search Our Galleries',
//     'not_found'          => 'No Galleries found',
//     'not_found_in_trash' => 'No Galleries found in Trash',
//     'parent_item_colon'  => '',
//     'menu_name'          => 'Our Gallery'
//   );

//   $spa_servicers_args = array(
//     'labels'             => $spa_services_labels,
//     'public'             => true,
//     'publicly_queryable' => true,
//     'show_ui'            => true,
//     'show_in_menu'       => true,
//     'query_var'          => true,
//     'rewrite'            => array( 'slug' => 'our-gallery' ),
//     'capability_type'    => 'post',
//     'has_archive'        => false,
//     'hierarchical'       => false,
//     'menu_position'      => null,
//     'supports'           => array( 'title' )
//   );

//   register_post_type( 'our-gallery', $spa_servicers_args );
// }
// add_action( 'init', 'gallery_register' );

function products() {
  $talent_labels = array(
    'name'               => 'Product',
    'singular_name'      => 'Product',
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Product',
    'edit_item'          => 'Edit Product',
    'new_item'           => 'New Product',
    'all_items'          => 'All Products',
    'view_item'          => 'View Our Product',
    'search_items'       => 'Search Our Products',
    'not_found'          => 'No Products found',
    'not_found_in_trash' => 'No Products found in Trash',
    'parent_item_colon'  => '',
    'menu_name'          => 'Products'
  );

  $talent_args = array(
    'labels'             => $talent_labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'product' ),
    'capability_type'    => 'post',
    'has_archive'        => false,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array( 'title', 'page-attributes' )
  );

  register_post_type( 'product', $talent_args );
}
add_action( 'init', 'products' );
?>