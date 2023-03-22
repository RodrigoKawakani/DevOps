<!DOCTYPE html>
<html>
    <head>
        <title>Projeto Coisas Emprestadas</title>
        <meta charset="UTF-8"/>
        <link href="estilo.css" rel="stylesheet">
    </head>
    <body>
        <ul>
            <li><h1>Novo Cadastro</h1></li>
            <li><form action="recebercadastro.php" method="post">
                Nome <input type="text" name="nome" placeholder="Seu nome"/><br/><br/>
                CPF <input type="text" name="cpf" placeholder="000.000.000-00"/><br/><br/>
                Telefone <input type="tel" name="telefone" placeholder="(00)00000-0000"/><br/><br/>
                Data de nascimento <input type="date" name="nascimento"/><br/><br/>
                Gênero 
            <select name="genero">
                <option> Masculino </option>
                <option> Feminino </option>
            </select><br/><br/>
                Digite um Login <input type="text" name="entrar" placeholder="Seu login"/><br/><br/>
                Digite uma Senha <input type="password" name="senha" placeholder="Sua senha"/><br/><br/>
            <input class="botao" type="submit" value="Confirmar"><br/>
            </form></li>
            <li><a href="index.php">Retornar para página de login</a></li><br/><br/>
        </ul>
    </body>
</html>