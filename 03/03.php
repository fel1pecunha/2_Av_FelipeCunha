<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Situação do Aluno</title>
</head>
<body>
<div>
    <h2>IBC CETAM</h2>
    <?php
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $nota3 = $_GET["n3"];
        $nota4 = $_GET["n4"];
        $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4; 
        
        if ($media <5) {
            $situacao = "REPROVADO! \u{1F62D}";
        }
            elseif ($media <7) {
                $situacao = "RECUPERAÇÃO! \u{1F622}";
            }
                else {
                    $situacao = "APROVADO! \u{1F929}";
                    }
        echo "<h2>Média: ". number_format($media, 2, ",")."</h2>";
        echo "<h2>Situação do aluno: $situacao</h2>";        
    ?>
        <br/><br/>
        <a href="03.html"><button>Voltar</button></a>

</div>   
</body>
</html>