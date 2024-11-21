<?php
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $servername = "localhost";
    $username = "admi";
    $password = "1234";
    $dbname = "bdd3";

    //conexao
    $strcon = mysqli_connect($servername, $username, $password, $dbname,
                3307) or die("Erro ao conectar no banco de dados!");
    $sql = "INSERT INTO usuarios VALUES ";
    $sql .= "('$usuario', '$senha')";
    mysqli_query($strcon, $sql) or die("Erro ao tentar cadastrar registro.");
    mysqli_close($strcon);
    echo "Usuário cadastrado com sucesso!!!!";
    echo "<a href='index.php'>Clqieu aqui para página principal</a><br>"; 
?>