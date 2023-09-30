<?php

require('conexao.php');
require('controller.php');

$controller = new Controller($con);

$types = $controller->tipos();

