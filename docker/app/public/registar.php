<?php
    require_once 'classes/utilizador.php';
    $u = new Utilizador;
?>


<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Sistema de Login</title>
</head>

<body>
    <div class="form-registar">
        <div class="form-corpo">
            <h1>Registar</h1>
            <form method="POST">
                <input type="text" name="nome" placeholder="Nome Completo" maxlength="30">
                <input type="text" name="telefone" placeholder="Telefone" maxlength="30">
                <input type="email" name="email" placeholder="Utilizador" maxlength="40">
                <input type="password" name="senha" placeholder="Senha"  maxlength="15">
                <input type="password" name="confSenha" placeholder="Confirmar Senha"  maxlength="15">
                <input type="submit" value="REGISTAR" class="btnAcessar">
            </form>
        </div>
    </div>

    <?php
    // verificar se clicou no botão
    if (isset($_POST['nome'])){
        $nome = addslashes($_POST['nome']);
        $telefone = addslashes($_POST['telefone']);
        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);
        $confirmarsenha = addslashes($_POST['confSenha']);
        // verificar se está preenchido
        if(!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confirmarsenha)) {
            $u->conectar("projeto_login", "db", "root", "root");
            if($u->msgErro == "") {
                if($senha == $confirmarsenha) {
                    if($u->registar($nome, $telefone, $email, $senha)) {
                        echo "Registado com Sucesso!, Já pode entrar na sua área Pessoal.";
                    } else {
                        echo "Email já registado!";
                    }
                } else {
                    echo "Atenção, senhas não correspondem!";
                }
            } else {
                echo "Erro: " . $u->$msgErro;
            }
        } else {
            echo "Preencha todos os campos!";
        }
    }


    ?>

</body>

</html>