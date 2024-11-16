<?php

namespace App\Routing\V1;

use App\Controllers\V1\BookController;

class BookRoutes {
    public static function register_routes() {
        $bookController = new BookController();

        // Register routes for Books
        register_rest_route('api/v1', '/books', [
            'methods'  => 'GET',
            'callback' => [$bookController, 'index'],
            'permission_callback' => '__return_true',
        ]);

        register_rest_route('api/v1', '/books/(?P<id>\d+)', [
            'methods'  => 'GET',
            'callback' => [$bookController, 'show'],
            'permission_callback' => '__return_true',
        ]);

        // Add more routes as needed...
    }
}
