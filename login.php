<?php
	
	$entrar = $_POST["entrar"];
	$senha = $_POST["senha"];

	include "includes/conecta.php";
	
	$sql = "SELECT * FROM cadastro WHERE entrar = '$entrar' AND senha = '$senha'";
	$res = mysqli_query($conn, $sql);
	
	$qtdeRegistros = mysqli_num_rows($res);
	
	if($qtdeRegistros > 0){
		
		session_start();
		
		$row = mysqli_fetch_assoc($res);
		
		$_SESSION['id'] = $row['id'];
		$_SESSION['nome'] = $row['nome'];
		
		header("Location: inicio.php");
	}
	else{
		header("Location: index.php?erro=1");
	}

?>