<?php
// require_once __DIR__ . '/vendor/autoload.php';

// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
// $dotenv->load();

?>

<header class="header">
    <div class="logo">
        <img src="<?= $_ENV['DOMAIN']?>The-Library-book/assets/images/logo.svg" alt="Logo">
    </div>
    <div class="searchLogin">
        <div class="searchBox">
            <button><img src="assets/images/search-icon.svg" alt="Buscar"></button>
            <input type="text" placeholder="Buscar">
        </div>
        <div class="login">
            <img src="assets/images/user-icon.svg" alt="user">
            <a href="#">Login</a>
        </div>
    </div>
    </div>
</header>