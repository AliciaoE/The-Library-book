<header class="header">
    <a href="<?= $_ENV['DOMAIN'] ?>The-Library-book"   class="logo">
        <img src="<?= $_ENV['DOMAIN'] ?>The-Library-book/assets/images/logo.svg" alt="Logo">
    </a>
    <div class="searchLogin">
        <form class="searchBox" action="/The-Library-book/index.php" method="GET">
            <button type="submit" name="search"><img src="<?= $_ENV['DOMAIN'] ?>The-Library-book/assets/images/search-icon.svg" alt="Buscar"></button>
            <input type="search" autocomplete="off" label="Search" placeholder="Search by title/ author" name="keyword" value="<?php echo isset($_GET['keyword']) ? $_GET['keyword'] : '' ?>">
        </form>
        <div class="login">
            <img src="<?= $_ENV['DOMAIN'] ?>The-Library-book/assets/images/user-icon.svg" alt="user">
            <a href="#">Login</a>
        </div>
    </div>
    </div>
</header>