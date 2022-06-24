<?php

use App\controller\Indexcontroller;
use App\controller\CategoryController;
use App\controller\ProductController;
use App\connection\Connection;


function createRoute(string $controllerName, string $methodName){
    return [
        'controller'=> $controllerName,
        'method'=> $methodName,
    ];
}

$routes = [
    '/' => createRoute(Indexcontroller::class, 'indexAction'),
    '/produtos' =>createRoute(ProductController::class, 'listAction'),
    '/categorias' => createRoute(CategoryController::class, 'listAction'),
];

return $routes;