<?php
require_once ('../models/Equipamento.php');

$dados = Equipamento::listarTiposEquipamentos();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/adicionar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>Adicionar equipamentos</title>
</head>

<body onresize="mudouTamanho()">
<?php include 'header.php'; ?>

    <main>
        <h1>
            Adicionar equipamentos
        </h1>
        <hr>
        <form action="../actions/adicionarEquipamento.php" method="post">

            <div class="tipo-equip">
                <label for="tipo-e">Tipo do equipamento:</label>
                <input type="text" name="tipoEquipamento" id="tipo-e">
            </div>
            <input type="submit" value="Enviar">
        </form>


    </main>

    <script src="../public/js/adicionar.js"></script>

</body>

</html>