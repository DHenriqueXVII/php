<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis variantes</title>
</head>
<body>
    <h1>Variáveis variantes</h1>

    <?php
        $site = "Cursoemvideo";
        $$site = "Curso de PHP";

        echo "O conteúdo da variável <strong>site</strong> é $site";
        echo "<br>O conteúdo da variável <strong>criada</strong> é $Cursoemvideo";
    ?>
</body>
</html>