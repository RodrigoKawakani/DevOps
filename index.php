<!DOCTYPE html>
<html>
    <head>
        <title>Projeto Coisas Emprestadas</title>
        <meta charset="UTF-8"/>
        <link href="estilo.css" rel="stylesheet">
    </head>
    <body>
        <ul id="login">
            <li><h1>Coisas emprestadas</h1></li>
            <li><form action="login.php" method="post">
                Login <input type="text" name="entrar" placeholder="Seu login"/><br/><br/>
                Senha <input type="password" name="senha" placeholder="Sua senha"/><br/><br/>
                <input class="botao" type="submit" value="Logar"><br/>
            </form></li>
            <li><a href="cadastro.php">Novo cadastro</a></li>
            
            <?php
			
				if(isset($_GET['erro'])){
					echo '<p style="text-align:center;color:red">Usuário e/ou senha incorreto(s).</p>';
				}
				
				if(isset($_GET['autentica'])){
					echo '<p style="text-align:center;color:red">Você não tem permissão de acesso.</p>';
				}
			
			?>
        </ul>
    </body>
</html>