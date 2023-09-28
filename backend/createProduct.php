<?php
$nome = isset($_POST['nome']) ? $_POST['nome'] : null;
$descricao = isset($_POST['descricao']) ? $_POST['descricao'] : null;
$preco = isset($_POST['preco']) ? $_POST['preco'] : null;
$tipo = isset($_POST['tipo']) ? $_POST['tipo'] : null;


require('conexao.php');
require('controller.php');

$controller = new Controller($con);

$userId = $controller->cadastrarProduto($nome, $descricao, $preco, $tipo);
