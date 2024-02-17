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

    public function getBooksByPage($offset, $limit) {
    $statement = $this->pdo->prepare("SELECT * FROM library.books LIMIT :limit OFFSET :offset");
    $statement->bindValue(':limit', $limit, PDO::PARAM_INT);
    $statement->bindValue(':offset', $offset, PDO::PARAM_INT);
    $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getTotalBooksCount() {
        $statement = $this->pdo->prepare("SELECT COUNT(*) FROM library.books");
        $statement->execute();
        return $statement->fetchColumn();
    }
}
