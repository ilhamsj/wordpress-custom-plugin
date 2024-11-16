<?php

namespace App\Routing;

use App\Routing\V1\BookRoutes;
use App\Routing\V1\UserRoutes;

class Api {
    public static function run() {
        add_action('rest_api_init', function () {
            BookRoutes::register_routes();
            UserRoutes::register_routes();
        });
    }
}