<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotinas - Passagem por valor e por referência</title>
</head>
<body>
    <h1>Rotinas - Passagem por valor e por referência</h1>

    <?php
        /*
        Passagem por valor

        function soma($x) {
            $x += 2;
            return $x;
        }

        $a = 3;

        echo "<p>O valor de X é ".soma($a)."</p>";
        echo "<p>O valor de A é $a</p>";
        */

        //Passagem por referência

        function soma(&$x) {
            $x += 2;
            return $x;
        }

        $a = 3;

        echo "<p>O valor de X é ".soma($a)."</p>";
        echo "<p>O valor de A é $a</p>";
    ?>
</body>
</html>