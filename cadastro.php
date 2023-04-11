<?php
    include("conexao.php");

    $nome=$_POST['nome'];
    $telefone=$_POST['telefone'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];

    $sql="INSERT INTO cadastro(nome, telefone, email, senha) VALUE ('$nome', '$telefone', '$email', '$senha')";

    if(mysqli_query($conexao, $sql)){
            echo"Usuário cadastrado com sucesso";
    }
    else{
        echo "Erro".mysqli_connect_error($conexao);
    }
    mysqli_close($conexao);

?>

