<?php

return [
    'type' => [
        'book' => [
            'labels'       => [
                'name'          => 'Books',
                'singular_name' => 'Book',
            ],
            'public'       => true,
            'has_archive'  => true,
            'show_in_rest' => true,
            'rest_base'    => 'books',
            'supports'     => ['title', 'editor', 'author', 'thumbnail', 'custom-fields'],
        ],
        'movie' => [
            'labels'       => [
                'name'          => 'Movies',
                'singular_name' => 'Movie',
            ],
            'public'       => true,
            'has_archive'  => true,
            'show_in_rest' => true,
            'rest_base'    => 'movies',
            'supports'     => ['title', 'editor', 'author', 'thumbnail', 'custom-fields'],
        ],
    ],
];