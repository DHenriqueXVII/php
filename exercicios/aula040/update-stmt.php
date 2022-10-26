<?php

require_once 'connection.php';

$connection = getConnection();

$sql = 'UPDATE produtos SET descricao = :descricao, quantidade = :quantidade, valor = :valor, desconto = :desconto WHERE id = :id';

$stmt = $connection -> prepare($sql);
$stmt -> bindValue(':descricao', 'Feijão');
$stmt -> bindValue(':quantidade', '40');
$stmt -> bindValue(':valor', 6.50);
$stmt -> bindValue(':id', 4);
$stmt -> bindValue(':desconto', 10.5);

if ($stmt -> execute()) {
    echo 'Alterado com sucesso!';
} else {
    echo 'Falha ao alterar!';
}