<?php

// use Config\Database;
use Controller\BookController;

require_once __DIR__ . './../vendor/autoload.php';

// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
// $dotenv->load();

// $con = new Database;
// $con->connection();
$controller = new BookController;
$books = $controller->getBooks();

?>
<main>
    <div class="wrapper">
                <h1>Find your next literary adventure</h1>
                <div class="bookGrid">
                <?php
    if(is_array($books)) :
        foreach($books as $book) :
        ?>
                    <div class="bookCard">
                        <div href='#'>
                            <div class=''>
                                <a href='#' title='Book'>
                                <!-- <?php
                                    // Verifica si existe la ruta de la imagen en la base de datos
                                    $bookImage= isset($book['book_image']) ? $book['book_image'] : 'https://placehold.co/110x180/png';
                                    ?>
                                    <img src='<?= $bookImage ?>' alt='Book Cover' class=''> -->
                                </a>
                            </div>
                            <h3><?= $book['title'] ?></h3>
                            <p><?= $book['author'] ?></p>
                        </div>
                    </div>
        <?php
        endforeach;
        ?>
        <?php else: ?>
            <h3><?= $books ?></h3>
    <?php endif; ?>
                </div>
        <div class="pagination">
            <button class="pagination-btn">1</button>
            <button class="pagination-btn">2</button>
            <button class="pagination-btn">3</button>
            <button class="pagination-btn">Next</button>
        </div>
    </div>
</main>