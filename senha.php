<?php
    require "includes/autentica.php";

	include "includes/conecta.php";

if($conn == false) {
    die("ERRO: Não conseguiu conectar no MySQL. " . mysqli_connect_error());
}

    $id = "";
    $senha = "";
    
    if(isset($_GET['id'])){

        $id = $_GET['id'];
        $sql = "SELECT * FROM cadastro WHERE id = $id";
        $res = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($res);
    }

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
            <li><a class="active" href="senha.php">Alterar senha</a></li>
            <li><a href="logout.php">Sair</a></li>
        </ul>
        <div>
        <ul id="lista">
            <li><h1>Alterar senha</h1></li>
            <li><form action="recebersenha.php" method="post">
                Digite uma nova Senha <input type="password" name="senha" placeholder="Nova senha"/><br/><br/>
            <input class="botao" type="submit" value="Confirmar"><br/><br/>
            </form></li>
        </ul>
        </div>
    </body>
</html>