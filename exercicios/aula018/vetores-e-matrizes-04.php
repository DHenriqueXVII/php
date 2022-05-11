<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetores e matrizes</title>
</head>
<body>
    <h1>Chaves personalizadas e chaves associativas</h1>

    <pre>
        <?php
            $vetor = array(1 => "A", 3 => "B", 6 => "C", 8 => "D");
            $vetor[] = "E";
            $vetor[11] = "F";
            unset($vetor[9]);
            print_r($vetor);

            foreach($vetor as $indice => $valor) {
                echo "O valor de $indice é $valor<br>";
            }

            $vetor = array("nome" => "Diego", "idade" => 18, "sexo" => "masculino");
            $vetor["altura"] = 1.85;
            $vetor["peso"] = 65;
            print_r($vetor);

            foreach($vetor as $indice => $valor) {
                echo "O valor de $indice é $valor<br>";
            }
        ?>
    </pre>
</body>
</html>