<?php 
    session_start();
    
    if (isset($_COOKIE['user'])) {
        print_r($_COOKIE);
        $_SESSION['user'] = $_COOKIE['user'];
    }
    
    if (!isset($_SESSION['user'])) header('location: Login.php');

?>