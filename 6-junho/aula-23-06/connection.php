<?php
    # A conexão necessita do servidor, usuário, senha e do nome do banco
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "teste_mysql";

    # Iniciando a conexão com os dados fornecidos
    $connection = new mysqli($servidor, $usuario, $senha, $banco);

    # Checando conexão
    if ($connection -> connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }

    echo "<p>Conexão efetuada com sucesso.</p>"
?>