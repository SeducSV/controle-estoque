<?php
    session_start();
    $_SESSION['logado'] = false;
    session_unset();
    session_destroy();

    echo "<script>alert('Deslogado com sucesso!')</script>";
    echo "<script> window.location.href='http://localhost/controle-estoque/views/login.php'</script>";

?>