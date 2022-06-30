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
        require_once 'Notebook.php';

        $aparelho1 = new Notebook;
        $aparelho1 -> fabricante = 'Positivo';
        $aparelho1 -> bateria = 50;
        $aparelho1 -> ligar();

        print_r($aparelho1);

        $aparelho1 -> ligar();

        print_r($aparelho1);

        $aparelho1 -> carregar();

        print_r($aparelho1);

        $aparelho1 -> ligar();

        print_r($aparelho1);
    ?>
</body>
</html>