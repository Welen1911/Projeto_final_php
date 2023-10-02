<?php
session_start();

if (!isset($_SESSION['user'])) {
    if (isset($_COOKIE['user'])) {
        print_r($_COOKIE);
        $_SESSION['user'] = $_COOKIE['user'];
    } else {
        header('location: Login.php');
    }
}
