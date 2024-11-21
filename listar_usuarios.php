<?php
    $servername = "localhost";
    $username = "admi";
    $password = "1234";
    $dbname = "bdd3";

    // Create connection
    $strcon = mysqli_connect($servername, $username, $password, $dbname, 3307) or die('Erro ao conectar ao banco de dados');

    //criando a query de consulta à tabela criada
    $sql = mysqli_query($strcon, "SELECT * FROM usuarios") or die(mysqli_error($cx));
    
    //pecorrendo os registros da consulta.
    while($aux = mysqli_fetch_assoc($sql)) {
        echo "-----------------------------------------<br />";
        echo "Nome Usuario:".$aux["usuario"]."<br />";
        echo "senha:".$aux["senha"]."<br />";
    }
    
    echo "<br>FIM DA PESQUISA";
?>