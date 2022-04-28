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
    

        // while($count <= 10){
        //     echo "<p>Eu vou aprender PHP (<b>$count</b>) </p>";
        //     $count++;
        // }

        // do{
        //     echo "<p>Eu vou aprender PHP (<b>$count</b>) </p>";
        //     $count++;
        // } while ($count <= 10)
        
        for($count = 10; $count >= 0; $count --){
            echo "<p>Contagem regressiva: <b>$count</b> </p>";
        }
        echo "<br>";
        for($count = 0; $count <= 10; $count ++){
            echo "<p>Contagem progressiva: <b>$count</b> </p>";
        }

        
    ?>
</body>
</html>