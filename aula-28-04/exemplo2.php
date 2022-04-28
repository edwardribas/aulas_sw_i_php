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
    
        $estado = strtoupper("Ce");
 
        switch ($estado){
            case 'SP':
                echo "São Paulo";
                break;
            case 'RJ':
                echo "Rio de Janeiro";
                break;
            case 'MG':
                echo "Minas Gerais";
                break;
            case 'CE':
                echo "Ceará";
                break;
            case 'RS':
                echo "Rio Grande do Sul";
                break;
            default:
                echo "Sigla não cadastrada.";
        }

    ?>
</body>
</html>