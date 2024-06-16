<?php

require_once '../Conexao.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(strlen($_POST['email']) == 0){

        echo "<script>alert('Preencha o email')</script>";

    }elseif(strlen($_POST['senha']) == 0){

        echo "<script>alert('Preencha a senha')</script>";

    }else{
  
        if(!filter_var($_POST['email'], FILTER_SANITIZE_EMAIL)){
            
            die('Email inválido');

        }else{

            $email = $_POST['email'];

        }
        
        if (!preg_match('/^[a-zA-Z0-9!@#$%^&*()_+\-=\[\]{};:"\\|,.<>\/?]+$/', $_POST['senha'])) {
            
            die('A senha contém caracteres inválidos.');

        }else{

            $senha = $_POST['senha'];

        }
        
        $mysql = 'SELECT * FROM usuarios WHERE email= :email';

        $pdo = Conexao::conectar('../conf.ini');
        
        $stmt = $pdo->prepare($mysql);
        
        $stmt->execute([':email' => $email]);
        
        $usuario = $stmt->fetch();

        if(password_verify($senha, $usuario['senha'])){

            if(!isset($_SESSION)){

                session_start();

            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header('Location: http://localhost:8000/livros.php');

        }else{

            echo  "<script>alert('Credenciais erradas');</script>";

        }
        
    }

}


