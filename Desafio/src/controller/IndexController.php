<?php

declare (strict_types = 1);

namespace App\controller;

class IndexController{
    public function indexAction(): void
    {
        include dirname(__DIR__).'/view/index/Index.php';
        echo "<h1>Dentro da action do controller</h1><br>";
    }

    public function loginAction(): void{
        include \dirname(__DIR__).'/view/index/Login.php';
    }
}