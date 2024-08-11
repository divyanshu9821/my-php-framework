<?php

$routes = require base_path('routes.php');

function abort($code = 404)
{
    http_response_code($code);
    require base_path("views/{$code}.php");
    die();
}

function route_to_controller($url, $routes)
{
    if (array_key_exists($url, $routes)) {
        require base_path($routes[$url]);
    } else {
        abort();
    }
}

$url = parse_url($_SERVER['REQUEST_URI'])['path'];

route_to_controller($url, $routes);