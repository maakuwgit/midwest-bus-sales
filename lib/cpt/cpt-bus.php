<?php
/**
 * Register the custom post type
 */
if ( ! function_exists('register_bus_custom_post_type') ) {

  // Register Custom Post Type
  function register_bus_custom_post_type() {

    $labels = array(
      'name'                => 'Buses',
      'singular_name'       => 'Bus',
      'menu_name'           => 'Bus',
      'parent_item_colon'   => 'Parent Bus',
      'all_items'           => 'All Buses',
      'view_item'           => 'View Bus',
      'add_new_item'        => 'Add New Bus',
      'add_new'             => 'New Bus',
      'edit_item'           => 'Edit Bus',
      'update_item'         => 'Update Bus',
      'search_items'        => 'Search Bus',
      'not_found'           => 'No bus found',
      'not_found_in_trash'  => 'No bus found in Trash',
    );
    $args = array(
      'label'               => 'bus',
      'description'         => 'Bus description',
      'labels'              => $labels,
      'supports'            => array( 'title', 'page-attributes' ),
      'hierarchical'        => true,
      'public'              => true,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_nav_menus'   => true,
      'show_in_admin_bar'   => true,
      'menu_position'       => 20,
      'menu_icon'           => 'dashicons-admin-network',
      'can_export'          => true,
      'has_archive'         => true,
      'exclude_from_search' => true,
      'publicly_queryable'  => true,
      'capability_type'     => 'post',
    );
    register_post_type( 'bus', $args );

  }

  // Hook into the 'init' action
  add_action( 'init', 'register_bus_custom_post_type', 0 );

/**
 * Custom taxonomies
 */
if ( ! function_exists('register_state_taxonomy') ) {

  function register_state_taxonomy() {

    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
      'name'                => _x( 'City/State', 'taxonomy general name' ),
      'singular_name'       => _x( 'City/State', 'taxonomy singular name' ),
      'search_items'        => __( 'Search Cities/States' ),
      'all_items'           => __( 'All Cities/States' ),
      'parent_item'         => __( 'Parent City/State' ),
      'parent_item_colon'   => __( 'Parent City/State:' ),
      'edit_item'           => __( 'Edit City/State' ),
      'update_item'         => __( 'Update City/State' ),
      'add_new_item'        => __( 'Add New City/State' ),
      'new_item_name'       => __( 'New City/State Name' ),
      'menu_name'           => __( 'Cities/States' )
    );

    $args = array(
      'hierarchical'        => true,
      'labels'              => $labels,
      'public'              => true,
      'show_ui'             => true,
      'show_admin_column'   => true,
      'query_var'           => true,
      'rewrite'             => array( 'slug' => 'bus' )
    );
    register_taxonomy( 'bus_state', array( 'bus' ), $args ); // Must include custom post type name

  }

  add_action( 'init', 'register_state_taxonomy', 0 );

}

}