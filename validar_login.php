<?php
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    $query = "SELECT * FROM usuarios WHERE usuario='$usuario' and senha='$senha'";
    $conexao = new PDO('mysql:host=localhost; port=3307; dbname=bdd3', 'admi', "1234");
    $resultado = $conexao->query($query);
    $logado = $resultado->fetch();
    $id_logado = $logado['id'];

    if ($logado == null) {
        header('Location: usuario-erro.html');
        echo "usuario ou senha invalidos";
    }
    else {
        session_start();
        $_SESSION['usuario_logado'] = $id_logado;

        header('Location: painel.php');
        echo "usuario validado com sucesso";
    }

    die();
?>