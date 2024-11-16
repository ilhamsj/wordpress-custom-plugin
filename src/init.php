<?php

namespace App;

use App\Routing\Api;

class Init
{
    public function __construct()
    {
        add_action('rest_api_init', function () {
            new Api();
        });
    }
}
