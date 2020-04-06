<?php

declare(strict_types=1);

add_action('init', function () {
    register_post_type('tenants', [
        'has_archive' => true,
        'labels' => [
            'add_new_item' => __('Add New Tenant'),
            'edit_item' => __('Edit Tenant'),
            'name' => __('Tenants'),
            'search_items' => __('Search Tenants'),
            'singular_name' => __('Tenant'),
        ],
        'supports' => [
            'title',
            'editor',
            'thumbnail',
        ],
        'menu_icon' => 'dashicons-store',
        'menu_position' => 20,
        'public' => true,
        'show_in_rest' => true,
    ]);
});
