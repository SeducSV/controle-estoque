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
<?php include 'header.php'; ?>

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