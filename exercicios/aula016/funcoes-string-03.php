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
        $texto = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti vel ducimus consectetur repellat cum tempora omnis! Deleniti, doloribus delectus, error ipsam alias sint fuga, et perspiciatis quidem hic ea non.";
        $res = wordwrap($texto, 5, "<br>\n", false);

        echo $res;
    ?>
</body>
</html>