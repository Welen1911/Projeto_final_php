<?php 

    require('session.php');

    require('conexao.php');
    require('controller.php');

    $controller = new Controller($con);

    $user = $controller->getId($_SESSION['user']);

    $products = $controller->getProducts();

?>