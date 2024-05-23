<?php
include_once ('../utils/verificarLogado.php');
?>

<header>
    <nav class="nav">
        <a href='home'>
            <picture>
                <source media="(max-width:962px)" srcset="../public/imgs/logo.jpg">
                <img src="../public/imgs/logo.png" alt="Logo da Prefeitura de São Vicente">
            </picture>
        </a>
        <ul id="itens">
            <li><a href="lista.php">Lista</a></li>
            <li><a href="entrada.php">Entrada</a></li>
            <li><a href="saida.php">Saida</a></li>
            <?php
            // session_start();
            if ($_SESSION['tipoUsuario'] == 1) {
                ?>
                <li><a href="adicionar.php">Adicionar equipamentos</a></li>

                <li><a href="cadastrar.php">Cadastrar usuário</a></li>
            <?php } ?>
            <li><a href="../actions/sair.php">Sair</a></li>
        </ul>
    </nav>
    <i class="fa-solid fa-bars" id="burguer" onclick="clickMenu()"></i>
</header>