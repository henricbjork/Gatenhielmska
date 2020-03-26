<?php

declare(strict_types=1);

add_action('init', function () {
    register_post_type('events', [
        'has_archive' => true,
        'labels' => [
            'add_new_item' => __('Add New Event'),
            'edit_item' => __('Edit Event'),
            'name' => __('Events'),
            'search_items' => __('Search Events'),
            'singular_name' => __('Event'),
        ],
        'supports' => [
            'title',
            'editor',
            'thumbnail',
        ],
        'menu_icon' => 'dashicons-calendar-alt',
        'menu_position' => 20,
        'public' => true,
        'show_in_rest' => true,
    ]);
});
