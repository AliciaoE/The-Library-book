<?php

// use Config\Database;
use Controller\BookController;

require_once __DIR__ . '../../../vendor/autoload.php';

// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
// $dotenv->load();

// $con = new Database;
// $con->connection();
$controller = new BookController;
$books = $controller->getBooks();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h2>Mis libros:</h2>
    <?php
    if(is_array($books)) :
        foreach($books as $book) :
        ?>

        <div>
            <h4>Libro: <?= $book['title'] ?></h4>
            <p>Author: <?= $book['author'] ?></p>
            <p>ISBN: <?= $book['ISBN'] ?></p>
            <p>description: <?= $book['description'] ?></p>
        </div>
        <?php
        endforeach;
        ?>
        <?php else: ?>
            <h3><?= $books ?></h3>
    <?php endif; ?>
    </body>
</html>