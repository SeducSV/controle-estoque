<?php
require_once ('../models/Equipamento.php');

$lista = Equipamento::listarEquipamentos();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/lista.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>Lista de estoque</title>
</head>

<body onresize="mudouTamanho()">
    <header>
        <nav class="nav">
            <a href='home'>
                <picture>
                    <source media="(max-width:962px)" srcset="../public/imgs/logo.jpg">
                    <a href="http://localhost/controle-estoque/views/adicionar.php">
                    <img src="../public/imgs/logo.png" alt="Logo da Prefeitura de São Vicente">
                    </a>
                </picture>
            </a>
            <ul id="itens">
            <li><a href="lista.php">Lista</a></li>
                <li><a href="entrada.php">Entrada</a></li>
                <li><a href="saida.php">Saida</a></li>
                <li><a href="adicionar.php">Adicionar equipamentos</a></li>
                <li><a href="cadastrar.php">Cadastrar usuário</a></li>
            </ul>
        </nav>
        <i class="fa-solid fa-bars" id="burguer" onclick="clickMenu()"></i>
    </header>
    <main>
        <h1>
            Lista de Equipamentos
        </h1>
        <hr>
        <div class="tabela">
            <table>
                <thead>
                    <tr>
                        <th>Equipamento</th>
                        <th>Quantidade</th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach($lista as $equipamentos): ?>
                        <tr>
                            <td><?=$equipamentos['nomeEquipamento'];?></td>
                            <td><?=$equipamentos['quantidadeEstoque'];?></t>
                        </tr>
                    <?php endforeach; ?>

                    <!--
                    <tr>
                        <td>Notebook</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>Notebook</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>Notebook</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>Notebook</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>Notebook</td>
                        <td>10</td>
                    </tr>
                   
                    </tr>
                    -->
                </tbody>
            </table>
        </div>

    </main>

    <script src="../public/js/lista.js"></script>

</body>

</html>