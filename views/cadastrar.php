<?php 
    require_once('../models/Usuario.php');

    $dados = Usuario::listarTiposUsuarios();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/adicionar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>Cadastrar usuário</title>
</head>

<body onresize="mudouTamanho()">
<?php include 'header.php'; ?>

    <main>
        <h1>
            Cadastrar usuário
        </h1>
        <hr>
        <form action="../actions/adicionarUsuario.php" autocomplete="off" method="post">

                <div class="nome-user">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome-u" placeholder="Digite o nome do usuario" required>
                </div>


                <div class="email-user">
                    <label for="email">Email:</label>
                    <input type="text" name="email" id="email-u" placeholder="Digite o email do usuario" required>
                </div>

                <div class="senha-user">
                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" id="senha-u" placeholder="Digite a senha" required>
                </div>

                <div class="tipo-user">
                    <label for="tipo-u">Tipo de usuario:</label>
                    <select name="tipoUsuario" id="tipo-u" >
                    <option value="" disabled selected >Selecione um tipo</option>
                        <?php 
                             foreach ($dados as $row) {
                                echo "<option value=" . $row['idTipoUsuario'] . ">" . $row['nomeTipoUsuario'] . "</option>";
                            }
                        ?>
                    </select>
                </div>

    
            <input type="submit" value="Enviar">
        </form>


    </main>

    <script src="../public/js/lista.js"></script>

</body>

</html>