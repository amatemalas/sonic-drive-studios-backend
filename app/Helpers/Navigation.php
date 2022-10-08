<?php

use Illuminate\Support\Facades\Config;

if (!function_exists('isActiveRoute')) {
    function isActiveRoute($routes, $output = 'active')
    {
        if (!is_array($routes)) {
            $routes = (array) $routes;
        }

        foreach ($routes as $route) {
            if (preg_match('/^' . $route . '$/', Route::currentRouteName())) {
                return $output;
            }
        }
    }
}
