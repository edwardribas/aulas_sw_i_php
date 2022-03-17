<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Metas -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- General -->
    <link rel="stylesheet" href="style.css">
    <title>Exemplo 02</title>
</head>
<body>

    <?php
    
        // utilizando operadores lógicos
        $habilitacao = true;
        $idade = 18;

        echo "Idade: $idade anos - Habilitado: " . ($habilitacao ? "Sim." : "Não.");
        echo "<br>";

        // exercício

        // com operador ternário
        // echo (($habilitacao && $idade >= 18) ? "Você está apto a dirigir!" : "Você não cumpre um ou mais requisitos para dirigir.");

        // sem operador ternário
        if($habilitacao && $idade >= 18){
            echo "Você pode dirigir!";
        }
        else{
            echo "Você não cumpre um ou mais requisitos para dirigir.";
        }

    ?>

</body>
</html>