<?php

namespace App;

use App\Http\Routing\Api;

class Init
{
    public function __construct()
    {
        add_action('init', function () {
            register_post_type('book', config('post.type.book'));
            register_post_type('movie', config('post.type.movie'));
        });

        add_action('rest_api_init', function () {
            new Api();
        });
    }
}