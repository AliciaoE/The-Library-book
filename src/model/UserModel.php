<?php

namespace Model;

use Config\Database;
use PDO;

class UserModel
{
    private $pdo;

    public function __construct()
    {
        $connection = New Database;
        $this->pdo = $connection->connection();
    }

    public function getUsers() {
        $books = $this->pdo->prepare("SELECT * FROM library.users");
        return ($books->execute()) ? $books->fetchAll(PDO::FETCH_ASSOC) : false;
    }
}
