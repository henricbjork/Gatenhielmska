<?php

declare(strict_types=1);

add_action('init', function () {
    register_post_type('management', [
        'has_archive' => true,
        'labels' => [
            'add_new_item' => __('Add New Management'),
            'edit_item' => __('Edit Management'),
            'name' => __('Management'),
            'search_items' => __('Search Management'),
            'singular_name' => __('Management'),
        ],
        'supports' => [
            'title',
            'editor',
            'thumbnail',
        ],
        'menu_icon' => 'dashicons-admin-users',
        'menu_position' => 20,
        'public' => true,
        'show_in_rest' => true,
    ]);
});
