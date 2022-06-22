<?php

declare(strict_types = 1);

namespace App\controller;

abstract class AbstractController
{
    public function render(string $viewName):void
    {
        include dirname(__DIR__)."/view/{$viewName}.php";
    }
}