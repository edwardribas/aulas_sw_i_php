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
    <title>Example 2</title>
</head>
<body>

        <?php
        
            // Operadores de comparação

            $a = '10';
            $b = 10;

            var_dump($a, $b);

            echo "<br><br>";

            echo $a == $b ? '<p>Valores iguais</p>' : '<p>Valores diferentes</p>';
            echo "<br>";
            echo $a === $b ? '<p>Valores e tipos iguais</p>' : '<p>Valores e tipos diferentes</p>';
            echo "<br>";
            echo '<p>' . ($a + $b) . '<p>';
        
        ?>
    
</body>
</html>