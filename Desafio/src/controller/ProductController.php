<?php

declare (strict_types = 1);
namespace App\controller;
use App\connection\Connection;

class ProductController extends AbstractController{

    public function listAction(): void 
    {
        $con = Connection::getConnection();
        
        $result = $con->prepare('SELECT * FROM tb_product');
        $result->execute();

        parent::render('product/list', $result);
    }

    public function addAction(): void
    {
        $con = Connection::getConnection();

        if($_POST){
            $name = $_POST['name'];
            $description = $_POST['description'];
            $valor = $_POST['valor'];
            $photo = $_POST['photo'];
            $quantity = $_POST['quantity'];
            $category = $_POST['category'];
            $createdAt = date('Y-m-d H:i:s');

            $query = "INSERT INTO tb_product(name, description, photo, valor, category_id, quantity, created_at) VALUES ('{$name},{$description},{$photo},{$valor},{$category},{$quantity},{$createdAt}');";
            $result = $con->prepare($query);
            $result->execute();
            echo "produto salvo";
        }

        $result = $con->prepare('SELECT * FROM tb_category');
        $result->execute();

        parent::render('product/add', $result);
    }

    public function editAction(): void
    {
        parent::render('product/edit');
    }
    
}