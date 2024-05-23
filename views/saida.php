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
                <div class="solicitante-equip">
                    <label for="soli-e">Solicitante:</label>
                    <input type="text" name="soli-e" id="soli-e" placeholder="Digite o nome do solicitante do equipamento" required>
                </div>


                <div class="holerite-equip">
                    <label for="soli-e">Holerite:</label>
                    <input type="number" name="hol-p" id="hol-p" placeholder="Digite o holerite do solicitante" required>
                </div>


                <div class="tipo-equip">
                    <label for="tipo-e">Tipo do equipamento:</label>
                    <select name="tipo-e" id="tipo-e" >
                    <option value="" disabled selected >Selecione um tipo</option>
                        <option value="Monitor">Monitor</option>
                        <option value="Monitor">Monitor</option>
                        <option value="Monitor">Monitor</option>
                    </select>
                </div>

            </div>

            <div class="segunda">

            
            <div class="patrimionio-equip">
                    <label for="ptr-e">Patrimonio do equipamento:</label>
                    <input type="number" name="ptr-e" id="ptr-e" placeholder="Digite o patrimonio do equipamento" required>
                </div>


                <div class="quant-equip">
                    <label for="quant-e">Quantidade:</label>
                    <input type="number" name="quant-e" id="quant-e" min="0" placeholder="Digite a quantidade do equipamento" required>
                </div>

                <div class="motivo-equip">
                    <label for="motivo-e">Motivo:</label>
                    <input type="text" name="motivo-e" id="motivo-e" placeholder="Digite o motivo da saida do equipamento" required>
                </div>


            </div>

            <input type="submit" value="Enviar">
        </form>


    </main>
    <script src="../public/js/entrada.js"></script>

</body>

</html>