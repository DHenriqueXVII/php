<?php
    require_once 'connection.php';

    $connection = getConnection();

    $sql = "INSERT INTO produtos (descricao, quantidade, valor) VALUES ('Arroz', 30, '4.50')";

    if ($connection -> exec($sql)) {
        echo 'Salvo com sucesso!';
    } else {
        echo 'Erro ao salvar!';
    }
?>