<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/entrada.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>Entrada de equipamentos</title>
</head>

<body onresize="mudouTamanho()">
    <header>
        <nav class="nav">
            <a href='home'>
                <picture>
                    <source media="(max-width:690px)" srcset="../public/imgs/logo.jpg">
                    <img src="../public/imgs/logo.png" alt="Logo da Prefeitura de São Vicente">
                </picture>
            </a>
            <ul id="itens">
                <li><a href="#">Entrada</a></li>
                <li><a href="#">Saida</a></li>
                <li><a href="#">Adicionar equipamentos</a></li>
            </ul>
        </nav>
        <i class="fa-solid fa-bars" id="burguer" onclick="clickMenu()"></i>
    </header>
    <main>
        <h1>
            Entrada de equipamentos
        </h1>
        <hr>
        <form action="" method="post">

            <div class="primeira">
                <div class="nome-equip">
                    <label for="nome-e">Nome do equipamento:</label>
                    <input type="text" name="nome-e" id="nome-e" placeholder="Digite o nome do equipamento" required>
                </div>


                <div class="unidade-equip">
                    <label for="unid-e">Unidade:</label>
                    <input type="text" name="unid-e" id="unid-e" placeholder="Digite a unidade do equipamento" required>
                </div>


                <div class="quant-equip">
                    <label for="quant-e">Quantidade:</label>
                    <input type="number" name="quant-e" id="quant-e" min="0" placeholder="Digite a quantidade do equipamento" required>
                </div>
                <div class="codigo-equip">
                    <label for="cdg-e">Patrimônio:</label>
                    <input type="number" name="cdg-e" id="cdg-e" placeholder="Digite o patrimonio" required>
                </div>

            </div>

            <div class="segunda">

                <div class="motivo-equip">
                    <label for="motivo-e">Motivo:</label>
                    <input type="text" name="motivo-e" id="motivo-e" placeholder="Digite o motivo da entrada do equipamento" required>
                </div>

                <div class="estado-equip">
                    <label for="estado-e">Estado:</label>
                    <input type="text" name="estado-e" id="estado-e" placeholder="Digite estado do equipamento" required>
                </div>


                <div class="obs-equip">
                    <label for="obs-e">Observação:</label>
                    <input type="text" name="obs-e" id="obs-e" placeholder="Digite a observação" required>
                </div>


            </div>

            <input type="submit" value="Enviar">
        </form>


    </main>

    <script src="../public/js/entrada.js"></script>

</body>

</html>