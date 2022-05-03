<?php
    $numero = isset($_GET["numero"]) ? $_GET["numero"] : 1;
    $multiplos = "";
    $totalMultiplos = 0;

    for ($contador = 1; $contador <= $numero; $contador ++) {
        if ($numero % $contador == 0) {
            $multiplos .= $contador;
            $totalMultiplos += 1;
        }
        $primo = $totalMultiplos <= 2 ? "$numero é um número primo" : "$numero não é um número primo";
    }

    echo "Mútiplos: $multiplos<br>Total de múltiplos: $totalMultiplos<br>$primo";
?>

<br><a href="javascript:history.go(-1)">Voltar</a>