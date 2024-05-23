<?php
    session_start();

    require_once('../models/Usuario.php');
    require_once('../db/db_connect.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $autenticarUsuario = Usuario::autenticarUsuario($email, $senha);
    
    if($autenticarUsuario) {
       
        $dados = Usuario::selecionarUsuarioPorEmail($email);

        $teste = $dados['idUsuario'];

        $_SESSION['idUsuario'] = $dados['idUsuario'];
        $_SESSION['tipoUsuario'] = $dados['tipoUsuario'];
        $_SESSION['logado'] = true;

        echo "<script>alert('Usuário autenticado com sucesso!')</script>";
        echo "<script> window.location.href='http://localhost/controle-estoque/views/entrada.php'</script>";
    } else {
        echo "<script>alert('Erro ao realizar o login!')</script>";
        echo "<script> window.location.href='http://localhost/controle-estoque/views/login.php'</script>";
    }
?>