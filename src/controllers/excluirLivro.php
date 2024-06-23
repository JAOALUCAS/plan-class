<?php

if(!isset($_SESSION)){

    session_start();

}

require_once '../Conexao.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $id = $_POST['id'];

    $mysql = 'DELETE FROM biblioteca WHERE id = :id AND usuario_id = :usuario_id';

    $pdo = Conexao::conectar('../conf.ini');

    $stmt = $pdo->prepare($mysql);

    $qtdlinhas = $stmt->execute([
        ':id' => $id,
        ':usuario_id' => $_SESSION['id']  
    ]);

    header('Location: http://localhost:8000/livros.php');

}