<?php
/**
 * Configuration for post types.
 * php version 8.4
 *
 * @category Configuration
 * @package  WordPress
 * @author   Display Name <username@example.com>
 * @license  GPL-3.0 https://www.gnu.org/licenses/gpl-3.0.html
 * @link     https://example.com
 */

return [
	'type' => [
		'book'  => [
			'labels'       => [
				'name'          => 'Books',
				'singular_name' => 'Book',
			],
			'public'       => true,
			'has_archive'  => true,
			'show_in_rest' => true,
			'rest_base'    => 'books',
			'supports'     => [ 'title', 'editor', 'author', 'thumbnail', 'custom-fields' ],
		],
		'movie' => [
			'labels'       => [
				'name'          => 'Movies',
				'singular_name' => 'Movie',
			],
			'public'       => true,
			'has_archive'  => true,
			'show_in_rest' => true,
			'rest_base'    => 'movies',
			'supports'     => [ 'title', 'editor', 'author', 'thumbnail', 'custom-fields' ],
		],
	],
];
