<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Mandira.ico" type="image/x-icon">
    <link rel="stylesheet" href="style02.css">
    <title>PET-LOVE</title>

</head>

<body>
<header>
        <h1><i>Pet-Love</i> <img src="pastor.png" alt=""></h1>
   
        <div class="navbar">
            
            <div class="subnav">
                <button class="subnavbtn">Consultas<i class="fa-caret-down"></i></button>
                <div class="subnav-content">
                    <a href="deletar.html">Deletar</a>
                    <a href="cancelar.html">Cancelar consultas</a> 
                    <a href="pesquisar.html">Pesquisar</a>                                      
                </div>
            </div>


            <div class="subnav">
                <button class="subnavbtn">Clientes<i class="fa fa-caret-down"></i></button>
                <div class="subnav-content">
                    <a href="consultas.html">Consultas</a>
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

    $email=$_POST['email']; 
    $senha=$_POST['senha'];
    $nome=$_POST['nome'];
    $telefone=$_POST['telefone'];       

    $sql="INSERT INTO cadastro(email, senha, nome, telefone) VALUE ('$email', '$senha', '$nome', '$telefone')";

    if(mysqli_query($conexao, $sql)){
            echo"Usuário cadastrado com sucesso: <br>";
            echo"<a href='cadastro.html'><h2>Cadastrar novo cliente</h2></a> <br>";
            echo"<a href='index.html'><h2>Voltar a página inicial</h2></a>";
    }
    else{
        echo "Erro <br>".mysqli_connect_error($conexao);
        echo"Usuário já existe ou dados incorretos <br>";
        echo"<a href='cadastro.html'><h2>tentar novamente</h2></a> <br>";
    }
    mysqli_close($conexao);

?>

    <footer>
        <p>Desenvolvido por Alemandira</p>
    </footer>

</body>

</html>

