<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Metas -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- General -->
    <title>Sistemas Web</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    
        $num = 11;
        if($num > 10){
            echo "$num é maior que 10";
        } else if ($num < 10){
            echo "$num é menor que 10.";
        } else {
            echo "$num é igual a 10.";
        }

    ?>
</body>
</html>