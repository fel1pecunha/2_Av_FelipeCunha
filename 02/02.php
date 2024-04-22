<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Faixa Etária</title>
</head>
<body>
<div>
    <h2>Resultado - Faixa Etária</h2>
    <?php
        $nome = $_GET["nome"];
        $ano_nascimento = $_GET["ano_nascimento"];
        $idade = date("Y")-$ano_nascimento;
        
        if ($idade <12) {
            $status = " uma CRIANÇA <span>&#x1F6B8</span>";
        }
            elseif ($idade <= 14) {
                $status = " ADOLESCENTE <span>&#x1F467 &#x1F466</span>";
            }
                elseif ($idade <=18) {
                    $status = " JOVEM <span>&#x1F9D1 &#x1F9B0</span>";
                }
                    elseif ($idade <=64) {
                        $status = " ADULTO <span>&#x1F471 &#x1F471</span>";
                    }
                        else {
                            $status = " IDOSO(A) <span>&#x1F475 &#x1F474</span>";
                        }
        
        echo "<h2>Olá, $nome, Você tem $idade ano(s), você é $status.<h2>";
    ?>

    <h5>Tabela de verificação:<br/>
    Criança (0 a 11 anos)<br/>
    Adolescente (12 a 14 anos)<br/>
    Jovem (15 a 18 anos)<br/>
    Adulto (19 a 64 anos)<br/>
    Idoso (+ 65 anos)</h5>

    <br/>

    <a href="02.html"><button>Voltar</button></a>   
</div>    
</body>
</html>