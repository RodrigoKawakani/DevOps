<?php

    include "includes/conecta.php";

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $nascimento = $_POST['nascimento'];
    $genero = $_POST['genero'];
    $entrar = $_POST['entrar'];
    $senha = $_POST['senha'];

    if(empty($id)){
	
		$sql = "INSERT INTO cadastro (nome, cpf, telefone, nascimento, genero, entrar, senha)
				VALUES 
                ('$nome', '$cpf', '$telefone', '$nascimento', '$genero', '$entrar', '$senha')";
		

		$res = mysqli_query($conn, $sql);
		
		if($res){

			header("Location: inicio.php");
		}
		else{
			echo "ERRO AO INSERIR!";
		}
		
	}
	else{
	echo "Usuário já cadastrado!";
	}

?>