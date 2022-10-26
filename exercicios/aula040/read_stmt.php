<pre>
    <?php
        require_once 'connection.php';
    
        $connection = getConnection();
    
        $sql = 'SELECT * FROM produtos #WHERE id = :id';
    
        $stmt = $connection -> prepare($sql);
        #$stmt -> bindValue(':id', 1);
        $stmt -> execute();
    
        $result = $stmt -> fetchAll();
    
        print_r($result)
    ?>
</pre>