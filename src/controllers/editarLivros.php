<?php

if(!isset($_SESSION)){

    session_start();

}

require_once '../Conexao.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(strlen($_POST['autor']) == 0){

        echo "<script>alert('Preencha o nome do autor')</script>";

    }elseif(strlen($_POST['titulo']) == 0){

        echo "<script>alert('Preencha o titulo do livro')</script>";

    }elseif(strlen($_POST['subtitulo']) == 0){

        echo "<script>alert('Preencha o subtitulo do livro')</script>";

    }elseif(strlen($_POST['edicao']) == 0){

        echo "<script>alert('Preencha o titulo do livro')</script>";

    }elseif(strlen($_POST['editora']) == 0){

        echo "<script>alert('Preencha o nome da editora')</script>";

    }elseif(strlen($_POST['data']) == 0){

        echo "<script>alert('Preencha a data de publicação')</script>";

    }else{
        
        $id = $_POST['id'];
        $autor = $_POST['autor'];
        $titulo = $_POST['titulo'];
        $subtitulo = $_POST['subtitulo'];
        $edicao = $_POST['edicao'];
        $editora = $_POST['editora'];
        $data = $_POST['data'];

        $mysql = 'UPDATE biblioteca SET autor = :autor, titulo = :titulo, subtitulo = :subtitulo, edicao = :edicao,
        editora = :editora, data_de_publicacao = :data_de_publicacao WHERE id = :id AND usuario_id = :usuario_id';

        $pdo = Conexao::conectar('../conf.ini');

        $stmt = $pdo->prepare($mysql);

        $qtdlinhas = $stmt->execute([
            ':id' => $id,
            ':usuario_id' => $_SESSION['id'],
            ':autor' => $autor,    
            ':titulo' => $titulo,   
            ':subtitulo' => $subtitulo,
            ':edicao' => $edicao,
            ':editora' => $editora,
            ':data_de_publicacao' => $data    
        ]);
        
        
        header('Location: http://localhost:8000/livros.php');

    }

}