<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis referenciadas</title>
</head>
<body>
    <h1>Variáveis referenciadas</h1>

    <?php
        $a = 3;
        $b = $a;
        $b += 5;

        echo "Valores das variáveis comuns: $a e $b";

        $n1 = 3;
        $n2 = &$n1;
        $n2 += 5;

        echo "<br>Valores das variáveis referenciadas: $n1 e $n2";
    ?>
</body>
</html>