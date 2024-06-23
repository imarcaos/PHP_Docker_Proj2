<?php
    session_start();
    if(!isset($_SESSION['id_utilizador'])) {
        header("location: index.php");
        exit;
    }
?>

    <h1>Bem vindo ao seu Workspace!</h1>
    <a href="sair.php">Sair</a>