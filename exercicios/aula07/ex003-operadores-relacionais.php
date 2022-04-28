<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores relacionais</title>
</head>
<body>
    <h1>Operadores relacionais</h1>

    <?php
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $nota3 = $_GET["n3"];
        $nota4 = $_GET["n4"];

        echo "<h2>Notas das unidades:</h2><ol><li>$nota1</li><li>$nota2</li><li>$nota3</li><li>$nota4</li></ol>";

        $media = ($nota1+$nota2+$nota3+$nota4)/4;

        echo "Média do aluno: ".number_format($media, 2, ',', '.');

        echo "<br>Situação do aluno: ".($media < 6 ? "Recuperação" : "Aprovado");
    ?>
</body>
</html>