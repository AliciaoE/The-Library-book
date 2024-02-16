<?php

use Controller\BookController;

require_once __DIR__ . '../../vendor/autoload.php';

$controller = new BookController;
$books = $controller->getBooks();


?>

<div class="bookDetailsMain">
    <section class="bookDetailsContainer">
        <img src="../../assets/images/41DK3BVS1OL._SY445_SX342_.jpg" alt="Book's cover" class="bookDetailsImage">
        <aside class="infoContainer">
            <h2 class="bookDetailsTitle">
                Book's Title
            </h2>
            <h3 class="bookDetailsAuthor">
                Book's Author
            </h3>
            <h6 class="bookDetailsTextTitle">
                ISBN
            </h6>
            <p class="bookDetailsText">
                243521634261346243
            </p>
            <h6 class="bookDetailsTextTitle">
                Description
            </h6>
            <p class="bookDetailsText">
                Atomic Habits offers a proven framework for improving - every day. James Clear, one of the world's leading experts on habit formation, reveals practical strategies that will teach you exactly how to form good habits, break bad ones, and master the tiny behaviors that lead to remarkable results.
            </p>
        </aside>
    </section>
    <a class="buttonDetails" href="../../index.php">
        Back
    </a>
</div>