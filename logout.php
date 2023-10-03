<?php 
    session_start();
    session_destroy();
    if (isset($_COOKIE['user'])) {
        setcookie('user', null, -1);
    }
    if (isset($_COOKIE['admin'])) {
        setcookie('admin', null, -1);
    }
    header('location: Login.php');

?>