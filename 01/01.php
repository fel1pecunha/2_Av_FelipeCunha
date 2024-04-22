<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão Cambial</title>
</head>
<body>
<div>
    <h2>Resultado da Conversão</h2>
    <?php
    $real = $_GET["real"];
    $cotacao = 5.19; // Cotação do dólar de acordo com UOL
    $dolar = $real / $cotacao;
        echo "Você informou R$ " . number_format($real, 2, ',', '.') . ".<br>";
        echo "Esse valor em Dólar é U$ " . number_format($dolar, 2, ',', '.') . "."."<br>";   
        echo "A cotação do Dólar hoje é: R$" . number_format($cotacao, 2, ',', '.') . "."."<br>";
    ?>
    <br>
    <a href="01.html"><button>Voltar</button></a>
</div>    
</body>
</html>