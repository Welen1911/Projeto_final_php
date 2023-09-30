<?php
$nome = isset($_POST['nome']) ? $_POST['nome'] : null;

print_r($_POST);

require('conexao.php');
require('controller.php');

$controller = new Controller($con);

$userId = $controller->cadastrarTipo($nome);
