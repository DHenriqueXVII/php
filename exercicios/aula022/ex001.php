<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04 - PHP POO</title>
</head>
<body>
    <pre>
        <?php
            require_once 'Caneta.php';
            
            $objeto1 = new Caneta('Bic Cristal', 'Azul', 0.5);
            //$objeto1 -> setModelo('Bic Cristal');
            //$objeto1 -> setPonta(0.5);

            print "<p>Eu tenho uma caneta {$objeto1 -> getModelo()} de ponta {$objeto1 -> getPonta()} na cor {$objeto1 -> getCor()}</p>";

            $objeto2 = new Caneta('Bic Cristal','Vermelha', 1.0);
            //$objeto2 -> setModelo('Bic Cristal');
            //$objeto2 -> setPonta(0.5);

            print "<p>Eu tenho uma caneta {$objeto2 -> getModelo()} de ponta {$objeto2 -> getPonta()} na cor {$objeto2 -> getCor()}</p>"
        ?>
    </pre>
</body>
</html>