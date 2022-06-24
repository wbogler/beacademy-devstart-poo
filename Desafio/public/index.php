<?php

//php -S localhost:9000 -t public -> método de proteção

include '../vendor/autoload.php';


//teste conexão banco de dados

$database = 'db_store';
$username = 'root';
$password = '215408';

$connection = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);

$query = 'SELECT * FROM tb_category;';

$preparacao = $connection->prepare($query);

$preparacao->execute();

var_dump($preparacao);

while ($registro = $preparacao->fetch()){
    var_dump($registro);
}

/*use App\controller\Indexcontroller;
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

(new $controllerName())->$methodName();*/
