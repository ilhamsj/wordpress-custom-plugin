<?php

if (!function_exists('config')) {
    function config($key, $default = null) {
        static $configs = [];
    
        $file = explode('.', $key)[0]; // Get the base key (e.g., "app")
        if (!isset($configs[$file])) {
            $path = __DIR__ . "/../config/{$file}.php";
            $configs[$file] = file_exists($path) ? require $path : [];
        }
    
        $keys = explode('.', $key);
        $value = $configs;
    
        foreach ($keys as $segment) {
            if (isset($value[$segment])) {
                $value = $value[$segment];
            } else {
                return $default;
            }
        }
    
        return $value;
    }
    
}