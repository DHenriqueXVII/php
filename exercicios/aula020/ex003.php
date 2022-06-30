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
        require_once 'Estudar.php';

        $acao = new Estudar;
        $acao -> materia = 'programação';
        $acao -> assunto = 'PHP POO';
        $acao -> iniciarEstudos();
    ?>
</body>
</html>