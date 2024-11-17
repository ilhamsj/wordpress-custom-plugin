<?php

namespace App\Http\Routing\V1;

use App\Http\Controllers\V1\UserController;

class UserRoutes {
    public static function register_routes() {
        $userController = new UserController();

        // Register routes for Users
        register_rest_route('api/v1', '/users', [
            'methods'  => 'GET',
            'callback' => [$userController, 'index'],
            'permission_callback' => '__return_true',
        ]);

        register_rest_route('api/v1', '/users/(?P<id>\d+)', [
            'methods'  => 'GET',
            'callback' => [$userController, 'show'],
            'permission_callback' => '__return_true',
        ]);

        // Add more routes as needed...
    }
}
