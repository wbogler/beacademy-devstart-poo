<?php

declare (strict_types = 1);

namespace App\connection;

abstract class Connection
{
    public static function getConnection(): \PDO
    {
        $database = 'db_store';
        $username = 'root';
        $password = '215408';

        return new \PDO('mysql:host = localhost;dbname='.$database, $username,$password);
    }
}