<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis</title>
</head>
<body>
    <h1>Variáveis em PHP</h1>

    <?php
        $nome = "Diego";
        $idade = "18";
        $salario = 1825.54;
        $casado = false;

        if ($casado == true) {
            $estadoCivil = 'você é casado';
        } else {
            $estadoCivil = 'você é solteiro';
        }

        echo "Seu nome é $nome, você tem $idade anos, seu salário é de R$ $salario e $estadoCivil <br>";
        echo $nome." tem ".$idade." anos";
    ?>
</body>
</html>