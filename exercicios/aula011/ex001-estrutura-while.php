<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura while</title>
</head>
<body>
    <h1>Estrutura while</h1>

    <?php
        $contador = 10;

        echo "Início";

        while ($contador >= 1) {
            echo "<p>$contador</p>";
            
            $contador --;
        }

        echo "Fim";
    ?>
</body>
</html>