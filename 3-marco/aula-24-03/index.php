<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <!-- Metas -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- General -->
    <title>Login Screen</title>
    <script src="https://kit.fontawesome.com/932eb47ff0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/index.css">
</head>
<body>
    <div class="form-container">
        <div class="title">
            <i class="fa-solid fa-user"></i>
            <h1>Entrar no sistema</h1>
        </div>
        <form action="processo.php" method="POST">
            <input type="text" name="username" placeholder="Seu usuário" autofocus autocomplete="off">
            <input type="password" name="password" placeholder="Digite sua senha">
            <input type="submit" value="Entrar">
        </form>
    </div>

    <!-- Scripts -->
    <script src="assets/app.js"></script>
</body>
</html>