<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>

<?php
    $estado = isset($_GET["estado"]) ? $_GET["estado"] : 0;

    switch ($estado) {
        case "AC":
        case "AM":
        case "AP":
        case "PA":
        case "RO":
        case "RR":
        case "TO":
            $regiao = "Norte";
            break;
        case "AL":
        case "BA":
        case "CE":
        case "MA":
        case "PB":
        case "PE":
        case "PI":
        case "RN":
        case "SE":
            $regiao = "Nordeste";
            break;
        case "DF":
        case "GO":
        case "MS":
        case "MT":
            $regiao = "Centro-Oeste";
            break;
        case "ES":
        case "MG":
        case "RJ":
        case "SP":
            $regiao = "Sudeste";
            break;
        case "PR":
        case "SC":
        case "RS":
            $regiao = "Sul";
            break;
        default:
            $regiao = "Região inválida";
    }

    echo "Você mora na região <span id='regiao'>$regiao</span>";
?>

<a href="javascript:history.go(-1)">Voltar</a>