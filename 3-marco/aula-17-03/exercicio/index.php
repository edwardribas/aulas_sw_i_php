<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Metas -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- General -->
    <link rel="stylesheet" href="style.css">
    <title>Homework</title>
</head>
<body>
    <form action="" method="POST">
        <label for="choose">Escolha a letra</label>
        <input type="text" name="letter" id="choose" placeholder="M, T e N..." autocomplete="off" autofocus>
        <input type="submit" name="submitButton" value="Enviar">
    </form>

    <?php
        $letter = strtolower($_POST['letter']);
        
        if(isset($_POST["letter"])){
            
            echo "<p>";
            switch($letter){
                case "m":
                    echo "Bom dia.";
                    break;
                case "t":
                    echo "Boa tarde.";
                    break;
                case "n":
                    echo "Boa noite.";
                    break;
                default:
                    echo "Valor inválido. Digite M, T ou N.";
            }
            echo "</p>";
        }


    ?>
</body>
</html>