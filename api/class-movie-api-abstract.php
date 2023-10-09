<?php
/**
 * Movie API
 *
 * @package Movie
 * @subpackage Api
 */

/**
 * Class Movie_Api_Abstract
 */
abstract class Movie_Api_Abstract {

	/**
	 * Constructor method
	 */
	public function __construct() {
		global $wpdb;

		$this->register_routes();
	}

	/**
	 * Register Routes
	 *
	 * @return void
	 */
	abstract public function register_routes() : void;

	/**
	 * The namespace of this controller's route.
	 *
	 * @since 4.7.0
	 * @var string
	 */
	protected $namespace = 'movie';
}