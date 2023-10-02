<?php 
    session_start();
    session_destroy();
    if (isset($_COOKIE['user'])) {
        setcookie('user', null, -1);
        print_r($_COOKIE);
    }
    if (isset($_COOKIE['admin'])) {
        setcookie('admin', null, -1);
        print_r($_COOKIE);
    }
    // header('location: ../Login.php');

?>