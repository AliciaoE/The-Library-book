<?php
// index.php

// Iniciar la sesión
session_start();

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

// Verificar si el usuario está logueado
$isLoggedIn = isset($_SESSION['last_name']);

if ($action === 'login') {
    // Si el usuario está logueado y trata de acceder a la página de login, redirigirlo a otra página
    if ($isLoggedIn) {
        header("Location: http://localhost/The-Library-book/index.php?action=logout");
        exit();
    }
    $loginController->processLogin();
} elseif ($action === 'logout') {
    // Si el usuario intenta hacer logout, destruir la sesión y redirigirlo a la página de login
    session_destroy();
    header("Location: http://localhost/The-Library-book/index.php?action=login");
    exit();
}
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
  <?php require "./src/view/homeMain.php" ?>
  <?php require "./components/footer.php" ?>

</body>

</html>
