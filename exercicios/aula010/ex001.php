<?php
    $numero = isset($_GET["numero"]) ? $_GET["numero"] : 0;
    $op = isset($_GET["op"]) ? $_GET["op"] : "dobro";

    switch($op) {
        case "dobro":
            $res = $numero * 2;
            break;
        case "cubo":
            $res = $numero ** 3;
            break;
        case "raizq":
            $res = number_format(sqrt($numero), 2); //$n ^ (1/2)
    }

    echo "O resultado é $res";
?>

<a href="ex001-switch-case.html" target="_self" rel="prev">Voltar</a>