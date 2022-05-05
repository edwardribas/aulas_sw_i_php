<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Metas -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- General -->
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        hr{
            width: 30%;
            margin: 20px auto;
            background-color: rgb(230,230,230)
        }
        body{
            background-color: rgb(30,30,30);
            color: white;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            width: 100%;
            text-align: center;
        }
    </style>
    <title>Index</title>
</head>
<body>
    
    <?php

        // Pós-incremento - guarda o valor original, o exibe, e depois mostra o valor incrementado.
        
        $a = 5;
        echo $a . "<br>";
        echo "Pós-incremento: " . $a++ . "<br>";
        echo "A: " . $a;
        
        echo "<hr>";

        // Pré-incremento - atribui o valor incrementado na hora que é executado.
        $b = 5;
        echo $b . "<br>";
        echo "Pré-incremento: " . ++$b . "<br>";
        echo "B: " . $b."<hr>";

        // Pós-decremento 
        $a = 5;
        echo $a . "<br>";
        echo "Pós-decremento: " . $a-- . "<br>";
        echo "A: " . $a."<hr>";
        

        // Pré-decremento 
        $b = 5;
        echo $b . "<br>";
        echo "Pré-decremento: " . --$b . "<br>";
        echo "B: " . $b."<hr>";
    ?>


</body>
</html>