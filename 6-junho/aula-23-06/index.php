<!DOCTYPE html>
<html lang="en-us">
<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- General -->
    <title>SW - Show Tables</title>
</head>
<body>
    <?php
        # Praticar CRUD
        
        include_once('./connection.php');

        $query = "select * from alunos";

        $result = mysqli_query($connection, $query);

        if (mysqli_num_rows($result) > 0) {
            echo "<h3>Usuários cadastrados no sistema:</h3>";

            # Exibir cada linha da tabela 
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<p>" . $row['nome'] . " is " . $row['idade'] . " years old. (".$row['id'].")</p>";
            }
        }
    
        mysqli_close($connection);
    ?>
</body>
</html>