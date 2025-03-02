<?php

namespace Wp\V3;

use WP_REST_Request;
use WP_REST_Response;
use WP_REST_Server;

class PostsRoute
{

    public function __construct()
    {
        add_action('rest_api_init', [$this, 'register_routes']);
    }

    public function register_routes()
    {
        register_rest_route('wp/v3', '/posts', [
            [
                'methods'  => WP_REST_Server::READABLE,
                'callback' => [$this, 'index'],
                'permission_callback' => [$this, 'middleware'],
            ],
        ]);

        register_rest_route('wp/v3', '/posts/(?P<slug>[a-zA-Z0-9\-]+)', [
            [
                'methods'  => WP_REST_Server::READABLE,
                'callback' => [$this, 'show'],
                'permission_callback' => [$this, 'middleware'],
            ],
            [
                'methods'  => WP_REST_Server::CREATABLE,
                'callback' => [$this, 'store'],
                'permission_callback' => [$this, 'middleware'],
            ],
            [
                'methods'  => WP_REST_Server::DELETABLE,
                'callback' => [$this, 'destroy'],
                'permission_callback' => [$this, 'middleware'],
            ],
        ]);
    }

    public function middleware()
    {
        return current_user_can('edit_posts');
    }

    public function index()
    {
        $posts = get_posts([
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 10,
        ]);

        return new WP_REST_Response($posts, 200);
    }

    public function store(WP_REST_Request $request)
    {
        $post = wp_insert_post([
            'post_title' => $request->get_param('title'),
            'post_content' => $request->get_param('content'),
            'post_status' => 'draft',
        ]);

        return new WP_REST_Response($post, 201);
    }
}
