<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores arítiméticos</title>
</head>
<body>
    <h1>Operadores aritméticos</h1>

    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $m = ($n1+$n2)/2;

        echo "<h2>Valores recebidos $n1 e $n2</h2>";
        echo "O resultado da soma entre $n1 e $n2 é igual ".($n1+$n2)."<br>";
        echo "O resultado da subtração entre $n1 e $n2 é igual a ".($n1-$n2)."<br>";
        echo "O resultado da multiplicação entre $n1 e $n2 é igual a ".($n1*$n2)."<br>";
        echo "O resultado da divisão entre $n1 e $n2 é igual a ".($n1/$n2)."<br>";
        echo "O resultado do módulo entre $n1 e $n2 é igual a ".($n1%$n2)."<br>";
        echo "A média entre $n1 e $n2 é igual a $m"
    ?>
</body>
</html>