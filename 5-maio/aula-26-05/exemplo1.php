<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Metas -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- General -->
    <title>SW - 26-05-2022</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <main>
        <h1>Functions</h1>
        <div class="code">
            <?php

                // Sem parâmetro e sem retorno
                function phrase() {
                    echo "<p>(1) Hey there! I'm a function without a parameter.</p>";
                }
                phrase();

                // Com parâmetro e sem retorno
                function sayName($name) {
                    echo "<p>(2) Inserted name: $name</p>";
                }
                sayName('Eduardo');
            
                // Sem parâmetro e com retorno
                function getRandomPhrase() {
                    $phrases = ['Hey there.', 'How u doing?', 'U seem very nice.', 'Nice to meet you.'];
                    $randomNumber = random_int(0, 3);
                    return $phrases[$randomNumber];
                }
                $givenPhrase = getRandomPhrase();
                echo "<p>(3) $givenPhrase</p>";

                // Com parâmetro e com retorno
                function setPhrase($phrase){
                    return $phrase;
                }
                $insertedPhrase = setPhrase('Hi. :)');
                echo "<p>(4) $insertedPhrase</p>";

                // Cálculo
                function sum($num1, $num2){
                    return $num1 + $num2;
                }
                $resultado = sum(10, 20);
                echo "(5) Sum: $resultado";

            ?>
        </div>

    </main>
</body>
</html>