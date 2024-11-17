<?php

namespace App\Http\Routing;

use App\Http\Routing\V1\BookRoutes;
use App\Http\Routing\V1\UserRoutes;

class Api {
    public function __construct()
    {
        BookRoutes::register_routes();
        UserRoutes::register_routes();
    }
}
