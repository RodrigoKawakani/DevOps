<?php

    require "includes/autentica.php";

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Projeto Coisas Emprestadas</title>
        <meta charset="UTF-8"/>
        <link href="estilo.css" rel="stylesheet">
    </head>
    <body>
        <ul>
            <li><h1>Menu</h1></li>
            <li><a href="cadastrocoisas.php">Cadastrar coisas</a></li>
            <li><a href="coisasemprestadas.php">Lista de coisas emprestadas</a></li>
            <li><a href="atualizardados.php">Atualizar dados cadastrais</a></li>
            <li><a href="exibirdados.php">Exibir dados cadastrais</a></li>
            <li><a href="senha.php">Alterar senha</a></li>
            <li><a href="index.php">Sair</a></li><br/><br/>
        </ul>
        <div>
        <ul>
            <li><h1>Bem vindo <?php echo $_SESSION['nome']; ?></h1></li><br/>
        </ul>
        </div>
    </body>
</html>