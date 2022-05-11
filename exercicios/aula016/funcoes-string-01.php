<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções string</title>
</head>
<body>
    <h1>Funções string</h1>

    <?php
        $p = "leite";
        $pr = 4.5;

        //echo "O leite custa R$ ".number_format($pr, 2, ',', '.');
        printf("O %s custa R$ %.2f", $p, $pr);
    ?>
</body>
</html>