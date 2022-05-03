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
            $s = $a + $b;
            echo "<p>A soma entre $a e $b vale $s</p>";
        }

        soma(4, 5);
        soma(4, 3);
        $x = 7;
        $y = 9;
        soma($x, $y);
    ?>
</body>
</html>