<?php

declare(strict_types=1);

add_action('init', function () {
    register_taxonomy('Event type', ['events'], [
        'hierarchical' => true,
        'labels' => [
            'add_new_item' => __('Add New Event type'),
            'edit_item' => __('Edit Event type'),
            'name' => __('Event Type'),
            'search_items' => __('Search Event type'),
            'singular_name' => __('Event type'),
        ],
        'show_admin_column' => true,
        'show_in_rest' => true,
    ]);
});
