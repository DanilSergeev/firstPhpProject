<?php require "includ/db.php"; ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swoon</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="img/1.jpg" type="img/png">
    <script src="https://kit.fontawesome.com/8c5f8983b2.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <nav>
            <input type="checkbox" id="checkboxMenu">
            <label for="checkboxMenu">
                <ul class="menu touch">
                    <li class="logo"><a href="/">
                            <?php echo $config['title']; ?>
                        </a></li>
                    <li><a href="/">Главная</a></li>
                    <li><a href="about.php">Связь со мной</a></li>
                    <?php if ($_COOKIE['user'] == ''): ?>
                    <li><a href="login.php">Войти</a></li>
                    <?php else: ?>
                    <li><a href="../form/exit.php">Выйти из
                            <?php echo $_COOKIE['user']; ?>
                        </a></li>
                    <?php endif; ?>
                </ul>
                <span class="toggle">☰</span>
            </label>
        </nav>
        <div class="bot-header">
            <div class="header-container">
                <?php while ($cats = mysqli_fetch_assoc($categories)) { ?>
                <a href="../categorie.php?id=<?php echo $cats['id'] ?>" class="categories">
                    <?php echo $cats['title']; ?>
                </a>
                <?php } ?>
            </div>
        </div>
    </header>