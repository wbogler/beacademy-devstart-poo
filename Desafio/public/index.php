<?php

//php -S localhost:9000 -t public -> método de proteção

include '../vendor/autoload.php';

use App\controller\ErrorController;

$routes = include '../config/routes.php';

/*$connection = Connection::getConnection();


$query = 'SELECT * FROM tb_category;';

$preparacao = $connection->prepare($query);

$preparacao->execute();

var_dump($preparacao);

while ($registro = $preparacao->fetch()){
    var_dump($registro);
}*/

$url = explode('?', $_SERVER['REQUEST_URI'])[0];

if (false === isset($routes[$url])){
    (new ErrorController())->notFountAction();
}

$controllerName = $routes[$url]['controller'];
$methodName - $routes[$url]['method'];

(new $controllerName())->$methodName();
