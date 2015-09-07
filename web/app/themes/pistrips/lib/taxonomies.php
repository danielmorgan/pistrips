<?php
/**
 * Register customer taxonomies.
 */
if (! function_exists('trips_taxonomy')) {
    function trips_taxonomy() {
        $labels = array(
            'name'                       => 'Trips',
            'singular_name'              => 'Trip',
            'menu_name'                  => 'Trips',
            'all_items'                  => 'All Trips',
            'parent_item'                => 'Parent Trip',
            'parent_item_colon'          => 'Parent Trip:',
            'new_item_name'              => 'New Trip',
            'add_new_item'               => 'Add New Trip',
            'edit_item'                  => 'Edit Trip',
            'update_item'                => 'Update Trip',
            'view_item'                  => 'View Trip',
            'separate_items_with_commas' => 'Separate trips with commas',
            'add_or_remove_items'        => 'Add or remove trips',
            'choose_from_most_used'      => 'Choose from the most used',
            'popular_items'              => 'Popular Trips',
            'search_items'               => 'Search Trips',
            'not_found'                  => 'Not Found',
        );
        $rewrite = array(
            'slug'                       => '',
            'with_front'                 => false,
            'hierarchical'               => false,
        );
        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => false,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_tagcloud'              => true,
            'rewrite'                    => $rewrite,
        );
        register_taxonomy( 'trips', array( 'post' ), $args );
    }
 
    add_action( 'init', 'trips_taxonomy', 0 );
}