<?php 

    $nome = isset($_POST['nome']) ? $_POST['nome'] : null;
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $userName = isset($_POST['userName']) ? $_POST['userName'] : null;
    $senha = isset($_POST['senha']) ? $_POST['senha'] : null;


    require('conexao.php');
    require('controller.php');

    $controller = new Controller($con);

    $userId = $controller->cadastrar('fuleiro', 'fuleiro@teste1.com', 'fuleiro1912', 'admin', hash('sha256', '12345'));
?>