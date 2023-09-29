<?php 

    require('session.php');

    require('conexao.php');
    require('controller.php');

    $controller = new Controller($con);

    $user = $controller->getId($_GET['id']);

    print_r($user);

    if ($user->tipo == 'admin') {
        echo "Administrador!";
    }

    $products = $controller->getProducts();

    print_r($products);

    if ($products == '') {
        echo "Não tem produtos disponíveis!";
    }
?>