<?php
    require "includes/autentica.php";
	include "includes/conecta.php";

	$id = $_SESSION['id'];
	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$telefone = $_POST['telefone'];
	$nascimento = $_POST['nascimento'];
	$genero = $_POST['genero'];

	$sql = "UPDATE cadastro SET
				nome = '$nome',
				cpf = '$cpf',
				telefone = '$telefone',
                nascimento = '$nascimento',
                genero = '$genero'
			WHERE
				id = $id";
					
		$res = mysqli_query($conn, $sql);
		
		if($res){
			header("Location: atualizardados.php");
		}
		else{
			echo "ERRO AO ATUALIZAR!";
		}
	
?>