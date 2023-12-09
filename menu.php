<?php
    session_start();
    if(isset($_SESSION['username'])) {
        $sessionUsername = $_SESSION['username'];
    }
    else {
        $sessionUsername = 'незнайомець';
    }

    if(isset($_COOKIE['username'])) {
        $cookieUsername = $_COOKIE['username'];
    }
    else {
        $cookieUsername = 'незнайомець';
    }
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="stylesMenu.css">
</head>
<body>
    <h1>Меню</h1>
    <div id="menu">
        <a href="/lab1/index.php">Лабораторна робота №1</a> <br>
        <a href="/lab2/index.php">Лабораторна робота №2</a> <br>
        <a href="/lab3/index.php">Лабораторна робота №3</a> <br>
    </div>
    <div id="delete">
        <form action="delete.php" method="post">
            <input type="submit" name="delete" value="Log out" id="deleteButton">
        </form>
    </div>
    <div id="login">
        <p>Привіт, <?php echo $sessionUsername; ?> (сесія)</p>
        <p>Привіт, <?php echo $cookieUsername; ?> (кукі)</p>
    </div>
</body>
</html>