<?php
    require_once('../models/Usuario.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $tipoUsuario = $_POST['tipoUsuario'];

    $adicionarUsuario = Usuario::adicionarUsuario($nome, $email, $senha, $tipoUsuario);

    if($adicionarUsuario) {
        echo "<script>alert('Usuário adicionado com sucesso!')</script>";
        echo "<script> window.location.href='http://localhost/controle-estoque/views/cadastrar.php'</script>";
    } else {
        echo "<script>alert('Erro ao adicionar Usuário!')</script>";
        echo "<script> window.location.href='http://localhost/controle-estoque/views/cadastrar.php'</script>";
    }
?>