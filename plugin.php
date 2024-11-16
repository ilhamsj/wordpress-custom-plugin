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
require_once __DIR__ . '/vendor/autoload.php';

use App\Init;

new Init();