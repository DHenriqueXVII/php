<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetores e matrizes</title>
</head>
<body>
    <h1>Vetores e matrizes</h1>
    
    <pre>
        <?php
            $vetor = array(3, 7, 4, 2, 8);
            print_r($vetor);
            var_dump($vetor);
            var_export($vetor);
            echo "<br>O vetor tem ".count($vetor)." elementos";
        ?>
    </pre>
</body>
</html>