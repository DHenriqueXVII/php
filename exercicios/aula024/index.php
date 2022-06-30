<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto controle</title>
</head>
<body>
    <h1>Projeto controle</h1>

    <?php
        require_once 'Controle.php';

        $objeto = new Controle;

        $objeto -> ligar();
        $objeto -> play();
        $objeto -> maisVolume();
        $objeto -> abrirMenu();
    ?>
</body>
</html>