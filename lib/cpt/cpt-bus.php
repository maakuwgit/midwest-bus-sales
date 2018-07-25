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
      'supports'            => array( 'title', 'thumbnail', 'page-attributes' ),
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
if ( ! function_exists('register_bus_taxonomy') ) {

  function register_bus_taxonomy() {

    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
      'name'                => _x( 'Bus Types', 'taxonomy general name' ),
      'singular_name'       => _x( 'Bus Type', 'taxonomy singular name' ),
      'search_items'        => __( 'Search Bus Types' ),
      'all_items'           => __( 'All Bus Types' ),
      'parent_item'         => __( 'Bus Type owner' ),
      'parent_item_colon'   => __( 'Bus Type owner:' ),
      'edit_item'           => __( 'Edit Bus Type' ),
      'update_item'         => __( 'Update Bus Type' ),
      'add_new_item'        => __( 'Add New Bus Type' ),
      'new_item_name'       => __( 'New Bus Type' ),
      'menu_name'           => __( 'Bus Types' )
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
    register_taxonomy( 'ownership', array( 'bus' ), $args ); // Must include custom post type name

    // Add new taxonomy, make it non-hierarchical (like tags)
    $labels = array(
      'name'                => _x( 'Unit Types', 'taxonomy general name' ),
      'singular_name'       => _x( 'Unit Type', 'taxonomy singular name' ),
      'search_items'        => __( 'Search Types' ),
      'all_items'           => __( 'All Types' ),
      'parent_item'         => __( 'Parent Type' ),
      'parent_item_colon'   => __( 'Parent Type:' ),
      'edit_item'           => __( 'Edit Type' ),
      'update_item'         => __( 'Update Type' ),
      'add_new_item'        => __( 'Add New Type' ),
      'new_item_name'       => __( 'New Type' ),
      'menu_name'           => __( 'Unit Types' )
    );

    $args = array(
      'hierarchical'        => false,
      'labels'              => $labels,
      'public'              => true,
      'show_ui'             => true,
      'show_admin_column'   => true,
      'query_var'           => true,
      'rewrite'             => array( 'slug' => 'bus' )
    );
    register_taxonomy( 'models', array( 'bus' ), $args ); // Must include custom post type name

  }

  add_action( 'init', 'register_bus_taxonomy', 0 );

}

}