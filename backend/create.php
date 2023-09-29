<?php 

    $nome = isset($_POST['nome']) ? $_POST['nome'] : null;
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $surname = isset($_POST['username']) ? $_POST['username'] : null;
    $senha = isset($_POST['senha']) ? $_POST['senha'] : null;
    $tipo = isset($_POST['tipo']) ? $_POST['tipo'] : null;


    require('conexao.php');
    require('controller.php');

    print_r($surname);

    $controller = new Controller($con);

    $userId = $controller->cadastrar($nome, $email, $surname, $tipo, hash('sha256', $senha));
?>