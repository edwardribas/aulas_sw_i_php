<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Metas -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- General -->
    <title>frontside | entrar</title>
    <link rel="shortcut icon" href="./assets/img/favicon.svg">
    <link rel="stylesheet" href="./assets/style.css">
</head>
<body>
    <main>
        <img src="./assets/img/logo.svg" alt="Logo do frontside.">

        <form action="./pages/validation.php" method="POST">
            <fieldset>
                <label for="username">Usuário</label>
                <input type="text" id="username" name="username" placeholder="Digite seu usuário" autofocus spellcheck="false" autocomplete="off">
            </fieldset>

            <fieldset>
                <label for="password">Senha</label>
                <input type="password" id="password" name="password" placeholder="Digite sua senha">
            </fieldset>            

            <input type="submit" value="Login">
        </form>
        <a href="#">Ainda não tem uma conta?</a>

        <?php

            session_start();

            if ( !empty($_SESSION['booleanLogged']) ){
                header("Location: ./pages/restrict.php");
            }
        
        ?>
    </main>
</body>
</html>