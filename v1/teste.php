<?php
//phpinfo();
$conn = mysqli_connect("db", "root", "root", "sys" ) or die(mysqli_error()); //("nome_conexão", "utilizador", "password", "nome_da_db" )
echo "BD Conectado!";
$conn->close();
?>