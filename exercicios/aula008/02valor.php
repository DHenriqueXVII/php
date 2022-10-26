<?php
    $nome = isset($_POST["nome"]) ? $_POST["nome"] : "Não informado";
    $anoNascimento = isset($_POST["ano-nascimento"]) ? $_POST["ano-nascimento"] : 0;
    $idade = date("Y") - $anoNascimento;
    $sexo = isset($_POST["sexo"]) ? $_POST["sexo"] : "Sem sexo";

    echo "$nome tem $idade anos e é do sexo $sexo";
?>

<br><a href="ex002-formularios.html" target="_self" rel="prev">Voltar</a>