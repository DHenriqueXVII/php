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
        function soma(...$p) {
            //$p = func_get_args(); versão antiga
            $totp = func_num_args();
            $s = 0;

            for ($contador = 0; $contador < $totp; $contador ++) {
                $s += $p[$contador];
            }

            return $s;
        }

        $res = soma(3, 7, 2, 9, 8, 6);

        echo "A soma entre todos os valores vale $res";
    ?>
</body>
</html>