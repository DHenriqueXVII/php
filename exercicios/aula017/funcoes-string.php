<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções string</title>
</head>
<body>
    <h1>Funções string</h1>

    <?php
        $nome = "Diego Henrique";
        echo "O seu nome é ".strtolower($nome);
        echo "<br>O seu nome é ".strtoupper($nome);
        $nome = "diego henrique";
        echo "<br>Seu nome é ".ucfirst($nome);
        echo "<br>Seu nome é ".ucwords($nome);
        echo "<br>Seu nome ao contrário é ".strrev($nome);

        $frase = "Estou aprendendo PHP";
        echo "<br>$frase";
        echo "<br>A string foi encontrada na posição ".strpos($frase, "PHP");
        $frase = "Estou aprendendo PHP";
        echo "<br>$frase";
        echo "<br>A string foi encontrada na posição ".stripos($frase, "php"); //encontra a palavra mesmo que ela esteja em letras minúsculas

        $frase = "Estou aprendendo PHP no Curso em Vídeo de PHP";
        $tot = substr_count($frase, "PHP");
        echo "<br>A palavra PHP foi encontrada $tot vezes";

        $site = "Curso em Vídeo";
        $sub = substr($site, 0, 5);
        echo "<br>".$sub;

        $nome = "Diego";
        $novo = str_pad($nome, 30,"_", STR_PAD_BOTH);
        echo "<br>$novo é lindo<br>";

        $texto = "Olá, mundo!";
        echo str_repeat($texto, 5);

        $frase = "<br>Gosto de estudar Matemática!";
        echo $frase;
        $novaFrase = str_replace("Matemática", "PHP", $frase);
        echo $novaFrase;
        $novaFrase = str_ireplace("matemática", "PHP", $frase); //str_ireplace substitui a palavra mesmo que ela esteja em letras minúsculas
        echo $novaFrase;
    ?>
</body>
</html>