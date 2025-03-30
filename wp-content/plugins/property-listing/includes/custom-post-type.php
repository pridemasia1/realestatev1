<?php
// Register Custom Post Type for Properties
function create_property_post_type() {
    $labels = array(
        'name'               => 'Properties',
        'singular_name'      => 'Property',
        'menu_name'          => 'Properties',
        'name_admin_bar'     => 'Property',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Property',
        'new_item'           => 'New Property',
        'edit_item'          => 'Edit Property',
        'view_item'          => 'View Property',
        'all_items'          => 'All Properties',
        'search_items'       => 'Search Properties',
        'parent_item_colon'  => 'Parent Properties:',
        'not_found'          => 'No properties found.',
        'not_found_in_trash' => 'No properties found in Trash.',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'show_in_rest'       => true, // Enable block editor
        'menu_icon'          => 'dashicons-building', // Icon for the menu
        'rewrite'            => array( 'slug' => 'properties' ),
    );

    register_post_type( 'property', $args );
}

add_action( 'init', 'create_property_post_type' );
