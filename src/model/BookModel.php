<?php

namespace Model;

use Config\Database;

class BookModel
{
    private $pdo;

    public function __construct()
    {
        $connection = New Database;
        $this->pdo = $connection->connection();
    }
}
