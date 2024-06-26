<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="../public/css/login.css">
    <title>Login</title>
</head>

<body >
    <main>
        <section>
            <div id="imagem"></div>

            <div class="login">
                <img src="../public/imgs/logo.png" alt="Logo da Prefeitura de São vicente">
                <h1>Login</h1>
                <form action="../actions/realizarLogin.php" autocomplete="off" method="POST">
                    <label for="email">Usuário:</label>
                    <input type="text" name="email" id="user" placeholder="Digite seu email" required>
                    <label for="senha">Senha:</label>
                    <article>
                        <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required>
                        <span><i class="fa-solid fa-eye fa-lg icon"></i></span>
                    </article>
                    <input type="submit" value="Entrar">
                </form>
                <p class="desenvol"><i><strong>Desenvolvido pelos estagiarios:</strong> Sabrina dos Santos, Pedro Henrique, André, Guilherme e Arthur em 2024</i></p>
            </div>

        </section>
    </main>
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="../public/js/login.js"></script>

</body>

</html>