<?php
    session_start();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['delete'])) {
            session_destroy();
            setcookie('username', '', time() - 3600);
            header('Location: index.html');
        }
    }
?>