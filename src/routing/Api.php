<?php

namespace App\Routing;

use App\Routing\V1\BookRoutes;
use App\Routing\V1\UserRoutes;

class Api {
    public function __construct()
    {
        BookRoutes::register_routes();
        UserRoutes::register_routes();
    }
}
