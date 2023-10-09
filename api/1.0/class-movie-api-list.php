<?php 

class Movie_API_List extends Movie_Api_Abstract {

	/**
	 * Register Routes
	 *
	 * @return void
	 */
	public function register_routes() : void {

		register_rest_route( $this->namespace, '/1.0/latest', [
				[
					'methods'  => WP_REST_Server::READABLE,
					'callback' => [ $this, 'get_movies' ],
				],
			]
		);
	}

	/**
	 * Get all posts that user paid for.
	 *
	 * @param WP_REST_Request $request Request.
	 *
	 * @return WP_Error|WP_REST_Response
	 */
	public function get_movies( WP_REST_Request $request ) {
		return new WP_REST_Response( [
            'success' => true,
            'message' => 'Data successfully retrieved!',
        ] , 200 );
	}
}