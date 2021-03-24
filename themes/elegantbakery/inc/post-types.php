<?php
/**
 * Register a custom post type called "recipe".
 *
 * @see get_post_type_labels() for label keys.
 */

function elegantbakerytheme_init() {
    $labels = array(
        'name'                  => _x( 'Events', 'Post type general name', 'elegantbakerytheme' ),
        'singular_name'         => _x( 'E   vent', 'Post type singular name', 'elegantbakerytheme' ),
        'menu_name'             => _x( 'Events', 'Admin Menu text', 'elegantbakerytheme' ),
        'name_admin_bar'        => _x( 'E   vent', 'Add New on Toolbar', 'elegantbakerytheme' ),
        'add_new'               => __( 'Add New', 'elegantbakerytheme' ),
        'add_new_item'          => __( 'Add New event', 'elegantbakerytheme' ),
        'new_item'              => __( 'New event', 'elegantbakerytheme' ),
        'edit_item'             => __( 'Edit event', 'elegantbakerytheme' ),
        'view_item'             => __( 'View event', 'elegantbakerytheme' ),
        'all_items'             => __( 'All events', 'elegantbakerytheme' ),
        'search_items'          => __( 'Search events', 'elegantbakerytheme' ),
        'parent_item_colon'     => __( 'Parent events:', 'elegantbakerytheme' ),
        'not_found'             => __( 'No events found.', 'elegantbakerytheme' ),
        'not_found_in_trash'    => __( 'No events found in Trash.', 'elegantbakerytheme' ),
        'featured_image'        => _x( 'E   vent Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'elegantbakerytheme' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'elegantbakerytheme' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'elegantbakerytheme' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'elegantbakerytheme' ),
        'archives'              => _x( 'E   vent archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'elegantbakerytheme' ),
        'insert_into_item'      => _x( 'Insert into recipe', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'elegantbakerytheme' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this recipe', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'elegantbakerytheme' ),
        'filter_items_list'     => _x( 'Filter events list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'elegantbakerytheme' ),
        'items_list_navigation' => _x( 'Events list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'elegantbakerytheme' ),
        'items_list'            => _x( 'Events list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'elegantbakerytheme' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'E  vent custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'Events' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        'taxonomies'         => array( 'category', 'post_tag' ),
        'show_in_rest'       => true,
    );

    register_post_type( 'event', $args );
}
add_action( 'init', 'elegantbakerytheme_init' );