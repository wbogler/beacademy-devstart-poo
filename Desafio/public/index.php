<?php

//php -S localhost:9000 -t public -> método de proteção

include '../vendor/autoload.php';

use App\controller\Indexcontroller;
use App\controller\ProductController;
use App\controller\ErrorController;

$url = explode('?', $_SERVER['REQUEST_URI'])[0];

function createRoute(string $controllerName, string $methodName){
    return [
        'controller'=> $controllerName,
        'method'=> $methodName,
    ];
}

$routes = [
    '/' => createRoute(Indexcontroller::class, 'indexAction'),
    '/produtos' =>createRoute(ProductController::class, 'listAction'),
];

if (false === isset($routes[$url])){
    (new ErrorController())->notFountAction();
}

$controllerName = $routes[$url]['controller'];
$methodName - $routes[$url]['method'];

(new $controllerName())->$methodName();