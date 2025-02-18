<?php

namespace App\Http\Routing;

use App\Http\Routing\V1\BookRoutes;
use App\Http\Routing\V1\UserRoutes;

/**
 * Class Api
 * Handles the API routing.
 */
class Api {
	/**
	 * Api constructor.
	 * Registers the routes for Book and User.
	 */
	public function __construct() {
		BookRoutes::register_routes();
		UserRoutes::register_routes();
	}
}
