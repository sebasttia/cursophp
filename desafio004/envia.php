<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
    <link rel="stylesheet" href="style.css">
    <style>
      
        a {
            display: block;
            font-size: 1em;
            width: 100%;
            height: 40px;
            background-color: blue;
            color: white;
            border: none;
            border-radius: 5px;
            text-align: center;
            cursor: pointer;
        }
    </style>
</head>
<body>
        <main>
        <h1>Conversor de Moedas</h1>
            <?php
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        
            $dados = json_decode(file_get_contents($url), true);
        
            //var_dump($dados);
    
            $cotaçao = $dados["value"][0]["cotacaoCompra"];

            $r = $_GET["r"] ?? 0;

            $dollar = $r / $cotaçao;

            $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

            echo "<p>Seus " . numfmt_format_currency($padrao, $r, "BRL") . " equivalem a <strong>" .  numfmt_format_currency($padrao,$dollar, "USD") . "</strong><br> cotação de hoje é<strong> R$ $cotaçao</strong></p>";
            ?>
        <button onclick="javascript:history.go(-1)">⬅ Voltar</button>
        </main>
</body>
</html>