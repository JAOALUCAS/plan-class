<?php

require_once './Conexao.php';

if(isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['confirmarsenha'])){

    if(strlen($_POST['email']) == 0){

        echo "<script>alert('Preencha o email')</script>";

    }elseif(strlen($_POST['senha']) == 0){

        echo "<script>alert('Preencha a senha')</script>";


    }elseif(strlen($_POST['confirmarsenha']) == 0){

        echo "<script>alert('Confirme sua senha')</script>";

    }else{
  
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $confirmarSenha = $_POST['confirmarsenha'];

        if($senha != $confirmarSenha){

            echo "<script>alert('As senhas precisam ser iguais')</script>";

        }else{

            $mysql = 'SELECT * FROM usuarios WHERE email= :email AND senha = :senha';

            $pdo = Conexao::conectar('conf.ini');
        
            $stmt = $pdo->prepare($mysql);
        
            $qtdLinhas = $stmt->execute([
                ':email' => $email,
                ':senha' => $senha
            ]);
        
            $usuario = $stmt->fetch();

            if(count($usuario) > 0){

                if(!isset($_SESSION)){

                    session_start();

                }

                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nome'] = $usuario['nome'];

                header('Location: http://localhost:8000/livros.php');

            }else{

                echo  '<script type="text/javascript">alert("Credenciais erradas");</script>';

            }
        
        }
    }

}


