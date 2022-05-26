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
        <h1>Working</h1>
        <div class="code" style="text-align: center">
            <?php

                $array = [1, 5, 94];

                function getSum($numbers){
                    $total = 0;

                    // Maneira 1
                    // foreach($numbers as $number){
                    //     $total += $number;
                    // }

                    // Maneira 2
                    for($i = 0; $i < count($numbers); $i++){
                        $total += $numbers[$i];
                    }

                    return $total;
                }

                $resultado = getSum($array);
                echo $resultado;

            ?>
        </div>

    </main>
</body>
</html>