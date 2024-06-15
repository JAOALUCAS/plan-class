<?php

require_once './Conexao.php';

$nome = $_POST['nomedecadastro'];
$email = $_POST['novoemail'];
$senha = $_POST['novasenha'];
$data = $_POST['novadata'];

$mysql = 'INSERT INTO usuarios(nome,email,senha,data_nascimento) VALUES(:nome,:email,:senha,:data_nascimento)';

$pdo = Conexao::conectar('conf.ini');

$stmt = $pdo->prepare($mysql);

$qtdlinhas = $stmt->execute([
    ':nome' => $nome,    
    ':email' => $email,   
    ':senha' => $senha,
    ':data_nascimento' => $data    
]);

if($qtdlinhas == 1){
    header('Location: http://localhost:8000/');
}