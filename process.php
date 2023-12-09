<?php
    session_start();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['username'])) {
            $username = $_POST['username'];
            $_SESSION['username'] = $username;
            setcookie('username', $username, time() + 3600);
            header('Location: menu.php');
        }
    }
?>