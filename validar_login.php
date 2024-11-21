<?php
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    $query = "SELECT * FROM usuarios WHERE usuario='$usuario' and senha='$senha'";
    $conexao = new PDO('mysql:host=127.0.0.1; dbname=bdd3', 'admi', "1234");
    $resultado = $conexao->query($query);
    $logado = $resultado->fetch();

    if ($logado == null) {
        header('Location: usuario-erro.php');
        echo "usuario ou senha invalidos";
    }
    else {
        header('Location: painel.php');
        echo "usuario validado com sucesso";
    }

    die();
?>