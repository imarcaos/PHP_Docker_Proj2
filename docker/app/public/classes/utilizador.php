<?php

    Class Utilizador {

        private $pdo;
        public $msgErro = "";

        public function conectar($db_name, $host, $db_user, $db_pass) {
            global $pdo;
            try {
                $pdo = new PDO("mysql:dbname=".$db_name.";host=".$host, $db_user, $db_pass);
            } catch (PDOException $err) {
                $msgErro = $err->getMessage();                
            }            
        }

        public function registar($nome, $telefone, $email, $senha) {
            global $pdo;
            // verificar se já existe o email registado
            $sql = $pdo->prepare("SELECT id_utilizador FROM utilizadores WHERE email = :e");
            $sql->bindValue(":e", $email);
            $sql->execute();
            if($sql->rowCount() > 0) {
                return false; // ja esta registado
            } else {
                // caso não, registar
                $sql = $pdo->prepare("INSERT INTO utilizadores (nome, telefone, email, senha) VALUES (:n, :t, :e, :s)");
                $sql->bindValue(":n", $nome);
                $sql->bindValue(":t", $telefone);
                $sql->bindValue(":e", $email);
                $sql->bindValue(":s", md5($senha));  //md5 a título de estudo, sei de criptografias melhores
                $sql->execute();
                return true;
            }            
        }

        public function entrar($email, $senha) {
            global $pdo;
            // verificar se o email e a senha estão registadas
            $sql = $pdo->prepare("SELECT id_utilizador FROM utilizadores WHERE email = :e AND senha = :s");
            $sql->bindValue(":e", $email);
            $sql->bindValue(":s", md5($senha));
            $sql->execute();
            if ($sql->rowCount() > 0) {
                // entrar no sistema (sessão)
                $dado = $sql->fetch();
                session_start();
                $_SESSION['id_utilizador'] = $dado['id_utilizador'];
                return true; // login efetuado com sucesso
            } else {
                return false; // não conseguiu fazer o login
            }
            

        }
    }

?>