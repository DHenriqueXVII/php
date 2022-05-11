<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetores e matrizes</title>
</head>
<body>
    <h1>Vetores e matrizes</h1>
    
    <pre>
        <?php
            $vetor = array(3, 7, 4, 2, 8);

            arsort($vetor);

            print_r($vetor);

            foreach($vetor as $valor) {
                echo $valor;
            }

            echo "<br>";

            ksort($vetor);

            print_r($vetor);

            foreach($vetor as $valor) {
                echo $valor;
            }

            echo "<br>";

            krsort($vetor);

            print_r($vetor);

            foreach($vetor as $valor) {
                echo $valor;
            }

            echo "<br>";

            sort($vetor);

            print_r($vetor);

            foreach($vetor as $valor) {
                echo $valor;
            }

            echo "<br>";

            rsort($vetor);

            print_r($vetor);

            foreach($vetor as $valor) {
                echo $valor;
            }

            echo "<br>";
            
            asort($vetor);

            print_r($vetor);

            foreach($vetor as $valor) {
                echo $valor;
            }

            echo "<br>";
        ?>
    </pre>
</body>
</html>