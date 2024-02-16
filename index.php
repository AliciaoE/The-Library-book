<?php

use Config\Database;

require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$con = new Database;
$con->connection();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./resources/base.css" rel="stylesheet">
  <title>Document</title>
</head>

<body>
  <?php require "./components/header.php" ?>
  <div>
    <h2 class="center">Add a book to the library: </h2><br>
  </div>
  <div>
    
  </div>
  <a href="./src/view/bookDetailsView.php">hole</a>
  <?php require "./components/footer.php" ?>
</body>

</html>