<?php
    require "includes/autentica.php";

	include "includes/conecta.php";

    $sql = "SELECT id, coisa FROM coisas";
						
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
            <li><a class ="active" href="coisasemprestadas.php">Lista de coisas emprestadas</a></li>
            <li><a href="atualizardados.php">Atualizar dados cadastrais</a></li>
            <li><a href="exibirdados.php">Exibir dados cadastrais</a></li>
            <li><a href="senha.php">Alterar senha</a></li>
            <li><a href="logout.php">Sair</a></li>
        </ul>
        <div>
        <ul>
            <li><h1>Exibir coisas emprestadas</h1></li>
            <li><?php if($res){
							//Percorre os registros encontrados
							while($row = mysqli_fetch_assoc($res)){
                                echo "<h3>" . $row['coisa'] . "</h3><a href= 'excluicoisas.php?id=". $row['id'] ."'>Excluir</a>";
                            }
                        }
                ?></li>
        </ul>
        </div>
    </body>
</html>