<?php
    require "includes/autentica.php";

	include "includes/conecta.php";
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
            <li><a class="active" href="cadastrocoisas.php">Cadastrar coisas</a></li>
            <li><a href="coisasemprestadas.php">Lista de coisas emprestadas</a></li>
            <li><a href="atualizardados.php">Atualizar dados cadastrais</a></li>
            <li><a href="exibirdados.php">Exibir dados cadastrais</a></li>
            <li><a href="senha.php">Alterar senha</a></li>
            <li><a href="logout.php">Sair</a></li>
        </ul>
        <div>
        <ul>
            <li><h1>Cadastro de Coisas</h1></li>
            <li><form action="recebercoisas.php" method="post">
                Novo objeto <input type="text" name="coisa" placeholder="Nome do objeto"/><br/><br/>
                <input class="botao" type="submit" value="Confirmar"><br/><br/>
            </form></li>
        </ul>
        </div>
    </body>
</html>