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
    <div class="form-login">
        <div class="form-corpo">
            <h1>Entrar</h1>
            <form method="POST">
                <input type="email" name="email" placeholder="Utilizador">
                <input type="password" name="senha" placeholder="Senha">
                <input type="submit" value="ACESSAR" class="btnAcessar">
                <a href="registar.php">Conheça meu trabalho!<strong> Registe-se</strong></a>
            </form>
        </div>
    </div>
    
    <?php
        if (isset($_POST['email'])) {
            $email = addslashes($_POST['email']);
            $senha = addslashes($_POST['senha']);
            if (!empty($email) && !empty($senha)) {
                $u->conectar("projeto_login", "db", "root", "root");
                if ($u->msgErro == "") {
                    if($u->entrar($email, $senha)) {
                        header('Location: user_area.php');
                    } else {
                        ?>
                            <div class="msg-erro">
                                Email e/ou Senha Inválidos!
                            </div>
                        <?php
                    }
                } else {
                    ?>
                        <div class="msg-erro">
                            <?= "Erro: " . $u->$msgErro; ?>
                        </div>
                    <?php
                }
            } else {
                ?>
                    <div class="msg-erro">
                    Preencha todos os Campos!
                    </div>
                <?php
            }
        }
    
    ?>

</body>

</html>