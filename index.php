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
<<<<<<< HEAD
  <?php require "./components/header.php" ?>
  <?php require "./components/homeMain.php" ?>
  <?php require "./components/footer.php" ?>
=======
  <h1 class="bg-blue-200 text-[#50d71e]">
    Hello world!
  </h1>
  <h2 class="border-2">Bye world!</h2>
<<<<<<< HEAD
  <!-- <?php require "./components/bookform.php" ?> -->
>>>>>>> 5b1fb37 (fix: 🚑️ deleted all tailwind related files, using vanilla css)
=======
>>>>>>> db9d670 (feat: 🚧 book form structure)
</body>

</html>