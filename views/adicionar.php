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
            Adicionar equipamentos
        </h1>
        <hr>
        <form action="" method="post">

                <div class="nome-equip">
                    <label for="nome-e">Nome do equipamento:</label>
                    <input type="text" name="nome-e" id="nome-e" placeholder="Digite o nome do equipamento" required>
                </div>


                <div class="marca-equip">
                    <label for="marca-e">Marca:</label>
                    <input type="text" name="marca-e" id="marca-e" placeholder="Digite a marca do equipamento" required>
                </div>

                <div class="modl-equip">
                    <label for="modl-e">Modelo:</label>
                    <input type="text" name="modl-e" id="modl-e" placeholder="Digite o modelo do equipamento" required>
                </div>

      

            <input type="submit" value="Enviar">
        </form>


    </main>

    <script src="../public/js/adicionar.js"></script>

</body>

</html>