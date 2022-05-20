<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Metas -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- General -->
    <title>SW - Exercício 2</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <main>
        <h1>Exercício 2</h1>
        <p>Gerar 5 números aleatórios entre 1 e 10.</p>

        <div class="resultado">
            <?php
                // 2 - Atribua valores inteiros, gerados aleatoriamente no intervalo 
                // entre 1 e 10, a cada posição do vetor com 5 posições.

                $randomNumbers = [];

                for($i = 0; $i < 5; $i++){
                    array_push($randomNumbers, random_int(1, 10));
                    echo "<p> Posição: ". ($i+1) ." - Número: ". $randomNumbers[$i] ."</p>";
                }
            
            ?>
        </div>
    </main>
</body>
</html>