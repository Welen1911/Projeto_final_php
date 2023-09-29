<?php

$key = 0;
$email = '';
$surname = '';
if (isset($_POST['username'])) {
    if (str_contains($_POST['username'], '.com')) {
        $email = $_POST['username'];
    } else {
        $surname = $_POST['username'];
        $key = 1;
    }
}

$senha = isset($_POST['senha']) ? $_POST['senha'] : null;
$senha =  hash('sha256', $senha);

require('conexao.php');
require('controller.php');

$controller = new Controller($con);

$user = $controller->getLogin($email, $surname, $senha, $key);
