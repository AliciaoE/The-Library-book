<header class="header">
    <a href="<?= $_ENV['DOMAIN'] ?>The-Library-book" class="logo">
        <img src="<?= $_ENV['DOMAIN'] ?>The-Library-book/assets/images/logo.svg" alt="Logo">
    </a>
    <div class="searchLogin">
        <form class="searchBox" action="/The-Library-book/index.php" method="GET">
            <button type="submit" name="search">
                <img src="<?= $_ENV['DOMAIN'] ?>The-Library-book/assets/images/search-icon.svg" alt="Buscar">
            </button>
            <input type="search" autocomplete="off" label="Search" placeholder="Search by title/ author" name="keyword" value="<?php echo isset($_GET['keyword']) ? $_GET['keyword'] : '' ?>">
        </form>
        <?php if(isset($_SESSION['last_name'])): ?>
    <a class="login" href="<?php echo $_ENV['DOMAIN'] ?>The-Library-book/logout.php">
        <img src="<?= $_ENV['DOMAIN'] ?>The-Library-book/assets/images/user-icon.svg" alt="user">
        <span>Logout</span>
    </a>
<?php else: ?>
    <a class="login" href="<?php echo $_ENV['DOMAIN'] ?>The-Library-book/src/view/formView.php">
        <img src="<?= $_ENV['DOMAIN'] ?>The-Library-book/assets/images/user-icon.svg" alt="user">
        <span>Login</span>
    </a>
<?php endif; ?>
    </div>
</header>


