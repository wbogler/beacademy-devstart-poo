<?php

declare(strict_type=1);
namespace App\controller;
class ErrorController extends AbstractController{
    public function notFountAction():void
    {
        parent::render('error/notFound');
    }
}