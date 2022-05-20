<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Metas -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- General -->
    <title>SW - Exercício 1</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <main>
        <h1>Exercício 1</h1>
        <p>Digite um número de 1 a 12.</p>

        <form action="" method="POST">
            <input type="number" name="n1" placeholder="Número" autofocus>
            <button>Enviar</button>
        </form>

        <div class="resultado">
            <?php
                // 1 - Crie um vetor que armazene o nome de todos os meses do ano. 
                // Peça ao usuário que digite um número e ele informe qual o nome 
                // do mês correspondente.

                $insertedNumber = $_POST["n1"];
                $months = [
                    'Janeiro',
                    'Fevereiro',
                    'Março',
                    'Abril',
                    'Maio',
                    'Junho',
                    'Julho',
                    'Agosto',
                    'Setembro',
                    'Outubro',
                    'Novembro',
                    'Dezembro',
                ];

                if(isset($insertedNumber) && !empty($insertedNumber)){
                    if ($insertedNumber > 0 && $insertedNumber <= 12) {
                        echo "<p>".$months[$insertedNumber - 1]." (<b>$insertedNumber</b>)</p>";
                    } else {
                        echo "<p>Digite um número entre o intervalo especificado.</p>";
                    }
                } else {
                    echo "<p>Forneça um valor.</p>";
                }
            
            ?>
        </div>
    </main>
</body>
</html>