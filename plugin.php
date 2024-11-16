<?php
/**
 * Plugin Name: Laravel-Like Routing Plugin
 * Description: Example of Laravel-like routing for WordPress API.
 * Version: 1.0
 */

if (!defined('ABSPATH')) {
    exit;
}

// Autoload or include dependencies
require_once plugin_dir_path(__FILE__) . 'src/routes/api.php';
require_once plugin_dir_path(__FILE__) . 'src/controllers/BookController.php';
