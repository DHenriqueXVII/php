<?php
    $anoNascimento = isset($_POST["ano-nascimento"]) ? $_POST["ano-nascimento"] : 0;
    $idade = date("Y") - $anoNascimento;

    if ($idade >= 18) {
        $votar = "Pode votar";
        $dirigir = "Pode dirigir";
    } else {
        $votar = "Não pode votar";
        $dirigir = "Não pode dirigir";
    }

    echo "$idade anos $votar $dirigir";
?>

<br><a href="ex001-estrutura-if.html" target="_self" rel="prev">Voltar</a>