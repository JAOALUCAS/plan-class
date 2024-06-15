<?php

    include('./src/protect.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca de Babel</title>
    <link rel="stylesheet" href="./assets/css/livros.css">
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
                <button id="conf"><img src="assets/icons/engrenagem-laranja.png">CONFIGURAÇÕES</button>
                <a href="src/logout.php"><button id="sair"><img src="assets/icons/perfil-laranja.png">SAIR</button></a>
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
                            <th>Id</th>
                            <th>Autor</th>
                            <th>Titulo</th>
                            <th>Subtitulo</th>
                            <th>Data de inserção</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>

            <div class="overlay" id="overlay"></div>
            
            <div id="fechar-overlay">
                <p>X</p>
            </div>

            <div class="form" id="div-form">

                <form action="src/adicionarLivro.php" method="post">

                    <h1>Adicionar Livro</h1>

                    <div class="input-container">
                        <label for="autor">Autor:</label>
                        <input type="text" name="autor" id="autor"  required>
                    </div>

                    <div class="input-container">
                        <label for="titulo">Título:</label>
                        <input type="text" name="titulo" id="titulo"  required>
                    </div>

                    <div class="input-container">
                        <label for="subtitulo">Subtítulo:</label>
                        <input type="text" name="subtitulo"  id="subtitulo" required>
                    </div>

                    <div class="input-container">
                        <label for="edicao">Edição:</label>
                        <input type="text" name="edicao" id="edicao" required>
                    </div>

                    <div class="input-container">
                        <label for="editora">Editora:</label>
                        <input type="text" name="editora" id="editora" required>
                    </div>

                    <div class="input-container">
                        <label for="data">Ano de publicação:</label>
                        <input type="date" name="data" id="data" required>
                    </div>
                                    
                    <button type="submit" class="adicionar">Adicionar Livro</button>
                </form>
            </div>
           
        </div>

    </div>

</body>
</html>
