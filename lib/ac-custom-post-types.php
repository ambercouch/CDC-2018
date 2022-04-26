<?php

/*
 * CDC CUSTOM POST TYPES
 */

function cdc_cpt() {
  //Videos
  $labels = array(
      'name' => _x('Videos', 'post type general name'),
      'singular_name' => _x('Video', 'post type singular name'),
      'add_new' => _x('Add New', 'video'),
      'add_new_item' => __('Add New Video'),
      'edit_item' => __('Edit Video'),
      'new_item' => __('New Video'),
      'all_items' => __('All Videos'),
      'view_item' => __('View Video'),
      'search_items' => __('Search Videos'),
      'not_found' => __('No videos found'),
      'not_found_in_trash' => __('No videos found in the Trash'),
      'parent_item_colon' => '',
      'menu_name' => 'Videos'
  );
  $args = array(
      'labels' => $labels,
      'description' => 'Medivision Videos',
      'public' => true,
      'menu_position' => 20,
      'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
      'has_archive' => true,
  );
  register_post_type('video', $args);

    //Staff Members
    $labels = array(
        'name' => _x('Staff Members', 'post type general name'),
        'singular_name' => _x('Staff Member', 'post type singular name'),
        'add_new' => _x('Add New', 'Staff Member'),
        'add_new_item' => __('Add New Staff Member'),
        'edit_item' => __('Edit Staff Member'),
        'new_item' => __('New Staff Member'),
        'all_items' => __('All Staff Members'),
        'view_item' => __('View Staff Member'),
        'search_items' => __('Search Staff Members'),
        'not_found' => __('No Staff Members found'),
        'not_found_in_trash' => __('No Staff Members found in the trash'),
        'parent_item_colon' => '',
        'menu_name' => 'Staff Members'
    );
    $args = array(
        'labels' => $labels,
        'menu_icon' => 'dashicons-admin-users',
        'description' => 'Staff Members',
        'public' => true,
        'menu_position' => 20,
        'supports' => array('title','custom-fields','revisions','page-attributes'),
        'has_archive' => 'staff-member'
    );
    register_post_type('staff-member', $args);
}

add_action('init', 'cdc_cpt');
