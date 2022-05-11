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
        $texto1 = "Díego";
        $tamanho = mb_strlen($texto1); //mb_strlen é usado para não contar as acentuações como caracteres

        echo "$texto1 tem $tamanho caracteres";

        $texto2 = "   Diego Henrique   ";
        echo "<br>Número de caracteres sem o trim ".strlen($texto2);
        $novo = trim($texto2);
        echo "<br>Número de caracteres com o trim ".strlen($novo);
        $novo = ltrim($texto2);
        echo "<br>Número de caracteres com o ltrim ".strlen($novo);
        $novo = rtrim($texto2);
        echo "<br>Número de caracteres com o rtrim ".strlen($novo);

        $frase = "Eu vou estudar PHP";
        $palavras = str_word_count($frase, 2);
        echo "<br>";
        print_r($palavras);

        echo "<br>";
        $site = "Curso em Vídeo";
        $vetor = explode(" ", $site);
        print_r($vetor);

        echo "<br>";
        $texto3 = "Diego";
        $vetor = str_split($texto3);
        print_r($vetor);

        echo "<br>";
        $x[0] = "Curso";
        $x[1] = "em";
        $x[2] = "Vídeo";
        $texto = implode("_", $x);
        printf($texto);

        echo "<br>";
        $letra = chr(67);
        echo $letra;

        echo "<br>";
        $letra = "C";
        $cod = ord($letra);
        printf($cod);
    ?>
</body>
</html>