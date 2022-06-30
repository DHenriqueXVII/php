<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 03 - PHP POO</title>
</head>
<body>
    <pre>
        <?php
            require_once 'Caneta.php';
            $objeto1 = new Caneta;
            $objeto1 -> modelo = 'Bic Cristal';
            $objeto1 -> cor = 'Azul';
            //$objeto1 -> ponta = 0.5;
            //$objeto1 -> carga = 90;
            $objeto1 -> destampar();
        
            $objeto1 -> rabiscar();

            //echo 'Carga ' . $objeto1 -> carga . '%';

            var_dump($objeto1)
        ?>
    </pre>
</body>
</html>