<?php
    $numero = isset($_GET["numero"]) ? $_GET["numero"] : 0;
    $contador = $numero;
    $fatorial = 1;

    do {
        $fatorial *= $contador;
        $contador --;
    } while ($contador >= 1);

    echo $fatorial;
?>

<a href="javascript:history.go(-1)">Voltar</a>