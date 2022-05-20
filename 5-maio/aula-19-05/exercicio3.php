<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Metas -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- General -->
    <title>SW - Exercício 3</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <main>
        <h1>Exercício 3</h1>
        <p>Gerar 10 números aleatórios entre 1 e 100.</p>

        <div class="resultado">
            <?php
                // 3 - Crie um vetor que receba e calcule a média de 10
                // números gerados aleatoriamente no intervalo entre 1 e 100.

                $randomGeneratedNumbers = [];

                for($i = 0; $i < 10; $i++){
                    array_push($randomGeneratedNumbers, random_int(1, 100));
                    $media += $randomGeneratedNumbers[$i];
                    echo "<p> Posição: <b>". ($i + 1) ."</b> - Valor: ".$randomGeneratedNumbers[$i]."</p>";
                }

                echo "<br> <p>Média: ". ($media/count($randomGeneratedNumbers)) ."</p>";
            
            ?>
        </div>
    </main>
</body>
</html>