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

    <form method="get" action="ex003.php">
        <label for="numero">Número:</label>
        <select name="numero" id="numero">
            <?php
                $contador = 1;
                do {
                    echo "<option value='$contador'>$contador</option>";
                    $contador ++;
                } while ($contador <= 10);
            ?>
        </select>

        <input type="submit" value="Tabuada">
    </form>
</body>
</html>