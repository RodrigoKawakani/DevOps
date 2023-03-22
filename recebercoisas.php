<?php

    include "includes/conecta.php";

$id = $_POST['id'];
$coisa = $_POST['coisa'];

if(empty($id)){

    $sql = "INSERT INTO coisas (coisa) 
            VALUES 
            ('$coisa')";
    
    $res = mysqli_query($conn, $sql);
    
    if($res){
        header("Location: coisasemprestadas.php");
    }
    else{
        echo "ERRO AO INSERIR!";
    }
    
}

?>