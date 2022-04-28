<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de incremento e decremento</title>
</head>
<body>
    <h1>Operadores de incremento e decremento</h1>

    <?php
        $anoAtual = $_GET["ano"]; #comentário inline

        echo "Ano atual é $anoAtual e o ano anterior é ".--$anoAtual; //comentário inline

        /*
            Comentário multiline
        */
    ?>
</body>
</html>