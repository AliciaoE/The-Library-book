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

  <title>Document</title>
</head>

<body>
  <h1 class="bg-blue-200 text-[#50d71e]">
    Hello world!
  </h1>
  <h2 class="border-2">Bye world!</h2>
</body>

</html>