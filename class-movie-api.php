<?php


/**
 * Class Movie_API
 */
class Movie_API extends WP_REST_Controller {

	/**
	 * Static instance
	 *
	 * @method static
	 *
	 * @var Movie_API
	 */
	private static $instance;

	/**
	 * Initializes the plugin object and returns its instance
	 *
	 * @method static
	 *
	 * @return Movie_API
	 */
	public static function get_instance() : Movie_API {
		if ( ! isset( self::$instance ) ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

    function __construct()
    {
		add_action( 'plugins_loaded', [ $this, 'add_hooks' ] );
    }

	/**
	 * Adds all the plugin's hooks
	 *
	 * @return void
	 */
	public function add_hooks() : void {
		// Actions.
		add_action( 'rest_api_init', [ $this, 'register_routes' ] );
	}

	/**
	 * Register Routes
	 *
	 * @return void
	 */
	public function register_routes() : void {

		// Abstract
		require_once __DIR__ . '/api/class-movie-api-abstract.php';

		require_once __DIR__ . '/api/1.0/class-movie-api-list.php';
		new Movie_API_List;
	}
}