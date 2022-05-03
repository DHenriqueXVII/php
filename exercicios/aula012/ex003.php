<?php
    $numero = $_GET["numero"];
    $contador = 1;

    do {
        $tabuada = $numero * $contador;
        echo "$numero x $contador = $tabuada<br>";
        $contador ++;
    } while ($contador <= 10);
?>

<a href="javascript:history.go(-1)">Voltar</a>