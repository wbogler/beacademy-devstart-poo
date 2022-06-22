<?php

//php -S localhost:9000 -t public -> método de proteção

include '../vendor/autoload.php';

use App\controller\Indexcontroller;
use App\controller\ProductController;
use App\controller\ErrorController;

$url = explode('?', $_SERVER['REQUEST_URI'])[0];

$routes = [
    '/' => []
];

if($url === '/'){
    $chamada = new Indexcontroller();
    $chamada -> indexAction();
}elseif($url == '/login'){
    $chamada = new Indexcontroller();
    $chamada -> loginAction();
}elseif($url == '/produtos'){
    $produto = new ProductController;
    $produto->listAction();
}else{
    $errorPag = new ErrorController();
    $errorPag->notFountAction();
}