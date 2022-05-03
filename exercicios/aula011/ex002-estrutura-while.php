<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura while</title>
    <style>
        #caixa {
            display: flex;
            flex-direction: column;
            gap: 20px;
            width: 300px;
        }
    </style>
</head>
<body>
    <h1>Estrutura while</h1>

    <form method="get" action="ex002-estrutura-while.php">
        <?php
            $input = "";
            $contador = 1;

            while ($contador <= 5) {
                $input .= "<label for='v$contador'>Valor $contador:</label><input type='number' name='v$contador' id='texto'>";
                $contador ++;
            }
            
            echo "<div id='caixa'>$input</div>";
        ?>
    </form>

    <input type="submit" value="Enviar">
</body>
</html>