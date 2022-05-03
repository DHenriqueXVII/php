<?php
    $inicio = isset($_GET["inicio"]) ? $_GET["inicio"] : 0;
    $fim = isset($_GET["fim"]) ? $_GET["fim"] : 0;
    $passo = isset($_GET["passo"]) ? $_GET["passo"] : 0;
    $contador = $inicio;

    if ($inicio < $fim) {
        while ($contador <= $fim) {
            echo $contador;
            $contador += $passo;
        }
    } elseif ($inicio > $fim) {
        while ($contador >= $fim) {
            echo $contador;
            $contador -= $passo;
        }
    } else {
        echo $inicio;
    }
?>