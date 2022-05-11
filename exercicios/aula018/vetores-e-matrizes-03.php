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
        <table border="1">
            <?php
                $vetor = range(1, 10, 1);
                foreach($vetor as $valor) {
                    echo "<td>$valor ";
                }
            ?>
        </table>
    </pre>
</body>
</html>