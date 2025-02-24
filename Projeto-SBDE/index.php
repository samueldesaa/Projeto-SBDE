<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Restaurante Universitário</title>
    <link rel="stylesheet" href="style.css">
    <?php include 'config.php' ?>
</head>

<body>
    <div class="topo">
        <img src="midia/QrMeal1.png" alt="">
    </div>
    <h1>QrMeal</h1>
    <div class="entrar">
        <a class="button btwhite" type="button" href="login.php">Login</a>
        <a class="button btwhite" type="button" href="cadastro.php">Criar conta</a>
    </div>
    <div class="acessibilidade">
        <a href="" onclick="altoContraste()">
            <img src="midia/Constraste.png" alt="">
            <p>Alto Contraste</p>
        </a>
    </div>
    <script>
        function altoContraste() {
            let modoAtual = document.cookie.includes("modoContraste=alto") ? "alto" : "normal";
            let novoModo = modoAtual === "alto" ? "normal" : "alto";

            document.cookie = "modoContraste=" + novoModo + "; path=/; max-age=31536000"; // Salva por 1 ano
            location.reload(); // Recarrega a página para aplicar a mudança via PHP
        }
    </script>
</body>

</html>