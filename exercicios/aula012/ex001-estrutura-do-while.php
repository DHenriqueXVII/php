<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura do while</title>
</head>
<body>
    <h1>Estrutura do while</h1>

    <?php
        $contador = 10;

        do {
            echo $contador."<br>";
            $contador --;
        } while($contador >= 1);
    ?>
</body>
</html>