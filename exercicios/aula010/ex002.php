<?php
    $dia = isset($_POST["dia"]) ? $_POST["dia"] : 0;

    switch ($dia) {
        case 1:
        case 7:
            $res = "Hoje não tem aula";
            break;
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
            $res = "Dia de ir para a escola";
            break;
        default:
            $res = "Data inválida";
    }

    echo $res;
?>

<a href="javascript:history.go(-1)" target="_self" rel="prev">Voltar</a>