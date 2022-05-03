<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotinas</title>
</head>
<body>
    <h1>Rotinas</h1>

    <?php
        function soma($a, $b) {
            return $a + $b;
        }

        $x = 4;
        $y = 5;
        //echo "A soma vale ".soma(4, 5);
        $res = soma($x, $y);
        echo "A soma entre $x e $y vale $res";
    ?>
</body>
</html>