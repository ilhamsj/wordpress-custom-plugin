<?php

namespace MyPlugin\Routes;

use MyPlugin\Controllers\BookController;

// Register API routes
add_action('rest_api_init', function () {
    $router = new Api();
    $router->register_routes();
});

class Api {
    public function register_routes() {
        $bookController = new BookController();

        // Define routes and map them to controller methods
        register_rest_route('api/v1', '/books', [
            'methods'  => 'GET',
            'callback' => [$bookController, 'index'], // Fetch all books
            'permission_callback' => '__return_true', // Public
        ]);

        register_rest_route('api/v1', '/books/(?P<id>\d+)', [
            'methods'  => 'GET',
            'callback' => [$bookController, 'show'], // Fetch a single book
            'permission_callback' => '__return_true', // Public
        ]);

        register_rest_route('api/v1', '/books', [
            'methods'  => 'POST',
            'callback' => [$bookController, 'store'], // Create a new book
            'permission_callback' => [$this, 'check_authentication'], // Authenticated users only
        ]);

        register_rest_route('api/v1', '/books/(?P<id>\d+)', [
            'methods'  => 'PUT',
            'callback' => [$bookController, 'update'], // Update a book
            'permission_callback' => [$this, 'check_authentication'], // Authenticated users only
        ]);

        register_rest_route('api/v1', '/books/(?P<id>\d+)', [
            'methods'  => 'DELETE',
            'callback' => [$bookController, 'destroy'], // Delete a book
            'permission_callback' => [$this, 'check_authentication'], // Authenticated users only
        ]);
    }

    public function check_authentication() {
        return is_user_logged_in();
    }
}
