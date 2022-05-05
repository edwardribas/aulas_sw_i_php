<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Metas -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- General -->
    <link rel="stylesheet" href="style.css">
    <title>Exemplo 01</title>
</head>
<body>

    <?php
    
        $nota = 5.6;

        // Deseja-se imprimir APROVADO se a nota do aluno for maior que 5
        // REPROVADO caso seja menor que 5

        echo $nota;
        echo "<br>";
        
        // if em blocos
        if($nota > 6){
            echo "Aprovado!";
        }
        else if($nota < 5){
            echo "Reprovado!";
        }
        else{
            echo "Recuperação!";
        }
                
        // operador ternário
        // echo ($nota > 5 ? "Aprovado!" : "Reprovado!");
    ?>

</body>
</html>