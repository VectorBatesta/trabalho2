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
    echo "<table border='1' cellspacing='0' cellpadding='5' style='text-align: left;'>";
        echo "<tr><th> Nome Usuario </th><th> Senha </th></tr>";
        while ($aux = mysqli_fetch_assoc($sql)) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($aux["usuario"]) . "</td>";
            echo "<td>" . htmlspecialchars($aux["senha"]) . "</td>";
            echo "</tr>";
        }
    echo "</table>";
    
    
    echo "FIM DA PESQUISA";
?>