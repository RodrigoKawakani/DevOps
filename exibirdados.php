<?php
    require "includes/autentica.php";
	include "includes/conecta.php";

    $id = $_SESSION['id'];
    
    $sql = "SELECT nome, cpf, telefone, nascimento, genero 
            FROM cadastro 
            WHERE id = $id";
						
    $res = mysqli_query($conn, $sql);


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
            <li><a class ="active" href="exibirdados.php">Exibir dados cadastrais</a></li>
            <li><a href="senha.php">Alterar senha</a></li>
            <li><a href="logout.php">Sair</a></li>
        </ul>
        <div>
        <ul>
            <li><h1>Exibir dados cadastrais</h1></li>
            <li><?php if($res){
							while($row = mysqli_fetch_assoc($res)){
                                echo "<h3>" . "Nome" . "</h3>". $row['nome'];
                                echo "<h3>" . "CPF" . "</h3>" . $row['cpf'];
                                echo "<h3>" . "Telefone" . "</h3>" . $row['telefone'];
                                echo "<h3>" . "Data de Nascimento" . "</h3>" . $row['nascimento'];
                                echo "<h3>" . "Gênero" . "</h3>". $row['genero'];
                            }
                        }
                ?></li>
        </ul>
        </div>
    </body>
</html>