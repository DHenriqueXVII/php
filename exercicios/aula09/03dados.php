<?php
    $nota1 = isset($_GET["nota1"]) ? $_GET["nota1"] : 0;
    $nota2 = isset($_GET["nota2"]) ? $_GET["nota2"] : 0;
    $media = ($nota1 + $nota2) / 2;

    echo "A média entre $nota1 e $nota2 é igual a " . number_format($media, 1);

    if ($media < 5) {
        $sit = "REPROVADO";
    } elseif ($media >= 5 && $media < 7) {
        $sit = "RECUPERAÇÃO";
    } else {
        $sit = "APROVADO";
    }

    echo "<br>Situação do aluno: $sit";
?>

<br><a href="ex003-estrutura-if.html" target="_self" rel="prev">Voltar</a>