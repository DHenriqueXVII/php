<?php
    require_once 'connection.php';

    $connection = getConnection();

    $sql = 'INSERT INTO produtos (descricao, quantidade, valor) VALUES (?, ?, ?)';

    $description = 'Macarrão';
    $quantity = 40;
    $value = 8.50;

    $stmt = $connection -> prepare($sql);
    $stmt -> bindParam(1, $description);
    $stmt -> bindParam(2, $quantity);
    $stmt -> bindParam(3, $value);

    if ($stmt -> execute()) {
        echo 'Salvo com sucesso!';
    } else {
        echo 'Erro ao salvar!';
    }
?>