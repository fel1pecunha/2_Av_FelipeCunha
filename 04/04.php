<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
</head>
<body>
<div>
    <h2>Cadastro finalizado.</h2>
    <?php
    $nome = $_GET["n1"];
    $data_nasc = $_GET["n2"];
    $sexo = $_GET["n3"];
    $estado = $_GET["n4"];
    $profissao = $_GET["n5"];
    $email = $_GET["n6"];

    $ano_atual = date("Y");
    $ano_nascimento = date("Y", strtotime($data_nasc));
    $idade = $ano_atual - $ano_nascimento;

    echo $nome;
    echo "</br>".$idade;
    echo "</br>".$profissao;
    
    ?>

    <br/>

    <button><a href="04.html">Voltar</a></button>
</div>    
</body>
</html>