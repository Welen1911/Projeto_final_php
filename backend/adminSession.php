<?php 
    session_start();
    if (!isset($_SESSION['user']) && !isset($_SESSION['admin']) && ($_SESSION['user'] != $_SESSION['admin'])) header('location: Login.php');

    if (!isset($_SESSION['admin'])) header('location: Login.php');

    if ($_SESSION['user'] != $_SESSION['admin']) header('location: Login.php');

?>