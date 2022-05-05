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
    <title>Example</title>
</head>
<body>

        <?php
        
            $soma = ($valor1 = 4) + 5;
            
            $valor2 = 20;
            $valor3 = 30;
            
            $soma += 1; // 10
            $soma += $valor2; // 30
            $soma *= $valor3; // 900
            $soma %= 500; // 0

            $saudacao = "Bom";
            $saudacao .= " dia! ";

            echo $saudacao . "Hoje terá " . $soma . "% de tristeza."; // Bom dia! Hoje terá 0% de tristeza.
        
        ?>
    
</body>
</html>