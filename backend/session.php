<?php 
    session_start();
    if (!isset($_SESSION['user'])) echo 'Você não está na sessão!';

?>