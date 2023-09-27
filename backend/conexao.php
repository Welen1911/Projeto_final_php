<?php 
    $host = 'localhost';
    $userName = 'root';
    $pass = '';
    $bdName = 'projeto_final_php';
    $con = null;
    try {
        $con = mysqli_connect($host, $userName, $pass, $bdName);
    } catch (Error $e) {
        echo "Error: ".$e;
    }

?>