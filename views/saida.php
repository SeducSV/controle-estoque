<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/saida.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>Saida de equipamentos</title>
</head>

<body onresize="mudouTamanho()">
<?php include 'header.php'; ?>
    <main>
        <h1>
            Saida de equipamentos
        </h1>
        <hr>
        <form action="" method="post">
        <div class="primeira">
                <div class="nome">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome-p" placeholder="Digite o nome da pessoa que entregou" required>
                </div>

                <div class="holerite">
                    <label for="holerite">Holerite:</label>
                    <input type="text" name="holerite" id="hol-p" placeholder="Digite o holerite da pessoa que entregou" required>
                </div>

                <div class="unidade-equip">
                    <label for="unidadeEquipamento">Unidade:</label>
                    <input type="text" name="unidadeEquipamento" id="unid-e" placeholder="Digite a unidade pessoa que entregou" required>
                </div>

                <div class="tipo-equip">
                    <label for="tipo-e">Tipo do equipamento:</label>
                    <select name="tipoEquipamento" id="tipo-e">
                        <option value="" disabled selected>Selecione um tipo</option>
                        <?php
                        foreach ($data as $row) : ?>
                            <option value=<?= $row['idTipoEquipamento'] ?>> <?= $row['nomeEquipamento'] ?> </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="Modelo-equip">
                    <label for="Modelo-e">Modelo:</label>
                    <input type="text" name="Modelo" id="Modelo-p" placeholder="Digite o modelo do equipamento" required>

                </div>

                <div class="marca-equip">
                    <label for="marca-e">Marca:</label>
                    <input type="text" name="marca" id="marca-p" placeholder="Digite a marca do equipamento" required>

                </div>



            </div>

            <div class="segunda">
                <div class="quant-equip">
                    <label for="quantidadeEquipamento">Quantidade:</label>
                    <input type="number" name="quantidadeEquipamento" id="quant-e" min="0" placeholder="Digite a quantidade do equipamento" required>
                </div>


                <div class="codigo-equip">
                    <label for="codigoEquipamento">Patrimônio:</label>
                    <input type="number" name="codigoEquipamento" id="cdg-e" placeholder="Digite o patrimonio do equipamento" required>
                </div>
                <div class="motivo-equip">
                    <label for="motivoEntrada">Motivo:</label>
                    <input type="text" name="motivoEntrada" id="motivo-e" placeholder="Digite o motivo da entrada do equipamento" required>
                </div>

                <div class="estado-equip">
                    <label for="estadoEquipamento">Estado:</label>
                    <input type="text" name="estadoEquipamento" id="estado-e" placeholder="Digite estado do equipamento" required>
                </div>


                <div class="obs-equip">
                    <label for="observacaoEquipamento">Observação:</label>
                    <input type="text" name="observacaoEquipamento" id="obs-e" placeholder="Digite a observação" required>
                </div>


            </div>
            <input type="submit" value="Enviar">
        </form>


    </main>
    <script src="../public/js/entrada.js"></script>

</body>

</html>