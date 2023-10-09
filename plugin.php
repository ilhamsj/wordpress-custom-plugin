<?php
/**
 * Plugin Name
 *
 * @package           Movie
 * @author            ilhamsj
 * @copyright         2023 ilhamsj
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Movie Rest
 * Plugin URI:        github.com/iam-atomic/movie.git
 * Description:       Description of the plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            ilhamsj
 * Author URI:        github.com/iam-atomic
 * Text Domain:       plugin-slug
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Update URI:        github.com/iam-atomic/movie.git
 */

require_once __DIR__ . '/class-movie-api.php';
Movie_API::get_instance();