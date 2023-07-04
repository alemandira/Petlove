<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Mandira.ico" type="image/x-icon">
    <link rel="stylesheet" href="pesquisar.css">
    <title>PET-LOVE</title>

</head>

<body>
<header>
        <h1><i>Pet-Love</i> <img src="pastor.png" alt=""></h1>
   
        <div class="navbar">
            
            <div class="subnav">
                <button class="subnavbtn">RH<i class="fa-caret-down"></i></button>
                <div class="subnav-content">
                    <a href="deletar.html">Deletar</a>
                    <a href="cancelar.html">Cancelar consultas</a> 
                    <a href="pesquisar.html">Pesquisar</a>                                      
                </div>
            </div>


            <div class="subnav">
                <button class="subnavbtn">Clientes<i class="fa fa-caret-down"></i></button>
                <div class="subnav-content">
                    <a href="agendamento.html">Agendamento</a>
                    <a href="cadastro.html">Cadastro</a>
                </div>
            </div>

            <div class="subnav">
                <button class="subnavbtn">Raças<i class="fa fa-caret-down"></i></button>
                <div class="subnav-content">
                    <a href="index5.html">Chihuahua</a>
                    <a href="index4.html">Pastor Alemão</a>
                    <a href="index3.html">Pit-Bull</a>
                    <a href="index2.html">Dalmata</a>
                </div>
            </div>

            <a href="index.html">Home</a>

        </div>

    </header>

    <?php
    include("conexao.php");

    $excluir=$_POST['excluir'];

    $sql="DELETE FROM cadastro WHERE nome='$excluir' LIMIT 1";

    if(mysqli_query($conexao, $sql,)){
        echo "Cliente excluído";
    }
    else{
        echo "Usuário inexistente".mysqli_connect_error($conexao);        
    }
    mysqli_close($conexao);
   
    ?>

    <footer>
        <p>Desenvolvido por Alemandira</p>
    </footer>

</body>

</html>

