<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores lógicos</title>
</head>
<body>
    <h1>Operadores lógicos</h1>

    <?php
        $anoNascimento = $_GET["an"];
        $idade = 2022 - $anoNascimento;

        echo "Idade: $idade anos";

        $voto = $idade >= 18 && $idade < 65 ? "obrigatório" : "não obrigatório";

        echo "<br>Voto $voto";
    ?>
</body>
</html>