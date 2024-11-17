<?php

namespace App\Http\Routing\V1;

use App\Http\Controllers\V1\BookController;

class BookRoutes {
    private static $bookController;

    public static function register_routes() {
        self::$bookController = new BookController();

        // Register routes for Books
        register_rest_route('api/v1', '/books', [
            'methods'  => 'GET',
            'callback' => [self::$bookController, 'index'],
            'permission_callback' => '__return_true',
        ]);

        register_rest_route('api/v1', '/books/(?P<id>\d+)', [
            'methods'  => 'GET',
            'callback' => [self::$bookController, 'show'],
            'permission_callback' => '__return_true',
        ]);

        // Add more routes as needed...
    }
}
