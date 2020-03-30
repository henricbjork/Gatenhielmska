<?php

declare(strict_types=1);

if (function_exists('acf_add_local_field_group')) {

    acf_add_local_field_group([
        'key' => 'event_info',
        'title' => 'Event info',
        'fields' => [
            [
                'key' => 'date',
                'label' => 'Date of the event',
                'name' => 'date',
                'type' => 'date_picker',
                'required' => 1,
                'display_format' => 'M j',
                'return_format' => 'M j',
                'instructions' => 'Pick a date for event',
            ],
            [
                'key' => 'time',
                'label' => 'Time of the event',
                'name' => 'time',
                'type' => 'time_picker',
                'required' => 1,
                'display_format' => 'H:i',
                'return_format' => 'H:i',
                'instructions' => 'What time does the event start?',
            ],
            [
                'key' => 'price_regular',
                'label' => 'Price of the event',
                'name' => 'price',
                'type' => 'number',
                'required' => 1,
                'instructions' => 'Fill out the regular price for the event',
            ],
            [
                'key' => 'price_special',
                'label' => 'Student/Elderly price of the event',
                'name' => 'price_special',
                'type' => 'number',
                'required' => 0,
                'instructions' => 'Fill out student/elderly price for the event (optional)',
            ],
            [
                'key' => 'social_media',
                'label' => 'Link to Social Media',
                'name' => 'social_media',
                'type' => 'url',
                'required' => 0,
                'instructions' => 'Fill out link to social media (optional)',
            ]
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'events',
                ],
            ],
        ],
        'position' => 'side',
    ]);
}
