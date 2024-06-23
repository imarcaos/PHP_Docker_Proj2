<?php
    session_start();
    unset($_SESSION['id_utilizador']);
    header("location: index.php");
?>