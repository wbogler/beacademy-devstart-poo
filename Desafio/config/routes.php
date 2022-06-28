<?php

use App\controller\Indexcontroller;
use App\controller\CategoryController;
use App\controller\ProductController;


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
    '/categorias/nova'=>createRoute(CategoryController::class, 'addAction'),
    '/categorias/excluir'=>createRoute(CategoryController::class, 'removeAction'),
    '/categorias/editar'=>createRoute(CategoryController::class, 'updateAction'),
    '/produtos/novo'=>createRoute(ProductController::class, 'addAction')
];

return $routes;