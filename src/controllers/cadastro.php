<?php

require_once '../Conexao.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(strlen($_POST['nomedecadastro']) == 0){

        echo "<script>alert('Preencha seu nome')</script>";

    }elseif(strlen($_POST['novoemail']) == 0){

        echo "<script>alert('Preencha seu email')</script>";

    }elseif(strlen($_POST['novasenha']) == 0){

        echo "<script>alert('Preencha a senha')</script>";

    }elseif(strlen($_POST['confirmarsenha']) == 0){

        echo "<script>alert('Confirme sua senha')</script>";

    }else{

        if($_POST['novasenha'] != $_POST['confirmarsenha']){

            echo "<script>alert('As senhas precisam ser iguais')</script>";
    
        }else{
    
            if(!preg_match('/^[a-zA-ZÀ-ÿ\s]+$/', $_POST['nomedecadastro'])) {
            
                die('O nome contém caracteres inválidos.');
    
            }else{
    
                $nome = $_POST['nomedecadastro'];
    
            }

            if(!filter_var($_POST['novoemail'], FILTER_SANITIZE_EMAIL)){
            
                die('Email inválido');
    
            }else{
    
                $email = $_POST['novoemail'];
    
            }

            if (!preg_match('/^[a-zA-Z0-9!@#$%^&*()_+\-=\[\]{};:"\\|,.<>\/?]+$/', $_POST['novasenha'])) {
            
                die('A senha contém caracteres inválidos.');
    
            }else{
    
                $senha = password_hash($_POST['novasenha'], PASSWORD_DEFAULT);
    
            }

            $mysqlSelect = 'SELECT email FROM usuarios WHERE email = :email';

            $pdo = Conexao::conectar('../conf.ini');
    
            $stmt = $pdo->prepare($mysqlSelect);
    
            $stmt->execute([':email' => $email]);

            if($stmt->rowCount() > 0){

                echo "<script>alert('Email já registrado')</script>";

            }else{

                $mysqlInsert = 'INSERT INTO usuarios(nome,email,senha) VALUES(:nome,:email,:senha)';
    
                $pdo = Conexao::conectar('../conf.ini');
    
                $stmt = $pdo->prepare($mysqlInsert);
    
                $stmt->execute([
                    ':nome' => $nome,    
                    ':email' => $email,   
                    ':senha' => $senha
                ]);
    
                $usuario = $stmt->fetch();

                if($usuario !== false){

                    echo "<script>alert('Email já cadastrado')</script>";

                }else{

                    header('Location: http://localhost:8000/');

                }

            }
                    
        }

    }

}