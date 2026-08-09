<?php

require_once dirname(__DIR__) ."/controller/controller1.php";

$routes = [
    '/' => [
        'controller' => 'controller1.php',
        'action' => 'affichage'
    ],
];

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (isset($routes[$uri])) {

    $action = $routes[$uri]['action'];

    $action();

} else {
    echo 'page introuvable';
}