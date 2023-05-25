<?php
class Catcwp_Custom_Post {
    public function __construct() {
        add_action('init', array($this, 'generate_custom_post'));
    }

    public function generate_custom_post() {
        $labels = array(
            'name'                  => 'Copy to Clipboard',
            'singular_name'         => 'Copy to Clipboard',
            'menu_name'             => 'Copy to Clipboard',
            'name_admin_bar'        => 'Copy to Clipboard',
            'archives'              => 'Copy to Clipboard Archives',
            'attributes'            => 'Copy to Clipboard Attributes',
            'parent_item_colon'     => 'Parent Item:',
            'all_items'             => 'All Items',
            'add_new_item'          => 'Add New Item',
            'add_new'               => 'Add New',
            'new_item'              => 'New Item',
            'edit_item'             => 'Edit Item',
            'update_item'           => 'Update Item',
            'view_item'             => 'View Item',
            'view_items'            => 'View Items',
            'search_items'          => 'Search Item',
            'not_found'             => 'Not found',
            'not_found_in_trash'    => 'Not found in Trash',
            'featured_image'        => 'Featured Image',
            'set_featured_image'    => 'Set featured image',
            'remove_featured_image' => 'Remove featured image',
            'use_featured_image'    => 'Use as featured image',
            'insert_into_item'      => 'Insert into item',
            'uploaded_to_this_item' => 'Uploaded to this item',
            'items_list'            => 'Items list',
            'items_list_navigation' => 'Items list navigation',
            'filter_items_list'     => 'Filter items list',
        );

        $args = array(
            'label'                 => 'Copy to Clipboard',
            'description'           => 'Custom post type for Copy to Clipboard functionality',
            'labels'                => $labels,
            'supports'              => array('title'),
            'hierarchical'          => false,
            'public'                => false,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'post',
        );
        
        register_post_type('copy_to_clipboard', $args);
    }
}

$catcwp_custom_post = new Catcwp_Custom_Post();

