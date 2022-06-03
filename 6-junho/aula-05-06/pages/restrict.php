<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Metas -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- General -->
    <title>frontside | entrar</title>
    <link rel="shortcut icon" href="../assets/img/favicon.svg">
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <main>
        <img src="../assets/img/logo.svg" alt="Logo do frontside.">

        <?php
            session_start();

            if ($_SESSION['booleanLogged'] !== 1) {
                header('Location: ../.');
            }

            echo "<p>Olá! Seja bem-vindo, " . $_SESSION['valueUsername'] . "!</p>";
        ?>
        <p>Para encerrar sua sessão, clique no botão abaixo.</p>

        <a href="./logout.php" class="logout">Sair</a>
    </main>
</body>
</html>