<?php 
    session_start();

    if (isset($_COOKIE['user'])) {
        $_SESSION['user'] = $_COOKIE['user'];
    }
    if (isset($_COOKIE['admin'])) {
        $_SESSION['admin'] = $_COOKIE['admin'];
    }


    if (!isset($_SESSION['user']) && !isset($_SESSION['admin']) && ($_SESSION['user'] != $_SESSION['admin'])) header('location: Login.php');

    if (!isset($_SESSION['admin'])) header('location: Login.php');

    if ($_SESSION['user'] != $_SESSION['admin']) header('location: Login.php');

?>