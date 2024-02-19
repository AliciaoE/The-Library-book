<?php

use Config\Database;
use Controller\LoginController;
use Model\LoginModel;

require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$action = $_GET['action'] ?? '';

$con = new Database;
$db = $con->connection();

$loginModel = new LoginModel($db);
$loginController = new LoginController($loginModel);

if ($action === 'login') {
    $loginController->processLogin();
}

// Incluir el formulario de inicio de sesión

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Document</title>
</head>

<body>
  <?php require "./components/header.php" ?>
  <?php require "./src/view/homeMain.php" ?>
  <?php require "./components/footer.php" ?>
</body>

</html>