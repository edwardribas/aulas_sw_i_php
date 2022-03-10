<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Metas -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- General -->
    <title>Resultado</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php
        
        $nome = $_POST['nome'];
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];

        $result = number_format(($num1 + $num2 + $num3) / 3, 2, ",", "");

        echo '<p>Olá, ' . $nome . '! A sua média de notas é ' . $result .'.</p>';
    ?>
</body>
</html>
