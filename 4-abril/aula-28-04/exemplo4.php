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
        $nomes = ['Paulo', 'Ribas', 'João', 'Alberto', 'Yuri Cândido da Silva'];
        echo "<p>" . sizeof($nomes) . "</p>";

        for($i = 0; $i < sizeof($nomes); $i++){
            echo "<p>" . $nomes[$i] . "</p>";
        }
        
    ?>
</body>
</html>