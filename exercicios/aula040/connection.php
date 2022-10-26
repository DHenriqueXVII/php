<?php
    function getConnection() {
        $dsn = 'mysql:host=localhost;dbname=mercado';
        $username = 'root';
        $password = '';

        try {
            $pdo = new PDO($dsn, $username, $password);
            return $pdo;
        } catch (PDOException $ex) {
            echo "Erro: {$ex -> getMessage()}";
        }
    }
?>