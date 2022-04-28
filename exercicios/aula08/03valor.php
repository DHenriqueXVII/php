<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        $texto = isset($_GET["texto"]) ? $_GET["texto"] : "Texto genérico";
        $tamanhoFonte = isset($_GET["tamanho-fonte"]) ? $_GET["tamanho-fonte"] : "12pt";
        $corFonte = isset($_GET["cor-fonte"]) ? $_GET["cor-fonte"] : "#000000"; 
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #texto {
            font-size: <?php echo $tamanhoFonte;?>;
            color: <?php echo $corFonte?>;
        }
    </style>
</head>
<body>
    <?php
        echo "<span id='texto'>$texto</span>";
    ?>

    <br><a href="ex003-formularios.html" target="_self" rel="prev">Voltar</a>
</body>
</html>