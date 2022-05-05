<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Metas -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- General -->
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $result = $num1 + $num2;

        echo "<p>O resultado de $num1 + $num2 é igual a $result</p>";
    ?>
</body>
</html>
