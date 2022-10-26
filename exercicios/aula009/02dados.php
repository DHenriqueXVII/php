<?php
    $anoNascimento = isset($_POST["ano-nascimento"]) ? $_POST["ano-nascimento"] : 1900;
    $idade = date("Y") - $anoNascimento;

    if ($idade < 16) {
        $tipoVoto = "não vota";
    } elseif (($idade >= 16 && $idade < 18) || ($idade > 65)) {
        $tipoVoto = "voto opcional";
    } else {
        $tipoVoto = "voto obrigatório";
    }

    echo "$idade anos<br>$tipoVoto"
?>

<br><a href="ex002-estrutura-if.html" target="_self" rel="prev">Voltar</a>