<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores relacionais</title>
</head>
<body>
    <h1>Operadores relacionais</h1>

    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $tipo = $_GET["op"];

        echo "Valores recebidos $n1 e $n2";

        $resultado = $tipo == "s"? $n1 + $n2 : $n1 * $n2;

        echo "<br>O resultado da operação é igual $resultado";
    ?>
</body>
</html>