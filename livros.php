<?php

    include('./src/controllers/protect.php');
    require_once './src/Conexao.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca de Babel</title>
    <link rel="stylesheet" href="./assets/css/livros.css">
    <link rel="shortcut icon" href="/assets/ico/icons8-livros-64.ico" type="image/x-icon">
    <script src="assets/js/livros.js"></script>
</head>
<body>
    <div class="container">
      
        <div class="cabecalho">
            <div class="logo">
                <img src="assets/ico/icons8-livros-64.ico" alt="">
                <h1>BIBIOTECA DE BABEL</h1>
            </div>
            <div class="buttons">
                <button id="conf"><img src="assets/icons/engrenagem-laranja.png" id="img-conf">CONFIGURAÇÕES</button>
                <a href="src/controllers/logout.php"><button id="sair"><img src="assets/icons/perfil-laranja.png" id="img-sair">SAIR</button></a>
            </div>
        </div>

        <div class="conteudo">
            <div class="conteudo-cima">
                <h1 id="h1-conteudo">Meus Livros</h1>
                <button class="adicionar" id="adicionar">Adicionar Livro</button>
            </div>
            

            <div class="tabela">
                <table id="tabela">
                    <thead>
                        <tr>
                            <th>Autor</th>
                            <th>Titulo</th>
                            <th>Subtitulo</th>
                            <th>Edição</th>
                            <th>Editora</th>
                            <th>Data de inserção</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                            $mysql = 'SELECT * FROM biblioteca WHERE usuario_id = :usuario_id';

                            $pdo = Conexao::conectar('./src/conf.ini');
        
                            $stmt = $pdo->prepare($mysql);
                        
                            $qtdLinhas = $stmt->execute([
                               ':usuario_id' => $_SESSION['id']
                            ]);
                        
                            while($linha = $stmt->fetch()){

                                echo "
                                    <tr>
                                        <td>$linha[autor]</td>
                                        <td>$linha[titulo]</td>
                                        <td>$linha[subtitulo]</td>
                                        <td>$linha[edicao]</td>
                                        <td>$linha[editora]</td>
                                        <td>$linha[data_de_publicacao]</td>
                                        <input type='hidden' name='id' class='valor-php' value='{$linha["id"]}'>
                                        <td><button class='lapis'><img src='assets/icons/lapis.png' class='img-lapis'></button></td>
                                        <td>
                                        <form action='./src/controllers/excluirLivro.php' method='post'>
                                            <input type='hidden' name='id' value='{$linha['id']}'>
                                            <button class='lixo'><img src='assets/icons/lixo.png' class='img-lixo'></button></td>
                                        </form>
                                    </tr>
                                
                                ";

                            }

                        ?>
                    </tbody>
                </table>
            </div>

            <div class="overlay" id="overlay"></div>
            
            <div id="fechar-overlay">
                <p>X</p>
            </div>

            <div class="form" id="div-form">

                <form action="src/controllers/adicionarLivro.php" method="post">

                    <h1>Adicionar Livro</h1>

                    <div class="input-container">
                        <input type="text" name="autor" id="autor" placeholder="Nome do autor" required>
                    </div>

                    <div class="input-container">
                        <input type="text" name="titulo" id="titulo" placeholder="Titulo do livro" required>
                    </div>

                    <div class="input-container">
                        <input type="text" name="subtitulo"  id="subtitulo" placeholder="Nome do subtitulo" required>
                    </div>

                    <div class="input-container">
                        <input type="text" name="edicao" id="edicao" placeholder="Nome da edição" required>
                    </div>

                    <div class="input-container">
                        <input type="text" name="editora" id="editora" placeholder="Nome da editora" required>
                    </div>

                    <div class="input-container">
                        <input type="date" name="data" id="data" required>
                    </div>
                                    
                    <button type="submit" class="adicionar">Adicionar Livro</button>
                </form>
                
            </div>

            <div class="form" id="div-form-editar">

                <form action="src/controllers/editarLivro.php" id="editar" method="post">

                    <h1>Editar Livro</h1>

                    <input type="hidden" name="id" id="input-editar-id">

                    <div class="input-container">
                        <input type="text" name="autor" id="autor" placeholder="Nome do autor" required>
                    </div>

                    <div class="input-container">
                        <input type="text" name="titulo" id="titulo" placeholder="Titulo do livro" required>
                    </div>

                    <div class="input-container">
                        <input type="text" name="subtitulo"  id="subtitulo" placeholder="Nome do subtitulo" required>
                    </div>

                    <div class="input-container">
                        <input type="text" name="edicao" id="edicao" placeholder="Nome da edição" required>
                    </div>

                    <div class="input-container">
                        <input type="text" name="editora" id="editora" placeholder="Nome da editora" required>
                    </div>

                    <div class="input-container">
                        <input type="date" name="data" id="data" required>
                    </div>
                                    
                    <button type="submit" class="adicionar">Editar Livro</button>
                </form>
                
            </div>
           
        </div>

    </div>

</body>
</html>

