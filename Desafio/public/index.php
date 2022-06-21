<?php

//php -S localhost:9000 -t public -> método de proteção

include '../vendor/autoload.php';

use App\controller\Indexcontroller;



$chamada = new Indexcontroller();

//$chamada->indexAction(); 

$chamada -> loginAction();

echo "ola mundo";