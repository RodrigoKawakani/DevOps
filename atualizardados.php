<?php
    require "includes/autentica.php";

	include "includes/conecta.php";

    $id = "";
    $nome = "";
    $cpf = "";
    $telefone = "";
    $nascimento = "";
    $genero = "";

    if(isset($_GET['id'])){

        $id = $_GET['id'];
        $sql = "SELECT * FROM cadastro WHERE id = $id";
        $res = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($res);

        $nome = $row['nome'];
		$cpf = $row['cpf'];
		$telefone = $row['telefone'];
        $nascimento = $row['nascimento'];
        $genero = $row['genero'];
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
            <li><a class="active" href="atualizardados.php">Atualizar dados cadastrais</a></li>
            <li><a href="exibirdados.php">Exibir dados cadastrais</a></li>
            <li><a href="senha.php">Alterar senha</a></li>
            <li><a href="logout.php">Sair</a></li>
        </ul>
        </ul>
        <div>
        <ul id="lista">
            <li><h1>Atualizar Dados</h1></li>
            <li><form action="receberatualizacao.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                Nome <input type="text" name="nome" value="<?php echo $nome; ?>"/><br/><br/>
                CPF <input type="text" name="cpf" value="<?php echo $cpf; ?>"/><br/><br/>
                Telefone <input type="tel" name="telefone" value="<?php echo $telefone; ?>"/><br/><br/>
                Data de nascimento <input type="date" name="nascimento" value="<?php echo $nascimento; ?>"/><br/><br/>
                Gênero 
            <select name="genero">
                <option value="M" <?php if($genero =="M"){echo "selected";} ?>> Masculino </option>
                <option value="F" <?php if($genero =="F"){echo "selected";} ?>> Feminino </option>
            </select><br/><br/>
            <input class="botao" type="submit" value="Confirmar"><br/><br/>
            </form></li>
        </ul>
        </div>
    </body>
</html>