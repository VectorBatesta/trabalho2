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
    header('Content-Type: text/plain');
    echo "------------------------------------------\n";
    while($aux = mysqli_fetch_assoc($sql)) {
        echo "| Nome Usuario: ".$aux["usuario"]."\t; Senha: ".$aux["senha"]."\t|\n";
    }
    echo "------------------------------------------\n";
    
    echo "FIM DA PESQUISA";
?>