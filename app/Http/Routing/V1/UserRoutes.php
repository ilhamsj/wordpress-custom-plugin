<?php

namespace App\Http\Routing\V1;

use App\Http\Controllers\V1\UserController;
use WP_REST_Server;

class UserRoutes {

	public static function register_routes() {
		$userController = new UserController();

		// Register routes for Users
		register_rest_route(
			'api/v1',
			'/users',
			array(
				'methods'             => WP_REST_Server::READABLE,
				'callback'            => array( $userController, 'index' ),
				'permission_callback' => '__return_true',
			)
		);

		register_rest_route(
			'api/v1',
			'/users/(?P<id>\d+)',
			array(
				'methods'             => WP_REST_Server::READABLE,
				'callback'            => array( $userController, 'show' ),
				'permission_callback' => '__return_true',
			)
		);

		// Add more routes as needed...
	}
}
