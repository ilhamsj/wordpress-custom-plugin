<?php

namespace App\Http\Routing\V1;

use App\Http\Controllers\V1\UserController;
use WP_REST_Server;

class UserRoutes {
    public static function register_routes() {
        $userController = new UserController();

        // Register routes for Users
        register_rest_route('api/v1', '/users', [
            'methods'  => WP_REST_Server::READABLE,
            'callback' => [$userController, 'index'],
            'permission_callback' => '__return_true',
        ]);

        register_rest_route('api/v1', '/users/(?P<id>\d+)', [
            'methods'  => WP_REST_Server::READABLE,
            'callback' => [$userController, 'show'],
            'permission_callback' => '__return_true',
        ]);

        // Add more routes as needed...
    }
}
