<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Metas -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- General -->
    <title>Sistemas Web</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <!-- Form -->
    <form action="" method="POST">
        <input type="number" step="1" placeholder="Número" name="n1" autofocus>
        <button>Calcular</button>
    </form>

    <?php
        $num = $_POST["n1"];
        $cubo = pow($num, 3);

        if(!empty($num)){
            for($i = $num; $i <= $cubo; $i++){
                if($i % 2 !== 0){
                    echo "$i \n";
                }
            }
        }
    
    ?>
</body>
</html>