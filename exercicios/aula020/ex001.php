<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 - PHP POO</title>
</head>
<body>
    <?php
        require_once 'Caneta.php';

        $objeto1 = new Caneta;
        $objeto1 -> modelo = 'Bic Cristal';
        $objeto1 -> cor = 'Azul';
        $objeto1 -> ponta = 0.5;
        $objeto1 -> carga = 90;
        $objeto1 -> tampar();
        
        $objeto1 -> rabiscar();

        print_r($objeto1 -> carga);

        for ($contador = 0; $contador < 10; $contador ++) {
            $objeto1 -> rabiscar();
        }

        $objeto1 -> carregar();

        $objeto1 -> rabiscar();

        echo $objeto1 -> carga . '%';
    ?>
</body>
</html>