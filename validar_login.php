<?php
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    $query = "SELECT * FROM usuarios WHERE usuario='$usuario' and senha='$senha'";
    $conexao = new PDO('mysql:host=127.0.0.1;dbname=bdd3', 'admi', "1234")
?>