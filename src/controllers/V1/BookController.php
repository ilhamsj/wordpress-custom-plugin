<?php

namespace App\Controllers\V1;

use WP_Error;
use WP_REST_Request;
use WP_REST_Response;

class BookController {
    public function index(WP_REST_Request $request) {
        // Fetch all books
        $books = get_posts([
            'post_type' => 'book',
            'posts_per_page' => -1,
        ]);

        return new WP_REST_Response([
            'success' => true,
            'data' => $books,
        ], 200 );
    }

    public function show(WP_REST_Request $request) {
        $id = $request['id'];
        $book = get_post($id);

        if (!$book || $book->post_type !== 'book') {
            return new WP_Error('not_found', 'Book not found', ['status' => 404]);
        }

        return rest_ensure_response([
            'success' => true,
            'data' => $book,
        ]);
    }

    public function store(WP_REST_Request $request) {
        $title = $request->get_param('title');

        $id = wp_insert_post([
            'post_type' => 'book',
            'post_title' => $title,
            'post_status' => 'publish',
        ]);

        return rest_ensure_response([
            'success' => true,
            'message' => 'Book created successfully',
            'id' => $id,
        ]);
    }

    public function update(WP_REST_Request $request) {
        $id = $request['id'];
        $title = $request->get_param('title');

        $updated = wp_update_post([
            'ID' => $id,
            'post_title' => $title,
        ]);

        return rest_ensure_response([
            'success' => true,
            'message' => 'Book updated successfully',
        ]);
    }

    public function destroy(WP_REST_Request $request) {
        $id = $request['id'];

        wp_delete_post($id, true);

        return rest_ensure_response([
            'success' => true,
            'message' => 'Book deleted successfully',
        ]);
    }
}
