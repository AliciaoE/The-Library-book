<?php

namespace Model;

use Config\Database;
use PDO;

class BookModel
{
    private $pdo;

    public function __construct()
    {
        $connection = New Database;
        $this->pdo = $connection->connection();
    }

    public function getBooks() {
        $books = $this->pdo->prepare("SELECT * FROM library.books");
        return ($books->execute()) ? $books->fetchAll(PDO::FETCH_ASSOC) : false;
    }
}
