<?php
    require_once 'connection.php';

    $connection = getConnection();

    $sql = 'DELETE FROM produtos WHERE id = :id';

    $stmt = $connection -> prepare($sql);
    $stmt -> bindValue(':id', 3);

    if ($stmt -> execute()) {
        echo 'Deletado com sucesso!';
    } else {
        echo 'Falha ao deletar!';
    }