<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Metas -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- General -->
    <title>SW - Exercício 1</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <main>
        <h1>Converter temperatura</h1>

        <form action="" method="POST">
            <input type="number" name="temp" placeholder="Temperatura" autofocus>
            <input type="number" name="option" placeholder="1 = c -> f | 2 = f -> c" max="2" min="1">
            <button>Converter</button>
        </form>

        <div class="code" style="text-align: center">
            <?php
                $temp = $_POST['temp'];
                $option = $_POST['option'];
                
                if(!empty($temp) && !empty($option)){

                    function convertTemperature($temp, $option){
                        $result = 0;

                        // Celsius para Fahrenheit
                        if ($option == 1) {
                            $result = ($temp*9/5)+32;
                        } else {
                            // Fahrenheit para Celsius
                            $result = ($temp-32)*5/9;
                        }
                        
                        return round($result);
                    }
                    
                    $result = convertTemperature($temp, $option);
                    echo "Resultado da conversão: $result";
                }
            ?>
        </div>

    </main>
</body>
</html>