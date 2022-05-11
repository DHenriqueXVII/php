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
            $matriz = array(array(1,2),
                            array(3,4),
                            array(5,6));
            $matriz[0][0] = $matriz[2][1];

            print_r($matriz);
        ?>
    </pre>
</body>
</html>