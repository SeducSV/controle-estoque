<?php

function verificarLogado()
{
    session_start();

    if (!isset($_SESSION['logado'])) {
        echo "<script>alert('É preciso estar logado para acessar!')</script>";
        echo "<script> window.location.href='http://localhost/controle-estoque/views/login.php'</script>";
    }
}

verificarLogado();


?>