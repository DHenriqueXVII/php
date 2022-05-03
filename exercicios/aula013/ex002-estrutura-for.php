<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura for</title>
</head>
<body>
    <h1>Estrutura for</h1>

    <form method="get" action="ex002.php">
        <label for="numero">Número:</label>
        <select name="numero" id="numero">
            <?php
                for ($contador = 1; $contador <= 10; $contador ++) {
                    echo "<option value='$contador'>$contador</option>";
                }
            ?>
        </select>

        <input type="submit" value="Tabuada">
    </form>
</body>
</html>