<?php
    require "includes/autentica.php";
    include "includes/conecta.php";

    $id = $_SESSION['id'];
    $senha = $_POST['senha'];

    $sql = "UPDATE cadastro SET
            senha = '$senha'
            WHERE
            id = $id";
    
    $res = mysqli_query($conn, $sql);
    
    if($res){

        header("Location: senha.php");
    }
    else{
        echo "ERRO AO ATUALIZAR!";
    }


?>