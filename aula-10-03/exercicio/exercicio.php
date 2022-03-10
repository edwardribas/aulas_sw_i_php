<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Metas -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- General -->
    <title>Aula - 10-03-22</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <form action="action.php" method="POST">
        <input type="text" name="nome" placeholder="Seu nome" autocomplete="off">
        <div class="numbers">
            <input type="number" step=".1" name="num1" autocomplete="off" placeholder="Primeira nota">
            <input type="number" step=".1" name="num2" autocomplete="off" placeholder="Segunda nota">
            <input type="number" step=".1" name="num3" autocomplete="off" placeholder="Terceira nota">
        </div>
        <input type="submit" value="Enviar">
    </form>


</body>
</html>