<?php
    $numero = isset($_GET["numero"]) ? $_GET["numero"] : 1; 
    for ($contador = 1; $contador <= 10; $contador ++) {
        echo "$numero x $contador = ".($numero * $contador)."<br>";
    }
?>

<a href="javascript:history.go(-1)">Voltar</a>