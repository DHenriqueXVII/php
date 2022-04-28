<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções aritméticas</title>
</head>
<body>
    <h1>Funções aritméticas</h1>

    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];

        echo "<h2>Valores recebidos $n1 e $n2</h2>";

        echo "O valor absoluto de $n1 é ".abs($n1);
        echo "<br> O valor absoluto de $n2 é ".abs($n2);
        echo "<br> O valor de $n1 <sup>$n2</sup> é ".pow($n1, $n2);
        echo "<br> A raiz de $n1 é ".sqrt($n1);
        echo "<br> O valor arredondado de $n2 é ".round($n2);
        echo "<br> O valor arredondado de $n2 é ".ceil($n2);
        echo "<br> O valor arredondado de $n2 é ".floor($n2);
        echo "<br> O valor inteiro de $n2 é ".intval($n2);
        echo "<br> O valor de $n1 em moeda é R$".number_format($n1, 2, ",", ".")
    ?>
</body>
</html>